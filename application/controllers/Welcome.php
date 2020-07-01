<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function  __construct()  
	{ 
		parent:: __construct();
		error_reporting(E_ALL ^ E_NOTICE);  
		$this->load->model(array('common_model'));
		$this->load->library('mongo_db');
	} 

	public function index()
	{
		$param['userName']  		=		"VBloggers";
		$param['userEmail']  		=		"info@vbloggers.in";
		$data = $this->common_model->addData('inter_users',$param);
		if($data):
			echo "Data inserted";die;
		else:
			echo "Something went wrong";die;
		endif;
		$this->load->view('welcome_message');
	}
}
