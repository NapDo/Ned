
 <script src="<?php echo base_url('/public/js/jquery.autosize.js');?>" type="text/javascript"></script>
<script src="<?php echo base_url('/public/js/jquery.hashtags.js');?>" type="text/javascript"></script>	



 <section id="main">
 <section id="content">
                <div class="container wall">
             
          
                    
                    <div class="mini-charts">
                        <div class="row">
						
                            <div class="col-sm-6 col-md-3">
                                <div class="mini-charts-item bgm-cyan">
                                    <div class="clearfix">
                                        <div class="chart stats-bar"><canvas width="83" height="45" style="display: inline-block; width: 83px; height: 45px; vertical-align: top;"></canvas></div>
                                        <div class="count">
                                            <small>My budget</small>
                                            <h2>987,459</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-6 col-md-3">
                                <div class="mini-charts-item bgm-lightgreen">
                                    <div class="clearfix">
                                        <div class="chart stats-bar-2"><canvas width="83" height="45" style="display: inline-block; width: 83px; height: 45px; vertical-align: top;"></canvas></div>
                                        <div class="count">
                                            <small>Website Impressions</small>
                                            <h2>356,785K</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-6 col-md-3">
                                <div class="mini-charts-item bgm-orange">
                                    <div class="clearfix">
                                        <div class="chart stats-line"><canvas width="85" height="45" style="display: inline-block; width: 85px; height: 45px; vertical-align: top;"></canvas></div>
                                        <div class="count">
                                            <small>Total Sales</small>
                                            <h2>$ 458,778</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-6 col-md-3">
                                <div class="mini-charts-item bgm-bluegray">
                                    <div class="clearfix">
                                        <div class="chart stats-line-2"><canvas width="85" height="45" style="display: inline-block; width: 85px; height: 45px; vertical-align: top;"></canvas></div>
                                        <div class="count">
                                            <small>Support Tickets</small>
                                            <h2>23,856</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                       
                  
					</div>
                  
                   
                    <div class="dash-widgets">
					
                        	
             
                
                     <?php
if ($fullname != false)
  foreach ($fullname->result() as $key => $q): ?>
    
	   <p><?php echo $reponse; ?></p>


			<div class="card">
                                <div class="card-body card-padding bgm-teal c-white">
                                    Cras leo sem, egestas a accumsan eget, euismod at nunc. Praesent vel mi blandit, tempus ex gravida, accumsan dui. Sed sed aliquam augue. Nullam vel suscipit purus, eu facilisis ante. Mauris nec commodo felis. 
                                </div>
                            </div>
		

		   
   
		 <script>
      $(document).ready(function() {
        $("textarea").hashtags();
      });
    </script>
<script type="text/javascript" >
$(function() 
{
$(".insert").click(function(){
var element = $(this);
var I = jQuery.trim($('.idea_txt').val());
var b = jQuery.trim($('.idea_title').val()); 
	$("#loading").html('<img src="loader.gif" >');
// 
$.ajax({
type: "POST",
url: "index.php/home/insertIdea",
data: {txt:I,title:b},
success: function(success){
	//alert(success);
	//element.replaceWith(success);
	$('.addstatut').after(success);

  

$("#loading").ajaxComplete(function(){}).slideUp();
//$('.insert'+I+b).fadeIn(200).show();

}
});


return false;
});
});
</script>
				
