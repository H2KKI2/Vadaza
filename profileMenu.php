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
                <li><a href="contact/contact.php"><span class="glyphicon glyphicon-modal-window"></span>Over Ons / support</a></li>
              <li><a href="#" id="cart_container" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Winkelmandje <span class="badge">0</span></a>
                    <div class="dropdown-menu" style="width:500px;">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <div class="row"> 
                                    <div class="col-md-2">Artikelnr.</div>
                                    <div class="col-md-3">product foto</div>
                                    <div class="col-md-4">product naam</div>
                                    <div class="col-md-3">prijs in euro</div>
                                </div>		
                            </div>

                            <div class="panel-body">

                                <div style="overflow-x: hidden" class="pre-scrollable">
                                    <div id="cart_product">

                                    </div>
                                </div>

                            </div>

                        </div>

                        <a href="cart.php" class="btn btn-warning btn-bewerken">Bewerken&nbsp;&nbsp;<span class="glyphicon glyphicon-edit"></span></a>
                    </div>

                </li>

                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><?php echo "Hoi, ".$_SESSION["name"]; ?><span class="caret"></span></a>

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