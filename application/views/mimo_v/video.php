<body style="background: linear-gradient(to bottom right, #bdc3c7 1%, #2c3e50 111%);
			background-attachment: fixed">
	<!-- Top Nav Bar -->

	<!--This is below Top Navigation Section -->
<div class="container" style="padding-top:70px;">
    
    <div class="row">
        <div class="col-lg-12">
            <h3>Videos Collection </h3>
        </div>
    </div>
    
    <div class="row" style="margin-left: 200px;">
        <div class="col-lg-8">
            <table class="table" id="table">
                <thead>
                    <tr>
                        <th> </th>
                        <th>Music</th>
                        <th>Artist</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><i class="fa fa-play-circle-o" style="font-size:24px"></i></td>
                        <td><div class="col-md-12">
							<video src="http://localhost/mimo/assets/videos/Serendipity.mp4" style="width:100%; height: 200px" controls controlsList="nodownload">
							</video>
				</div></td>
                        <td>Name of the artist</td>
                    </tr>
					<tr>
                        <td><i class="fa fa-play-circle-o" style="font-size:24px"></i></td>
                        <td><div class="col-md-12">
						<video src="http://localhost/mimo/assets/videos/Serendipity.mp4" style="width:100%; height: 200px" controls controlsList="nodownload">
						</video>
						</div></td>
                        <td>Dua Lipa</td>
                    </tr>
					<tr>
                        <td><i class="fa fa-play-circle-o" style="font-size:24px"></i></td>
                        <td><div class="col-md-12">
						<video src="http://localhost/mimo/assets/videos/Serendipity.mp4" style="width:100%; height: 200px" controls controlsList="nodownload">
						</video>
						</div></td>
                        <td>Dua Lipa</td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-play-circle-o" style="font-size:24px"></i></td>
                        <td><div class="col-md-12">
						<video src="http://localhost/mimo/assets/videos/Serendipity.mp4" style="width:100%; height: 200px" controls controlsList="nodownload">
						</video>
						</div></td>
                        <td>Justin Bieber</td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-play-circle-o" style="font-size:24px"></i></td>
                        <td><div class="col-md-12">
						<video src="http://localhost/mimo/assets/videos/Serendipity.mp4" style="width:100%; height: 200px" controls controlsList="nodownload">
						</video>
						</div></td>
                        <td>Little Mix</td>
                    </tr>
                </tbody>
            </table>
            <hr>
        </div>
    </div>
	<!--end of second row-->
	<!--Thoughts&Audio Modal-->
	<?php $this->load->view('include/releasebuttons');?>
	<?php $this->load->view('templates/addpostmodal');?>
	<?php $this->load->view('templates/addaudiomodal');?>
	<?php $this->load->view('templates/addvideomodal');?>
</div>	
	</body>