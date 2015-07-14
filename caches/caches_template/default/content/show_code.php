<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>


<div class="Main2 constr  fix">
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


<div class="m_Right1 FR" style="margin-left:10px">
    <div class="n_Grid4">


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


    </div>
    <!--
    <div class="AD_300">
        <a href="javascript:;" rel="nofollow" target="_blank">
            <img src="./images/3hhost.jpg" width="300" height="250" alt="wordpress主题站推荐">
        </a>
    </div>
    -->
    <?php $hits_moban = hits_moban('weekviews',$catid)?>
    <?php if(count($hits_moban) >0) { ?>
    <div class="m_Grid4">
        <div class="m_T9">
            随机主题展示
        </div>
        <ul class="m_Box9">
            <?php $n=1;if(is_array($hits_moban)) foreach($hits_moban AS $m) { ?>
            <li>
                <div class="txt">
                    <p class="p5">
                        主题简介:
                        <br>
                        <a href="<?php echo $m['url'];?>" target="_blank">
                            　　<?php echo do_sub_str($m['description']);?>
                        </a>
                    </p>

                    <p class="p6">
                        分类：
                        <a href="<?php echo $m['url'];?>" title="<?php echo do_str($m['tag']);?>" rel="category tag">
                            <?php echo do_str($m['tag']);?>
                        </a>
                    </p>
                </div>
                <a href="<?php echo $m['url'];?>" title="<?php echo $m['title'];?>">
                    <img src="<?php echo $m['thumb'];?>"
                         alt="<?php echo $m['title'];?>" class="thumbnail"/>
                </a>

                <p class="p4">
                    <a href="<?php echo $m['url'];?>" title="<?php echo $m['title'];?>" target="_blank">
                        <?php echo $m['title'];?>
                    </a>
                </p>
            </li>
            <?php $n++;}unset($n); ?>
            <div class="clear">
            </div>
        </ul>
    </div>
    <?php } ?>


    <div class="n_h">

        <dl>
            <dt>猜你也喜欢看这些 ······</dt>
            <dd><a href="/js/xiangce-1203.html"><p><img src="<?php echo IMG_PATH;?>2zzt_logo.png" class="f"/></p>
                简约jQuery幻灯片相册代码<span class="l">相册代码</span><span class="t">2015-07-03</span></a></dd>
            <dd><a href="/js/tupian-1202.html"><p><img src="<?php echo IMG_PATH;?>2zzt_logo.png" class="f"/></p>
                jQuery图片列表动画显示效果<span class="l">图片特效</span><span class="t">2015-07-03</span></a></dd>
            <dd><a href="/js/jiaodiantu-1201.html"><p><img src="<?php echo IMG_PATH;?>2zzt_logo.png" class="f"/></p>
                猎豹jQuery全屏焦点图代码<span class="l">焦点图</span><span class="t">2015-05-22</span></a></dd>
            <dd><a href="/js/tupian-1200.html"><p><img src="<?php echo IMG_PATH;?>2zzt_logo.png" class="f"/></p>
                CSS3圆形图片鼠标经过旋转效果<span class="l">图片特效</span><span class="t">2015-05-22</span></a></dd>
            <dd><a href="/js/qita-1199.html"><p><img src="<?php echo IMG_PATH;?>2zzt_logo.png" class="f"/></p>
                HTML5+CSS3音量调节旋转按钮<span class="l">其他代码</span><span class="t">2015-05-18</span></a></dd>
        </dl>


    </div>


</div>
<div class="cell main_l">

<div class="main_l_box">
<div class="m_T10">
    <h2>
        <?php echo $title;?>
    </h2>
