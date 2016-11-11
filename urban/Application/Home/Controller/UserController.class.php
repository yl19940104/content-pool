<?php
namespace Home\Controller;
use Home\Controller\CommonController;
use Think\Exception;
class UserController extends CommonController
{
	//添加用户
	public function user_add()
	{
		$post = I('post.');
        $group2 = I('post.group');
		switch($group2)
		{
			case "Adminstrator":
			    $group='1';
			    break;
			case "Chief Editor":
			    $group='2';
			    break;
			case "Editor":
			    $group='3';
			    break;
			case "Guest":
			    $group='4';
			    break;
		}
		$user = M('user');
		$data['username'] = $post['account'];  			//设置查询条件
    	$isexist = $user->where($data)->find();     //判断用户是否存在
    	if (count($isexist)>0)
    	{
    		$this->ajaxReturn('isexist');     			//不存在返回1 否则进行下一步
    	}
    	else
    	{
            $adddata = array(
	    		"username"=> $post['account'],
	    		"password"  => md5($post['password']),
	    		"name" => $post['name'],
	    		"city"  => $post['city'],
	    		"group" => $group,
	    		"group2" => $group
	    	);
            if($group==1)
            {
                $data2['group'] = '1';  			//设置查询条件
	    		$isexist = $user->where($data2)->select();
                if(count($isexist)==3)
                {
                	$this->ajaxReturn('fail');
                }
            }
            $user->add($adddata);
        }
        $this->ajaxReturn('success');
	}
    //更新用户信息
	public function user_update()
	{
		$post = I('post.');
        $group2 = I('post.group');
		switch($group2)
		{
			case "Adminstrator":
			    $group='1';
			    break;
			case "Chief Editor":
			    $group='2';
			    break;
			case "Editor":
			    $group='3';
			    break;
			case "Guest":
			    $group='4';
			    break;
		}
		$user = M('user');
    	$condition['uid'] = $post['uid'];
		$updatedata = array(
    		"username"=> $post['account'],
    		"name"  => $post['name'],
    		"city"  => $post['city'],
    		"group" => $group,
    		"group2" => $group
    		);
		$confirmpassword = $user->where($condition)->select();
		if($confirmpassword['password'] != $post['password'])
		{
			$updatadata['password'] = md5($post['password']);
		}
		$user->where($condition)->save($updatedata); // 根据条件更新记录
    }
	//删除用户
	public function user_delete()
	{
    	$condition['uid'] = $_GET['uid'];
        $m = M('user');
        $select=$m->where($condition)->select();
        if($select['0']['group']==1)
        {
            $this->ajaxReturn("fail");
        }
        else
        {
	        $result=$m->where($condition)->delete();
				if($result)
				{
					// $this->success('操作成功！');
					$this->ajaxReturn("removed");
				}
				else
				{
					// $this->error('操作失败！');
					$this->ajaxReturn("fail");
				}
		}
    }
    //用户修改密码时判断旧密码与新密码是否一致
    public function ajax_request()
    {
		$old_pwd = md5(I('post.pwd'));
		$m = M('user');
		$condition['password'] = $old_pwd;
		$condition['username'] = I('post.username');
        $result = $m->where($condition)->select();
		if($result){
			$this->ajaxReturn("success");
		}else{
			$this->ajaxReturn("error");
		}
	}
	//更新用户密码
	public function updatenewpassword()
	{
		$data['password'] = md5(I('post.password'));
		$condition['username'] = I('post.username');
		$m = M('user');
        $result = $m->where($condition)->save($data);
		if($result){
			$this->ajaxReturn("success");
		}else{
			$this->ajaxReturn("error");
		}
	}
	//上传头像的图片
    public function coverpic2()
    {
    	$picname = $_FILES['coverpic3']['name'];
		$picsize = $_FILES['coverpic3']['size'];
		if ($picname != "") {
			if ($picsize > 3145728) {
				echo '图片大小不能超过3M';
				exit;
			}
			$type = strstr($picname, '.');
			if ($type != ".gif" && $type != ".jpg" && $type != ".png") {
				echo '图片格式不对！';
				exit;
			}
			$rand = rand(100, 999);
			$pics = date("YmdHis") . $rand . $type;
            
            $path1= "./Public/yl.com";
			if (!file_exists($path1)) {
				dirname($path1);
   				mkdir($path1,0777);
			}
			$path2= $path1."/uploadpic";
			if (!file_exists($path2)) {
				dirname($path2);
   				mkdir($path2,0777);
			}
			//创建当前用户对应文件夹
			$path = $path2."/"."avator";
			if (!file_exists($path)) {
				dirname($path);
   				mkdir($path,0777);
			}
			//检查封面预览子目录是否存在
			$pathchaild = $path."/coverview";
			if (!file_exists($pathchaild)) {
				# code...
				dirname($pathchaild);
   				mkdir($pathchaild,0777);
			}
			//上传路径
			$pic_path = $pathchaild."/".$pics;

			//转移图片
			$res = move_uploaded_file($_FILES['coverpic3']['tmp_name'], $pic_path);
			//var_dump(dirname($path));
			
			/*使用图像处理生成固定大小图片*/

			//实例化图片处理类
	        $image = new \Think\Image();

            $path3 = $path."/Coverpic";
			if (!file_exists($path3)) {
				# code...
				dirname($path3);
   				mkdir($path3,0777);
			}
	        //打开图片准备处理
	        $image->open('./Public/yl.com/uploadpic/avator/coverview/'.$pics);

	        //裁剪图片并保存
	        $image->save('./Public/yl.com/uploadpic/avator/Coverpic/'.$pics);
            
            $unlink2 = 'Public/yl.com/uploadpic/picture/coverview/'.$pics;
	        //保存图片路径
	        $picview2 = 'Public/yl.com/uploadpic/avator/Coverpic/'.$pics;
	        session('picview2',$picview2);
	        /*session('unlink2',$unlink2);*/
		}
		$size = round($picsize/1024,2);
		$arr = array(
			'name'=>$picname,
			'pic'=>$pics,
			'size'=>$size
		);
		echo json_encode($arr);
	}
	//上传用户头像
    public function avator()
    {
    	//删除图片预览的缓存文件
    	unlink($_SESSION['unlink2']);
	    $user = M("user"); // 实例化User对象
	    $updatedata = array(
	    		"avator" =>$_SESSION['picview2']
	    		);
        session('picview2',null);
	    $condition['username'] = $_SESSION['username'];
	    $user->where($condition)->save($updatedata); // 根据条件更新记录
	}
	public function management(){
		unlink($_SESSION['picview']);
		$group=$_SESSION['group'];
		if($_GET[view]==null)
		{
			$view=5;
		}
		else
		{
			$view=$_GET[view];
		}
    	$condition['group'] = array('neq',1);
    	$m = M('user');
    	$count = $m->count();
		$p1 = getpage($count,$view);
		$list = $m->order('group2 asc')->limit($p1->firstRow, $p1->listRows)->select();
		$this->assign('select', $list); // 赋值数据集
	    $this->assign('pages', $p1->show()); // 赋值分页输出
	    $this->assign('pid', $pid);
	    $this->assign('user',$_SESSION['username']);
	    $this->assign('server', $_SESSION['server']);
	    $this->assign('view',$view);
	    $this->assign('name',$_SESSION['name']);
        $this->assign('group',$_SESSION['group']);
        $this->display();
    }
    public function recyclebin(){
		unlink($_SESSION['picview']);
		$group=$_SESSION['group'];
		$pid = $_GET['datetimepicker3'];//区别是在我上传的文章页面还是回收站中搜索时间区间
		if($pid==null)
		{
			$pid=$_GET['pid'];
		}
		if($_GET[view]==null)
		{
			$view=5;
		}
		else
		{
			$view=$_GET[view];
		}
    	//回收站
    	$m = M('article');
    	$date=strtotime($_GET['datetimepicker1']);
        $date2=strtotime($_GET['datetimepicker2']);
    	if($_SESSION['group']==2 or $_SESSION['group']==3)
    	{
    		$condition['uploader']=$_SESSION['name'];
    	}
    	if($_GET['difficulty']!=null)
        {
	        $condition['difficulty'] = $_GET['difficulty'];
	    }
        if($_GET['region']!=null)
        {
	        $condition['region'] = $_GET['region'];
	    }
	   
	    if($_GET['category']!=null)
        {
	        $condition['category'] = $_GET['category'];
	    }
	    if($_GET['category2']!=null)
        {
	        $condition['category2'] = $_GET['category2'];
	    }
	    if($_GET['uploader']!=null)
        {
	        $condition['uploader'] = $_GET['uploader'];
	    }
	    if($date!=null && $date2!=null)
	    {
        	$condition['deletetime']=array(array('egt',$date),array('elt',$date2));
	    }
	    if($_GET['article_search']!=null)
        {
            $article_search=$_GET['article_search'];
            $keywords = '%'.$article_search.'%';  //获取搜索关键字 
    		$condition['title'] = array('like',$keywords);
		}
		$condition['is_delete'] = 1;
		$count = $m->where($condition)->count();
        $p1 = getpage($count,$view);
		$list = $m->where($condition)->order('deletetime desc')->limit($p1->firstRow, $p1->listRows)->select();
		foreach($list as $key=>$value){
            $list[$key]['posttime'] = str_ireplace($value['posttime'],date("Y-m-d H:i:s",$value['posttime']), $value['posttime']);
            $list[$key]['deletetime'] = str_ireplace($value['deletetime'],date("Y-m-d H:i:s",$value['deletetime']), $value['deletetime']);
            $list[$key]['updatetime'] = str_ireplace($value['updatetime'],date("Y-m-d H:i:s",$value['updatetime']), $value['updatetime']);
        }
        if($_GET['article_search']!=null)
        {
            $article_search=$_GET['article_search'];
            $keywords = '%'.$article_search.'%';  //获取搜索关键字 
    		$condition['title'] = array('like',$keywords);
		}
		$this->assign('select', $list); // 赋值数据集
        $this->assign('pages', $p1->show()); // 赋值分页输出
        $this->assign('pid', $pid);
        $this->assign('user',$_SESSION['username']);
        $this->assign('server', $_SESSION['server']);
        $this->assign('view',$view);
        $this->assign('name',$_SESSION['name']);
        $this->assign('group',$_SESSION['group']);
        $this->assign('recycle',1);//用来区分是回收站中还是我的文章列表中搜索分类
        $this->assign('datetimepicker1',$_GET['datetimepicker1']);
        $this->assign('datetimepicker2',$_GET['datetimepicker2']);
        $_GET['category'] = str_ireplace('&','%26', $_GET['category']);
        $_GET['category2'] = str_ireplace('&','%26', $_GET['category2']);
        $this->assign('category',$_GET['category']);
        $this->assign('category2',$_GET['category2']);
        $this->assign('region',$_GET['region']);
        $this->assign('article_search', $_GET['article_search']);
        $this->assign('difficulty', $_GET['difficulty']);
        $this->assign('uploader', $_GET['uploader']);    
	    $this->assign('name',$_SESSION['name']);
        $this->assign('group',$_SESSION['group']);
        $this->display();
    }
    //用户中心页面
    public function user_center(){
    	$user = M('user');
		$condition['name'] = $_SESSION['name'];
		$result = $user->where($condition)->select();
		$this->assign('result',$result);
		$this->assign('server', $_SESSION['server']);
		$this->assign('user',$_SESSION['username']);
		$this->assign('name',$_SESSION['name']);
		$this->assign('group',$_SESSION['group']);
    	$this->display();
    }
    //tag的添加和展示
	public function article_tag(){
		//有值说明是添加tag页传来的
		$tagname = I('post.article_tag');
		try{
			if($tagname){
				$m = M('article_tag');
				$condition['tagname']=$tagname;
				$exist=$m->where($condition)->select();
				if($exist!=null)
				{
					$this->ajaxReturn("fail");
				}
				$data['tagname'] = $tagname;
				$data['createtime'] = time();
				$m->create($data);
				$m->add();
				$this->ajaxReturn("success");
			} 
		}catch (Exception $e){
			$this->ajaxReturn("error");
		}
		if($_GET[view]==null)
		{
			$view=5;
		}
		else
		{
			$view=$_GET[view];
		}
		$m = M('article_tag');
		$count = $m->count();
	    $p1 = getpage($count,$view);
		$list = $m->order('createtime desc')->limit($p1->firstRow, $p1->listRows)->select();
		foreach($list as $key=>$value){
                $list[$key]['createtime'] = str_ireplace($value['createtime'],date("Y-m-d H:i:s",$value['createtime']), $value['createtime']);
        }
		$this->assign('tags_list',$list);
		$this->assign('name',$_SESSION['name']);
		$this->assign('group',$_SESSION['group']);
		$this->assign('pages', $p1->show()); // 赋值分页输出
		$this->assign('view', $view);
		$this->display();
	}
	public function tag_search(){
		//有值说明是添加tag页传来的
		$searchTag = $_GET['search_tag'];
		if($_GET[view]==null)
		{
			$view=5;
		}
		else
		{
			$view=$_GET[view];
		}
		$m = M('article_tag');
		$keywords = '%'.$searchTag.'%';  //获取搜索关键字 
		$condition['tagname'] = array('like',$keywords);  //用like条件搜索title和content两个字段 
		$count = $m->where($condition)->count();
	    $p1 = getpage($count,$view);
		$list = $m->order('createtime desc')->limit($p1->firstRow, $p1->listRows)->where($condition)->select();
		foreach($list as $key=>$value){
                $list[$key]['createtime'] = str_ireplace($value['createtime'],date("Y-m-d H:i:s",$value['createtime']), $value['createtime']);
        }
		$this->assign('tags_list',$list);
		$this->assign('name',$_SESSION['name']);
		$this->assign('pages', $p1->show()); // 赋值分页输出
		$this->assign('searchid', '1'); // 赋值分页输出
		$this->assign('search_tag', $_GET['search_tag']);
		$this->assign('group',$_SESSION['group']);
		$this->assign('view', $view);
		$this->display('User/article_tag');
	}
	//下载的文章页面
    public function download_articles(){
    	unlink($_SESSION['picview']);
		$group=$_SESSION['group'];
		$pid = $_GET['datetimepicker3'];//区别是在我上传的文章页面还是回收站中搜索时间区间
		if($pid==null)
		{
			$pid=$_GET['pid'];
		}
		if($_GET[view]==null)
		{
			$view=5;
		}
		else
		{
			$view=$_GET[view];
		}				
        //下载
        $m = M('article');
        $condition2['user'] = $_SESSION['name'];
        $count2 =$m->join('download ON article.pid = download.articleid')->where($condition2)->count();
        $p2 = ngetpage($count2,$view);
	    $list2 =$m->join('download ON article.pid = download.articleid')->where($condition2)->order('downloadtime desc')->limit($p2->firstRow, $p2->listRows)->select();
	    foreach($list2 as $key=>$value)
	    {
                $list2[$key]['downloadtime'] = str_ireplace($value['downloadtime'],date("Y-m-d H:i:s",$value['downloadtime']), $value['downloadtime']);
                $list2[$key]['updatetime'] = str_ireplace($value['updatetime'],date("Y-m-d H:i:s",$value['updatetime']), $value['updatetime']);
        }
        $this->assign('select', $list2); // 赋值数据集
        $this->assign('pages', $p2->show()); // 赋值分页输出*/
        $this->assign('group', $group);
        $this->assign('server', $_SESSION['server']);     
        $this->assign('view',$view);
        $this->assign('user',$_SESSION['username']);
        $this->assign('server', $_SESSION['server']);
        $this->assign('name',$_SESSION['name']);	        
	    $this->assign('name',$_SESSION['name']);
        $this->assign('group',$_SESSION['group']);
        $this->display();
	}
	//上传的文章页面
    public function uploaded_articles(){
    	unlink($_SESSION['picview']);
		$group=$_SESSION['group'];
		$pid = $_GET['datetimepicker3'];//区别是在我上传的文章页面还是回收站中搜索时间区间
		if($pid==null)
		{
			$pid=$_GET['pid'];
		}
		if($_GET[view]==null)
		{
			$view=5;
		}
		else
		{
			$view=$_GET[view];
		}	
        $date=strtotime($_GET['datetimepicker1']);
        $date2=strtotime($_GET['datetimepicker2']);
        $article_research=$_GET['article_research'];
		$m = M('article');
		$condition['uploader'] = $_SESSION['name'];
		$condition['is_delete'] = 0;
		if($_GET['difficulty']!=null)
        {
	        $condition['difficulty'] = $_GET['difficulty'];
	    }
        if($_GET['region']!=null)
        {
	        $condition['region'] = $_GET['region'];
	    }
	   
	    if($_GET['category']!=null)
        {
	        $condition['category'] = $_GET['category'];
	    }
	    if($_GET['category2']!=null)
        {
	        $condition['category2'] = $_GET['category2'];
	    }
	    if($_GET['uploader']!=null)
        {
	        $condition['uploader'] = $_GET['uploader'];
	    }
	    if($date!=null && $date2!=null)
	    {
        	$condition['posttime']=array(array('egt',$date),array('elt',$date2));
	    }
	    if($_GET['article_search']!=null)
        {
            $article_search=$_GET['article_search'];
            $keywords = '%'.$article_search.'%';  //获取搜索关键字 
    		$condition['title'] = array('like',$keywords);
		} 
		$count = $m->where($condition)->count();
        $p1 = getpage($count,$view);
		$list = $m->where($condition)->limit($p1->firstRow, $p1->listRows)->order('posttime desc')->select();
		foreach($list as $key=>$value){
                $list[$key]['posttime'] = str_ireplace($value['posttime'],date("Y-m-d H:i:s",$value['posttime']), $value['posttime']);
                $list[$key]['updatetime'] = str_ireplace($value['updatetime'],date("Y-m-d H:i:s",$value['updatetime']), $value['updatetime']);
        }
		$this->assign('select', $list); // 赋值数据集
        $this->assign('pages', $p1->show()); // 赋值分页输出
        $this->assign('user',$_SESSION['username']);
        $this->assign('server', $_SESSION['server']);
        $this->assign('view',$view);
        $this->assign('name',$_SESSION['name']);
        $this->assign('datetimepicker1',$_GET['datetimepicker1']);
        $this->assign('datetimepicker2',$_GET['datetimepicker2']);
        $_GET['category'] = str_ireplace('&','%26', $_GET['category']);
        $_GET['category2'] = str_ireplace('&','%26', $_GET['category2']);
        $this->assign('category',$_GET['category']);
        $this->assign('category2',$_GET['category2']);
        $this->assign('region',$_GET['region']);
        $this->assign('article_search', $_GET['article_search']);
        $this->assign('difficulty', $_GET['difficulty']);
        $this->assign('uploader', $_GET['uploader']);
	    $this->assign('name',$_SESSION['name']);
        $this->assign('group',$_SESSION['group']);
        $this->display();
	}

	public function user_edit()
	{
    	$m = M('user'); 
    	$condition['uid'] = $_GET['uid'];
        $select = $m->where($condition)->select();
        $this->assign('select',$select);
		$this->assign('server', $_SESSION['server']);
        $this->assign('edit_id', $_GET['edit_id']);
        $this->assign('name',$_SESSION['name']);
        $this->assign('group',$_SESSION['group']);
        $this->assign('pid',$pid);
        $this->display('User/user_edit');
	}
}
?>