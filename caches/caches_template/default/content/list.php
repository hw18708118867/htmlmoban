<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<!--main-->
 
        <div class="constr Main2 fix mt10">

           <div class="in-side-topmenu side-group">
				     <h2>按模板行业分类</h2>
                     <p class="pbutton sort clearfix">
                         <?php $n=1;if(is_array(get_tag_list())) foreach(get_tag_list() AS $tag) { ?>
                         <a title="<?php echo $tag;?>" href="<?php echo search_tag($catid,$tag);?>"><?php echo $tag;?></a>
                         <?php $n++;}unset($n); ?>
                     </p>


						 <h2>按模板颜色</h2>
                     <p   class="pbutton color clearfix">
                         <a class="c1" href="<?php echo search_tag($catid,'','红色');?>">红色</a>
                         <a class="c2" href="<?php echo search_tag($catid,'','橙色');?>">橙色</a>
                         <a class="c3" href="<?php echo search_tag($catid,'','黄色');?>">黄色</a>
                         <a class="c4" href="<?php echo search_tag($catid,'','绿色');?>">绿色</a>
                         <a class="c5" href="<?php echo search_tag($catid,'','蓝色');?>">蓝色</a>
                         <a class="c6" href="<?php echo search_tag($catid,'','灰色');?>">灰色</a>
                         <a class="c7" href="<?php echo search_tag($catid,'','黑色');?>">黑色</a>
                         <a class="c8" href="<?php echo search_tag($catid,'','紫色');?>">紫色</a>
                         <a class="c9" href="<?php echo search_tag($catid,'','棕色');?>">棕色</a>
                         <a class="c10" href="<?php echo search_tag($catid,'','彩色');?>">彩色</a>
					</p>
                     
                </div>
		     
        </div>



        
		<div class="constr Main2 fix">


		      
            <div   class="cell inline_box fix tj m_Grid1 last">
			    <!--<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5ab4b05e97fd14c3ed386604ee1a9399&action=lists&catid=%24catid&num=25&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 25;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>-->
			    <?php $i=1;?>
				<?php $n=1;if(is_array(get_moban_list($catid))) foreach(get_moban_list($catid) AS $r) { ?>
                <?php if($i%4 != 0) { ?>
                <div class="post-home">
                <?php } else { ?>
                 <div class="post-home last">
                 <?php } ?>
                    <div class="post-thumbnail">
                        <a target="_blank" href="<?php echo $r['url'];?>" class="inimg">
                            <img width="285" height="185" alt="<?php echo $r['title'];?>" src="<?php echo $r['thumb'];?>"></a>
                        <div style="display: none;" class="img_title">
                            <a target="_blank" title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>">
                                <?php echo $r['description'];?>
                    </a></div>  </div>
                    <!--end .post-thumbnail -->
                    <div class="post-info">
                        <ul class="title">
                            <a target="_blank" title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></ul>
                        <ul class="others">
                            <li class="in_category">
                                <?php echo date('Y-m-d',$r[inputtime]);?>
                            </li>
                            <li class="likes">
                                <span class="wpfp-span">
                                    <a class="wpfp-link wizylike_icon" href="home.php?mod=spacecp&amp;ac=favorite&amp;type=thread&amp;id=99666" id="k_favorite" onclick="showWindow(this.id, this.href, 'get', 0);" title="0 人推荐" rel="nofollow">0</a></span></li>
                            <li class="comments">
                                <a onclick="showWindow('reply', 'forum.php?mod=post&amp;action=reply&amp;fid=2&amp;tid=99666')" href="javascript:;" title="">8</a></li>
                            <li class="views">
                                587 </li>

                        </ul>
                    </div>
                    <div class="citemqt citemfoot">
                        <div class="citemzl">
                            <a rel="nofollow" href="#" class="citemfimg">
                                <img width="24" height="24" src="http://www.sj5d.com/uc_server/avatar.php?uid=4745&amp;size=small"><?php echo do_str($r[tag]);?></a>
                        </div>
                        <!--<span>分享在<a target="_blank" title="网页模板" href="forum.php?mod=forumdisplay&amp;fid=2" style="margin-left:10px;">网页模板</a></span>-->
                    </div>
                </div>
                <?php $i++;?>
				<?php $n++;}unset($n); ?>
						<!--<div id="pages" class="text-c"><?php echo $pages;?></div>-->
				<!--<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>-->
                     <SPAN class="w300 inline_any">&nbsp;</SPAN> <SPAN class="w300 inline_any">&nbsp;</SPAN> <SPAN class="w300 inline_any">&nbsp;</SPAN>

            </div>
          
            
            <div class="clear">
            </div>
        </div>



        <div class="constr Main2">
            <div class="m_T1">
                <h3>
                    最新wordpress主题
                </h3>
                <span>
                    <a rel="nofollow" target="_blank" href="javascript:;">
                        欢迎投稿
                    </a>
                    /
                    <a rel="nofollow" target="_blank" href="javascript:;">
                        主题定制
                    </a>
                    /
                    <a rel="nofollow" target="_blank" href="javascript:;">
                        收费主题
                    </a>
                </span>
            </div>


			
