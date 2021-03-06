<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PARLANA</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" 	href="<?php echo base_url(); ?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" 	href="<?php echo base_url(); ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" 	href="<?php echo base_url(); ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">




</head>
<body class="hold-transition skin-blue sidebar-mini" style="font-family:arial;">
<div class="wrapper" style="font-family:arial">
  <header class="main-header" style="font-family:arial">
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" style="background:#000000; font-color:#ffc107;" >
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav" >
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg">

                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        AdminLTE Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo base_url(); ?>assets/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">

                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="left:-40px; margin-left:60px;">
                <img src="<?php echo base_url();?>assets/dist/img/usuario.png"/>
              <span class="hidden-xs">
                <?php
	               echo "".$this->session->userdata('name')."  ".$this->session->userdata('nickname');
                 ?>
              </span>
            </a>
            <ul class="dropdown-menu" style="background:#000000;">
              <!-- User image -->
              <li class="user-header" style="background:#000000;">
                  <img src="<?php echo base_url();?>assets/dist/img/usuario.png"/>
                <p>
                  <?php
  	               echo "".$this->session->userdata('name')."  ".$this->session->userdata('nickname');
                   ?>
                  <small>Udenar</small>
                  <small>2019</small>
                </p>
              </li>
              <!-- Menu Body -->

              <!-- Menu Footer-->
              <li class="user-footer">
                <!-- <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div> -->
                <div class="pull-right">
                  <a href="<?php echo base_url();?>usuarios/cerrar" class='btn btn-default btn-flat' style="background:#4DB6AC">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->

        </ul>
      </div>
    </nav>
    <!--hasta a qui llega la barra superior-->
  </header>

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar" style="background:#000000; font-family: Arial " >
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div style="margin-top:-30px;" class="user-panel">
        <div class="pull-left info">
          <div style="margin-top:-30px;" class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo base_url();?>assets/dist/img/p.png"/>
            </div>
            <div class="pull-left info">

              <a class="navbar-brand" href="#" style="font-size:16px;"><i><strong></strong></i><strong >PAR</strong>LANA</a>
              <!-- <a href="#"><i class="fa fa-circle text-success"></i> Online</a> -->
            </div>
          </div>

        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <br>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PANEL  NAVIGATION</li><br>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <!-- <li><a href="<?php echo base_url ();?>administrador/functionadmin" class="fa fa-circle-o">&nbsp;&nbsp;&nbsp;Admin</a><li> -->
                <li><a href="<?php echo base_url ();?>C_administrador/functionuser" class="fa fa-circle-o">&nbsp;&nbsp;&nbsp;Management</a><li>

              <!-- <li><a href="<?php echo base_url ();?>Welcome/information" class="fa fa-circle-o">&nbsp;&nbsp;&nbsp;Test Information B1 </a><li> -->
              <!-- <li><a href="<?php echo base_url ();?>Welcome/datos" class="fa fa-circle-o">&nbsp;&nbsp;&nbsp;Graphics by Level</a><li>
               <li><a href="<?php echo base_url ();?>Welcome/graficos" class="fa fa-circle-o">&nbsp;&nbsp;&nbsp;Graficos</a><li> -->
                <!-- <li><a href="<?php echo base_url ();?>Welcome/themes" class="fa fa-circle-o">&nbsp;&nbsp;&nbsp;Graphics by Themes</a><li>
                <li><a href="<?php echo base_url ();?>Welcome/report" class="fa fa-circle-o">&nbsp;&nbsp;&nbsp;Report Themes</a><li> -->
              <!-- <li><a href="<?php echo base_url ();?>Welcome/prueba" class="fa fa-circle-o">&nbsp;&nbsp;&nbsp;prueba</a><li> -->
            <!-- <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li> -->
          </ul>
        </li>


        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Statistics</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a href="<?php echo base_url ();?>Welcome/themesadmin" class="fa fa-circle-o">&nbsp;&nbsp;&nbsp;Graph by Quantity</a><li>
              <li><a href="<?php echo base_url ();?>Welcome/graphicstudents" class="fa fa-circle-o">&nbsp;&nbsp;&nbsp;Graphics by Level</a><li>
              <!-- <li><a href="<?php echo base_url ();?>Welcome/graficos" class="fa fa-circle-o">&nbsp;&nbsp;&nbsp;Graficos</a><li> -->


            <!-- <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
            <li><a href="pages/charts/prueba.php"><i class="fa fa-circle-o"></i> Flot</a></li>
            <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li> -->
          </ul>
        </li>

        <!--empieza nueva para historial de usuario-->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>General Report</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <!-- <li><a href="<?php echo base_url ();?>Welcome/listadmin" class="fa fa-circle-o">&nbsp;&nbsp;&nbsp;List of Admins</a><li> -->
            <li><a href="<?php echo base_url ();?>Welcome/reportstudents" class="fa fa-circle-o">&nbsp;&nbsp;&nbsp;Students Report</a><li>

            <!-- <li><a href="<?php echo base_url ();?>inicio/historial"><i class="fa fa-circle-o"></i>Tu Historial</a></li> -->
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Create Report</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url ();?>Welcome/createreport" class="fa fa-circle-o">&nbsp;&nbsp;&nbsp;Level</a><li>
            <!-- <li><a href="<?php echo base_url ();?>Welcome/reportstudents" class="fa fa-circle-o">&nbsp;&nbsp;&nbsp;Students Report</a><li> -->

            <!-- <li><a href="<?php echo base_url ();?>inicio/historial"><i class="fa fa-circle-o"></i>Tu Historial</a></li> -->
          </ul>
        </li>

        <!--termina para historial de usuario-->



        <!-- <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li> -->
        <!-- <li><a href="<?php echo base_url ();?>Welcome/information" class="fa fa-book">&nbsp;&nbsp;&nbsp;Test Information B1 </a><li> -->

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <!--tenemos el contenido priciopal-->
    <!-- /.content -->

  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->



<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<!-- Bootstrap 3.3.7 -->

<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url(); ?>assets/bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->

<script src="<?php echo base_url(); ?>assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->

<script src="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url(); ?>assets/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url(); ?>assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>
</body>
</html>
