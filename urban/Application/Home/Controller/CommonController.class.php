<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller
{
	public function _initialize()
	{
		if($_COOKIE['username'] == null)
		{
	        // $this->success('登录超时，请重新登录！','login.html',3);
			$this->assign('timeout','yes');
		}
	}
}