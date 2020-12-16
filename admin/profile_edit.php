<?php 
  require_once('session.php');
  include('../bdd.php');

  if (isset($_GET['profile']) && !empty($_GET['profile'])) { 
     $profile = (int) $_GET['profile']; 
     $req_profile = $bdd->prepare("SELECT * FROM utilisateurs WHERE id = $profile ");
      
      $req_profile->execute();
      $user = $req_profile->fetch();

        }
      ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com    @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>bs4 edit profile page - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">



</head>
<body>

</body>
</html>