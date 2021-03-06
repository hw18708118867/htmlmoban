<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!doctype html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
    <meta name="keywords" content="<?php echo $SEO['keyword'];?>">
    <meta name="description" content="<?php echo $SEO['description'];?>">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo CSS_PATH;?>cool/common.css" class="cssfx"/>

    <link rel="stylesheet" type="text/css" media="screen" href="" id="darkCss"/>
    <!--[if lt IE 9]>
    <script src="./js/css3-mediaqueries.js"></script>
    <![endif]-->
    <script>
        var urlpath = '';
        var skinpath = '';
        var uid = '';
        var unit_3 = true;
    </script>
    <script type="text/javascript" src="<?php echo JS_PATH;?>jquery.min.js"></script>
    <link href="<?php echo CSS_PATH;?>cool/default.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo CSS_PATH;?>cool/page.css"/>
</head>
<body>
<div id="wrap">
    <div id="header">
        <div class="header_con">
                <div id="logo"><a title="" href="javascript:;"></a></div>
            <div class="nav">
                <ul>
                    <li><a href="/">首页</a></li>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b43f1459ac702900c8d44c91a5e796dd&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>

                    <?php $n=1;if(is_array($data)) foreach($data AS $cat) { ?>
                    <li><a href="<?php echo $cat['url'];?>"><?php echo $cat['catname'];?></a></li>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

                </ul>
            </div>
            <div id="tool">
                <a href="javascript:;">登录</a> | <a href="javascript:;">注册</a>
            </div>

        </div>
    </div>
    <div id="index">
        <div class="bm cl" id="pt">
            <div class="z">
                <a title="首页" class="nvhm" href="./">设计我的</a><em>›</em>
                <a title="酷站欣赏" href="view.html">酷站欣赏</a><em>›</em>酷站列表
            </div>
        </div>
        <div id="article">
            <div class="paixu color">
                <h1>按颜色：</h1>
                <a class="red" href="<?php echo search_tag($catid,'','',13);?>">全部</a>
                <a title="红色" href="<?php echo search_tag($catid,'','红色',13);?>"><img border="0" style="padding-top:4px;" src="<?php echo IMG_PATH;?>icon/2013022509484077.jpg"></a>
                <a title="粉色" href="<?php echo search_tag($catid,'','粉色',13);?>"><img border="0" style="padding-top:4px;" src="<?php echo IMG_PATH;?>icon/2013022509485415.jpg"></a>
                <a title="橘色" href="<?php echo search_tag($catid,'','橘色',13);?>"><img border="0" style="padding-top:4px;" src="<?php echo IMG_PATH;?>icon/2013022509490679.jpg"></a>
                <a title="黄色" href="<?php echo search_tag($catid,'','黄色',13);?>"><img border="0" style="padding-top:4px;" src="<?php echo IMG_PATH;?>icon/2013022509491954.jpg"></a>
                <a title="蓝色" href="<?php echo search_tag($catid,'','蓝色',13);?>"><img border="0" style="padding-top:4px;" src="<?php echo IMG_PATH;?>icon/2013022509493285.jpg"></a>
                <a title="绿色" href="<?php echo search_tag($catid,'','绿色',13);?>"><img border="0" style="padding-top:4px;" src="<?php echo IMG_PATH;?>icon/2013022509494789.jpg"></a>
                <a title="紫色" href="<?php echo search_tag($catid,'','紫色',13);?>"><img border="0" style="padding-top:4px;" src="<?php echo IMG_PATH;?>icon/2013022509500299.jpg"></a>
                <a title="黑色" href="<?php echo search_tag($catid,'','黑色',13);?>"><img border="0" style="padding-top:4px;" src="<?php echo IMG_PATH;?>icon/2013022509501523.jpg"></a>
                <a title="白色" href="<?php echo search_tag($catid,'','白色',13);?>"><img border="0" style="padding-top:4px;" src="<?php echo IMG_PATH;?>icon/2013022509502786.jpg"></a>
                <a title="灰色" href="<?php echo search_tag($catid,'','灰色',13);?>"><img border="0" style="padding-top:4px;" src="<?php echo IMG_PATH;?>icon/2013022509503847.jpg"></a>
                <a title="棕色" href="<?php echo search_tag($catid,'','棕色',13);?>"><img border="0" style="padding-top:4px;" src="<?php echo IMG_PATH;?>icon/2013022509505195.jpg"></a>
                <a title="彩色" href="<?php echo search_tag($catid,'','彩色',13);?>"><img border="0" style="padding-top:4px;" src="<?php echo IMG_PATH;?>icon/2013022509510222.jpg"></a>
            </div>
            <div class="paixu word">
                <h1>按行业：</h1>
                <a class="red" href="<?php echo search_tag($catid,'','',13);?>">全部</a>
                <?php $n=1;if(is_array(get_tag_list(180))) foreach(get_tag_list(180) AS $tag) { ?>
                <a href="<?php echo search_tag($catid,$tag,'',13);?>"><?php echo $tag;?></a>
                <?php $n++;}unset($n); ?>
            </div>

            <div class="paixu word">
                <h1>按地区：</h1>
                <a class="red" href="<?php echo search_tag($catid,'','',13);?>">全部</a>
                <?php $n=1;if(is_array(get_tag_list(181))) foreach(get_tag_list(181) AS $tag) { ?>
                <a href="<?php echo search_tag($catid,'','',13,$tag);?>"><?php echo $tag;?>酷站</a>
                <?php $n++;}unset($n); ?>
            </div>
            <div class="paixu word">
                <h1>按类别：</h1>
                <a class="red" href="<?php echo search_tag($catid,'','',13);?>">全部</a>
                <?php $n=1;if(is_array(get_tag_list(182))) foreach(get_tag_list(182) AS $tag) { ?>
                <a href="<?php echo search_tag($catid,'','',13,'',$tag);?>"><?php echo $tag;?>酷站</a>
                <?php $n++;}unset($n); ?>
            </div>


            <div id="feedArea">


                <!--------feedarea------------>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=89f15d811f4dd14f00d42be1e7e0f269&action=lists&catid=%24catid&num=12&moreinfo=1&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 12;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'moreinfo'=>'1','order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'moreinfo'=>'1','order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                <div class="masonry">
                <?php $n=1;if(is_array($data)) foreach($data AS $vo) { ?>
                    <div id="blog_2113" class="box masonry-brick">
                        <div class="content" id="feedText_2113">
                            <div class="imgBox">
                                <a target="_blank" href="<?php echo $vo['url'];?>">
                                    <img title="" src="<?php echo thumb($vo[thumb],260,200);?>"
                                         degree="0">
                                </a>
                            </div>
                            <div class="title">
                                <a target="_blank" href="<?php echo $vo['url'];?>">
                                    <?php echo $vo['title'];?>
                                </a>
                            </div>
                            <div class="meta">
                                <?php echo do_str($vo[tag]);?> <?php echo do_str($vo[area]);?>酷站
                            </div>
                        </div>
                        <div class="clear">
                        </div>
                    </div>
                    <?php $n++;}unset($n); ?>
                    <div class="inline_box fix tj m_Grid1">
                        <div class="page_navi">
                            <?php echo $pages;?>
                        </div>
                    </div>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>


                    <!--------feedarea--------------->
                    <!--
                    <div id="feed_loading"></div>
                    <div id="feed_box"></div>
                    -->

                </div>


            </div>

        </div>


        <script>
            $(document).ready(function () {
                (function () {
                    var $backToTopTxt = "TOP", $backToTopEle = $('<div class="backToTop"></div>').appendTo($("body"))
                            .text($backToTopTxt).attr("title", $backToTopTxt).click(function () {
                                $("html, body").animate({ scrollTop: 0 }, 120);
                            }), $backToTopFun = function () {
                        var st = $(document).scrollTop(), winh = $(window).height();
                        (st > 0) ? $backToTopEle.show() : $backToTopEle.hide();
                        //IE6下的定位
                        if (!window.XMLHttpRequest) {
                            $backToTopEle.css("top", st + winh - 166);
                        }
                    };
                    var $closeLight = "关灯", $isLight = true, $lightEle = $('<div id="toggleLight"></div>').appendTo($("body")).text($closeLight).click(function () {
                        if ($isLight) {
                            $("#darkCss").attr("href", "<?php echo CSS_PATH;?>cool/dark.css");
                            $isLight = false;
                            $("#toggleLight").text("开灯");
                        } else {
                            $("#darkCss").attr("href", "");
                            $isLight = true;
                            $("#toggleLight").text("关灯");
                        }
                    });
                    $(window).bind("scroll", $backToTopFun);
                    $(function () {
                        $backToTopFun();
                    });
                })();
            });
        </script>
