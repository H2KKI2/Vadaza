
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
        <title>Vadaza</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
	</head>
<body>

	<?php if(isset($_SESSION["uid"])){
    
	include_once 'profileMenu.php';
	}
	else{
	include_once 'indexMenu.php';
	} 
	?>
	
</div>
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="cart_msg">
			
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading">Winkelwagen Bekijken</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-2 col-xs-2"><b>Actie</b></div>
							<div class="col-md-2 col-xs-2"><b>Smartphone foto</b></div>
							<div class="col-md-2 col-xs-2"><b>Smartphone naam</b></div>
							<div class="col-md-2 col-xs-2"><b>Aantal stuks</b></div>
							<div class="col-md-2 col-xs-2"><b>Prijs in €</b></div>
							<div class="col-md-2 col-xs-2"><b>Totaal per stuk</b></div>
						</div>
						<div id="cart_checkout"></div>
						
						</div> 
					</div>	
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
</body>	
</html>	