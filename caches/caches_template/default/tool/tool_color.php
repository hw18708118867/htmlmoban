<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!doctype html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
    <meta name="keywords" content="<?php echo $SEO['keyword'];?>">
    <meta name="description" content="<?php echo $SEO['description'];?>">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo CSS_PATH;?>cool/common.css" class="cssfx"/>
    <link href="<?php echo CSS_PATH;?>tool/style_13_format_html.css" rel="stylesheet" />
    <script type="text/javascript" src="<?php echo JS_PATH;?>jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo JS_PATH;?>tool/base.js"></script>
    <script type="text/javascript" src="<?php echo JS_PATH;?>tool/common.js"></script>
    <script type="text/javascript" src="<?php echo JS_PATH;?>tool/jsformat.js"></script>
    <script type="text/javascript" src="<?php echo JS_PATH;?>tool/htmlformat.js"></script>
</head>

<body>

<div id="wrap" class="tool">
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


    <!----body-------------->
    <div id="navbar" class="cl">
        <a href="index.php?m=content&c=index&a=lists&catid=15" class="first">前端神器</a>
    </div>
    <div id="updateTips">您的浏览器版本太低，可能会导致部分工具无法正常使用，建议您 <a href="http://windows.microsoft.com/zh-cn/internet-explorer/download-ie" target="_blank">升级IE浏览器</a> 或使用 <a href="http://www.google.cn/intl/zh-CN/chrome/browser/" target="_blank">Chrome</a>、<a href="http://firefox.com.cn/download/" target="_blank">FireFox</a>、<a href="http://www.opera.com/" target="_blank">Opera</a> 浏览。</div>

    <ul id="tabs">
        <li class="active">颜色大全</li>
    </ul>
    <div class="content">
        <div class="WSTitle">小贴士：点击色块可快速复制颜色代码到剪贴板~</div>
        <div class="toolcode">
        <!-- /工具开始 -->
        <link rel="stylesheet" href="<?php echo CSS_PATH;?>tool/color-cnjp.css" type="text/css" media="all">
        <br>
        <div class="container clearfix">
            <ul>
                <li class="" style="background: rgb(112, 243, 255);"><a>蔚蓝<span>#70f3ff</span></a></li>
                <li class="" style="background: rgb(68, 206, 246);"><a>蓝<span>#44cef6</span></a></li>
                <li class="" style="background: rgb(62, 237, 231);"><a>碧蓝<span>#3eede7</span></a></li>
                <li class="white" style="background: rgb(22, 133, 169);"><a>石青<span>#1685a9</span></a></li>
                <li class="white" style="background: rgb(23, 124, 176);"><a>靛青<span>#177cb0</span></a></li>
                <li class="white" style="background: rgb(6, 82, 121);"><a>靛蓝<span>#065279</span></a></li>
                <li class="white" style="background: rgb(0, 52, 114);"><a>花青<span>#003472</span></a></li>
                <li class="white" style="background: rgb(75, 92, 196);"><a>宝蓝<span>#4b5cc4</span></a></li>
                <li class="white" style="background: rgb(161, 175, 201);"><a>蓝灰色<span>#a1afc9</span></a></li>
                <li class="white" style="background: rgb(46, 78, 126);"><a>藏青<span>#2e4e7e</span></a></li>
                <li class="white" style="background: rgb(59, 46, 126);"><a>藏蓝<span>#3b2e7e</span></a></li>
                <li class="white" style="background: rgb(74, 66, 102);"><a>黛<span>#4a4266</span></a></li>
                <li class="white" style="background: rgb(66, 102, 102);"><a>黛绿<span>#426666</span></a></li>
                <li class="white" style="background: rgb(66, 80, 102);"><a>黛蓝<span>#425066</span></a></li>
                <li class="white" style="background: rgb(87, 66, 102);"><a>黛紫<span>#574266</span></a></li>
                <li class="white" style="background: rgb(141, 75, 187);"><a>紫色<span>#8d4bbb</span></a></li>
                <li class="white" style="background: rgb(129, 84, 99);"><a>紫酱<span>#815463</span></a></li>
                <li class="white" style="background: rgb(129, 84, 118);"><a>酱紫<span>#815476</span></a></li>
                <li class="white" style="background: rgb(76, 34, 27);"><a>紫檀<span>#4c221b</span></a></li>
                <li class="white" style="background: rgb(0, 51, 113);"><a>绀青<span>#003371</span></a></li>
                <li class="white" style="background: rgb(86, 0, 79);"><a>紫棠<span>#56004f</span></a></li>
                <li class="white" style="background: rgb(128, 29, 174);"><a>青莲<span>#801dae</span></a></li>
                <li class="white" style="background: rgb(76, 141, 174);"><a>群青<span>#4c8dae</span></a></li>
                <li style="background: rgb(176, 164, 227);"><a>雪青<span>#b0a4e3</span></a></li>
                <li style="background: rgb(204, 164, 227);"><a>丁香色<span>#cca4e3</span></a></li>
                <li style="background: rgb(237, 209, 216);"><a>藕色<span>#edd1d8</span></a></li>
                <li style="background: rgb(228, 198, 208);"><a>藕荷色<span>#e4c6d0</span></a></li>
            </ul>
            <ul>
                <li class="white" style="background: rgb(255, 70, 31);"><a>朱砂<span>#ff461f</span></a></li>
                <li class="white" style="background: rgb(255, 45, 81);"><a>火红<span>#ff2d51</span></a></li>
                <li class="white" style="background: rgb(243, 104, 56);"><a>朱膘<span>#f36838</span></a></li>
                <li class="white" style="background: rgb(237, 87, 54);"><a>妃色<span>#ed5736</span></a></li>
                <li class="white" style="background: rgb(255, 71, 119);"><a>洋红<span>#ff4777</span></a></li>
                <li class="white" style="background: rgb(240, 0, 86);"><a>品红<span>#f00056</span></a></li>
                <li class="white" style="background: rgb(255, 179, 167);"><a>粉红<span>#ffb3a7</span></a></li>
                <li class="white" style="background: rgb(244, 121, 131);"><a>桃红<span>#f47983</span></a></li>
                <li class="white" style="background: rgb(219, 90, 107);"><a>海棠红<span>#db5a6b</span></a></li>
                <li class="white" style="background: rgb(201, 55, 86);"><a>樱桃色<span>#c93756</span></a></li>
                <li class="white" style="background: rgb(249, 144, 111);"><a>酡颜<span>#f9906f</span></a></li>
                <li class="white" style="background: rgb(240, 86, 84);"><a>银红<span>#f05654</span></a></li>
                <li class="white" style="background: rgb(255, 33, 33);"><a>大红<span>#ff2121</span></a></li>
                <li class="white" style="background: rgb(242, 12, 0);"><a>石榴红<span>#f20c00</span></a></li>
                <li class="white" style="background: rgb(140, 67, 86);"><a>绛紫<span>#8c4356</span></a></li>
                <li class="white" style="background: rgb(200, 60, 35);"><a>绯红<span>#c83c23</span></a></li>
                <li class="white" style="background: rgb(157, 41, 51);"><a>胭脂<span>#9d2933</span></a></li>
                <li class="white" style="background: rgb(255, 76, 0);"><a>朱红<span>#ff4c00</span></a></li>
                <li class="white" style="background: rgb(255, 78, 32);"><a>丹<span>#ff4e20</span></a></li>
                <li class="white" style="background: rgb(243, 83, 54);"><a>彤<span>#f35336</span></a></li>
                <li class="white" style="background: rgb(220, 48, 35);"><a>酡红<span>#dc3023</span></a></li>
                <li class="white" style="background: rgb(255, 51, 0);"><a>炎<span>#ff3300</span></a></li>
                <li class="white" style="background: rgb(203, 58, 86);"><a>茜色<span>#cb3a56</span></a></li>
                <li class="white" style="background: rgb(169, 129, 117);"><a>绾<span>#a98175</span></a></li>
                <li class="white" style="background: rgb(179, 109, 97);"><a>檀<span>#b36d61</span></a></li>
                <li class="white" style="background: rgb(239, 122, 130);"><a>嫣红<span>#ef7a82</span></a></li>
                <li class="white" style="background: rgb(255, 0, 151);"><a>洋红<span>#ff0097</span></a></li>
                <li class="white" style="background: rgb(195, 33, 54);"><a>枣红<span>#c32136</span></a></li>
                <li class="white" style="background: rgb(190, 0, 47);"><a>殷红<span>#be002f</span></a></li>
                <li class="white" style="background: rgb(201, 31, 55);"><a>赫赤<span>#c91f37</span></a></li>
                <li class="white" style="background: rgb(191, 36, 42);"><a>银朱<span>#bf242a</span></a></li>
                <li class="white" style="background: rgb(195, 39, 43);"><a>赤<span>#c3272b</span></a></li>
                <li class="white" style="background: rgb(157, 41, 51);"><a>胭脂<span>#9d2933</span></a></li>
                <li class="white" style="background: rgb(96, 40, 30);"><a>栗色<span>#60281e</span></a></li>
                <li class="white" style="background: rgb(98, 42, 29);"><a>玄色<span>#622a1d</span></a></li>
            </ul>
            <ul>
                <li style="background: rgb(188, 230, 114);"><a>松花色<span>#bce672</span></a></li>
                <li style="background: rgb(201, 221, 34);"><a>柳黄<span>#c9dd22</span></a></li>
                <li style="background: rgb(189, 221, 34);"><a>嫩绿<span>#bddd22</span></a></li>
                <li style="background: rgb(175, 221, 34);"><a>柳绿<span>#afdd22</span></a></li>
                <li style="background: rgb(163, 217, 0);"><a>葱黄<span>#a3d900</span></a></li>
                <li class="" style="background: rgb(158, 217, 0);"><a>葱绿<span>#9ed900</span></a></li>
                <li style="background: rgb(158, 208, 72);"><a>豆绿<span>#9ed048</span></a></li>
                <li style="background: rgb(150, 206, 84);"><a>豆青<span>#96ce54</span></a></li>
                <li style="background: rgb(0, 188, 18);"><a>油绿<span>#00bc12</span></a></li>
                <li style="background: rgb(14, 184, 58);"><a>葱倩<span>#0eb83a</span></a></li>
                <li style="background: rgb(14, 184, 58);"><a>葱青<span>#0eb83a</span></a></li>

                <li style="background: rgb(10, 163, 68);"><a>青葱<span>#0aa344</span></a></li>
                <li class="white" style="background: rgb(22, 169, 81);"><a>石绿<span>#16a951</span></a></li>
                <li class="white" style="background: rgb(33, 166, 117);"><a>松柏绿<span>#21a675</span></a></li>
                <li class="white" style="background: rgb(5, 119, 72);"><a>松花绿<span>#057748</span></a></li>
                <li class="white" style="background: rgb(12, 137, 24);"><a>绿沈<span>#0c8918</span></a></li>

                <li style="background: rgb(0, 229, 0);"><a>绿色<span>#00e500</span></a></li>
                <li style="background: rgb(64, 222, 90);"><a>草绿<span>#40de5a</span></a></li>
                <li style="background: rgb(0, 224, 121);"><a>青翠<span>#00e079</span></a></li>
                <li style="background: rgb(0, 224, 158);"><a>青色<span>#00e09e</span></a></li>
                <li style="background: rgb(61, 225, 173);"><a>翡翠色<span>#3de1ad</span></a></li>
                <li class="" style="background: rgb(42, 221, 156);"><a>碧绿<span>#2add9c</span></a></li>
                <li style="background: rgb(46, 223, 163);"><a>玉色<span>#2edfa3</span></a></li>
                <li style="background: rgb(127, 236, 173);"><a>缥<span>#7fecad</span></a></li>
                <li style="background: rgb(164, 226, 198);"><a>艾绿<span>#a4e2c6</span></a></li>
                <li style="background: rgb(123, 207, 166);"><a>石青<span>#7bcfa6</span></a></li>
                <li style="background: rgb(27, 209, 165);"><a>碧色<span>#1bd1a5</span></a></li>
                <li style="background: rgb(72, 192, 163);"><a>青碧<span>#48c0a3</span></a></li>
                <li style="background: rgb(84, 150, 136);"><a>铜绿<span>#549688</span></a></li>
                <li class="" style="background: rgb(120, 146, 98);"><a>竹青<span>#789262</span></a></li>
                <li class="white" style="background: rgb(117, 138, 153);"><a>墨灰<span>#758a99</span></a></li>
                <li class="white" style="background: rgb(80, 97, 109);"><a>墨色<span>#50616d</span></a></li>
                <li class="white" style="background: rgb(66, 76, 80);"><a>鸦青<span>#424c50</span></a></li>
                <li class="white" style="background: rgb(65, 85, 93);"><a>黯<span>#41555d</span></a></li>
            </ul>
            <ul>
                <li style="background: rgb(234, 255, 86);"><a>樱草色<span>#eaff56</span></a></li>
                <li style="background: rgb(255, 241, 67);"><a>鹅黄<span>#fff143</span></a></li>
                <li style="background: rgb(250, 255, 114);"><a>鸭黄<span>#faff72</span></a></li>
                <li style="background: rgb(255, 166, 49);"><a>杏黄<span>#ffa631</span></a></li>
                <li class="white" style="background: rgb(255, 164, 0);"><a>橙黄<span>#ffa400</span></a></li>
                <li class="white" style="background: rgb(250, 140, 53);"><a>橙色<span>#fa8c35</span></a></li>
                <li style="background: rgb(255, 140, 49);"><a>杏红<span>#ff8c31</span></a></li>
                <li style="background: rgb(255, 137, 54);"><a>橘黄<span>#ff8936</span></a></li>
                <li style="background: rgb(255, 117, 0);"><a>橘红<span>#ff7500</span></a></li>
                <li style="background: rgb(255, 182, 30);"><a>藤黄<span>#ffb61e</span></a></li>
                <li style="background: rgb(255, 199, 115);"><a>姜黄<span>#ffc773</span></a></li>
                <li style="background: rgb(255, 198, 75);"><a>雌黄<span>#ffc64b</span></a></li>
                <li style="background: rgb(242, 190, 69);"><a>赤金<span>#f2be45</span></a></li>
                <li style="background: rgb(240, 194, 57);"><a>缃色<span>#f0c239</span></a></li>
                <li style="background: rgb(233, 187, 29);"><a>雄黄<span>#e9bb1d</span></a></li>
                <li style="background: rgb(217, 182, 17);"><a>秋香色<span>#d9b611</span></a></li>
                <li style="background: rgb(234, 205, 118);"><a>金色<span>#eacd76</span></a></li>
                <li style="background: rgb(238, 222, 176);"><a>牙色<span>#eedeb0</span></a></li>
                <li style="background: rgb(211, 177, 125);"><a>枯黄<span>#d3b17d</span></a></li>
                <li class="white" style="background: rgb(226, 156, 69);"><a>黄栌<span>#e29c45</span></a></li>
                <li style="background: rgb(167, 142, 68);"><a>乌金<span>#a78e44</span></a></li>
                <li class="white" style="background: rgb(200, 155, 64);"><a>昏黄<span>#c89b40</span></a></li>
                <li class="white" style="background: rgb(174, 112, 0);"><a>棕黄<span>#ae7000</span></a></li>
                <li class="white" style="background: rgb(202, 105, 36);"><a>琥珀<span>#ca6924</span></a></li>
                <li class="white" style="background: rgb(178, 93, 37);"><a>棕色<span>#b25d25</span></a></li>
                <li class="white" style="background: rgb(179, 92, 68);"><a>茶色<span>#b35c44</span></a></li>
                <li class="white" style="background: rgb(155, 68, 0);"><a>棕红<span>#9b4400</span></a></li>
                <li class="white" style="background: rgb(156, 83, 51);"><a>赭<span>#9c5333</span></a></li>
                <li class="white" style="background: rgb(168, 132, 98);"><a>驼色<span>#a88462</span></a></li>
                <li class="white" style="background: rgb(137, 108, 57);"><a>秋色<span>#896c39</span></a></li>
                <li class="white" style="background: rgb(130, 113, 0);"><a>棕绿<span>#827100</span></a></li>
                <li class="white" style="background: rgb(110, 81, 30);"><a>褐色<span>#6e511e</span></a></li>
                <li class="white" style="background: rgb(124, 75, 0);"><a>棕黑<span>#7c4b00</span></a></li>
                <li class="white" style="background: rgb(149, 85, 57);"><a>赭色<span>#955539</span></a></li>
                <li class="white" style="background: rgb(132, 90, 51);"><a>赭石<span>#845a33</span></a></li>
            </ul>
            <ul>
                <li style="background: rgb(255, 255, 255);"><a>精白<span>#ffffff</span></a></li>
                <li style="background: rgb(233, 231, 239);"><a>银白<span>#e9e7ef</span></a></li>
                <li style="background: rgb(240, 240, 244);"><a>铅白<span>#f0f0f4</span></a></li>
                <li style="background: rgb(233, 241, 246);"><a>霜色<span>#e9f1f6</span></a></li>
                <li style="background: rgb(240, 252, 255);"><a>雪白<span>#f0fcff</span></a></li>
                <li style="background: rgb(227, 249, 253);"><a>莹白<span>#e3f9fd</span></a></li>
                <li style="background: rgb(214, 236, 240);"><a>月白<span>#d6ecf0</span></a></li>
                <li style="background: rgb(255, 251, 240);"><a>象牙白<span>#fffbf0</span></a></li>
                <li style="background: rgb(242, 236, 222);"><a>缟<span>#f2ecde</span></a></li>
                <li style="background: rgb(252, 239, 232);"><a>鱼肚白<span>#fcefe8</span></a></li>
                <li style="background: rgb(255, 242, 223);"><a>白粉<span>#fff2df</span></a></li>
                <li style="background: rgb(243, 249, 241);"><a>荼白<span>#f3f9f1</span></a></li>
                <li style="background: rgb(224, 238, 232);"><a>鸭卵青<span>#e0eee8</span></a></li>
                <li style="background: rgb(224, 240, 233);"><a>素<span>#e0f0e9</span></a></li>
                <li style="background: rgb(192, 235, 215);"><a>青白<span>#c0ebd7</span></a></li>
                <li style="background: rgb(187, 205, 197);"><a>蟹壳青<span>#bbcdc5</span></a></li>
                <li style="background: rgb(194, 204, 208);"><a>花白<span>#c2ccd0</span></a></li>
                <li style="background: rgb(186, 202, 198);"><a>老银<span>#bacac6</span></a></li>
                <li class="white" style="background: rgb(128, 128, 128);"><a>灰色<span>#808080</span></a></li>
                <li class="white" style="background: rgb(117, 135, 138);"><a>苍色<span>#75878a</span></a></li>

                <li class="white" style="background: rgb(136, 173, 166);"><a>水色<span>#88ada6</span></a></li>

                <li class="white" style="background: rgb(107, 104, 130);"><a>黝<span>#6b6882</span></a></li>
                <li class="white" style="background: rgb(114, 94, 130);"><a>乌色<span>#725e82</span></a></li>
                <li class="white" style="background: rgb(61, 59, 79);"><a>玄青<span>#3d3b4f</span></a></li>
                <li class="white" style="background: rgb(57, 47, 65);"><a>乌黑<span>#392f41</span></a></li>
                <li class="white" style="background: rgb(117, 102, 77);"><a>黎<span>#75664d</span></a></li>
                <li class="white" style="background: rgb(93, 81, 60);"><a>黧<span>#5d513c</span></a></li>
                <li class="white" style="background: rgb(102, 87, 87);"><a>黝黑<span>#665757</span></a></li>
                <li class="white" style="background: rgb(73, 49, 49);"><a>缁色<span>#493131</span></a></li>
                <li class="white" style="background: rgb(49, 37, 32);"><a>煤黑<span>#312520</span></a></li>
                <li class="white" style="background: rgb(22, 24, 35);"><a>漆黑<span>#161823</span></a></li>
                <li class="white" style="background: rgb(0, 0, 0);"><a>黑色<span>#000000</span></a></li>
            </ul>
        </div>
        <div id="tester">√ 已复制</div>
        <script src="<?php echo JS_PATH;?>tool/ZeroClipboard.min.js"></script>
        <script type="text/javascript">
            $(function(){
                function clipCallback(client) {
                    var text = $.trim($(this).find('span').html());
                    client.setText(text);
                    var parent = $(this);
                    var pos = parent.position();
                    var tester = $('#tester');
                    if(parent.hasClass('white')){
                        tester.addClass('white');
                    } else {
                        tester.removeClass('white');
                    }
                    tester.show().css({opacity:1,left:pos.left,top:pos.top}).stop().animate({
                        opacity: 0,
                        top: '-=20'
                    },function(){
                        $(this).hide();
                    });
                }
                $('.container ul li').each(function(){
                    var color = $('span', this).text();
                    $(this).css('background', color);
                    var span = $('span',this);
                    var clip = new ZeroClipboard($(this)[0], {moviePath: "js/ZeroClipboard.swf"});
                    clip.on('mousedown', clipCallback);
                    if(navigator.userAgent.indexOf('Firefox') !=-1) {
                        $(clip.htmlBridge).css('opacity',0);
                    }
                });
            });
        </script>
        <!-- /工具结束 --></div>



    </div>
</div>






 
