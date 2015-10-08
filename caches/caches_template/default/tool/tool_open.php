<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!doctype html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
    <meta name="keywords" content="<?php echo $SEO['keyword'];?>">
    <meta name="description" content="<?php echo $SEO['description'];?>">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo CSS_PATH;?>cool/common.css" class="cssfx"/>
  
	 
   
	 
 
<link href="<?php echo CSS_PATH;?>tool/style_13_tools_open.css" rel="stylesheet" />
 


  <script type="text/javascript" src="<?php echo JS_PATH;?>jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo JS_PATH;?>tool/base.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>tool/common.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>tool/open.js"></script>
 
 	 
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
            <li class="active">OPEN参数生成器</li>
        </ul>
        <div class="content">
            <div id="toolsBar" class="optionBar">
                <label class="inp cl" for="url">
                    <span>URL地址：</span>
                    <div style="width:500px;"><input id="url" type="text" value="http://"/></div>
                </label>
                <label class="inp cl" for="topinp">
                    <span>上边距：</span>
                    <div><input id="topinp" type="text"/></div>
                </label>
                <label class="inp cl" for="leftinp">
                    <span>左边距：</span>
                    <div><input id="leftinp" type="text"/></div>
                </label>
                <label class="inp cl" for="widthinp">
                    <span>宽度：</span>
                    <div><input id="widthinp" type="text"/></div>
                </label>
                <label class="inp cl" for="heightinp">
                    <span>高度：</span>
                    <div><input id="heightinp" type="text"/></div>
                </label>
                <label class="cl" for="wintype">
                    <input id="wintype" class="ck" type="checkbox"/>
                    本窗口打开
                </label>
                <label class="cl" for="toolbar">
                    <input id="toolbar" class="ck" type="checkbox"/>
                    工具栏
                </label>
                <label class="cl" for="locationbar">
                    <input id="locationbar" class="ck" type="checkbox"/>
                    地址栏
                </label>
                <label class="cl" for="statusbar">
                    <input id="statusbar" class="ck" type="checkbox"/>
                    状态栏
                </label>
                <label class="cl" for="menubar">
                    <input id="menubar" class="ck" type="checkbox"/>
                    菜单栏
                </label>
                <label class="cl" for="directoriesbt">
                    <input id="directoriesbt" class="ck" type="checkbox"/>
                    目录按钮
                </label>
                <label class="cl" for="resizable">
                    <input id="resizable" class="ck" type="checkbox"/>
                    调整大小
                </label>
                <label class="cl" for="scrollbar">
                    <input id="scrollbar" class="ck" type="checkbox"/>
                    滚动条
                </label>
            </div>
            <div id="code" class="textbox">
                <div><textarea id="codeinp">window.open();</textarea></div>
            </div>
            <div class="btnbar cl">
            	<a id="btclear" class="btns" href="javascript:void(0);" hidefocus="true">清空</a>
                <a id="btrun" class="btns" href="javascript:void(0);" hidefocus="true">运行</a>
                <a id="btcopy" class="btns hilite" href="javascript:void(0);" hidefocus="true">复制</a>
            </div>
        </div>
		<!------body-------->
 
	 
</div>

 
