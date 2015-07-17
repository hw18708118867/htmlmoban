<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>fancybox.css" /> 
<script type="text/javascript" src="<?php echo JS_PATH;?>fancybox.js"></script>
<script>
$(document).ready(function() {
 
$("a.fancybox").fancybox();
 
});
</script>
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
                
                <!--
                <div class="AD_300">
                    <a href="javascript:;" rel="nofollow" target="_blank">
                        <img src="./images/3hhost.jpg" width="300" height="250" alt="wordpress主题站推荐">
                    </a>
                </div>
				-->
                <div class="m_Grid4">
                    <?php $hits_moban = hits_moban('weekviews')?>
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
                                alt="<?php echo $m['title'];?>" class="thumbnail" />
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



                 <!--<div class="m_Grid4">-->
                    <!--<div class="m_T9">-->
                        <!--html模板分类-->
                    <!--</div>-->
                     <div class="n_h FR">
                         <div class="in-side-menu">
                             <h2>按模板行业分类</h2>
                             <p class="pbutton sort clearfix">
                                 <?php $n=1;if(is_array(get_tag_list())) foreach(get_tag_list() AS $tag) { ?>
                                 <a title="<?php echo $tag;?>" href="<?php echo search_tag($tag);?>"><?php echo $tag;?></a>
                                 <?php $n++;}unset($n); ?>
                             </p>
                             <h2>按模板颜色</h2>
                             <p   class="pbutton color clearfix">
                                 <a class="c1" href="<?php echo search_tag('','红色');?>">红色</a>
                                 <a class="c2" href="<?php echo search_tag('','橙色');?>">橙色</a>
                                 <a class="c3" href="<?php echo search_tag('','黄色');?>">黄色</a>
                                 <a class="c4" href="<?php echo search_tag('','绿色');?>">绿色</a>
                                 <a class="c5" href="<?php echo search_tag('','蓝色');?>">蓝色</a>
                                 <a class="c6" href="<?php echo search_tag('','灰色');?>">灰色</a>
                                 <a class="c7" href="<?php echo search_tag('','黑色');?>">黑色</a>
                                 <a class="c8" href="<?php echo search_tag('','紫色');?>">紫色</a>
                                 <a class="c9" href="<?php echo search_tag('','棕色');?>">棕色</a>
                                 <a class="c10" href="<?php echo search_tag('','彩色');?>">彩色</a>
                             </p>
                         </div>
                     </div>
                    
                <!--</div>-->




                   
            </div>
            <div class="cell main_l">

			    <div class="main_l_box">
                <div class="m_T10">
                    <h2>
                        wordpress主题下载：<?php echo $title;?>
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
                    <?php echo $content;?>
                <div class="m_T11">
                </div>

				 

				<div class="m_Boxxg">
                    <div class="m_Boxxgb">
                        最新模板资源：
                    </div>
                    <ul id="tags_related">
                        <?php $n=1;if(is_array(get_moban_list())) foreach(get_moban_list() AS $r) { ?>
                        <li>
                            <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>">
                                <img src="<?php echo $r['thumb'];?>"
                                alt="<?php echo $r['title'];?>" class="thumbnail" />
                            </a>
                            <a href="<?php echo $r['url'];?>" rel="bookmark" title="<?php echo $r['title'];?>">
                                <?php echo $r['title'];?>
                            </a>
                        </li>
                        <?php $n++;}unset($n); ?>

                    </ul>
                    <div class="clear">
                    </div>
                </div>


				<!--<div class="m_T12">
                    发表评论：
                </div>-->
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