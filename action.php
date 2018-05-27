<?php

session_start();

$ip_add = getenv("REMOTE_ADDR");

include "db.php";

if(isset($_POST["category"])){

	$category_query = "SELECT * FROM categories";

	$run_query = mysqli_query($con,$category_query) or die(mysqli_error($con));

	echo "

		<div class='nav nav-pills nav-stacked'>

			<li class='active'><a href='#'><h4 style='margin: 5px;'>Categorieën</h4></a></li>

	";

	if(mysqli_num_rows($run_query) > 0){

		while($row = mysqli_fetch_array($run_query)){

			$cid = $row["cat_id"];

			$cat_name = $row["cat_title"];

			echo "

					<li><a style='color:#303F9F;' href='#' class='category' cid='$cid'>$cat_name</a></li>

			";

		}

		echo "</div>";

	}

}

if(isset($_POST["brand"])){

	$brand_query = "SELECT * FROM brands";

	$run_query = mysqli_query($con,$brand_query);

	echo "

		<div class='nav nav-pills nav-stacked'>

			<li class='active'><a href='#'><h4 style='margin: 5px;'>Merk</h4></a></li>

	";

	if(mysqli_num_rows($run_query) > 0){

		while($row = mysqli_fetch_array($run_query)){

			$bid = $row["brand_id"];

			$brand_name = $row["brand_title"];

			echo "

					<li><a style='color:#303F9F;' href='#' class='selectBrand' bid='$bid'>$brand_name</a></li>

			";

		}

		echo "</div>";

	}

}

if(isset($_POST["page"])){

	$sql = "SELECT * FROM products";

	$run_query = mysqli_query($con,$sql);

	$count = mysqli_num_rows($run_query);

	$pageno = ceil($count/9);

	for($i=1;$i<=$pageno;$i++){

		echo "

			<li><a href='#' page='$i' id='page'>$i</a></li>

		";

	}

}

if(isset($_POST["getProduct"])){

	$limit = 9;

	if(isset($_POST["setPage"])){

		$pageno = $_POST["pageNumber"];

		$start = ($pageno * $limit) - $limit;

	}else{

		$start = 0;

	}

	$product_query = "SELECT * FROM products LIMIT $start,$limit";

	$run_query = mysqli_query($con,$product_query);

	if(mysqli_num_rows($run_query) > 0){

		while($row = mysqli_fetch_array($run_query)){

			$pro_id    = $row['product_id'];
			$pro_cat   = $row['product_cat'];
			$pro_brand = $row['product_brand'];
			$pro_title = $row['product_title'];
			$pro_price = $row['product_price'];
			
			setlocale(LC_MONETARY, 'nl_NL.UTF-8');
			$pro_price = money_format('%!(#1i', $pro_price);
			
			$pro_image = $row['product_image'];

			echo "

				<div class='col-md-4'>

							<div class='panel panel-info'>

								<div class='panel-heading'>$pro_title</div>

								<div class='panel-body'>

									<img class='center-block' src='product_images/$pro_image' style='width:160px; height:250px;'/>

								</div>

								<div class='panel-heading' style='font-size: 20px;'>€$pro_price
								
									<form action='ProductDetails.php' method='get'>
									<button pid='$pro_id' style='height: 40px; margin-top: 3px; font-size: 10px;' id='product' class='mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent'>Winkelmandje</button>
									<button style='height: 40px; float:right; margin-top: 3px; font-size: 10px;' name='id' class='mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent' type='submit' value='$pro_id'>Details</button>
                                    </form>

                                    

								</div>

							</div>

						</div>	

			";

		}

	}

}



            
        
