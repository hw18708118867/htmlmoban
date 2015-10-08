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
                <dt>常用工具<a href="#" target="_blank">&#8250;&#8250;</a></dt>
                <dd><a href="<?php echo tool_url('htmlTojs');?>" target="_blank">HTML/JS互转工具</a></dd>
                <dd><a href="<?php echo tool_url('Aa');?>" target="_blank">字母大小写转换工具</a></dd>
                <dd><a href="<?php echo tool_url('css');?>" target="_blank">CSS代码格式化工具</a></dd>
                <dd><a href="<?php echo tool_url('format_html');?>" target="_blank">JS/HTML格式化工具</a></dd>
                <dd><a href="<?php echo tool_url('fantizi');?>" target="_blank">繁体字转换器</a></dd>
                <dd><a href="<?php echo tool_url('huoxinwen');?>" target="_blank">火星文转换器</a></dd>
                <dd><a href="<?php echo tool_url('color');?>" target="_blank">Color大全</a></dd>
                <dd><a href="<?php echo tool_url('fontcount');?>" target="_blank">在线字数统计工具</a></dd>
                <dd><a href="<?php echo tool_url('pinyin');?>" target="_blank">汉字转拼音工具</a></dd>
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
            <dl>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b7ba264a5fdd03f30b5553423ab13091&action=lists&catid=%24catid&num=14&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 14;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                <dd>
                    <a href="<?php echo $v['url'];?>" target="_blank">
                        <img alt="<?php echo $v['title'];?>" src="<?php echo $v['thumb'];?>"/><?php echo $v['title'];?>
                    </a>
                    <span><?php echo get_catname($v[catid]);?></span>
                </dd>
                <?php $n++;}unset($n); ?>
                <div class="inline_box fix tj m_Grid1">
                    <div class="page_navi">
                        <?php echo $pages;?>
                    </div>
                </div>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </dl>
        </div>


    <!--    <div class="page_navi">
             <?php echo $page;?>
        </div>-->



    </div>
    <!-- /m -->

    <div id="r">

        <div class="nav-sub">
            <dl>
                <dt class="jx"><span>广告代码</span>
                <div></div>
                <a href="/index.php?m=content&c=index&a=lists&catid=17" style="color: gray;">全部››</a></dt>
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
                <a href="/index.php?m=content&c=index&a=lists&catid=30" style="color: gray;">全部››</a></dt>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f0ed520873c7a7abeff2e6c2087cd281&action=category&catid=30&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'30','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $cat) { ?>
                <dd><a href="<?php echo $cat['url'];?>"><?php echo $cat['catname'];?></a></dd>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </dl>
        </div>

        <div class="h">
            <?php $hits_tx = hits_moban('weekviews',$catid,14,5)?>
            <dl>
                <dt>猜你也喜欢看这些 ······</dt>
                <?php $n=1;if(is_array($hits_tx)) foreach($hits_tx AS $v) { ?>
                <dd>
                    <a href="<?php echo $v['url'];?>">
                        <p><img src="<?php echo $v['thumb'];?>" class="f" width="100px" height="50px"/></p>
                        <?php echo $v['title'];?>
                        <span class="l"><?php echo get_catname($v[catid]);?></span>
                        <span class="t"><?php echo date('Y-m-d',$v[inputtime]);?></span>
                    </a>
                </dd>
                <?php $n++;}unset($n); ?>
            </dl>
        </div>

        <div class="h">
            <dl>
                <?php $data = get_tx_list(30,10,1);?>
                <dt>这些是最新的...</dt>
                <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                <dd>
                    <a href="<?php echo $v['url'];?>">
                        <p><img src="<?php echo $v['thumb'];?>" class="f" height="50px" width="100px"/></p>
                        <?php echo $v['title'];?><span class="l"><?php echo get_catname($v[catid]);?></span>
                        <span class="t"><?php echo date('Y-m-d',$v[inputtime]);?></span>
                    </a>
                </dd>
                <?php $n++;}unset($n); ?>
            </dl>
        </div>


    </div>
    <!-- /r -->


</div>


<?php include template("content","footer"); ?>