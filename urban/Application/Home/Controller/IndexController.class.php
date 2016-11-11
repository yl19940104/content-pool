<?php
namespace Home\Controller;
use Home\Controller\CommonController;
use Think\Exception;

class IndexController extends CommonController {
    public function index(){
    	session('server',$_SERVER['HTTP_HOST']);
        $this->display('Index/login');
    }
    public function homepage(){
    	$user = M('user');
		if( I('get.content')==null)//如果不是搜索结果页面
    	{
			import('ORG.Util.Page');// 导入分页类
			$m = M('article');
			$user = M('user');
			if($_GET[view]==null)
			{
				$view=5;
			}
			else
			{
				$view=$_GET[view];
			}
			if($_GET['category']!=null)
			{
				session('category2',NULL);//点击一级目录会删除二级目录的session
	            $condition['category']=$_GET['category'];
	            session('category',$_GET['category']);
	            if($_GET['category2']!=null)
                {
		            $condition['category2']=$_GET['category2'];
		            session('category2',$_GET['category2']);   
		        }
	            $condition['is_delete'] = 0;
	        }
			elseif($_GET['region']!=null)
			{	
				$condition['region'] = $_GET['region'];
				if($_SESSION['category']!=null)
				{
					$condition['category']=$_SESSION['category'];
				}
				if($_SESSION['category2']!=null)
				{
					$condition['category2']=$_SESSION['category2'];
				}
				$condition['is_delete'] = 0;
		    }
		    elseif($_GET[uploader]!=null)
		    {
	            $condition['uploader'] = $_GET['uploader'];
	            if($_SESSION['category']!=null)
				{
					$condition['category']=$_SESSION['category'];
				}
	            if($_SESSION['category2']!=null)
				{
					$condition['category2']=$_SESSION[category2];
				}
	            $condition['is_delete'] = 0;
		    }
		    elseif($_GET[difficulty]!=null)
		    {
	            $condition['difficulty'] = $_GET[difficulty];
	            if($_SESSION['category']!=null)
				{
					$condition['category']=$_SESSION['category'];
				}
	            if($_SESSION['category2']!=null)
				{
					$condition['category2']=$_SESSION[category2];
				}
	            $condition['is_delete'] = 0;
		    }
		    elseif($_GET[type]!=null)
		    {
		    	$condition['type'] = $_GET[type];
		    	if($_SESSION['category']!=null)
				{
					$condition['category']=$_SESSION['category'];
				}
		    	if($_SESSION['category2']!=null)
				{
					$condition['category2']=$_SESSION[category2];
				}
		    	$condition['is_delete'] = 0; 
		    }
		    elseif($_GET['shunxu']!=null or $_GET['view_number']!=null)
		    {

		    	if($_SESSION['category']!=null)
				{
					$condition['category']=$_SESSION['category'];
				}
		    	if($_SESSION['category2']!=null)
				{
					$condition['category2']=$_SESSION[category2];
				}
		    	$condition['is_delete'] = 0;
		    }
		    else
		    {
		    	$condition['is_delete'] = 0;
		    	session('category',NULL);
		    	session('category2',NULL);
		    }
            $count = $m->where($condition)->count();
	        $p = getpage($count,$view);
	        if($_GET[shunxu]==null)
	        {
				$list = $m->where($condition)->limit($p->firstRow, $p->listRows)->order('posttime desc')->select();
				foreach($list as $key=>$value){
				            $list[$key]['posttime'] = str_ireplace($value['posttime'],date("Y-m-d",$value['posttime']), $value['posttime']);
				        }
			}
			elseif($_GET[shunxu]=='up')
			{
				$list = $m->field(true)->where($condition)->limit($p->firstRow, $p->listRows)->order('download asc')->select();
			}
			elseif($_GET[shunxu]=='down')
			{
				$list = $m->field(true)->where($condition)->limit($p->firstRow, $p->listRows)->order('download desc')->select();
			}
			foreach($list as $key=>$value)
			{
                $arr=explode('|',$value['picview']);
	            $list[$key]['picview'] = str_ireplace($value['picview'],$arr['0'], $value['picview']);
	        }
	        $author = M('author')->select();
	        $author_count = count($author);
			$this->assign('select', $list); // 赋值数据集
			$this->assign('uploader', $_GET[uploader]); // 赋值数据集
			$this->assign('i', $i);
			/*$this->assign('select2', $list2); */// 赋值数据集
	        $this->assign('page', $p->show()); // 赋值分页输出
	        $this->assign('server', $_SESSION['server']);
	        $this->assign('category',$_SESSION['category']);
	        $this->assign('category2',$_SESSION['category2']);
	        $this->assign('view',$view);
	        $this->assign('region',$_GET[region]);
	        $this->assign('type',$_GET[type]);
	        $this->assign('difficulty',$_GET[difficulty]);
	        $this->assign('shunxu',$_GET[shunxu]);
	        $this->assign('user',$_SESSION['username']);
	        $this->assign('name',$_SESSION['name']);
	        $this->assign('group',$_SESSION['group']);
	        $this->assign('author_count',$author_count);
	        $this->assign('author',$author);
	        $this->display(); 
    	}
    	else//homepage搜索
    	{
    		import('ORG.Util.Page');// 导入分页类
	    	if($_GET[view]==null)
			{
				$view=5;
			}
			else
			{
				$view=$_GET[view];
			}
	        $m = M('article'); 
	    	$title = $_GET['content'];  
	    	$keywords = '%'.$title.'%';  //获取搜索关键字 
	    	$condition['abstract'] = array('like',$keywords);
	    	$condition['title'] = array('like',$keywords);  //用like条件搜索title和content两个字段 
	    	$condition['_logic'] = 'or';
	    	$count = $m->where($condition)->count();
	    	$page=new \Think\Page($count,$limit);
	    	$p = getpage($count,$view); 
	    	$list = $m->where($condition)->limit($p->firstRow, $p->listRows)->order('posttime desc')->select();
	        foreach($list as $key=>$value)
	        {
	            $list[$key]['title'] = str_ireplace($title, " <font class='em_font'>$title</font>", $value['title']);
	            $list[$key]['abstract'] = str_ireplace($title, " <font class='em_font'>$title</font>", $value['abstract']);
	            $list[$key]['posttime'] = str_ireplace($value['posttime'],date("Y-m-d",$value['posttime']), $value['posttime']);
	        }
			$this->assign('select', $list); // 赋值数据集
	        $this->assign('page', $p->show()); // 赋值分页输出
	        $this->assign('server', $_SESSION['server']);
	        $this->assign('content', $title); // 赋值分页输出
	        $this->assign('view',$view);
	        $this->assign('user',$_SESSION['username']);
	        $this->assign('name',$_SESSION['name']);
	        $this->assign('group',$_SESSION['group']);
	        $this->display();
    	}
    }
    public function article_view(){
    	$pid = $_GET['pid'];
    	$m = M('article'); 
    	$condition['pid'] = $pid;
        $select = $m->where($condition)->select();
        foreach($select as $key=>$value){
                    $select[$key]['posttime'] = str_ireplace($value['posttime'],date("Y-m-d",$value['posttime']), $value['posttime']);
            }
        $this->assign('select',$select);
        $this->assign('user',$_SESSION['username']);
        $this->assign('name',$_SESSION['name']);
        $this->assign('group',$_SESSION['group']);
        $this->assign('server', $_SESSION['server']);
    	$this->display();
    }
    public function article_edit(){
		$edit_id=$_GET['edit_id'];
		$edit_difficulty=$_GET['edit_difficulty'];
		$author = M('author')->select();
		if($edit_id==1 or $edit_id ==2)//上传或修改文章
		{
	    	$pid = $_GET['pid'];
	    	$m = M('article'); 
	    	$condition['pid'] = $pid;
	        $select = $m->where($condition)->select();
	        $categoryall=M('categoryall');//获取所有文章分类
	        $select_category = $categoryall->select();
	        $array_category=explode('|',$select_category['0']['category_one']);
	        $array_categorytwo=explode('|',$select_category['0']['category_two']);
	        $i=count($array_category);
	        $j=count($array_categorytwo);
	        $this->assign('i',$i);
	        $this->assign('j',$j);
	        $this->assign('category_one',$array_category);
	        $this->assign('category_two',$array_categorytwo);
	        $this->assign('select',$select);
	        $this->assign('server', $_SESSION['server']);
	        $this->assign('edit_id', $_GET['edit_id']);
	        $this->assign('name',$_SESSION['name']);
	        $this->assign('group',$_SESSION['group']);
	        $this->assign('pid',$pid);
	    }
	    elseif($edit_id == 5)//高级编辑只修改文章难易度
	    {
	    	$pid = $_GET['pid'];
	    	$m = M('article'); 
	    	$condition['pid'] = $pid;
	        $select = $m->where($condition)->select();
	        $categoryall=M('categoryall');//获取所有文章分类
	        $select_category = $categoryall->select();
	        $array_category=explode('|',$select_category['0']['category_one']);
	        $array_categorytwo=explode('|',$select_category['0']['category_two']);
	        $i=count($array_category);
	        $j=count($array_categorytwo);
	        $this->assign('i',$i);
	        $this->assign('j',$j);
	        $this->assign('category_one',$array_category);
	        $this->assign('category_two',$array_categorytwo);
	        $this->assign('select',$select);
	        $this->assign('server', $_SESSION['server']);
	        $this->assign('edit_id', $_GET['edit_id']);
	        $this->assign('name',$_SESSION['name']);
	        $this->assign('group',$_SESSION['group']);
	        $this->assign('pid',$pid);
	    }
	    $this->assign('author',$author);
    	$this->display();
    }    
    public function user_edit(){
		$edit_id=$_GET['edit_id'];
    	$m = M('user'); 
    	$condition['uid'] = $_GET['uid'];
        $select = $m->where($condition)->select();
        $this->assign('select',$select);
        $this->assign('server', $_SESSION['server']);
        $this->assign('edit_id', $_GET['edit_id']);
        $this->assign('name',$_SESSION['name']);
        $this->assign('group',$_SESSION['group']);
    	$this->display('Index/article_edit');
    }	
}


