<?php get_header('login'); ?>

<form action="" class="form-signin text-center" method="post">

	<h1 class="h3 mb-3">Se connecter</h1>

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

<?php get_footer('login'); ?>
