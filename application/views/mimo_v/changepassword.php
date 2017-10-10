<body style="background-color: #333333">
	<!-- Top Nav Bar -->
  <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand navbar-link" href="<?php echo base_url('');?>">
				<?php $this->load->view('include/mimologo')?>
				<strong style="margin-top: -5px;">MimO</strong> </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            
        </div>
    </nav>
	
	<!--This is below Top Navigation Section -->
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>

	<div class="container" style="color: white; padding-top:20px; border: 2px solid orange; width: 400px; height:400px;">
<div class="row">
<div class="col-sm-12">
<h2 class="text-center">Change Password</h2>
</div>
</div>
<div class="row">
<div class="col-sm-6 col-sm-offset-3"><br/>
<p >Type New Password</p>
<form method="post" id="passwordForm">
<input type="password" class="input-lg form-control" name="password1" id="password1" placeholder="New Password" autocomplete="off">
<p >Re-Type New Password</p>
<input type="password" class="input-lg form-control" name="password2" id="password2" placeholder="Repeat Password" autocomplete="off"><br/>
<input type="checkbox" name="sign" value="out">Sign me out everywhere<br>
<a href="<?php echo base_url('mimo/continue');?>" class="btn btn-info"  role="button" style="width:150px;">Save</a>
<br/><br/>
</form>
</div><!--/col-sm-6-->
</div><!--/row-->
</div>		
	
	
	
</body>
