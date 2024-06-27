<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Logo extends Model
{
    protected $fillable = ['file_name'];

    // Tambahkan metode untuk menyimpan nama file gambar ke dalam database
    public static function saveImage($logoImage)
    {
        $logo = new Logo();
        $logo->file_name = $logoImage->getClientOriginalName();
        $logo->save();

        return $logo;
    }
}