<?php 
	require_once('../includes/database.php');
	require_once('functions.php');
?>
<!DOCTYPE html>
<html lang="fr" class="login-page">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/main.css">
	<title>Se connecter</title>
</head>
<body>
	<form action="" class="form-signin text-center" method="post">
		<h1 class="h3 mb-3">Se connecter</h1>
		<?php echo alert2(); ?>
		<div>
			<label for="email" class="sr-only">Adresse email</label>
			<input class="form-control" type="email" name="email" placeholder="Adresse email" id="email" autofocus>
		</div>
		<div>
			<label for="password" class="sr-only">Mot de passe</label>
			<input class="form-control" type="password" name="password" placeholder="Mot de passe" id="password">
		</div>
		<div class="d-none">
			<label for="firstname" class="sr-only">Votre prénom</label>
			<input type="text" class="form-control" name="firstname" id="firstname">
		</div>
		<div class="mt-3">
			<input class="btn btn-primary btn-block" type="submit" value="Se connecter">
		</div>
		<div class="mt-3 small">
			<a href="" title="Mot de passe oublié" class="text-muted">Mot de passe oublié ?</a>
		</div>
	</form>
</body>
</html>