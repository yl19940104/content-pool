<?php
namespace Home\Controller;
use Think\Controller;
class PublicController extends Controller
{
	/**
     * 用户登录
     */
    public function login($username, $password)
    {
        if (IS_POST) {
        	$Member = D('Member');
            $uid = $User->login($username, $password);
            if(0 < $uid){ //UC登录成功*/
                /* 登录用户 */
                if($Member->login($uid)){ //登录用户
                    //TODO:跳转到登录前页面
                    $this->success('登录成功！', U('Index/index'));
                } else {
                    $this->error($Member->getError());
                }

            } else { //登录失败
                switch ($uid) {
                    case -1: $error = '用户不存在或被禁用！'; break; //系统级别禁用
                    case -2: $error = '密码错误！'; break;
                    default: $error = '未知错误！'; break; // 0-接口参数错误（调试阶段使用）
                }
                $this->error($error);
            }
        }
    }

    /* 退出登录 */
    public function logout(){
        if(is_login()){
            D('Member')->logout();
            session('[destroy]');
            $this->success('退出成功！', U('login'));
        } else {
            $this->redirect('login');
        }
    }
}
?>