<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Myloans;
use Illuminate\Support\Carbon;

class MyloansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Myloans::create([
                'user_id' => 1,
                'id_buku' => 1,
                'gambarBuku' => '1984.jpg', 
                'namaBuku' => '1984',    
                'kodePeminjaman' => 'PJ-SDRE',
                'namaPengambil' => 'Test Seeder',
                'noHp' => '081234567890',
                'tanggalPeminjaman' => Carbon::now(),
                'batasPengembalian' => Carbon::now()->addDays(7)->format('Y-m-d H:i:s'),
                'tanggalPengembalian' => now(),
                'status' => 'Pending',
        ]);

        
    }
}
