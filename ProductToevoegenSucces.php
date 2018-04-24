<?php
    include_once "db.php";
    
    $category_id = $_POST['product_cat'];
	$brand_id = $_POST['product_brand'];
    $ProductNaam = $_POST['product_title'];
    $Prijs = $_POST['product_price'];
    $Product_beschrijving = $_POST['product_desc'];
    $Images = $_POST['product_image'];
    $Keyword = $_POST['product_keywords'];
    
    $sql = "INSERT INTO products (product_cat, product_brand, product_title, product_price, product_desc, product_image, product_keywords) VALUES 
	('$category_id', '$brand_id', '$ProductNaam', '$Prijs', '$Product_beschrijving', '$Images', '$Keyword');";
    
    mysqli_query($con, $sql);

    
    
    header("Location: ProductToevoegen.php?ProductToevoegen=succes");
?>
    