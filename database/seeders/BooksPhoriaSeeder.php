<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BooksPhoria;

class BooksPhoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        BooksPhoria::create([
            'gambarBuku' => 'lautbercerita.jpg',
            'namaBuku' => 'Laut Bercerita',
            'deskripsiBuku' => 'Novel berlatar sejarah Orde Baru yang mengisahkan penculikan aktivis mahasiswa, perjuangan keluarga korban, serta pencarian kebenaran atas tragedi kemanusiaan.',
            'penulisBuku' => 'Leila S. Chudori',
            'penerbitBuku' => 'Kepustakaan Populer Gramedia',
            'tahunTerbit' => 2017,
            'kategoriBuku' => '2',
            'stokBuku' => 10,
            'stokTersedia' => 10,
        ]);

        BooksPhoria::create([
            'gambarBuku' => 'bumimanusia.jpg',
            'namaBuku' => 'Bumi Manusia',
            'deskripsiBuku' => 'Kisah Minke dalam menghadapi ketidakadilan kolonial, diskriminasi ras, dan perjuangan mempertahankan martabat di Hindia Belanda.',
            'penulisBuku' => 'Pramoedya Ananta Toer',
            'penerbitBuku' => 'Hasta Mitra',
            'tahunTerbit' => 1980,
            'kategoriBuku' => '2',
            'stokBuku' => 8,
            'stokTersedia' => 8,
        ]);

        BooksPhoria::create([
            'gambarBuku' => 'perahukertas.jpg',
            'namaBuku' => 'Perahu Kertas',
            'deskripsiBuku' => 'Cerita tentang persahabatan, cinta, dan pencarian jati diri melalui mimpi serta pilihan hidup.',
            'penulisBuku' => 'Dee Lestari',
            'penerbitBuku' => 'Bentang Pustaka',
            'tahunTerbit' => 2009,
            'kategoriBuku' => '1',
            'stokBuku' => 12,
            'stokTersedia' => 12,
            
        ]);

        BooksPhoria::create([
            'gambarBuku' => 'negeri5menara.jpg',
            'namaBuku' => 'Negeri 5 Menara',
            'deskripsiBuku' => 'Perjalanan enam santri yang ditempa disiplin, persahabatan, dan mimpi besar untuk menaklukkan dunia.',
            'penulisBuku' => 'Ahmad Fuadi',
            'penerbitBuku' => 'Gramedia Pustaka Utama',
            'tahunTerbit' => 2009,
            'kategoriBuku' => '3',
            'stokBuku' => 15,
            'stokTersedia' => 15,
        ]);

        BooksPhoria::create([
            'gambarBuku' => 'laskarpelangi.jpg',
            'namaBuku' => 'Laskar Pelangi',
            'deskripsiBuku' => 'Kisah perjuangan anak-anak Belitung dalam meraih pendidikan di tengah keterbatasan dan semangat persahabatan.',
            'penulisBuku' => 'Andrea Hirata',
            'penerbitBuku' => 'Bentang Pustaka',
            'tahunTerbit' => 2005,
            'kategoriBuku' => '5',
            'stokBuku' => 20,
            'stokTersedia' => 20,
        ]);

        BooksPhoria::create([
            'gambarBuku' => 'filosofikopi.jpg',
            'namaBuku' => 'Filosofi Kopi',
            'deskripsiBuku' => 'Kumpulan cerita tentang kehidupan, idealisme, dan makna hidup yang tersaji melalui filosofi kopi.',
            'penulisBuku' => 'Dee Lestari',
            'penerbitBuku' => 'Bentang Pustaka',
            'tahunTerbit' => 2006,
            'kategoriBuku' => '5',
            'stokBuku' => 10,
            'stokTersedia' => 10,
        ]);

        BooksPhoria::create([
            'gambarBuku' => 'ayatayatcinta.jpg',
            'namaBuku' => 'Ayat-Ayat Cinta',
            'deskripsiBuku' => 'Kisah cinta dan nilai keislaman dalam perjalanan seorang mahasiswa Indonesia di Mesir.',
            'penulisBuku' => 'Habiburrahman El Shirazy',
            'penerbitBuku' => 'Republika',
            'tahunTerbit' => 2004,
            'kategoriBuku' => '1',
            'stokBuku' => 14,
            'stokTersedia' => 14,
        ]);

        BooksPhoria::create([
            'gambarBuku' => 'rectoverso.jpg',
            'namaBuku' => 'Rectoverso',
            'deskripsiBuku' => 'Kumpulan cerita pendek tentang cinta dari berbagai sudut pandang perasaan dan emosi.',
            'penulisBuku' => 'Dee Lestari',
            'penerbitBuku' => 'Bentang Pustaka',
            'tahunTerbit' => 2008,
            'kategoriBuku' => '1',
            'stokBuku' => 9,
            'stokTersedia' => 9,
        ]);

        BooksPhoria::create([
            'gambarBuku' => 'cantikituluka.jpg',
            'namaBuku' => 'Cantik Itu Luka',
            'deskripsiBuku' => 'Novel epik yang memadukan sejarah, tragedi keluarga, dan realisme magis dalam perjalanan sebuah generasi.',
            'penulisBuku' => 'Eka Kurniawan',
            'penerbitBuku' => 'Gramedia Pustaka Utama',
            'tahunTerbit' => 2002,
            'kategoriBuku' => '2',
            'stokBuku' => 7,
            'stokTersedia' => 7,
        ]);

        BooksPhoria::create([
            'gambarBuku' => 'hujan.jpg',
            'namaBuku' => 'Hujan',
            'deskripsiBuku' => 'Kisah cinta, kehilangan, dan harapan di masa depan dengan sentuhan fiksi ilmiah.',
            'penulisBuku' => 'Tere Liye',
            'penerbitBuku' => 'Gramedia Pustaka Utama',
            'tahunTerbit' => 2016,
            'kategoriBuku' => '9',
            'stokBuku' => 11,
            'stokTersedia' => 11,
        ]);

        BooksPhoria::create([
            'gambarBuku' => 'senja.jpg',
            'namaBuku' => 'Senja Bersama Rosie',
            'deskripsiBuku' => 'Kisah cinta, persahabatan, dan kehilangan yang menguji makna ketulusan serta pengorbanan.',
            'penulisBuku' => 'Tere Liye',
            'penerbitBuku' => 'Gramedia Pustaka Utama',
            'tahunTerbit' => 2011,
            'kategoriBuku' => '1',
            'stokBuku' => 10,
            'stokTersedia' => 10,
        ]);

        BooksPhoria::create([
            'gambarBuku' => 'dilan.jpg',
            'namaBuku' => 'Dilan: Dia Adalah Dilanku Tahun 1990',
            'deskripsiBuku' => 'Cerita romansa remaja tentang pertemuan Milea dan Dilan yang sederhana namun berkesan.',
            'penulisBuku' => 'Pidi Baiq',
            'penerbitBuku' => 'Pastel Books',
            'tahunTerbit' => 2014,
            'kategoriBuku' => '1',
            'stokBuku' => 14,
            'stokTersedia' => 14,
        ]);

        BooksPhoria::create([
            'gambarBuku' => 'supernova.jpeg',
            'namaBuku' => 'Supernova: Ksatria, Puteri, dan Bintang Jatuh',
            'deskripsiBuku' => 'Novel fiksi ilmiah yang memadukan filsafat, sains, dan pencarian makna kehidupan.',
            'penulisBuku' => 'Dee Lestari',
            'penerbitBuku' => 'Truedee Pustaka Sejati',
            'tahunTerbit' => 2001,
            'kategoriBuku' => '9',
            'stokBuku' => 9,
            'stokTersedia' => 9,
        ]);

        BooksPhoria::create([
            'gambarBuku' => 'ronggeng.jpg',
            'namaBuku' => 'Ronggeng Dukuh Paruk',
            'deskripsiBuku' => 'Novel berlatar pedesaan yang mengangkat konflik tradisi, cinta, dan tragedi sosial.',
            'penulisBuku' => 'Ahmad Tohari',
            'penerbitBuku' => 'Gramedia Pustaka Utama',
            'tahunTerbit' => 1982,
            'kategoriBuku' => '2',
            'stokBuku' => 7,
            'stokTersedia' => 7,
        ]);

        BooksPhoria::create([
            'gambarBuku' => 'hobbit.jpg',
            'namaBuku' => 'The Hobbit',
            'deskripsiBuku' => 'Petualangan Bilbo Baggins dalam perjalanan berbahaya untuk menemukan harta dan keberanian.',
            'penulisBuku' => 'J.R.R. Tolkien',
            'penerbitBuku' => 'George Allen & Unwin',
            'tahunTerbit' => 1937,
            'kategoriBuku' => '3',
            'stokBuku' => 6,
            'stokTersedia' => 6,
        ]);

        BooksPhoria::create([
            'gambarBuku' => 'harrypotter.jpg',
            'namaBuku' => 'Harry Potter and the Philosopher’s Stone',
            'deskripsiBuku' => 'Kisah awal petualangan Harry Potter dalam menemukan dunia sihir dan jati dirinya.',
            'penulisBuku' => 'J.K. Rowling',
            'penerbitBuku' => 'Bloomsbury',
            'tahunTerbit' => 1997,
            'kategoriBuku' => '10',
            'stokBuku' => 12,
            'stokTersedia' => 12,
        ]);

        BooksPhoria::create([
            'gambarBuku' => 'percyjackson.jpg',
            'namaBuku' => 'Percy Jackson: The Lightning Thief',
            'deskripsiBuku' => 'Petualangan remaja setengah dewa dalam menyelamatkan dunia para dewa Yunani.',
            'penulisBuku' => 'Rick Riordan',
            'penerbitBuku' => 'Disney Hyperion',
            'tahunTerbit' => 2005,
            'kategoriBuku' => '3',
            'stokBuku' => 11,
            'stokTersedia' => 11,
        ]);

        BooksPhoria::create([
            'gambarBuku' => 'animalfarm.jpg',
            'namaBuku' => 'Animal Farm',
            'deskripsiBuku' => 'Fabel politik yang menyindir kekuasaan, revolusi, dan pengkhianatan terhadap idealisme.',
            'penulisBuku' => 'George Orwell',
            'penerbitBuku' => 'Secker & Warburg',
            'tahunTerbit' => 1945,
            'kategoriBuku' => '2',
            'stokBuku' => 8,
            'stokTersedia' => 8,
        ]);

        BooksPhoria::create([
            'gambarBuku' => 'thealchemist.avif',
            'namaBuku' => 'The Alchemist',
            'deskripsiBuku' => 'Perjalanan seorang gembala dalam menemukan mimpi, takdir, dan makna kehidupan.',
            'penulisBuku' => 'Paulo Coelho',
            'penerbitBuku' => 'HarperCollins',
            'tahunTerbit' => 1988,
            'kategoriBuku' => '3',
            'stokBuku' => 13,
            'stokTersedia' => 13,
        ]);

        BooksPhoria::create([
            'gambarBuku' => '1984.jpg',
            'namaBuku' => '1984',
            'deskripsiBuku' => 'Novel distopia tentang pengawasan, manipulasi, dan hilangnya kebebasan individu.',
            'penulisBuku' => 'George Orwell',
            'penerbitBuku' => 'Secker & Warburg',
            'tahunTerbit' => 1949,
            'kategoriBuku' => '7',
            'stokBuku' => 10,
            'stokTersedia' => 10,
        ]);

    }
}
