<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<link type="text/css" rel="stylesheet" href="<?php echo CSS_PATH;?>category.css">

<script src="<?php echo JS_PATH;?>tms-0.4.1.js" type="text/javascript"></script>
<script>

    jQuery(window).load(function () {
        jQuery('.slider')._TMS({
            show: 0,
            pauseOnHover: false,
            prevBu: '.prev',
            nextBu: '.next',
            playBu: false,
            duration: 800,
            preset: 'random',
            pagination: false,//'.pagination',true,'<ul></ul>'
            pagNums: false,
            slideshow: 8000,
            numStatus: false,
            banners: true,
            waitBannerAnimation: false,
            progressBar: false
        });

    });
</script>

<div class="constr Main2 fix mt10">


    <!------silde------->
    <div class="post-home-l clearfix" id="slideshow">
        <div class="container_12">
            <!--[diy=xinyun_bbs_004_01]-->
            <div id="xinyun_bbs_004_01" class="area">
                <div id="framepyPRmD" class="frame move-span cl frame-1">
                    <div id="framepyPRmD_left" class="column frame-1-c">
                        <div id="framepyPRmD_left_temp" class="move-span temp"></div>
                        <div id="portal_block_187" class="cl_block_bm block move-span">
                            <div id="portal_block_187_content" class="dxb_bc">
                                <div class="grid_12">
                                    <div class="slider-relative">
                                        <div class="slider-block">
                                            <div class="slider">
                 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=583b8d1c1d8dcdc74ed6aa27dfafaa7e&sql=SELECT+setting%2Cname%2Caddtime+FROM+mb_poster+WHERE+spaceid+%3D+12+AND+type%3D%27images%27+AND+disabled%3D0+ORDER+BY+listorder+ASC&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT setting,name,addtime FROM mb_poster WHERE spaceid = 12 AND type='images' AND disabled=0 ORDER BY listorder ASC LIMIT 4");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
                                                <a href="#" class="prev"></a><a href="#" class="next"></a>
                                                <ul class="items">
                                                    <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                                                    <?php $focus = string2array($v[setting]);?>
                                                    <li>
                                                        <a href="<?php echo $focus['1']['linkurl'];?>" target="_blank"><img
                                                            src="<?php echo $focus['1']['imageurl'];?>"
                                                            width="585" height="390" alt="<?php echo $focus['1']['alt'];?>"/></a>
                                                        <div class="banner">
                                                            <span><a href="<?php echo $focus['1']['linkurl'];?>" style="color:#FFFFFF" title="<?php echo $v['name'];?>"
                                                                     target="_blank"><?php echo $v['name'];?></a></span><br>
                                                            <div><a href="<?php echo $focus['1']['linkurl'];?>">Time:<?php echo date('Y-m-d H:i:s',$v['addtime']);?></a></div>
                                                        </div>
                                                    </li>
                                                    <?php $n++;}unset($n); ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--[/diy]-->
        </div>
        <ul class="index_post_list">
            <h2><!--[diy=xinyun_bbs_004_02]-->
                <div id="xinyun_bbs_004_02" class="area">
                    <div id="framezy0Ahj" class="frame move-span cl frame-1">
                        <div id="framezy0Ahj_left" class="column frame-1-c">
                            <div id="framezy0Ahj_left_temp" class="move-span temp"></div>
                            <div id="portal_block_188" class="block move-span">
                                <div id="portal_block_188_content" class="dxb_bc">
                                    <div class="portal_block_summary">最新素材</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--[/diy]--></h2>
            <!--[diy=xinyun_bbs_004_03]-->
            <div id="xinyun_bbs_004_03" class="area">
                <div id="frameAJVyUD" class="frame move-span cl frame-1">
                    <div id="frameAJVyUD_left" class="column frame-1-c">
                        <div id="frameAJVyUD_left_temp" class="move-span temp"></div>
                        <div id="portal_block_189" class="block move-span">
                            <?php $data = get_tx_list(30,6,1);?>
                            <div id="portal_block_189_content" class="dxb_bc">
                                <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                                    <li>
                                        <a href="<?php echo $v['url'];?>" title="<?php echo $v['title'];?>"
                                           target="_blank"><?php echo $v['title'];?></a>

                                        <div>
                                            <?php echo date('Y-m-d H:i:s',$v[inputtime]);?>
                                        </div>
                                    </li>
                                <?php $n++;}unset($n); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--[/diy]-->
            <!--[diy=xinyun_bbs_004_04]-->
            <div id="xinyun_bbs_004_04" class="area">
                <div id="frameCWW6V6" class="frame move-span cl frame-1">
                    <div id="frameCWW6V6_left" class="column frame-1-c">
                        <div id="frameCWW6V6_left_temp" class="move-span temp"></div>
                        <div id="portal_block_190" class="block move-span">
                            <div id="portal_block_190_content" class="dxb_bc">
                                <li id="msg_scroll">
                                    <ul style="margin-top: 0px;">
                                        <li class="text_news">
                                            <a href="" title="" target="_blank"></a>
                                        </li>
                                    </ul>
                                </li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--[/diy]-->
        </ul>
    </div>

    <!----silde----->

    <!------right-------->
    <div class="sidebar-tab FR">


        <div class="nav-sub">
            <dl>
                <dt class="jx"><span>广告代码</span>
                <div></div>
                <a href="/index.php?m=content&c=index&a=lists&catid=17">全部››</a></dt>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=464a4d526ca6b0be30e16a9e35f4477c&action=category&catid=17&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'17','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>

                <?php $n=1;if(is_array($data)) foreach($data AS $cat) { ?>
                <dd><a href="<?php echo $cat['url'];?>"><?php echo $cat['catname'];?></a></dd>
                <?php $n++;}unset($n); ?>

                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </dl>
        </div>

        <div class="nav-sub">
            <dl>
                <dt class="tx"><span>特效代码</span>
                <div></div>
                <a href="/index.php?m=content&c=index&a=lists&catid=30">全部››</a></dt>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f0ed520873c7a7abeff2e6c2087cd281&action=category&catid=30&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'30','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $cat) { ?>
                <dd><a href="<?php echo $cat['url'];?>"><?php echo $cat['catname'];?></a></dd>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </dl>
        </div>


    </div>


    <!------right------->