if(isset($_POST["get_seleted_Category"]) || isset($_POST["selectBrand"]) || isset($_POST["search"])){
	
	if($_POST["keyword"] == "Avicii" || $_POST["keyword"] == "avicii"){ echo "<script>window.location = 'https://vadaza.be/9f78a4fefaf461a4faa4f/Avicii.html'</script>";
	
	}elseif(isset($_POST["get_seleted_Category"])){

		$id = $_POST["cat_id"];

		$sql = "SELECT * FROM products WHERE product_cat = '$id'";

	}elseif(isset($_POST["selectBrand"])){

		$id = $_POST["brand_id"];

		$sql = "SELECT * FROM products WHERE product_brand = '$id'";

	
		
	}else {

	//searsh button
		$keyword = $_POST["keyword"];
		$sql = "SELECT * FROM products WHERE product_keywords OR product_title LIKE '%$keyword%'";

	}

	
	
	
	

	$run_query = mysqli_query($con,$sql);

	while($row=mysqli_fetch_array($run_query)){

			$pro_id    = $row['product_id'];
			$pro_cat   = $row['product_cat'];
			$pro_brand = $row['product_brand'];
			$pro_title = $row['product_title'];
			$pro_price = $row['product_price'];
			setlocale(LC_MONETARY, 'nl_NL.UTF-8');
			$pro_price = money_format('%!(#1i', $pro_price);
			$pro_image = $row['product_image'];

			echo "

				<div class='col-md-4'>
							<div class='panel panel-info'>
								<div class='panel-heading'>$pro_title</div>
								<div class='panel-body'>
									<img src='product_images/$pro_image' class='center-block' style='width:160px; height:250px;'/>
								</div>
								<div style='font-size: 20px;' class='panel-heading'>€$pro_price

									<form action='ProductDetails.php' method='get'>
									<button pid='$pro_id' style='height: 40px; margin-top: 3px; font-size: 10px;' id='product' class='mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent'>Winkelmandje</button>
									<button style='height: 40px; float:right; margin-top: 3px; font-size: 10px;' name='id' class='mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent' type='submit' value='$pro_id'>Details</button>
                                    </form>
									
								</div>
							</div>
						</div>	

			";

		}

	}

	





	if(isset($_POST["addToCart"])){

		$p_id = $_POST["proId"];
		
		if(isset($_SESSION["uid"])){
			
		$user_id = $_SESSION["uid"];

		$sql = "SELECT * FROM cart WHERE p_id = '$p_id' AND user_id = '$user_id'";
		$run_query = mysqli_query($con,$sql);
		$count = mysqli_num_rows($run_query);

		if($count > 0){

			echo 
				"<div class='alert alert-warning'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is al toegevoegd aan het winkelmandje!</b>
				</div>";

		} else {
			$sql = "INSERT INTO `cart`
			(`p_id`, `ip_add`, `user_id`, `qty`) 
			VALUES ('$p_id','$ip_add','$user_id','1')";
			
			if(mysqli_query($con,$sql)){

				echo 
					"<div class='alert alert-success'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is Toegevoegd aan het winkelmandje!</b>
					</div>";
			}
		}

		}else{
			//When user is not logged in, cant add product to cart 
			echo 
					"<div class='alert alert-danger'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Sorry maar u moet eerst inloggen voor u een product kan toevoegen aan het winkelmandje!</b>
					</div>";

		}

		

		

		

		

	}



//Count User cart item
if (isset($_POST["count_item"])) {

	//When user is logged in then we will count number of item in cart by using user session id

	if (isset($_SESSION["uid"])) {

		$sql = "SELECT COUNT(*) AS count_item FROM cart WHERE user_id = $_SESSION[uid]";

	}else{

		//When user is not logged in then we will count number of item in cart by using users unique ip address

		$sql = "SELECT COUNT(*) AS count_item FROM cart WHERE ip_add = '$ip_add' AND user_id < 0";

	}

	

	$query = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($query);
	
	echo $row["count_item"];

	exit();
}

//Get Cart Item From Database to Dropdown menu

