 <?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 6/19/2018
 * Time: 10:25 AM
 */

class Register extends CI_Controller
{
 public function RegisterUser()
 {
	 $this->form_validation->set_rules('fname','First Name','required');
	 $this->form_validation->set_rules('lname','Last Name','required');
	 $this->form_validation->set_rules('email','Email','required|valid_email|is_unique[register.email]');
	 $this->form_validation->set_rules('password','Password','required');
	 $this->form_validation->set_rules('passwordagain','Confirm','required|matches[password]');

	 if ($this->form_validation->run()==FALSE){
	 	$this->load->view('Register');
	 }else{
	 	$this->load->model('User');
	 	$response = $this->User->Userdata();

	 	if ($response){
	 		$this->session->set_flashdata('msg','Registerd Succsessfully');
	 		redirect('Dashbord/register');
		}else{
			$this->session->set_flashdata('msg','Something Went Wrong');
			redirect('Dashbord/register');
		}
	 }
 }
}
