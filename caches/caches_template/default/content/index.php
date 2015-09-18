<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>


<div class="constr Main2 fix">


<div class="mainProNav">
    <dl class="navM1">
        <dd>
            <h2><a href="/index.php?m=content&c=index&a=lists&catid=16">JS网页特效</a></h2>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=cb6fb5e48ced0e789ac7a71d23c94cac&action=category&catid=30&num=8&siteid=1&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'30','siteid'=>'1','order'=>'listorder ASC','limit'=>'8',));}?>
            <p>
                <?php $n=1;if(is_array($data)) foreach($data AS $cat) { ?>
                <a target="_blank" href="<?php echo $cat['url'];?>"><?php echo $cat['catname'];?></a>
                <?php $n++;}unset($n); ?>
                <a class="more" href="/index.php?m=content&c=index&a=lists&catid=16">查看更多...</a>
            </p>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            <div class="cl"></div>
            <h6><a href="javascript:;">热门搜索</a></h6>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c3d4dc02808a28c5ff00f8dd5b07ef83&action=category&catid=17&num=25&siteid=1&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'17','siteid'=>'1','order'=>'listorder ASC','limit'=>'25',));}?>
            <p>
                <?php $n=1;if(is_array($data)) foreach($data AS $cat) { ?>
                <a target="_blank" href="<?php echo $cat['url'];?>"><?php echo $cat['catname'];?></a>
                <?php $n++;}unset($n); ?>
                <a class="more" href="/index.php?m=content&c=index&a=lists&catid=16">查看更多...</a>
            </p>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            <div class="cl"></div>
            <h5>上面没找到，别漏了这些哦。</h5>
            <?php $data = get_tx_list(30,2,1);?>
            <ul>
                <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                <li><a target="_blank" href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a></li>
                <?php $n++;}unset($n); ?>
            </ul>
        </dd>
        <dt>JS网页代码</dt>
    </dl>
    <dl class="navM2">
        <dd>
            <h2><a href="#">开发中...敬请期待！</a></h2>

            <!--<p><a target="_blank" href="">DIV+CSS</a><a target="_blank" href="">焦点图</a><a target="_blank"
                                                                                          href="">菜单导航</a><a
                    target="_blank" href="">图片特效</a><a target="_blank" href="">表单按钮</a><a target="_blank"
                                                                                          href="">广告特效</a><a
                    class="more" href="/JS/">查看更多...</a></p>

            <div class="cl"></div>
            <h6><a href="javascript:;">热门搜索</a></h6>

            <p><a target="_blank" href="">jQuery</a><a target="_blank" href="">Flash</a><a target="_blank"
                                                                                           href="">焦点图</a><a
                    target="_blank" href="">JS代码</a><a target="_blank" href="">特效</a><a target="_blank" href="">flash+xml</a><a
                    target="_blank" href="">切换</a><a target="_blank" href="">图片切换</a><a target="_blank" href="">幻灯</a><a
                    target="_blank" href="">JS广告代码</a><a target="_blank" href="">JS特效代码</a><a target="_blank" href="">站长图库</a><a
                    class="more" href="/JS/">查看更多...</a></p>

            <div class="cl"></div>
            <h5>上面没找到，别漏了这些哦。</h5>
            <ul>
                <li><a target="_blank" href="">jQuery环形图标菜单旋转</a></li>
                <li><a target="_blank" href="">房屋租赁后台管理模板</a></li>
                <li><a target="_blank" href="">深绿色扁平排版HTML模板</a></li>
            </ul>-->
        </dd>
        <dt>图片设计素材</dt>
    </dl>
    <dl class="navM3">
        <dd>
            <h2><a href="/index.php?m=content&c=index&a=lists&catid=43">建站、设计教程</a></h2>

            <p>
                <?php $n=1;if(is_array(get_child_category(43))) foreach(get_child_category(43) AS $v) { ?>
                <a target="_blank" href="<?php echo $v['url'];?>"><?php echo $v['catname'];?></a>
                <?php $n++;}unset($n); ?>
                <a class="more" href="/index.php?m=content&c=index&a=lists&catid=43">查看更多...</a>
            </p>

            <div class="cl"></div>
            <h6><a href="javascript:;">热门搜索</a></h6>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c3d4dc02808a28c5ff00f8dd5b07ef83&action=category&catid=17&num=25&siteid=1&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'17','siteid'=>'1','order'=>'listorder ASC','limit'=>'25',));}?>
            <p>
                <?php $n=1;if(is_array($data)) foreach($data AS $cat) { ?>
                <a target="_blank" href="<?php echo $cat['url'];?>"><?php echo $cat['catname'];?></a>
                <?php $n++;}unset($n); ?>
                <a class="more" href="/index.php?m=content&c=index&a=lists&catid=16">查看更多...</a>
            </p>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

            <div class="cl"></div>
            <h5>上面没找到，别漏了这些哦。</h5>
            <?php $data = get_tx_list(30,2,1);?>
            <ul>
                <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                <li><a target="_blank" href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a></li>
                <?php $n++;}unset($n); ?>
            </ul>
        </dd>
        <dt>建站、设计教程</dt>
    </dl>
    <dl class="navM4">
        <dd>
            <h2><a href="/index.php?m=content&c=index&a=lists&catid=11">酷站、设计欣赏</a></h2>

            <p>
                <?php $n=1;if(is_array(get_tag_list(182))) foreach(get_tag_list(182) AS $tag) { ?>
                <a target="_blank" href="<?php echo search_tag($catid,$tag,'',13);?>"><?php echo $tag;?>酷站</a>
                <?php $n++;}unset($n); ?>
                <a class="more" href="/index.php?m=content&c=index&a=lists&catid=11">查看更多...</a>
            </p>

            <div class="cl"></div>
            <h6><a href="javascript:;">热门搜索</a></h6>

            <p>
                <?php $n=1;if(is_array(get_tag_list(180))) foreach(get_tag_list(180) AS $tag) { ?>
                <a target="_blank" href="<?php echo search_tag($catid,'','',13,'',$tag);?>"><?php echo $tag;?></a>
                <?php $n++;}unset($n); ?>
                <a class="more" href="/index.php?m=content&c=index&a=lists&catid=11">查看更多...</a>
            </p>

            <div class="cl"></div>
            <h5>上面没找到，别漏了这些哦。</h5>
            <?php $data = get_tx_list(30,2,1);?>
            <ul>
                <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                <li><a target="_blank" href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a></li>
                <?php $n++;}unset($n); ?>
            </ul>
        </dd>
        <dt>酷站、设计欣赏</dt>
    </dl>
    <dl class="navM5">
        <dd>
            <h2><a href="#">开发中...敬请期待！</a></h2>
            <!--<h2><a href="#">插件模块、工具</a></h2>

            <p><a target="_blank" href="">DIV+CSS</a><a target="_blank" href="">焦点图</a><a target="_blank"
                                                                                          href="">菜单导航</a><a
                    target="_blank" href="">图片特效</a><a target="_blank" href="">表单按钮</a><a target="_blank"
                                                                                          href="">广告特效</a><a
                    class="more" href="/JS/">查看更多...</a></p>

            <div class="cl"></div>
            <h6><a href="javascript:;">热门搜索</a></h6>

            <p><a target="_blank" href="">jQuery</a><a target="_blank" href="">Flash</a><a target="_blank"
                                                                                           href="">焦点图</a><a
                    target="_blank" href="">JS代码</a><a target="_blank" href="">特效</a><a target="_blank" href="">flash+xml</a><a
                    target="_blank" href="">切换</a><a target="_blank" href="">图片切换</a><a target="_blank" href="">幻灯</a><a
                    target="_blank" href="">JS广告代码</a><a target="_blank" href="">JS特效代码</a><a target="_blank" href="">站长图库</a><a
                    class="more" href="#">查看更多...</a></p>

            <div class="cl"></div>
            <h5>上面没找到，别漏了这些哦。</h5>
            <ul>
                <li><a target="_blank" href="">jQuery环形图标菜单旋转</a></li>
                <li><a target="_blank" href="">房屋租赁后台管理模板</a></li>
                <li><a target="_blank" href="">深绿色扁平排版HTML模板</a></li>
            </ul>-->
        </dd>
        <dt>插件模块、工具</dt>
    </dl>

