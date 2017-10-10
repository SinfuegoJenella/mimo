<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo $title ; ?></title>
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0">
	<link href="http://localhost/mimo/assets/img/mimologo3.png" rel="icon" type="image/png"  />
    <link rel="stylesheet" href="http://localhost/mimo/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/mimo/assets/fonts/material-icons.css">
	<link rel="stylesheet" href="http://localhost/mimo/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="http://localhost/mimo/assets/css/custom.css">
    <link rel="stylesheet" href="http://localhost/mimo/assets/css/audplay.css">
    <link rel="stylesheet" href="http://localhost/mimo/assets/css/photoupload.css">
	<script type="text/javascript" src="http://localhost/mimo/assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="http://localhost/mimo/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://localhost/mimo/assets/js/photoupload.js"></script>
    <script type="text/javascript" src="http://localhost/mimo/assets/js/likecomment.js"></script>
    <script type="text/javascript" src="http://localhost/mimo/assets/js/audplay.js"></script>

     <!-- Search NavBar -->
    <script type="text/javascript">
    $(document).ready(function() {
        $('.searchbar').keyup(function(e){
            var sWord = $(this).val();
            $('.searchresult').html("");
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url() ?>mimo/search',
                data:{
                    searchword:sWord
                },
                success: function(s){
                    if(s!=''){
                        var res = JSON.parse(s);
                        for (var i = 0; i < res.length; i++) {
                            console.log(res[i])
                            $('.searchresult').html($('.searchresult').html()+'<li class="list-group-item sR" ><a href="http://localhost/mimo/mimo/myStudio?username='+res[i].username+'"><i class="fa fa-user"></i><span> '+res[i].firstname+' '+res[i].lastname+' <small>('+res[i].username+')</small></span></a></li>')
                        }
                    }
                },
                error: function(e){
                    console.log(e)
                    alert('error')
                }
            });


        });
    });
    </script>
</head>