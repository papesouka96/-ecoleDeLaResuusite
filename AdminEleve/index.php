<?php
require '../db.php';
$sql = 'SELECT * FROM eleve WHERE etat=0';
$statement = $connection->prepare($sql);
$statement->execute();
$people = $statement->fetchAll(PDO::FETCH_OBJ);
 ?>
<?php require 'headerAdmin.php';?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Les eleves de l'école</h2>
    </div>
    <div class="card-body">
      <table class="table table-bordered md-9">
        <tr>
          <th>Matricule</th>
          <th>Nom</th>
          <th>Prenom</th>
          <th>Date de Naissance</th>
          <th>Lieu de Naissance</th>
          <th>Classe</th>
          <th>Cycle</th>
          <th>Login</th>

          


          

          <th style="text-align:center">Action</th>
        </tr>
        <?php foreach($people as $eleve): ?>
          <tr>
            <td><?= $eleve->idEleve; ?></td>
            <td><?= $eleve->nom; ?></td>
            <td><?= $eleve->prenom; ?></td>
            <td><?= $eleve->daten; ?></td>
            <td><?= $eleve->lieun; ?></td>
            <td><?= $eleve->classe; ?></td>
            <td><?= $eleve->cycle; ?></td>
            <td><?= $eleve->login; ?></td>
         
            <td>
              <a href="edit.php?idEleve=<?= $eleve->idEleve ?>" class="btn btn-info">Modifier</a>
              <a onclick="return confirm('Etes vous sur de supprimer ce professeur')" href="delete.php?idEleve=<?= $eleve->idEleve?>" class='btn btn-danger'>Supprimer</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>
<?php require '../footer.php'; ?>
