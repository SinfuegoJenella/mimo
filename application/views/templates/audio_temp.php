	<!-- Post Header -->
	<div class="posttemp">
			<div class="posthead">
				<div class="media">
					<div class="media-left">
						<a href="#" >
							<div class="media-object postPic" style="background-image:url('http://localhost/mimo/assets/img/bts.jpg');"></div>
						</a>
					</div>

					<div class="media-body">
						<h4 class="media-heading"><a class="user">BLACKPINK</a><small> released an audio!<br /><small> 12:20 AM 2/3/2017</small></small></h4>
					</div>	
				</div>
			</div>
			
		<!--Post Body -->
			<div class="postbodyaudio">
					<div class="media">
						<div class="media-body ">
							<h4 style="color: #1a1a1a" class="media-heading"><i class="fa fa-microphone"></i><b style="color: #ff9926"> Song Title:</b> Last Chance</h4>
							<h6 style="color: #1a1a1a; padding: 0 2.2em"><b> Artist:</b> <a style="cursor: pointer">nightingale07</a></h6>
							<h6 style="color: #1a1a1a; padding: 0 2.2em"><b> Album:</b> Into the Pink</h6>
							<h6 style="color: #1a1a1a; padding: 0 2.2em"><b> Genre:</b> Ballad</h6>
							<h6 style="color: #1a1a1a; padding: 0 2.2em"><b> Track No. :</b> 4</h6>
							<h6 style="color: #1a1a1a; padding: 0 2.2em"><b> Year:</b> 2017</h6>
						</div>	
						
						<div class="media-right">
							<a href="#" >
								<div class="media-object albumCover" style="background-image:url('http://localhost/mimo/assets/img/bp.jpg');"></div>
							</a>
						</div>

					</div>
					
					<div class="row" >
						<div class="col-md-12">
						<audio controls controlsList="nodownload" width="100%">
								<source src="http://localhost/mimo/assets/audios/sample.mp3" type="audio/mpeg">
								Your browser does not support the audio element.
								</audio>
						</div>
					</div>
					
					<div id="likesectionaud">
						<div class="btn-grp btn-group-justified">
				
					
						<a href="#" id="likeBtn" type="button" class="btn like" aria-pressed="false" onclick="handleBtnClick(event)">
						<span class="fa fa-heart-o">
						</span> <small><small>(127,343)</small></small></a>
						
						
						
						<a id="commentBtn" class="btn comment" data-toggle="modal" data-target="#commentModal">
						<span class="fa fa-commenting-o"></span>
						<small><small>(873)</small></small></a>
	
						<a href="#" id="shareBtn" class="btn comment"><span class="fa fa-plus-square-o"></span> 
						Add to Collection
						 </a>
						
						<a href="#" id="shareBtn" class="btn comment"><span class="fa fa-lightbulb-o"></span> 
						Details </a>
						</div>
					</div>	
			</div>
			<?php $this->load->view('templates/commentModal');?>
		</div>
			