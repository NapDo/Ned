<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from mcg.matart.ru/01.Default/html/04.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Apr 2015 18:14:37 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>My City - Best ideas and projects</title>


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

<body>

<!--navigation swipe-->
<!--header-->
<div class="container-fluid header inner_head">
<div class="fixed_w">
<div class="row">
<div class="col-md-12"><a href="home" class="logo"><img src="/public/img/logoin.png" alt="Mycity"/></a>
 <?php 
              if($this->session->userdata('user_lg'))
                echo '<input type="text" class="search" placeholder="search"><a href="#" class="green_btn_header" id="ad">Add idea</a>';
              else
                echo '<input type="text" class="search" placeholder="search"><a href="'.base_url('index.php/register').'"  class="green_btn_header" >Log In</a>';
              ?>
</div>
<?php
 if($this->session->userdata('user_lg'))
 echo '<div class="menu-btn">&#9776;</div>';          
 ?>

</div>

</div>
</div>

<!--add-->
<div class="add_place none" id="pl">
<div class="place_form">
<i class="fa fa-times close_window" id="close"></i>
<h3>Add new idea<span></span></h3>
<form>
<label>What's on your mind?
<textarea rows="3" name="ides_na" style="max-width:100%;min-width:100%;max-height:100px;min-height:100px;"></textarea></label>
<label>Username:<input type="text"></label>
<label>Email:<input type="text"></label>
<label>Password:<input type="password"></label>
<center><input class="btn btn-primary" id="add" type="submit" value="register"/></center>
<br>
</form>
</div>
</div>
 <?php  $this->load->view('body/men_left') ?>