<script type="text/javascript" >
$(function() 
{
$(".delete").click(function(){
var element = $(this);

	$("#loading").html('<img src="loader.gif" >');
// 
$.ajax({
type: "POST",
url: "home/insertIdea",
data: 'DELETE',
success: function(success){
	//alert(success);
	

  

$("#loading").ajaxComplete(function(){}).slideUp();
//$('.insert'+I+b).fadeIn(200).show();

}
});


return false;
});
});
</script>


                        <div class="col-md-8">
                            <div class="card wall-posting addstatut">
							   <div class="card-header">
							   
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="lv-img" src="/public/user/uploads/avatars/<?php echo $q->img;?>" alt="">
                                        </div>
                                        
                                        <div class="media-body m-t-5">
                                            <h2><?php echo $q->fullname;?> <small>Now</small></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body card-padding">
								                                <input  id="<?php echo $q->id; ?>"name="title"  type="text" class="form-control idea_title"  placeholder="Title">

                                    <textarea class="wp-text idea_txt" name="ideas_text" data-auto-size placeholder="Open your mind..."></textarea>
                                    
                                    <div class="tab-content p-0">
                                        <div class="wp-media tab-pane" id="wpm-image">
                                            Images - Coming soon...
                                        </div>
                                        
                                        <div class="wp-media tab-pane" id="wpm-video">
                                            Video Links - Coming soon...
                                        </div>
                                        
                                        <div class="wp-media tab-pane" id="wpm-link">
                                            Links - Coming soon...
                                        </div>
                                    </div>
                                </div>
                                
                                <ul class="list-unstyled clearfix wpb-actions">
                                    <li class="wpba-attrs">
                                        <ul class="list-unstyled list-inline m-l-0 m-t-5">
                                            <li><a data-wpba="image" data-toggle="tab" href="#" data-target="#wpm-image"><i class="zmdi zmdi-image"></i></a></li>
                                            <li><a data-wpba="video" data-toggle="tab" href="#" data-target="#wpm-video"><i class="zmdi zmdi-play-circle"></i></a></li>
                                            <li><a data-wpba="link" data-toggle="tab" href="#" data-target="#wpm-link"><i class="zmdi zmdi-link"></i></a></li>
                                        </ul>
                                    </li>
                
                                    <li class="pull-right"><button  name="idea_new"class="btn btn-primary btn-sm insert">Post</button></li>
                                </ul>
                            </div>
					
                               
				
	
				



              <?php
if ($Idees != false)
  foreach ($Idees->result() as $key => $k): ?>               
						
  <div class="t-view" data-tv-type="text">
    
        <div class="card">
						
					
				
       
              
                                <div class="card-header">
                                    <div class="media">
										<button class="btn bgm-red btn-icon waves-effect waves-circle waves-float waves-effect waves-circle waves-float" style="
    float: right;
    padding: 0 !important;
    margin-right: -43px;
    margin-top: -37px;
