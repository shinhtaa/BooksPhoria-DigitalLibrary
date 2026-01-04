<?php

namespace App\Http\Controllers;
use App\Models\BooksPhoria;
use App\Models\Myloans;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(Request $request){

        if (auth()->user()->role !== 'user') {
            return redirect()->route('books.index')->with('error', 'Admin tidak boleh ke sini!');
        }

        $search = $request->kata;
        $books_phorias = BooksPhoria::when($search, function ($query, $search) {
            return $query->where('namaBuku','like',"%{$search}%")
            ->orWhere('deskripsiBuku','like',"%{$search}%")
            ->orWhere('kategoriBuku','like',"%{$search}%")
            ->orWhere('penulisBuku','like',"%{$search}%")
            ->orWhere('penerbitBuku','like',"%{$search}%")
            ->orWhere('tahunTerbit','like',"%{$search}%");
        })->orderBy("namaBuku","asc")->simplePaginate(10);

        return view("user.index", compact("books_phorias"));
    }

    public function store(Request $request){
        $request->validate([
            "id_buku" => "required",
            "namaPengambil" => "required",
            "noHp" => "required",
            "tanggalPeminjaman" => "required|date",
        ]);

        $book = BooksPhoria::findOrFail($request->id_buku);

        $book->decrement('stokTersedia');

        $tanggalPengambilan = \Carbon\Carbon::parse($request->tanggalPeminjaman);
        $batasPengembalian = $tanggalPengambilan->copy()->addDays(7);

        Myloans::create([
            'user_id' => Auth::id() ?? 1, 
            'id_buku' => $request->id_buku,
            'gambarBuku' => $book->gambarBuku, 
            'namaBuku' => $book->namaBuku,
            'kodePeminjaman' => 'PJ-' . strtoupper(Str::random(5)),
            'namaPengambil' => $request->namaPengambil,
            'noHp'=>$request->noHp,
            'tanggalPeminjaman' => $tanggalPengambilan, 
            'batasPengembalian' => $batasPengembalian, 
            'tanggalPengembalian' => null,
            'status' => 'Pending',
        ]);

        return redirect()->route('user.myloans')->with('success', 'Peminjaman berhasil diajukan!');
}


    public function pinjam($id){

        $book = BooksPhoria::findOrFail($id);
        return view("user.pinjam", compact('book'));
    }

    
    public function berhasil(Request $request){

        return view("user.berhasil");
    }

    public function myloans(Request $request)
    {
        $userId = auth()->user()->id_user;

        $search = $request->kata;
        $myloans = Myloans::when($search, function ($query, $search) {
            return $query->where('namaBuku','like',"%{$search}%")
            ->orWhere('namaPengambil','like',"%{$search}%");
        })->where('user_id', $userId)->latest()->simplePaginate(10);

        return view("user.myloans", compact("myloans"));

    }

    public function profile()
    {
        $user = auth()->user();

        return view("user.profile", compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $user = auth()->user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id_user . ',id_user',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:5120',
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->birthday = $request->birthday;
        $user->noHp = $request->noHp;

        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('profiles', 'public');
            $user->foto = $path;
        }

        $user->save();

        return redirect()->back()->with('success', 'Profil berhasil diperbarui!');
    }
}
