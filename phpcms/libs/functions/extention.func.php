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
function search_tag($catid = 6, $tag = null, $color = null, $mid = 12, $area = null, $class = null){
    return 'index.php?m=content&c=tags&a=init&catid='.$catid.'&key='.$tag.'&color='.$color.'&mid='.$mid.'&area='.$area.'&class='.$class;
}

/**
 * @return array
 * 获取模板(酷站)分类
 */
function get_tag_list($fieldid = 130){
    $tag_db = pc_base::load_model('model_field_model');
    $taginfo = $tag_db->get_one(array('fieldid'=>$fieldid));
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
    $sql = "SELECT * FROM `mb_position_data` a LEFT JOIN `{$tablename}` b ON a.id=b.id AND a.catid=$catid AND a.posid=18 LEFT JOIN `{$tablename}_data` c ON b.id=c.id WHERE b.status=99 AND b.posids=1";
    $moban_db->query($sql);
    $rs = $moban_db->fetch_array();
    return $rs[0];
}

/**
 * @return mixed
 * 获取点击量排行(模板，特效)
 */
function hits_moban($views = 'views', $catid = 6, $modelid = 12, $limit = 8){
   $moban_db = pc_base::load_model('content_model');
    $moban_db->set_model($modelid);
    $tablename = $moban_db->table_name;
   $sql = "SELECT * FROM `mb_hits` a left join `{$tablename}` b on substr(a.hitsid,6)=b.id left join `{$tablename}_data` c on b.id=c.id";
   $sql .= " WHERE b.status=99 ";
    if($modelid !=14)
        $sql .= " AND a.catid=$catid ";
   $sql .= " ORDER BY a.$views DESC";
   $sql .= " LIMIT $limit";
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

/**
 * @param string $toolname
 * 工具url
 */
function tool_url($toolname=""){
    return "index.php?m=tool&c=index&a=show&mod=".$toolname;
}

/**
 * @param $cattype
 * @param $id
 * @param int $catid
 * @return mixed
 * 查询相关的模板(特效)
 */
function get_relation_moban($cattype, $id, $catid = 6, $modelid = 12){
    $moban_db = pc_base::load_model('content_model');
    $moban_db->set_model($modelid);
    $tablename = $moban_db->table_name;
    $sql = "SELECT * FROM `{$tablename}` a,`{$tablename}_data` b WHERE a.id=b.id AND a.status=99 AND a.catid=$catid AND a.id!=$id";
    if($cattype){
        $like = '';
        foreach($cattype as $tag){
            $like .= "OR b.tag LIKE '%$tag%' ";
        }
        if($like)
            $sql .= ' AND ('.ltrim($like,'OR').')';
    }
    $sql .= ' ORDER BY a.id DESC';
    $sql .= ' LIMIT 12';
    $moban_db->query($sql);
    return $moban_db->fetch_array();
}
/**
 * @param $catid
 * @return mixed
 * 获取分类名
 */
function get_catname($catid){
    $cat_db = pc_base::load_model('category_model');
    $catinfo = $cat_db->get_one(array('catid'=>$catid));
    return isset($catinfo['catname']) ? $catinfo['catname'] : '';
}

/**
 * @param $catid
 * @param int $limit
 * @param int $total
 * @return mixed
 * 获取特效列表
 */
function get_tx_list($catid, $limit=10, $total = 0){
    $cat_db = pc_base::load_model('category_model');
    if(!$total){
        $catinfo = $cat_db->get_one(array('catid'=>$catid));
        $arrchildid = $catinfo['arrchildid'];
        $arrchildid = explode(',',$arrchildid);
        $catids = '';
        foreach($arrchildid as $v){
            $catids .= "'".$v."',";
        }
        $catids = rtrim($catids,',');
    }
    $sql  = "SELECT * FROM `mb_tx` a,`mb_tx_data` b WHERE a.id=b.id AND a.status=99 ";
    if(!$total)
        $sql .= "AND a.catid IN (".$catids.")";
    $sql .= ' ORDER BY a.id DESC';
    $sql .= ' LIMIT '.$limit;
    $cat_db->query($sql);
    return $cat_db->fetch_array();
}
?>