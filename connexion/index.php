<?php

if (isset($_SESSION['id'])) {
    header('https://rakowitsch-brian.go.yj.fr/');
    exit;
}

include_once '../includes/class/login.php';
include_once '../includes/class/bdd.php';

if (isset($_POST['formconnexion']))
{
	$userService = new UserService($bdd, $_POST['mail'], $_POST['mdp']);
	if ($user_id = $userService->login()) {
		echo 'Logged it as user id: '.$user_id;
		$userData = $userService->getUser();
		// do stuff
	} else {
		echo 'Invalid login';
	}


}


?>

	<!DOCTYPE html>
	<html>
	<head>
		<link href="https://rakowitsch-brian.go.yj.fr/includes/css/validetta.css" rel="stylesheet" type="text/css" media="screen" >
		<link rel="stylesheet" href="https://rakowitsch-brian.go.yj.fr/includes/css/validetta.css">
		<title>Connexion</title>

	</head>
    


	<body>

    <?php require_once '../includes/header.php'; ?>
		<!--Main layout-->
		<main>
			<div class="container log">

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

									<p>Pas encore inscrit ? <a href="https://rakowitsch-brian.go.yj.fr/inscription/">Inscrivez vous</a></p>




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


	<script type="text/javascript" src="https://rakowitsch-brian.go.yj.fr/includes/js/popper.min.js"></script>
	<script type="text/javascript" src="https://rakowitsch-brian.go.yj.fr/includes/js/bootstrap.js"></script>
	<script type="text/javascript" src="https://rakowitsch-brian.go.yj.fr/includes/js/mdb.min.js"></script>
	<script type="text/javascript" src="https://rakowitsch-brian.go.yj.fr/includes/js/mdb.ecommerce.min.js"></script>
	<script type="text/javascript" src="https://rakowitsch-brian.go.yj.fr/includes/js/validettaLang-fr-FR.js"></script>
	<script type="text/javascript" src="https://rakowitsch-brian.go.yj.fr/includes/js/validetta.js"></script>

	<script type="text/javascript">
		$(document).ready($("#formconnect").validetta());

	</script>

</body>
</html>