<?php
require '../db.php';
$idEleve = $_GET['idEleve'];
$sql = 'SELECT * FROM eleve WHERE idEleve=:idEleve';
$statement = $connection->prepare($sql);
$statement->execute([':idEleve' => $idEleve ]);
$person = $statement->fetch(PDO::FETCH_OBJ);
if (isset ($_POST['nom']) 
&& isset($_POST['prenom'])
&& isset($_POST['daten']) 
&& isset($_POST['lieun']) 
&& isset($_POST['classe']) 
&& isset($_POST['cycle']) 
&& isset($_POST['login']) 
&& isset($_POST['motdepass'])) {
  $name = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $daten = $_POST['daten'];
  $lieun = $_POST['lieun'];
  $classe = $_POST['classe'];
  $cycle = $_POST['cycle'];
  $login = $_POST['login'];
  $motdepass = $_POST['motdepass'];
 
  $sql = 'UPDATE eleve SET nom=:nom, prenom=:prenom, daten=:daten ,lieun=:lieun, classe=:classe, cycle=:cycle,
   login=:login, motdepass=:motdepass WHERE idEleve=:idEleve';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':nom'=>$name,
  ':prenom'=>$prenom,':daten'=>$daten,
  ':lieun'=>$lieun,':classe'=>$classe,':cycle'=>$cycle,
  ':login'=>$login,':motdepass' =>$motdepass,
  ':idEleve'=>$idEleve])) {
   
    $message = 'Succès';
  }


 
}


 ?>
<?php require '../header.php'; ?>
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
      <form method="POST" class="needs-validation" novalidate>
        <div class="form-group">
          <label for="validationCustom01">Nom</label>
          <input value="<?= $person->nom; ?>" type="text" name="nom" id="nom" class="form-control">
        </div>
        <div class="form-group">
          <label for="prenom">Prenom</label>
          <input value="<?= $person->prenom; ?>" type="text" name="prenom" id="prenom" class="form-control">
        </div>
        
        <div class="form-group">
          <label for="daten">Date-Naissance</label>
          <input type="date" value="<?= $person->daten; ?>" name="daten" id="daten" class="form-control">
        </div>
        <div class="form-group">
          <label for="lieun">Lieu-Naissance</label>
          <input value="<?= $person->lieun; ?>" type="text" name="lieun" id="lieun" class="form-control">
        </div> 
        <!--div class="form-group">
          <label for="classe">Classe</label>
          <input value="<//?= $person->classe; ?>" type="text" name="classe" id="classe" class="form-control">
          
        </div-->
        <div class="mb-3">
         <select class="form-control" value="<?= $person->classe; ?>" type="text" name="classe" id="classe" required>
         <option >Classe</option>
         <option value="CM1">CM1</option>
         <option value="5em">5E</option>
         <option value="Terminal">Terminal</option>
         </select>

  </div>

        
        <!--div class="form-group">
          <label for="cycle">Cycle</label>
          <input value="<?= $person->cycle; ?>" type="text" name="cycle" id="cycle" class="form-control">
        </div-->
        <div class="mb-3">
         <select class="form-control"value="<?= $person->cycle; ?>" type="text" name="cycle" id="cycle" required>
         <option ></option>
         <option value="Primaire"></option>
         <option value="Collège"></option>
         <option value="Secondaire">Terminal</option>
         </select>

  </div>
        <div class="form-group">
          <label for="login">Login</label>
          <input value="<?= $person->login; ?>" type="login" name="login" id="login" class="form-control">
        </div>
        <div class="form-group">
          <label for="motdepass">Mot de passe</label>
          <input value="<?= $person->motdepass; ?>" type="password" name="motdepass" id="motdepass" class="form-control">
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-info">Modifier</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php require '../footer.php'; ?>
