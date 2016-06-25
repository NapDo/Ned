              
	
				<?php
if ($fullname != false)
  foreach ($fullname->result() as $key => $q): ?>
	   <section id="main">
  <aside id="sidebar">
                <div class="sidebar-inner c-overflow">
                    <div class="profile-menu">
                        <a href="#">
                            <div class="profile-pic">
                                <img src="<?php echo base_url('/public/user/uploads/avatars/'.$q->img_thumb);?>" alt="">
                            </div>

                            <div class="profile-info">
                               <?php echo $q->fullname;?>

                                <i class="zmdi zmdi-arrow-drop-down"></i>
                            </div>
                        </a>

                        <ul class="main-menu">
                            <li>
                                <a href="profile-about.html"><i class="zmdi zmdi-account"></i> View Profile</a>
                            </li>
                            <li>
                                <a href="#"><i class="zmdi zmdi-input-antenna"></i> Privacy Settings</a>
                            </li>
                            <li>
                                <a href="#"><i class="zmdi zmdi-settings"></i> Settings</a>
                            </li>
                            <li>
                                <a href="#"><i class="zmdi zmdi-time-restore"></i> Logout</a>
                            </li>
                        </ul>
                    </div>

                    <ul class="main-menu">
                        <li class="active"><a href="index-2.html"><i class="zmdi zmdi-home"></i> Home</a></li>
                        <li><a href="typography.html"><i class="zmdi zmdi  zmdi-local-post-office"></i>My Inbox</a></li>
                       <li><a href="typography.html"><i class="zmdi zmdi  zmdi zmdi-swap-alt"></i>My Mind</a></li>
                        <li><a href="typography.html"><i class="zmdi zmdi  zmdi zmdi-trending-up"></i>Analytics</a></li>
                   <li><a href="typography.html"><i class=" zmdi zmdi-male-female zmdi-hc-fw"></i>Discover</a></li>
                   
                    
                        <li><a href="calendar.html"><i class="zmdi zmdi-calendar"></i>My events</a></li>
                       
                        
              
                    </ul>
                </div>
            </aside>
            </section>
<?php endforeach;?>