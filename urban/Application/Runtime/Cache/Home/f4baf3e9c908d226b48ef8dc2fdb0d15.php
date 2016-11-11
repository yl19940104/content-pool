<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>home</title>
	<link rel="stylesheet" href="/Public/css/bootstrap.min.css">
	<link rel="stylesheet" href="/Public/css/style.css">
<body>
	<div class="wrapper homepage">
		<header>
			<div class="topdiv">
				<ul>
					<li><a href="<?php echo U('index/user_center');?>"><span class="glyphicon glyphicon-user"></span>&nbsp;User center</a><span>&nbsp;&nbsp;|&nbsp;</span></li>
					<li><a href="<?php echo U('index/loginout');?>"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign out</a><span>&nbsp;&nbsp;</span></li>
				</ul>
			</div>
			<div class="searchdiv">
				<a href="homepage.html"><img src="/Public/images/urbanatomy.png"></a>
				<div class="form-group">
					<form action="<?php echo U('index/article_research');?>" id="form_id" method="get" enctype="multipart/form-data">
					<input type="text" name="content" class="form-control" name="search" placeholder="Search">
					<label><input type="submit" class="glyphicon glyphicon-search" value="搜索" style="margin-left: -295px;height: 35px;width: 45px" /></label>
				</form>	
				</div>
				<span>
				<a href="homepage.html"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</a>&nbsp;
				<a href="javascript:history.go(-1)"><span class="glyphicon glyphicon-chevron-left"></span>Back</a>
				</span>
			</div>

		</header>
		<div class="layout">
			<div class="left-nav">

				<ul class="nav nav-tabs left">
				   
				   <li class="dropdown open leftnav">
				      <a class="category" data-toggle="" href="#">
				         Category <span class="caret"></span>
				      </a>
				      <ul class="dropdown-menu">
				         <li><a href="<?php echo U('index/homepage');?>">News</a></li>
				         <li class="divider"></li>
				         <li><a class="active" href="<?php echo U('index/eat');?>">Eat&Drink</a></li>
				         <li class="divider"></li>
				         <li><a href="<?php echo U('index/art');?>">Art&Entertainment</a></li>
				         <li class="divider"></li>
				         <li><a href="<?php echo U('index/art');?>">Lifestyle</a></li>
				         <li class="divider"></li>
				         <li><a href="<?php echo U('index/education');?>">Education</a></li>
				         <li class="divider"></li>
				         <li><a href="<?php echo U('index/community');?>">Community</a></li>
				         <li class="divider"></li>
				         <li><a href="<?php echo U('index/features');?>">Features</a></li>
				         <li class="divider"></li>
				         <li><a href="<?php echo U('index/photos');?>">Photos</a></li>
				         <li class="divider"></li>
				         <li><a href="<?php echo U('index/videos');?>">Videos</a></li>
				      </ul>
				   </li>
				  
				</ul>
			</div>
			<div class="top-nav">

				<ul class="nav nav-tabs top">
				   
				   <li class="dropdown">
				      <a class="dropdown-toggle" data-toggle="dropdown" href="#">
				         Region <span class="caret"></span>
				      </a>
				      <ul class="dropdown-menu">
				         <li><a href="#">ShangHai</a></li>
				         <li><a href="#">BeiJing</a></li>
				         <li><a href="#">PRD</a></li>
				      </ul>
				   </li>
				   <li class="dropdown">
				      <a class="dropdown-toggle" data-toggle="dropdown" href="#">
				         Aurthor <span class="caret"></span>
				      </a>
				      <ul class="dropdown-menu">
				         <li><a href="#">Swing</a></li>
				         <li><a href="#">jMeter</a></li>
				         <li><a href="#">EJB</a></li>
				         <li class="divider"></li>
				         <li><a href="#">分离的链接</a></li>
				      </ul>
				   </li>
				   <li class="dropdown">
				      <a class="dropdown-toggle" data-toggle="dropdown" href="#">
				         Article Type <span class="caret"></span>
				      </a>
				      <ul class="dropdown-menu">
				         <li><a href="#">Swing</a></li>
				         <li><a href="#">jMeter</a></li>
				         <li><a href="#">EJB</a></li>
				         <li class="divider"></li>
				         <li><a href="#">分离的链接</a></li>
				      </ul>
				   </li>
				    <li class="dropdown">
				      <a class="dropdown-toggle" data-toggle="dropdown" href="#">
				         Rate <span class="caret"></span>
				      </a>
				      <ul class="dropdown-menu">
				         <li><a href="#"><span class="glyphicon glyphicon-star star"></span></a></li>
				         <li><a href="#"><span class="glyphicon glyphicon-star star"></span>
						<span class="glyphicon glyphicon-star star"></span></a></li>
				         <li><a href="#"><span class="glyphicon glyphicon-star star"></span>
						<span class="glyphicon glyphicon-star star"></span>
						<span class="glyphicon glyphicon-star star"></span></a></li>
				         
				      </ul>
				   </li>
				</ul>
			</div>
			<div class="content">
			    <?php if(is_array($select)): $i = 0; $__LIST__ = $select;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div>
						        <img src="http://<?php echo ($server); ?>/<?php echo ($vo['picview']); ?>">
								<h5><?php echo ($vo['title']); ?> </h5>

								<label>
								
								<?php $__FOR_START_19358__=0;$__FOR_END_19358__=$vo['difficulty'];for($i=$__FOR_START_19358__;$i < $__FOR_END_19358__;$i+=1){ ?><span class="glyphicon glyphicon-star star"></span><?php } ?>	
										
								</label>
								<p>
									<?php echo ($vo['content']); ?>
								</p>
								<ul>
									<li><span class="label label-info"><?php echo ($vo['type']); ?></span></li>
									<li><span class="label label-info"><?php echo ($vo['uploader']); ?></span></li>
									<li><span class="label label-info"><?php echo ($vo['posttime']); ?></span></li>
									<li><span class="label label-info">Downloads(<?php echo ($vo['download']); ?>)</span></li>
								</ul>
								<!-- go to page article_view.html -->
								<a href="<?php echo U('index/article_view');?>?pid=<?php echo ($vo['pid']); ?>" class="btn btn-primary" style="margin-left: 30px;margin-bottom: 10px;">view</a>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>	    
				

				<!-- 分页 -->
				<select class="form-control">
			         <option>view 5 results</option>
			         <option>view 25 results</option>
			         <option>view 50 results</option>
			         <option>view 100 results</option>
			    </select>
				<ul class="pagination">
						  <li<a href="#"><div class="pages">
                        <?php echo ($page); ?>
                </div></a></li>
						</ul>
				
			</div>
			<div class="footer" style="width:1500px;margin-left:-220px;">
				<div>
					<img src="../assets/images/logo.png">
					<img src="../assets/images/logo-uf.png">
					<span>© 2016 HK Focus Media  沪ICP备12038926号-2</span>
				</div>
			</div>
		</div>

	</div>
	<script type="text/javascript" src="/Public/js/jquery.min.js"></script>
	<script type="text/javascript" src="/Public/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/Public/js/main.min.js"></script>
	<script>
		function jump(){
			window.location.href="article_view.html";
		}
		
	</script>
</body>
</html>