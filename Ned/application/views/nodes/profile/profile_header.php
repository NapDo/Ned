<!DOCTYPE html>
		<?php
if ($fullname_profile != false)
  foreach ($fullname_profile->result() as $key => $M): ?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> <?php echo $M->fullname; ?> (<?php echo $M->username; ?>) </title>
	    <link href="/public/user/css/default.min.css" rel="stylesheet">
		  <style>
        #gallery .thumbnail{
            width:150px;
            height: 150px;
            float:left;
            margin:2px;
        }
        #gallery .thumbnail img{
            width:150px;
            height: 150px;
        }

    </style>
		 
		

            <!-- /.navbar-collapse -->
			<!-- Vendor Scripts Bundle --><script src="/public/user/js/vendor.min.js"></script>

    <!-- App Scripts Bundle -->
    <script src="/public/user/js/scripts.min.js"></script>
	
	  

    <!-- App Styling Bundle -->

</head>


	  <body onload="initialize()" class="promo">
	
		    <!-- Fixed navbar -->
   
	 <div id="content">
    <div class="container">
	  
        <div class="cover profile">

                <a href="#" class="btn btn-cover">
		
		
		
         <input class="fa fa-pencil fa-fw" type="file" id="fileinput" multiple="multiple"name="userfile" accept="image/*" >
		
		</a>
		
              
            <div class="wrapper">
                <div class="image">
				<div  id="gallery" ></div>
                
					  
                </div>
              				   	  <script>
(function(){



    function previewImage(file) {
        var galleryId = "gallery";

        var gallery = document.getElementById(galleryId);
        var imageType = /image.*/;

        if (!file.type.match(imageType)) {
            throw "File Type must be an image";
        }

        var thumb = document.createElement("div");
        thumb.classList.add('image');

        var img = document.createElement("img");
        img.file = file;
        thumb.appendChild(img);
        gallery.appendChild(thumb);

        // Using FileReader to display the image content
        var reader = new FileReader();
        reader.onload = (function(aImg) { return function(e) { aImg.src = e.target.result; }; })(img);
        reader.readAsDataURL(file);
    }

    var uploadfiles = document.querySelector('#fileinput');
    uploadfiles.addEventListener('change', function () {
        var files = this.files;
        for(var i=0; i<files.length; i++){
            previewImage(this.files[i]);
        }

    }, false);
})();
</script>
            </div>
            <div class="cover-info">
                <div class="avatar">
                    <img src="/public/user/uploads/avatars/<?php echo $M->img; ?> " alt="people" />
                </div>
				
                <div class="name">
                    <a href="#">
         <?php echo $M->fullname; ?> 
            </a>
		
			
                </div>
                <ul class="cover-nav">
                    <li class="active"><a href="#"><i class="fa fa-fw icon-ship-wheel"></i> Timeline</a>
                    </li>
                    <li><a href="<?php echo base_url('index.php/user/about'); ?>"><i class="fa fa-fw icon-user-1"></i> About</a>
                    </li>
                    <li><a href="#"><i class="fa fa-fw fa-users"></i> Followers</a>
                    </li>
                </ul>
            </div>
      </div>
</div>
</div>
<?php endforeach ;?>