<?php
class shop extends control
{
	/**
	 * 获取商家列表
	 * http://local.meizai.com/api.php?m=shop&a=getList&uid=3
	 */
	public function getList(){
        $params = tool::getParams();
        $data   = $this->shop->getList($params);
        if($data) $this->send(array('result' => 'success', 'message' => $this->lang->getSuccess, 'data' => $data));
        $this->send(array('result' => 'fail', 'message'=> "没有您要找的信息"));
	}

	/**
	 * 查询团详情
	 * http://local.meizai.com/api.php?m=shop&a=getDetail&id=3
	 */
	public function getDetail(){
		$id   = tool::getParams('id');
        $data = $this->dao->findByID($id)->from(TABLE_SHOP)->fetch();
        $this->send(array('result' => 'success', 'message' => $this->lang->getSuccess, 'data' => $data));
	}

	/**
	 * 发起团
     * http://localhost/beauty/index.php?m=ruan&c=index&a=create
	 */
	public function create(){
		$data = tool::getParams("data",'');
		$data['created']  = strtotime(date('Y-m-d H:i:s'));
		$data['orderNum'] = 0;
		$result = parent::save($data);
		echo json_encode(array('code'=>'0','message'=>'成功','data'=>$result));
	}

	/**
	 * 更新团信息
     * http://localhost/beauty/index.php?m=tuan&c=index&a=update
	 */
	public function update(){
	}
}
