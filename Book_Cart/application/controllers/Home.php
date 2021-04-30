<?php

class Home extends CI_controller{
	public $img;
	public $title;
	public function index(){
		$data['recomend_books'] = $this->Application->get_recomend_Data()->result_array();
		$data['php_books'] = $this->Application->get_php_Data()->result_array();
		$data['javascript_books'] = $this->Application->get_javascript_Data()->result_array();
		$data['python_books'] = $this->Application->get_python_Data()->result_array();

		if($this->session->has_userdata('name')){
		$data['user_name'] = $this->session->userdata('name');
		}
		$this->load->view('home',$data);
	}
	public function signin(){
		$this->load->view('signin');
	}
	public function signup(){
		
		$this->load->view('signup');	
	}
	public function insert(){
		$jsonEncodedData = $_POST['data'];
		$jsonDecode = json_decode($jsonEncodedData, true);
		$res = $this->Application->insertData($jsonDecode);

		if($res == 0){
			echo 0;
		}else{
			echo base_url();
			$name = $jsonDecode['name'];
			$this->session->set_userdata('name',$name);
		}
	}
	public function search(){
		$jsonEncodedData = $_POST['data'];
		$jsonDecode = json_decode($jsonEncodedData,true);
		$email = $jsonDecode['email'];
		$pass = $jsonDecode['pass'];
		$res = $this->Application->searchData($email, $pass);
		
		if($res == 0){
			echo 0;
		}else{
			$name = $res[0]['name'];
			echo base_url();
			$this->session->set_userdata('name',$name);	
		}
	}	

	public function sessionUnset(){
		unset($_SESSION['name']);
	}

}

?>