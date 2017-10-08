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
						<h4 class="media-heading"><a class="user">BTS</a><small> shared a thought!<br /><small> 12:20 AM 2/3/2017</small></small></h4>
					</div>	
				</div>
			</div>
			
		<!--Post Body -->
			<div class="postbody">
				<div class="postbodycont">
					<p>What a tiring month! :/</p>
					<p>What a tiring month! :/</p>
					<p>What a tiring month! :/</p>
				</div>
				
			</div>
			<!---->
			
			<div id="likesection">
				<div class="btn-grp btn-group-justified">
				
					<a href="#" id="likeBtn" type="button" class="btn like" aria-pressed="false" onclick="handleBtnClick(event)">
						<span class="fa fa-heart-o">
						</span> Like <small>
						<!-- Number of Likes -->
						<small>(12,367)</small></small></a>
						
					<a class="commentBtn btn comment" data-toggle="modal" data-target="#commentModal">
						<span class="fa fa-commenting-o"></span> Comment </a>
						<!-- Number of Comments -->
	
					</div>
					
			</div>
			
			<?php $this->load->view('templates/commentModal');?>
			
			<!---->
	</div>