<?php
require 'db.php';
$sql = 'SELECT * FROM employe WHERE etat= 1';
$statement = $connection->prepare($sql);
$statement->execute();
$people = $statement->fetchAll(PDO::FETCH_OBJ);
 ?>
<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Anciens Prof</h2>
    </div>
    <div class="card-body">
      <table class="table table-bordered md-9">
        <tr>
          <th>ID</th>
          <th>Nom</th>
          <th>Prenom</th>
          <th>Mail</th>
          <th>Statut</th>
          <th>Adresse</th>
          <th>Login</th>
          <th>Date-Naissance</th>

          


          

          <th style="text-align:center">Action</th>
        </tr>
        <?php foreach($people as $person): ?>
          <tr>
            <td><?= $person->id; ?></td>
            <td><?= $person->nom; ?></td>
            <td><?= $person->prenom; ?></td>
            <td><?= $person->email; ?></td>
            <td><?= $person->statut; ?></td>
            <td><?= $person->adresse; ?></td>
            <td><?= $person->login; ?></td>
            <td><?= $person->daten; ?></td>
            <td>
              <a href="edit.php?id=<?= $person->id ?>" class="btn btn-info">Edit</a>
              <a onclick="return confirm('Etes vous sur de supprimer ce professeur')" href="delete.php?id=<?= $person->id ?>" class='btn btn-danger'>Delete</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>
