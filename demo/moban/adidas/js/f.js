/**
 * Created by Administrator on 15-8-3.
 */
// JavaScript Document
$(function(){
    $('.fold').click(function(){
        if(!$(this).hasClass('tracked')){
            addTrace("button:" + $('.2015').attr("data-t"));
        }
        $(this).addClass('tracked');

        if($(this).parent().hasClass('up')){
            $(this).parent().removeClass('up');
        }else{
            $(this).parent().addClass('up');
        }
    })
    var w=0,
        ct=4,
        sign0=0,
        sign1=0,
        s0=0,
        s1=0,
        num0= $('.ulview_0').children('li').length,
        rm0= num0%4,
        num1= $('.ulview_1').children('li').length,
        rm1= num1%4

    function changesize(){
        w= $('#wrapUl').width();
        $('.ulview li').width(w/ct);
        $('.ulview').each(function() {
            var num=$(this).children('li').length;
            $(this).css('width',w*num);
        });
    }
    changesize()
    $(window).resize(function(){
        setplw();
        changesize();
        if(sign1==Math.ceil(num1/4)-1&&rm1!=0){
            $('.ulview_1').css('margin-left',-(sign1-1)*w-rm1*w/4);
        }else{
            $('.ulview_1').css('margin-left',-sign1*w);
        }

        if(sign0==Math.ceil(num0/4)-1&&rm0!=0){
            $('.ulview_0').css('margin-left',-(sign0-1)*w-rm0*w/4);
        }else{
            $('.ulview_0').css('margin-left',-sign0*w);
        }
    })
    $('.ct_arrow').click(function(){
        if($('.ulview').is(":animated")) return false;
        if($(this).hasClass('ct_next1')){
            if(sign1==Math.ceil(num1/4)-1) return false;

            if(sign1==Math.ceil(num1/4)-2&&rm1!=0){
                $('.ulview_1').animate({'margin-left':parseInt($('.ulview_1').css('margin-left'))-w/ct*rm1},400);
                sign1++;
                return false;
            }
            $('.ulview_1').animate({'margin-left':parseInt($('.ulview_1').css('margin-left'))-w},400);
            sign1++;
        }else if($(this).hasClass('ct_prev1')){
            if(sign1==0) return false;
            if(sign1==Math.ceil(num1/4)-1&&rm1!=0){
                $('.ulview_1').animate({'margin-left':parseInt($('.ulview_1').css('margin-left'))+w/ct*rm1},400);
                sign1--;
                return false;
            }
            $('.ulview_1').animate({'margin-left':parseInt($('.ulview_1').css('margin-left'))+w},400);
            sign1--;
        }else if($(this).hasClass('ct_next0')){
            if(sign0==Math.ceil(num0/4)-1) return false;

            if(sign0==Math.ceil(num0/4)-2&&rm0!=0){
                $('.ulview_0').animate({'margin-left':parseInt($('.ulview_0').css('margin-left'))-w/ct*rm0},400);
                sign0++;
                return false;
            }
            $('.ulview_0').animate({'margin-left':parseInt($('.ulview_0').css('margin-left'))-w},400);
            sign0++;

        }else if($(this).hasClass('ct_prev0')){
            if(sign0==0) return false;
            if(sign0==Math.ceil(num0/4)-1&&rm0!=0){
                $('.ulview_0').animate({'margin-left':parseInt($('.ulview_0').css('margin-left'))+w/ct*rm0},400);
                sign0--;
                return false;
            }
            $('.ulview_0').animate({'margin-left':parseInt($('.ulview_0').css('margin-left'))+w},400);
            sign0--;
        }

    })
    $('.2014').click(function(){
        $(this).parents().addClass('on');
        $(this).addClass('on').siblings('span').removeClass('on');
        $('.ulview_0,.ct_prev0,.ct_next0,.anime0').css('display','block');
        $('.ulview_1,.ct_prev1,.ct_next1,.anime1').css('display','none');
        $('.ulview_0 li').eq(s0).click();
        $('#y').attr('src','imgs/2014.png');
        $('.p_line a').css('display','none');
        stopAnimate();
        start2014Animate();
    })
    $('.2015').click(function(){
        $(this).parents().removeClass('on');
        $(this).addClass('on').siblings('span').removeClass('on');
        $('.ulview_0,.ct_prev0,.ct_next0,.anime0').css('display','none');
        $('.ulview_1,.ct_prev1,.ct_next1,.anime1').css('display','block');
        $('.ulview_1 li').eq(s1).click();
        $('#y').attr('src','imgs/2015.png');
        $('.p_line a').css('display','block');
        startAnimate();
        stop2014Animate();
    }).click()

    function setplw(){
        $('#line').width(0);
        $('.p_line .op0,.p_line .op1,.p_line .op2').removeClass('op')
        var w=$('.container').width();
        var r= 0.76*w-w/2+250;
        $('#line').css("left",-r+250);
        $('#line').animate({'width':r},500,function(){
            $('.p_line .op0').addClass('op');
            setTimeout(function(){
                $('.p_line .op1').addClass('op');
                setTimeout(function(){
                    $('.p_line .op2').addClass('op');
                },120)
            },120)
        })
    }

    $('.ulview li').click(function(){
        if($(this).parent().hasClass('ulview_1')){
            s1=$(this).index();
        }else{
            s0=$(this).index();
        }
        var src =$(this).find('img').attr('data-src');
        var n= $(this).find('img').attr('data-n');
        var t= $(this).find('img').attr('data-t');
        $('#picture').attr('src',src);
        $('#t').attr('src',t);
        if(n){
            $('#n').attr('src','imgs/'+n+'.png');
            $('#n').css('display','block');
        }else{
            $('#n').css('display','none');
        }
        setplw();
    })
    var image=new Image();
    image.onload=function(){
        $('#picture').css('display','block');
        $('.ulview_1 li').eq(0).click();
    }
    image.src='imgs/B23984.png';
})