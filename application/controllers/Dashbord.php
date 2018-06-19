<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 6/18/2018
 * Time: 9:46 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashbord extends CI_Controller
{

	public function index(){
		$this->load->view('Dash');
	}

	public function login(){
		$this->load->view('Login');
	}

	public  function register(){
		$this->load->view('Register');
	}

}
