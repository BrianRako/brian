<?php
include('session.php');
include('../includes/class/bdd.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script defer src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" integrity="sha384-9/D4ECZvKMVEJ9Bhr3ZnUAF+Ahlagp1cyPC7h5yDlZdXs4DQ/vRftzfd+2uFUuqS" crossorigin="anonymous"></script>
	<link rel="canonical" href="https://www.wrappixel.com/templates/myadmin-lite/" />
	<!-- Favicon icon -->
	<link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
	<!-- Bootstrap Core CSS -->
	<link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<title></title>
</head>

<body>
	<header>

		<div class="preloader">
			<div class="cssload-speeding-wheel"></div>
		</div>
		<div id="wrapper">
			<!-- Navigation -->
			<nav class="navbar navbar-default navbar-static-top" style="margin-bottom: 0">
				<div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
					<div class="top-left-part"><a class="logo" href="https://rakowitsch-brian.go.yj.fr/admin/admin"><i class="glyphicon glyphicon-fire"></i>&nbsp;<span class="hidden-xs">Administration</span></a>

					</div>
					<ul class="nav navbar-top-links navbar-left hidden-xs">
						<li><a href="javascript:void(0)" class="open-close hidden-xs hidden-lg
								waves-effect waves-light"><i class="ti-arrow-circle-left ti-menu"></i>
							</a></li>

					</ul>
					<ul class="nav navbar-top-links navbar-right pull-right">
						<li><a href="https://rakowitsch-brian.go.yj.fr/">Access site</a></li>
						<li>
							<form role="search" class="app-search hidden-xs">
								<input type="text" placeholder="Search..." class="form-control">
								<a href=""><i class="ti-search"></i></a>
							</form>
						</li>
						<li>
							<a class="profile-pic" href="#"> <i class="far fa-user fa-lg"></i>
								<b class="hidden-xs"><?= $_SESSION['first_name']; ?></b> </a>
						</li>
					</ul>
				</div>
				<!-- /.navbar-header -->
				<!-- /.navbar-top-links -->
				<!-- /.navbar-static-side -->
			</nav>
			<div class="navbar-default sidebar nicescroll" role="navigation">
				<div class="sidebar-nav navbar-collapse ">
					<ul class="nav" id="side-menu">
						<li class="sidebar-search hidden-sm hidden-md hidden-lg">
							<div class="input-group custom-search-form">
								<input type="text" class="form-control" placeholder="Search...">
								<span class="input-group-btn">
									<button class="btn btn-default" type="button"><i class="ti-search"></i> </button>
								</span>
							</div>
						</li>
						<li>
							<a href="https://rakowitsch-brian.go.yj.fr/admin" class="waves-effect"><i class="glyphicon glyphicon-fire fa-fw"></i>
								Dashboard</a>
						</li>
						<li>
							<a href="profile.php" class="waves-effect"><i class="ti-user fa-fw"></i>Profile</a>
						</li>
						<li>
							<a href="utilisateurs.php" class="waves-effect"><i class="ti-layout fa-fw"></i>Utilisateurs</a>
						</li>
						<li>
							<a href="themifyicon.php" class="waves-effect"><i class="ti-face-smile fa-fw"></i> Icons</a>
						</li>
						<li>
							<a href="map-google.php" class="waves-effect"><i class="ti-location-pin fa-fw"></i> Google
								Map</a>
						</li>
						<li>
							<a href="produit.php" class="waves-effect"><i class="ti-files fa-fw"></i>Produit</a>
						</li>
					</ul>
				</div>
				<!-- /.sidebar-collapse -->
			</div>
	</header>

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