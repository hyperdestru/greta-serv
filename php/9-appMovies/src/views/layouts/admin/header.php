<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Admin</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-dark bg-dark navbar-expand-lg mb-5">
		<div class="container">
			<a href="" class="navbar-brand">Admin</a>
			<div class="collapse navbar-collapse">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="" title="Tableau de bord">Tableau de bord</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="" title="Films">Films</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="" title="Utilisateurs" data-toggle="dropdown">Utilisateurs</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="" title="Ajouter">Ajouter</a>
							<a class="dropdown-item" href="" title="Modifier">Modifier</a>
							<a class="dropdown-item" href="" title="Supprimer">Supprimer</a>
						</div>
					</li>
				</ul>
			</div>
			<div class="my-2 my-lg-0">
				<a href="" class="btn btn-danger" title="Se déconnecter">Se déconnecter</a>
			</div>
		</div>
	</nav>

	<div class="container">
		<?php displayNotif(); ?>