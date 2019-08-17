<?php require("../includes/adpa_header.php") ?>

<?php 
    // $users = $obj->fetchUserInfo("users","roles", "role_id","id","id","1");
    foreach ($users as $user) {
      // echo $us['firstname']."  description : ".$us['description'];
    
  ?>
  <div class="row bg-title">
    <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12">
      <h4 class="page-title"><?php echo ucfirst($user['position']). " Dashboard | ".ucfirst($user['description']) ?> </h4>
    </div>
    <div class="col-lg-6 col-sm-8 col-md-8 col-xs-12">
      <span class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light" id="time"></span>
      <ol class="breadcrumb">
        <li><a href="#">Dashboard</a></li>
        <li class="active">Manage homepage</li>
      </ol>
    </div>
  </div>

   <div class="row">
            <div class="col-md-12">
              <div class="white-box">


                <!-- Tabstyle start -->
               <!--  <h3 class="box-title m-b-0">Tabstyle 1 </h3>
                <code>sttabs tabs-style-bar</code><hr>  -->   
                <section>
                  <div class="sttabs tabs-style-bar">
                    <nav>
                      <ul>
                        <li><a href="#section-bar-1" class="sticon ti-home" onclick=""><span>Sliders</span></a></li>
                        <li><a href="#section-bar-2" class="sticon ti-trash" ><span>Testimonials</span></a></li>
                        <li><a href="#section-bar-3" class="sticon ti-stats-up"><span>Testimonials</span></a></li>
                        <li><a href="#section-bar-4" class="sticon ti-upload"><span>Upload</span></a></li>
                        <li><a href="#section-bar-5" class="sticon ti-settings"><span>Settings</span></a></li>
                      </ul>
                    </nav>
                    <div class="content-wrap">
                      <section id="section-bar-1">
                        <span class="content">
                            <div class="row">
                              <!-- left column -->
                              <div class="col-md-12">
                                <!-- general form elements -->
                                <div class="box box-primary">
                                  <div class="box-header with-border">
                                    <h3 class="box-title">Slider LISTS </h3>
                                  </div>

                                    <div>
                                         <div class="box">
                                      <div class="box-header">
                                      </div>
                                      <!-- /.box-header -->
                                      <div class="box-body table-responsive">
                                        <table id="example1" class="table table-bordered table-striped ">
                                          <thead>
                                            <tr>
                                              <th>slider</th>
                                              <th>title</th>
                                              <th>subtitle</th>
                                              <th>Action</th>


                                            </tr>
                                          </thead>
                                          <tbody id="sliderlist">
                                          
                                          
                                          </tbody>
                                          <tfoot>
                                          <tr>
                                              <th>slider</th>
                                              <th>title</th>
                                              <th>subtitle</th>
                                              <th></th>
                                          </tr>
                                        
                                          </tfoot>
                                        </table>
                                      </div>
                                      <!-- /.box-body -->
                                    </div>
                                    </div> 
                                

                                </div>
                              </div

                              >
                                <!-- /.box -->

                                <!-- Form Element sizes -->
                            </div>
                        </span>
                      </section>
                      <section id="section-bar-2"><!-- <h2>Testimonials</h2> -->
                        <span class="content">
                            <div class="row">
                              <!-- left column -->
                              <div class="col-md-12">
                                <!-- general form elements -->
                                <div class="box box-primary">
                                  <div class="box-header with-border">
                                    <h2 class="box-title">Testimonials</h2>
                                  </div>

                                    <div>
                                         <div class="box">
                                      <div class="box-header">
                                      </div>
                                      <!-- /.box-header -->
                                      <div class="box-body table-responsive">
                                        <table id="example1" class="table table-bordered table-striped ">
                                          <thead>
                                            <tr>
                                              <th>slider</th>
                                              <th>title</th>
                                              <th>subtitle</th>
                                              <th>Action</th>


                                            </tr>
                                          </thead>
                                          <tbody id="sliderlist">
                                          
                                          
                                          </tbody>
                                          <tfoot>
                                          <tr>
                                              <th>slider</th>
                                              <th>title</th>
                                              <th>subtitle</th>
                                              <th></th>
                                          </tr>
                                        
                                          </tfoot>
                                        </table>
                                      </div>
                                      <!-- /.box-body -->
                                    </div>
                                    </div> 
                                

                                </div>
                              </div

                              >
                                <!-- /.box -->

                                <!-- Form Element sizes -->
                            </div>
                        </span>
                    </section>
                      <section id="section-bar-3"><h2>Testimonials</h2></section>
                      <section id="section-bar-4"><h2>Tabbing 4</h2></section>
                      <section id="section-bar-5"><h2>Tabbing 5</h2></section>
                    </div><!-- /content -->
                  </div><!-- /tabs -->
                </section>
              </div>
            </div>
          </div>




<?php } ?>
  <!--/.row -->
<?php require("../includes/adpa_footer.php") ?>






<script>
  $(document).ready(function(){

    var xmlhttp = new XMLHttpRequest();


           $.post("../engine/ajaxLoad.php", {'fetchSlider': 'fetchSlider'}, function(data){

            if (data != 'error') {
                document.getElementById('sliderlist').innerHTML = data;
                // alert(data);
            }
          });


           $("#updateSliderForm").on('submit', (function(e)  {
            e.preventDefault();
            $('#message').hide();
            $('#loading').html('<img src="../assets/images/gif/please_wait.gif" alt="uploading..." />');
            $('#loader').attr("disabled", "disabled");

            $.ajax({
              url: "../engine/ajaxLoad.php",
              type: "POST",
              data: new FormData(this),
              contentType: false,
              cache: false,
              processData: false,
              success: function(data)
              {
                $("#loading").hide();
                $('#message').html(data);
                $("#message").slideToggle(2000, function() {
                  // alert("completed");
                  $("#loader").removeAttr("disabled");

                  $.post("../engine/ajaxLoad.php", {'fetchSlider': 'fetchSlider'}, function(data){

                    if (data != 'error') {
                        document.getElementById('sliderlist').innerHTML = data;
                        // alert(data);
                    }
                  });
                  document.getElementById("slider_image").value="";
                  $('#message').fadeOut(4000);
                });
              }
            });
           }));
      
    });


      function updateSlider() {
        // alert('yes')
        // var title = document.getElementById("slider_title").value;
        // var subtitle = document.getElementById("slider_subtitle").value;
        // var image_path = document.getElementById("slider_image").value;
        // var id = document.getElementById("slider_id").value;
        // // alert(image_path  + 'yes')
        // // document.getElementById('loader').innerHTML = '<img src="../assets/images/gif/loading.gif" width="100" height="100" />'
        // $('#loader').attr("disabled", "disabled")
        // $('#loading').html('<img src="../assets/images/gif/please_wait.gif" alt="uploading..." />')
        //  // var naso = oForm.elements["slider_id"];
        //  //  alert(nameValue);
        //   // var xmlhttp = new XMLHttpRequest();

        //   $("#updateSliderForm").on('submit', (function(e) {
        //     e.preventDefalt();
        //   }))
        //   //      $.post("../engine/ajaxLoad.php", {'fetchSlider': 'fetchSlider'}, function(data){

        //   //       if (data != 'error') {
        //   //           document.getElementById('sliderlist').innerHTML = data;
        //   //           // alert(data);
        //   //       }
        //   //   });
      }

      
    </script>

    