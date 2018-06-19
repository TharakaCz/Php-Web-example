<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 6/19/2018
 * Time: 11:09 AM
 */

class User extends CI_Model
{
	function Userdata(){
		$data = array(
			'FristName'=>$this->input->post('fname',TRUE),
			'LastName' =>$this->input->post('lname',TRUE),
			'Email' =>$this->input->post('email',TRUE),
			'Password' =>sha1($this->input->post('password',TRUE)),
		);
		return $this->db->insert('register',$data);
	}

	function LoginUser(){
		  	$Email =$this->input->post('email');
			$Password =sha1($this->input->post('password'));

			$this->db->where('email',$Email);
			$this->db->where('password',$Password);

			$respond = $this->db->get('register');

			if($respond->num_rows()==1){
				return $respond->row(0);
			}else{
				return false;
			}

	}
}
