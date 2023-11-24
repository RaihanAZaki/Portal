<?php

namespace App\Imports;

use App\Models\Karyawan;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class KaryawanImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Karyawan([
            'nama_karyawan' => $row['name'],
            'tanggal_join' => \Carbon\Carbon::parse($row['date']),
            'divisi_karyawan' => $row['divisi'],
            'ulang_tahun' => \Carbon\Carbon::parse($row['birth']),
            'jenis_kelamin' => $row['gender'],
        ]);
    }
}
