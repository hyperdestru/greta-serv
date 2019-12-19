<?php
	require_once('includes/data.php');
	require_once('includes/functions.php');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,600,700|Oswald&display=swap&subset=latin-ext" rel="stylesheet">
	<link rel="stylesheet" href="assets/style/reset.css" />
	<link rel="stylesheet" href="assets/style/main-style.css" />
	<link rel="icon" href="assets/icons/favico.ico" />
	<title>Station de Cauterets</title>
</head>

<body>

	<header id="header" class="wrapper">

		<div id="logo">
			<a href="">
				<img src="assets/images/logo.png" alt="Logo" />
			</a>
		</div>

		<form name="this_form" id="this_form" action="" method="get">
			<label>Rechercher</label>
			<input
				type="search"
				name="searched"
				id="searched"
				placeholder="Recherchez votre piste"
				value="<?php echo isSearched() ?>"/>

			<button id="form-button" type="submit" form="this_form" formmethod="get">
				<img src="assets/images/loupe-mono.png" alt="Loupe">
			</button>
		</form>

	</header>

	<div id="banner">
		<h1>La montagne ça vous gagne</h1>
	</div>

	<main id="primary" class="wrapper">

		<div id="title">
			<img src="assets/images/skier.png" alt="" id="ski">

			<?php $infos = infoSlopes($slopes, $colors); ?>

			<div id="title-text">
				<h2>Ouverture des pistes</h2>
				<p>Le domaine skiable est ouvert à 
					<?php echo $infos['percentOpen']; ?>
					%.
					<?php echo $infos['openSlopes']; ?>
					pistes ouvertes et 
					<?php echo $infos['closeSlopes']; ?>
					pistes fermées.
				</p>
			</div>

		</div>

		<ul id="colors">

			<?php foreach ($infos['colorsTotal'] as $key => $value) { ?>

				<li class="<?php echo $key; ?>">

					<div>
						<span>
							<?php echo zeroFormat($infos['colorsOpen'][$key]); ?>
						</span>/<?php echo zeroFormat($value); ?>
					</div>

					<div>
						<p>
							<?php echo $colors[$key]; ?>
						</p>
					</div>
				</li>

			<?php } ?>
		</ul>

		<table id="slopes">
			<caption>Pistes de Ski Alpin</caption>
			<tbody>
				<?php foreach ($slopes as $slope) { ?>
					<tr>
						<?php if (empty($_GET['searched']) ||
							$slope['name'] == $_GET['searched'] ||
							stristr($slope['name'], $_GET['searched'])) {

							$result = true;
						?>
						<td>
							<span class="circle <?php echo $slope['color']; ?>">
								<?php echo $colors[$slope['color']]; ?>
							</span>
						</td>

						<td>
							<?php echo $slope['name']; ?>
						</td>

						<td class="<?php echo stateDisplay($slope['state']); ?>">
							<?php echo stateDisplay($slope['state']); ?>
						</td>

						<?php } ?>
					</tr>
				<?php } ?>
			</tbody>
		</table>

		<?php if (!empty($_GET['searched'])) { ?>
			<div class="refresh-button">
				<a href="index.php#slopes" title="Afficher toutes les pistes">
					Afficher tous les resultats
				</a>
			</div>
		<?php } ?>

		<table>
			<caption>Remontées Mécaniques</caption>
			<tbody>

				<?php foreach ($lifts as $value) { ?>
					<tr>
						<td>
							<img src="assets/icons/<?php echo $value['type']; ?>.png" alt="Image" />
						</td>

						<td>
							<?php echo $value['name']; ?>
						</td>

						<td class="<?php echo stateDisplay($value['state']); ?>">
							<?php echo stateDisplay($value['state']); ?>
						</td>
					</tr>
				<?php } ?>

			</tbody>
		</table>
	</main>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="main.js"></script>
</body>

</html>