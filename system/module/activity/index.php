<?php
defined('IN_MZ') or exit('Sorry,Access Deny.');
base::load_sys_class ( 'controller' );

class index {
	// unicode 转换
    private $poi;
	public function __construct() {
        parent::__construct ();
        $this->db = base::load_model ( 'activity_model' );
        // 在这里配置关联关系. user 为返回的key. 通过uid 来匹配 mz_users 中的 id
        $this->relations = array (
            "0" => array (
                'relaId' => 'uid',
                'relatedId' => 'id', // 被关联的id
                'relatedTable' => 'users', // 被关联的表
                'alias' => 'user',  // 表别名,
                'fileds' => '{x}name,{x}email,{x}phone,{x}location,{x}address,{x}appVersion,{x}userType' // 方便数据处理.统一写成这样{x}
            ));
	}

    /* 新建活动 */
    public function create(){
    }

    /* 更新活动信息 */
    public function update(){
    }

    /* 取消活动 */
    public function cencel(){
    }

    /* 查询活动列表 */
    public function getList(){
    }

    /* 查询活动信息 */
    public function getDetail(){
    }

    /* 活动报名 */
    public function join(){
    }
}
