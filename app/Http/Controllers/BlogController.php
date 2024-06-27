<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::simplePaginate(3);
        $title = 'Blog List';
        return view('dashboard.blog.blog', compact('blogs', 'title'));
    }

    public function create()
    {
        return view('dashboard.blog.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'blog_date' => 'required|date',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $blog = new Blog([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'blog_date' => $request->get('blog_date'),
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('asset/blog'), $imageName);
            $blog->image = $imageName;
        }

        $blog->save();

        return redirect()->route('dashboard.blog.index')->with('success', 'Blog has been added');
    }

    public function show(Blog $blog)
    {
        return view('dashboard.blog.show', compact('blog'));
    }

    public function edit(Blog $blog)
    {
        return view('dashboard.blog.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'blog_date' => 'required|date',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $blog->title = $request->get('title');
        $blog->description = $request->get('description');
        $blog->blog_date = $request->get('blog_date');

        // Handle image update
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('asset/blog'), $imageName);
            $blog->image = $imageName;
        }

        $blog->save();

        return redirect()->route('dashboard.blog.index')->with('success', 'Blog has been updated');
    }

    public function destroy(Blog $blog)
    {
        // Hapus gambar terkait jika ada
        if ($blog->image) {
            $imagePath = public_path('asset/blog/') . $blog->image;

            // Pastikan file gambar ada sebelum dihapus
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        // Hapus entri blog
        $blog->delete();

        return redirect()->route('dashboard.blog.index')->with('success', 'Blog has been deleted');
    }

}

