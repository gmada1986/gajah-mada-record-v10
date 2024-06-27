<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use App\Models\Logo;
use App\Models\Blog;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class gajahmadaindex extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy('blog_date', 'desc')->take(5)->get();
        $videos = Video::all();
        $title = 'Blog Gajah Mada Record';
        return view('gajahmada', compact('blogs', 'title', 'videos'));
    }


    public function showLogoForm()
    {
        return view('dashboard.logo_form');
    }

    public function updateLogo(Request $request)
    {
        $request->validate([
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $logo = $request->file('logo');
        $logoName = time() . '.' . $logo->getClientOriginalExtension();
        $logo->move(public_path('asset/logo-brand'), $logoName);

        // Simpan nama logo ke dalam database
        Logo::updateOrCreate(['id' => 1], ['file_name' => $logoName]);

        // Set success message in session
        return redirect()->route('table.index')->with('success', 'Logo updated successfully!');
    }

    public function sendEmail(Request $request)
    {

        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        // Kirim email
        Mail::to('gajahmadarecord.gmr@gmail.com')->send(new ContactFormMail($request->all()));

        return redirect('/')->with('success', 'Formulir kontak berhasil dikirim!');
    }
}
