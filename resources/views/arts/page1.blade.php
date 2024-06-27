<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Drive Band Indonesia</title>
    @include('linkcdn.linkcdncssbootstrap')
    <style>
        body {
            background-color: #181935;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg p-4">
        <div class="container">
            <a class="" href="/" style="width: 10%;">
                <img src="asset/logo-brand/gajahmadalogo.png" alt="" class="lgo-nav" width="200px" height="auto">
            </a>
            <button class="btn btn-none" style="position: absolute;" type="button" id="toggleSidebar"> </button>
            <button class="btn btn-body" type="button"
                style="background-color: #181935; border: none; border-radius: 5px;" id="toggleSidebar1">
                <span class="navbar-toggler-icon" style="border-color: white;"></span>
            </button>
            <div class="sidebar" id="sidebar">
                <button id="closeSidebar" style="width: auto;" class="btn btn-body"><svg
                        xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                        <path fill="white"
                            d="M3 6h10v2H3zm0 10h10v2H3zm0-5h12v2H3zm13-4l-1.42 1.39L18.14 12l-3.56 3.61L16 17l5-5z" />
                    </svg></button>
                <center>
                    <div class="row content-center-one">
                        <a href="/" class="text-center text-white mb-3 fw-bold fs-5 btn btn-outline-primary"
                            style="width: 80%;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 16 16">
                                <path fill="currentColor"
                                    d="M6.906.664a1.749 1.749 0 0 1 2.187 0l5.25 4.2c.415.332.657.835.657 1.367v7.019A1.75 1.75 0 0 1 13.25 15h-3.5a.75.75 0 0 1-.75-.75V9H7v5.25a.75.75 0 0 1-.75.75h-3.5A1.75 1.75 0 0 1 1 13.25V6.23c0-.531.242-1.034.657-1.366l5.25-4.2Zm1.25 1.171a.25.25 0 0 0-.312 0l-5.25 4.2a.25.25 0 0 0-.094.196v7.019c0 .138.112.25.25.25H5.5V8.25a.75.75 0 0 1 .75-.75h3.5a.75.75 0 0 1 .75.75v5.25h2.75a.25.25 0 0 0 .25-.25V6.23a.25.25 0 0 0-.094-.195Z" />
                            </svg> Home
                        </a>
                        <a href="" class="text-center text-white fw-bold fs-5 btn btn-outline-primary"
                            style="width: 80%;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 28 28">
                                <path fill="currentColor"
                                    d="M22.75 24H5.25a3.25 3.25 0 0 1-3.245-3.066L2 20.75V6.25a2.25 2.25 0 0 1 2.096-2.245L4.25 4h15.5a2.25 2.25 0 0 1 2.245 2.096L22 6.25V7h1.75a2.25 2.25 0 0 1 2.245 2.096L26 9.25v11.5a3.25 3.25 0 0 1-3.066 3.245zH5.25zm-17.5-1.5h17.5a1.75 1.75 0 0 0 1.744-1.607l.006-.143V9.25a.75.75 0 0 0-.648-.743L23.75 8.5H22v10.75a.75.75 0 0 1-.648.743L21.25 20a.75.75 0 0 1-.743-.648l-.007-.102v-13a.75.75 0 0 0-.648-.743L19.75 5.5H4.25a.75.75 0 0 0-.743.648L3.5 6.25v14.5a1.75 1.75 0 0 0 1.606 1.744zh17.5zm4.996-9.496c.69 0 1.25.56 1.25 1.25v3.496c0 .69-.56 1.25-1.25 1.25H6.75c-.69 0-1.25-.56-1.25-1.25v-3.496c0-.69.56-1.25 1.25-1.25zM14.25 17.5h3.496a.75.75 0 0 1 .102 1.493l-.102.007H14.25a.75.75 0 0 1-.102-1.493zh3.496zm-4.253-2.996H7V17.5h2.997zm4.253-1.5h3.496a.75.75 0 0 1 .102 1.493l-.102.007H14.25a.75.75 0 0 1-.102-1.494zh3.496zM6.246 8.497h11.5a.75.75 0 0 1 .102 1.493l-.102.007h-11.5a.75.75 0 0 1-.101-1.493zh11.5z" />
                            </svg> Blog
                        </a>
                        <div class="col-xl-9 mt-5 mb-4 lne-hght">
                            <a href="https://www.instagram.com/drive_indonesia/"> 
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" class="rspnsive-iconx" viewBox="0 0 256 256"> <g fill="none"> <rect width="256" height="256" fill="url(#skillIconsInstagram0)" rx="60" /> <rect width="256" height="256" fill="url(#skillIconsInstagram1)" rx="60" /> <path fill="#fff" d="M128.009 28c-27.158 0-30.567.119-41.233.604c-10.646.488-17.913 2.173-24.271 4.646c-6.578 2.554-12.157 5.971-17.715 11.531c-5.563 5.559-8.98 11.138-11.542 17.713c-2.48 6.36-4.167 13.63-4.646 24.271c-.477 10.667-.602 14.077-.602 41.236s.12 30.557.604 41.223c.49 10.646 2.175 17.913 4.646 24.271c2.556 6.578 5.973 12.157 11.533 17.715c5.557 5.563 11.136 8.988 17.709 11.542c6.363 2.473 13.631 4.158 24.275 4.646c10.667.485 14.073.604 41.23.604c27.161 0 30.559-.119 41.225-.604c10.646-.488 17.921-2.173 24.284-4.646c6.575-2.554 12.146-5.979 17.702-11.542c5.563-5.558 8.979-11.137 11.542-17.712c2.458-6.361 4.146-13.63 4.646-24.272c.479-10.666.604-14.066.604-41.225s-.125-30.567-.604-41.234c-.5-10.646-2.188-17.912-4.646-24.27c-2.563-6.578-5.979-12.157-11.542-17.716c-5.562-5.562-11.125-8.979-17.708-11.53c-6.375-2.474-13.646-4.16-24.292-4.647c-10.667-.485-14.063-.604-41.23-.604zm-8.971 18.021c2.663-.004 5.634 0 8.971 0c26.701 0 29.865.096 40.409.575c9.75.446 15.042 2.075 18.567 3.444c4.667 1.812 7.994 3.979 11.492 7.48c3.5 3.5 5.666 6.833 7.483 11.5c1.369 3.52 3 8.812 3.444 18.562c.479 10.542.583 13.708.583 40.396c0 26.688-.104 29.855-.583 40.396c-.446 9.75-2.075 15.042-3.444 18.563c-1.812 4.667-3.983 7.99-7.483 11.488c-3.5 3.5-6.823 5.666-11.492 7.479c-3.521 1.375-8.817 3-18.567 3.446c-10.542.479-13.708.583-40.409.583c-26.702 0-29.867-.104-40.408-.583c-9.75-.45-15.042-2.079-18.57-3.448c-4.666-1.813-8-3.979-11.5-7.479s-5.666-6.825-7.483-11.494c-1.369-3.521-3-8.813-3.444-18.563c-.479-10.542-.575-13.708-.575-40.413c0-26.704.096-29.854.575-40.396c.446-9.75 2.075-15.042 3.444-18.567c1.813-4.667 3.983-8 7.484-11.5c3.5-3.5 6.833-5.667 11.5-7.483c3.525-1.375 8.819-3 18.569-3.448c9.225-.417 12.8-.542 31.437-.563zm62.351 16.604c-6.625 0-12 5.37-12 11.996c0 6.625 5.375 12 12 12s12-5.375 12-12s-5.375-12-12-12zm-53.38 14.021c-28.36 0-51.354 22.994-51.354 51.355c0 28.361 22.994 51.344 51.354 51.344c28.361 0 51.347-22.983 51.347-51.344c0-28.36-22.988-51.355-51.349-51.355zm0 18.021c18.409 0 33.334 14.923 33.334 33.334c0 18.409-14.925 33.334-33.334 33.334c-18.41 0-33.333-14.925-33.333-33.334c0-18.411 14.923-33.334 33.333-33.334" /> <defs> <radialGradient id="skillIconsInstagram0" cx="0" cy="0" r="1" gradientTransform="matrix(0 -253.715 235.975 0 68 275.717)" gradientUnits="userSpaceOnUse"> <stop stop-color="#FD5" /> <stop offset=".1" stop-color="#FD5" /> <stop offset=".5" stop-color="#FF543E" /> <stop offset="1" stop-color="#C837AB" /> </radialGradient> <radialGradient id="skillIconsInstagram1" cx="0" cy="0" r="1" gradientTransform="matrix(22.25952 111.2061 -458.39518 91.75449 -42.881 18.441)" gradientUnits="userSpaceOnUse"> <stop stop-color="#3771C8" /> <stop offset=".128" stop-color="#3771C8" /> <stop offset="1" stop-color="#60F" stop-opacity="0" /> </radialGradient> </defs> </g> </svg>
                            </a>
                        </div>
                        <div class="col-xl-9 mb-4 mt-2 lne-hght">
                            <a href="https://open.spotify.com/intl-id/artist/1DgveZI0VAdnZxNiEsZPuF?go=1&sp_cid=cbf567a5c4eb5ff3e78bf0d44f3e82e5&utm_source=embed_player_v&utm_medium=desktop&nd=1&dlsi=865f6a0279ed4a38">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" class="rspnsive-iconx"
                                    viewBox="0 0 256 256">
                                    <path fill="#1ED760"
                                        d="M128 0C57.308 0 0 57.309 0 128c0 70.696 57.309 128 128 128c70.697 0 128-57.304 128-128C256 57.314 198.697.007 127.998.007zm58.699 184.614c-2.293 3.76-7.215 4.952-10.975 2.644c-30.053-18.357-67.885-22.515-112.44-12.335a7.981 7.981 0 0 1-9.552-6.007a7.968 7.968 0 0 1 6-9.553c48.76-11.14 90.583-6.344 124.323 14.276c3.76 2.308 4.952 7.215 2.644 10.975m15.667-34.853c-2.89 4.695-9.034 6.178-13.726 3.289c-34.406-21.148-86.853-27.273-127.548-14.92c-5.278 1.594-10.852-1.38-12.454-6.649c-1.59-5.278 1.386-10.842 6.655-12.446c46.485-14.106 104.275-7.273 143.787 17.007c4.692 2.89 6.175 9.034 3.286 13.72zm1.345-36.293C162.457 88.964 94.394 86.71 55.007 98.666c-6.325 1.918-13.014-1.653-14.93-7.978c-1.917-6.328 1.65-13.012 7.98-14.935C93.27 62.027 168.434 64.68 215.929 92.876c5.702 3.376 7.566 10.724 4.188 16.405c-3.362 5.69-10.73 7.565-16.4 4.187z" />
                                    </svg>
                            </a>
                        </div>
                        <div class="col-xl-9 lne-hght">
                            <a href="https://www.youtube.com/watch?v=-JjVpnAlfMc">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" class="rspnsive-iconx" viewBox="0 0 72 72"> <path fill="#ea5a47" d="M63.874 21.906a7.31 7.31 0 0 0-5.144-5.177C54.193 15.505 36 15.505 36 15.505s-18.193 0-22.73 1.224a7.31 7.31 0 0 0-5.144 5.177C6.91 26.472 6.91 36 6.91 36s0 9.528 1.216 14.095a7.31 7.31 0 0 0 5.144 5.177C17.807 56.495 36 56.495 36 56.495s18.193 0 22.73-1.223a7.31 7.31 0 0 0 5.144-5.177C65.09 45.528 65.09 36 65.09 36s0-9.528-1.216-14.094" /> <path fill="#fff" d="M30.05 44.65L45.256 36L30.05 27.35Z" /> <g fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="2"> <path d="M63.874 21.906a7.31 7.31 0 0 0-5.144-5.177C54.193 15.505 36 15.505 36 15.505s-18.193 0-22.73 1.224a7.31 7.31 0 0 0-5.144 5.177C6.91 26.472 6.91 36 6.91 36s0 9.528 1.216 14.095a7.31 7.31 0 0 0 5.144 5.177C17.807 56.495 36 56.495 36 56.495s18.193 0 22.73-1.223a7.31 7.31 0 0 0 5.144-5.177C65.09 45.528 65.09 36 65.09 36s0-9.528-1.216-14.094" /> <path stroke-linecap="round" stroke-linejoin="round" d="M30.05 44.65L45.256 36L30.05 27.35Z" /> </g> </svg> 
                            </a>
                        </div>
                        <footer class="p-3">
                            <div class="mt-5">
                                <div class="text-white text-center">
                                    <a href="https://www.privacypolicyonline.com/live.php?token=bZA39cwOgezk9XD5jDqEz3gQORm4yjW4" class="rspnsv-txt text-white fs-6 text-decoration-none text-center">Terms &amp; Conditions || Privacy Policy</a>
                                    <p class="text-white-50 fs-6 rspnsv-txt">Copyright @ 2023 Gajah Mada Record All Right Reserved</p>
                                </div>
                            </div>
                        </footer>
                    </div>
                </center>
            </div>
        </div>
    </nav>
    <div class="ngtop">
        <h1 class="text-center fw-bold text-white" style="margin-top: 4%;">DRIVE BAND INDONESIA</h1>
        <center>
            <hr style="border: 4px solid burlywood; max-width: 50px;">
        </center>
    </div>
    <div class="container text-white" style="margin-top: 6%;">
        <div class="mb-3" style="max-width: 100%;">
            <div class="row g-0">
                <center>
                    <img src="asset/drive_indonesia.jpg"
                        class="img-fluid rounded mb-5" alt="..." style="width: 1000px;">
                </center>
            </div>
            <div class="row">
                <div class="col-xl-10"
                    style="max-width: 1020px; justify-content: center;align-content: center;margin: auto;display: flex;">
                    <p class="card-text">DRIVE adalah grup musik asal Jakarta, Indonesia yang dibentuk pada 25 November 2005. Anggota band ini
                        berjumlah empat orang yaitu Axl Ramanda (vokal), Budi Rahardjo (gitar), Dygo Pratama (bas), dan Rudy Joe (drum).</p>
                </div>
                <p>&nbsp;</p>
                <div class="col-xl-10"
                    style="max-width: 1020px; justify-content: center;align-content: center;margin: auto;display: flex;">
                    <p class="card-text text-break">
                        Saat ini, DRIVE memiliki total 7 album yaitu Esok Lebih Baik (2007), Ode (album kompilasi , 2008), Kita untuk
Selamanya (2008), Bintang yang Bersinar (2010), Cahaya Terang (2011), Essence of Life (2015), RE.VIV.AL (2021).
                    </p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-xl-4">
                <p><iframe loading="lazy" src="https://open.spotify.com/embed/artist/1DgveZI0VAdnZxNiEsZPuF"
                        width="100%" height="380" frameborder="0"></iframe></p>
            </div>
            <div class="col-xl-4">
                <div style="margin-top: 15%; margin-bottom: 10%;">
                    <p style="position: relative;">
                        <a href="https://www.youtube.com/watch?v=-JjVpnAlfMc" target="_blank">
                            <img src="https://img.youtube.com/vi/-JjVpnAlfMc/maxresdefault.jpg" 
                                 width="100%" 
                                 height="100%" 
                                 style="border-radius: 10px; object-fit: cover;" 
                                 alt="YouTube Thumbnail">
                            <img src="asset/picture/play-button-embed.png" 
                                 width="200" 
                                 style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 1;" 
                                 alt="YouTube Logo">
                        </a>
                    </p>
                </div>
            </div>            
            <div class="col-xl-4">
                <p><iframe src="https://www.instagram.com/drive_indonesia/embed" style="border-radius: 10px;"
                        width="100%" height="380" frameborder="10" scrolling="no" allowtransparency="true"></iframe>
                </p>
            </div>
        </div>
    </div>
    <script>
        // Event listener untuk tombol toggle di dalam navbar
        document.getElementById('toggleSidebar').addEventListener('click', function (event) {
            event.stopPropagation(); // Mencegah propagasi event ke atas
            document.getElementById('sidebar').classList.toggle('open');
        });

        // Event listener untuk tombol toggle di dalam halaman lain (contoh: toggleSidebar1)
        document.getElementById('toggleSidebar1').addEventListener('click', function (event) {
            event.stopPropagation(); // Mencegah propagasi event ke atas
            document.getElementById('sidebar').classList.toggle('open');
        });

        // Event listener untuk menutup sidebar saat klik di luar sidebar
        document.addEventListener('click', function (event) {
            var sidebar = document.getElementById('sidebar');
            if (event.target !== sidebar && !sidebar.contains(event.target)) {
                sidebar.classList.remove('open');
            }
        });

        document.addEventListener('DOMContentLoaded', function () {
            var sidebar = document.getElementById('sidebar');
            var toggleSidebarButton = document.getElementById('toggleSidebar');
            var closeSidebarButton = document.getElementById('closeSidebar');

            // Event listener for toggling the sidebar
            toggleSidebarButton.addEventListener('click', function (event) {
                event.stopPropagation();
                sidebar.classList.toggle('open');
            });

            // Event listener for closing the sidebar
            closeSidebarButton.addEventListener('click', function () {
                sidebar.classList.remove('open');
            });

            // Event listener to close the sidebar when clicking outside it
            document.addEventListener('click', function (event) {
                if (event.target !== sidebar && !sidebar.contains(event.target)) {
                    sidebar.classList.remove('open');
                }
            });
        });

    </script>

</body>

</html>
