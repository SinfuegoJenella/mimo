<div class="modal fade" id="addAudio" tabindex="-1" role="dialog" 
		aria-labelledby="audioModal" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header" style="background-color: #f9f9f9">
					<button type="button" class="close" 
						data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
					</button>
					<h4 class="modal-title text-center" id="myModalLabel">
						<span><i class="material-icons">mic</i></span>Release Audio
					</h4>
				</div>
            
				<!-- Modal Body -->
				<div class="modal-body" style="background-color: #f9f9f9">
					<form role="form">
					<div class="row">
						<div class="col-md-1">
						</div>
						<div class="col-md-10">
						<h5 ><b>*Upload Audio </b><small>(allowed audio format: .mp3, .ogg, .wav)</small></h5>
							<div class="input-group">
								<span class="input-group-btn">
									<span class="btn btn-default btn-file">
									<span class="glyphicon glyphicon-open"></span>
									<input type="file" id="audioUpload" accept="audio/*" />
									</span>
								</span>
								<input type="text" class="form-control" readonly />
							</div>
									
							<div style="margin: 10px auto">
								<h5><b>*Preview: </b></h5>
								<audio width="100%" id="audPreview" controls="" controlsList="noDownload"></audio>
							</div>
						
						</div>
						<div class="col-md-1">
						</div>
					</div>
					

						<div class="row">
							<div class="col-md-1">
							</div>
							
							<div class="col-md-7">
								<div class="form-group">
								<h5 class="text-center"><b>Audio Details</b></h5>
									<p>Title:</p> 
									<input type="text" class="form-control" value="" placeholder=""/>
									<p>Genre:</p> 
									<select class="form-control">
										<option value="alternative">Alternative</option>
										<option value="blues">Blues</option>
										</select>
								</div>
							</div>	
							
							<div class="col-md-3">
							<div class="form-group">
								<h5 class="text-center"><b>Audio Art</b></h5>
									<br />
										<div class="input-group">
											<span class="input-group-btn">
												<span class="btn btn-default btn-file">
													<span class="glyphicon glyphicon-picture"></span> Add
													<input type="file" id="imgHeader" accept="image/*">
												</span>
											</span>
											<input type="text" class="form-control" readonly />
										</div>
									<div>
									<img id='img-Head' style="margin-top: 10px; " />
									</div>
								</div>
							</div>
							
							<div class="col-md-1">
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-1">
							</div>
							
							<div class="col-md-10">
								<p class="">Description:</p>
									<textarea id="audDescInput"class="form-control" name="audDesc" rows="3" placeholder="Write the audio description here."></textarea>
							</div>
							
							<div class="col-md-1">
							</div>
							

						</div>
				</div>
					
							
						<div class="modal-footer">
						
							<button type="button" class="btn btn-default" data-dismiss="modal">
								Cancel
							</button>
							<button type="submit" class="btn btn-warning">
								Release
							</button>
						</div>
			</div>
					
			</form>
	</div>
</div>

<script>
audioUpload.onchange = function(e){
  var audPreview = document.getElementById('audPreview');
  audPreview.src = URL.createObjectURL(this.files[0]);
  audPreview.onend = function(e) {
    URL.revokeObjectURL(this.src);
  }
}
 </script>
		<!--End of Add Audio Modal-->