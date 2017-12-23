<!DOCTYPE html>

<html>
<head>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-comptable" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content=" c'est une boutique de vente en ligne d'article">
	<meta name="author" content=" Gnaly Genevieve">

	 <title> boutique anabelle</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
<div class="container">
	<div class="row"><!-- menu -->
		<nav class="navbar navbar-default" role= navigation>
			<div class="container-fluid">
				<a class="navbar-brand" href="#">
				 <h4 style="color: red" > Anabelle Boutique </h4> </a>
				<ul class="nav navbar-nav">
					<li class="active"> <a href="#"> accueil </a></li>
					<li> <a href="#"> contact </a> </li>
					<li> <a href="admin.php"> admin </a> </li>
					
				</ul>
			 </div>
		</nav>
		<div class="row">
			<img src="img/image1.jpg" width="100%" height="250px">
			
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2 col-md-12">
			<?php
			$n= 1;
			while ( $n<=5) {
			
			
			?> 

			
			<div class="row" > <!--ligne de l'article le grand bloc de presentation de vetement -->
				<div class="row">
					<div class=" col-md-10">  <h1> longue robe </h1> </div>
					
					<div class=" col-md-2"> <h3 style="color: red"> 20 000 </h3> </div>
				</div>
				
				<div class="row">
					<div class="col-md-10"> <b> une longue robe en soie de couleur verte </b> </div>
					
					<div class="col-md-2"> <img src="img/image.jpeg" width="100%" height="200px"></div>	
						
					</div>
					<div class="row">
						<h4 style="color:green"> stock: 10 </h4>
					</div>
					
					
				</div>
				<?php 
					$n++;
				}
					 ?>
				
			</div>
		</div>
			
		
	</div>
	</div>
	
</div><!-- /container -->



















<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>