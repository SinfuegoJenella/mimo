<body id="body">

<!-- count particles -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand navbar-link" href="#">
                <!--Logo-->
                <?php $this->load->view('include/mimologo')?>
                <!---->
                <strong>MimO</strong> </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
             
        </div>
    </nav>
    <!-- Sign up Form -->
    <div class="container">
        <div id="login-box">
            <div class="row">
                <div class="col-md-12">
                    <p><i class="material-icons">public</i> Change Password</p>
                    <form class="form" role="form" method="post" action="" accept-charset="UTF-8" id="login-nav">
                    <div id="log"></div>
                        <div class="form-group">
                        <label class="sr-only" for="password" >Password</label>
                        <input type="password" class="form-control signupForm" id="password" placeholder="New Password" name="password" required>
                        </div>
                    <div class="form-group">
                        <label class="sr-only" for="rpassword">Retype Password</label>
                        <input type="password" class="form-control signupForm" id="rpassword" placeholder="Re-type Password" name="rpassword" required>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" id="cbox" name="cbox" />
                        <label for="cbox">Sign me out in all devices</label>
                        
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-custom btn-block" name="signin" id="signin">Continue</button>
                    </div>
                    </form>
						
                </div>
            </div>
        </div>
    </div>





<!--background-->
<div id="particles-js"></div>
<!-- scripts -->
<script src="http://localhost/mimo/assets/js/particles.js"></script>
<script src="http://localhost/mimo/assets/js/app.js"></script>
<!-- footer -->
<footer id="sticky"><a href="" style="color: white">Mimo</a> &copy&nbsp 2017</footer>



<script type="text/javascript">
    $('#signin').click(function() {
        var token = '<?php echo $token; ?>'
        var pass = $("#password").val();
        var rpass = $("#rpassword").val();
        var cbox
        if ($('#cbox').prop('checked')) {
            cbox = 'true'
        }
        else{
            cbox = 'false'
        }
        $.ajax({
            type: 'post',
            url: '<?php echo base_url() ?>accounts/changepass',
            data:{
                pass:pass,
                rpass:rpass,
                token:token,
                cbox:cbox
            },
            success: function(r){
                var res = JSON.parse(r)
                console.log(res);
                if(res.status=='success'){
                    alert('Password Changed!')
                    if(cbox=='true'){
                        window.location = "http://localhost/mimo/accounts/signin";
                    }
                    else{
                        window.location = "http://localhost/mimo/";
                    }
                }
                else{
                    $("#log").attr('class', 'alert alert-danger');
                    $( "#log" ).text(res.error);
                }
            },
            error: function(e){
               console.log(e);

            }
            
        });

    });
    
</script>
</body>
