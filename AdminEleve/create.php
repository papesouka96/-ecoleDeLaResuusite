<?php
ini_set("display_errors", "1"); error_reporting(E_ALL);

require "../db.php";
if (isset ($_POST['nom']) && isset($_POST['prenom'])  && isset($_POST['daten']) && isset($_POST['lieun']) && isset($_POST['classe']) && isset($_POST['cycle']) && isset($_POST['login']) && isset($_POST['motdepass']) ){
  $name = $_POST['nom'];
  $lastname = $_POST['prenom'];
  $daten = $_POST['daten'];
  $lieun = $_POST['lieun'];
  $classe = $_POST['classe'];
  $cycle = $_POST['cycle'];
  $login = $_POST['login'];
  $motdepass = $_POST['motdepass'];
  //////Controle de saisie///////
 /* if(empty($nom)) $message="<li>Non invalide!</li>";
  if(empty($lastname)) $message.="<li>Prénom invalide!</li>";
 
  if(empty($email) or !filter_var($email,FILTER_VALIDATE_EMAIL)) $message.="<li>email non valide!</li>";
  if(empty($statut)) $message.="<li>statut vide!</li>";
  if(empty($adresse)) $message.="<li>adresse invalide!</li>";
  if(empty($login)) $message.="<li>Login invalide!</li>";
  if(empty($pass)) $message.="<li>Mot de passe invalide!</li>";
  include("db.php");*/
  ////////////////////////////////////////
  $sql = 'INSERT INTO eleve(date,nom,prenom,daten,lieun,classe,cycle,login,motdepass,idEleve) VALUES(now(),:nom, :prenom,:daten,:lieun,:classe,:cycle,:login,:motdepass,:idEleve)';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':nom' => $name, ':prenom' => $lastname,':daten' => $daten, ':lieun' => $lieun, ':classe' => $classe  ,':cycle' => $cycle, ':login'=>$login, ':motdepass' => $motdepass,':idEleve'=>0 ])) {
    $message = 'Inserer avec succés';
  }



}


 ?>
<?php require '../header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Ajouter une personne</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="post">
        <div class="form-group">
          <label for="nom">Nom</label>
          <input type="text" name="nom" id="nom" class="form-control">
        </div>

        <div class="form-group">
          <label for="prenom">Prenom</label>
          <input type="text" name="prenom" id="prenom" class="form-control">
        </div>
         
        <div class="form-group">
          <label for="daten">Date-Naissance</label>
          <input type="date" name="daten" id="daten" class="form-control">
        </div>
        <div class="form-group">
          <label for="lieun">Lieu-Naissance</label>
          <input type="lieun" name="lieun" id="lieun" class="form-control">
        </div>
        <div class="mb-3">
          <select class="form-control form-control-lg" value="<?= $person->classe; ?>" type="text" name="classe" id="classe" required>
            <option>Classe</option>
            <option value="">CM1 </option>
            <option value="">5em</option>
            <option value="">Premiere </option>
          </select>
        <div class="form-group">
          <label for="login">Login</label>
          <input type="text" name="login" id="login" class="form-control">
        </div>
        <div class="mb-3">
          <select class="form-control form-control-lg" value="<?= $person->cycle; ?>" type="text" name="cycle" id="cycle" required>
            <option>Cycle</option>
            <option value="1">Primaire </option>
            <option value="2">Secondaire</option>
            <option value="3">Terminal </option>
          </select>
        <div class="form-group">
          <label for="motdepass">Mot de Passe</label>
          <input type="password" name="motdepass" id="motdepass" class="form-control">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-danger">Ajouter un eleeve</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php require '../footer.php'; ?>