<DIV class="inline_box fix tj m_Grid1">

<SPAN class="box1 w300 inline_any mb15 ovh bgf5 bdc"><SPAN class="dib p15"><SPAN class="rel dib"><A class="aimg" href="/meishi/1480/" target=_blank><IMG class=jsLazyImage src="http://www.cssmoban.com/UploadFiles/2014/2/2014071614243528914.jpg"   data-url="http://www.cssmoban.com/UploadFiles/2014/2/2014071614243528914.jpg"><em></em></A>  </SPAN><p class="p1"><A class="mt5 db g6" href="/meishi/1480/" target=_blank><STRONG class=g3>水野水族餐厅 100元现金券</STRONG></A></p> <SPAN class="db fix g6 mt5 p2"><SPAN class=r>剩余5天以上</SPAN> <SPAN class=l>110人已购买</SPAN></SPAN></SPAN></SPAN> 

 

<SPAN class="box1 w300 inline_any mb15 ovh bgf5 bdc"><SPAN class="dib p15"><SPAN class="rel dib"><A href="/meishi/1480/" target=_blank><IMG class=jsLazyImage src="http://upload1.95171.cn/meal/CashPic/300_200/39be24b1-9f59-4f39-b9bb-d80cf189fb75.jpg" width=290 height=180 data-url="http://upload1.95171.cn/meal/CashPic/300_200/39be24b1-9f59-4f39-b9bb-d80cf189fb75.jpg"></A>  </SPAN><p class="p1"><A class="mt5 db g6" href="/meishi/1480/" target=_blank><STRONG class=g3>水野水族餐厅 100元现金券</STRONG></A></p> <SPAN class="db fix g6 mt5 p2"><SPAN class=r>剩余5天以上</SPAN> <SPAN class=l>110人已购买</SPAN></SPAN></SPAN></SPAN> 

<SPAN class="box1 w300 inline_any mb15 ovh bgf5 bdc"><SPAN class="dib p15"><SPAN class="rel dib"><A href="/meishi/1480/" target=_blank><IMG class=jsLazyImage src="http://upload1.95171.cn/meal/CashPic/300_200/39be24b1-9f59-4f39-b9bb-d80cf189fb75.jpg" width=290 height=180 data-url="http://upload1.95171.cn/meal/CashPic/300_200/39be24b1-9f59-4f39-b9bb-d80cf189fb75.jpg"></A>  </SPAN><p class="p1"><A class="mt5 db g6" href="/meishi/1480/" target=_blank><STRONG class=g3>水野水族餐厅 100元现金券</STRONG></A></p> <SPAN class="db fix g6 mt5 p2"><SPAN class=r>剩余5天以上</SPAN> <SPAN class=l>110人已购买</SPAN></SPAN></SPAN></SPAN> 

<SPAN class="box1 w300 inline_any mb15 ovh bgf5 bdc"><SPAN class="dib p15"><SPAN class="rel dib"><A href="/meishi/1480/" target=_blank><IMG class=jsLazyImage src="http://upload1.95171.cn/meal/CashPic/300_200/39be24b1-9f59-4f39-b9bb-d80cf189fb75.jpg" width=290 height=180 data-url="http://upload1.95171.cn/meal/CashPic/300_200/39be24b1-9f59-4f39-b9bb-d80cf189fb75.jpg"></A>  </SPAN><p class="p1"><A class="mt5 db g6" href="/meishi/1480/" target=_blank><STRONG class=g3>水野水族餐厅 100元现金券</STRONG></A></p> <SPAN class="db fix g6 mt5 p2"><SPAN class=r>剩余5天以上</SPAN> <SPAN class=l>110人已购买</SPAN></SPAN></SPAN></SPAN> 




