<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!doctype html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
    <meta name="keywords" content="<?php echo $SEO['keyword'];?>">
    <meta name="description" content="<?php echo $SEO['description'];?>">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo CSS_PATH;?>cool/common.css" class="cssfx"/>
  
	 
   
	 
 
<link href="<?php echo CSS_PATH;?>tool/style_13_tools_compression.css" rel="stylesheet" />
 


  <script type="text/javascript" src="<?php echo JS_PATH;?>jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo JS_PATH;?>tool/base.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>tool/common.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>tool/jsformat.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>tool/format.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>tool/compression.js"></script>
 	 
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
    <a href="tools.php" class="first">前端神器</a>
	<a >JavaScript/CSS代码压缩<i></i></a>
    </div>
<div id="updateTips">您的浏览器版本太低，可能会导致部分工具无法正常使用，建议您 <a href="http://windows.microsoft.com/zh-cn/internet-explorer/download-ie" target="_blank">升级IE浏览器</a> 或使用 <a href="http://www.google.cn/intl/zh-CN/chrome/browser/" target="_blank">Chrome</a>、<a href="http://firefox.com.cn/download/" target="_blank">FireFox</a>、<a href="http://www.opera.com/" target="_blank">Opera</a> 浏览。</div>
        

		<ul id="tabs">
            <li class="active">JavaScript</li>
            <li>CSS</li>
        </ul>
        <div class="content">
    
           <label id="lbcode" for="inpcode">将代码粘贴到下方输入框中：</label>
            <div id="code" class="textbox"><div><textarea id="content"></textarea></div></div>
            <div id="loading"></div>
            <p id="infobar">
            	<span><b>现体积：</b><i>0</i></span>
                <span><b>原体积：</b><i>0</i></span>
                <span><b>压缩率：</b><i>0%</i></span>
            </p>
            <div class="btnbar cl">
			    <select name="tabsize" id="tabsize">
              <option value="1">
                制表符缩进
              </option>
              <option value="2">
                2个空格缩进
              </option>
              <option value="4" selected="selected">
                4个空格缩进
              </option>
              <option value="8">
                8个空格缩进
              </option>
            </select>
            	<a id="beautify" class="btns kl" onclick="return pack_js(0)" href="javascript:void(0);" hidefocus="true">压缩</a>
                <a id="codeBeautify" class="btns kr" onclick="return do_js_beautify()" href="javascript:void(0);" hidefocus="true">美化</a>
                <a id="evalEncode" class="evalcode btns kl" href="javascript:void(0);" hidefocus="true">Eval混淆</a>
                <a id="evalDecode" class="evalcode btns kr" href="javascript:void(0);" hidefocus="true">Eval解混淆</a>
                <a id="copycode" class="btns hilite" href="javascript:void(0);" hidefocus="true">复制代码</a>
            </div>
    <div id="rateTip">如压缩后的文件比原文件体积大，这是很正常的，比如：您的JS中包含很多中文（压缩的过程中会将中文进行转码，这样可以保证代码不会出现中文乱码，比如“压缩”这两个字会转化为“\u538b\u7f29”也就说转码后的汉字是原来的3倍大），这个时候再通过eval混淆文件则会变的更小！</div>
        </div>
		<!------body-------->
 
	 
</div>

 