"><i class="zmdi zmdi-favorite"></i></button>
                                        <div class="pull-left">
                                            <img  data-toggle="tooltip" data-placement="right"  title="<?php echo $q->fullname; ?>"class="lv-img" src="/public/user/uploads/avatars/<?php echo $q->img_thumb; ?>" alt="">
                                        </div>
                                        
                                        <div class="media-body m-t-5">
                                            <h2> <a href="<?php echo base_url('/index.php/post/'.$k->id_idea);?>"class="h4 margin-none"><?php echo $k->title; ?></a><small>Posted on <?php echo date('d/m/Y H:i',$k->date); ?></small></h2>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="card-body card-padding">
                                    <p><?php echo $k->text; ?>.</p>
                                    
                           
                                    
                                    <ul class="wall-attrs clearfix list-inline list-unstyled">
                                        <li class="wa-stats">
                                            <span><i class="zmdi zmdi-comments"></i> 36</span>
                                            <span class="active"><i class="zmdi zmdi-favorite"></i> 220</span>
                                        </li>
                                        
                                        <li class="wa-users">
                                            <a href="#"><img src="img/profile-pics/1.jpg" alt=""></a>
                                            <a href="#"><img src="img/profile-pics/2.jpg" alt=""></a>
                                            <a href="#"><img src="img/profile-pics/3.jpg" alt=""></a>
                                            <a href="#"><img src="img/profile-pics/5.jpg" alt=""></a>
                                        </li>
                                    </ul>    
                                </div>
                                
                                <div class="wall-comment-list">
                                    
                                    <!-- Comment Listing -->
                                    <div class="wcl-list">
                                        <div class="media">
                                            <a href="#" class="pull-left">
                                                <img src="img/profile-pics/5.jpg" alt="" class="lv-img-sm">
                                            </a>
                                            
                                            <div class="pull-right p-0">
                                                <ul class="actions">
                                                    <li class="dropdown" dropdown="">
                                                        <a href="#" dropdown-toggle="" aria-haspopup="true" aria-expanded="false">
                                                            <i class="zmdi zmdi-more-vert"></i>
                                                        </a>
                                        
                                                        <ul class="dropdown-menu dropdown-menu-right">
                                                            <li>
                                                                <a href="#">Report</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Delete</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            
                                            <div class="media-body">
                                                <a href="#" class="a-title">David Nathan</a> <small class="c-gray m-l-10">3 mins ago...</small>
                                                <p class="m-t-5 m-b-0">Maecenas dignissim in neque id commodo. Nam pretium a tortor a convallis. Curabitur in arcu quis nulla aliquam condimentum. Morbi eu cursus diam, vitae tristique dui.</p>
                                            </div>
                                        </div>
                                        
                                        <div class="media">
                                            <a href="#" class="pull-left">
                                                <img src="img/profile-pics/4.jpg" alt="" class="lv-img-sm">
                                            </a>
                     
                                            <div class="media-body">
                                                <a href="#" class="a-title">Sam Anderson</a> <small class="c-gray m-l-10">3 mins ago...</small>
                                                <p class="m-t-5 m-b-0">Curabitur in arcu quis nulla aliquam condimentum.</p>
                                            </div>
                                            
                                            <ul class="actions">
                                                <li class="dropdown" dropdown="">
                                                    <a href="#" dropdown-toggle="" aria-haspopup="true" aria-expanded="false">
                                                        <i class="zmdi zmdi-more-vert"></i>
                                                    </a>
                                    
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li>
                                                            <a href="#">Report</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Delete</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                    <!-- Comment form -->
                                    <div class="wcl-form">
                                        <div class="wc-comment">
                                            <div class="wcc-inner wcc-toggle">
                                                Write Something...
                                            </div>
                                        </div>
                                    </div>
                                </div>
								
                            </div>
		 
							 <?php endforeach ;?>
							 	   <?php
if ($follow_ideas != false)
  foreach ($follow_ideas->result() as $key => $f): ?>
		              						
  <div class="t-view" data-tv-type="text">
    
        <div class="card">
						
					
				
       
              
                                <div class="card-header">
                                    <div class="media">
	<button class="btn bgm-red btn-icon waves-effect waves-circle waves-float waves-effect waves-circle waves-float" style="
    float: right;
    padding: 0 !important;
    margin-right: -43px;
    margin-top: -37px;
