/* 文字滚动 */
(function($){
	$.fn.textSlider = function(settings){    
        settings = jQuery.extend({
        	speed : "normal",
			line : 2,
			timer : 1000
    	}, settings);
		return this.each(function() {
			$.fn.textSlider.scllor( $( this ), settings );
    	});
    }; 
	$.fn.textSlider.scllor = function($this, settings){
		//alert($this.html());
		var ul = $( "ul:eq(0)", $this );
		var timerID;
		var li = ul.children();
		var _btnUp=$(".up:eq(0)", $this)
		var _btnDown=$(".down:eq(0)", $this)
		var liHight=$(li[0]).height();
		var upHeight=0-settings.line*liHight;//滚动的高度；
		var scrollUp=function(){
			_btnUp.unbind("click",scrollUp);
			ul.animate({marginTop:upHeight},settings.speed,function(){
				for(i=0;i<settings.line;i++){
                	 //$(li[i]).appendTo(ul);
					 ul.find("li:first").appendTo(ul);
					// alert(ul.html());
                }
               	ul.css({marginTop:0});
                _btnUp.bind("click",scrollUp); //Shawphy:绑定向上按钮的点击事件
			});	
		};
		var scrollDown=function(){
			_btnDown.unbind("click",scrollDown);
			ul.css({marginTop:upHeight});
			for(i=0;i<settings.line;i++){
				ul.find("li:last").prependTo(ul);
            }
			ul.animate({marginTop:0},settings.speed,function(){
                _btnDown.bind("click",scrollDown); //Shawphy:绑定向上按钮的点击事件
			});	
		};
		var autoPlay=function(){
			timerID = window.setInterval(scrollUp,settings.timer);
			//alert(settings.timer);
		};
		var autoStop = function(){
            window.clearInterval(timerID);
        };
		//事件绑定
		ul.hover(autoStop,autoPlay).mouseout();
		_btnUp.css("cursor","pointer").click( scrollUp );
		_btnUp.hover(autoStop,autoPlay);
		_btnDown.css("cursor","pointer").click( scrollDown );
		_btnDown.hover(autoStop,autoPlay)
	};
})(jQuery);

/* 图片幻灯 */
function css(obj, attr, value) {
	if (arguments.length == 2) {
		if (attr != 'opacity') {
			return parseInt(obj.currentStyle ? obj.currentStyle[attr] : document.defaultView.getComputedStyle(obj, false)[attr]);
		} else {
			return Math.round(100 * parseFloat(obj.currentStyle ? obj.currentStyle[attr] : document.defaultView.getComputedStyle(obj, false)[attr]));
		}
	} else if (arguments.length == 3) switch (attr) {
	case 'width':
	case 'height':
	case 'paddingLeft':
	case 'paddingTop':
	case 'paddingRight':
	case 'paddingBottom':
		value = Math.max(value, 0);
	case 'left':
	case 'top':
	case 'right':
	case 'bottom':
	case 'marginLeft':
	case 'marginTop':
	case 'marginRight':
	case 'marginBottom':
		obj.style[attr] = value + 'px';
		break;
	case 'opacity':
		obj.style.filter = "alpha(opacity:" + value + ")";
		obj.style.opacity = value / 100;
		break;
	default:
		obj.style[attr] = value;
	}
	return function(attr_in, value_in) {
		css(obj, attr_in, value_in)
	};
}


//obj是指要运动的物体
//itype是要采取哪种类型的运动move_type.buffer为缓冲运动，move_type.flex弹性运动。
//oTarget是目标要运行到多少来.默认是px所以不需要带单位。
//fnCallBack运动结束要做些什么。
//fnduring在运动中要进行什么
function startMove(obj, oTarget, iType, fnCallBack, fnDuring) {
	var bStop = true;
	var attr = '';
	var speed = 0;
	var cur = 0;
	if (obj.timer) {
		clearInterval(obj.timer);
	}
	obj.timer = setInterval(function() {
		startMove(obj, oTarget, iType, fnCallBack, fnDuring);
	}, 30);
	for (attr in oTarget) {
		if (iType == 'buffer') {
			cur = css(obj, attr);
			if (oTarget[attr] != cur) {
				bStop = false;
				speed = (oTarget[attr] - cur) / 5;
				speed = speed > 0 ? Math.ceil(speed) : Math.floor(speed);
				css(obj, attr, cur + speed);
			}
		} else if (iType = 'flex') {
			if (!obj.oSpeed) obj.oSpeed = {};
			if (!obj.oSpeed[attr]) obj.oSpeed[attr] = 0;
			cur = css(obj, attr);
			if (Math.abs(oTarget[attr] - cur) >= 1 || Math.abs(obj.oSpeed[attr]) >= 1) {
				bStop = false;
				obj.oSpeed[attr] += (oTarget[attr] - cur) / 5;
				obj.oSpeed[attr] *= 0.7;
				css(obj, attr, cur + obj.oSpeed[attr]);
			}
		}
	}
	if (fnDuring) fnDuring.call(obj);
	if (bStop) {
		clearInterval(obj.timer);
		obj.timer = null;
		if (fnCallBack) fnCallBack.call(obj);
	}
}
/* 图片幻灯 */
/*var arr=[12,44,555,444,666];
var imax=999999999;
var imaxp=0;
var imin=-99999;
var iminp=0;
for(var i=0;i<arr.length;i++){
	if(arr[i]<imax){
		imax=arr[i]
		imaxp=i
		}
	else if(arr[i]>imin){
		imin=arr[i]
		iminp=i
		}
	}
alert("最小数字为："+imax+"它在第几位"+imaxp)
alert("最大数字为："+imin+"它在第几位"+iminp)*/


/* 顶部菜单 */
jQuery(document).ready(function($){

	/*arguments*/	
	var topNav = $( '#navbar ul.main-nav>li' );
	var subNav = $( '#navbar .sub-menu>li' );
	
	/*have sub menu background*/
	$( '#navbar .sub-menu li:has(.sub-menu)>a' ).addClass('sub');
	
	/*top nav*/
	$( topNav ).mouseenter( function(){
		$( this ).find( '>ul.sub-menu' ).fadeIn( 50 );
	} );
	$( topNav ).mouseleave( function(){
		$( this ).find( '>ul.sub-menu' ).fadeOut( 50 );
	} );
	
	/*sub nav*/
	$( subNav ).mouseenter( function(){
		$( this ).css( 'background-color','#0d5f9c' ).find( '>ul.sub-menu' ).css( 'display','block' );
	} );
	$( subNav ).mouseleave( function(){
		$( this ).css( 'background','none' ).find( '>ul.sub-menu' ).css( 'display','none' );
	} );	
	
});

// 固定层
function buffer(a,b,c){var d;return function(){if(d)return;d=setTimeout(function(){a.call(this),d=undefined},b)}}(function(){function e(){var d=document.body.scrollTop||document.documentElement.scrollTop;d>b?(a.className="div1 div2",c&&(a.style.top=d-b+"px")):a.className="div1"}var a=document.getElementById("float");if(a==undefined)return!1;var b=0,c,d=a;while(d)b+=d.offsetTop,d=d.offsetParent;c=window.ActiveXObject&&!window.XMLHttpRequest;if(!c||!0)window.onscroll=buffer(e,150,this)})();
