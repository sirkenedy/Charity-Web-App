 </div>
    <!-- /.container-fluid -->
    <footer class="footer text-center"> 2016 &copy; Elite Admin brought to you by themedesigner.in </footer>
  </div>
  <!-- /#page-wrapper -->
</div>

 <?php require('ad_modals.php'); ?>
<!-- /#wrapper -->
<!-- jQuery -->
<script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Menu Plugin JavaScript -->
<script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
<!--slimscroll JavaScript -->
<script src="js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="js/waves.js"></script>
<!--weather icon -->
<script src="../plugins/bower_components/skycons/skycons.js"></script>
<!--Counter js -->
<script src="../plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
<script src="../plugins/bower_components/counterup/jquery.counterup.min.js"></script>
<!--Morris JavaScript -->
<script src="../plugins/bower_components/raphael/raphael-min.js"></script>
<script src="../plugins/bower_components/morrisjs/morris.js"></script>
<!-- Custom Theme JavaScript -->
<script src="js/custom.js"></script>
<script src="js/dashboard4.js"></script>
<!-- Sweet-Alert  -->
<script src="../plugins/bower_components/sweetalert/sweetalert.min.js"></script>
<script src="../plugins/bower_components/sweetalert/jquery.sweet-alert.custom.js"></script>

<!-- Sparkline chart JavaScript -->
<script src="../plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
<script src="../plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js"></script>
<!--Style Switcher -->
<script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
<script src="../plugins/bower_components/html5-editor/wysihtml5-0.3.0.js"></script>
<script src="../plugins/bower_components/html5-editor/bootstrap-wysihtml5.js"></script>
<script src="../plugins/bower_components/tinymce/tinymce.min.js"></script>
<script>
$(document).ready(function () {
  
if($("#mymce").length > 0){
 tinymce.init({
   selector: "textarea#mymce",
   theme: "modern",
   height:300,
   plugins: [
   "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
   "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
   "save table contextmenu directionality emoticons template paste textcolor"
   ],
   toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons", 

 });    
}  
});
</script>

<script src="js/cbpFWTabs.js"></script>
<script type="text/javascript">
      (function() {

                [].slice.call( document.querySelectorAll( '.sttabs' ) ).forEach( function( el ) {
                    new CBPFWTabs( el );
                });

            })();
</script>

<script>
	var myVar=setInterval(function(){myTimer()},1000);

	function myTimer() {
	    var d = new Date();
	    document.getElementById("time").innerHTML = d.toLocaleTimeString();
	}
</script>
<script>
$(document).ready(function () {

  $('.textarea_editor').wysihtml5();


});
</script>
<script>
  window.addEventListener('load', function(e) {
    if (navigator.online) {
      // console.log('we\'re online!');
      alert('we are online')
    }else{
      console.log('we\'re offline!');
    }
  }, false);

  window.addEventListener('online', function(e) {

      console.log('And we\'re back!');
  }, false);

  window.addEventListener('offline', function(e) {

      console.log('Connection is done.');
  }, false);
</script>

</body>
</html>