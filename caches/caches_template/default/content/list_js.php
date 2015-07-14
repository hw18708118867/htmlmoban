<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<link type="text/css" rel="stylesheet" href="<?php echo CSS_PATH;?>code.css">


<div class="constr Main2 fix">

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


</div>


<div class="constr Main2 fix">


    <div id="l1">
        <div class="nav-left">
            <dl>
                <dt>常用工具<a href="/" target="_blank">&#8250;&#8250;</a></dt>
                <dd><a href="/htmljs/" target="_blank">HTML/JS互转工具</a></dd>
                <dd><a href="/daxiaoxie/" target="_blank">字母大小写转换工具</a></dd>
                <dd><a href="/cssformat/" target="_blank">CSS代码格式化工具</a></dd>
                <dd><a href="/jsformat/" target="_blank">JS/HTML格式化工具</a></dd>
                <dd><a href="/fantizizhuanhuanqi/" target="_blank">繁体字转换器</a></dd>
                <dd><a href="/huoxingwenzhuanhuanqi/" target="_blank">火星文转换器</a></dd>
                <dd><a href="/software/tuxiang/6552.html" target="_blank">Color Cop取色软件</a></dd>
                <dd><a href="/software/shiyong/6017.html" target="_blank">CSS样式图片下载助手</a></dd>
                <dd><a href="/pinyin/" target="_blank">汉字转拼音工具</a></dd>
            </dl>
        </div>


    </div>
    <!-- /l1 -->

    <div id="m">

        <div class="slogan">
            <span class="js"></span>

            <div class="text">化繁为简，我们帮助您更好的运用代码。给你的代码都是选之又选，模板达人拒绝滥竽充数！<br/><a
                    href="http://baike.baidu.com/view/2160733.htm" target="_blank">什么是JS代码？</a> 　<a
                    href="http://baike.baidu.com/view/1020297.htm" target="_blank">什么是jquery？</a> 　<a
                    href="http://baike.baidu.com/view/951383.htm" target="_blank">什么是HTML5？</a>
            </div>
        </div>
        <div class="list-pngjs clearfix">
            <?php $catname = get_catname($catid);?>
            <dl>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e95a7d3aa4116814e3ccbc0a4d0b85a8&action=lists&catid=%24catid&num=18&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 18;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                <dd><a href="<?php echo $v['url'];?>" target="_blank"><img alt="<?php echo $v['title'];?>" src="<?php echo $v['thumb'];?>"/><?php echo $v['title'];?></a><span><?php echo $catname;?></span>
                </dd>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </dl>
        </div>

        <!--
        <div class="dede_pages">
             <?php echo $page;?>
        </div>
        -->


    </div>
    <!-- /m -->

    <div id="r">

        <div class="nav-sub">
            <dl>
                <dt class="jx"><span>广告代码</span>
                <div></div>
                <a href="/js/p1.html">全部››</a></dt>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=464a4d526ca6b0be30e16a9e35f4477c&action=category&catid=17&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'17','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $cat) { ?>
                <dd><a href="<?php echo $cat['url'];?>"><?php echo $cat['catname'];?></a></dd>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </dl>
        </div>

        <div class="nav-sub">
            <dl>
                <dt class="tx"><span>特效代码</span>
                <div></div>
                <a href="/js/texiao.html">全部››</a></dt>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f0ed520873c7a7abeff2e6c2087cd281&action=category&catid=30&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'30','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $cat) { ?>
                <dd><a href="<?php echo $cat['url'];?>"><?php echo $cat['catname'];?></a></dd>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </dl>
        </div>

        <div class="h">
            <dl>
                <dt>猜你也喜欢看这些 ······</dt>
                <dd><a href="/js/xiangce-1203.html"><p><img src="<?php echo IMG_PATH;?>2zzt_logo.png" class="f"/></p>简约jQuery幻灯片相册代码<span
                        class="l">相册代码</span><span class="t">2015-07-03</span></a></dd>
                <dd><a href="/js/tupian-1202.html"><p><img src="<?php echo IMG_PATH;?>2zzt_logo.png" class="f"/></p>jQuery图片列表动画显示效果<span
                        class="l">图片特效</span><span class="t">2015-07-03</span></a></dd>
                <dd><a href="/js/jiaodiantu-1201.html"><p><img src="<?php echo IMG_PATH;?>2zzt_logo.png" class="f"/></p>
                    猎豹jQuery全屏焦点图代码<span class="l">焦点图</span><span class="t">2015-05-22</span></a></dd>
                <dd><a href="/js/tupian-1200.html"><p><img src="<?php echo IMG_PATH;?>2zzt_logo.png" class="f"/></p>CSS3圆形图片鼠标经过旋转效果<span
                        class="l">图片特效</span><span class="t">2015-05-22</span></a></dd>
                <dd><a href="/js/qita-1199.html"><p><img src="<?php echo IMG_PATH;?>2zzt_logo.png" class="f"/></p>HTML5+CSS3音量调节旋转按钮<span
                        class="l">其他代码</span><span class="t">2015-05-18</span></a></dd>
            </dl>
        </div>

        <div class="h">
            <dl>
                <dt>这些是最新的...</dt>
                <dd><a href="/js/css-1178.html"><p><img src="<?php echo IMG_PATH;?>2zzt_logo.png" class="f"/></p>
                    CSS布局：上中下三栏自适应高度CSS布局<span class="l">CSS样式</span><span class="t">2015-01-19</span></a></dd>
                <dd><a href="/js/text-1065.html"><p><img src="<?php echo IMG_PATH;?>2zzt_logo.png" class="f"/></p>JS仿黑客帝国字母掉落效果<span
                        class="l">文字特效</span><span class="t">2014-06-25</span></a></dd>
                <dd><a href="/js/text-1064.html"><p><img src="<?php echo IMG_PATH;?>2zzt_logo.png" class="f"/></p>
                    HTML5模仿骇客帝国文字矩阵效果<span class="l">文字特效</span><span class="t">2014-06-25</span></a></dd>
                <dd><a href="/js/website-1057.html"><p><img src="<?php echo IMG_PATH;?>2zzt_logo.png" class="f"/></p>
                    404页面已经被外星人绑架了<span class="l">网站常用</span><span class="t">2014-06-12</span></a></dd>
                <dd><a href="/js/date-980.html"><p><img src="<?php echo IMG_PATH;?>2zzt_logo.png" class="f"/></p>javascript显示年月日时间代码<span
                        class="l">时间日期</span><span class="t">2013-05-08</span></a></dd>
            </dl>
        </div>


    </div>
    <!-- /r -->


</div>


<?php include template("content","footer"); ?>