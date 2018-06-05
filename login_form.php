<?php

if (isset($_SESSION["uid"])) {
	header("location:profile.php");
}

if (isset($_POST["login_user_with_product"])) {
	
	$product_list = $_POST["product_id"];
	
	$json_e = json_encode($product_list);
	
	setcookie("product_list",$json_e,strtotime("+1 day"),"/","","",TRUE);

}
?>
<!DOCTYPE html>
<html>
	<head>
	
		<meta charset="UTF-8">
		<title>Vadaza</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">		
		<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue-red.min.css" />		
		<link rel="stylesheet" href="css/style.css">	
		
		<script src="js/jquery2.js"></script>		
		<script src="js/bootstrap.min.js"></script>		
		<script src="main.js"></script>								 	
		<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
		
	</head>
<body>

</div>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				<a href="#" class="navbar-brand">Vadaza</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
                <li><a href="index.php"><span class="glyphicon glyphicon-modal-window"></span>Smartphones</a></li>
			</ul>
		</div>
	</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="signup_msg">
				
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="panel panel-primary">
					<div class="panel-heading">Gebruiker login</div>
					<div class="panel-body">
					
						<form onsubmit="return false" id="login">
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">								<label class="mdl-textfield__label" for="email">Email</label>								<input class="mdl-textfield__input" type="email" name="email" id="email">							</div>																	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">								<label class="mdl-textfield__label" for="email">Wachtwoord</label>								<input class="mdl-textfield__input" type="password" name="password" id="password">							</div>
							<p><br/></p>
							<a href="#" style="color:#333; list-style:none;">Wachtwoord vergeten</a><input type="submit" class="btn btn-success" style="float:right;" Value="Login">
							
							<div><a href="customer_registration.php?register=1">Heeft u nog geen account?</a></div>						
						</form>
				</div>
				<div class="panel-footer"><div id="e_msg"></div></div>
			</div>
		</div>
		<div class="col-md-4"></div>
	</div>
</body>
</html>






















