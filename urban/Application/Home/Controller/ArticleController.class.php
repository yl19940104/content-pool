<?php
namespace Home\Controller;
use Home\Controller\CommonController;
class ArticleController extends CommonController{
    //上传杂志或更新杂志或添加用户或修改用户信息
    public function article_add(){
    	//收集提交信息
    	$articleid = $_POST['articleid'];
        $post=I('post.');
        D('Article')->upload($post);
	}
	//更新文章信息
	public function article_update()
	{
        $post=I('post.');
        $post['category']=str_replace('amp;', '',$post['category']);
        $post['category2']=str_replace('amp;', '',$post['category2']);
        preg_match_all('/<img.*?src="(.*?)".*?>/is',$_POST['data'],$array);
        $i=count($array[1]);
		$str=$array[1][0];
		for($j=1;$j<$i;$j++)
		{
			$str=$str."|".$array[1][$j];
		}
		if($str!=null)
		{
		    $str=$str;
		}
		else
		{
		    $str='';
		}
    	/*$integration = I('post.integration');*/
    	//删除图片预览的缓存文件
    	unlink($_SESSION['unlink']);
	    //链接图片上传的数据库
	    $article = M('article');
	    $condition['pid'] = $_POST['pid'];
	        $updatedata = array(
			    "title" => $post['title'],
				"region" => $post['city'],
				"category" => $post['category'],
	    		"category2"=> $post['category2'],
	    		"updatetime" => strtotime(date('y-m-d H:i:s')),
	    		"difficulty" => $post['difficulty'],
	    		"download" => "0",
	    		"type" => $post['type'],
	    		"video" => $_POST['data'],
	    		"abstract" => $post['abstract'],
	    		"tag" => $post['tag'],
			    "picview" => $str
			);
			if($post['uploader']!=null)
			{
	    		$updatedata['uploader'] = $post['uploader'];
			}
			if($post['expiration']!=null)
			{
	    		$updatedata['expiration'] = $post['expiration'];
			}
			$picview = $_SESSION['picview'];
			if($picview != null)
			{
				$updatedata['picture_preview'] = $picview;
			}
            session('picview',null);
            $article->where($condition)->save($updatedata); // 根据条件更新记录
            $this->ajaxReturn('success');
	}
	//上传文章的封面图片
    public function coverpic(){
    	$picname = $_FILES['coverpic']['name'];
		$picsize = $_FILES['coverpic']['size'];
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
            session('pics',$pics);
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
            //11111111
			//创建当前用户对应文件夹
			$path = $path2."/picture";
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
			$res = move_uploaded_file($_FILES['coverpic']['tmp_name'], $pic_path);
			//var_dump(dirname($path));
			
			/*使用图像处理生成固定大小图片*/

			//实例化图片处理类
	        $image = new \Think\Image();

            $path3 = $path."/Coverpic";
			if (!file_exists($path3)){
				# code...
				dirname($path3);
   				mkdir($path3,0777);
			}
	        //打开图片准备处理
	        $image->open('./Public/yl.com/uploadpic/picture/coverview/'.$pics);

	        //裁剪图片并保存
	        $image->save('./Public/yl.com/uploadpic/picture/Coverpic/'.$pics);
        
	        //保存图片路径
	        $unlink = 'Public/yl.com/uploadpic/picture/coverview/'.$pics;
	        $picview = '/Public/yl.com/uploadpic/picture/Coverpic/'.$pics;
	        unlink($unlink);
	        /*session('unlink',$unlink);*/
	        session('picview',$picview);
		}
		$size = round($picsize/1024,2);
		$arr = array(
			'name'=>$picname,
			'pic'=>$pics,
			'size'=>$size
		);
		echo json_encode($arr);
	}

	
	//文章下载
	public function article_download()
    {
    	$server = $_SESSION['server'];
    	$articleid = $_GET['pid'];
    	//添加下载记录
    	$downloadtime = strtotime(date('Y-m-d H:i:s'));
		$m = M('download');
		$uploaddata = array(
    		"articleid"=> $articleid,
    		"user"  => $_SESSION['name'],
    		"downloadtime" => $downloadtime
    		);
		$m->add($uploaddata);
        //文章下载数改变
        $a = M("article"); 
        $condition['pid'] = $articleid;
        $select2 = $a->where($condition)->select();
	    $data['download'] = $select2[0]['download']+1;
	    $a->where($condition)->save($data);
        //用户下载数和积分改变
        $n = M("user"); 
        $condition['name'] = $_SESSION['name'];
        $select = $n->where($condition)->select();
	    $data['integration'] = $select[0]['integration']+$select2[0]['difficulty'];
	    $data['dtime'] = $select[0]['dtime']+1;
	    $n->where($condition)->save($data);
        //上传者的文章下载数改变
        $n = M("user");
        $condition['username']=$select2[0]['uploader'];
        $select = $n->where($condition)->select();
        $data['dtimes'] = $select[0]['dtimes']+1;
	    $n->where($condition)->save($data);
		//数据查询
        $a = M("article");
        $condition['pid'] =  $_GET['pid'];
        $re = $a->where($condition)->select();
        $path= "./Public/yl.com/uploadpic/zip";
		if (!file_exists($path)) {
			dirname($path);
				mkdir($path,0777);
		}
	    if($re[0]['picview']!=null)
	    {
            $image = new \Think\Image();
            $arr=explode('|',$re[0]['picview']);
            $i=count($arr);
            echo $arr;
            for($j=0;$j<$i;$j++)
            {
            	    $image->open('.'.$arr[$j]);
            	    $a=strrchr($arr[$j],"/");//截取最后一个"/"以及后面的字符
					$b=substr($a,1);
            	    $arr[$j] = str_ireplace($arr[$j], '/Public/ckfinder/zip/'.$b, $arr[$j]);
			        //裁剪图片并保存
			        $image->save('.'.$arr[$j]);
		    }
		}
        //把所有图片的src最简化
        $str = $re[0]['video'];
		preg_match_all('/<img.*?src="(.*?)".*?>/is',$str,$array);
		$i=count($array[1]);
		for($j=0;$j<$i;$j++)
		{
			$a=strrchr($array[1][$j],"/");//截取最后一个"/"以及后面的字符
			$b=substr($a,1);//从第二个位置截取字符串
			$array2[]=$b;
			/*echo $array2[$j];*/
		}
        for($j=0;$j<$i;$j++)
		{
			$str=str_ireplace($array[1][$j],$array2[$j],$str);
		}
        preg_match_all('/<iframe.*?src="(.*?)".*?>/is',$str,$b);
        $content = $str."video_url:".$b[1][0];  // 写入的内容 
		$file = './Public/ckfinder/zip/'."article.html";    // 写入的文件
		file_put_contents($file,$content,FILE_APPEND); 
        // 打包下载`
        $handler = opendir("./Public/ckfinder/zip");    //$cur_file 文件所在目录
        $download_file = array();
        $i = 0;
        while( ($filename = readdir($handler)) !== false ) {
            if($filename != '.' && $filename != '..') {
                $download_file[$i++] = $filename;
            }
        }
        closedir($handler);
        $scandir = new \Org\Util\traverseDir("./Public/ckfinder/zip","./Public/ckfinder/zip");    //$save_path zip包文件目录
        $scandir->tozip($download_file);
        for($j=0;$j<$i;$j++)
        {
		    unlink('.'.$arr[$j]);
	    }
	    unlink('./Public/ckfinder/zip/article.html');
    }
    public function article_delete()
    {
		if($_SESSION['group']!=1)//非管理员逻辑删除自己上传的72小时内的文章
        {
	    	$condition['pid'] = $_GET['pid'];
	        $a = M('article');
	        $data['is_delete']=1;
	        $data['deletetime']=strtotime(date('Y-m-d H:i:s'));
	        $select = $a->where($condition)->select();
	        if(($select[0]['posttime']+259200-time())>=0)
	        {
		        $a->where($condition)->save($data);//在文章表中添加删除信息
		        $user=M('user');
		        $delete_time = $data['deletetime'];
		        $title = $select[0]['title'];
                $deletedata = array(
			    		"delete_person"=> $_SESSION['name'],
			    		"title"  => $title,
			    		"delete_time" => $delete_time
			    		);
                $a=M('log')->add($deletedata);
	        	$this->ajaxReturn('deleted');	
		    }
		    else
		    {
		    	// $this->success('此文章已上传超过72小时，无法删除！','usercenter_myarticles',3);
		    	$this->ajaxReturn('overtime');
		    }
	    }
	    else//管理员逻辑删除任意一篇文章
	    {
	    	$condition['pid'] = $_GET['pid'];
	        $a = M('article');
	        $data['is_delete']=1;
	        $data['deletetime']=strtotime(date('Y-m-d H:i:s'));
	        $select = $a->where($condition)->select();
		    $a->where($condition)->save($data);
	        $this->ajaxReturn('deleted');   
	    }
    }
    public function delete_all($ids=array()){
    	if(IS_POST)
    	{
			$ids=$_POST['checkbox'];
			$number=(count($ids));
            for($i=0;$i<$number;$i++)
            {
                $condition['pid']=$ids[$i];
                $select=M('article')->where($condition)->select();
                
                if(($select[0]['posttime']+259200-time())>0)
                {
                	$data['is_delete']=1;
                    $data['deletetime']=strtotime(date('Y-m-d H:i:s'));
                	M('article')->where($condition)->save($data);
                	
                	$delete_time=strtotime(date('Y-m-d H:i:s'));
          		    $delete_person=$_SESSION['name'];
          		    $title=$select[0]['title'];
                	$deletedata = array(
				    		"delete_person"=> $delete_person,
				    		"title"  => $title,
				    		"delete_time" => $delete_time
				    		);
                	M('log')->add($deletedata);
                }
            }
       		$this->ajaxReturn('deleted');
        }
	}
	public function article_delete_real(){
    	$article=M('article');
        $user=M('user');

        $condition['pid']=$_GET['pid'];
     
        $select = $article->where($condition)->select();
    	
        
        $delete_time=strtotime(date('Y-m-d H:i:s'));

        $title=$select['0']['title'];

        $deletedata = array(
	    		"delete_person"=> $_SESSION['name'],
	    		"title"=>$title,
	    		"delete_time" => $delete_time
	    		);
        $log = M('log');
        $a = $log->add($deletedata);
        
        $article->where($condition)->delete();
        $this->ajaxReturn('deleted');  
    }
    //物理批量删除文章
    public function delete_all_real($ids=array()){
    	if (IS_POST){
			$ids=$_POST['checkbox'];
			$number=(count($ids))/2;
            $delete_time=strtotime(date('Y-m-d H:i:s'));
            $delete_person=$_SESSION['name'];
            for($i=0;$i<$number;$i++)
            {
            	$condition2['pid']=$ids[$i];
            	$result=M('article')->where($condition2)->select();
            	$title=$result[0]['title'];
            	$logdata = array(
		    		"delete_person"=> $delete_person,
		    		"title"=>$title,
		    		"delete_time" => $delete_time
	    		);
            	M('log')->add($logdata);
            }
            $result=M('article')->where(array('pid'=>array('in',$ids)))->delete();
			if($result){
				$this->ajaxReturn("removed");
			}else{
				$this->ajaxReture("fail");
			}
		}
	}
	public function article_restore(){
		$condition['pid'] = $_GET['pid'];
        $a = M('article');
        $data['is_delete']=0;
        $data['deletetime']=0;
	    $a->where($condition)->save($data);
	    $this->ajaxReturn('restored');
	}
}
?>