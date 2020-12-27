<?php

include_once ('../includes/bdd.php');

class Login
{
    public  $mail;
    public  $password;

    public function __construct()
    {


        if (!empty($_POST)) {
            extract($_POST);
            $valid = true;
        }

        if (isset($_POST['formconnexion'])) {

            $this->password =  sha1($_POST['mdp']);
            $this->mail = htmlspecialchars($_POST['mail']);;


            if (empty($this->mail && $this->password)) {
                $valid = false;
                $erreur = 'Veuillez remplir tous les champs';
            }

            $req = $bdd->prepare('SELECT * FROM utilisateurs WHERE mail = ? AND mdp = ?');
            $req->execute(array($this->mail, $this->password));
            $req = $req->fetch();

            if ($req['id'] == "") {
                $valid = false;
                $erreur = 'Mauvaise adresse Email ou mot de passe';
            }

            if ($valid) {
                $_SESSION['id'] = $req['id'];
                $_SESSION['nom'] = $req['nom'];
                $_SESSION['prenom'] = $req['prenom'];
                $_SESSION['mail'] = $req['mail'];
                $_SESSION['admin'] = $req['admin'];
                header('https://rakowitsch-brian.go.yj.fr/');
                exit;
            }
        }




    }

 }