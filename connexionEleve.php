<?php
session_start();
 include ("nav1.php");
include_once('bd.php');
if(isset($_POST["login"],$_POST["motdepass"])){
    
    
    @$motdepass=$_POST["motdepass"];
    @$login=$_POST["login"];
   // @$repass=$_POST["repass"];
    $res=$pdo->prepare("select * from eleve where login=:login and motdepass=:motdepass ");
    $res->setFetchMode(PDO::FETCH_ASSOC);
   // $res->execute(array($login,$motdepass));
   $res->execute(array(
        "login" => @$login,
        "motdepass" => @$motdepass
   ));

    $tab=$res->fetchAll();
    
    if(count($tab)>0)
    {
        $_SESSION["autoriser"]="oui";
        $_SESSION["nomPrenom"]=strtoupper($tab[0]["nom"]." ".$tab[0]["prenom"]);
        header("location:page_eleve.php");
        
    }
    else{
        $message1="<li>Mauvais login ou mot de passe!</li>";
        
    }
}


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Inscription</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='Styles.css'>
    <script src='main.js'></script>
</head>
<body>

    <div class="forminsc" id="formConn">
        <div class="formc-text">Connexion</div>
        
        <div class="form-saisie" id="formC-saisie">
            <form method="post" action="">
              <span>Nom d'utilisateur</span>
              <input type="text" name="login"  placeholder="">

              <span>Mot de passe</span>
              <input type="password" name="motdepass"   placeholder="">
                        
              <input class="btnConn" type="submit" name="valider" value="Se connecter" ><br>
              Vous n'etes pas inscrit? <a href="inscriptionEleve.php">Inscription</a>
            </form>
            <?php if(!empty($message1)){ ?>
<div id="message1"><?php echo $message1 ?></div>
<?php } ?>
        </div>
    </div>
</body>
</html>