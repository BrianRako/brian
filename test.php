<?php

include('includes/class/bdd.php');
include_once('includes/class/pagination.php');


$pages = new Paginator('10', 'page');

//get number of total records
$stmt = $bdd->prepare('SELECT id FROM utilisateurs');
$stmt->execute();
$total = $stmt->rowCount();

//pass number of records to
$pages->set_total($total);

$data = $bdd->prepare('SELECT * FROM utilisateurs ' . $pages->get_limit());
$data->execute();
echo var_dump($data);
?>


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

        </div>
    </div>
</div>
</div>
<?php


//create the page links
echo $pages->page_links();
