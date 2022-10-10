<?php
@$motdepass=$_POST["motdepass"];
@$login=$_POST["login"];
@$repass=$_POST["repass"];
session_start();
include_once('include.php');
if(!empty($_POST))
{
    extract($_POST);
    $valid=true;
    $login=htmlspecialchars(trim($login));
    $passwor=trim($motdepass);

    if(empty($login))
    {
        $valid=false;
        $error_login= "renseigne un nom d'uutilisteur";
    }

    if(empty($motdepass))
    {
        $valid=false;
        $error_mdp= "renseigne un mot de passe";
    }

    $req= $DB->query('select * from eleve where login= :login and motdepass= :motdepass', array('login'=>$login, 'motdepass'=> crypt($motdepass,'fffffffytyutghgjtyghj')));
    $req =$req ->fetch();

    if(!$req[$login])
    {
        $valid=false;
        $error_compt="votre pseudo ou mot de passe ne correspondent pas";
    }

    if($valid)
    {
        $_SESSION['idEleve'] = $req['idEleve'];
        $_SESSION['login'] = $req['login'];
        header('Location: interfaceEleve.php');
        exit();


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
        <div class="form-text">Connexion</div>
        <div class="form-saisie" id="formC-saisie">
            <form method="" action="">
              <span>Nom d'utilisateur</span>
              <input type="text" name="login" value="<?php echo $login?>"  placeholder="">

              <span>Mot de passe</span>
              <input type="password" name="motdepass" value="<?php echo $motdepass?>"  placeholder="">

              <span>Confirmez</span>
              <input type="password" name="repass" value="<?php echo $repass?>" placeholder="meme mot de pass">
                        
              <input class="btnConn" type="submit" name="valider" value="Se connecter" ><br>
              Vous n'etes pas inscrit? <a href="insc.php">Inscription</a>
            </form>
        </div>
    </div>
</body>
</html>
