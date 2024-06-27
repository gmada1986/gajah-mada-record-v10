<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Data Blog</title>
    @include('linkcdn.linkcdncssbootstrap')
    <link rel="stylesheet" href="https://unpkg.com/cropperjs/dist/cropper.css">
    <script src="https://unpkg.com/cropperjs/dist/cropper.js"></script>
</head>

<body>
    <div class="container position-absolute top-50 start-50 translate-middle">
        <p><a href="/blog">Data Blog </a> > Create Data Blog</p>
        <div class="shadow-lg p-5 mb-5 bg-body rounded-3">
            <h1 class="fs-5 fw-bodl">Create Data Blog</h1>
            <form action="{{ route('dashboard.blog.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>

                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                </div>

                <div class="form-group">
                    <label for="blog_date">Blog Date:</label>
                    <input type="date" class="form-control" id="blog_date" name="blog_date" required>
                </div>

                <div class="form-group">
                    <label for="image">Image:</label>
                    <input type="file" class="form-control-file" id="image" name="image">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>