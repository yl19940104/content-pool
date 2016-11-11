<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>login</title>
	<link rel="stylesheet" href="/Public/css/bootstrap.min.css">
	<link rel="stylesheet" href="/Public/css/style.css">
<body>
	<div class="wrapper loginpage">
		<header>
		</header>
		<div class="logindiv">
			<img src="/Public/images/urbanatomy.png">
			<div class="loginform">
				<form action="">
					<div class="form-group">
						<label><span class="glyphicon glyphicon-user"></span><div class="vertical"></div></label>
						<input type="text" name="username" class="form-control" required="required" placeholder="Username">
					</div>
					<div class="form-group">
						<label><span class="glyphicon glyphicon-lock"></span><div class="vertical"></div></label>
						<input type="password" name="password" class="form-control" required="required" placeholder="Password"><br>
						<a href='#' class="fg_pw">forgot password?</a> 
				    </div>

				    <button type="submit" class="btn btn-primary" onclick="enter();">Login</button>
				</form>
			</div>
		</div>

	</div>
	<script>

		function enter(){
			var username = $('#username').val();
			var password = $('#password').val();
			if (username == "") {
				return false;
			}
			if (password == "") {
				return false;
			}
			$.post('<?php echo U('index/login');?>',{username:username,password:password},function(data){
				if (data == "1") {
					alert('用户不存在或用户名错误！');
				}else if(data == "2"){
					alert('用户名或密码错误！');
				}else{
					window.location.href = "user_center.html";
				}
			});
		}
	</script>
	<script type="text/javascript" src="/Public/js/jquery.min.js"></script>
</body>
</html>