<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class AnnouncementTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('announcement') -> insert
        ([
            'nama_announcement' => 'Peraturan MPPA 2023/2023',
            'deskripsi_announcement' => 'Peraturan ini berlaku pada periode 2023/2024',
            'isi_announcement' => 'Peraturan ini dibuat supaya karyawan dapat bekerja secara baik dan tertib, apabila melanggar peraturan ini maka akan dikenakan hukuman yang telah disepakati bersama. Terima kasih',
            'tanggal_posting' => Carbon::create('2023', '19', '10'),
        ],
        [
            'nama_announcement' => 'Peraturan MPPA 2024/2025',
            'deskripsi_announcement' => 'Peraturan ini berlaku pada periode 2024/2025',
            'isi_announcement' => 'Peraturan ini dibuat supaya karyawan dapat bekerja secara baik dan tertib, apabila melanggar peraturan ini maka akan dikenakan hukuman yang telah disepakati bersama. Terima kasih',
            'tanggal_posting' => Carbon::create('2023', '19', '10'),
        ]);
    }
}
