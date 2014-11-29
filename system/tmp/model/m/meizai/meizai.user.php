<?php
helper::import('/Users/user05/work/meizai/system/module/user/model.php');
class extuserModel extends userModel 
{

function login($account = "", $password = "")
{
    if(!$account) $account = tool::getParams('phone', '');
    $password = tool::getParams('password', '');
    if (!$account || !$password) $this->send(array('result' => 'fail', 'message' => '手机号或密码不能为空'));
    $user = $this->identify($account, $password);
a($user);exit;

    if (!$user) $this->send(array('result' => 'fail', 'message' => '手机号或密码错误'));
    $this->send(array('result' => 'success', 'message' => $this->lang->getSuccess, 'data' => $user));
}
}