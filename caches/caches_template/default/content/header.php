<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
		<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
		<meta name="description" content="<?php echo $SEO['description'];?>">
        
        <link type="text/css" rel="stylesheet" href="<?php echo CSS_PATH;?>style.css">
        <script type="text/javascript" src="<?php echo JS_PATH;?>jquery.min.js">
        </script>

		    <!--[if lte IE 7]>
			<script>
			 
	 
				var oStyle = document.createElement("style");
				oStyle.type = "text/css";
				oStyle.styleSheet.cssText = ".constr{width:1300px;}";	
				document.getElementsByTagName("head")[0].appendChild(oStyle);
			 
			</script>
			<![endif]-->
    </head>
    
    <body class="zzt2014" screen_capture_injected="true">
        <div class="header">
  <div class="topM sline fix">
    <div class="OfcardLogo"><a href="/"><img src="<?php echo IMG_PATH;?>logo.png" /></a></div>
    <div class="searchBar">
      <div class="searchVInput">
        <form target="_blank" id="fo" name="formsearch" method="post" action="/plus/search.php">
          <a href="javascript:document.getElementById('fo').submit()">搜索</a>
          <div>
            <input type="text" autocomplete="off" name="q" id="cardname" class="cardnameV">
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="navigationBar">
    <div class="navigationBarInnel"> <tt title="所有素材分类"><div class="push_t" id="of_mainBody" style="display: none;">
  <div class="side_small tag_line fl">
    <div class="mainProNav">
      <dl class="navM1">
        <dd>
          <h2><a href="/JS/">JS网页代码</a></h2>
          <p><a target="_blank" href="http://www.zztuku.com/Web/">DIV+CSS</a><a target="_blank" href="http://www.zztuku.com/JS/Focus/">焦点图</a><a target="_blank" href="http://www.zztuku.com/JS/Navigation/">菜单导航</a><a target="_blank" href="http://www.zztuku.com/JS/Picture/">图片特效</a><a target="_blank" href="http://www.zztuku.com/JS/Button/">表单按钮</a><a target="_blank" href="http://www.zztuku.com/JS/Advertising/">广告特效</a><a class="more" href="/JS/">查看更多...</a></p>
          <div class="cl"></div>
          <h6><a href="javascript:;">热门搜索</a></h6>
          <p><a target="_blank" href="http://www.zztuku.com/tags/jQuery.html">jQuery</a><a target="_blank" href="http://www.zztuku.com/tags/Flash.html">Flash</a><a target="_blank" href="http://www.zztuku.com/tags/%E7%84%A6%E7%82%B9%E5%9B%BE.html">焦点图</a><a target="_blank" href="http://www.zztuku.com/tags/JS%E4%BB%A3%E7%A0%81.html">JS代码</a><a target="_blank" href="http://www.zztuku.com/tags/%E7%89%B9%E6%95%88.html">特效</a><a target="_blank" href="http://www.zztuku.com/tags/flash%2Bxml.html">flash+xml</a><a target="_blank" href="http://www.zztuku.com/tags/%E5%88%87%E6%8D%A2.html">切换</a><a target="_blank" href="http://www.zztuku.com/tags/%E5%9B%BE%E7%89%87%E5%88%87%E6%8D%A2.html">图片切换</a><a target="_blank" href="http://www.zztuku.com/tags/%E5%B9%BB%E7%81%AF.html">幻灯</a><a target="_blank" href="http://www.zztuku.com/tags/JS%E5%B9%BF%E5%91%8A%E4%BB%A3%E7%A0%81.html">JS广告代码</a><a target="_blank" href="http://www.zztuku.com/tags/JS%E7%89%B9%E6%95%88%E4%BB%A3%E7%A0%81.html">JS特效代码</a><a target="_blank" href="http://www.zztuku.com/tags/%E7%AB%99%E9%95%BF%E5%9B%BE%E5%BA%93.html">站长图库</a><a class="more" href="/JS/">查看更多...</a></p>
          <div class="cl"></div>
          <h5>上面没找到，别漏了这些哦。</h5>
          <ul>
          	<li><a target="_blank" href="http://www.zztuku.com/JS/Navigation/20150517_12726.html">jQuery环形图标菜单旋转</a></li>
