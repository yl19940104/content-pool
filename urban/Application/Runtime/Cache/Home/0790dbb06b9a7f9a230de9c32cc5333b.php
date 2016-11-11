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
				    <li><a href=""><span class="glyphicon glyphicon-heart"></span>&nbsp;Welcome, <?php echo ($user); ?></a><span>&nbsp;&nbsp;|&nbsp;</span></li>
					<li><a href="<?php echo U('index/user_center');?>"><span class="glyphicon glyphicon-user"></span>&nbsp;User center</a><span>&nbsp;&nbsp;|&nbsp;</span></li>
					<li><a href="<?php echo U('index/loginout');?>"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign out</a><span>&nbsp;&nbsp;</span></li>
				</ul>
			</div>
			<div class="searchdiv">
				<a href="homepage.html"><img src="/Public/images/urbanatomy.png"></a>
				<div class="form-group">
					<form action="<?php echo U('index/article_research');?>" id="form_id" method="get" enctype="multipart/form-data">
					<input type="text" name="content" class="form-control" name="search" value="<?php echo ($content); ?>" placeholder="Search">
					<!-- <label>
						<input type="submit" class="glyphicon glyphicon-search" value="Search" style="margin-left: -295px;height: 35px;width: 45px" />
					</label> -->
					<button type="button" class="btn btn-default btn-sm btn-search">
			          <span class="glyphicon glyphicon-search"></span>
			        </button>
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
				         <li>
				         	<?php if(($category == News )or($category == null )): ?><a href="<?php echo U('index/homepage');?>?category=News">News</a>
                            <?php else: ?>
                                <a href="<?php echo U('index/homepage');?>?category=News">News</a><?php endif; ?>
				         </li>
				         <li class="divider"></li>
				         <li>
                            <?php if(($category == Eat )): ?><a class="active" href="<?php echo U('index/homepage');?>?category=Eat">Eat&Drink</a>
                            <?php else: ?>
                                <a href="<?php echo U('index/homepage');?>?category=Eat">Eat&Drink</a><?php endif; ?>
				         </li>
				         <li class="divider"></li>
				         <li>
				         	<?php if(($category == Art )): ?><a class="active" href="<?php echo U('index/homepage');?>?category=Art">Art&Entertainment</a>
                            <?php else: ?>
                                <a href="<?php echo U('index/homepage');?>?category=Art">Art&Entertainment</a><?php endif; ?>
				         </li>
				         <li class="divider"></li>
				         <li>
				         	<?php if(($category == Lifestyle )): ?><a class="active" href="<?php echo U('index/homepage');?>?category=Lifestyle">Lifestyle</a>
                            <?php else: ?>
                                <a href="<?php echo U('index/homepage');?>?category=Lifestyle">Lifestyle</a><?php endif; ?>
				         </li>
				         <li class="divider"></li>
				         <li>
                            <?php if(($category == Education )): ?><a class="active" href="<?php echo U('index/homepage');?>?category=Education">Education</a>
                            <?php else: ?>
                                <a href="<?php echo U('index/homepage');?>?category=Education">Education</a><?php endif; ?>
				         </li>
				         <li class="divider"></li>
				         <li>
                            <?php if(($category == Community )): ?><a class="active" href="<?php echo U('index/homepage');?>?category=Community">Community</a>
                            <?php else: ?>
                                <a href="<?php echo U('index/homepage');?>?category=Community">Community</a><?php endif; ?>
				         </li>
				         <li class="divider"></li>
				         <li>
                            <?php if(($category == Features )): ?><a class="active" href="<?php echo U('index/homepage');?>?category=Features">Features</a>
                            <?php else: ?>
                                <a href="<?php echo U('index/homepage');?>?category=Features">Features</a><?php endif; ?>
				         </li>
				         <li class="divider"></li>
				         <li>
                            <?php if(($category == Photos )): ?><a class="active" href="<?php echo U('index/homepage');?>?category=Photos">Photos</a>
                            <?php else: ?>
                                <a href="<?php echo U('index/homepage');?>?category=Photos">Photos</a><?php endif; ?>
				         </li>
				         <li class="divider"></li>
				         <li>
				         	<?php if(($category == Videos )): ?><a class="active" href="<?php echo U('index/homepage');?>?category=Videos">Videos</a>
                            <?php else: ?>
                                <a href="<?php echo U('index/homepage');?>?category=Videos">Videos</a><?php endif; ?>
				         </li>
				      </ul>
				   </li>
				</ul>
			</div>
			<div class="top-nav">

				<ul id="myTab" class="nav nav-tabs">
					<li class="dropdown">
				      <a href="#" id="myTabDrop1" class="dropdown-toggle"
				         data-toggle="dropdown">Region <b class="caret"></b>
				      </a>
				      <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1">
				         <li ><a href="<?php echo U('index/homepage');?>" class="" tabindex="-1" >
				            All</a>
				         </li>
				         <li ><a href="<?php echo U('index/homepage');?>?region=shanghai" class="" tabindex="-1" >
				            ShangHai</a>
				         </li>
				         <li><a href="<?php echo U('index/homepage');?>?region=beijing" tabindex="-1" >
				            BeiJing</a>
				         </li>
				         <li><a href="<?php echo U('index/homepage');?>?region=shenzhen" tabindex="-1" >
				            Shenzhen</a>
				         </li>
				      </ul>
				    </li>
				    <li class="dropdown">
				      <a href="#" id="myTabDrop1" class="dropdown-toggle"
				         data-toggle="dropdown">Author <b class="caret"></b>
				      </a>
				      <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1">
				         <li ><a href="<?php echo U('index/homepage');?>" class="" tabindex="-1" >
				            All</a>
				         </li>
				         <li ><a href="<?php echo U('index/homepage');?>?author=yuelei" class="" tabindex="-1">
				            yuelei</a>
				         </li>
				      </ul>
				    </li>
				    <li class="dropdown">
				      <a href="#" id="myTabDrop1" class="dropdown-toggle"
				         data-toggle="dropdown">Article Type <b class="caret"></b>
				      </a>
				      <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1">
				         <li ><a href="<?php echo U('index/homepage');?>" class="" tabindex="-1" >
				            All</a>
				         </li>
				         <li ><a href="<?php echo U('index/homepage');?>?type=magazine" class="" tabindex="-1" >
				            magazine</a>
				         </li>
				         <li><a href="<?php echo U('index/homepage');?>?type=digital" tabindex="-1">
				            digital</a>
				         </li>
				      </ul>
				    </li><li class="dropdown">
				      <a href="#" id="myTabDrop1" class="dropdown-toggle"
				         data-toggle="dropdown">Rate <b class="caret"></b>
				      </a>
				      <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1">
				        <li ><a href="<?php echo U('index/homepage');?>" class="" tabindex="-1" >
				            All</a>
				         </li>
				        <li>
				         	<a href="<?php echo U('index/homepage');?>?difficulty=1">
				         	    <span class="glyphicon glyphicon-star star"></span>
				            </a>
				        </li>
				        <li>
				         	<a href="<?php echo U('index/homepage');?>?difficulty=2">
					         	<span class="glyphicon glyphicon-star star"></span>
							    <span class="glyphicon glyphicon-star star"></span>
						    </a>
						</li>
				        <li>
				         	<a href="<?php echo U('index/homepage');?>?difficulty=3">
				         		<span class="glyphicon glyphicon-star star"></span>
								<span class="glyphicon glyphicon-star star"></span>
								<span class="glyphicon glyphicon-star star"></span>
							</a>
						</li>
						<li>
				         	<a href="<?php echo U('index/homepage');?>?difficulty=4">
				         		<span class="glyphicon glyphicon-star star"></span>
								<span class="glyphicon glyphicon-star star"></span>
								<span class="glyphicon glyphicon-star star"></span>
								<span class="glyphicon glyphicon-star star"></span>
							</a>
						</li>
						<li>
				         	<a href="<?php echo U('index/homepage');?>?difficulty=5">
				         		<span class="glyphicon glyphicon-star star"></span>
								<span class="glyphicon glyphicon-star star"></span>
								<span class="glyphicon glyphicon-star star"></span>
								<span class="glyphicon glyphicon-star star"></span>
								<span class="glyphicon glyphicon-star star"></span>
							</a>
						</li>
				      </ul>
				    </li>
				</ul>
			</div>
			<div class="content">
			    <?php if(is_array($select)): $i = 0; $__LIST__ = $select;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div>
						        <img src="http://<?php echo ($server); ?>/<?php echo ($vo['picview']); ?>">
								<h5><?php echo ($vo['title']); ?> </h5>

								<label>
								
								<?php if(is_array($select)): $i = 0; $__LIST__ = array_slice($select,0,$vo['difficulty'],true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i;?><span class="glyphicon glyphicon-star star"></span><?php endforeach; endif; else: echo "" ;endif; ?>	
										
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
				<div class="left-nav">
					<ul class="nav nav-tabs left"> 
					   <li>
					      <a class="category">
                            <?php if(($view == 5 or $view == null)): ?>view 5 results
                            <?php elseif(($view == 10)): ?>
                                   view 10 results
                            <?php elseif(($view == 15)): ?>
                                   view 15 results
                            <?php else: ?>
                                   view 20 results<?php endif; ?>
					        <span class="caret"></span>
					      </a>
					      <ul class="dropdown-menu">
					         <li><a href="<?php echo U('index/article_research');?>?view=5&&content=<?php echo ($content); ?>">view 5 results</a></li>
					         <li><a href="<?php echo U('index/article_research');?>?view=10&&content=<?php echo ($content); ?>">view 10 results</a></li>
					         <li><a href="<?php echo U('index/article_research');?>?view=15&&content=<?php echo ($content); ?>">view 15 results</a></li>
					         <li><a href="<?php echo U('index/article_research');?>?view=20&&content=<?php echo ($content); ?>">view 20 results</a></li>
					      </ul>
					   </li>				  
					</ul>
				</div>
				<ul class="pagination">
						<div class="pages" id="pageBar">
                        <?php echo ($page); ?>
                </div>
				</ul>
				
			</div>
			<div class="footer" style="width:1500px;margin-left:-220px;">
				<div>
					<img src="/Public/images/logo.png">
					<img src="/Public/images/logo-uf.png">
					<span>© 2016 HK Focus Media  沪ICP备12038926号-2</span>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="/Public/js/jquery.min.js"></script>
	<script type="text/javascript" src="/Public/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/Public/js/main.min.js"></script>
</body>
</html>