</div>
<div class="m_Box11">
    <div class="m_Boxss">
                        <span class="loopzz">
                            <?php echo $username;?>
                        </span>
                        <span class="loopsj">
                            <?php echo $inputtime;?>
                        </span>
                        <span class="loopck">
                           <span id="hits"></span>
                        </span>
                        <span class="loopgjc">
                            关键词：

							<?php $n=1;if(is_array($keywords)) foreach($keywords AS $keyword) { ?>
                            <a href="javascript:;" rel="tag">
                                <?php echo $keyword;?>
                            </a>
							<?php $n++;}unset($n); ?>
                        </span>
                        <span class="loopfl">
						    
						    <?php $cattype = array_filter(explode(',',$rs['tag']))?>
							<?php $n=1;if(is_array($cattype)) foreach($cattype AS $ct) { ?>
                            <a href="<?php echo search_tag($ct);?>" title="<?php echo $ct;?>下载" rel="category tag">
                                <?php echo $ct;?>
                            </a>

							<?php $n++;}unset($n); ?>
                        </span>

        <div class="clear">
        </div>
    </div>
</div>

<div class="m_T11">
</div>


<div class="">
    <div class="bbda ptm act fix" style="border:0">
        <div class="cl">
            <div class="spvimg">
                <a href="javascript:;"><img src="<?php echo $thumb;?>"
                                            onclick="zoom(this, 'data/attachment/forum/201310/12/160242yos7ttafvv6zmftk.png')"
                                            width="270" _width="270" height="180" alt="<?php echo $title;?>"/></a>
            </div>

            <div class="spi fix">
                <h4 class="wx mbm bbda"><?php echo $title;?></h4>
            </div>

        </div>
        <div class="fix mtw"></div>
    </div>
</div>

<div class="m_Grid5">


    <h3>
        程序源码
    </h3>

    <div class="clear">
    </div>
</div>


<div class="m_Box16">
    <div class="nr_show">

        <p class="pns mbm bugbot" style=" height:48px; line-height:48px;">
            <a target="_blank" class="orangebot"
               href="<?php echo APP_PATH;?>index.php?m=content&c=readpoint&allow_visitor=<?php echo $allow_visitor;?>" rel="nofollow">代码演示</a>
            &nbsp;
            <a href="javascript:;" onclick="window.open('/demo.php?url=<?php echo $demo_url;?>')" class="greenbot" rel="nofollow">代码下载</a>
        </p>
    </div>
    <div class="clear">
    </div>
</div>
<div class="m_T11">
</div>

<div class="m_Box17">
    <p>
                        <span>
                            注意事项：
                        </span>
    </p>

    <p>
        <label>
            因为主题是虚拟商品，具有可复制性，可传播性，版权原因，一旦授予，不可退款。
        </label>
    </p>

    <p>
        1.大家在使用wordpress主题的时候请尊重主题作者的劳动成果和版权标识！
    </p>

    <p>
        2.本站主要以分享主题为主,销售和定制主题为辅,也相当于是做一件授人玫瑰,手留余香的事；请各位尊重我们！
    </p>

    <p>
        3.免费wordpress主题在使用中遇到的问题大家可以去
        <a style="color: #419900;" target="_blank" href="javascript:;">
            站长交流中心
        </a>
        进行交流或者加群：153526824 请求大家的帮助！
    </p>

    <p>
        4.请WP小白们注意，不是任何主题一安装后就可以展现出完美效果的，是需要设置/修改的（特别是国外主题，设置相当复杂），不要因为自己的不会用而怪罪、埋怨到主题作者/本站头上！
    </p>

    <div class="clear">
    </div>
</div>


