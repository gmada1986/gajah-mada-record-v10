<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Creata Data Video</title>
    @include('linkcdn.linkcdncssbootstrap')
    <link rel="stylesheet" href="https://unpkg.com/cropperjs/dist/cropper.css">
</head>

<body>
    <div class="container position-absolute top-50 start-50 translate-middle">
        <p><a href="/videos">Data Video </a> > Create Data Video</p>
        <div class="shadow-lg p-5 mb-5 bg-body rounded-3">
            <h1 class="fs-5 fw-bodl">Create Data Video</h1>
            <form action="{{ route('dashboard.videos.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="judul">Title:</label>
                    <input type="text" name="judul" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="link">YouTube Link:</label>
                    <input type="text" name="link" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="thumbnail">Thumbnail URL:</label>
                    <input type="text" name="thumbnail" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>

    <script src="https://unpkg.com/cropperjs/dist/cropper.js"></script>
</body>

</html>
