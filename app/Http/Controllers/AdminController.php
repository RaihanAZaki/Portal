<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Import\KaryawanImport;
use App\Models\Announcement;
use App\Models\Article;
use App\Models\Menu;
use App\Models\Karyawan;
use App\Models\Wiki;
use App\Models\Gallery;
use App\Models\Banner;
use App\Models\User;
use League\Csv\Reader;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    public function DataAnnouncement() {

        return view('admin.announcement', [
            'announcement' => Announcement::all()
        ]);
    }

    public function InsertAnnouncement(Request $request)
    {
        $requestData = $request->except(['_token']);
    
        if ($request->hasFile('gambar_announcement')) {
            $file = $request->file('gambar_announcement');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('public/images', $fileName);
    
            // Simpan path yang benar ke dalam basis data
            $requestData["gambar_announcement"] = 'storage/images/' . $fileName;
        }
         // Unggah file PDF
         if ($request->hasFile('pdf_announcement')) {
            $pdfFile = $request->file('pdf_announcement');
            $pdfFileName = time() . '_' . $pdfFile->getClientOriginalName();
            $pdfPath = $pdfFile->storeAs('public/pdfs', $pdfFileName);
    
            // Simpan path PDF ke dalam basis data
            $requestData["pdf_announcement"] = 'storage/pdfs/' . $pdfFileName;
        }
    
        Announcement::create($requestData);
    
        session()->flash('success', 'Announcement added successfully');

        return redirect('/admin/announcement');
    }
    
    

    public function EditAnnouncement($id)
    {
        $Announcement = Announcement::find($id);
        return view('admin.announcement', compact('Announcement'));
    }
    

    public function UpdateAnnouncement($id, Request $request) 
    {

        $data = $request->except(['_token']);
    
        if ($request->hasFile('gambar_announcement')) {
            $file = $request->file('gambar_announcement');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('public/images', $fileName);
        
            // Simpan path yang benar ke dalam basis data
            $data["gambar_announcement"] = 'storage/images/' . $fileName;   
        }        
    
          // Unggah file PDF
          if ($request->hasFile('pdf_announcement')) {
            $pdfFile = $request->file('pdf_announcement');
            $pdfFileName = time() . '_' . $pdfFile->getClientOriginalName();
            $pdfPath = $pdfFile->storeAs('public/pdfs', $pdfFileName);
    
            // Simpan path PDF ke dalam basis data
            $data["pdf_announcement"] = 'storage/pdfs/' . $pdfFileName;
        }
        
        $Announcement = Announcement::find($id);
        $Announcement->update($data);
    
        session()->flash('success', 'Announcement updated successfully');

        return redirect('/admin/announcement');
    }

    public function DestroyAnnouncement($id) 
    {
        $Announcement = Announcement::find($id);
        $Announcement-> delete();
        return redirect('/admin/announcement');
    }

    // ARTICLE
    public function DataArticle() {

        return view('admin.article', [
            'article' => Article::all()
        ]);
    }

    public function InsertArticle(Request $request)
    {
        $data = $request->except(['_token']);
    
        // Unggah gambar article
        if ($request->hasFile('gambar_article')) {
            $imageFile = $request->file('gambar_article');
            $imageFileName = time() . '_' . $imageFile->getClientOriginalName();
            $imagePath = $imageFile->storeAs('public/images', $imageFileName);
    
            // Simpan path gambar ke dalam basis data
            $data["gambar_article"] = 'storage/images/' . $imageFileName;
        }
    
        // Unggah file PDF
        if ($request->hasFile('pdf_article')) {
            $pdfFile = $request->file('pdf_article');
            $pdfFileName = time() . '_' . $pdfFile->getClientOriginalName();
            $pdfPath = $pdfFile->storeAs('public/pdfs', $pdfFileName);
    
            // Simpan path PDF ke dalam basis data
            $data["pdf_article"] = 'storage/pdfs/' . $pdfFileName;
        }
    
        Article::create($data);
    
        session()->flash('success', 'Article added successfully');
        
        return redirect('/admin/article');
    }
    
    
    public function EditArticle($id)
    {
        $Article = Article::find($id);
        return view('admin.article', compact('article'));
    }
    

    public function UpdateArticle(Request $request, $id)
    {
        $data = $request->except(['_token']);
    
        if ($request->hasFile('gambar_article')) {
            $file = $request->file('gambar_article');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('public/images', $fileName);
        
            // Simpan path yang benar ke dalam basis data
            $data["gambar_article"] = 'storage/images/' . $fileName;   
        }        
    
          // Unggah file PDF
          if ($request->hasFile('pdf_article')) {
            $pdfFile = $request->file('pdf_article');
            $pdfFileName = time() . '_' . $pdfFile->getClientOriginalName();
            $pdfPath = $pdfFile->storeAs('public/pdfs', $pdfFileName);
    
            // Simpan path PDF ke dalam basis data
            $data["pdf_article"] = 'storage/pdfs/' . $pdfFileName;
        }
        
        $article = Article::find($id);
        $article->update($data);
    
        session()->flash('success', 'Article updated successfully');
    
        return redirect('/admin/article');
    }

    public function DestroyArticle($id) 
    {
        $Article = Article::find($id);
        $Article-> delete();
        return redirect('/admin/article');
    }

    // BANNER
    public function DataBanner() {

        return view('admin.banner', [
            'Banner' => Banner::all()
        ]);
    }

    public function InsertBanner(Request $request)
    {
        $data = $request->except(['_token']);
    
        if ($request->hasFile('gambar_banner')) {
            $file = $request->file('gambar_banner');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('public/images', $fileName);
    
            // Simpan path yang benar ke dalam basis data
            $data["gambar_banner"] = 'storage/images/' . $fileName;
        }
    
        Banner::create($data);
    
        session()->flash('success', 'Banner added successfully');
        
        return redirect('/admin/banner');
    }
    
    public function EditBanner($id)
    {
        $Banner = Banner::find($id);
        return view('admin.banner', compact('banner'));
    }
    

    public function UpdateBanner(Request $request, $id)
    {
        $data = $request->except(['_token']);
    
        if ($request->hasFile('gambar_banner')) {
            $file = $request->file('gambar_banner');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('public/images', $fileName);
        
            // Simpan path yang benar ke dalam basis data
            $data["gambar_banner"] = 'storage/images/' . $fileName;   
        }        
    
        $Banner = Banner::find($id);
        $Banner->update($data);
    
        session()->flash('success', 'Banner updated successfully');
    
        return redirect('/admin/banner');
    }

    public function DestroyBanner($id) 
    {
        $Banner = Banner::find($id);
        $Banner-> delete();
        return redirect('/admin/banner');
    }

       // WIKI
       public function DataWiki() {

        return view('admin.adm-wiki', [
            'Wiki' => Wiki::all()
        ]);
    }

    public function InsertWiki(Request $request)
    {
        $data = $request->except(['_token']);
    
        if ($request->hasFile('gambar_wiki')) {
            $file = $request->file('gambar_wiki');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('public/images', $fileName);
    
            // Simpan path yang benar ke dalam basis data
            $data["gambar_wiki"] = 'storage/images/' . $fileName;
        }
    
        Wiki::create($data);
    
        session()->flash('success', 'Wiki added successfully');
        
        return redirect('/admin/wiki');
    }
    
    public function EditWiki($id)
    {
        $Wiki = Wiki::find($id);
        return view('admin.adm-wiki', compact('wiki'));
    }
    

    public function UpdateWiki(Request $request, $id)
    {
        $data = $request->except(['_token']);
    
        if ($request->hasFile('gambar_wiki')) {
            $file = $request->file('gambar_wiki');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('public/images', $fileName);
        
            // Simpan path yang benar ke dalam basis data
            $data["gambar_wiki"] = 'storage/images/' . $fileName;   
        }        
    
        $Wiki = Wiki::find($id);
        $Wiki->update($data);
    
        session()->flash('success', 'Wiki updated successfully');
    
        return redirect('/admin/wiki');
    }

    public function DestroyWiki($id) 
    {
        $Wiki = Wiki::find($id);
        $Wiki-> delete();
        return redirect('/admin/wiki');
    }

    // GALLERY
    public function DataGallery() {

        return view('admin.adm-gallery', [
            'Gallery' => Gallery::all()
        ]);
    }
    
    public function InsertGallery(Request $request)
    {
        $data = $request->except(['_token']);
    
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('public/images', $fileName);
    
            // Simpan path yang benar ke dalam basis data
            $data["foto"] = 'storage/images/' . $fileName;
        }
    
        Gallery::create($data);
    
        session()->flash('success', 'Gallery added successfully');
        
        return redirect('admin/gallery');
    }
    
    public function EditGallery($id)
    {
        $Gallery = Gallery::find($id);
        return view('admin.adm-gallery', compact('Gallery'));
    }
    

    public function UpdateGallery(Request $request, $id)
    {
        $data = $request->except(['_token']);
    
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('public/images', $fileName);
        
            // Simpan path yang benar ke dalam basis data
            $data["foto"] = 'storage/images/' . $fileName;   
        }        
    
        $Gallery = Gallery::find($id);
        $Gallery->update($data);
    
        session()->flash('success', 'Gallery updated successfully');
    
        return redirect('/admin/gallery');
    }

    public function DestroyGallery($id) 
    {
        $Gallery = Gallery::find($id);
        $Gallery-> delete();
        return redirect('/admin/gallery');
    }

    public function DataDashboard() {

        $currentDate = Carbon::now();

        $karyawan = Karyawan::whereDay('tanggal_join', $currentDate->day)
        ->whereMonth('tanggal_join', $currentDate->month)
        ->get();

        $karyawanUlangTahun = Karyawan::whereDay('ulang_tahun', $currentDate->day)
            ->whereMonth('ulang_tahun', $currentDate->month)
            ->get();


        return view('admin.dashboard', [
            'announcement' => Announcement::all(),
            'article' => Article::all(),
            'menu' => Menu::all(),
            'karyawan' => $karyawan,
            'karyawanUlangTahun' => $karyawanUlangTahun,
            'banner' => Banner::all()
            
        ]);
    }

    // SISTEM USER
    public function DataUser() {

        return view('admin.adm-user', [
            'user' => User::all()
        ]);
    }

    public function InsertUser(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
        ]);
        $validatedData['password'] = bcrypt('matahari');
        User::create($validatedData);
        return redirect('/admin/user');  
    }
    
    public function EditUser($id)
    {
        $User = User::find($id);
        return view('admin.adm-user', compact('User'));
    }
    

    public function UpdateUser($id, Request $request) 
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'string|min:6',
        ]);

        if ($request->has('password')) {
            $validatedData['password'] = bcrypt($validatedData['password']);
        }
    
        User::find($id)->update($validatedData);
        return redirect('/admin/user');
    }

    public function DestroyUser($id) 
    {
        $User = User::find($id);
        $User-> delete();
        return redirect('/admin/user');
    }

     // SISTEM MENU
     public function DataMenu() {

        return view('admin.adm-menu', [
            'menu' => Menu::all()
        ]);
    }

    public function InsertMenu(Request $request)
    {
        $validatedData = $request->validate([
            'nama_menu' => 'required|string',
            'url_menu' => 'required|string',
        ]);
        Menu::create($validatedData);
        return redirect('/admin/menu');  
    }
    
    public function EditMenu($id)
    {
        $menu = Menu::find($id);
        return view('admin.adm-menu', compact('menu'));
    }
    

    public function UpdateMenu($id, Request $request) 
    {
        $menu = Menu::find($id);
        $menu -> update($request->except(['_token']));
        return redirect('/admin/menu');
    }

    public function DestroyMenu($id) 
    {
        $menu = Menu::find($id);
        $menu-> delete();
        return redirect('/admin/menu');
    }


    public function PageUpload() {

        return view('admin.adm-karyawan');
    }

    // public function import()
    // {
    //     Excel::import(new KaryawanImport, request()->file('file'));

    //     return redirect()->back()->with('success', 'File Excel berhasil diimpor.');
    // }

    public function import(Request $request)
    {
        $request->validate([
            'csv_file' => 'required|mimes:csv,txt,xlsx|max:2048',
        ]);
        if ($request->hasFile('csv_file')) {
            $file = $request->file('csv_file');
            $filePath = $file->getPathName();
            $csvData = array_map('str_getcsv', file($filePath));
            foreach ($csvData as $row) {
                Karyawan::create([
                    'nama_karyawan' => $row[0], 
                    'tanggal_join' => $row[1], 
                    'divisi_karyawan' => $row[2],
                    'ulang_tahun' => $row[3],
                    'jenis_kelamin' => $row[4],
                ]);
            }
            return redirect()->back()->with('success', 'CSV file imported successfully.');
        }
        return redirect()->back()->with('error', 'Failed to import CSV file.');
    }
}
