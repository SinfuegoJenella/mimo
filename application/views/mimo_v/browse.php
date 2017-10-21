<body style="background-color: #d9d9d9">	<!-- Top Nav Bar -->
	<?php $this->load->view('include/log-outnav');?>
	<br>
	<div class="container" style="position:absolute; padding: 20px; padding-top: 0; width:100%" >
		<div class="row belowtn" style="margin-right: 10px; ">
			<div class="col-md-3">
				<div class="row" style="margin-left: 15px; margin-right:15px">
					<div class="col-md-12" style="background-color: #AFADAC; color: white; padding: 10px; margin-left: 10px; margin-right:15px">
						<h4 class="text-center" style="color: white"><?php $this->load->view('include/mimologo')?> Top 10 Most Followed Artist</h4>
					</div>
					<div class="row ">
					<!--TOP LIST-->
						<div class="col-md-12" style="margin-left: 10px; padding-top: 20px;">
							<?php $this->load->view('templates/toplist');?>
						</div>
					<!--END OF TOP LIST-->
					</div>
				</div>
			</div>
			<div class="col-md-9">
				<ul class="nav nav-tabs nav-justified searchtab">
					<!-- COLLECTIONS, ALBUMS, THOUGHTS, and FAVORITES TABS-->
					<li class="active"><a data-toggle="tab" href="#sartist">&nbsp;Discover Artist</a></li>
					<li><a data-toggle="tab" href="#sthought">&nbsp;Random Thoughts</a></li>
					<li><a data-toggle="tab" href="#saudios">&nbsp;Top Audios</a></li>
					<li><a data-toggle="tab" href="#svids">&nbsp;Top Videos</a></li>
					<li><a data-toggle="tab" href="#sgenre">&nbsp;Genres</a></li>
				</ul>
				<div class="tab-content" style="background-color: rgba(255,255,255,0.9); height: 100%;">
					<?php $this->load->view('templates/commentModal');?>
					<!-- ARTIST -->
						<div id="sartist" class="tab-pane fade in active">
							<div class="row">
								<div class="col-md-1"></div>
									<div class="col-md-10 artist">
										<h2>New Artist</h2>
										<div class="col-md-12" style="margin-left: 10px">
											<?php $this->load->view('templates/s_artist');?>
										</div>
									</div>
							</div>
						</div>
   
   
						<!-- AUDIOS-->
						<div id="sthought" class="tab-pane fade" >
							<div class="row">
								<div class="col-md-1"></div>
									<div class="col-md-10 thoughts">
										<h2>Thoughts</h2>
										<div class="col-md-12" style="margin-left: 10px">
											<?php $this->load->view('templates/s_thought');?>
										</div>
									</div>
									
							</div>
						</div>
							
							
							<!-- THOUGHTS-->
						<div id="saudios" class="tab-pane fade">
							<div class="row">
								<div class="col-md-1"></div>
									<div class="col-md-10 audios">
										<h2>Top 10 Audios</h2>
										<div class="col-md-12" style="margin-left: 10px">
											<?php $this->load->view('templates/s_audio');?>
										</div>
									</div>
									<div class="col-md-1"></div>
								</div>
							</div>	
							
							<!-- FAVORITES-->
							<div id="svids" class="tab-pane fade">
								<div class="row">
									<div class="col-md-1"></div>
									<div class="col-md-10 videos">
										<h2>Top 10 Videos</h2>
										<?php $this->load->view('templates/s_video');?>
									</div>
									<div class="col-md-1"></div>
								</div>
							</div>
							
							<!-- FAVORITES-->
							<div id="sgenre" class="tab-pane fade">
								<div class="row">
									<div class="col-md-1"></div>
										<div class="col-md-10 audios">
											<h2>Genres</h2>
											<div class="col-md-12" style="margin-left: 10px">
												<?php $this->load->view('templates/s_genre');?>
											</div>
										</div>
								</div>
							</div>	
				</div>
			</div>	
		</div>
	</div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
<!--	
<div class="container-fluid">
	<div class="row">
	
		<div class="col-md-8" style="background-color: #e1e1e1">
			
		</div>
		
		
		<div class="col-md-4">
			<div id="myCarousel" class="carousel slide" data-ride="carousel" style="float:right">
				<!-- Indicators 
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>

				<!-- Wrapper for slides 
			<div class="carousel-inner">
				<div class="item active">
					<img src="http://localhost/mimo/assets/img/ilovemusic1.jpg" alt="Los Angeles" style="width:100%;height: 250px">
						<div class="carousel-caption">
							<h4>Share your Talent!</h3>
							<p>Let others know your amazing musical talent through audios and video.</p>
						</div>
				</div>

				<div class="item">
					<img src="http://localhost/mimo/assets/img/mp3.jpg" alt="Chicago" style="width:100%; height: 180px">
					<div class="carousel-caption">
						<h4>Sore High!</h3>
						<p>Gain followers and be on the Top 10 Most Followed Artist.</p>
					</div>
				</div>
    
				<div class="item">
					<img src="http://localhost/mimo/assets/img/singer.jpg" alt="New York" style="width:100%; height: 180px">
					<div class="carousel-caption">
						<h4>Discover or be discovered!</h3>
						<p>Show the world what youu got and let others discover you amazing talent.</p>
					</div>
				</div>
			</div>

			<!-- Left and right controls
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only">Next</span>
			</a>
			</div>
			
			
			<div class="row">
				<h4>Top 10 Most Followed Artists</h4>
			</div>
		</div>
		
	</div>
</div>-->
<!--
<div class="container belowtn" style="margin-top: 10px" >

	<div class="row" class="" style="background-color:rgba(255,255,255,0.9)">
		<div class="vtab">
			<button class="tablinks" onclick="openTab(event, 'Audios')" id="defaultOpen">Audios</button>
			<button class="tablinks" onclick="openTab(event, 'Artists')">Artist</button>
			<button class="tablinks" onclick="openTab(event, 'Videos')">Videos</button>
		</div>

		<div id="Audios" class="vtabcontent">
			<h3>Audios</h3>
			<?php //$this->load->view('templates/s_audio')?>
				<div class="audCard" style="width:100px;float:left">
				<img src="http://localhost/mimo/assets/img/bp.jpg" width="100px" height="100px">
				</div>
		</div>

		<div id="Artists" class="vtabcontent">
			<h3>Artist</h3>
				<p>Paris is the capital of France.</p> 
		</div>

		<div id="Videos" class="vtabcontent">
			<h3>Videos</h3>
				<p>Tokyo is the capital of Japan.</p>
				<p>Tokyo is the capital of Japan.</p>
				<p>Tokyo is the capital of Japan.</p>
				<p>Tokyo is the capital of Japan.</p>
				<p>Tokyo is the capital of Japan.</p>
				<p>Tokyo is the capital of Japan.</p>
				<p>Tokyo is the capital of Japan.</p>
				<p>Tokyo is the capital of Japan.</p>
				<p>Tokyo is the capital of Japan.</p>
				<p>Tokyo is the capital of Japan.</p>
				<p>Tokyo is the capital of Japan.</p>
		</div>
	</div>
</div>
-->
</body>
<script>
function openTab(evt, tabName) {
    var i, vtabcontent, tablinks;
    vtabcontent = document.getElementsByClassName("vtabcontent");
    for (i = 0; i < vtabcontent.length; i++) {
        vtabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
