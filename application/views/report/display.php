<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Report
        <small>Report Recapitulation</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>index.php/home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url();?>index.php/report">Report</a></li>
        <li class="active">Print Display</li>
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
          <p class="lead">* <?php echo $vendor->name;?></p>

          <div class="table-responsive">
            <table class="table">
              <tr>
                <th style="width:15%">Address</th>
                <td colspan='3'>: <?php echo $vendor->address;?></td>
              </tr>
              <tr>
                <th>Telp.</th>
                <td width="30%">: <?php echo $vendor->telp;?></td>

                <th style="width:15%">Email</th>
                <td width="30%">: <?php echo $vendor->email;?></td>
              </tr>
              
              <tr>
                <th>Fax</th>
                <td>: <?php echo $vendor->fax;?></td>

                <th style="width:15%">NPWP</th>
                <td>: <?php echo $vendor->npwp;?></td>
              </tr>
             
            </table>
            

          </div>
        </div>
        <!-- /.col -->

        <!-- /.col -->
        <div class="col-xs-12">
          <p class="lead">* TRACK  <small>| From. <?php echo tgl_indo($from);?> - To. <?php echo tgl_indo($to);?></small></p>

          <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th width='7%'>#</th>
                        <th width='15%'><center>SCHEDULE</center></th>
                        <th width='20%'><center>VEHICLE</center></th>
                        <th width='15%'><center>NIK</center></th>
                        <th width='15%'><center>DRIVER</center></th>
                        <th width='14%'><center>IN</center></th>
                        <th width='14%'><center>OUT</center></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no = 1;
                        foreach ($result as $r){
                            $CI=&get_instance();
                            $CI->load->model('Vendor_model');
                            $CI->load->model('Vehicle_model');
                            $rowVendor    = $CI->Vendor_model->getVendorById($r->vendorId)->row();
                            $rowVehicle   = $CI->Vehicle_model->getById($r->vehicleId)->row();
                    ?>
                        <tr>
                            <?php
                              if(empty($r->dateIn)){
                            ?>
                              <td><a class="text-red" href="#"><i class="fa fa-square"></i> Prog</a></td>
                            <?php
                              }else if((isset($r->dateIn))&&(empty($r->dateOut))){
                            ?>
                              <td><a class="text-yellow" href="#"><i class="fa fa-square"></i> In</a></td>
                            <?php
                              }else{
                            ?>
                              <td><a class="text-green" href="#"><i class="fa fa-square"></i> Out</a></td>
                            <?php
                              }
                            ?>
                            <td align='center'><?php echo tgl_indo($r->schedule);?></td>
                            <td><?php echo $rowVehicle->type." | ".$rowVehicle->policeNumber;?></td>
                            <td align='center'><?php echo $r->nik;?></td>
                            <td><?php echo $r->driver;?></td>
                            <td><?php echo tgl_indo(substr($r->dateIn,0,10))." - ".substr($r->dateIn,-8);?></td>
                            <td><?php echo tgl_indo(substr($r->dateOut,0,10))." - ".substr($r->dateOut,-8);?></td>
                        </tr>
                    <?php
                        $no++;
                        }
                    ?>
                    
                </tbody>
            </table>
            

          </div>
        </div>
        <!-- /.col -->


      </div>
      <!-- /.row -->

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
        <a href="<?php echo base_url();?>index.php/report" class="btn btn-default" ><i class='fa fa-arrow-left'></i> Cancel</a>  
        <a href="<?php echo base_url();?>index.php/report/printReport/<?php echo $vendorId;?>/<?php echo ($vehicleId)?$vehicleId:"-";?>/<?php echo $from;?>/<?php echo $to;?>" target="_blank" class="btn btn-success"><i class="fa fa-print"></i> Print</a>
        
        </div>
      </div>
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
</div>
  <!-- /.content-wrapper -->