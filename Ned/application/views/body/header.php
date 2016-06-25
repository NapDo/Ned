<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Napdo</title>
<link REL="SHORTCUT ICON" HREF="ico.ico"/>

  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/bootstrap.css'); ?>">
  <!--Main styles-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/main.css'); ?>">
  <!--Adaptive styles-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/adaptive.css'); ?>">
  <!--Swipe menu-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/pushy.css'); ?>">
  <!--fonts-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/font-awesome.css'); ?>">
  <!--animation css-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/animate.css'); ?>">
  <!-- Slider Revolution -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/rs-plugin/css/settings.css'); ?>" media="screen" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/animate_min.css'); ?>" />
  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('/public/js/jquery.backstretch.js') ?> "></script>
 



</head>
<body onload="initialize()" class="promo">
  <!--autorization-->

  <div class="add_place none" id="autorized">
    <div class="place_form login_form">
      <i class="fa fa-times close_window" id="closeau"></i>
      <p><?php echo $reponse_log; ?></p>
      <form  method="post">
     
        <label for="exampleInputext">Login:<input type="text"  required name="username_na"></label>
        <label for="exampleInputPassword1"> Password:<input type="password" required  name="password_na"></label>
        <center><input class="btn btn-success btn-block" name="login_na" type="submit" value="Log in" style="width:80%;"></center>
       <a href="" class="btn btn-primary"><i class="icon-facebook"></i>Don't have an account? Join us !</a>
      </form>
    </div>
  </div>
 <script>
    $.backstretch([
      "/public/img/background/1.jpg",
      "/public/img/background/2.jpg",
      "/public/img/background/3.jpg",
      "/public/img/background/4.jpg",
 "/public/img/background/5.jpg"		  
      ], {
        fade: 750,		//Speed of Fade
        duration: 4000 	//Time of image display
    });
</script>







 

  
  		
  <!-- Site Overlay -->
 ...

</body>
</html>