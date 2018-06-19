<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 6/19/2018
 * Time: 11:42 AM
 */

class Login extends CI_Controller
{

	public function LoginUser(){
		$this->form_validation->set_rules('email','Email','required|valid_email|is_unique[register.email]');
		$this->form_validation->set_rules('password','Password','required');

		if ($this->form_validation->run()==FALSE){
			$this->load->view('Login');
		}else{
			$this->load->model('User');
			$result = $this->User->LoginUser();

			if ($result != false){

				$userdata = array(
					'userid' => $result->id,
					'FristName'=>$result->FristName,
					'LastName'=>$result->LastName,
					'Email'=>$result->Email,
					'loggedin'=>TRUE


				);

				$this->session->set_userdata($userdata);


				$this->session->set_flashdata('welcome','Welcome Back');
				redirect('Admin/index');

			}else{
				$this->session->set_flashdata('errmsg','Wrong Email and Password');
				redirect('Dashbord/login');
			}
		}
	}
	public function LogoutUser(){

		$this->session->unset_userdata('userid');
		$this->session->unset_userdata('FristName');
		$this->session->unset_userdata('LastName');
		$this->session->unset_userdata('Email');
		$this->session->unset_userdata('loggedin');
		redirect('Dashbord/login');

	}
}
