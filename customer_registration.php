<?php
if (isset($_GET["register"])) {
	
	?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Vadaza</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
		
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue-red.min.css" /> 
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
				<!--Alert from signup form-->
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div style="margin-left:25%; width:700px;"class="panel panel-primary">
					<div class="panel-heading">Registratie</div>
					<div class="panel-body">
					
					<form id="signup_form" onsubmit="return false">
					
					<div class="row">
							<div style='margin-left:20px;'class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<input class="mdl-textfield__input" type="text" id="f_name" name="f_name">
								<label class="mdl-textfield__label" for="f_name">Voornaam</label>
							</div>
							<div style='margin-left:50px;'class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<input class="mdl-textfield__input" type="text" id="l_name" name="l_name">
								<label class="mdl-textfield__label" for="f_name">Achternaam</label>
							</div>
					</div>
					<div class="row">
							<div style='width:94%; margin-left:20px;'class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<input class="mdl-textfield__input" type="email" id="email" name="email">
								<label class="mdl-textfield__label" for="email">Email</label>
							</div>
					</div>	
					<div class="row">
							<div style='width:94%; margin-left:20px;'class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<input class="mdl-textfield__input" type="password" id="password" name="password">
								<label class="mdl-textfield__label" for="password">Wachtwoord</label>
							</div>
					</div>	
					
					<div class="row">
							<div style='width:94%; margin-left:20px;'class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<input class="mdl-textfield__input" type="password" id="repassword" name="repassword">
								<label class="mdl-textfield__label" for="repassword">Wachtwoord opnieuw</label>
							</div>
					</div>
						
					<div  class="row">
							<div style='width:94%; margin-left:20px;'class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<input class="mdl-textfield__input" type="text" id="mobile" name="mobile">
								<label class="mdl-textfield__label" for="mobile">Telefoonnummer</label>
							</div>
					</div>	
					
					<div class="row">
							<div style='margin-left:20px;'class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<input class="mdl-textfield__input" type="text" id="address1" name="address1">
								<label class="mdl-textfield__label" for="address1">Adres 1</label>
							</div>
							
							
							<div style='margin-left:50px;'class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<input class="mdl-textfield__input" type="text" id="address2" name="address2">
								<label class="mdl-textfield__label" for="address2">Huisnummer</label>
							</div>						
					</div>	
					
						
						<p><br/></p>
						<div class="row">
							<div class="col-md-12">
								<input style="margin-top:-40px; width:100%;" value="Registreren" type="submit" name="signup_button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent mdl-color--green">
							</div>
						</div>
						
					</div>
					</form>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</body>
</html>
	<?php
}



?>






