</div>

<!--<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=132335f99fcf4a0ddd78b4f4e1cd12b9&action=position&posid=1&order=listorder+DESC&thumb=1&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'1','order'=>'listorder DESC','thumb'=>'1','limit'=>'5',));}?>-->
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=47be4b449f8cebe53e973775963faded&sql=SELECT+setting+FROM+mb_poster+WHERE+spaceid+%3D+11+AND+type%3D%27images%27+AND+disabled%3D0+ORDER+BY+listorder+ASC&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT setting FROM mb_poster WHERE spaceid = 11 AND type='images' AND disabled=0 ORDER BY listorder ASC LIMIT 4");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
<div id="demoContent">
    <div id="inbanad">
        <ul id="inbanimg">
            <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
            <?php $focus = string2array($v[setting]);?>
            <li>
                <a rel="nofollow" href="<?php echo $focus['1']['linkurl'];?>" title="<?php echo $focus['1']['alt'];?>" target="_blank">
                    <img alt="<?php echo $focus['1']['alt'];?>" src="<?php echo $focus['1']['imageurl'];?>" width="695" height="250"/>
                </a>
            </li>
            <?php $n++;}unset($n); ?>
        </ul>
        <ul id="inbannum">
            <?php $i = 1?>
            <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
            <li
            <?php echo ($i == 1) ? 'class="hover"' : ''?>>
            <?php echo $i++?>
            </li>
            <?php $n++;}unset($n); ?>
        </ul>
    </div>
    <script type="text/javascript">
        var img = document.getElementById("inbanimg");
        var num = document.getElementById("inbannum");
        var ali = img.getElementsByTagName("li");
        var oli = num.getElementsByTagName("li");
        var time = null;
        lanrenzhijiaing = document.getElementById("lanrenzhijia");
        img.style.width = ali.length * 695 + "px",
                inow = 0;
        for (var i = 0; i < oli.length; i++) {
            oli[i].index = i;
            oli[i].onmouseover = function () {
                inow = this.index;
                tab();
                window.clearInterval(time)
            }
            oli[i].onmouseout = function () {
                time = window.setInterval(autoPlay, 5000)
            }
        }
        function tab() {
            for (var i = 0; i < oli.length; i++) {
                oli[i].className = ""
            }
            oli[inow].className = "hover";
            startMove(img, {
                        left: -inow * 695
                    },
                    'buffer')
        }
        function autoPlay() {
            inow++;
            if (inow >= ali.length) {
                inow = 0
            }
            tab();
        }
        time = window.setInterval(autoPlay, 5000)
    </script>
