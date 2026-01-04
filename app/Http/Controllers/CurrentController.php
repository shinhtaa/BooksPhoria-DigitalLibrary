<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Myloans;
use App\Models\BooksPhoria;

class CurrentController extends Controller
{
    public function index(Request $request)
    {

        $search = $request->kata;

        Myloans::where('status', 'Dipinjam')
        ->where('batasPengembalian', '<', now())
        ->update(['status' => 'Terlambat']);

        $myloans = Myloans::with('book')
        ->when($search, function ($query, $search) {
            return $query->whereHas('book', function($q) use ($search) {
                $q->where('namaBuku', 'like', "%{$search}%");
            })
            ->orWhere('namaPengambil', 'like', "%{$search}%")
            ->orWhere('kodePeminjaman', 'like', "%{$search}%");
        })
        ->latest()
        ->paginate(10);

        return view('current.index', compact('myloans'));
    }

    public function update(Request $request, $id)
    {
        $loan = Myloans::findOrFail($id);

        if ($request->aksi == 'Dipinjam') {
            $loan->update([
                'status' => 'Dipinjam',
            ]);
            return back()->with('success', 'Status: Buku telah diambil.');
        }

        if ($request->aksi == 'Dikembalikan') {
            $loan->update([
                'status' => 'Dikembalikan',
                'tanggalPengembalian' => now()
            ]);

            $book = BooksPhoria::find($loan->id_buku);
            if($book) {
                $book->increment('stokTersedia');
            }

            return back()->with('success', 'Status: Buku telah dikembalikan.');
        }
    }

}
