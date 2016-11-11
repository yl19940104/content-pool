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
?>
