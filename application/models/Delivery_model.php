<?php
class Delivery_model extends Ci_Model{
    
	public $table		= 'dtrdelivery';
    
    //==================================================================================================
    
    function selectAll(){
      $this->db->where('delete', 0);
      $this->db->order_by('schedule', 'desc');
      $query		= $this->db->get($this->table);
      return $query;
    }

    function selectAllVendorLogin($vendorId){
      $this->db->where('vendorId', $vendorId);
      $this->db->where('delete', 0);
      $this->db->order_by('schedule', 'desc');
      $query		= $this->db->get($this->table);
      return $query;
    }

    function simpan(){
        $vendorId       = strtoupper($this->input->post('vendorId'));
        $description    = strtoupper($this->input->post('description'));
        $schedule       = strtoupper($this->input->post('schedule'));
        $vehicleId   = strtoupper($this->input->post('vehicleId'));
        $nik            = strtoupper($this->input->post('nik'));
		    $driver		      = strtoupper($this->input->post('driver'));
		
        $data	= array(
            'vendorId'      => $vendorId,
            'description'   => $description,
            'schedule'      => $schedule,
            'vehicleId'     => $vehicleId,
            'nik'           => $nik,
            'driver'        => $driver,
            'datesys'       => date("Y-m-d")
        );

        $this->db->insert($this->table, $data);
		
    }
    
    function getDeliveryById($deliveryId){
      $this->db->where('delete', 0);
      $this->db->where('deliveryId', $deliveryId);
      $query	= $this->db->get($this->table);
      return $query;
    }

    function update(){
      $vendorId       = strtoupper($this->input->post('vendorId'));
      $description    = strtoupper($this->input->post('description'));
      $schedule       = strtoupper($this->input->post('schedule'));
      $vehicleId      = strtoupper($this->input->post('vehicleId'));
      $nik            = strtoupper($this->input->post('nik'));
      $driver         = strtoupper($this->input->post('driver'));
      
      $data	= array(
        'vendorId'      => $vendorId,
        'description'   => $description,
        'schedule'      => $schedule,
        'vehicleId'     => $vehicleId,
        'nik'           => $nik,
        'driver'        => $driver,
        'datesys'       => date("Y-m-d")
      );
      
      $this->db->where('deliveryId', $this->input->post('deliveryId'));
      $this->db->update($this->table, $data);
    }


    function hapus($deliveryId){
      $data	= array(
        'delete'	=> 1
      );
      $this->db->where('deliveryId', $deliveryId);
      $this->db->update($this->table, $data);
    }

    function in($deliveryId){
      $data	= array(
        'dateIn'	=> date("Y-m-d h:i:s")
      );
      $this->db->where('deliveryId', $deliveryId);
      $this->db->update($this->table, $data);
    }

    function out($deliveryId){
      $data	= array(
        'dateOut'	=> date("Y-m-d h:i:s")
      );
      $this->db->where('deliveryId', $deliveryId);
      $this->db->update($this->table, $data);
    }

    function selectQueryDeliveryReport($data){
      $this->db->where('delete', 0);
      if($data['vehicleId']!="-"){
        $this->db->where('vehicleId', $data['vehicleId']);
      }
      $this->db->where('vendorId', $data['vendorId']);
      $this->db->where('schedule >=',$data['from']);
      $this->db->where('schedule <=',$data['to']);
      $this->db->order_by('datesys', 'DESC');
      $query		= $this->db->get($this->table);
      return $query;
    }

}
