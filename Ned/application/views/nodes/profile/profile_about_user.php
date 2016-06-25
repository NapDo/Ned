    <div class="container">
        <div class="cover profile">
            <div class="wrapper">
                <div class="image">
                    <img src="/public/user/images/profile-cover.jpg" alt="people" />
                </div>
                <ul class="friends">
                    <li>
                        <a href="#">
                            <img src="/public/user/images/people/110/guy-6.jpg" alt="people" class="img-responsive">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="/public/user/images/people/110/woman-3.jpg" alt="people" class="img-responsive">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="/public/user/images/people/110/guy-2.jpg" alt="people" class="img-responsive">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="/public/user/images/people/110/guy-9.jpg" alt="people" class="img-responsive">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="/public/user/images/people/110/woman-9.jpg" alt="people" class="img-responsive">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="/public/user/images/people/110/guy-4.jpg" alt="people" class="img-responsive">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="/public/user/images/people/110/guy-1.jpg" alt="people" class="img-responsive">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="/public/user/images/people/110/woman-4.jpg" alt="people" class="img-responsive">
                        </a>
                    </li>
                    <li><a href="#" class="group"><i class="fa fa-group"></i></a>
                    </li>
                </ul>
            </div>
            <div class="cover-info">
                <div class="avatar">
                    <img src="/public/user/images/people/110/guy-5.jpg" alt="people" />
                </div>
                <div class="name">
                    <a href="#">
                <?php echo $this->session->userdata('user_un'); ?>
            </a>
                </div>
                <ul class="cover-nav">
                    <li><a href="<?php echo base_url('index.php/user'); ?>"><i class="fa fa-fw icon-ship-wheel"></i> Timeline</a>
                    </li>
                    <li class="active"><a href="#"><i class="fa fa-fw icon-user-1"></i> About</a>
                    </li>
                    <li><a href="user-public-users.html"><i class="fa fa-fw fa-users"></i> Followers</a>
                    </li>
                </ul>
            </div>
        </div>
  <?php 
             