<SPAN class="box1 w300 inline_any mb15 ovh bgf5 bdc"><SPAN class="dib p15"><SPAN class="rel dib"><A href="/meishi/1480/" target=_blank><IMG class=jsLazyImage src="http://upload1.95171.cn/meal/CashPic/300_200/39be24b1-9f59-4f39-b9bb-d80cf189fb75.jpg" width=290 height=180 data-url="http://upload1.95171.cn/meal/CashPic/300_200/39be24b1-9f59-4f39-b9bb-d80cf189fb75.jpg"></A>  </SPAN><p class="p1"><A class="mt5 db g6" href="/meishi/1480/" target=_blank><STRONG class=g3>水野水族餐厅 100元现金券</STRONG></A></p> <SPAN class="db fix g6 mt5 p2"><SPAN class=r>剩余5天以上</SPAN> <SPAN class=l>110人已购买</SPAN></SPAN></SPAN></SPAN> 

 

<SPAN class="box1 w300 inline_any mb15 ovh bgf5 bdc"><SPAN class="dib p15"><SPAN class="rel dib"><A href="/meishi/1480/" target=_blank><IMG class=jsLazyImage src="http://upload1.95171.cn/meal/CashPic/300_200/39be24b1-9f59-4f39-b9bb-d80cf189fb75.jpg" width=290 height=180 data-url="http://upload1.95171.cn/meal/CashPic/300_200/39be24b1-9f59-4f39-b9bb-d80cf189fb75.jpg"></A>  </SPAN><p class="p1"><A class="mt5 db g6" href="/meishi/1480/" target=_blank><STRONG class=g3>水野水族餐厅 100元现金券</STRONG></A></p> <SPAN class="db fix g6 mt5 p2"><SPAN class=r>剩余5天以上</SPAN> <SPAN class=l>110人已购买</SPAN></SPAN></SPAN></SPAN> 

<SPAN class="box1 w300 inline_any mb15 ovh bgf5 bdc"><SPAN class="dib p15"><SPAN class="rel dib"><A href="/meishi/1480/" target=_blank><IMG class=jsLazyImage src="http://upload1.95171.cn/meal/CashPic/300_200/39be24b1-9f59-4f39-b9bb-d80cf189fb75.jpg" width=290 height=180 data-url="http://upload1.95171.cn/meal/CashPic/300_200/39be24b1-9f59-4f39-b9bb-d80cf189fb75.jpg"></A>  </SPAN><p class="p1"><A class="mt5 db g6" href="/meishi/1480/" target=_blank><STRONG class=g3>水野水族餐厅 100元现金券</STRONG></A></p> <SPAN class="db fix g6 mt5 p2"><SPAN class=r>剩余5天以上</SPAN> <SPAN class=l>110人已购买</SPAN></SPAN></SPAN></SPAN> 

