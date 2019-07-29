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
            <li class="active">Input Delivery</li>

        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">

            <?php
                $attributes = array('class' => 'form-horizontal', 'id' => 'myform');
                echo form_open('delivery/post', $attributes);
            ?>

            <div class="box-header with-border">
                <h3 class="box-title">Input Delivery</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i></button>
                </div>
            </div>
            <div class="box-body">

                
                    
                <div class="form-group">
                    <label class="col-sm-1 control-label">Customer</label>
                    <div class="col-sm-11">
                        <?php
                            $CI=&get_instance();
                            $CI->load->model('Vendor_model');
                            $rowVendor    = $CI->Vendor_model->getVendorById($this->session->userdata('vendorId'))->row();
                        ?>
                        <input type="hidden" name="vendorId" value="<?php echo $this->session->userdata('vendorId');?>" required/>
                        <input type="text" name="vendor" class="form-control pull-right" id="vendor" placeholder="* Vendor" value="<?php echo $rowVendor->name;?>" readonly required>

                        <?php /* <select class="form-control" name="vendorId">
                            <?php
                                foreach ($vendor as $vend){
                                    echo "<option value='$vend->vendorId'>$vend->name</option>";
                                }
                            ?>
                        </select> */ ?>
                    </div>
                </div>
                    
                <div class="form-group">
                    <label class="col-sm-1 control-label">Description</label>
                    <div class="col-sm-11">
                        <textarea class="form-control" name="description" rows="4" placeholder="Enter ..." required></textarea>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-1 control-label">Schedule</label>
                    <div class="col-sm-5">
                        <div class="input-group date">
                            <input type="text" name="schedule" class="form-control pull-right" id="schedule" placeholder="* Schedule" readonly required>
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                        </div>
                    </div>
                    <label class="col-sm-1 control-label">No.Police</label>
                    <div class="col-sm-5">
                        <input type="text" name="policeNumber" class="form-control" placeholder="* X-XXXX-XX" required/>
                    </div>
                    
                </div>
                    
                <div class="form-group">
                    <label class="col-sm-1 control-label">NIK</label>
                    <div class="col-sm-5">
                        <input type="text" name="nik" class="form-control" placeholder="* NIK" required/>
                    </div>
                    <label class="col-sm-1 control-label">Driver</label>
                    <div class="col-sm-5">
                        <input type="text" name="driver" class="form-control" placeholder="* Driver" required/>
                    </div>
                </div>

                

            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <a href="<?php echo base_url();?>index.php/delivery" class="btn btn-default" ><i class='fa fa-arrow-left'></i> Cancel</a>
                <button class="btn btn-primary pull-right" type="submit" name="submit"><i class='fa fa-save'></i> Save</button>      
            </div>
            <!-- /.box-footer-->
            
            </form>

        </div>
        <!-- /.box -->

  </section>
  <!-- /.content -->
</div>