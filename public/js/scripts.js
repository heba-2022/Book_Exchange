/*global $, jQuery, console, alert, prompt */
$(document).ready(function () {
    "use strict";
    // inialize animate WOW Js
    new WOW().init();

    if ($(".main-slider .owl-carousel").length !== 0) {
        $(".main-slider .owl-carousel").owlCarousel({
            // rtl: true,
            autoplay: true,
            loop: false,
            margin: 0,
            nav: false,
            dots: false,
            items: 1,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            lazyLoad: true,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            // navText: ['<i class="fa fa-angle-right fa-fw"></i>', '<i class="fa fa-angle-left fa-fw"></i>']
        });
    }

    if ($(".market-slider .owl-carousel").length !== 0) {
        $(".market-slider .owl-carousel").owlCarousel({
            // rtl: true,
            autoplay: false,
            loop: false,
            margin: 0,
            nav: false,
            dots: true,
            items: 1,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            lazyLoad: true,
            // animateOut: 'fadeOut',
            // animateIn: 'fadeIn',
            navText: ['<img src="images/icons/arrow-right.svg" />', '<img src="images/icons/arrow-left.svg" />'],
            dotsContainer: '#market-slider-dots'
        }).on('changed.owl.carousel', function (event) {
            console.log($(this).index());
            $(".text-slider1 .owl-carousel").trigger('to.owl.carousel', [event.item.index, 300]);
        });
    }

    if ($(".text-slider1 .owl-carousel").length !== 0) {
        $(".text-slider1 .owl-carousel").owlCarousel({
            // rtl: true,
            autoplay: false,
            loop: false,
            margin: 0,
            nav: false,
            dots: true,
            items: 1,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            lazyLoad: true,
            // animateOut: 'fadeOut',
            // animateIn: 'fadeIn',
            navText: ['<img src="images/icons/arrow-right.svg" />', '<img src="images/icons/arrow-left.svg" />'],
            // dotsContainer: '#market-slider-dots'
        }).on('changed.owl.carousel', function (event) {
            console.log($(this).index());
            $(".market-slider .owl-carousel").trigger('to.owl.carousel', [event.item.index, 300]);
        });
    }

    if ($(".services-slider .owl-carousel").length !== 0) {
        $(".services-slider .owl-carousel").owlCarousel({
            // rtl: true,
            autoplay: true,
            loop: false,
            margin: 0,
            nav: true,
            dots: false,
            items: 1,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            lazyLoad: true,
            // animateOut: 'fadeOut',
            // animateIn: 'fadeIn',
            navText: ['<i class="fa fa-angle-left fa-fw"></i>', '<i class="fa fa-angle-right fa-fw"></i>'],
            // dotsContainer: '#market-slider-dots'
        });
    }

    if ($(".text-slider .owl-carousel").length !== 0) {
        $(".text-slider .owl-carousel").owlCarousel({
            // rtl: true,
            autoplay: false,
            loop: false,
            margin: 0,
            nav: false,
            dots: false,
            items: 1,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            lazyLoad: true,
            // animateOut: 'fadeOut',
            // animateIn: 'fadeIn',
            navText: ['<i class="fa fa-angle-left fa-fw"></i>', '<i class="fa fa-angle-right fa-fw"></i>'],
            dotsContainer: '#carousel-custom-dots'
        }).on('changed.owl.carousel', function (event) {
            console.log($(this).index());
            $(".project-sider .owl-carousel").trigger('to.owl.carousel', [event.item.index, 300]);
        });
    }

    if ($(".project-sider .owl-carousel").length !== 0) {
        $(".project-sider .owl-carousel").owlCarousel({
            // rtl: true,
            autoplay: false,
            loop: false,
            margin: 0,
            nav: true,
            dots: false,
            items: 1,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            lazyLoad: true,
            // animateOut: 'fadeOut',
            // animateIn: 'fadeIn',
            navText: ['<img src="images/icons/arrow-right.svg" />', '<img src="images/icons/arrow-left.svg" />'],
            dotsContainer: '#carousel-custom-dots'
        }).on('changed.owl.carousel', function (event) {
            console.log($(this).index());
            $(".text-slider .owl-carousel").trigger('to.owl.carousel', [event.item.index, 300]);
        });
    }

    $('#carousel-custom-dots .owl-dot').click(function () {
        $(this).siblings().removeClass('active');
        $(this).toggleClass('active');
        $(".project-sider .owl-carousel").trigger('to.owl.carousel', [$(this).index(), 300]);
        $(".text-slider .owl-carousel").trigger('to.owl.carousel', [$(this).index(), 300]);
    });

    $('#market-slider-dots .owl-dot').click(function () {
        $(this).siblings().removeClass('active');
        $(this).toggleClass('active');
        $(".market-slider .owl-carousel").trigger('to.owl.carousel', [$(this).index(), 300]);
        $(".text-slider1 .owl-carousel").trigger('to.owl.carousel', [$(this).index(), 300]);
    });

    window.onscroll = function () {
        myFunction();
    };

    // myFunction();

    var navbar = document.getElementById("mainNavigation");
    var sticky = navbar.offsetTop + 1;

    function myFunction() {
        console.log(sticky)
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("fixed-top");
        } else {
            navbar.classList.remove("fixed-top");
        }
    }

    myFunction();


    $('.menu-btn').on('click', function () {
        if ($('.side-menu').hasClass('show')) {
            $('.side-menu').removeClass('show');
        } else {
            $('.side-menu').addClass('show');
        }

        $('.close-menu').on('click', function () {
            $('.side-menu').removeClass('show');
        });
    });
});

// Select all links with hashes
$('.main-navigation a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function (event) {
        // On-page links
        if (
            location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
            &&
            location.hostname == this.hostname
        ) {
            // Figure out element to scroll to
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            // Does a scroll target exist?
            if (target.length) {
                // Only prevent default if animation is actually gonna happen
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top - 160
                }, 1000, function () {
                    // Callback after animation
                    // Must change focus!
                    var $target = $(target);
                    $target.focus();
                    if ($target.is(":focus")) { // Checking if the target was focused
                        return false;
                    } else {
                        $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                        $target.focus(); // Set focus again
                    };
                });
            }
        }
    });