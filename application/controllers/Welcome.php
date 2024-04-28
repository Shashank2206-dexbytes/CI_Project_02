<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('home');
	}
	public function RegistrationUser()
	{
		if($_SERVER['REQUEST_METHOD']=='POST')
		{
			$this->form_validation->set_rules('fname','fname','required');
			$this->form_validation->set_rules('lname','lname','required');
			$this->form_validation->set_rules('email','email','required');
			$this->form_validation->set_rules('mobilenumber','mobilenumber','required');
			$this->form_validation->set_rules('password','password','required');

			if($this->form_validation->run()===TRUE)
			{
				$fname = $this->input->post('fname');
				$lname = $this->input->post('lname');
				$email = $this->input->post('email');
				$mnumber = $this->input->post('mobilenumber');
				$password = $this->input->post('password');

				$data = array(
					'firstName'=>$fname,
					'lastName'=>$lname,
					'emailId'=>$email,
					'mobileNumber'=>$mnumber,
					'userPassword'=>$password,
					'regDate'=>date('Y-m-d H:i:s'),
					'isActive'=>1,
					'lastUpdationDate'=>date('Y-m-d H:i:s')
				);
	
				$this->load->model('UserManagement');
				$this->UserManagement->insertUserData($data);
				redirect(base_url('Welcome/Singup'));
			}
		}
	}
	public function Singup()
	{
		$this->load->view('Singup');
	}
	public function Login()
	{
		if($_SERVER['REQUEST_METHOD']==='POST')
		{
			$this->form_validation->set_rules('email','email','required');
			$this->form_validation->set_rules('password','password','required');

			if($this->form_validation->run()===TRUE)
			{
				$email = $this->input->post('email');
				$password = $this->input->post('password');

				$data = array(
					'emailId'=> $email,
					'userPassword'=>$password,
				);

				$this->load->model('UserManagement');
				$result = $this->UserManagement->userLoginDetails($email,$password);
				if($result!=false)
				{
					redirect(base_url('welcome/dashboard'));
				}
				else
				{
					redirect(base_url('welcome/index'));
				}
			}
		}
	}

	public function dashboard()
	{
		$this->load->view('dashboard');
	}
	
}
?>