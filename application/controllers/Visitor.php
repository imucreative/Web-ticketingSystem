<?php
	ini_set('display_errors',0);
	class Visitor extends CI_Controller{
		
		function __construct() {
			parent::__construct();
            $this->load->model('Visitor_model', 'visitor');
			
			if(!$this->session->userdata('userId')){
				redirect('auth/logout');
			}
			
		}
		
		function index(){
            $this->template->load('template', 'visitor/data');
		}

		public function ajax_list(){
            
            $list = $this->visitor->get_datatables();
            $data = array();
            $no = $_POST['start'];
            foreach ($list as $res) {
				
                $no++;
                $row = array();
                $row[] = '<center>'.$no.'</center>';
				$row[] = $res->name;
                $row[] = '<center>'.$res->policeNumber.'</center>';
                $row[] = $res->type;
                $row[] = $res->tujuan;
                $row[] = $res->dateIn;

                if($res->dateOutKode=="0"){
                    $row[] = '<center><a class="btn btn-sm btn-info" href="javascript:void(0)" title="Edit" onclick="editVisitor('."'".$res->visitorId."'".')"><i class="fa fa-edit"></i></a>
                    <a class="btn btn-sm btn-warning" href="javascript:void(0)" title="Out" onclick="visitorOut('."'".$res->visitorId."'".')"><i class="fa fa-sign-out"></i></a>
                    <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Delete" onclick="deleteVisitor('."'".$res->visitorId."'".')"><i class="fa fa-trash"></i></a></center>';
                }else{
                    $row[] = '<font color="red"><center>Visitor Out</center></font>';
                }
                //isset($data[0]) ? $data[0] : null; 
                //add html for action
                
            
                $data[] = $row;
            }

            $output = array(
                "draw" => $_POST['draw'],
                "recordsTotal" => $this->visitor->count_all(),
                "recordsFiltered" => $this->visitor->count_filtered(),
                "data" => $data
            );
            //output to json format
            echo json_encode($output);
        }
		
		//==================================================================================================
		
        public function ajax_add(){
            $this->_validate();
            $data = array(
                'visitorId' => $this->session->userdata('visitorId'),
                'nip' => strtoupper($this->input->post('nip')),
                'name' => strtoupper($this->input->post('name')),
                'policeNumber' => strtoupper($this->input->post('policeNumber')),
                'type' => strtoupper($this->input->post('type')),
                'keperluan' => strtoupper($this->input->post('keperluan')),
                'tujuan' => strtoupper($this->input->post('tujuan')),
                'dateIn' => date('Y-m-d H:i:s'),
                'datesys' => date('Y-m-d H:i:s'),
                'del' => 0
			);
            $insert = $this->visitor->save($data);
            echo json_encode(array("status" => TRUE));
        }

        public function ajax_edit(){
            $visitorId  = $this->uri->segment(3);
			$dataVisitor	= $this->visitor->getById($visitorId)->row();
            echo json_encode($dataVisitor);
        }

        public function ajax_update(){
            $this->_validate();
            $data = array(
                'visitorId' => $this->input->post('visitorId'),
                'nip' => strtoupper($this->input->post('nip')),
                'name' => strtoupper($this->input->post('name')),
                'policeNumber' => strtoupper($this->input->post('policeNumber')),
                'type' => strtoupper($this->input->post('type')),
                'keperluan' => strtoupper($this->input->post('keperluan')),
                'tujuan' => strtoupper($this->input->post('tujuan'))
            );
            $this->visitor->update($data);
            echo json_encode(array("status" => TRUE));
        }
    
        public function ajax_delete(){
            $data = array(
                'visitorId' => $this->uri->segment(3),
                'del' => '1'
            );
            $this->visitor->deleteById($data);
            echo json_encode(array("status" => TRUE));
        }

        public function ajax_visitor_out(){
            $data = array(
                'visitorId' => $this->uri->segment(3),
                'dateOutKode' => "1",
                'dateOut' => date('Y-m-d H:i:s')
            );
            $this->visitor->visitorOutById($data);
            echo json_encode(array("status" => TRUE));
        }

        //==================================================================================================
        
        private function _validate(){
            $data = array();
            $data['error_string'] = array();
            $data['inputerror'] = array();
            $data['status'] = TRUE;

            if($this->input->post('nip') == ''){
                $data['inputerror'][] = 'nip';
                $data['error_string'][] = 'NIP is required';
                $data['status'] = FALSE;
            }
            if($this->input->post('name') == ''){
                $data['inputerror'][] = 'name';
                $data['error_string'][] = 'Name is required';
                $data['status'] = FALSE;
            }
            if($this->input->post('policeNumber') == ''){
                $data['inputerror'][] = 'policeNumber';
                $data['error_string'][] = 'No.Police is required';
                $data['status'] = FALSE;
			}
			if($this->input->post('type') == ''){
                $data['inputerror'][] = 'type';
                $data['error_string'][] = 'Type is required';
                $data['status'] = FALSE;
			}
			if($this->input->post('keperluan') == ''){
                $data['inputerror'][] = 'keperluan';
                $data['error_string'][] = 'Keperluan is required';
                $data['status'] = FALSE;
            }
            if($this->input->post('tujuan') == ''){
                $data['inputerror'][] = 'tujuan';
                $data['error_string'][] = 'Tujuan is required';
                $data['status'] = FALSE;
            }
            
			
            
            if($data['status'] === FALSE){
                echo json_encode($data);
                exit();
            }
        }

    }