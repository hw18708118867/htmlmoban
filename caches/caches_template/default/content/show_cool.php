<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!doctype html>
<html lang="zh-cn">
<head>
    <title>  dpcool店铺酷  电商设计灵感酷，电商设计联盟，电商设计欣赏，网店装修欣赏，淘宝装修设计欣赏 </title>
    <meta charset="utf-8" />
    <meta name="description" content="电商设计灵感酷 " />
    <meta name="keywords" content="电商设计，电商交流，电商设计师，店铺设计，淘宝店装修，店铺欣赏电商设计联盟，电商设计欣赏，网店装修欣赏，淘宝装修设计欣赏、" />
     
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo CSS_PATH;?>cool/common.css" class="cssfx"/>
  
	 <link rel="stylesheet" type="text/css" media="screen" href="" id="darkCss"/>
    <!--[if lt IE 9]>
    <script src="./js/css3-mediaqueries.js"></script>
	<![endif]-->
	<link type="text/css" rel="stylesheet" href="<?php echo CSS_PATH;?>style.css">
	<script>
var urlpath = '';
var skinpath = '';

var uid = '';
var unit_3 = true;
			
</script>

<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.min.js"></script>
<link href="<?php echo CSS_PATH;?>cool/default.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo CSS_PATH;?>cool/page.css" />
		 
</head>

<body>

<div id="wrap">
    <div id="header">
	    <div class="header_con">
		    <div id="logo"><a title="" href="javascript:;"></a></div>

			<div class="nav-mo clearfix">
           
            <div class="nav-home">
			<a class="n-c" href="./">首页</a>
			</div>

			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b43f1459ac702900c8d44c91a5e796dd&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
      
	     <?php $n=1;if(is_array($data)) foreach($data AS $cat) { ?>
	      <div class="nav-lis">
			<a class="n-c" href="<?php echo $cat['url'];?>"><?php echo $cat['catname'];?></a>
			<!--
							<i class="hot-ico" style="display: inline;"></i>-->
			 
			</div>
			 
			 
            <?php $n++;}unset($n); ?>
	     <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		    
					 
			</div>
		 
			
			<div id="tool">	
							<a href="javascript:;">登录</a> | <a href="javascript:;">注册</a>
			 </div>
			
		</div>
	</div>
<div id="index">
    <div id="article">
	     
          <div id="feedArea">


		        <!--------feedarea------------>

				<div class="content_layout">
            <div class="detail_content clearfix">
               <div class="detail_wrapper">
                    
                    <h1>法国电影《THE WITNESSES》官方网站</h1>
                    <p class="item_style">2个月前</p>
                    <p>
						<span class="cur"><a href="/coolsite/lists/1-0-0-255/">影视娱乐酷站</a></span>
						<span> / </span>
						<span><a href="/coolsite/lists/1-0-0-487/">电影酷站</a></span>
						<span>
					</span></p>
                    <div class="detail_wrapper_con">
                    													<p class="preview">
							 <?php echo $content;?>	 
					 </p>
													 
												 
																	                    </div>
               </div>
                <div class="detail_opration clearfix">
                    <div class="enter_web">
                        <a target="_blank" href="http://thewitnesses-theseries.fr/">访问酷站</a>
                    </div>
                    <div class="sns_tools">
                        <a title="点击收藏《法国电影《THE WITNESSES》官方网站》" class="favourite" channel="1" rel="8178" href="javascript:;"><span class="download"></span></a>
                        <span class="share"></span>
                        <a href="javascript:;" title="关注8bears" rel="36" class="add_follow"><span class="like"></span></a>
                    </div>
                </div>
                <div class="page_styke_icon">
                    <div class="page_styke_con">
                        <div class="pre"><a href="/coolsite/show/ODE3OQ.html"></a></div>                        <div class="web_style"><a href="/coolsite/lists/"></a></div>
                        <div class="next"><a href="/coolsite/show/ODE3Ng.html"></a></div>                    </div>
                </div>
                <div class="detail_comment">
                    <div class="detail_comment_wrapper clearfix">
                        <div class="detail_comment_con">
                             <div class="detail_comment_reply">
                                 <div class="comment_reply_wrapper">
                                     <div class="comment_reply_con">
                                        <h1 id="comment_post"> 评论</h1>
                                        <div class="comment_a_t"></div>
                                     </div>
                                 </div>
                             </div>
                        </div>
                        <!-- 评论内容列表  -->
						<div class="detail_comment_list comment_c" id="content_comment">						<!-- 评论内容列表  -->
								<div class="comment_list_con">
									<div class="comment_list_wraper">
										<div class="comment_list_items">
											<h1>所有评论(0)</h1>
																							<center>暂时没有任何会员发表评论</center>
																						
											<!-- 评论列表单条评论 start -->
																						<!-- 评论列表单条评论 end -->
										</div>
									</div>
								</div>
								<div class="comment_page">
									<div class="comment_p comment_page_icon">
																			</div>
								</div>
						<!-- 评论内容列表  end  -->				
				
				
</div>
						<!-- 评论内容列表  end  -->
                    </div>
                </div>
            </div>


        </div>
 
	         


                <!--------feedarea--------------->
		        
				 
			</div>
		
					 
			 
			</div>
	 
</div>

 

<script>
$(document).ready(function(){
	(function() {
		var $backToTopTxt = "TOP", $backToTopEle = $('<div class="backToTop"></div>').appendTo($("body"))
			.text($backToTopTxt).attr("title", $backToTopTxt).click(function() {
				$("html, body").animate({ scrollTop: 0 }, 120);
		}), $backToTopFun = function() {
			var st = $(document).scrollTop(), winh = $(window).height();
			(st > 0)? $backToTopEle.show(): $backToTopEle.hide();    
			//IE6下的定位
			if (!window.XMLHttpRequest) {
				$backToTopEle.css("top", st + winh - 166);    
			}
		};
		var $closeLight = "关灯",$isLight = true,$lightEle = $('<div id="toggleLight"></div>').appendTo($("body")).text($closeLight).click(function(){
			if($isLight){
				$("#darkCss").attr("href","<?php echo CSS_PATH;?>cool/dark.css");
				$isLight = false;
				$("#toggleLight").text("开灯");
			}else
			{
				$("#darkCss").attr("href","");
				$isLight = true;
				$("#toggleLight").text("关灯");
			}
		});
		$(window).bind("scroll", $backToTopFun);
		$(function() { $backToTopFun(); });
	})();
});
</script>
<?php include template("content","footer"); ?>