<?php include 'inc/header.php';
if (!($this->session->userdata('loggdin'))){
	redirect('Dashbord/login');
}
 if($this->session->flashdata('welcome')){
		echo "<h3>".$this->session->flashdata('welcome')."<h3>";
	}

	?>


<?php include 'inc/footer.php'; ?>
