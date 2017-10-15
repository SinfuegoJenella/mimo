<body style="background: linear-gradient(to bottom right, #bdc3c7 1%, #2c3e50 111%);
			background-attachment: fixed">
	<!-- Top Nav Bar -->

	<!--This is below Top Navigation Section -->
<div class="container" style="padding-top:70px;">
    
    <div class="row">
        <div class="col-lg-12">
            <h3>Audio Collection </h3>
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
                        <td>New Rules (cover)</td>
                        <td>IzabelaLuzFaye</td>
                    </tr>
					<tr>
                        <td><i class="fa fa-play-circle-o" style="font-size:24px"></i></td>
                        <td>How Far I'll Go (cover)</td>
                        <td>IzabelaLuzFaye</td>
                    </tr>
					<tr>
                        <td><i class="fa fa-play-circle-o" style="font-size:24px"></i></td>
                        <td>Youth (cover)</td>
                        <td>IzabelaLuzFaye</td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-play-circle-o" style="font-size:24px"></i></td>
                        <td>Despacito (cover)</td>
                        <td>IzabelaLuzFaye</td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-play-circle-o" style="font-size:24px"></i></td>
                        <td>Hair (cover)</td>
                        <td>IzabelaLuzFaye</td>
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