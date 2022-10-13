<?php
session_start();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <title>Aministrateur</title>
</head>
<body style="background-color: #1E434Eff;">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="button-admin.php">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Acceuil <span class="sr-only">(current)</span></a>
      </li>

      
      
    </ul>
  </div>
</nav>


<div class="container" style="display:flex; padding-top:450px; padding-left:396px">
  <div class="col-45">
  <button type="submit" class="btn btn-primary btn-lg" ><a href="fichier.php" style="color:white;text-decoration:none">Nouveau Prof</a> </button>


  

  <button type="submit" class="btn btn-secondary btn-lg"><a href="ancien-prof.php" style="color:white;text-decoration:none">Ancien Prof</a></button>
</div>



<?php require 'footer.php'; ?>
    
</body>
</html>