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
					<li><a href="user_center.html"><span class="glyphicon glyphicon-user"></span>&nbsp;User center</a><span>&nbsp;&nbsp;|&nbsp;</span></li>
					<li><a href="#"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign out</a><span>&nbsp;&nbsp;</span></li>
				</ul>
			</div>
			<div class="searchdiv">
				<a href="homepage.html"><img src="/Public/images/urbanatomy.png"></a>
				<div class="form-group">
					<label><a href="#" class="glyphicon glyphicon-search"></a></label>
					<input type="search"  class="form-control" name="search" placeholder="Search">
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
				         <li><a class="active" href="#">News</a></li>
				         <li class="divider"></li>
				         <li><a href="#">Eat&Drink</a></li>
				         <li class="divider"></li>
				         <li><a href="#">Art&Entertainment</a></li>
				         <li class="divider"></li>
				         <li><a href="#">Lifestyle</a></li>
				         <li class="divider"></li>
				         <li><a href="#">Education</a></li>
				         <li class="divider"></li>
				         <li><a href="#">Community</a></li>
				         <li class="divider"></li>
				         <li><a href="#">Features</a></li>
				         <li class="divider"></li>
				         <li><a href="#">Photos</a></li>
				         <li class="divider"></li>
				         <li><a href="#">Videos</a></li>
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
				<div>
					<img src="/Public/images/img_01.png">
					<h5>Lorem ipsum dolor sit amet, consectetur adipiscing </h5>
					<label>
						<span class="glyphicon glyphicon-star star"></span>
						<span class="glyphicon glyphicon-star star"></span>
						<span class="glyphicon glyphicon-star star"></span>
						<span class="glyphicon glyphicon-star star"></span>
					</label>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nonulla pariatur strud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariaturDuis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
					</p>
					<ul>
						<li><span class="label label-info">Digital</span></li>
						<li><span class="label label-info">Author Name</span></li>
						<li><span class="label label-info">2016/04/25</span></li>
						<li><span class="label label-info">Downloads(56)</span></li>
					</ul>
					<!-- go to page article_view.html -->
					<button type="button" onclick="jump();" class="btn btn-primary">view</button>
				</div>
				<div>
					<img src="/Public/images/img_02.png">
					<h5>Lorem ipsum dolor sit amet, consectetur adipiscing </h5>
					<label>
						<span class="glyphicon glyphicon-star star"></span>
						<span class="glyphicon glyphicon-star star"></span>
						<span class="glyphicon glyphicon-star star"></span>
					</label>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nonulla pariatur strud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariaturDuis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
					</p>
					<ul>
						<li><span class="label label-info">Digital</span></li>
						<li><span class="label label-info">Author Name</span></li>
						<li><span class="label label-info">2016/04/25</span></li>
						<li><span class="label label-info">Downloads(56)</span></li>
					</ul>
					<button type="button" class="btn btn-primary">view</button>
				</div>
				<div>
					<img src="/Public/images/img_03.png">
					<h5>Lorem ipsum dolor sit amet, consectetur adipiscing </h5>
					<label>
						<span class="glyphicon glyphicon-star star"></span>
						<span class="glyphicon glyphicon-star star"></span>
						<span class="glyphicon glyphicon-star star"></span>
						<span class="glyphicon glyphicon-star star"></span>
					</label>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nonulla pariatur strud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariaturDuis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
					</p>
					<ul>
						<li><span class="label label-info">Digital</span></li>
						<li><span class="label label-info">Author Name</span></li>
						<li><span class="label label-info">2016/04/25</span></li>
						<li><span class="label label-info">Downloads(56)</span></li>
					</ul>
					<button type="button" class="btn btn-primary">view</button>
				</div>
				<div>
					<img src="/Public/images/img_04.png">
					<h5>Lorem ipsum dolor sit amet, consectetur adipiscing </h5>
					<label>
						<span class="glyphicon glyphicon-star star"></span>
						<span class="glyphicon glyphicon-star star"></span>
						<span class="glyphicon glyphicon-star star"></span>
						<span class="glyphicon glyphicon-star star"></span>
						<span class="glyphicon glyphicon-star star"></span>
					</label>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nonulla pariatur strud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariaturDuis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
					</p>
					<ul>
						<li><span class="label label-info">Digital</span></li>
						<li><span class="label label-info">Author Name</span></li>
						<li><span class="label label-info">2016/04/25</span></li>
						<li><span class="label label-info">Downloads(56)</span></li>
					</ul>
					<button type="button" class="btn btn-primary">view</button>
				</div>
				<div>
					<img src="/Public/images/img_05.png">
					<h5>Lorem ipsum dolor sit amet, consectetur adipiscing </h5>
					<label>
						<span class="glyphicon glyphicon-star star"></span>
						<span class="glyphicon glyphicon-star star"></span>
						<span class="glyphicon glyphicon-star star"></span>
					</label>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nonulla pariatur strud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariaturDuis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur<br>

					</p>
					<ul>
						<li><span class="label label-info">Digital</span></li>
						<li><span class="label label-info">Auhtor Name</span></li>
						<li><span class="label label-info">2016/04/25</span></li>
						<li><span class="label label-info">Downloads(56)</span></li>
					</ul>
					<button type="button" class="btn btn-primary">view</button>
				</div>

				<!-- 分页 -->
				<select class="form-control">
			         <option>view 5 results</option>
			         <option>view 25 results</option>
			         <option>view 50 results</option>
			         <option>view 100 results</option>
			      </select>
				<ul class="pagination">
				  <li><a href="#">&laquo;</a></li>
				  <li class="active"><a href="#">1</a></li>
				  <li><a href="#">2</a></li>
				  <li><a href="#">3</a></li>
				  <li><a href="#">4</a></li>
				  <li><a href="#">5</a></li>
				  <li><a href="#">&raquo;</a></li>
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