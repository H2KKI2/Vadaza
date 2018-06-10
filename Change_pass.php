<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Vadaza</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		
		
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue-red.min.css" /> 
		<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
	</head>
<body>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="changePwd_msg">
				<!--Alert from signup form-->
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div style=""class="form panel panel-primary">
					<div class="panel-heading">Verander wachtwoord</div>
					<div class="panel-body">
					
					<form id="changePwd_form" action="Change_pass_script.php" method="POST">
					
					<div class="row">
							<div style='margin-left:25%;'class="changePass-text mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<input class="mdl-textfield__input" type="password" name="wachtwoord">
								<label class="mdl-textfield__label" for="wachtwoord">Oud wachtwoord</label>
							</div>
					</div>
					<div class="row">
							<div class="changePass-text mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<input class="mdl-textfield__input" type="password" name="newpass">
								<label class="mdl-textfield__label" for="newpass">Nieuw wachtwoord</label>
							</div>
					</div>
					<div class="row">
							<div id="txtNewPassConfirm" class="changePass-text mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<input class="mdl-textfield__input" type="password" name="newpassconfirm">
								<label class="mdl-textfield__label" for="newpassconfirm">Bevestig nieuw wachtwoord</label>
							</div>
					</div>	
	
					<div class="row">
						<div class="col-md-12">
							<input value="Wachtwoord veranderen" type="submit" class="btnChangePass mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent mdl-color--green">
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

