<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Invoice
        <small>#<?php echo $this->uri->segment(3);?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>index.php/home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url();?>index.php/delivery">Delivery</a></li>
        <li class="active">Print Delivery</li>
      </ol>
    </section>

    

    <!-- Main content -->
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i> <?php echo get_data_info('name');?>
            <small class="pull-right"><?php echo tgl_indo(date('Y-m-d'));?></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      

      <div class="row">
        <!-- accepted payments column -->
        
        <!-- /.col -->
        <div class="col-xs-12">
          <p class="lead"><?php echo $vendor->name;?> | <?php echo tgl_indo($row->datesys);?></p>

          <div class="table-responsive">
            <table class="table">
              <tr>
                <th style="width:15%">Description</th>
                <td colspan='3'>: <?php echo $row->description;?></td>
              </tr>
              <tr>
                <th>Schedule</th>
                <td width="30%">: <?php echo tgl_indo($row->schedule);?></td>

                <th style="width:15%">Vehicle</th>
                <td width="30%">: <?php echo $vehicle->type." | ".$vehicle->policeNumber;?></td>
              </tr>
              
              <tr>
                <th>NIK</th>
                <td>: <?php echo $row->nik;?></td>

                <th style="width:15%">Driver</th>
                <td>: <?php echo $row->driver;?></td>
              </tr>
             
            </table>
            <br/>
            <table class="table">
              <tr>
                <td width='20%'>Created</td>
                <td width='20%'>In</td>
                <td width='20%'>Out</td>
              </tr>
              <tr>
                <td height="100px"></td>
                <td ></td>
                <td ></td>
              </tr>
              <tr>
                <td >---------------------------------------------</td>
                <td >---------------------------------------------</td>
                <td >---------------------------------------------</td>
              </tr>
            </table>

          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
        <a href="<?php echo base_url();?>index.php/delivery" class="btn btn-default" ><i class='fa fa-arrow-left'></i> Cancel</a>  
        <a href="<?php echo base_url();?>index.php/delivery/printDelivery/<?php echo $this->uri->segment(3);?>" target="_blank" class="btn btn-success"><i class="fa fa-print"></i> Print</a>
        
        </div>
      </div>
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
</div>
  <!-- /.content-wrapper -->