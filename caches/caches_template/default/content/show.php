<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>fancybox.css" /> 
<script type="text/javascript" src="<?php echo JS_PATH;?>fancybox.js"></script>
<script>
$(document).ready(function() {
 
$("a.fancybox").fancybox();
 
});
</script>
   

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
                <div class="m_Grid4">
                    <div class="m_T9">
                        <font>
                            精品模板推荐
                        </font>
                    </div>
                    <?php $recommend_moban = get_recommend_moban()?>
                    <div class="tejia">
                        <div class="box1">
                            <a href="<?php echo $recommend_moban['url'];?>" title="<?php echo $recommend_moban['title'];?>">
                                <img src="<?php echo $recommend_moban['thumb'];?>"
                                alt="<?php echo $recommend_moban['description'];?>" class="thumbnail" />
                            </a>
                            <h3>
                                <a href="<?php echo $recommend_moban['url'];?>" title="<?php echo $recommend_moban['title'];?>" target="_blank">
                                    <?php echo $recommend_moban['title'];?>
                                </a>
                            </h3>
                            <p class="p1">
                                <span>
                                    特惠价:
                                </span>
                                <label>
                                    <?php echo $recommend_moban['readpoint'];?>
                                </label>
                                元
                            </p>
                            <p class="p2">
                                <a href="javascript:;" title="立即抢购" target="_blank">
                                    立即抢购
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="p3">
                        本站开发的精美主题正在开卖中，心动就赶快行动起来吧！
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



                 <!--<div class="m_Grid4">-->
                    <!--<div class="m_T9">-->
                        <!--html模板分类-->
                    <!--</div>-->
                     <div class="side-group side-group-w FR">
                         <div class="in-side-menu">
                             <h2>按模板行业分类</h2>
                             <p class="pbutton sort clearfix">
                                 <?php $n=1;if(is_array(get_tag_list())) foreach(get_tag_list() AS $tag) { ?>
                                 <a title="<?php echo $tag;?>" href="<?php echo search_tag($tag);?>"><?php echo $tag;?></a>
                                 <?php $n++;}unset($n); ?>
                             </p>
                             <h2>按模板颜色</h2>
                             <p   class="pbutton color clearfix">
                                 <a class="c1" href="<?php echo search_tag('','红色');?>">红色</a>
                                 <a class="c2" href="<?php echo search_tag('','橙色');?>">橙色</a>
                                 <a class="c3" href="<?php echo search_tag('','黄色');?>">黄色</a>
                                 <a class="c4" href="<?php echo search_tag('','绿色');?>">绿色</a>
                                 <a class="c5" href="<?php echo search_tag('','蓝色');?>">蓝色</a>
                                 <a class="c6" href="<?php echo search_tag('','灰色');?>">灰色</a>
                                 <a class="c7" href="<?php echo search_tag('','黑色');?>">黑色</a>
                                 <a class="c8" href="<?php echo search_tag('','紫色');?>">紫色</a>
                                 <a class="c9" href="<?php echo search_tag('','棕色');?>">棕色</a>
                                 <a class="c10" href="<?php echo search_tag('','彩色');?>">彩色</a>
                             </p>
                         </div>
                     </div>
                    
                <!--</div>-->




                   
            </div>
            <div class="cell main_l">

			    <div class="main_l_box">
                <div class="m_T10">
                    <h2>
                        wordpress主题下载：<?php echo $title;?>
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

							  <font style=" font-size:14px; font-weight:normal;">[
							     <?php $cattype = array_filter(explode(',',$rs['tag']))?>
							     <?php $n=1;if(is_array($cattype)) foreach($cattype AS $ct) { ?>
                                   <a href="<?php echo search_tag($ct);?>" title="<?php echo $ct;?>下载" rel="category tag"> <?php echo $ct;?> </a>
                                 <?php $n++;}unset($n); ?>

								]
								</font>
								
							
							
							
							</h4>
							 
							<dl class="nums">
							<dt>现价:</dt>
							<dd>
							<p><em><?php echo $readpoint;?></em>&nbsp;积分 
												
																	<font class="xg1">
												&nbsp;
											 
							   </font>
											
									   &nbsp; <font class="xg1">（1人民币=1积分）</font>
												</p>
											
										   
											
							</dd>
							</dl>

							<div class="tags"><i class="icon-key"></i><strong>关键字：</strong>
									 
								            	<?php $n=1;if(is_array($keywords)) foreach($keywords AS $keyword) { ?>

												<a target="_blank" href="/tags.php?n=<?php echo $keyword;?>"><?php echo $keyword;?></a> 

								　            　<?php $n++;}unset($n); ?>
								
								     
									</div>


							<p class="pns mbm bugbot" style=" height:48px; line-height:48px;">
							<a  target="_blank" class="orangebot" href="<?php echo APP_PATH;?>index.php?m=content&c=readpoint&allow_visitor=<?php echo $allow_visitor;?>" rel="nofollow">立即购买</a>
							 &nbsp; 
										<a href="javascript:;" onclick="window.open('/demo.php?url=<?php echo $demo_url;?>')" class="greenbot" rel="nofollow">演示网站</a>
										 &nbsp; 
										<a href="/home.php?mod=spacecp&amp;ac=credit&amp;op=buy" class="bluebot" rel="nofollow" target="_blank">充值积分</a>
									   
							</p>
								   
									<p class="cl" ><font class="xg1">提示：付款后即可直接在线下载资源</font>&nbsp; &nbsp;<a href="/article-16-1.html" class="c4095CE" target="_blank" rel="nofollow">如何购买资源？</a> &nbsp; <a href="/article-9-1.html" class="c4095CE" target="_blank" rel="nofollow">如何充值积分？</a></p>

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
                        模板浏览
                    </h3>

                     <div id="gallery"><ul>
					 <?php $n=1;if(is_array($photo)) foreach($photo AS $r) { ?>
	        	 
			
					 <li><a class="fancybox" href="<?php echo $r['url'];?>" title="我的网站"><span></span><em><?php echo $r['alt'];?></em><u><img src="<?php echo $r['url'];?>"  alt="<?php echo $r['alt'];?>" /></u></a></li>
					 <?php $n++;}unset($n); ?>
					 <li class="xg_demo"><a target="_blank" title="点击网站演示" href="<?php echo $demo_url;?>"><img alt="点击网站演示" src="<?php echo IMG_PATH;?>demo.gif" data-pinit="registered"></a></li>
					 
					 </ul>
					 <div class="clear"></div>
					 </div>

                    <h3>
                        主题下载
                    </h3>
                    <div class="clear">
                    </div>
                </div>

				
                <div class="m_Box16">
                   <div class="nr_down">
				   <?php $n=1;if(is_array($down_url)) foreach($down_url AS $r) { ?>
	        	      <?php echo $r;?> 
			         
		        	<?php $n++;}unset($n); ?>
					

					<span>售价：<em><?php echo $readpoint;?></em>积分 <a href="/index/help.html" target="_blank">如何获得积分？</a><a href="/member/cz.php" target="_blank">[充值]</a><a title="收藏dedecms通信工程企业网站模板到会员收藏夹" href="javascript:sc(99600);">[收藏]</a><a href="javascript:bc('dedecms通信工程企业网站模板',window.location.href,99600);">[报错]</a><a title="返回织梦模板列表" href="http://www.mb5u.com/cmsmoban/dedecmsmoban/">[返回列表]</a></span>
					</div>
                    <div class="clear">
                    </div>
                </div>

				<div class="wzad">
                    <a href="javascript:;" rel="nofollow" target="_blank" title="wordpress主题推荐">
                        <img src="./images/cefhost.png" alt="wordpress主题推荐">
                    </a>
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
				<div class="wzad">
                    <a href="javascript:;" rel="nofollow" target="_blank" title="wordpress主题推荐">
                        <img src="./images/panyweb.jpg" alt="wordpress主题推荐">
                    </a>
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