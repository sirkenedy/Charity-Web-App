

<?php 
// if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) {
//   ob_start("ob_gzhandler");
// }else{
//   ob_start();
// }

require("../engine/userClass.php");
  redirectInvalidUser();
  $id = $_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
<title>Elite Admin - is a responsive admin template</title>
<!-- Bootstrap Core CSS -->
<link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Menu CSS -->
<link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
<link rel="stylesheet" href="../plugins/bower_components/html5-editor/bootstrap-wysihtml5.css" />
<!-- morris CSS -->
<!-- <link href="../plugins/bower_components/morrisjs/morris.css" rel="stylesheet"> -->
<!-- animation CSS -->
<link href="css/animate.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="css/style.css" rel="stylesheet">
<!-- color CSS -->
<link href="css/colors/blue.css" id="theme"  rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<!-- Preloader -->
<div class="preloader">
  <div class="cssload-speeding-wheel"></div>
</div>
<div id="wrapper">
  <!-- Navigation -->
  <?php 
    $users = $obj->fetchUserInfo("users","roles", "role_id","id","id",$id);
    foreach ($users as $user) {
      // echo $us['firstname']."  description : ".$us['description'];
    
  ?>
  <nav class="navbar navbar-default navbar-static-top m-b-0">
    <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
      <div class="top-left-part"><a class="logo" href="index.html"><b><img src="../plugins/images/eliteadmin-logo.png" alt="home" /></b><span class="hidden-xs"><img src="../plugins/images/eliteadmin-text.png" alt="home" /></span></a></div>
      <ul class="nav navbar-top-links navbar-left hidden-xs">
        <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
        <li>
          <form role="search" class="app-search hidden-xs">
            <input type="text" placeholder="Search..." class="form-control">
            <a href=""><i class="fa fa-search"></i></a>
          </form>
        </li>
      </ul>
      <ul class="nav navbar-top-links navbar-right pull-right">
        <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-envelope"></i>
          <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
          </a>
          <ul class="dropdown-menu mailbox animated bounceInDown">
            <li>
              <div class="drop-title">You have 4 new messages</div>
            </li>
            <li>
              <div class="message-center"> <a href="#">
                <div class="user-img"> <img src="../plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                <div class="mail-contnet">
                  <h5>Pavan kumar</h5>
                  <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                </a> <a href="#">
                <div class="user-img"> <img src="../plugins/images/users/sonu.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                <div class="mail-contnet">
                  <h5>Sonu Nigam</h5>
                  <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                </a> <a href="#">
                <div class="user-img"> <img src="../plugins/images/users/arijit.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                <div class="mail-contnet">
                  <h5>Arijit Sinh</h5>
                  <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                </a> <a href="#">
                <div class="user-img"> <img src="../plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                <div class="mail-contnet">
                  <h5>Pavan kumar</h5>
                  <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                </a> </div>
            </li>
            <li> <a class="text-center" href="javascript:void(0);"> <strong>See all notifications</strong> <i class="fa fa-angle-right"></i> </a></li>
          </ul>
          <!-- /.dropdown-messages -->
        </li>
        <!-- /.dropdown -->
        <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-note"></i>
          <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
          </a>
          <ul class="dropdown-menu dropdown-tasks animated slideInUp">
            <li> <a href="#">
              <div>
                <p> <strong>Task 1</strong> <span class="pull-right text-muted">40% Complete</span> </p>
                <div class="progress progress-striped active">
                  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                </div>
              </div>
              </a> </li>
            <li class="divider"></li>
            <li> <a href="#">
              <div>
                <p> <strong>Task 2</strong> <span class="pull-right text-muted">20% Complete</span> </p>
                <div class="progress progress-striped active">
                  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"> <span class="sr-only">20% Complete</span> </div>
                </div>
              </div>
              </a> </li>
            <li class="divider"></li>
            <li> <a href="#">
              <div>
                <p> <strong>Task 3</strong> <span class="pull-right text-muted">60% Complete</span> </p>
                <div class="progress progress-striped active">
                  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"> <span class="sr-only">60% Complete (warning)</span> </div>
                </div>
              </div>
              </a> </li>
            <li class="divider"></li>
            <li> <a href="#">
              <div>
                <p> <strong>Task 4</strong> <span class="pull-right text-muted">80% Complete</span> </p>
                <div class="progress progress-striped active">
                  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> <span class="sr-only">80% Complete (danger)</span> </div>
                </div>
              </div>
              </a> </li>
            <li class="divider"></li>
            <li> <a class="text-center" href="#"> <strong>See All Tasks</strong> <i class="fa fa-angle-right"></i> </a> </li>
          </ul>
          <!-- /.dropdown-tasks -->
        </li>
        <!-- /.dropdown -->
        <li class="dropdown"> <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="../plugins/images/users/<?php echo $user['img'] ?>" alt="user-img" width="36" class="img-circle"><b class="hidden-xs"><?php echo ucfirst($user['lastname']) ?></b> </a>
          <ul class="dropdown-menu dropdown-user animated flipInY">
            <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
            <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
            <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="endactivity.php"><i class="fa fa-power-off"></i> Logout</a></li>
          </ul>
        </li>
        
      </ul>
    </div>
    <!-- /.navbar-header -->
    <!-- /.navbar-top-links -->
    <!-- /.navbar-static-side -->
  </nav>
  <!-- Left navbar-header -->
  <div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse slimscrollsidebar">
       <ul class="nav" id="side-menu">
        <li class="sidebar-search hidden-sm hidden-md hidden-lg">
          <!-- input-group -->
          <div class="input-group custom-search-form">
            <input type="text" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
            <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
            </span> </div>
          <!-- /input-group -->
        </li>
        <li class="user-pro"> <a href="#" class="waves-effect"><img src="../plugins/images/users/<?php echo $user['img'] ?>" alt="user-img"  class="img-circle"> <span class="hide-menu"><?php echo $user['firstname']." ".$user['lastname'] ;?><span class="fa arrow"></span></span></a>
          <!-- <ul class="nav nav-second-level">
            <li><a href="javascript:void(0)"><i class="ti-user"></i> My Profile</a></li>
            <li><a href="javascript:void(0)"><i class="ti-wallet"></i> My Balance</a></li>
            <li><a href="javascript:void(0)"><i class="ti-email"></i> Inbox</a></li>
            <li><a href="javascript:void(0)"><i class="ti-settings"></i> Account Setting</a></li>
            <li><a href="javascript:void(0)"><i class="fa fa-power-off"></i> Logout</a></li>
          </ul> -->
        </li>
        <li class="nav-small-cap m-t-10">--- Main Menu</li>
        <li> <a href="index.php" class="waves-effect active"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu"> Dashboard </span></a>
          <!-- <ul class="nav nav-second-level">
            <li> <a href="index.html">Demographical</a> </li>
            <li> <a href="index2.html">Minimalistic</a> </li>
            <li> <a href="index3.html">Analitical</a> </li>
            <li> <a href="index4.html">Simpler</a> </li>
          </ul> -->
        </li>
        <li><a href="#" class="waves-effect"><i data-icon=")" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Manage Pages <span class="fa arrow"></span></span></a>
          <ul class="nav nav-second-level">
            <li><a href="homepage.php">Homepage</a></li>
            <li><a href="about-page.php">About Us</a></li>
            <li><a href="contact-page.php">Contact</a>
            </li>
            <li><a href="javascript:void(0)" class="waves-effect">BLOG<span class="fa arrow"></span></a>
              <ul class="nav nav-third-level">
                <li> <a href="manage-post.php">Manage Article/Post</a></li>
                <li> <a href="add-post.php">Add new Post</a></li>
              </ul>
            </li>
            <li><a href="gallery-page.php">Gallery</a>
            </li>
          </ul>
        </li>
        <li> <a href="#" class="waves-effect"><i data-icon="/" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Users Level<span class="fa arrow"></span> </span></a>
          <ul class="nav nav-second-level">
            <li><a href="form-bootstrap-wysihtml5.html">Users</a></li>
            <li><a href="form-tinymce-wysihtml5.html">Moderators</a></li>
            <li><a href="form-tinymce-wysihtml5.html">Admin</a></li>
          </ul>
        </li>

        <li><a href="login.html" class="waves-effect"><i class="icon-logout fa-fw"></i> <span class="hide-menu">Log out</span></a></li>
      </ul>
    </div>
  </div>
  <!-- Left navbar-header end -->
  <!-- Page Content -->
<?php } ?>
  <div id="page-wrapper">
    <div class="container-fluid">