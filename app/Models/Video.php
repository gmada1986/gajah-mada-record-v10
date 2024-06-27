<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $fillable = ['judul', 'link', 'thumbnail'];

    // Mutator untuk menyimpan hanya ID video YouTube
    public function setLinkAttribute($value)
    {
        $this->attributes['link'] = $this->getYouTubeVideoId($value);
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
}
