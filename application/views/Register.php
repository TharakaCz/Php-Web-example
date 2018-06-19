<?php include 'partials/header.php'?>

<div class="container">
	<h2>Registation</h2>
	<?php if ($this->session->flashdata('msg')){
		echo "<h3>".$this->session->flashdata('msg')."<h3>";
	}
	?>
	<hr>

	<?php echo validation_errors();?>
	<?php echo form_open('Register/RegisterUser');?>

		<div class="form-group">
			<label for="exampleInputPassword1">Frist Name</label>
			<input type="text" class="form-control" id="exampleInputFristName" placeholder="Frist Name" name="fname">
		</div>

		<div class="form-group">
			<label for="exampleInputPassword1">Last Name</label>
			<input type="text" class="form-control" id="exampleInputLastName" placeholder="Last Name" name="lname">
		</div>

		<div class="form-group">
			<label for="exampleInputEmail1">Email address</label>
			<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
			<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		</div>

		<div class="form-group">
			<label for="exampleInputPassword1">Password</label>
			<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
		</div>

		<div class="form-group">
			<label for="exampleInputPassword1">Confirm Password</label>
			<input type="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Confirm Password" name="passwordagain">
		</div>

		<div class="form-group form-check">
			<input type="checkbox" class="form-check-input" id="exampleCheck1">
			<label class="form-check-label" for="exampleCheck1">Check me out</label>
		</div>

		<button type="submit" class="btn btn-primary">Submit</button>

	<?php echo form_close();?>

</div>

<?php include 'partials/footer.php'?>

