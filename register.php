<?php
session_start();
include "db.php";
if (isset($_POST["f_name"])) {
	$f_name = $_POST["f_name"];
	$l_name = $_POST["l_name"];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$repassword = $_POST['repassword'];
	$mobile = $_POST['mobile'];
	$address1 = $_POST['address1'];
	$address2 = $_POST['address2'];
	$name = "/^[a-zA-Z ]+$/";
	$emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
	$number = "/^[0-9]+$/";

if(empty($f_name) || empty($l_name) || empty($email) || empty($password) || empty($repassword) ||
	empty($mobile) || empty($address1) || empty($address2)){
		
		echo 
				"<script type='text/javascript'>",
					"danger('Vul alle vakjes in.');",
				"</script>";
		exit();
	} else {
		if(!preg_match($name,$f_name)){
		echo 
				"<script type='text/javascript'>",
					"danger('Uw voornaam is niet geldig.');",
				"</script>";
		exit();
	}
	if(!preg_match($name,$l_name)){
		echo 
				"<script type='text/javascript'>",
					"danger('Uw achternaam is niet geldig.');",
				"</script>";
		exit();
	}
	if(!preg_match($emailValidation,$email)){
		echo 
				"<script type='text/javascript'>",
					"danger('Deze email is niet geldig.');",
				"</script>";
		exit();
	}
	if(strlen($password) < 6 ){
		echo 
				"<script type='text/javascript'>",
					"danger('Wachtwoord is te zwak.');",
				"</script>";
		exit();
	}
	if(strlen($repassword) < 6 ){
		echo 
				"<script type='text/javascript'>",
					"danger('Wachtwoord is te zwak.');",
				"</script>";
		exit();
	}
	if($password != $repassword){
		echo 
				"<script type='text/javascript'>",
					"danger('Wachtwoord is niet hetzelfde.');",
				"</script>";		
		exit();
	}
	if(!preg_match($number,$mobile)){
		echo 
				"<script type='text/javascript'>",
					"danger('Uw telefoonnummer is niet geldig.');",
				"</script>";
		exit();
	}
	if(!(strlen($mobile) == 10)){
		echo 
				"<script type='text/javascript'>",
					"danger('Uw telefoonnummer is niet geldig.');",
				"</script>";
		exit();
	}
	
	$sql = "SELECT user_id FROM user_info WHERE email = '$email' LIMIT 1" ;
	$check_query = mysqli_query($con,$sql);
	$count_email = mysqli_num_rows($check_query);
	if($count_email > 0){
		echo 
				"<script type='text/javascript'>",
					"danger('Deze email wordt al reeds gebruikt.');",
				"</script>";
		exit();
	} else {
		$password = password_hash($password, PASSWORD_DEFAULT);
		$sql = "INSERT INTO `user_info` 
		(`user_id`, `first_name`, `last_name`, `email`, 
		`password`, `mobile`, `address1`, `address2`) 
		VALUES (NULL, '$f_name', '$l_name', '$email', 
		'$password', '$mobile', '$address1', '$address2')";
		$run_query = mysqli_query($con,$sql);
		$_SESSION["uid"] = mysqli_insert_id($con);
		$_SESSION["name"] = $f_name;
		$ip_add = getenv("REMOTE_ADDR");
		$sql = "UPDATE cart SET user_id = '$_SESSION[uid]' WHERE ip_add='$ip_add' AND user_id = -1";
			if(mysqli_query($con,$sql)){
				exit();
			}							}				
	}
	
	

}


?>






















































