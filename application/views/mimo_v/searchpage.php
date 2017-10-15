<body style="background-color: #d9d9d9">

	<!--This is below Top Navigation Section -->
<div class="container">
	<!-- Left Nav Section -->
<div class="row" >
		<div id="leftnav" class="col-md-3 col-sm-5" style="margin-left: 15px;margin-right: 15px;">
			<div class="row">
				
				<div class="col-md-12" style="background-color:grey; color: white; padding: 8px;">
					<h3 style="color: #ffb84d"><i class="glyphicon glyphicon-search"></i> &nbsp;Search Result:</h3>
					<hr />
					<h6>You have searched for: </h6>
					<h4 class="text-center"><b>searchkeywordhere</b></h4>
				</div>
			
			</div>
		</div>
	
	<!-- Search -->
	
		<div class="col-md-8 belowtn col-xs-12 col-sm-7" style="margin-left: 10px; margin-top: 25px; margin-right: 10px;">
			
			<!-- Dito lalabas -->
			<div class="row">
				<ul class="nav nav-tabs nav-justified searchtab">
						<!-- COLLECTIONS, ALBUMS, THOUGHTS, and FAVORITES TABS-->
						<li class="active"><a data-toggle="tab" href="#sartist">&nbsp;Artist</a></li>
						<li><a data-toggle="tab" href="#sthought">&nbsp;Thoughts</a></li>
						<li><a data-toggle="tab" href="#saudios">&nbsp;Audios</a></li>
						<li><a data-toggle="tab" href="#svids">&nbsp;Videos</a></li>
				</ul>

					<div class="tab-content">
						<?php $this->load->view('templates/commentModal');?>
						
						<!-- ARTIST -->
							<div id="sartist" class="tab-pane fade in active">
								<div class="row">
									<div class="col-md-1"></div>
									<div class="col-md-10">
										<?php $this->load->view('templates/s_artist');?>
										<?php $this->load->view('templates/s_artist');?>
										<?php $this->load->view('templates/s_artist');?>
									</div>
									<div class="col-md-1"></div>
								</div>
							</div>
   
   
						<!-- AUDIOS-->
							<div id="sthought" class="tab-pane fade" >
								<div class="row">
									<div class="col-md-1"></div>
									<div class="col-md-10">
										<?php $this->load->view('templates/s_thought');?>
										<?php $this->load->view('templates/s_thought');?>
										<?php $this->load->view('templates/s_thought');?>
									</div>
									<div class="col-md-1"></div>
								</div>
							</div>
							
							
							<!-- THOUGHTS-->
							<div id="saudios" class="tab-pane fade">
								<div class="row">
									<div class="col-md-1"></div>
									<div class="col-md-10">
										<?php $this->load->view('templates/s_audio');?>
										<?php $this->load->view('templates/s_audio');?>
										<?php $this->load->view('templates/s_audio');?>
										<?php $this->load->view('templates/s_audio');?>
										<?php $this->load->view('templates/s_audio');?>
										<?php $this->load->view('templates/s_audio');?>
										<?php $this->load->view('templates/s_audio');?>
									</div>
									<div class="col-md-1"></div>
								</div>
							</div>	
							
							<!-- FAVORITES-->
							<div id="svids" class="tab-pane fade">
								<div class="row">
									<div class="col-md-1"></div>
									<div class="col-md-10">
										<?php $this->load->view('templates/s_video');?>
										<?php $this->load->view('templates/s_video');?>
										<?php $this->load->view('templates/s_video');?>
									</div>
									<div class="col-md-1"></div>
								</div>
							</div>
					</div>
					

	</div>
		
			</div>
			<!-- End of dito lalabas -->
		</div>
				
			
	
	
<!-- Third Column Div (Beside Contents)-->
	<div class="col-md-1">
	<br /> <br /> <br />

			
			
		
	<!-- Para sa POST AND AUDIO MODAL-->
	<?php $this->load->view('templates/addpostmodal');?>
	<?php $this->load->view('templates/addaudiomodal');?>
	<?php $this->load->view('templates/addvideomodal');?>
	
		<!--Para naman to dun sa fixed button ng release ng thoughts at audio-->
		<?php $this->load->view('include/releasebuttons');?>
		<?php $this->load->view('templates/commentModal');?>
	</div>
		
</div><!--End of the Whole Row (LeftNav, Contents, Third Column -->



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
        						$('.thoughts').html()+'<div class="posttemp"><div class="posthead"><div class="media"><div class="media-left"><a href="#" ><div class="media-object postPic" style="background-image:url('+posts[index].PostUserPicture+');"></div></a></div><div class="media-body"><h4 class="media-heading"><a class="user" href="http://localhost/mimo/mimo/myStudio?username='+posts[index].PostUser+'">'+posts[index].PostUser+'</a><small> shared a thought!<br /><small>'+posts[index].PostDate+'</small></small></h4></div></div></div><div class="postbody"><div class="postbodycont">'+posts[index].PostBody+'</div></div><div id="likesection"><div class="btn-grp btn-group-justified"><a href="#" id="likeBtn" type="button" class="btn like" data-id="'+posts[index].PostId+'" aria-pressed="false" onclick="handleBtnClick(event)"><span class="fa fa-heart-o"></span> Like <small><small>('+posts[index].PostLikes+')</small></small></a><a class="commentBtn btn comment" data-did="'+posts[index].PostId+'" data-toggle="modal" data-target="#commentModal"><span class="fa fa-commenting-o"></span> Comment </a></div></div></div>'
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
					        						$('.commentatorDiv').html()+'<div class="media"><div class="media-left"><a href="http://localhost/mimo/mimo/myStudio?username='+comments[index].username+'"><div class="media-object commentPic" style="background-image:url('+comments[index].picture+');"></div></a></div><div class="media-body"><h5 class="media-heading"><a href="http://localhost/mimo/mimo/myStudio?username='+comments[index].username+'" style="font-weight:bold" class="user">'+comments[index].username+'</a><small><small> '+comments[index].posted_at+'</small></small></h5><h6>'+comments[index].comment+'</h6></div></div>'
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
							                    $( ".commentatorDiv" ).prepend( '<div class="media"><div class="media-left"><a href="http://localhost/mimo/mimo/myStudio?username='+comment[0].username+'"><div class="media-object commentPic" style="background-image:url('+comment[0].picture+');"></div></a></div><div class="media-body"><h5 class="media-heading"><a href="http://localhost/mimo/mimo/myStudio?username='+comment[0].username+'" style="font-weight:bold" class="user">'+comment[0].username+'</a><small><small> '+comment[0].posted_at+'</small></small></h5><h6>'+comment[0].comment+'</h6></div></div>' );}
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
