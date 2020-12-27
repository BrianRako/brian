<?php



try {
    $bdd = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset='.DB_CHARSET.'', DB_USER, DB_PASSWORD);
}
catch (Exeption $e) {

    die('erreur :' . $e->getMessage());
}



