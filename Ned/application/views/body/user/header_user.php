      <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Manipulation of your ideas - Social Network">
    <meta name="author" content="Mohammed Tabit">
    <title>Napdo</title>

  
<!--<link href="<?php echo base_url('/public/css/avgrund.css');?>" rel="stylesheet">!-->
<link href="<?php echo base_url('/public/css/avgrund_style.css');?>" rel="stylesheet">	
<link href="<?php echo base_url('/public/css/jquery.hashtags.css');?>" media="all" rel="stylesheet" type="text/css" />  
<link rel="stylesheet" type="text/css" href="<?php echo base_url('/public/css/ico-napdo.css/');?>">
  <link href="<?php echo base_url('/public/css/app.min.1.css');?>" rel="stylesheet">
        <link href="<?php echo base_url('/public/css/app.min.2.css');?>" rel="stylesheet">
    
 <link href="<?php echo base_url('/public/vendors-material/bower_components/fullcalendar/dist/fullcalendar.min.css');?>" rel="stylesheet">
        <link href="<?php echo base_url('/public/vendors-material/bower_components/animate.css/animate.min.css');?>" rel="stylesheet">
        <link href="<?php echo base_url('/public/vendors-material/bower_components/bootstrap-sweetalert/lib/sweet-alert.css');?>" rel="stylesheet">
        <link href="<?php echo base_url('/public/vendors-material/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css');?>" rel="stylesheet">
	   <link href="<?php echo base_url('/public/googlekit/material.min.css');?>" rel="stylesheet" type="text/css" />

<link href="<?php echo base_url('/public/googlekit/styles.css');?>" rel="stylesheet" type="text/css" />
 <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	  

</head>
		   	<?php
if ($fullname != false)
  foreach ($fullname->result() as $key => $F): ?>

    <!-- Fixed navbar -->
	 <header id="header">            
	 <ul class="header-inner">
                <li id="menu-trigger" data-trigger="#sidebar">
                    <div class="line-wrap">
                        <div class="line top"></div>
                        <div class="line center"></div>
                        <div class="line bottom"></div>
                    </div>
                </li>
            
                <li class="logo hidden-xs">
                    <a href="<?php echo base_url();?>"><img src="<?php echo base_url('/public/img/logoin.png');?>" style="
    margin-top: -6px;
"></a>

                </li>
                
                <li class="pull-right">
                <ul class="top-menu">
                    <li id="toggle-width">
                        <div class="toggle-switch">
                            <input id="tw-switch" type="checkbox" hidden="hidden">
                            <label for="tw-switch" class="ts-helper"></label>
                        </div>
                    </li>
                    <li id="top-search">
                        <a class="tm-search" href="#"></a>
                    </li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="tm-message" href="#"><i class="tmn-counts">6</i></a>
                        <div class="dropdown-menu dropdown-menu-lg pull-right">
                            <div class="listview">
                                <div class="lv-header">
                                    Messages
                                </div>
                                <div class="lv-body">
                                    <a class="lv-item" href="#">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="/public/img/profile-pics/1.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">David Belle</div>
                                                <small class="lv-small">Cum sociis natoque penatibus et magnis dis parturient montes</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="#">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="/public/img/profile-pics/2.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Jonathan Morris</div>
                                                <small class="lv-small">Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="#">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="/public/img/profile-pics/3.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Fredric Mitchell Jr.</div>
                                                <small class="lv-small">Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="#">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="/public/img/profile-pics/4.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Glenn Jecobs</div>
                                                <small class="lv-small">Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="#">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="/public/img/profile-pics/4.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Bill Phillips</div>
                                                <small class="lv-small">Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <a class="lv-footer" href="#">View All</a>
                            </div>
                        </div>
                    </li>
				<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

				<script type="text/javascript">

$(function() 
{
$("#notifications").click(function(){

$.ajax({
type: "POST",
url: "<?php echo base_url('index.php/home/update_notification');?>",
success: function(success){


	  $(".count").fadeOut("slow");
	 

}
});
return false;
});
});
</script>

								
	<?php
