<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Blog</title>
    @include('linkcdn.linkcdncssbootstrap')
    <link rel="stylesheet" href="https://unpkg.com/cropperjs/dist/cropper.css">
    <script src="https://unpkg.com/cropperjs/dist/cropper.js"></script>
</head>

<body>
    <div class="container position-absolute top-50 start-50 translate-middle">
        <p><a href="/blog">Data Blog </a> > Edit Data Blog</p>
        <div class="shadow-lg p-5 mb-5 bg-body rounded-3">
            <h1 class="fs-5 fw-bodl">Edit Data Blog</h1>
            <form action="{{ route('dashboard.blog.update', $blog) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" id="title" name="title"
                        value="{{ old('title', $blog->title) }}">
                </div>

                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea class="form-control" id="description"
                        name="description">{{ old('description', $blog->description) }}</textarea>
                </div>

                <div class="form-group">
                    <label for="blog_date">Blog Date:</label>
                    <input type="date" class="form-control" id="blog_date" name="blog_date"
                        value="{{ old('blog_date', $blog->blog_date) }}">
                </div>

                {{-- <div class="form-group">
                    <label for="image">Image:</label>
                    <input type="file" class="form-control-file" id="image" name="image">

                    @if ($blog->image)
                    <div class="mt-5">
                        <p>Old Image :</p>
                        <img src="{{ asset('asset/blog/' . $blog->image) }}" alt="Current Blog Image"
                            style="width: 300px;" class="rounded img-fluid">
                    </div>
                    @else
                    <p>No image available</p>
                    @endif
                </div> --}}

                <button type="submit" class="btn btn-primary">Update Blog</button>
            </form>
        </div>
    </div>
</body>

</html>