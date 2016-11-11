<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>login</title>
	<link rel="stylesheet" href="/Public/css/bootstrap.min.css">
	<link rel="stylesheet" href="/Public/css/style.css">
	<link rel="stylesheet" href="/Public/css/sweetalert.css">
<body>
	<div class="wrapper loginpage">
		<header>
		</header>
		<div class="logindiv">
			<img src="/Public/images/urbanatomy.png">
			<div class="loginform">
				<form action="" method ="post">
					<div class="form-group">
						<label><span class="glyphicon glyphicon-user"></span><div class="vertical"></div></label>
						<input type="text" name="username" id="username" class="form-control" required="required" placeholder="Username">
					</div>
					<div class="form-group">
						<label><span class="glyphicon glyphicon-lock"></span><div class="vertical"></div></label>
						<input type="password" name="password" id="password" class="form-control" required="required" placeholder="Password"><br>
						<a href='javascript:void(0)' class="fg_pw">forgot password?</a> 
				    </div>

				    <button type="button" class="btn btn-primary" onclick="enter();">Login</button>
				</form>
			</div>
		</div>

	</div>
	<script>

		function enter(){
			var username = $('#username').val();
			var password = $('#password').val();
			if (username == "" || password == "" ) {
				swal({   
						title: "Please enter your username and password!",   
						type: "warning",   
						timer: 2000,   
						showConfirmButton: false
				 });
				return false;
			}else{
				$.post('<?php echo U('index/login');?>',{username:username,password:password},function(data){
					if (data == "1") {
						swal({   
							title: "Oops...",
							text: "User does not exist or username is incorrect!",   
							type: "error",   
							timer: 2500,   
							showConfirmButton: false
						 });
					}else if(data == "2"){
						swal({   
							title: "Oops...",
							text: "Wrong username or password!",   
							type: "error",   
							timer: 2000,   
							showConfirmButton: false
						 });
					}else {
						window.location.href = "<?php echo U('index/homepage');?>";
					}
				});
		    }
		}
	</script>
	<script type="text/javascript" src="/Public/js/jquery.min.js"></script>
	<script type="text/javascript" src="/Public/js/sweetalert.min.js"></script>
</body>
</html>