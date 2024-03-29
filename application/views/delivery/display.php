<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Delivery
        <small>it all starts here</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url();?>index.php/home"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?php echo base_url();?>index.php/delivery">Delivery</a></li>
            <li class="active">Display Delivery</li>

        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">

            <?php
                $attributes = array('class' => 'form-horizontal', 'id' => 'myform');
                echo form_open('#', $attributes);
            ?>

            <div class="box-header with-border">
                <h3 class="box-title">Display Delivery</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i></button>
                </div>
            </div>
            <div class="box-body">

                
                    
                <div class="form-group">
                    <label class="col-sm-1 control-label">Customer</label>
                    <div class="col-sm-11">
                        <input type="hidden" name="deliveryId" value="<?php echo $row->deliveryId;?>" required/>
                        <input type="text" name="vendor" class="form-control pull-right" id="vendor" placeholder="* Vendor" value="<?php echo $vendor->name;?>" readonly required>

                    </div>
                </div>
                    
                <div class="form-group">
                    <label class="col-sm-1 control-label">Description</label>
                    <div class="col-sm-11">
                        <textarea class="form-control" name="description" rows="4" placeholder="Enter ..." readonly required><?php echo $row->description;?></textarea>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-1 control-label">Schedule</label>
                    <div class="col-sm-5">
                        <div class="input-group date">
                            <input type="text" name="schedule" class="form-control pull-right" placeholder="* Schedule" value="<?php echo tgl_indo($row->schedule);?>" readonly required>
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                        </div>
                    </div>
                    <label class="col-sm-1 control-label">Vehicle</label>
                    <div class="col-sm-5">
                        <input type="text" name="vehicleId" class="form-control" placeholder="*" value="<?php echo $vehicle->type." | ".$vehicle->policeNumber;?>" readonly required/>
                    </div>
                    
                </div>
                    
                <div class="form-group">
                    <label class="col-sm-1 control-label">NIK</label>
                    <div class="col-sm-5">
                        <input type="text" name="nik" class="form-control" placeholder="* NIK" value="<?php echo $row->nik;?>" readonly required/>
                    </div>
                    <label class="col-sm-1 control-label">Driver</label>
                    <div class="col-sm-5">
                        <input type="text" name="driver" class="form-control" placeholder="* Driver" value="<?php echo $row->driver;?>" readonly required/>
                    </div>
                </div>

                <h4 class="page-header">&nbsp;</h4>

                <div class="form-group">
                    <label class="col-sm-1 control-label">In</label>
                    <div class="col-sm-5">
                        <input type="text" name="in" class="form-control" placeholder="*" value="<?php echo tgl_indo(substr($row->dateIn,0,10))." - ".substr($row->dateIn,-8);?>" readonly required/>
                    </div>
                    <label class="col-sm-1 control-label">Out</label>
                    <div class="col-sm-5">
                        <input type="text" name="out" class="form-control" placeholder="*" value="<?php echo tgl_indo(substr($row->dateOut,0,10))." - ".substr($row->dateOut,-8);?>" readonly required/>
                    </div>
                </div>

                

            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <a href="<?php echo base_url();?>index.php/delivery" class="btn btn-default" ><i class='fa fa-arrow-left'></i> Cancel</a>
                <?php
                    if($this->session->userdata('status') == 2){
                        if(empty($row->dateIn)){
                            echo anchor('delivery/in/'.$row->deliveryId, '<i class="fa fa-sign-in"></i> In', ["class"=>"btn btn-sm btn-warning pull-right", "title"=>"In", "onclick"=>"return confirm('Are you sure In this vendor?')"]);
                        }else if((isset($row->dateIn))&&(empty($row->dateOut))){
                            echo anchor("delivery/out/".$row->deliveryId, '<i class="fa fa-sign-out"></i> Out', ["class"=>"btn btn-sm btn-success pull-right", "title"=>"Out", "onclick"=>"return confirm('Are you sure Out this vendor?')"]);
                        }
                    }
                ?>
            </div>
            <!-- /.box-footer-->
            
            </form>

        </div>
        <!-- /.box -->

  </section>
  <!-- /.content -->
</div>