<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!doctype html>
<html lang="zh-cn">
<head>
<title>  dpcool店铺酷  电商设计灵感酷，电商设计联盟，电商设计欣赏，网店装修欣赏，淘宝装修设计欣赏 </title>
<meta charset="utf-8" />
<meta name="description" content="电商设计灵感酷 " />
<meta name="keywords" content="电商设计，电商交流，电商设计师，店铺设计，淘宝店装修，店铺欣赏电商设计联盟，电商设计欣赏，网店装修欣赏，淘宝装修设计欣赏、" />

<link rel="stylesheet" type="text/css" media="screen" href="<?php echo CSS_PATH;?>cool/common.css" class="cssfx"/>

<link rel="stylesheet" type="text/css" media="screen" href="" id="darkCss"/>
<!--[if lt IE 9]>
<script src="./js/css3-mediaqueries.js"></script>
<![endif]-->
<link type="text/css" rel="stylesheet" href="<?php echo CSS_PATH;?>style.css">
<script>
var urlpath = '';
var skinpath = '';

var uid = '';
var unit_3 = true;
	
</script>

<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.min.js"></script>
<link href="<?php echo CSS_PATH;?>cool/default.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo CSS_PATH;?>cool/page.css" />
 
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
<div class="Main2 constr  fix mt60 mb20">

 <div class="m_T1nl">
  <span>
				<div style="float: left;">
					当前位置：
				</div>

				<a href="<?php echo siteurl($siteid);?>">首页</a>

				&gt;

				<?php echo catpos($catid);?>

			   

				<?php echo $title;?>
			</span>
			 
 </div>
 <div class="cell main_l">

	 <div  class="main_l_box">
			



		 <!----box start----->
		 <div class="bm bw0 mt10">
			<h2 class="pages_title"><?php echo $title;?></h2>
		 </div>
		  <div class="pages_sitestatus tbmu cl">
			  <span class="xg1">点击: </span><span class="xi1">3765</span>
              <span class="pipe">|</span>
              <?php $cattype = array_filter(explode(',',$rs['tag']))?>
              <?php $n=1;if(is_array($cattype)) foreach($cattype AS $ct) { ?>
              <a href="<?php echo search_tag($catid,$ct,'',13);?>" title="<?php echo $ct;?>下载" rel="category tag"> <?php echo $ct;?> </a>
              <?php $n++;}unset($n); ?>
              <span class="pipe">|</span>
              <?php $styletype = array_filter(explode(',',$rs['style']))?>
              <?php $n=1;if(is_array($styletype)) foreach($styletype AS $ct) { ?>
              <a href="<?php echo search_tag($catid,'',$ct,13);?>" title="<?php echo $ct;?>下载" rel="category tag"> <?php echo $ct;?> </a>
              <?php $n++;}unset($n); ?>
			 </div>

		   <div class="pages_sitecontent clearfix">
		  <div class="siteimg" id="siteimg">


	 <ul class="clearfix">
			<?php $n=1;if(is_array($photo)) foreach($photo AS $r) { ?>
			 <li>
				<a href="javascript:void(0);" title="点击放<?php echo $r['alt'];?>图片" class="pages_img_p">
				<img id="aimg_1" zoomfile="<?php echo $r['url'];?>" file="<?php echo $r['url'];?>" inpost="1" onclick="zoom(this, '<?php echo $r['url'];?>')" alt="<?php echo $r['alt'];?>" src="<?php echo $r['url'];?>" initialized="true">
				</a>
				</li>
				<?php $n++;}unset($n); ?>

			  <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		</ul>

                  
				  <div id="sange">
						<div class="sange_1"><a title="点击直接进入该站点" rel="nofollow" class="da12" target="_blank" href="<?php echo $scan_url;?>">直接进入此酷站</a></div>
						<div class="sange_2"><a title="找达人建设此酷站" rel="nofollow" class="da12" href="#"><span class="url2">找达人建设此酷站</span></a></div>
						 
					 </div>
				</div>

				 


				   

				<div class="siteinfo" id="siteinfo">
				
				<h3>酷站信息</h3>
				<dl class="clearfix">
				<dt>名称:</dt>
				<dd><strong><?php echo $title;?></strong></dd>
				<!--dt>版次:</dt>
				<dd><strong>6</strong></dd-->
				 
				<dt>地址:</dt>
				<dd><span><a target="_blank" title="点击在新的页面浏览该酷站" href="go.html?tid=419"><?php echo $scan_url;?></a></span></dd>
				<dt>创建:</dt>
				<dd><?php echo $inputtime;?></dd>
				 
				<dt>分类:</dt>
				<dd> 
				 <?php $cattype = array_filter(explode(',',$rs['tag']))?>
							     <?php $n=1;if(is_array($cattype)) foreach($cattype AS $ct) { ?>
                                   <a href="<?php echo search_tag($catid,$ct,'',13);?>" title="<?php echo $ct;?>下载" rel="category tag"> <?php echo $ct;?> </a>
                                 <?php $n++;}unset($n); ?>
				</dd>
				<dt>描述:</dt>
				<dd><?php echo $content;?></dd>

				</dl>

				<div class="bugbot">
				<a target="_blank" rel="nofollow" class="bluebot" href="#">定制该网站</a>

				<a rel="nofollow" class="orangebot"  href="<?php echo $scan_url;?>" target="_blank">浏览该网站</a>
				</div>
				</div>
				</div>

<!--------box end--------->
	 </div>

 </div>

</div>




<?php include template("content","footer"); ?>