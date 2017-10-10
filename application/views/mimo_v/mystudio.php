<body style="background-color: #d6d6d6">
<div class="container" style="margin-top: 55px; ">
	<div class="row" style="padding: 20px; background: linear-gradient(to bottom right, #bdc3c7 1%, #2c3e50 111%);">
		<div class="col-md-6">
			<div class="media">
				<div class="media-left">
					<a href="#" >
					
						<!--Profile Picture Section -->
						<div class="media-object" 
								style="width: 130px; height: 130px; 
								background-image:url('<?php if ($user[0]['picture'] == NULL){ echo 'http://localhost/mimo/assets/img/noimage.jpg'; }
																else{ echo $user[0]['picture'];} ?>'); border-radius: 50%; 
							background-size: cover; margin: 10px auto; ">
						</div>
					</a>
				</div>

				<!--Profile Info: NAME, STAGENAME, GENRE, CAREER, FOLLOWERS, ALBUM -->
				<div class="media-body">
					<h2 class="profile"> <?php echo $user[0]['firstname'].' '.$user[0]['lastname'];?> <small style="color: #cccccc" >(<?php echo $user[0]['username'];?>)</small></h2>
						<h6 style="padding: 0 2.2em" class="profile"><i class="material-icons">music_note</i><b style="color: #ffc266">Genres:</b> Ballad, Asian Pop, Pop Rock</h6>
							<h6 style="padding: 0 2.2em" class="profile"><i class="material-icons">business_center</i><b style="color: #ffc266"> Career:</b> Singer , Song Writer, Sound Designer</h6>
							<h6 style="padding: 0 2.2em" class=" profile"><i class="material-icons">group</i><b style="color: #ffc266"> Followers:</b> 232,651 People</h6>
							<h6 style="padding: 0 2.2em" class=" profile"><i class="material-icons">album</i><b style="color:#ffc266 "> Album:</b> 56 Released Albums (146 audio)</h6>
				</div>	
			</div>
		</div>	
		
		<!--Profile Info: SHOUTOUT(Parang Bio) -->
		<div class="col-md-6" style="padding-top: 40px; ">
			<h6 class="user profile"><i class="fa fa-bullhorn"></i><b style="color: #ffc266"> Shoutout:</b></h6>
			<div class="row" style="background-color: rgba(255,255,255,0.2); padding: 10px; margin-top: 20px;height: 50px">
				<!--Put here the bio -->
				<p class="text-center profile" style="padding: 0 2.2em"><i>"You've got to hold your head up high!"</i></p>
			</div>
			
			<!-- FOLLOW-->
			<?php if($user[0]['id']!=$users[0]['id']){ ?>
			<div class="row follow" style="margin-top: 30px;">
					<a id="follow" class="btn follow pull-right"><i class="fa fa-bell-o"></i><span></span></a>
			</div>
			<?php };?>
		</div>
	</div>
	
	
	<div class="row">
	<ul class="nav nav-tabs nav-justified">
						<!-- COLLECTIONS, ALBUMS, THOUGHTS, and FAVORITES TABS-->
						<li class="active"><a data-toggle="tab" href="#collections"><i class="material-icons">library_music</i>&nbsp;Collections</a></li>
						<li><a data-toggle="tab" href="#albums" ><span><i class="material-icons">album</i></span>&nbsp;Albums</a></li>
						<li><a data-toggle="tab" href="#thought" ><span><i class="material-icons">chat_bubble</i></span>&nbsp;Thoughts</a></li>
						<li><a data-toggle="tab" href="#fav" ><i class="material-icons">favorite</i></span>&nbsp;Favorites</a></li>
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
							<div id="albums" class="tab-pane fade" >
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
							<div id="fav" class="tab-pane fade">
							<div class="row">
								<div class="col-md-3"></div>
									
								<div class="col-md-6">	
									<!-- PUT HERE THE FAVORITES-->
									<?php $this->load->view('templates/albumbox');?>
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
</div>
	<?php $this->load->view('include/releasebuttons');?>
	<?php $this->load->view('templates/addpostmodal');?>
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
        						$('.thoughts').html()+'<div class="posttemp"><div class="posthead"><div class="media"><div class="media-left"><a href="#" ><div class="media-object postPic" style="background-image:url('+posts[index].PostUserPicture+');"></div></a></div><div class="media-body"><h4 class="media-heading"><a class="user" href="http://localhost/mimo/mimo/myStudio?username='+posts[index].PostUser+'">'+posts[index].PostUser+'</a><small> shared a thought!<br /><small>'+posts[index].PostDate+'</small></small></h4></div></div></div><div class="postbody"><div class="postbodycont">'+posts[index].PostBody+'</div></div><div id="likesection"><div class="btn-grp btn-group-justified"><a href="#" id="likeBtn" type="button" class="btn like" data-id="'+posts[index].PostId+'" aria-pressed="false" onclick="handleBtnClick(event)"><span class="fa fa-heart-o"></span> Like <small><small>('+posts[index].PostLikes+')</small></small></a><a class="commentBtn btn comment" data-did="'+posts[index].PostId+'" data-toggle="modal" data-target="#commentModal"><span class="fa fa-commenting-o"></span> Comment </a></div></div></div>'
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
				//Pag di nakatapat yung mouse sa following/unfollow button:
				 $("#follow").bind("mouseout",function(){
					 
					 //Yung text sa button, magiging following
					$("#follow").children("span").text(" Following");
					
					//Idadagdag yung check na icon, tapos
					//tatanggalin yung icon ng follow button (yung bell)
					$("#follow").children("i").addClass("fa-check-circle");
					$("#follow").children("i").removeClass("fa-bell-o");
				}); 

				
				//Diba nakafollow na? Kapag pag NAKATAPAT yung mouse don: 
				$("#follow").bind("mouseover",function(){
					
					//Yung kaninang text na FOLLOWING, papalitan ng UNFOLLOW
					$("#follow").children("span").text(" UnFollow");
					
					//Tatanggalin yung icon ng FOLLOWING na check
					$("#follow").children("i").removeClass("fa-check-circle");
					
					//Tapos ipapalit yung icon ng UNFOLLOW na eks
					$("#follow").children("i").addClass("fa-times-circle");
				});

			}else{
				$("a.follow").bind("click",function(){
					//Pag pinindot mo yung FOLLOW BUTTON, 
						//Magiging "UNFOLLOW" yung text
			        $('#follow').children("span").text(" UnFollow");
					
					//Tatanggalin nya yung class na follow(blue)
			        $('#follow').removeClass("follow");
					
					//bali dito, ia-add yung class na unfollow, magiging 
						//RED na yung button
			        $('#follow').addClass("unfollow");
					
					//di ko alam to HAHA
			        $('#follow').unbind();
					
					//basta sama mo to
			        initiateFollow();
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
