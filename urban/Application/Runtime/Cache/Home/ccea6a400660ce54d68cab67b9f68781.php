<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login page</title>
	<link rel="stylesheet" href="/contentpooloop/urban/Public/css/bootstrap.min.css">
	<link rel="stylesheet" href="/contentpooloop/urban/Public/css/style.css">
	<link rel="stylesheet" href="/contentpooloop/urban/Public/css/sweetalert.css">
	<style>
		body {
			background-color: #e7eded;
		}
		.loginform {
			background-color: #fff;
		}
		footer {
		    position: fixed;
		    bottom: 10px;
		    left: 38%;
		}
		.line { width:100%;margin-top: 10px; }
	</style>
<body>
	<div class="wrapper loginpage">
		<header class="hide">
		</header>
		
		
		<div class="logindiv">
			<img src="/contentpooloop/urban/Public/images/ua.png">
			<img class="line" src="/contentpooloop/urban/Public/images/line.png">
			<div class="loginform">
				<form>
					<h4>Welcome</h4>
					<div class="form-group">
						<!-- <label><span class="glyphicon glyphicon-user"></span><div class="vertical"></div></label> -->
						<label><span>Username</span></label>
						<input type="text" name="username" id="username" class="form-control" required="required" placeholder="">
					</div>
					<div class="form-group">
						<!-- <label><span class="glyphicon glyphicon-lock"></span><div class="vertical"></div></label> -->
						<label><span>Password</span></label>
						<input type="password" name="password" id="password" class="form-control" required="required" placeholder=""><br>
						<a href='javascript:void(0)' class="fg_pw hide">forgot password?</a> 
				    </div>

				    <button type="button" class="btn btn-primary" onclick="enter();">Login</button>
				</form>
			</div>
		</div>
		<footer>
			<div>
				<span>© 2016 HK Focus Media  沪ICP备12038926号-2</span>
			</div>
		</footer>
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
				/*$.post('<?php echo U('Log/login');?>',{username:username,password:password},function(data){
					if (data == "1") {
						swal({   
							title: "Oops...",
							text: "User does not exist or username is incorrect!",   
							type: "error",   
							timer: 2000,   
							showConfirmButton: false
						 });
					}else if(data == "2"){
						swal({   
							title: "Oops...",
							text: "Wrong username or password!",   
							type: "error",   
							timer: 1000,   
							showConfirmButton: false
						 });
					}else {
						window.location.href = "<?php echo U('index/homepage');?>";
					}
				});*/
				$.post('<?php echo U('Public/login');?>',{username:username,password:password},function(data){
					/*if (data == "1") {
						swal({   
							title: "Oops...",
							text: "User does not exist or username is incorrect!",   
							type: "error",   
							timer: 2000,   
							showConfirmButton: false
						 });
					}else if(data == "2"){
						swal({   
							title: "Oops...",
							text: "Wrong username or password!",   
							type: "error",   
							timer: 1000,   
							showConfirmButton: false
						 });
					}else {
						window.location.href = "<?php echo U('index/homepage');?>";
					}*/
					console.log(data);
				});
		    }
		}
	</script>
	<script type="text/javascript" src="/contentpooloop/urban/Public/js/jquery.min.js"></script>
	<script type="text/javascript" src="/contentpooloop/urban/Public/js/main.min.js"></script>
	<script type="text/javascript" src="/contentpooloop/urban/Public/js/sweetalert.min.js"></script>
</body>
</html>