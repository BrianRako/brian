<?php


try {
    $bdd = new PDO('mysql:host=localhost;dbname=zmzugfwn_site;charset=utf8', 'zmzugfwn', 'PKWwmZG31hsxdF');
} catch (Exeption $e) {

    die('erreur :' . $e->getMessage());
}
