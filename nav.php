<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nav</title>
    <link rel="stylesheet" href="mon_style.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    





        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-white">
                    <img src="image/logo2.png" alt="monlogo" class="logo">
                    <a class="navbar-brand" href="#">Ecole de la Reussite</a>
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav link">
                 <li class="nav-item active">
                    <a class="nav-link" href="page_accueil.php">ACCUEIL<span class="sr-only">(current)</span></a>
                 </li>
                 <li class="nav-item">
                    <a class="nav-link" href="page_présentation.php">PRESENTATIONS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="page_pedagogie.php">PEDAGOGIE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="service.php">SERVICES</a>
                </li>
                <li class="nav-item">
                     <a class="nav-link mr-5" href="contact.php">CONTACT</a>
                </li>
                 <div class="inscrire mr-5">  
                <li class="nav-item dropdown ">
                 <a class="nav-link dropdown-toggle  "  href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                S'INSCRIRE
                </a>
                <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Eleve</a>
                <a class="dropdown-item" href="inscriptionProf.php">Employer</a>
              
                </div>
                </li>
                </div>
                <div class="inscrire mr-5">  
                <li class="nav-item dropdown ">
                 <a class="nav-link dropdown-toggle  "  href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                SE CONNECTER
                </a>
                <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Eleve</a>
                <a class="dropdown-item" href="inscriptionProf.php">Employer</a>
              
                </div>
                </li>
                </div>
      
            </ul>
            </div>
            </nav>
         </div>
     </div>
  </div>
  <?php
  include("codejs.php");
  ?>
</body>