<div class="m_Boxxg">
    <div class="m_Boxxgb">
        类似的wordpress主题还有：
    </div>
    <ul id="tags_related">
        <li>
            <a href="javascript:;" title="wordpress主题下载:iNeo主题">
                <img src="http://www.2zzt.com/wp-content/themes/2z2014/timthumb.php?src=http://www.2zzt.com/wp-content/uploads/2013/03/20140417163903.jpg&w=123&h=96&zc=1"
                     alt="wordpress主题下载:iNeo主题" class="thumbnail"/>
            </a>
            <a href="javascript:;" rel="bookmark" title="wordpress主题下载:iNeo主题">
                wordpress主题下载:iNeo主题
            </a>
        </li>
        <li>
            <a href="javascript:;" title="wordpress主题下载站-爱找主题第三次改版顺利！">
                <img src="http://www.2zzt.com/wp-content/themes/2z2014/timthumb.php?src=http://www.2zzt.com/wp-content/uploads/2013/12/20131230205254.jpg&w=123&h=96&zc=1"
                     alt="wordpress主题下载站-爱找主题第三次改版顺利！" class="thumbnail"/>
            </a>
            <a href="javascript:;" rel="bookmark" title="wordpress主题下载站-爱找主题第三次改版顺利！">
                wordpress主题下载站-爱找主题第三次改版顺利！
            </a>
        </li>
        <li>
            <a href="javascript:;" title="再来一款自适应 wordpress主题下载 :Twentytwelve bigfa 很Style哦！">
                <img src="http://www.2zzt.com/wp-content/themes/2z2014/timthumb.php?src=http://www.2zzt.com/wp-content/uploads/2013/09/0130903175250.jpg&w=123&h=96&zc=1"
                     alt="再来一款自适应 wordpress主题下载 :Twentytwelve bigfa 很Style哦！" class="thumbnail"
                        />
            </a>
            <a href="javascript:;" rel="bookmark" title="再来一款自适应 wordpress主题下载 :Twentytwelve bigfa 很Style哦！">
                再来一款自适应 wordpress主题下载 :Twentytwelve bigfa 很Style哦！
            </a>
        </li>
        <li>
            <a href="javascript:;" title="wordpress主题下载:强大的wordpress cms主题menhu下载,适合门户类网站使用">
                <img src="http://www.2zzt.com/wp-content/themes/2z2014/timthumb.php?src=http://www.2zzt.com/wp-content/uploads/2013/08/20130829180029-160x115.jpg&w=123&h=96&zc=1"
                     alt="wordpress主题下载:强大的wordpress cms主题menhu下载,适合门户类网站使用" class="thumbnail"
                        />
            </a>
            <a href="javascript:;" rel="bookmark" title="wordpress主题下载:强大的wordpress cms主题menhu下载,适合门户类网站使用">
                wordpress主题下载:强大的wordpress cms主题menhu下载,适合门户类网站使用
            </a>
        </li>
        <li>
            <a href="javascript:;" title="wordpress主题:来自tangstyle主题修改版适合个人博客使用">
                <img src="http://www.2zzt.com/wp-content/themes/2z2014/timthumb.php?src=http://www.2zzt.com/wp-content/uploads/2013/08/20130823090522-160x115.jpg&w=123&h=96&zc=1"
                     alt="wordpress主题:来自tangstyle主题修改版适合个人博客使用" class="thumbnail"/>
            </a>
            <a href="javascript:;" rel="bookmark" title="wordpress主题:来自tangstyle主题修改版适合个人博客使用">
                wordpress主题:来自tangstyle主题修改版适合个人博客使用
            </a>
        </li>
        <li>
            <a href="javascript:;" title="wordpress主题下载：仿搜狐Mued的Lihua主题分享给大家">
                <img src="http://www.2zzt.com/wp-content/themes/2z2014/timthumb.php?src=http://www.2zzt.com/wp-content/uploads/2013/08/20130815084026.jpg&w=123&h=96&zc=1"
                     alt="wordpress主题下载：仿搜狐Mued的Lihua主题分享给大家" class="thumbnail"/>
            </a>
            <a href="javascript:;" rel="bookmark" title="wordpress主题下载：仿搜狐Mued的Lihua主题分享给大家">
                wordpress主题下载：仿搜狐Mued的Lihua主题分享给大家
            </a>
        </li>
        <li>
            <a href="javascript:;" title="wordpress主题下载站推荐主题：Rcloud，5种样式，功能强大！">
                <img src="http://www.2zzt.com/wp-content/themes/2z2014/timthumb.php?src=http://www.2zzt.com/wp-content/uploads/2013/08/20130806091336-150x150.jpg&w=123&h=96&zc=1"
                     alt="wordpress主题下载站推荐主题：Rcloud，5种样式，功能强大！" class="thumbnail"/>
            </a>
            <a href="javascript:;" rel="bookmark" title="wordpress主题下载站推荐主题：Rcloud，5种样式，功能强大！">
                wordpress主题下载站推荐主题：Rcloud，5种样式，功能强大！
            </a>
        </li>
        <li>
            <a href="javascript:;" title="分享来自麦田一根葱的处女作品BYMT wordpress主题下载！">
                <img src="http://www.2zzt.com/wp-content/themes/2z2014/timthumb.php?src=http://www.2zzt.com/wp-content/uploads/2013/08/demo1-727x1024.png&w=123&h=96&zc=1"
                     alt="分享来自麦田一根葱的处女作品BYMT wordpress主题下载！" class="thumbnail"/>
            </a>
            <a href="javascript:;" rel="bookmark" title="分享来自麦田一根葱的处女作品BYMT wordpress主题下载！">
                分享来自麦田一根葱的处女作品BYMT wordpress主题下载！
            </a>
        </li>
        <li>
            <a href="javascript:;" title="来自天天网的wordpress主题：wp-ttwrite0.2.0 增加了博客样式的wordpress主题下载">
                <img src="http://www.2zzt.com/wp-content/themes/2z2014/timthumb.php?src=http://www.2zzt.com/wp-content/uploads/2013/07/20130730091512.jpg&w=123&h=96&zc=1"
                     alt="来自天天网的wordpress主题：wp-ttwrite0.2.0 增加了博客样式的wordpress主题下载" class="thumbnail"
                        />
            </a>
            <a href="javascript:;" rel="bookmark" title="来自天天网的wordpress主题：wp-ttwrite0.2.0 增加了博客样式的wordpress主题下载">
                来自天天网的wordpress主题：wp-ttwrite0.2.0 增加了博客样式的wordpress主题下载
            </a>
        </li>
        <li>
            <a href="javascript:;" title="wordpress博客主题：来自第九阅览室的wordpress阅读百科类主题">
                <img src="http://www.2zzt.com/wp-content/themes/2z2014/timthumb.php?src=http://www.2zzt.com/wp-content/uploads/2013/07/20130723165250.jpg&w=123&h=96&zc=1"
                     alt="wordpress博客主题：来自第九阅览室的wordpress阅读百科类主题" class="thumbnail"/>
            </a>
            <a href="javascript:;" rel="bookmark" title="wordpress博客主题：来自第九阅览室的wordpress阅读百科类主题">
                wordpress博客主题：来自第九阅览室的wordpress阅读百科类主题
            </a>
        </li>
    </ul>
    <div class="clear">
    </div>
