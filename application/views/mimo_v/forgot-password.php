<body id="body">

<!-- count particles -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        
    </nav>
    <!-- Sign up Form -->
    <div class="container">
        <div id="login-box">
            <div class="row">
                <div class="col-md-12">
                    <form class="form" role="form" method="post" action="" accept-charset="UTF-8" id="login-nav">
                        <legend>
							<i class="material-icons">public</i></a> Sign up!</legend>
                        <div class="alert alert-success" id="fp-alert">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                            <strong>Success! </strong>
                            We sent a verification link to your email. If you haven't received yet, please click "Submit" again.
                        </div>
                        <div class="alert alert-danger" id="fgw-alert">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                            <strong>Incorrect! </strong>
                            No email Found!
                        </div>
                            <label for="email">Please enter your email address.</label>
                            <input id="email" class="form-control signupForm" name="email" placeholder="Email" type="email" required autofocus />
                        <button class="btn btn-lg btn-custom btn-block" type="submit" name="next" id="next">Submit</button>
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
$(document).ready(function(){  
$('#fp-alert').hide()
$('#fgw-alert').hide()
})
    $('#next').click(function(e){
        var email = $('#email').val()
        e.preventDefault()
        $.ajax({
            type: 'POST',
            url:'<?php echo base_url() ?>accounts/fg',
            data:{
                email:email
            },
            success: function(s){
                res = JSON.parse(s)
                console.log(res)
                if(res.status=="success"){
                    $("#fp-alert").fadeIn(500, 0);
                        window.setTimeout(function() {
                            $("#fp-alert").hide(500, 0)
                    }, 9000);
                }else{
                    $("#fgw-alert").fadeIn(500, 0);
                        window.setTimeout(function() {
                            $("#fgw-alert").hide(500, 0)
                    }, 3000);
                }
            },
            error: function(e){
                console.log(e)
            }
        })
    })

</script>
</body>