<SPAN class="box1 w300 inline_any mb15 ovh bgf5 bdc"><SPAN class="dib p15"><SPAN class="rel dib"><A href="/meishi/1480/" target=_blank><IMG class=jsLazyImage src="http://upload1.95171.cn/meal/CashPic/300_200/39be24b1-9f59-4f39-b9bb-d80cf189fb75.jpg" width=290 height=180 data-url="http://upload1.95171.cn/meal/CashPic/300_200/39be24b1-9f59-4f39-b9bb-d80cf189fb75.jpg"></A>  </SPAN><p class="p1"><A class="mt5 db g6" href="/meishi/1480/" target=_blank><STRONG class=g3>水野水族餐厅 100元现金券</STRONG></A></p> <SPAN class="db fix g6 mt5 p2"><SPAN class=r>剩余5天以上</SPAN> <SPAN class=l>110人已购买</SPAN></SPAN></SPAN></SPAN> 


 
<SPAN class="w300 inline_any">&nbsp;</SPAN> <SPAN class="w300 inline_any">&nbsp;</SPAN> <SPAN class="w300 inline_any">&nbsp;</SPAN> </DIV>
   
                    
            <div class="page_navi">
                <a href='javascript:;' class='current'>
                    1
                </a>
                <a href='javascript:;'>
                    2
                </a>
                <a href='javascript:;'>
                    3
                </a>
                <a href='javascript:;'>
                    4
                </a>
                <a href='javascript:;'>
                    5
                </a>
                <a href='javascript:;'>
                    6
                </a>
                <a href='javascript:;'>
                    7
                </a>
                <a href='javascript:;'>
                    8
                </a>
                <a href='javascript:;'>
                    9
                </a>
                <a href='javascript:;'>
                    10
                </a>
                <a href="javascript:;">
                    下一页
                </a>
                <a href='javascript:;' class='extend' title='跳转到最后一页'>
                    最后一页
                </a>
            </div>
            <div class="AD_1080_1">
                <a target="_blank" rel="nofollow" href="javascript:;">
                    <img src="./images/adin1080.jpg" width="1080" alt="wordpress主题推荐">
                </a>
            </div>
        </div>
        <div class="constr Main3">
            <div class="m_Grid2 FL">
                <div class="m_T3">
                    <h3>
                        <a href="javascript:;" target="_blank">
                            wordpress教程
                        </a>
                    </h3>
                    <span>
                        <a href="javascript:;" target="_blank">
                            更多&gt;&gt;
                        </a>
                    </span>
                </div>
                <ul class="m_Box2">
                    <li>
                        <a href="javascript:;" title="wordpress标题截断新策略">
                            <img src="./wp-content/uploads/2014/01/wpjiaocheng.jpg?imageView/1/w/159/h/96"
                            alt="wordpress标题截断新策略" class="wp-post-image" width="159" height="96" />
                        </a>
                        <p>
                            <a href="javascript:;" title="wordpress标题截断新策略" target="_blank">
                                wordpress标题截断新策略
                            </a>
                        </p>
                    </li>
                    <li>
                        <a href="javascript:;" title="wordpress后台加载字体慢">
                            <img src="./wp-content/uploads/2014/01/wpjiaocheng.jpg?imageView/1/w/159/h/96"
                            alt="wordpress后台加载字体慢" class="wp-post-image" width="159" height="96" />
                        </a>
                        <p>
                            <a href="javascript:;" title="wordpress后台加载字体慢" target="_blank">
                                wordpress后台加载字体慢
                            </a>
                        </p>
                    </li>
                    <li>
                        <a href="javascript:;" title="在WordPress后台的文章列表只显示该作者自己的文章">
                            <img src="./wp-content/uploads/2014/01/wpjiaocheng.jpg?imageView/1/w/159/h/96"
                            alt="在WordPress后台的文章列表只显示该作者自己的文章" class="wp-post-image" width="159" height="96"
                            />
                        </a>
                        <p>
                            <a href="javascript:;" title="在WordPress后台的文章列表只显示该作者自己的文章" target="_blank">
                                在WordPress后台的文章列表只显示该作者自己的文章
                            </a>
                        </p>
                    </li>
                </ul>
                <ul class="m_Box3">
                    <li>
                        ·
                        <a href="javascript:;" title="WordPress后台删除不需要的侧边栏菜单" target="_blank">
                            WordPress后台删除不需要的侧边栏菜单
                        </a>
                    </li>
                    <li>
                        ·
                        <a href="javascript:;" title="给wordpress页面进行压缩，加速访问和给扒皮者制造麻烦" target="_blank">
                            给wordpress页面进行压缩，加速访问和给扒皮者制造麻烦
                        </a>
                    </li>
                    <li>
                        ·
                        <a href="javascript:;" title="wordpress搜索结果的优化手段" target="_blank">
                            wordpress搜索结果的优化手段
                        </a>
                    </li>
                    <li>
                        ·
                        <a href="javascript:;" title="WordPress菜单函数wp_nav_menu()详细介绍" target="_blank">
                            WordPress菜单函数wp_nav_menu()详细介绍
                        </a>
                    </li>
                    <li>
                        ·
                        <a href="javascript:;" title="使用php脚本自定义创建联系表单并验证" target="_blank">
                            使用php脚本自定义创建联系表单并验证
                        </a>
                    </li>
                    <li>
                        ·
                        <a href="javascript:;" title="精简wordpress头部多余信息，去掉部分不必要的js加载！" target="_blank">
                            精简wordpress头部多余信息，去掉部分不必要的js加载！
                        </a>
                    </li>
                    <li>
                        ·
                        <a href="javascript:;" title="wordpress代码高亮的实现，拒绝插件！" target="_blank">
                            wordpress代码高亮的实现，拒绝插件！
                        </a>
                    </li>
                    <li>
                        ·
                        <a href="javascript:;" title="非插件搞定wordpress生成静态缓存文件" target="_blank">
                            非插件搞定wordpress生成静态缓存文件
                        </a>
                    </li>
                    <li>
                        ·
                        <a href="javascript:;" title="wordpress禁止恶意HTTP_USER_AGENT，防采集防部分攻击" target="_blank">
                            wordpress禁止恶意HTTP_USER_AGENT，防采集防部分攻击
                        </a>
                    </li>
                    <li>
                        ·
                        <a href="javascript:;" title="wordpress代码实现网站地图sitemap的html和xml的方法" target="_blank">
                            wordpress代码实现网站地图sitemap的html和xml的方法
                        </a>
                    </li>
                    <div class="clear">
                    </div>
                </ul>
            </div>
            <div class="m_Grid2 FR">
                <div class="m_T3">
                    <h3>
                        <a href="javascript:;" target="_blank">
                            wordpress插件
                        </a>
                    </h3>
                    <span>
                        <a href="javascript:;" target="_blank">
                            更多&gt;&gt;
                        </a>
                    </span>
                </div>
                <ul class="m_Box2">
                    <li>
                        <a href="javascript:;" title="wordpress 图片延迟加载插件 images lazyload">
                            <img src="./wp-content/uploads/2014/01/sdasdcj.jpg?imageView/1/w/159/h/96"
                            alt="wordpress 图片延迟加载插件 images lazyload" class="wp-post-image" width="159"
                            height="96" />
                        </a>
                        <p>
                            <a href="javascript:;" title="wordpress 图片延迟加载插件 images lazyload" target="_blank">
                                wordpress 图片延迟加载插件 images lazyload
                            </a>
                        </p>
                    </li>
                    <li>
                        <a href="javascript:;" title="wordpress纯静态插件：cos html cache">
                            <img src="./wp-content/uploads/2014/05/20140523093439.jpg?imageView/1/w/159/h/96"
                            alt="wordpress纯静态插件：cos html cache" class="wp-post-image" width="159" height="96"
                            />
                        </a>
                        <p>
                            <a href="javascript:;" title="wordpress纯静态插件：cos html cache" target="_blank">
                                wordpress纯静态插件：cos html cache
                            </a>
                        </p>
                    </li>
                    <li>
                        <a href="javascript:;" title="wordpress百度结构化数据提交插件">
                            <img src="./wp-content/uploads/2014/03/30191395839173.png?imageView/1/w/159/h/96"
                            alt="wordpress百度结构化数据提交插件" class="wp-post-image" width="159" height="96"
                            />
                        </a>
                        <p>
                            <a href="javascript:;" title="wordpress百度结构化数据提交插件" target="_blank">
                                wordpress百度结构化数据提交插件
                            </a>
                        </p>
                    </li>
                </ul>
                <ul class="m_Box3">
                    <li>
                        ·
                        <a href="javascript:;" title="微信机器人插件，用wordpress做微信营销可事半功倍！" target="_blank">
                            微信机器人插件，用wordpress做微信营销可事半功倍！
                        </a>
                    </li>
                    <li>
                        ·
                        <a href="javascript:;" title="wordpress弹窗插件 PopupPress真的很漂亮哦" target="_blank">
                            wordpress弹窗插件 PopupPress真的很漂亮哦
                        </a>
                    </li>
                    <li>
                        ·
                        <a href="javascript:;" title="wordpress插件：wordpress弹窗下载插件Prettyphoto download"
                        target="_blank">
                            wordpress插件：wordpress弹窗下载插件Prettyphoto download
                        </a>
                    </li>
                    <li>
                        ·
                        <a href="javascript:;" title="wordpress在线问答插件 DW Question &amp; Answer"
                        target="_blank">
                            wordpress在线问答插件 DW Question &#038; Answer
                        </a>
                    </li>
                    <li>
                        ·
                        <a href="javascript:;" title="wordpress插件：给每篇文章添加一个喜欢的按钮来增加互动" target="_blank">
                            wordpress插件：给每篇文章添加一个喜欢的按钮来增加互动
                        </a>
                    </li>
                    <li>
                        ·
                        <a href="javascript:;" title="给wordpress添加一个收藏优酷视频页面，来自牧风的Youku Videos插件"
                        target="_blank">
                            给wordpress添加一个收藏优酷视频页面，来自牧风的Youku Videos
                        </a>
                    </li>
                    <li>
                        ·
                        <a href="javascript:;" title="wordpress不同页面显示不同侧栏小工具" target="_blank">
                            wordpress不同页面显示不同侧栏小工具
                        </a>
                    </li>
                    <li>
                        ·
                        <a href="javascript:;" title="wordpress用户中心插件，好强大的说，用户注册、登录、找回密码、编辑资料都有"
                        target="_blank">
                            wordpress用户中心插件，好强大的说，用户注册、登录、找回密码
                        </a>
                    </li>
                    <li>
                        ·
                        <a href="javascript:;" title="用代码代替wordpress插件实现wordpress图片暗箱功能！" target="_blank">
                            用代码代替wordpress插件实现wordpress图片暗箱功能！
                        </a>
                    </li>
                    <li>
                        ·
                        <a href="javascript:;" title="分享到微博才能显示指定内容的插件：Share to view all" target="_blank">
                            分享到微博才能显示指定内容的插件：Share to view all
                        </a>
                    </li>
                    <div class="clear">
                    </div>
                </ul>
            </div>
            <div class="clear">
            </div>
        </div>

<?php include template("content","footer"); ?>