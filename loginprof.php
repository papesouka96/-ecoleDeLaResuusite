<?php
  ini_set("display_errors", "1");
  error_reporting(E_ALL); 
	session_start();
	@$login=$_POST["login"];
	@$pass=$_POST["pass"];
	@$valider=$_POST["valider"];
	$message="";
	$message1="";
	if(isset($valider)){

		try{
			$pdo=new PDO("mysql:host=localhost;dbname=papa","root","");
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
		$res=$pdo->prepare("select * from employe where login=? and pass=? limit 1");
		$res->setFetchMode(PDO::FETCH_ASSOC);
		$res->execute(array($login,$pass));
		$tab=$res->fetchAll();
		if(count($tab)==0)
			$message1="<li>Mauvais login ou mot de passe!</li>";
		else{
			$_SESSION["autoriser"]="oui";
			$_SESSION["nomPrenom"]=strtoupper($tab[0]["nom"]." ".$tab[0]["prenom"]);
			$message.="connection reussi";
		}
	}
?>
<!DOCYTPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="styleProf.css" />
	</head>
	<body onLoad="document.fo.login.focus()">
		<header>
        <?php include("nav1.php"); ?>
			<?php if(!empty($message)){ ?>
		<div id="message"><?php echo $message ?></div>
		<?php } ?>
		
		</header>
		<div class="containt">
		       <h1>Authentification</h1>
		<form name="fo" method="post" action="">
			<div class="label">Login</div>
			<input type="text" name="login" value="<?php echo $login?>" />
			<div class="label">Mot de passe</div>
			<input type="password" name="pass" />
			<input type="submit" name="valider" value="S'authentifier" />
		</form></div>
		
		<?php if(!empty($message1)){ ?>
		<div id="message1"><?php echo $message1 ?></div>
		<?php } ?>
	</body>
</html>