"><i class="zmdi zmdi-favorite"></i></button>                                   <div class="pull-left">
                                            <img  data-toggle="tooltip" data-placement="right"  title="<?php echo $f->fullname; ?>"class="lv-img" src="/public/user/uploads/avatars/<?php echo $f->img_thumb; ?>" alt="">
                                        </div>
                                        
                                        <div class="media-body m-t-5">
                                            <h2> <a href="<?php echo base_url('/index.php/post/'.$f->id_idea);?>"class="h4 margin-none"><?php echo $f->title; ?></a><small>Posted on <?php echo date('d/m/Y H:i',$k->date); ?></small></h2>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="card-body card-padding">
                                    <p><?php echo $f->text; ?>.</p>
                                    
                           
                             <ul class="wall-attrs clearfix list-inline list-unstyled">
                                        <li class="wa-stats">
                                            <span><i class="zmdi zmdi-comments"></i> 36</span>
                                            <span class="active"><i class="zmdi zmdi-favorite"></i> 220</span>
                                        </li>
                                        
                                        <li class="wa-users">
                                            <a href="#"><img src="img/profile-pics/1.jpg" alt=""></a>
                                            <a href="#"><img src="img/profile-pics/2.jpg" alt=""></a>
                                            <a href="#"><img src="img/profile-pics/3.jpg" alt=""></a>
                                            <a href="#"><img src="img/profile-pics/5.jpg" alt=""></a>
                                        </li>
                                    </ul>
                                </div>
                                
                                <div class="wall-comment-list">
                                    
                                    <!-- Comment Listing -->
                                    <div class="wcl-list">
                                        <div class="media">
                                            <a href="#" class="pull-left">
                                                <img src="img/profile-pics/5.jpg" alt="" class="lv-img-sm">
                                            </a>
                                            
                                            <div class="pull-right p-0">
                                                <ul class="actions">
                                                    <li class="dropdown" dropdown="">
                                                        <a href="#" dropdown-toggle="" aria-haspopup="true" aria-expanded="false">
                                                            <i class="zmdi zmdi-more-vert"></i>
                                                        </a>
                                        
                                                        <ul class="dropdown-menu dropdown-menu-right">
                                                            <li>
                                                                <a href="#">Report</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Delete</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            
                                            <div class="media-body">
                                                <a href="#" class="a-title">David Nathan</a> <small class="c-gray m-l-10">3 mins ago...</small>
                                                <p class="m-t-5 m-b-0">Maecenas dignissim in neque id commodo. Nam pretium a tortor a convallis. Curabitur in arcu quis nulla aliquam condimentum. Morbi eu cursus diam, vitae tristique dui.</p>
                                            </div>
                                        </div>
                                        
                                        <div class="media">
                                            <a href="#" class="pull-left">
                                                <img src="img/profile-pics/4.jpg" alt="" class="lv-img-sm">
                                            </a>
                     
                                            <div class="media-body">
                                                <a href="#" class="a-title">Sam Anderson</a> <small class="c-gray m-l-10">3 mins ago...</small>
                                                <p class="m-t-5 m-b-0">Curabitur in arcu quis nulla aliquam condimentum.</p>
                                            </div>
                                            
                                            <ul class="actions">
                                                <li class="dropdown" dropdown="">
                                                    <a href="#" dropdown-toggle="" aria-haspopup="true" aria-expanded="false">
                                                        <i class="zmdi zmdi-more-vert"></i>
                                                    </a>
                                    
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li>
                                                            <a href="#">Report</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Delete</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                    <!-- Comment form -->
                                    <div class="wcl-form">
                                        <div class="wc-comment">
                                            <div class="wcc-inner wcc-toggle">
                                                Write Something...
                                            </div>
                                        </div>
                                    </div>
                                </div>
								
                            </div>
							
               
<?php endforeach ;?>
				
							 
							
		

                
		</div>
	
		   		</div>	 
				
			</div>
			     <div class="col-md-4 hidden-sm">
                           				<div class="panel panel-default ideas-box">
		   <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored mdl-shadow--4dp mdl-color--accent" id="add" STYLE="margin-left: -35px;
  margin-bottom: -48px;
  margin-top: -32PX";>
            <i class="material-icons">add</i>
          </button>
					<div class="demo-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop">
              <div class="mdl-card__title mdl-card--expand mdl-color--teal-300">
                <h2 class="mdl-card__title-text">Updates</h2>
              </div>
              <div class="mdl-card__supporting-text mdl-color-text--grey-600">
                Meeting with new team. 7th July
              </div>
              <div class="mdl-card__actions mdl-card--border">
                <a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect" data-upgraded=",MaterialButton,MaterialRipple">Adopt your idea<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></a>
              </div>
            </div>
                    
          

           
           
                </div>
								
		  
                    
		 	   
                   	<!-- Hashtag-->


                                   <div class="card">
                                <div class="card-header">
                                    <h2>About me</h2>
                                </div>
                                
                                <div class="card-body card-padding">
			   <div class="ideastitle">Your hashtag ideas  <div style="float:right;color:#a2a2a2;margin:3px 0"><div class="glyph-icon flaticon-small61" style ="color:gray"data-toggle="tooltip" data-placement="bottom" title="Your active ideas"></div></div>

							   
							   </div>

<div style="padding:5px 0">
	   <?php
if ($hashtags != false)
  foreach ($hashtags->result() as $key => $H): ?>


		              
