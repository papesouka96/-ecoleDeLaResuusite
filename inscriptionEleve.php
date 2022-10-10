<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);
$email = "thomas@waytolearnx.com";

@$nom=$_POST["nom"];
@$prenom=$_POST["prenom"];
@$email=$_POST["email"];
@$daten=$_POST["daten"];
@$lieun=$_POST["lieun"];
@$classe=$_POST["classe"];
@$cycle=$_POST["cycle"];
@$login=$_POST["login"];
@$motdepass=$_POST["motdepass"];
@$valider=$_POST["valider"];

$message="";
$message1="";

if (isset($valider)) {
    if (empty($nom)) {
        $message.="<li>Non invalide!</li>";
    }
    if (empty($prenom)) {
        $message.="<li>Prénom invalide!</li>";
    }
    if (empty($daten)) {
        $message.="<li>Date de naissance invalide!</li>";
    }
    if(empty($email) or !filter_var($email,FILTER_VALIDATE_EMAIL))
    {
        $message.="<li>email non valide!</li>";
    }
    if (empty($lieun)) {
        $message.="<li>le lieu de naissance n'est pas renseigné!</li>";
    }
    if (empty($classe)) {
        $message.="<li>vous avez oublier de donner votre classe!</li>";
    }
    if (empty($cycle)) {
        $message.="<li>vous avez oublier de donner votre cyscle!</li>";
    }
    if(empty($login)) $message.="<li>Login invalide!</li>";
    if (empty($motdepass)) {
        $message.="<li>un mot de passe est obligatoire!</li>";
    }

    if (empty($message)) 
    {
        try {
            $pdo=new PDO("mysql:host=localhost;dbname=papa", "root", "");
        } catch(PDOException $e) {
            echo $e->getMessage();
        }

        $req=$pdo->prepare("select  idEleve from eleve where email=? limit 1");
        $req->setFetchMode(PDO::FETCH_ASSOC);
        $req->execute(array($email));
        $tab=$req->fetchAll();
        if (count($tab)>0) {
            $message="<li>Email existe déjà!</li>";
        } else {
            $ins=$pdo->prepare("insert into eleve(date,nom,prenom,daten,lieun,classe,cycle,login,motdepass,email) values(now(),?,?,?,?,?,?,?,?,?)");
            $ins->execute(array($nom,$prenom,$daten,$lieun,$classe,$cycle,$login,$motdepass,$email));
            $message1.="Bien inscrit, connectez-vous";
        }
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

    <div class="forminsc">
        <div class="form-text">Inscription</div>
        <?php
        if(!empty($message1)){ ?>
         <a href="connect.php" id="Alerte"><?php echo $message1 ?> </a>
         <?php }
        ?>
        <div class="form-saisie">
            <form method="post" action="">
                <div class="cntnaireFormulaire">
                    <div class="form">
                        <div class="f1">
                            <span>Nom</span>
                            <input type="text" name="nom" value="<?php echo $nom?>"  placeholder="Diouf">

                            <span>prenom</span>
                            <input type="text" name="prenom" value="<?php echo $prenom?>" placeholder="cheikh">

                            <span>Date de naissance</span>
                            <input type="date" name="daten" value="<?php echo $daten?>" placeholder="03-08-1980">

                            <span class="label">Email</span>
                            <input type="email" name="email" value= "<?php echo $email ?>"/>
                        </div>
                        <div class="f1">
                            <span>Lieu de Naissance</span>
                            <input type="text" name="lieun" value="<?php echo $lieun?>" placeholder="Ex Dakar">

                            <span>Classe</span>
                            <input type="text" name="classe" value="<?php echo $classe?>" placeholder="Ex TS2">

                            <span>Nom d'utilisateur</span>
                            <input type="text" name="login" value="<?php echo $login?>" placeholder="Ex kant">

                            <span>mot de pass</span>
                            <input type="password" name="motdepass" value="<?php echo $motdepass?>" placeholder="Ex TS2">

                        </div>
                    </div>
                </div>
                <div class="contBouValidation">
                 <span>Cycle <br>

                    <select class="selection" name="cycle" >
                        <option value="primaire" selected><p>primaire</p></option>
                        <option value="secondaire"><p>secondaire</p></option>
                    </select>
                 </span>
                 <input class="btnInsc" type="submit" name="valider" value="S'inscrire" >
                </div>
                Déja inscrit? <a href="connect.php">Se connecter</a><br>
                <?php if(!empty($message)){ ?>
                <div id="ALERT_Existance"><?php echo $message ?></div>
                <?php } ?>
            </form>
        </div>
    </div>
</body>
</html>