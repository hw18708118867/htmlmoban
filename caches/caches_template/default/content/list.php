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
			    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=35ab7e69aba0456b8495e10fb007dab4&action=lists&catid=%24catid&num=20&order=id+DESC&moreinfo=1&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 20;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
			    <?php $i=1;?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
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
                    <div class="post-info">
                        <ul class="title">
                            <a target="_blank" title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></ul>
                        <ul class="others">
                            <li class="in_category">
                                <?php echo date('Y-m-d',$r[inputtime]);?>
                            </li>
                            <li class="likes">
                                <span class="wpfp-span">
                                    <a class="wpfp-link wizylike_icon" href="home.php?mod=spacecp&amp;ac=favorite&amp;type=thread&amp;id=99666" id="k_favorite" onclick="showWindow(this.id, this.href, 'get', 0);" title="0 人推荐" rel="nofollow">0</a>
                                </span>
                            </li>
                            <li class="comments">
                                <a onclick="showWindow('reply', 'forum.php?mod=post&amp;action=reply&amp;fid=2&amp;tid=99666')" href="javascript:;" title="">8</a></li>
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
						<!--<div id="pages" class="text-c"><?php echo $pages;?></div>-->
                    <div class="inline_box fix tj m_Grid1">
                        <div class="page_navi">
                            <?php echo $pages;?>
                        </div>
                    </div>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
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