<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<title>Service</title>
</head>

<body>
  <div class="container-fluid">
    <?php
    include("nav.php");
    ?>
    <!--div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <img src="./img/ecole.png" alt="monlogo" class="logo" width="100px">
            <a class="navbar-brand" href="#">Ecole de la Reussite</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
              aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
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
                  <a class="nav-link" href="">SERVICES</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mr-5" href="contact.php">CONTACT</a>
                </li>
                <div class="inscrire mr-5">
                  <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">
                      S'INSCRIRE
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
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
        </div>
      </div-->

    <!--Debut Caroussel -->
    <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./img/infirmerie.jpg" class="d-block  " style="width:1799px ;height: 599px;" alt="infirmerie">
        </div>
        <div class="carousel-item">
          <img src="./img/transports.jpg" class="d-block  " style="width:1799px ;height: 599px;" alt="">
        </div>
        <div class="carousel-item">
          <img src="./img/restauration.jpg" class="d-block  " style="width:1799px ;height: 599px;" alt="">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </button>
    </div>
    <!--fin caroussel-->



    <!--LA PARTIE DE FATIMA-->


    <br>
    <h3 style="text-align: center; color:#1E434Eff">NOS SERVICES</h3>
    <div class="card-deck">
      <div class="card">
        <img src="./img/restauration.jpg" class="card-img-top" alt="...">
        <div class="card-body"style="background-color:#1E434Eff">
          <h5 class="card-title"style="color:white">Restauration</h5>
          <p class="card-text"style="color:white">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          
        </div>
      </div>
      <div class="card">
        <img src="./img/infirmerie.jpg" class="card-img-top" alt="...">
        <div class="card-body" style="background-color:#1E434Eff">
          <h5 class="card-title "style="color:white">Infirmerie</h5>
          <p class="card-text "style="color:white">This card has supporting text below as a natural lead-in to additional content.</p>
        
        </div>
      </div>
      <div class="card">
        <img src="./img/bus.jpg" class="card-img-top" alt="...">
        <div class="card-body" style="background-color:#1E434Eff">
          <h5 class="card-title" style="color:white">Transport</h5>
          <p class="card-text"style="color:white">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          
        </div>
      </div>
    </div>
    <br>
    <footer></footer>
    <!--FIN DE LA PARTIE POUR FATIMA-->



    <!--/div-->
    <!--/div-->

    <!--Footer pour joséphine-->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
      crossorigin="anonymous"></script>
</body>

</html>