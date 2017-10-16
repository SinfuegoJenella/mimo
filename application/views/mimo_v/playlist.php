<body style="background-color: #e1e1e1">
<?php $this->load->view('include/topnav');?>
</br> </br>
<div class="container">
	<div class="margin">
		<h3 class="txt">Global Top 50</h3>
	</div>
			<!-- Table starts (table header)-->
	<div class="tbl">
		<table class="table table-hover ">
			<thead class="no-hover">
				<tr class="p text-center ">
					<th> </th>
					<th >Title</th>
					<th>Artist</th>
					<th class="hidden-xs">Daily Plays</th>
				</tr>
			</thead>
						<!-- list of songs -->
			<tbody>
				<tr class="p color-hover">
					<!-- play button for music-->
					<td><button type="button" class="btn btn-circle "><span class="glyphicon glyphicon-play" aria-hidden="true"> </span> </button></td>
					<td>New Rules</td>
					<td>Dua Lipa</td>
					<td >
						<!-- maging ellipsis for tablet and phone (shows the daily plays)-->
						<button type="button" class="btn visible-xs" style="background: transparent" data-toggle="popover" data-placement="bottom" data-trigger="hover" title="" data-content="Daily Plays" >
						<span class="glyphicon glyphicon-option-vertical" aria-hidden="true"> </span> </button>
						<span class="hidden-xs">1540</span> 
					</td>
	
				</tr>
			
				<tr class="p color-hover">
					<td><button type="button" class="btn btn-circle"><span class="glyphicon glyphicon-play" aria-hidden="true"> </span> </button></td>
					<td>Too Good At Goodbyes</td>
					<td>Sam Smith</td>
					<td>
						<button type="button" class="btn visible-xs" style="background: transparent" data-toggle="popover" data-placement="bottom" data-trigger="hover" title="" data-content="Daily Plays">
						<span class="glyphicon glyphicon-option-vertical " aria-hidden="true"> </span> </button> 
						<span class="hidden-xs">1300</span>
					</td>
	
				</tr>

				<tr class="p color-hover">
					<td><button type="button" class="btn btn-circle"><span class="glyphicon glyphicon-play" aria-hidden="true"> </span> </button></td>
					<td>Havana</td>
					<td>Camila Cabello</td>
					<td>
						<button type="button" class="btn visible-xs" style="background: transparent" data-toggle="popover" data-placement="bottom" data-trigger="hover" title="" data-content="Daily Plays">
						<span class="glyphicon glyphicon-option-vertical " aria-hidden="true"> </span> </button>
						<span class="hidden-xs">1120</span>
					</td>
	
				</tr>

				<tr class="p color-hover">
					<td><button type="button" class="btn btn-circle"><span class="glyphicon glyphicon-play" aria-hidden="true"> </span> </button></td>
					<td>rockstar</td>
					<td>21 Savage</td>
					<td>
						<button type="button" class="btn visible-xs" style="background: transparent" data-toggle="popover" data-placement="bottom" data-trigger="hover" title="" data-content="Daily Plays">
						<span class="glyphicon glyphicon-option-vertical " aria-hidden="true"> </span> </button>
						<span class="hidden-xs">906</span>
					</td>
	
				</tr>

				<tr class="p color-hover">
					<td><button type="button" class="btn btn-circle"><span class="glyphicon glyphicon-play" aria-hidden="true"> </span> </button></td>
					<td>Silence</td>
					<td>Khalid</td>
					<td>
						<button type="button" class="btn visible-xs" style="background: transparent" data-toggle="popover" data-placement="bottom" data-trigger="hover" title="" data-content="Daily Plays">
						<span class="glyphicon glyphicon-option-vertical " aria-hidden="true"> </span> </button>
						<span class="hidden-xs">850</span>
					</td>
	
				</tr>

			</tbody>


		</table>

	</div>
	<!--Thoughts&Audio Modal-->
				<?php $this->load->view('templates/addpostmodal');?>
				<?php $this->load->view('templates/addaudiomodal');?>
</div>

</body>