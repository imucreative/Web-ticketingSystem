<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Info
      <small>it all starts here</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url();?>index.php/home"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Info Profile</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">

      <?php
          echo form_open('info/saveProfile', "class='form-horizontal'");
      ?>

        <div class="box-header with-border">
          <h3 class="box-title">Info Profile</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">
          
          
              <input type="hidden" name="userId" value="<?php echo $this->session->userdata('userId');?>" />
              
              <div class="form-group">
                  <label class="col-sm-1 control-label">Name</label>
                  <div class="col-sm-11">
                      <input type="text" placeholder="* Name" name="name" class="form-control" value="<?php echo $this->session->userdata('name');?>" required readonly />
                  </div>

                  
              </div>

              <div class="hr-line-dashed"></div>

              <div class="form-group">
                  <label class="col-sm-1 control-label">Username</label>
                  <div class="col-sm-5">
                      <div class="input-group m-b">
                          <span class="input-group-addon"><i class="fa fa-user"></i></span> 
                          <input type="text" placeholder="* Username" name="username" class="form-control" value="<?php echo $this->session->userdata('username');?>" required readonly /> 
                      </div>    
                  </div>

                  <label class="col-sm-1 control-label">Password</label>
                  <div class="col-sm-5">
                      <div class="input-group m-b">
                          <span class="input-group-addon"><i class="fa fa-lock"></i></span> 
                          <input type="password" placeholder="* Password" name="password" class="form-control" value="" maxlength='20' required /> 
                      </div>
                  </div>
              </div>

              <div class="hr-line-dashed"></div>
              
              <div class="form-group">
                  <label class="col-sm-1 control-label">Status</label>
                  <div class="col-sm-11">
                    <input type="text" placeholder="* Status" name="status" class="form-control" value="<?php echo get_status_user('name', $this->session->userdata('status'));?>" required readonly /> 
                  </div>

              <!--
              <div class="hr-line-dashed"></div>

              <div class="form-group">
                  <label class="col-sm-1 control-label">Logo</label>
                  <div class="col-sm-11">
                      <input type="text" placeholder="Logo" name="logo" class="form-control" value="<?php echo $row->logo;?>" />
                  </div>
              </div>
              -->

              
          

        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button class="btn btn-primary pull-right" name="submit" type="submit"><div class="fa fa-save"></div> Save changes</button>
        </div>
      </form>
      <!-- /.box-footer-->
    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
</div>