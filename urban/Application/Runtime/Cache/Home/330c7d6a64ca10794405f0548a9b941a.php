<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<title>artical_view</title>
	<link rel="stylesheet" type="text/css" href="/Public/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="/Public/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/Public/css/style.css">
	<link rel="stylesheet" type="text/css" href="/Public/css/sweetalert.css">
</head>
<body>
	
	<div class="wrapper article_view">

		<header>
			<div class="topdiv">
				<ul>
				    <li><a href=""><span class="glyphicon glyphicon-heart"></span>&nbsp;Welcome, <?php echo ($name); ?></a><span>&nbsp;&nbsp;|&nbsp;</span></li>
				    <li><a href="<?php echo U('index/user_center');?>"><i class="fa fa-user"></i>&nbsp;User center</a><span>&nbsp;&nbsp;|&nbsp;</span></li>
					<li><a class="logout" ><span class="glyphicon glyphicon-log-out"></span>&nbsp;Log out</a><span>&nbsp;&nbsp;</span></li>
				</ul>
			</div>
			<div class="searchdiv">
				<a href="<?php echo U('index/homepage');?>"><img src="/Public/images/ua.png"></a>
				<img class="line" src="/Public/images/line.png">
				<div class="form-group">
				<!-- <form action="<?php echo U('index/article_research');?>" id="form_id" method="get" enctype="multipart/form-data">
					<input type="text" name="content" class="form-control" name="search" placeholder="Search">
					<button type="button" class="btn btn-default btn-sm btn-search">
			          <span class="glyphicon glyphicon-search"></span>
			        </button>
				</form> -->
				<form action="<?php echo U('index/homepage');?>" id="form_id" method="get" enctype="multipart/form-data">
					<input type="text" value="<?php echo ($content); ?>" name="content" class="form-control" placeholder="Search">
					<button type="button" class="btn btn-default btn-sm btn-search">
			          <span class="glyphicon glyphicon-search"></span>
			        </button>
				</form> 
				</div>
				<span>
					<a href="homepage.html"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</a>&nbsp;
					<a href="javascript:history.go(-1)"><i class="fa fa-angle-left back"></i>Back</a>
				</span>
			</div>
		</header>
		
		<div class="layout">
			<div class="left-nav">

				<ul class="nav nav-tabs left">

				   <li class="open leftnav">
				      <a class="" data-toggle="" href="#">
				         Category <span class="caret"></span>
				      </a>
				      <ul class="dropdown-menu">
				         <li >
				         	<?php if(($category == null )): ?><a href="<?php echo U('index/homepage');?>" class="active">All</a>
                            <?php else: ?>
                                <a href="<?php echo U('index/homepage');?>">All</a><?php endif; ?>
                 
				         </li>
				         <li class="divider"></li>
				         <li class="dropdown">
				         	<?php if(($category == 'Arts&Entertainment')): ?><a href="<?php echo U('index/homepage');?>?category=Arts%26Entertainment" class="active">Arts & Entertainment</a>
                            <?php else: ?>
                                <a href="<?php echo U('index/homepage');?>?category=Arts%26Entertainment">Arts & Entertainment</a><?php endif; ?>
                            <!-- 这是二级导航-->
                            <ul class="dropdown-menu child-menu" role="menu" aria-labelledby="myTabDrop1">
                            	<li><a href="<?php echo U('index/homepage');?>?category=Arts%26Entertainment&&category2=Art">Art</a></li>
                            	<li><a href="<?php echo U('index/homepage');?>?category=Arts%26Entertainment&&category2=Books">Books</a></li>
                            	<li><a href="<?php echo U('index/homepage');?>?category=Arts%26Entertainment&&category2=Film%26Television">Film & Television</a></li>
                            	<li><a href="<?php echo U('index/homepage');?>?category=Arts%26Entertainment&&category2=Music">Music</a></li>
                            	<li><a href="<?php echo U('index/homepage');?>?category=Arts%26Entertainment&&category2=Stage">Stage</a></li>
                            	<li><a href="<?php echo U('index/homepage');?>?category=Arts%26Entertainment&&category2=Interviews">Interviews</a></li>                       	
                            </ul>
				         </li>
				         <li class="divider"></li>
				         <li>
                            <?php if(($category == Charity)): ?><a class="active" href="<?php echo U('index/homepage');?>?category=Charity">Charity</a>
                            <?php else: ?>
                                <a href="<?php echo U('index/homepage');?>?category=Charity">Charity</a><?php endif; ?>
				         </li>
				         <li class="divider"></li>
				        
				         <li class="">
				         	<?php if(($category == Commentary)): ?><a href="<?php echo U('index/homepage');?>?category=Commentary" class="active">Commentary</a>
                            <?php else: ?>
                                <a href="<?php echo U('index/homepage');?>?category=Commentary">Commentary</a><?php endif; ?>                      
                         
				         </li>
				         <li class="divider"></li>
				         <li>
				         	<?php if(($category == Community)): ?><a class="active" href="<?php echo U('index/homepage');?>?category=Community">Community</a>
                            <?php else: ?>
                                <a href="<?php echo U('index/homepage');?>?category=Community">Community</a><?php endif; ?>
				         </li>
				         <li class="divider"></li>
				         <li class="dropdown">
                            <?php if(($category == Features)): ?><a class="active" href="<?php echo U('index/homepage');?>?category=Features">Features</a>
                            <?php else: ?>
                                <a href="<?php echo U('index/homepage');?>?category=Features">Features</a><?php endif; ?>
                             <!-- 这是二级导航-->
                            <ul class="dropdown-menu child-menu" role="menu" aria-labelledby="myTabDrop1">
                            	<li><a href="<?php echo U('index/homepage');?>?category=Features&&category2=PhotoEssays">Photo Essays</a></li>
                            	<li><a href="<?php echo U('index/homepage');?>?category=Features&&category2=History">History</a></li>
                            	<li><a href="<?php echo U('index/homepage');?>?category=Features&&category2=HumanInterest">Human Interest</a></li>
                            	<li><a href="<?php echo U('index/homepage');?>?category=Features&&category2=Infrastructure">Infrastructure</a></li>
                            	<li><a href="<?php echo U('index/homepage');?>?category=Features&&category2=Interviews">Interviews</a></li>
                            	<li><a href="<?php echo U('index/homepage');?>?category=Features&&category2=Language">Language</a></li>                                             	
                            	<li><a href="<?php echo U('index/homepage');?>?category=Features&&category2=Animals%26Pets">Animals & Pets</a></li>                                             	
                            </ul>
				         </li>
				         <li class="divider"></li>
				         <li class="dropdown">

                            <?php if(($category == 'Food&Drink')): ?><a class="active" href="<?php echo U('index/homepage');?>?category=Food%26Drink">Food & Drink</a>
                            <?php else: ?>
                                <a href="<?php echo U('index/homepage');?>?category=Food%26Drink">Food & Drink</a><?php endif; ?>
                             <!-- 这是二级导航-->
                            <ul class="dropdown-menu child-menu" role="menu" aria-labelledby="myTabDrop1">
                            	<li><a href="<?php echo U('index/homepage');?>?category=Food%26Drink&&category2=Restaurant%26Reviews">Restaurant Reviews</a></li>
                            	<li><a href="<?php echo U('index/homepage');?>?category=Food%26Drink&&category2=BarReviews">Bar Reviews</a></li>
                            	<li><a href="<?php echo U('index/homepage');?>?category=Food%26Drink&&category2=Interviews">Interviews</a></li>
                            	<li><a href="<?php echo U('index/homepage');?>?category=Food%26Drink&&category2=Guides">Guides</a></li>
                            	<li><a href="<?php echo U('index/homepage');?>?category=Food%26Drink&&category2=Features">Features</a></li>
                            </ul>
				         </li>
				         <li class="divider"></li>
				         <li>
                            <?php if(($category == Health)): ?><a class="active">Health</a>
                            <?php else: ?>
                                <a href="<?php echo U('index/homepage');?>?category=Health">Health</a><?php endif; ?>
				         </li>
				         <li class="divider"></li>
				         <li class="dropdown">
                            <?php if(($category == Lifestyle)): ?><a class="active" href="<?php echo U('index/homepage');?>?category=Lifestyle">Lifestyle</a>
                            <?php else: ?>
                                <a href="<?php echo U('index/homepage');?>?category=Lifestyle">Lifestyle</a><?php endif; ?>
                             <!-- 这是二级导航-->
                            <ul class="dropdown-menu child-menu" role="menu" aria-labelledby="myTabDrop1">
                            	<li><a href="<?php echo U('index/homepage');?>?category=Lifestyle&&category2=Interviews">Interviews</a></li>
                            	<li><a href="<?php echo U('index/homepage');?>?category=Lifestyle&&category2=Fashion%26Shopping">Fashion & Shopping</a></li>
                            	<li><a href="<?php echo U('index/homepage');?>?category=Lifestyle&&category2=Beauty">Beauty</a></li>
                            	<li><a href="<?php echo U('index/homepage');?>?category=Lifestyle&&category2=Hotels">Hotels</a></li>
                            	                                      	
                            </ul>
				         </li>
				         <li class="divider"></li>
				         <li>
				         	<?php if(($category == News)): ?><a class="active" href="<?php echo U('index/homepage');?>?category=News">News</a>
                            <?php else: ?>
                                <a href="<?php echo U('index/homepage');?>?category=News">News</a><?php endif; ?>
				         </li>
				         <li class="divider"></li>
				         <li class="dropdown">
				         	<?php if(($category == 'Science&Technology')): ?><a class="active" href="<?php echo U('index/homepage');?>?category=Science%26Technology">Science & Technology</a>
                            <?php else: ?>
                                <a href="<?php echo U('index/homepage');?>?category=Science%26Technology">Science & Technology</a><?php endif; ?>
                            <!-- 这是二级导航-->
                            <ul class="dropdown-menu child-menu" role="menu" aria-labelledby="myTabDrop1">
                            	<li><a href="<?php echo U('index/homepage');?>?category=Science%26Technology&&category2=Environment">Environment</a></li>
                            	<li><a href="<?php echo U('index/homepage');?>?category=Science%26Technology&&category2=Technology">Technology</a></li>
                            	                                      	
                            </ul>
				         </li>
				         <li class="divider"></li>
				          <li>
				         	<?php if(($category == Sport )): ?><a class="active" href="<?php echo U('index/homepage');?>?category=Sport">Sports</a>
                            <?php else: ?>
                                <a href="<?php echo U('index/homepage');?>?category=Sport">Sports</a><?php endif; ?>
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
				         <li ><a href="<?php echo U('index/homepage');?>?region=shanghai" class="" tabindex="-1" >
				            Shanghai</a>
				         </li>
				         <li><a href="<?php echo U('index/homepage');?>?region=beijing" tabindex="-1" >
				            Beijing</a>
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
				         <li ><a href="<?php echo U('index/homepage');?>?uploader=gaojibianji@163.com" class="" tabindex="-1">
				           sybil</a>
				         </li>
				         <li ><a href="<?php echo U('index/homepage');?>?uploader=bianji@163.com" class="" tabindex="-1">
				            joseph</a>
				         </li>
				      </ul>
				    </li>
				    <li class="dropdown">
				      <a href="#" id="myTabDrop1" class="dropdown-toggle"
				         data-toggle="dropdown">Origin <b class="caret"></b>
				      </a>
				      <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1">
				         <li ><a href="<?php echo U('index/homepage');?>?type=magazine" class="" tabindex="-1" >
				            magazine</a>
				         </li>
				         <li><a href="<?php echo U('index/homepage');?>?type=digital" tabindex="-1">
				            digital</a>
				         </li>
				      </ul>

				    </li>
				    <li class="dropdown">
				      <a href="#" id="myTabDrop1" class="dropdown-toggle"
				         data-toggle="dropdown">Downloads<b class="caret"></b>
				      </a>
				      <!-- 根据下载量升／降序-->
				      <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1">
				      	 <li><a href="<?php echo U('index/homepage');?>?shunxu=down" tabindex="-1">
				         	Descending &nbsp;<i class="fa fa-long-arrow-down"></i></a>
				         </li>
				         <li ><a href="<?php echo U('index/homepage');?>?shunxu=up" class="" tabindex="-1" >
				            Ascending &nbsp;&nbsp;&nbsp;<i class="fa fa-long-arrow-up"></i></a>
				         </li>

				      </ul>
				    </li>
				    <li class="dropdown">
				      <a href="#" id="myTabDrop1" class="dropdown-toggle"
				         data-toggle="dropdown">Rate <b class="caret"></b>
				      </a>
				      <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1">
				       <li> 
				         	<a href="<?php echo U('index/homepage');?>?difficulty=1">
				         		<i class="fa fa-star"></i>
				            </a>
				        </li>
				        <li>
				         	<a href="<?php echo U('index/homepage');?>?difficulty=2">
					         	<i class="fa fa-star"></i>
							    <i class="fa fa-star"></i>
						    </a>
						</li>
				        <li>
				         	<a href="<?php echo U('index/homepage');?>?difficulty=3">
				         		<i class="fa fa-star"></i>
				         		<i class="fa fa-star"></i>
				         		<i class="fa fa-star"></i>
							</a>
						</li>
						<li>
				         	<a href="<?php echo U('index/homepage');?>?difficulty=4">
				         		<i class="fa fa-star"></i>
				         		<i class="fa fa-star"></i>
				         		<i class="fa fa-star"></i>
				         		<i class="fa fa-star"></i>
							</a>
						</li>
						<li>
				         	<a href="<?php echo U('index/homepage');?>?difficulty=5">
				         		<i class="fa fa-star"></i>
				         		<i class="fa fa-star"></i>
				         		<i class="fa fa-star"></i>
				         		<i class="fa fa-star"></i>
				         		<i class="fa fa-star"></i>
							</a>
						</li>
				      </ul>
				    </li>
				</ul>
			</div>
			<div class="content">
				
				<ul class="ul-icon">
					<li><span class="glyphicon glyphicon-user"></span><?php echo ($select[0]['name']); ?></li>
					<li><span class="glyphicon glyphicon-time"></span><?php echo ($select[0]['posttime']); ?></li>
					<li><span><i class="fa fa-download"></i></span>Downloads(<?php echo ($select[0]['download']); ?>)</li>
					<li style="color:#e78024;">
			            <?php $__FOR_START_20884__=0;$__FOR_END_20884__=$select[0]["difficulty"];for($i=$__FOR_START_20884__;$i < $__FOR_END_20884__;$i+=1){ ?><i class="fa fa-star"></i><?php } ?>
					</li>
				</ul>
				<div class="line"></div>
				<div class="article_content">
					
					<h3 name="pid"><?php echo ($select[0]['title']); ?></h3>
					<p>
					    <?php echo ($select[0]['video']); ?>
					</p>
					<ul>
						<li class="li_tag">
							<!-- <label><?php echo ($select[0]['tag']); ?></label> -->
							<input type="hidden" name="tags" value="<?php echo ($select[0]['tag']); ?>">
						</li>
					</ul>
					<?php if(($group == 2)): ?><label>
							<a href="<?php echo U('Article/article_download');?>?pid=<?php echo ($select[0]['pid']); ?>" class="btn btn-primary btn-lg btn-block" id="download" style="border-radius: 2px;">Download</a>
						</label><?php endif; ?>
				</div>
			</div>
			
		</div>

		<footer>
			<div class="footer">
				<div>
					<img src="/Public/images/ua.png">
					<img src="/Public/images/color.png">
					<img src="/Public/images/logo.png">
					<img src="/Public/images/logo-uf.png" class="uf-logo">
					<span>© 2016 HK Focus Media  沪ICP备12038926号-2</span>
				</div>
			</div>
		</footer>
	</div>
	<input type="hidden" id="timeout" value="<?php echo ($timeout); ?>">
	
	<script type="text/javascript" src="/Public/js/jquery.min.js"></script>
	<script type="text/javascript" src="/Public/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/Public/js/sweetalert.min.js"></script>
	<script type="text/javascript" src="/Public/js/main.min.js"></script>
	<script>
		$(document).ready(function(){
			function jump2login(){
				window.location.href = "<?php echo U('log/login');?>?session_destory=1";
			}
			var timeout = document.getElementById("timeout").value;
			if(timeout == "yes"){
				swal({   
						title: "The operation timed out!",   
						text: "You will be redirected to Login Page soon.",
						type: "warning",   
						timer: 1500,   
						showConfirmButton: false
				 });
				 setTimeout(jump2login,1500);
			}

			function logout(){
			 swal({
			      title: "Logout?", 
			      text: "If you click 'OK', you will be redirected to Login Page", 
			      type: "warning",
			      showCancelButton: true
			    }, function() {
			      // Redirect
			      window.location.href = "<?php echo U('log/logout');?>";
			    });
			}
			$(".logout").on("click",function(){
				logout();
			});
			function buildtags(){
				var tagstr = $("input[name='tags']").val();
				var array = new Array();
				array = tagstr.split(',');
				console.log(array)
				var x;
				for(x in array){
					console.log(array[x])
					$(".li_tag").append("<label>"+ array[x] +"</label>");

				}
			}
			buildtags();

		});
	</script>

</body>
</html>