</div>

<script type="text/javascript">
    $('.tab-title span').mouseover(function () {
        $(this).addClass("of").siblings().removeClass();
        $(".tab-content > div").eq($('.tab-title span').index(this)).show().siblings().hide()
    });
</script>

<div class="sidebar-tab FR">
    <div class="post-home-r clearfix" id="index_tool">
        <h2 class="title"><!--[diy=xinyun_bbs_004_05]-->
            <div class="area" id="xinyun_bbs_004_05">
                <div class="frame move-span cl frame-1" id="frameMClj1m">
                    <div class="column frame-1-c" id="frameMClj1m_left">
                        <div class="move-span temp" id="frameMClj1m_left_temp"></div>
                        <div class="block move-span" id="portal_block_191">
                            <div class="dxb_bc" id="portal_block_191_content">
                                <div class="portal_block_summary">热门板块</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--[/diy]-->        </h2>

        <ul class="tool_icon">
            <!--[diy=xinyun_bbs_004_06]-->
            <div class="area" id="xinyun_bbs_004_06">
                <div class="frame move-span cl frame-1" id="framehswjQa">
                    <div class="column frame-1-c" id="framehswjQa_left">
                        <div class="move-span temp" id="framehswjQa_left_temp"></div>
                        <div class="block move-span" id="portal_block_192">
                            <div class="dxb_bc" id="portal_block_192_content">
                                <div class="portal_block_summary">
                                    <li><a href="#" class="ps2" target="_blank"></a>

                                        <p>新手入门</p></li>
                                    <li><a rel="nofollow" href="#" class="ai"
                                           target="_blank"></a>

                                        <p>模板充值</p></li>
                                    <li><a rel="nofollow"
                                           href="#"
                                           class="axure" target="_blank"></a>

                                        <p>兑换积分</p></li>
                                    <li><a href="#" class="mindmanage" target="_blank"></a>

                                        <p>热门素材</p></li>
                                    <li><a rel="nofollow"
                                           href="<?php echo qq_url();?>"
                                           class="cutAndSliceMe" target="_blank"></a>

                                        <p>客服中心</p></li>
                                    <li><a rel="nofollow"
                                           href="#"
                                           class="markman" target="_blank"></a>

                                        <p>推广赚分</p></li>
                                    <li><a href="#" class="guideguide" target="_blank"></a>

                                        <p>发布素材</p></li>
                                    <li><a href="#" class="kuler" target="_blank"></a>

                                        <p>网站定制</p></li>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--[/diy]-->
        </ul>

    </div>


