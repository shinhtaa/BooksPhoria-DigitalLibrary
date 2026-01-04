<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{

    public function index(Request $request) 
    {
        $search = $request->keyword;
        $categories = Categories::when($search, function($query, $search) {
            return $query->where("namaKategori","like","%$search%");
        })->orderBy("namaKategori","asc")->simplePaginate(10);

        return view("categories.index", compact("categories"));
    }

    public function create()
    {
        return view("categories.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            "namaKategori"=> "required",
        ]);

        Categories::create([
            'namaKategori'=>$request->namaKategori,
        ]);

        return redirect()->intended('/categories')->with("success","Kategori berhasil ditambahkan!");
    }

    public function edit($id_kategori)
    {
        $categories = Categories::findOrFail($id_kategori);
        
        return view('categories.edit', [
            'categories' => $categories,
        ]);
    }

    public function update(Request $request, $id_kategori)
    {
        $categories = Categories::findOrFail($id_kategori);

        $data = $request->validate([
            "namaKategori" => "required",
        ]);

        $categories->update($data);
    
        return redirect()->route('categories.index')->with('success', 'Kategori berhasil diupdate');
    }

    public function destroy($id_kategori)
    {
        $categories = Categories::findOrFail($id_kategori);

        $categories->delete();

        return redirect()->route('categories.index')->with('success','Kategori berhasil dihapus!');
    }
}
