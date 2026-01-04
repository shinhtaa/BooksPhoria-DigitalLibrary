<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('myloans', function (Blueprint $table) {
            $table->id('id_myloans');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('id_buku');
            $table->string('gambarBuku');
            $table->string('namaBuku');
            $table->string('kodePeminjaman')->unique();
            $table->string('namaPengambil');
            $table->string('noHp', 15);
            $table->datetime('tanggalPeminjaman');
            $table->string('batasPengembalian');
            $table->datetime('tanggalPengembalian')->nullable();
            $table->enum('status', ['Pending','Dipinjam','Dikembalikan','Terlambat'])->default('Pending');
            $table->timestamps();
            
            $table->foreign('user_id')->references('id_user')->on('users')->onDelete('cascade');
            $table->foreign('id_buku')->references('id_buku')->on('books_phorias')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('myloans');
    }
};
