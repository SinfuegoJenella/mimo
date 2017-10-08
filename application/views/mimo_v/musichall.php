<body style="background-color: #d9d9d9">

	<!--This is below Top Navigation Section -->
<div class="container">
	<!-- Left Nav Section -->
<div class="row">
		<div id="leftnav" class="col-md-3 col-sm-5">
		
			<!-- Left Nav Profile Section -->
			<div class="row" style="margin-left: 10px; margin-right: 10px">
				<!-- Header -->
					<!-- Sa 'background-image: url('') mo ilagay yung mga header at profile pic -->
				<div class="header" style="background-image:url('<?php echo $users[0]['header']; ?>'); width: 100%; height: 170px;
									margin-left: 0px; background-size: cover;">
					<!--DP-->
					<div class="nameBox" style="background: linear-gradient(transparent,rgba(0,0,0,0.2),rgba(0,0,0,0.7)); 
												background-size: cover; margin: 0 0; height: 162px">
						<div class="dpSection media" style="background-image:url('<?php echo $users[0]['picture']; ?>');"></div>
							
						
						<!-- Full name yung sa h4 at username/stagename yung sa h6 -->
						<h4 style="color: white" class="text-center user"><?php echo $users[0]['firstname'].' '.$users[0]['lastname'];?></h4>
						<a href="http://localhost/mimo/mimo/myStudio?username=<?php echo $users[0]['username'];?> " style="color: white" class="text-center user"><h6><?php echo $users[0]['username'];?></h6></a>
						</div>
				</div>
			
			</div>
			
			<!-- End of Left Nav Profile Section -->

			<div class="row" style="margin-left: 10px; margin-right: 10px">
					<div id="listNav" class="col-md-12">
						<div class="btn-group btn-group-justified">
						<a  href="" class="listnav btn btn-group">
						<i class="material-icons">library_music</i>
						<p><small>Collection</small></p>
						</a>
			
						<a  href="" class="listnav btn btn-group">
						<i class="material-icons">album</i>
						<p><small>Albums</small></p>
						</a>
					
						<a  href="" class="listnav btn btn-group">
						<i class="material-icons">favorite</i>
						<p><small>Favorites</small></p>
						</a>
		
					</div>
				</div>
			</div>
			
			
			<!--MP3 Player Section-->
		
			
			<!-- MP3 Player Section-->
			
			
			
			
			
		</div>
		<!--End of Left Nav Section -->
			<!--MP3 Player Section-->
			<!-- MP3 Player Section-->
		
		
	<!-- Content Section -->
	
	<!-- Post Body (Thoughts) -->
	<div class="col-md-6 belowtn col-xs-12 col-sm-7">
		<?php $this->load->view('templates/commentModal');?>
		<div class="postcont thoughts">
			
		<!--Start to place Here the Post/Thought Templates-->

		<!--End of Post Section -->	
		
		<!-- End of Contents Divisions-->
	</div>
	
	
