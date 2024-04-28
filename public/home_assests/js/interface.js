( function($) {
  'use strict';
    

    /* Window Load */
    $(window).on('load',function(){
        $('.loader').fadeOut(200);
        $('.blur-scroll').addClass('loaded');
    });

    /* Window Scroll */
    $(window).on('scroll', function () {
        var pixs = $(document).scrollTop()
        pixs = pixs / 100;
        $(".blur-scroll").css({"-webkit-filter": "blur("+pixs+"px)","filter": "blur("+pixs+"px)" });
    });


    /* Parallax */
    if ($('.jarallax').length){
        $('.jarallax').jarallax({
            speed: 0.75
     });
    }

    /* Aos */
    AOS.init({
        easing: 'ease-in-out-sine',
        duration: 700,
    });


    /* Navbar Fixed */
    var navbarDesctop = $('.navbar-desctop');
    var origOffsetY = navbarDesctop.offset().top;

    $(window).on('scroll',function(){
        if ($(window).scrollTop() > origOffsetY) {
            navbarDesctop.addClass('hidden');
        } else {
            navbarDesctop.removeClass('hidden');
        }
    });

    /* Navbar toggler */
    $('.toggler').on('click',function(){
        $('body').addClass('menu-is-open');
    });

    $('.close, .click-capture').on('click',function(){
        $('body').removeClass('menu-is-open');
    });

    /* Navbar scroll*/
    $('.navbar-nav li a').on('click', function() {
        var target = $(this.hash);
        if (target.length) {
            $('html,body').animate({
                scrollTop: (target.offset().top)
            }, 1000);
            $('body').removeClass('menu-is-open');
            return false;
        }
    });

    /* Scrollspy*/
    $('body').scrollspy({ target: '#scrollspy' });


    /* Fixed Footer */
    footerHeight();

    $(window).on('resize', function(){
        footerHeight();
    });

     function footerHeight(){
        $('body.fixed-footer .wrapper').css('margin-bottom',function(e){
            return $('body.fixed-footer footer').outerHeight();
        });
    }

    /* Full page scroll*/
    if ($('#pagepiling').length > 0){

        $('#pagepiling').pagepiling({
            scrollingSpeed: 280,
            loopBottom: true,
             navigation: {
                'position': 'right'
            },
            afterLoad: function(anchorLink, index){
                $('.pp-section .intro').removeClass('animate');
                $('.active .intro').addClass('animate');

            }
        });

    }

    /* Works carousel */
    if ($('.works-carousel').length){
        $('.works-carousel').owlCarousel({
            margin:10,
            loop:true,
            margin:0,
            nav:true,
            smartSpeed:600,
            dots:false,
            items:1,
            autoWidth:true,
            navText: ['<div class="arrow"><div class="arrow-top"></div><div class="arrow-bottom"></div></div>','<div class="arrow"><div class="arrow-top"></div><div class="arrow-bottom"></div></div>']
        });
    }


    /* Experience carousel */
   if ($('.experience-carousel').length){
        $('.experience-carousel').owlCarousel({
            loop:false,
            margin:30,
            smartSpeed:1000,
            items:1,
            nav:false,
            dots:true
        });
    }



    /* Testimonials carousel */
    if ($('.testimonials-carousel').length){
            $('.testimonials-carousel').owlCarousel({
            loop:false,
            margin:30,
            items:1,
            nav:true,
            navText: ['<div class="arrow"><div class="arrow-top"></div><div class="arrow-bottom"></div></div>','<div class="arrow"><div class="arrow-top"></div><div class="arrow-bottom"></div></div>'],
            dots:false
        });
    }

    /* Isotope masonry */
     var $container=$('.masonry-items').each(function() {      
        var $container = $(this);
        $container.imagesLoaded( function(){
            $container.isotope({         
                itemSelector: '.masonry-item',
                percentPosition: true,
                layoutMode: 'masonry',  
                masonry: {
                  columnWidth: '.masonry-item'
                }   
            }); 
        });
    }); 



    /* Subscribe Form */
    if ($('.js-subscribe-form').length){
        $('.js-subscribe-form').ajaxChimp({
            language: 'cm',
            url: 'http://csmthemes.us3.list-manage.com/subscribe/post?u=9666c25a337f497687875a388&id=5b881a50fb'
                //http://xxx.xxx.list-manage.com/subscribe/post?u=xxx&id=xxx
        });

        $.ajaxChimp.translations.cm = {
            'submit': 'Submitting...',
            0: 'Awesome! We have sent you a confirmation email',
            1: 'Please enter a value',
            2: 'An email address must contain a single @',
            3: 'The domain portion of the email address is invalid (the portion after the @: )',
            4: 'The username portion of the email address is invalid (the portion before the @: )',
            5: 'This email address looks fake or invalid. Please enter a real email address'
        };
    }



    /* Send form */
    if ($('.js-ajax-form').length) {
        $('.js-ajax-form').each(function(){
            $(this).validate({
                errorClass: 'error',
                submitHandler: function(form){
                    $.ajax({
                        type: "POST",
                        url:"mail.php",
                        data: $(form).serialize(),
                        success: function() {
                            $('#success-message').show();
                        },

                        error: function(){
                            $('#error-message').show();
                        }
                    });
                }
            });
        });
    }

})(jQuery);
