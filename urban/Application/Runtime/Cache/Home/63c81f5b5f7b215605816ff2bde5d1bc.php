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
	<div class="wrapper homepage">
	    <header>
			<!-- 引入header -->
			<div class="topdiv">
	<ul>
	    <li><a href=""><span class="glyphicon glyphicon-heart"></span>&nbsp;Welcome, <?php echo ($name); ?></a><span>&nbsp;&nbsp;|&nbsp;</span></li>
	    <li><a href="<?php echo U('User/user_center');?>"><i class="fa fa-user"></i>&nbsp;User center</a><span>&nbsp;&nbsp;|&nbsp;</span></li>
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

			<!-- 引入结束 -->
		</header>
		<div class="layout">
			<div class="left-nav">
				 <div id="treeview2" class=""></div>
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
				         <li><a href="<?php echo U('index/homepage');?>?region=guangzhou" tabindex="-1" >
				            Guangzhou</a>
				         </li>
				      </ul>
				    </li>
				    <li class="dropdown">
				      <a href="#" id="myTabDrop1" class="dropdown-toggle"
				         data-toggle="dropdown">Author <b class="caret"></b>
				      </a>
				      <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1">
				        <?php if(is_array($author)): $i = 0; $__LIST__ = $author;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voauthor): $mod = ($i % 2 );++$i;?><li ><a href="<?php echo U('index/homepage');?>?uploader=<?php echo ($voauthor['name']); ?>" class="" tabindex="-1">
				           <?php echo ($voauthor['name']); ?></a>
				         </li><?php endforeach; endif; else: echo "" ;endif; ?>
				      </ul>
				    </li>
				    <li class="dropdown">
				      <a href="#" id="myTabDrop1" class="dropdown-toggle"
				         data-toggle="dropdown">Origin<b class="caret"></b>
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
				<?php if(($select != null)): if(is_array($select)): $i = 0; $__LIST__ = $select;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div>
					<div class="col-md-3">
					<?php if(($vo['picture_preview'] != null)): ?><img src="http://<?php echo ($server); echo ($vo['picture_preview']); ?>">
			        <?php else: ?>
			            <img src="http://<?php echo ($server); ?>/Public/images/coverpicture.jpg"><?php endif; ?>
			        	<div class="div-tag">
			        		<input type="hidden" name="tags" class="tags" value="<?php echo ($vo['tag']); ?>">
			        		<!-- <label class="tag"><?php echo ($vo['tag']); ?></label> -->
			        	</div>
			    	</div>
			    	<div class="col-md-9">
			    		<h5><?php echo ($vo['title']); ?>&nbsp;&nbsp;
				    		<label>
								<?php $__FOR_START_25891__=0;$__FOR_END_25891__=$vo['difficulty'];for($i=$__FOR_START_25891__;$i < $__FOR_END_25891__;$i+=1){ ?><!-- <span class="glyphicon glyphicon-star star"></span> -->
							    	<i class="fa fa-star star"></i><?php } ?>
							</label>
						</h5>
						<?php if(($vo['updatetime'] == null)): ?><label class="not-updated">
							<i class="fa fa-refresh" title="Not updated"></i>
						</label><?php endif; ?>
						<ul class="ul-icon">
							<li><span class="glyphicon glyphicon-user"></span><?php echo ($vo['uploader']); ?></li>
							<li><span class="glyphicon glyphicon-time"></span><?php echo ($vo['posttime']); ?></li>
							<li><span><i class="fa fa-download"></i></span>Downloads (<?php echo ($vo['download']); ?>)</li>
							<?php if(($vo['expiration'] != null)): ?><li><span><i class="fa fa-exclamation" aria-hidden="true"></i></span><?php echo ($vo['expiration']); ?></li><?php endif; ?>
						</ul>
						<p>
							<?php echo ($vo['abstract']); ?>
						</p>
						<!-- go to page article_view.html -->
						<div style="text-align: right;padding-right:10px;margin-top:4px;">
						    <a href="<?php echo U('index/article_view');?>?pid=<?php echo ($vo['pid']); ?>" class="btn btn-tag "><i class="fa fa-reorder"></i>View</a>
						    <?php if(($group == 2)): ?><a href="<?php echo U('index/article_edit');?>?pid=<?php echo ($vo['pid']); ?>&&edit_id=5" class="btn btn-tag "><i class="fa fa-edit"></i>Edit</a>
							<?php elseif(($group == 1)): ?>
                                <a href="<?php echo U('index/article_edit');?>?pid=<?php echo ($vo['pid']); ?>&&edit_id=2" class="btn btn-tag "><i class="fa fa-edit"></i>Edit</a><?php endif; ?>
							<?php if(($group == 1)): ?><a class="btn btn-tag del" onclick='del(<?php echo ($vo['pid']); ?>);'><i class="fa fa-remove"></i>Delete</a><?php endif; ?>
						</div>
			    	</div>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
				<!-- 分页 -->
				<div class="content-footer">
				<ul class="nav footer-result"> 
				   <li class="dropdown">
				      <a class="category" style="border-bottom-width:0 !important;">
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
					     <?php if(($region != null)): ?><li><a href="<?php echo U('index/homepage');?>?view=5&&region=<?php echo ($region); ?>">view 5 results</a></li>
					         <li><a href="<?php echo U('index/homepage');?>?view=10&&region=<?php echo ($region); ?>">view 10 results</a></li>
					         <li><a href="<?php echo U('index/homepage');?>?view=15&&region=<?php echo ($region); ?>">view 15 results</a></li>
					         <li><a href="<?php echo U('index/homepage');?>?view=20&&region=<?php echo ($region); ?>">view 20 results</a></li>
					     <?php elseif(($uploader != null)): ?>
					         <li><a href="<?php echo U('index/homepage');?>?view=5&&uploader=<?php echo ($uploader); ?>">view 5 results</a></li>
					         <li><a href="<?php echo U('index/homepage');?>?view=10&&uploader=<?php echo ($uploader); ?>">view 10 results</a></li>
					         <li><a href="<?php echo U('index/homepage');?>?view=15&&uploader=<?php echo ($uploader); ?>">view 15 results</a></li>
					         <li><a href="<?php echo U('index/homepage');?>?view=20&&uploader=<?php echo ($uploader); ?>">view 20 results</a></li>
					     <?php elseif(($type != null)): ?>
					         <li><a href="<?php echo U('index/homepage');?>?view=5&&type=<?php echo ($type); ?>">view 5 results</a></li>
					         <li><a href="<?php echo U('index/homepage');?>?view=10&&type=<?php echo ($type); ?>">view 10 results</a></li>
					         <li><a href="<?php echo U('index/homepage');?>?view=15&&type=<?php echo ($type); ?>">view 15 results</a></li>
					         <li><a href="<?php echo U('index/homepage');?>?view=20&&type=<?php echo ($type); ?>">view 20 results</a></li>
					     <?php elseif(($difficulty != null)): ?>
					         <li><a href="<?php echo U('index/homepage');?>?view=5&&difficulty=<?php echo ($difficulty); ?>">view 5 results</a></li>
					         <li><a href="<?php echo U('index/homepage');?>?view=10&&difficulty=<?php echo ($difficulty); ?>">view 10 results</a></li>
					         <li><a href="<?php echo U('index/homepage');?>?view=15&&difficulty=<?php echo ($difficulty); ?>">view 15 results</a></li>
					         <li><a href="<?php echo U('index/homepage');?>?view=20&&difficulty=<?php echo ($difficulty); ?>">view 20 results</a></li>
					     <?php elseif(($shunxu != null)): ?>
					         <li><a href="<?php echo U('index/homepage');?>?view=5&&shunxu=<?php echo ($shunxu); ?>">view 5 results</a></li>
					         <li><a href="<?php echo U('index/homepage');?>?view=10&&shunxu=<?php echo ($shunxu); ?>">view 10 results</a></li>
					         <li><a href="<?php echo U('index/homepage');?>?view=15&&shunxu=<?php echo ($shunxu); ?>">view 15 results</a></li>
					         <li><a href="<?php echo U('index/homepage');?>?view=20&&shunxu=<?php echo ($shunxu); ?>">view 20 results</a></li>
					     <?php elseif(($content != null)): ?>
					         <li><a href="<?php echo U('index/homepage');?>?view=5&&content=<?php echo ($content); ?>">view 5 results</a></li>
					         <li><a href="<?php echo U('index/homepage');?>?view=10&&content=<?php echo ($content); ?>">view 10 results</a></li>
					         <li><a href="<?php echo U('index/homepage');?>?view=15&&content=<?php echo ($content); ?>">view 15 results</a></li>
					         <li><a href="<?php echo U('index/homepage');?>?view=20&&content=<?php echo ($content); ?>">view 20 results</a></li>
					     <?php else: ?>
					         <li><a href="<?php echo U('index/homepage');?>?view=5&&view_number=1">view 5 results</a></li>
					         <li><a href="<?php echo U('index/homepage');?>?view=10&&view_number=1">view 10 results</a></li>
					         <li><a href="<?php echo U('index/homepage');?>?view=15&&view_number=1">view 15 results</a></li>
					         <li><a href="<?php echo U('index/homepage');?>?view=20&&view_number=1">view 20 results</a></li><?php endif; ?>
				      </ul>
				   </li>				  
				</ul>
				<ul class="pagination">
				       <div class="pages">
                        <?php echo ($page); ?>
                       </div>
			    </ul>
				</div>
				<?php else: ?>
					<div class="no-result">
						<p>Oops...No results were found for your search :(</p>
					</div><?php endif; ?>
			</div>
		</div>
		<footer>
			<!-- 引入header -->
			<div class="footer">
	<div>
		<img src="/Public/images/ua.png">
		<img src="/Public/images/color.png">
		<img src="/Public/images/logo.png">
		<img src="/Public/images/logo-uf.png" class="uf-logo">
		<span>© 2016 HK Focus Media  沪ICP备12038926号-2</span>
	</div>
</div>
			<!-- 引入结束 -->
		</footer>
	</div>
	<input type="hidden" id="timeout" value="<?php echo ($timeout); ?>">
	<script type="text/javascript" src="/Public/js/jquery.min.js"></script>
	<script type="text/javascript" src="/Public/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/Public/js/sweetalert.min.js"></script>
	<script type="text/javascript" src="/Public/js/main.min.js"></script>
	<script src="/Public/js/bootstrap-treeview.js"></script>
	<script type="text/javascript">

  		$(function() {

        var defaultData = [
          {
            text: 'All',
            href: '<?php echo U('index/homepage');?>',
          },
          {
            text: 'Arts & 	Entertainment',
            href: '<?php echo U('index/homepage');?>?category=Arts%26Entertainment',
            tags: ['6'],
            nodes:[
            	{
            		text: 'Art',
            		href: '<?php echo U('index/homepage');?>?category=Arts%26Entertainment&&category2=Art'
            	},
            	{
            		text: 'Books',
            		href: '<?php echo U('index/homepage');?>?category=Arts%26Entertainment&&category2=Books'
            	},
            	{
            		text: 'Film & Television',
            		href: '<?php echo U('index/homepage');?>?category=Arts%26Entertainment&&category2=Film%26Television'
            	},
            	{
            		text: 'Music',
            		href: '<?php echo U('index/homepage');?>?category=Arts%26Entertainment&&category2=Music'
            	},
            	{
            		text: 'Stage',
            		href: '<?php echo U('index/homepage');?>?category=Arts%26Entertainment&&category2=Stage'
            	},
            	{
            		text: 'Interviews',
            		href: '<?php echo U('index/homepage');?>?category=Arts%26Entertainment&&category2=Interviews'
            	}
            ]
          },
          {
            text: 'Charity',
            href: '<?php echo U('index/homepage');?>?category=Charity',
             tags: ['0']
          },
          {
            text: 'Commentary',
            href: '<?php echo U('index/homepage');?>?category=Commentary',
            tags: ['0']
          },
          {
            text: 'Community',
            href: '<?php echo U('index/homepage');?>?category=Community',
            tags: ['0'],
          },
          {
            text: 'Features',
            href: '<?php echo U('index/homepage');?>?category=Features',
            tags: ['7'],
            nodes:[
            	{
            		text: 'Photo Essays',
            		href: '<?php echo U('index/homepage');?>?category=Features&&category2=PhotoEssays',
            		tags: ['0']
            	},
            	{
            		text: 'History',
            		href: '<?php echo U('index/homepage');?>?category=Features&&category2=History',
            		tags: ['0']
            	},
            	{
            		text: 'Human Interest',
            		href: '<?php echo U('index/homepage');?>?category=Features&&category2=HumanInterest',
            		tags: ['0']
            	},
            	{
            		text: 'Infrastructure',
            		href: '<?php echo U('index/homepage');?>?category=Features&&category2=Infrastructure',
            		tags: ['0']
            	},
            	{
            		text: 'Interviews',
            		href: '<?php echo U('index/homepage');?>?category=Features&&category2=Interviews',
            		tags: ['0']
            	},
            	{
            		text: 'Language',
            		href: '<?php echo U('index/homepage');?>?category=Features&&category2=Language',
            		tags: ['0']
            	},
            	{
            		text: 'Animals & Pets',
            		href: '<?php echo U('index/homepage');?>?category=Features&&category2=Animals&Pets',
            		tags: ['0']
            	},
            ]
          },
          {
          	text: 'Food & Drink',
          	href: '<?php echo U('index/homepage');?>?category=Food%26Drink',
    		tags: ['5'],
    		nodes: [
    			{
    				text: 'Restaurant Reviews',
		          	href: '<?php echo U('index/homepage');?>?category=Food%26Drink&&category2=RestaurantReviews',
		    		tags: ['0']
    			},
    			{
    				text: 'Bar Reviews',
		          	href: '<?php echo U('index/homepage');?>?category=Food%26Drink&&category2=Bar Reviews',
		    		tags: ['0']
    			},
    			{
    				text: 'Interviews',
		          	href: '<?php echo U('index/homepage');?>?category=Food%26Drink&&category2=Interviews',
		    		tags: ['0']
    			},
    			{
    				text: 'Guides',
		          	href: '<?php echo U('index/homepage');?>?category=Food%26Drink&&category2=Guides',
		    		tags: ['0']
    			},
    			{
    				text: 'Features',
		          	href: '<?php echo U('index/homepage');?>?category=Food%26Drink&&category2=Features',
		    		tags: ['0']
    			},
    		]
          },
          {
          	text: 'Health',
          	href: '<?php echo U('index/homepage');?>?category=Health',
          	tags: ['0']
          },
          {
          	text: 'Lifestyle',
          	href: '<?php echo U('index/homepage');?>?category=Lifestyle',
    		tags: ['4'],
    		nodes: [
    			{
    				text: 'Interviews',
		          	href: '<?php echo U('index/homepage');?>?category=Lifestyle&&category2=Interviews',
		    		tags: ['0']
    			},
    			{
    				text: 'Fashion&Shopping',
		          	href: '<?php echo U('index/homepage');?>?category=Lifestyle&&category2=Fashion%26Shopping',
		    		tags: ['0']
    			},
    			{
    				text: 'Beauty',
		          	href: '<?php echo U('index/homepage');?>?category=Lifestyle&&category2=Beauty',
		    		tags: ['0']
    			},
    			{
    				text: 'Hotels',
		          	href: '<?php echo U('index/homepage');?>?category=Lifestyle&&category2=Hotels',
		    		tags: ['0']
    			}
    		]
          },
          {
          	text: 'News',
          	href: '<?php echo U('index/homepage');?>?category=News',
          	tags: '[0]'
          },
          {
          	text: 'Science & Technology',
          	href: '<?php echo U('index/homepage');?>?category=Science%26Technology',
          	tags: '[2]',
          	nodes: [
          		{
          			text: 'Environment',
		          	href: '<?php echo U('index/homepage');?>?category=Science%26Technology&&category2=Environment',
		          	tags: '[0]',
          		},
          		{
          			text: 'Technology',
		          	href: '<?php echo U('index/homepage');?>?category=Science%26Technology&&category2=Technology',
		          	tags: '[0]',
          		}
          	]
          },
          {
          			text: 'Sports',
		          	href: '<?php echo U('index/homepage');?>?category=Sports',
		          	tags: '[0]',
          		}

        ];

        

        var json = '[' +
          '{' +
            '"text": "Parent 1",' +
            '"nodes": [' +
              '{' +
                '"text": "Child 1",' +
                '"nodes": [' +
                  '{' +
                    '"text": "Grandchild 1"' +
                  '},' +
                  '{' +
                    '"text": "Grandchild 2"' +
                  '}' +
                ']' +
              '},' +
              '{' +
                '"text": "Child 2"' +
              '}' +
            ']' +
          '},' +
          '{' +
            '"text": "Parent 2"' +
          '},' +
          '{' +
            '"text": "Parent 3"' +
          '},' +
          '{' +
            '"text": "Parent 4"' +
          '},' +
          '{' +
            '"text": "Parent 5"' +
          '}' +
        ']';


        $('#treeview2').treeview({
          levels: 1,
          // expandIcon: "glyphicon glyphicon-list",
          // collapseIcon: "glyphicon glyphicon-align-justify",
          // nodeIcon: "glyphicon glyphicon-user",
          // showTags: true,
          expandIcon: 'glyphicon glyphicon-chevron-right',
          collapseIcon: 'glyphicon glyphicon-chevron-down',
          enableLinks: true,
          data: defaultData
        });

       


        var $searchableTree = $('#treeview-searchable').treeview({
          data: defaultData,
        });

        var search = function(e) {
          var pattern = $('#input-search').val();
          var options = {
            ignoreCase: $('#chk-ignore-case').is(':checked'),
            exactMatch: $('#chk-exact-match').is(':checked'),
            revealResults: $('#chk-reveal-results').is(':checked')
          };
          var results = $searchableTree.treeview('search', [ pattern, options ]);

          var output = '<p>' + results.length + ' matches found</p>';
          $.each(results, function (index, result) {
            output += '<p>- ' + result.text + '</p>';
          });
          $('#search-output').html(output);
        }

        $('#btn-search').on('click', search);
        $('#input-search').on('keyup', search);

        $('#btn-clear-search').on('click', function (e) {
          $searchableTree.treeview('clearSearch');
          $('#input-search').val('');
          $('#search-output').html('');
        });


        var initSelectableTree = function() {
          return $('#treeview-selectable').treeview({
            data: defaultData,
            multiSelect: $('#chk-select-multi').is(':checked'),
            onNodeSelected: function(event, node) {
              $('#selectable-output').prepend('<p>' + node.text + ' was selected</p>');
            },
            onNodeUnselected: function (event, node) {
              $('#selectable-output').prepend('<p>' + node.text + ' was unselected</p>');
            }
          });
        };
        var $selectableTree = initSelectableTree();

        var findSelectableNodes = function() {
          return $selectableTree.treeview('search', [ $('#input-select-node').val(), { ignoreCase: false, exactMatch: false } ]);
        };
        var selectableNodes = findSelectableNodes();

        $('#chk-select-multi:checkbox').on('change', function () {
          console.log('multi-select change');
          $selectableTree = initSelectableTree();
          selectableNodes = findSelectableNodes();
        });

        // Select/unselect/toggle nodes
        $('#input-select-node').on('keyup', function (e) {
          selectableNodes = findSelectableNodes();
          $('.select-node').prop('disabled', !(selectableNodes.length >= 1));
        });

        $('#btn-select-node.select-node').on('click', function (e) {
          $selectableTree.treeview('selectNode', [ selectableNodes, { silent: $('#chk-select-silent').is(':checked') }]);
        });

        $('#btn-unselect-node.select-node').on('click', function (e) {
          $selectableTree.treeview('unselectNode', [ selectableNodes, { silent: $('#chk-select-silent').is(':checked') }]);
        });

        $('#btn-toggle-selected.select-node').on('click', function (e) {
          $selectableTree.treeview('toggleNodeSelected', [ selectableNodes, { silent: $('#chk-select-silent').is(':checked') }]);
        });



        var $expandibleTree = $('#treeview-expandible').treeview({
          data: defaultData,
          onNodeCollapsed: function(event, node) {
            $('#expandible-output').prepend('<p>' + node.text + ' was collapsed</p>');
          },
          onNodeExpanded: function (event, node) {
            $('#expandible-output').prepend('<p>' + node.text + ' was expanded</p>');
          }
        });

        var findExpandibleNodess = function() {
          return $expandibleTree.treeview('search', [ $('#input-expand-node').val(), { ignoreCase: false, exactMatch: false } ]);
        };
        var expandibleNodes = findExpandibleNodess();

        // Expand/collapse/toggle nodes
        $('#input-expand-node').on('keyup', function (e) {
          expandibleNodes = findExpandibleNodess();
          $('.expand-node').prop('disabled', !(expandibleNodes.length >= 1));
        });

        $('#btn-expand-node.expand-node').on('click', function (e) {
          var levels = $('#select-expand-node-levels').val();
          $expandibleTree.treeview('expandNode', [ expandibleNodes, { levels: levels, silent: $('#chk-expand-silent').is(':checked') }]);
        });

        $('#btn-collapse-node.expand-node').on('click', function (e) {
          $expandibleTree.treeview('collapseNode', [ expandibleNodes, { silent: $('#chk-expand-silent').is(':checked') }]);
        });

        $('#btn-toggle-expanded.expand-node').on('click', function (e) {
          $expandibleTree.treeview('toggleNodeExpanded', [ expandibleNodes, { silent: $('#chk-expand-silent').is(':checked') }]);
        });

        // Expand/collapse all
        $('#btn-expand-all').on('click', function (e) {
          var levels = $('#select-expand-all-levels').val();
          $expandibleTree.treeview('expandAll', { levels: levels, silent: $('#chk-expand-silent').is(':checked') });
        });

        $('#btn-collapse-all').on('click', function (e) {
          $expandibleTree.treeview('collapseAll', { silent: $('#chk-expand-silent').is(':checked') });
        });



        var $checkableTree = $('#treeview-checkable').treeview({
          data: defaultData,
          showIcon: false,
          showCheckbox: true,
          onNodeChecked: function(event, node) {
            $('#checkable-output').prepend('<p>' + node.text + ' was checked</p>');
          },
          onNodeUnchecked: function (event, node) {
            $('#checkable-output').prepend('<p>' + node.text + ' was unchecked</p>');
          }
        });

        var findCheckableNodess = function() {
          return $checkableTree.treeview('search', [ $('#input-check-node').val(), { ignoreCase: false, exactMatch: false } ]);
        };
        var checkableNodes = findCheckableNodess();

        // Check/uncheck/toggle nodes
        $('#input-check-node').on('keyup', function (e) {
          checkableNodes = findCheckableNodess();
          $('.check-node').prop('disabled', !(checkableNodes.length >= 1));
        });

        $('#btn-check-node.check-node').on('click', function (e) {
          $checkableTree.treeview('checkNode', [ checkableNodes, { silent: $('#chk-check-silent').is(':checked') }]);
        });

        $('#btn-uncheck-node.check-node').on('click', function (e) {
          $checkableTree.treeview('uncheckNode', [ checkableNodes, { silent: $('#chk-check-silent').is(':checked') }]);
        });

        $('#btn-toggle-checked.check-node').on('click', function (e) {
          $checkableTree.treeview('toggleNodeChecked', [ checkableNodes, { silent: $('#chk-check-silent').is(':checked') }]);
        });

        // Check/uncheck all
        $('#btn-check-all').on('click', function (e) {
          $checkableTree.treeview('checkAll', { silent: $('#chk-check-silent').is(':checked') });
        });

        $('#btn-uncheck-all').on('click', function (e) {
          $checkableTree.treeview('uncheckAll', { silent: $('#chk-check-silent').is(':checked') });
        });



        var $disabledTree = $('#treeview-disabled').treeview({
          data: defaultData,
          onNodeDisabled: function(event, node) {
            $('#disabled-output').prepend('<p>' + node.text + ' was disabled</p>');
          },
          onNodeEnabled: function (event, node) {
            $('#disabled-output').prepend('<p>' + node.text + ' was enabled</p>');
          },
          onNodeCollapsed: function(event, node) {
            $('#disabled-output').prepend('<p>' + node.text + ' was collapsed</p>');
          },
          onNodeUnchecked: function (event, node) {
            $('#disabled-output').prepend('<p>' + node.text + ' was unchecked</p>');
          },
          onNodeUnselected: function (event, node) {
            $('#disabled-output').prepend('<p>' + node.text + ' was unselected</p>');
          }
        });

        var findDisabledNodes = function() {
          return $disabledTree.treeview('search', [ $('#input-disable-node').val(), { ignoreCase: false, exactMatch: false } ]);
        };
        var disabledNodes = findDisabledNodes();

        // Expand/collapse/toggle nodes
        $('#input-disable-node').on('keyup', function (e) {
          disabledNodes = findDisabledNodes();
          $('.disable-node').prop('disabled', !(disabledNodes.length >= 1));
        });

        $('#btn-disable-node.disable-node').on('click', function (e) {
          $disabledTree.treeview('disableNode', [ disabledNodes, { silent: $('#chk-disable-silent').is(':checked') }]);
        });

        $('#btn-enable-node.disable-node').on('click', function (e) {
          $disabledTree.treeview('enableNode', [ disabledNodes, { silent: $('#chk-disable-silent').is(':checked') }]);
        });

        $('#btn-toggle-disabled.disable-node').on('click', function (e) {
          $disabledTree.treeview('toggleNodeDisabled', [ disabledNodes, { silent: $('#chk-disable-silent').is(':checked') }]);
        });

        // Expand/collapse all
        $('#btn-disable-all').on('click', function (e) {
          $disabledTree.treeview('disableAll', { silent: $('#chk-disable-silent').is(':checked') });
        });

        $('#btn-enable-all').on('click', function (e) {
          $disabledTree.treeview('enableAll', { silent: $('#chk-disable-silent').is(':checked') });
        });



        var $tree = $('#treeview12').treeview({
          data: json
        });
  		});
  	</script>

	<script type="text/javascript">
		function jump2login(){
			window.location.href = "<?php echo U('index/login');?>?session_destory=1";
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
		      text: "If you click 'OK', you will be redirected to Login page", 
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

		//delete the article
		function del(id)
		{
			console.log(id);
			swal({   
					title: "Are you sure to delete?",   
					text: "",  
					type: "warning",  
					showCancelButton: true,   
				    confirmButtonColor: "#DD6B55",   
				    confirmButtonText: "Yes, delete it!",   
				    closeOnConfirm: false 
				}, function(){  
					$.post("<?php echo U('Article/article_delete');?>?pid="+id,function(data){
						if(data == "deleted"){
							swal({
									title: "Deleted!",   
									text: "",
									type: "success",   
									timer: 1000,   
									showConfirmButton: false
								 },function(){
								 	location.reload();
								 }
								); 
						}else if(data == "overtime"){
							swal("Sorry!","This article has been uploaded more than 72 hours.You aren't not able to delete it.");
						}
					});
					
				});
		}


		$(".list-group-item").on("click",function(){
			alert(1)
			console.log($(this))
			$(this).find("a").click();
		})


		$(".tags").each(function(){
			var val = $(this).val();
			var array = val.split(",");
			for(var i = 0; i < array.length; i++){
				 $(this).parent().append("<label class='tag'>"+array[i]+"</label>");
			}
			$(this).parent().append("<div class='clearfix'></div>");
			// $(this).append("<label class='tag'></label>");
		})


	</script>
</body>
</html>