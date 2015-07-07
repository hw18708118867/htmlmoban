<?php
/**
 *  extention.func.php 用户自定义函数库
 *
 * @copyright			(C) 2005-2010 PHPCMS
 * @license				http://www.phpcms.cn/license/
 * @lastmodify			2010-10-27
 */
/**
 * @param null $tag
 * @param null $color
 * @return string
 * 组装查询模板url
 */
function search_tag($catid = 6, $tag = null, $color = null){
    return 'index.php?m=content&c=tags&a=init&catid='.$catid.'&key='.$tag.'&color='.$color;
}

/**
 * @return array
 * 获取模板分类
 */
function get_tag_list(){
    $tag_db = pc_base::load_model('model_field_model');
    $taginfo = $tag_db->get_one(array('fieldid'=>130));
    $tags = string2array($taginfo['setting']);
    $tagsArr = explode("\n",$tags['options']);
    $tagData = array();
    foreach($tagsArr as $tag){
        $tmpArr = explode('|', $tag);
        $tagData[] = $tmpArr[0];
    }
    return $tagData;
}

/**
 * @param $str
 * @return string
 * 处理字符串
 */
function do_str($str){
    $str = trim($str,',');
    $tmpArr = explode(',',$str);
    return implode(' ',$tmpArr);
}

/**
 * @param $str
 * @return string
 * 截取字符串
 */
function do_sub_str($str,$length = 20){
    return mb_substr($str,0,$length,'utf-8').'...';
}

/**
 * @param int $limit
 * @return mixed
 * 最新模板列表
 */
function get_moban_list($catid = 6, $limit = 12){
    $moban_db = pc_base::load_model('content_model');
    $moban_db->set_model(12);
    $tablename = $moban_db->table_name;
    //GET THE MOBANS AND MOBANDATA
    $sql  = "SELECT * FROM `{$tablename}` a,`{$tablename}_data` b WHERE a.id=b.id AND a.status=99 AND a.catid=$catid";
    $sql .= ' ORDER BY a.id DESC';
    $sql .= ' LIMIT '.$limit;
    $moban_db->query($sql);
    return $moban_db->fetch_array();
}

/**
 * @return mixed
 * 获取推荐模板
 */
function get_recommend_moban($catid = 6){
    $moban_db = pc_base::load_model('content_model');
    $moban_db->set_model(12);
    $tablename = $moban_db->table_name;
    $sql  = "SELECT * FROM `{$tablename}` a,`{$tablename}_data` b WHERE a.id=b.id AND a.status=99 AND a.posids=1 AND a.catid=$catid";
    $moban_db->query($sql);
    $rs = $moban_db->fetch_array();
    return $rs[0];
}

/**
 * @return mixed
 * 获取点击量排行
 */
function hits_moban($views = 'views', $catid = 6){
   $moban_db = pc_base::load_model('content_model');
   $sql = "SELECT a.$views,b.title,b.thumb,b.description,b.url,c.tag FROM `mb_hits` a left join `mb_moban` b on substr(a.hitsid,6)=b.id left join `mb_moban_data` c on b.id=c.id";
   $sql .= " WHERE a.catid=$catid AND b.status=99 ";
   $sql .= " ORDER BY a.$views DESC";
   $sql .= " LIMIT 8";
   $moban_db->query($sql);
   return $moban_db->fetch_array();
}

/**
 * @param $page
 * @param $catid
 * @param $id
 * @return array
 * 获取评论列表
 */

function comment_list($page, $catid, $id){
    $moban_db = pc_base::load_model('content_model');
    $pagesize = 5;
    $offset = intval($pagesize*($page-1));
    $commentid = 'content_'.$catid.'-'.$id.'-1';
    $sqlCount = "SELECT COUNT(*) AS num FROM `mb_comment_data_1` WHERE commentid='".$commentid."' AND status=1";
    $sql = "SELECT * FROM `mb_comment_data_1` WHERE commentid='".$commentid."' AND status=1 ORDER BY id DESC";
    $moban_db->query($sqlCount);
    $total = $moban_db->fetch_array();
    $total = $total[0]['num'];
    if($total!=0) {
        $sql .= " LIMIT $offset,$pagesize";
        $moban_db->query($sql);
        $commentDatas = $moban_db->fetch_array();
        $commentPages = pages($total, $page, $pagesize);
    } else {
        $commentDatas = array();
        $commentPages = '';
    }
    return array(
        'total' => $total,
        'commentDatas' => $commentDatas,
        'commentPages' => $commentPages,
    );
}
?>