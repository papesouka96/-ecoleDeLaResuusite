<?php
require 'db.php';
$id = $_GET['id'];
$sql = 'SELECT * FROM employe WHERE id=:id';
$statement = $connection->prepare($sql);

$statement->execute([':id' => $id ]);
$person = $statement->fetch(PDO::FETCH_OBJ);
if (isset ($_POST['nom']) && isset($_POST['prenom'])&& isset($_POST['email']) && isset($_POST['statut']) && isset($_POST['adresse']) && isset($_POST['login']) && isset($_POST['pass']) && isset($_POST['daten'])) {
  $name = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $email = $_POST['email'];
  $statut = $_POST['statut'];
  $adresse = $_POST['adresse'];
  $login = $_POST['login'];
  $pass = $_POST['pass'];
  $daten = $_POST['daten'];
 
  $sql = 'UPDATE employe SET nom=:nom, prenom=:prenom, email=:email,statut=:statut, adresse=:adresse, login=:login,
   pass=:pass, daten=:daten WHERE id=:id';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':nom' => $name,':prenom'=>$prenom,':email' => $email,':statut' => $statut,':adresse'=>$adresse,':login'=>$login,':pass' =>$pass,':daten'=>$daten,':id'=>$id])) {
    
    $message = 'Succès';
  }


}


 ?>
<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Modifier</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
      <div class="alert alert-success">
        <?= $message; ?>
      </div>
      <?php endif; ?>
      <form method="POST" >
        <div class="form-group">
          <label for="nom">Nom</label>
          <input value="<?= $person->nom; ?>" type="text" name="nom" id="nom" class="form-control ">
        </div>
        <div class="form-group">
          <label for="prenom">Prenom</label>
          <input value="<?= $person->prenom; ?>" type="text" name="prenom" id="prenom" class="form-control">
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" value="<?= $person->email; ?>" name="email" id="email" class="form-control">
        </div>


        <div class="mb-3">
          <select class="form-control " value="<?= $person->statut; ?>" type="text" name="statut" id="statut" required>
            <option>Statut</option>
            <option value="Enseignant">Enseignant </option>
            <option value="Professeur">Professeur</option>
            <option value="Surveillant">Surveillant </option>
          </select>


         
        </div>
        <div class="form-group">
          <label for="adresse">Adresse</label>
          <input value="<?= $person->adresse; ?>" type="text" name="adresse" id="adresse" class="form-control">
        </div>
        <div class="form-group">
          <label for="login">Login</label>
          <input value="<?= $person->login; ?>" type="text" name="login" id="login" class="form-control">
        </div>
        <div class="form-group">
          <label for="pass">Mot de passe</label>
          <input value="<?= $person->pass; ?>" type="password" name="pass" id="pass" class="form-control">
        </div>
        <div class="form-group">
          <label for="daten">Date de naissance</label>
          <input value="<?= $person->daten; ?>" type="date" name="daten" id="daten" class="form-control">
        </div>

        <div class="form-group">
          <button type="submit" name='envoyer' class="btn btn-info">Modifier</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>