<body style="background-color: #d6d6d6">
<div class="container" style="margin-top: 25px; ">
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
								Ballad, Asian Pop, Pop Rock</h6>
							</div>
							
							<div class="col-md-4">
								<h6 style="padding: 0 2.2em" class="profile text-center"><b style="color: #ffa31a"><i class="fa fa-briefcase"></i>
								 Career:</b> <br />
								Singer , Song Writer, Sound Designer</h6>
							</div>
							
							<div class="col-md-4">
								<h6 style="padding: 0 2.2em" class=" profile text-center"><b style="color: #ffa31a"><i class="fa fa-users"></i> Followers:</b> <br />
								232,651 People</h6>
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
						<li class="active"><a data-toggle="tab" href="#collections"><i class="material-icons">library_music</i>&nbsp;Collections</a></li>
						<li><a data-toggle="tab" href="#thought" ><span><i class="material-icons">chat_bubble</i></span>&nbsp;Thoughts</a></li>
						<li><a data-toggle="tab" href="#audios" ><span><i class="material-icons">music_note</i></span>&nbsp;Audios</a></li>
						<li><a data-toggle="tab" href="#vids" ><i class="material-icons">videocam</i></span>&nbsp;Videos</a></li>
					</ul>

						<div class="tab-content">
						<?php $this->load->view('templates/commentModal');?>
						<!-- COLLECTIONS -->
							<div id="collections" class="tab-pane fade in active">
							<div class="row">
								<div class="col-md-3"></div>
								<!-- PUT HERE THE COLLECTIONS-->
								<div class="col-md-6">	
									<?php $this->load->view('templates/audio_temp');?>
									<?php $this->load->view('templates/audio_temp');?>
									<?php $this->load->view('templates/audio_temp');?>
									<?php $this->load->view('templates/audio_temp');?>
								<!-- -->
								</div>
								
								<div class="col-md-3"></div>
							</div>
							</div>
   
						<!-- ALBUMS-->
							<div id="audios" class="tab-pane fade" >
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
									
								<div class="col-md-6">	
									<!-- PUT HERE THE FAVORITES-->
									<?php $this->load->view('templates/video_temp');?>
					
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
	var buserid = '<?php echo $user[0]['id'];?>';
	$.ajax({
		type: 'POST',
        url: '<?php echo base_url() ?>mimo/posts',
        data:{
          	browseuser:buserid
        },
        success: function(s){
			var posts = JSON.parse(s);
        	console.log(posts);
        	$.each(posts, function(index) {
        		$('.thoughts').html(
        						$('.thoughts').html()+'<div class="posttemp"><div class="posthead"><div class="media"><div class="media-left"><a href="#" ><div class="media-object postPic" style="background-image:url('+posts[index].PostUserPicture+');"></div></a></div><div class="media-body"><h4 class="media-heading"><a class="user" href="http://localhost/mimo/mimo/myStudio?username='+posts[index].PostUser+'">'+posts[index].PostUser+'</a><small> shared a thought!<br /><small>'+posts[index].PostDate+'</small></small></h4></div></div></div><div class="postbody"><div class="postbodycont">'+posts[index].PostBody+'</div></div><div id="likesection"><div class="btn-grp btn-group-justified"><a href="#" id="likeBtn" type="button" class="btn like" data-id="'+posts[index].PostId+'" ><span class="fa fa-heart-o"></span> Like <small><small>('+posts[index].PostLikes+')</small></small></a><a class="commentBtn btn comment" data-did="'+posts[index].PostId+'" data-toggle="modal" data-target="#commentModal"><span class="fa fa-commenting-o"></span> Comment </a></div></div></div>'
        						);
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
        									$.each(comments, function(index) {
	        									$('.commentatorDiv').html(
					        						$('.commentatorDiv').html()+'<div class="media"><div class="media-left"><a href="http://localhost/mimo/mimo/myStudio?username='+comments[index].username+'"><div class="media-object commentPic" style="background-image:url('+comments[index].picture+');"></div></a></div><div class="media-body"><h5 class="media-heading"><a style="font-weight:bold" class="user">'+comments[index].username+'</a><small><small> '+comments[index].posted_at+'</small></small></h5><h6>'+comments[index].comment+'</h6></div></div>'
					        						)
        									});
										},
										error: function(){
											console.log(e)
										}

									});

									$('.postComment').click(function() {
										e.preventDefault();
							            var txt = $("#commentBox").val();
							            $("#commentBox").val('');
							            $.ajax({
							                type:'POST',
							                url: '<?php echo base_url() ?>mimo/comment',
							                data:{
							                    comment:txt,
							                    postid:buttonid
							                },
							                success: function(r){
							                	if(r!=''){
							                    var comment = JSON.parse(r)
							                    console.log(comment)
							                    $( ".commentatorDiv" ).prepend( '<div class="media"><div class="media-left"><a href="http://localhost/mimo/mimo/myStudio?username='+comment[0].username+'"><div class="media-object commentPic" style="background-image:url('+comment[0].picture+');"></div></a></div><div class="media-body"><h5 class="media-heading"><a style="font-weight:bold" class="user">'+comment[0].username+'</a><small><small> '+comment[0].posted_at+'</small></small></h5><h6>'+comment[0].comment+'</h6></div></div>' );}
							                },
							                error: function(xhr, ajaxOptions, thrownError){
							                    console.log(e);
							                }


							            });

							        });//end of postComment click()
								});
					
        	});
        },
        error: function(xhr, ajaxOptions, thrownError){
        	console.log(arguments);
        	alert('error');
        }

	});

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
				console.log(s)
			},
			error: function(e){
				console.log(e)
			}
		});
	});
	
});
</script>
