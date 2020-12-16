<?php

require_once '../includes/header.php';


require_once('../bdd.php');

if (isset($_SESSION['id'])) {
	header('location:http://127.0.0.1/site');
	exit;
}

if(!empty($_POST)) {
	extract($_POST);
	$valid = true;
}

if (isset($_POST['formconnexion'])) {
	$mail = htmlspecialchars($_POST['mail']);
	$mdp = sha1($_POST['mdp']);


	if (empty($mail) && empty($mdp)) {
		$valid = false;
		$erreur = "Veuillez remplir tous les champs";
	}

	$req = $bdd->prepare('SELECT * FROM utilisateurs WHERE mail = ? AND mdp = ?');
	$req->execute(array($mail,$mdp));
	$req = $req->fetch();

	if ($req['id'] == "") {
		$valid = false;
		$erreur = "Adresse mail ou mot de passe incorrect";
	}

	if ($valid) {
		$_SESSION['id'] = $req['id'];
		$_SESSION['nom'] = $req['nom'];
        $_SESSION['prenom'] = $req['prenom'];
        $_SESSION['mail'] = $req['mail'];
        $_SESSION['admin'] = $req['admin'];

        header('location:http://127.0.0.1/site');
        exit;

	}
}

?>

	<!DOCTYPE html>
	<html>
	<head>
		<link href="http://localhost/site/includes/css/validetta.css" rel="stylesheet" type="text/css" media="screen" >
		<link rel="stylesheet" href="http://127.0.0.1/site/includes/css/validetta.css">
		<title>Connexion</title>

	</head>

	<body>
		<!--Main layout-->
		<main>
			<div class="container">

				<!--Grid row-->
				<div class="row d-flex justify-content-center">

					<!--Grid column-->
					<div class="col-md-6">

						<!--Section: Content-->
						<section class="mb-5">

							<form action="" method="POST" id="formconnect">

								<div class="md-form md-outline">
									<input type="email" id="defaultForm-email1" name="mail" class="form-control" data-validetta="required,email">
									<label data-error="wrong" data-success="right" for="defaultForm-email1">Adresse Mail</label>
								</div>
								<div class="md-form md-outline">
									<input type="password" id="defaultForm-pass1"  name="mdp" class="form-control" data-validetta="required">
									<label data-error="wrong" data-success="right" for="defaultForm-pass1">Mot de Passe</label>
								</div>



								<div class="d-flex justify-content-between align-items-center mb-2">



									<p><a href="">Mot de passe oublié ?</a></p>



								</div>
								<div class="text-center pb-2">
									<?php
									if(isset($erreur)) {
										echo '<font color="red">'.$erreur."</font>";
									}
									?>
								</div>

								<div class="text-center pb-2">

									<button type="submit" name="formconnexion" class="btn btn-primary mb-4">Sign in</button>

									<p>Pas encore inscrit ? <a href="http://127.0.0.1/site/inscription/">Inscrivez vous</a></p>




								</form>





							</div>

						</section>
						<!--Section: Content-->

					</div>
					<!--Grid column-->

				</div>
				<!--Grid row-->


			</div>
		</main>
		<!--Main layout-->
	</body>


	<script type="text/javascript" src="http://localhost/site/includes/js/popper.min.js"></script>
	<script type="text/javascript" src="http://localhost/site/includes/js/bootstrap.js"></script>
	<script type="text/javascript" src="http://localhost/site/includes/js/mdb.min.js"></script>
	<script type="text/javascript" src="http://localhost/site/includes/js/mdb.ecommerce.min.js"></script>
	<script type="text/javascript" src="http://localhost/site/includes/js/validettaLang-fr-FR.js"></script>
	<script type="text/javascript" src="http://localhost/site/includes/js/validetta.js"></script>

	<script type="text/javascript">
		$(document).ready($("#formconnect").validetta());

	</script>

</body>
</html>