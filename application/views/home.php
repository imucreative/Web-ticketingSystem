<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Home
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Dashboard</h3>

          <div class="box-tools pull-right">
          </div>
        </div>
        <div class="box-body">
          
          <div class="col-md-10">
            <div class="callout callout-info">
              <p>Welcom in <?php echo get_data_info('name');?></p>
            </div>
          </div>
          <div class="col-md-2">
            <center>
            <img width="60%" src="<?php echo base_url();?>uploads/logo.png" alt="First slide">
            </center>
          </div>


          <!-- /.col -->
          <div class="col-md-12">
            <div class="box box-solid">
              <div class="box-header with-border">
                <h3 class="box-title"><?php echo get_data_info('name');?></h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                    <li data-target="#carousel-example-generic" data-slide-to="3" class=""></li>
                    <li data-target="#carousel-example-generic" data-slide-to="4" class=""></li>
                    <li data-target="#carousel-example-generic" data-slide-to="5" class=""></li>
                  </ol>
                  <div class="carousel-inner">
                    
                    <div class="item active">
                      <img src="<?php echo base_url();?>uploads/img/austrindo.jpg" alt="First slide">
                      <div class="carousel-caption">
                        <?php echo get_data_info('name');?>
                      </div>
                    </div>

                    <div class="item">
                      <img src="<?php echo base_url();?>uploads/img/austrindo2.jpg" alt="Second slide">
                      <div class="carousel-caption">
                        <?php echo get_data_info('name');?>
                      </div>
                    </div>

                    <div class="item">
                      <img src="<?php echo base_url();?>uploads/img/austrindo3.jpg" alt="Third slide">
                      <div class="carousel-caption">
                        <?php echo get_data_info('name');?>
                      </div>
                    </div>

                    <div class="item">
                      <img src="<?php echo base_url();?>uploads/img/austrindo4.jpg" alt="Third slide">
                      <div class="carousel-caption">
                        <?php echo get_data_info('name');?>
                      </div>
                    </div>

                    <div class="item">
                      <img src="<?php echo base_url();?>uploads/img/austrindo5.jpg" alt="Third slide">
                      <div class="carousel-caption">
                        <?php echo get_data_info('name');?>
                      </div>
                    </div>

                    <div class="item">
                      <img src="<?php echo base_url();?>uploads/img/austrindo6.jpg" alt="Third slide">
                      <div class="carousel-caption">
                        <?php echo get_data_info('name');?>
                      </div>
                    </div>

                  </div>
                  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="fa fa-angle-left"></span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                    <span class="fa fa-angle-right"></span>
                  </a>
                </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col -->



        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          &nbsp;
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>