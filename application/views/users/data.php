<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Users
            <small>it all starts here</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url();?>index.php/home"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Users</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Data Users</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i></button>
                    
                </div>
            </div>
            <div class="box-body">
          
                <table class="table table-striped table-hover usersTable" >
                    <thead>
                        <tr>
                            <th width='10%'><center>NO</center></th>
                            <th width='30%'><center>NAME</center></th>
                            <th width='20%'><center>USERNAME</center></th>
                            <th width='10%'><center>STATUS</center></th>
                            <th width='15%'><center>VENDOR</center></th>
                            <th width='15%'>
                                <center>
                                    <button class="btn btn-primary btn-sm" onclick="addUsers()"><i class="fa fa-plus"></i> Input</button>
                                </center>
                            </th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        
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


<div class="modal fade" id="modal-form-users" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="#" id="form" >
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">Users Form</h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" value="" name="userId"/> 
                    <div class="form-group"><label>* Name</label> 
                        <input type="text" name="name" placeholder="Name" class="form-control name" />
                        <span class="help-block"></span>
                    </div>
                    <div class="form-group"><label>* Username</label> 
                      <div class="form-group has-feedback">
                        <input type="text" name="username" placeholder="Username" class="form-control username" />
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                      </div>
                        <span class="help-block"></span>
                    </div>
                    <div class="form-group"><label>* Password</label> 
                        <div class="form-group has-feedback">
                          <input type="password" name="password" placeholder="Password" class="form-control password" />
                          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>
                        <span class="help-block"></span>
                    </div>
                    

                    <div class="form-group statusUser"><label>* Status</label> 
                      <select class="form-control" name="status">
                          <?php
                              foreach ($status as $stat){
                                  echo "<option value='$stat->statusId'>$stat->name</option>";
                              }
                          ?>
                      </select>
                    </div>

                    <div class="form-group vendor"><label>* Vendor</label> 
                      <select class="form-control" name="vendorId">
                          <?php
                              foreach ($vendor as $vend){
                                  echo "<option value='$vend->vendorId'>$vend->name</option>";
                              }
                          ?>
                      </select>
                    </div>

                    <div class="form-group dispStatusUser"><label>* Status</label> 
                      <input type="text" readonly placeholder="Status" class="form-control status" />
                    </div>

                    <div class="form-group dispVendor"><label>* Vendor</label> 
                      <input type="text" readonly placeholder="Vendor" class="form-control vendorName" />
                    </div>

                    

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    <button type="button" class="btn btn-primary"  id="btnSave" onclick="save()"><i class="fa fa-save"></i> Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

