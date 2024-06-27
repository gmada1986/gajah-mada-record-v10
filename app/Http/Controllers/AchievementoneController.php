<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Achievementone;

class AchievementoneController extends Controller
{
    public function index()
    {
        $achievements = Achievementone::all();
        return view('dashboard.achievementone.achievementone', compact('achievements'));
    }

    public function create()
    {
        return view('dashboard.achievementone.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'judul_file_img' => 'required',
            'file_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Sesuaikan validasi sesuai kebutuhan
        ]);

        // Handle image upload
        if ($request->hasFile('file_image')) {
            $image = $request->file('file_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('asset/blog'), $imageName);
            $data['file_image'] = $imageName; // Simpan nama file gambar dalam data
        }

        Achievementone::create($data);

        return redirect()->route('dashboard.achievementone.index');
    }


    public function edit(Achievementone $achievement)
    {
        return view('dashboard.achievementone.edit', compact('achievement'));
    }

    public function show(Achievementone $achievement)
    {
        return view('dashboard.achievementone.show', compact('achievement'));
    }


    public function update(Request $request, Achievementone $achievement)
    {
        $data = $request->validate([
            'judul_file_img' => 'required',
            'file_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Sesuaikan validasi sesuai kebutuhan
            // Tambahkan validasi untuk properti lainnya
        ]);

        // Handle image update
        if ($request->hasFile('file_image')) {
            // Jika pengguna mengganti gambar, proses unggah gambar baru
            $image = $request->file('file_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('asset/blog'), $imageName);
            $data['file_image'] = $imageName;
        }

        $achievement->update($data);

        return redirect()->route('dashboard.achievementone.index');
    }


    public function destroy(Achievementone $achievement)
    {
        // Hapus gambar terkait jika ada
        if ($achievement->file_image) {
            $imagePath = public_path('asset/blog/') . $achievement->file_image;

            // Pastikan file gambar ada sebelum dihapus
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        // Hapus entri achievement
        $achievement->delete();

        return redirect()->route('dashboard.achievementone.index');
    }

}
