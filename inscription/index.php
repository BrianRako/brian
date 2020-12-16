<?php  
require_once '../includes/header.php';


require('../bdd.php');

if (isset($_POST['forminscription'])) {

	$nom = htmlspecialchars($_POST['nom']);
	$prenom = htmlspecialchars($_POST['prenom']);
	$email = htmlspecialchars($_POST['mail']);
	$mdp = sha1($_POST['mdp']);
	



	if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['mail']) && !empty($_POST['confirmmail']) && !empty($_POST['mdp']) && !empty($_POST['confirmmdp']))
	{

		if ($_POST['mail'] == $_POST['confirmmail']) {

			if($_POST['mdp'] == $_POST['confirmmdp']){

				$req_pre = $bdd->prepare('INSERT INTO  utilisateurs(nom, prenom, mail, mdp, date_inscription, admin) VALUES ( ?, ?, ?, ?, NOW(),0)');
				$req_pre->execute(array($nom, $prenom, $email, $mdp));
				header('location:http://127.0.0.1/site/connexion');

			}else {
				die("mdp error");
			}

		}else {
			die("email error");
		}
		
	}else {
		die("empty error");
	}

}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="http://127.0.0.1/site/includes/css/validetta.css">
	<title>Inscription</title>
</head>
<body>
	<div class="separ"></div>
	<main>
	<div class="container">

		<!--Grid row-->
		<div class="row d-flex justify-content-center">

			<!--Grid column-->
			<div class="col-md-6">

				<!--Section: Content-->
				<section class="mt-4 mb-5">

					<form action="" name="form" id="form" method="POST">

						<div class="form-row">
							<div class="col">
								<div class="md-form md-outline mt-0">
									<input type="text" id="materialRegisterFormFirstName" name="nom" class="form-control" data-validetta="required">
									<label for="materialRegisterFormFirstName">Nom</label>
								</div>
							</div>
							<div class="col">
								<div class="md-form md-outline mt-0">
									<input type="text" id="materialRegisterFormLastName" name="prenom" class="form-control" data-validetta="required">
									<label for="materialRegisterFormLastName">Prénom</label>
								</div>
							</div>
						</div>

						<div class="md-form md-outline mt-0">
							<input type="email" id="defaultForm-email1" name="mail" class="form-control" data-validetta="required,email">
							<label data-error="wrong" data-success="right" for="defaultForm-email1">Adresse Mail</label>
						</div>

						<div class="md-form md-outline mt-0">
							<input type="email" id="defaultForm-email2" name="confirmmail" class="form-control" data-validetta="required,equalTo[mail],email">
							<label data-error="wrong" data-success="right" for="defaultForm-email2">Confirmation Adresse Mail</label>
						</div>

						<div class="md-form md-outline mt-0">
							<input type="password" id="defaultForm-pass1" name="mdp" class="form-control" data-validetta="required,minLength[8]">
							<label data-error="wrong" data-success="right" for="defaultForm-pass1" >Mot de Passe</label>
							<small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
								Au moins 8 caractères
							</small>
						</div>

						<div class="md-form md-outline mt-0">
							<input type="password" id="defaultForm-pass2" name="confirmmdp" class="form-control" data-validetta="required,equalTo[mdp]">
							<label data-error="wrong" data-success="right" for="defaultForm-pass2" >Confirmation Mot de Passe</label>
						</div>

						<div class="text-center mb-2">

						<button type="submit" name="forminscription" class="btn btn-primary mb-4">S'inscrire</button>

						

						<p>En cliquant sur
							<em>S'inscrire</em> vous acceptez nos 
							<a href="">conditions d'utilisations</a>
						</p>

					</div>


					</form>


					

				</section>
				<!--Section: Content-->

			</div>
			<!--Grid column-->

		</div>
		<!--Grid row-->


	</div>
</main>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="http://127.0.0.1/site/includes/js/validetta.js"></script>
<script type="text/javascript" src="http://127.0.0.1/site/includes/js/validettaLang-fr-FR.js"></script>
<script type="text/javascript">
	
	$(document).ready($("#form").validetta());
</script>

</body>
</html>

<!--Main layout-->

  <!--Main layout-->