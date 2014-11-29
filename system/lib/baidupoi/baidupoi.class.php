<?php
class baidupoi 
{
  	/**
	 * 构造函数
	 */
	// 参考文档
	// http://developer.baidu.com/map/index.php?title=webapi/guide/webservice-placeapi
    private $ak = '8d67640eb191f28a38afe5c6faf5fdc6';
    private $sn = '';
    private $place_search_url = "http://api.map.baidu.com/place/v2/search";
    private $place_detail_url = "http://api.map.baidu.com/place/v2/detail";

    /**
     * 获取周边POI信息列表
     * @param type $query 关键词
     * @param type $search_type 搜索类型 1.region指定区域 search_key 检索区域，如果取值为“全国”或某省份，则返回指定区域的POI 
     *                                   2.矩形区域  search_key 如坐标范围39.915,116.404,39.975,116.414 检索矩形区域
     *                                   3.圆形区域  search_key 为当前位置坐标如39.915,116.404 此时会用到 $radius为范围 多少米
     * @param type $search_key  范围参数
     * @param type $radius    圆形区域范围值
     * @param type $scope     类型1详细  2简要列表
     * @param type $page_size 页码
     * @param type $page_num  页大小
     * @param type $output  输出格式， json、xml
     */
    public function getList($query, $search_type, $search_key, $page_num = 0, $radius = 30000, $scope = 1, $page_size = 6, $output = 'json')
    {
        $url =  $this->place_search_url . "?ak={$this->ak}&sn={$this->sn}&output=$output&page_size={$page_size}&page_num={$page_num}&scope={$scope}";
        if ($search_type == 1) $url .= "&query=" . urlencode($query) . "&region={$search_key}";
        if ($search_type == 2) $url .= "&query=" . urlencode($query) . "&bounds={$search_key}";
        if ($search_type == 3) $url .= "&query=" . urlencode($query) . "&location={$search_key}&radius={$radius}";

        $response = $this->get_curl($url);
        return $response;
    }

    /* @param type $uid  poi的uid
     * @param type $scope     类型1详细  2简要列表
    */
    public function getDetail($uid ,$scope=1,$output='json')
    {
        $url      =  $this->place_detail_url ."?uid={$uid}&scope={$scope}&ak={$this->ak}&sn={$this->sn}&output=$output";
        $response = $this->get_curl($url);
        return $response;
    }

    /**
     * CURL模拟提交
     * @param type $url
     * @return type
     */
    private  function get_curl($url)
    {

        if(!function_exists('curl_init')) die('I can\'t fetch anything, please set allow_url_fopen to ture or install curl extension');
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_HEADER, 0);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
        curl_setopt($curl, CURLOPT_TIMEOUT, 60);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);

        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }
}
?>
