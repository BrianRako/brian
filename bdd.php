<?php

include_once 'config.php';



class Database
{
    public function connectDb()
    {
        try {

            $bdd = new PDO('mysql:host='.DB_NAME.';dbname='.DB_NAME.';charset='.DB_CHARSET.'', DB_USER, DB_PASSWORD);
        }
        catch (Exeption $e)
        {
            die('erreur :' .$e->getMessage());
        }
    }

    public function getDonnees(string $sql, string $params)
    {


    }

}