<li><a target="_blank" href="http://www.zztuku.com/Web/20140611_12685.html">房屋租赁后台管理模板</a></li>
<li><a target="_blank" href="http://www.zztuku.com/Web/20140611_12684.html">深绿色扁平排版HTML模板</a></li>
<li><a target="_blank" href="http://www.zztuku.com/JS/Navigation/20140611_12680.html">jquery猎豹安全网购导航</a></li>
<li><a target="_blank" href="http://www.zztuku.com/JS/Focus/20140611_12679.html">迅雷jQuery横向擦除焦点</a></li>
<li><a target="_blank" href="http://www.zztuku.com/JS/Button/20140611_12678.html">CSS3扁平化风格联系表单</a></li>

          </ul>
        </dd>
        <dt>JS网页代码</dt>
      </dl>
      <dl class="navM2">
        <dd>
          <h2><a href="/Tuku/">图片设计素材</a></h2>
          <p><a target="_blank" href="http://www.zztuku.com/Vector/">矢量素材</a><a target="_blank" href="http://www.zztuku.com/PNG/">PNG图标</a><a target="_blank" href="http://www.zztuku.com/PSD/">PSD分层</a><a target="_blank" href="http://www.zztuku.com/Animation/">动画素材</a><a target="_blank" href="http://www.zztuku.com/3D/">3D素材</a><a target="_blank" href="http://www.zztuku.com/Background/">背景图片</a><a class="more" href="/Tuku/">查看更多...</a></p>
          <h6><a href="javascript:;">热门搜索</a></h6>
          <p><a target="_blank" href="http://www.zztuku.com/tags/%E6%A8%A1%E6%9D%BF.html">模板</a><a target="_blank" href="http://www.zztuku.com/tags/%E6%96%87%E6%9C%AC%E8%83%8C%E6%99%AF.html">文本背景</a><a target="_blank" href="http://www.zztuku.com/tags/banner.html">banner</a><a target="_blank" href="http://www.zztuku.com/tags/%E5%9B%BE%E6%A0%87%E8%AE%BE%E8%AE%A1.html">图标设计</a><a target="_blank" href="http://www.zztuku.com/tags/%E7%9F%A2%E9%87%8F%E7%B4%A0%E6%9D%90.html">矢量素材</a><a target="_blank" href="http://www.zztuku.com/tags/%E7%9F%A2%E9%87%8F.html">矢量</a><a target="_blank" href="http://www.zztuku.com/tags/%E6%A0%87%E7%AD%BE%E8%AE%BE%E8%AE%A1.html">标签设计</a><a target="_blank" href="http://www.zztuku.com/tags/%E7%9F%A2%E9%87%8F%E5%9B%BE.html">矢量图</a><a target="_blank" href="http://www.zztuku.com/tags/%E7%AE%AD%E5%A4%B4.html">箭头</a><a target="_blank" href="http://www.zztuku.com/tags/%E7%BD%91%E9%A1%B5%E5%9B%BE%E6%A0%87.html">网页图标</a><a target="_blank" href="http://www.zztuku.com/tags/%E6%A0%87%E7%AD%BE.html">标签</a><a target="_blank" href="http://www.zztuku.com/tags/EPS%E7%B4%A0%E6%9D%90%E4%B8%8B%E8%BD%BD.html">EPS素材下载</a><a class="more" href="/Tuku/">查看更多...</a></p>
          <ul class="clearFix">
            <li><a target="_blank" href="http://www.zztuku.com/PSD/Webpage/20140611_12683.html">国外网页设计源文件素</a></li>
<li><a target="_blank" href="http://www.zztuku.com/PSD/Webpage/20140611_12682.html">网页素材设计PSD素材</a></li>
<li><a target="_blank" href="http://www.zztuku.com/Animation/20140610_12658.html">旋转极光flash加载动画</a></li>
<li><a target="_blank" href="http://www.zztuku.com/Animation/20140610_12656.html">全国销售片区flash中国</a></li>
<li><a target="_blank" href="http://www.zztuku.com/Animation/20140610_12654.html">flash+xml网站焦点图动画</a></li>
<li><a target="_blank" href="http://www.zztuku.com/Animation/20140610_12653.html">鼠标指针百分比flash进</a></li>

          </ul>
        </dd>
        <dt>图片设计素材</dt>
      </dl>
      <dl class="navM3">
        <dd>
        	<ol>
          	<li><a target="_blank" href="http://www.zztuku.com/Html/DedeCms/20120523_920.html">织梦DedeCMS后台文件列表按文件名排序的方法</a></li>
