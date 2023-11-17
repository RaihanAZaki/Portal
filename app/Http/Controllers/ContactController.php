<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Contact_form;
use Illuminate\Support\Facades\Mail;
use App\Mail\kirimEmail;

class ContactController extends Controller
{
    
    public function DataContact() {

        return view('contact', [
            'contact' => Contact::all()
        ]);
    }

    public function send(Request $request) {
        // Validasi data inputan di sini
       $data = [
        "tanda_pengenal" => $request->tanda_pengenal,
        "nama" => $request->nama,
        "email" => $request->email,
        "no_telp" => $request->no_telp,
        "subject" => $request->subject,
        "email_tujuan" => $request->email_tujuan,
        "kategori" => $request->kategori,
        "pesan" => $request->pesan,
        "nama_pengirim" => 'PORTAL MPPA',
       ];

        $contact = new contact_form; // Pastikan model ContactForm sesuai dengan model yang Anda gunakan
            $contact->tanda_pengenal = $request->input('tanda_pengenal');
            $contact->nama = $request->input('nama');
            $contact->email = $request->input('email');
            $contact->no_telp = $request->input('no_telp');
            $contact->subject = $request->input('subject');
            $contact->email_tujuan = $request->input('email_tujuan');
            $contact->pesan = $request->input('pesan');
            $contact->kategori = $request->input('kategori');
            $contact->save();
        

        // Kirim email
        Mail::to($data['email_tujuan'])->send(new kirimEmail($data));

        // Redirect atau tampilkan pesan sukses
        return back()->with('success', 'Pesan berhasil dikirim.');
    }
}
