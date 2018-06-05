<?php
session_start();


include "db.php";



$proID = 0;
$pro_brand= "null";
$pro_image = "null";
$pro_price = "null";


if(isset($_GET['id']) && $_GET['category']) {
    $proID = $_GET['id'];
	$cid = $_GET['category'];
	
	$category_query = "select * from categories where cat_id = $cid;";
	$result = mysqli_query($conn, $category_query);
	$row = mysqli_fetch_assoc($result);
	$category = $row['cat_table'];
}


$product_query = "SELECT * FROM $category LEFT JOIN brands ON product_brand = brands.brand_id WHERE product_id = '$proID'";
$run_query = mysqli_query($con,$product_query);
if(mysqli_num_rows($run_query) > 0){
    while($row = mysqli_fetch_array($run_query)){	
        $pro_id    = $row['product_id'];
        $pro_cat   = $row['product_cat'];
		$pro_color_id  = $row['color_id'];
        $pro_brand = $row['brand_title'];
        $pro_title = $row['product_title'];
        $pro_price = $row['product_price'];
        setlocale(LC_MONETARY, 'nl_NL.UTF-8');
        $pro_price = money_format('%!(#1i', $pro_price);
        $pro_image = $row['product_image'];
		$pro_image_front = $row['product_image_front'];
		$pro_image_side = $row['product_image_side'];
		$pro_image_back = $row['product_image_back'];
		
		
        $pro_ram = $row['product_ram'];
        $pro_opslag = $row['product_opslag'];
		$pro_color = $row['product_color'];
        $pro_geheugen = $row['product_Geheugenkaartlezer'];
        $pro_introdat = $row['product_introductiedatum'];
        $pro_SATcat = $row['product_SATcat'];
        $pro_SATwaarde = $row['product_SATwaarde'];
        $pro_OS = $row['product_OS'];
        $pro_versie = $row['product_versie'];
        $pro_type = $row['product_typemobiel'];
        $pro_spraak = $row['product_spraakbesturing'];
        $pro_VR = $row['product_AanbevolenVR'];
        $pro_dia = $row['product_Schermdiagonaal'];
        $pro_resolutie = $row['product_Resolutie'];
        $pro_pixels = $row['product_pixeldichtheid'];
        $pro_touch = $row['product_Touchscreen'];
        $pro_opslag = $row['product_opslag'];
	
    }
}

$rating_query = "SELECT * FROM rating WHERE product_id= '$proID'";
$run_query = mysqli_query($con,$rating_query);
if(mysqli_num_rows($run_query) > 0){
    while($row = mysqli_fetch_array($run_query)){
        $rating_id =$row['rating_id'];
        $user_id =$row['user_id'];
        $product_id =$row['product_id'];
        $rating =$row['rating'];
        $comment =$row['comment'];
    }
}

$intTeller_models = 0;
$phone_models = array();
$model_query = "SELECT product_id, product_image FROM $category WHERE color_id= '$pro_color_id'";
$run_query = mysqli_query($con,$model_query);
if(mysqli_num_rows($run_query) > 0){
    while($row = mysqli_fetch_array($run_query)){
        $phone_id_pv = $row['product_id'];
        $phone_img_pv = $row['product_image'];
		$phone_models[$intTeller_models] = $phone_id_pv." ".$phone_img_pv;
		$intTeller_models++;
    }
}


?>



<!DOCTYPE html>
<html>
    <head>
		<meta charset="UTF-8">
        <title>Vadaza</title>
	
        <link type="text/css" href="css/import.css" rel="stylesheet">
		<link rel="stylesheet" href="css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
			
        <script src="js/jquery2.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="main.js"></script>
		<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
		<script src="js/bootstrap-notify.min.js"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue-red.min.css"> 

    </head>

    <body>

<?php if(isset($_SESSION["uid"])){
    
	include_once 'profileMenu.php';
	}
	else{
	include_once 'indexMenu.php';
	} 
	?>
                   <div class="phone-wrapper col-sm-4">
					<div class="thumbnail-carousel">
							<div class="preview-pic tab-content">
								<div class="tab-pane active" id="pic1"><img src='product_images/<?php echo($pro_image); ?>' /></div>
								<?php if(isset($pro_image_front)){?>
									
								<div class="tab-pane" id="pic2"><img src='product_images/<?php echo($pro_image_front); ?>' /></div>
								<?php }
								if(isset($pro_image_side)){?>
								<div class="tab-pane" id="pic3"><img src='product_images/<?php echo($pro_image_side); ?>' /></div>	
								<?php } if(isset($pro_image_back)){?>
								<div class="tab-pane" id="pic4"><img src='product_images/<?php echo($pro_image_back); ?>' /></div>	
								<?php } ?>
							</div>
							
							<ul class="preview-thumbnail ">		
								<li class="active"><a data-target="#pic1" data-toggle="tab"><img src='product_images/<?php echo($pro_image); ?>' /></a></li>
								<?php if(isset($pro_image_front)){?>
								<li><a data-target="#pic2" data-toggle="tab"><img src='product_images/<?php echo($pro_image_front); ?>' /></a></li>
								<?php } if(isset($pro_image_side)){?>
								<li><a data-target="#pic3" data-toggle="tab"><img src='product_images/<?php echo($pro_image_side); ?>' /></a></li>
								<?php } if(isset($pro_image_back)){?>
								<li><a data-target="#pic4" data-toggle="tab"><img src='product_images/<?php echo($pro_image_back); ?>' /></a></li>
								<?php } ?>
							</ul>
						</div>
								
						<button pid=<?php echo ($pro_id)?> id='product' class='btnWinkelmandje mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent mdl-color--blue'>Winkelmandje </button>
					
					</div>
			
					
                    <div class="details col-sm-4">
					
					<p class="phone-title"> <?php echo ($pro_title . " " . $pro_opslag . " " . $pro_color); ?> </p>
					
						<p class="variant-price mdl-color-text--blue">
                           <span>€ <?php echo ($pro_price)?></span>
						</p>
						
                        <div><span>Artikelnummer: <?php echo $pro_id ?></span></div>
                        <div><span>Merk: <?php echo $pro_brand ?></span></div>
						<div><span>Opslag: <?php echo $pro_opslag ?></span></div>
                        <div><span>Garantie: 2 jaar</span></div>
						
						<div class="preview-same-model"> 
							<p>Kleur Kiezen:</p>
							<?php
								$intTeller_models = 0;
								$intSize_modelArray = count($phone_models);
								while($intTeller_models < $intSize_modelArray) {
									$strPhone = $phone_models[$intTeller_models];
									$keywords = preg_split("/[\s,]+/", $strPhone);
									$phone_id_pv = $keywords[0];
									$phone_img_pv = $keywords[1];
									echo ("<li><a href='ProductDetails.php?id=$phone_id_pv&category=$cid'><img src='product_images/$phone_img_pv'/></a></li>");
									$intTeller_models++;
								}							
							?>
							
							
						</div>
                    </div>            	
            </body>
        </html>