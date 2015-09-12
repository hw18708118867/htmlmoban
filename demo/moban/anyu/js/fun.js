/**
 * Created by Administrator on 15-8-6.
 */
var fun;
$(function(){
    fun={
        menu:function(){
            $(".menu").click(function(){
                $(".menu_mask").fadeIn(300);
                $(".menu_box").addClass("box_show");
            });
            $(".menu_box .close").click(function(){
                $(".menu_mask").fadeOut(300);
                $(".menu_box").removeClass("box_show");
            });
            //重置div高度
            var reset_position;
            $(".scroll_page").width($(window).width()).height($(window).height());
            $(window).resize(function(){
                $(".scroll_page").width($(window).width()).height($(window).height());
                clearTimeout(reset_position);
                reset_position=setTimeout(function(){
                    $('html,body').animate({scrollTop:scroll_cur*$(window).height()+'px'},{duration: 400, easing: "easeInOutCubic"});
                },300);
            });

            //页面滚动
            $(".scroll_page").eq(0).addClass("screen_cur");
            var scroll_num=$(".scroll_page").size();
            var scroll_cur=0;
            var scroll_state=true;
            var about_timer=null;
            var win_h;
            var page_h='';
            for(i=0;i<=scroll_num;i++){
                page_h+="<li class='item'></li>";
            }
            $(".page_tip").prepend(page_h);
            $(".page_tip li").eq(0).addClass("cur");
            $('html,body').animate({scrollTop:'0px'},{duration: 800, easing: "easeInOutCubic"});
            $('body').bind('mousewheel',function(event,delta){
                event.preventDefault();
                if(delta>0 && scroll_cur>0 && scroll_state==true){
                    //下
                    scroll_cur--;
                    clearTimeout(about_timer);
                    about_timer=setTimeout(function(){move();},300);
                    scroll_state=false;
                }
                if(delta<0 && scroll_cur<scroll_num && scroll_state==true){
                    //上
                    scroll_cur++;
                    clearTimeout(about_timer);
                    about_timer=setTimeout(function(){move();},300);
                    scroll_state=false;
                }
            });
            function move(){
                win_h=$(window).height();
                $(".page_tip li").removeClass("cur");
                $(".page_tip li.item").eq(scroll_cur).addClass("cur");
                $(".page_tip li.move").css("top",scroll_cur*28+6+"px");
                if(scroll_cur==scroll_num){
                    var move=(scroll_cur-1)*win_h+138;
                    $('html,body').animate({scrollTop: move+'px'},{duration: 300, easing: "easeInOutCubic",complete:function(){
                        scroll_state=true;
                    }});
                    console.log(scroll_cur+"|"+scroll_num);
                }else{
                    $('html,body').animate({scrollTop: scroll_cur*win_h+'px'},{duration: 800, easing: "easeInOutCubic",complete:function(){
                        $(".scroll_page").removeClass("screen_cur");
                        $(".scroll_page").eq(scroll_cur).addClass("screen_cur");
                        scroll_state=true;
                    }});
                }
            }
            //响应式js
            $(window).resize(function(){
                resize();
            });
            function resize(){
                var win_h=$(window).height();
                if(win_h<775){
                    $("body").addClass("win_775");
                }else{
                    $("body").removeClass("win_775");
                }
            }
            resize();
        },
        index:function(){
            /*******section_a*******/
            $(".map .mask").click(function(){
                $(this).hide();
            });
            $(".map").mouseleave(function(){
                $(".map .mask").fadeIn(300);
            });
            /*******section_c*******/
            $(".c_box").hover(function(){
                var id=$(this).data("type");
                $(this).addClass("cur_"+id);
            },function(){
                var id=$(this).data("type");
                $(this).removeClass("cur_"+id);
            });
            /*$(".section_b").mousemove(function(e){
             var default_l=$(this)[0].offsetLeft;
             var default_t=$(this)[0].offsetTop;
             var moveX=-(e.pageX-default_l)/20;
             var moveY=-(e.pageY-default_t)/20;
             moveX=moveX-424;
             moveY=moveY-259;
             var letterX = moveX+"px";
             var letterY = moveY+"px";
             $("#picture").css("background-position",letterX+" "+letterY);
             })
             $(".section_c").mousemove(function(e){
             var default_l=$(this)[0].offsetLeft;
             var default_t=$(this)[0].offsetTop;
             var moveX=e.pageX-default_l;
             var moveY=e.pageY-default_t;
             var letterX = moveX/40+"px";
             var letterY = moveY/20+"px";
             var lineX = -moveX/40+"px";
             var lineY = -moveY/20+"px";
             var c10_X = moveX/60+"px";
             var c10_Y = moveY/40+"px";
             $(".c_10").css({"-moz-transform":"translate3d("+c10_X+","+c10_Y+",0)","-webkit-transform":"translate3d("+c10_X+","+c10_Y+",0)","-o-transform":"translate3d("+c10_X+","+c10_Y+",0)","transform":"translate3d("+c10_X+","+c10_Y+",0)"});
             $(".c_2").css({"-moz-transform":"translate3d("+c10_X+","+c10_Y+",0)","-webkit-transform":"translate3d("+c10_X+","+c10_Y+",0)","-o-transform":"translate3d("+c10_X+","+c10_Y+",0)","transform":"translate3d("+c10_X+","+c10_Y+",0)"});
             $(".c_12").css({"-moz-transform":"translate3d("+lineX+","+lineY+",0)","-webkit-transform":"translate3d("+lineX+","+lineY+",0)","-o-transform":"translate3d("+lineX+","+lineY+",0)","transform":"translate3d("+lineX+","+lineY+",0)"});
             $(".c_11").css({"-moz-transform":"translate3d("+letterX+","+letterY+",0)","-webkit-transform":"translate3d("+letterX+","+letterY+",0)","-o-transform":"translate3d("+letterX+","+letterY+",0)","transform":"translate3d("+letterX+","+letterY+",0)"});
             });	*/
            /******section_d******/
            $(".people_item").hover(function(){
                $(this).addClass("cur");
            },function(){
                $(this).removeClass("cur");
            });
            $(".people_item").mousemove(function(e){
                var default_l=$(this)[0].offsetLeft;
                var default_t=$(this)[0].offsetTop;
                var moveX=e.pageX-default_l;
                var moveY=e.pageY-default_t-$(".section_d")[0].offsetTop;
                var letterX = moveX/20+"px";
                var letterY = moveY/20+"px";
                var lineX = -moveX/20+"px";
                var lineY = -moveY/20+"px";
                $(this).find(".line").css({"-moz-transform":"translate3d("+lineX+","+lineY+",0)","-webkit-transform":"translate3d("+lineX+","+lineY+",0)","-o-transform":"translate3d("+lineX+","+lineY+",0)","transform":"translate3d("+lineX+","+lineY+",0)"});
                $(this).find(".letter").css({"-moz-transform":"translate3d("+letterX+","+letterY+",0)","-webkit-transform":"translate3d("+letterX+","+letterY+",0)","-o-transform":"translate3d("+letterX+","+letterY+",0)","transform":"translate3d("+letterX+","+letterY+",0)"});
            });

        },
        contact:function(){
            var win_h=$(window).height();
            var foot_h=138;
            var new_h=win_h-foot_h-1;
            $(".contact").height(new_h);
            $(window).resize(function(){
                var win_h=$(window).outerHeight();
                var new_h=win_h-foot_h-1;
                $(".contact").height(new_h);
            });
            $(".contact").addClass("contact_cur");
        },
        company:function(){
            function slide(obj,delay,speed){
                var theInt = null;
                var i=p=0;
                var html="";
                var $imgs=$(obj).find(".imgs");
                var num=$imgs.find("li").size();
                for(i=0;i<num;i++){
                    html+=("<li>"+i+"</li>");
                }
                $(".section_f").append('<ul class="ctrs company_ctrs">'+html+'</ul>');
                var $ctrs=$(".company_ctrs");

                //点击切换
                $ctrs.find("li").each(function(i){
                    $(this).click(function(){
                        if(!$(this).hasClass("cur")){
                            auto_play(i);
                            slide_state(i);
                        }
                    });
                });
                //自动播放
                auto_play=function(p){
                    clearInterval(theInt);
                    theInt=setInterval(function(){
                        p++;
                        if(p>=num){
                            p=0;
                        }
                        slide_state(p);
                    },delay);
                }
                //当前状态
                slide_state=function(num){
                    $imgs.find("li").fadeOut(speed).eq(num).fadeIn(speed);
                    $ctrs.find("li").removeClass("cur").eq(num).addClass("cur");
                }
                //初始化
                slide_state(p);
                auto_play(p);
            }
            slide(".idea_slider",4000,500);
            $(".section_b").mousemove(function(e){
                var default_l=$(this)[0].offsetLeft;
                var default_t=$(this)[0].offsetTop;
                var moveX=-(e.pageX-default_l)/20;
                var moveY=-(e.pageY-default_t)/20;
                moveX=moveX-424;
                moveY=moveY-259;
                var letterX = moveX+"px";
                var letterY = moveY+"px";
                $("#picture").css("background-position",letterX+" "+letterY);
            })
        },
        cooperation:{
            width:$(".section_k .k_2").width(),
            num:Math.ceil($("#k_data .item").size()/9),
            current:0,
            ctrs:'',
            td:'',
            left:function(){
                $(".k_2_cont .arrow_l").click(function(){
                    if(fun.cooperation.current>0){
                        fun.cooperation.current=fun.cooperation.current-1;
                        fun.cooperation.move();
                    }
                });
            },
            right:function(){
                $(".k_2_cont .arrow_r").click(function(){
                    if(fun.cooperation.current<fun.cooperation.num-1){
                        fun.cooperation.current=fun.cooperation.current+1;
                        fun.cooperation.move();
                    }
                });
            },
            move:function(){
                $('#k_2_scroll').animate({ marginLeft: "-" + fun.cooperation.current*fun.cooperation.width + "px" },600,function(){
                    $(".section_k .k_2 .ctrs li").removeClass("cur");
                    $(".section_k .k_2 .ctrs li").eq(fun.cooperation.current).addClass("cur");
                });
            },
            slider:function(){
                $("#k_2_scroll").width(fun.cooperation.num*fun.cooperation.width);
                for(i=0;i<fun.cooperation.num;i++){
                    fun.cooperation.ctrs+="<li>"+i+"</li>";
                    fun.cooperation.td+="<td></td>";
                }
                $("#k_2_scroll tr").append(fun.cooperation.td);
                for(i=0;i<fun.cooperation.num;i++){
                    for(t=0;t<9;t++){
                        $("#k_2_scroll tr td").eq(i).append($("#k_data .item").eq(0));
                    }
                }
                $(".section_k .k_2").append("<ul class='ctrs'>"+fun.cooperation.ctrs+"</ul>");
                $(".section_k .k_2 .ctrs li").eq(0).addClass("cur");
                $(".section_k .k_2 .ctrs li").each(function(index, element) {
                    $(this).click(function(){
                        fun.cooperation.current=index;
                        fun.cooperation.move();
                    });
                });
                fun.cooperation.left();
                fun.cooperation.right();
            },
            career:function(){
                $(".k_2 table a").click(function(e){
                    e.preventDefault();
                    var id=$(this).data('id');
                    $(".career_mask").show();
                    $(".career").show();
                    $.ajax( {
                        url:'career.ashx?id='+id,// 跳转到 action
                        type:'get',
                        dataType:"json",
                        success: function (data) {
                            $(".career_title").html(data.results.InfoTitle);
                            $(".career_data").html(data.results.InfoContent);
                            $(".career_data").mCustomScrollbar({ autoDraggerLength: false, mouseWheelPixels: 400 });
                        },
                        error : function() {
                            alert("网络异常，请稍后再试！");
                        }
                    });
                });
                $(".career .close").click(function(){
                    $(".career_data").html("");
                    $(".career_mask").hide();
                    $(".career").hide();
                });
                $(".logo_box").hover(function(){
                    $(this).addClass("logo_box_hover");
                },function(){
                    $(this).removeClass("logo_box_hover");
                });
                $(".section_j").mousemove(function(e){
                    var default_l=$(this)[0].offsetLeft;
                    var default_t=$(this)[0].offsetTop;
                    var moveX=-(e.pageX-default_l)/20;
                    var moveY=-(e.pageY-default_t)/20;
                    moveX=moveX-424;
                    moveY=moveY-259;
                    var letterX = moveX+"px";
                    var letterY = moveY+"px";
                    $("#picture").css("background-position",letterX+" "+letterY);
                })
            }
        },
        service:{
            scroll:{
                width:$(".i_3 .scroll").width(),
                num:$(".i_3 .scroll .item").size()-1,
                current:0,
                ctrs:'',
                td:'',
                left:function(){
                    $(".i_3 .scroll_l").click(function(){
                        if(fun.service.scroll.current>0){
                            fun.service.scroll.current=fun.service.scroll.current-1;
                            fun.service.scroll.move();
                        }
                    });
                },
                right:function(){
                    $(".i_3 .scroll_r").click(function(){
                        if(fun.service.scroll.current<fun.service.scroll.num-1){
                            fun.service.scroll.current=fun.service.scroll.current+1;
                            fun.service.scroll.move();
                        }
                    });
                },
                move:function(){
                    $('.i_3 .scroll_cont').animate({ marginLeft: "-" + fun.service.scroll.current*fun.service.scroll.width/2 + "px" },600,function(){

                    });
                },
                slider:function(){
                    $(".i_3 .scroll_cont").width(fun.service.scroll.num*fun.service.scroll.width);
                    fun.service.scroll.left();
                    fun.service.scroll.right();
                }
            },
            fade:function(){
                function slide(obj,delay,speed){
                    var theInt = null;
                    var i=p=0;
                    var html="";
                    var $imgs=$(obj);
                    var num=$imgs.find(".pic").size();
                    for(i=0;i<num;i++){
                        html+=("<li>"+i+"</li>");
                    }
                    $(obj).append('<ul class="ctrs">'+html+'</ul>');
                    var $ctrs=$(obj).find(".ctrs");

                    //点击切换
                    $ctrs.find("li").each(function(i){
                        $(this).click(function(){
                            if(!$(this).hasClass("cur")){
                                auto_play(i);
                                slide_state(i);
                            }
                        });
                    });
                    //自动播放
                    auto_play=function(p){
                        clearInterval(theInt);
                        theInt=setInterval(function(){
                            p++;
                            if(p>=num){
                                p=0;
                            }
                            slide_state(p);
                        },delay);
                    }
                    //当前状态
                    slide_state=function(num){
                        var prev=num-1;
                        if(prev<0){
                            prev=num-1;
                        }
                        $imgs.find(".pic").fadeOut(speed).eq(num).fadeIn(speed,function(){
                            $imgs.find(".pic").eq(prev).removeClass("pic_cur");
                        });
                        $imgs.find(".pic").eq(num).addClass("pic_cur");
                        $ctrs.find("li").removeClass("cur").eq(num).addClass("cur");
                    }
                    //初始化
                    slide_state(p);
                    auto_play(p);
                }
                slide(".banner",5000,500);
            }
        },
        product:function(){

            $(".pic_1 .circle_list .text").click(function(){
                $(".pic_1 .circle_list").removeClass("show_circle");
                $(".pic_1 .circle_list2").addClass("show_circle");
            });
            $(".pic_1 .circle_list2 .text").click(function(){
                $(".pic_1 .circle_list").addClass("show_circle");
                $(".pic_1 .circle_list2").removeClass("show_circle");
            });
            $(".section_m_l .article").eq(0).show();
            $(".section_m_c").eq(0).show();
            $(".section_m_r").eq(0).show();
            $(".section_m_l .type li").each(function(index, element) {
                $(this).click(function(){
                    $(".section_m_l .article").hide();
                    $(".section_m_l .article").eq(index).show();
                    $(".section_m_r").hide();
                    $(".section_m_r").eq(index).show();
                    $(".section_m_c").hide();
                    $(".section_m_c").eq(index).show();
                    $(".section_m_l .type li").removeClass("cur");
                    $(this).addClass("cur");
                });
            });
            $(".pro1_zoom").click(function(){
                $(".pro1,.pro_mask").show();
            });
            $(".pro2_zoom").click(function(){
                $(".pro2,.pro_mask").show();
            });
            $(".pro1 .close").click(function(){
                $(".pro1,.pro_mask").hide();
            });
            $(".pro2 .close").click(function(){
                $(".pro2,.pro_mask").hide();
            });
            $(".pro3_zoom").click(function(){
                $(".pro3,.pro_mask").show();
            });
            $(".pro3 .close").click(function(){
                $(".pro3,.pro_mask").hide();
            });
            $(".pro4_zoom").click(function(){
                $(".pro4,.pro_mask").show();
            });
            $(".pro4 .close").click(function(){
                $(".pro4,.pro_mask").hide();
            });
            $(".section_m_r").each(function(index, element) {
                $(this).find("ul li").each(function(sub_, element) {
                    $(this).click(function(){
                        var id=$(this).data("id");
                        $(".section_m_r").eq(index).find("ul li").removeClass("cur");
                        $(this).addClass("cur");
                        $(".section_m_c").eq(index).find(".pic").hide();
                        $(".section_m_c").eq(index).find(".pic").eq(sub_).fadeIn(300);
                    })
                });
            });
            function slide(obj,delay,speed){
                var theInt = null;
                var i=p=0;
                var html="";
                var $imgs=$(obj);
                var num=$imgs.find(".pic").size();
                for(i=0;i<num;i++){
                    html+=("<li>"+i+"</li>");
                }
                $(obj).append('<ul class="ctrs">'+html+'</ul>');
                var $ctrs=$(obj).find(".ctrs");

                //点击切换
                $ctrs.find("li").each(function(i){
                    $(this).click(function(){
                        if(!$(this).hasClass("cur")){
                            auto_play(i);
                            slide_state(i);
                        }
                    });
                });
                //自动播放
                auto_play=function(p){
                    clearInterval(theInt);
                    theInt=setInterval(function(){
                        p++;
                        if(p>=num){
                            p=0;
                        }
                        slide_state(p);
                    },delay);
                }
                //当前状态
                slide_state=function(num){
                    $imgs.find(".pic").removeClass("l_cur").eq(num).addClass("l_cur");
                    $ctrs.find("li").removeClass("cur").eq(num).addClass("cur");
                }
                //初始化
                slide_state(p);
                auto_play(p);
            }
            slide(".banner",5000,500);

        },
        autoimg:function(maxWidth, maxHeight, objImg){
            //图片大小缩放
            var img = new Image();
            img.src = objImg.src;
            var hRatio,wRatio,Ratio = 1,w = img.width, h = img.height;
            wRatio = maxWidth / w;
            hRatio = maxHeight / h;
            if (maxWidth == 0 && maxHeight == 0) {
                Ratio = 1;
            } else if (maxWidth == 0) {
                if (hRatio < 1) Ratio = hRatio;
            } else if (maxHeight == 0) {
                if (wRatio < 1) Ratio = wRatio;
            } else if (wRatio < 1 || hRatio < 1) {
                Ratio = (wRatio <= hRatio ? wRatio : hRatio);
            }
            if (Ratio < 1) {
                w = w * Ratio;
                h = h * Ratio;
            }
            objImg.height = h;
            objImg.width = w;
        }
    }
    fun.menu();
})
