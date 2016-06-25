   <nav class="pushy pushy-left">
    <div class="profile">
      <div class="avatar"><img src="<?php echo base_url($this->session->userdata('user_img')); ?>"/><span>5</span></div>
      <h3><a href="03.html"><?php echo $this->session->userdata('user_un'); ?></a></h3>
    
	   <?php 
              if($this->session->userdata('user_lg'))
                echo '<a class ="log_btn" href="'.base_url('index.php/Home/Logout').'">Logout</a> ';
              else
                echo '  <a href="#" class="log_btn">Log in</a>';
              ?>
    </div>
    <ul class="side_menu">
      <li><a href="index.php/Home"><i class="fa fa-bookmark-o"></i>Home</a></li>
	     <li><a href="index.php/user"><i class="fa fa-user"></i>My timeline</a></li>
      <li><a href="index.php/user/about"><i class="fa fa-th"></i>My ideas</a></li>
   
 
    </ul>
  </nav>