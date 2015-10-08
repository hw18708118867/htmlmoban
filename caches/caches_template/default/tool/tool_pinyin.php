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
    <script type="text/javascript" src="<?php echo JS_PATH;?>tool/pinyin.js"></script>
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
        <li class="active">汉子转拼音</li>
    </ul>
    <div class="content">
        <div class="WSTitle">输入您要转换成拼音的汉语文字:</div>
        <div class="toolcode">
            <!-- /工具开始 -->
            <script type="text/javascript" src="<?php echo JS_PATH;?>tool/pinyin.js"></script>
            <script language="javascript">
                function trans(){
                    var cc=document.form1.code.value;
                    var str='',str2;
                    var s;
                    for(var i=0;i<cc.length;i++){
                        //alert(cc.charAt(i)+" = "+cc.charCodeAt(i));
                        if(pydic.indexOf(cc.charAt(i))!=-1&&cc.charCodeAt(i)>200){
                            s=1;
                            while(pydic.charAt(pydic.indexOf(cc.charAt(i))+s)!=","){
                                str+=pydic.charAt(pydic.indexOf(cc.charAt(i))+s);
                                s++;
                            }
                            str+=" ";
                        }
                        else{
                            str+=cc.charAt(i);
                        }
                    }
                    return str;
                }
                function resetAll(){
                    document.form1.code.value="";
                    document.form1.code2.value="";
                }
                //-->
            </script>
            <form name="form1">
                <p>
                    <textarea rows="6" name="code" class="toolarea" style="height:160px;font-size:24px">汉字转拼音工具。</textarea>
                </p>
                <p>
                    <input type="button" name="Submit" value="转换成拼音" class="bt-green btns" onclick="document.form1.code2.value=(trans())">
                    <input type="button" name="reset" value="清空" class="bt-grey btns" onclick="resetAll()">
                </p><br/><br/><br/>
                <p>转换后的拼音对照结果：</p>
                <p>
                    <textarea rows="6" name="code2" class="toolarea" style="height:160px;font-size:24px"></textarea>
                </p>
            </form>
            <!-- /工具结束 --></div>

    </div>
</div>






 