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
            <li class="active">Input Customer</li>

        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">

            <?php
                $attributes = array('class' => 'form-horizontal', 'id' => 'myform');
                echo form_open('vendor/post', $attributes);
            ?>

            <div class="box-header with-border">
                <h3 class="box-title">Input Customer</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i></button>
                </div>
            </div>
            <div class="box-body">

                <div class="form-group">
                    <label class="col-sm-1 control-label">Customer</label>
                        
                    <div class="col-sm-11">
                        <input type="text" name="name" class="form-control" placeholder="* Name" required/>
                    </div>
                </div>
                    
                <div class="form-group">
                    <label class="col-sm-1 control-label">Category</label>
                    <div class="col-sm-11">
                        <select class="form-control" name="categoryId">
                            <?php
                                foreach ($category as $cat){
                                    echo "<option value='$cat->categoryId'>$cat->name</option>";
                                }
                            ?>
                        </select>
                    </div>
                </div>
                    
                <div class="form-group">
                    <label class="col-sm-1 control-label">Description</label>
                    <div class="col-sm-11">
                        <input type="text" name="description" class="form-control" placeholder="* Description" required/>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-1 control-label">Address</label>
                    <div class="col-sm-11">
                        <input type="text" name="address" class="form-control" placeholder="* Address" required/>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-1 control-label">Telp.</label>
                    <div class="col-sm-5">
                        <input type="text" name="telp" class="form-control" placeholder="* Telp" required/>
                    </div>
                    <label class="col-sm-1 control-label">Fax</label>
                    <div class="col-sm-5">
                        <input type="text" name="fax" class="form-control" placeholder="* Fax" required/>
                    </div>
                    
                </div>
                    
                <div class="form-group">
                    <label class="col-sm-1 control-label">Email</label>
                    <div class="col-sm-5">
                        <input type="text" name="email" class="form-control" placeholder="* Email" required/>
                    </div>
                    <label class="col-sm-1 control-label">NPWP</label>
                    <div class="col-sm-5">
                        <input type="text" name="npwp" class="form-control" placeholder="* NPWP" required/>
                    </div>
                </div>

                <h4 class="page-header">Input Data User</h4>

                <div class="form-group">
                    <label class="col-sm-1 control-label">Name</label>
                    <div class="col-sm-11 has-error">
                        <input type="text" name="name_user" class="form-control" placeholder="* Name" required/>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-1 control-label">Username</label>
                    <div class="col-sm-5">
                        <div class="has-feedback has-error">
                            <input type="text" name="username" class="form-control" placeholder="* Username" required/>
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                    </div>
                    <label class="col-sm-1 control-label">Password</label>
                    <div class="col-sm-5">
                        <div class="has-feedback has-error">
                            <input type="password" name="password" class="form-control" placeholder="* Password" required/>
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <a href="<?php echo base_url();?>index.php/vendor" class="btn btn-default" ><i class='fa fa-arrow-left'></i> Cancel</a>
                <button class="btn btn-primary pull-right" type="submit" name="submit"><i class='fa fa-save'></i> Save</button>      
            </div>
            <!-- /.box-footer-->
            
            </form>

        </div>
        <!-- /.box -->

  </section>
  <!-- /.content -->
</div>