<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BooksPhoria extends Model
{
    use HasFactory;
    protected $table = "books_phorias";

    protected $primaryKey = "id_buku";
    public $incrementing = true;              
    protected $keyType = 'int'; 
    protected $fillable = [
        "gambarBuku","namaBuku","deskripsiBuku","penulisBuku","penerbitBuku","tahunTerbit","kategoriBuku","stokBuku","stokTersedia",
    ];
}
