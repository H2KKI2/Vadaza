<?php
session_start();
if(isset($_SESSION["uid"])){
	header("location:profile.php");
}
?>
<html>
<head>      
		<meta charset="UTF-8">
		<title>Vadaza</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
		
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>	
		

		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue-red.min.css" /> 
		
</head>

<body>

<?php require_once "indexMenu.php";?>
        
<div class="brand-header">	
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2 col-xs-12">
				<div id="get_category">
				</div>
				
				<div id="get_brand">
				</div>
				
			</div>
			<div class="col-md-8 col-xs-12">
				<div class="row">
					<div class="col-md-12 col-xs-12" id="product_msg">
					</div>
				</div>
				<div class="panel panel-info">
					<div class="panel-heading hoofding-categorie" > smartphones </div>
					<div class="panel-body">
						<div id="get_product">
							
						</div>
						
					</div>
					<div class="panel-footer">&copy; Yanu Szapinszky & Mathias Prinsen - 2018</div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
	</div>
</body>
</html>

