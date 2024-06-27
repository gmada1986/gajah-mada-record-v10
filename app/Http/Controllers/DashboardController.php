<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Video;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $videoCount = DB::table('videos')->count();
        $videoCount = Video::count();
        $blogs = DB::table('videos')->count();
        $blogs = Blog::count();
        $title = "Dashboard Admin || Index";
        return view('dashboard.indexdashboard', compact('title', 'videoCount', 'blogs'));
    }
}
