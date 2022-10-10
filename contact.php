<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <title>Contact</title>
</head>

<body>
<?php
include("nav.php");
?>

  <!--CEUX QUE J'AI MIS EN COMMENTAIRE C'EST QUI DOIT ETRE SUR LES AUTRES PAGES-->
















  <!--div class="container-fluid" >
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-white">
                    <img src="./img/ecole.png" alt="monlogo" class="logo" width="200px">
                    <a class="navbar-brand" href="#">Ecole de la Reussite</a>
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav link">
                 <li class="nav-item active">
                    <a class="nav-link" href="service.php">ACCUEIL<span class="sr-only">(current)</span></a>
                 </li>
                 <li class="nav-item">
                    <a class="nav-link" href="#">PRESENTATIONS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">PEDAGOGIE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="service.php">SERVICES</a>
                </li>
                <li class="nav-item">
                     <a class="nav-link mr-5" href="">CONTACT</a>
                </li>
                 <div class="inscrire mr-5">  
                <li class="nav-item dropdown ">
                 <a class="nav-link dropdown-toggle  "  href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                S'INSCRIRE
                </a>
                <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Eleve</a>
                <a class="dropdown-item" href="#">Employer</a>
              
                </div>
                </li>
                </div>
            <div class="connecte">    
                  <li class="nav-item">
                    <a class="nav-link " href="#">SE CONNECTER</a>
                  </li>
            </div>  
      
            </ul>
            </div>
            </nav>
         </div-->



  <!--PARTIE POUR FATIMA-->
  <div class="container">
    <div>
      <h2 class="text-center mb-5 shadow-sm p-3" style="color: #1E434Eff;">Contactez-nous</h2>
    </div>
    <form action="mail.php" method="post">
      <div class="row">
        <div class="col-md-7 shadow rounded p-5">

          <div class="row">

            <div class="col mb-3">
              <label class="form-label" for="">Nom </label>
              <input type="text" class="form-control" placeholder="Nom " name="nom">
            </div>
            <div class="col mb-3">
              <label class="form-label" for=""> Prenom</label>
              <input type="text" class="form-control" placeholder=" Prenom" name="prenom">
            </div>

          </div>
          <div class=" mb-3">
            <label class="form-label" for="">Email</label>
            <input type="email" class="form-control" placeholder="Email" name="email">
          </div>
          <div class=" mb-3">
            <label class="form-label" for="">Sujet</label>
            <input type="text" class="form-control" placeholder="Sujet" name="sujet">
          </div>
          <div class=" mb-3">
            <label class="form-label" for="">Message:</label>
            <textarea name="message" class="form-control" placeholder="Ecrivez votre message" rows="10"></textarea>
          </div>
          <button type="button" class="btn" style="background-color: #1E434Eff; color:#FFFFFFff;">Valide</button>
        </div>
        <div class="col-md-5 bg-white ">
          <div class="ml-5">
            <img src="./img/ecole.png" alt="logo" class="rounded img-fluid">
          </div>
        </div>
      </div>

    </form>


  </div>

<!--FIN DE LA PARTIE POUR FATIMA-->


  <!--/div-->
  <!--/div-->

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
</body>

</html>