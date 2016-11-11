<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>user_center</title>
	<link rel="stylesheet" href="/Public/css/bootstrap.min.css">
	<link rel="stylesheet" href="/Public/css/style.css">
	<link rel="stylesheet" href="/Public/css/validationEngine.jquery.css">
<body>
	<div class="wrapper usercenter_myarticles">
		<header>
			<div class="topdiv">
				<ul>
					<li><a href="<?php echo U('index/user_center');?>"><span class="glyphicon glyphicon-user"></span>&nbsp;User center</a><span>&nbsp;&nbsp;|&nbsp;</span></li>
					<li><a href="<?php echo U('index/loginout');?>"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign out</a><span>&nbsp;&nbsp;</span></li>
				</ul>
			</div>
			<div class="searchdiv">
				<a href="<?php echo U('index/homepage');?>"><img src="/Public/images/urbanatomy.png"></a>
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
				         <li><a class="" href="<?php echo U('index/user_center');?>">My Profile</a></li>
				         <li class="divider"></li>
				         <li><a class="active"href="usercenter_myarticles.html">My Articles</a></li>
				      </ul>
				   </li>				  
				</ul>
			</div>
			<div class="top-nav">

				<ul class="nav nav-tabs top">
				   
				   <li class="dropdown">
				      <a class="dropdown-toggle" data-toggle="dropdown" href="#">
				         User Center
				      </a>
				   </li>
				  
				</ul>
			</div>

			<div class="content">
				<ul id="myTab" class="nav nav-tabs">
					<li class="dropdown">
				      <a href="#" id="myTabDrop1" class="dropdown-toggle" 
				         data-toggle="dropdown">Upload my articles <b class="caret"></b>
				      </a>
				      <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1">
				         <li ><a href="#magzine" class="" tabindex="-1" data-toggle="tab">
				            magzine</a>
				         </li>
				         <li><a href="#digital" tabindex="-1" data-toggle="tab">
				            digital</a>
				         </li>
				      </ul>
				    </li>
				    <li class="active"><a href="#home" data-toggle="tab">
				      My download articles</a>
				   	</li>
					
				   <li><a href="#upload" data-toggle="tab">My upload articles11</a></li>
				   
				</ul>
				<div id="myTabContent" class="tab-content">
				   <div class="tab-pane fade in active mydownload" id="home">
				      <table class="table download">
				      	    <thead>
						      <tr>
						      	<th><input type="checkbox" id="checkall" ></th>
						         <th>Articles Name</th>
						         <th>Category</th>
						         <th>Author Name</th>
						         <th>Download Date</th>
						         <th>Difficulty level</th>
						         <th><button type="button" class="btn btn-danger">delete</button></th>
						      </tr>
						   	</thead>
						   <tbody>
						    	<?php if(is_array($select)): $i = 0; $__LIST__ = $select;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
						           <td><input type="checkbox" name="upload_check" class="check2" ></td>
						           <td><?php echo ($vo['title']); ?></td>
						           <td><?php echo ($vo['category']); ?></td>
						           <td><?php echo ($vo['uploader']); ?></td>
						           <td><?php echo ($vo['posttime']); ?></td>
						           <td>
						           <?php if(is_array($select)): $i = 0; $__LIST__ = array_slice($select,0,$vo['difficulty'],true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><span class="glyphicon glyphicon-star star"></span><?php endforeach; endif; else: echo "" ;endif; ?>	
						           </td>
						           <td><button type="button" class="btn btn-danger">delete</button></td>
						        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
						    </tbody>
				      </table>
				      <!-- 分页 -->
						<select class="form-control">
					         <option>view 10 results</option>
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
				  
				   <div class="tab-pane fade " id="magzine">
				      <form action="<?php echo U('index/article');?>" id="form_id" method="post" enctype="multipart/form-data">
					      <table class="magzine">
					      	<tbody>
					      		<tr>
					      			<td>* Tile:</td>
					      			<td><input type="text" name="title" class="form-control" style="width:200px;" placeholder="please enter title"></td>
					      		</tr>
					      		<tr>
					      			<td>&nbsp;&nbsp;Tag:</td>
					      			<td><input type="text" name="tag" class="form-control" style="width:300px;" placeholder="please enter tag"></td>
					      		</tr>
					      		<tr>
					      			<td>* Abstract:</td>
					      			<td><textarea name="abstract" class="form-control" rows="4" cols="50" placeholder="please enter abstract"></textarea></td>
					      		</tr>
					      		<tr>
					      			<td>* Content:</td>
					      			<td><textarea name="content" class="form-control" rows="6" cols="70" placeholder="please enter content"></textarea></td>
					      		</tr>
					      		<tr>
					      			<td>&nbsp;&nbsp;CoverPic:</td>
					      			<td><div><img id="coverview"></div><input type="file" name="coverpic" class="validate[required]" id="uploadpic"><span style="color: red;">建议上传图片尺寸为180*110像素，文件大小上限为3M！</span></td>
					      		</tr>
					      		<tr>
					      			<td>* City:</td>
					      			<td>
						      			<select class="form-control" name="city">
						      				<option name="">Shanghai</option>		
					      					<option name="">Shenzhen</option>	
					      					<option name="">Guangzhou</option>	
						      				<option name="">Beijing</option>		
						      			</select>
					      			</td>
					      		</tr>
					      		<tr>
					      			<td>* Category:</td>
					      			<td>
						      			<select class="form-control" name="category">
						      				<option name="">News</option>
						      				<option name="">Eat</option>		
					      					<option name="">Art</option>	
					      					<option name="">Lifestyle</option>	
						      				<option name="">Education</option>	
						      				<option name="">Community</option>
						      				<option name="">Features</option>
						      				<option name="">Photos</option>
						      				<option name="">Videos</option>	
						      			</select>
					      			</td>
					      		</tr>
					      	</tbody>
					      </table>
					      <input type="submit" class="btn btn-primary btn-lg btn-block" value="Upload" />
					  </form>
				   </div>
				   <div class="tab-pane fade " id="digital">
				      <form action="<?php echo U('index/article2');?>" id="form_id" method="post" enctype="multipart/form-data">
					      <table class="magzine">
					      	<tbody>
					      		<tr>
					      			<td>* Tile:</td>
					      			<td><input type="text" name="title" class="form-control" style="width:200px;" placeholder="please enter title"></td>
					      		</tr>
					      		<tr>
					      			<td>&nbsp;&nbsp;Tag:</td>
					      			<td><input type="text" name="tag" class="form-control" style="width:300px;" placeholder="please enter tag"></td>
					      		</tr>
					      		<tr>
					      			<td>* Abstract:</td>
					      			<td><textarea name="abstract" class="form-control" rows="4" cols="50" placeholder="please enter abstract"></textarea></td>
					      		</tr>
					      		<tr>
					      			<td>* Content:</td>
					      			<td><textarea name="content" class="form-control" rows="6" cols="70" placeholder="please enter content"></textarea></td>
					      		</tr>
					      		<tr>
					      			<td>&nbsp;&nbsp;CoverPic:</td>
					      			<td><div><img id="coverview"></div><input type="file" name="coverpic" class="validate[required]" id="uploadpic"><span style="color: red;">建议上传图片尺寸为180*110像素，文件大小上限为3M！</span></td>
					      		</tr>
					      		<tr>
					      			<td>* City:</td>
					      			<td>
						      			<select class="form-control" name="city">
						      				<option name="">Shanghai</option>		
					      					<option name="">Shenzhen</option>	
					      					<option name="">Guangzhou</option>	
						      				<option name="">Beijing</option>		
						      			</select>
					      			</td>
					      		</tr>
					      		<tr>
					      			<td>* Category:</td>
					      			<td>
						      			<select class="form-control" name="category">
						      				<option name="">News</option>
						      				<option name="">Eat</option>		
					      					<option name="">Art</option>	
					      					<option name="">Lifestyle</option>	
						      				<option name="">Education</option>	
						      				<option name="">Community</option>
						      				<option name="">Features</option>
						      				<option name="">Photos</option>
						      				<option name="">Videos</option>	
						      			</select>
					      			</td>
					      		</tr>
					      	</tbody>
					      </table>
					      <input type="submit" class="btn btn-primary btn-lg btn-block" value="Upload" />
					  </form>
				   </div>
				    <form class="tab-pane fade myupload" id="upload" action="<?php echo U('index/delete_all');?>"  method="get" enctype="multipart/form-data">
				       <table class="table upload">
				      	    <thead>
						      <tr>
						      	<th><input type="checkbox" name="upload_cb" id="checkall2" ></th>
						         <th>Articles Name123</th>
						         <th>Category</th>
						         <th>Author Name</th>
						         <th>Download Date</th>
						         <th>Difficulty level</th>
						         <th><input type="submit" class="btn btn-danger" value="delete" /></th>
						      </tr>
						   	</thead>
						    <tbody>
						    	<?php if(is_array($select)): $i = 0; $__LIST__ = $select;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
						           <td><input name="check" type="checkbox" name="upload_check" class="check2" value="$vo['pid']"></td>
						           <td><?php echo ($vo['title']); ?></td>
						           <td><?php echo ($vo['category']); ?></td>
						           <td><?php echo ($vo['uploader']); ?></td>
						           <td><?php echo ($vo['posttime']); ?></td>
						           <td>
						           <?php if(is_array($select)): $i = 0; $__LIST__ = array_slice($select,0,$vo['difficulty'],true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i;?><span class="glyphicon glyphicon-star star"></span><?php endforeach; endif; else: echo "" ;endif; ?>	
						           </td>
						           <td><a href="<?php echo U('index/article_delete');?>?pid=<?php echo ($vo['pid']); ?>" class="btn btn-danger">delete</a></td>
						        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
						    </tbody>
				      </table>

				      <!-- 分页 -->
						<select class="form-control">
					         <option>view 10 results</option>
					         <option>view 25 results</option>
					         <option>view 50 results</option>
					         <option>view 100 results</option>
					      </select>
						<ul class="pagination">
						  <li<a href="#11"><div class="pages">
                        <?php echo ($page); ?>
                </div></a></li>
						</ul>
			
				   </form>
				</div>
				
			</div>
			
		</div>
		<div class="footer">
				<div>
					<img src="/Public/images/logo.png">
					<img src="/Public/images/logo-uf.png">
					<span>© 2016 HK Focus Media  沪ICP备12038926号-2</span>
				</div>
		</div>

	</div>

	<script type="text/javascript" src="/Public/js/jquery.min.js"></script>
	<script type="text/javascript" src="/Public/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/Public/js/main.min.js"></script>
	<script type="text/javascript" src="/Public/js/jquery.validationEngine.js"></script>
	<script type="text/javascript" src="/Public/js/jquery.validationEngine-zh_CN.js"></script>
	<script type="text/javascript" src="/Public/js/jquery.form.js"></script>
	<script>
	var coverview = $('#coverview');
	$('#uploadpic').wrap('<form action="http://yl.com/index/coverpic" id="myupload" method="post" enctype="multipart/form-data"></form>');
	$('#uploadpic').change(function(){
		$('#myupload').ajaxSubmit({
			dataType:'json',
			success:function(data){
				var img = "http://yl.com/Public/yl.com/uploadpic/<?php echo ($_SESSION['username']); ?>/"+"Coverpic/"+data.pic;
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
    $("#").load(location.href+"#");


     $("#thesearch").click(function(){
     	location.herf="<?php echo U('index/article_research');?>";
     });




	</script>
    
</body>
</html>