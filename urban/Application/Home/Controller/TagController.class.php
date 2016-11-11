<?php
namespace Home\Controller;
use Home\Controller\CommonController;
use Think\Exception;
class TagController extends CommonController
{
	public function tags()
	{	   
		   $m = M('article_tag');
		   //从数据表获取整列tag数据
		   $aTags = $m->getField('tagname',true);
		   echo json_encode($aTags);
	}
	//删除tag
	public function tag_delete(){
		$tag_id = I('post.id');
		try{
			if($tag_id){
				$m = M('article_tag');
				$m->delete($tag_id);
				$this->ajaxReturn("success");
			}
		}catch(Exception $e){
			$this->ajaxReturn("error");
		}
	}
}
?>