</div>


<?php $data = comment_list($page, $catid, $id)?>
<div class="m_Box19">
    <div class="comment-amount">
        <a href="javascript:;" class="comment_num" title="">
            共有<?php echo $data['total'];?>条评论
        </a>
    </div>
    <div id="comments">
        <ul class="commentlist">
            <?php $n=1;if(is_array($data['commentDatas'])) foreach($data['commentDatas'] AS $comment) { ?>
            <li class="comment even thread-even depth-1" id="li-comment-">
                <div id="comment-1744" class="comment-body">
                    <div class="author">
                        <img alt='' src='<?php echo IMG_PATH;?>tx.jpg' class='avatar avatar-38 photo' height='38' width='38' />
                    </div>
                    <div class="comment-meta">
                        <div style="float:left;width:100%;">
                                            <span class="name">
                                                <a href='javascript:;' rel='external nofollow' class='url' target='_blank'>
                                                    <?php echo $comment['username'];?>
                                                </a>
                                            </span>
                                            <span class="time">
                                                <?php echo date('Y-m-d H:i:s',$comment['creat_at']);?>
                                            </span>
                        </div>
                        <div class="text">
                            <p>
                                <?php echo $comment['content'];?>
                            </p>
                        </div>
                    </div>
                </div>
            </li>
            <?php $n++;}unset($n); ?>
            <li class="comment even thread-even depth-1" id="comment_add"></li>
        </ul>
        <div id="pages" class="text-c"><?php echo $data['commentPages'];?></div>
        <div id="respond">
            <form action="#" method="post" id="commentform">
                <input type="hidden" id="url" value="<?php echo $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']?>" name="url"/>
                <input type="hidden" id="title" value="<?php echo $title;?>" name="title"/>
                <input type="hidden" id="direction" value="1" name="direction"/>
                <div>
                    <span>发布评论：</span>
                    <div class="biaoqing">
                        <script type="text/javascript">
                            /* <![CDATA[ */
                            function grin(tag) {
                                var myField;
                                tag = ' ' + tag + ' ';
                                if (document.getElementById('comment') && document.getElementById('comment').type == 'textarea') {
                                    myField = document.getElementById('comment');
                                } else {
                                    return false;
                                }
                                if (document.selection) {
                                    myField.focus();
                                    sel = document.selection.createRange();
                                    sel.text = tag;
                                    myField.focus();
                                } else if (myField.selectionStart || myField.selectionStart == '0') {
                                    var startPos = myField.selectionStart;
                                    var endPos = myField.selectionEnd;
                                    var cursorPos = endPos;
                                    myField.value = myField.value.substring(0, startPos) + tag + myField.value.substring(endPos, myField.value.length);
                                    cursorPos += tag.length;
                                    myField.focus();
                                    myField.selectionStart = cursorPos;
                                    myField.selectionEnd = cursorPos;
                                } else {
                                    myField.value += tag;
                                    myField.focus();
                                }
                            }
                            /* ]]> */

                        </script>
                    </div>
                    <textarea name="content" id="content" tabindex="4" onkeydown="if(event.ctrlKey&&event.keyCode==13){document.getElementById('submit').click();return false};"></textarea>
                </div>
                <div>
                    <!--<input name="submit" type="submit" id="submit" tabindex="5" value="发布"/>-->
                    <input name="submit" type="button" id="submit" tabindex="5" value="发布" onclick="commit()"/>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>

