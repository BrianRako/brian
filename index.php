<?php
 

include('includes/class/bdd.php');


?>
<!DOCTYPE html>
<html lang="FR_fr">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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

			
			<?php var_dump($_SESSION); ?>


		</div>



	</div>

	<footer>

	</footer>
</body>
</html>