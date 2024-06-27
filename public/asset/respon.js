var win = navigator.platform.indexOf('Win') > -1;
if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
        damping: '0'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
}

document.addEventListener("DOMContentLoaded", function () {
    var myNavbar = new bootstrap.Collapse(document.getElementById('navbarNavDropdown'), {
        toggle: false
    });
    document.querySelector('.navbar-toggler').addEventListener('click', function () {
        myNavbar.toggle();
    });
});

$(document).ready(function () {
    $("a").on('click', function (event) {
        if (this.hash !== "") {
            event.preventDefault();

            var hash = this.hash;

            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 100, function () {
                history.replaceState(null, null, ' ');
            });
        }
    });
});

function toggleDiv() {
    $(".randomClass").toggleClass("d-none");
}

$(document).ready(function () {
    $(".cardvwx").click(function () {
        $(".cardvwx").removeClass("active-cardvwx");
        $(this).addClass("active-cardvwx");
    });
});

function showSlide(slideId) {
    document.querySelectorAll('.cardvwx').forEach(function (card) {
        card.classList.remove('active-cardvwx');
    });
    document.querySelector('[href="#' + slideId + '"]').parentNode.classList.add('active-cardvwx');
    document.querySelectorAll('.slides').forEach(function (slide) {
        slide.classList.remove('active-slide');
    });
    document.getElementById(slideId).classList.add('active-slide');
}

document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll('.cardvwx').forEach(function (card) {
        card.addEventListener('click', function () {
            var slideId = this.getAttribute('href').substring(
                1);
            showSlide(slideId);
        });
    });
});

function stopVideo() {
    var iframe = document.getElementById("youtubeVideo");
    iframe.src = iframe.src; // Memberhentikan video dengan me-refresh URL iframe
}

function toggleDropdown() {
    var dropdownContent = document.getElementById("dropdownContent");
    var dropdownToggleIcon = document.getElementById("dropdownToggleIcon");

    dropdownContent.classList.toggle("d-none");
    dropdownToggleIcon.classList.toggle("rotate");
}

function toggleDropdown1() {
    var dropdownContent = document.getElementById("dropdownContent1");
    var dropdownToggleIcon = document.getElementById("dropdownToggleIcon1");

    dropdownContent.classList.toggle("d-none");
    dropdownToggleIcon.classList.toggle("rotate");
}

function toggleDropdown2() {
    var dropdownContent = document.getElementById("dropdownContent2");
    var dropdownToggleIcon = document.getElementById("dropdownToggleIcon2");

    dropdownContent.classList.toggle("d-none");
    dropdownToggleIcon.classList.toggle("rotate");
}