<li><a target="_blank" href="http://www.zztuku.com/Html/PS/20140328_12466.html">Photoshop设计超酷的扁平化软件图标</a></li>
<li><a target="_blank" href="http://www.zztuku.com/Html/PS/20140328_12465.html">Photoshop制作超酷现代战争按钮教程</a></li>
<li><a target="_blank" href="http://www.zztuku.com/Html/PS/20140328_12464.html">Photoshop高效操作配置攻略心得全分享</a></li>

          </ol>
          <ul>
          	
            <li><a target="_blank" href="http://www.zztuku.com/Html/DIV+CSS/">DIV+CSS</a></li>
            
            <li><a target="_blank" href="http://www.zztuku.com/Html/DedeCms/">DedeCms</a></li>
            
            <li><a target="_blank" href="http://www.zztuku.com/Html/PS/">PS技巧</a></li>
            
            <li><a target="_blank" href="http://www.zztuku.com/Html/SEO/">SEO教程</a></li>
            
            <li><a target="_blank" href="http://www.zztuku.com/Html/AI/">AI教程</a></li>
            
            <li><a target="_blank" href="http://www.zztuku.com/Html/CorelDraw/">CorelDraw</a></li>
            
            <li><a target="_blank" href="http://www.zztuku.com/Html/Effects/">网页特效</a></li>
            
            <li><a target="_blank" href="http://www.zztuku.com/Html/PHPcms/">PHPcms教程</a></li>
            
            <li><a target="_blank" href="http://www.zztuku.com/Jianzhan/">建站教程</a></li>
            
          </ul>
          <h2><a href="/Html/">开始学习吧~</a> </h2>
        </dd>
        <dt>建站、设计教程</dt>
      </dl>
      <dl class="navM4">
        <dd>
          <h2><a target="_blank" href="/Cool/">酷站欣赏</a><a target="_blank" href="/Design/">设计欣赏</a></h2>
          <ol>
          	<li><a target="_blank" href="http://www.zztuku.com/PSD/Webpage/20140611_12683.html">国外网页设计源文件素材</a></li>
<li><a target="_blank" href="http://www.zztuku.com/PSD/Webpage/20140611_12682.html">网页素材设计PSD素材</a></li>
<li><a target="_blank" href="http://www.zztuku.com/Animation/20140610_12658.html">旋转极光flash加载动画素材</a></li>
<li><a target="_blank" href="http://www.zztuku.com/Animation/20140610_12656.html">全国销售片区flash中国地图</a></li>

          </ol>
          <p><a target="_blank" href="http://www.zztuku.com/tags/%E6%8F%92%E7%94%BB.html">插画</a><a target="_blank" href="http://www.zztuku.com/tags/%E8%89%B2%E5%BD%A9.html">色彩</a><a target="_blank" href="http://www.zztuku.com/tags/%E4%BD%9C%E5%93%81.html">作品</a><a target="_blank" href="http://www.zztuku.com/tags/%E5%B9%BF%E5%91%8A%E8%AE%BE%E8%AE%A1.html">广告设计</a><a target="_blank" href="http://www.zztuku.com/tags/%E5%B9%B3%E9%9D%A2%E8%AE%BE%E8%AE%A1.html">平面设计</a><a target="_blank" href="http://www.zztuku.com/tags/ParanoidMe.html">ParanoidMe</a><a target="_blank" href="http://www.zztuku.com/tags/Centro.html">Centro</a><a target="_blank" href="http://www.zztuku.com/tags/%E5%8C%85%E8%A3%85.html">包装</a><a target="_blank" href="http://www.zztuku.com/tags/FISHBOT1337.html">FISHBOT1337</a><a target="_blank" href="http://www.zztuku.com/tags/He1z.html">He1z</a><a target="_blank" href="http://www.zztuku.com/tags/%E8%A7%86%E8%A7%89.html">视觉</a><a target="_blank" href="http://www.zztuku.com/tags/Joanna.html">Joanna</a></p>          
        </dd>
        <dt>酷站、设计欣赏</dt>
      </dl>
      <dl class="navM5">
        <dd>
          <ul class="fl">
          	
            <li><a target="_blank" href="http://www.zztuku.com/Chajian/DedeCms/">DedeCms</a></li>
            
            <li><a target="_blank" href="http://www.zztuku.com/Chajian/PHPcms/">PHPcms</a></li>
            
            <li><a target="_blank" href="http://www.zztuku.com/Chajian/Discuz/">Discuz!</a></li>
            
            <li><a target="_blank" href="http://www.zztuku.com/Chajian/EcShop/">EcShop</a></li>
            
            <li><a target="_blank" href="http://www.zztuku.com/Chajian/Phpwind/">Phpwind</a></li>
            
            <li><a target="_blank" href="http://www.zztuku.com/Chajian/WordPress/">WordPress</a></li>
            
            <li><a target="_blank" href="http://www.zztuku.com/Chajian/Z-Blog/">Z-Blog</a></li>
            
          </ul>
          <ol class="fl">
          	<li><a target="_blank" href="http://www.zztuku.com/Chajian/DedeCms/20150509_12716.html">给dedecms安装谷歌页面语</a></li>
