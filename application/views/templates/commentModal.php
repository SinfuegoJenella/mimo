<div class="modal fade" id="commentModal" tabindex="-1" role="dialog" 
		aria-labelledby="commentModalModal" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			
			<!-- Modal Header -->
			<div class="modal-header">
					<button type="button" class="close" 
						data-dismiss="modal">
                       <span aria-hidden="true"><i class="material-icons">cancel</i></span>
                       <span class="sr-only">Close</span>
					</button>
					<h4 class="">
						<span></span> Comments
						<small> on nightingale07's post</small>
					</h4>
			</div>
            
			<!-- Modal Body -->
			<div class="modal-body">
			
			<!--COMMENTATORS SECTION-->
			<div class="commentatorDiv">
			
				<?php $this->load->view('templates/commentbox'); ?>
				<?php $this->load->view('templates/commentbox'); ?>
				<?php $this->load->view('templates/commentbox'); ?>
				<?php $this->load->view('templates/commentbox'); ?>
				<?php $this->load->view('templates/commentbox'); ?>
				<?php $this->load->view('templates/commentbox'); ?>
				<?php $this->load->view('templates/commentbox'); ?>
				<?php $this->load->view('templates/commentbox'); ?>
				<?php $this->load->view('templates/commentbox'); ?>
				<?php $this->load->view('templates/commentbox'); ?>
			
			</div>
			
			<!--COMMENTING SECTION-->
			<div class="commentDiv">
				<div class="media">
					<div class="media-left">
						<a href="#">
							<div class="media-object commentPic" style="background-image:url('http://localhost/mimo/assets/img/sam.jpg');"></div>
						</a>
					</div>

					<div class="media-body">
						<form>
							<textarea id="commentBox" class="form-control" name="comment" placeholder="What yah say?..."></textarea>
							<button type="submit" class="btn postComment pull-right"><i class="fa fa-comment-o"></i> Comment
										</button>
						</form>
					</div>	
				</div>
			</div>
				<!---->
			</div>
		</div>
	</div>
</div>
		<!--End of Add Thought Modal-->