<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>List Employees</title>

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
            </ul>
          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
        <!-- sidebar menu end-->
      </div>
    </aside>

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i> EMPLOYEES ALKHA CREATIVE</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="profile.php">Home</a></li>
              <li><i class="fa fa-th-list"></i>List Employees</li>
            </ol>
          </div>
        </div>
        <!-- page start-->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                List Employees
              </header>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th><i class="icon_key_alt"></i> NIP</th>
                      <th><i class="icon_profile"></i> Name</th>
                      <th><i class="icon_calendar"></i> Date</th>
                      <th><i class="icon_pin_alt"></i> City</th>
                      <th><i class="icon_mobile"></i> Contact</th>
                      <th><i class="icon_menu"></i> Departement</th>
                      <th><i class="icon_cogs"></i> Action</th>
                    </tr>
                  </thead>
                  <tbody>
                     <?php include 'koneksi.php';
                        $proses=$mysqli->query("SELECT nip, nama, tgl, kota, kontak, departemen from karyawan");
                        ?>
                        <?php while ($data=$proses->fetch_object()) {?>
                    <tr>
                      <td><?php echo $data->nip?></td>
                      <td><?php echo $data->nama?></td>
                      <td><?php echo $data->tgl?></td>
                      <td><?php echo $data->kota?></td>
                      <td><?php echo $data->kontak?></td>
                      <td><?php echo $data->departemen?></td>
                      <td>
                        <div class="btn-group">
                          <a class="btn btn-primary" href="form_update.php? nip=<?php echo $data->nip ?>"><i class="icon_documents_alt"></i></a>
                          <a class="btn btn-success" href="form_view.php? nip=<?php echo $data->nip ?>" ><i class="icon_book_alt"></i></a>
                          <a class="btn btn-danger" onclick="return confirm('Yakin akan menghapus data ini ?')" href="delete.php?nip=<?php echo $data->nip?>"><i class="icon_close_alt2"></i></a>
                        </div>
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </section>
          </div>
        </div>
        <!-- page end-->
      </section>
    </section>
    
  </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nicescroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>


</body>

</html>
