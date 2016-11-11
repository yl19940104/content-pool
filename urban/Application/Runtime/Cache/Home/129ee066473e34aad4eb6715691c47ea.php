<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<title>user_center</title>
	<link rel="stylesheet" href="/Public/css/font-awesome.min.css">
	<link rel="stylesheet" href="/Public/css/bootstrap-datetimepicker.css">
	<link rel="stylesheet" href="/Public/css/validationEngine.jquery.css">

	<link rel="stylesheet" type="text/css" href="/Public/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/Public/css/style.css">
	<link rel="stylesheet" type="text/css" href="/Public/css/sweetalert.css">
</head>
<body>
	
	<div class="wrapper usercenter_myarticles">

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
					<li class="dropdown open leftnav">
						<a class="category" data-toggle="" href="#">
							Category
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li>
								<a class="" href="<?php echo U('index/user_center');?>">My Profile</a>
							</li>
							<li class="divider"></li>
							<?php if(($group == 2 or $group == 3)): ?><li><a href="<?php echo U('index/article_edit');?>?edit_id=1">Add New Articles</a></li>
							<li class="divider"></li>
							<?php if(($group == 2 or $group == 3)): if(($pid == 1)): ?><li>
										<a class="active" href="<?php echo U('index/usercenter_myarticles');?>?pid=1">Uploaded Articles</a>
									</li>
									<?php else: ?>
									<li>
										<a href="<?php echo U('index/usercenter_myarticles');?>?pid=1">Uploaded Articles</a>
									</li><?php endif; endif; ?>
							<?php if(($group == 2)): if(($pid == 2)): ?><li>
										<a class="active" href="<?php echo U('index/usercenter_myarticles');?>?pid=2">Downloaded Articles</a>
									</li>
									<?php else: ?>
									<li>
										<a href="<?php echo U('index/usercenter_myarticles');?>?pid=2">Downloaded Articles</a>
									</li><?php endif; ?>
								<li class="divider"></li><?php endif; endif; ?>
							
							<?php if(($group == 1 or $group == 2 or $group == 3)): if(($pid == 3 or $pid == null)): ?><li>
										<a class="active" href="<?php echo U('index/usercenter_myarticles');?>?pid=3">Recycle Bin</a>
									</li>
									<?php else: ?>
									<li>
										<a href="<?php echo U('index/usercenter_myarticles');?>?pid=3">Recycle Bin</a>
									</li><?php endif; endif; ?>
							<?php if(($group == 1)): if(($pid == 4)): ?><li>
										<a class="active" href="<?php echo U('index/usercenter_myarticles');?>?pid=4">User Management</a>
									</li>
									<?php else: ?>
									<li>
										<a href="<?php echo U('index/usercenter_myarticles');?>?pid=4">User Management</a>
									</li><?php endif; endif; ?>
							<?php if(($group == 1)): ?><li>
									<a  href="<?php echo U('index/article_tag');?>">Article Tags</a>
								</li><?php endif; ?>
						</ul>
					</li>
					<li class="divider"></li>
				</ul>
			</div>
			<div class="top-nav">

				<ul class="nav nav-tabs top">

					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">User Center</a>
					</li>
                
				</ul>
				<?php if(($pid != 4 and $pid != 2)): ?><ul id="myTab" class="nav nav-tabs">
					<li class="dropdown">
				      <a href="#" id="myTabDrop1" class="dropdown-toggle"
				         data-toggle="dropdown">City<b class="caret"></b>
				      </a>
				      <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1">
				         <!-- <li ><a href="<?php echo U('index/homepage');?>?category=<?php echo ($category); ?>" class="" tabindex="-1" >
				            All</a>
				         </li> -->
				         <li ><a href="<?php echo U('index/usercenter_myarticles');?>?region=shanghai&&pid=<?php echo ($pid); ?>" class="" tabindex="-1" >
				            Shanghai</a>
				         </li>
				         <li><a href="<?php echo U('index/usercenter_myarticles');?>?region=beijing&&pid=<?php echo ($pid); ?>" tabindex="-1" >
				            Beijing</a>
				         </li>
				         <li><a href="<?php echo U('index/usercenter_myarticles');?>?region=shenzhen&&pid=<?php echo ($pid); ?>" tabindex="-1" >
				            Shenzhen</a>
				         </li>
				         <li><a href="<?php echo U('index/usercenter_myarticles');?>?region=guangzhou&&pid=<?php echo ($pid); ?>" tabindex="-1" >
				            Guangzhou</a>
				         </li>
				      </ul>
				    </li>
				    <li class="dropdown category">
				      <a href="#" id="myTabDrop1" class="dropdown-toggle"
				         data-toggle="dropdown">Category <b class="caret"></b>
				      </a>
				       <ul class="dropdown-menu">
				         <!-- <li >
				         	<?php if(($category == null )): ?><a href="<?php echo U('index/homepage');?>" class="active">All</a>
                            <?php else: ?>
                                <a href="<?php echo U('index/homepage');?>">All</a><?php endif; ?>
                 
				         </li> -->
				         <li class="dropdown">
				         	<?php if(($category == 'Arts&Entertainment' )): ?><a href="<?php echo U('index/usercenter_myarticles');?>?category=Arts%26Entertainment&&pid=<?php echo ($pid); ?>" class="active">Arts & Entertainment</a>
                            <?php else: ?>
                                <a href="<?php echo U('index/usercenter_myarticles');?>?category=Arts%26Entertainment&&pid=<?php echo ($pid); ?>">Arts & Entertainment</a><?php endif; ?>
                            <!-- 这是二级导航-->
                            <ul class="dropdown-menu child-menu" role="menu" aria-labelledby="myTabDrop1">
                            	<li><a href="<?php echo U('index/usercenter_myarticles');?>?category=Arts%26Entertainment&&category2=Art&&pid=<?php echo ($pid); ?>">Art</a></li>
                            	<li><a href="<?php echo U('index/usercenter_myarticles');?>?category=Arts%26Entertainment&&category2=Books&&pid=<?php echo ($pid); ?>">Books</a></li>
                            	<li><a href="<?php echo U('index/usercenter_myarticles');?>?category=Arts%26Entertainment&&category2=Film%26Television&&pid=<?php echo ($pid); ?>">Film & Television</a></li>
                            	<li><a href="<?php echo U('index/usercenter_myarticles');?>?category=Arts%26Entertainment&&category2=Music&&pid=<?php echo ($pid); ?>">Music</a></li>
                            	<li><a href="<?php echo U('index/usercenter_myarticles');?>?category=Arts%26Entertainment&&category2=Stage&&pid=<?php echo ($pid); ?>">Stage</a></li>
                            	<li><a href="<?php echo U('index/usercenter_myarticles');?>?category=Arts%26Entertainment&&category2=Interviews&&pid=<?php echo ($pid); ?>">Interviews</a></li>                                                	
                            </ul>
				         </li>

				         <li>
                            <?php if(($category == Charity)): ?><a class="active" href="<?php echo U('index/usercenter_myarticles');?>?category=Charity&&pid=<?php echo ($pid); ?>">Charity</a>
                            <?php else: ?>
                                <a href="<?php echo U('index/usercenter_myarticles');?>?category=Charity&&pid=<?php echo ($pid); ?>">Charity</a><?php endif; ?>
				         </li>
				        
				         <li class="">
				         	<?php if(($category == Commentary)): ?><a href="<?php echo U('index/usercenter_myarticles');?>?category=Commentary&&pid=<?php echo ($pid); ?>" class="active">Commentary</a>
                            <?php else: ?>
                                <a href="<?php echo U('index/usercenter_myarticles');?>?category=Commentary&&pid=<?php echo ($pid); ?>">Commentary</a><?php endif; ?>                      
                         
				         </li>
				         <li>
				         	<?php if(($category == Community)): ?><a class="active" href="<?php echo U('index/usercenter_myarticles');?>?category=Community&&pid=<?php echo ($pid); ?>">Community</a>
                            <?php else: ?>
                                <a href="<?php echo U('index/usercenter_myarticles');?>?category=Community&&pid=<?php echo ($pid); ?>">Community</a><?php endif; ?>
				         </li>
				         <li class="dropdown">
                            <?php if(($category == Features)): ?><a class="active" href="<?php echo U('index/usercenter_myarticles');?>?category=Features&&pid=<?php echo ($pid); ?>">Features</a>
                            <?php else: ?>
                                <a href="<?php echo U('index/usercenter_myarticles');?>?category=Features&&pid=<?php echo ($pid); ?>">Features</a><?php endif; ?>
                             <!-- 这是二级导航-->
                            <ul class="dropdown-menu child-menu" role="menu" aria-labelledby="myTabDrop1">
                            	<li><a href="<?php echo U('index/usercenter_myarticles');?>?category=Features&&category2=PhotoEssays&&pid=<?php echo ($pid); ?>">Photo Essays</a></li>
                            	<li><a href="<?php echo U('index/usercenter_myarticles');?>?category=Features&&category2=History&&pid=<?php echo ($pid); ?>">History</a></li>
                            	<li><a href="<?php echo U('index/usercenter_myarticles');?>?category=Features&&category2=HumanInterest&&pid=<?php echo ($pid); ?>">Human Interest</a></li>
                            	<li><a href="<?php echo U('index/usercenter_myarticles');?>?category=Features&&category2=Infrastructure&&pid=<?php echo ($pid); ?>">Infrastructure</a></li>
                            	<li><a href="<?php echo U('index/usercenter_myarticles');?>?category=Features&&category2=Interviews&&pid=<?php echo ($pid); ?>">Interviews</a></li>
                            	<li><a href="<?php echo U('index/usercenter_myarticles');?>?category=Features&&category2=Language&&pid=<?php echo ($pid); ?>">Language</a></li>                                             	
                            	<li><a href="<?php echo U('index/usercenter_myarticles');?>?category=Features&&category2=Animals%26Pets&&pid=<?php echo ($pid); ?>">Animals & Pets</a></li>                                             	
                            </ul>
				         </li>
				         <li class="dropdown">
                            <?php if(($category == FoodDrink)): ?><a class="active" href="<?php echo U('index/usercenter_myarticles');?>?category=Food%26Drink&&pid=<?php echo ($pid); ?>">Food & Drink</a>
                            <?php else: ?>
                                <a href="<?php echo U('index/usercenter_myarticles');?>?category=Food%26Drink&&pid=<?php echo ($pid); ?>">Food & Drink</a><?php endif; ?>
                             <!-- 这是二级导航-->
                            <ul class="dropdown-menu child-menu" role="menu" aria-labelledby="myTabDrop1">
                            	<li><a href="<?php echo U('index/usercenter_myarticles');?>?category=FoodDrink&&category2=RestaurantReviews&&pid=<?php echo ($pid); ?>">Restaurant Reviews</a></li>
                            	<li><a href="<?php echo U('index/usercenter_myarticles');?>?category=FoodDrink&&category2=BarReviews&&pid=<?php echo ($pid); ?>">Bar Reviews</a></li>
                            	<li><a href="<?php echo U('index/usercenter_myarticles');?>?category=FoodDrink&&category2=Interviews&&pid=<?php echo ($pid); ?>">Interviews</a></li>
                            	<li><a href="<?php echo U('index/usercenter_myarticles');?>?category=FoodDrink&&category2=Guides&&pid=<?php echo ($pid); ?>">Guides</a></li>
                            	<li><a href="<?php echo U('index/usercenter_myarticles');?>?category=FoodDrink&&category2=Features&&pid=<?php echo ($pid); ?>">Features</a></li>                            	
                            </ul>
				         </li>
				         <li>
                            <?php if(($category == Health)): ?><a class="active">Health</a>
                            <?php else: ?>
                                <a href="<?php echo U('index/usercenter_myarticles');?>?category=Health&&pid=<?php echo ($pid); ?>">Health</a><?php endif; ?>
				         </li>
				         <li class="dropdown">
                            <?php if(($category == Lifestyle)): ?><a class="active" href="<?php echo U('index/usercenter_myarticles');?>?category=Lifestyle&&pid=<?php echo ($pid); ?>">Lifestyle</a>
                            <?php else: ?>
                                <a href="<?php echo U('index/usercenter_myarticles');?>?category=Lifestyle&&pid=<?php echo ($pid); ?>">Lifestyle</a><?php endif; ?>
                             <!-- 这是二级导航-->
                            <ul class="dropdown-menu child-menu" role="menu" aria-labelledby="myTabDrop1">
                            	<li><a href="<?php echo U('index/usercenter_myarticles');?>?category=Lifestyle&&category2=Interviews&&pid=<?php echo ($pid); ?>">Interviews</a></li>
                            	<li><a href="<?php echo U('index/usercenter_myarticles');?>?category=Lifestyle&&category2=Fashion%26Shopping&&pid=<?php echo ($pid); ?>">Fashion & Shopping</a></li>
                            	<li><a href="<?php echo U('index/usercenter_myarticles');?>?category=Lifestyle&&category2=Beauty&&pid=<?php echo ($pid); ?>">Beauty</a></li>
                            	<li><a href="<?php echo U('index/usercenter_myarticles');?>?category=Lifestyle&&category2=Hotels&&pid=<?php echo ($pid); ?>">Hotels</a></li>
                            	                                      	
                            </ul>
				         </li>
				         <li>
				         	<?php if(($category == News)): ?><a class="active" href="<?php echo U('index/usercenter_myarticles');?>?category=News&&pid=<?php echo ($pid); ?>">News</a>
                            <?php else: ?>
                                <a href="<?php echo U('index/usercenter_myarticles');?>?category=News&&id=<?php echo ($pid); ?>">News</a><?php endif; ?>
				         </li>
				         <li class="dropdown">
				         	<?php if(($category == ScienceTechnology)): ?><a class="active" href="<?php echo U('index/usercenter_myarticles');?>?category=Science%26Technology&&pid=<?php echo ($pid); ?>">Science & Technology</a>
                            <?php else: ?>
                                <a href="<?php echo U('index/usercenter_myarticles');?>?category=Science%26Technology&&pid=<?php echo ($pid); ?>">Science & Technology</a><?php endif; ?>
                            <!-- 这是二级导航-->
                            <ul class="dropdown-menu child-menu" role="menu" aria-labelledby="myTabDrop1">
                            	<li><a href="<?php echo U('index/usercenter_myarticles');?>?category=Science%26Technology&&category2=Environment&&pid=<?php echo ($pid); ?>">Environment</a></li>
                            	<li><a href="<?php echo U('index/usercenter_myarticles');?>?category=Science%26Technology&&category2=Technology&&pid=<?php echo ($pid); ?>">Technology</a></li>
                            	                                      	
                            </ul>
				         </li>
				          <li>
				         	<?php if(($category == Sport )): ?><a class="active" href="<?php echo U('index/usercenter_myarticles');?>?category=Sport&&pid=<?php echo ($pid); ?>">Sport</a>
                            <?php else: ?>
                                <a href="<?php echo U('index/usercenter_myarticles');?>?category=Sport&&pid=<?php echo ($pid); ?>">Sport</a><?php endif; ?>
				         </li>
				      </ul>
				    </li>
				    <li class="dropdown">
				      <a href="#" id="myTabDrop1" class="dropdown-toggle"
				         data-toggle="dropdown">Rate <b class="caret"></b>
				      </a>
				      <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1">
				        <!-- <li ><a href="<?php echo U('index/homepage');?>?category=<?php echo ($category); ?>" class="" tabindex="-1" >
				            All</a>
			            </li> -->
				        <li> 
				         	<a href="<?php echo U('index/usercenter_myarticles');?>?difficulty=1&&pid=<?php echo ($pid); ?>">
				         		<i class="fa fa-star"></i>
				            </a>
				        </li>
				        <li>
				         	<a href="<?php echo U('index/usercenter_myarticles');?>?difficulty=2&&pid=<?php echo ($pid); ?>">
					         	<i class="fa fa-star"></i>
							    <i class="fa fa-star"></i>
						    </a>
						</li>
				        <li>
				         	<a href="<?php echo U('index/usercenter_myarticles');?>?difficulty=3&&pid=<?php echo ($pid); ?>">
				         		<i class="fa fa-star"></i>
				         		<i class="fa fa-star"></i>
				         		<i class="fa fa-star"></i>
							</a>
						</li>
						<li>
				         	<a href="<?php echo U('index/usercenter_myarticles');?>?difficulty=4&&pid=<?php echo ($pid); ?>">
				         		<i class="fa fa-star"></i>
				         		<i class="fa fa-star"></i>
				         		<i class="fa fa-star"></i>
				         		<i class="fa fa-star"></i>
							</a>
						</li>
						<li>
				         	<a href="<?php echo U('index/usercenter_myarticles');?>?difficulty=5&&pid=<?php echo ($pid); ?>">
				         		<i class="fa fa-star"></i>
				         		<i class="fa fa-star"></i>
				         		<i class="fa fa-star"></i>
				         		<i class="fa fa-star"></i>
				         		<i class="fa fa-star"></i>
							</a>
						</li>
				      </ul>
				    </li>
				    <?php if(($group == 1)): ?><li class="dropdown">
					      <a href="#" id="myTabDrop1" class="dropdown-toggle"
					         data-toggle="dropdown">Author<b class="caret"></b>
					      </a>
					      <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1">
					         <!-- <li ><a href="<?php echo U('index/homepage');?>?category=<?php echo ($category); ?>" class="" tabindex="-1" >
					            All</a>
					         </li> -->
					         <li ><a href="<?php echo U('index/usercenter_myarticles');?>?uploader=gaojibianji@163.com&&pid=<?php echo ($pid); ?>" class="" tabindex="-1" >
					            sybil</a>
					         </li>
					         <li><a href="<?php echo U('index/usercenter_myarticles');?>?uploader=bianji@163.com&&pid=<?php echo ($pid); ?>" tabindex="-1">
					            joseph</a>
					         </li>
					      </ul>
					    </li><?php endif; ?>
				</ul>
				<div class="search_div">	
	        					        	      	 
		        </div>
				
				<div>	
					<div class="container ">
						<form method="GET" id="inner_search" action="<?php echo U('index/usercenter_myarticles');?>" enctype="multipart/form-data">
						    <div class="row">
                            <?php if(($pid == 3)): ?><!-- 传参-->
						        <input type='hidden' class="form-control datepicker" placeholder="From" name="datetimepicker3" id='datetimepicker3' value="3" />
                            <?php elseif(($pid == 1)): ?>
                                <input type='hidden' class="form-control datepicker" placeholder="From" name="datetimepicker3" id='datetimepicker3' value="1"/><?php endif; ?>
						        <div class='col-sm-2'>
						        	<!-- 日期控件-->
						            	<input type='text' class="form-control datepicker" placeholder="From" name="datetimepicker1" id='datetimepicker1'/>
						            <i class="fa fa-calendar"></i>
						        </div>
						        <div class='col-sm-2' style="margin-left:-20px;">
						       
						            	<input type='text' class="form-control datepicker" placeholder="To" name="datetimepicker2" id='datetimepicker2'/>
						            
						            <i class="fa fa-calendar"></i>
						        </div>

								<div class='col-sm-2'>
						        	<button type="button" class="btn btn-default btn-sm btn-ok" id="ok">OK</button>
						        </div>  

						        <div class='col-sm-2'>
						            	<input type="search" name="article_search" class="form-control article_search" placeholder="Search" id='article_search'/>
						            	<a class="fun_search"><i class="fa fa-search"></i></a>
		        	            </div>

						            
						    </div>
					    </form>
					</div>
				</div><?php endif; ?>
			</div>
			<div class="content">
					<div id="myTabContent" class="tab-content">
						<?php if(($pid == 3)): ?><form method="post" action="<?php echo U('Articleuser/delete_all_real');?>" class="tab-pane fade in active mydownload" id="home">
								<?php elseif(($pid == 1 or $pid == null)): ?>
								<form method="post" action="<?php echo U('Articleuser/delete_all');?>" class="tab-pane fade in active mydownload" id="home">
									<?php elseif(($pid == 4)): ?>
									<form method="post" action="<?php echo U('User/user_delete_all');?>" class="tab-pane fade in active mydownload" id="home"><?php endif; ?>
									<table class="table download">
										<thead>
											<!-- 如果不是用户管理页面 -->
											<?php if(($pid != 4)): ?><tr>
													<?php if(($pid == null or $pid == 1 or ($pid == 3 and $group == 1))): ?><th>
															<input type="checkbox" id="checkall" >
														</th><?php endif; ?>
														<th>Article</th>
														<th>Category</th>
														<?php if(($group == 1)): ?><th>Author</th><?php endif; ?>
													<?php if(($pid == 1 or $pid == null)): ?><th>Upload Date</th>
														<?php elseif(($pid == 2)): ?>
														<th>Download Date</th>
														<?php elseif(($pid == 3)): ?>
														<th>Delete Date</th>
														<th>Upload Date</th><?php endif; ?>
													<th style="width:74px;">Updated Date</th>
													<th>Rate</th>
													<?php if((($group != 2 or $pid != 3) and ($group != 3 or $pid != 3)) and ($pid != 2)): if(($group == 2 or $group == 3)): ?><th colspan="2" style="text-align: center;">
																	<input type="button" value="&nbsp;&nbsp;&nbsp;Delete" class="btn btn-delall del" onclick="delAll_logic();">
																		<i class="fa fa-remove i-delall"></i>
																	&nbsp;
																</th>
															<?php elseif(($group == 1)): ?>
																<th colspan="2" style="text-align: center;">
																	<input type="button" value="&nbsp;&nbsp;&nbsp;Delete" class="btn btn-delall del" onclick="delAll();">
																		<i class="fa fa-remove i-delall"></i>
																	&nbsp;
																</th><?php endif; endif; ?>
												</tr>
												<?php else: ?>
												<tr>
													<th style="width:150px;">Account</th>
													<th>Name</th>
													<th>City</th>
													<th>Group</th>
													<th>Credits</th>
													<?php if(($pid != 4)): ?><th style="max-width: 100px;position: relative;left:23px;">
														<input type="button" value="&nbsp;&nbsp;&nbsp;Delete" class="btn btn-delall del" onclick="delAll();">
																<i class="fa fa-remove i-delall"></i>
															&nbsp;
													</th><?php endif; ?>
													<th>
														<a href="<?php echo U('index/article_edit');?>?edit_id=4" class="btn btn-add">
															<i class="fa fa-user-plus" aria-hidden="true"></i>
															<span style="vertical-align: sub;">Add</span>
														</a>
													</th>
													<th></th>
												</tr><?php endif; ?>
										</thead>
										<tbody>
											<?php if(is_array($select)): $i = 0; $__LIST__ = $select;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><!-- 如果不是用户管理页面 -->
												<?php if(($pid != 4)): ?><tr style="width:100%;">
														<?php if(($pid == null or $pid == 1 or ($pid == 3 and $group == 1))): ?><td>
																<input type="checkbox" name="id[]" class="check2" value="<?php echo ($vo["pid"]); ?>"/>
															</td><?php endif; ?>
														<td><?php echo ($vo['title']); ?></td>
														<td><?php echo ($vo['category']); ?></td>
														<?php if(($group == 1)): ?><td><?php echo ($vo['name']); ?></td><?php endif; ?>
														<?php if(($pid == null or $pid == 1)): ?><td><?php echo ($vo['posttime']); ?></td>
															<?php elseif(($pid == 2)): ?>
															<td><?php echo ($vo['downloadtime']); ?></td><?php endif; ?>
														<?php if(($pid == 3)): ?><td><?php echo ($vo['deletetime']); ?></td>
															<td><?php echo ($vo['posttime']); ?></td><?php endif; ?>
														<?php if(($vo['updatetime'] != null)): ?><td><?php echo ($vo['updatetime']); ?></td>
														<?php else: ?>
                                                            <td>Latest</td><?php endif; ?>
														<td>
															<?php $__FOR_START_3820__=0;$__FOR_END_3820__=$vo['difficulty'];for($i=$__FOR_START_3820__;$i < $__FOR_END_3820__;$i+=1){ ?><span class="glyphicon glyphicon-star star"></span><?php } ?>
														</td>
														<?php if(($pid == 1)): ?><!-- 假删除上传文章的删除按钮 -->
															<td style="text-align: right;">
																<a class="btn btn-danger" onclick="del(<?php echo ($vo['pid']); ?>);">
																	<i class="fa fa-remove"></i>
																	&nbsp;Delete
																</a>
															</td>
														<?php elseif(($pid == 3)): ?>
															<?php if(($group == 1)): ?><td>
																	<a class="btn btn-danger" onclick="clearaway(<?php echo ($vo['pid']); ?>);">
																		<i class="fa fa-remove"></i>
																		&nbsp;Delete
																	</a>
																</td><?php endif; ?>
															<td>
																<a class="btn btn-restore" onclick="res(<?php echo ($vo['pid']); ?>);">
																	<i class="fa fa-undo"></i>
																	&nbsp;Restore
																</a>
															</td><?php endif; ?>
														<?php if(($pid == 1)): ?><td>
																<a href="<?php echo U('index/article_edit');?>?pid=<?php echo ($vo['pid']); ?>&&edit_id=2" class="btn btn-tag">
																	<i class="fa fa-edit"></i>Edit
																</a>
															</td><?php endif; ?>
													</tr>
													<?php else: ?><!-- 如果是用户中心 -->
													<tr>
														<td><?php echo ($vo['username']); ?></td>
														<td><?php echo ($vo['name']); ?></td>
														<td><?php echo ($vo['city']); ?></td>
														<?php if(($vo['group'] == 1)): ?><td>Adminstrator</td>
															<?php elseif(($vo['group'] == 2)): ?>
															<td>Chief Editor</td>
															<?php elseif(($vo['group'] == 3)): ?>
															<td>Editor</td>
															<?php elseif(($vo['group'] == 4)): ?>
															<td>Guest</td><?php endif; ?>
														<td><?php echo ($vo['integration']); ?></td>
														<td style="text-align: center;">
															<a class="btn btn-danger" onclick="del_user(<?php echo ($vo['uid']); ?>);">
																	<i class="fa fa-remove"></i>
																	&nbsp;Delete
															</a>
														</td>
														<td style="position:relative;left:-20px;">
															<a href="<?php echo U('index/user_edit');?>?uid=<?php echo ($vo['uid']); ?>&&edit_id=3" class="btn btn-tag btn-edit"><i class="fa fa-edit"></i>Edit</a>
														</td>
													</tr><?php endif; endforeach; endif; else: echo "" ;endif; ?>
										</tbody>
									</table>
									<!-- 分页 -->
									<div class="content-footer" >
										<?php if(($pid == 1)): ?><ul class="nav nav-tabs footer-result">
												<li class="dropdown">
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
														<li>
															<a href="<?php echo U('index/usercenter_myarticles');?>?view=5&&pid=1&&datetimepicker1=<?php echo ($datetimepicker1); ?>&&datetimepicker2=<?php echo ($datetimepicker2); ?>&&article_search=<?php echo ($article_search); ?>&&difficulty=<?php echo ($difficulty); ?>&&category=<?php echo ($category); ?>&&category2=<?php echo ($category2); ?>&&region=<?php echo ($region); ?>&&recycle=<?php echo ($recycle); ?>&&uploader=<?php echo ($uploader); ?>">view 5 results</a>
														</li>
														<li>
															<a href="<?php echo U('index/usercenter_myarticles');?>?view=10&&pid=1&&datetimepicker1=<?php echo ($datetimepicker1); ?>&&datetimepicker2=<?php echo ($datetimepicker2); ?>&&article_search=<?php echo ($article_search); ?>&&difficulty=<?php echo ($difficulty); ?>&&category=<?php echo ($category); ?>&&category2=<?php echo ($category2); ?>&&region=<?php echo ($region); ?>&&recycle=<?php echo ($recycle); ?>&&uploader=<?php echo ($uploader); ?>">view 10 results</a>
														</li>
														<li>
															<a href="<?php echo U('index/usercenter_myarticles');?>?view=15&&pid=1&&datetimepicker1=<?php echo ($datetimepicker1); ?>&&datetimepicker2=<?php echo ($datetimepicker2); ?>&&article_search=<?php echo ($article_search); ?>&&difficulty=<?php echo ($difficulty); ?>&&category=<?php echo ($category); ?>&&category2=<?php echo ($category2); ?>&&region=<?php echo ($region); ?>&&recycle=<?php echo ($recycle); ?>&&uploader=<?php echo ($uploader); ?>">view 15 results</a>
														</li>
														<li>
															<a href="<?php echo U('index/usercenter_myarticles');?>?view=20&&pid=1&&datetimepicker1=<?php echo ($datetimepicker1); ?>&&datetimepicker2=<?php echo ($datetimepicker2); ?>&&article_search=<?php echo ($article_search); ?>&&difficulty=<?php echo ($difficulty); ?>&&category=<?php echo ($category); ?>&&category2=<?php echo ($category2); ?>&&region=<?php echo ($region); ?>&&recycle=<?php echo ($recycle); ?>&&uploader=<?php echo ($uploader); ?>">view 20 results</a>
														</li>
													</ul>
												</li>
											</ul>
											<?php elseif(($pid == 2)): ?>

											<ul class="nav nav-tabs footer-result">
												<li class="dropdown">
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
														<li>
															<a href="<?php echo U('index/usercenter_myarticles');?>?view=5&&pid=2">view 5 results</a>
														</li>
														<li>
															<a href="<?php echo U('index/usercenter_myarticles');?>?view=10&&pid=2">view 10 results</a>
														</li>
														<li>
															<a href="<?php echo U('index/usercenter_myarticles');?>?view=15&&pid=2">view 15 results</a>
														</li>
														<li>
															<a href="<?php echo U('index/usercenter_myarticles');?>?view=20&&pid=2">view 20 results</a>
														</li>
													</ul>
												</li>
											</ul>

											<?php elseif(($pid == 3)): ?>

											<ul class="nav nav-tabs footer-result">
												<li class="dropdown">
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
														<li>
															<a href="<?php echo U('index/usercenter_myarticles');?>?view=5&&pid=3&&datetimepicker1=<?php echo ($datetimepicker1); ?>&&datetimepicker2=<?php echo ($datetimepicker2); ?>&&article_search=<?php echo ($article_search); ?>&&difficulty=<?php echo ($difficulty); ?>&&category=<?php echo ($category); ?>&&category2=<?php echo ($category2); ?>&&region=<?php echo ($region); ?>&&recycle=<?php echo ($recycle); ?>&&uploader=<?php echo ($uploader); ?>">view 5 results</a>
														</li>
														<li>
															<a href="<?php echo U('index/usercenter_myarticles');?>?view=10&&pid=3&&datetimepicker1=<?php echo ($datetimepicker1); ?>&&datetimepicker2=<?php echo ($datetimepicker2); ?>&&article_search=<?php echo ($article_search); ?>&&difficulty=<?php echo ($difficulty); ?>&&category=<?php echo ($category); ?>&&category2=<?php echo ($category2); ?>&&region=<?php echo ($region); ?>&&recycle=<?php echo ($recycle); ?>&&uploader=<?php echo ($uploader); ?>">view 10 results</a>
														</li>
														<li>
															<a href="<?php echo U('index/usercenter_myarticles');?>?view=15&&pid=3&&datetimepicker1=<?php echo ($datetimepicker1); ?>&&datetimepicker2=<?php echo ($datetimepicker2); ?>&&article_search=<?php echo ($article_search); ?>&&difficulty=<?php echo ($difficulty); ?>&&category=<?php echo ($category); ?>&&category2=<?php echo ($category2); ?>&&region=<?php echo ($region); ?>&&recycle=<?php echo ($recycle); ?>&&uploader=<?php echo ($uploader); ?>">view 15 results</a>
														</li>
														<li>
															<a href="<?php echo U('index/usercenter_myarticles');?>?view=20&&pid=3&&datetimepicker1=<?php echo ($datetimepicker1); ?>&&datetimepicker2=<?php echo ($datetimepicker2); ?>&&article_search=<?php echo ($article_search); ?>&&difficulty=<?php echo ($difficulty); ?>&&category=<?php echo ($category); ?>&&category2=<?php echo ($category2); ?>&&region=<?php echo ($region); ?>&&recycle=<?php echo ($recycle); ?>&&uploader=<?php echo ($uploader); ?>">view 20 results</a>
														</li>
													</ul>
												</li>
											</ul>

											<?php elseif(($pid == null)): ?>
											<ul class="nav nav-tabs footer-result">
											<li class="dropdown">
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
														<li>
															<a href="<?php echo U('index/usercenter_myarticles');?>?view=5&&datetimepicker1=<?php echo ($datetimepicker1); ?>&&datetimepicker2=<?php echo ($datetimepicker2); ?>&&article_search=<?php echo ($article_search); ?>&&difficulty=<?php echo ($difficulty); ?>&&category=<?php echo ($category); ?>&&category2=<?php echo ($category2); ?>&&region=<?php echo ($region); ?>&&recycle=<?php echo ($recycle); ?>&&uploader=<?php echo ($uploader); ?>">view 5 results</a>
														</li>
														<li>
															<a href="<?php echo U('index/usercenter_myarticles');?>?view=10&&datetimepicker1=<?php echo ($datetimepicker1); ?>&&datetimepicker2=<?php echo ($datetimepicker2); ?>&&article_search=<?php echo ($article_search); ?>&&difficulty=<?php echo ($difficulty); ?>&&category=<?php echo ($category); ?>&&category2=<?php echo ($category2); ?>&&region=<?php echo ($region); ?>&&recycle=<?php echo ($recycle); ?>&&uploader=<?php echo ($uploader); ?>">view 10 results</a>
														</li>
														<li>
															<a href="<?php echo U('index/usercenter_myarticles');?>?view=15&&datetimepicker1=<?php echo ($datetimepicker1); ?>&&datetimepicker2=<?php echo ($datetimepicker2); ?>&&article_search=<?php echo ($article_search); ?>&&difficulty=<?php echo ($difficulty); ?>&&category=<?php echo ($category); ?>&&category2=<?php echo ($category2); ?>&&region=<?php echo ($region); ?>&&recycle=<?php echo ($recycle); ?>&&uploader=<?php echo ($uploader); ?>">view 15 results</a>
														</li>
														<li>
															<a href="<?php echo U('index/usercenter_myarticles');?>?view=20&&datetimepicker1=<?php echo ($datetimepicker1); ?>&&datetimepicker2=<?php echo ($datetimepicker2); ?>&&article_search=<?php echo ($article_search); ?>&&difficulty=<?php echo ($difficulty); ?>&&category=<?php echo ($category); ?>&&category2=<?php echo ($category2); ?>&&region=<?php echo ($region); ?>&&recycle=<?php echo ($recycle); ?>&&uploader=<?php echo ($uploader); ?>">view 20 results</a>
														</li>
													</ul>
												</li>
											</ul>
											<?php elseif(($pid == 4)): ?>
											<ul class="nav nav-tabs footer-result">
											<li class="dropdown">
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
														<li>
															<a href="<?php echo U('index/usercenter_myarticles');?>?view=5&&pid=4">view 5 results</a>
														</li>
														<li>
															<a href="<?php echo U('index/usercenter_myarticles');?>?view=10&&pid=4">view 10 results</a>
														</li>
														<li>
															<a href="<?php echo U('index/usercenter_myarticles');?>?view=15&&pid=4">view 15 results</a>
														</li>
														<li>
															<a href="<?php echo U('index/usercenter_myarticles');?>?view=20&&pid=4">view 20 results</a>
														</li>
													</ul>
												</li>
											</ul><?php endif; ?>
							
										<ul class="pagination">
											<div class="pages"><?php echo ($pages); ?></div>
										</ul>
				                  
									</div>
								</form>

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
	
	<input type="hidden" id="timeout" value="<?php echo ($timeout); ?>">
	<script type="text/javascript" src="/Public/js/jquery.min.js"></script>
	<script type="text/javascript" src="/Public/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/Public/js/sweetalert.min.js"></script>
	<script type="text/javascript" src="/Public/js/main.min.js"></script>
	<script type="text/javascript" src="/Public/js/jquery.validationEngine.js"></script>
	<script type="text/javascript" src="/Public/js/jquery.validationEngine-zh_CN.js"></script>
	<script type="text/javascript" src="/Public/js/jquery.form.js"></script>
	<script type="text/javascript" src="/Public/js/bootstrap-datetimepicker.min.js"></script>

	<script>

	var coverview = $('#coverview');
	$('#uploadpic').wrap('<form action="http://<?php echo ($server); ?>/index/coverpic" id="myupload" method="post" enctype="multipart/form-data"></form>');
	$('#uploadpic').change(function(){
		$('#myupload').ajaxSubmit({
			dataType:'json',
			success:function(data){
				var img = "http://<?php echo ($server); ?>/Public/yl.com/uploadpic/<?php echo ($_SESSION['username']); ?>/"+"Coverpic/"+data.pic;
				coverview.attr({"src":img,"style":"width:180px;height:110px;"});
			},
			error:function(xhr){
				alert(xhr.responseText);
			}
		});
	});

	$('#form_id').validationEngine({
	  validationEventTriggers:"keyup blur",
	  success :  false
	});


     $("#thesearch").click(function(){
     	location.herf="<?php echo U('index/article_research');?>";
     });

    
	

	function jump2login(){
			window.location.href = "<?php echo U('log/login');?>?session_destory=1";
		}
		var timeout = document.getElementById("timeout").value;
		if(timeout == "yes"){
			swal({   
					title: "The operation timed out!",   
					text: "You will be redirected to Login Page in 3s.",
					type: "warning",   
					timer: 3000,   
					showConfirmButton: false
			 });
			 setTimeout(jump2login,3000);
		}
		function logout(){
		 swal({
		      title: "Logout?", 
		      text: "If you click 'OK', you will be redirected to Login Page", 
		      type: "warning",
		      showCancelButton: true
		    }, function() {
		      // Redirect the user
		      window.location.href = "<?php echo U('log/logout');?>";
		    });
		}
	

		$(".logout").on("click",function(){
			logout();
		})

		var ids = new Array();
		function checkNull(){
			var length = $("input[type='checkbox']").length;
			var counter = 0;
			for(var i = 0; i < length; i++){
				if($("input[type='checkbox']")[i].checked == true){
					counter++;
					ids.push($("input[type='checkbox']")[i].value);
				}
			}
			if(counter > 0){
				return true;
			}else { 
				return false;
			}
		}
		function delAll(){
			console.log(checkNull())
			console.log(ids)
			if(checkNull()){
				swal({   
						title: "Are you sure to delete them?",   
						text: "Can't restore once deleted!",  
						type: "warning",  
						showCancelButton: true,   
					    confirmButtonColor: "#DD6B55",   
					    confirmButtonText: "Yes, delete!",   
					    closeOnConfirm: false 
					}, function(){  
						$.ajax({
							type:"post",
							url:"<?php echo U('Article/delete_all_real');?>",
							dataType:'json',
							data:{checkbox:ids},
							success:function(res){
								if(res == "removed"){
									swal({
												title: "Removed!",   
												text: "",
												type: "success",   
												timer: 500,   
												showConfirmButton: false
											 },function(){
											 	location.reload();
											 }		
										); 
								}
								else if(res == "fail"){
									swal("Sorry!","The operation error.");
								}
							},
							error:function(){
								swal("Sorry!","The operation error.");
							}
						});
						
					});
			}else {
				swal("Please select the checkbox!");
			}
		}
		function delAll_logic(){
			if(checkNull()){
				swal({   
						title: "Are you sure to delete them？You are only allowed to delete articles uploaded within 72 hours.",   
						text: "You are able to restore it in 72 hours!",  
						type: "warning",  
						showCancelButton: true,   
					    confirmButtonColor: "#DD6B55",   
					    confirmButtonText: "Yes, delete!",   
					    closeOnConfirm: false 
					}, function(){  
						$.ajax({
							type:"post",
							url:"<?php echo U('Article/delete_all');?>",
							dataType:'json',
							data:{checkbox:ids},
							success:function(res){
								if(res == "deleted"){
									swal({
												title: "Removed!",   
												text: "",
												type: "success",   
												timer: 500,   
												showConfirmButton: false
											 },function(){
											 	location.reload();
											 }		
										); 
								}
								else if(res == "fail"){
									swal("Sorry!","The operation error11.");
								}
							},
							error:function(){
								swal("Sorry!","The operation error22.");
							}
						});
						
					});
			}else {
				swal("Please select the checkbox!");
			}
		}
		function del_user(id){
			swal({   
					title: "Are you sure to remove?",   
					text: "",  
					type: "warning",  
					showCancelButton: true,   
				    confirmButtonColor: "#DD6B55",   
				    confirmButtonText: "Yes, remove it!",   
				    closeOnConfirm: false 
				}, function(){  
					$.post("<?php echo U('User/user_delete');?>?uid="+id,function(data){
						if(data == "removed"){
							console.log(111)
							swal({
									title: "Removed!",   
									text: "",
									type: "success",   
									timer: 500,   
									showConfirmButton: false
								 },function(){
								 	location.reload();
								 }
								); 
						}else if(data == "fail"){
							swal("Sorry!","You are not able to delete adminstrator!.");
						}
					});
					
				});
		}
		/* 删除*/
		function del(id)
		{
			swal({   
					title: "Are you sure you want to delete?",   
					type: "warning",  
					showCancelButton: true,
				    confirmButtonColor: "#DD6B55",   
				    confirmButtonText: "Yes, remove it!",   
				    closeOnConfirm: false 
				}, function(){  
					$.post("<?php echo U('Article/article_delete');?>?pid="+id,function(data){
						if(data == "deleted"){
							swal({
									title: "Removed!",   
									text: "",
									type: "success",   
									timer: 500,   
									showConfirmButton: false
								 },function(){
								 	location.reload();
								 }
								); 

						}else if(data == "overtime"){

							swal("Articles uploaded over 72 hours cannot be deleted, please contact administrator if you still want to delete them！");
						}
					});
				});
		}
		/* 彻底删除*/
		function clearaway(id)
		{
			swal({   
					title: "Are you sure to remove?",   
					text: "Can't restore once removed!",  
					type: "warning",  
					showCancelButton: true,   
				    confirmButtonColor: "#DD6B55",   
				    confirmButtonText: "Yes, remove it!",   
				    closeOnConfirm: false 
				}, function(){  
					$.post("<?php echo U('Article/article_delete_real');?>?pid="+id,function(data){
						if(data == "deleted"){
							swal({
									title: "Removed!",   
									text: "",
									type: "success",   
									timer: 500,   
									showConfirmButton: false
								 },function(){
								 	location.reload();
								 }
								); 
						}else if(data == "fail"){
							swal("Sorry!","The operation error");
						}
					});
					
				});
		}
		function res(id){
			console.log(id);
			swal({   
					title: "Are you sure to restore?",   
					text: "",  
					type: "warning",  
					showCancelButton: true,   
				    confirmButtonColor: "#DD6B55",   
				    confirmButtonText: "Yes, restore it!",   
				    closeOnConfirm: false 
				}, function(){  
					$.post("<?php echo U('Article/article_restore');?>?pid="+id,function(data){
						if(data == "restored"){
							swal({
									title: "Restored!",   
									text: "",
									type: "success",   
									timer: 1000,   
									showConfirmButton: false
								 },function(){
								 	location.reload();
								 }
								); 
						}else {
							swal("Sorry!","The operation error , please try later.");
						}
					});
					
				});
		}
		
        $('#datetimepicker1').datetimepicker();
        $('#datetimepicker2').datetimepicker();
        

		$(".fun_search,#ok").on("click",function(){
	    /*    var datetimepicker1 = $('#datetimepicker1').val();
		    var datetimepicker2 = $('#datetimepicker2').val();
		    var datetimepicker3 = $('#datetimepicker3').val();*/
		/*    var datetimepicker4 = $('#datetimepicker4').val();*/
        	$("#inner_search").submit();
		});
	</script>

</body>
</html>