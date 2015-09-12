/**
 * Created by Administrator on 15-8-7.
 */
//***********************************
// DOM READY
//***********************************
var creatstyle_2_ = function (wrap, selector) {
    var newID, ghostElem, ghostTemp, spliptNum, wrapWidth, eachwidth, _css, styles;
    newID = "layout-css-2";
    ghostElem = $("<div>").attr("id", newID).css('display', 'none');
    ghostTemp = document.getElementById(newID);
    wrapWidth = $(wrap).width();
    eachwidth = parseInt(wrapWidth);
    _css = "." + selector + "{width:" + eachwidth + "px;}";
    styles =
        '<style type="text/css">\n' +
            _css +
            '</style>';
    ghostElem.html(styles);
    ghostTemp ? $(ghostTemp).html(styles) : $('body').prepend(ghostElem);
};


$(function () {

    virtualCarousel = $(".ai-virtual-casecon");
    creatstyle_2_(virtualCarousel, "ai-virtual-caselist");

    if (virtualCarousel.length) {
        virtualCarousel_el = virtualCarousel.find(".ai-virtual-frame");
        virtualCarousel_item = virtualCarousel_el.find(".ai-virtual-caselist");
        window.virtualCarouselinit = new Sly(virtualCarousel_el, {
            horizontal: true,
            itemNav: 'forceCentered',
            itemSelector: virtualCarousel_item,
            smart: true,
            activateMiddle: 1,
            pagesBar: $(".ai-virtual-caseslidebtn"),
            activatePageOn: "click",
            cycleBy: null,
            cycleInterval: 3000,
            pauseOnHover: 1,
            touchDragging: 1,
            startPaused: 0,
            mouseDragging: 1,
            releaseSwing: 1,
            speed: 400,
            elasticBounds: 1
        }).init();
    }
    if ($('.ai-virtual-caseslidebtn li').length == 1) {
        $('.ai-virtual-caseslidebtn li').hide();
    }


    FixScroll();
    if ($('.slider')) {
        //鎷涜仒slider
        $('.slider').carouFredSel({
            synchronise: ['.sliderInfo', true, true],
            auto: true,
            items: {
                visible: 4,
                start: 0
            },
            scroll:1,
//        scroll: {
//            items: 1,
//            onBefore: function (data) {
//                data.items.old.eq(1).removeClass('cur');
//                data.items.visible.eq(1).addClass('cur');
//            }
//        },
            prev: '.prev',
            next: '.next'
        });
    }
    $('.sliderInfo').carouFredSel({
        auto: false,
        items: {
            visible: 1,
            start: 1
        },
        scroll: {
            fx: 'slide'
        }
    });
    $('.slider .sliderList').click(function () {
        $('.slider').trigger('slideTo', [this, -2]);
    });


    //鎵嬫満绔�
    $('.strswitchon').click(function () {
        $('.orgcon,.strswitchon').hide();
        $('.strswitchoff').show();
    });
    $('.strswitchoff').click(function () {
        $('.strswitchoff').hide();
        $('.orgcon,.strswitchon').show();
    });

    $('.tactswitchon').click(function () {
        $('.teamactinfor,.tactswitchon').hide();
        $('.tactswitchoff').show();
    });
    $('.tactswitchoff').click(function () {
        $('.tactswitchoff').hide();
        $('.teamactinfor,.tactswitchon').show();
    });

    $('.jobswitchon').click(function () {
        $('.recruitinfor,.jobswitchon').hide();
        $('.jobswitchoff').show();
    });
    $('.jobswitchoff').click(function () {
        $('.jobswitchoff').hide();
        $('.recruitinfor,.jobswitchon').show();
    });

});


var resizeTimer = null;
$(window).on("resize", function () {
    if (resizeTimer) {
        clearTimeout(resizeTimer);
    }
    resizeTimer = setTimeout(function () {
        if (virtualCarousel.length) {
            creatstyle_2_(virtualCarousel, "ai-virtual-caselist");
            virtualCarouselinit.reload();
        }
    }, 300);
});


function FixScroll() {
    $(window).scroll(function () {
//        console.log($('.con-wite').offset().top + 1420)
//        console.log($(window).scrollTop())
        if ($(window).scrollTop() == $(document).height() - $(window).height()) {
            $('.posFix').css({
                'position': 'relative'
            });
            $('.con-wite').css({
                'padding-bottom': '0'
            });
        } else {
            $('.posFix').css({
                'position': 'fixed'
            });
            $('.con-wite').css({
                'padding-bottom': '100px'
            });
        }
    });
}
$(window).on("resize", function () {
    FixScroll();
});

/*require(['jquery','getDate','carouFredSel'],
 function (jquery,nicescroll,carouFredSel){
 $(function(){

 )};
 };*/