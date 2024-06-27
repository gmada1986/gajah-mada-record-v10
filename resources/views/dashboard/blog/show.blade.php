<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Data Blog</title>
    @include('linkcdn.linkcdncssbootstrap')
</head>

<body>
    <div class="container position-absolute top-50 start-50 translate-middle">
        <p><a href="/blog">Data Blog </a> > Show Data Blog</p>
        <div class="shadow-lg p-5 mb-5 bg-body rounded-3">
            <h1 class="fs-5 fw-bodl">Show Data Blog</h1>
            <div class="row">
                <div class="col-md-2" style="margin: 0; justify-content: center; align-content: center; display: flex;">
                    @if ($blog->image)
                    <img src="{{ asset('asset/blog/' . $blog->image) }}" class="img-fluid rounded-start"
                        style="width: 100%;" alt="{{ $blog->title }}">
                    @endif
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $blog->title }}</h5>
                        <p class="card-text"><small class="text-muted">Blog Date: {{ $blog->blog_date }}</small></p>
                        <p class="card-text">{{ $blog->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
