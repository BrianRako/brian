<?php
include('session.php');

// verifie si l'utilisateurs est bien admin pour avoir accees a cette page
if (isset($_SESSION['user_role']) && !empty($_SESSION['user_role']) == 'Administrateur') { ?>

    <?php
    include('../includes/class/bdd.php');

    // savoir sur quelle page on se trouve
    if (isset($_GET['page']) && !empty($_GET['page'])) {
        $currentPage = (int) strip_tags($_GET['page']);
    } else {
        $currentPage = 1;
    }

    // savoir combien nous avons de membre
    $req_table = $bdd->prepare('SELECT COUNT(*) AS nb_membre FROM utilisateurs');
    $req_table->execute();
    $result = $req_table->fetch(PDO::FETCH_OBJ);
    $nbMembre = $result->nb_membre;

    // membres a afficher par page
    $parPage = 10;

    // calcule pour determiner combien de pages on aura
    $pages = ceil($nbMembre / $parPage);

    // determiner premiere page
    $premier = ($currentPage * $parPage) - $parPage;

    // Affichage et pagination de tous les membres
    $req_membre = $bdd->prepare('SELECT * FROM utilisateurs  LIMIT :premier, :parpage');
    $req_membre->bindValue(':premier', $premier, PDO::PARAM_INT);
    $req_membre->bindValue(':parpage', $parPage, PDO::PARAM_INT);
    $req_membre->execute();

    // suppresion de membres
    if (isset($_GET['supprime']) && !empty($_GET['supprime'])) {
        $suppr = (int) $_GET['supprime'];

        $req_suppr = $bdd->prepare('DELETE FROM utilisateurs WHERE id = ? ');
        $req_suppr->execute(array($suppr));
    }

    // edition de profile
    if (isset($_GET['profile']) && !empty($_GET['profile'])) {
        $profile =  (int) $_GET['profile'];

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

                                    <?php while ($s = $req_membre->fetch(PDO::FETCH_OBJ)) { ?>



                                        <tbody>
                                            <tr>
                                                <td><?= $s->id ?></td>
                                                <td><?= $s->nom; ?></td>
                                                <td><?= $s->prenom; ?> </td>
                                                <td><?= $s->mail; ?></td>
                                                <td><?= $s->date_inscription ?></td>
                                                <td><?php if ($s->admin == 1) {
                                                        echo "Administrateur";
                                                    } else {
                                                        echo "Membre";
                                                    } ?></td>

                                                <td> <a href="profile_edit.php/?profile=<?= $s->id ?>" class="btn btn-success btn-sm">Modifier</a> - <a href="?supprime=<?= $s->id; ?>" class="btn btn-danger btn-sm">Supprimer</a>
                                                </td>
                                            </tr>

                                        <?php } ?>
                                        </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
            <nav>
                <ul class="pagination" style=" margin-left: 10%">

                    <li class="page-item <?= ($currentPage == 1) ? "disabled" : "" ?>">
                        <a href="?page=<?= $currentPage - 1 ?>" class="page-link" <?= ($currentPage == 1) ? "onclick= 'return false;'" : "" ?>>Précédente</a>
                    </li>
                    <?php for ($page = 1; $page <= $pages; $page++) : ?>

                        <li class="page-item <?= ($currentPage == $page) ? "active" : "" ?>">
                            <a href="?page=<?= $page ?>" class="page-link"><?= $page ?></a>
                        </li>
                    <?php endfor ?>

                    <li class="page-item <?= ($currentPage == $pages) ? "disabled" : "" ?>">
                        <a href="?page=<?= $currentPage + 1 ?>" class="page-link" <?= ($currentPage == $pages) ? "onclick= 'return false;'" : "" ?>>Suivante</a>
                    </li>
                </ul>
            </nav>

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