</div>

<div class="clear">
</div>
</div>


<div class="constr Main2 fix">
<div class="side-group side-group-w FR">
    <div class="in-side-menu">
        <h2>按模板行业分类</h2>

        <p class="pbutton sort clearfix">
            <?php $n=1;if(is_array(get_tag_list())) foreach(get_tag_list() AS $tag) { ?>
            <a title="<?php echo $tag;?>" href="<?php echo search_tag(6,$tag);?>"><?php echo $tag;?></a>
            <?php $n++;}unset($n); ?>
        </p>

        <h2>按模板颜色</h2>

        <p class="pbutton color clearfix">
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
<div class="cell inline_box fix tj m_Grid1">

    <?php $i=1;?>
    <?php $n=1;if(is_array(get_moban_list())) foreach(get_moban_list() AS $r) { ?>
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
                    </a></div>
            </div>
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
                                    <a class="wpfp-link wizylike_icon"
                                       href="#"
                                       id="k_favorite" onclick="showWindow(this.id, this.href, 'get', 0);" title="888 人推荐"
                                       rel="nofollow">888</a></span></li>
                    <li class="comments">
                        <a href="javascript:;" title=""><?php echo get_comment($r[catid],$r[id]);?></a>
                    </li>
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
    </div>

    <div class="clear">
    </div>
</div>

<div class="constr Main3">

<div class="imitem-l">
    <div class="imhead">
        <!--[diy=xinyun_bbs_004_11]-->
        <div class="area" id="xinyun_bbs_004_11">
            <div class="frame move-span cl frame-1" id="frameZcj39g">
                <div class="column frame-1-c" id="frameZcj39g_left">
                    <div class="move-span temp" id="frameZcj39g_left_temp">
                    </div>
                    <div class="block move-span" id="portal_block_197">
                        <div class="dxb_bc" id="portal_block_197_content">
                            <div class="portal_block_summary">
                                建站教程
                                <a href="index.php?m=content&c=index&a=lists&catid=43" target="_blank" class="immore">
                                    更多
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--[/diy]-->
    </div>
    <ul style="margin-left:10px">
        <!--[diy=xinyun_bbs_004_12]-->
        <div class="area" id="xinyun_bbs_004_12">
            <div class="frame move-span cl frame-1" id="frameN6jBqk">
                <div class="column frame-1-c" id="frameN6jBqk_left">
                    <div class="move-span temp" id="frameN6jBqk_left_temp">
                    </div>
                    <div class="block move-span" id="portal_block_200">
                        <div class="dxb_bc" id="portal_block_200_content">
                            <div class="module cl xld">
                                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=34df84ed45a37750e6879939d49f8289&action=lists&catid=46&num=4&order=id+DESC&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'46','order'=>'id DESC','moreinfo'=>'1','limit'=>'4',));}?>
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
                                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d81f2d355885f4293bc323d62a44c40a&action=lists&catid=47&num=12&order=id+DESC&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'47','order'=>'id DESC','moreinfo'=>'1','limit'=>'12',));}?>
                                <ul class="m_Box3">
                                    <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                                    <li>
                                        <a target="_blank" title="<?php echo $v['title'];?>" href="<?php echo $v['url'];?>">
                                            <?php echo $v['title'];?>
                                        </a>
                                    </li>
                                    <?php $n++;}unset($n); ?>
                                    <div class="clear">
                                    </div>
                                </ul>
                                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--[/diy]-->
    </ul>
