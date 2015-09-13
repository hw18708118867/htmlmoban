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
                <div class="m_Grid4">
                    <div class="m_T9">
                        <font>
                            精品模板推荐
                        </font>
                    </div>
                    <?php $recommend_moban = get_recommend_moban($catid)?>
                    <div class="tejia">
                        <div class="box1">
                            <a href="<?php echo $recommend_moban['url'];?>" title="<?php echo $recommend_moban['title'];?>">
                                <img src="<?php echo $recommend_moban['thumb'];?>"
                                alt="<?php echo $recommend_moban['description'];?>" class="thumbnail" />
                            </a>
                            <h3>
                                <a href="<?php echo $recommend_moban['url'];?>" title="<?php echo $recommend_moban['title'];?>" target="_blank">
                                    <?php echo $recommend_moban['title'];?>
                                </a>
                            </h3>
                            <p class="p1">
                                <span>
                                    特惠价:
                                </span>
                                <label>
                                    <?php echo $recommend_moban['readpoint'];?>
                                </label>
                                元
                            </p>
                            <p class="p2">
                                <a href="<?php echo $recommend_moban['url'];?>" title="立即抢购" target="_blank">
                                    立即抢购
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="p3">
                        本站开发的精美主题正在开卖中，心动就赶快行动起来吧！
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
                <?php if(count($hits_moban)>0) { ?>
                <div class="m_Grid4">
                    <?php $hits_moban = hits_moban('weekviews',$catid)?>
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
                <?php } ?>

                 <!--<div class="m_Grid4">-->
                    <!--<div class="m_T9">-->
                        <!--html模板分类-->
                    <!--</div>-->
                     <div class="n_h FR">
                         <div class="in-side-menu">
                             <h2>按模板行业分类</h2>
                             <p class="pbutton sort clearfix">
                                 <?php $n=1;if(is_array(get_tag_list())) foreach(get_tag_list() AS $tag) { ?>
                                 <a title="<?php echo $tag;?>" href="<?php echo search_tag($catid,$tag);?>"><?php echo $tag;?></a>
                                 <?php $n++;}unset($n); ?>
                             </p>
                             <h2>按模板颜色</h2>
                             <p   class="pbutton color clearfix">
                                 <a class="c1" href="<?php echo search_tag($catid,'','红色');?>">红色</a>
                                 <a class="c2" href="<?php echo search_tag($catid,'','橙色');?>">橙色</a>
                                 <a class="c3" href="<?php echo search_tag($catid,'','黄色');?>">黄色</a>
                                 <a class="c4" href="<?php echo search_tag($catid,'','绿色');?>">绿色</a>
                                 <a class="c5" href="<?php echo search_tag($catid,'','蓝色');?>">蓝色</a>
                                 <a class="c6" href="<?php echo search_tag($catid,'','灰色');?>">灰色</a>
                                 <a class="c7" href="<?php echo search_tag($catid,'','黑色');?>">黑色</a>
                                 <a class="c8" href="<?php echo search_tag($catid,'','紫色');?>">紫色</a>
                                 <a class="c9" href="<?php echo search_tag($catid,'','棕色');?>">棕色</a>
                                 <a class="c10" href="<?php echo search_tag($catid,'','彩色');?>">彩色</a>
                             </p>
                         </div>
                     </div>
                    
                <!--</div>-->




                   
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
							<a href="javascript:;"><img src="<?php echo $thumb;?>" onclick="zoom(this, 'data/attachment/forum/201310/12/160242yos7ttafvv6zmftk.png')" width="270" _width="270" height="180" alt="<?php echo $title;?>" /></a>
							</div>

							<div class="spi fix">
							 
							<h4 class="wx mbm bbda"><?php echo $title;?> 

							  <font style=" font-size:14px; font-weight:normal;">[
							     <?php $cattype = array_filter(explode(',',$rs['tag']))?>
							     <?php $n=1;if(is_array($cattype)) foreach($cattype AS $ct) { ?>
                                   <a href="<?php echo search_tag($catid,$ct);?>" title="<?php echo $ct;?>下载" rel="category tag"> <?php echo $ct;?> </a>
                                 <?php $n++;}unset($n); ?>

								]
								</font>
								
							
							
							
							</h4>
							 
							<dl class="nums">
							<dt>现价:</dt>
							<dd>
							<p><em><?php echo $readpoint;?></em>&nbsp;积分 
												
																	<font class="xg1">
												&nbsp;
											 
							   </font>
											
									   &nbsp; <font class="xg1">（1人民币=1积分）</font>
												</p>
											
										   
											
							</dd>
							</dl>

							<div class="tags"><i class="icon-key"></i><strong>关键字：</strong>
									 
								            	<?php $n=1;if(is_array($keywords)) foreach($keywords AS $keyword) { ?>

												<a href="#"><?php echo $keyword;?></a>

								　            　<?php $n++;}unset($n); ?>
								
								     
									</div>


							<p class="pns mbm bugbot" style=" height:48px; line-height:48px;">
							<!-- <a  target="_blank" class="orangebot" href="<?php echo APP_PATH;?>index.php?m=content&c=readpoint&allow_visitor=<?php echo $allow_visitor;?>" rel="nofollow">立即购买</a> -->
                            <a class="orangebot" href="#" rel="nofollow">立即购买</a>
							 &nbsp; 
										<!--<a href="javascript:;" onclick="window.open('/demo.php?url=<?php echo $demo_url;?>')" class="greenbot" rel="nofollow">演示网站</a>-->
                                        <?php if($readpoint >0 ) { ?>
                                        <a href="<?php echo cost_demo_url($catid,$id);?>" class="greenbot" rel="nofollow">演示网站</a>
                                        <?php } else { ?>
                                        <a href="<?php echo $demo_url;?>" class="greenbot" rel="nofollow">演示网站</a>
                                        <?php } ?>
										 &nbsp; 
										<a href="#" class="bluebot" rel="nofollow" target="_blank">充值积分</a>
									   
							</p>
								   
									<p class="cl" ><font class="xg1">提示：付款后即可直接在线下载资源</font>&nbsp; &nbsp;
                                        <a href="#" class="c4095CE" target="_blank" rel="nofollow">如何购买资源？</a> &nbsp;
                                        <a href="#" class="c4095CE" target="_blank" rel="nofollow">如何充值积分？</a></p>

							</div>
							</div>
							<div class="fix mtw">
							</div>
						</div>


                </div>

                <div class="m_Grid5">
                    <h3>
                        模板浏览
                    </h3>

                     <div id="gallery"><ul>
					 <?php $n=1;if(is_array($photo)) foreach($photo AS $r) { ?>
	        	 
			
					 <li><a class="fancybox" href="<?php echo $r['url'];?>" title="我的网站"><span></span><em><?php echo $r['alt'];?></em><u><img src="<?php echo $r['url'];?>"  alt="<?php echo $r['alt'];?>" /></u></a></li>
					 <?php $n++;}unset($n); ?>
					 <li class="xg_demo">
                        <a target="_blank" title="点击网站演示" href="<?php echo cost_demo_url($catid,$id);?>">
                         <!-- <?php if($readpoint >0 ) { ?>
                         <a target="_blank" title="点击网站演示" href="<?php echo cost_demo_url($catid,$id);?>">
                         <?php } else { ?>
                         <a target="_blank" title="点击网站演示" href="<?php echo $demo_url;?>">
                         <?php } ?> -->
                             <img alt="点击网站演示" src="<?php echo IMG_PATH;?>demo.gif" data-pinit="registered">
                         </a>
                     </li>
					 
					 </ul>
					 <div class="clear"></div>
					 </div>

                    <h3>
                        主题下载
                    </h3>
                    <div class="clear">
                    </div>
                </div>

				
                <div class="m_Box16">
                   <div class="nr_down">
				   <!--<?php $n=1;if(is_array($down_url)) foreach($down_url AS $r) { ?>
	        	      <?php echo $r;?> 
			         
		        	<?php $n++;}unset($n); ?>-->
                       <a class="down_link" href="javascript:ad()" title="下载高端产品模板模板" target="_blank">进入模板下载地址</a>
                       <script type="text/javascript">
                           var isFirst = false;
                           function ad(){
                               if(!isFirst){
                                   isFirst = true;
                                   window.open('http://www.htmlmoban.net/index.php?m=content&c=index&a=ad');
                               }else{
                                   window.open('<?php echo $fileUrl;?>');
                               }
                           }
                       </script>
					

					<span>售价：<em><?php echo $readpoint;?></em>积分 <a href="#" target="_blank">如何获得积分？</a>
                        <a href="#" target="_blank">[充值]</a>
                        <a title="收藏模板到会员收藏夹" href="#">[收藏]</a>
                        <a href="#">[报错]</a>
                        <a title="返回列表" href="javascript:history.go(-1);">[返回列表]</a></span>
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
                <?php $relation_moban = get_relation_moban($cattype, $id, $catid)?>
                <?php if(count($relation_moban)>0) { ?>
				<div class="m_Boxxg">
                    <div class="m_Boxxgb">
                        类似的模板还有：
                    </div>
                    <ul id="tags_related">
                        <?php $n=1;if(is_array($relation_moban)) foreach($relation_moban AS $moban) { ?>
                        <li>
                            <a href="<?php echo $moban['url'];?>" title="<?php echo $moban['title'];?>">
                                <img src="<?php echo $moban['thumb'];?>"
                                alt="<?php echo $moban['title'];?>" class="thumbnail" />
                            </a>
                            <a href="<?php echo $moban['url'];?>" rel="bookmark" title="<?php echo $moban['keywords'];?>">
                                <?php echo do_sub_str($moban['title'],10);?>
                            </a>
                        </li>
                        <?php $n++;}unset($n); ?>
                    </ul>
                    <div class="clear">
                    </div>
                </div>
                <?php } ?>
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