<?php
try {
 $bdd = new PDO('mysql:host=localhost;dbname=site;charset=utf8', 'root', '');
}
catch (Exeption $e)
{
    die('erreur :' .$e->getMessage());
}
?>