<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('asset/logo-web-gajahmada/logogajahmadarecord.png') }}" type="image/x-icon">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>{{ $title }}</title>
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-stand-blog.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.css') }}">
    <!--

TemplateMo 551 Stand Blog

https://templatemo.com/tm-551-stand-blog

-->
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
        <nav class="navbar navbar-expand-lg" style="background-color: #181935;">
            <div class="container">
                <a class="navbar-brand" href="/">
                    {{-- <h2>Gajah Mada Record<em></em></h2> --}}
                        @php
                        $logo = \App\Models\Logo::first();
                        $logoSrc = $logo ? asset('asset/logo-brand/' . $logo->file_name) :
                        asset('asset/logo-brand/gajahmadalogo.png');
                        @endphp
                        <img src="{{ $logoSrc }}" alt="" width="130px">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/Blog/Gajah/Mada/Record">Home Blog<span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link">Blog Entries</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="heading-page header-text">
    </div>

    <section class="blog-posts grid-system">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="all-blog-posts">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="blog-post">
                                    <div class="blog-thumb" style="position: relative; overflow: hidden; height: 0; padding-bottom: 56.25%;">
                                        @if ($blog->image)
                                        <div style="overflow: hidden; height: 0; padding-bottom: 56.25%; position: relative; blogrspnsv">
                                            <img src="{{ asset('asset/blog/' . $blog->image) }}" class="card-img-top blogrspnsv" alt="{{ $blog->title }}" style=" display: flex; margin: auto; border-radius: 5px; justify-content: center; align-items: center;object-fit: cover; width: auto; height: auto; backface-visibility: initial;">
                                        </div>
                                        @endif
                                        </div>
                                    <div class="down-content">
                                        <a>
                                            <h4>{{ $blog->title }}</h4>
                                        </a>
                                        <ul class="post-info">
                                            <li><a>Update to</a></li>
                                            <li><a>{{ $blog->blog_date }}</a></li>
                                        </ul>
                                        <div class="blog-post">
                                            <p style="font-size: 100%;">{!! nl2br(htmlspecialchars($blog->description)) !!}</p>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sidebar-item recent-posts">
                                    <div class="sidebar-heading">
                                        <h2>Recent Posts</h2>
                                    </div>
                                    <div class="content">
                                        <ul>
                                            <li>
                                                @foreach ($blogs as $blog)
                                                <a
                                                    href="{{ route('blogs.show', ['title' => $blog->title, 'id' => $blog->id]) }}">
                                                    <hr>
                                                    <h5 class="card-title" style="line-height: 1;">{{ Str::limit($blog->title, 50, '...') }}
                                                    </h5>
                                                    <p class="card-text" style="line-height: 0;"><small
                                                            class="text-muted">Date: {{ $blog->blog_date }}</small></p>
                                                </a>
                                                @endforeach
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="p-5" style="background-color: #181935">
        <div class="container">
            <div class="text-white text-center">
                <a href="https://www.privacypolicyonline.com/live.php?token=bZA39cwOgezk9XD5jDqEz3gQORm4yjW4"
                    class="text-white text-decoration-none">Terms &amp; Conditions || Privacy Policy</a>
                <p>Copyright @ 2023 Gajah Mada Record All Right Reserved</p>
            </div>
        </div>
    </footer>


    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/owl.js') }}"></script>
    <script src="{{ asset('assets/js/slick.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.js') }}"></script>
    <script src="{{ asset('assets/js/accordions.js') }}"></script>


    <script language="text/Javascript">
        cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
        function clearField(t) { //declaring the array outside of the
            if (!cleared[t.id]) { // function makes it static and global
                cleared[t.id] = 1; // you could use true and false, but that's more typing
                t.value = ''; // with more chance of typos
                t.style.color = '#fff';
            }
        }

    </script>


</body>

</html>