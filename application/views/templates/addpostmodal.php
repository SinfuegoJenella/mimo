<div class="modal fade" id="addThought" tabindex="-1" role="dialog" 
		aria-labelledby="thoughtModal" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header" style="background-color: #f9f9f9">
					<button type="button" class="close" 
						data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">
						<span><i class="material-icons">create</i></span>Share a Thought!
					</h4>
				</div>
            
				<!-- Modal Body -->
				<div class="modal-body" style="background-color: #f9f9f9">
					<form role="form">
					
						<div class="media">
							<div class="media-left">
								<a href="#" >
								<div class="media-object postPic" style="background-image:url('<?php echo $users[0]['picture']; ?>');"></div>
								</a>
							</div>
							<div class="media-body">
								<textarea id="textarea"class="form-control addthought" name="thought" rows="5" placeholder="Write your thought here..."></textarea>
							</div>	
							
							<div class="modal-footer">
						
							<button type="button" class="btn btn-default"
								data-dismiss="modal">
								Cancel
							</button>
							<button type="button" class="btn btn-warning" id="thoughts">
								Share now!
							</button>
							</div>
						</div>
					
					</form>
					</div>
				</div>
			</div>
		</div>
		<!--End of Add Thought Modal-->