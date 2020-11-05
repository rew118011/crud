<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class train extends CI_Controller {

		function __construct(){
		parent::__construct();
		$this->load->model('models_train','tn');
		$this->load->helper('url');
		}

		public function index()
		{
			$this->load->view('index');
		}
		//เรียกใช้หน้า aDD
		//localhost/Alumni/index.php/Alumni/Register
		public function add()
			{
		$this->load->view('view_add');
			}


		public function insert(){
		$result = array(
			'T_ID' => $this->input->post("T_ID"),
			'n_type'=> $this->input->post("n_type"),
		);
		$result1 = array(
			'T_ID' => $this->input->post("T_ID"),
			'e_station' => $this->input->post("e_station"),
			'e_time_out' => $this->input->post("e_time_out"),
		);

		$result2 = array(	
			'T_ID'=> $this->input->post("T_ID"),
			'p_time_in'=> $this->input->post("p_time_in"),
			'p_time_out'=> $this->input->post("p_time_out"),
		);

		$result3 = array(
			'T_ID'=> $this->input->post("T_ID"),
			't_station'=> $this->input->post("t_station"),
			't_time_in'=> $this->input->post("t_time_in"),
		);


		if($this->input->post("n_type")!= "" && $this->input->post("T_ID")!== ""){
			$this->tn->insert_Register($result);
			$this->tn->insert_Educational($result1);
			$this->tn->insert_Work($result2);
			$this->tn->insert_Login($result3);
			$result['tn'] = $this->tn->at();
		    $this->load->view('view',$result);
		}else {
			echo "ไม่สามารถเพิ่มข้อมูลได้ค่ะ !";
		}

	}
	public function showall()
	{

		$result['tn'] = $this->tn->at();
		$this->load->view('view',$result);
		
	}
}
