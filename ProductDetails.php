<?php

include "db.php";

$proID = 0;
$pro_brand= "null";
$pro_image = "null";
$pro_price = "null";


if(isset($_GET['id'])) {
    $proID = $_GET['id'];
}
   


	$product_query = "SELECT * FROM products WHERE product_id= '$proID'";
	$run_query = mysqli_query($con,$product_query);
	if(mysqli_num_rows($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$pro_id    = $row['product_id'];
			$pro_cat   = $row['product_cat'];
			$pro_brand = $row['product_brand'];
			$pro_title = $row['product_title'];
			$pro_price = $row['product_price'];
			$pro_image = $row['product_image'];
            $pro_ram = $row['product_ram'];
            $pro_opslag = $row['product_opslag'];
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

?>

<!DOCTYPE html>
<html>
<head>
		<meta charset="UTF-8">
		<title>Vadaza</title>		
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link type="text/css" href="css/import.css" rel="stylesheet" >
        <link type="text/css" href="style.css">
    </head>
<body>
    
    
    
    
  <div class="wait overlay">
	<div class="loader"></div>
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
        </div>
                </div>
          
	
                
                
                
                
                
    
<div class=b-main>
  <div class=b-list>
    <ul class=list-menu>
     
      <div class=navigation-for-large-sizes>
        
       <i class=checked-background></i>
      </div>
    </ul>
  </div>
  <div class=b-variant>
   <figure class=variant-wrapper>
     <p class=description-variant>
      
       <span></span>
       <i class=description-variant-span></i>
     </p>
     <img src='product_images/<?php echo($pro_image); ?>'>
     <div>
       <p class=variant-price>
         Prijs: <br><span><?php echo ($pro_price)?></span><br> incl. btw
       </p>
      </div>
       <ul class=variant-description-list>
         <li><span>Artikelnummer:</span></li>
         <li><span>Merk:<?php echo $pro_brand ?></span></li>
         <li><span>Garantie: 2jaar</span></li>
         <li><span>Garantietype</span></li>
       </ul>
      <button class=variant-price-calculate>in winkelmandje</button>
   </figure>
   <figure class=variant-wrapper>
     <p class=description-variant>
    
   </figure>
  </div>

  <div class=b-description>
    <div class=description-profile>
      <input type=checkbox id=description-manipulation-profile><label class=description-describe-text for=description-manipulation-profile>Belangrijke Specificaties</label>
      <div class=description-list-wrapper>
       <table class=description-table-list>
         <tr class=description-table-list-name>
           <th>Geheugen</th>
           <th></th>
           <th></th>
           <th></th>
         </tr>
        <tr>
          <td>RAM-geheugen</td>
          <td><?php echo ($pro_ram)?>GB</td>
          
        </tr>
        <tr>
          <td>Totale opslagcapaciteit</td>
          <td><?php echo ($pro_opslag)?>GB</td>
          
        </tr>
              <tr>
          <td>Geheugenkaartlezer</td>
          <td><?php echo ($pro_Geheugenkaarlezer)?></td>
          
        </tr>
             <tr class=description-table-list-name>
           <th>Algemene eigenschappen</th>
           <th></th>
           <th></th>
           <th></th>
         </tr>
        <tr>
          <td>Introductiedatum</td>
          <td><?php echo ($pro_Introductiedatum)?></td>
          
        </tr>
        <tr>
          <td>SAT-categorie</td>
          <td><?php echo ($pro_SATcat)?></td>
          
        </tr>
        <tr>
          <td>SAT-waarde</td>
          <td><?php echo ($pro_SATwaarde)?>W/kg</td>
          
        </tr>
        <tr>
          <td>Besturingssysteem</td>
          <td><?php echo ($pro_OS)?></td>
          
        </tr>
        <tr>
          <td>Versie IOS</td>
          <td><?php echo ($pro_versie)?></td>
          
           
        </tr>
                   <tr>
          <td>type mobiele telefoon</td>
          <td><?php echo ($pro_typemobiel)?></td>
          
        </tr>
              <tr>
          <td>spraakbesturing</td>
          <td><?php echo ($pro_spraakbesturing)?></td>
          
        </tr>
              <tr>
          <td>Aanbevolen voor VR</td>
          <td><?php echo ($pro_AanbevolenVR)?></td>
          
        </tr>
                <tr class=description-table-list-name>
           <th>Beeldscherm</th>
           <th></th>
           <th></th>
           <th></th>
         </tr>
        <tr>
          <td>Schermdiagonaal</td>
          <td>4.7inch</td>
          
        </tr>
        <tr>
          <td>Resolutie</td>
          <td>750x1334 pixels</td>
          
        </tr>
        <tr>
          <td>pixeldichtheid</td>
          <td>326PPI</td>
          
        </tr>
        <tr>
          <td>Touchscreen</td>
          <td>Ja</td>
          
        </tr>
        <tr>
          <td>Virtueel-toetsenbord</td>
          <td>Ja</td>
          
           
        </tr>
                   <tr>
          <td>Scherpte</td>
          <td>HD Ready(720p)</td>
          
        </tr>
              <tr>
          <td>Schermtype</td>
          <td>IPS-LCD</td>
          
        </tr>
                  <tr class=description-table-list-name>
           <th>Simkaart</th>
           <th></th>
           <th></th>
           <th></th>
         </tr>
        <tr>
          <td>Simlockvrij</td>
          <td>Ja</td>
          
        </tr>
        <tr>
          <td>Type simkaartslot</td>
          <td>Nano sim</td>
          
        </tr>
        <tr>
          <td>Dual sim</td>
          <td>Nee</td>
          
        </tr>
                    <tr class=description-table-list-name>
           <th>Camera</th>
           <th></th>
           <th></th>
           <th></th>
         </tr>
        <tr>
          <td>Camera</td>
          <td>Ja</td>
          
        </tr>
        <tr>
          <td>Aantal megapixels</td>
          <td>8 megapixels</td>
          
        </tr>
        <tr>
          <td>Autofocus</td>
          <td>Ja</td>
          
        </tr>
        
        

      </table>
     </div>
    </div>
    <div class=description-security>
      <input type=checkbox id=description-manipulation-security><label class=description-describe-text for=description-manipulation-security>Meer Specificaties</label>
      <div class=description-list-wrapper>
       <table class="description-table-list visible-table">
         <tr class=description-table-list-name>
           <th>Fysieke eigenschappen</th>
           <th></th>
           <th></th>
           <th></th>
         </tr>
        <tr>
          <td>Hoogte</td>
          <td>13.8cm</td>
          
        </tr>
        <tr>
          <td>Breedte</td>
          <td>6.7cm</td>
          
        </tr>
        <tr>
          <td>Diepte</td>
          <td>0.71cm</td>
          
        </tr>
        <tr>
          <td>Gewicht</td>
          <td>0.143KG</td>
          
        </tr>
        <tr>
          <td>Materiaal</td>
          <td>Glas/Metaal</td>
          
        </tr>
        <tr>
          <td>waterbestendig</td>
          <td>Nee</td>
          
        </tr>
            <tr>
          <td>stofbestendig</td>
          <td>Nee</td>
          
        </tr>
            <tr>
          <td>schokbestendig</td>
          <td>Nee</td>
          
        </tr>
            <tr>
          <td>aansluitingen</td>
          <td>Apple Lightning</td>
         
        </tr>
            <tr>
          <td>Hoofdtelefoonaansluiting</td>
          <td>Ja</td>
          
        </tr>
             <tr>
          <td>geluidsweergave</td>
          <td>Mono</td>
          
        </tr>
        
      </table>
      </div>
    </div>

    </body>
</html>