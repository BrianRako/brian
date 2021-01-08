<?php
include('session.php');

// verifie si l'utilisateurs est bien admin pour avoir accees a cette page
if (isset($_SESSION['user_role']) && !empty($_SESSION['user_role']) == 'Administrateur') { ?>

    <?php
    include_once '../includes/class/bdd.php';
    include_once '../includes/class/pagination.php';


    $pages = new Paginator('10', 'page');

    //get number of total records
    $stmt = $bdd->prepare('SELECT id FROM utilisateurs');
    $stmt->execute();
    $total = $stmt->rowCount();

    //pass number of records to
    $pages->set_total($total);

    $data = $bdd->prepare('SELECT * FROM utilisateurs ' . $pages->get_limit());
    $data->execute();


    // delete user
    if (isset($_GET['supprime']) && !empty($_GET['supprime'])) {
        $suppr = (int) $_GET['supprime'];

        $req_suppr = $bdd->prepare('DELETE FROM utilisateurs WHERE id = ? ');
        $req_suppr->execute(array($suppr));
    }

    // edit user
    if (isset($_GET['profile']) && !empty($_GET['profile'])) {
        $profile = (int) $_GET['profile'];

        $req_profile = $bdd->prepare('SELECT * FROM utilisateurs WHERE id = ?');
        $req_profile->execute(array($profile));
    }



    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="noindex,nofollow">
        <title>Utlisateurs</title>
        <link rel="canonical" href="https://www.wrappixel.com/templates/myadmin-lite/" />
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
        <!-- Bootstrap Core CSS -->
        <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Menu CSS -->
        <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="/admin/css/pagination.css">
    </head>

    <body>
        <!-- Preloader -->
        <?php include('header.php') ?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-12">
                        <h4 class="page-title">Utilisateurs</h4>
                        <ol class="breadcrumb">
                            <li><a href="http://127.0.0.1/site/admin/">Dashboard</a></li>
                            <li class="active">Basic Table</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nom</th>
                                            <th>Prenom</th>
                                            <th>Mail</th>
                                            <th>Date inscription</th>
                                            <th>Role</th>
                                            <th>Editeur</th>
                                        </tr>
                                    </thead>

                                    <?php foreach ($data as $row) { ?>



                                        <tbody>
                                            <tr>
                                                <td><?= $row['id']; ?></td>
                                                <td><?= $row['nom']; ?></td>
                                                <td><?= $row['prenom']; ?> </td>
                                                <td><?= $row['mail']; ?></td>
                                                <td><?= $row['date_inscription']; ?></td>
                                                <td><?= ($row['role'] == 'Administrateur' ? 'Administrateur' : 'Abonné'); ?></td>


                                                <td> <a href="profile_edit.php/?profile=<?= $row['id'] ?>" class="btn btn-success btn-sm">Modifier</a> - <a href="?supprime=<?= $row['id']; ?>" class="btn btn-danger btn-sm">Supprimer</a>
                                                </td>
                                            </tr>

                                        <?php } ?>
                                        </tbody>
                                </table>
                            </div>
                            <?php echo $pages->page_links(); ?>

                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->



        </div>
        <!-- /#page-wrapper -->
        <?php include('footer.php') ?>
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
<?php } else {
    header('location:https://rakowitsch-brian.go.yj.fr/404');
} ?>