<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Customer
        <small>it all starts here</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url();?>index.php/home"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?php echo base_url();?>index.php/vendor">Customer</a></li>
            <li class="active">Display Customer</li>

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
                <h3 class="box-title">Edit Customer</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i></button>
                </div>
            </div>
            <div class="box-body">

                    
                    <div class="form-group">
                        <label class="col-sm-1 control-label">Customer</label>
                        <div class="col-sm-1">
                            <input type="text" name="vendorId" class="form-control" placeholder="* Code" value="<?php echo $row->vendorId;?>" readonly required/>
                        </div>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" placeholder="* Name" value="<?php echo $row->name;?>" readonly required/>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-1 control-label">Category</label>
                        <div class="col-sm-11">
                            <input type="text" name="categoryId" class="form-control" placeholder="* Category" value="<?php echo $category->name;?>" readonly required/>

                            
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-1 control-label">Description</label>
                        <div class="col-sm-11">
                            <input type="text" name="description" class="form-control" placeholder="* Description" value="<?php echo $row->description;?>" readonly required/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-1 control-label">Address</label>
                        <div class="col-sm-11">
                            <input type="text" name="address" class="form-control" placeholder="* Address" value="<?php echo $row->address;?>" readonly required/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-1 control-label">Telp.</label>
                        <div class="col-sm-5">
                            <input type="text" name="telp" class="form-control" placeholder="* Telp" value="<?php echo $row->telp;?>" readonly required/>
                        </div>
                        <label class="col-sm-1 control-label">Fax</label>
                        <div class="col-sm-5">
                            <input type="text" name="fax" class="form-control" placeholder="* Fax" value="<?php echo $row->fax;?>" readonly required/>
                        </div>
                        
                    </div>

                    <div class="form-group">
                        <label class="col-sm-1 control-label">Email</label>
                        <div class="col-sm-5">
                            <input type="text" name="email" class="form-control" placeholder="* Email" value="<?php echo $row->email;?>" readonly required/>
                        </div>
                        <label class="col-sm-1 control-label">NPWP</label>
                        <div class="col-sm-5">
                            <input type="text" name="npwp" class="form-control" placeholder="* NPWP" value="<?php echo $row->npwp;?>" readonly required/>
                        </div>
                        
                    </div>
                    
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <a href="<?php echo base_url();?>index.php/vendor" class="btn btn-default" ><i class='fa fa-arrow-left'></i> Cancel</a>
            </div>
            <!-- /.box-footer-->
            
            </form>

        </div>
        <!-- /.box -->

  </section>
  <!-- /.content -->
</div>