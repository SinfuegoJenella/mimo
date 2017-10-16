<body style="background-color: #d6d6d6">
<div class="container" style="margin-top: 20px; ">
	<br />
	<br />
	<div class="row">
				<!-- Header -->
					<!-- Sa 'background-image: url('') mo ilagay yung mga header at profile pic -->
				<div class="headerStudio" style="background-image:url('<?php echo $user[0]['header']; ?>'); width: 100%; height: auto; margin-left: 0px; background-size: cover;">
					<!--DP-->
					<div class="nameBox" style="background: linear-gradient(transparent,rgba(0,0,0,0.2),rgba(0,0,0,0.8)); 
												background-size: cover; margin: 0 0; height: auto">
						<div class="dpSectionStudio media" style="background-image:url('<?php if ($user[0]['picture'] == NULL){ echo 'http://localhost/mimo/assets/img/noimage.jpg'; } else { echo $user[0]['picture'];} ?>');"></div>
							
						
						<!-- Full name yung sa h4 at username/stagename yung sa h6 -->
						<h3 style="color: white" class="text-center user"><?php echo $user[0]['firstname'].' '.$user[0]['lastname'];?>
						</h3>
						<a href="http://localhost/mimo/mimo/myStudio?username=<?php echo $user[0]['username'];?> " style="color: white" class="text-center user"><h5><?php echo $user[0]['username'];?></h5></a>
						
						
						<div class="row">
							<div class="col-md-4">
								<h6 style="padding: 0 2.2em" class="profile text-center"><b style="color: #ffa31a"><i class="fa fa-music"></i> Genres:</b> <br />
								<?php if ( $about[0]['genre1'] == NULL && $about[0]['genre2'] == NULL && $about[0]['genre1'] == NULL)
								{
									echo (" None ");
								}
								else
								{
									if($about[0]['genre1'] == NULL)
									{
										echo $about[0]['genre2'].' . ' .$about[0]['genre3'];
									}
									else if($about[0]['genre2'] == NULL)
									{
										echo $about[0]['genre1'].' . ' .$about[0]['genre3'];
									}
									else if($about[0]['genre3'] == NULL)
									{
										echo $about[0]['genre1'].' . ' .$about[0]['genre2'];
									}
									else{
										echo $about[0]['genre1'].' . ' .$about[0]['genre2'].' . ' .$about[0]['genre3']; 
									}
									}?></h6>
							</div>
							
							<div class="col-md-4">
								<h6 style="padding: 0 2.2em" class="profile text-center"><b style="color: #ffa31a"><i class="fa fa-briefcase"></i>
								 Career:</b> <br />
								<?php if ( $about[0]['career'] == NULL)
								{
									echo ("None");
								}
								else{
								echo $about[0]['career'] ; }?></h6>
							</div>
							
							<div class="col-md-4">
								<h6 style="padding: 0 2.2em" class="followers profile text-center"><b style="color: #ffa31a"><i class="fa fa-users"></i> Followers:</b> <br />
								<?php echo $about[0]['followers'];?> People</h6>
							</div>
						</div>

					</div>

		</div>
			
	</div>
	
	
	<div class="row" style="background-color: #f2f2f2;">
		<!--Profile Info: SHOUTOUT(Parang Bio) -->
		<div class="col-md-12" style="">
				<!--Put here the bio 
				
				<p class="text-center"><b>You've got to hold your head up high! You've got to hold your head up high!
				You've got to hold your head up high! You've got to hold your head up high! You've got to hold your head up high!</b> -->
				<?php if($user[0]['id']!=$users[0]['id']){ ?>
							
								<a id="follow" class="btn follow pull-right" style="margin: 10px"><i class="fa fa-bell-o"></i><span> Follow</span></a>
						
							<?php };?>
				
		</div>
	</div>
	<br />
	
	<div class="row">
	<ul class="nav nav-tabs nav-justified">
						<!-- COLLECTIONS, ALBUMS, THOUGHTS, and FAVORITES TABS-->
						<li class="active"><a data-toggle="tab" href="#audios"><i class="material-icons">library_music</i>&nbsp;Audios</a></li>
						<li><a data-toggle="tab" href="#thought" ><span><i class="material-icons">chat_bubble</i></span>&nbsp;Thoughts</a></li>
						<li><a data-toggle="tab" href="#collections" ><span><i class="material-icons">music_note</i></span>&nbsp;Collections</a></li>
						<li><a data-toggle="tab" href="#vids" ><i class="material-icons">videocam</i></span>&nbsp;Videos</a></li>
					</ul>

						<div class="tab-content">
						<?php $this->load->view('templates/commentModal');?>
						<!-- COLLECTIONS -->
							<div id="audios" class="tab-pane fade in active">
							<div class="row">
								<div class="col-md-3"></div>
								<!-- PUT HERE THE COLLECTIONS-->
								<div class="col-md-6 audios">	
								<!-- -->
								</div>
								
								<div class="col-md-3"></div>
							</div>
							</div>
   
						<!-- ALBUMS-->
							<div id="collections" class="tab-pane fade" >
							<div class="row">
								<div class="col-md-3"></div>
									
								<div class="col-md-6">	
									<!-- PUT HERE THE ALBUMS-->

									<?php $this->load->view('templates/albumbox');?>
									<?php $this->load->view('templates/albumbox');?>
									<?php $this->load->view('templates/albumbox');?>
									<?php $this->load->view('templates/albumbox');?>
									<?php $this->load->view('templates/albumbox');?>
									<!-- -->
								</div>
								
								<div class="col-md-3"></div>
								
							</div>
							</div>
							
							
							<!-- THOUGHTS-->
							<div id="thought" class="tab-pane fade">
								<div class="row">
									<div class="col-md-3">
									</div>
									<div class="col-md-6 thoughts">
										<!-- PUT HERE THE THOUGHTS-->

										<!-- -->
									</div>
									<div class="col-md-3">
									</div>
								</div>
							</div>	
							
							<!-- FAVORITES-->
							<div id="vids" class="tab-pane fade">
							<div class="row">
								<div class="col-md-3"></div>
									
								<div class="col-md-6 videos">	
									<!-- PUT HERE THE FAVORITES-->
					
									<!-- -->
								</div>
								
								<div class="col-md-3"></div>
							</div>		
						</div>
