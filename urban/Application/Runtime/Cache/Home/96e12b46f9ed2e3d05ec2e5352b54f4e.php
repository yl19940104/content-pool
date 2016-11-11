<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Message Board BackGround</title>
</head>
<body>
 <table class="table" border="1">
  <tr>
   <th>ID</th>
   <th>发布者</th>
   <th>内容</th>
   <th>发布时间</th>
   <th>操作</th>
  </tr>

  <?php if(is_array($board)): foreach($board as $key=>$b): ?><tr>
    <td><?php echo ($b["id"]); ?></td>
    <td><?php echo ($b["username"]); ?></td>
    <td><?php echo ($b["content"]); ?></td>
    <td><?php echo (date('y-m-d H:i',$b["time"])); ?></td>
    <td><a href="<?php echo U('admin.php/MsgManage/delete',array('id' => $b['id'])),'';?>">删除</a></td>
   </tr><?php endforeach; endif; ?>

  //新增tr代码短
  <tr>
   <td colspan='5' align='center'>
   //将5个单元格合并，并且居中显示
    <?php echo ($page); ?>
    //显示控制器中$this->page内容
   </td>
  </tr>
 </table>
</body>
</html>