<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!doctype html>
<html lang="zh-cn">
<head>
    <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?> </title>
    <meta charset="utf-8" />
    <meta name="description" content="<?php echo $SEO['description'];?>" />
    <meta name="keywords" content="<?php echo $SEO['keyword'];?>" />
     
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo CSS_PATH;?>cool/common.css" class="cssfx"/>
  
	 
   
	 
 
<link href="<?php echo CSS_PATH;?>tool/style_14_tools_compression.css" rel="stylesheet" />

 <script type="text/javascript" src="<?php echo JS_PATH;?>jquery.min.js"></script>
 <script type="text/javascript" src="<?php echo JS_PATH;?>tool/common.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>tool/base64.js"></script>
 	 
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
    </div>
<div id="updateTips">您的浏览器版本太低，可能会导致部分工具无法正常使用，建议您 <a href="http://windows.microsoft.com/zh-cn/internet-explorer/download-ie" target="_blank">升级IE浏览器</a> 或使用 <a href="http://www.google.cn/intl/zh-CN/chrome/browser/" target="_blank">Chrome</a>、<a href="http://firefox.com.cn/download/" target="_blank">FireFox</a>、<a href="http://www.opera.com/" target="_blank">Opera</a> 浏览。</div>
        

		<ul id="tabs">
            <li class="active">base64</li>
        </ul>
        <div class="content">
            <div id="code" class="textbox">
                <div><textarea id="codeinp">将代码粘贴在此进行即可加解密！</textarea></div>
            </div>
            <div class="btnbar cl">
            	<a id="btclear" class="btns" href="javascript:void(0);" hidefocus="true">清空</a>
                <a id="btencode" class="btns kl" href="javascript:void(0);" hidefocus="true">加密</a>
                <a id="btdecode" class="btns kr" href="javascript:void(0);" hidefocus="true">解密</a>
                <a id="btcopy" class="btns hilite" href="javascript:void(0);" hidefocus="true">复制</a>
            </div>
        </div>
		<!------body-------->
 
	 
</div>

 
