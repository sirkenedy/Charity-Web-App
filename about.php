<?php 
	require("includes/header.php");
?>


	<div class="page-heading text-center">

		<div class="container zoomIn animated">
			<h1 class="page-title">ABOUT US <span class="title-under"></span></h1>
			<p class="page-description">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit Necessitatibus.
			</p>
			
		</div>

	</div>

	<div class="main-container">

		<div class="container">

			<?php 
                  $Aboutus =  $obj->fetch_record_with_limit("about", [1]);
                  foreach ($Aboutus as $about) {
                ?>

			<div class="row fadeIn animated">

				<div class="col-md-6">

					<img src="assets/images/<?php echo $about['image'] ; ?>" alt="" class="img-responsive">

				</div>

				<div class="col-md-6">

					<h2 class="title-style-2"><?php echo $about['title'] ; ?> <span class="title-under"></span></h2>

					<?php echo $about['body'] ; ?>
					
				</div>

			</div> <!-- /.row -->

			<?php  
		}
			?>

			<div class="section-home about-us">


			<?php 
                include ("includes/about_info.php"); 
            ?>

			      
			    </div> 

		</div> <!-- /.about-us -->


	    <div class="our-team animate-onscroll fadeIn">

	        <div class="container">

	            <h2 class="title-style-1">Our Team <span class="title-under"></span></h2>

	            <div class="row">

	                <?php 
		              $myTeam =  $obj->fetch_record_with_limit("founders", [0,4]);
		              foreach ($myTeam as $team) {
		            ?>

		                <div class="col-md-3 col-sm-6">

		                    <div class="team-member">

		                        <div class="thumnail">

		                            <img src="assets/images/team/<?php echo $team['image'] ; ?>" alt="" class="cause-img">
		                            
		                        </div>



		                        <h4 class="member-name"><a href="#"><?php echo $team['fullname'] ; ?></a></h4>

		                        <div class="member-position">
		                            CO-FOUNDER
		                        </div>

		                        <div class="btn-holder">

		                          <a href="<?php echo $team['phone_number'] ; ?>" class="btn"> <i class="fa fa-phone"></i> </a>
		                          <a href="<?php echo $team['facebook_url'] ; ?>" class="btn"> <i class="fa fa-facebook"></i> </a>
		                          <a href="<?php echo $team['twitter_url'] ; ?>" class="btn"> <i class="fa fa-google"></i> </a>
		                          <!-- <a href="#" class="btn"> <i class="fa fa-twitter"></i> </a> -->
		                          <a href="<?php echo $team['linkedin_url'] ; ?>" class="btn"> <i class="fa fa-linkedin"></i> </a>
		                          
		                        </div>

		                        

		                    </div> <!-- /.team-member -->
		                    
		                </div>

	                <?php  
	                	}
	                ?>

	            </div> <!-- /.row -->

	        </div>

	    </div>
		


	</div>


    <?php  
    	include("includes/footer.php");
    ?>


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
    

    </body>
</html>




