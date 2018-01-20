
/*jQuery(document).ready(function () {

    jQuery('.top-page-preview-container').viewportChecker({
        offset: '10%',
        callbackFunction: function (elem, action) {
            var res = isInViewport($('.top-page-preview')[0]);
            console.log(res);
            if(res)
            {
                setTimeout(function () {
                    $($('.top-page-preview')[0]).addClass('visible animated bounceInLeft')
                }, 1500);
                setTimeout(function () {
                    $($('.top-page-preview')[1]).addClass('visible animated bounceInLeft')
                }, 2000);
                setTimeout(function () {
                    $($('.top-page-preview')[2]).addClass('visible animated bounceInLeft')
                }, 2500);
            }
        }
    });

});*/


function showTopBlocks(){
    var res = isInViewport($('.top-page-preview')[0], 400);
    console.log(res);
    if(res)
    {
        setTimeout(function () {
            $($('.top-page-preview')[0]).addClass('visible animated bounceInLeft')
        }, 0);
        setTimeout(function () {
            $($('.top-page-preview')[1]).addClass('visible animated bounceInLeft')
        }, 500);
        setTimeout(function () {
            $($('.top-page-preview')[2]).addClass('visible animated bounceInLeft')
        }, 1000);
    }
}

function isInViewport(element, offset) {
    offset=offset||0;
    var rect = element.getBoundingClientRect();
    var html = document.documentElement;
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || html.clientHeight) +offset &&
        rect.right <= (window.innerWidth || html.clientWidth)
    );
}

jQuery.lazyLoadXT.onload = function () {
    var $el = $(this);
    $el
        .removeClass('  hidden')
        .addClass('animated ' + $el.attr('data-effect'));
};

var throttle = function (func, wait) {
    var context, args, timeout, throttling, more, result;
    var whenDone = _.debounce(function () { more = throttling = false; }, wait);
    return function () {
        context = this; args = arguments;
        var later = function () {
            timeout = null;
            if (more) func.apply(context, args);
            whenDone();
        };
        if (!timeout) timeout = setTimeout(later, wait);
        if (throttling) {
            more = true;
        } else {
            result = func.apply(context, args);
        }
        whenDone();
        throttling = true;
        return result;
    };
};


function fn() {
    /*if ($(document).scrollTop() > 20) {
        $($(".title")[0]).removeClass("bounceInLeft").addClass('fadeOut');
        $($(".title")[1]).removeClass("bounceInLeft").addClass('fadeOut');
    }*/

        $($(".title")[0]).removeClass("fadeOut").addClass('visible animated bounceInLeft')
        $($(".title")[0]).one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",
            function (event) {
                if (!$($(".title")[0]).hasClass('fadeOut'))
                    $($(".title")[1]).removeClass("fadeOut").addClass('visible animated bounceInLeft')
            });



}




var indexView = {
    template_directory: "",

    init: function (params) {
        this.template_directory = params.template_directory;
        this.topImg = params.topImg;
        console.log(params);
        this.do();
    },

    do: function () {
        var template_directory = this.template_directory;
        var topImg = this.topImg;
        $('<img/>').attr('src', template_directory + "/images/6.jpeg").on('load', function () {
            $(this).remove(); // prevent memory leaks as @benweet suggested
            $('.top-img').css('background-image', "url(" + topImg+")");
            fn();
            jQuery(document).ready(function ($) {
                $(window).on('scroll touchmove', throttle(fn, 50));
                $(window).on('scroll touchmove', throttle(showTopBlocks, 50));
            });
        });
    }
}