<?php
try{
    $pdo=new PDO("mysql:host=localhost;dbname=papa","root","");
}
catch(PDOException $e){
    echo $e->getMessage();
}

$reponse = $pdo->query('SELECT nom ,prenom, statut, adresse  ,email  FROM employe');

$donnees = $reponse->fetch();




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!--  <meta name="viewport" content="width=device-width, initial-scale=1.0" -->
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
      <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Adresse</th>
      <th scope="col">Statut</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
  <?php while ($donnees = $reponse->fetch()){?>
    <tr>
      <th scope="row">1</th>
      <td> <?php echo $donnees['nom']  ; ?> </td>
      <td> <?php  echo $donnees['prenom'] ;?> </td>
      <td> <?php  echo $donnees['adresse'] ;?> </td>
      <td><?php  echo $donnees['statut'] ; ?></td>
      <td><?php echo $donnees['email'] ; ?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
    
   
    </body>
</html>