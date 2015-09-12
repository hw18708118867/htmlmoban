/**
 * Created by Administrator on 15-8-7.
 */
;(function($) {
    $.fn.stepflow = function(options) {
        var opt = $.extend({
            movingframe:".flow-setps-frame",			//滚动的层
            step_attr:"step",							//步骤的Attribute
            next_direction_attr:"next-direction",		//下一步的方向的参数,可设置"left"，"right","up","down"
            first_img:".cur",							//第一个显示的图片
            img_element:"img.steps",					//图片选择器
            HW_enable_class:"hardware-acceleration",	//开启硬件加速的CSS样式
            animateSpeed:800,							//移动速度(毫秒),越小越快
            resizeTimerDelay:300,						//窗口缩放重新计算延迟
            easing:"easeOutExpo"								//设置动画的过度效果，可选参数是"swing","easeOutCirc","easeOutBack","easeOutExpo"
        }, options);

        function checkTransforms3D() {
            if ("checked" in arguments.callee) {
                return arguments.callee.checked;
            }
            if ("WebKitCSSMatrix" in window && "m11" in new WebKitCSSMatrix()) return true; else {
                var css = [ "perspectiveProperty", "MozPerspective", "OPerspective", "msPerspective" ];
                for (var p in css) if (css[p] in document.documentElement.style) return true;
            }
            return false;
        }
        var setCss = function(wrap,curimg,cssname,cssghostElid) {
            var newID = cssghostElid || "layout-css-123981239";
            var ghostElem = $("<div>").attr("id", newID).css('display', 'none');
            var ghostTemp = document.getElementById(newID);
            var $wrap = wrap;
            var $curimg = curimg;
            var $wrapHeight = $curimg.height();

            $wrap.height( Math.floor($(window).width()*0.47328) );
            //var _css = cssname + "{width:" +  eachwidth + "px;" + "height:" + eachheight + "px;" + "}";
            var styles =
                '<style type="text/css">\n' +
                    //_css+
                    '</style>';

            //ghostElem.html(styles);
            //ghostTemp ? $(ghostTemp).html(styles) : $('body').prepend(ghostElem);
        };
        //--
        var $self = $(this);
        var $mframe = $self.children(opt.movingframe);
        var $img_steps = $(opt.img_element);
        var count = "1";
        var isSupportTouch = "ontouchend" in document ? true : false;
        if (isSupportTouch===true) {
            var det = false;
            $self.on("touchstart",opt.img_element, function(e) {
                det = true;
            }).on("touchmove",opt.img_element,function() {
                det = false;
            }).on("touchend",opt.img_element, function(e) {
                if (det === true) {
                    var $this = $(this);
                    $this.trigger("click");
                    det = false;
                    return false;
                }
            });
        }

        var clearHW = null;
        $self.on("click",opt.img_element,function(e) {
            e.stopPropagation();
            if (clearHW) {
                clearTimeout(clearHW);
            }
            var $this = $(this);
            var direction = $this.attr(opt.next_direction_attr);
            var thisStep = $this.attr(opt.step_attr);
            //console.log(direction);


            var nextStep = Number(Number(thisStep) + 2);
            var nextStep_1 = Number(Number(thisStep) + 1);
            var nStep = $img_steps.filter(opt.img_element+"[step="+ nextStep +"]");
            var nnStep = $img_steps.filter(opt.img_element+"[step="+ nextStep_1 +"]");

            $mframe.addClass(opt.HW_enable_class);
            clearHW = setTimeout(function() {
                $mframe.removeClass(opt.HW_enable_class);
            }, 4000);
            var afanimate = function() {
                if (thisStep == "1") {
                    $this.css("visibility","hidden");
                } else {
                    $this.css("display","none");
                }
                nStep.css({
                    "visibility":"visible",
                    "display":"block"
                });
            };

            if ( nnStep.length ) {
                $mframe.filter(":not(:animated)").stop(true).animate({
                    left: -nnStep.position().left,
                    top: -nnStep.position().top,
                },opt.animateSpeed,opt.easing,function() {
                    afanimate();
                });
            } else {
                $mframe.removeAttr("style");
                $img_steps.removeAttr("style");
            }
        }).on("click", function(e) {
            e.stopPropagation();
            $mframe.removeAttr("style");
            $img_steps.removeAttr("style");
        });
        if (checkTransforms3D()===true){
            var resizeTimer = null;
            $(window).on("resize", function() {
                if (resizeTimer) {
                    clearTimeout(resizeTimer);
                }
                resizeTimer = setTimeout(function() {
                    setCss($self, $self.find(opt.first_img), opt.img_element,"layout-css-flow");
                    $mframe.removeAttr("style");
                    $img_steps.removeAttr("style");
                }, 300);
            });
        }
        //console.log($self.find(opt.first_img))
        setCss($self, $self.find(opt.first_img), opt.img_element,"layout-css-flow");
        window.onload=function() {setCss($self, $self.find(opt.first_img), opt.img_element,"layout-css-flow");}

        return this;
    };
})(jQuery,window,document);