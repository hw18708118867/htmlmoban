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
                     <div class="n_h FR">
                         <div class="in-side-menu">
                             <h2>按模板行业分类</h2>
                             <p class="pbutton sort clearfix">
                                 <?php $n=1;if(is_array(get_tag_list())) foreach(get_tag_list() AS $tag) { ?>
                                 <a title="<?php echo $tag;?>" href="<?php echo search_tag(6,$tag);?>"><?php echo $tag;?></a>
                                 <?php $n++;}unset($n); ?>
                             </p>
                             <h2>按模板颜色</h2>
                             <p   class="pbutton color clearfix">
                                 <a class="c1" href="<?php echo search_tag(6,'','红色');?>">红色</a>
                                 <a class="c2" href="<?php echo search_tag(6,'','橙色');?>">橙色</a>
                                 <a class="c3" href="<?php echo search_tag(6,'','黄色');?>">黄色</a>
                                 <a class="c4" href="<?php echo search_tag(6,'','绿色');?>">绿色</a>
                                 <a class="c5" href="<?php echo search_tag(6,'','蓝色');?>">蓝色</a>
                                 <a class="c6" href="<?php echo search_tag(6,'','灰色');?>">灰色</a>
                                 <a class="c7" href="<?php echo search_tag(6,'','黑色');?>">黑色</a>
                                 <a class="c8" href="<?php echo search_tag(6,'','紫色');?>">紫色</a>
                                 <a class="c9" href="<?php echo search_tag(6,'','棕色');?>">棕色</a>
                                 <a class="c10" href="<?php echo search_tag(6,'','彩色');?>">彩色</a>
                             </p>
                         </div>
                     </div>
                    
                <!--</div>-->




                   
            </div>
            <div class="cell main_l">
			     <div class="main_l_box">
                     <div class="m_T8">
                         <?php $n=1;if(is_array(get_child_category(43))) foreach(get_child_category(43) AS $v) { ?>
                         <a href="<?php echo $v['url'];?>"><h3><?php echo $v['catname'];?></h3></a>
                         <?php $n++;}unset($n); ?>
                     </div>

                   <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=11e982198282a77f17ebf8d7a1dede5e&action=lists&catid=%24catid&num=10&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 10;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
				      <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
				    <div class="m_Box8">
                        <div class="tit">
                            <h2><a target="_blank" title="<?php echo $v['title'];?>" href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a></h2>
                        </div>
                        <a title="<?php echo $v['title'];?>" href="<?php echo $v['url'];?>">
                            <img width="180" height="120" class="wp-post-image" alt="<?php echo $v['title'];?>" src="<?php echo $v['thumb'];?>">
                        </a>
                        <p class="box"><?php echo $v['description'];?><a href="<?php echo $v['url'];?>">[查看详细]</a>
                        </p>
                        <p class="wordinfo">
                            <span class="loopsj"><?php echo date('Y-m-d',$v[inputtime]);?></span>
                            <span class="loopck"><?php echo get_hits(1,$v[id]);?></span>
                            <span class="loopgjc">关键词：
                                <a rel="tag" href=""><?php echo $v['keywords'];?></a>
                            </span>
                        </p>
                    </div>
					<?php $n++;}unset($n); ?>
                         <div class="inline_box fix tj m_Grid1" style="margin-top: 30px;">
                             <div class="page_navi">
                                 <?php echo $pages;?>
                             </div>
                         </div>
				  <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

				 </div>


            </div>
            
            <div class="clear">
            </div>
        </div>


<script language="JavaScript" src="<?php echo APP_PATH;?>api.php?op=count&id=<?php echo $id;?>&modelid=<?php echo $modelid;?>"></script>
<?php include template("content","footer"); ?>