<?php 
	require_once('includes/data.php'); 
	require_once('includes/functions.php'); 
?>

<!DOCTYPE HTML>

<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="assets/style/reset.css">
	<link rel="stylesheet" href="assets/style/main-style.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,600,700|Oswald&display=swap" rel="stylesheet"> 
	<title>Tous Au Ski!</title>
</head>

<body>

	<header id="header" class="wrapper">

		<div id="logo">
			<a href="">
				<img src="assets/images/logo.png" alt="Logo" />
			</a>
		</div>

		<form name="this_form" id="this_form" action="" method="get">
			<input 
				type="search" 
				name="searched"
				id="searched" 
				placeholder="Recherchez votre piste">

			<button type="submit" form="this_form" formmethod="get">
				<img src="assets/images/loupe.png">
			</button>
		</form>

	</header>

	<div id="banner">
		<h1>La montagne ça vous gagne</h1>
	</div>

	<main id="primary" class="wrapper">

		<div id="title">
			<?php 
				$infos = infoSlopes($slopes, $colors);
			?>
			<h2>Ouverture des pistes</h2>
			<p>Le domaine skiable est ouvert à 
				<?php 
					echo $infos['percentOpen'] . '%. ';
					echo $infos['openSlopes'] . ' pistes ouvertes et ';
					echo $infos['closeSlopes'] . ' pistes fermées.';
				?>
			</p>
		</div>
		
		<ul id="colors">
			<?php foreach ($infos['colorsTotal'] as $key => $value) { ?>
				<li>
					<?php echo zeroFormat($infos['colorsOpen'][$key]); ?>/<?php echo zeroFormat($value); ?>
					<p><?php echo $colors[$key]; ?></p>
				</li>
			<?php } ?>
		</ul>

		<table class="table-slopes">
			<caption>Pistes de Ski Alpin</caption>
			<tbody>
				<?php foreach ($slopes as $value) { ?>
					<tr>
						<td>
							<span class="circle <?php echo $value['color']; ?>">
								<?php echo $colors[$value['color']]; ?>
							</span>
						</td>
						<td>
							<?php 
								echo $value['name']; 
							?>
						</td>
						<td>
							<?php if ($value['state']) { 
								$class = "open";
							} else { 
								$class = "close";
							} ?>
							<span class="colored-state <?php echo $class ?>">
								<?php echo stateDisplay($value['state']); ?>
							</span>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>

		<table>
			<caption>Remontées Mécaniques</caption>
			<tbody>
				<?php foreach ($lifts as $lift) { ?>
					<tr>
						<td>
							<img src="assets/icons/<?php echo $lift['type']; ?>.png" alt="Image" />
						</td>
						<td><?php echo $lift['name']; ?></td>
						<td>
							<?php if ($lift['state']) { 
								$custom_class = "open";
							} else { 
								$custom_class = "close";
							} ?>
							<span class="colored-state <?php echo $custom_class ?>">
								<?php echo stateDisplay($lift['state']); ?>
							</span>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>

	</main>

</body>

</html>
