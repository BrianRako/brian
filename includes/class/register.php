<?php

class UserLog
{
    protected $_last_name;
    protected $_first_name;
    protected $_email;
    protected $_email_confirm;
    protected $_password;
    protected $_password_confirm;

    protected $_bd;

    public function __construct(PDO $db, $_last_name, $_first_name, $_email, $_email_confirm, $_password, $_password_confirm)
    {
        $this->_db               = $_db;
        $this->_last_name        = $_last_name;
        $this->_first_name       = $_first_name;
        $this->_email            = $_email;
        $this->_email_confirm    = $_email_confirm;
        $this->_password         = $_password;
        $this->_password_confirm = $_password_confirm;
         
    }

    protected function _checkLastNname()
    {
        $stmt = $this->_db->prepare('SELECT nom FROM utlisateurs WHERE nom=?');
        $stmt->execute(array($this->_last_name));
        if ($stmt->rowCount() > 0) {
            return false;
        }
        return true;
    }

    protected function _checkFirstName()
    {
        $stmt = $this->_db->prepare('SELECT prenom FROM utilisateurs WHERE prenom=?');
        $stmt->execute(array($this->_first_name));
        if ($stmt->rowCount() > 0) {
            return false;
        }
        return true;
    }

    protected function _checkEmail()
    {
        $stmt = $this->_db->prepare('SELECT mail FROM utilisateurs WHERE mail=?');
        $stmt->execute(array($this->_email));
        if ($stmt->rowCount() > 0) {
            return false;
        }
        return true;
    }



}