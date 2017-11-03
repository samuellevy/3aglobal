import $ from 'jquery';
window.jQuery = $;

//require('bootstrap-sass/assets/javascripts/bootstrap/affix.js');
//require('bootstrap-sass/assets/javascripts/bootstrap/alert.js');
//require('bootstrap-sass/assets/javascripts/bootstrap/button.js');
//require('bootstrap-sass/assets/javascripts/bootstrap/carousel.js');
//require('bootstrap-sass/assets/javascripts/bootstrap/collapse.js');
require('bootstrap-sass/assets/javascripts/bootstrap/dropdown.js');
//require('bootstrap-sass/assets/javascripts/bootstrap/modal.js');
//require('bootstrap-sass/assets/javascripts/bootstrap/popover.js');
//require('bootstrap-sass/assets/javascripts/bootstrap/scrollspy.js');
//require('bootstrap-sass/assets/javascripts/bootstrap/tab.js');
//require('bootstrap-sass/assets/javascripts/bootstrap/tooltip.js');
//require('bootstrap-sass/assets/javascripts/bootstrap/transition.js');
require('jquery.marquee');

import 'bootstrap-select';
//import 'parsleyjs';
//import 'parsleyjs/dist/i18n/pt-br';
import 'slick-carousel';
import 'magnific-popup';
import scrollify from 'jquery-scrollify';
import ScrollReveal from 'scrollreveal';
import Handlebars from 'handlebars';

import token from './components/token';
import blog from './components/blog';
import clock from './components/clock';
import weather from './components/weather';
import worldMap from './components/world-map';

