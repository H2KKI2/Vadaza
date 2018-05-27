	<head>
		<meta charset="UTF-8">
		<title>Vadaza</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue-red.min.css" /> 
		<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
		<style>
			@media screen and (max-width:480px){
				#search{width:80%;}
				#search_btn{width:30%;float:right;margin-top:-32px;margin-right:10px;}
			}
		</style>
	</head>

	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only"> navigation toggle</span>
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
				<li style="top:10px;left:20px;"><button class="btn btn-primary" id="search_btn">Zoeken</button></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#" id="cart_container" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Winkelmandje <span class="badge">0</span></a>
					<div class="dropdown-menu" style="width:400px;">
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-3 col-xs-3">Artikel nr.</div>
									<div class="col-md-3 col-xs-3">Smartphone naam</div>
									<div class="col-md-3 col-xs-3">smartphone merk</div>
									<div class="col-md-3 col-xs-3">Prijs in euro</div>
								</div>
							</div>
							<div class="panel-body">
								<div id="cart_product">
								
								</div>
							</div>
							<div class="panel-footer"></div>
						</div>
					</div>
				</li>
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><?php echo "Hoi,".$_SESSION["name"]; ?></a>
					<ul class="dropdown-menu">
                        <li><a href="cart.php" style="text-decoration:none; color:blue;"><span class="glyphicon glyphicon-shopping-cart"></span>Winkelmandje</a></li>
						<li class="divider"></li>
						<li><a href="customer_order.php" style="text-decoration:none; color:blue;">Orders</a></li>
						<li class="divider"></li>
						<li><a href="" style="text-decoration:none; color:blue;">Wachtwoord veranderen</a></li>
						
						<?php
						$uid = $_SESSION['uid'];
						$checkAdmin="SELECT * FROM user_info WHERE user_id=$uid;";
						$result = mysqli_query($con, $checkAdmin);
						$row = mysqli_fetch_assoc($result);
						
						if($row['Admin'] ){
						echo '<li class="divider"></li>';
						echo '<li><a href="ProductToevoegen.php" style="text-decoration:none; color:blue;">Product toevoegen</a></li>';
						}
						?>
						
						<li class="divider"></li>
						<li><a href="logout.php" style="text-decoration:none; color:blue;">Uitloggen</a></li>
						
					</ul>
				</li>
				
			</ul>
		</div>
	</div>
	</div> 