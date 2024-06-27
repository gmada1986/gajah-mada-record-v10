<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogView extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy('blog_date', 'desc')->paginate(6);
        $title = 'Blog Gajah Mada Record';

        // Process each blog description to add line breaks
        foreach ($blogs as $blog) {
            $blog->description = $this->addLineBreaks($blog->description);
        }

        return view('blog.blog', compact('blogs', 'title'));
    }

    public function show($id)
    {
        $blog = Blog::find($id);

        if (!$blog) {
            abort(404); // Tampilkan halaman 404 jika blog tidak ditemukan
        }
        $blogs = Blog::orderBy('blog_date', 'desc')->paginate(10);
        $title = 'Blog - ' . $blog->title;
        $blog->description = $this->addLineBreaks($blog->description);
        return view('blog.show', compact('blog', 'blogs', 'title'));
    }

    private function addLineBreaks($text)
    {
        $maxCharacters = 100;
        $wrappedText = wordwrap($text, $maxCharacters, "\n");
        return $wrappedText;
    }
}