</div>
<div class="imitem-r">
    <div class="imhead">
        <!--[diy=xinyun_bbs_004_13]-->
        <div class="area" id="xinyun_bbs_004_13">
            <div class="frame move-span cl frame-1" id="frameR8ONtx">
                <div class="column frame-1-c" id="frameR8ONtx_left">
                    <div class="move-span temp" id="frameR8ONtx_left_temp">
                    </div>
                    <div class="block move-span" id="portal_block_198">
                        <div class="dxb_bc" id="portal_block_198_content">
                            <div class="portal_block_summary">
                                建站教程
                                <a href="index.php?m=content&c=index&a=lists&catid=43" target="_blank" class="immore">
                                    更多
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--[/diy]-->
    </div>
    <ul style="margin-left:10px">
        <!--[diy=xinyun_bbs_004_12]-->
        <div id="xinyun_bbs_004_12" class="area">
            <div id="frameN6jBqk" class="frame move-span cl frame-1">
                <div id="frameN6jBqk_left" class="column frame-1-c">
                    <div id="frameN6jBqk_left_temp" class="move-span temp">
                    </div>
                    <div id="portal_block_200" class="block move-span">
                        <div id="portal_block_200_content" class="dxb_bc">
                            <div class="module cl xld">
                                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a98c4adf8c48af52d0d36c9058af0ea2&action=lists&catid=44&num=4&order=id+DESC&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'44','order'=>'id DESC','moreinfo'=>'1','limit'=>'4',));}?>
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
                                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0dbba9f860baf108fb6e0eb10950c242&action=lists&catid=45&num=12&order=id+DESC&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'45','order'=>'id DESC','moreinfo'=>'1','limit'=>'12',));}?>
                                <ul class="m_Box3">
                                    <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                                    <li>
                                        <a target="_blank" title="<?php echo $v['title'];?>" href="<?php echo $v['url'];?>">
                                            <?php echo $v['title'];?>
                                        </a>
                                    </li>
                                    <?php $n++;}unset($n); ?>
                                    <div class="clear">
                                    </div>
                                </ul>
                                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--[/diy]-->
    </ul>

</div>


</div>

<div class="constr Main3">
    <div class="cl_frame_bm frame move-span clearfix frame-1" id="frameD5Ion1">
        <div style="background-image:none;background-repeat:repeat;background-color:rgb(255, 255, 255);"
             class="frame-title title">
        <span style="font-size:14px;" class="titletext">
            友情链接（申请要求：PR&gt;=3，ALEXA&lt;500000，并内容充实，无作弊现象。联系：QQ:3226458326
        </span>
        </div>
        <div class="column frame-1-c" id="frameD5Ion1_left">
            <div class="move-span temp" id="frameD5Ion1_left_temp">
            </div>
            <div class="block move-span" id="portal_block_203">
                <div class="dxb_bc" id="portal_block_203_content">
                    <div class="portal_block_summary">
                        <div class="bn lk">
                            <ul class="x clearfix">
                                <li>
                                    <a href="http://www.bj-cl.com" target="_blank">
                                        设计公司
                                    </a>
                                </li>
                                <li>
                                    <a href="http://www.flash-china.com" target="_blank">
                                        flash特效
                                    </a>
                                </li>
                                <li>
                                    <a href="http://www.see-say.com" target="_blank">
                                        站长网
                                    </a>
                                </li>
                                <li>
                                    <a href="http://www.css3-html5.com" target="_blank">
                                        html5
                                    </a>
                                </li>
                                <li>
                                    <a href="http://www.163ym.com" target="_blank">
                                        163源码超市
                                    </a>
                                </li>
                                <li>
                                    <a href="http://www.17558.net" target="_blank">
                                        好东西分享
                                    </a>
                                </li>
                                <li>
                                    <a href="http://www.biaoyu114.com" target="_blank">
                                        标语设计
                                    </a>
                                </li>
                                <li>
                                    <a href="http://www.vpsko.com/" target="_blank">
                                        WP主题
                                    </a>
                                </li>
                                <li>
                                    <a href="http://www.51zxw.org" target="_blank">
                                        51zxw网址之家
                                    </a>
                                </li>
                                <li>
                                    <a href="http://www.52hibuy.com" target="_blank">
                                        PPT设计
                                    </a>
                                </li>
                                <li>
                                    <a href="http://www.niurenzm.com" target="_blank">
                                        牛人织梦
                                    </a>
                                </li>
                                <li>
                                    <a href="http://www.lingzhifeiyang.com" target="_blank">
                                        北京设计公司
                                    </a>
                                </li>
                                <li>
                                    <a href="http://www.faceui.com" target="_blank">
                                        UI设计公司
                                    </a>
                                </li>
                                <li>
                                    <a href="http://www.lanlanwork.com" target="_blank">
                                        UI界面设计
                                    </a>
                                </li>
                                <li>
                                    <a href="http://www.ztzl888.com" target="_blank">
                                        南京展览
                                    </a>
                                </li>
                                <li>
                                    <a href="http://www.bjqingyang.com" target="_blank">
                                        北京工作服
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<div class="main-info">
    <dl>
        <dt>找了那么久，是否找到合适的主题了？</dt>
        <dd>不妨把你的想法跟我们说说看呢？
            <a target="_blank" class="showbox" href="<?php echo qq_url();?>">
                联系我们
            </a>
        </dd>
    </dl>
</div>
</div>

<?php include template("content","footer"); ?>