<head>
		<meta charset="UTF-8">
		<title></title>		
        
		<link rel="stylesheet" href="Style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue-red.min.css" /> 
		<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
		
	</head>
	
<body>

</div>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only">navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>					
				</button>
					<a href="#" class="navbar-brand">Vadaza</a>
			</div>
			
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
				<li><a href="index.php"><span class="glyphicon glyphicon-modal-window"></span>Product</a></li>
				<li style="width:300px;left:10px;top:10px;"><input type="text" class="form-control" placeholder="Zoeken" id="search"></li>
				<li style="top:10px;left:20px;"><button class="btn btn-primary" id="search_btn"><span class="glyphicon glyphicon-search" style='float:right;'></span></button></li>
			</ul>
			
			<ul class="nav navbar-nav navbar-right">
			<li><a href="contact/contact.php"><span class="glyphicon glyphicon-modal-window"></span>Over Ons / support</a></li>
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Winkelmandje<span style="margin-left: 5px;" class="badge">0</span></a>
					<div class="dropdown-menu" style="width:400px;">
						<div class="panel panel-success">
						
							<div class="panel-heading">
								<div class="row"> 
									<div class="col-md-3">Artikelnr.</div>
									<div class="col-md-3">smartphone foto</div>
									<div class="col-md-3">smartphone naam</div>
									<div class="col-md-3">prijs in euro</div>
								</div>		
							</div>
							
							<div class="panel-body">
							
							<div style="overflow-x: hidden;" class="pre-scrollable">
								<div id="cart_product">
								
								</div>
								</div>
								
							</div>
							
						</div>
							<a href="cart.php" class="btn btn-warning btn-bewerken">Bewerken&nbsp;&nbsp;<span class="glyphicon glyphicon-edit"></span></a>
							
						
					</div>
				</li>
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>Aanmelden</a>
					<ul class="dropdown-menu">
					<div class="panel-primary">
						<div style="width:300px;">
							<div>
								<div class="panel-primary">
								<div class="panel-heading panel-primary">Login</div>
								</div>
								</diV>
									<form onsubmit="return false" id="login">
										
										
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label login-tekst">
										<label class="mdl-textfield__label" for="email">Email</label>
										<input class="mdl-textfield__input" type="email" name="email" id="email">
										</div>
										
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label login-tekst">
										<label class="mdl-textfield__label" for="email">Wachtwoord</label>
										<input class="mdl-textfield__input" type="password" name="password" id="password">
										</div>
										
										<br>
										<a href="#" style="color:blue; list-style:none;">Wachtwoord vergeten?</a><input type="submit" class="btn btn-success" style="float:right;">
                                        <div><a href="customer_registration.php?register=1" style="color:blue;">Registreren</a></div>
									</form>
									
								</div>
								<div class="panelfooter" id="e_msg"></div>
							</div>
						</div>
					</ul>
				</li>
			</ul>
		</div>
	</div>