$(() => {
    'use strict';

    token();
    blog();
    clock('.js-clock');
    weather('.js-weather');
    worldMap();

    if($('.banners').length > 0) {
        $('.banners').slick({
            accessibility: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            dots: true,
            //fade: true,
            draggable: false,
            //autoplay: true,
            autoplaySpeed: 12000,
            pauseOnHover: false
        });
    }

    if ($(window).width() > 1024) {
        $.scrollify({
            section : ".scroll",
            sectionName : "",
            interstitialSection : "",
            easing: "easeOutExpo",
            scrollSpeed: 1200,
            offset : 0,
            scrollbars: true,
            standardScrollElements: "",
            setHeights: true,
            overflowScroll: true,
            updateHash: true,
            touchScroll:true,
            before:function() {},
            after:function() {},
            afterResize:function() {},
            afterRender:function() {}
        });
    }

    if($('.marquee').length > 0) {
        $('.marquee').marquee({
            //speed in milliseconds of the marquee
            duration: 9000,
            //gap in pixels between the tickers
            gap: 400,
            //time in milliseconds before the marquee will start animating
            delayBeforeStart: 0,
            //'left' or 'right'
            direction: 'left',
            //true or false - should the marquee be duplicated to show an effect of continues flow
            duplicated: true
        });
    }

    if($('.snapshots').length > 0) {
        window.sr = ScrollReveal({ reset: false });

        sr.reveal('.case-action-img', { duration: 1200, origin: 'left', distance: '200px', });

        sr.reveal('.box-azul-action', { duration: 1200, delay: 500, origin: 'bottom', distance: '500px', });

        sr.reveal('.case-aacd-img', { duration: 1200, origin: 'right', distance: '200px', });

        sr.reveal('.box-azul-aacd', { duration: 1200, delay: 500, origin: 'bottom', distance: '500px', });

        sr.reveal('.case-mundial-img', { duration: 1200, origin: 'left', distance: '200px', });

        sr.reveal('.box-azul-mundial', { duration: 1200, delay: 500, origin: 'bottom', distance: '500px', });

        sr.reveal('.case-bandnews-img', { duration: 1200, origin: 'right', distance: '200px', });

        sr.reveal('.box-azul-bandnews', { duration: 1200, delay: 500, origin: 'bottom', distance: '500px', });

        sr.reveal('.case-lg-img', { duration: 1200, origin: 'left', distance: '200px', });

        sr.reveal('.box-azul-lg', { duration: 1200, delay: 500, origin: 'bottom', distance: '500px', });

        sr.reveal('.case-hall-img', { duration: 1200, origin: 'right', distance: '200px', });

        sr.reveal('.box-azul-hall', { duration: 1200, delay: 500, origin: 'bottom', distance: '500px', });

        //sr.reveal('.letter-one', { duration: 1200, delay: 500, origin: 'bottom', distance: '100px', });

        //sr.reveal('.letter-two', { duration: 1200, delay: 1000, origin: 'bottom', distance: '100px', });

    }

    let distance = $('.main-content').offset().top;
    $(window).scroll(function() {
       if ( $(this).scrollTop() >= distance - 350 ) {
            $('.logo-top').removeClass('normal-logo');
            $('.logo-top').addClass('small-logo');
        } else {
            $('.logo-top').removeClass('small-logo');
            $('.logo-top').addClass('normal-logo');
        }
    });

    if($('.content-white').length > 0) {
        let distanceWhite = $('.content-white').offset().top;
        $(window).scroll(function() {
           if ( $(this).scrollTop() >= distanceWhite ) {
                $('body').addClass('white-active');
            } else {
                $('body').removeClass('white-active');
            }
        });
    }

    if($('.content-white-2').length > 0) {
        let distanceWhiteSecond = $('.content-white-2').offset().top;
        $(window).scroll(function() {
           if ( $(this).scrollTop() >= distanceWhiteSecond ) {
                $('body').addClass('white-active');
            } else {
                $('body').removeClass('white-active');
            }
        });
    }

    if($('.dark-content').length > 0) {
        let distanceDark = $('.dark-content').offset().top;
        $(window).scroll(function() {
           if ( $(this).scrollTop() >= distanceDark ) {
                $('body').addClass('dark-active');
            } else {
                $('body').removeClass('dark-active');
            }
        });
    }

    /*if ($(window).width() > 999) {
        if($('.contact-form').length > 0) {
            $('.logo-top').hide();
            let distanceForm = $('.contato').offset().top;
            $(window).scroll(function() {
               if ( $(this).scrollTop() >= distanceForm ) {
                   $('.logo-top').show();
                } else {
                    $('.logo-top').hide();
                }
            });
        }
    }*/

    /*if ($(window).width() < 999) {
        if($('.contact-form').length > 0) {
            $('.logo-top-mobile').hide();
            let distanceForm = $('.contato').offset().top;
            $(window).scroll(function() {
               if ( $(this).scrollTop() >= distanceForm ) {
                   $('.logo-top-mobile').show();
                } else {
                    $('.logo-top-mobile').hide();
                }
            });
        }
    }*/


    /*$('.blog-item').mouseenter(function(){
        $(this).children('.content-hover').animate({
            bottom: "0"
          }, 800 );
    });

    $('.blog-item').mouseleave(function(){
        $(this).children('.content-hover').animate({
            bottom: "-170px"
          }, 800 );
    });*/

    $('.menu-button').click(function(e){
        e.preventDefault();
        $(this).hide();
        $('html').addClass('menu-active');
        $('.close-menu').show();
        //$('.container-menu').fadeIn();
        //$('body').addClass('menu-active');
    });

    $('.close-menu').click(function(e){
        e.preventDefault();
        $(this).hide();
        $('html').removeClass('menu-active');
        $('.menu-button').show();
        //$('body').removeClass('menu-active');
    });

    if($('.climatempo').length > 0) {
        let distanceUnidades = $('.climatempo').offset().top;
        $(window).scroll(function() {
           if ( $(this).scrollTop() >= distanceUnidades - 100 ) {
                $('.slick-current svg').addClass('running');
            } else {
                $('.slick-current svg').removeClass('running');
            }
        });
    }

    if($('.clima-contato').length > 0) {
        let distanceContato = $('.clima-contato').offset().top;
        $(window).scroll(function() {
           if ( $(this).scrollTop() >= distanceContato - 300 ) {
                $('.slick-current svg').addClass('running');
            } else {
                $('.slick-current svg').removeClass('running');
            }
        });
    }

    if($('.items-cidade').length > 0) {
        $('.items-cidade').slick({
            accessibility: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            //fade: true,
            draggable: false,
            //autoplay: true,
            autoplaySpeed: 12000,
            pauseOnHover: false,
            asNavFor: '.lista-cidades'
        });

        $('.lista-cidades').slick({
            accessibility: false,
            width: '100',
            slidesToShow: 5,
            slidesToScroll: 1,
            asNavFor: '.items-cidade',
            dots: false,
            focusOnSelect: true,
             responsive: [
                {
                  breakpoint: 667,
                  settings: {
                    slidesToShow: 3,
                    arrows: false,
                    slidesToScroll: 1
                  }
                },
                {
                  breakpoint: 360,
                  settings: {
                    slidesToShow: 2,
                    arrows: false,
                    slidesToScroll: 1
                  }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
              ]
        });
    }

    if($('.items-cidade-contato').length > 0) {
        $('.items-cidade-contato').slick({
            accessibility: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            //fade: true,
            draggable: false,
            autoplay: true,
            autoplaySpeed: 12000,
            pauseOnHover: false,
            asNavFor: '.lista-cidades-contato'
        });

        $('.lista-cidades-contato').slick({
            accessibility: false,
            width: '100',
            slidesToShow: 5,
            slidesToScroll: 1,
            asNavFor: '.items-cidade-contato',
            dots: false,
            focusOnSelect: true,
            responsive: [
                {
                  breakpoint: 667,
                  settings: {
                    slidesToShow: 3,
                    arrows: false,
                    slidesToScroll: 1
                  }
                },
                {
                  breakpoint: 360,
                  settings: {
                    slidesToShow: 2,
                    arrows: false,
                    slidesToScroll: 1
                  }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
              ]
        });
    }

    const browsersSvg = /(; x64\) AppleWebKit|; rv:[0-9]{2,}.[0-9]\) Gecko|Mac OS X [0-9]{1,}_[0-9]{1,}_[0-9]{1,}\) AppleWebKit)/;
    if (browsersSvg.test(window.navigator.userAgent) && (/Edge/.test(window.navigator.userAgent) === false)) {
        $('svg').addClass('active');
    } else {
        $('.text-form').addClass('active');
    }

    $('.items-cidade').on('afterChange', function(event, slick, currentSlide){
        $('.slick-current svg').addClass('running');
    });

    $('.items-cidade').on('beforeChange', function(event, slick, currentSlide){
        $('.slick-current svg').removeClass('running');
    });

    $('.items-cidade-contato').on('afterChange', function(event, slick, currentSlide){
        $('.slick-current svg').addClass('running');
    });

    $('.items-cidade-contato').on('beforeChange', function(event, slick, currentSlide){
        $('.slick-current svg').removeClass('running');
    });

    /*$('.items-cidade').on('init', function(e, slick) {
        var $firstAnimatingElements = $('.rio-de-janeiro').find('[data-animation]');
        doAnimations($firstAnimatingElements);
    });

    $('.items-cidade').on('beforeChange', function(e, slick, currentSlide, nextSlide) {
        var $animatingElements = $('.cidade[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
        doAnimations($animatingElements);
    });

    function doAnimations(elements) {
        var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        elements.each(function() {
            var $this = $(this);
            var $animationDelay = $this.data('delay');
            var $animationType = 'animated ' + $this.data('animation');
            $this.css({
                'animation-delay': $animationDelay,
                '-webkit-animation-delay': $animationDelay
            });
            $this.addClass($animationType).one(animationEndEvents, function() {
                $this.removeClass($animationType);
            });
        });
    }*/

    /*sr.reveal('.letter-1', { duration: 1500, delay: 500, origin: 'bottom', distance: '100px', container: '.climatempo' });

    sr.reveal('.letter-2', { duration: 1500, delay: 500, origin: 'right', distance: '100px', container: '.climatempo' });

    sr.reveal('.letter-3', { duration: 1500, delay: 500, origin: 'top', distance: '100px', container: '.climatempo' });

    sr.reveal('.letter-4', { duration: 1500, delay: 500, origin: 'right', distance: '100px', container: '.climatempo' });

    sr.reveal('.letter-5', { duration: 1500, delay: 500, origin: 'top', distance: '100px', container: '.climatempo' });*/

    if ($(window).width() > 999) {
        $('.fronteiras .lista-servicos li').hover(function(){
            $(this).toggleClass('active');
        });
    }

    $('.selectpicker').selectpicker('hide');

    if($(".line-animate").length > 0) {
        setInterval(function() {
           $(".line-animate").toggle();
        }, 500);
    }

     if($('.contact-form').length > 0) {
        $('.trigger-cidade').click(function(e){
            e.preventDefault();
            $(this).hide();
            $('.cidadades-select').selectpicker('show').selectpicker('toggle');
        });

        $('.dpto-link').click(function(e){
            e.preventDefault();
            $(this).hide();
            $('.dpto-select').selectpicker('show').selectpicker('toggle');
        });

        $('.trigger-textarea').click(function(e){
            e.preventDefault();
            $(this).hide();
            $('.contato textarea').show().focus();
        });

        $('.trigger-nome').click(function(e){
            e.preventDefault();
            $(this).hide();
            $('.campo-texto.name').show().focus();
        });

        $('.trigger-email').click(function(e){
            e.preventDefault();
            $(this).hide();
            $('.campo-texto.email').show().focus();
        });
     }

    // AJAX forms
    $(document).on('submit', 'form.js-ajax', event => {
        event.preventDefault();

        let $form = $(event.currentTarget),
            $submit = $form.find('[type="submit"]').attr('disabled', 'disabled'),
            data = $form.serialize(),
            multipart = false;

        if ($form.prop('enctype') === 'multipart/form-data') {
            data = new FormData($form.get(0));
            multipart = true;
        }

        $.ajax({
            timeout: 60 * 1000, // milliseconds
            url: $form.prop('action'),
            type: $form.prop('method'),
            data: data,
            processData: !multipart,
            contentType: multipart ? false : 'application/x-www-form-urlencoded; charset=UTF-8'
        })
            .done((data, textStatus, jqXHR) => {
                $('.mensagem-sucesso').fadeIn();
                $form.get(0).reset();

                // Hide the fields
                $('.cidadades-select').selectpicker('hide');
                $('.trigger-cidade').show();

                $('.dpto-select').selectpicker('hide');
                $('.dpto-link').show();

                $('.contato textarea').hide();
                $('.trigger-textarea').show();

                $('.campo-texto.name').hide();
                $('.trigger-nome').show();

                $('.campo-texto.email').hide();
                $('.trigger-email').show();
            })
            .fail((jqXHR, textStatus, errorThrown) => {
                switch (textStatus) {
                    case 'timeout':
                    case 'error':
                    case 'abort':
                    case 'parsererror':
                        console.error(errorThrown);
                        break;
                }
            })
            .always((jqXHR, textStatus) => {
                $submit.removeAttr('disabled');
            });
    });

    /*$('.box-cliente').hover(function(){
        $(this).toggleClass('color');
    });*/

    let allPanels = $('.accordion > dd').hide();

    $('.accordion > dt').click(function(e) {
        e.preventDefault();
        let $this = $(this);
        let $target =  $this.next();
        $this.addClass('accordion-active');

        if(!$target.hasClass('active')){
            $(this).siblings().removeClass('accordion-active');
            allPanels.removeClass('active').slideUp();
            $target.addClass('active').slideDown();
        }

        return false;
    });


    let videoYoutube = $('.button-youtube');

    if(videoYoutube.length > 0) {
        $('.button-youtube').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            mainClass: 'modal-tv',
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false
        });
    }

    let caseLightbox = $('.button-case');

    if(caseLightbox.length > 0) {
        $('.button-case').magnificPopup({
            type: 'image',
            mainClass: 'modal-case',
            closeOnContentClick: true,
            mainClass: 'mfp-img-mobile',
            image: {
                verticalFit: true
            }
        });
    }

    // AJAX - load more (Handlebars)
    $('.js-load-more').removeAttr('disabled');
    $(document).on('click', '.js-load-more', event => {
        event.preventDefault();

        let $btn = $(event.currentTarget).attr('disabled', 'disabled');

        $.ajax({
            url: $btn.data('src'),
            type: 'GET',
            data: {
                page: $btn.data('page'),
                results: $btn.data('results')
            }
        })
            .done((data, textStatus, jqXHR) => {
                let $container = $( $btn.data('container') ),
                    template = Handlebars.compile(
                        $($btn.data('template')).html()
                    );

                $container.append(template(data));

                if (data.page > 0) {
                    $btn.data('page', data.page);
                    $btn.removeAttr('disabled');
                } else {
                    $btn.hide();
                }
            })
            .fail((jqXHR, textStatus, errorThrown) => {
                switch (textStatus) {
                    case 'timeout':
                    case 'error':
                    case 'abort':
                    case 'parsererror':
                        console.error(errorThrown);
                        $btn.removeAttr('disabled');
                        break;
                }
            });
    });

    $('.team-member').hover(function(){
        $(this).toggleClass('mask-active');
    });
});
