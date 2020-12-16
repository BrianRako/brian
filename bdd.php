<?php
// DB user
$user =  'root';
// DB pass
$pass =  '';


try {
 
 $bdd = new PDO('mysql:host=localhost;dbname=site;charset=utf8', $user, $pass);
}
catch (Exeption $e)
{
    die('erreur :' .$e->getMessage());
}
?>