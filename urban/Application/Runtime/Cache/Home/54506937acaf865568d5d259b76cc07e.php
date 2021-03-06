<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="/Public/css/validationEngine.jquery.css">
	<link rel="stylesheet" type="text/css" href="/Public/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="/Public/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/Public/css/style.css">
	<link rel="stylesheet" type="text/css" href="/Public/css/sweetalert.css">
</head>
<body>
	
	<div class="wrapper user_center">

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
				         Category <span class="caret"></span>
				      </a>
				      <ul class="dropdown-menu">
				         <li><a class="active" href="#">My Profile</a></li>
				         <?php if(($group == 2 or $group == 3)): ?><li><a href="<?php echo U('index/article_edit');?>?edit_id=1">Add New Articles</a></li>
 				         <li class="divider"></li><?php endif; ?>
				         <?php if(($group == 2 or $group == 3)): ?><li><a href="<?php echo U('index/usercenter_myarticles');?>?pid=1">Uploaded Articles</a></li>
				         <li class="divider"></li><?php endif; ?>
				         
				         <?php if(($group == 2)): ?><li><a href="<?php echo U('index/usercenter_myarticles');?>?pid=2">Downloaded Articles</a></li>
                         <li class="divider"></li><?php endif; ?>
                        
				         
				         <?php if(($group == 1 or $group == 2 or $group == 3)): ?><li><a href="<?php echo U('index/usercenter_myarticles');?>?pid=3">Recycle Bin</a></li><?php endif; ?>
				         <li class="divider"></li>
				         <?php if(($group == 1)): ?><li><a href="<?php echo U('index/usercenter_myarticles');?>?pid=4">User Management</a></li>
					         <li><a href="<?php echo U('index/article_tag');?>">Article Tags</a></li><?php endif; ?>
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
				<div class="user_profile">
					<table class="table table-striped">
						<tr>
							<th>Name:</th>
							<td><?php echo ($result[0]['name']); ?></td>
						</tr>
						<form action="<?php echo U('index/avator');?>" id="form_id" method="post" enctype="multipart/form-data">
						<tr>
							<th>Avator:</th>
							<td>
							    <?php if(($result[0]['avator'] != null)): ?><img id="coverview" src="http://<?php echo ($server); ?>/<?php echo ($result[0]['avator']); ?>">
								<?php else: ?>
									<img id="coverview" src="http://<?php echo ($server); ?>/Public/yl.com/uploadpic/avator/Coverpic/avator.jpg"><?php endif; ?>
								<input type="file" name="coverpic3" class="validate[required]" id="uploadpic">
								<label >

								<!-- <button class="btn btn-default btn-sm"  onclick="update();">OK</button> -->
								<input type="button" class="updateimg" value="update"  onclick="update();"/>
								</label>
							</td>
						</tr>
						</form>
						<tr>
							<th>City:</th>
							<td><?php echo ($result[0]['city']); ?></td>
						</tr>
						<tr>
							<th>Group:</th>
							<?php if(($result[0]['group'] == 1)): ?><td>adminstrator</td>
							<?php elseif(($result[0]['group'] == 2)): ?>
							    <td>Chief Editor</td>
							<?php elseif(($result[0]['group'] == 3)): ?>
								<td>Editor</td>
						    <?php else: ?>
						    	<td>Guest</td><?php endif; ?>
						</tr>
						<tr>
							<th>Download of my articles:</th>
							<td><?php echo ($result[0]['dtimes']); ?></td>
						</tr>
						<tr>
							<th>My downloads:</th>
							<td><?php echo ($result[0]['dtime']); ?></td>
						</tr>
						<tr>
							<th>Credits:</th>
							<td><?php echo ($result[0]['integration']); ?></td>
						</tr>
						<tr>
							<th>Old password:</th>
							<td>
								<input type="password" name="old_pwd" class="pwd old-pwd form-control">
								<i class="fa fa-check hide" id="suc" style="color:#1d9d74;margin-left:5px;"></i>
								<i class="fa fa-remove hide" id="err" style="color:#c7254e;margin-left:5px;">&nbsp;Wrong password.</i>
							</td>
						</tr>
						<tr>
							<th>New password:</th>
							<td>
								<input type="password" name="new_pwd" class="pwd new-pwd form-control">
								<i class="fa fa-check hide" id="suc1" style="color:#1d9d74;margin-left:5px;"></i>
								<i class="fa fa-remove hide" id="err1" style="color:#c7254e;margin-left:5px;">&nbsp;The new password can not be the same as the old password.</i>
							</td>
						</tr>
						<tr>
							<th>Confirm password:</th>
							<td>
								<input type="password" name="pwd" class="pwd conf-pwd form-control">
								<i class="fa fa-check hide" id="suc2" style="color:#1d9d74;margin-left:5px;"></i>
								<i class="fa fa-remove hide" id="err2" style="color:#c7254e;margin-left:5px;">&nbsp; Not same as the former password.</i>
							</td>
						</tr>
                        <input type="hidden" id="username" value=<?php echo ($user); ?>>
						<tr>
							<th></th>
							<td><button class="btn btn-primary change_pwd" onclick="update_passsword();">Save</button></td>
						</tr>
					</table>
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
	<script type="text/javascript" src="/Public/js/jquery.form.js"></script>
	<script type="text/javascript" src="/Public/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/Public/js/sweetalert.min.js"></script>
	<script type="text/javascript" src="/Public/js/main.min.js"></script>
	<script type="text/javascript" src="/Public/js/jquery.form.js"></script>
	<script>


		var coverview = $('#coverview');

		$('#uploadpic').wrap('<form action="http://<?php echo ($server); ?>/User/coverpic2" id="myupload" method="post" enctype="multipart/form-data"></form>');
		$('#uploadpic').change(function(){
			$('#myupload').ajaxSubmit({
				dataType:'json',
				success:function(data){
					var img = "http://<?php echo ($server); ?>/Public/yl.com/uploadpic/avator/"+"Coverpic/"+data.pic;
					coverview.attr({"src":img});
				},
				error:function(xhr){
					alert(xhr.responseText);
				}
			});
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
		//用户信息修改并提交
		function update(){
	        $.post("<?php echo U('User/avator');?>",function(a){
				swal({
						title: "Update Successfully!",   
						text: "",
						type: "success",   
						timer: 500,   
						showConfirmButton: false
					 },function(){
					 	location.href="<?php echo U('index/user_center');?>";
					 }
					); 		
			});
		}

		//失去焦点
		$("input[name='old_pwd']").blur(function(){
			var old_pwd = $(this).val();
            var username = $('#username').val();
            if(old_pwd){
            	$.ajax({
					type:"post",
					url:"<?php echo U('User/ajax_request');?>",
					data:{pwd:old_pwd,username:username},
					success:function(res){
						if(res == "success"){
							$("#err").addClass("hide");
							$("#suc").removeClass("hide");
							$("input[name='old_pwd']").attr("disabled","disabled");
						}else {
							$("#suc").addClass("hide");
							$("#err").removeClass("hide");
							$("input[name='old_pwd']").focus();
							
						}
					}
				});	
            }else {
            	$("#err").addClass("hide");
            }
			
			
		});
       


		//判断是否与旧密码一样
		$("input[name='new_pwd']").blur(function(){
			var old_pwd = $("input[name='old_pwd']").val(); 
			var new_pwd = $("input[name='new_pwd']").val();
			if(!old_pwd){
				return;
			}
			if(new_pwd==old_pwd){
				$("#suc1").addClass("hide");
				$("#err1").removeClass("hide");
				$("input[name='new_pwd']").focus();
			}else if(new_pwd!=old_pwd && new_pwd){
				$("#err1").addClass("hide");
				$("#suc1").removeClass("hide");
			}else if(!new_pwd){
				// $("#err1").addClass("hide");
				// $("#suc1").addClass("hide");
				$("input[name='old_pwd']").focus();
			}
		});
		$("input[name='pwd']").keyup(function(){
			if(event.keyCode == 13){
				$(this).blur();
			}
		})
		//confirm password
		$("input[name='pwd']").blur(function(){
			var new_pwd = $("input[name='new_pwd']").val();
			var pwd = $("input[name='pwd']").val();
			
			if(new_pwd == pwd && pwd){	
				$("#err2").addClass("hide");
				$("#suc2").removeClass("hide");		
			}else if(pwd){
				$("#suc2").addClass("hide");
				$("#err2").removeClass("hide");	
			}
		})
		$(".change_pwd").on("click",function(){
			var old_pwd = $("input[name='old_pwd']").val();
			var new_pwd = $("input[name='new_pwd']").val();
			var pwd = $("input[name='pwd']").val();
			if(!old_pwd||!new_pwd||!pwd){
				swal("","please fulfill the table!");
				return;
			}
			if(new_pwd!=pwd){
				$("#suc2").addClass("hide");
				$("#err2").removeClass("hide");	
				return;
			}
			var password = $("input[name='pwd']").val();
			var username = $('#username').val();
			$.post("<?php echo U('User/updatenewpassword');?>",{password:password,username:username},function(res){
				if(res=="success"){
					swal({
							title: "Saved succssfully!",   
							text: "",
							type: "success",   
							timer: 500,   
							showConfirmButton: false
						 },function(){
						 	location.reload();
						 }
					); 
				}
			});
		})

	</script>

</body>
</html>