<li><a target="_blank" href="http://www.zztuku.com/Chajian/DedeCms/20150509_12715.html">dedecms独立幻灯片插件神</a></li>
<li><a target="_blank" href="http://www.zztuku.com/Chajian/DedeCms/20150509_12714.html">dede定时关站插件</a></li>
<li><a target="_blank" href="http://www.zztuku.com/Chajian/DedeCms/20150509_12713.html">DeDeCms For 百度编辑器最</a></li>
<li><a target="_blank" href="http://www.zztuku.com/Chajian/DedeCms/20150509_12712.html">DedeCMS v5.7 SP1支付宝免签</a></li>
<li><a target="_blank" href="http://www.zztuku.com/Chajian/DedeCms/20150509_12711.html">织梦dede 电脑PC站+手机</a></li>

          </ol>
          <div class="cl"></div>
          <h2><a target="_blank" href="/Chajian/">更多实用插件</a></h2>
        </dd>
        <dt>插件模块、工具</dt>
      </dl>
      <dl class="navM6">
        <dd>
          <ul class="clearFix">
          	
            <li><a target="_blank" href="http://www.zztuku.com/Wallpaper/Phone/">手机壁纸</a></li>
            
            <li><a target="_blank" href="http://www.zztuku.com/Wallpaper/Car/">名车图片</a></li>
            
            <li><a target="_blank" href="http://www.zztuku.com/Wallpaper/Star/">人物明星</a></li>
            
            <li><a target="_blank" href="http://www.zztuku.com/Wallpaper/Feizhuliu/">非主流</a></li>
            
            <li><a target="_blank" href="http://www.zztuku.com/Wallpaper/Holiday/">节日祝福</a></li>
            
            <li><a target="_blank" href="http://www.zztuku.com/Wallpaper/Cartoon/">动漫卡通</a></li>
            
            <li><a target="_blank" href="http://www.zztuku.com/Wallpaper/Beauty/">美女壁纸</a></li>
            
            <li><a target="_blank" href="http://www.zztuku.com/Wallpaper/Science/">科技设计</a></li>
            
            <li><a target="_blank" href="http://www.zztuku.com/Wallpaper/Natural/">自然风光</a></li>
            
            <li><a target="_blank" href="http://www.zztuku.com/Wallpaper/Architecture/">城市建筑</a></li>
            
          </ul>
          <p class="clearFix">
          	<a target="_blank" href="http://www.zztuku.com/Wallpaper/Phone/20140329_12478.html">《整容日记》手机壁纸</a>
<a target="_blank" href="http://www.zztuku.com/Wallpaper/Phone/20140329_12477.html">个性设计安卓手机壁纸</a>
<a target="_blank" href="http://www.zztuku.com/Wallpaper/Phone/20140313_12366.html">紫色花卉手机壁纸</a>
<a target="_blank" href="http://www.zztuku.com/Wallpaper/Phone/20140313_12363.html">可爱卡通都敏俊手机壁</a>
<a target="_blank" href="http://www.zztuku.com/Wallpaper/Phone/20140313_12362.html">复古钟表手机壁纸</a>
<a target="_blank" href="http://www.zztuku.com/Wallpaper/Star/20140313_12361.html">袁珊珊婚纱写真手机壁</a>

          </p>
          <div class="cl"></div>
          <h2><a target="_blank" href="/Wallpaper/">更多超酷壁纸</a></h2>
        </dd>
        <dt>精美壁纸素材</dt>
      </dl>
    </div>
  </div>
</div>
</tt>
     <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b43f1459ac702900c8d44c91a5e796dd&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
      <div class="mainMenuV"> 
	  <a href="/">首页</a> 
	     <?php $n=1;if(is_array($data)) foreach($data AS $cat) { ?>
	     
               <a href="<?php echo $cat['url'];?>">
                               <?php echo $cat['catname'];?>
               </a>
							    


		 <?php $n++;}unset($n); ?>
	  
	  
	  </div>
	    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
  </div>
</div>


         