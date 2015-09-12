/**
 * Created by Administrator on 15-8-3.
 */
// JavaScript Document
$(function(){
    var $ww=$(window).width(),
        $wh=$(window).height()
    function filling(){
        if($wh>600){
            $('#container').css({'height':$wh})
        }else{
            $('#container').css({'height':600})
        }
    }
    filling();
    function autosize(){
        $('.autosize').each(function() {
            //$(this).parent().css('display','block')
            var h=$(this).parent().height();
            $(this).css({'margin-top':-$(this).height()/2})
        });
    }
    $(window).load(function(){
        autosize();
    })
    $(window).resize(function(){
        $ww=$(window).width();
        $wh=$(window).height();
        filling();
        autosize();
    })
})