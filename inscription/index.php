<?php

include_once '../includes/class/bdd.php';
include_once '../includes/class/register.php';

if (isset($_POST['forminscription'])) {
	$userlog = new UserLog(
		$bdd,
		$_POST['nom'],
		$_POST['prenom'],
		$_POST['mail'],
		$_POST['confirmmail'],
		$_POST['mdp'],
		$_POST['confirmmdp']
	);
	$log = $userlog->register();
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">

	<title>Inscription</title>
</head>

<body>

	<style>
		.tooltip {
			display: none;
		}

		.tooltip_error {
			display: block;
		}
	</style>


	<?php require_once '../includes/header.php'; ?>
	<div class="separ" id="separ"></div>
	<main class="all_page">
		<div class="container register">

			<!--Grid row-->
			<div class="row d-flex justify-content-center">

				<!--Grid column-->
				<div class="col-md-6">

					<!--Section: Content-->
					<section class="mt-4 mb-5">

						<form action="" name="form" id="form" method="POST">

							<div class="form-row">
								<div class="col" id="last_name">
									<div class="md-form md-outline mt-0">
										<input type="text" id="materialRegisterFormLastName" name="nom" class="form-control">
										<label for="materialRegisterFormLastName">Nom</label>

									</div>
								</div>
								<div class="col" id="first_name">
									<div class="md-form md-outline mt-0">
										<input type="text" id="materialRegisterFormFirstName" name="prenom" class="form-control">
										<label for="materialRegisterFormFirstName">Prénom</label>
									</div>
								</div>
							</div>

							<div class="md-form md-outline mt-0" id="email">
								<input type="email" id="defaultForm-email1" name="mail" class="form-control">
								<label data-error="wrong" data-success="right" for="defaultForm-email1">Adresse Mail</label>

							</div>

							<div class="md-form md-outline mt-0" id="email_confirm">
								<input type="email" id="defaultForm-email2" name="confirmmail" class="form-control">
								<label data-error="wrong" data-success="right" for="defaultForm-email2">Confirmation Adresse Mail</label>

							</div>

							<div class="md-form md-outline mt-0" id="pass">
								<input type="password" id="defaultForm-pass1" name="mdp" class="form-control">
								<label data-error="wrong" data-success="right" for="defaultForm-pass1">Mot de Passe</label>
								<small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">


								</small>
							</div>

							<div class="md-form md-outline mt-0" id="passconfirm">
								<input type="password" id="defaultForm-pass2" name="confirmmdp" class="form-control">
								<label data-error="wrong" data-success="right" for="defaultForm-pass2" onkeyup="checkpwd()">Confirmation Mot de Passe</label>

							</div>

							<div class="text-center mb-2" id="error_sub">

								<button type="submit" id='submit' name="forminscription" class="btn btn-primary mb-4">S'inscrire</button>



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


	<script src="../includes/js/form_register.js"></script>
	<script>
		const register = new Register();
	</script>


</body>

</html>

<!--Main layout-->

<!--Main layout-->