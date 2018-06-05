	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only">navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>					
				</button>
					<a href="index.php" class="navbar-brand">Vadaza</a>
			</div>
			
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
				<li><a href="index.php"><span class="glyphicon glyphicon-modal-window"></span>Product</a></li>
				<li style="width:300px;left:10px;top:10px;"><input type="text" class="form-control" placeholder="Zoeken" id="search"></li>
				<li style="top:10px;left:20px;"><button class="btn btn-primary" id="search_btn"><span class="glyphicon glyphicon-search" style='float:right;'></span></button></li>
			</ul>
			
            <ul class="nav navbar-nav navbar-right">
			<li><a href="contact/contact.php"><span class="glyphicon glyphicon-modal-window"></span>Over Ons / support</a></li>
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Winkelmandje<span style="margin-left: 5px;" class="badge">0</span></a>
					<div class="dropdown-menu" style="width: 500px">
						<div class="panel panel-success">
						
							<div class="panel-heading">
								<div class="row"> 
									<div class="col-md-3">Artikelnr.</div>
									<div class="col-md-3">foto</div>
									<div class="col-md-3">naam</div>
									<div class="col-md-3">prijs in euro</div>
								</div>		
							</div>
							
							<div class="panel-body">
							
							<div style="overflow-x: hidden;" class="pre-scrollable">
								<div id="cart_product">
								
								</div>
								</div>
								
							</div>
							
						</div>
							<a href="cart.php" class="btn btn-warning btn-bewerken">Bewerken&nbsp;&nbsp;<span class="glyphicon glyphicon-edit"></span></a>
							
						
					</div>
				</li>
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>Aanmelden</a>
					<ul class="dropdown-menu">
					<div class="panel-primary">
						<div style="width:300px;">
							<div>
								<div class="panel-primary">
								<div class="panel-heading panel-primary">Login</div>
								</div>
								</diV>
									<form onsubmit="return false" id="login">
										
										
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label login-tekst">
										<label class="mdl-textfield__label" for="email">Email</label>
										<input class="mdl-textfield__input" type="email" name="email" id="email">
										</div>
										
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label login-tekst">
										<label class="mdl-textfield__label" for="email">Wachtwoord</label>
										<input class="mdl-textfield__input" type="password" name="password" id="password">
										</div>
										
										<br>
										<a href="#" style="color:blue; margin-left: 2%; list-style:none;">Wachtwoord vergeten?</a>
										<input type="submit" class="btn btn-success" value="Aanmelden" style="float:right; margin-right: 2%;">
                                        <div><a href="customer_registration.php?register=1" style="color:blue; margin-left: 2%;">Registreren</a></div>
										
									</form>
									
								</div>
								<div class="panelfooter" id="e_msg"></div>
							</div>
						</div>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>
