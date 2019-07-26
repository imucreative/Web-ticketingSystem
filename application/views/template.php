<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo get_data_info('name');?></title>
  <link rel="shortcut icon" href="<?php echo base_url()."uploads/".get_data_info('logo');?>" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url()?>template/AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>template/AdminLTE/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url()?>template/AdminLTE/bower_components/Ionicons/css/ionicons.min.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url()?>template/AdminLTE/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url()?>template/AdminLTE/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url()?>template/AdminLTE/bower_components/select2/dist/css/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>template/AdminLTE/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url()?>template/AdminLTE/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  </head>
<body class="hold-transition skin-blue fixed sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url();?>index.php/home" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><?php echo get_data_info("alias");?></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><?php echo get_data_info("name");?></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url();?>uploads/profile.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $this->session->userdata('name');?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url();?>uploads/profile.png" class="img-circle" alt="User Image">

                <p>
                  <?php echo $this->session->userdata('name');?>
                  <small><?php echo get_status_user('name', $this->session->userdata('status'));?></small>
                </p>
              </li>
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo base_url();?>index.php/info/profile" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url();?>index.php/auth/logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>uploads/profile.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('name');?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> <?php echo get_status_user('name', $this->session->userdata('status'));?></a>
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li><a href="<?php echo base_url();?>index.php/home"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        
        <li>
          <a href="<?php echo base_url();?>index.php/delivery">
            <i class="fa fa-truck"></i> <span>Info Delivery</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-blue">&nbsp;</small>
            </span>
          </a>
        </li>

        <?php
          if(($this->session->userdata('status')==1)||($this->session->userdata('status')==2)){
        ?>
        <li>
          <a href="<?php echo base_url();?>index.php/vendor">
            <i class="fa fa-building"></i> <span>Vendor</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">&nbsp</small>
            </span>
          </a>
        </li>
        <?php
          }
        ?>

        <?php
          if($this->session->userdata('status')==1){
        ?>
          <li class="header">MASTER DATA</li>
          <li><a href="<?php echo base_url();?>index.php/category"><i class="fa fa-circle-o text-red"></i> <span>Category</span></a></li>
          <li><a href="<?php echo base_url();?>index.php/users"><i class="fa fa-circle-o text-yellow"></i> <span>Users</span></a></li>
          <li><a href="<?php echo base_url();?>index.php/info"><i class="fa fa-circle-o text-aqua"></i> <span>Info</span></a></li>
        <?php
          }
        ?>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->

    <?php echo $contents; ?>
    
    <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2019 <a href="<?php echo base_url();?>index.php/home"><?php echo get_data_info("name");?></a>.</strong> All rights
    reserved.
  </footer>

  
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url()?>template/AdminLTE/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url()?>template/AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url()?>template/AdminLTE/bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url()?>template/AdminLTE/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url()?>template/AdminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>template/AdminLTE/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url()?>template/AdminLTE/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url()?>template/AdminLTE/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>template/AdminLTE/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()?>template/AdminLTE/dist/js/demo.js"></script>

<!-- customer ajax -->
<script src="<?php echo base_url()?>template/AdminLTE/dist/js/jsCustomCategory.js"></script>
<script src="<?php echo base_url()?>template/AdminLTE/dist/js/jsCustomUsers.js"></script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree();
    $('.myTable').DataTable();
    $('#schedule').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd'
    });
  })
</script>
</body>
</html>