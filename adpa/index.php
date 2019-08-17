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
        <li class="active">homepage</li>
      </ol>
    </div>
  </div>
    <!-- .row -->
  <div class="row">
    <div class="col-lg-3 col-sm-3 col-xs-12">
      <div class="white-box analytics-info">
        <h3 class="box-title">Total Users</h3>
        <ul class="list-inline two-part">
          <li>
            <div id="sparklinedash"></div>
          </li>
          <li class="text-right"><i class="ti-arrow-up text-success"></i> <span class="counter text-success">2000</span></li>
        </ul>
      </div>
    </div>
    <div class="col-lg-3 col-sm-3 col-xs-12">
      <div class="white-box analytics-info">
        <h3 class="box-title">Total Page Views</h3>
        <ul class="list-inline two-part">
          <li>
            <div id="sparklinedash2"></div>
          </li>
          <li class="text-right"><i class="ti-arrow-down text-purple"></i> <span class="counter text-purple">502</span></li>
        </ul>
      </div>
    </div>
    <div class="col-lg-3 col-sm-3 col-xs-12">
      <div class="white-box analytics-info">
        <h3 class="box-title">Total Mail sent today <?php echo $_SESSION['id']; ?></h3>
        <ul class="list-inline two-part">
          <li>
            <div id="sparklinedash3"></div>
          </li>
          <li class="text-right"><i class="ti-arrow-up text-info"></i> <span class="counter text-info">10</span></li>
        </ul>
      </div>
    </div>
    <div class="col-lg-3 col-sm-3 col-xs-12">
      <div class="white-box analytics-info">
        <h3 class="box-title">Subscribers</h3>
        <ul class="list-inline two-part">
          <li>
            <div id="sparklinedash4"></div>
          </li>
          <li class="text-right"><i class="ti-arrow-down text-danger"></i> <span class="text-danger">40</span></li>
        </ul>
      </div>
    </div>
  </div>

<?php } ?>
  <!--/.row -->
<?php require("../includes/adpa_footer.php") ?>

    