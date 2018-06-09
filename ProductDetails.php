<?php
session_start();


include "db.php";



$proID = 0;
$pro_brand= "null";
$pro_image = "null";
$pro_price = "null";


if(isset($_GET['id'])) {
    $proID = $_GET['id'];
}



$product_query = "SELECT * FROM products LEFT JOIN brands ON product_brand = brands.brand_id WHERE product_id = '$proID'";
$run_query = mysqli_query($con,$product_query);
if(mysqli_num_rows($run_query) > 0){
    while($row = mysqli_fetch_array($run_query)){
        $pro_id    = $row['product_id'];
        $pro_cat   = $row['product_cat'];
		$pro_color_id  = $row['color_id'];
        $pro_brand = $row['brand_title'];
        $pro_title = $row['product_title'];
		$pro_fullTitle = $row['product_fullTitle'];
        $pro_price = $row['product_price'];
        setlocale(LC_MONETARY, 'nl_NL.UTF-8');
        $pro_price = money_format('%!(#1i', $pro_price);
        $pro_image = $row['product_image'];
		$pro_image_front = $row['product_image_front'];
		$pro_image_side = $row['product_image_side'];
		$pro_image_back = $row['product_image_back'];
		$pro_color = $row['product_color'];
		
        $gsm_ram = $row['gsm_ram'];
        $gsm_opslag = $row['gsm_opslag'];
		$gsm_schermDiagonaal = $row['gsm_schermDiagonaal'];
		$gsm_batterijDuur = $row['gsm_batterijDuur'];
		$gsm_vinger = $row['gsm_vinger'];
		if($gsm_vinger){
			$gsm_vinger = "<i class=' check material-icons mdl-color-text--green'>done</i>";
		}else{$gsm_vinger = "<i class=' cross material-icons mdl-color-text--red'>clear</i>";}
		
		
		
		$hoesje_model = $row['hoesje_model'];
		$hoesje_materiaal = $row['hoesje_materiaal'];
		
		$hoesje_pasje = $row['hoesje_pasje'];
		if($hoesje_pasje){
			$hoesje_pasje = "<i class=' check material-icons mdl-color-text--green'>done</i>";
		}else{$hoesje_pasje = "<i class=' cross material-icons mdl-color-text--red'>clear</i>";}
		
		$hoesje_water = $row['hoesje_water'];
		if($hoesje_water){
			$hoesje_water = "<i class=' check material-icons mdl-color-text--green'>done</i>";
		}else{$hoesje_water = "<i class=' cross material-icons mdl-color-text--red'>clear</i>";}
		
		$hoesje_val = $row['hoesje_val'];
		if($hoesje_val){
			$hoesje_val = "<i class=' check material-icons mdl-color-text--green'>done</i>";
		}else{$hoesje_val = "<i class=' cross material-icons mdl-color-text--red'>clear</i>";}
		
		
		
		$powerbank_capaciteit = $row['powerbank_capaciteit'];
		$powerbank_vermogen = $row['powerbank_vermogen'];
		$powerbank_batterijStatus = $row['powerbank_batterijStatus'];
		$powerbank_gewicht = $row['powerbank_gewicht'];
		$powerbank_stroomsterkte = $row['powerbank_stroomsterkte'];
		
		$screen_materiaal = $row['screen_materiaal'];
		$screen_bescherming = $row['screen_bescherming'];
		
		$oordopje_type = $row['oordopje_type'];
		$oordopje_bluetooth = $row['oordopje_bluetooth'];
		$oordopje_noiseCancel = $row['oordopje_noiseCancel'];
		$oordopje_waterBestendig = $row['oordopje_waterBestendig'];
		
		$koptelefoon_type = $row['koptelefoon_type'];
		$koptelefoon_bluetooth = $row['koptelefoon_bluetooth'];
		$koptelefoon_noiseCancel = $row['koptelefoon_noiseCancel'];
		$koptelefoon_mic = $row['koptelefoon_mic'];
		$koptelefoon_geluidsKwaliteit = $row['koptelefoon_geluidsKwaliteit'];
		
    }
}

