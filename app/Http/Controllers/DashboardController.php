<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;
use App\Models\Article;
use App\Models\Banner;
use App\Models\Menu;
use App\Models\Karyawan;
use App\Models\Wiki;
use App\Models\Gallery;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function DataAnnouncement() {

        return view('announcement', [
            'announcement' => Announcement::all(),
            'banner' => Banner::all(),
        ]);
    }

    public function DataArticle() {

        return view('article', [
            'article' => Article::all(),
        ]);
    }

    public function DataWiki() {

        return view('wiki', [
            'wiki' => Wiki::all()
        ]);
    }

    public function DataGallery() {

        return view('gallery', [
            'gallery' => Gallery::all()
        ]);
    }

    public function DataDashboard() {

        $currentDate = Carbon::now();

        $karyawan = Karyawan::whereDay('tanggal_join', $currentDate->day)
        ->whereMonth('tanggal_join', $currentDate->month)
        ->get();

        $karyawanUlangTahun = Karyawan::whereDay('ulang_tahun', $currentDate->day)
        ->whereMonth('ulang_tahun', $currentDate->month)
        ->get();

        return view('dashboard', [
            'announcement' => Announcement::all(),
            'menu' => Menu::all(),
            'karyawan' => $karyawan,
            'karyawanUlangTahun' => $karyawanUlangTahun,
            'banner' => Banner::all()
            
        ]);
    }
}