if(!$this->session->userdata('user_lg'))
				
                echo ' 
 <div class="panel panel-default share">
            <div class="input-group">
                <div class="input-group-btn">
                    <a class="btn btn-primary" href="#"><i class="fa fa-envelope"></i>Send</a>
                </div>
				<input type="text" class="form-control share-text" placeholder="Write message..." />
				  </div>

        
            </div>';
				
       
              ?>
              
           <div class="container">
        <h1>My last ideas</h1>
        <div class="panel panel-default">
            <div class="panel-heading panel-heading-gray">
               Regular update of ideas
            </div>

            <!-- Progress table -->
            <div class="table-responsive">
                <table class="table v-middle">
                    <thead>
                        <tr>
                            <th width="20">
                                <input type="checkbox" name="checkbox" id="checkAll" />
                            </th>
                            <th>Date</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Location</th>
                            <th>Progress</th>
                            <th class="text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <input type="checkbox" />
                            </td>
                            <td> <span class="label label-gray">19/09/2014</span>
                            </td>
                            <td>
                                <img src="images/people/110/guy-5.jpg" width="40" class="img-circle" /> Jonathan Smith</td>
                            <td><a href="#">contact@mosaicpro.biz</a>
                            </td>
                            <td>Miami, FL<a href="#"><i class="fa fa-map-marker fa-fw text-muted"></i></a>
                            </td>
                            <td>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </td>
                            <td class="text-right">
                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>
                                <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" />
                            </td>
                            <td> <span class="label label-primary">19/09/2014</span>
                            </td>
                            <td>
                                <img src="images/people/110/woman-4.jpg" width="40" class="img-circle" /> Michelle Smith</td>
                            <td><a href="#">contact@mosaicpro.biz</a>
                            </td>
                            <td>Amsterdam, EU <a href="#"><i class="fa fa-map-marker fa-fw text-muted"></i></a>
                            </td>
                            <td>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </td>
                            <td class="text-right">
                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>
                                <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        <div class="row">
            <div class="col-md-6">

                <!--Friends -->
                <div class="panel panel-default">
                    <div class="panel-heading panel-heading-gray">
                      <?php   if($this->session->userdata('user_lg'))
							echo'<a href="#" class="btn btn-white btn-xs pull-right"><i class="fa fa-pencil"></i></a>';?>
                        <i class="fa fa-info-circle"></i> About
                    </div>
                    <div class="panel-body">
                        <ul class="list-unstyled profile-about">
                            <li>
                                <div class="row">
                                    <div class="col-sm-4"><span class="text-muted">Date of Birth</span>
                                    </div>
                                    <div class="col-sm-8">12 January 1990</div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-sm-4"><span class="text-muted">Job</span>
                                    </div>
                                    <div class="col-sm-8">Specialist</div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-sm-4"><span class="text-muted">Gender</span>
                                    </div>
                                    <div class="col-sm-8">Male</div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-sm-4"><span class="text-muted">Lives in</span>
                                    </div>
                                    <div class="col-sm-8">Miami, FL, USA</div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-sm-4"><span class="text-muted">Credits</span>
                                    </div>
                                    <div class="col-sm-8">249</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">

                <!--Friends -->
                <div class="panel panel-default">
                    <div class="panel-heading panel-heading-gray">
					<?php
					if($this->session->userdata('user_lg'))
                        echo'<a href="#" class="btn btn-primary btn-xs pull-right">Add <i class="fa fa-plus"></i></a>';?>
                        <i class="icon-user-1"></i> Friends
                    </div>
                    <ul class="list-unstyled friends-list">
                        <li>
                            <a href="#">
                                <img src="/public/user/images/people/110/guy-6.jpg" alt="image" class="img-responsive" />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="/public/user/images/people/110/woman-3.jpg" alt="image" class="img-responsive" />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="/public/user/images/people/110/guy-2.jpg" alt="image" class="img-responsive" />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="/public/user/images/people/110/guy-9.jpg" alt="image" class="img-responsive" />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="/public/user/images/people/110/woman-9.jpg" alt="image" class="img-responsive" />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="/public/user/images/people/110/guy-4.jpg" alt="image" class="img-responsive" />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="/public/user/images/people/110/guy-1.jpg" alt="image" class="img-responsive" />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="/public/user/images/people/110/woman-4.jpg" alt="image" class="img-responsive" />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="/public/user/images/people/110/guy-6.jpg" alt="image" class="img-responsive" />
                            </a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading panel-heading-gray">
                <i class="fa fa-bookmark"></i> BoostUp - Idea into a project
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <a href="#" class="h5 margin-none">Climb a Mountain</a>
                                <div class="text-muted">
                                    <small><i class="fa fa-calendar"></i> 24/10/2014</small>
                                </div>
                            </div>
                            <a href="#">
                                <img src="/public/user/imagesplace1-full.jpg" alt="image" class="img-responsive" />
                            </a>
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor impedit ipsum laborum maiores tempore veritatis....</p>
                                <div>
                                    <a href="#" class="btn btn-primary btn-xs pull-right">read</a>
                                    <a href="#" class="text-muted"> <i class="fa fa-comments"></i> 6</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-body text-center">
                                <a href="#" class="h5 margin-none">Vegetarian Pizza</a>
                                <div class="text-muted">
                                    <small><i class="fa fa-calendar"></i> 24/10/2014</small>
                                </div>
                                <div class="rating">
                                    <span class="star"></span>
                                    <span class="star filled"></span>
                                    <span class="star filled"></span>
                                    <span class="star filled"></span>
                                    <span class="star filled"></span>
                                </div>
                            </div>
                            <a href="#">
                                <img src="/public/user/imagesfood1-full.jpg" alt="image" class="img-responsive" />
                            </a>
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor impedit ipsum laborum maiores tempore veritatis....</p>
                                <div>
                                    <a href="#" class="btn btn-primary btn-xs pull-right">read</a>
                                    <a href="#" class="text-muted"> <i class="fa fa-comments"></i> 6</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <a href="#" class="btn btn-success btn-xs pull-right"><i class="fa fa-check-circle"></i></a>
                                <a href="#" class="h5">Win a Holiday</a>
                                <div class="text-muted">
                                    <small><i class="fa fa-calendar"></i> 24/10/2014</small>
                                </div>
                            </div>
                            <a href="#">
                                <img src="/public/user/imagesplace2-full.jpg" alt="image" class="img-responsive" />
                            </a>
                            <div class="panel-body">
                                <ul class="icon-list block bordered">
                                    <li><i class="fa fa-calendar fa-fw"></i> <a href="#">1 Week</a>
                                    </li>
                                    <li><i class="fa fa-users fa-fw"></i> <a href="#"> 2 People</a>
                                    </li>
                                    <li><i class="fa fa-map-marker fa-fw"></i> <a href="#">Miami, FL, USA</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>