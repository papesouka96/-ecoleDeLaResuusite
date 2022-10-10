     
        <?php
		include("nav.php");
		?>  

	   <?php
          ini_set("display_errors", "1");
          error_reporting(E_ALL);
          $email = "thomas@waytolearnx.com";
	      @$nom=$_POST["nom"];
	      @$prenom=$_POST["prenom"];
	      @$daten=$_POST["daten"];
	      @$login=$_POST["login"];
          @$email=$_POST["email"];
          @$statut=$_POST["statut"];
	      @$adresse=$_POST["adresse"];
	      @$pass=$_POST["pass"];
	      @$repass=$_POST["repass"];
	      @$valider=$_POST["valider"];
	    $message="";
        $message1="";
	    if(isset($valider)){
		if(empty($nom)) $message="<li>Non invalide!</li>";
		if(empty($prenom)) $message.="<li>Prénom invalide!</li>";
		if(empty($daten)) $message.="<li>Date de naissance invalide!</li>";
        if(empty($email) or !filter_var($email,FILTER_VALIDATE_EMAIL)) $message.="<li>email non valide!</li>";
		if(empty($statut)) $message.="<li>statut vide!</li>";
		if(empty($adresse)) $message.="<li>adresse invalide!</li>";
		if(empty($login)) $message.="<li>Login invalide!</li>";
		if(empty($pass)) $message.="<li>Mot de passe invalide!</li>";
		if($pass!=$repass) $message.="<li>Mots de passe non identiques!</li>";	
		if(empty($message)){
		//////////////////////////////<<<<<< CONNECTION >>>>>>>>>//////////////////////////////////		
		try{
			$pdo=new PDO("mysql:host=localhost;dbname=bd-ecole","sosso","abc");
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
		//////////////////////////////////////////////////////////////////////////////
				 $req=$pdo->prepare("select id from employe where email=? limit 1");
				$req->setFetchMode(PDO::FETCH_ASSOC);
				$req->execute(array($email));
				$tab=$req->fetchAll();
				if(count($tab)>0)
					$message="<li>Email existe déjà!</li>";
				else{ 
					$ins=$pdo->prepare("insert into employe(date,nom,prenom,email,statut,adresse,login,pass,daten) values(now(),?,?,?,?,?,?,?,?)");
					$ins->execute(array($nom,$prenom,$email,$statut,$adresse,$login,$pass,$daten));
					$message1.="Inscription  reussi veuillez Cliquez ici pour se connecter";
				} 
			}
		}
        
?>
<!DOCYTPE html>
<html>
	<head>
          
		
         <link rel="stylesheet" href="styleProf.css"> 
	</head>
	<body>
		
		<div class="containt">
		
                       <h1>Inscription Employé</h1>
					   <?php 
        if(!empty($message1)){ ?>
		<a href="login.php" id="message"><?php echo $message1 ?> </a>
		<?php } 
        ?>
		<form name="fo" method="post" action="" enctype="multipart/form-data">
			<div class="label">Nom</div>
			<input type="text" name="nom"  value= "<?php echo $nom ?>"  />
			<div class="label">Prénom</div>
			<input type="text" name="prenom" value= "<?php echo $prenom ?> " />
			<div class="label">Date d'entree</div>
			<input type="date" name="daten"value= "<?php echo $date ?>" />
            <div class="label">Email</div>
			<input type="email" name="email" value= "<?php echo $email ?>"  />
            <div class="label">Statut</div>
            <select name="statut" id="">
            <option value="Enseignant"> <p>Enseignant</p> </option>
            <option value="Professeur"><p>Professeur</p> </option>
            <option value="Surveillant"><p> Surveillant</p></option>
			<option value="Surveillant"><p> Administrateur</p></option>
            </select>
			<div class="label">Adresse</div>
			<input type="text" name="adresse" value= "<?php echo $adresse ?> "  />
			<div class="label">Login</div>
			<input type="text" name="login" value= "<?php echo $login ?> " />
			<div class="label"> Mot de passe</div>
			<input type="password" name="pass" />
			<div class="label">Confirmation du mot de passe</div>
			<input type="password" name="repass" />
			<input id="btn" type="submit" name="valider" value="S'inscrire" />
			<?php if(!empty($message)){ ?>
		<div id="message1"><?php echo $message ?></div>
		<?php } ?>
		</form>

		</div><br><br>
	
        <?php
		include("footer.php");
		?>

		
	</body>
</html>