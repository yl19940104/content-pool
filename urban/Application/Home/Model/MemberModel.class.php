<?php
namespace Home\Model;
use Think\Model;
class MemberModel extends Model
{
	protected $tablePrefix = "";
	protected $tableName = "user";
	/**
     * 登录指定用户
     * @param  $uid 用户ID
     * @return boolean      ture-登录成功，false-登录失败
     */
	public function login($username, $password)
	{
        /* 获取用户数据 */
        $user = $this->where($username)->find();

        if (is_array($user)) {
            /* 验证用户密码 */
            if(think_ucenter_md5($password, UC_AUTH_KEY) === $user['password']){
                $this->updateLogin($user['id']); //更新用户登录信息
                return $user['id']; //登录成功，返回用户ID
            } else {
                return -2; //密码错误
            }
        } else {
            return -1; //用户不存在或被禁用
        }

        /* 检测是否在当前应用注册 */
        $user = $this->field(true)->find($uid);
        if (!$user) {
            $result = $this->ajaxReturn('1'); //应用级别禁用
            return $result;
        }
        $result = $this->ajaxReturn('3');

        /* 登录用户 */
        /*$this->autoLogin($user);*/
        return result;
    }

    /**
     * 自动登录用户
     * @param  integer $user 用户信息数组
     */
    private function autoLogin($user)
    {
        /* 更新登录信息 */
        $data = array(
            'uid'             => $user['uid'],
            'login'           => array('exp', '`login`+1'),
            'last_login_time' => NOW_TIME,
            'last_login_ip'   => get_client_ip(1),
        );
        $this->save($data);

        /* 记录登录SESSION和COOKIES */
        $auth = array(
            'uid'             => $user['uid'],
            'username'        => $user['nickname'],
            'last_login_time' => $user['last_login_time'],
        );
        session('user_auth', $auth);
        session('user_auth_sign', data_auth_sign($auth));
    }
}