</div>


<div class="constr Main2 fix">
    <div class="side-group side-group-w FR">
        <div class="in-side-menu">
            <h2 style="border-top:5px solid #38afe5">特效代码</h2>
            <?php $data = get_tx_list(30,10);?>
            <ul class="m_Box3 w250 pl20 h374">
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


        </div>
    </div>
    <div class="cell inline_box fix tj m_Grid1">

        <!------left------------>
        <div class="imitem-l  w895 in-box h410">
            <div class="imhead">
                <!--[diy=xinyun_bbs_004_11]-->
                <div id="xinyun_bbs_004_11" class="area">
                    <div id="frameZcj39g" class="frame move-span cl frame-1">
                        <div id="frameZcj39g_left" class="column frame-1-c">
                            <div id="frameZcj39g_left_temp" class="move-span temp">
                            </div>
                            <div id="portal_block_197" class="block move-span">
                                <div id="portal_block_197_content" class="dxb_bc">
                                    <div class="portal_block_summary">
                                        JS广告特效
                                        <a class="immore" target="_blank" href="/index.php?m=content&c=index&a=lists&catid=17">
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
            <?php $data = get_tx_list(17,6);?>
            <ul style="margin-left:10px">
                <!--[diy=xinyun_bbs_004_12]-->
                <div id="xinyun_bbs_004_12" class="area">
                    <div id="frameN6jBqk" class="frame move-span cl frame-1">
                        <div id="frameN6jBqk_left" class="column frame-1-c">
                            <div id="frameN6jBqk_left_temp" class="move-span temp">
                            </div>
                            <div id="portal_block_200" class="block move-span">
                                <div id="portal_block_200_content" class="dxb_bc">

                                    <!-----content-------->
                                    <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                                    <dl>
                                        <dd><a target="_blank" href="<?php echo $v['url'];?>">
                                            <img src="<?php echo $v['thumb'];?>" alt="<?php echo $v['title'];?>" style="opacity: 1;"><?php echo $v['title'];?></a><span><?php echo get_catname($v[catid]);?></span>
                                        </dd>
                                    </dl>
                                    <?php $n++;}unset($n); ?>
                                    <!------content------>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--[/diy]-->
            </ul>
        </div>


        <!-------left-------------->


    </div>

    <div class="clear">
    </div>
</div>

<div class="constr Main3 bc4">
    <?php $data = get_tx_list(30,10);?>
    <div class="mobanshangcheng">
        <ul class="mobanshangcheng_ul1"><h3 class="mobanshangcheng_ul1_p1 blink b">最新特效代码</h3></ul>
        <ul class="mobanshangcheng_ul2">
            <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
            <li>
                <div class="pic"><a title="<?php echo $v['title'];?>" href="<?php echo $v['url'];?>">
                    <img width="170" height="120" alt="<?php echo $v['title'];?>" src="<?php echo $v['thumb'];?>"></a>
                </div>
                <div class="title"><a title="<?php echo $v['title'];?>" href=""><?php echo $v['title'];?></a></div>
            </li>
            <?php $n++;}unset($n); ?>
        </ul>
    </div>
</div>


<div class="constr Main3 mt10">

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
                                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a98c4adf8c48af52d0d36c9058af0ea2&action=lists&catid=44&num=4&order=id+DESC&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'44','order'=>'id DESC','moreinfo'=>'1','limit'=>'4',));}?>
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
                                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0dbba9f860baf108fb6e0eb10950c242&action=lists&catid=45&num=12&order=id+DESC&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'45','order'=>'id DESC','moreinfo'=>'1','limit'=>'12',));}?>
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


<?php include template("content","footer"); ?>