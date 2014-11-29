<?php
include '../../control.php';
class myUser extends user
{
	/**
	 * 查询团详情
	 * http://local.meizai.com/api.php?m=user&a=apilogin&account=18250813004&password=123456
	 */
    public function apiLogin($account = '', $password = '')
    {
         /* If the user logon already, goto the pre page. */
        if($this->user->isLogon()) $this->send(array('result' => 'fail', 'message' => '您已经登陆'));

        /* If the user sumbit post, check the user and then authorize him. */
        if(!empty($_POST) || !empty($_GET))
        {
            if(!$account) $account = tool::getParams('phone', '');
            $password = tool::getParams('password', '');
            if(!$this->user->login($account, $password)) $this->send(array('result'=>'fail', 'message' => '手机号或密码错误'));
            $this->send(array('result' => 'success', 'message' => '登陆成功', 'data' => $this->app->user));
        }

        $this->send(array('result' => 'fail', 'message' => '获取不到用户名和密码'));
    }
}
