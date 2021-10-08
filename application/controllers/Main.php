<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function index()
	{
		$this->load->helper('url'); 
		$this->load->view('homepage');
	}

	
	
	function home(){
		echo "iam";
	}
	
	function mainmethod(){
		$this->load->view('main');
	}
	
	function modelcall(){
		$this->load->model("Comments");
		$this->Comments->echoTest();
	}
	
	function displayallusers(){
		$this->load->model("Comments");
		$data['comments'] = $this->Comments->displayComments();
		// $data['age'] = 5;
		$this->load->view('allcomments',$data);
	}
	
	/* function newuser(){
		$this->load->view('addnewuser');
		$i = 0;
		if($this->input->post('username')=="")
			$i=2;
		if($this->input->post('password')=="")
			$i++;
		switch($i){
			case 0:
				// do add user
				$this->load->model("User");
				$this->User->addNewUser($this->input->post('username'),$this->input->post('password'));
				break;
			case 1:
				echo "Password must not be empty!";
				break;
			case 2:
				echo "Username must not be empty!";
				break;
			case 3:
				echo "Username and Password are empty!";
				break;	
		}
	} */
}

