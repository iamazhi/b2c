<?php
defined('IN_MZ') or exit('Sorry,Access Deny.');

class index {
	// unicode 转换
    private $poi;
	public function __construct() {
        $this->poi = base::load_sys_class("baidu_poi");
	}

    /*
	 * 测试
	 */
	public function test() {
       $query       = "银行";
       $search_type = "3";
       $search_key  = "39.915,116.404";
       $radius      = "2000";
       $res         = $this->poi->get_place_search($query,$search_type,$search_key,$radius);
       print_r($res);
	}

	/*
	 * 获取最近的餐饮店
	 * http://localhost/beauty/index.php?m=nearby&c=index&a=&type=catering&key=39.915,116.404
	 */
	public function getList(){
        $typeList = array();
        $typeList['catering'] = "餐饮";
        $typeList['variety']  = "便利店";

		$type = getParams('type','');
        $name = $typeList[$type];

		$searchType = "3";
		$key        = isset($_GET['key']) ? trim($_GET['key']) : null; //这里是一个坐标值
		$pageNum    = isset($_GET['page']) ? trim($_GET['page'])-1 : 0;
		$res        = $this->poi->get_place_search($name, $searchType, $key, $pageNum);

        if( $res['status'] != 0) return print json_encode(array('code'=>'-1','message'=> $res['message'] )); // 返回错误信息.同时记录日志 message

        $list = array();
        $data = $res['results'];
        foreach($data as $key => $val){
            $location = $val['location'];
            $item = $value;
            unset($item['location']);
            $item['location'] = $location['lat'] . ',' . $location['lng'];
            $list[$key] = $item;
        }
		echo json_encode(array('code'=>'0','message'=>'成功','data'=>$list));
	}

    /*
	 * 获取最近的餐饮店详情
	 * http://localhost/beauty/index.php?m=nearby&c=index&a=getdetail&uid=24d05508623e53b612882445
	 */
	public function getDetail(){
		$uid = isset($_GET['uid']) ? trim($_GET['uid']):null;
		$res = $this->poi->get_place_detail($uid,2);

		$data = array();
		$data['name']             = $res['name'];
		$data['location']         = $res['location']['lng'].','.$res['location']['lat'];
		$data['address']          = $res['address'];
		$data['telephone']        = $res['telephone'];
		$data['overall_rating']   = $res['detail_info']['overall_rating'];
		$data['taste_rating']     = $res['detail_info']['taste_rating'];
		$data['service_rating']   = $res['detail_info']['service_rating'];
		$data['service_rating']   = $res['detail_info']['environment_rating'];
		$data['shop_hours']       = $res['detail_info']['shop_hours'];
		$data['featured_service'] = $res['detail_info']['featured_service'];
		$data['description']      = $res['detail_info']['description'];

		echo json_encode(array('code'=>'0','message'=>'成功','data'=>$data));
	}
}
