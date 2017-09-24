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
					<h4 class="modal-title" id="myModalLabel">
						<span><i class="material-icons">mic</i></span>Release Audio
					</h4>
				</div>
            
				<!-- Modal Body -->
				<div class="modal-body" style="background-color: #f9f9f9">
					<form role="form">
						<h5>Choose an audio to release: <small>(allowed audio format: .mp3, .ogg, .wav)</small></h5>
							<div class="input-group">
								<span class="input-group-btn">
									<span class="btn btn-default btn-file">
									<span class="glyphicon glyphicon-open"></span>
									<input type="file" id="newAudio" />
									</span>
								</span>
								<input type="text" class="form-control" readonly />
							</div>
						<hr />
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								<tr><label>Audio Details</label></tr>
									<table class="table table-striped">
										<tr>
											<td>Title:</td>
											<td><input type="text" class="form-control" value="Moonlight Drawn" /></td>
										</tr>
											<td><p>Origin:</p></td>
											<td>
												<label class="radio-inline">
													<input type="radio" name="optradio" value="own">Own Music
												</label>
												<label class="radio-inline">
													<input type="radio" name="optradio" value="cover">Cover
												</label>
											</td>
										</tr>
										<tr>
											<td><p>Genre:</p></td>
											<td><select class="form-control">
												<option value="alternative">Alternative</option>
												<option value="blues">Blues</option>
												</select></td>
										</tr>
									</table>
								</div>
							</div>
							
							<div class="col-md-6">
								<div class="form-group">
									<label>Audio Art</label>
									<br />
										<div class="input-group">
											<span class="input-group-btn">
												<span class="btn btn-default btn-file">
													Choose… <input type="file" id="imgHeader">
												</span>
											</span>
											<input type="text" class="form-control" readonly />
										</div>
									<img id='img-Head'/>
								</div>
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
		<!--End of Add Thought Modal-->