<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Form Employees </title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
  <link href="css/bootstrap-datepicker.css" rel="stylesheet" />
  <link href="css/daterangepicker.css" rel="stylesheet" />
 
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->
    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="profile.php" class="logo">Alkha <span class="lite">Creative</span></a>
      <!--logo end-->

      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
          <li>
            <form class="navbar-form">
              <input class="form-control" placeholder="Search" type="text">
            </form>
          </li>
        </ul>
        <!--  search form end -->
      </div>

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          <!-- task notificatoin start -->
          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/avatarsmall.jpg">
                            </span>
                            <span class="username">Lukmanul Hakim</span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="profile.php"><i class="icon_profile"></i> My Profile</a>
              </li>
              <li>
                <a href="index.php"><i class="icon_key_alt"></i> Log Out</a>
              </li>
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="profile.php">
                          <i class="icon_house_alt"></i>
                          <span>Profile</span>
                      </a>
          </li>
          <li>
            <a class="" href="form_validation.php">
                          <i class="icon_documents_alt"></i>
                          <span>Form</span>
                      </a>
          </li>
          <li>
            <a class="" href="basic_table.php">
                          <i class="icon_table"></i>
                          <span>List</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Department</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="technology.php? id=1">Technology Information</a></li>
              <li><a class="" href="production.php? id=2"><span>Production</span></a></li>
              <li><a class="" href="marketing.php? id=3"><span>Marketing</span></a></li>
              <li><a class="" href="finance.php? id=4">Finance</a></li>
              <li><a class="" href="person.php? id=5">Person</a></li>
            </ul>          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-files-o"></i> Form Employees</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="profile.php">Home</a></li>
              <li><i class="fa fa-files-o"></i>Form Employees</li>
            </ol>
          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Form Employees
              </header>
              <div class="panel-body">
                <div class="form">
                  <form role="form" class="form-validate form-horizontal" method="POST" action="input.php" enctype="multipart/form-data">
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">NIP <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="form_nip" name="nip" minlength="5" type="text" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Full Name <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="form_nama" name="nama" minlength="5" type="text" required />
                      </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2">Date<span class="required">*</span></label>
                        <div class="col-lg-10">
                          <input id="dp1" type="text" name="tgl" size="16" class="form-control">
                        </div>
                    </div>
                    <div class="form-group ">
                      <label for="ccomment" class="control-label col-lg-2">Address<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <textarea class="form-control " id="form_alamat" name="alamat" required></textarea>
                      </div>
                    </div>

                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">City <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="form_kota" name="kota" minlength="5" type="text" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Contact <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="form_kontak" name="kontak" minlength="5" type="text" required />
                      </div>
                    </div>

                    <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Department<span class="required">*</span></label>
                    <div class="col-lg-10">
                      <select class="form-control m-bot15" name="departemen">
                        <option>
                        <?php 
                          include'koneksi.php';
                          $proses = $mysqli->query("SELECT * FROM departemen");
                          while ($data = $proses->fetch_object()) {
                         ?> 
                          <option value="<?php echo $data->nama ?>">
                            <?php echo $data->nama ?>
                          </option>
                         <?php } ?>
                       </select>
                    </div>
                  </div>

                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" type="submit" name="input">Save</button>
                      </div>
                    </div>
                  </form>
                </div>

              </div>
            </section>
          </div>
        </div>
        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
    
  </section>
  <!-- container section end -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>

  <!-- jquery ui -->
  <script src="js/jquery-ui-1.9.2.custom.min.js"></script>

  <!--custom checkbox & radio-->
  <script type="text/javascript" src="js/ga.js"></script>
  <!--custom switch-->
  <script src="js/bootstrap-switch.js"></script>
  <!--custom tagsinput-->
  <script src="js/jquery.tagsinput.js"></script>

  <!-- colorpicker -->

  <!-- bootstrap-wysiwyg -->
  <script src="js/jquery.hotkeys.js"></script>
  <script src="js/bootstrap-wysiwyg.js"></script>
  <script src="js/bootstrap-wysiwyg-custom.js"></script>
  <script src="js/moment.js"></script>
  <script src="js/bootstrap-colorpicker.js"></script>
  <script src="js/daterangepicker.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <!-- ck editor -->
  <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
  <!-- custom form component script for this page-->
  <script src="js/form-component.js"></script>
  <!-- custome script for all page -->
  <script src="js/scripts.js"></script>

</body>

</html>
