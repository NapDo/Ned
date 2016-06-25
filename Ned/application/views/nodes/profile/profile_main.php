 	  <link href="/public/css/jquery.hashtags.css" media="all" rel="stylesheet" type="text/css" />
  

    <script src="/public/js/jquery.autosize.js" type="text/javascript"></script>
       <script src="/public/js/jquery.hashtags.js" type="text/javascript"></script>	
 
 
 <div id="content">
 		<?php
if ($fullname_profile != false)
  foreach ($fullname_profile->result() as $key => $Q): ?>
        <div class="container-fluid">
            <div class="media user-profile">
                <div class="media-object pull-left">
                    <div class="panel panel-default profile-user-box">
				
																				
<script>
      $(document).ready(function() {
        $("textarea").hashtags();
      });
    </script>
				<style>
				.img-avatar {
 

width: 110px;
  height: 110px;
  border-radius: 50%;
  border-radius: 8px;
  height: 100%;
  left: 0;
  top: 0;
  width: 100%;
}
</style>
	 
				</style>
                        <div class="avatar">
                            <img src="/public/user/uploads/avatars/<?php echo $Q->img; ?>" alt="" class="img-avatar" />
							
				 		
                            <h3> <?php echo $Q->fullname; ?></h3>
							<!-- <img src="http://localhost/verified.png" alt=""  />
							<style> 
							.verified{
		background: url('verified.png') ;
width: 110px;
  height: 110px;
  border-radius: 50%;
  border-radius: 8px;
  height: 100%;
  left: 0;
  top: 0;
  width: 100%;				
							}
		
	</style>!-->
			
	
			<?php
			if ($Q->id==$follower){
				echo '<button id="show1" class="btn btn-primary"><i class="icon-user-1"></i> Profile</button>';
			}
		else {
			

	?>
	
		
<?php if ($check_follow){
	
	echo '<a href="#" class="btn btn-success">Following <i class="fa fa-check-circle fa-fw"></i></a>';
		
		}
		else {
		
		echo ' <form role="form" method="post"  >
						<div id="follow'.$Q->id.'">
                 <button name="add_follow"class="btn btn-success btn-stroke follow"id="'.$Q->id.'">Follow</button>
				
				 </div>
				 </form>
				  		<div id="remove'.$Q->id.'" style="display:none"> 
You Following <a href="#" class="remove" id="'.$Q->id.'">
<span class="remove_b"> remove </span></a>
</div>';	
			}
		}
			?>

		
<form enctype="multipart/form-data" accept-charset="utf-8" id="userfile" method="post" action="http://localhost/index.php/profile/do_upload">
	

<input type="file"  accept="image/*" name="userfile" >
<div class="fa fa-pencil fa-fw"></div>
<button type="submit" >Upload</button>
</form>



<script>
$(function () {
    $('#userfile').on('submit', function (e) {
        // On empêche le navigateur de soumettre le formulaire
        e.preventDefault();
 
        var $form = $(this);
        var formdata = (window.FormData) ? new FormData($form[0]) : null;
        var data = (formdata !== null) ? formdata : $form.serialize();
 
        $.ajax({
            url: $form.attr('action'),
            type: $form.attr('method'),
            contentType: false, // obligatoire pour de l'upload
            processData: false, // obligatoire pour de l'upload
            dataType: 'json', // selon le retour attendu
            data: data,
            success: function (response) {
                // La réponse du serveur
				location.reload(true);
				
            }
        });
    });
});
</script>
			 

				<script>
				
	$(function() {
		$('#show1').avgrund({
			height: 200,
			holderClass: 'custom',
			showClose: true,
			showCloseText: 'Close',
			enableStackAnimation: true,
			onBlurContainer: '.container',
			template: '<p>So implement your design and place content here! If you want to close modal, please hit "Esc", click somewhere on the screen or use special button.</p>' +
			'<div>' +
			
			'<form enctype="multipart/form-data" accept-charset="utf-8" name="userfile" id="userfile"  method="post" action="http://localhost/index.php/profile/do_upload">'+
		

'<input id="userfile" type="file" name="userfile" size="20" />'+

'<br /><br />'+

'<input type="submit" value="upload"  />' +
			'<a href="http://twitter.com/voronianski" target="_blank" class="twitter">Twitter</a>' +
			'<a href="http://dribbble.com/voronianski" target="_blank" class="dribble">Dribbble</a>' +
			'</div>'
		});
	});
	
	</script>

		
		
