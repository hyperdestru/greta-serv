<?php 
	require_once("includes/data.php");
	require_once("includes/functions.php");
?>

<!DOCTYPE HTML>
<html lang="fr">

<head>
	<meta charset="UTF-8" />
	<title>Station de Cauterets</title>
	<meta name="description" content="" />
	<link href="" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta http-quiv="X-UA-Compatible" content="ie-edge">
	<!--<link rel="stylesheet" href="style/reset.css"><-->
	<link rel="stylesheet" href="style/main-style.css">
</head>

<body>
	<div class="global-wrapper">

		<header>
			<div class="header-logo">
				<a href="">
					<img src="assets/logo.png" alt="logo" width="60" height="60">
				</a>
			</div>

			<form name="this_form" id="this_form" action="" method="get">
				<input 
					type="search" 
					name="searched"
					id="searched" 
					placeholder="Recherchez votre piste"
				/>
				<button type="submit" form="this_form" formmethod="get">Rechercher</button>
			</form>

			<div class="banner">
				<img src="assets/banner.jpg" alt="" width="100%" height="200">
				<div class="banner-caption">
					<p>La Montagne ça vous gagne</p>
				</div>
			</div>
		</header>

		<main>
			<?php
				$nb_total_slopes = count($slopes);
				$nb_open_slopes = count_open($slopes);
				$nb_closed_slopes = $nb_total_slopes - $nb_open_slopes;
				$open_percentage = round(($nb_open_slopes / $nb_total_slopes) * 100);
			?>
			<section class="stats">
				<div class="stats-title">
					<img src="assets/skier.png" alt="" width="60" height="60">
					<h3>Ouverture des pistes</h3>
				</div>

				<p>Le domaine skiable est ouvert à 
					<span><?php echo $open_percentage; ?></span>%.
					<span><?php echo $nb_open_slopes ?></span> pistes ouvertes et
					<span><?php echo $nb_closed_slopes ?></span> pistes fermées.
				</p>
			</section>

			<table class="table-slopes-color" border="10">
				<tr>
					<?php foreach ($colors as $key => $color) { ?>
						<th>
							<?php
								$open = count_open($slopes, $key);
								$prefix = '';

								if ($open > 0 && $open < 10) {
									$prefix = '0';
								}

								echo $prefix . $open . '/' . count_colors($slopes, $key);
							?>
							<span>
								<?php 
									echo $color;
								?>
							</span>
						</th>
					<?php } ?>
				</tr>
			</table>

			<table class="table-slopes" border="1">
				<caption>Pistes de Ski Alpin</caption>

					<?php foreach ($slopes as $key => $slope) {
						if (
							empty($_GET['searched']) ||
							$slope['name'] == $_GET['searched'] ||
							stristr($slope['name'], $_GET['searched'])
						) { ?>

								<tr>
									<td>
										<?php 
											echo $colors[$slope['color']];
										?>		
									</td>

									<td>
										<?php 
											echo $slope['name'];
										?>
									</td>

									<td>
										<?php 
											if($slope['open']) { 
												echo "Ouverte";
											} else {
												echo "Fermée";
											}
										?>
									</td>
								</tr>
						<?php } ?>
					<?php } ?>
			</table>

			<table class="table-lifts" border="1">
				<caption>Remontées Mécaniques</caption>

					<?php foreach ($lifts as $key => $lift) { ?>
						<tr>
							<td>
								<img 
									src="<?php echo "assets/icons/" . $lift['type'] . ".png"; ?>"
									alt="<?php echo $liftsTypes[$lift['type']]; ?>"
									title="<?php echo $liftsTypes[$lift['type']]; ?>"
									width="22"
									height="22"
								/>
							</td>

							<td>
								<?php 
									echo $lift['name'] 
								?>
							</td>

							<td>
								<?php 
									if ($lift['open']) {
										echo "Ouvert";
									} else {
										echo "Fermé";
									}
								?>
							</td>
						</tr>
					<?php } ?>
			</table>

		</main>

		<footer>
		</footer>

	</div>
</body>

</html>