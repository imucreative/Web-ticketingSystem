<?php
class Vendor_model extends Ci_Model{
    
	public $table		= 'dtbvendor';
	public $tableUsers	= 'dtbusers';
    
    //==================================================================================================
    
    function selectAll(){
		$this->db->where('delete', 0);
		$query		= $this->db->get($this->table);
		return $query;
    }
    
    function getVendorById($vendorId){
		$this->db->where('delete', 0);
		$this->db->where('vendorId', $vendorId);
		$query	= $this->db->get($this->table);
		return $query;
	}
	
	

    function simpan(){
        $categoryId     = strtoupper($this->input->post('categoryId'));
        $name           = strtoupper($this->input->post('name'));
        $description    = strtoupper($this->input->post('description'));
        $address        = strtoupper($this->input->post('address'));
        $telp           = strtoupper($this->input->post('telp'));
        $fax		    = strtoupper($this->input->post('fax'));
		$email		    = strtoupper($this->input->post('email'));
		$npwp		    = strtoupper($this->input->post('npwp'));

		$name_user	    = strtoupper($this->input->post('name_user'));
		$username	    = $this->input->post('username');
		$password	    = md5($this->input->post('password'));
		
			$data	= array(
                'categoryId'    => $categoryId,
                'name'          => $name,
                'description'   => $description,
				'address'		=> $address,
                'telp'			=> $telp,
                'fax'			=> $fax,
				'email'			=> $email,
				'npwp'			=> $npwp
			);

		$this->db->insert($this->table, $data);
		$insertId = $this->db->insert_id();

			$dataUser	= array(
				'name'		=> $name_user,
				'username'	=> $username,
				'password'	=> $password,
				'status'	=> 3,
				'vendorId'	=> $insertId,
				'delete'	=> 0
			);
		$this->db->insert($this->tableUsers, $dataUser);
	}
    
	function update(){
        $categoryId     = strtoupper($this->input->post('categoryId'));
        $name           = strtoupper($this->input->post('name'));
        $description    = strtoupper($this->input->post('description'));
        $address        = strtoupper($this->input->post('address'));
        $telp           = strtoupper($this->input->post('telp'));
        $fax		    = strtoupper($this->input->post('fax'));
		$email		    = strtoupper($this->input->post('email'));
		$npwp		    = strtoupper($this->input->post('npwp'));
		
		//if($catalog == null){
			$data	= array(
                'categoryId'    => $categoryId,
                'name'          => $name,
                'description'   => $description,
				'address'		=> $address,
                'telp'			=> $telp,
                'fax'			=> $fax,
				'email'			=> $email,
				'npwp'			=> $npwp
			);
		/*
		}else{
			$data	= array(
                'vendorId'      => $vendorId,
                'categoryId'    => $categoryId,
                'name'          => $name,
                'description'   => $description,
				'address'		=> $address,
                'telp'			=> $telp,
                'fax'			=> $fax,
				'email'			=> $email,
				'npwp'			=> $npwp,
				'catalog'		=> $catalog
			);
		}
		*/
		
		$this->db->where('vendorId', $this->input->post('vendorId'));
		$this->db->update($this->table, $data);
	}
	
	function hapus($vendorId){
		$data	= array(
			'delete'	=> 1
		);
		$this->db->where('vendorId', $vendorId);
		$this->db->update($this->table, $data);
	}

}