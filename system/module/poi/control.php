<?php
class poi extends control
{
    public function __construct()
    {
        parent::__construct();
        $this->poi = $this->app->loadClass('baidupoi');
    }

    /*
     * 获取poi列表
	 * http://local.meizai.com/api.php?m=poi&c=getList
     */
    public function getList()
    {
        $typeList = array();
        $typeList['catering'] = "餐饮";
        $typeList['variety']  = "便利店";

        $type = tool::getParams('type','');
        $name = $typeList[$type];

        $searchType = "3";
        $key        = isset($_GET['key']) ? trim($_GET['key']) : null; //这里是一个坐标值
        $pageNum    = isset($_GET['page']) ? trim($_GET['page'])-1 : 0;

        // $name = "便利店";
        // $key  = "24.459657,118.087648"; //老虎城
        $response = $this->poi->getList($name, $searchType, $key, $pageNum);
        $response = json_decode($response, true);

        if($response['status'] != 0) $this->send(array('result'=>'fail','message'=> $response['message'] )); // 返回错误信息.同时记录日志 message

        $list = array();
        $data = $response['results'];
        foreach($data as $key => $val){
            $location = $val['location'];
            $item = $value;
            unset($item['location']);
            $item['location'] = $location['lat'] . ',' . $location['lng'];
            $list[$key] = $item;
        }
        $this->send(array('result'=>'success','message'=>'成功','data' => $list));
    }

    /*
     * 获取poi详情
     * http://localhost/beauty/index.php?m=nearby&c=index&a=getdetail&uid=24d05508623e53b612882445
     */
    public function getDetail()
    {
        $uid = isset($_GET['uid']) ? trim($_GET['uid']):null;

        $response = $this->poi->getDetail($uid,2);
        $response = json_decode($response, true);
        if($response['status'] != 0) $this->send(array('result'=>'fail','message'=> $response['message'] )); // 返回错误信息.同时记录日志 message

        $result = $response['result'];
        $data = array();
        $data['name']             = $result['name'];
        $data['location']         = $result['location']['lng'].','.$result['location']['lat'];
        $data['address']          = $result['address'];
        $data['telephone']        = $result['telephone'];
        $data['overall_rating']   = $result['detail_info']['overall_rating'];
        $data['taste_rating']     = $result['detail_info']['taste_rating'];
        $data['service_rating']   = $result['detail_info']['service_rating'];
        $data['service_rating']   = $result['detail_info']['environment_rating'];
        $data['shop_hours']       = $result['detail_info']['shop_hours'];
        $data['featured_service'] = $result['detail_info']['featured_service'];
        $data['description']      = $result['detail_info']['description'];

        $this->send(array('result'=>'success', 'message'=>'成功','data'=>$data));
    }

    // $distance 单位公里，已用
    public function getSquare($lat, $lng, $distance)
    {
        define("EARTH_RADIUS", 6371);//地球半径，平均半径为6371km
        $dlng = 2 * asin(sin($distance / (2 * EARTH_RADIUS)) / cos(deg2rad($lat)));
        $dlng = rad2deg($dlng);
        $dlat = $distance / EARTH_RADIUS;
        $dlat = rad2deg($dlat);

        $square = array();
        $square['lt'] = array('lng' => $lng - $dlng, 'lat' => $lat + $dlat); // left top
        $square['rt'] = array('lng' => $lng + $dlng, 'lat' => $lat + $dlat); // right top
        $square['lb'] = array('lng' => $lng - $dlng, 'lat' => $lat - $dlat); // left bottom
        $square['rb'] = array('lng' => $lng + $dlng, 'lat' => $lat - $dlat); // right bottom

        $scopeCondition = "lat<>0 and lat>{$square['rb']['lat']} and lat<{$square['lt']['lat']} and lng>{$square['lt']['lng']} and lng<{$square['rb']['lng']}";                                                        
        return $scopeCondition;
    }

    // http://api.map.baidu.com/lbsapi/getpoint/index.html，已经验证通过
    // $square = getSquare(24.459657, 118.087648, 1); //老虎城
    // foreach($square as $key => $value)
    // {
        // echo $key;
        // echo "\n";
        // echo implode(",", $value);
        // echo "\n";
    // }
    // $scopeCondition = "lat<>0 and lat>{$square['rb']['lat']} and lat<{$square['lt']['lat']} and lng>{$square['lt']['lng']} and lng<{$square['rb']['lng']}";                                                        
    // $info_sql = "select * from `lbs_info` where $scopeCondition";
}
