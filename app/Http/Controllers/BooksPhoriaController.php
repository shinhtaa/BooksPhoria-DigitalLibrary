<?php

namespace App\Http\Controllers;

use App\Models\BooksPhoria;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BooksPhoriaController extends Controller
{
    
    public function index(Request $request) 
    {
        if (Auth::user()->role !== 'admin') {
            return redirect()->route('user.index')->with('error', 'Kamu bukan admin!');
        }

        $search = $request->keyword;
        $books_phorias = BooksPhoria::when($search, function ($query, $search) {
            return $query->where('namaBuku','like',"%{$search}%")
            ->orWhere('deskripsiBuku','like',"%{$search}%")
            ->orWhere('kategoriBuku','like',"%{$search}%")
            ->orWhere('penulisBuku','like',"%{$search}%")
            ->orWhere('penerbitBuku','like',"%{$search}%")
            ->orWhere('tahunTerbit','like',"%{$search}%");
        })->join('categories', 'books_phorias.kategoriBuku', '=', 'categories.id_kategori')->orderBy("namaBuku","asc")->simplePaginate(10);

        return view("layouts.books.index", compact("books_phorias"));
    }

    public function create()
    {
        $data_kategori = Categories::get();
        return view("layouts.books.create", [
            'data' => $data_kategori,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            "gambarBuku"=> "required|image|mimes:jpg,jpeg,png|max:2048",
            "namaBuku"=> "required",
            "deskripsiBuku"=> "required",
            "penulisBuku"=> "required",
            "penerbitBuku"=> "required",
            "tahunTerbit"=> "required",
            "kategoriBuku"=> "required",
            "stokBuku"=> "required",
            "stokTersedia"=> "required",
        ]);

        $gambar = $request->file('gambarBuku');
        $filename = time() .'.'. $gambar->getClientOriginalExtension();
        $gambar->move(public_path('assets/img'), $filename);

        BooksPhoria::create([
            'gambarBuku'=> $filename,
            'namaBuku'=>$request->namaBuku,
            'deskripsiBuku'=>$request->deskripsiBuku,
            'penulisBuku'=>$request->penulisBuku,
            'penerbitBuku'=>$request->penerbitBuku,
            'tahunTerbit'=>$request->tahunTerbit,
            'kategoriBuku'=>$request->kategoriBuku,
            'stokBuku'=>$request->stokBuku,
            'stokTersedia'=>$request->stokTersedia,
        ]);

        return redirect()->intended('/books')->with("success","Buku berhasil ditambahkan!");
    }

    public function edit($id_buku)
    {
        $data_kategori = Categories::get();
        $book = BooksPhoria::findOrFail($id_buku);
        
        return view('layouts.books.edit', [
            'book' => $book,
            'data'=> $data_kategori,
        ]);
    }

    public function update(Request $request, $id_buku)
    {
        $book = BooksPhoria::findOrFail($id_buku);

        $data = $request->validate([
            "gambarBuku"    => "nullable|image|mimes:jpg,jpeg,png|max:2048",
            "namaBuku"      => "required",
            "deskripsiBuku" => "required",
            "penulisBuku"   => "required",
            "penerbitBuku"  => "required",
            "tahunTerbit"   => "required",
            "kategoriBuku"  => "required",
            "stokBuku"      => "required|numeric",
            "stokTersedia"  => "required|numeric",
        ]);

        if ($request->hasFile('gambarBuku')) {

            $oldPath = public_path('assets/img/' . $book->gambarBuku);
            if (file_exists($oldPath) && is_file($oldPath)) {
                unlink($oldPath);
            }

            $gambar = $request->file('gambarBuku');
            $filename = time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('assets/img'), $filename);
            $data['gambarBuku'] = $filename;
        }

        $book->update($data);
    
        return redirect()->route('books.index')->with('success', 'Buku berhasil diupdate');
    }

    public function destroy($id_buku)
    {
        $book = BooksPhoria::findOrFail($id_buku);

        $filePath = public_path('assets/img/' . $book->gambarBuku);
        if (file_exists($filePath) && is_file($filePath)) {
        unlink($filePath);
        }

        $book->delete();

        return redirect()->route('books.index')->with('success','Buku berhasil dihapus!');
    }
}
