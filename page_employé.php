<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page_Redirection_eleve</title>
    <link rel="stylesheet" href="mon_style.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <!-- Start navbar -->
    <div class="Container-fluid">
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
                    <a class="nav-link mr-5" href="pageacceuil.php">ACCUEIL<span class="sr-only">(current)</span></a>
                 </li>
                 <div class="inscrire mr-5">  
                <li class="nav-item dropdown ">
                 <a class="nav-link dropdown-toggle  "  href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                STATUS_EMPLOYER
                </a>
                <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item text-dark" href="fichier.php">Administrateur</a>
                <a class="dropdown-item text-dark" href="#">Enseignant</a>
                <a class="dropdown-item text-dark" href="#">Professeur</a>
              
                </div>
                </li>
                </div>
                
            </ul>
            </div>
            </nav>
         </div>
     </div>
  </div><br><br><br>
  <!-- Start partie1 page employé -->
    <div class="container-fluid m-5"> 
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h1 class="text-info text-center">Bienvenue Chers Employé</h1>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-4">
                    <img class="w-100" src="image/schoolfgs.jpg " alt="img3">
                    </div>
<!-- 
                    <div class="col-lg-4 col-md-12 col-sm-4">
                    <img src="image/employe.jpg " alt="img3">
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-4">
                    <img src="image/employe.jpg " alt="img3">
                    </div> -->
                    <br><br><br>
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
                    </div>
                </div>
            </div>
        </div>
    </div><br><br><br>
  <!-- End partie1 page employé -->
  </div>
  <?php
  include("footer.php");
  ?>

    <?php
  include("codejs.php");
     ?>
    <!-- End navbar -->
</body>
</html>