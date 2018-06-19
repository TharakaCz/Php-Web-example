<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 6/19/2018
 * Time: 12:13 PM
 */

class Admin extends CI_Controller
{
	public function index(){
		$this->load->view('Admin/Admin');
	}
}
