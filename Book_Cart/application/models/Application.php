<?php

class Application extends CI_model{
	public function get_recomend_Data(){
		$this->load->database();
		return $this->db->get('recomend_books');
	}
	public function get_php_Data(){
		$this->load->database();
		return $this->db->get('php_books');
	}
	public function get_javascript_Data(){
		$this->load->database();
		return $this->db->get('javascript_books');
	}
	public function get_python_Data(){
		$this->load->database();
		return $this->db->get('python_books');
	}


	public function insertData($data){
		$email = $data['email'];
		$this->db->select('email');
		$this->db->where('email',$email);
		$res = $this->db->get('user');

		if($res->num_rows() > 0){
			return 0;
		}else{
			$this->db->insert('user',$data);
			return 1;
		}
	}
	public function searchData($email, $pass){
		$this->db->select('name, email, pass');
		$this->db->where('email',$email);
		$this->db->where('pass',$pass);
		$res = $this->db->get('user');


		if($res->num_rows() > 0){
			return $res->result_array();
		}else{
			return 0;
		}
	}
}

?>