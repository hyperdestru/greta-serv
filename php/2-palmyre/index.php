<?php 
	require_once('includes/data.php');
?>

<!DOCTYPE html>
<HTML lang="fr">

<head>
	<meta charset="UTF-8" />
	<title>La Palmyre</title>
	<meta name="description" content="Un super ZOO" />
	<link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/reset.css">
	<link rel="stylesheet" href="assets/css/main-style.css">
</head>

<body>

	<div class="wrapper">

		<main>

		<header>
			<nav class="menu">
				<ul>
					<li class="menu-element">
						<a href="index.php">Tous</a>
					</li>

					<?php foreach ($categories as $key => $category) { ?>
					<li class="menu-element">
						<a href="index.php?filter=<?php echo $key ?>" title="<?php echo $category; ?>">
							<?php echo $category; ?> 
						</a>
					</li>
					<?php } ?>

				</ul>
			</nav>
		</header>
		
			<?php foreach ($animals as $key => $animal) {

				if(empty($_GET['filter']) || 
					$animal['category'] == $_GET['filter'] ||
					/*Check si l'argument entré est une categorie qui existe, sinon ça les affichera tous*/
					empty($categories[$_GET['filter']])
				) { ?>

					<article>

							<div class="animal-title">

								<h3>
									<a href="single.php?id=<?php echo $key ?>">
										<?php echo $animal['name']; ?>
									</a>
								</h3>

								<span>
									<?php echo $animal['zone']; ?>
								</span>
								
								<div class="arrow-down"></div>
							</div>

							<div class="animal-image">
								<img alt="" src= "<?php echo("assets/images/".$animal['image']); ?>" />
							</div>

							<p class="description">
								<?php echo $animal['description']; ?>
							</p>

					</article>

				<?php }

			} ?>
				
		</main>

		<footer>
		</footer>

	</div>

</body>

</html>