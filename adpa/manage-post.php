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
        <li class="active">Manage Post/Articles</li>
      </ol>
    </div>
  </div>

<?php } ?>
  <!--/.row -->
<?php require("../includes/adpa_footer.php") ?>

    