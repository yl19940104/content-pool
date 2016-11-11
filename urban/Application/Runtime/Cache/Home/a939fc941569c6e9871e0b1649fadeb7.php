<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<title>user_center</title>
	<link rel="stylesheet" href="/Public/css/font-awesome.min.css">
	<link rel="stylesheet" href="/Public/css/bootstrap-tagsinput.css">
	<link rel="stylesheet" href="/Public/css/bootstrap-tagsinput-typeahead.css">

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
							<?php if($group != 1): if(($edit_id == 1)): ?><li>
										<a class="active" href="<?php echo U('index/article_edit');?>?edit_id=1">Add New Articles</a>
									</li>
									<?php else: ?>
									<li>
										<a href="<?php echo U('index/article_edit');?>?edit_id=1">Add New Articles</a>
									</li><?php endif; ?>
		                        <li class="divider"></li><?php endif; ?>
							<li class="divider"></li>
	                        <?php if(($group == 2 or $group == 3)): ?><li>
									<a href="<?php echo U('index/usercenter_myarticles');?>?pid=1">Uploaded Articles</a>
								</li>
								<li class="divider"></li><?php endif; ?>
							
							<?php if(($group == 2)): ?><li>
									<a href="<?php echo U('index/usercenter_myarticles');?>?pid=2">Downloaded Articles</a>
								</li>
								<li class="divider"></li><?php endif; ?>
	                        
							
							<?php if(($group == 1 or $group == 2 or $group == 3)): if(($pid == 3)): ?><li>
										<a class="active" href="<?php echo U('index/usercenter_myarticles');?>?pid=3">Recycle Bin</a>
									</li>
									<?php else: ?>
									<li>
										<a href="<?php echo U('index/usercenter_myarticles');?>?pid=3">Recycle Bin</a>
									</li><?php endif; endif; ?>
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
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">User Center</a>
					</li>

				</ul>
			</div>

			<div class="content">
			
			<div  class="tab-content">
						<form id="form_id" method="post" enctype="multipart/form-data">
							<table class="upload-article table">
								<?php if(($edit_id == 1 or $edit_id == 2 or $edit_id == 5)): ?><!-- 文章上传或修改或只能修改文章难易度 -->
									<tbody>
										<?php if(($edit_id != 5)): ?><tr>
												<td>* Title:</td>
												<td>
													<input type="text" name="title" id="title" class="form-control required" style="width:200px;" placeholder="please enter title" required="required" value="<?php echo ($select[0]['title']); ?>"  ></td>
											</tr>
											<?php else: ?>
											<tr>
												<td>* Title:</td>
												<td>
													<input type="text" name="title" id="title" class="form-control" style="width:200px;" placeholder="please enter title"  value="<?php echo ($select[0]['title']); ?>" disabled="true"></td>
											</tr><?php endif; ?>

										<?php if(($edit_id != 5)): ?><tr>
												<td>&nbsp;&nbsp;Tag:</td>
												<td>
                                                   <!-- tagsinput 自动提示输入标签 -->
										            <input type="text" id="tag_search" data-provide="typeahead" class="form-control" value="<?php echo ($select[0]['tag']); ?>" />
										            <!-- <input type="text" id="name" data-provide="typeahead"> -->
												</td>
											</tr>
											<?php else: ?>
											<tr>
												<td>&nbsp;&nbsp;Tag:</td>
												<td>
                                                   <!-- tagsinput 自动提示输入标签 -->
										            <input type="text" id="tag_search" data-provide="typeahead" class="form-control" value="<?php echo ($select[0]['tag']); ?>" disabled="true"/>
												</td>
											</tr><?php endif; ?>

										<?php if(($edit_id != 5)): ?><tr>
												<td>* Rate:</td>
												<td>
													<?php if(($group != 1)): ?><select class="form-control" name="role" id="difficulty" value="<?php echo ($select[0]['difficulty']); ?>"  disabled="true">
															<?php elseif(($group == 1)): ?>
															<select class="form-control" name="role" id="difficulty" value="<?php echo ($select[0]['difficulty']); ?>"><?php endif; ?>
															<?php if(($select[0]['difficulty'] == 1)): ?><option selected="">1</option>
																<?php else: ?>
																<option>1</option><?php endif; ?>
															<?php if(($select[0]['difficulty'] == 2)): ?><option selected="">2</option>
																<?php else: ?>
																<option>2</option><?php endif; ?>
															<?php if(($select[0]['difficulty'] == 3)): ?><option selected="">3</option>
																<?php else: ?>
																<option>3</option><?php endif; ?>
															<?php if(($select[0]['difficulty'] == 4)): ?><option selected="">4</option>
																<?php else: ?>
																<option>4</option><?php endif; ?>
															<?php if(($select[0]['difficulty'] == 5)): ?><option selected="">5</option>
																<?php else: ?>
																<option>5</option><?php endif; ?>
														</select>
													</td>
												</tr>
												<?php else: ?>
												<tr>
													<td>* Rate:</td>
													<td>
														
														<select class="form-control" name="difficulty" value="<?php echo ($select[0]['difficulty']); ?>" name="role" id="difficulty">
														<?php if(($select[0]['difficulty'] == 1)): ?><option selected="">1</option>
															<?php else: ?>
															<option>1</option><?php endif; ?>
														<?php if(($select[0]['difficulty'] == 2)): ?><option selected="">2</option>
															<?php else: ?>
															<option>2</option><?php endif; ?>
														<?php if(($select[0]['difficulty'] == 3)): ?><option selected="">3</option>
															<?php else: ?>
															<option>3</option><?php endif; ?>
														<?php if(($select[0]['difficulty'] == 4)): ?><option selected="">4</option>
															<?php else: ?>
															<option>4</option><?php endif; ?>
														<?php if(($select[0]['difficulty'] == 5)): ?><option selected="">5</option>
															<?php else: ?>
															<option>5</option><?php endif; ?>
														</select>
													</td>
												</tr><?php endif; ?>

											<?php if(($edit_id != 5)): ?><tr>
													<td>&nbsp;Abstract:</td>
													<td>
														<textarea name="abstract" class="form-control" id="abstract" rows="6" cols="70" placeholder="please enter content"><?php echo ($select[0]['abstract']); ?></textarea>
													</td>
												</tr>
												<?php else: ?>
												<tr>
													<td>&nbsp;abstract:</td>
													<td>
														<textarea name="abstract" id="abstract" class="form-control html-editor" rows="6" cols="70" placeholder="please enter content" disabled="true"><?php echo ($select[0]['abstract']); ?></textarea>
													</td>
												</tr><?php endif; ?>
											<?php if(($edit_id != 5)): ?><tr>
                                                    <td>* Cover pic</td>
													<td>
													<?php if(($select[0]['picture_preview'] != null)): ?><img id="coverview" src="http://<?php echo ($server); ?>/<?php echo ($select[0]['picture_preview']); ?>">
													<?php else: ?>
													    <img id="coverview"><?php endif; ?>
														<input type="file" name="coverpic" class="validate[required]" id="uploadpic">
													</td>
                                                </tr>
                                            <?php else: ?>
                                                <tr>
                                                    <td>* Cover pic</td>
													<td>
													<?php if(($select[0]['picture_preview'] != null)): ?><img id="coverview" src="http://<?php echo ($server); ?>/<?php echo ($select[0]['picture_preview']); ?>">
													<?php else: ?>
													    <img id="coverview"><?php endif; ?>
														<input type="file" name="coverpic" class="validate[required]" id="uploadpic">
													</td>
                                                </tr><?php endif; ?>
											<?php if(($edit_id != 5)): ?><tr>
													<td>* City:</td>
													<td>
														<select class="form-control" name="city" id="city">
															<?php if(($select[0]['region'] == 'Shanghai')): ?><option selected="">Shanghai</option>
																<?php else: ?>
																<option>Shanghai</option><?php endif; ?>
															<?php if(($select[0]['region'] == 'Shenzhen' )): ?><option selected="">Shenzhen</option>
																<?php else: ?>
																<option>Shenzhen</option><?php endif; ?>
															<?php if(($select[0]['region'] == 'Beijing')): ?><option selected="">Beijing</option>
																<?php else: ?>
																<option>Beijing</option><?php endif; ?>
															<?php if(($select[0]['region'] == 'Guangzhou')): ?><option selected="">Guangzhou</option>
																<?php else: ?>
																<option>Guangzhou</option><?php endif; ?>
														</select>
													</td>
												</tr>
												<?php else: ?>
												<tr>
													<td>* City:</td>
													<td>
														<select class="form-control" name="city" id="city" disabled="true">
															<?php if(($select[0]['region'] == 'Shanghai')): ?><option selected="">Shanghai</option>
																<?php else: ?>
																<option>Shanghai</option><?php endif; ?>
															<?php if(($select[0]['region'] == 'Shenzhen' )): ?><option selected="">Shenzhen</option>
																<?php else: ?>
																<option>Shenzhen</option><?php endif; ?>
															<?php if(($select[0]['region'] == 'Beijing')): ?><option selected="">Beijing</option>
																<?php else: ?>
																<option>Beijing</option><?php endif; ?>
															<?php if(($select[0]['region'] == 'Guangzhou')): ?><option selected="">Guangzhou</option>
																<?php else: ?>
																<option>Guangzhou</option><?php endif; ?>
														</select>
													</td>
												</tr><?php endif; ?>

											<?php if(($edit_id != 5)): ?><tr>
													<td>* Category1:</td>
													<td>
														<select class="form-control" name="category" id="category">
															    <?php $__FOR_START_1085__=0;$__FOR_END_1085__=$i;for($i=$__FOR_START_1085__;$i < $__FOR_END_1085__;$i+=1){ if(($select[0]['category'] == $category_one[$i])): ?><option selected=""><?php echo ($category_one[$i]); ?></option>
																    <?php else: ?>
																		<option><?php echo ($category_one[$i]); ?></option><?php endif; } ?>
														</select>
													</td>
												</tr>
												<?php else: ?>
												<tr>
													<td>* Category1:</td>
													<td>
														<select class="form-control" name="category" id="category" disabled="true">
															    <?php $__FOR_START_5170__=0;$__FOR_END_5170__=$i;for($i=$__FOR_START_5170__;$i < $__FOR_END_5170__;$i+=1){ if(($select[0]['category'] == $category_one[$i])): ?><option selected=""><?php echo ($category_one[$i]); ?></option>
																    <?php else: ?>
																		<option><?php echo ($category_one[$i]); ?></option><?php endif; } ?>
														</select>
													</td>
												</tr><?php endif; ?>
											<?php if(($edit_id != 5)): ?><tr>
													<td>* Category2:</td>
													<td>
														<select class="form-control" name="category2" id="category2">
															    <?php $__FOR_START_1411__=0;$__FOR_END_1411__=$j;for($i=$__FOR_START_1411__;$i < $__FOR_END_1411__;$i+=1){ if(($select[0]['category2'] == $category_two[$i])): ?><option selected=""><?php echo ($category_two[$i]); ?></option>
																    <?php else: ?>
																		<option><?php echo ($category_two[$i]); ?></option><?php endif; } ?>
														</select>
													</td>
												</tr>
												<?php else: ?>
												<tr>
													<td>* Category2:</td>
													<td>
														<select class="form-control" name="category2" id="category2" disabled="true">
															    <?php $__FOR_START_29440__=0;$__FOR_END_29440__=$j;for($i=$__FOR_START_29440__;$i < $__FOR_END_29440__;$i+=1){ if(($select[0]['category2'] == $category_two[$i])): ?><option selected=""><?php echo ($category_two[$i]); ?></option>
																    <?php else: ?>
																		<option><?php echo ($category_two[$i]); ?></option><?php endif; } ?>
														</select>
													</td><?php endif; ?>

											<?php if(($edit_id != 5)): ?><tr>
													<td>* Type:</td>
													<td>
														<select class="form-control" name="type" id="type">
															<?php if(($select[0]['type'] == 'magazine')): ?><option selected="">magazine</option>
																<?php else: ?>
																<option>magazine</option><?php endif; ?>
															<?php if(($select[0]['type'] == 'digital')): ?><option selected="">digital</option>
																<?php else: ?>
																<option>digital</option><?php endif; ?>
														</select>
													</td>
												</tr>
												<?php else: ?>
												<tr>
													<td>* Type:</td>
													<td>
														<select class="form-control" name="type" id="type" disabled="true">
															<?php if(($select[0]['type'] == 'magazine')): ?><option selected="">magazine</option>
																<?php else: ?>
																<option>magazine</option><?php endif; ?>
															<?php if(($select[0]['type'] == 'digital')): ?><option selected="">digital</option>
																<?php else: ?>
																<option>digital</option><?php endif; ?>
														</select>
													</td>
												</tr><?php endif; ?>
											<?php if(($group == 1)): ?><tr>
													<td>* Uploader:</td>
													<td>
														<select class="form-control" name="type" id="uploader">
															<?php if(($select[0]['name'] == 'sybil')): ?><option selected="">sybil</option>
																<?php else: ?>
																<option>sybil</option><?php endif; ?>
															<?php if(($select[0]['name'] == 'joseph')): ?><option selected="">joseph</option>
																<?php else: ?>
																<option>joseph</option><?php endif; ?>
														</select>
													</td>
												</tr><?php endif; ?>
                                            <?php if(($edit_id != 5)): ?><tr>
													
													<td colspan="2">
														<div style="margin:10px 0px;">* Content</div>
														<textarea name="financial.bz" id="ckeditor"><?php echo ($select[0]['video']); ?></textarea>
													</td>
												</tr>
										    <?php else: ?>
										    	<tr>												    		
													
													<td colspan="2">
														<div style="margin:10px 0px;">* Content</div>
														<textarea name="financial.bz" id="ckeditor" disabled="true"><?php echo ($select[0]['video']); ?></textarea>
													</td>
												</tr><?php endif; ?>
										</tbody>

										<?php elseif(($edit_id == 3 or $edit_id == 4)): ?>
										<!-- 用户添加和上传 -->
										<tbody>
											<input type="hidden" id="pppid" value=<?php echo ($select[0]['uid']); ?>>
											<tr>
												<td>* Account:</td>
												<td>
													<input type="text" name="account" id="account" class="form-control" style="width:300px;" placeholder="please enter email account" value="<?php echo ($select[0]['username']); ?>"></td>
											</tr>
											<tr>
												<td>* Password:</td>
												<td>
													<input type="password" name="password" id="password" class="form-control" required="required" placeholder="Password" style="width:300px;"  value="<?php echo ($select[0]['password']); ?>"></td>
											</tr>
											
											<tr>
												<td>* Name:</td>
												<td>
													<input type="text" name="name" id="name" class="form-control" style="width:200px;" placeholder="please enter name" value="<?php echo ($select[0]['name']); ?>" ></td>
											</tr>
											<tr>
												<td>* City:</td>
												<td>
													<select class="form-control" name="city" id="city" value=<?php echo ($select[0]['city']); ?>>
														<?php if(($select[0]['city'] == 'Shanghai')): ?><option selected="">Shanghai</option>
														<?php else: ?>
														    <option>Shanghai</option><?php endif; ?>
														<?php if(($select[0]['city'] == 'Shenzhen')): ?><option selected="">Shenzhen</option>
														<?php else: ?>
														    <option>Shenzhen</option><?php endif; ?>
														<?php if(($select[0]['city'] == 'Beijing')): ?><option selected="">Beijing</option>
														<?php else: ?>
														    <option>Beijing</option><?php endif; ?>
														<?php if(($select[0]['city'] == 'Guangzhou')): ?><option selected="">Guangzhou</option>
														<?php else: ?>
														    <option>Guangzhou</option><?php endif; ?>
													</select>
												</td>
											</tr>
											<tr>
												<td>* Group:</td>
												<td>
													<select class="form-control" name="group" id="group" value=<?php echo ($select[0]['group']); ?>>
														<?php if(($select[0]['group'] == 1)): ?><option selected="">Adminstrator</option>
															<?php else: ?>
															<option>Adminstrator</option><?php endif; ?>
														<?php if(($select[0]['group'] == 2)): ?><option selected="">Chief Editor</option>
															<?php else: ?>
															<option>Chief Editor</option><?php endif; ?>
														<?php if(($select[0]['group'] == 3)): ?><option selected="">Editor</option>
															<?php else: ?>
															<option>Editor</option><?php endif; ?>
														<?php if(($select[0]['group'] == 4)): ?><option selected="">Guest</option>
															<?php else: ?>
															<option>Guest</option><?php endif; ?>
													</select>
												</td>
											</tr>
									</tbody><?php endif; ?>
							</table>
									<?php if(($edit_id == 1)): ?><input type="button" class="btn btn-primary btn-lg btn-block" value="Upload" onclick="upload();"/>
										<?php elseif(($edit_id == 2 or $edit_id == 5)): ?>
										<input type="button" class="btn btn-primary btn-lg btn-block" value="Submit" onclick="update();"/>
										<input type="hidden" id="ppid" value="<?php echo ($select[0]['pid']); ?>">
										<?php elseif(($edit_id == 3)): ?><!-- 修改用户信息 -->
										<input type="button" class="btn btn-primary btn-lg btn-block" value="Submit" onclick="edituserinformation();"/>
										<?php elseif(($edit_id == 4)): ?>
										<input type="button" class="btn btn-primary btn-lg btn-block" value="Add" onclick="adduserinformation();"/><?php endif; ?>
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
		
		<script type="text/javascript" src="/Public/js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="/Public/js/jquery.form.js"></script>
		<script type="text/javascript" src="/Public/js/bootstrap.min.js"></script>
		<!-- <script type="text/javascript" src="/Public/js/bootstrap3-typeahead.js"></script> -->
	    <script type="text/javascript" src="/Public/js/typeahead.bundle.min.js"></script>
		<script type="text/javascript" src="/Public/js/sweetalert.min.js"></script>
		<script type="text/javascript" src="/Public/js/bootstrap-tagsinput.min.js"></script>
		<script type="text/javascript" src="/Public/js/main.min.js"></script>
		<script type="text/javascript" src="/Public/ckeditor/ckeditor.js"></script>
		<script type="text/javascript" src="/Public/ckfinder/ckfinder.js"></script>
		<script type="text/javascript">

	    CKEDITOR.replace('financial.bz');


		//文章图片预览
	    var coverview = $('#coverview');

		$('#uploadpic').wrap('<form action="http://<?php echo ($server); ?>/Article/coverpic" id="myupload" method="post" enctype="multipart/form-data"></form>');
		$('#uploadpic').change(function(){
			$('#myupload').ajaxSubmit({
				dataType:'json',
				success:function(data){
					var img = "http://<?php echo ($server); ?>/Public/yl.com/uploadpic/picture/"+"Coverpic/"+data.pic;
					coverview.attr({"src":img,"style":"width:180px;height:110px;"});
				},
				error:function(xhr){
					swal("",xhr.responseText);
				}
			});
		});
		//上传文章
        function upload(){
			var title = $("#title").val();
	    	if(!title){
	    		$("#title").focus();
	    		return;
	    	}
			var pid = $("#ppid").val();
			var citynames = new Bloodhound({
			  datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
			  queryTokenizer: Bloodhound.tokenizers.whitespace,
			  prefetch: {
			    url: '<?php echo U("Tag/tags");?>',
			    filter: function(list) {
			      return $.map(list, function(cityname) {
			        return { name: cityname }; });
			    },
			    cache:false
			  }
			});
			
			// console.log(citynames.prefetch)
			$('#tag_search').tagsinput({
			  typeaheadjs: {
			    name: 'citynames',
			    displayKey: 'name',
			    valueKey: 'name',
			    source: citynames.ttAdapter()
			  }
			});
			$("#role").removeAttr("disabled"); 
		    $("#role1").removeAttr("disabled"); 
		    $("#role2").removeAttr("disabled"); 
		    $("#abstract").removeAttr("disabled"); 
		    $("#role4").removeAttr("disabled"); 
		    $("#role5").removeAttr("disabled"); 
	        $("#role6").removeAttr("disabled"); 
			var data =CKEDITOR.instances.ckeditor.getData();
	        var title = $('#title').val();
		    var difficulty = $('#difficulty').val();
		    var abstract = $('#abstract').val();
		    var city = $('#city').val();
		    var type = $('#type').val();
		    var category = $('#category').val();
		    var category2 = $('#category2').val();
		    var tag = $('#tag_search').val();
	        $.post("<?php echo U('Article/article_add');?>",{data:data,title:title,difficulty:difficulty,abstract:abstract,city:city,category:category,category2:category2,type:type,tag:tag,pid:pid},function(a)
                {
                	alert(a);
                });
		}
	    function update()//更新文章
		{
			var title = $("#title").val();
	    	if(!title){
	    		$("#title").focus();
	    		return;
	    	}
			var pid = $("#ppid").val();
			var citynames = new Bloodhound({
			  datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
			  queryTokenizer: Bloodhound.tokenizers.whitespace,
			  prefetch: {
			    url: '<?php echo U("Tag/tags");?>',
			    filter: function(list) {
			      return $.map(list, function(cityname) {
			        return { name: cityname }; });
			    },
			    cache:false
			  }
			});
			console.log(citynames.prefetch)
			$('#tag_search').tagsinput({
			  typeaheadjs: {
			    name: 'citynames',
			    displayKey: 'name',
			    valueKey: 'name',
			    source: citynames.ttAdapter()
			  }
			});
			$("#type").removeAttr("disabled"); 
		    $("#role1").removeAttr("disabled"); 
		    $("#role2").removeAttr("disabled"); 
		    $("#abstract").removeAttr("disabled"); 
		    $("#city").removeAttr("disabled"); 
		    $("#role5").removeAttr("disabled"); 
	        $("#role6").removeAttr("disabled"); 
	        $("#difficulty").removeAttr("disabled"); 
			var data =CKEDITOR.instances.ckeditor.getData();
	        var title = $('#title').val();
		    var difficulty = $('#difficulty').val();
		    var uploader=$('#uploader').val();
		    var abstract = $('#abstract').val();
		    var city = $('#city').val();
		    var type = $('#type').val();
		    var category = $('#category').val();
		    var category2 = $('#category2').val();
		    var tag = $('#tag_search').val();

	        $.post("<?php echo U('Article/article_update');?>",{uploader:uploader,data:data,title:title,difficulty:difficulty,abstract:abstract,city:city,category:category,category2:category2,type:type,tag:tag,pid:pid},function(res)
               {
               	    if(res == "success")
                	{
                		swal({
	                		title: "Update Successfully!",   
							type: "success",   
							timer: 1000,   
							showConfirmButton: false
	                	},function(){
	                		window.location.href=document.referrer;
	                	})
                	}
                });
		} 
		//邮箱验证
		function validateEmail(email) {
		    var reg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		    return reg.test(email);
		}
		function edituserinformation()//用户信息修改并提交
		{

			var uid=$('#pppid').val();
	        var account = $('#account').val();
		    var password = $('#password').val();
		    var name = $('#name').val();
		    var city = $('#city').val();
		    var group = $('#group').val();
		    var integration = $('#integration').val();
		    if(!account){
		    	$('#account').focus();
		    	return;
		    }else{

				if(!validateEmail(account)){	
					swal("","Email format is not correct!");
					return;
				}
		    }
		    if(!password){
		    	$("#password").focus();
		    	return;
		    }
		    if(!name){
		    	$("#name").focus();
		    }
	        $.post("<?php echo U('User/user_update');?>",{account:account,password:password,name:name,city:city,group:group,integration:integration,articleid:'2',uid:uid},function(a)
		                {
		                	swal({
                		title: "Update Successfully!",   
						type: "success",   
						timer: 1000,   
						showConfirmButton: false
                	},function(){
                		location.href="<?php echo U('index/usercenter_myarticles?pid=4');?>";
                	})
                });
		}
		function adduserinformation()//添加用户
		{

	        var account = $('#account').val();
		    var password = $('#password').val();
		    var name = $('#name').val();
		    var city = $('#city').val();
		    var group = $('#group').val();
		    if(!account){
		    	$('#account').focus();
		    	return;
		    }else{

				if(!validateEmail(account)){	
					swal("","Email format is not correct!");
					return;
				}
		    }
		    if(!password){
		    	$("#password").focus();
		    	return;
		    }
		    if(!name){
		    	$("#name").focus();
		    }
	        $.post("<?php echo U('User/user_add');?>",{account:account,password:password,name:name,city:city,group:group},function(data)
                 {
						if(data == "isexist"){
							swal("Sorry!","The account is exist.");
						}
                        else if(data == "isexistname"){
                        	swal("Sorry!","The name is exist.");
                        }
						else if(data=="success") {
							
							swal({
									title: "Add Successfully!",   
									text: "",
									type: "success",   
									timer: 500,   
									showConfirmButton: false
								 },function(){
								 	location.href="<?php echo U('index/usercenter_myarticles?pid=4');?>";
								 }
								); 
						}else if(data=="fail"){
							
							swal({
									title: "No more than three adminstrators!",   
									text: "",
									type: "",   
									timer: 500,   
									showConfirmButton: false
								 },function(){
								 	location.href="<?php echo U('index/usercenter_myarticles?pid=4');?>";
								 }
								); 
						}
						else{
							alert(data);
						}
					});

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
		})
		</script>
		<script>
		//  var subjects = ['PHP', 'MySQL', 'SQL', 'PostgreSQL', 'HTML', 'CSS', 'HTML5', 'CSS3', 'JSON']; 
		// $('#search').typeahead({source: subjects})

			// $('#search').tagsinput({
			//   typeahead: {
			//     source: ['Amsterdam', 'Washington', 'Sydney', 'Beijing', 'Cairo']
			//   }
			// });
			
			// 这里的cache:false 可能会有让服务器压力增大的隐患
			var citynames = new Bloodhound({
			  datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
			  queryTokenizer: Bloodhound.tokenizers.whitespace,
			  prefetch: {
			    url: '<?php echo U("Tag/tags");?>',
			    filter: function(list) {
			      return $.map(list, function(cityname) {
			        return { name: cityname }; });
			    },
			    cache:false
			  }
			});
			
			console.log(citynames.prefetch)
			$('#tag_search').tagsinput({
			  typeaheadjs: {
			    name: 'citynames',
			    displayKey: 'name',
			    valueKey: 'name',
			    source: citynames.ttAdapter()
			  },
			  freeInput:false
			});
		</script>

</body>
</html>