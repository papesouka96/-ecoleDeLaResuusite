<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mon_style.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Page-Enseignant</title>
</head>
<body>
<div class="container-fluid">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-white">
                    <img src="image/logo2.png" alt="monlogo" class="logo">
                    <a class="navbar-brand" href="#"></a>
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav link">
                 <li class="nav-item active">
                    <a class="nav-link" href="page_accueil.php">ACCUEIL<span class="sr-only">(current)</span></a>
                 </li>
                 
                
                
                 <div class="inscrire mr-5 ml-5">  
                <li class="nav-item dropdown ">
                 <a class="nav-link dropdown-toggle "  href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                CYCLES
                </a>
                <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#"><strong>PRIMAIRE</strong></a>
                <a class="dropdown-item" href="inscriptionProf.php"><strong>SECONDAIRE</strong></a>
              
                </div>
                </li>
                </div>
                <div class="inscrire mr-5">  
                <li class="nav-item dropdown ">
                 <a class="nav-link dropdown-toggle  "  href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               MATIÉRES
                </a>
                <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#"><strong>FRANCAIS</strong> </a>
                <a class="dropdown-item" href="#"><strong>MATHS</strong></a>
                <a class="dropdown-item" href="#"><strong>ANGLAIS</strong></a>
               
              
                </div>
                </li>
                </div>

                <div class="inscrire mr-5">  
                <li class="nav-item dropdown ">
                 <a class="nav-link dropdown-toggle  "  href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               LISTES DES ELEVES
                </a>
                <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#"><strong> LISTE CM1</strong></a>
                <a class="dropdown-item" href="#"><strong>LISTE CM2</strong></a>
                <a class="dropdown-item" href="#"><strong>LISTE 2Nd</strong></a>
                </div>
                </li>
                </div>
      
            </ul>
            </div>
            </nav>
         </div>
     </div>
  </div>
  <!-- Start SECTION 2 -->
  <div class="container-fluid  mt-5">
    <div class="row">
        <div class="ens col-lg-12 col-md-12 col-sm-12">

        <h1 class="text-info text-center">Bienvenue Chers Enseignant</h1>
    </div>
    <div class="row">
        <div class="col-lg-8 col-md-12 col-sm-12  rounded-right ml-auto">
        <img  class="rounded-3" src="image/ens.jpg" alt="">
       </div> 

      
      
    </div>

    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 mt-5">
                    <h3 class="text-info text-center">Actualités</h3>
                    <div class="card-body">
            <h5 class="card-title text-dark"><strong></strong></h5>
            <h6 class="card-subtitle mb-2 text-muted"></h6>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas
            Lorem ipsum dolor sit amet consectetur 
            dolor sit amet consectetur adipisicing elit. Voluptas
            Lorem ipsum dolor sit amet consectetur 
            dolor sit amet consectetur adipisicing elit. Voluptas
            Lorem ipsum dolor sit amet consectetur 
            dolor sit amet consectetur adipisicing elit. Voluptas
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas cumque laboriosam sapiente beatae enim odio praesentium nam temporibus eius, neque autem reprehenderit dolore consequuntur, officia ullam possimus quos deleniti provident.</p>
            <a href="#" class="card-link " ><button class="btn text-dark ">Savoir plus</button></a>
            </div>
            </div>

  </div>
  <!-- END SECTION 2 -->
 
  <?php
  include("footer.php");
  ?>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</div> 
</body>
</html>