$(function () {
    $(function () {
        var gnav = $('.gnav'); //element
        var gnav_content = $('.gnav-content'); //element
        gnav.css('cursor', 'pointer');
        gnav.on('click', function () {
            $(this).toggleClass('active');
            gnav_content.fadeToggle(500, 'swing');
        });
    });

    $(function() {
        var $header = $('.header-wrap');
        // Nav Fixed
        $(window).scroll(function() {
            if ($(window).scrollTop() > 250) {
                $header.addClass('fixed');
            } else {
                $header.removeClass('fixed');
            }
        });
    });

    var bt = 300;
    var ds = 0;
    $(document).scroll(function(){
        ds = $(this).scrollTop();
        if (bt <= ds) {
            $("#totop").addClass('open');
        } else if (bt >= ds) {
            $("#totop").removeClass('open');
        }
    });

    $('a[href^=#]' + 'a:not([href *= "#panel1"])' + 'a:not([href*="#panel2"])' + 'a:not([href*="#panel3"])' + 'a:not([href*="#panel4"])' + 'a:not([href*="#panel5"])' + 'a:not([href*="#panel6"])' + 'a:not([href*="#panel7"])' + 'a:not([href*="#panel8"])').click(function(){  
        var speed = 500;
        var href= $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top;
        $("html, body").animate({scrollTop:position}, speed, "swing");
        return false;
    });
});