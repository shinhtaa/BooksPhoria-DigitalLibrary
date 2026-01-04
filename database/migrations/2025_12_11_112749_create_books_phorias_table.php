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
        Schema::create('books_phorias', function (Blueprint $table) {
            $table->id('id_buku');
            $table->string('gambarBuku');
            $table->string('namaBuku');
            $table->longText('deskripsiBuku');
            $table->string('penulisBuku');
            $table->string('penerbitBuku');
            $table->year('tahunTerbit');
            $table->unsignedBigInteger('kategoriBuku');
            $table->integer('stokBuku');
            $table->integer('stokTersedia');
            $table->timestamps();

            $table->foreign('kategoriBuku')->references('id_kategori')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book');
    }
};