<div class="user_block container-fluid">
  <div class="fixed_w">
    <h2>The best user weekly</h2>
    <div class="row">
      <div class="col-md-3 user_cover wow bounceInLeft">
        <div class="user_item">
          <div class="user_item_cont">
            <img src="/public/img/avatar/ava_1.jpg" alt="#">
            <a href="03.html" class="names">Mattew An</a>
            <div class="bottom_link">
              <ul>
                <li><a href="03.html"><i class="fa fa-thumbs-o-up"></i>123</a></li>
                <li><a href="03.html"><i class="fa fa-comment-o"></i>23</a></li>
                <li><a href="03.html"><i class="fa fa-users"></i>23</a></li>
                <li class="last"><a href="03.html"><i class="fa fa-map-marker"></i>23</a></li>
              </ul>
            </div>
          </div>
          <a href="#" class="fb_btn"><i class="fa fa-facebook-official"></i></a>
          <img src="/public/img/bglur4.png" class="blurbg" alt="#">
        </div>
      </div>
      <div class="col-md-3 user_cover wow bounceInLeft">
        <div class="user_item">
          <div class="user_item_cont">
            <img src="/public/img/avatar/ava_2.jpg" alt="#">
            <a href="03.html" class="names">John Doe</a>
            <div class="bottom_link">
              <ul>
                <li><a href="03.html"><i class="fa fa-thumbs-o-up"></i>123</a></li>
                <li><a href="03.html"><i class="fa fa-comment-o"></i>23</a></li>
                <li><a href="03.html"><i class="fa fa-users"></i>23</a></li>
                <li class="last"><a href="03.html"><i class="fa fa-map-marker"></i>23</a></li>
              </ul>
            </div>
          </div>
          <a href="#" class="fb_btn"><i class="fa fa-facebook-official"></i></a>
          <img src="/public/img/bglur3.png" class="blurbg" alt="#">
        </div>
      </div>
      <div class="col-md-3 user_cover wow bounceInRight">
        <div class="user_item">
          <div class="user_item_cont">
            <img src="/public/img/avatar/ava_3.jpg" alt="#">
            <a href="03.html" class="names">Nick richmond</a>
            <div class="bottom_link">
              <ul>
                <li><a href="03.html"><i class="fa fa-thumbs-o-up"></i>123</a></li>
                <li><a href="03.html"><i class="fa fa-comment-o"></i>23</a></li>
                <li><a href="03.html"><i class="fa fa-users"></i>23</a></li>
                <li class="last"><a href="03.html"><i class="fa fa-map-marker"></i>23</a></li>
              </ul>
            </div>
          </div>
          <a href="#" class="fb_btn"><i class="fa fa-facebook-official"></i></a>
          <img src="/public/img/bglur1.png" class="blurbg" alt="#">
        </div>
      </div>
      <div class="col-md-3 user_cover wow bounceInRight">
        <div class="user_item">
          <div class="user_item_cont">
            <img src="/public/img/avatar/ava_4.jpg" alt="#">
            <a href="03.html" class="names">Dmitry Kozlovsky</a>
            <div class="bottom_link">
              <ul>
                <li><a href="03.html"><i class="fa fa-thumbs-o-up"></i>123</a></li>
                <li><a href="03.html"><i class="fa fa-comment-o"></i>23</a></li>
                <li><a href="03.html"><i class="fa fa-users"></i>23</a></li>
                <li class="last"><a href="03.html"><i class="fa fa-map-marker"></i>23</a></li>
              </ul>
            </div>
          </div>
          <a href="#" class="fb_btn"><i class="fa fa-facebook-official"></i></a>
          <img src="/public/img/bglur2.png" class="blurbg" alt="#">
        </div>
      </div>
      <div class="user_sm col-md-1 wow bounceInLeft" onclick="location.href='03.html';">
        <span class="user_num">5</span>
        <div class="min_u_hover">
          <div class="user_go">
            <i class="fa fa-link"></i>
          </div>
          <img src="/public/img/avatar/ava_1.jpg" alt="#">
        </div>
      </div>
      <div class="user_sm col-md-1 wow bounceInLeft" onclick="location.href='03.html';">
        <span class="user_num">6</span>
        <div class="min_u_hover">
          <div class="user_go">
            <i class="fa fa-link"></i>
          </div>
          <img src="/public/img/avatar/ava_2.jpg" alt="#">
        </div>
      </div>
      <div class="user_sm col-md-1 wow bounceInLeft" onclick="location.href='03.html';">
        <span class="user_num">7</span>
        <div class="min_u_hover">
          <div class="user_go">
            <i class="fa fa-link"></i>
          </div>
          <img src="/public/img/avatar/ava_3.jpg" alt="#">
        </div>
      </div>
      <div class="user_sm col-md-1 wow bounceInLeft" onclick="location.href='03.html';">
        <span class="user_num">8</span>
        <div class="min_u_hover">
          <div class="user_go">
            <i class="fa fa-link"></i>
          </div>
          <img src="/public/img/avatar/ava_4.jpg" alt="#">
        </div>
      </div>
      <div class="user_sm col-md-1 wow bounceInLeft" onclick="location.href='03.html';">
        <span class="user_num">9</span>
        <div class="min_u_hover">
          <div class="user_go">
            <i class="fa fa-link"></i>
          </div>
          <img src="/public/img/avatar/ava_5.jpg" alt="#">
        </div>
      </div>
      <div class="user_sm col-md-1 wow bounceInLeft" onclick="location.href='03.html';">
        <span class="user_num">10</span>
        <div class="min_u_hover">
          <div class="user_go">
            <i class="fa fa-link"></i>
          </div>
          <img src="/public/img/avatar/ava_6.jpg" alt="#">
        </div>
      </div>
      <div class="user_sm col-md-1 wow bounceInRight" onclick="location.href='03.html';">
        <span class="user_num">11</span>
        <div class="min_u_hover">
          <div class="user_go">
            <i class="fa fa-link"></i>
          </div>
          <img src="/public/img/avatar/ava_7.jpg" alt="#">
        </div>
      </div>
      <div class="user_sm col-md-1 wow bounceInRight" onclick="location.href='03.html';">
        <span class="user_num">12</span>
        <div class="min_u_hover">
          <div class="user_go">
            <i class="fa fa-link"></i>
          </div>
          <img src="/public/img/avatar/ava_8.jpg" alt="">
        </div>
      </div>
      <div class="user_sm col-md-1 wow bounceInRight" onclick="location.href='03.html';">
        <span class="user_num">13</span>
        <div class="min_u_hover">
          <div class="user_go">
            <i class="fa fa-link"></i>
          </div>
          <img src="/public/img/avatar/ava_9.jpg" alt="#">
        </div>
      </div>
      <div class="user_sm col-md-1 wow bounceInRight" onclick="location.href='03.html';">
        <span class="user_num">14</span>
        <div class="min_u_hover">
          <div class="user_go">
            <i class="fa fa-link"></i>
          </div>
          <img src="/public/img/avatar/ava_10.jpg" alt="#">
        </div>
      </div>
      <div class="user_sm col-md-1 wow bounceInRight" onclick="location.href='03.html';">
        <span class="user_num">15</span>
        <div class="min_u_hover">
          <div class="user_go">
            <i class="fa fa-link"></i>
          </div>
          <img src="/public/img/avatar/ava_11.jpg" alt="#">
        </div>
      </div>
      <div class="user_sm col-md-1 wow bounceInRight" onclick="location.href='03.html';">
        <span class="user_num">16</span>
        <div class="min_u_hover">
          <div class="user_go">
            <i class="fa fa-link"></i>
          </div>
          <img src="/public/img/avatar/ava_12.jpg" alt="#">
        </div>
      </div>
    </div>
  </div>
