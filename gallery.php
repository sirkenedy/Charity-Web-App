<?php 
	include("includes/header.php");
?>


	<div class="page-heading text-center">

		<div class="container zoomIn animated">
			
			<h1 class="page-title">GALLERY <span class="title-under"></span></h1>
			<p class="page-description">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit Necessitatibus.
			</p>
			
		</div>

	</div>

	<div class="main-container">

		<div class="container gallery fadeIn animated">

			<div class="row">
				
				<?php 
	              $myGallery =  $obj->fetch_record_with_limit("gallery", [15]);
	              foreach ($myGallery as $gallery) {
	            ?>

					<a href="assets/images/gallery/thumb/<?php echo $gallery['image']; ?>" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="assets/images/gallery/thumb/<?php echo $gallery['image']; ?>"  alt="">

						<span class="on-hover">
							<span class="hover-caption"><?php echo $gallery['image_caption']; ?></span>
						</span>

					</a> <!-- /.gallery-item -->
				<?php  
					}
				?>
				
			</div>
			
		</div>


	</div> <!-- /.main-container  -->


<?php 
	include("footer.php");
?>

<!--  Scripts
    ================================================== -->

    <!-- jQuery -->
    


    <!-- jQuery -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/jquery-1.11.1.min.js"><\/script>')</script>

        <!-- Bootsrap javascript file -->
        <script src="assets/js/bootstrap.min.js"></script>


        <script src="assets/js/jquery.prettyPhoto.js"></script>
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