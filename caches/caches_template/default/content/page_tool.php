<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!doctype html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
    <meta name="keywords" content="<?php echo $SEO['keyword'];?>">
    <meta name="description" content="<?php echo $SEO['description'];?>">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo CSS_PATH;?>cool/common.css" class="cssfx"/>

<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.min.js"></script>
<link href="<?php echo CSS_PATH;?>tool/tools_index.css" rel="stylesheet" />
 
<script type="text/javascript" src="<?php echo JS_PATH;?>tool/index.js"></script>
 	 
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
        <div id="content" class="cl">
            <dl class="toollist cl">
                <dt>文字处理 & 色彩</dt>
                <dd>
                    <a href="<?php echo tool_url('Aa');?>" hidefocus="true">
                        <i></i>
                        <img alt="字母大小写转换" src="<?php echo IMG_PATH;?>tools/icon/Aa.png"/>
                        <span>字母大小写转换</span>
                    </a>
                </dd>
                <dd>
                    <a href="<?php echo tool_url('fantizi');?>" hidefocus="true">
                        <i></i>
                        <img alt="繁体字转化工具" src="<?php echo IMG_PATH;?>tools/icon/fantizi.png"/>
                        <span>繁体字转化工具</span>
                    </a>
                </dd>
                <dd>
                    <a href="<?php echo tool_url('huoxinwen');?>" hidefocus="true">
                        <i></i>
                        <img alt="火星文转化工具" src="<?php echo IMG_PATH;?>tools/icon/huoxingwen.png"/>
                        <span>火星文转化工具</span>
                    </a>
                </dd>
                <dd>
                    <a href="<?php echo tool_url('fontcount');?>" hidefocus="true">
                        <i></i>
                        <img alt="在线字数统计工具" src="<?php echo IMG_PATH;?>tools/icon/fontcount.png"/>
                        <span>在线字数统计工具</span>
                    </a>
                </dd>
                <dd>
                    <a href="<?php echo tool_url('pinyin');?>" hidefocus="true">
                        <i></i>
                        <img alt="汉字转拼音工具" src="<?php echo IMG_PATH;?>tools/icon/pinyin.png"/>
                        <span>汉字转拼音工具</span>
                    </a>
                </dd>
                <dd>
                    <a href="<?php echo tool_url('color');?>" hidefocus="true">
                        <i></i>
                        <img alt="Color大全" src="<?php echo IMG_PATH;?>tools/icon/color.png"/>
                        <span>Color大全</span>
                    </a>
                </dd>
            </dl>
            <dl class="toollist cl">
                <dt>代码转换 & 格式化工具</dt>
                <dd>
                    <a href="<?php echo tool_url('htmlTojs');?>" hidefocus="true">
                        <i></i>
                        <img alt="Html/Js互转" src="<?php echo IMG_PATH;?>tools/icon/htmljs.png"/>
                        <span>Html/Js互转</span>
                    </a>
                </dd>
                <dd>
                    <a href="<?php echo tool_url('css');?>" hidefocus="true">
                        <i></i>
                        <img alt="css格式化工具" src="<?php echo IMG_PATH;?>tools/icon/css.png"/>
                        <span>css格式化工具</span>
                    </a>
                </dd>
                <dd>
                    <a href="<?php echo tool_url('format_html');?>" hidefocus="true">
                        <i></i>
                        <img alt="Js/Html格式化工具" src="<?php echo IMG_PATH;?>tools/icon/format_html.png"/>
                        <span>Js/Html格式化工具</span>
                    </a>
                </dd>
                <dd>
                    <a href="<?php echo tool_url('js');?>" hidefocus="true">
                        <i></i>
                        <img alt="JS/CSS代码压缩" src="<?php echo IMG_PATH;?>tools/icon/compression.png"/>
                        <span>JS/CSS代码压缩</span>
                    </a>
                </dd>
            </dl>
            <dl class="toollist cl">
                <dt>加密解密工具</dt>
                <dd>
                    <a href="<?php echo tool_url('unicode');?>" hidefocus="true">
                        <i></i>
                        <img alt="Unicode编码转换" src="<?php echo IMG_PATH;?>tools/icon/unicode.png"/>
                        <span>Unicode编码转换</span>
                    </a>
                </dd>
                <dd>
                    <a href="<?php echo tool_url('base64');?>" hidefocus="true">
                        <i></i>
                        <img alt="BASE64加解密" src="<?php echo IMG_PATH;?>tools/icon/base64.png"/>
                        <span>BASE64加解密</span>
                    </a>
                </dd>
                <dd>
                    <a href="<?php echo tool_url('escape');?>" hidefocus="true">
                        <i></i>
                        <img alt="ESCAPE加解密" src="<?php echo IMG_PATH;?>tools/icon/escape.png"/>
                        <span>ESCAPE加解密</span>
                    </a>
                </dd>
                <dd>
                    <a href="<?php echo tool_url('md5');?>" hidefocus="true">
                        <i></i>
                        <img alt="MD5加密" src="<?php echo IMG_PATH;?>tools/icon/md5.png"/>
                        <span>MD5加密</span>
                    </a>
                </dd>
            </dl>
            <dl class="toollist cl">
                <dt>代码处理 &amp; 调试工具</dt>

                <dd>
                    <a href="<?php echo tool_url('open');?>" hidefocus="true">
                        <i></i>
                        <img alt="OPEN参数生成器" src="<?php echo IMG_PATH;?>tools/icon/open.png"/>
                        <span>OPEN参数生成器</span>
                    </a>
                </dd>
                <dd>
                    <a href="<?php echo tool_url('runcode');?>" hidefocus="true">
                        <i></i>
                        <img alt="在线运行" src="<?php echo IMG_PATH;?>tools/icon/runcode.png"/>
                        <span>在线运行</span>
                    </a>
                </dd>

            </dl>
            <!--<dl class="toollist cl">
                <dt>常用手册</dt>
                <dd>
                    <a href="<?php echo tool_url('base64');?>" hidefocus="true">
                        <i></i>
                        <img alt="CSS参考手册" src="<?php echo IMG_PATH;?>tools/icon/shouce.png"/>
                        <span>CSS参考手册</span>
                    </a>
                </dd>
