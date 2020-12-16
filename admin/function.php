<?php 


function pagination (){
	include('../bdd.php');

		
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

    // calcule pour savoir combien de pages on aura
	$pages = ceil($nbMembre / $parPage);

    // savoir la premiere page
	$premier = ($currentPage * $parPage) - $parPage;

    // affichage des membres trier
	$req_membre = $bdd->prepare('SELECT * FROM utilisateurs  LIMIT :premier, :parpage');
	$req_membre->bindValue(':premier', $premier, PDO::PARAM_INT);
	$req_membre->bindValue(':parpage', $parPage, PDO::PARAM_INT);
	$req_membre->execute();
	$s = $req_membre->fetch(PDO::FETCH_OBJ);


	if (condition) {
		# code...
	}

}

function suppr_membres () {
if (isset($_GET['supprime']) && !empty($_GET['supprime'])) {
$suppr = (int) $_GET['supprime'];

$req_suppr = $bdd->prepare('DELETE FROM utilisateurs WHERE id = ? ');
$req_suppr->execute(array($suppr));





	}
}

function profile() {
  if (isset($_GET['profile']) && !empty($_GET['profile'])) {
       $req_profile = $bdd->prepare('SELECT FROM utilisateurs WHERE id = ?');
            $id = $_GET['profile'];
            $req_profile->execute(array($id));
            $user = $req_profile->fetch(PDO::FETCH_OBJ);

  }
}


?>