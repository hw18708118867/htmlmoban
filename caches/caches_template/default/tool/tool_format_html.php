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
        <li class="active">JS/HTML格式化</li>
    </ul>
    <div class="content">
        <div class="WSTitle">请在下框输入您要转换的内容:</div>
        <div class="toolcode">
            <!-- /工具开始 -->
            <script type="text/javascript">function do_js_beautify() {
                document.getElementById('beautify').disabled = true;
                js_source = document.getElementById('content').value.replace(/^\s+/, '');
                tabsize = document.getElementById('tabsize').value;
                tabchar = ' ';
                if (tabsize == 1) {
                    tabchar = '\t';
                }
                if (js_source && js_source.charAt(0) === '<') {
                    document.getElementById('content').value = style_html(js_source, tabsize, tabchar, 80);
                } else {
                    document.getElementById('content').value = js_beautify(js_source, tabsize, tabchar);
                }
                document.getElementById('beautify').disabled = false;
                return false;
            }
            function pack_js(base64) {
                var input = document.getElementById('content').value;
                var packer = new Packer;
                if (base64) {
                    var output = packer.pack(input, 1, 0);
                } else {
                    var output = packer.pack(input, 0, 0);
                }
                document.getElementById('content').value = output;
            }
            function Empty() {
                document.getElementById('content').value = '';
                document.getElementById('content').select();
            }
            function GetFocus() {
                document.getElementById('content').focus();
            }
            </script>
            <form>
                <textarea class="toolarea" id="content" name="content">/*   粘贴你代码到这里并点击格式化按钮   */
/*   例如格式化以下这段代码   */
if('this_is'==/an_example/){do_something();}else{var a=b?(c%d):e[f];}
                </textarea>
                <select id="tabsize" class="btns" style="width: 110px" name="tabsize">
                    <option value="1">制表符缩进</option>
                    <option value="2">2个空格缩进</option>
                    <option selected="selected" value="4">4个空格缩进</option>
                    <option value="8">8个空格缩进</option>
                </select>
                <input id="beautify" class="bt-green btns" onclick="return do_js_beautify()" value="格式化代码" type="button">
                <input class="bt-blue btns" onclick="pack_js(0)" value="普通压缩" type="button">
                <input class="bt-blue btns" onclick="pack_js(1)" value="加密压缩" type="button">
                <input class="bt-grey btns" onclick="Empty();" value="清空结果" type="button">
            </form>

            <!-- /工具结束 --></div>
    </div>


    <!------body-------->


</div>






 
