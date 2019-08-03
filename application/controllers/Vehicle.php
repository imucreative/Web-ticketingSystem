<?php
	ini_set('display_errors',0);
	class Vehicle extends CI_Controller{
		
		function __construct() {
			parent::__construct();
            $this->load->model('Vehicle_model', 'vehicle');
            $this->load->model('Vendor_model', 'vehicle');
			
			if(!$this->session->userdata('userId')){
				redirect('auth/logout');
			}
			
		}
		
		function index(){
            $this->template->load('template', 'vehicle/data');
		}

		public function ajax_list(){
            
            $list = $this->vehicle->get_datatables();
            $data = array();
            $no = $_POST['start'];
            foreach ($list as $res) {
				
                $no++;
                $row = array();
                $row[] = '<center>'.$no.'</center>';
				$row[] = $res->name;
                $row[] = $res->type;
                $row[] = '<center>'.$res->chasis.'</center>';
                $row[] = '<center>'.$res->engine.'</center>';
                $row[] = '<center>'.$res->policeNumber.'</center>';

                //add html for action
                $row[] = '<center><a class="btn btn-sm btn-info" href="javascript:void(0)" title="Edit" onclick="editVehicle('."'".$res->vehicleId."'".')"><i class="fa fa-edit"></i></a>
                    <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Delete" onclick="deleteVehicle('."'".$res->vehicleId."'".')"><i class="fa fa-trash"></i></a></center>';
            
                $data[] = $row;
            }

            $output = array(
                "draw" => $_POST['draw'],
                "recordsTotal" => $this->vehicle->count_all(),
                "recordsFiltered" => $this->vehicle->count_filtered(),
                "data" => $data
            );
            //output to json format
            echo json_encode($output);
        }
		
		//==================================================================================================
		
        public function ajax_add(){
            $this->_validate();
            $data = array(
                'vendorId' => $this->session->userdata('vendorId'),
				'name' => strtoupper($this->input->post('name')),
                'type' => strtoupper($this->input->post('type')),
                'chasis' => strtoupper($this->input->post('chasis')),
                'engine' => strtoupper($this->input->post('engine')),
                'policeNumber' => strtoupper($this->input->post('policeNumber'))
			);
            $insert = $this->vehicle->save($data);
            echo json_encode(array("status" => TRUE));
        }

        public function ajax_edit(){
            $vehicleId  = $this->uri->segment(3);
			$dataVehicle	= $this->vehicle->getById($vehicleId)->row();
            echo json_encode($dataVehicle);
        }

        public function ajax_update(){
            $this->_validate();
            $data = array(
                'vehicleId' => strtoupper($this->input->post('vehicleId')),
				'name' => strtoupper($this->input->post('name')),
                'type' => strtoupper($this->input->post('type')),
                'chasis' => strtoupper($this->input->post('chasis')),
                'engine' => strtoupper($this->input->post('engine')),
                'policeNumber' => strtoupper($this->input->post('policeNumber'))
            );
            $this->vehicle->update($data);
            echo json_encode(array("status" => TRUE));
        }
    
        public function ajax_delete(){
            $data = array(
                'vehicleId' => $this->uri->segment(3),
                'delete' => '1'
            );
            $this->vehicle->deleteById($data);
            echo json_encode(array("status" => TRUE));
        }

        function ajaxGetSubVehicle(){
            $id=$this->input->post('id');
            $data=$this->vehicle->selectVehicleByVendorId($id)->result();
            echo json_encode($data);
        }
		
        //==================================================================================================
        
        private function _validate(){
            $data = array();
            $data['error_string'] = array();
            $data['inputerror'] = array();
            $data['status'] = TRUE;

            if($this->input->post('name') == ''){
                $data['inputerror'][] = 'name';
                $data['error_string'][] = 'Name is required';
                $data['status'] = FALSE;
            }
            if($this->input->post('status') == '2'){
                $data['inputerror'][] = 'name';
                $data['error_string'][] = 'Name is required';
                $data['status'] = FALSE;
			}
			if($this->input->post('type') == ''){
                $data['inputerror'][] = 'type';
                $data['error_string'][] = 'Type is required';
                $data['status'] = FALSE;
			}
			if($this->input->post('chasis') == ''){
                $data['inputerror'][] = 'chasis';
                $data['error_string'][] = 'Chasis is required';
                $data['status'] = FALSE;
            }
            if($this->input->post('engine') == ''){
                $data['inputerror'][] = 'engine';
                $data['error_string'][] = 'Engine is required';
                $data['status'] = FALSE;
            }
            if($this->input->post('policeNumber') == ''){
                $data['inputerror'][] = 'policeNumber';
                $data['error_string'][] = 'No.Police is required';
                $data['status'] = FALSE;
			}
			
            
            if($data['status'] === FALSE){
                echo json_encode($data);
                exit();
            }
        }

    }