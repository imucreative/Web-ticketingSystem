<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
    Delivery
    <small>it all starts here</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url();?>index.php/home"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Delivery</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Data Delivery</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fa fa-minus"></i></button>
        </div>
      </div>
      <div class="box-body">

        <table class="table table-striped table-hover myTable" >
            <thead>
                <tr>
                    <th width='7%'></th>
                    <th width='19%'><center>CUSTOMER</center></th>
                    <th width='13%'><center>SCHEDULE</center></th>
                    <th width='19%'><center>VEHICLE</center></th>
                    <th width='13%'><center>NIK</center></th>
                    <th width='13%'><center>DRIVER</center></th>
                    <th width='16%'>
                        <?php 
                          $stat = $this->session->userdata('status');
                          if($stat == 3){
                        ?>
                        <center>
                            <a href="<?php echo base_url();?>index.php/delivery/post" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Input</a>
                        </center>
                        <?php 
                            } 
                        ?>
                    </th>
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
                            <td><?php echo $rowVendor->name;?></td>
                            <td><?php echo tgl_indo($r->schedule);?></td>
                            <td><?php echo $rowVehicle->type." | ".$rowVehicle->policeNumber;?></td>
                            <td align='center'><?php echo $r->nik;?></td>
                            <td><?php echo $r->driver;?></td>
                            <td align='center'>
                                
                                <?php
                                    if($stat == 3){
                                        if(empty($r->dateIn)){
                                          echo anchor('delivery/edit/'.$r->deliveryId, '<i class="fa fa-edit"></i>', 'class="btn btn-sm btn-info" title="Edit"')." | ".
                                          anchor("delivery/delete/".$r->deliveryId, '<i class="fa fa-trash-o"></i>', ["class"=>"btn btn-sm btn-danger", "title"=>'Delete', "onclick"=>"return confirm('Are you sure delete this data?')"])." | ".
                                          anchor('delivery/printDelivery/'.$r->deliveryId, '<i class="fa fa-print"></i>', 'class="btn btn-sm btn-default" title="Print"');
                                        }else{
                                          echo anchor('delivery/display/'.$r->deliveryId, '<i class="fa fa-search"></i>', 'class="btn btn-sm btn-info" title="Display"')." | ".
                                          anchor('delivery/printDelivery/'.$r->deliveryId, '<i class="fa fa-print"></i>', 'class="btn btn-sm btn-default" title="Print"');
                                        }
                                    }elseif($stat == 2){
                                      if(empty($r->dateIn)){
                                        echo anchor('delivery/display/'.$r->deliveryId, '<i class="fa fa-search"></i>', 'class="btn btn-sm btn-info" title="Display"')." | ".
                                        anchor('delivery/in/'.$r->deliveryId, '<i class="fa fa-sign-in"></i>', ["class"=>"btn btn-sm btn-warning", "title"=>"In", "onclick"=>"return confirm('Are you sure In this vendor?')"]);
                                        
                                      }else if((isset($r->dateIn))&&(empty($r->dateOut))){
                                        echo anchor('delivery/display/'.$r->deliveryId, '<i class="fa fa-search"></i>', 'class="btn btn-sm btn-info" title="Display"')." | ".
                                        anchor("delivery/out/".$r->deliveryId, '<i class="fa fa-sign-out"></i>', ["class"=>"btn btn-sm btn-success", "title"=>"Out", "onclick"=>"return confirm('Are you sure Out this vendor?')"]);
                                        
                                      }else{
                                        echo anchor('delivery/display/'.$r->deliveryId, '<i class="fa fa-search"></i>', 'class="btn btn-sm btn-info" title="Display"');
                                      }

                                    }else{
                                        echo anchor('delivery/display/'.$r->deliveryId, '<i class="fa fa-search"></i>', 'class="btn btn-sm btn-info" title="Display"');
                                    }
                                    
                                ?>
                                
          </td>
                        </tr>
                <?php
                    $no++;
                    }
                ?>
            </tbody>
            
        </table>

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