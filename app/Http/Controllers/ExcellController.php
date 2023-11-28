<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;
use Maatwebsite\Excel\Excel as ExcelExcel;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Cache;
use App\Imports\KaryawanImport;
use Illuminate\Support\Facades\Session;

class ExcellController extends Controller
{
    public function index()
    {
        $karyawan = Karyawan::get();
  
        return view('admin.adm-karyawan', compact('karyawan'));
    }

    public function import() 
    {
        Excel::import(new KaryawanImport,request()->file('file'));
        
        if (Session::has('duplicate_message')) {
            $duplicateMessage = Session::get('duplicate_message');
            echo "<script>alert('$duplicateMessage');</script>";
        } else {
            // Set a success message if there were no duplicates
            Session::flash('success_message', 'Import successful!');
        }
               
        return back();
    }
}
