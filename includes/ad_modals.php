 <!-- Donate Modal -->
    <div class="modal fade" id="editSliderModal" tabindex="-1" role="dialog" aria-labelledby="donateModalLabel" aria-hidden="true">

      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="donateModalLabel">MANAGE SLIDER</h4>
          </div>
          <div class="modal-body">

                <!-- <form class="form-donation"> -->

                        <h3 class="title-style-1 text-center">SLIDERS <span class="title-under"></span>  </h3>
                        <form id="updateSliderForm" method="POST" enctype="multipart/form-data">
                        
                        <div id="message" style="float: center;"><div class="alert alert-success" style="width: 200px;height: 40px; border-radius: 50%;text-align: center;float: center;">UPDATED SUCCESSFULLY</div> </div>
                        <div class="row">
                            <label for="title">Title</label>
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="slider_title" name="slider_title" placeholder="">
                            </div>

                        </div>


                        <div class="row">
                            <label for="title">Subitle</label>
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="slider_subtitle" name="slider_subtitle" placeholder="">
                            </div>

                        </div>


                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="file" class="form-control" onchange="loadFile(event)" accept="image/*" id="slider_image" name="slider_image" >
                            </div>

                            <div class="form-group col-md-6">
                                <img src="" id="initial_slider" style="width: 50px; height: 50px">

                            </div>
                        </div>

                        <!-- <div class="row"> -->

                            <div class="form-group col-md-12 ">
                                <input type="hidden" class="form-control" id="slider_id" name="slider_id" placeholder="">
                            </div>

                        <!-- </div> -->
                         <span id="loading" class="pull-right">gola</span>
                        
                        <div class="row">

                            <div class="form-group col-md-12">
                              <button type="submit" class="btn btn-primary pull-right" id="loader" name="changeSlider" >EDIT  SLIDER</button>
                            
                            </div>

                        </div>

                      </form>



                       
                    
                <!-- </form> -->
            
          </div>
        </div>
      </div>

    </div> <!-- /.modal -->


     <!-- more info Modal -->
    <div class="modal fade" id="moreInfoModal" tabindex="-1" role="dialog" aria-labelledby="donateModalLabel" aria-hidden="true">

      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="donateModalLabel">SADAKA</h4>
          </div>
          <div class="modal-body">

                <form class="form-donation">

                        <h3 class="title-style-1 text-center" id="moreInfoModalLabel">Thank you for your donation <span class="title-under"></span>  </h3>

                        <div class="row">

                            <div class="form-group col-md-12 " id="moreInfoBody">
                                
                            </div>

                        </div>


                </form>
            
          </div>
        </div>
      </div>

    </div> <!-- /.modal -->






    <script type="text/javascript">
      
      function dropModal(title,body) {

        $("#moreInfoModalLabel").text(title);
        $("#moreInfoBody").text(body);
        $("#moreInfoModal").modal();
        
      }

      function editSliderModal(id, title, subtitle, image) {
        var path = "../assets/images/slider/"+image
        $("#slider_id").attr("value",id);
        $('#message').hide();
        $("#slider_title").attr("value",title);
        $("#slider_image").attr("value",image);
        $("#slider_subtitle").attr("value",subtitle);
        $("#initial_slider").attr("src",path);
        $("#editSliderModal").modal();
        
      }
    </script>
    <script>
      var loadFile = function(event) {
        var output = document.getElementById('initial_slider');
        output.src = URL.createObjectURL(event.target.files[0]);
      }
    </script>
        

