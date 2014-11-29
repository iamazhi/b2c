<?php
include '../../control.php';
class myUser extends user
{
    /**
     * 手机是否存在
	 * http://local.meizai.com/api.php?m=user&a=checkphone&phone=18250813004
     */
    public function checkPhone(){
        $phone = tool::getParams('phone','');
        $data = $this->dao->select("*")->from(TABLE_USER)->where('account')->eq($phone)->fetch();
        if($data) $this->send(array('result' => 'fail', 'message' => '昵称已经存在'));
        $this->send(array('result' => 'success', 'message' => '昵称不存在'));
    }
}
