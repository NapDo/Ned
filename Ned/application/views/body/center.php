
 

  
  		
  <!-- Site Overlay -->
    <nav class="pushy pushy-left">
    <div class="profile">
   
      <h3><a href="03.html"></a></h3>
    
	     <a href="#" class="log_btn">Log in</a>    </div>

  </nav>
<link rel="stylesheet" href="/public/css/loginControl.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('/public/css/normalize.css');?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('/public/css/webflow.css');?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('/public/css/asset_second.css');?>">

<script src="../ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>


  <div id="container">


    <div class="top_promo_block" id="promo_head" style="height: 462px;">
   
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="header_promo"> 
              <img src="/public/img/start/logo.png" alt="#">
              <a href="#" class="log_btn ">Log in</a>            </div>
		
          </div>
    
		</div>
	
		<div class="w-container">
             <div class="w-row header-row-lp2">
                 <div class="w-col w-col-8 w-clearfix header-row">
				 
                     <h1 class="super-header">Manipulate your ideas Now ! <i class="fa fa-heart"></i></h1>
					 <style>
					   .fa-heart {
                       color: #fd5e53;
					   }
					  
						   .footer {
  position: fixed;
  bottom: 0;
  width: 100%;
  background: rgba(0, 0, 0, 0.08);
  padding: 15px 0;
  text-align: center;
  color: white;
  font: normal 14px/1.4 "Helvetica Neue","HelveticaNeue",Helvetica,Arial,sans-serif;
  font-weight: bold;
  font-size: 15px;
}
.fa-lightbulb-o{
	
  color: #fd5e53;
}

					 

</style>

                     <h1 class="subheader">Help your followers create their own ideas with your virtual mind <br>
                         directly from conversations.</h1>

                     <p class="subsubheading">One processus (Open your mind, share, develop)
                         <br>Clearer communication (no more emails!)
                         <br>Self-organized messaging (organize as you type)</p>
                 </div>
				
                 <div class="w-col w-col-4 sign-up-column">
				
                     <div class="w-form">
                  
						
					

    <form class="JS_doRegister"  role="form" method="post"  enctype="multipart/form-data">
		 <p><?php echo $reponse_log2; ?></p>
 <h1 data-bind="visible: companyCodeName == '', value: companyCodeName">Sign up <i class="fa fa-lightbulb-o"></i></h1>

                        <br><br><br><label class="sign-up-text top" for="Username">If you want to join <b>Napdo</b> you need an invitation. If you want an invitation please put your email here. </label>

                                  <input value="<?php echo set_value('email'); ?>" type="email" name="email_r" class="w-input JS_email" placeholder="Enter your email address..." autofocus="autofocus" required=""></input>

                             <input type="text" value="<?php echo set_value('username'); ?>"   name="username_r" class="w-input JS_email" placeholder="Choose an username" required=""></input>

                             <div class="JS_registerError alert alert-error hide"></div>


                             <input name="register_r" class="btn btn-success btn-block" type="submit" value="Sign up with Email" data-wait="Please wait..." title="Send my invitation"></input>
                           
                         </form>

                     </div>
                     <div class="legal-terms"><font color="white">By creating an account you confirm to having read and agreeing with our&nbsp; </font><a target="_blank" class="legal-terms-links" href="legal.html"><font color="red"><i>Terms and conditions</font></i></a>
                     </div>
                 </div>
             </div>
			 </form>
         </div>
		 </div>
		</div>
		</div>

   


    




<div class="tp-banner-container">


<script src="<?php echo base_url('/public/js/jquery.min.js');?> "></script>

<!--Other main scripts-->
<script src="<?php echo base_url('/public/js/all_scr.js');?> "></script>
<!--Bootstrap js-->  
<script src="<?php echo base_url('/public/js/bootstrap.min.js');?> "></script>


<!--Parallax-->
<script type="text/javascript" src="<?php echo base_url('/public/js/jquery.parallax-0.2-min.js');?> "></script>







<script type="text/javascript">
 "use strict";
setHeiHeight(); 
$(window).resize( setHeiHeight ); 
</script>


</div>
	<style>
	div.footer_absolute {
  height: 40px;
  line-height: 26px;
  position: absolute;
    padding-left: 20px;
  bottom: 0;
}
</style>
		

<div class="footer">
<div class="footer_absolute">
 
<a href="<?php echo base_url('/about');?>" > About </a>
  &nbsp; &nbsp; <a href="#" >Team</a>
   &nbsp; <a href="" >Terms</a>
   &nbsp; <a href="#" >Contact</a>

     
    </div>
 Napdo © 2015 .Made with <i class="fa fa-heart"></i> in Morocco by some geeks !
</div>
