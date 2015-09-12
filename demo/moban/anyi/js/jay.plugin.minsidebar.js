/**
 * Created by Administrator on 15-8-7.
 */
/* **************************
 * 灏忕獥鍙ｇ姸鎬佷笅鐨勪晶鏍忔寜閽�
 ************************** */
$(function() {
    var $doc = $(document);
    var targetNav = $(".ai-nav-list");
    var minside_states = "hide";
    //var cacheCSSelement = $("<div>").attr("id","minsizeNavBar").css("display","none");
    //var at = '@media only screen and (max-width:1024px) {.ai-imlink {display: none;}.sidebtn.sidebtn_show:before {content: "顦�";}.ai-nav-list {display: none;position: fixed;top: 48px;right: 0;height: 100%;width: 80px;padding-bottom:100px;margin-bottom:-100px;background: rgba(41, 41, 41, 0.75);-webkit-transform: translateX(176px) translateZ(0);transform: translateX(176px) translateZ(0);}.ai-nav-list.show {display:block;-webkit-animation-name: show_min_side_bar;animation-name: show_min_side_bar;-webkit-animation-duration: .4s;animation-duration: .4s;-webkit-animation-fill-mode: both;animation-fill-mode: both;-webkit-animation-timing-function: cubic-bezier(0, .96, .08, 1);animation-timing-function: cubic-bezier(0, .96, .08, 1);}.ai-nav-list.hide {display:block;-webkit-animation-name: hide_min_side_bar;animation-name: hide_min_side_bar;-webkit-animation-duration: .4s;animation-duration: .4s;-webkit-animation-fill-mode: both;animation-fill-mode: both;-webkit-animation-timing-function: cubic-bezier(0, .96, .08, 1);animation-timing-function: cubic-bezier(0, .96, .08, 1);}.ai-nav-listitem {padding:0px;display:block;float:none;height:42px;line-height:42px;text-align: center;}.ai-nav-list .cur {height:42px;line-height:42px;border-top:none;background:#d30830;color:#fff;}@keyframes show_min_side_bar {from { transform: translateX(80px) translateZ(0);}to { transform: translateX(0px) translateZ(0);}}	@-webkit-keyframes show_min_side_bar {from {  -webkit-transform: translateX(80px) translateZ(0);  transform: translateX(80px) translateZ(0);}to {  -webkit-transform: translateX(0px) translateZ(0);  transform: translateX(0px) translateZ(0);}}@keyframes show_min_side_bar {from {  -webkit-transform: translateX(80px) translateZ(0);  transform: translateX(80px) translateZ(0);}to {  -webkit-transform: translateX(0px) translateZ(0);  transform: translateX(0px) translateZ(0);}}@keyframes hide_min_side_bar {from { transform: translateX(0) translateZ(0);}to {  transform: translateX(100px) translateZ(0);}}@-webkit-keyframes hide_min_side_bar {from { -webkit-transform: translateX(0) translateZ(0); transform: translateX(0) translateZ(0);}to {  -webkit-transform: translateX(100px) translateZ(0);  transform: translateX(100px) translateZ(0);}}@keyframes hide_min_side_bar {from { -webkit-transform: translateX(0) translateZ(0); transform: translateX(0) translateZ(0);}to {  -webkit-transform: translateX(100px) translateZ(0);  transform: translateX(100px) translateZ(0);}}}'
    //var cacheCSSelement_at = $("<style>").html(at);
    //cacheCSSelement.append(cacheCSSelement_at);

    //$("body").prepend(cacheCSSelement);
    $.getScript("js/jquery.finger.min.js").always(function() {
        $doc.on("tap.minSideBar", ".sidebtn", function(e) {
            e.stopPropagation();
            e.preventDefault();
            if (minside_states === "hide") {
                $(this).addClass("sidebtn_show");
                targetNav.addClass("show");
                minside_states= "show";
            } else if (minside_states === "show" ) {
                $(this).removeClass("sidebtn_show");
                targetNav.addClass("hide");
                targetNav.one("webkitAnimationEnd animationend", function(e) {
                    targetNav.removeClass("show hide");
                });
                minside_states= "hide";
            }
        });
        targetNav.on("flick", function(e) {
            if ( e.orientation == "horizontal" && e.direction == "1") {
                $(".sidebtn").trigger("tap");
                return false;
            }
        });
        $(".ai-logo").css("cursor","pointer");
    });


    //***********************************
    //鐐瑰嚮Logo杩斿洖棣栭〉
    //***********************************
    $(".ai-logo").on("tap click", function(e) {
        window.location = "index.html"
    });


});