$intTeller_models = 0;
$phone_models = array();
$model_query = "SELECT product_id, product_image FROM products WHERE color_id= '$pro_color_id'";
$run_query = mysqli_query($con,$model_query);
if(mysqli_num_rows($run_query) > 0){
    while($row = mysqli_fetch_array($run_query)){
        $phone_id_pv = $row['product_id'];
        $phone_img_pv = $row['product_image'];
		$phone_models[$intTeller_models] = $phone_id_pv." ".$phone_img_pv;
		$intTeller_models++;
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
?>

<!DOCTYPE html>
<html>
    <head>
		
        <title>Vadaza</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue-red.min.css"> 
		<link rel="stylesheet" href="css/material-icons.css">
		
		<link type="text/css" href="css/style.css" rel="stylesheet">
        <link type="text/css" href="css/import.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">	
        <script src="js/jquery2.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="main.js"></script>
		<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

        

    </head>

    <body>
 
<?php if(!isset($_SESSION["uid"])){
    include_once 'indexMenu.php';
	}
	else{
	include_once 'profileMenu.php';
	} 
	?>         
			
			<div class='wrapper'>
                    <div class="phone-wrapper col-sm-4">
						<div class="thumbnail-carousel">
							<div class="preview-pic tab-content">
								<div class="tab-pane active" id="pic1"><img src='product_images/<?php echo($pro_image); ?>' /></div>
								
								<?php if($pro_image_front != '0'){ ?>
								<div class="tab-pane" id="pic2"><img src='product_images/<?php echo($pro_image_front); ?>' /></div>	
								
								<?php } if($pro_image_side != '0'){ ?>
								<div class="tab-pane" id="pic3"><img src='product_images/<?php echo($pro_image_side); ?>' /></div>	
								
								<?php } if($pro_image_back != '0'){ ?>
								<div class='tab-pane' id='pic4'><img src='product_images/<?php echo($pro_image_back);?>' /></div>
							<?php } ?>
							</div>
							
							<ul class="preview-thumbnail ">
							
								<li class="active"><a data-target="#pic1" data-toggle="tab"><img src='product_images/<?php echo($pro_image); ?>' /></a></li>
								<?php if($pro_image_front != '0'){ ?>
								<li><a data-target="#pic2" data-toggle="tab"><img src='product_images/<?php echo($pro_image_front); ?>' /></a></li>
								<?php } if($pro_image_side != '0'){ ?>
								<li><a data-target="#pic3" data-toggle="tab"><img src='product_images/<?php echo($pro_image_side); ?>' /></a></li>
								<?php } if($pro_image_back != '0'){ ?>
								<li><a data-target='#pic4' data-toggle='tab'><img src='product_images/<?php echo($pro_image_back);?>' /></a></li>
							<?php } ?>
							</ul>
						</div>
					
					
						<button pid=<?php echo ($pro_id)?> id='product' class='btnWinkelmandje mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent mdl-color--blue'>Winkelmandje </button>
						
						<table class="table table-striped tblSpecifications">
						<thead>
							<tr>						
								<th >Beknopte specificaties</th>
								<th ></th>
							</tr>
						</thead>
						
					<?php if($pro_cat == 2){ 
						echo "
							<tbody>
								<tr >				
									<td>Ram-geheugen</td>
									<td>$gsm_ram</td>
								</tr>
								<tr>						
									<td>Totale opslagcapaciteit</td>
									<td>$gsm_opslag</td>
								</tr>
								<tr>					
									<td>Schermdiagonaal</td>
									<td>$gsm_schermDiagonaal</td>
								</tr>
								<tr>					
									<td>Batterijduur</td>
									<td>$gsm_batterijDuur</td>
								</tr>
								<tr>					
									<td>Vingerafdruksensor</td>	
									<td>$gsm_vinger</td>
								</tr>
							</tbody>";
							
					}else if($pro_cat == 3){
						
						echo "
							<tbody>
								<tr >				
									<td>Model</td>
									<td>$hoesje_model</td>
								</tr>
								<tr>						
									<td>Materiaal</td>
									<td>$hoesje_materiaal</td>
								</tr>
								<tr>					
									<td>Plek voor Pasjes</td>
									<td>$hoesje_pasje</td>
								</tr>
								<tr>					
									<td>Waterbestendig</td>
									<td>$hoesje_water</td>
								</tr>
								<tr>					
									<td>Valbestendig</td>	
									<td>$hoesje_val</td>
								</tr>
							</tbody>";
					
					 }else{ 						
						echo "<td>Geen specificaties</td>";
					}?>
						
					</table>
					
					</div>
			
					
                    <div class="details col-sm-6">
					
					<p class="phone-title"> <?php echo ($pro_fullTitle); ?> </p>
					
						<p class="price-wrapper">
                           <span class="variant-price mdl-color-text--blue">€ <?php echo ($pro_price)?></span> <span class="price-date mdl-color-text--green"> <i class="price-icon material-icons">done</i> Morgen in huis</span>
						</p>
						
						<div class="detail-wrapper">
                       
					   
					   <div class="row"><i class="infoIcon material-icons">label</i> <p class="info">  Voor <strong>01:00 uur</strong>  besteld, morgen <strong>gratis</strong> in huis.</p> </div>
					   <div class="row"><i class="infoIcon material-icons">label</i> <p class="info"><strong>2 jaar</strong> garantie op dit product.</p></div>
					   <div class="row"><i class="infoIcon material-icons">label</i> <p class="info">Binnen 30 dagen <strong>gratis</strong> retourneren.</p></div>
					   <div class="row"><i class="infoIcon material-icons">label</i> <p class="info">Hulp nodig? <strong>Dag</strong> en <strong>nacht</strong> klantenservice.</p></div>
					   <div class="row"><i class="infoIcon material-icons">label</i> <p class="info">Leverbaar in zowel <strong>Nederland</strong> als <strong>België</strong>.</p></div>					   
					   
						</div>
						
						<div class="preview-same-model"> 
							<p>Kleur Kiezen:</p>
							<p class="kiesKleur"><?php if($pro_color_id == 0) { echo "Kleur kiezen niet mogelijk.";} ?></p>
							<?php
								$intTeller_models = 0;
								$intSize_modelArray = count($phone_models);
								while($intTeller_models < $intSize_modelArray) {
									$strPhone = $phone_models[$intTeller_models];
									$keywords = preg_split("/[\s,]+/", $strPhone);
									$phone_id_pv = $keywords[0];
									$phone_img_pv = $keywords[1];
									
									if($pro_color_id != 0)
									{
									echo ("<li><a href='ProductDetails.php?id=$phone_id_pv'><img src='product_images/$phone_img_pv'/></a></li>");
									}else{}
									$intTeller_models++;
								}							
							?>
							
						</div>    
                    </div>
			
				</div>
	
						
				
			
            </body>
        </html>