<dd>
                    <a href="<?php echo tool_url('base64');?>" hidefocus="true">
                        <i></i>
                        <img alt="JavaScript 参考手册" src="<?php echo IMG_PATH;?>tools/icon/shouce.png"/>
                        <span>JS参考手册</span>
                    </a>
                </dd>
                <dd>
                    <a href="<?php echo tool_url('base64');?>" hidefocus="true">
                        <i></i>
                        <img alt="jQuery 1.10.3 参考手册" src="<?php echo IMG_PATH;?>tools/icon/shouce.png"/>
                        <span>jQuery参考手册</span>
                    </a>
                </dd>
                <dd>
                    <a href="<?php echo tool_url('base64');?>" hidefocus="true">
                        <i></i>
                        <img alt="HTML5 参考手册" src="<?php echo IMG_PATH;?>tools/icon/shouce.png"/>
                        <span>HTML5参考手册</span>
                    </a>
                </dd>
<dd>
                    <a href="<?php echo tool_url('base64');?>" hidefocus="true">
                        <i></i>
                        <img alt="Node.Js参考手册" src="<?php echo IMG_PATH;?>tools/icon/shouce.png"/>
                        <span>Node.Js参考手册</span>
                    </a>
                </dd>
<dd>
                    <a href="<?php echo tool_url('base64');?>" hidefocus="true">
                        <i></i>
                        <img alt="屏幕尺寸参考手册" src="<?php echo IMG_PATH;?>tools/icon/shouce.png"/>
                        <span>屏幕尺寸参考手册</span>
                    </a>
                </dd>
             </dl>-->
        </div>
		<!------body-------->
 
	 
</div>

 
