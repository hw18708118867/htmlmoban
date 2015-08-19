<?php
defined('IN_PHPCMS') or exit('No permission resources.');
//模型缓存路径
define('CACHE_MODEL_PATH',CACHE_PATH.'caches_model'.DIRECTORY_SEPARATOR.'caches_data'.DIRECTORY_SEPARATOR);

pc_base::load_app_func('util','content');
class tags {
	private $db;
	function __construct() {
		$this->db = pc_base::load_model('content_model');
	}
	/**
	 * 按照模型搜索
	 */
	public function init() {
            $catid = $_GET['catid'];
	        $key = $_GET['key'];
            $color = $_GET['color'];
            $area = isset($_GET['area']) ? $_GET['area'] : '';
            $class = isset($_GET['class']) ? $_GET['class'] : '';
            $modelid = isset($_GET['mid']) ? $_GET['mid'] : 12;

			$this->db->set_model($modelid);
			$tablename = $this->db->table_name;
			
			$page = max(intval($_GET['page']), 1);
			$sql  = "SELECT * FROM `{$tablename}` a,`{$tablename}_data` b WHERE a.id=b.id AND a.status=99 AND a.catid=$catid";
			$sql_count  = "SELECT COUNT(*) AS num FROM `{$tablename}` a,`{$tablename}_data` b WHERE a.id=b.id AND a.status=99 AND a.catid=$catid";
			$where = '';
            if($key)
			    $where .= " AND b.`tag` LIKE '%".$key."%'";
			if($color)
                $where .=" AND b.`style` LIKE '%".$color."%'";
            if($area)
                $where .= " AND b.`area` LIKE '%".$area."%'";
            if($class)
                $where .= " AND b.`class` LIKE '%".$class."%'";
			$pagesize = 21;
			$offset = intval($pagesize*($page-1));
			$sql_count .= $where;
			$this->db->query($sql_count);
			$total = $this->db->fetch_array();
			$total = $total[0]['num'];
			if($total!=0) {
				$sql .= $where;
				$order = '';
				$order = $_GET['orderby']=='a.id DESC' ? 'a.id DESC' : 'a.id ASC';
				$sql .= ' ORDER BY '.$order;
				$sql .= " LIMIT $offset,$pagesize";
				$this->db->query($sql);
				$datas = $this->db->fetch_array();
				$pages = pages($total, $page, $pagesize);
			} else {
				$datas = array();
				$pages = '';
			}
        if($modelid == 12)
		    include template('content','tags');
        elseif($modelid == 13)
            include template('content','tags_cool');
	}
}
?>