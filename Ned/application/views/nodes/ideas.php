<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from mcg.matart.ru/01.Default/html/04.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Apr 2015 18:14:37 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>My City – Place page</title>


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

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="inner_page innerpage">
<div class="bg_parallax" id="inb">

<!--navigation swipe-->
<div class="menu-btn">&#9776;</div>

<?php  $this->load->view('body/men_left',$Menuleft_0); ?>
	<div class="slide-bar a one">
		<ul>
			
			<li><a class="wts-new" href="#">About us</a></li>
			<li><a class="partner" href="#">Our team</a></li>
			<li><a class="milavo" href="#">Best ideas</a></li>
		</ul>
	</div>
<!--add-->
<div class="add_place none" id="pl">
<div class="place_form">
<i class="fa fa-times close_window" id="close"></i>
<h3>Add new place<span></span></h3>
<form>
<label>What meed ?
<textarea rows="3" name="ides_na" style="max-width:100%;min-width:100%;max-height:100px;min-height:100px;"></textarea></label>
<label>Username:<input type="text"></label>
<label>Email:<input type="text"></label>
<label>Password:<input type="password"></label>
<center><input class="btn btn-primary" id="add" type="submit" value="register"/></center>
<br>
</form>
</div>
</div>

<!--autorization-->
<div class="add_place none" id="autorized">
<div class="place_form login_form">
<i class="fa fa-times close_window" id="closeau"></i>
<h3>Autorization<span></span></h3>
<form>
<label>Login:<input type="text"></label>
<label>Password:<input type="text"></label>
<a href="#" class="btn btn-success">Log in</a>
<a href="#" class="btn btn-primary"><i class="icon-facebook"></i>Log in with Facebook</a>
</form>
</div>
</div>
<div class="site-overlay"></div>
<div id="container">
<!--header-->
<div class="container-fluid header inner_head">
<div class="fixed_w">
<div class="row">
<div class="col-md-12"><a href="index.html" class="logo"><img src="img/logoin.png" alt="Mycity"/></a>
<input type="text" class="search" placeholder="search"><a href="#" class="green_btn_header" id="ad">Add place</a></div>
</div>
</div>
</div>
<div class="container page_info">
<div class="col_md_12">
<h1>Places grid</h1>
<p class="lead">You can use all Bootstrap plugins purely through the markup API without writing a single line of JavaScript. This is Bootstrap's first-class API and should be your first consideration when using a plugin.</p>
</div>
</div>
<div class="container contant">
<div class="row cont">
<!-- Left column-->
<div class="col-md-3 mobile_none sidebar">
<div class="affix-top" id="myAffix" data-spy="affix" data-offset-top="30" data-offset-bottom="20">
<ul class="places_cat">
<li><a href="#" class="shop"><i class="fa fa-shopping-cart"></i>Market</a></li>
<li><a href="#" class="cinema"><i class="fa fa-film"></i>Cinema</a></li>
<li><a href="#" class="club"><i class="fa fa-beer"></i>Bar</a></li>
<li><a href="#" class="cafe"><i class="fa fa-cutlery"></i>Restaurant</a></li>
<li><a href="#" class="sport"><i class="fa fa-futbol-o"></i>Sport</a></li>
<li><a href="#" class="port"><i class="fa fa-life-ring"></i>Port</a></li>
<li><a href="#" class="bank"><i class="fa fa-university"></i>Bank</a></li>
<li><a href="#" class="post"><i class="fa fa-envelope-o"></i>post</a></li>
<li><a href="#" class="showplace"><i class="fa fa-eye"></i>Showplace</a></li>
<li><a href="#" class="park"><i class="fa fa-leaf"></i>Park</a></li>
</ul>
<div class="tag">
<h3>Tag</h3>
<ul>
<li><a href="#">Payment</a></li>
<li><a href="#">Showplace</a></li>
<li><a href="#">Sale</a></li>
<li><a href="#">Discount</a></li>
<li><a href="#">Pizza</a></li>
<li><a href="#">Beer</a></li>
<li><a href="#">Colla</a></li>
<li><a href="#">Girls</a></li>
<li><a href="#">Themeforest</a></li>
<li><a href="#">The best</a></li>
</ul>
</div>
</div>
</div>
<!--content-->
<div class="col-md-9 basic">
<div class="place_gr_cont">

<?php
if ($Idees != false)
  foreach ($Idees->result() as $key => $M): ?>
    <!--place style one-->
    <div class="pg style_one" onclick="location.href='03.html';">
    <div class="p_cont">
    <h2><?php  echo ($M->active==0)?'<i class="fa fa-check-circle"></i>':'<i class="fa fa-check-circle" style="color:#26A65B;"></i>'; ?> <?php echo $M->id; ?> <span></span></h2>
    <span><?php echo $M->text; ?> - <?php echo date('d/m/Y H:i',$M->date); ?></span>
    </div>
    <img src="img/pl3.jpg" alt="">
    <div class="dar_bg_frid"></div>
    </div>  
<?php endforeach ?> 

</div>
<!--morebtn-->
<a href="#" class="more_btn">Load more</a>
</div>
</div>
</div>
</div>
</div>


<!--
#################################
- SCRIPT FILES -
#################################
-->
<!--Google maps API linl-->
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCsbzuJDUEOoq-jS1HO-LUXW4qo0gW9FNs"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url('public/js/jquery.min.js') ?> "></script>
<!--scroll animate block-->
<script src="<?php echo base_url('public/js/wow.min.js') ?> "></script>
<!--Other main scripts-->
<script src="<?php echo base_url('public/js/all_scr.js') ?> "></script>
<!--Bootstrap js-->  
<script src="<?php echo base_url('public/js/bootstrap.min.js') ?> "></script>
<!--Map js-->
<script type="text/javascript" src="<?php echo base_url('public/js/map_index.js') ?> "></script>
<script type="text/javascript" src="<?php echo base_url('public/js/infobox.js') ?> "></script>
<!--Slider Revolution-->
<script type="text/javascript" src="<?php echo base_url('public/rs-plugin/js/jquery.themepunch.tools.min.js') ?> "></script>
<script type="text/javascript" src="<?php echo base_url('public/rs-plugin/js/jquery.themepunch.revolution.min.js') ?> "></script>
<!--Parallax-->
<script type="text/javascript" src="<?php echo base_url('public/js/jquery.parallax-0.2-min.js') ?> "></script>

<script type="text/javascript">
    $('.etap1').show();
    $('.etap2').hide();
  function funShow()
  {
    $('.etap1').hide();
    $('.etap2').show();
  }
</script>
<script type="text/javascript">
   "use strict";
$('#myAffix').affix({
offset: {
top: 300,
bottom: function () {
return (this.bottom = $('.footer').outerHeight(true))
}
}
})
</script>
<script type="text/javascript">
   "use strict";
$('#inb').parallax({
'elements': [
{
'selector': '#inb',
'properties': {
'x': {
'background-position-x': {
'initial': 0,
'multiplier': 0.03,
'invert': true
}
},
'y': {
'background-position-y': {
'initial': 30,
'multiplier': 0.03,
'invert': true
}
}
}
}
]
});
</script>

</body>

<!-- Mirrored from mcg.matart.ru/01.Default/html/04.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Apr 2015 18:14:37 GMT -->
</html>