<?php
defined ( 'IN_MZ' ) or exit ( 'Sorry,Access Deny.' );
base::load_sys_class ( 'controller' );

class index extends controller {

	public function __construct() {
 		//$this->tableName = 'tuan';
		$this->db = base::load_model ( 'shop_model' );
		// 在这里配置关联关系. user 为返回的key. 通过uid 来匹配 mz_users 中的 id
		$this->relations = array (
					"0" => array (
							'relaId' => 'uid',
							'relatedId' => 'id', // 被关联的id
							'relatedTable' => 'users', // 被关联的表
							'alias' => 'user',  // 表别名,
						    'fileds' => '{x}name,{x}email,{x}phone,{x}location,{x}address,{x}appVersion,{x}userType' // 方便数据处理.统一写成这样{x}
					));
		parent::__construct ();
	}

	/**
	 * 查询商家列表
	 * http://localhost/beauty/index.php?m=shop&c=index&a=getList&uid=1312313
	 */
	public function getList(){
		$uid  = getParams('uid',null);
		$page = getParams("page",1);
		$param = array('uid' => $uid);
		$result = parent::queryObjectList($param, $page, $this->relations);
		echo json_encode(array('code'=>'0','message'=>'成功','data'=>$result));
	}

    /**
	 * 查询商家详情
     * http://localhost/beauty/index.php?m=tuan&c=index&a=queryTuanDetail&id=3
	 */
	public function getDetail(){
		$id = getParams('id','');
		$result = parent::queryObjectById($id,$this->relations);
		echo json_encode(array('code'=>'0','message'=>'成功','data'=>$result));
	}

    /**
	 * 添加商家
     * http://localhost/beauty/index.php?m=shop&c=index&a=create
	 */
	public function create(){
		$data = getParams("data",'');
		$data['created'] = strtotime(date('Y-m-d H:i:s'));
		$result = parent::save($data);
		echo json_encode(array('code'=>'0','message'=>'成功','data'=>$result));
	}

    /**
	 * 更新商家信息
     * http://localhost/beauty/index.php?m=shop&c=index&a=update
	 */
	public function update(){
	}
}
