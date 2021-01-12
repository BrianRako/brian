<?php
include_once '../includes/class/bdd.php';
include_once '../includes/class/pagination.php';

$pages = new Paginator('10', 'page');

//get number of total records
$stmt = $bdd->prepare('SELECT id FROM produit');
$stmt->execute();
$total = $stmt->rowCount();

//pass number of records 
$pages->set_total($total);

$data = $bdd->prepare('SELECT * FROM produit ' . $pages->get_limit());
$data->execute();




?>

<!DOCTYPE html>
<html lang="FR-fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 4 admin, bootstrap 4, css3 dashboard, bootstrap 4 dashboard, severny admin bootstrap 4 dashboard, frontend, responsive bootstrap 4 admin template, my admin design, my admin dashboard bootstrap 4 dashboard template">
    <meta name="description" content="My Admin is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title></title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/myadmin-lite/" />
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Preloader -->
    <?php include('header.php') ?>
    </div>
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-12">
                    <h4 class="page-title">Produit</h4>
                    <div class=""><a href="add_product.php"><button type="button" class="btn btn-outline-primary waves-effect">Ajouter</button></a></div>
                    <ol class="breadcrumb">
                        <li><a href="#">Dashboard</a></li>
                        <li class="active">Produit</li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="white-box">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Images</th>
                                    <th>Nom</th>
                                    <th>Prix</th>
                                    <th>Date ajout</th>
                                    <th>Editeur</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>

                            <?php foreach ($data as $row) { ?>
                                <tbody>
                                    <tr>
                                        <td><img style=" width: 50px;" src="<?= $row['images']; ?>"></td>
                                        <td><?= $row['nom']; ?></td>
                                        <td><?= $row['prix']; ?></td>
                                        <td><?= $row['date_ajout']; ?></td>
                                        <td></td>
                                    </tr>

                                <?php } ?>
                                </tbody>
                        </table>
                        <?= $pages->page_links() ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <!--Nice scroll JavaScript -->
    <script src="js/jquery.nicescroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/myadmin.js"></script>
</body>

</html>