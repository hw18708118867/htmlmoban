<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

 
 
   

        <div class="Main2 constr  fix">
			 <div class="m_T1nl">
					<span>
						<div style="float: left;">
							当前位置：
						</div>

						<a href="<?php echo siteurl($siteid);?>">首页</a>

						&gt;

						<?php echo catpos($catid);?>

					   

						<?php echo $title;?>
					</span>
				</div>

           
			<div class="m_Right1 FR" style="margin-left:10px">
                <div class="n_Grid4" >


				   <div class="nav-sub">
	 <dl>
		<dt class="jx"><span>广告代码</span><div></div><a href="/js/p1.html">全部››</a></dt>
		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=464a4d526ca6b0be30e16a9e35f4477c&action=category&catid=17&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'17','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>

		 <?php $n=1;if(is_array($data)) foreach($data AS $cat) { ?>
		    <dd><a href="<?php echo $cat['url'];?>"><?php echo $cat['catname'];?></a></dd> 
		 <?php $n++;}unset($n); ?>

		  <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
	 </dl>	
</div>

<div class="nav-sub">
<dl>
<dt class="tx"><span>特效代码</span><div></div><a href="/js/texiao.html">全部››</a></dt>
<dd><a href="/js/nav.html">导航菜单</a></dd><dd><a href="/js/form.html">表单按钮</a></dd><dd><a href="/js/text.html">文字特效</a></dd><dd><a href="/js/table.html">表格图层</a></dd><dd><a href="/js/picture.html">图片特效</a></dd><dd><a href="/js/date.html">时间日期</a></dd><dd><a href="/js/scroll.html">滚动代码</a></dd><dd><a href="/js/window.html">窗口特效</a></dd><dd><a href="/js/color.html">颜色背景</a></dd><dd><a href="/js/website.html">网站常用</a></dd><dd><a href="/js/css.html">CSS样式</a></dd><dd><a href="/js/other.html">其他特效</a></dd>				 
</dl>	
</div>
                     
                     
                     
                     
                </div>
                <!--
                <div class="AD_300">
                    <a href="javascript:;" rel="nofollow" target="_blank">
                        <img src="./images/3hhost.jpg" width="300" height="250" alt="wordpress主题站推荐">
                    </a>
                </div>
				-->
                <div class="m_Grid4">
                    <?php $hits_moban = hits_moban('weekviews')?>
                    <div class="m_T9">
                        随机主题展示
                    </div>
                    <ul class="m_Box9">
                        <?php $n=1;if(is_array($hits_moban)) foreach($hits_moban AS $m) { ?>
                        <li>
                            <div class="txt">
                                <p class="p5">
                                    主题简介:
                                    <br>
                                    <a href="<?php echo $m['url'];?>" target="_blank">
                                        　　<?php echo do_sub_str($m['description']);?>
                                    </a>
                                </p>
                                <p class="p6">
                                    分类：
                                    <a href="<?php echo $m['url'];?>" title="<?php echo do_str($m['tag']);?>" rel="category tag">
                                        <?php echo do_str($m['tag']);?>
                                    </a>
                                </p>
                            </div>
                            <a href="<?php echo $m['url'];?>" title="<?php echo $m['title'];?>">
                                <img src="<?php echo $m['thumb'];?>"
                                alt="<?php echo $m['title'];?>" class="thumbnail" />
                            </a>
                            <p class="p4">
                                <a href="<?php echo $m['url'];?>" title="<?php echo $m['title'];?>" target="_blank">
                                    <?php echo $m['title'];?>
                                </a>
                            </p>
                        </li>
                        <?php $n++;}unset($n); ?>
                        <div class="clear">
                        </div>
                    </ul>
                </div>


               <div class="n_h">

			      <dl>
			<dt>猜你也喜欢看这些 ······ </dt>
			<dd><a href="/js/xiangce-1203.html"><p><img src="<?php echo IMG_PATH;?>2zzt_logo.png" class="f"/></p>简约jQuery幻灯片相册代码<span class="l">相册代码</span><span class="t">2015-07-03</span></a></dd><dd><a href="/js/tupian-1202.html"><p><img src="<?php echo IMG_PATH;?>2zzt_logo.png" class="f"/></p>jQuery图片列表动画显示效果<span class="l">图片特效</span><span class="t">2015-07-03</span></a></dd><dd><a href="/js/jiaodiantu-1201.html"><p><img src="<?php echo IMG_PATH;?>2zzt_logo.png" class="f"/></p>猎豹jQuery全屏焦点图代码<span class="l">焦点图</span><span class="t">2015-05-22</span></a></dd><dd><a href="/js/tupian-1200.html"><p><img src="<?php echo IMG_PATH;?>2zzt_logo.png" class="f"/></p>CSS3圆形图片鼠标经过旋转效果<span class="l">图片特效</span><span class="t">2015-05-22</span></a></dd><dd><a href="/js/qita-1199.html"><p><img src="<?php echo IMG_PATH;?>2zzt_logo.png" class="f"/></p>HTML5+CSS3音量调节旋转按钮<span class="l">其他代码</span><span class="t">2015-05-18</span></a></dd>
		 </dl>


			   </div>



                 
                    




                   
            </div>
            <div class="cell main_l">

			    <div class="main_l_box">
                <div class="m_T10">
                    <h2>
                        <?php echo $title;?>
                    </h2>
                </div>
				<div class="m_Box11">
                    <div class="m_Boxss">
                        <span class="loopzz">
                            <?php echo $username;?>
                        </span>
                        <span class="loopsj">
                            <?php echo $inputtime;?>
                        </span>
                        <span class="loopck">
                           <span id="hits"></span>
                        </span>
                        <span class="loopgjc">
                            关键词：

							<?php $n=1;if(is_array($keywords)) foreach($keywords AS $keyword) { ?>
                            <a href="javascript:;" rel="tag">
                                <?php echo $keyword;?>
                            </a>
							<?php $n++;}unset($n); ?>
                        </span>
                        <span class="loopfl">
						    
						    <?php $cattype = array_filter(explode(',',$rs['tag']))?>
							<?php $n=1;if(is_array($cattype)) foreach($cattype AS $ct) { ?>
                            <a href="<?php echo search_tag($ct);?>" title="<?php echo $ct;?>下载" rel="category tag">
                                <?php echo $ct;?>
                            </a>

							<?php $n++;}unset($n); ?>
                        </span>
                        <div class="clear">
                        </div>
                    </div>
                </div>

				<div class="m_T11">
                </div>
                

				<div class="">
				    <div class="bbda ptm act fix" style="border:0">
							<div class="cl">
							<div class="spvimg">
							<a href="javascript:;"><img src="<?php echo $thumb;?>" onclick="zoom(this, 'data/attachment/forum/201310/12/160242yos7ttafvv6zmftk.png')" width="270" _width="270" height="180" alt="<?php echo $title;?>" /></a>
							</div>

							<div class="spi fix">
							 
							<h4 class="wx mbm bbda"><?php echo $title;?> 

							   
								
							
							
							
							</h4>
							 
							 

							 


							  

                                    <dl>

									
									 
							</div>
											
							</div>
							<div class="fix mtw">
							            	 

								　         
								   

							</div>
							</td></tr>
							</td></tr></table>
						</div>


                </div>

                <div class="m_Grid5">
                   
                     

                    <h3>
                        程序源码
                    </h3>
                    <div class="clear">
                    </div>
                </div>

				
                <div class="m_Box16">
                   <div class="nr_show">
				    
					<p class="pns mbm bugbot" style=" height:48px; line-height:48px;">
													<a  target="_blank" class="orangebot" href="<?php echo APP_PATH;?>index.php?m=content&c=readpoint&allow_visitor=<?php echo $allow_visitor;?>" rel="nofollow">代码演示</a>
													 &nbsp; 
																<a href="javascript:;" onclick="window.open('/demo.php?url=<?php echo $demo_url;?>')" class="greenbot" rel="nofollow">代码下载</a>
																  
																 
															   
													</p>
					

					 
					</div>
                    <div class="clear">
                    </div>
                </div>

				 
                <div class="m_T11">
                </div>

				<div class="m_Box17">
                    <p>
                        <span>
                            注意事项：
                        </span>
                    </p>
                    <p>
                        <label>
                            因为主题是虚拟商品，具有可复制性，可传播性，版权原因，一旦授予，不可退款。
                        </label>
                    </p>
                    <p>
                        1.大家在使用wordpress主题的时候请尊重主题作者的劳动成果和版权标识！
                    </p>
                    <p>
                        2.本站主要以分享主题为主,销售和定制主题为辅,也相当于是做一件授人玫瑰,手留余香的事；请各位尊重我们！
                    </p>
                    <p>
                        3.免费wordpress主题在使用中遇到的问题大家可以去
                        <a style="color: #419900;" target="_blank" href="javascript:;">
                            站长交流中心
                        </a>
                        进行交流或者加群：153526824 请求大家的帮助！
                    </p>
                    <p>
                        4.请WP小白们注意，不是任何主题一安装后就可以展现出完美效果的，是需要设置/修改的（特别是国外主题，设置相当复杂），不要因为自己的不会用而怪罪、埋怨到主题作者/本站头上！
                    </p>
                    <div class="clear">
                    </div>
                </div>
				 

				<div class="m_Boxxg">
                    <div class="m_Boxxgb">
                        类似的wordpress主题还有：
                    </div>
                    <ul id="tags_related">
                        <li>
                            <a href="javascript:;" title="wordpress主题下载:iNeo主题">
                                <img src="http://www.2zzt.com/wp-content/themes/2z2014/timthumb.php?src=http://www.2zzt.com/wp-content/uploads/2013/03/20140417163903.jpg&w=123&h=96&zc=1"
                                alt="wordpress主题下载:iNeo主题" class="thumbnail" />
                            </a>
                            <a href="javascript:;" rel="bookmark" title="wordpress主题下载:iNeo主题">
                                wordpress主题下载:iNeo主题
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="wordpress主题下载站-爱找主题第三次改版顺利！">
                                <img src="http://www.2zzt.com/wp-content/themes/2z2014/timthumb.php?src=http://www.2zzt.com/wp-content/uploads/2013/12/20131230205254.jpg&w=123&h=96&zc=1"
                                alt="wordpress主题下载站-爱找主题第三次改版顺利！" class="thumbnail" />
                            </a>
                            <a href="javascript:;" rel="bookmark" title="wordpress主题下载站-爱找主题第三次改版顺利！">
                                wordpress主题下载站-爱找主题第三次改版顺利！
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="再来一款自适应 wordpress主题下载 :Twentytwelve bigfa 很Style哦！">
                                <img src="http://www.2zzt.com/wp-content/themes/2z2014/timthumb.php?src=http://www.2zzt.com/wp-content/uploads/2013/09/0130903175250.jpg&w=123&h=96&zc=1"
                                alt="再来一款自适应 wordpress主题下载 :Twentytwelve bigfa 很Style哦！" class="thumbnail"
                                />
                            </a>
                            <a href="javascript:;" rel="bookmark" title="再来一款自适应 wordpress主题下载 :Twentytwelve bigfa 很Style哦！">
                                再来一款自适应 wordpress主题下载 :Twentytwelve bigfa 很Style哦！
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="wordpress主题下载:强大的wordpress cms主题menhu下载,适合门户类网站使用">
                                <img src="http://www.2zzt.com/wp-content/themes/2z2014/timthumb.php?src=http://www.2zzt.com/wp-content/uploads/2013/08/20130829180029-160x115.jpg&w=123&h=96&zc=1"
                                alt="wordpress主题下载:强大的wordpress cms主题menhu下载,适合门户类网站使用" class="thumbnail"
                                />
                            </a>
                            <a href="javascript:;" rel="bookmark" title="wordpress主题下载:强大的wordpress cms主题menhu下载,适合门户类网站使用">
                                wordpress主题下载:强大的wordpress cms主题menhu下载,适合门户类网站使用
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="wordpress主题:来自tangstyle主题修改版适合个人博客使用">
                                <img src="http://www.2zzt.com/wp-content/themes/2z2014/timthumb.php?src=http://www.2zzt.com/wp-content/uploads/2013/08/20130823090522-160x115.jpg&w=123&h=96&zc=1"
                                alt="wordpress主题:来自tangstyle主题修改版适合个人博客使用" class="thumbnail" />
                            </a>
                            <a href="javascript:;" rel="bookmark" title="wordpress主题:来自tangstyle主题修改版适合个人博客使用">
                                wordpress主题:来自tangstyle主题修改版适合个人博客使用
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="wordpress主题下载：仿搜狐Mued的Lihua主题分享给大家">
                                <img src="http://www.2zzt.com/wp-content/themes/2z2014/timthumb.php?src=http://www.2zzt.com/wp-content/uploads/2013/08/20130815084026.jpg&w=123&h=96&zc=1"
                                alt="wordpress主题下载：仿搜狐Mued的Lihua主题分享给大家" class="thumbnail" />
                            </a>
                            <a href="javascript:;" rel="bookmark" title="wordpress主题下载：仿搜狐Mued的Lihua主题分享给大家">
                                wordpress主题下载：仿搜狐Mued的Lihua主题分享给大家
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="wordpress主题下载站推荐主题：Rcloud，5种样式，功能强大！">
                                <img src="http://www.2zzt.com/wp-content/themes/2z2014/timthumb.php?src=http://www.2zzt.com/wp-content/uploads/2013/08/20130806091336-150x150.jpg&w=123&h=96&zc=1"
                                alt="wordpress主题下载站推荐主题：Rcloud，5种样式，功能强大！" class="thumbnail" />
                            </a>
                            <a href="javascript:;" rel="bookmark" title="wordpress主题下载站推荐主题：Rcloud，5种样式，功能强大！">
                                wordpress主题下载站推荐主题：Rcloud，5种样式，功能强大！
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="分享来自麦田一根葱的处女作品BYMT wordpress主题下载！">
                                <img src="http://www.2zzt.com/wp-content/themes/2z2014/timthumb.php?src=http://www.2zzt.com/wp-content/uploads/2013/08/demo1-727x1024.png&w=123&h=96&zc=1"
                                alt="分享来自麦田一根葱的处女作品BYMT wordpress主题下载！" class="thumbnail" />
                            </a>
                            <a href="javascript:;" rel="bookmark" title="分享来自麦田一根葱的处女作品BYMT wordpress主题下载！">
                                分享来自麦田一根葱的处女作品BYMT wordpress主题下载！
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="来自天天网的wordpress主题：wp-ttwrite0.2.0 增加了博客样式的wordpress主题下载">
                                <img src="http://www.2zzt.com/wp-content/themes/2z2014/timthumb.php?src=http://www.2zzt.com/wp-content/uploads/2013/07/20130730091512.jpg&w=123&h=96&zc=1"
                                alt="来自天天网的wordpress主题：wp-ttwrite0.2.0 增加了博客样式的wordpress主题下载" class="thumbnail"
                                />
                            </a>
                            <a href="javascript:;" rel="bookmark" title="来自天天网的wordpress主题：wp-ttwrite0.2.0 增加了博客样式的wordpress主题下载">
                                来自天天网的wordpress主题：wp-ttwrite0.2.0 增加了博客样式的wordpress主题下载
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="wordpress博客主题：来自第九阅览室的wordpress阅读百科类主题">
                                <img src="http://www.2zzt.com/wp-content/themes/2z2014/timthumb.php?src=http://www.2zzt.com/wp-content/uploads/2013/07/20130723165250.jpg&w=123&h=96&zc=1"
                                alt="wordpress博客主题：来自第九阅览室的wordpress阅读百科类主题" class="thumbnail" />
                            </a>
                            <a href="javascript:;" rel="bookmark" title="wordpress博客主题：来自第九阅览室的wordpress阅读百科类主题">
                                wordpress博客主题：来自第九阅览室的wordpress阅读百科类主题
                            </a>
                        </li>
                    </ul>
                    <div class="clear">
                    </div>
                </div>


				<div class="m_T12">
                    发表评论：
                </div>
                <div class="m_Box19">
                    <div class="comment-amount">
                        <a href="javascript:;" class="comment_num" title="《wordpress主题下载：斌果博客自用主题Bing-blog分享》上的评论">
                            共有2 条留言
                        </a>
                    </div>
                    <div id="comments">
                        <ul class="commentlist">
                            <li class="comment even thread-even depth-1" id="li-comment-">
                                <div id="comment-1744" class="comment-body">
                                    <div class="author">
                                        <img alt='' src='http://0.gravatar.com/avatar/4c1bd12b2ed1770ef6ad6ff3e739aec5?s=38&amp;d=http%3A%2F%2F0.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D38&amp;r=G'
                                        class='avatar avatar-38 photo' height='38' width='38' />
                                    </div>
                                    <div class="comment-meta">
                                        <div style="float:left;width:100%;">
                                            <span class="name">
                                                <a href='javascript:;' rel='external nofollow' class='url' target='_blank'>
                                                    丘淳
                                                </a>
                                            </span>
                                            <span class="time">
                                                ( 4天前 )
                                            </span>
                                            <div class="reply">
                                                <a class='comment-reply-link' href='javascript:;' onclick='return addComment.moveForm("comment-1744", "1744", "respond", "6563")'>
                                                    回复
                                                </a>
                                            </div>
                                        </div>
                                        <div class="text">
                                            <p>
                                                不错，适合个人~！
                                            </p>
                                        </div>
                                    </div>
                                    <div class="floor">
                                        # 1
                                    </div>
                                </div>
                            </li>
                            <!-- #comment-## -->
                            <li class="comment odd alt thread-odd thread-alt depth-1" id="li-comment-">
                                <div id="comment-1750" class="comment-body">
                                    <div class="author">
                                        <img alt='' src='http://1.gravatar.com/avatar/534174f4aec042bf3bb51cff9313c99a?s=38&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D38&amp;r=G'
                                        class='avatar avatar-38 photo' height='38' width='38' />
                                    </div>
                                    <div class="comment-meta">
                                        <div style="float:left;width:100%;">
                                            <span class="name">
                                                <a href='javascript:;' rel='external nofollow' class='url' target='_blank'>
                                                    WordPress下载吧
                                                </a>
                                            </span>
                                            <span class="time">
                                                ( 2天前 )
                                            </span>
                                            <div class="reply">
                                                <a class='comment-reply-link' href='javascript:;' onclick='return addComment.moveForm("comment-1750", "1750", "respond", "6563")'>
                                                    回复
                                                </a>
                                            </div>
                                        </div>
                                        <div class="text">
                                            <p>
                                                <img src="./images/icon/icon_redface.gif" alt=":oops:" class="wp-smiley" />
                                                过来走场下，已经转载了，支持支持
                                                <img src="./images/icon/icon_neutral.gif" alt=":neutral:" class="wp-smiley"
                                                />
                                            </p>
                                        </div>
                                    </div>
                                    <div class="floor">
                                        # 2
                                    </div>
                                </div>
                            </li>
                            <!-- #comment-## -->
                        </ul>
                        <div class="commentnavi">
                            <span id="cp_post_id" style="display:none;">
                                6563
                            </span>
                        </div>
                        <div id="respond">
                            <div class="cancel_comment_reply">
                                <a rel="nofollow" id="cancel-comment-reply-link" href="javascript:;" style="display:none;">
                                    取消回复
                                </a>
                            </div>
                            <form action="http://www.2zzt.com/wp-comments-post.php" method="post"
                            id="commentform">
                                <div class="welcome">
                                    填写昵称和邮箱即可留言！
                                </div>
                                <div>
                                    <input type="text" name="author" id="author" value="" tabindex="1" aria-required='true'
                                    />
                                    <label>
                                        昵称
                                    </label>
                                </div>
                                <div>
                                    <input type="text" name="email" id="email" value="" tabindex="2" aria-required='true'
                                    />
                                    <label>
                                        邮箱
                                    </label>
                                </div>
                                <div>
                                    <input type="text" name="url" id="url" value="" tabindex="3" />
                                    <label>
                                        网站
                                    </label>
                                </div>
                                <div>
                                    <div class="biaoqing">
                                        <script type="text/javascript">
                                            /* <![CDATA[ */
                                            function grin(tag) {
                                                var myField;
                                                tag = ' ' + tag + ' ';
                                                if (document.getElementById('comment') && document.getElementById('comment').type == 'textarea') {
                                                    myField = document.getElementById('comment');
                                                } else {
                                                    return false;
                                                }
                                                if (document.selection) {
                                                    myField.focus();
                                                    sel = document.selection.createRange();
                                                    sel.text = tag;
                                                    myField.focus();
                                                } else if (myField.selectionStart || myField.selectionStart == '0') {
                                                    var startPos = myField.selectionStart;
                                                    var endPos = myField.selectionEnd;
                                                    var cursorPos = endPos;
                                                    myField.value = myField.value.substring(0, startPos) + tag + myField.value.substring(endPos, myField.value.length);
                                                    cursorPos += tag.length;
                                                    myField.focus();
                                                    myField.selectionStart = cursorPos;
                                                    myField.selectionEnd = cursorPos;
                                                } else {
                                                    myField.value += tag;
                                                    myField.focus();
                                                }
                                            }
                                            /* ]]> */
                                            
                                        </script>
                                        <a href="javascript:;">
                                            <img src="./images/icon/icon_question.gif" alt="" />
                                        </a>
                                        <a href="javascript:;">
                                            <img src="./images/icon/icon_razz.gif" alt="" />
                                        </a>
                                        <a href="javascript:;">
                                            <img src="./images/icon/icon_sad.gif" alt="" />
                                        </a>
                                        <a href="javascript:;">
                                            <img src="./images/icon/icon_smile.gif" alt="" />
                                        </a>
                                        <a href="javascript:;">
                                            <img src="./images/icon/icon_redface.gif" alt="" />
                                        </a>
                                        <a href="javascript:;">
                                            <img src="./images/icon/icon_biggrin.gif" alt="" />
                                        </a>
                                        <a href="javascript:;">
                                            <img src="./images/icon/icon_surprised.gif" alt="" />
                                        </a>
                                        <a href="javascript:;">
                                            <img src="./images/icon/icon_eek.gif" alt="" />
                                        </a>
                                        <a href="javascript:;">
                                            <img src="./images/icon/icon_confused.gif" alt="" />
                                        </a>
                                        <a href="javascript:;">
                                            <img src="./images/icon/icon_cool.gif" alt="" />
                                        </a>
                                        <a href="javascript:;">
                                            <img src="./images/icon/icon_lol.gif" alt="" />
                                        </a>
                                        <a href="javascript:;">
                                            <img src="./images/icon/icon_mad.gif" alt="" />
                                        </a>
                                        <a href="javascript:;">
                                            <img src="./images/icon/icon_rolleyes.gif" alt="" />
                                        </a>
                                        <a href="javascript:;">
                                            <img src="./images/icon/icon_wink.gif" alt="" />
                                        </a>
                                        <a href="javascript:;">
                                            <img src="./images/icon/icon_neutral.gif" alt="" />
                                        </a>
                                        <a href="javascript:;">
                                            <img src="./images/icon/icon_cry.gif" alt="" />
                                        </a>
                                        <br />
                                    </div>
                                    <textarea name="comment" id="comment" tabindex="4" onkeydown="if(event.ctrlKey&&event.keyCode==13){document.getElementById('submit').click();return false};"></textarea>
                                </div>
                                <div>
                                    <input name="submit" type="submit" id="submit" tabindex="5" value="发布"
                                    />
                                    <input type='hidden' name='comment_post_ID' value='6563' id='comment_post_ID'
                                    />
                                    <input type='hidden' name='comment_parent' id='comment_parent' value='0'
                                    />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

				 </div>


            </div>
            
            <div class="clear">
            </div>
            <div class="AD_1080_1">
                <a target="_blank" rel="nofollow" href="javascript:;">
                    <img src="./images/adin1080.jpg" width="1080" alt="wordpress主题推荐">
                </a>
            </div>
        </div>


<script language="JavaScript" src="<?php echo APP_PATH;?>api.php?op=count&id=<?php echo $id;?>&modelid=<?php echo $modelid;?>"></script>
<?php include template("content","footer"); ?>