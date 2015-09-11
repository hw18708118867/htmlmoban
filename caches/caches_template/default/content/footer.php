<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?> 
<div class="footer">

             <div class="f_Grid1">
        <div class="f_Box1 FL">
            <div class="f_T">
                关于我们
            </div>
            <ul class="dmenu" id="menu-ifanr-footer-1">
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5741"
                id="menu-item-5741">
                    <a target="_blank" href="<?php echo qq_url();?>">
                        主题定制
                    </a>
                </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5742"
                id="menu-item-5742">
                    <a href="<?php echo qq_url();?>" target="_blank">
                        主题投稿
                    </a>
                </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5743"
                id="menu-item-5743">
                    <a href="<?php echo qq_url();?>" target="_blank">
                        广告服务
                    </a>
                </li>
            </ul>
        </div>
        <div class="f_Box2 FL">
            <div class="f_T">
                帮助文档
            </div>
            <ul class="dmenu" id="menu-ifanr-footer-2">
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5744"
                id="menu-item-5744">
                    <a href="#" target="_blank">
                        站长交流中心
                    </a>
                </li>
                <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-5745"
                id="menu-item-5745">
                    <a href="#" target="_blank">
                        WP教程
                    </a>
                </li>
                <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-5746"
                id="menu-item-5746">
                    <a href="#" target="_blank">
                        WP插件
                    </a>
                </li>
            </ul>
        </div>
        <div class="f_Box3 FL">
            <div class="f_T">
                热门标签
            </div>
            <div id="xztag">
                <a style="font-size: 16.217391304348pt;" title="116个话题" class="tag-link-44"
                href="#">
                    wordpress国人主题
                </a>
                <a style="font-size: 10.130434782609pt;" title="73个话题" class="tag-link-39"
                href="#">
                    wordpress中文模版
                </a>
                <a style="font-size: 22pt;" title="181个话题" class="tag-link-11" href="#">
                    wordpress主题
                </a>
                <a style="font-size: 15pt;" title="106个话题" class="tag-link-40" href="#">
                    wordpress免费主题
                </a>
                <a style="font-size: 9.8260869565217pt;" title="72个话题" class="tag-link-37"
                href="#">
                    wordpress个人主题
                </a>
                <a style="font-size: 15.608695652174pt;" title="111个话题" class="tag-link-50"
                href="#">
                    wordpress cms模板
                </a>
                <a style="font-size: 8pt;" title="62个话题" class="tag-link-42" href="#">
                    wordpress两栏主题
                </a>
                <a style="font-size: 8.6086956521739pt;" title="65个话题" class="tag-link-17"
                href="#">
                    wordpress企业主题
                </a>
                <a style="font-size: 16.521739130435pt;" title="120个话题" class="tag-link-29"
                href="#">
                    wordpress博客主题
                </a>
                <a style="font-size: 8pt;" title="62个话题" class="tag-link-56" href="#">
                    wordpress淘宝客主题
                </a>
            </div>
        </div>
        <div class="f_Box4 FL">
            <p>
                声明：本站所有主题/文章除标明原创外，均来自网络转载，版权归原作者所有，如果有侵犯到您的权益，请联系本站删除，谢谢合作！
            </p>
            <p>
                本站团队成员：黄桥国 | 江些阳
            </p>
        </div>
        <div class="clear">
        </div>
    </div>
    <div class="f_Box5">
        &copy;www.htmlmoban.cn 2011-2014 All Rights Reserved. Theme Rev. 3.2beta |
        基于
        <a title="WordPress建站程序" rel="nofollow" target="_blank" href="#">
            WordPress
        </a>
        ,Theme by
        <a title="wordpress主题" target="_blank" href="">
            wordpress主题
        </a>
        | ICP备13034780号 
         
       
         
    </div>


           <div class="footer-copyright clearfix">
            <div class="center-wrap clearfix">
               <div class="foot-copy">
                 
						 
               </div>
               <!-- END foot-copy -->
                
               <ul class="footer-nav">
               </ul>
            </div>
            <!-- END center-wrap -->
         </div>
         <!-- END footer-copyright -->	
        
          
      </div>





		<div class="constr Main2">
		 <div class="tr">
				<div id="small_C" class="png oc_bg">
					<a class="btn btn1 png oc_bg abc" onclick="$(window).scrollTop(0);">
					</a>
				</div>
          </div>
		</div>
        <script type="text/javascript">
            $('#big_C').hide();
            $('#small_C').show();
            $(window).scroll(function() {
                if ($(this).scrollTop() != 0) {
                    $("#big_C .btn6").show();
                    $("#small_C .btn1").show();
                } else {
                    $("#big_C .btn6").hide();
                    $("#small_C .btn1").hide();
                }
            });
            function showBig_C() {
                $('#small_C').hide(200);
                $('#big_C').show(200);
            }
            function showSmall_C() {
                $('#big_C').hide(200);
                $('#small_C').show(200);
            }

            jQuery(function()
            {
                if(jQuery(".post-thumbnail .img_title").length>0)
                {
                    jQuery(".post-thumbnail").hover(
                            function()
                            {
                                jQuery(this).children(".img_title").slideDown('fast');
                            },
                            function()
                            {
                                jQuery(this).children(".img_title").slideUp();
                            }
                    );
                }

                $(".mainProNav dl dt").mouseover(function() {
                    $(".mainProNav dl").removeClass("dlHover");
                    $(this).parent().addClass("dlHover")
                });
                $(".mainProNav").hover(function() {
                            $(this).addClass("mainProNavHover")
                        },
                        function() {
                            $(this).removeClass("mainProNavHover");
                            $(".mainProNav dl").removeClass("dlHover")
                        })
            })
        </script>
        <script src="<?php echo JS_PATH;?>/jQs.js" type="text/javascript">
        </script>
        
    </body>

</html>