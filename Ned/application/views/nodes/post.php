				 	 <?php
if ($fullname != false)
  foreach ($fullname->result() as $key => $q): ?>
				 <?php
if ($Idees != false)
  foreach ($Idees->result() as $key => $k): ?>
<div id="content">
					    <div class="container-fluid">

       <div class="row">
                <div class="col-md-7">
                    
                    <ul class="timeline-list">
      
		   <li class="media"  >
		              
               
                           <div class="pull-left">
                                <img  data-toggle="tooltip" data-placement="right"  title="<?php echo $q->fullname; ?>" src="/public/user/uploads/avatars/<?php echo $q->img_thumb; ?>" alt="people" class="img-circle">
                                <div class="date"><?php echo date('d/m/Y H:i',$k->date); ?></div>
                            </div>
					

				
                            <div class="media-body ">
							
                                <div class="panel panel-default post">
								<div id="post<?php echo $k->id_idea; ?>"> 
                                    <div class="panel-body">

                                        <div class="boxed">
										<div id="<?php echo $k->id_idea; ?>" class="title-idea">
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
                                               
                                                <div id="<?php echo $k->id_idea; ?>" class="media-body">
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
                                
                            
							</div>
                            </div>
							</li>
							</ul>
							</div></div></div>
							 <?php endforeach ;?>
							 		 <?php endforeach ;?>