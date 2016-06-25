 <div id="content">
        <div class="container-fluid">
            <div class="text-center">
                <h1>How much should you pay for this?</h1>
                <p class="lead">A lot less then you expect.</p>
            </div>
            <div class="row">
                <div class="col-md-4">

                    <!-- Pricing -->
                    <div class="panel panel-default">
                        <div class="panel-body text-center lead margin-bottom-none">
                            Free <span class="label ">&dollar; 0</span>
                        </div>
						 		<?php
if ($hashtag != false)
  foreach ($hashtag->result() as $key => $H): ?>
                        <ul class="list-group">
                         <?php echo $H->hashtag;?> 
                        </ul>
						<?php endforeach;?>
                        <div class="panel-body text-center">
                            <button type="submit" class="btn btn-default">Purchase <i class="fa fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>

                    <!-- // Pricing -->
                    </div>
                <div class="col-md-4">

                    <!-- Pricing -->
            

                    <!-- // Pricing -->
                    </div>
            </div>
        </div>