<a  class="box_hashtags"href="/Hashtag/<?php echo$H->hashtag; ?>"><?php echo$H->hashtag; ?></a>

           <?php endforeach;?> 
			  </div>                                </div>
                            </div>   
                               
				
									
                        
						
						 </div>
                       
		</div>
						

                                </div>
								
                            </div>
                     
                   
            </section>
</section>
				



	
                   
         
                    
          
  <?php endforeach ;?>
           
           
     



</body>
  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" style="position: fixed; left: -1000px; height: -1000px;">
        <defs>
          <mask id="piemask" maskContentUnits="objectBoundingBox">
            <circle cx=0.5 cy=0.5 r=0.49 fill="white" />
            <circle cx=0.5 cy=0.5 r=0.40 fill="black" />
          </mask>
          <g id="piechart">
            <circle cx=0.5 cy=0.5 r=0.5 />
            <path d="M 0.5 0.5 0.5 0 A 0.5 0.5 0 0 1 0.95 0.28 z" stroke="none" fill="rgba(255, 255, 255, 0.75)" />
          </g>
        </defs>
      </svg>
      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 500 250" style="position: fixed; left: -1000px; height: -1000px;">
        <defs>
          <g id="chart">
            <g id="Gridlines">
              <line fill="#888888" stroke="#888888" stroke-miterlimit="10" x1="0" y1="27.3" x2="468.3" y2="27.3"/>
              <line fill="#888888" stroke="#888888" stroke-miterlimit="10" x1="0" y1="66.7" x2="468.3" y2="66.7"/>
              <line fill="#888888" stroke="#888888" stroke-miterlimit="10" x1="0" y1="105.3" x2="468.3" y2="105.3"/>
              <line fill="#888888" stroke="#888888" stroke-miterlimit="10" x1="0" y1="144.7" x2="468.3" y2="144.7"/>
              <line fill="#888888" stroke="#888888" stroke-miterlimit="10" x1="0" y1="184.3" x2="468.3" y2="184.3"/>
            </g>
            <g id="Numbers">
              <text transform="matrix(1 0 0 1 485 29.3333)" fill="#888888" font-family="'Roboto'" font-size="9">500</text>
              <text transform="matrix(1 0 0 1 485 69)" fill="#888888" font-family="'Roboto'" font-size="9">400</text>
              <text transform="matrix(1 0 0 1 485 109.3333)" fill="#888888" font-family="'Roboto'" font-size="9">300</text>
              <text transform="matrix(1 0 0 1 485 149)" fill="#888888" font-family="'Roboto'" font-size="9">200</text>
              <text transform="matrix(1 0 0 1 485 188.3333)" fill="#888888" font-family="'Roboto'" font-size="9">100</text>
              <text transform="matrix(1 0 0 1 0 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">1</text>
              <text transform="matrix(1 0 0 1 78 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">2</text>
              <text transform="matrix(1 0 0 1 154.6667 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">3</text>
              <text transform="matrix(1 0 0 1 232.1667 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">4</text>
              <text transform="matrix(1 0 0 1 309 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">5</text>
              <text transform="matrix(1 0 0 1 386.6667 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">6</text>
              <text transform="matrix(1 0 0 1 464.3333 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">7</text>
            </g>
            <g id="Layer_5">
              <polygon opacity="0.36" stroke-miterlimit="10" points="0,223.3 48,138.5 154.7,169 211,88.5
              294.5,80.5 380,165.2 437,75.5 469.5,223.3 	"/>
            </g>
            <g id="Layer_4">
              <polygon stroke-miterlimit="10" points="469.3,222.7 1,222.7 48.7,166.7 155.7,188.3 212,132.7
              296.7,128 380.7,184.3 436.7,125 	"/>
            </g>
          </g>
        </defs>
      </svg>
	    <style>
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
    </style>
    <a href="https://github.com/google/material-design-lite/blob/master/templates/text-only/" target="_blank" id="view-source" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast">Refactor</a>
<script>
      $(document).ready(function() {
        $("textarea").hashtags();
      });
	  </script>
 