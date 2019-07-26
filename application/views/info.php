<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Info
      <small>it all starts here</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url();?>index.php/home"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Info Company</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      
      <?php
          echo form_open('info', "class='form-horizontal'");
      ?>

        <div class="box-header with-border">
          <h3 class="box-title">Info Company</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">
          
          
              <input type="hidden" name="infoId" value="<?php echo $row->infoId;?>" />
              
              <div class="form-group">
                  <label class="col-sm-1 control-label">Name</label>
                  <div class="col-sm-7">
                      <input type="text" placeholder="* Name" name="name" class="form-control" value="<?php echo $row->name;?>" required />
                  </div>

                  <label class="col-sm-1 control-label">Alias</label>
                  <div class="col-sm-3">
                      <input type="text" placeholder="* Alias" name="alias" class="form-control" value="<?php echo $row->alias;?>" required />
                  </div>
              </div>

              <div class="hr-line-dashed"></div>

              <div class="form-group">
                  <label class="col-sm-1 control-label">Address</label>
                  <div class="col-sm-11">
                      <input type="text" placeholder="* Address" name="address" class="form-control" value="<?php echo $row->address;?>" required /> 
                  </div>
              </div>

              <div class="hr-line-dashed"></div>
              
              <div class="form-group">
                  <label class="col-sm-1 control-label">Telp.</label>
                  <div class="col-sm-3">
                      <input type="text" placeholder="* Telp" name="telp" class="form-control" value="<?php echo $row->telp;?>" required />
                  </div>

                  <label class="col-sm-1 control-label">Fax.</label>
                  <div class="col-sm-3">
                      <input type="text" placeholder="* Fax" name="fax" class="form-control" value="<?php echo $row->fax;?>" required />
                  </div>

                  <label class="col-sm-1 control-label">Email</label>
                  <div class="col-sm-3">
                      <input type="text" placeholder="* Email" name="email" class="form-control" value="<?php echo $row->email;?>" required />
                  </div>
              </div>
              <div class="hr-line-dashed"></div>
  <!--
              <div class="form-group">
                  <label class="col-sm-1 control-label">Logo</label>
                  <div class="col-sm-1">
                      <img width='100%' src="<?php //echo base_url();?>uploads/<?php //echo $row->logo;?>"/>
                  </div>
                  <div class="col-sm-7">
        <input type="file" id="form-field-6" name="userfile" class="file-input" required/>
                  </div>
                  
              </div>
              <div class="hr-line-dashed"></div>
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