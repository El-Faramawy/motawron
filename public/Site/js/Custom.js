$(document).ready(function () {

    //SmoothScroll js
    var scroll = new SmoothScroll('a[href*="#"]');

    //WOW js
    new WOW().init();

    //materialSelect
    $('.mdb-select').materialSelect();

    //pickatime
    $('#input_starttime').pickatime({
        twelvehour: true,
    });

    //pickadate
    $('.datepicker').pickadate();


    $(function () {
        'use strict';

        $('#rightSlide.button-collapse').sideNav({
            edge: 'right'
        });
    });

    //navbar ainmation
    $(window).scroll(function () {
        var appScroll = $(document).scrollTop();

        if ((appScroll > 60) && (appScroll < 99999999999)) {
            $(".navbar").addClass("navAnimate");

        };
        if ((appScroll > 0) && (appScroll < 60)) {
            $(".navbar").removeClass("navAnimate");
        };
    });

    var swiper = new Swiper('.swiper-container', {
        spaceBetween: 30,
        speed: 2000,
        centeredSlides: true,
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },

    });

    $(".btn-outline-success").click(function () {
        $(".map-frame").slideToggle(1000);
    });

    //////what-we-dol-carousel
    $('#what-we-do').owlCarousel({
        loop: true,
        rtl: true,
        smartSpeed: 1000,
        autoplayTimeout: 5000,
        responsiveClass: true,
        autoplay: true,
        margin: 0,
        dots: false,
        dotsEach: false,
        nav: false,
        // animateOut: 'fadeOut',
        responsive: {
            0: {
                items: 1,
            },
            576: {
                items: 1,
            },
            767: {
                items: 2,
            },
            1000: {
                items: 3,
            }
        }
    });



    //===============counter==========
    var counters = $(".count");
    var countersQuantity = counters.length;
    var counter = [];

    for (i = 0; i < countersQuantity; i++) {
        counter[i] = parseInt(counters[i].innerHTML);
    }

    var count = function (start, value, id) {
        var localStart = start;
        setInterval(function () {
            if (localStart < value) {
                localStart++;
                counters[id].innerHTML = localStart;
            }
        }, 40);
    }

    for (j = 0; j < countersQuantity; j++) {
        count(0, counter[j], j);
    }

    //=====================



});

// $(".ex1").zoom();

// //toast
// $('.toast').toast('show');