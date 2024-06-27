<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::simplePaginate(3);
        $title = 'Video List';
        return view('dashboard.video.video', compact('videos', 'title'));
    }

    public function create()
    {
        return view('dashboard.video.create');
    }

    public function store(Request $request)
    {
        // Mendapatkan data dari formulir
        $data = $request->all();

        // Mendapatkan link YouTube dari formulir
        $youtubeLink = $data['link'];

        // Mengambil ID video dari link YouTube
        $videoId = $this->getYouTubeVideoId($youtubeLink);

        // Mengambil thumbnail URL dari API YouTube
        $thumbnailUrl = "https://img.youtube.com/vi/{$videoId}/maxresdefault.jpg";

        // Menyimpan thumbnail URL ke dalam $data
        $data['thumbnail'] = $thumbnailUrl;

        // Membuat record video baru dengan menggunakan $data
        Video::create($data);

        return redirect()->route('dashboard.videos.index');
    }

    // Fungsi untuk mendapatkan ID video dari link YouTube
    private function getYouTubeVideoId($url)
    {
        $videoId = '';

        // Contoh URL YouTube yang didukung:
        // - https://www.youtube.com/watch?v=VIDEO_ID
        // - https://youtu.be/VIDEO_ID
        $pattern = '/(?:youtube\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/';

        if (preg_match($pattern, $url, $matches)) {
            $videoId = $matches[1];
        }

        return $videoId;
    }

    public function show($id)
    {
        $video = Video::findOrFail($id);
        return view('dashboard.video.show', compact('video'));
    }

    public function edit($id)
    {
        $video = Video::findOrFail($id);
        return view('dashboard.video.edit', compact('video'));
    }

    public function update(Request $request, $id)
    {
        // Mendapatkan data video berdasarkan ID
        $video = Video::findOrFail($id);

        // Memperbarui data video dengan data dari formulir
        $video->update($request->all());

        // Mengambil link YouTube dari formulir
        $youtubeLink = $request->input('link');

        // Mengambil ID video dari link YouTube
        $videoId = $this->getYouTubeVideoId($youtubeLink);

        // Mengambil thumbnail URL dari API YouTube
        $thumbnailUrl = "https://img.youtube.com/vi/{$videoId}/maxresdefault.jpg";

        // Menyimpan thumbnail URL ke dalam data video
        $video->thumbnail = $thumbnailUrl;

        // Menyimpan perubahan
        $video->save();

        // Redirect ke halaman index
        return redirect()->route('dashboard.videos.index');
    }



    public function destroy($id)
    {
        $video = Video::findOrFail($id);
        $video->delete();

        return redirect()->route('dashboard.videos.index');
    }
}
