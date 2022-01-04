<?php 
function validate_signup(){
	$errors = array();
	
	if(empty($_POST['username'])){
		$errors['username'] = "Please enter username";
	}
	if(empty($_POST['password'])){
		$errors['password'] = "Please enter password";
	}
	if(empty($_POST['cpassword'])){
		$errors['cpassword'] = "Please confirm your password";
	}
	return $errors ;
}

function validate_login(){
	$errors = array();
	if(empty($_POST['role'])){
		$errors['role'] = "Please select role";
	}
	if(empty($_POST['username'])){
		$errors['username'] = "Please enter username";
	}
	if(empty($_POST['password'])){
		$errors['password'] = "Please enter password";
	}
	return $errors ;
}

function validate_registration(){
	$errors = array();
	if(empty($_POST['name'])){
		$errors['name'] = "Please enter full name";
	}
	if(empty($_POST['email'])){
		$errors['email'] = "Please enter email";
	}
	if(empty($_POST['mobile'])){
		$errors['mobile'] = "Please enter mobile";
	}
	if(empty($_POST['username'])){
		$errors['username'] = "Please enter username";
	}
	if(empty($_POST['dob'])){
		$errors['dob'] = "Please Select Date of Birth";
	}
	if(empty($_POST['password'])){
		$errors['password'] = "Please enter password";
	}
	if(empty($_POST['cpassword'])){
		$errors['cpassword'] = "Please confirm your password";
	}
	if(empty($_POST['clg_code'])){
		$errors['clg_code'] = "Please enter your college code";
	}
	if(empty($_POST['enrollment_no'])){
		$errors['enrollment_no'] = "Please enter your enrollment number";
	}
	return $errors ;
}

function validate_sregistration(){
	$errors = array();
	if(empty($_POST['name'])){
		$errors['name'] = "Please enter full name";
	}
	if(empty($_POST['email'])){
		$errors['email'] = "Please enter email";
	}
	if(empty($_POST['mobile'])){
		$errors['mobile'] = "Please enter mobile";
	}
	if(empty($_POST['username'])){
		$errors['username'] = "Please enter username";
	}
	if(empty($_POST['dob'])){
		$errors['dob'] = "Please Select Date of Birth";
	}
	if(empty($_POST['password'])){
		$errors['password'] = "Please enter password";
	}
	if(empty($_POST['cpassword'])){
		$errors['cpassword'] = "Please confirm your password";
	}
	if(empty($_POST['clg_code'])){
		$errors['clg_code'] = "Please enter your college code";
	}
	
	return $errors ;
}

function validate_book(){
	$errors = array();
	if(empty($_POST['name'])){
		$errors['name'] = "Please enter book name";
	}
	if(empty($_POST['book_code'])){
		$errors['book_code'] = "Please enter book code";
	}
	if(empty($_POST['author'])){
		$errors['author'] = "Please enter author name";
	}
	if(empty($_POST['publication'])){
		$errors['publication'] = "Please enter publication";
	}
	return $errors ;
}
?>