<script type="text/javascript" >
$(function() 
{
$(".follow").click(function(){
var element = $(this);
var I = element.attr("id");
var info = 'id=' + I; 

$.ajax({
type: "POST",
url: "profile/add_follower",
data: info,
success: function(success){
	element.replaceWith(success);
	

$("#loading").ajaxComplete(function(){}).slideUp();
$('#follow'+I).fadeOut(200).hide();
$('#remove'+I).fadeIn(200).show();

}
});
return false;
});
});
</script>

                        </div>
                        <div class="profile-icons">
                            <span><i class="fa fa-users"></i> 372</span> <span><i class="fa fa-photo"></i> 43</span> <span><i class="fa fa-video-camera"></i> 3 </span>
                        </div>
                        <p><?php echo $Q->about;?></p>
                    </div>

                    <!-- Contact -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Contact
                        </div>
                        <ul class="icon-list block bordered">
                            <li><i class="fa fa-envelope fa-fw"></i> <a href="#">contact@mosaicpro.biz</a>
                            </li>
                            <li><i class="fa fa-facebook fa-fw"></i> <a href="#">/facebook</a>
                            </li>
                            <li><i class="fa fa-behance fa-fw"></i> <a href="#">/user</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="media-body">
                    <div class="panel panel-default share">
                        <div class="input-group">
                            <div class="input-group-btn">
                                <a class="btn btn-primary" href="#"><i class="fa fa-envelope"></i> Send</a>
                            </div>

                            <!-- /btn-group -->
                            <input type="text" class="form-control share-text" placeholder="Write message..." />
                        </div>

                        <!-- /input-group -->
                        </div>
                    <div class="panel panel-default">
                    
                        </div>
                    </div>
                   <div class="col-md-7">
                    
                    <ul class="timeline-list">
			<?php if ($verify_session) {?>
                        <li class="media addstatut">
                            <div class="pull-left">
                                <img src="/public/user/uploads/avatars/<?php echo $Q->img_thumb; ?>"data-toggle="tooltip" data-placement="right" title="You" alt="people" class="img-circle"  />
                                <div class="date">Now</div>
                            </div>
                            <div class="media-body">
                                <div class="row">
                                    <div class="col-md-10 col-lg-8">
				
                                        <div class="panel panel-default share">
										
                                 
       <form role="form" method="post" >
                                <input  id="<?php echo $Q->id; ?>"name="title"  type="text" class="form-control idea_title"  placeholder="Title">
                        <div class="panel-body">

                            <textarea  id="<?php echo $Q->id; ?>"  name="ideas_text"  class="form-control idea_txt" placeholder="Open your mind..."></textarea>

                        </div>
                        <div class="panel-footer share-buttons">
                         
                            <a href="#">
                                <i class="fa fa-photo"></i>
                            </a>
                            
                 <input id="<?php echo $Q->id; ?>" style="font-weight: 700;margin: 0; border-radius: 0; position: relative; z-index: 1;top: -1px; right: -1px; height: 32px; line-height: 32px; padding: 0 10px;" name="idea_new"  data-toggle="tooltip" data-placement="bottom"  title="Update your mind !" type="button" value="Share" class="btn btn-primary btn-xs pull-right insert" href="#"/>
                      
						 </div>
						 		
						 </form>
				
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
url: "home/insertIdea",
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


                                       </div>
                                        </div>
                                   
                     <div class="clearfix"></div>
                            </div>
                        </li>
			<?php }?>
						

						
					      <?php
if ($Idees != false)
  foreach ($Idees->result() as $key => $k): ?>
				
      
		   <li class="media"  >
		              
               
                           <div class="pull-left">
                                <img  data-toggle="tooltip" data-placement="right"  title="<?php echo $Q->fullname; ?>" src="/public/user/uploads/avatars/<?php echo $Q->img_thumb; ?>" alt="people" class="img-circle">
                                <div class="date"><?php echo date('d/m/Y H:i',$k->date); ?></div>
                            </div>
					

				
                            <div class="media-body ">
							
                                <div class="panel panel-default post">
								<div id="post<?php echo $Q->id; ?>"> 
                                    <div class="panel-body">

                                        <div class="boxed">
										<div id="<?php echo $Q->id; ?>" class="title-idea">
                                            <a href="#"class="h4 margin-none"><?php echo $k->title; ?></a> 
											</div>
                                            <div class="rating text-left">
                                                <span class="star"></span>
                                                <span class="star filled"></span>
                                                <span class="star filled"></span>
                                                <span class="star filled"></span>
                                                <span class="star filled"></span>
                                            </div>
                                            <div class="media">
                                               
                                                <div id="<?php echo $Q->id; ?>" class="media-body">
                                                    <p> <?php echo $k->text; ?></p>
														<a class="delete-me" href="#">Delete</a>
                                                </div>
                                            </div>
                                            <ul class="icon-list">
                                                <li><i class="fa fa-star fa-fw"></i> 4.8</li>
                                                <li><i class="fa fa-clock-o fa-fw"></i> 20 min</li>
                                                <li><i class="fa fa-graduation-cap fa-fw"></i> Beginner</li>
                                            </ul>
                                        </div>
										</div>
                                    </div>
                                
                                 <ul class="comments">
                            <li class="comment-form">
                                <div class="input-group">
                                    <input type="text" class="form-control">
                                    <span class="input-group-addon">
                   <a href=""><i class="fa fa-photo"></i></a>
                </span>
                                </div>
                            </li>
                        </ul>
							</div>
                            </div>
							</li>
							 <?php endforeach ;?>		 	
					<?php endforeach;?>		
							 
					
							
            </ul>
	

                
		</div>
                </div>
            </div>
        </div>
	
