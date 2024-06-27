<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Video</title>
    @include('linkcdn.linkcdncssbootstrap')
    <link rel="stylesheet" href="https://unpkg.com/cropperjs/dist/cropper.css">
    <script src="https://unpkg.com/cropperjs/dist/cropper.js"></script>
</head>

<body>
    <div class="container position-absolute top-50 start-50 translate-middle">
        <p><a href="/videos">Data Video </a> > Edit Data Video</p>
        <div class="shadow-lg p-5 mb-5 bg-body rounded-3">
            <h1 class="fs-5 fw-bodl">Edit Data Video</h1>
            <form action="{{ route('dashboard.videos.update', $video->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="judul">Title:</label>
                    <input type="text" name="judul" class="form-control" value="{{ $video->judul }}" required>
                </div>
                <div class="form-group">
                    <label for="link">YouTube Link:</label>
                    <input type="text" name="link" class="form-control" value="{{ $video->link }}" required>
                </div>
                <div class="form-group">
                    <label for="thumbnail">Thumbnail URL:</label>
                    <input type="text" name="thumbnail" class="form-control" value="{{ $video->thumbnail }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</body>

</html>