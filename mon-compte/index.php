<?php 
include("../includes/header.php"); 
require_once("../includes/bdd.php");


if (isset($_GET['id']) AND $_GET['id'] > 0) {
	
	$getid = intval($_GET['id']);
	$requser = $bdd->prepare('SELECT * FROM utilisateurs WHERE id = ?');
	$requser->execute(array($getid));
	$userinfo = $requser->fetch();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mon Compte</title>
</head>
<body>
	<div align="center">
		<h2>Profil de <?php echo $userinfo['pseudo']; ?></h2>
		<br /><br />
		Pseudo = <?php echo $userinfo['pseudo']; ?>
		<br />
		Mail = <?php echo $userinfo['mail']; ?>
		<br />
		<?php
		if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id']) {
			?>
			<br />
			<a href="editionprofil.php">Editer mon profil</a>
			<a href="http://localhost/site/deconnexion">Se déconnecter</a>
			<?php
		}
		?>
	</div>
</body>
</html>