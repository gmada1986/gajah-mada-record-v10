<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gajah Mada Record</title>
    @include('linkcdn.linkcdncssbootstrap')
</head>

<body>
    <!-- Navbar -->
    {{-- @include('layout.nav') --}}
    <nav class="navbar navbar-expand-lg navbar-dark p-3" style="background-color: #181935;">
        <div class="container-fluid">
            <a class="navbar-brand">
                @php
                $logo = \App\Models\Logo::first();
                $logoSrc = $logo ? asset('asset/logo-brand/' . $logo->file_name) :
                asset('asset/logo-brand/gajahmadalogo.png');
                @endphp
                <img src="{{ $logoSrc }}" alt="" width="130px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" d="M4 6h16M7 12h13m-10 6h10" /></svg></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link mx-2 active fw-bolder" style="font-size: 1.5em;" aria-current="page"
                            href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 fw-bolder" style="font-size: 1.5em;" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 fw-bolder" style="font-size: 1.5em;" href="#blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 fw-bolder" style="font-size: 1.5em;" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end - nav -->

    <!-- content -> vidio -->
    {{-- @include('layout.videolayout') --}}
    <div class="container-fluid" id="home">
        <div class="row">
            <div style="background: rgb(34, 34, 34); padding: 0; line-height: 1;">
                <video autoplay muted loop preload="auto"
                    style="width: 100%; height: 100%; object-fit: cover; background-size: cover; opacity: 1;">
                    <source src="asset/video/Main-Video.mp4" type="video/mp4">
                </video>
                <div class="text-center text-white" style="margin-top: -15%;">
                    <h1 class="fw-bolder text-center" style="font-size: 2.2vmax; line-height: 0.5;">GAJAH MADA RECORD (1986 - NOW)</h1>
                    <h1 class="fw-medium text-center text-uppercase" style="font-size: 1.7vmax;">Label and Recording
                        Company</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- end - content -> vidio -->

    <!-- content-> about -> dll -->
    {{-- @include('layout.about') --}}
    <div style="background-color: #181935; padding: 50px;" id="about">
        <div class="justify-content-between flex-wrap">
            <div class="row rowqaef" style="justify-content: center; align-content: center; margin: auto;">
                <div class="col-xl-2">
                    <div class="cardvwx active-cardvwx p-3 mb-2 fs-6 fw-bold" onclick="showSlide('slide1')">
                        <a href="#slide1" class="text-decoration-none text-white-50">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M13.5 4A1.5 1.5 0 0 0 12 5.5A1.5 1.5 0 0 0 13.5 7A1.5 1.5 0 0 0 15 5.5A1.5 1.5 0 0 0 13.5 4m-.36 4.77c-1.19.1-4.44 2.69-4.44 2.69c-.2.15-.14.14.02.42c.16.27.14.29.33.16c.2-.13.53-.34 1.08-.68c2.12-1.36.34 1.78-.57 7.07c-.36 2.62 2 1.27 2.61.87c.6-.39 2.21-1.5 2.37-1.61c.22-.15.06-.27-.11-.52c-.12-.17-.24-.05-.24-.05c-.65.43-1.84 1.33-2 .76c-.19-.57 1.03-4.48 1.7-7.17c.11-.64.41-2.04-.75-1.94Z">
                                </path>
                            </svg> About
                        </a>
                    </div>
                </div>
                <div class="col-xl-2">
                    <div class="cardvwx p-3 mb-2 fs-6 fw-bold" onclick="showSlide('slide2')">
                        <a href="#slide2" class="text-decoration-none text-white-50">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24">
                                <g fill="none">
                                    <path
                                        d="M24 0v24H0V0h24ZM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018Zm.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022Zm-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01l-.184-.092Z">
                                    </path>
                                    <path fill="currentColor"
                                        d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14Zm0 2H5v14h14V5Zm-6.963 2.729c.271-.868 1.44-.95 1.85-.184l.052.11L15.677 12H17a1 1 0 0 1 .117 1.993L17 14h-1.993a1.01 1.01 0 0 1-.886-.524l-.052-.11l-.953-2.384l-1.654 5.293c-.259.828-1.355.953-1.807.255l-.06-.105L8.381 14H7a1 1 0 0 1-.117-1.993L7 12h1.994c.34 0 .654.17.84.449l.063.11l.388.776l1.752-5.606Z">
                                    </path>
                                </g>
                            </svg> Achievement
                        </a>
                    </div>
                </div>
                <div class="col-xl-2">
                    <div class="cardvwx p-3 mb-2 fs-6 fw-bold" onclick="showSlide('slide3')">
                        <a href="#slide3" class="text-decoration-none text-white-50">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 256 256">
                                <path fill="currentColor"
                                    d="m164.44 105.34l-48-32A8 8 0 0 0 104 80v64a8 8 0 0 0 12.44 6.66l48-32a8 8 0 0 0 0-13.32ZM120 129.05V95l25.58 17ZM216 40H40a16 16 0 0 0-16 16v112a16 16 0 0 0 16 16h176a16 16 0 0 0 16-16V56a16 16 0 0 0-16-16Zm0 128H40V56h176v112Zm16 40a8 8 0 0 1-8 8H32a8 8 0 0 1 0-16h192a8 8 0 0 1 8 8Z">
                                </path>
                            </svg> Video
                        </a>
                    </div>
                </div>
                <div class="col-xl-2">
                    <div class="cardvwx p-3 mb-2 fs-6 fw-bold" onclick="showSlide('slide4')">
                        <a href="#slide4" class="text-decoration-none text-white-50">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M15.25 18.75q.3 0 .525-.225T16 18q0-.3-.225-.525t-.525-.225q-.3 0-.525.225T14.5 18q0 .3.225.525t.525.225Zm2.75 0q.3 0 .525-.225T18.75 18q0-.3-.225-.525T18 17.25q-.3 0-.525.225T17.25 18q0 .3.225.525t.525.225Zm2.75 0q.3 0 .525-.225T21.5 18q0-.3-.225-.525t-.525-.225q-.3 0-.525.225T20 18q0 .3.225.525t.525.225ZM5 21q-.825 0-1.412-.587T3 19V5q0-.825.588-1.412T5 3h14q.825 0 1.413.588T21 5v6.7q-.475-.225-.975-.387T19 11.075V5H5v14h6.05q.075.55.238 1.05t.387.95H5Zm0-3v1V5v6.075V11v7Zm2-1h4.075q.075-.525.238-1.025t.362-.975H7v2Zm0-4h6.1q.8-.75 1.788-1.25T17 11.075V11H7v2Zm0-4h10V7H7v2Zm11 14q-2.075 0-3.537-1.463T13 18q0-2.075 1.463-3.537T18 13q2.075 0 3.538 1.463T23 18q0 2.075-1.463 3.538T18 23Z">
                                </path>
                            </svg> Our Value
                        </a>
                    </div>
                </div>
                <div class="col-xl-2">
                    <div class="cardvwx p-3 mb-2 fs-6 fw-bold" onclick="showSlide('slide5')">
                        <a href="#slide5" class="text-decoration-none text-white-50">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M18.5 10H22v2h-2v5.5q0 1.05-.725 1.775T17.5 20q-1.05 0-1.775-.725T15 17.5q0-1.05.725-1.775T17.5 15q.2 0 .45.038t.55.162zM3 20v-2.8q0-.875.438-1.575T4.6 14.55q1.55-.775 3.15-1.162T11 13q1.05 0 2.088.163t2.087.487q-.5.3-.9.725t-.7.925q-.65-.15-1.287-.225T11 15q-1.425 0-2.8.35t-2.7 1q-.225.125-.362.35T5 17.2v.8h8.025q.05.5.238 1t.512 1zm8-8q-1.65 0-2.825-1.175T7 8q0-1.65 1.175-2.825T11 4q1.65 0 2.825 1.175T15 8q0 1.65-1.175 2.825T11 12m0-2q.825 0 1.413-.587T13 8q0-.825-.587-1.412T11 6q-.825 0-1.412.588T9 8q0 .825.588 1.413T11 10m0 8" />
                            </svg> artist </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5" style="margin-bottom: 100px;">
            <div class="slides active-slide" id="slide1">
                <p class="pabout">Gajah Mada Record was founded in 1986, led by Sugama Trisnadi with its first artist Ida Laila. As time goes by, this company which operates in music labels and recordings also houses various artists such as Nia Daniaty, Obbie Messakh, Meggy Z, Caca Handika, Rama Aiphama, Puput Melati, Melisa Trisnadi (Abang tukang bakso), Lenong Rumpi, Camelia Malik and others . During its existence, Gajah Mada Record has received 11 HDX Awards & 2 BASF Awards, which were prestigious awards at that time.</p>
                <p class="pabout">In 1998, Gajah Mada Record evolved into Kampung Artis Group, which at that time focused on renting equipment and shooting locations for well-known domestic soap operas, Anak Jalanan, Cinta Fitri, Tendangan si Madun, Sahaya Cinta, Taj Mahal, Islam KTP , Sampeyan Musilm, and others. In 2008, Kampung Artis Group received a Muri record award as the largest shooting location.</p>
                <p class="pabout">In the 90s, Gajah Mada Record was also a pioneer of children's songs, releasing legendary children's songs such as, "Semut-Semut Kecil, Abang Tukang Bakso, 1+1, Si Komo, which were popularized by Melisa Trisnadi who was son of the founder of Gajah Mada Record.</p>
                <p class="pabout">Running until now, in 2020, Gajah Mada Record is back with new colors and concepts. Ready to contribute directly to the world of music by supporting young and talented domestic musicians. Like the twins Rizki Ridho, Indonesian Idol 2021 graduates Axl Ramanda, DRIVE, Ray Surajaya, Valdy Nyonk, Zinidin Zidan, Devta Pramesthi, Syahrul Hikmal, Ukeba Squad, Aditya Lukman, and others.</p>
            </div>
            <div class="slides" id="slide2">
                {{-- 11 HDX Awards --}}
                <h1 class="fs-4 pabout" id="awardParagraph" style="cursor: pointer;" onclick="toggleDropdown()"> 11 HDX Awards
                    <span id="dropdownToggleIcon" class="arrow-down"></span>
                </h1>
                <div id="dropdownContent" class="randomClass d-none">
                    <h1 class="fs-5 mt-4 fw-normal mt-2 text-white ms-5">Sakit Gigi - Meggy Z rilis (1996)</h1>
                    <h1 class="fs-5 mt-4 fw-normal mt-2 text-white ms-5">Termiskin Di Dunia - Hamdan ATT (rilis 1985)</h1>
                    <h1 class="fs-5 mt-4 fw-normal mt-2 text-white ms-5">Sepiring Berdua - Ida Laila (1995)</h1>
                    <h1 class="fs-5 mt-4 fw-normal mt-2 text-white ms-5">Abang Tukang Bakso - Melisa (1989)</h1>
                    <h1 class="fs-5 mt-4 fw-normal mt-2 text-white ms-5">Si Komo Lewat Tol - Melisa (1995)</h1>
                    <h1 class="fs-5 mt-4 fw-normal mt-2 text-white ms-5">Semut Semut Kecil - Melisa (1997)</h1>
                    <h1 class="fs-5 mt-4 fw-normal mt-2 text-white ms-5">Hati yang Luka - Obbie Messakh (1987)</h1>
                    <h1 class="fs-5 mt-4 fw-normal mt-2 text-white ms-5">Cinta Sabun mandi - Jaja Miharja (1991)</h1>
                    <h1 class="fs-5 mt-4 fw-normal mt-2 text-white ms-5">Tidak Semua Laki² - Basofi Sudirman (1992)</h1>
                    <h1 class="fs-5 mt-4 fw-normal mt-2 text-white ms-5">Simalakama - Rama Aifhama (1995)</h1>

                </div>
                {{-- 2 BASF Awards --}}
                <h1 class="fs-4 pabout" id="awardParagraph" style="cursor: pointer;" onclick="toggleDropdown1()"> 2 BASF
                    Awards
                    <span id="dropdownToggleIcon1" class="arrow-down"></span> </h1>
                <div id="dropdownContent1" class="randomClass d-none">
                    <h1 class="fs-5 mt-4 fw-normal mt-2 text-white ms-5">Ini Rindu - Farid Hardja (1996)</h1>
                    <h1 class="fs-5 mt-4 fw-normal mt-2 text-white ms-5">Mandi Kembang - Caca Handika (1994)</h1>
                </div>
                {{-- <p class="pabout"></p> --}}
                {{-- 2 BASF Awards --}}
                <h1 class="fs-4 pabout" id="awardParagraph" style="cursor: pointer;" onclick="toggleDropdown2()"> Rekor Muri
                    Lokasi Shooting Terbesar (2008)
                    <span id="dropdownToggleIcon" class="arrow-down"></span>
                </h1>
                <div id="dropdownContent2" class="randomClass d-none">
                    <div class="d-flex justify-content-between align-items-center text-white scrollable-container">
                        <div class="container overflow-auto d-flex gap-2" id="cardContainer4sld">
                            <div class="col-xl-3">
                                <div class="" style="width: auto; overflow: hidden;">
                                    <img src="asset/imgxample.jpeg"
                                        class="card-img-top rounded responsive-card-image rspnsiveimgartist"
                                        alt="Tidak Muncul / null" style="width: 100%; height: 350px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slides" id="slide3">
                <div class="container mt-5">
                    <div class="row">
                        @foreach($videos as $video)
                        <div class="col-xl-4">
                            <a href="https://www.youtube.com/watch?v={{ $video->link }}" src="" id="{{ $video->id }}">
                                <div class="card">
                                    <img src="{{ $video->thumbnail }}" alt="{{ $video->title }}" class="img-fluid"
                                        style="cursor: pointer;" data-toggle="modal"
                                        data-target="#videoModal{{ $video->id }}">
                                </div>
                            </a>
                            <h1 class="fs-6 mb-4 fw-normal mt-2 text-white-50">{{ $video->judul }}</h1>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="slides" id="slide4">
                <p class="pabout">
                    <center>
                        <div class="row gap-4" style="display: flex; justify-content: center; margin: auto;">
                            <div class="col-xl-2 mt-4">
                                <div class="card align-self-stretch rspnsv-card-about"
                                    style="width: 200px; height: 200px; border-radius: 13px; background-color: rgba(255, 255, 255, 0.1)!important; color: #F4FFF8;">
                                    <div class="card-body text-white">
                                        <h5 class="card-title" style="font-size: 19px;">INTEGRITY</h5>
                                        <p class="card-text">We prioritize ethics and morality in every project we
                                            create.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 mt-4">
                                <div class="card align-self-stretch rspnsv-card-about"
                                    style="width: 200px; height: 200px; border-radius: 13px; background-color: rgba(255, 255, 255, 0.1)!important; color: #F4FFF8;">
                                    <div class="card-body">
                                        <h5 class="card-title" style="font-size: 19px;">TEAM WORK</h5>
                                        <p class="card-text">We have professional collaboration, teams, and partners</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 mt-4">
                                <div class="card align-self-stretch rspnsv-card-about"
                                    style="width: 200px; height: 200px; border-radius: 13px; background-color: rgba(255, 255, 255, 0.1)!important; color: #F4FFF8;">
                                    <div class="card-body">
                                        <h5 class="card-title" style="font-size: 19px;">GOAL ORIENTED</h5>
                                        <p class="card-text">We have a strong focus on achieving our goals, both
                                            individual and collective.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 mt-4">
                                <div class="card align-self-stretch rspnsv-card-about"
                                    style="width: 200px; height: 200px; border-radius: 13px; background-color: rgba(255, 255, 255, 0.1)!important; color: #F4FFF8;">
                                    <div class="card-body">
                                        <h5 class="card-title" style="font-size: 19px;">COLLABORATION</h5>
                                        <p class="card-text">We promote active collaboration among internal teams and
                                            external partners.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 mt-4">
                                <div class="card align-self-stretch rspnsv-card-about"
                                    style="width: 200px; height: 200px; border-radius: 13px; background-color: rgba(255, 255, 255, 0.1)!important; color: #F4FFF8;">
                                    <div class="card-body">
                                        <h5 class="card-title" style="font-size: 19px;">CREATIVITY</h5>
                                        <p class="card-text">We encourage innovation and creativity in every aspect of
                                            our work.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </center>
                </p>
            </div>
            <div class="slides" id="slide5">
                <center>
                    <div class="row">
                        <div class="col-xl-4 mt-4">
                            <a href="/page1">
                                <img src="asset/drive_indonesia.jpg" class="rspnsiveimgartist" alt=""
                                    style="object-fit: cover; width: 90%; height: 300px; border-radius: 20px;">
                                <h1 class="fs-6 text-start text-white mt-2 text-center">DRIVE BAND INDONESIA</h1>
                            </a>
                        </div>
                        <div class="col-xl-4 mt-4">
                            <a href="/page2">
                                <img src="https://oktana.id/wp-content/uploads/2023/07/Axl-Photo-3.png"
                                    class="rspnsiveimgartist" alt=""
                                    style="object-fit: cover; width: 90%; height: 300px; border-radius: 20px;">
                                <h1 class="fs-6 text-start text-white mt-2 text-center">AXL RAMANDA</h1>
                            </a>
                        </div>
                        <div class="col-xl-4 mt-4">
                            <a href="/page3">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRGgBqf0OjOOrChFN1PMlIajbR6ySplBSVgduHm7BXNwPyFr8eYtFZlj3L0MBHIhaznDz4&usqp=CAU"
                                    class="rspnsiveimgartist" alt=""
                                    style="object-fit: cover; width: 90%; height: 300px; border-radius: 20px;">
                                <h1 class="fs-6 text-start text-white mt-2 text-center">RAY SURAJAYA</h1>
                            </a>
                        </div>
                        <div class="col-xl-4 mt-4">
                            <a href="/page4">
                                <img src="asset/valdy-nyonk2.JPG"
                                    class="rspnsiveimgartist" alt=""
                                    style="object-fit: cover; width: 90%; height: 300px; border-radius: 20px;">
                                <h1 class="fs-6 text-start text-white mt-2 text-center">VALDY NYONK</h1>
                            </a>
                        </div>
                        <div class="col-xl-4 mt-4">
                            <a href="/page5">
                                <img src="asset/rizki_ridho.jpg" class="rspnsiveimgartist" alt=""
                                    style="object-fit: cover; width: 90%; height: 300px; border-radius: 20px;">
                                <h1 class="fs-6 text-start text-white mt-2 text-center">RIZKI RIDHO</h1>
                            </a>
                        </div>
                        <div class="col-xl-4 mt-4">
                            <a href="/page6">
                                <img src="asset/akustik_kotatua.jpg" class="rspnsiveimgartist" alt=""
                                    style="object-fit: cover; width: 90%; height: 300px; border-radius: 20px;">
                                <h1 class="fs-6 text-start text-white mt-2 text-center">AKUSTIK KOTA TUA</h1>
                            </a>
                        </div>
                        <div class="col-xl-4 mt-4">
                            <a href="/page7">
                                <img src="asset/zidan_1.jpg" class="rspnsiveimgartist" alt=""
                                    style="object-fit: cover; width: 90%; height: 300px; border-radius: 20px;">
                                <h1 class="fs-6 text-start text-white mt-2 text-center">ZINIDIN ZIDAN</h1>
                            </a>
                        </div>
                        <div class="col-xl-4 mt-4">
                            <a href="/page8">
                                <img src="asset/DEVTA_PRAMESTHI.jpg" class="rspnsiveimgartist" alt=""
                                    style="object-fit: cover; width: 90%; height: 300px; border-radius: 20px;">
                                <h1 class="fs-6 text-start text-white mt-2 text-center">DEVTA PRAMESTHI</h1>
                            </a>
                        </div>
                        <div class="col-xl-4 mt-4">
                            <a href="/page9">
                                <img src="asset/syahrulhikmal.jpg" class="rspnsiveimgartist" alt=""
                                    style="object-fit: cover; width: 90%; height: 300px; border-radius: 20px;">
                                <h1 class="fs-6 text-start text-white mt-2 text-center">SYAHRUL HIKMAL</h1>
                            </a>
                        </div>
                        <div class="col-xl-4 mt-4">
                            <a href="page10">
                                <img src="asset/ukeba-squead.jpg" class="rspnsiveimgartist" alt=""
                                    style="object-fit: cover; width: 90%; height: 300px; border-radius: 20px;">
                                <h1 class="fs-6 text-start text-white mt-2 text-center">UKEBA SQUAD</h1>
                            </a>
                        </div>
                        <div class="col-xl-4 mt-4">
                            <a href="/page11">
                                <img src="asset/Aditya_lukman_B.jpg" class="rspnsiveimgartist" alt=""
                                    style="object-fit: cover; width: 90%; height: 300px; border-radius: 20px;">
                                <h1 class="fs-6 text-start text-white mt-2 text-center"> ADITYA LUKMAN</h1>
                            </a>
                        </div>
                    </div>
                </center>
            </div>
        </div>
    </div>
    <!-- end - content-> about -> dll -->

    <!-- Discography -->
    {{-- @include('layout.discography') --}}
    <div class="container" style="margin-top: 100px;">
        <center>
            <h1 class="fw-bold fs-1 text-uppercase" style="color: rgba(168, 145, 145, 1);">Discography</h1>
        </center>
        <div class="mt-5 mb-5">
            <h1 class="fw-bold fs-4" style="color: rgb(131, 88, 88);">DANGDUT</h1>
            <div class="d-flex justify-content-between align-items-center z">
                <div class="overflow-auto d-flex gap-2" id="cardContainer2sld">
                    <!-- Card 1 -->
                    <div class="col-12 col-md-4" style="width: auto; overflow: hidden;">
                        <img src="asset/Sakit Gigi - Meggy Z.jpg"
                            class="card-img-top rounded responsive-card-image" alt="Tidak Muncul / null"
                            style="object-fit: contain; width: 100%; height: 350px;">
                        <center>
                            <h1 class="fw-normal fs-6">Sakit Gigi - Meggy Z</h1>
                        </center>
                    </div>
                    <div class="col-12 col-md-4" style="width: auto; overflow: hidden;">
                        <img src="https://i.scdn.co/image/ab67616d0000b273bb18789fad0c628103d14cfa"
                            class="card-img-top rounded responsive-card-image" alt="Tidak Muncul / null"
                            style="object-fit: contain; width: 100%; height: 350px;">
                        <center>
                            <h1 class="fw-normal fs-6">⁠Sepiring Berdua - Ida Laila</h1>
                        </center>
                    </div>
                    <div class="col-12 col-md-4" style="width: auto; overflow: hidden;">
                        <img src="asset/gubuk derita.jpg"
                            class="card-img-top rounded responsive-card-image" alt="Tidak Muncul / null"
                            style="object-fit: contain; width: 100%; height: 350px;">
                        <center>
                            <h1 class="fw-normal fs-6">Gubuk Derita - Yusnia</h1>
                        </center>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="" style="width: auto; overflow: hidden;">
                            <img src="asset/termisl´kin di dunia - hamdan att.jpg"
                                class="card-img-top rounded responsive-card-image" alt="Tidak Muncul / null"
                                style="object-fit: contain; width: 100%; height: 350px;">
                            <center>
                                <h1 class="fw-normal fs-6">Termiskin Di Dunia - Hamdan ATT</h1>
                            </center>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="" style="width: auto; overflow: hidden;">
                            <img src="asset/Cinta Sabun Mandi - Jaja Miharja.jpg"
                                class="card-img-top rounded responsive-card-image" alt="Tidak Muncul / null"
                                style="object-fit: contain; width: 100%; height: 350px;">
                            <center>
                                <h1 class="fw-normal fs-6">Cinta Sabun Mandi - Jaja Miharja</h1>
                            </center>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="" style="width: auto; overflow: hidden;">
                            <img src="asset/Terlanjur Basah - Meggy Z.jpg"
                                class="card-img-top rounded responsive-card-image" alt="Tidak Muncul / null"
                                style="object-fit: contain; width: 100%; height: 350px;">
                            <center>
                                <h1 class="fw-normal fs-6">⁠Terlanjur Basah - Meggy Z</h1>
                            </center>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="" style="width: auto; overflow: hidden;">
                            <img src="asset/tak semua lelaki - Basofi S.jpg"
                                class="card-img-top rounded responsive-card-image" alt="Tidak Muncul / null"
                                style="object-fit: contain; width: 100%; height: 350px;">
                            <center>
                                <h1 class="fw-normal fs-6">Tidak Semua Laki-Laki - Basofi S (Leo Waldy)</h1>
                            </center>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="" style="width: auto; overflow: hidden;">
                            <img src="https://m.media-amazon.com/images/I/51OLnwbX14L._UXNaN_FMjpg_QL85_.jpg"
                                class="card-img-top rounded responsive-card-image" alt="Tidak Muncul / null"
                                style="object-fit: contain; width: 100%; height: 350px;">
                            <center>
                                <h1 class="fw-normal fs-6">Suratan Cinta (Rizki Ridho)</h1>
                            </center>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="" style="width: autom; overflow: hidden;">
                            <img src="asset/kembalilah padaku - Rizki Ridho.jpg"
                                class="card-img-top rounded responsive-card-image" alt="Tidak Muncul / null"
                                style="object-fit: contain; width: 100%; height: 350px;">
                            <center>
                                <h1 class="fw-normal fs-6">⁠Kembalilah Padaku 2 (Rizki Ridho)</h1>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Pop --}}
        <div class="mt-5 mb-5">
            <h1 class="fw-bold fs-4" style="color: rgb(131, 88, 88);">POP</h1>
            <div class="d-flex justify-content-between align-items-center z">
                <div class="overflow-auto d-flex gap-2" id="cardContainer2sld">
                    <!-- Card 1 -->
                    <div class="col-12 col-md-4" style="width: auto; overflow: margin-top: 0px!important;">
                        <img src="asset/sejujurnya (Axl Ramanda & Dul Jaelani).jpg"
                            class="card-img-top rounded responsive-card-image" alt="Tidak Muncul / null"
                            style="object-fit: contain; width: 100%; height: 350px;">
                        <center>
                            <h1 class="fw-normal fs-6">Sejujurnya (axl ramanda & dul jaelani)</h1>
                        </center>
                    </div>
                    <div class="col-12 col-md-4" style="width: auto; overflow: margin-top: 0px!important;">
                        <img src="asset/Tak Sejalan ( Axl Ramanda)..jpg"
                            class="card-img-top rounded responsive-card-image" alt="Tidak Muncul / null"
                            style="object-fit: contain; width: 100%; height: 350px;">
                        <center>
                            <h1 class="fw-normal fs-6">Tak sejalan (axl ramanda)</h1>
                        </center>
                    </div>

                    <div class="col-12 col-md-4" style="width: auto; overflow: margin-top: 0px!important;">
                        <img src="asset/Melepasmu new version - Drive.jpg"
                            class="card-img-top rounded responsive-card-image" alt="Tidak Muncul / null"
                            style="object-fit: contain; width: 100%; height: 350px;">
                        <center>
                            <h1 class="fw-normal fs-6">Melepasmu (new version) (drive)</h1>
                        </center>
                    </div>
                    <div class="col-12 col-md-4" style="width: auto; overflow: margin-top: 0px!important;">
                        <img src="https://is1-ssl.mzstatic.com/image/thumb/Music116/v4/23/1d/0c/231d0c82-ae56-17db-5c20-84a46cf21280/681178137950.png/600x600bf-60.jpg"
                            class="card-img-top rounded responsive-card-image" alt="Tidak Muncul / null"
                            style="object-fit: contain; width: 100%; height: 350px;">
                        <center>
                            <h1 class="fw-normal fs-6">Akulah Dia (new version) (drive)</h1>
                        </center>
                    </div>
                    <div class="col-12 col-md-4" style="width: auto; overflow: margin-top: 0px!important;">
                        <img src="asset/Deskripsi dirimu - Drive.jpg"
                            class="card-img-top rounded responsive-card-image" alt="Tidak Muncul / null"
                            style="object-fit: contain; width: 100%; height: 350px;">
                        <center>
                            <h1 class="fw-normal fs-6"> ⁠Deskripsi dirimu (Drive)</h1>
                        </center>
                    </div>
                    <div class="col-12 col-md-4" style="width: auto; overflow: margin-top: 0px!important;">
                        <img src="asset/Hati yang Luka - Obbie Messakh.jpg"
                            class="card-img-top rounded responsive-card-image" alt="Tidak Muncul / null"
                            style="object-fit: contain; width: 100%; height: 350px;">
                        <center>
                            <h1 class="fw-normal fs-6">Hati yang Luka - Obbie Messakh</h1>
                        </center>
                    </div>
                    <div class="col-12 col-md-4" style="width: auto; overflow: margin-top: 0px!important;">
                        <img src="asset/Rama Aipma - Dinda Bestari.jpg"
                            class="card-img-top rounded responsive-card-image" alt="Tidak Muncul / null"
                            style="object-fit: contain; width: 100%; height: 350px;">
                        <center>
                            <h1 class="fw-normal fs-6">Rama Aiphama - Dinda Bestari</h1>
                        </center>
                    </div>
                </div>
            </div>
        </div>
        {{-- Pop Anak --}}
        <div class="mt-5 mb-5">
            <h1 class="fw-bold fs-4" style="color: rgb(131, 88, 88);">POP ANAK</h1>
            <div class="d-flex justify-content-between align-items-center z">
                <div class="overflow-auto d-flex gap-2" id="cardContainer2sld">
                    <!-- Card 1 -->
                    <div class="col-12 col-md-4" style="width: auto; overflow: margin-top: 0px!important;">
                        <img src="asset/Abang Tukang Bakso - Melisa.jpg"
                            class="card-img-top rounded responsive-card-image" alt="Tidak Muncul / null"
                            style="object-fit: contain; width: 100%; height: 350px;">
                        <center>
                            <h1 class="fw-normal fs-6">Abang Tukang Bakso - Melisa</h1>
                        </center>
                    </div>
                    <div class="col-12 col-md-4" style="width: auto; overflow: margin-top: 0px!important;">
                        <img src="https://geo-media.beatsource.com/image_size/1400x1400/2/d/f/2df3ff58-f09e-431d-bb8f-1d855cb7134b.jpg"
                            class="card-img-top rounded responsive-card-image" alt="Tidak Muncul / null"
                            style="object-fit: contain; width: 100%; height: 350px;">
                        <center>
                            <h1 class="fw-normal fs-6">Semut Semut Kecil - Melisa</h1>
                        </center>
                    </div>
                    <div class="col-12 col-md-4" style="width: auto; overflow: margin-top: 0px!important;">
                        <img src="https://4.bp.blogspot.com/_GsKeAZCytRY/S1xkVCw5SeI/AAAAAAAAAR0/aPp8rnyD4AU/w1200-h630-p-k-no-nu/sikomo.jpg"
                            class="card-img-top rounded responsive-card-image" alt="Tidak Muncul / null"
                            style="object-fit: contain; width: 100%; height: 350px;">
                        <center>
                            <h1 class="fw-normal fs-6">Si Komo Lewat Tol - Melisa</h1>
                        </center>
                    </div>
                    <div class="col-12 col-md-4" style="width: auto; overflow: margin-top: 0px!important;">
                        <img src="https://geo-media.beatsource.com/image_size/500x500/5/0/1/501de415-b295-4e6f-9cc4-7651663e116b.jpg"
                            class="card-img-top rounded responsive-card-image" alt="Tidak Muncul / null"
                            style="object-fit: contain; width: 100%; height: 350px;">
                        <center>
                            <h1 class="fw-normal fs-6">1+1=2 - Puput Melati</h1>
                        </center>
                    </div>
                    <div class="col-12 col-md-4" style="width: auto; overflow: margin-top: 0px!important;">
                        <img src="https://is1-ssl.mzstatic.com/image/thumb/Music124/v4/57/3b/cb/573bcb2c-e492-237e-2b10-74bcdd97b2c8/cover.jpg/1200x1200bf-60.jpg"
                            class="card-img-top rounded responsive-card-image" alt="Tidak Muncul / null"
                            style="object-fit: contain; width: 100%; height: 350px;">
                        <center>
                            <h1 class="fw-normal fs-6">Digigit Nyamuk - Rindu feat. Melisa Si Abang Tukang Bakso</h1>
                        </center>
                    </div>
                    <div class="col-12 col-md-4" style="width: auto; overflow: margin-top: 0px!important;">
                        <img src="https://is1-ssl.mzstatic.com/image/thumb/Music114/v4/af/9c/00/af9c0032-6e0d-46aa-f254-f4877ba4a244/cover.jpg/1200x1200bb.jpg"
                            class="card-img-top rounded responsive-card-image" alt="Tidak Muncul / null"
                            style="object-fit: contain; width: 100%; height: 350px;">
                        <center>
                            <h1 class="fw-normal fs-6">Bebek Kwek Kwek - Rindu</h1>
                        </center>
                    </div>
                    <div class="col-12 col-md-4" style="width: auto; overflow: margin-top: 0px!important;">
                        <img src="https://is1-ssl.mzstatic.com/image/thumb/Music114/v4/c3/09/a3/c309a31e-430c-2bee-1113-0041b126a135/cover.jpg/1200x1200bf-60.jpg"
                            class="card-img-top rounded responsive-card-image" alt="Tidak Muncul / null"
                            style="object-fit: contain; width: 100%; height: 350px;">
                        <center>
                            <h1 class="fw-normal fs-6">⁠Naik Sepeda (Kring-kring Gowes) - Rindu</h1>
                        </center>
                    </div>
                    <div class="col-12 col-md-4" style="width: auto; overflow: margin-top: 0px!important;">
                        <img src="https://is1-ssl.mzstatic.com/image/thumb/Music115/v4/58/b5/d0/58b5d074-51d3-f800-cf19-5b1ebe42ed64/cover.jpg/1200x1200bf-60.jpg"
                            class="card-img-top rounded responsive-card-image" alt="Tidak Muncul / null"
                            style="object-fit: contain; width: 100%; height: 350px;">
                        <center>
                            <h1 class="fw-normal fs-6">buah buahan - Rindu</h1>
                        </center>
                    </div>
                    <div class="col-12 col-md-4" style="width: auto; overflow: margin-top: 0px!important;">
                        <img src="https://is1-ssl.mzstatic.com/image/thumb/Music124/v4/82/55/e8/8255e8ab-c014-2ea0-71e2-aea677eb1774/cover.jpg/1200x1200bf-60.jpg"
                            class="card-img-top rounded responsive-card-image" alt="Tidak Muncul / null"
                            style="object-fit: contain; width: 100%; height: 350px;">
                        <center>
                            <h1 class="fw-normal fs-6">⁠Ikan Ikan - Rindu</h1>
                        </center>
                    </div>
                </div>
            </div>
        </div>
        {{-- Melayu --}}
        <div class="mt-5 mb-5">
            <h1 class="fw-bold fs-4" style="color: rgb(131, 88, 88);">Melayu</h1>
            <div class="d-flex justify-content-between align-items-center z">
                <div class="overflow-auto d-flex gap-2" id="cardContainer2sld">
                    <div class="col-12 col-md-4" style="width: auto; overflow: margin-top: 0px!important;">
                        <img src="https://is1-ssl.mzstatic.com/image/thumb/Music115/v4/c4/81/f2/c481f23d-9ae8-f49d-ed15-8365b9c901ce/cover.jpg/1200x1200bf-60.jpg"
                            class="card-img-top rounded responsive-card-image" alt="Tidak Muncul / null"
                            style="object-fit: contain; width: 100%; height: 350px;">
                        <center>
                            <h1 class="fw-normal fs-6">Selalu Tersimpan (Valdy Nyonk feat Zinidin Zidan)</h1>
                        </center>
                    </div>
                    <div class="col-12 col-md-4" style="width: auto; overflow: margin-top: 0px!important;">
                        <img src="https://is1-ssl.mzstatic.com/image/thumb/Music125/v4/48/e5/bd/48e5bd55-b571-e76c-949d-c5516080a487/cover.jpg/1200x1200bf-60.jpg"
                            class="card-img-top rounded responsive-card-image" alt="Tidak Muncul / null"
                            style="object-fit: contain; width: 100%; height: 350px;">
                        <center>
                            <h1 class="fw-normal fs-6">Kubingkai Dalam Angan (Valdy Nyonk)</h1>
                        </center>
                    </div>
                    <div class="col-12 col-md-4" style="width: auto; overflow: margin-top: 0px!important;">
                        <img src="asset/Termiskin di Dunia.jpg"
                            class="card-img-top rounded responsive-card-image" alt="Tidak Muncul / null"
                            style="object-fit: contain; width: 100%; height: 350px;">
                        <center>
                            <h1 class="fw-normal fs-6">Termiskin di dunia (valdy nyonk)</h1>
                        </center>
                    </div>
                    <div class="col-12 col-md-4" style="width: auto; overflow: margin-top: 0px!important;">
                        <img src="https://is1-ssl.mzstatic.com/image/thumb/Music115/v4/c9/fd/78/c9fd78f9-83e9-34f8-5a12-331eec107e8f/cover.jpg/1200x1200bf-60.jpg"
                            class="card-img-top rounded responsive-card-image" alt="Tidak Muncul / null"
                            style="object-fit: contain; width: 100%; height: 350px;">
                        <center>
                            <h1 class="fw-normal fs-6">Gubug derita (valdy nyonk)</h1>
                        </center>
                    </div>
                    <div class="col-12 col-md-4" style="width: auto; overflow: margin-top: 0px!important;">
                        <img src="https://is1-ssl.mzstatic.com/image/thumb/Music125/v4/e4/85/72/e4857268-e359-c100-75e7-d0507b7543b9/cover.jpg/400x400cc.jpg"
                            class="card-img-top rounded responsive-card-image" alt="Tidak Muncul / null"
                            style="object-fit: contain; width: 100%; height: 350px;">
                        <center>
                            <h1 class="fw-normal fs-6">Sakit gigi (valdy nyonk)</h1>
                        </center>
                    </div>
                    <div class="col-12 col-md-4" style="width: auto; overflow: margin-top: 0px!important;">
                        <img src="https://is1-ssl.mzstatic.com/image/thumb/Music115/v4/32/bd/2a/32bd2af4-53b5-8f19-d776-cf0eb6aa0f9c/cover.jpg/1200x1200bf-60.jpg"
                            class="card-img-top rounded responsive-card-image" alt="Tidak Muncul / null"
                            style="object-fit: contain; width: 100%; height: 350px;">
                        <center>
                            <h1 class="fw-normal fs-6">Karena rupiah (Valdy Nyonk)</h1>
                        </center>
                    </div>
                    <div class="col-12 col-md-4" style="width: auto; overflow: margin-top: 0px!important;">
                        <img src="https://is1-ssl.mzstatic.com/image/thumb/Music125/v4/83/56/5a/83565af2-f566-3477-4604-68490f14184c/cover.jpg/1200x1200bb.jpg"
                            class="card-img-top rounded responsive-card-image" alt="Tidak Muncul / null"
                            style="object-fit: contain; width: 100%; height: 350px;">
                        <center>
                            <h1 class="fw-normal fs-6">Sepiring Berdua (Valdy Nyonk</h1>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end - Discography -->

    <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>

    <!-- spon -->
    {{-- @include('layout.spon') --}}
    <div style="margin-top: 180px;">
        <div class="text-center">
            <h1 class="fw-bold fs-1 text-uppercase" style="color: rgba(168, 145, 145, 1);">Gajah Mada Group</h1>
        </div>
        <center>
            <div class="row justify-content-center" style="margin-top: 50px; gap: 50px; max-width: 100%;">
                {{-- GMR --}}
                <div class="container" style="width: 255px; cursor: pointer;" type="button" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    <img src="asset/sponimg/logo3.png" alt="" class="img-fluid heeh">
                    <div class="card-body text-center">
                        <p class="card-title fw-normal" style="color: rgba(168, 145, 145, 1); font-size: 100%;"> GAJAH MADA RECORD</p>
                    </div>
                </div>

                {{-- moda --}}
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="height: 100%;">
                            <div class="modal-body">
                                <iframe src="https://www.instagram.com/gajahmadarecord/embed" class="rspnsive-iframe-instagram rspnsive-iframe-instagram-phone" width="470" height="400" frameborder="10" scrolling="no" allowtransparency="true"></iframe>
                                <div class="d-flex flex-column mt-4">
                                    <div class="d-flex gap-4">
                                        <img src="https://yt3.googleusercontent.com/ouTD9T_LjQLc7TZ-Z1rgANskjSCk7mTVIhtIXDry922KV8AYBV4CGmbG4vcOUvJgVoZv2L2O6g=s176-c-k-c0x00ffffff-no-rj" width="50%" class="responsive-img-card-alert rounded-circle" alt="">
                                        <div class="text-start text-responsive-600px-center">
                                            <div class="d-flex gap-2">
                                                <img src="asset/youtube.png" alt="YouTube Logo" class="img-end ms-auto" width="50" height="50">
                                                <p class="fs-6 fw-bold pabout text-dark mt-3">GAJAHMADARECORD</p>
                                            </div>
                                            <h1 class="fs-4 fw-bold pabout text-dark">Gajah Mada Record</h1>
                                            <p class="fs-6 fw-normal pabout text-dark">@GAJAHMADARECORD</p>
                                            <a href="javascript:void(0);" onclick="subscribeToChannel()" class="btn btn-body btn-suscriber-hoverdll">Subscribe</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- moda end --}}
                {{-- GMR END--}}

                {{-- KAMPUNG ARTIS RENTAL EQUIPMENT, JAKARTA --}}
                <div class="container" onclick="RENTALEQUIPMENT()" style="width: 255px; cursor: pointer;">
                    <img src="asset/sponimg/logo2.png" alt="" class="img-fluid heeh1">
                    <div class="card-body text-center">
                        <p class="card-title fw-normal" style="color: rgba(168, 145, 145, 1); font-size: 100%;"> KAMPUNG ARTIS <br> RENTAL EQUIPMENT, JAKARTA</p>
                    </div>
                </div>
                {{-- moda --}}
                <div class="modal fade" id="rentalequipment" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content rspnsive-iframe-instagram">
                            <div class="col-xl-6">
                                <p>
                                    <iframe src="https://www.instagram.com/kampungartis_rental/embed"
                                        class="rspnsive-iframe-instagram" width="470" height="400" frameborder="10"
                                        scrolling="no" allowtransparency="true"></iframe>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- moda end --}
                {{-- KAMPUNG ARTIS RENTAL EQUIPMENT, JAKARTA END --}}


                {{-- Kampung Artis FOOD COURT --}}
                <div class="container" onclick="FOODCOURT()" style="width: 255px; cursor: pointer;">
                    <img src="asset/sponimg/logo1.png" alt="" class="img-fluid heeh">
                    <div class="card-body text-center">
                        <p class="card-title fw-normal" style="color: rgba(168, 145, 145, 1); font-size: 100%;"> KAMPUNG ARTIS <br> FOOD COURT</p>
                    </div>
                </div>
                {{-- moda --}}
                <div class="modal fade" id="foodcourt" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content rspnsive-iframe-instagram">
                            <div class="col-xl-6">
                                <p>
                                    <iframe src="https://www.instagram.com/kampungartisfoodcourt/embed"
                                        class="rspnsive-iframe-instagram" width="470" height="400" frameborder="10"
                                        scrolling="no" allowtransparency="true"></iframe>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- moda end --}
                {{-- Kampung Artis FOOD COURT END --}}

                {{-- BAKMI CWIMS --}}
                <div class="container" onclick="BAKMIWIMS()" style="cursor: pointer; width: 255px;">
                    <img src="asset/sponimg/logo5.png" alt="" class="img-fluid heeh">
                    <div class="card-body text-center">
                        <p class="card-title fw-normal" style="color: rgba(168, 145, 145, 1); font-size: 100%;"> BAKMI CWIMS </p>
                    </div>
                </div>
                {{-- moda --}}
                <div class="modal fade" id="bakmiwims" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content rspnsive-iframe-instagram">
                            <div class="col-xl-6">
                                <p>
                                    <iframe src="https://www.instagram.com/cwims.id/embed"
                                        class="rspnsive-iframe-instagram" width="470" height="400" frameborder="10"
                                        scrolling="no" allowtransparency="true"></iframe>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- moda end --}
                {{-- BAKMI CWIMS END --}}

                {{-- MAHAKARYA BAGUS INDONESIA --}}
                <div class="container" onclick="KAMPUNGARTISBALI()" style="cursor: pointer; width: 255px;">
                    <img src="asset/sponimg/kampung artis-bali 1.png" alt="" class="img-fluid heeh">
                    <div class="card-body text-center">
                        <p class="card-title fw-normal" style="color: rgba(168, 145, 145, 1); font-size: 100%;">KAMPUNG ARTIS BALI</p>
                    </div>
                </div>
                {{-- moda --}}
                <div class="modal fade" id="kampungartisbali" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content rspnsive-iframe-instagram">
                            <div class="col-xl-6">
                                <p>
                                    <iframe src="https://www.instagram.com/kampungartis_bali/embed"
                                        class="rspnsive-iframe-instagram" width="470" height="400" frameborder="10"
                                        scrolling="no" allowtransparency="true"></iframe>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- moda end --}
                {{-- MAHAKARYA BAGUS INDONESIA END --}}
            </div>
        </center>
    </div>
    <!-- end - spon -->

    <!-- blog? -->
    {{-- @include('layout.blog') --}}
    <div class="container" style="margin-top: 150px; margin-bottom: 300px!important;" id="blog">
        <center>
            <p class="fw-bold fs-1 text-uppercase" style="color: rgba(168, 145, 145, 1);">Blog</p>
        </center>
        @foreach ($blogs as $blog)
        <div class="card mb-3 hvr border border-0 p-2" style="max-width: 100%; border-radius: 20px;">
            <div class="row g-0">
                <div class="col-md-4" style="margin: 0; justify-content: center; align-content: center; display: flex;">
                    <a class="text-decoration-none text-dark"
                        href="{{ route('blogs.show', ['title' => $blog->title, 'id' => $blog->id]) }}"
                        style="position: relative; overflow: hidden; height: 0; padding-bottom: 56.25%;">
                        @if ($blog->image)
                        <img src="{{ asset('asset/blog/' . $blog->image) }}" class="img-fluid rounded-start"
                            alt="{{ $blog->title }}">
                        @else
                        <img src="{{ asset('path-to-default-image/default-image.jpg') }}"
                            class="img-fluid rounded-start" alt="{{ $blog->title }}">
                        @endif
                    </a>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <a class="text-decoration-none text-dark"
                            href="{{ route('blogs.show', ['title' => $blog->title, 'id' => $blog->id]) }}">
                            <h5 class="card-title">{{ $blog->title }}</h5>
                        </a>
                        <p class="card-text">{{ Str::limit($blog->description, 150, '...') }}</p>
                        <p class="card-text"><small class="text-body-secondary">Date: {{ $blog->blog_date }}</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        <a href="/Blog/Gajah/Mada/Record" class="btn btn-primary float-end p-3 text-white"
            style="width: 100%; text-decoration: none;">Read More</a>
    </div>
    <!-- end - blog? -->

    <!-- contact -->
    {{-- @include('layout.contact') --}}
    <div class="container-fluid p-5 text-white" id="contact" style="background-color: #181935; margin-top: 150px;">
        <div class="row">
            <div class="col-sm-6">
                <h3 class="mb-4">Contact Us</h3>
                <div id="form-message-success" class="mb-4">
                    Your message was sent, thank you!
                </div>
                <form method="POST" action="{{ route('send-email') }}" id="contactForm" name="contactForm" class="contactForm">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="label" for="name">Full Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name"
                                    required>
                                <!-- Menambahkan atribut "required" untuk memastikan pengguna mengisi nama -->
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="label" for="email">Email Address</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email"
                                    required>
                                <!-- Menambahkan atribut "required" untuk memastikan pengguna mengisi alamat email dan menggunakan tipe input email -->
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="label" for="subject">Subject</label>
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                                <!-- Menambahkan atribut "required" untuk memastikan pengguna mengisi subjek -->
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="label" for="message">Message</label>
                                <textarea name="message" class="form-control" id="message" cols="30" rows="4"
                                    placeholder="Message" required></textarea>
                                <!-- Menambahkan atribut "required" untuk memastikan pengguna mengisi pesan -->
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <!-- Menambahkan atribut "required" pada tombol submit (opsional, tergantung kebutuhan) -->
                                <input type="submit" value="Send Message" class="btn btn-primary" required>
                                <div class="submitting"></div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-6"
                style="justify-content: center; align-content: center; display: flex; margin-top: 50px;">
                <iframe style="border-radius: 20px;"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.7269254524995!2d106.7719508759586!3d-6.299568693689519!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ef85fd6e7391%3A0x30a8baab3877496f!2sGajah%20Mada%20Record!5e0!3m2!1sid!2sid!4v1702404417041!5m2!1sid!2sid"
                    width="700" height="400" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <!-- end - contact -->

    <!-- footer -->
    {{-- @include('layout.footer') --}}
    <footer class="p-3" style="background-color: #181935">
        <div class="container">
            <div class="text-white text-center">
                <a href="https://www.privacypolicyonline.com/live.php?token=bZA39cwOgezk9XD5jDqEz3gQORm4yjW4"
                    class="text-white text-decoration-none">Terms &amp; Conditions || Privacy Policy</a>
                <p>Copyright @ 2023 Gajah Mada Record All Right Reserved</p>
            </div>
        </div>
    </footer>
    <!-- end - footer -->

    <!-- link js -->
    @include('linkcdn.linkcdnjsbootstrap')
    <script>
        function stopVideo(videoId) {
            var iframe = document.getElementById('videoIframe' + videoId);
            var iframeSrc = iframe.src;
            iframe.src = iframeSrc;
        }
        function subscribeToChannel() {
            var channelId = "UCenWhwJd6a53ebdoNLrnazg";
            window.open("https://www.youtube.com/channel/" + channelId + "?sub_confirmation=1");
        }
    </script>
    <!-- end  - link js -->
</body>

</html>
