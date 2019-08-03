<?php
    ini_set('display_errors',0);
    class Delivery extends CI_Controller {
        function __construct() {
            parent::__construct();
            $this->load->model('Delivery_model', 'delivery');
            $this->load->model('Vendor_model', 'vendor');
            $this->load->model('Vehicle_model', 'vehicle');

            if(!$this->session->userdata('userId')){
                redirect('auth/logout');
            }
            
            //if($this->session->userdata('status')!=0){
                //redirect('errors/error_403');
            //}
        }
        function index() {
            $vendorId   = $this->session->userdata('vendorId');
            $status     = $this->session->userdata('status');
            if($status==3){
                $data['result']=  $this->delivery->selectAllVendorLogin($vendorId)->result();
                
            }else{
                $data['result']=  $this->delivery->selectAll()->result();
            }
            $this->template->load('template', 'delivery/data', $data);
        }

        function post(){
            if(isset($_POST['submit'])){
                $this->delivery->simpan();
                redirect('delivery');

			}else{
                
				$this->template->load('template','delivery/post');
			}
        }

        function edit(){
            if(isset($_POST['submit'])){
				$this->delivery->update();
				redirect('delivery');

			}else{
				$deliveryId			= $this->uri->segment(3);
                $data['row']        = $this->delivery->getDeliveryById($deliveryId)->row();
                $data['vendor']     = $this->vendor->selectAll($data['row']->vendorId)->result();
				$this->template->load('template', 'delivery/edit', $data);
			}
        }

        function delete(){
			$deliveryId = $this->uri->segment(3);
			if(!empty($deliveryId)){
				$this->delivery->hapus($deliveryId);
			}
			redirect('delivery');
        }
        
        function display(){
            $deliveryId			= $this->uri->segment(3);
            $data['row']        = $this->delivery->getDeliveryById($deliveryId)->row();
            $data['vendor']     = $this->vendor->getVendorById($data['row']->vendorId)->row();
            $data['vehicle']    = $this->vehicle->getById($data['row']->vehicleId)->row();
            $this->template->load('template', 'delivery/display', $data);
        }

        function in(){
			$deliveryId = $this->uri->segment(3);
			if(!empty($deliveryId)){
				$this->delivery->in($deliveryId);
			}
			redirect('delivery');
        }

        function out(){
			$deliveryId = $this->uri->segment(3);
			if(!empty($deliveryId)){
				$this->delivery->out($deliveryId);
			}
			redirect('delivery');
        }

        function print(){
            $deliveryId			= $this->uri->segment(3);
            $data['row']        = $this->delivery->getDeliveryById($deliveryId)->row();
            $data['vendor']     = $this->vendor->getVendorById($data['row']->vendorId)->row();
            $data['vehicle']    = $this->vehicle->getById($data['row']->vehicleId)->row();
            $this->template->load('template', 'delivery/print', $data);
        }

        function printDelivery(){
            $deliveryId			= $this->uri->segment(3);
            $data['row']        = $this->delivery->getDeliveryById($deliveryId)->row();
            $data['vendor']     = $this->vendor->getVendorById($data['row']->vendorId)->row();
            $data['vehicle']    = $this->vehicle->getById($data['row']->vehicleId)->row();
            $this->template->load('template_report', 'delivery/printReport', $data);
        }
    }
