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
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>template/AdminLTE/dist/css/AdminLTE.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body onload="window.print();">
<div class="wrapper">
  <!-- Main content -->
  
  
  <!-- Main content -->
  <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i> <?php echo get_data_info('name');?>
            <small class="pull-right">Date: <?php echo tgl_indo(date('Y-m-d'));?></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      



      <?php echo $contents; ?>





      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <button type="button" class="btn btn-sm btn-success" onclick="window.print()"><i class="fa fa-print"></i> Print</button>
        </div>
      </div>
    </section>
    
  <!-- /.content -->
</div>
<!-- ./wrapper -->
</body>
</html>
