<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<!--main-->
        <div class="constr Main1">

        </div>
        <div class="constr Main2 fix">

           <div class="in-side-topmenu side-group">
				     <h2>按模板行业分类</h2>
                     <p class="pbutton sort clearfix">
                         <?php $n=1;if(is_array(get_tag_list())) foreach(get_tag_list() AS $tag) { ?>
                         <?php if($key == $tag) { ?>
                         <a class="select" title="<?php echo $tag;?>" href="<?php echo search_tag($catid,$tag,$color);?>"><?php echo $tag;?></a>
                         <?php } else { ?>
                         <a title="<?php echo $tag;?>" href="<?php echo search_tag($catid,$tag,$color);?>"><?php echo $tag;?></a>
                         <?php } ?>
                         <?php $n++;}unset($n); ?>
					 </p>
						 <h2>按模板颜色</h2>
                     <p   class="pbutton color clearfix">
                         <?php if($color == '红色') { ?>
                         <a class="c1 select" href="<?php echo search_tag($catid,$key,'红色');?>">红色</a>
                         <?php } else { ?>
                         <a class="c1" href="<?php echo search_tag($catid,$key,'红色');?>">红色</a>
                         <?php } ?>
                         <?php if($color == '橙色') { ?>
                         <a class="c2 select" href="<?php echo search_tag($catid,$key,'橙色');?>">橙色</a>
                         <?php } else { ?>
                         <a class="c2" href="<?php echo search_tag($catid,$key,'橙色');?>">橙色</a>
                         <?php } ?>
                         <?php if($color == '黄色') { ?>
                         <a class="c3 select" href="<?php echo search_tag($catid,$key,'黄色');?>">黄色</a>
                         <?php } else { ?>
                         <a class="c3" href="<?php echo search_tag($catid,$key,'黄色');?>">黄色</a>
                         <?php } ?>
                         <?php if($color == '绿色') { ?>
                         <a class="c4 select" href="<?php echo search_tag($catid,$key,'绿色');?>">绿色</a>
                         <?php } else { ?>
                         <a class="c4" href="<?php echo search_tag($catid,$key,'绿色');?>">绿色</a>
                         <?php } ?>
                         <?php if($color == '蓝色') { ?>
                         <a class="c5 select" href="<?php echo search_tag($catid,$key,'蓝色');?>">蓝色</a>
                         <?php } else { ?>
                         <a class="c5" href="<?php echo search_tag($catid,$key,'蓝色');?>">蓝色</a>
                         <?php } ?>
                         <?php if($color == '灰色') { ?>
                         <a class="c6 select" href="<?php echo search_tag($catid,$key,'灰色');?>">灰色</a>
                         <?php } else { ?>
                         <a class="c6" href="<?php echo search_tag($catid,$key,'灰色');?>">灰色</a>
                         <?php } ?>
                         <?php if($color == '黑色') { ?>
                         <a class="c7 select" href="<?php echo search_tag($catid,$key,'黑色');?>">黑色</a>
                         <?php } else { ?>
                         <a class="c7" href="<?php echo search_tag($catid,$key,'黑色');?>">黑色</a>
                         <?php } ?>
                         <?php if($color == '紫色') { ?>
                         <a class="c8 select" href="<?php echo search_tag($catid,$key,'紫色');?>">紫色</a>
                         <?php } else { ?>
                         <a class="c8" href="<?php echo search_tag($catid,$key,'紫色');?>">紫色</a>
                         <?php } ?>
                         <?php if($color == '棕色') { ?>
                         <a class="c9 select" href="<?php echo search_tag($catid,$key,'棕色');?>">棕色</a>
                         <?php } else { ?>
                         <a class="c9" href="<?php echo search_tag($catid,$key,'棕色');?>">棕色</a>
                         <?php } ?>
                         <?php if($color == '彩色') { ?>
                         <a class="c10 select" href="<?php echo search_tag($catid,$key,'彩色');?>">彩色</a>
                         <?php } else { ?>
                         <a class="c10" href="<?php echo search_tag($catid,$key,'彩色');?>">彩色</a>
                         <?php } ?>
					</p>
                     
                </div>
		     
        </div>



        
		<div class="constr Main2 fix">


		      <div class="side-group FR">
                
                <div class="in-side-menu h535">
				     <h2>按模板行业分类</h2>
                     <p class="pbutton skey clearfix">
						<a title="企业网站模板" href="<?php echo search_tag($catid,'企业模板',$color);?>">企业</a>
                         <a title="博客网站模板" href="<?php echo search_tag($catid,'博客模板',$color);?>">博客</a>
                         <a title="简洁网站模板" href="<?php echo search_tag($catid,'简洁模板',$color);?>">简洁</a>
                         <a title="整站网站模板" href="<?php echo search_tag($catid,'整站模板',$color);?>">整站</a>
                         <a title="大气网站模板" href="<?php echo search_tag($catid,'大气模板',$color);?>">大气</a>
                         <a title="商城网站模板" href="<?php echo search_tag($catid,'商城模板',$color);?>">商城</a>
                         <a title="精品网站模板" href="<?php echo search_tag($catid,'精品模板',$color);?>">精品</a>
                         <a title="css3网站模板" href="<?php echo search_tag($catid,'CSS3模板',$color);?>">CSS3</a>
                         <a title="html5网站模板" href="<?php echo search_tag($catid,'HTML5模板',$color);?>">HTML5</a>
                         <a title="响应式网站模板" href="<?php echo search_tag($catid,'响应式模板',$color);?>">响应式</a>
                         <a title="简单网站模板" href="<?php echo search_tag($catid,'简单模板',$color);?>">简单</a>
                         <a title="清爽网站模板" href="<?php echo search_tag($catid,'清爽模板',$color);?>">清爽</a>
                         <a title="干净网站模板" href="<?php echo search_tag($catid,'干净模板',$color);?>">干净</a>
                         <a title="线条网站模板" href="<?php echo search_tag($catid,'线条模板',$color);?>">线条</a>
                         <a title="个人网站模板" href="<?php echo search_tag($catid,'个人模板',$color);?>">个人</a>
                         <a title="漂亮网站模板" href="<?php echo search_tag($catid,'漂亮模板',$color);?>">漂亮</a>
                         <a title="科技网站模板" href="<?php echo search_tag($catid,'科技模板',$color);?>">科技</a>
                         <a title="建筑网站模板" href="<?php echo search_tag($catid,'建筑模板',$color);?>">建筑</a>
                         <a title="大图网站模板" href="<?php echo search_tag($catid,'大图模板',$color);?>">大图</a>
                         <a title="精美网站模板" href="<?php echo search_tag($catid,'精美模板',$color);?>">精美</a>
                         <a title="质感网站模板" href="<?php echo search_tag($catid,'质感模板',$color);?>">质感</a>
                         <a title="web20网站模板" href="<?php echo search_tag($catid,'web20模板',$color);?>">web20</a>
                         <a title="个性网站模板" href="<?php echo search_tag($catid,'个性模板',$color);?>">个性</a>
                         <a title="网店网站模板" href="<?php echo search_tag($catid,'网店模板',$color);?>">网店</a>
                         <a title="家居网站模板" href="<?php echo search_tag($catid,'家居模板',$color);?>">家居</a>
                         <a title="jquery网站模板" href="<?php echo search_tag($catid,'jquery模板',$color);?>">jquery</a>
                         <a title="动画网站模板" href="<?php echo search_tag($catid,'动画模板',$color);?>">动画</a>
                         <a title="幻灯网站模板" href="<?php echo search_tag($catid,'幻灯模板',$color);?>">幻灯</a>
                         <a title="菜单网站模板" href="<?php echo search_tag($catid,'菜单模板',$color);?>">菜单</a>
                         <a title="整体色网站模板" href="<?php echo search_tag($catid,'整体色模板',$color);?>">整体色</a>
                         <a title="商业网站模板" href="<?php echo search_tag($catid,'商业模板',$color);?>">商业</a>
                         <a title="外贸网站模板" href="<?php echo search_tag($catid,'外贸模板',$color);?>">外贸</a>
                         <a title="展示网站模板" href="<?php echo search_tag($catid,'展示模板',$color);?>">展示</a>
                         <a title="透明网站模板" href="<?php echo search_tag($catid,'透明模板',$color);?>">透明</a>
                         <a title="酒店网站模板" href="<?php echo search_tag($catid,'酒店模板',$color);?>">酒店</a>
                         <a title="手机网站模板" href="<?php echo search_tag($catid,'手机模板',$color);?>">手机</a>
                         <a title="app网站模板" href="<?php echo search_tag($catid,'APP模板',$color);?>">APP</a>
						<a title="app网站模板" href="index.php?m=content&c=index&a=lists&catid=6">更多>></a>
					
					</p>
                     
                </div>
            </div>
              <div   class="cell inline_box fix tj m_Grid1 last">
                <?php $i=1;?>
                <?php $n=1;if(is_array($datas)) foreach($datas AS $r) { ?>
                <?php if($i%3 != 0) { ?>
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
                                    <a class="wpfp-link wizylike_icon" href="#" id="k_favorite" onclick="showWindow(this.id, this.href, 'get', 0);" title="888 人推荐" rel="nofollow">888</a></span></li>
                                <li class="comments">
                                    <a href="javascript:;" title=""><?php echo get_comment($r[catid],$r[id]);?></a></li>
                                <li class="views">
                                    <?php echo get_hits(12,$r[id]);?>
                                </li>

                            </ul>
                        </div>
                        <div class="citemqt citemfoot">
                            <div class="citemzl">
                                <a rel="nofollow" href="#" class="citemfimg">
                                    <img width="24" height="24" src="<?php echo IMG_PATH;?>list_icon.jpg"><?php echo do_str($r[tag]);?></a>
                            </div>
                        </div>
                    </div>
                    <?php $i++;?>
                    <?php $n++;}unset($n); ?>
                    <div class="inline_box fix tj m_Grid1">
                        <div class="page_navi"><?php echo $pages;?></div>
                    </div>
                     <SPAN class="w300 inline_any">&nbsp;</SPAN> <SPAN class="w300 inline_any">&nbsp;</SPAN> <SPAN class="w300 inline_any">&nbsp;</SPAN>
            </div>
            <div class="clear">
            </div>
        </div>

              <div class="constr Main3">
            <div class="m_Grid2 FL">
                <div class="m_T3">
                    <h3>
                        <a href="javascript:;" target="_blank">
                            文章教程
                        </a>
                    </h3>
                    <span>
                        <a href="index.php?m=content&c=index&a=lists&catid=43" target="_blank">
                            更多&gt;&gt;
                        </a>
                    </span>
                </div>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=34df84ed45a37750e6879939d49f8289&action=lists&catid=46&num=4&order=id+DESC&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'46','order'=>'id DESC','moreinfo'=>'1','limit'=>'4',));}?>
                <ul class="m_Box2">
                    <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                    <li>
                        <a title="<?php echo $v['title'];?>" href="<?php echo $v['url'];?>" rel="nofollow">
                            <img width="156" height="96" class="wp-post-image" alt="<?php echo $v['title'];?>" src="<?php echo $v['thumb'];?>">
                        </a>
                        <p>
                            <a target="_blank" title="<?php echo $v['title'];?>" href="<?php echo $v['url'];?>">
                                <?php echo $v['title'];?>
                            </a>
                        </p>
                    </li>
                    <?php $n++;}unset($n); ?>
                </ul>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d81f2d355885f4293bc323d62a44c40a&action=lists&catid=47&num=12&order=id+DESC&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'47','order'=>'id DESC','moreinfo'=>'1','limit'=>'12',));}?>
                <ul class="m_Box3">
                    <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                    <li>
                        <a target="_blank" title="<?php echo $v['title'];?>" href="<?php echo $v['url'];?>">
                            .<?php echo $v['title'];?>
                        </a>
                    </li>
                    <?php $n++;}unset($n); ?>
                    <div class="clear">
                    </div>
                </ul>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
            <div class="m_Grid2 FR">
                <div class="m_T3">
                    <h3>
                        <a href="javascript:;" target="_blank">
                            文章教程
                        </a>
                    </h3>
                    <span>
                        <a href="index.php?m=content&c=index&a=lists&catid=43" target="_blank">
                            更多&gt;&gt;
                        </a>
                    </span>
                </div>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6827bdc35390f93030ab6361e058633c&action=lists&catid=48&num=4&order=id+DESC&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'48','order'=>'id DESC','moreinfo'=>'1','limit'=>'4',));}?>
                <ul class="m_Box2">
                    <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                    <li>
                        <a title="<?php echo $v['title'];?>" href="<?php echo $v['url'];?>" rel="nofollow">
                            <img width="156" height="96" class="wp-post-image" alt="<?php echo $v['title'];?>" src="<?php echo $v['thumb'];?>">
                        </a>
                        <p>
                            <a target="_blank" title="<?php echo $v['title'];?>" href="<?php echo $v['url'];?>">
                                <?php echo $v['title'];?>
                            </a>
                        </p>
                    </li>
                    <?php $n++;}unset($n); ?>
                </ul>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=460ea222999171a45708624e48a0ed7e&action=lists&catid=49&num=12&order=id+DESC&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'49','order'=>'id DESC','moreinfo'=>'1','limit'=>'12',));}?>
                <ul class="m_Box3">
                    <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                    <li>
                        <a target="_blank" title="<?php echo $v['title'];?>" href="<?php echo $v['url'];?>">
                            .<?php echo $v['title'];?>
                        </a>
                    </li>
                    <?php $n++;}unset($n); ?>
                    <div class="clear">
                    </div>
                </ul>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
            <div class="clear">
            </div>
        </div>
        </div>

<?php include template("content","footer"); ?>