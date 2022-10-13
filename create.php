<?php
require 'db.php';

if (isset ($_POST['nom']) && isset($_POST['prenom'])  && isset($_POST['email']) && isset($_POST['statut']) && isset($_POST['adresse']) && isset($_POST['login']) && isset($_POST['pass']) && isset($_POST['daten']) ){
  $name = $_POST['nom'];
  $lastname = $_POST['prenom'];
  $email = $_POST['email'];
  $statut = $_POST['statut'];
  $adresse = $_POST['adresse'];
  $login = $_POST['login'];
  $pass = $_POST['pass'];
  $daten = $_POST['daten'];
  //////Controle de saisie///////
  if(empty($nom)) $message="<li>Non invalide!</li>";
  if(empty($lastname)) $message.="<li>Prénom invalide!</li>";
 
  if(empty($email) or !filter_var($email,FILTER_VALIDATE_EMAIL)) $message.="<li>email non valide!</li>";
  if(empty($statut)) $message.="<li>statut vide!</li>";
  if(empty($adresse)) $message.="<li>adresse invalide!</li>";
  if(empty($login)) $message.="<li>Login invalide!</li>";
  if(empty($pass)) $message.="<li>Mot de passe invalide!</li>";
  ////////////////////////////////////////
  $sql = 'INSERT INTO employe(date,nom,prenom,email,statut,adresse,login,pass,daten,etat) VALUES(now(),:nom, :prenom,:email,:statut,:adresse,:login,:pass,:daten, :etat)';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':nom' => $name, ':prenom' => $lastname,':email' => $email, ':statut' => $statut, ':adresse' => $adresse  ,':login' => $login, ':pass'=>$pass, ':daten' => $daten ,':etat'=>0 ])) {
    $message = 'Inserer avec succés';
  }



}


 ?>
<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Creer une personne</h2>
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
          <label for="email">Email</label>
          <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
          <label for="statut">Statut</label>
          <input type="text" name="statut" id="statut" class="form-control">
        </div>
        <div class="form-group">
          <label for="adresse">Adresse</label>
          <input type="text" name="adresse" id="adresse" class="form-control">
        </div>
        <div class="form-group">
          <label for="adresse">Login</label>
          <input type="text" name="login" id="login" class="form-control">
        </div>
        <div class="form-group">
          <label for="pass">Mot de Passe</label>
          <input type="text" name="pass" id="pass" class="form-control">
        </div>
        <div class="form-group">
          <label for="daten">Date de Naissance</label>
          <input type="date" name="daten" id="daten" class="form-control">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-danger">Ajouter un prof</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>