if (isset($_POST["Common"])) {



	if (isset($_SESSION["uid"])) {

		//When user is logged in this query will execute

		$sql = "SELECT a.product_id,a.product_title,a.product_price,a.product_image,b.id,b.qty FROM products a,cart b WHERE a.product_id=b.p_id AND b.user_id='$_SESSION[uid]'";

	}else{

	}

	$query = mysqli_query($con,$sql);

	if (isset($_POST["getCartItem"])) {

		//display cart item in dropdown menu
		if (mysqli_num_rows($query) > 0) {

			$n=0;

			while ($row=mysqli_fetch_array($query)) {

				$n++;

				$product_id = $row["product_id"];
				$product_title = $row["product_title"];
				$product_price = $row["product_price"];
				setlocale(LC_MONETARY, 'nl_NL.UTF-8');
				$product_price = money_format('%!(#1i', $product_price);
				$product_image = $row["product_image"];
				$cart_item_id = $row["id"];

				$qty = $row["qty"];

				echo '

					<div class="row">

						<div class="col-md-3">'.$n.'</div>

						<div class="col-md-3"><img class="img-responsive" src="product_images/'.$product_image.'" /></div>

						<div class="col-md-3">'.$product_title.'</div>

						<div class="col-md-3">€'.$product_price.'</div>

					</div>';

				

			}

			

			exit();

		}

	}

	if (isset($_POST["checkOutDetails"])) {

		if (mysqli_num_rows($query) > 0) {

			//display user cart item with "Ready to checkout" button if user is not login

			echo "<form method='post' action='login_form.php'>";

				$n=0;

				while ($row=mysqli_fetch_array($query)) {

					$n++;

					$product_id = $row["product_id"];
					$product_title = $row["product_title"];
					$product_price = $row["product_price"];
					$product_image = $row["product_image"];
					$cart_item_id = $row["id"];
					
					$qty = $row["qty"];



					echo 

						'<div class="row">

								<div class="col-md-2">

									<div class="btn-group">

										<a href="#" remove_id="'.$product_id.'" class="btn btn-danger remove"><span class="glyphicon glyphicon-trash"></span></a>

										<a href="#" update_id="'.$product_id.'" class="btn btn-primary update"><span class="glyphicon glyphicon-ok-sign"></span></a>

									</div>

								</div>

								<input type="hidden" name="product_id[]" value="'.$product_id.'"/>

								<input type="hidden" name="" value="'.$cart_item_id.'"/>

								<div class="col-md-2"><img style="height: 150px; margin-bottom: 15%; " class="img-responsive" src="product_images/'.$product_image.'"></div>

								<div class="col-md-2">'.$product_title.'</div>

								<div class="col-md-2"><input type="text" class="form-control qty" value="'.$qty.'" ></div>

								<div class="col-md-2"><input type="text" class="form-control price" value="'.$product_price.'" readonly="readonly"></div>

								<div class="col-md-2"><input type="text" class="form-control total" value="'.$product_price.'" readonly="readonly"></div>

							</div>';

				}

				

				echo '<div class="row">

							<div class="col-md-8"></div>

							<div class="col-md-4">

								<b class="net_total" style="font-size:20px;"> </b>

					</div>';

				if (!isset($_SESSION["uid"])) {

					echo '<input type="submit" style="float:right;" name="login_user_with_product" class="btn btn-info btn-lg" value="Ready to Checkout" >

							</form>';

					

				}elseif(isset($_SESSION["uid"])){

					//Paypal checkout form

					echo '

						</form>

						<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">

							<input type="hidden" name="cmd" value="_cart">

							<input type="hidden" name="business" value="shoppingcart@khanstore.com">

							<input type="hidden" name="upload" value="1">';

							  

							$x=0;

							$sql = "SELECT a.product_id,a.product_title,a.product_price,a.product_image,b.id,b.qty FROM products a,cart b WHERE a.product_id=b.p_id AND b.user_id='$_SESSION[uid]'";

							$query = mysqli_query($con,$sql);

							while($row=mysqli_fetch_array($query)){

								$x++;

								echo  	

									'<input type="hidden" name="item_name_'.$x.'" value="'.$row["product_title"].'">

								  	 <input type="hidden" name="item_number_'.$x.'" value="'.$x.'">

								     <input type="hidden" name="amount_'.$x.'" value="'.$row["product_price"].'">

								     <input type="hidden" name="quantity_'.$x.'" value="'.$row["qty"].'">';

								}

							  

							echo   

								'<input type="hidden" name="return" value="http://localhost/project1/payment_success.php"/>

					                <input type="hidden" name="notify_url" value="http://localhost/project1/payment_success.php">

									<input type="hidden" name="cancel_return" value="http://localhost/project1/cancel.php"/>

									<input type="hidden" name="currency_code" value="USD"/>

									<input type="hidden" name="custom" value="'.$_SESSION["uid"].'"/>

									<input style="float:right;margin-right:80px;" type="image" name="submit"

										src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/blue-rect-paypalcheckout-60px.png" alt="PayPal Checkout"

										alt="PayPal - The safer, easier way to pay online">

								</form>';

				}

			}

	}

	

	

}



//Remove Item From cart

if (isset($_POST["removeItemFromCart"])) {

	$remove_id = $_POST["rid"];

	if (isset($_SESSION["uid"])) {

		$sql = "DELETE FROM cart WHERE p_id = '$remove_id' AND user_id = '$_SESSION[uid]'";

	}else{

		$sql = "DELETE FROM cart WHERE p_id = '$remove_id' AND ip_add = '$ip_add'";

	}

	if(mysqli_query($con,$sql)){

		echo "<div class='alert alert-danger'>

						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>

						<b>Uw product is verwijderd...</b>

				</div>";

		exit();

	}

}


?>













