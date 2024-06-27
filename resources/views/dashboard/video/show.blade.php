<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('linkcdn.linkcdncssbootstrap')
    <title>View Data Video</title>
</head>
<body>
    <div class="container position-absolute top-50 start-50 translate-middle">
        <p><a href="/videos">Data Video </a> > View Data Video</p>
        <div class="shadow-lg p-5 mb-5 bg-body rounded-3">
            <h1 class="fs-5 fw-bodl">View Data Video</h1>
            <h1>{{ $video->judul }}</h1>
            <p>YouTube Link: <a href="{{ $video->link }}" target="_blank">{{ $video->link }}</a></p>
            <img src="{{ $video->thumbnail }}" alt="{{ $video->judul }}" width="300">
            <br>
            <br>
            <a href="{{ route('dashboard.videos.index') }}" class="btn btn-primary">Kembali ke Daftar Video</a>
            <a href="{{ route('dashboard.videos.edit', $video->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('dashboard.videos.destroy', $video->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
    
        </div>
    </div>
</body>
</html>