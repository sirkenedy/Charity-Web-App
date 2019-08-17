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
        <li class="active">Manage About-page</li>
      </ol>
    </div>
  </div>


      <!-- .row -->
      <div class="row">
        <div class="col-sm-12">
          <div class="white-box">
            <h3 class="box-title m-b-0">ABOUT US</h3>
            <p class="text-muted m-b-30"></p>
            <?php 
              $abouts = $obj->fetch_record_with_limit("about",[1]); 

              foreach ($abouts as $about) {
              
            ?>
            <form method="post">
              <textarea id="mymce" name="area"><?php echo $about['body'] ;?></textarea>
              <input type="submit" class="btn btn-rounded btn-primary pull-right" name="">
            </form>

            <?php  
              }
            ?>
          </div>
        </div>
      </div>
      <!-- /.row -->

<?php } ?>
  <!--/.row -->
<?php require("../includes/adpa_footer.php") ?>

    