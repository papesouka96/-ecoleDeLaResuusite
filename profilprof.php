<?php
session_start();
    ini_set("display_errors", "1");
    error_reporting(E_ALL);
	
	if(@$_SESSION["autoriser"]!="oui"){
		header("location:login.php");
		exit();
	}
?>
<!DOCYTPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>
	<body>
		<div id="container" >
	<div id="infosprofil" >
		<div id="photo" > </div>
		<div id="infosperso">  
			<span class="ips" > Nom:<?=  $_SESSION["nom"] ?> </span>
			<span class="ips" > Prenom:<?=$_SESSION["prenom"]?> </span>
			<span class="ips" > Email:<?=$_SESSION["email"]?> </span>
			<span class="ips" > Statut:<?=$_SESSION["statut"]?> </span>
			<span class="ips" > Adresse:<?=$_SESSION["adresse"]?> </span>
		</div>
	</div>		
	</div>

		<header>
			Espace privé 
			<a href="deconnexion.php">Quitter la session</a>
		</header>
		<h1>
		<?php 
			echo   (date("H")<18)?("Bonjour"):("Bonsoir");
		?>
		<span>
		<?=  $_SESSION['statut'] ?> 
		</span>
		</h1>
	</body>
</html>