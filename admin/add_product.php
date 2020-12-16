<?php  
require_once('/session.php');


require('../bdd.php');

if (isset($_POST['forminscription'])) {

    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $email = htmlspecialchars($_POST['mail']);
    $mdp = sha1($_POST['mdp']);
    



    if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['mail']) && !empty($_POST['confirmmail']) && !empty($_POST['mdp']) && !empty($_POST['confirmmdp']))
    {

        if ($_POST['mail'] == $_POST['confirmmail']) {

            if($_POST['mdp'] == $_POST['confirmmdp']){

                $req_pre = $bdd->prepare('INSERT INTO  utilisateurs(nom, prenom, mail, mdp, date_inscription, admin) VALUES ( ?, ?, ?, ?, NOW(),0)');
                $req_pre->execute(array($nom, $prenom, $email, $mdp));
                header('location:http://127.0.0.1/site/connexion');

            }else {
                die("mdp error");
            }

        }else {
            die("email error");
        }
        
    }else {
        die("empty error");
    }

}
?>



<!DOCTYPE html>
<html lang="FR-fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Produit</title>
</head>
<body>
    <?php require('header.php'); ?>


    <div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-12">
                <h4 class="page-title">Produit</h4>
                <ol class="breadcrumb">
                    <li><a href="#">Dashboard</a></li>
                    <li>Produit</li>
                    <li class="active">Ajouter un Produit</li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <div class="white-box">


                    <form action="" name="form" id="form" method="POST">

                        <div class="form-row">
                            <div class="col">
                                <div class="md-form md-outline mt-0">
                                    <input type="text" id="materialRegisterFormFirstName" name="nom" class="form-control" data-validetta="required">
                                    <label for="materialRegisterFormFirstName">Nom du produit</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                            <label for="message">Desciption</label>
                        </div>

                    </div>
                </div>

                <div class="form-row">
                            <div class="col">
                                <div class="md-form md-outline mt-0">
                                    <input type="text" id="materialRegisterFormFirstName" name="prix" class="form-control" data-validetta="required">
                                    <label for="materialRegisterFormFirstName">Prix</label>
                                </div>
                            </div>
                        </div>

                        

                        <div class="text-center mb-2">

                        <button type="submit" name="formadd" class="btn btn-primary mb-4">S'inscrire</button>

                        

                       

                    </div>


                    </form>


                    
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
</div>
    
</body>
</html>