//********************************
//	the css:
//********************************
/*
 @media only screen and (max-width:1024px) {
 .ai-imlink {
 display: none;
 }
 .sidebtn.sidebtn_show:before {
 content: "\e621";
 }
 .ai-nav-list {
 display: none;
 position: fixed;
 top: 48px;
 right: 0;
 height: 100%;
 width: 80px;
 padding-bottom:100px;
 margin-bottom:-100px;
 background: rgba(41, 41, 41, 0.75);
 -webkit-transform: translateX(176px) translateZ(0);
 transform: translateX(176px) translateZ(0);
 }

 .ai-nav-list.show {
 display:block;
 -webkit-animation-name: show_min_side_bar;
 animation-name: show_min_side_bar;
 -webkit-animation-duration: .4s;
 animation-duration: .4s;
 -webkit-animation-fill-mode: both;
 animation-fill-mode: both;
 -webkit-animation-timing-function: cubic-bezier(0, .96, .08, 1);
 animation-timing-function: cubic-bezier(0, .96, .08, 1);
 }

 .ai-nav-list.hide {
 display:block;
 -webkit-animation-name: hide_min_side_bar;
 animation-name: hide_min_side_bar;
 -webkit-animation-duration: .4s;
 animation-duration: .4s;
 -webkit-animation-fill-mode: both;
 animation-fill-mode: both;
 -webkit-animation-timing-function: cubic-bezier(0, .96, .08, 1);
 animation-timing-function: cubic-bezier(0, .96, .08, 1);
 }
 .ai-nav-listitem {
 padding:0px;
 display:block;
 float:none;
 height:42px;
 line-height:42px;
 text-align: center;
 }
 .ai-nav-list .cur {
 height:42px;
 line-height:42px;
 border-top:none;
 background:#d30830;
 color:#fff;
 }
 @keyframes show_min_side_bar {
 from {  transform: translateX(80px) translateZ(0);}
 to {  transform: translateX(0px) translateZ(0);}
 }

 @-webkit-keyframes show_min_side_bar {
 from {  -webkit-transform: translateX(80px) translateZ(0);  transform: translateX(80px) translateZ(0);}
 to {  -webkit-transform: translateX(0px) translateZ(0);  transform: translateX(0px) translateZ(0);}
 }
 @keyframes show_min_side_bar {
 from {  -webkit-transform: translateX(80px) translateZ(0);  transform: translateX(80px) translateZ(0);}
 to {  -webkit-transform: translateX(0px) translateZ(0);  transform: translateX(0px) translateZ(0);}
 }


 @keyframes hide_min_side_bar {
 from { transform: translateX(0) translateZ(0);}
 to {  transform: translateX(100px) translateZ(0);}
 }

 @-webkit-keyframes hide_min_side_bar {
 from { -webkit-transform: translateX(0) translateZ(0); transform: translateX(0) translateZ(0);}
 to {  -webkit-transform: translateX(100px) translateZ(0);  transform: translateX(100px) translateZ(0);}
 }
 @keyframes hide_min_side_bar {
 from { -webkit-transform: translateX(0) translateZ(0); transform: translateX(0) translateZ(0);}
 to {  -webkit-transform: translateX(100px) translateZ(0);  transform: translateX(100px) translateZ(0);}
 }


 }
 */