if($notification != false) 
  foreach ($notification->result() as $key => $Q):  ?>
                    <li class="dropdown">
                        <a data-toggle="dropdown"  class="tm-notification" href="#"> <?php if ($Q->seen ==0){echo'<i class="tmn-counts count">2</i>';}?></a>
                        <div class="dropdown-menu dropdown-menu-lg pull-right">
                            <div class="listview" id="notifications" >
                                <div class="lv-header">
                                    Notification
                    
                                    <ul class="actions">
										
                                        <li  class="dropdown">
										 
                                             <a  href="#"  data-clear="notification">
										
                                              <i  class="zmdi zmdi-check-all"></i>
                                            </a>
                                        </li>
                                    </ul>
								
                                </div>
										<?PHP if ($countallNoti > 0) {?>
                                <div class="lv-body">

                                    <a class="lv-item" href="#">
									
                                        <div class="media">
									
								
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="<?php echo base_url('/public/user/uploads/avatars/'.$Q->img); ?>" alt="">
                                            </div>
											
                                            <div class="media-body">
                                                <div class="lv-title"><?php echo $Q->fullname; ?></div>
                                                <small class="lv-small">Join your mind !</small>
                                            </div>
											
										
                                        </div>
										
									
                                    </a>
									

                                </div>
								
							<?php }else { echo 'test' ;}?>	
                    
                                <a class="lv-footer" href="#">View Previous</a>
                            </div>
                    
                        </div>
                    </li>
					<?php endforeach;?>
                    <li class="dropdown hidden-xs">
                        <a data-toggle="dropdown" class="tm-task" href="#"><i class="tmn-counts">2</i></a>
                        <div class="dropdown-menu pull-right dropdown-menu-lg">
                            <div class="listview">
                                <div class="lv-header">
                                    Tasks
                                </div>
                                <div class="lv-body">
                                    <div class="lv-item">
                                        <div class="lv-title m-b-5">HTML5 Validation Report</div>
                    
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                                                <span class="sr-only">95% Complete (success)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lv-item">
                                        <div class="lv-title m-b-5">Google Chrome Extension</div>
                    
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                <span class="sr-only">80% Complete (success)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lv-item">
                                        <div class="lv-title m-b-5">Social Intranet Projects</div>
                    
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                <span class="sr-only">20% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lv-item">
                                        <div class="lv-title m-b-5">Bootstrap Admin Template</div>
                    
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                <span class="sr-only">60% Complete (warning)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lv-item">
                                        <div class="lv-title m-b-5">Youtube Client App</div>
                    
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                <span class="sr-only">80% Complete (danger)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    
                                <a class="lv-footer" href="#">View All</a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="tm-settings" href="#"></a>
                        <ul class="dropdown-menu dm-icon pull-right">
                            <li class="hidden-xs">
                                <a data-action="fullscreen" href="#"><i class="zmdi zmdi-fullscreen"></i> Toggle Fullscreen</a>
                            </li>
                            <li>
                                <a data-action="clear-localstorage" href="#"><i class="zmdi zmdi-delete"></i> Clear Local Storage</a>
                            </li>
                            <li>
                                <a href="#"><i class="zmdi zmdi-face"></i> Privacy Settings</a>
                            </li>
                            <li>
                                <a href="#"><i class="zmdi zmdi-settings"></i> Other Settings</a>
                            </li>
                        </ul>
                    </li>
                    <li class="hidden-xs" id="chat-trigger" data-trigger="#chat">
                        <a class="tm-chat" href="#"></a>
                    </li>
                </li>
            </ul>
            
            <!-- Top Search Content -->
            <div id="top-search-wrap">
                <input type="text">
                <i id="top-search-close">&times;</i>
            </div>
    <?php endforeach;?>
      
	</header>
	
        <script src="<?php echo base_url('/public/vendors-material/bower_components/jquery/dist/jquery.min.js');?>"></script>
        <script src="<?php echo base_url('/public/vendors-material/bower_components/bootstrap/dist/js/bootstrap.min.js');?>"></script>
        
        <script src="<?php echo base_url('/public/vendors-material/bower_components/flot/jquery.flot.js');?>"></script>
        <script src="<?php echo base_url('/public/vendors-material/bower_components/flot/jquery.flot.resize.js');?>"></script>
        <script src="<?php echo base_url('/public/vendors-material/bower_components/flot.curvedlines/curvedLines.js');?>"></script>
        <script src="<?php echo base_url('/public/vendors-material/sparklines/jquery.sparkline.min.js"');?>"></script>
        <script src="<?php echo base_url('/public/vendors-material/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js');?>"></script>
        
        <script src="<?php echo base_url('/public/vendors-material/bower_components/moment/min/moment.min.js');?>"></script>
        <script src="<?php echo base_url('/public/vendors-material/bower_components/fullcalendar/dist/fullcalendar.min.js');?>"></script>
        <script src="<?php echo base_url('/public/vendors-material/bower_components/simpleWeather/jquery.simpleWeather.min.js');?>"></script>
        <script src="<?php echo base_url('/public/vendors-material/bower_components/jquery.nicescroll/jquery.nicescroll.min.js');?>"></script>
        <script src="<?php echo base_url('/public/vendors-material/bower_components/Waves/dist/waves.min.js');?>"></script>
        <script src="<?php echo base_url('/public/vendors-material/bootstrap-growl/bootstrap-growl.min.js');?>"></script>
        <script src="<?php echo base_url('/public/vendors-material/bower_components/bootstrap-sweetalert/lib/sweet-alert.min.js');?>"></script>
        

        <script src="<?php echo base_url('/public/js/flot-charts/curved-line-chart.js');?>"></script>
        <script src="<?php echo base_url('/public/js/flot-charts/line-chart.js');?>"></script>
        <script src="<?php echo base_url('/public/js/charts.js');?>"></script>
        
   
        <script src="<?php echo base_url('/public/js/functions.js');?>"></script>
		 <script src="<?php echo base_url('/public/js/demo.js');?>"></script>

<script src="<?php echo base_url('/public/googlekit/material.min.js');?>" type="text/javascript"></script>	 
</body>
      