</div>
<div class="places_index_block container-fluid">
  <div class="fixed_w">
    <h2>The best places weekly</h2>
    <div class="row">
      <div class="col-md-4 place_index_item  wow bounceInLeft">
        <div class="place_inn">
          <img src="/public/img/p1.png" alt="#">
          <div class="pl_descr">
            <a href="02.html">Slider Revolution included</a>
            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
            <ul class="rate">
              <li><i class="fa fa-star"></i></li>
              <li><i class="fa fa-star"></i></li>
              <li><i class="fa fa-star"></i></li>
              <li><i class="fa fa-star"></i></li>
              <li><i class="fa fa-star"></i></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-4 place_index_item  wow bounceInUp">
        <div class="place_inn">
          <img src="/public/img/p2.png" alt="#">
          <div class="pl_descr">
            <a href="02.html">Slider Revolution included</a>
            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
            <ul class="rate">
              <li><i class="fa fa-star"></i></li>
              <li><i class="fa fa-star"></i></li>
              <li><i class="fa fa-star"></i></li>
              <li><i class="fa fa-star no"></i></li>
              <li><i class="fa fa-star no"></i></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-4 place_index_item  wow bounceInRight">
        <div class="place_inn">
          <img src="/public/img/p3.png" alt="#">
          <div class="pl_descr">
            <a href="02.html">Slider Revolution included</a>
            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
            <ul class="rate">
              <li><i class="fa fa-star"></i></li>
              <li><i class="fa fa-star"></i></li>
              <li><i class="fa fa-star"></i></li>
              <li><i class="fa fa-star"></i></li>
              <li><i class="fa fa-star no"></i></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <a href="01.html" class="btn btn-success va">View all places</a>
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
<!--scroll animation-->
<script>
new WOW().init();
</script>

<!--Slider revolution settings-->
<script type="text/javascript">
jQuery(document).ready(function() {
   "use strict";
  jQuery('.tp-banner').show().revolution(
  {
    dottedOverlay:"none",
    delay:16000,
    startwidth:1170,
    startheight:700,
    hideThumbs:200,
    thumbWidth:100,
    thumbHeight:50,
    thumbAmount:5,
    navigationType:"bullet",
    navigationArrows:"solo",
    navigationStyle:"preview4",
    touchenabled:"on",
    onHoverStop:"on",
    swipe_velocity: 0.7,
    swipe_min_touches: 1,
    swipe_max_touches: 1,
    drag_block_vertical: false,
    parallax:"scroll",
    parallaxBgFreeze:"on",
    parallaxLevels:[10,7,4,3,2,5,4,3,2,1],
    keyboardNavigation:"off",
    navigationHAlign:"center",
    navigationVAlign:"bottom",
    navigationHOffset:0,
    navigationVOffset:20,
    soloArrowLeftHalign:"left",
    soloArrowLeftValign:"center",
    soloArrowLeftHOffset:20,
    soloArrowLeftVOffset:0,
    soloArrowRightHalign:"right",
    soloArrowRightValign:"center",
    soloArrowRightHOffset:20,
    soloArrowRightVOffset:0,
    shadow:0,
    fullWidth:"on",
    fullScreen:"off",
    spinner:"spinner4",
    stopLoop:"off",
    stopAfterLoops:-1,
    stopAtSlide:-1,
    shuffle:"off",
    autoHeight:"off",           
    forceFullWidth:"off",           
    hideThumbsOnMobile:"off",
    hideNavDelayOnMobile:1500,            
    hideBulletsOnMobile:"off",
    hideArrowsOnMobile:"off",
    hideThumbsUnderResolution:0,
    hideSliderAtLimit:0,
    hideCaptionAtLimit:0,
    hideAllCaptionAtLilmit:0,
    startWithSlide:0,
    videoJsPath:"rs-plugin/videojs/",
    fullScreenOffsetContainer: "" 
  });
}); //ready
</script>

<!--Parallax house-->
<script type="text/javascript">
   "use strict";
$('.categori_block').parallax({

  'elements': [
  {
    'selector': '.categori_block',
    'properties': {
      'x': {
        'background-position-x': {
          'initial': 0,
          'multiplier': 0.1,
          'invert': true
        }
      },
      'y': {
        'background-position-y': {
          'initial': -780,
          'multiplier': 0.1,
          'invert': true
        }
      }
    }
  }
  ]
});
</script>

<script type="text/javascript">
 "use strict";
setHeiHeight(); 
$(window).resize( setHeiHeight ); 
</script>

</body>
 
		<div class="slide-bar a one">
		<ul>
			
			<?php echo '<li><a class="wts-new" href=" '.base_url('index.php/About').'">About us</a></li>' ?>
			<?php echo '<li><a class="partner" href=" '.base_url('index.php/Team').'">Our team</a></li>' ?>
			<?php echo '<li><a class="milavo" href="'. base_url('index.php/Best_ideas').'">Best ideas</a></li>'?>
		</ul>
	</div>
	
  
<div class="footer">
	<div class="container">
		<div class="footer-grids">
			<div class="footer-left">
				<p>COPYRIGHT &COPY; 2015 NAPDO LLC.</p>
			</div>
			<div class="footer-right">
				<ul>
					<li><a class="twitter" href="http://twitter.com/NapDoSoftware"></a></li>
					<li><a class="facebook" href="http://fb.com/napsoftware"></a></li>
					<li><a class="sss" href="http://vimeo.com/NapDoSoftware"></a></li>
					<li><a class="vimeo" href=""></a></li>
					<li><a class="message" href="mailto: nap.software@gmail.com"></a></li>
				</ul>
			</div>
	
			<div class="clearfix"></div>
		</div>

		
  </div>
	</div>
