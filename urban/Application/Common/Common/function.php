 <?php
/**
 * TODO 基础分页的相同代码封装，使前台的代码更少
 * @param $count 要分页的总记录数
 * @param int $pagesize 每页查询条数
 * @return \Think\Page
 */
function getpage($count, $pagesize = 10) {
    $p = new Think\Page($count, $pagesize);
    $p->setConfig('header', '<li class="rows">Total&nbsp;<b>%TOTAL_ROW%</b>&nbsp;records&nbsp;</li>');
    $p->setConfig('prev', 'Prev');
    $p->setConfig('next', 'Next');
    $p->setConfig('last', 'Last');
    $p->setConfig('first', 'First');
    $p->setConfig('theme', '%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%%HEADER%');
    $p->lastSuffix = false;//最后一页不显示为总页数
    return $p;
}
function ngetpage($count, $pagesize = 10) {
    $p = new Think\Pagex($count, $pagesize);
    $p->setConfig('header', '<li class="rows">Total&nbsp;<b>%TOTAL_ROW%</b>&nbsp;records&nbsp;</li>');
    $p->setConfig('prev', 'Prev');
    $p->setConfig('next', 'Next');
    $p->setConfig('last', 'Last');
    $p->setConfig('first', 'First');
    $p->setConfig('theme', '%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%%HEADER%');
    $p->lastSuffix = false;//最后一页不显示为总页数
    return $p;
}
function password_md5($password, $salt) {
    $password = $_POST['password']; 
    //md5加密，传统做法直接将加密后的字符串存入数据库，但这不够，我们继续改良 
    $passwordmd5 = md5($password); 
    //为用户生成不同的密码盐，算法可以根据自己业务的需要而不同 
    $salt = substr(uniqid(rand()), -6); 
    //新的加密字符串包含了密码盐 
    $passwordmd5 = md5($passwordmd5.$salt);
}
?>
