/**
 * Custom
 */
(function ($) {
    "use strict";

    jQuery(document).ready(function () {


        $("#interest .card .box .interest-icon-even i, #interest .card .box .interest-icon-odd i").addClass('ok');
        /***MENU TOGGLE ANIMATION***/
        $('.toggle-normal').on('click', function () {
            $('.top-bar').toggleClass('top-transform');
            $('.middle-bar').toggleClass('middle-transform');
            $('.bottom-bar').toggleClass('bottom-transform');
        });


        /***MENU CLOSE***/
        $('.section,div#menu-options a').on('click', function () {
            $('nav#theMenu').removeClass('menu-open');
            $('.top-bar').removeClass('top-transform');
            $('.middle-bar').removeClass('middle-transform');
            $('.bottom-bar').removeClass('bottom-transform');
        });


        /***MENU OPEN***/
        $('div#menuToggle').on('click', function () {
            $('div#menuToggle').toggleClass('active');
            $('body').toggleClass('body-push-toright');
            $('nav#theMenu').toggleClass('menu-open');
        });


        /***SMOOTH SCROLL***/
        $(function () {
            $('div#menu-options,div#about-btn').find('a[href*=#]:not([href=#])').click(function () {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        $('html,body').animate({
                            scrollTop: target.offset().top
                        }, 900, "swing");
                        return false;
                    }
                }
            });
        });


        /***SCROLL TO TOP***/
        $(window).scroll(function () {
            if ($(this).scrollTop() >= 500) {        // If page is scrolled more than 500px
                $('div#scrollup').addClass('animated flipInY').fadeIn(200);    // Fade in the arrow
            } else {
                $('div#scrollup').fadeOut(200);
            }
        });

        $('div#scrollup').on('click', function () {
            $("html,body").animate({
                scrollTop: 0
            }, 600);

            return false;
        });


        /***PORTFOLIO GALLERY***/
        var all = '#a,#b,#c';
        var afterFirst = '#b,#c';

        $(afterFirst).addClass('hide');

        $('a#all-sample').on('click', function () {
            $('#add-more').removeClass('hide');
            $(all).removeClass('tab-pane');
            $(afterFirst).addClass('hide');
        });
        $('a.cate').on('click', function () {
            $('#add-more').addClass('hide');
            $(afterFirst).removeClass('hide');
            $(all).addClass('tab-pane');

        });
        $('#add-more').on('click', function () {
            if ($(all).hasClass('')) {
                $(all).removeClass('tab-pane hide').addClass('x');
                $('#port-add-icon').removeClass('fa-plus').addClass('fa-arrow-up');
            } else {
                $(afterFirst).addClass('hide');
                $(all).removeClass('x');
                $('#port-add-icon').addClass('fa-plus').removeClass('fa-arrow-up');
            }

        });


        /***PORTFOLIO***/
        $('li.list-shuffle,#add-more').on('click', function () {
            $(".inLeft")
                .removeClass('InLeft')
                .hide()
                .addClass('InLeft')
                .show();
            $(".inRight")
                .removeClass('InRight')
                .hide()
                .addClass('InRight')
                .show();
        });


        /***SKILLS***/
        $('div.skillbar').each(function () {
            $(this).find('div.skillbar-bar').css({
                width: $(this).attr('data-percent')
            });
        });


        /***BRAND SLIDER***/
        function brand() {
            var $brandcarousel = $('ul#brands-list');
            var brands = $brandcarousel.children().length;
            var brandwidth = (brands * 140); // 140px width for each brand item
            $brandcarousel.css('width', brandwidth);

            var rotating = true;
            var brandspeed = 1800;
            setInterval(rotateBrands, brandspeed);

            $(document).on({
                mouseenter: function () {
                    rotating = false;
                    // Turn off rotation when hovering
                },
                mouseleave: function () {
                    rotating = true;
                }
            }, '#brands');

            function rotateBrands() {
                if (rotating !== false) {
                    var $first = $('ul#brands-list').find('li:first');
                    $first.animate({'margin-left': '-140px'}, 2000, function () {
                        $first.remove().css({'margin-left': '0px'});
                        $('ul#brands-list').find('li:last').after($first);
                    });
                }
            }
        }
        /***BRAND SLIDER INITIALIZATION***/
        brand();


        /***MAIL SCRIPT***/
        $('form#contact-form').on('submit', function (e) {
            e.preventDefault(); //Prevents default submit


            var token = $("input[name=_token]").val();
            var name = $("input[name=name]").val();
            var subject = $("input[name=subject]").val();
            var email = $("input[name=email]").val();
            var message = $("textarea[name=message]").val();
            // var message = $("textarea[name=message]").val().replace(/(\r\n|\n|\r)/gm,"<br>"); // line break to <br>

            $("#submit").attr('disabled', 'disabled'); //Disable the submit button on click
            $('div#form-loader').removeClass('is-hidden').fadeIn(500);

            $.ajax({
                type: 'POST',
                url: 'contact', // Form script
                data: {
                    '_token' : token,
                    'name' : name,
                    'subject' : subject,
                    'email' : email,
                    'message' : message
                }
            })
                .done(function () {
                    $('div#form-loader').fadeOut(500);
                    Materialize.toast('Message Sent! I will contact you shortly, Thanks', 4000);
                    $("form#contact-form")[0].reset();
                    Materialize.updateTextFields(); // Rest floating labels
                    // $("#submit").removeAttr('disabled', 'disabled'); // Enable submit button

                })
                .fail(function () {
                    $('div#form-loader').fadeOut(500);
                    Materialize.toast('Sorry! Something Wrong, Try Again', 4000);
                    $("#submit").removeAttr('disabled', 'disabled'); // Enable submit button
                });
        });
    });


    jQuery(window).load(function () {

        /***FADES OUT PRE-LOADER***/
        $('div#loading').fadeOut(500);

        /***SCROLL ANIMATION***/
        window.sr = ScrollReveal({reset: false}); // reset false stops repetition of animation
        var commonCards = '#port-add-icon,#map-card,.interest-icon-even,.interest-icon,' +
            '.timeline-dot, .timeline-content,#add-more,#skills-card,#testimonials-card,' +
            '#portfolios-card,#interest-card,#p-one,#p-two,#p-three,#blog-card,#contact-card,#brands';
        // Customizing a reveal set
        sr.reveal(commonCards, {duration: 1100});
        sr.reveal('#about-card,.map-label', {duration: 1400, delay: 500});
        sr.reveal('#v-card-holder', {duration: 1400, distance: '150px'});
        sr.reveal('.skillbar-bar', {duration: 1800, delay: 300, distance: '0'});
    });

})(jQuery);