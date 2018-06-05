

<html>
  <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="A brief description of the website."/>
  
  <!-- TITLE -->
	<title>Contact</title>
	
  <!-- LINKS -->
	<link rel="stylesheet" href="style.css">
	<script src="https://use.fontawesome.com/b406684c95.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700" rel="stylesheet">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
	
  <!-- getmdl -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
	<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
	
</head>

<body>
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
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">
				<li><a href="/profile.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
				<li><a href="/profile.php"><span class="glyphicon glyphicon-modal-window"></span>Smartphones</a></li>
			</ul>
		</div>
	</div>
	</div>
  <div class="wrapper">
      <div class="card">

      	<!-- HEADER -->
        <div class="avatar">
          <div class="lines"></div>
          <img src="yanu.png" alt="foto van Yanu Szapinszky"/>
        </div>
        
        <h1 id="card-name">Yanu Szapinszky</h1>
        <h2>Programmeur / webdesigner / Pool</h2>
        <div class="social">
          
          <!-- FACEBOOK ICON -->
          <a class="icon-facebook" href="https://www.facebook.com/yanu.szapinszky" target="_blank">
            <i class="fa fa-2x fa-facebook-square"></i>
          </a>
          
          <!-- GITHUB ICON -->
          <a class="icon-github" href="https://github.com/H2KKI2" target="_blank">
            <i class="fa fa-2x fa-github"></i>
          </a>
          
          <!--TWITTER ICON -->
          <a class="icon-twitter" href="#" target="_blank">
            <i class="fa fa-2x fa-twitter"></i>
          </a>
          
        </div>
      </div>
	  
	  
	  <div class="wrapper2">
      <div class="card2">

      	<!-- HEADER -->
        <div class="avatar">
          <div class="lines"></div>
          <img src="mathias.png" alt="foto van Mathias Prinsen"/>
        </div>
        
        <h1>Mathias Prinsen</h1>
        <h2>webdesigner</h2>
        <div class="social">
          
          <!-- LINKEDIN ICON -->
          <a class="icon-facebook" href="#" target="_blank">
            <i class="fa fa-2x fa-facebook-square"></i>
          </a>
          
          <!-- GITHUB ICON -->
          <a class="icon-github" href="https://github.com/Mathpsn" target="_blank">
            <i class="fa fa-2x fa-github"></i>
          </a>
          
          <!--CODEPEN ICON -->
          <a class="icon-twitter" href="#" target="_blank">
            <i class="fa fa-2x fa-twitter"></i>
          </a>
          
        </div>
      </div>
</div>

<!--support mail -->
<div  class="contact-form">
<form action="send-mail.php" method="post">

	<div class="container login-wrapper">

	<div class="row">
        <div id="naam" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label col-sm-6 form-group contact-name">
			<input name="naam" id="naam" class="mdl-textfield__input" type="text">
			<label class="mdl-textfield__label">Naam</label>
		</div>
		<div id="email" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label col-sm-6 form-group contact-email">
			<input name="email" id="email" class="mdl-textfield__input" type="email">
			<label class="mdl-textfield__label">E-mail</label>
		</div>	
    </div>

	<div class="row">
		<div class="mdl-textfield mdl-js-textfield contact-message">
			<textarea class="mdl-textfield__input contact-message-box" type="text"  id="bericht" name="bericht"></textarea>
			<label class="mdl-textfield__label" for="bericht">Bericht</label>
		</div>
	</div>	
	
	<button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent btn-versturen" >
		Versturen
	</button>
	</div>
</form>
</div>
	
</div>

    <!-- FOOTER -->
    <div class="footer">
      <p> &#169; 2018 | Yanu Szapinszky & Maxim Janssens</p>
    </div>
  
</body>

</html>
  
 