</div>
	<?php $this->load->view('include/releasebuttons');?>
	<?php $this->load->view('templates/addpostmodal');?>
	<?php $this->load->view('templates/addaudiomodal');?>
	<?php $this->load->view('templates/addvideomodal');?>
	<?php $this->load->view('templates/colmodal');?>
	<?php $this->load->view('templates/delete_modal');?>
	</div>
</div>
</body>

<script>
	$(function(){
     initiateFollow();
});
</script>

<!-- Get Posts thoughts -->
<script type="text/javascript">
$(document).ready(function()
{
	//get thoughts posts
	var buserid = '<?php echo $user[0]['id'];?>';
	var userid = '<?php echo $users[0]['id'];?>';
	if(buserid!=userid){
		var check = 'not'
	}
	else{
		var check = 'yes'
	}
	$.ajax({
		type: 'POST',
        url: '<?php echo base_url() ?>mimo/posts',
        data:{
          	browseuser:buserid
        },
        success: function(s){
			var posts = JSON.parse(s);
        	console.log(posts);
        	if(posts.PostId==="error"){
        			$('.thoughts').html('No thoughts')
        		}
        	else{
        	$.each(posts, function(index) {
        		$('.thoughts').html(
        						$('.thoughts').html()+'<div class="posttemp"><div class="posthead"><div class="media"><div class="media-left"><a href="#" ><div class="media-object postPic" style="background-image:url('+posts[index].PostUserPicture+');"></div></a></div><div class="media-body"><h4 class="media-heading"><a class="user" href="http://localhost/mimo/mimo/myStudio?username='+posts[index].PostUser+'">'+posts[index].PostUser+'</a><small> shared a thought!<br /><small><a class="btn del pull-right" data-toggle="modal" data-delid="'+posts[index].PostId+'"><span class="fa fa-trash del" data-toggle="tooltip" data-placement="top" title="Delete"></span></a>'+posts[index].PostDate+'</small></small></h4></div></div></div><div class="postbody"><div class="postbodycont">'+posts[index].PostBody+'</div></div><div id="likesection"><div class="btn-grp btn-group-justified"><a href="#" id="likeBtn" type="button" class="btn like" data-id="'+posts[index].PostId+'" aria-pressed="false" onclick="handleBtnClick(event)"><span class="fa fa-heart-o"></span> Like <small><small>('+posts[index].PostLikes+')</small></small></a><a class="commentBtn btn comment" data-did="'+posts[index].PostId+'" ><span class="fa fa-commenting-o"></span> Comment </a></div></div></div>'
        						);
								if(check=='not'){
									$('a.del').empty();
								}
								
								//if like button click
								$('[data-id]').click(function(e) {
									e.preventDefault();
									var buttonid = $(this).attr('data-id');
									$.ajax({
										type: 'POST',
										url: '<?php echo base_url() ?>mimo/likes',
										data:{
											postid:buttonid
										},
										success: function(s){
											var likes = JSON.parse(s);
											$("[data-id='"+buttonid+"']").html('<span class="fa fa-heart-o"></span> Like <small><small>('+likes.likes+')</small></small>');
										},
										error: function(e){
											console.log(e);
											alert('error');
										}
									});

								});
								//if comment button click
								$('[data-did]').click(function(e) {
									e.preventDefault();
									$('.commentatorDiv').html('')
									var buttonid = $(this).attr('data-did');
									$.ajax({
										type: 'POST',
										url: '<?php echo base_url() ?>mimo/getcomments',
										data:{
											postid:buttonid
										},
										success: function(s){
											var comments = JSON.parse(s)
        									console.log(comments);
        									//call showCommentModal function to display all comments
        									showCommentModal(comments,buttonid);

										},
										error: function(){
											console.log(e)
										}

									});

								});
								$('[data-delid]').click(function(e) {
						            e.preventDefault();
						            var delid = $(this).attr('data-delid');
						            showDeleteModal(delid)

						        });
					
        		});
			}
        },
        error: function(xhr, ajaxOptions, thrownError){
        	console.log(arguments);
        	alert('error');
        }

	});
	//get audio posts
	var buserid = '<?php echo $user[0]['id'];?>';
	var userid = '<?php echo $users[0]['id'];?>';
	$('.audios').html('')
	$.ajax({
		type: 'POST',
        url: '<?php echo base_url() ?>mimo/audioposts',
        data:{
          	browseuser:buserid
        },
        success:function(s){
        	var audioposts = JSON.parse(s)
        	console.log(audioposts)
        	if(audioposts.id==="error"){
        			$('.audios').html(' No audios')
        		}
        	else{
        	$.each(audioposts, function(index) {
        		$('.audios').html($('.audios').html()+'<div class="posttemp"><div class="posthead"><div class="media"><div class="media-left"><a href="#" ><div class="media-object postPic" style="background-image:url('+audioposts[index].picture+');"></div></a></div><div class="media-body"><h4 class="media-heading"><a class="user">'+audioposts[index].username+'</a><small> released an audio!</small><a class="btn del pull-right" data-toggle="modal" data-delid="'+audioposts[index].id+'"><span class="fa fa-trash del" data-toggle="tooltip" data-placement="top" title="Delete"></span></a><br /><small><small> '+audioposts[index].posted_at+'</small></small><small></small></h4></div></div></div><div class="postbodyaudio"><div class="media"><div class="media-left"><a href="#" ><div class="media-object albumCover" style="background-image:url('+audioposts[index].cover+');"></div></a></div><div class="media-body "><h4 style="color: black" class="media-heading"><i class="fa fa-music"></i><b style="color: #ff9926"> Title:</b> '+audioposts[index].title+'</h4><h6 style="padding: 5px 2.2em"><b> Artist:</b> '+audioposts[index].username+'</h6><h6 style="padding: 0 2.2em"><b> Genre:</b>'+audioposts[index].genre+'</h6><h6 style="padding: 0 2.2em"><b> Year:</b> 2017</h6><p id="audDesc" style="padding: 0 2.2em">'+audioposts[index].about+'</p><hr /></div></div><div class="row" ><div class="col-md-12"><audio id="audio" controls controlsList="nodownload" width="100%"><source src="'+audioposts[index].path+'" type="audio/mpeg">Your browser does not support the audio element.</audio></div></div><div id="likesectionaud"><div class="btn-grp btn-group-justified"><a href="#" id="likeBtn" type="button" class="btn like" data-postid="'+audioposts[index].id+'" aria-pressed="false" onclick="handleBtnClick(event)"><span class="fa fa-heart-o"></span> Like <small><small>('+audioposts[index].likes+')</small></small></a><a class="commentBtn btn comment" data-postdid="'+audioposts[index].id+'" data-toggle="modal" data-target="#commentModal"><span class="fa fa-commenting-o"></span> Comment </a><a id="addCollect" class="btn comment" data-toggle="modal" data-target="#collectModal"> <span class="fa fa-plus-square collect" data-toggle="tooltip" data-placement="top" title="Add To Collections"></span></a><a class="btn view disabled"><span style="font-size: 12px;" class="glyphicon glyphicon-play"></span><small class="pull-right"> 123,234 plays</small></a></div></div></div></div>'

        			);
								if(check=='not'){
									$('a.del').empty();
								}
								$('[data-postid]').click(function(e) {
									e.preventDefault();
									var buttonid = $(this).attr('data-postid');
									$.ajax({
										type: 'POST',
										url: '<?php echo base_url() ?>mimo/likes',
										data:{
											postid:buttonid
										},
										success: function(s){
											var likes = JSON.parse(s);
											$("[data-postid='"+buttonid+"']").html('<span class="fa fa-heart-o"></span> Like <small><small>('+likes.likes+')</small></small>');
										},
										error: function(e){
											console.log(e);
											alert('error');
										}
									});

								});
								$('[data-postdid]').click(function(e) {
									e.preventDefault();
									$('.commentatorDiv').html('')
									var buttonid = $(this).attr('data-postdid');
									$.ajax({
										type: 'POST',
										url: '<?php echo base_url() ?>mimo/getcomments',
										data:{
											postid:buttonid
										},
										success: function(s){
											var comments = JSON.parse(s)
        									console.log(comments);
        									showCommentModal(comments,buttonid);

										},
										error: function(){
											console.log(e)
										}

									});

								});
								$('[data-delid]').click(function(e) {
						            e.preventDefault();
						            var delid = $(this).attr('data-delid');
						            showDeleteModal(delid)

						        });

								

        		});
			}
        },
        error:function(e){
        	console.log(e)
        }
    });
	//get video posts
	var buserid = '<?php echo $user[0]['id'];?>';
	var userid = '<?php echo $users[0]['id'];?>';

	$('.videos').html('')
	$.ajax({
		type: 'POST',
        url: '<?php echo base_url() ?>mimo/videoposts',
        data:{
          	browseuser:buserid
        },
        success:function(s){
        	var videoposts = JSON.parse(s)
        	console.log(videoposts)
        	if(videoposts.id==="error"){
        			$('.videos').html('No videos')
        		}
        	else{
        	$.each(videoposts, function(index) {
        		$('.videos').html($('.videos').html()+'<div class="posttemp"><div class="posthead"><div class="media"><div class="media-left"><a href="#" ><div class="media-object postPic" style="background-image:url('+videoposts[index].picture+');"></div></a></div><div class="media-body"><h4 class="media-heading"><a class="user">'+videoposts[index].username+'</a><small> shared a video!</small><a class="btn del pull-right" data-toggle="modal" data-delid="'+videoposts[index].id+'"><span class="fa fa-trash del" data-toggle="tooltip" data-placement="top" title="Delete"></span></a><br /><small><small> '+videoposts[index].posted_at+'</small></small></h4></div></div></div><div class="postbodyaudio"><h5 class="media-heading text-center"><i class="fa fa-video-camera"></i> '+videoposts[index].name+'</h5><div class="row" ><div class="col-md-12"><video src="'+videoposts[index].url+'" style="width:100%; height: 250px" controls controlsList="nodownload"></video></div></div><h6 style="color: #1e1e1e">'+videoposts[index].description+'</h6><br /><div id="likesectionaud"><div class="btn-grp btn-group-justified"><a href="#" id="likeBtn" type="button" class="btn like" data-likeid="'+videoposts[index].id+'" aria-pressed="false" onclick="handleBtnClick(event)"><span class="fa fa-heart-o"></span> Like <small><small>('+videoposts[index].likes+')</small></small></a><a class="commentBtn btn comment" data-comid="'+videoposts[index].id+'" data-toggle="modal" data-target="#commentModal"><span class="fa fa-commenting-o"></span> Comment </a><a class="btn view disabled"><span style="font-size: 12px;" class="glyphicon glyphicon-play"></span><small class="pull-right"> 123,234 plays</small></a></div></div></div></div>'

        			);

							
								if(check=='not'){
									$('a.del').empty();
								}

								$('[data-likeid]').click(function(e) {
									e.preventDefault();
									var buttonid = $(this).attr('data-likeid');
									$.ajax({
										type: 'POST',
										url: '<?php echo base_url() ?>mimo/likes',
										data:{
											postid:buttonid
										},
										success: function(s){
											var likes = JSON.parse(s);
											$("[data-likeid='"+buttonid+"']").html('<span class="fa fa-heart-o"></span> Like <small><small>('+likes.likes+')</small></small>');
										},
										error: function(e){
											console.log(e);
											alert('error');
										}
									});

								});
								//if comment button click
								$('[data-comid]').click(function(e) {
									e.preventDefault();
									$('.commentatorDiv').html('')
									var buttonid = $(this).attr('data-comid');
									$.ajax({
										type: 'POST',
										url: '<?php echo base_url() ?>mimo/getcomments',
										data:{
											postid:buttonid
										},
										success: function(s){
											var comments = JSON.parse(s)
        									console.log(comments);
        									//call showCommentModal function to display all comments
        									showCommentModal(comments,buttonid);

										},
										error: function(){
											console.log(e)
										}

									});

								});
								$('[data-delid]').click(function(e) {
						            e.preventDefault();
						            var delid = $(this).attr('data-delid');
						            showDeleteModal(delid)

						        });
						
        		});
						
			}
        },
        error:function(e){
        	console.log(e)
        }
    });

					// if(buserid!=userid){
					// 		$('a.del').empty();
					// 		alert('ada')
					// 	}
	function showDeleteModal(id){
		$('#myModal').modal('show')
		$('#delyes').attr('data-dmid' , id);
		$('#delyes').click(function() {
			var did = $(this).attr("data-dmid");
			$.ajax({
				type: 'POST',
				url: '<?php echo base_url() ?>mimo/delete',
				data:{
					postid:did
				},
				success: function(s){
					console.log(s)
					location.reload(true);
				},
				error: function(e){
					console.log(e)
				}
			});
		});
		
	}
	function showCommentModal(comments,postid){
		$('.h4').html('<span></span> Comments<small> on ... post</small>')
		 $('#commentModal').modal('show')
		 $.each(comments, function(index) {
	        $('.commentatorDiv').html(
			$('.commentatorDiv').html()+'<div class="media"><div class="media-left"><a href="http://localhost/mimo/mimo/myStudio?username='+comments[index].username+'"><div class="media-object commentPic" style="background-image:url('+comments[index].picture+');"></div></a></div><div class="media-body"><h5 class="media-heading"><a href="http://localhost/mimo/mimo/myStudio?username='+comments[index].username+'" style="font-weight:bold" class="user">'+comments[index].username+'</a><small><small> '+comments[index].posted_at+'</small></small></h5><h6>'+comments[index].comment+'</h6></div></div>'
			)
        });
		 $('.postComment').attr('data-cid' , postid);

		 $('.postComment').click(function(e) {
		 	e.preventDefault();
		 	var id = $(this).attr("data-cid");

			var txt = $("#commentBox").val();
			$("#commentBox").val('');
			$.ajax({
				type:'POST',
				url: '<?php echo base_url() ?>mimo/comment',
				data:{
					comment:txt,
					postid:id
				},
				success: function(r){
					if(r!=''){
						var comment = JSON.parse(r)
						console.log(comment)
						$( ".commentatorDiv" ).prepend( '<div class="media"><div class="media-left"><a href="http://localhost/mimo/mimo/myStudio?username='+comment[0].username+'"><div class="media-object commentPic" style="background-image:url('+comment[0].picture+');"></div></a></div><div class="media-body"><h5 class="media-heading"><a style="font-weight:bold" class="user">'+comment[0].username+'</a><small><small> '+comment[0].posted_at+'</small></small></h5><h6>'+comment[0].comment+'</h6></div></div>' );
					}
				},
				error: function(e){
					console.log(e);
				}

			});
		 });
	}

	var userid = '<?php echo $user[0]['id'];?>';
	var followerid = '<?php echo $users[0]['id'];?>';
	$.ajax({
		type:'POST',
		url: '<?php echo base_url() ?>mimo/checkfollow',
		data:{
			userid:userid,
			followerid:followerid
		},
		success: function(s){
			var check = JSON.parse(s)
			if(check.status==true){
				
				$("#follow").children("span").text(" Unfollow");
				$("#follow").removeClass("follow");
				$("#follow").addClass("unfollow");
				$("#follow").children("i").addClass("fa-times-circle");
				$("#follow").children("i").removeClass("fa-bell-o");
			
				$("a.unfollow").bind("click",function(){     
					$(this).children("a.unfollow span").text(" Follow");
					$(this).children("i").removeClass("fa-times-circle");
					$(this).children("i").addClass("fa-bell-o");
					$(this).removeClass("unfollow");
					$(this).addClass("follow");
				});
				
			}else{
				
				$("a.follow").bind("click",function(){
					$(this).children("span").text(" Unfollow");
					$(this).removeClass("follow");
					$(this).addClass("unfollow");
					$(this).children("i").addClass("fa-times-circle");
					$(this).children("i").removeClass("fa-bell-o");
				});
	  
			}
		},
		error: function(e){
			console.log(e)
		}
	});

	$('#follow').click(function(e) {
		e.preventDefault();
		var userid = '<?php echo $user[0]['id'];?>';
		var followerid = '<?php echo $users[0]['id'];?>';
		$.ajax({
			type:'POST',
			url: '<?php echo base_url() ?>mimo/follow',
			data:{
				userid:userid,
				followerid:followerid
			},
			success: function(s){
				var f = JSON.parse(s)
				console.log(f)
				$('h6.followers').html('<h6 style="padding: 0 2.2em" class="followers profile text-center"><b style="color:#ffa31a"><i class="fa fa-users"></i> Followers:</b> <br />'+f.followers+' People</h6>')
			},
			error: function(e){
				console.log(e)
			}
		});
	});
	
});
</script>
