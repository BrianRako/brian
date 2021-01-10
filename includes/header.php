<?php if (!isset($_SESSION)) {
  session_start();
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
  <link rel="icon" type="image/png" sizes="16x16" href="https://rakowitsch-brian.go.yj.fr/images/logo.png">
  </link>
  <link rel="stylesheet" href="https://rakowitsch-brian.go.yj.fr/includes/css/bootstrap.min.css"></link>
  <link rel="stylesheet" type="text/css" href="https://rakowitsch-brian.go.yj.fr/includes/css/mdb-pro.min.css">
  <link rel="stylesheet" href="https://rakowitsch-brian.go.yj.fr/includes/css/mdb.ecommerce.min.css">



</head>



<!-- Main Navigation -->
<header>



  <!-- Navbar -->
  <nav class="navbar navbar-expand-md navbar-light fixed-top scrolling-navbar" style="background: white;">
    <div class="container-fluid">

      <!-- Brand -->
      <a class="navbar-brand" href="https://rakowitsch-brian.go.yj.fr/">
        <img class="img_logo" src="https://rakowitsch-brian.go.yj.fr/images/logo.png" height="100px" width="105px" alt="">
      </a>

      <!-- Collapse button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="basicExampleNav">

        <!-- Right -->
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="#!" class="nav-link navbar-link-2 waves-effect">
              <span class="badge badge-pill red">1</span>
              <i class="fas fa-shopping-cart pl-0"></i>
            </a>
          </li>
          <li class="nav-item">
            <a href="https://rakowitsch-brian.go.yj.fr/" class="nav-link waves-effect">
              Accueil
            </a>
          </li>
          <li class="nav-item">
            <a href="https://rakowitsch-brian.go.yj.fr/boutique" class="nav-link waves-effect">
              Boutique
            </a>
          </li>
          <li class="nav-item">
            <a href="https://rakowitsch-brian.go.yj.fr/contact" class="nav-link waves-effect">
              Contact
            </a>
          </li>

          <?php if (!isset($_SESSION['user_id'])) { ?>



            <li class="nav-item">
              <a href="https://rakowitsch-brian.go.yj.fr/connexion/" class="nav-link waves-effect">
                Se connecter
              </a>
            </li>
            <li class="nav-item pl-2 mb-2 mb-md-0">
              <a href="https://rakowitsch-brian.go.yj.fr/inscription/" type="button" class="btn btn-outline-info btn-md btn-rounded btn-navbar waves-effect waves-light">S'inscrire</a>
            </li>
          <?php
          } else { ?>

            <div class="dropdown">
              <div class="btn btn-primary dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php echo $_SESSION['first_name']; ?>
                <i class="far fa-user"></i>
              </div>
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <?php if (isset($_SESSION['user_role']) && !empty($_SESSION['user_role']) == 'Administrateur') { ?>
                  <a class="dropdown-item" href="https://rakowitsch-brian.go.yj.fr/admin">Panneau Administration</a> <?php } else {
                                                                                                                    } ?>
                <a class="dropdown-item" href="https://rakowitsch-brian.go.yj.fr/mon-compte">Mon compte</a>
                <a class="dropdown-item" href="https://rakowitsch-brian.go.yj.fr/deconnexion">Deconnexion</a>



              </div>
            </div>

          <?php } ?>

        </ul>

      </div>
      <!-- Links -->
    </div>
  </nav>
  <!-- Navbar -->




  <nav class="c-sidenav">


    <div class="expand-top"></div>


    <button class="c-sidenav__opener c-sidenav__link"><i class="c-sidenav__icon">
        <img class="badges arrow" src="https://rakowitsch-brian.go.yj.fr/images/icons/arrow.png" alt="">





      </i><span class="sr-only"></span><span class="c-sidenav__description"></span></button>
    <a class="c-sidenav__link" href="#"><i class="c-sidenav__icon">
        <img class="badges home" src="https://rakowitsch-brian.go.yj.fr/images/icons/home.png" alt="">
        <span class="c-sidenav__title">Accueil</span></i><span class="c-sidenav__description">Accueil</span></a>

    <a class="c-sidenav__link" href="#"><i class="c-sidenav__icon ">
        <img class=" badges steam" src="https://rakowitsch-brian.go.yj.fr/images/icons/steam.png">
        <span class="c-sidenav__title">Steam</span></i><span class="c-sidenav__description">Steam</span></a>

    <a class="c-sidenav__link" href="#"><i class="c-sidenav__icon">
        <img class="c-sidenav__icon badges origin" src="https://rakowitsch-brian.go.yj.fr/images/icons/origin.png">
        <span class="c-sidenav__title">Origin</span></i><span class="c-sidenav__description">Origin</span></a>

    <a class="c-sidenav__link" href="#"><i class="c-sidenav__icon" aria-hidden="true">
        <img class="badges rockstar" src="https://rakowitsch-brian.go.yj.fr/images/icons/rockstar.png" alt="">
        <span class="c-sidenav__title">Rockstar</span></i><span class="c-sidenav__description">Rockstar</span></a>

    <a class="c-sidenav__link" href="#"><i class="c-sidenav__icon">
        <img class="badges xbox" src="https://rakowitsch-brian.go.yj.fr/images/icons/xbox.png" alt="">
        <span class="c-sidenav__title">Xbox</span></i><span class="c-sidenav__description">Xbox</span></a>

    <a class="c-sidenav__link" href="#"><i class="c-sidenav__icon">
        <img class="badges indies" src="https://rakowitsch-brian.go.yj.fr/images/icons/indies.png" alt="">
        <span class="c-sidenav__title">Indies</span></i><span class="c-sidenav__description">Indies</span></a>

    <a class="c-sidenav__link" href="#"><i class="c-sidenav__icon">
        <img class="badges uplay" src="https://rakowitsch-brian.go.yj.fr/images/icons/uplay.png" alt="">
        <span class="c-sidenav__title">Uplay</span></i><span class="c-sidenav__description">Uplay</span></a>

    <a class="c-sidenav__link" href="#"><i class="c-sidenav__icon">
        <img class="badges battlenet" src="https://rakowitsch-brian.go.yj.fr/images/icons/battle.net.png" alt="">
        <span class="c-sidenav__title">Battle.net</span></i><span class="c-sidenav__description">Battle.net</span></a>

    <a class="c-sidenav__link" href="#"><i class="c-sidenav__icon">
        <img class="badges nintendo" src="https://rakowitsch-brian.go.yj.fr/images/icons/nintendo.png" alt="">
        <span class="c-sidenav__title">Nintendo</span></i><span class="c-sidenav__description">Nintendo</span></a>

    <a class="c-sidenav__link" href="#"><i class="c-sidenav__icon">
        <img class="badges playstation" src="https://rakowitsch-brian.go.yj.fr/images/icons/playstation.png" alt="">
        <span class="c-sidenav__title">Playstation</span></i><span class="c-sidenav__description">Playstation</span></a>

    <a class="c-sidenav__link" href="#"><i class="c-sidenav__icon">
        <img class="badges autres" src="https://rakowitsch-brian.go.yj.fr/images/icons/autre.png" alt="">
        <span class="c-sidenav__title">Autres</span></i><span class="c-sidenav__description">Autres</span></a>

    <a class="c-sidenav__link" href="#"><i class="c-sidenav__icon">
      </i><span class="c-sidenav__description">FPS</span></a>

    <a class="c-sidenav__link" href="#"><i class="c-sidenav__icon">
      </i><span class="c-sidenav__description">Action</span></a>

    <a class="c-sidenav__link" href="#"><i class="c-sidenav__icon">
      </i><span class="c-sidenav__description">Sport</span></a>

    <a class="c-sidenav__link" href="#"><i class="c-sidenav__icon">
      </i><span class="c-sidenav__description">Simulation</span></a>

    <a class="c-sidenav__link" href="#"><i class="c-sidenav__icon">
      </i><span class="c-sidenav__description">Multijoueur</span></a>

    <a class="c-sidenav__link" href="#"><i class="c-sidenav__icon">
      </i><span class="c-sidenav__description">Coopération</span></a>

    <a class="c-sidenav__link" href="#"><i class="c-sidenav__icon">
      </i><span class="c-sidenav__description">...</span></a>

    <div class="separator"></div>


  </nav>

  <script type="text/javascript">
    var menuOpener = document.querySelector(".c-sidenav__opener"),
      menu = document.querySelector(".c-sidenav");

    menuOpener.addEventListener("click", function() {
      menu.classList.toggle("c-sidenav--is-open");

    });
  </script>


</header>
<!-- Main Navigation -->
<script type="text/javascript" src="https://rakowitsch-brian.go.yj.fr/includes/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="https://rakowitsch-brian.go.yj.fr/includes/js/bootstrap.js"></script>
<script type="text/javascript" src="https://rakowitsch-brian.go.yj.fr/includes/js/mdb.min.js"></script>
<script type="text/javascript" src="https://rakowitsch-brian.go.yj.fr/includes/js/mdb.ecommerce.min.js"></script>

</html>