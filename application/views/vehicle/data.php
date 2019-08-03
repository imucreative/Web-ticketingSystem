<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Vehicle
            <small>it all starts here</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url();?>index.php/home"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Vehicle</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Data Vehicle</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i></button>
                    
                </div>
            </div>
            <div class="box-body">
          
                <table class="table table-striped table-hover vehicleTable" >
                    <thead>
                        <tr>
                            <th width='10%'><center>NO</center></th>
                            <th width='15%'><center>NAME</center></th>
                            <th width='20%'><center>TYPE</center></th>
                            <th width='15%'><center>CHASIS</center></th>
                            <th width='15%'><center>ENGINE</center></th>
                            <th width='10%'><center>NO.POLICE</center></th>
                            <th width='15%'>
                                <center>
                                    <button class="btn btn-primary btn-sm" onclick="addVehicle()"><i class="fa fa-plus"></i> Input</button>
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


<div class="modal fade" id="modal-form-vehicle" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="#" id="form" >
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">Vehicle Form</h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" value="" name="vehicleId"/> 
                    <div class="form-group"><label>* Vehicle Name</label> 
                        <input type="text" name="name" placeholder="Name" class="form-control name" />
                        <span class="help-block"></span>
                    </div>
                    <div class="form-group"><label>* Type</label> 
                        <input type="text" name="type" placeholder="Type" class="form-control type" />
                        <span class="help-block"></span>
                    </div>
                    <div class="form-group"><label>* Chasis</label> 
                        <input type="text" name="chasis" placeholder="Chasis" class="form-control chasis" />
                        <span class="help-block"></span>
                    </div>
                    <div class="form-group"><label>* Engine</label> 
                        <input type="text" name="engine" placeholder="Engine" class="form-control engine" />
                        <span class="help-block"></span>
                    </div>
                    <div class="form-group"><label>* No.Police</label> 
                        <input type="text" name="policeNumber" placeholder="No.Police" class="form-control policeNumber" />
                        <span class="help-block"></span>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    <button type="button" class="btn btn-primary"  id="btnSave" onclick="saveVehicle()"><i class="fa fa-save"></i> Save</button>
                </div>
            </form>
        </div>
    </div>
</div>