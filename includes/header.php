<?php 
if(!isset($_SESSION)) 
{ 
  session_start(); 
}
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
  <link rel="icon" type="image/png" sizes="16x16" href="http://127.0.0.1/site/images/logo.png"></link>
  <link rel="stylesheet" href="http://127.0.0.1/site/includes/css/bootstrap.min.css"></link>
  <link rel="stylesheet" type="text/css" href="http://127.0.0.1/site/includes/css/mdb-pro.min.css">
  <link rel="stylesheet" href="http://127.0.0.1/site/includes/css/mdb.ecommerce.min.css">
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-YFRSJG4DHT"></script>



</head>



<!-- Main Navigation -->
<header>



  <!-- Navbar -->
  <nav class="navbar navbar-expand-md navbar-light fixed-top scrolling-navbar" style="background: white;">
    <div class="container-fluid">

      <!-- Brand -->
      <a class="navbar-brand" href="http://127.0.0.1/site/">
        <img class="img_logo" src="http://127.0.0.1/site/images/logo.png" height="100px" width="105px" alt="">
      </a>

      <!-- Collapse button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
      aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
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
          <a href="http://127.0.0.1/site/" class="nav-link waves-effect">
            Accueil
          </a>
        </li>
        <li class="nav-item">
          <a href="http://127.0.0.1/site/boutique" class="nav-link waves-effect">
            Boutique
          </a>
        </li>
        <li class="nav-item">
          <a href="http://127.0.0.1/site/contact" class="nav-link waves-effect">
            Contact
          </a>
        </li>

        <?php if(!isset($_SESSION['id'])) { ?>



          <li class="nav-item">
            <a href="http://127.0.0.1/site/connexion/" class="nav-link waves-effect">
              Se connecter
            </a>
          </li>
          <li class="nav-item pl-2 mb-2 mb-md-0">
            <a href="http://127.0.0.1/site/inscription/" type="button"
            class="btn btn-outline-info btn-md btn-rounded btn-navbar waves-effect waves-light">S'inscrire</a>
          </li>
          <?php 
        } else { ?>

          <div class="dropdown">
            <div class="btn btn-primary dropdown-toggle"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?php echo $_SESSION['prenom']; ?>
              <i class="far fa-user"></i>
            </div> 
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <?php if (isset($_SESSION['admin']) && !empty($_SESSION['admin']) == 1 ) { ?>
              <a class="dropdown-item" href="http://127.0.0.1/site/admin">Panneau Administration</a> <?php }else {} ?>
              <a class="dropdown-item" href="http://127.0.0.1/site/mon-compte">Mon compte</a>
              <a class="dropdown-item" href="http://127.0.0.1/site/deconnexion">Deconnexion</a>



            </div>
          </div>

        <?php } ?>       

      </ul>

    </div>
    <!-- Links -->
  </div>
</nav>
<!-- Navbar -->

<div class="jumbotron color-grey-light mt-70">
  <div class="d-flex align-items-center h-100">
    <div class="container text-center py-5">
      <h1 class="mb-3"></h1>
      <p class="mb-0"></p>
    </div>
  </div>
</div>



<nav class="c-sidenav">
  <button class="c-sidenav__opener c-sidenav__link"><i class="c-sidenav__icon fas fa-arrow-circle-right fa-lg" aria-hidden="true">
  </i><span class="sr-only"></span><span class="c-sidenav__description"></span></button>
  <a class="c-sidenav__link" href="#"><i class="c-sidenav__icon fas fa-home fa-lg" aria-hidden="true"> 
  <span class="side_title">Accueil</span></i><span class="c-sidenav__description">Accueil</span></a>
  <a class="c-sidenav__link" href="#"><i class="c-sidenav__icon"><img class=" badges steam" src="http://127.0.0.1/site/images/icons/steam.svg">
  <span class="side_title">Steam</span></i><span class="c-sidenav__description">Steam</span></a>
    <a class="c-sidenav__link" href="#"><img class="c-sidenav__icon badges origin" src="http://127.0.0.1/site/images/icons/origin.svg">
    <span class="side_title">Origin</span></img><span class="c-sidenav__description">Origin</span></a>
    <a class="c-sidenav__link" href="#"><i class="c-sidenav__icon badges rockstar" aria-hidden="true">
    <span class="side_title">Rockstar</span></i><span class="c-sidenav__description">Rockstar</span></a>
    <a class="c-sidenav__link" href="#"><i class="c-sidenav__icon badges xbox" aria-hidden="true">
    <span class="side_titles">Xbox</span></i><span class="c-sidenav__description">Xbox</span></a>
    <a class="c-sidenav__link" href="#"><i class="c-sidenav__icon badges indies" aria-hidden="true">
    <span class="side_title">Indies</span></i><span class="c-sidenav__description">Indies</span></a>
    <a class="c-sidenav__link" href="#"><i class="c-sidenav__icon badges uplay" aria-hidden="true">
    <span class="side_title">Uplay</span></i><span class="c-sidenav__description">Uplay</span></a>
    <a class="c-sidenav__link" href="#"><i class="c-sidenav__icon badges battlenet" aria-hidden="true">
    <span class="side_title">Battle.net</span></i><span class="c-sidenav__description">Battle.net</span></a>
    <a class="c-sidenav__link" href="#"><i class="c-sidenav__icon badges nintendo" aria-hidden="true">
    <span class="side_title">Nintendo</span></i><span class="c-sidenav__description">Nintendo</span></a>
    <a class="c-sidenav__link" href="#"><i class="c-sidenav__icon badges playstation" aria-hidden="true">
    <span class="side_title">Playstation</span></i><span class="c-sidenav__description">Playstation</span></a>
    <a class="c-sidenav__link" href="#"><i class="c-sidenav__icon badges autres" aria-hidden="true">
    <span class="side_title">Autres</span></i><span class="c-sidenav__description">Autres</span></a>
</nav>

<script type="text/javascript">
  var menuOpener = document.querySelector(".c-sidenav__opener"),
  menu = document.querySelector(".c-sidenav");

menuOpener.addEventListener("click", function () {
  menu.classList.toggle("c-sidenav--is-open");
});

</script>


</header>
<!-- Main Navigation -->
<script type="text/javascript" src="http://127.0.0.1/site/includes/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="http://127.0.0.1/site/includes/js/bootstrap.js"></script>
<script type="text/javascript" src="http://127.0.0.1/site/includes/js/mdb.min.js"></script>
<script type="text/javascript" src="http://127.0.0.1/site/includes/js/mdb.ecommerce.min.js"></script>

</html>