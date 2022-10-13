<?php
require 'db.php';
$id = $_GET['id'];
$sql = 'UPDATE employe SET etat= 1 WHERE id=:id';
$statement = $connection->prepare($sql);
if ($statement->execute([':id' => $id])) {
  header("Location: fichier.php");
}