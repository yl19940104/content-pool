<?php
namespace Home\Model;
use Think\Model;
class ArticleModel extends Model{
	protected $tablePrefix = "";
	protected $tableName = "article";
	//上传页面信息
	public function upload($post){
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
    	//删除图片预览的缓存文件
    	unlink($_SESSION['unlink']);
	    //上传文章信息
        if($articleid == null)
        {
        	$picview = $_SESSION['picview'];
			$uploaddata = array(
			    		"title" => $post['title'],
			    		"region" => $post['city'],
			    		"category" => $post['category'],
			    		"category2"=> $post['category2'],
			    		"posttime" => strtotime(date('y-m-d H:i:s')),
			    		"uploader" => $_SESSION['name'],
			    		"difficulty" => $post['difficulty'],
			    		"download" => "0",
			    		"type" => $post['type'],
			    		"video" => $_POST['data'],
			    		"abstract" => $post['abstract'],
			    		"tag"=> $post['tag'],
			    		"picview" => $str
			    		);
			if($picview != null)
			{
				$uploaddata['picture_preview'] = $picview;
			}
			if($post['expiration']!=null)
			{
	    		$uploaddata['expiration'] = $post['expiration'];
			}
	    	//写入数据库
	        $this->add($uploaddata);
            session('picview',null);
	    }
	    return true;
	}
}
?>