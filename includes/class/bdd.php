<?php

class ConnectDb
{
    private $dbhost;
    private $dbname;
    private $dbuser;
    private $dbpassword;
    private $dbcharset;


     function __construct()
    {
         $this->dbhost = 'localhost';
         $this->dbname = 'zmzugfwn_site';
         $this->dbuser = 'zmzugfwn';
         $this->dbpassword = 'PKWwmZG31hsxdF';
         $this->dbcharset = 'utf8';
    }

    function getDb()
    {
        try {
        $bdd = new PDO('mysql:host='.$this->dbhost.';dbname='.$this->dbname.';charset='.$this->dbcharset.'', $this->dbuser, $this->dbpassword);
        }
         catch (Exeption $e) {
    
        die('erreur :' . $e->getMessage());
        }
        
        return $bdd;
    }

}