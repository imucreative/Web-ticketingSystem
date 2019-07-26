<div class="row">
        <!-- accepted payments column -->
        
        <!-- /.col -->
        <div class="col-xs-12">
          <p class="lead"><?php echo $vendor->name;?> | <?php echo tgl_indo($row->datesys);?></p>

          <div class="table-responsive">
            <table class="table">
              <tr>
                <th style="width:15%">Description</th>
                <td colspan='3'>: <?php echo $row->description;?></td>
              </tr>
              <tr>
                <th>Schedule</th>
                <td>: <?php echo tgl_indo($row->schedule);?></td>

                <th style="width:15%">No.Police</th>
                <td>: <?php echo $row->policeNumber;?></td>
              </tr>
              
              <tr>
                <th>NIK</th>
                <td>: <?php echo $row->nik;?></td>

                <th style="width:15%">Driver</th>
                <td>: <?php echo $row->driver;?></td>
              </tr>
             
            </table>
            <br/>
            <table class="table">
              <tr>
                <td width='20%'>Created</td>
                <td width='20%'>In</td>
                <td width='20%'>Out</td>
              </tr>
              <tr>
                <td height="100px"></td>
                <td ></td>
                <td ></td>
              </tr>
              <tr>
                <td >---------------------------------------------</td>
                <td >---------------------------------------------</td>
                <td >---------------------------------------------</td>
              </tr>
            </table>

          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->