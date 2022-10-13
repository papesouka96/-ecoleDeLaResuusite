<?php
require '../db.php';
$id = $_GET['idEleve'];
$sql = 'DELETE FROM eleve  SET etat= 1 WHERE idEleve=:idEleve';
$statement = $connection->prepare($sql);
if ($statement->execute([':idEleve' => $id])) {
  header("Location: ../button-admin.php");
}