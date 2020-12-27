<?php
if(!isset($_SESSION)) 
{ 
  session_start(); 
}
 

include('includes/class/bdd.php');

if (isset($bdd)) {
    $req = $bdd->prepare('SELECT * FROM produit');
    $req->execute();
    $req = $req->fetchAll();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link rel="icon" type="image/png" sizes="16x16" href="http://127.0.0.1/site/images/logo.png"></link>
	<title>Accueil</title>
</head>
<body>
	<header>
		<?php require_once("includes/header.php"); ?>
	</header>
	<div  id="background" class="page_all">

		<div class="bloc_page">

			
			


		</div>



	</div>

	<footer>

	</footer>
</body>
</html>