<?php

class UserLog
{
    protected $_last_name;
    protected $_first_name;
    protected $_email;
    protected $_email_confirm;
    protected $_password;
    protected $_password_confirm;

    protected $_db;

    public function __construct(PDO $_db, $_last_name, $_first_name, $_email, $_email_confirm, $_password, $_password_confirm)
    {
        $this->_db               = $_db;
        $this->_last_name        = htmlspecialchars($_last_name);
        $this->_first_name       = htmlspecialchars($_first_name);
        $this->_email            = htmlspecialchars($_email);
        $this->_email_confirm    = htmlspecialchars($_email_confirm);
        $this->_password         = sha1($_password);
        $this->_password_confirm = sha1($_password_confirm);
    }

    public function register()
    {
        $this->_getUser();
    }

    protected function _getUser()
    {
        $req = $this->_checkCredentials();
        if ($req) {
            $stmt = $this->_db->prepare('INSERT INTO utilisateurs(nom, prenom, mail, mdp, date_inscription, role) VALUES( ?, ?, ?, ?, NOW(),"Abonné")');
            $stmt->execute(array($this->_last_name, $this->_first_name, $this->_email, $this->_password));
        }
    }

    protected function _checkEmail()
    {
        $stmt = $this->_db->prepare('SELECT mail FROM utilisateurs WHERE mail=?');
        $stmt->execute(array($this->_email));
        if ($stmt->rowCount() == 0) {
            return true;
        }
        return false;
    }

    protected function _checkConfirmMail()
    {
        if ($this->_email == $this->_email_confirm) {
            return true;
        }
        return false;
    }

    protected function _checkConfirmPassword()
    {
        if ($this->_password == $this->_password_confirm) {
            return true;
        }
        return false;
    }

    protected function _checkCredentials()
    {
        if (
            !empty($this->_last_name) && !empty($this->_first_name) && !empty($this->_email) &&
            !empty($this->_email_confirm) && !empty($this->_password) && !empty($this->_password_confirm)
        ) {
            if ($this->_checkEmail() == true) {

                if ($this->_checkConfirmMail() == true) {

                    if ($this->_checkConfirmPassword() == true) {
                        return true;
                    } else {
                        $error_pass = 'Les deux mots de passe ne correspondent pas';
                        return false;
                    }
                } else {
                    $error_mail = 'Les deux adresse mail ne correspondent pas';
                    return false;
                }
            } else {
                $error_mail_exist = "L'adresse mail existe déja si vous avez perdu votre mot de passe cliquez sur mot de passe perdu";
                return false;
            }
        } else {
            $error_post = 'Veuillez remplir tous les champs';
            return false;
        }
    }
}
