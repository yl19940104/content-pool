<?php
namespace Home\Model;
use Think\Model;
class UserModel extends Model
{
	protected $tablePrefix = "";
	protected $tableName = "user";
    protected $_validate = array(
        /* 验证用户名 */
        array('username', '10,30', -1, self::EXISTS_VALIDATE, 'length'), //用户名长度不合法
        array('username', '', -3, self::EXISTS_VALIDATE, 'unique'), //用户名被占用
    );

	/**
     * 登录指定用户
     * @param  $uid 用户ID
     * @return boolean      ture-登录成功，false-登录失败
     */
	public function login($username, $password)
    {
        /* 获取用户数据 */
        $user = $this->where($username)->find();
        if(is_array($user)){
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