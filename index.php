<?php 
  include('includes/header.php');
?>




    <!-- Carousel
    ================================================== -->
    <div id="homeCarousel" class="carousel slide carousel-home" data-ride="carousel">

          <!-- Indicators -->
          <ol class="carousel-indicators">
            
            <li data-target="#homeCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#homeCarousel" data-slide-to="1"></li>
            <li data-target="#homeCarousel" data-slide-to="2"></li>

          </ol>

          <div class="carousel-inner" role="listbox">
            <?php 
              $myrow =  $obj->fetch_record_with_limit("slider", [0,3]);
              foreach ($myrow as $row) {
             ?>
            <div class="<?php if($row['id'] == '1'){echo "item active";}else{echo "item " ;}?>">

              <img src="assets/images/slider/<?php echo $row["image"]; ?>" alt="">

              <div class="container">

                <div class="carousel-caption">

                  <h2 class="carousel-title bounceInDown animated slow"><?php echo $row["title"]; ?></h2>
                  <h4 class="carousel-subtitle bounceInUp animated slow "><?php echo $row["subtitle"]; ?></h4>
                  <span href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated slow" onClick="donate_modal()"> DONATE NOW </span>

                </div> <!-- /.carousel-caption -->

              </div>

            </div> <!-- /.item -->

          <?php } ?>


            
          </div>

          <a class="left carousel-control" href="#homeCarousel" role="button" data-slide="prev">
            <span class="fa fa-angle-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>

          <a class="right carousel-control" href="#homeCarousel" role="button" data-slide="next">
            <span class="fa fa-angle-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>

    </div><!-- /.carousel -->

    <div class="section-home about-us fadeIn animated">

        <div class="container">

              <?php 
                include ("includes/about_info.php"); 
              ?>

        </div>
      
    </div> <!-- /.about-us -->

    <div class="section-home home-reasons">

        <div class="container">

            <div class="row">

                <?php 
                  $myArticle =  $obj->fetch_record_with_limit("about", [5,6]);
                  foreach ($myArticle as $article) {
                ?>
                
                    <div class="col-md-6">

                        <div class="reasons-col animate-onscroll fadeIn">

                            <img src="assets/images/reasons/<?php echo $article['image'] ;?>" alt="">

                            <div class="reasons-titles">

                                <h3 class="reasons-title"><?php echo $article['title'] ;?></h3>
                                <h5 class="reason-subtitle"><?php echo $article['title_slug'] ;?></h5>
                                
                            </div>

                            <div class="on-hover hidden-xs">
                                
                                    <?php echo limit_text($article['body'],300) ;?>
                                    
                            </div>
                        </div>
                        
                    </div>

                  <?php 
                    }
                  ?>


            </div>
          
  

        </div>
      

    </div> <!-- /.home-reasons -->

    <div class="section-home our-causes animate-onscroll fadeIn">

        <div class="container">

            <h2 class="title-style-1">Testimonials <span class="title-under"></span></h2>

            <div class="row">
              <?php  
                $testimonials =  $obj->fetch_record_with_limit("testimonials", [0,4]);
                foreach ($testimonials as $testimonial) {
              ?>
                <div class="col-md-3 col-sm-6">

                    <div class="cause">

                        <img src="assets/images/causes/<?php echo $testimonial['image'] ;?>" alt="" class="cause-img">

                        <div class="progress cause-progress">
                          <!-- <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
                            10$ / 500$
                          </div> -->
                          <B><I><?php echo $testimonial['name'] ;?></I></B>
                        </div>

                        <h4 class="cause-title"><a href="#"><?php echo $testimonial['category'] ;?> </a></h4>
                        <div class="cause-details">
                            <?php echo $testimonial['testimonial'] ;?>
                        </div>

                        <div class="btn-holder text-center">

                          <span href="#" class="btn btn-primary" onClick="donate_modal()"> DONATE NOW </span>
                          
                        </div>

                        

                    </div> <!-- /.cause -->
                    
                </div> 

              <?php  
                }
              ?>

            </div>

        </div>
        
    </div> <!-- /.our-causes -->

    




    <div class="section-home our-sponsors animate-onscroll fadeIn">
    
        <div class="container">

            <h2 class="title-style-1">Our Sponsors <span class="title-under"></span></h2>

            <ul class="owl-carousel list-unstyled list-sponsors">
              <?php 
                $mySponsor =  $obj->fetch_record("sponsors");
                foreach ($mySponsor as $sponsor) {
              ?>
              <li> <img src="assets/images/sponsors/<?php echo $sponsor['logo'] ;?>" alt=""></li>

              <?php  
                }
              ?>

            </ul>

        </div>

    </div> <!-- /.our-sponsors -->


    


    <?php include("includes/footer.php") ?>





   <!--  Scripts
    ================================================== -->

    <!-- jQuery -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/jquery-1.11.1.min.js"><\/script>')</script>

    <!-- Bootsrap javascript file -->
    <script src="assets/js/bootstrap.min.js"></script>
    
    <!-- owl carouseljavascript file -->
    <script src="assets/js/owl.carousel.min.js"></script>

    <!-- Template main javascript -->
    <script src="assets/js/main.js"></script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>

<?php echo $_SERVER['PHP_SELF'] ?>
    </body>
</html>