<!-- Third Column Div (Beside Contents)-->
	<div class="col-md-3">
	<br /> <br /> <br />
	
	<!--DONT MIND MUNA TONG AUDIO PLAYER-->
	<!--<div class="row hidden-sm hidden-xs" id="audplayer">
				<div class="col-md-12">
				<div class="wrapper">
					<div class="music music-cover">
						<img src="http://localhost/mimo/assets/img/bp.jpg" alt="" class="cover-img" />
					</div>
					
					<div class="music album-controls">
						<img src="http://localhost/mimo/assets/img/bp.jpg" alt="" class="album-img" />
							<div class="album-info">
								<span class="song-title">Track Title<span>
								<span class="album-artist">Singer</span>
								<span class="album-artist">Album: Into The Pink</span>
								<span class="song-utility">
									<i class="fa fa-home" aria-hidden="true"></i>
									<i class="fa fa-random" aria-hidden="true"></i>
									<i class="fa fa-retweet" aria-hidden="true"></i>
									<i class="fa fa-clock-o" aria-hidden="true"></i>
								</span>
							</div>
					</div>

					<div class="music music-controls">
						<span class="seek-bar">
							<span class="knot"></span>
						</span>
						<span class="song-buffer"></span>
						<span class="song-current-time">00:00</span><span class="play">
							<i class="fa fa-play" aria-hidden="false"></i>
							<span class="song-duration">00:00</span>
						</span>
					</div>
				
				</div>
			</div>
			</div>
	
			<audio controls id="music-player" preload="auto" >
				<source src="http://localhost/mimo/assets/audios/sample.mp3" type="audio/mpeg">
					Your browser does not support the audio element.
			</audio>
			
			
		
	<!-- Para sa POST AND AUDIO MODAL-->
	<?php $this->load->view('templates/addpostmodal');?>
	<?php $this->load->view('templates/addaudiomodal');?>
	
		<!--Para naman to dun sa fixed button ng release ng thoughts at audio-->
		<?php $this->load->view('include/releasebuttons');?>
			<?php $this->load->view('templates/commentModal');?>
	</div>
		
</div><!--End of the Whole Row (LeftNav, Contents, Third Column -->


<script type="text/javascript">
	$('#thoughts').click(function() {
		var txt = $("#textarea").val();
		$.ajax({
			type:'POST',
			url: '<?php echo base_url() ?>mimo/thoughts',
			data:{
				thoughts:txt
			},
			success: function(r){
				console.log(r);
				alert('Posted');
			},
			error: function(xhr, ajaxOptions, thrownError){
				console.log(e);
			}


		});
	});
	
</script>
<script type="text/javascript">
$(document).ready(function(){
	$('.postcont').html("")
	$.ajax({
		type: 'POST',
        url: '<?php echo base_url() ?>mimo/hallposts',
        data:{
        },
        success: function(s){
        	var posts = JSON.parse(s)
        	console.log(posts);
        	$.each(posts, function(index) {
        		if(posts[index].PostType==1){
        		$('.thoughts').html(
        						$('.thoughts').html()+'<div class="posttemp"><div class="posthead"><div class="media"><div class="media-left"><a href="#" ><div class="media-object postPic" style="background-image:url('+posts[index].PostUserPicture+');"></div></a></div><div class="media-body"><h4 class="media-heading"><a class="user" href="http://localhost/mimo/mimo/myStudio?username='+posts[index].PostUser+'">'+posts[index].PostUser+'</a><small> shared a thought!<br /><small>'+posts[index].PostDate+'</small></small></h4></div></div></div><div class="postbody"><div class="postbodycont">'+posts[index].PostBody+'</div></div><div id="likesection"><div class="btn-grp btn-group-justified"><a href="#" id="likeBtn" type="button" class="btn like" data-id="'+posts[index].PostId+'" aria-pressed="false" onclick="handleBtnClick(event)"><span class="fa fa-heart-o"></span> Like <small><small>('+posts[index].PostLikes+')</small></small></a><a class="commentBtn btn comment" data-toggle="modal" data-target="#commentModal"><span class="fa fa-commenting-o"></span> Comment </a></div></div></div>'
        						);}
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

					

					
        	});
        },
        error: function(xhr, ajaxOptions, thrownError){
        	console.log(e);
        }
    });
});
</script>
<script type="text/javascript">
    if (window.location.hash && window.location.hash == '#_=_') {
        if (window.history && history.pushState) {
            window.history.pushState("", document.title, window.location.pathname);
        } else {
            // Prevent scrolling by storing the page's current scroll offset
            var scroll = {
                top: document.body.scrollTop,
                left: document.body.scrollLeft
            };
            window.location.hash = '';
            // Restore the scroll offset, should be flicker free
            document.body.scrollTop = scroll.top;
            document.body.scrollLeft = scroll.left;
        }
    }
</script>
</body>
