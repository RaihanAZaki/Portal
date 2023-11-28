<?php

namespace App\Imports;

use App\Models\Karyawan;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Session;

class KaryawanImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if (!isset($row['name']) || !isset($row['date']) || !isset($row['divisi']) || !isset($row['birth']) || !isset($row['gender'])) {
            // Handle missing data
            return null;
        }

        // Parse the 'date' and 'birth' columns
        $tanggalJoin = Carbon::createFromFormat('d/m/Y', $row['date']);
        $ulangTahun = Carbon::createFromFormat('d/m/Y', $row['birth']);

        $existingRecord = Karyawan::where('nama_karyawan', $row['name'])->first();

        if ($existingRecord) {
            Session::flash('duplicate_message', 'Terdapat Duplikasi Data');
            return null;
        }

        return new Karyawan([
            'nama_karyawan' => $row['name'],
            'tanggal_join' => $tanggalJoin,
            'divisi_karyawan' => $row['divisi'],
            'ulang_tahun' => $ulangTahun,
            'jenis_kelamin' => $row['gender'],
        ]);
    }
}