<div class="clear">
</div>
</div>
<script type="text/javascript">
    function commit(){
        if($('#content').val() != ''){
            $.ajax({
                type: 'post',
                url: '/index.php?m=comment&c=index&a=post&commentid=content_<?php echo $catid;?>-<?php echo $id;?>-1',
                data: {title:$('#title').val(),direction:$('#direction').val(),url:$('#url').val(),content:$('#content').val()},
                dataType: 'json',
                success: function(data){
                    if(data.status == 200){
                        $('#comment_add').html(
                                '<div id="comment-1744" class="comment-body"><div class="author">'+
                                        "<img alt='' src='<?php echo IMG_PATH;?>tx.jpg' class='avatar avatar-38 photo' height='38' width='38' />"+
                                        '</div>'+
                                        '<div class="comment-meta"><div style="float:left;width:100%;">'+
                                        '<span class="name">'+
                                        "<a href='javascript:;' rel='external nofollow' class='url' target='_blank'>"+data.posTdata.username+'</a>'+
                                        '</span>'+
                                        '<span class="time">'+data.posTdata.postTime+'</span></div>'+
                                        '<div class="text"><p>'+data.posTdata.content+'</p></div>'+
                                        '</div></div>');
                        $('#content').val('');
                    }
                    alert(data.msg);
                }
            });
        }else
            alert('请填写内容！');
    }
</script>


<script language="JavaScript" src="<?php echo APP_PATH;?>api.php?op=count&id=<?php echo $id;?>&modelid=<?php echo $modelid;?>"></script>
<?php include template("content","footer"); ?>