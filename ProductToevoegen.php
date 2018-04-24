<?php
session_start();
if(!isset($_SESSION["uid"])){
	header("location:index.php");
}


 include_once 'db.php';
?>
<!DOCTYPE html>
<html>
<body>
<?php
include_once "navbar.php";
?>


<div style='margin-top: 60px;'class="">
 
<form style='margin-left:20px;' action="ProductToevoegenSucces.php" method="POST">

<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div style="margin-left:35%; margin-top:10%; width:400px;"class="panel panel-primary">
					<div class="panel-heading">Product Toevoegen</div>
					<div class="panel-body"> 
					

<div class='id-wrapper'>

<select style='margin-left: 23%;' class="Postproduct" name="product_cat">
   <?php
	$cat=mysqli_query ($con, "SELECT * FROM categories WHERE cat_id > 0");
	$brand=mysqli_query($con, "SELECT * FROM brands WHERE brand_id > 0");
    while($row=mysqli_fetch_array($cat))
    {
?>

        <option value="<?php echo $row['cat_id']; ?>" ><?php echo $row['cat_title']; ?></option>
<?php
    }
?>
</select> 

<select class="Postproduct" name="product_brand">
<?php
	while($row=mysqli_fetch_array($brand))
    {
?>

        <option value="<?php echo $row['brand_id']; ?>" ><?php echo $row['brand_title']; ?></option>
<?php
    }
?>
</select>

</div>
<form id="signup_form" onsubmit="return false">

				<div class="row">
					<div style='width: 89%; margin-left:20px;' class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<input class="mdl-textfield__input" type="text" id="product_title" name="product_title">
							<label style=',margin-left:10px;'class="mdl-textfield__label">Productnaam</label>
					</div>
				</div>	
				
				<div class="row">
					<div style='width: 89%; margin-left:20px;' class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<input class="mdl-textfield__input" type="text" id="product_price" name="product_price">
							<label class="mdl-textfield__label">Prijs</label>
					</div>
				</div>	
				
				<div class="row">
					<div style='width: 89%; margin-left:20px;' class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<input class="mdl-textfield__input" type="text" id="product_desc" name="product_desc">
							<label class="mdl-textfield__label">Beschrijving</label>
					</div>
				</div>	
				
				<div class="row">
					<div style='width: 89%; margin-left:20px;' class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<input class="mdl-textfield__input" type="text" id="product_image" name="product_image">
							<label class="mdl-textfield__label">Afbeelding</label>
					</div>
				</div>
				
				<div class="row">
					<div style=' width: 89%; margin-left:20px;' class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<input class="mdl-textfield__input" type="text" id="product_keywords" name="product_keywords">
							<label class="mdl-textfield__label">keyword</label>
					</div>
				</div>
				
				<input style="margin-top:5px; width: 150px; margin-left: 29%;" value="Toevoegen" type="submit" name="signup_button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent mdl-color--green">

</form>
</form>

</div>

</body>
</html>