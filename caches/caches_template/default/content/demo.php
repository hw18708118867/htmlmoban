<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=gb2312">
        <title>
            <?php echo $title;?>
        </title>
        <script src="<?php echo JS_PATH;?>jquery.min.js" type="text/javascript">
        </script>
        <script src="<?php echo JS_PATH;?>demo.js" type="text/javascript">
        </script>
        <link type="text/css" rel="stylesheet" href="<?php echo CSS_PATH;?>demo.css"
        />
    </head>
    
    <body>
        <div class="head">
            <div class="tab">
                <div class="td_l">
                    <h1>
                        <a href="<?php echo $url;?>">
                            <?php echo $title;?>
                        </a>
                        -效果演示
                    </h1>
                </div>
                <div class="td_r">
                    <a href="<?php echo $url;?>">
                        购买模板
                    </a>
                    <a target="_blank" href="">
                        联系客服
                    </a>
                </div>
            </div>
            <div class="bg">
            </div>
            <div class="list">
			   <?php $n=1; if(is_array($photo)) foreach($photo AS $n => $r) { ?>
			   
                <a  <?php if($n==0) { ?>class="on"<?php } ?> href="javascript:void(0);" dimg="<?php echo $r['url'];?>">
                    <?php echo $r['alt'];?>
                </a>
				<?php $n++;}unset($n); ?>
                 
            </div>
            <div class="cl">
            </div>
        </div>
        <div class="xgt">
            <img class="demo" src="<?php echo $photo['0']['url'];?>" title=" <?php echo $photo['0']['alt'];?>" alt=" <?php echo $photo['0']['alt'];?>"
            />
        </div>
    </body>

</html>