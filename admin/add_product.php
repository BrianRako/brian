<?php
include_once '../includes/class/bdd.php';

if (isset($_POST['add'])) {
    if (isset($_POST['nom']) && !empty($_POST)) {
        if (isset($_POST['desc']) && !empty($_POST['desc'])) {
            if (isset($_POST['prix']) && !empty($_POST['prix'])) {
                if (isset($_FILES['uploadfile']) && !empty($_FILES['uploadfile']['name'])) {

                    $name = htmlspecialchars($_POST['nom']);
                    $desc = htmlspecialchars($_POST['desc']);
                    $price = (int) $_POST['prix'];


                    $filename = $_FILES["uploadfile"]["name"];
                    $tempname = $_FILES["uploadfile"]["tmp_name"];
                    $folder = "../images/produit/" . $filename;

                    // Now let's move the uploaded image into the folder: image 
                    if (move_uploaded_file($tempname, $folder)) {
                        $msg = "Image uploaded successfully";
                    } else {
                        $msg = "Failed to upload image";
                    }
                    header('location:https://rakowitsch-brian.go.yj.fr/admin/add_product.php');

                    $stmt = $bdd->prepare('INSERT INTO produit (images, nom, description, date_ajout, prix) VALUES(?, ?, ?, NOW(), ?)');
                    $stmt->execute(array("https://rakowitsch-brian.go.yj.fr/images/produit/" .  $filename, $name, $desc, $price));
                } else {
                    echo "Pas d'image selectionnez";
                }
            }
            die('prix');
        }
        die('desc');
    }
    die('name');
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


                        <form action="" name="form" id="form" method="POST" enctype="multipart/form-data">

                            <div class="form-row">
                                <div class="col">
                                    <div class="md-form md-outline mt-0">
                                        <label for="materialRegisterFormFirstName">Nom du produit</label>
                                        <input type="text" id="materialRegisterFormFirstName" name="nom" class="form-control" data-validetta="required">
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <!--Grid column-->
                                <div class="col-md-12">

                                    <div class="md-form">
                                        <label for="message">Desciption</label>
                                        <textarea type="text" id="message" name="desc" rows="2" class="form-control md-textarea"></textarea>
                                    </div>

                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col price">
                                    <div class="md-form md-outline mt-0">
                                        <label for="materialRegisterFormFirstName">Prix</label>
                                        <input type="text" id="materialRegisterFormFirstName" name="prix" class="form-control" data-validetta="required">
                                    </div>
                                </div>
                            </div>

                            <div class="prev">
                                <div class="file">
                                    <label for="file" class="input-file"><img class="picture" src="https://rakowitsch-brian.go.yj.fr/images/icons/photo.png" alt="" srcset=""></label>
                                    <input type="file" class="input-file" name="uploadfile" id="file" accept="image/*" value="" onchange="loadFile(event)" />
                                </div>

                                <img class="preview" id="output" />
                            </div>

                            <div class="text-center mb-2 clear">

                                <button type="submit" name="add" class="btn btn-primary mb-4 button">Ajoutez</button>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <script src="js/previewimage.js"></script>
</body>

</html>