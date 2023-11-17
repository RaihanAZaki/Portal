<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('article') -> insert
        ([
            'nama_article' => 'MPPA SPORT',
            'deskripsi_article' => 'Kegiatan olahraga yang diselenggarakan PT. Matahari Putra Prima Tbk.',
            'isi_article' => 'Kegiatan ini diadakan untuk seluruh karyawan PT MPPA untuk menyegarkan otak dan fisik',
            'tanggal_posting' => Carbon::create('2023', '19', '10'),
            'dafpus_article' => 'Liputan6',
            'kategori_article' => 'Sport',
            'gambar_article' => 'MPPA-Sport',
            'url_article' => '',
        ]);
    }
}
