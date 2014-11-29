<?php
defined ( 'IN_MZ' ) or exit ( 'Sorry,Access Deny.' );

base::load_sys_class ( 'controller' );
define('SYS_STYLE', 'zh-cn');
class index extends controller {
	public function __construct() {
		parent::__construct ();
	}

	// http://localhost/beauty/index.php?m=page&c=index&a=register
	public function register(){

		$tpl = smarty_template('page');
		base::load_sys_class('form', '', 0);
		$tpl->display('register.tpl.htm');
	}

    // http://localhost/beauty/index.php?m=page&c=index&a=saveSecondHand
    // http://localhost/beauty/index.php?m=page&c=index&a=saveSecondHand
	public function saveSecondHand(){
		$tpl = smarty_template('page');
		base::load_sys_class('form', '', 0);
		$tpl->display('secondHand.tpl.htm');
	}

    // http://localhost/beauty/index.php?m=page&c=index&a=food
    public function saveFood(){
        $tpl = smarty_template('page');
        base::load_sys_class('form', '', 0);
        $tpl->display('food.tpl.htm');
    }

    // http://localhost/beauty/index.php?m=page&c=index&a=food
    public function saveTuan(){
        $tpl = smarty_template('page');
        base::load_sys_class('form', '', 0);
        $tpl->display('tuan.tpl.htm');
    }

}
