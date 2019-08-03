<?php
    ini_set('display_errors',0);
    class Report extends CI_Controller {
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
            $vendorId = $this->session->userdata('vendorId');
            if($vendorId){
                $data['vendor']     = $this->vendor->getVendorById($vendorId)->result();
                $data['vehicle']	= $this->vehicle->selectVehicleByVendorId($vendorId)->result();
            }else{
                $data['vendor']     = $this->vendor->selectAll()->result();
                $data['vehicle']	= $this->vehicle->selectAll()->result();
            }
            
            $this->template->load('template', 'report/data', $data);
        }

        function printDisplay(){
            $vendorId   = $this->input->post('vendorId');
            $vehicleId  = $this->input->post('vehicleId');
            $from       = $this->input->post('from');
            $to         = $this->input->post('to');

            $data = array(
                'vendorId'  => $vendorId,
                'vehicleId' => $vehicleId,
                'from'      => $from,
                'to'        => $to
            );

            $data['vendor']     = $this->vendor->getVendorById($data['vendorId'])->row();
            $data['result']   = $this->delivery->selectQueryDeliveryReport($data)->result();
            //print_r($data['vendor']);
            //die();
            $this->template->load('template', 'report/display', $data);
        }

        function printReport(){
            $vendorId   = $this->uri->segment(3);
            $vehicleId  = $this->uri->segment(4);
            $from       = $this->uri->segment(5);
            $to         = $this->uri->segment(6);

            $data = array(
                'vendorId'  => $vendorId,
                'vehicleId' => $vehicleId,
                'from'      => $from,
                'to'        => $to
            );
            
            $data['vendor']     = $this->vendor->getVendorById($data['vendorId'])->row();
            $data['result']   = $this->delivery->selectQueryDeliveryReport($data)->result();
            //print_r($data);
            //die();
            $this->template->load('template_report', 'report/displayReport', $data);
        }
    }
