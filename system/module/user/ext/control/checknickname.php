<?php
include '../../control.php';
class myUser extends user
{
    /**
     * 用户昵称是否存在
	 * http://local.meizai.com/api.php?m=user&a=checknickname&nickname=aaa
     */
    public function checkNickname(){
        $nickname = tool::getParams('nickname','');
        $data = $this->dao->select("*")->from(TABLE_USER)->where('nickname')->eq($nickname)->fetch();
        if($data) $this->send(array('result' => 'fail', 'message' => '昵称已经存在'));
        $this->send(array('result' => 'success', 'message' => '昵称不存在'));

    }
}
