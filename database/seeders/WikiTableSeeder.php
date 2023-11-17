<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class WikiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('wiki') -> insert
        ([
            'nama_wiki' => 'Peraturan MPPA 2023/2023',
            'deskripsi_wiki' => 'Peraturan MPPA 2023/2023',
            'isi_wiki' => 'Peraturan MPPA 2023/2023',
            'tanggal_posting' => Carbon::create('2023', '19', '10'),
            'gambar_wiki' => 'Peraturan MPPA 2023/2023',
            'url_wiki' => 'Peraturan MPPA 2023/2023',
        ]);
    }
}
