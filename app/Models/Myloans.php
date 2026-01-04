<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Myloans extends Model
{

    protected $table = "myloans";

    protected $primaryKey = "id_myloans";
    public $incrementing = true;              
    protected $keyType = 'int'; 
    protected $fillable = [
        "user_id","id_buku","kodePeminjaman","gambarBuku","namaBuku","namaPengambil","noHp","tanggalPeminjaman","batasPengembalian","tanggalPengembalian","status",
    ];

    public function book()
    {
        return $this->belongsTo(BooksPhoria::class, 'id_buku', 'id_buku');
    }
}
