<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!doctype html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
    <meta name="keywords" content="<?php echo $SEO['keyword'];?>">
    <meta name="description" content="<?php echo $SEO['description'];?>">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo CSS_PATH;?>cool/common.css" class="cssfx"/>
    <link href="<?php echo CSS_PATH;?>tool/style_13_css.css" rel="stylesheet" />
    <script type="text/javascript" src="<?php echo JS_PATH;?>jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo JS_PATH;?>tool/base.js"></script>
    <script type="text/javascript" src="<?php echo JS_PATH;?>tool/common.js"></script>
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
        <li class="active">css格式化</li>
    </ul>
    <div class="content">
        <div class="WSTitle">请将 <strong>CSS代码</strong> 复制到下面表单中:</div>
        <div class="toolcode">
            <!-- /工具开始 -->
            <script language="JavaScript">
                <!--
                function $() {
                    var elements = new Array();
                    for (var i = 0; i < arguments.length; i++) {
                        var element = arguments[i];
                        if (typeof element == 'string')
                            element = document.getElementById(element);
                        if (arguments.length == 1)
                            return element;
                        elements.push(element);
                    }
                    return elements;
                }
                function CSSencode(code)
                {
                    code = code.replace(/\r\n/ig,'');
                    code = code.replace(/(\s){2,}/ig,'$1');
                    code = code.replace(/\t/ig,'');
                    code = code.replace(/\n\}/ig,'\}');
                    code = code.replace(/\n\{\s*/ig,'\{');
                    code = code.replace(/(\S)\s*\}/ig,'$1\}');
                    code = code.replace(/(\S)\s*\{/ig,'$1\{');
                    code = code.replace(/\{\s*(\S)/ig,'\{$1');
                    return code;
                }
                function CSSdecode(code)
                {
                    code = code.replace(/(\s){2,}/ig,'$1');
                    code = code.replace(/(\S)\s*\{/ig,'$1 {');
                    code = code.replace(/\*\/(.[^\}\{]*)}/ig,'\*\/\n$1}');
                    code = code.replace(/\/\*/ig,'\n\/\*');
                    code = code.replace(/;\s*(\S)/ig,';\n\t$1');
                    code = code.replace(/\}\s*(\S)/ig,'\}\n$1');
                    code = code.replace(/\n\s*\}/ig,'\n\}');
                    code = code.replace(/\{\s*(\S)/ig,'\{\n\t$1');
                    code = code.replace(/(\S)\s*\*\//ig,'$1\*\/');
                    code = code.replace(/\*\/\s*([^\}\{]\S)/ig,'\*\/\n\t$1');
                    code = code.replace(/(\S)\}/ig,'$1\n\}');
                    code = code.replace(/(\n){2,}/ig,'\n');
                    code = code.replace(/:/ig,':');
                    code = code.replace(/  /ig,' ');
                    return code;
                }
                //-->
            </script>


            <textarea class="toolarea" id="code">
                #b {
                width:1200px;
                padding:0 12px;
                background:#FFF;
                position:relative
                }
                .l {
                width:844px;
                float:left;
                border-right:1px solid #DDD;
                padding-right:10px;
                position:relative
                }
                .m {
                width:670px;
                float:left;
                border-right:1px solid #DDD;
                padding-right:10px;
                position:relative
                }
                .r {
                width:336px;
                float:right;
                padding-bottom:200px
                }
                .topbg {
                height:30px;
                background:url(http://img.lanrentuku.com/img/images/a.png) repeat -20px 0
                }</textarea>
            <br/>
            <input class="bt-green btns" onclick="$('code').value = CSSencode($('code').value);" value="横向排列" type="button"><input class="bt-blue btns" onclick="$('code').value = CSSdecode($('code').value);" value="竖向排列" type="button">

            <!-- /工具结束 -->
        </div>
    </div>


    <!------body-------->


</div>






 
