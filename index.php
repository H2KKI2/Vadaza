<?php
session_start();
if(isset($_SESSION["uid"])){
	header("location:profile.php");
}
?>
<!DOCTYPE html>
<html>
	<?php
	include_once "indexMenu.php";
	?>
        
</div>	
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	
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
</body>
</html>
















































