<div class="row">
                <?php 
                  $myinfo =  $obj->fetch_record_with_limit("about", [1,4]);
                  foreach ($myinfo as $info) {
                ?>
                <div class="col-md-3 col-sm-6">
                
                  <div class="about-us-col">

                        <div class="col-icon-wrapper">
                          <img src="assets/images/icons/<?php echo $info['image'] ?>" alt="">
                        </div>
                        <h3 class="col-title"><?php echo $info['title'] ?></h3>
                        <div class="col-details">

                          <p><?php echo limit_text($info['body'], 15) ?></p>
                          
                        </div>
                        <span href="#" class="btn btn-primary" onClick="dropModal('<?php echo $info['title'] ; ?>', '<?php echo $info['body'] ; ?>')"> Read more </span>
                    
                  </div>
                  
                </div>
                
                <?php 
                  }
                ?>
                
            </div>