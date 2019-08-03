<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Report
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Report</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
    <div class="box">
      
      <?php
          echo form_open('report/printDisplay', "class='form-horizontal'");
      ?>

        <div class="box-header with-border">
          <h3 class="box-title">Report Recapitulation Delivery</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">
          
          
              
              <div class="form-group">
                  <label class="col-sm-1 control-label">Customer</label>
                  <div class="col-sm-11">
                      <select class="form-control vendor" name="vendorId" required>
                          <option value="" selected>- SELECT -</option>
                          <?php
                              foreach ($vendor as $vend){
                                echo "<option value='$vend->vendorId' ";
                                echo $vend->vendorId==$this->session->userdata('vendorId')?'':'';
                                echo ">$vend->name</option>";
                              }
                          ?>
                      </select>
                      
                  </div>

                  
              </div>

              <div class="hr-line-dashed"></div>

              <div class="form-group">
                  <label class="col-sm-1 control-label">Vehicle</label>
                  <div class="col-sm-11">
                      <select class="form-control vehicle" name="vehicleId" required>
                        <option value="-">- SELECT -</option>
                      </select> 
                      
                  </div>
              </div>

              <div class="hr-line-dashed"></div>
              
              <div class="form-group">
                  <label class="col-sm-1 control-label">Date</label>
                  <div class="col-sm-3">
                      <div class="input-group">
                          <input type="text" name="from" class="form-control pull-right" id="from" placeholder="* From" required readonly  />
                          <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                          </div>
                      </div>
                  </div>

                  <div class="col-sm-3">
                      <div class="input-group">
                          <input type="text" name="to" class="form-control pull-right" id="to" placeholder="* To" required readonly  />
                          <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                          </div>
                      </div>
                  </div>

                  
              </div>
              <div class="hr-line-dashed"></div>
              
          

        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button class="btn btn-success pull-right" name="submit" type="submit"><div class="fa fa-print"></div> Print Report</button>
        </div>

      </form>
      <!-- /.box-footer-->
    </div>
    <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>