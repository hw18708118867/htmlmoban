/**
 * Created by Administrator on 15-8-8.
 */

//鐐瑰嚮鍑虹幇
$(function(){
    //瀹㈡埛绠€浠�
    var $category = $('.customer_infor').hide();
    $(".start_up a").click(function(){
        if($category.is(":visible")){
            $category.slideToggle("slow");
            $('.start_up a').attr('class',"blueupbg");
            cxheight();
        }else{
            $category.slideToggle("slow");
            $('.start_up a').attr('class',"bluedownbg");
            cxheight();
        }
    });

    //椤圭洰姒傚喌
    var $categorycon = $('#wrapper').show();
    $(".redstart_up a").click(function(){
        if($categorycon.is(":visible")){
            $categorycon.slideToggle("slow");
            $('.redstart_up a').attr('class',"redupbg");
        }else{
            $categorycon.slideToggle("slow");
            $('.redstart_up a').attr('class',"reddownbg");
        }
    });

    //椤圭洰姒傚喌slide
    $('#carousel ul').carouFredSel({
        prev: '#prev',
        next: '#next',
        auto: false
    });

    $(".carousel-item").hover( function () {
        $(this).siblings('.carousel-content').show();
        $(this).parents('li').siblings('li').find('.carousel-content').hide();
    },function(){
        setTimeout("$(this).siblings('.carousel-content').hide()",500)
    });


    $('.carousel-content').hover(function(){
        $(this).show();
    },function(){
        $(this).hide();
    });
})