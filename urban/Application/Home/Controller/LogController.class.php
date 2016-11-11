<?php
namespace Home\Controller;
use Think\Controller;
use Think\Exception;
class LogController extends Controller {
	public function login(){
    	session('server',$_SERVER['HTTP_HOST']);
    	if (IS_POST) {

    		$user = M('user');
    		$username = I('post.username');  
	    	$password = md5(I('post.password'));
            $condition2['name']=$username;
            $select2 = $user->where($condition2)->select();
            $a=count($select2);
            if($a>0)
            {
            	if($select2[0]['password']==$password)
            	{
            		session_start();
		            $_SESSION["username2"]=$select2[0]['username'];
	                cookie('username',$select2[0]['username'],720000); // 指定cookie保存时间
			    	session('username',$select2[0]['username']);  			//保存用户名
			    	session('name',$username);  
		            session('group',$select2[0]['group']);
		            $this->ajaxReturn('3');
            	}
            	else
            	{
            		$this->ajaxReturn('2');
            	}
            }
            else
            {
	            session_start();
	            $_SESSION["username2"]=$username;
		    	cookie('username',$username,720000); // 指定cookie保存时间
		    	session('username',$username);  			//保存用户名
	            $condition['username'] = $username;
				$select = $user->where($condition)->select();
	            session('name',$select[0]['name']);  
	            session('group',$select[0]['group']);
		    	$data['username'] = $username;  			//设置查询条件
		    	$isexist = $user->where($data)->find();     //判断用户是否存在
		    	if (count($isexist)<= 0) {

		    		$this->ajaxReturn('1');     			//不存在返回1 否则进行下一步

		    	}elseif ($isexist['password'] !== $password){
		    		$this->ajaxReturn('2');     			//密码验证  错误返回2

		    	}else{
					$this->ajaxReturn('3');     			//全部正确返回3
		    	}
		    }
	    }
    	$this->display('Index/login');
    }
    public function logout(){
    	session('username',null);
    	session('username2',null);
    	session('category',null);
    	session('category2',null);
    	session('name',null);
    	session('group',null);
    	session('server',null);
    	cookie('username',null);
    	$this->display('Index/login');
    }
}