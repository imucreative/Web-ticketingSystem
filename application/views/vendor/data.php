<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Customer
      <small>it all starts here</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url();?>index.php/home"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Customer</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Data Customer</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fa fa-minus"></i></button>
        </div>
      </div>
      <div class="box-body">

        <table class="table table-striped table-hover myTable" >
          <thead>
              <tr>
                  <th width='5%'><center>NO</center></th>
                  <th width='25%'><center>CUSTOMER NAME</center></th>
                  <th width='10%'><center>CATEGORY</center></th>
                  <th width='20%'><center>ADDRESS</center></th>
                  <th width='10%'><center>TELP</center></th>
                  <th width='10%'><center>EMAIL</center></th>
                  <th width='20%'>
                      <?php 
                      $stat = $this->session->userdata('status');
                          if($stat == 1){ 
                      ?>
                      <center>
                          <a href="<?php echo base_url();?>index.php/vendor/post" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Input</a>
                      </center>
                      <?php 
                          } 
                      ?>
                  </th>
              </tr>
          </thead>
          
          <tbody>
              <?php
                  $no = 1;
                  foreach ($result as $r){
                      $CI=&get_instance();
                      $CI->load->model('Category_model');
                      $rowCategory    = $CI->Category_model->getCategoriByCategoryId($r->categoryId)->row();
              ?>
                      <tr>
                          <td align='center'><?php echo $no;?></td>
                          <td><?php echo $r->name;?></td>
                          <td align='center'><?php echo $rowCategory->name;?></td>
                          <td><?php echo $r->address;?></td>
                          <td align='center'><?php echo $r->telp;?></td>
                          <td align='center'><a href="mailto:<?php echo $r->email;?>"><?php echo $r->email;?></a></td>
                          <td align='center'>
                              
                              <?php

                                  
                                  if($stat == 1){
                                      echo anchor('vendor/edit/'.$r->vendorId, '<i class="fa fa-edit"></i>', 'class="btn btn-sm btn-info" title="Edit"')." | ".
                                      anchor('vendor/display/'.$r->vendorId, '<i class="fa fa-eye"></i>', 'class="btn btn-sm btn-warning" title="Display"')." | ".
                                      anchor("vendor/delete/".$r->vendorId, '<i class="fa fa-trash-o"></i>', ["class"=>"btn btn-sm btn-danger", "title"=>'Delete', "onclick"=>"return confirm('Are you sure delete this data?')"]);
                                  }elseif($stat == 2){
                                      echo anchor('vendor/display/'.$r->vendorId, '<i class="fa fa-eye"></i>', 'class="btn btn-sm btn-warning" title="Display"');
                                  }
                                  
                              ?>
                              
        </td>
                      </tr>
              <?php
                  $no++;
                  }
              ?>
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