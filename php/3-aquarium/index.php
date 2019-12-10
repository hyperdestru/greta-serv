<?php 
	require_once('includes/data.php');
?>

<!DOCTYPE html>
<HTML lang="fr">

<head>
	<meta charset="UTF-8" />
	<title>Aquarium</title>
	<meta name="description" content="Actus Aquarium" />
	<link href="https://fonts.googleapis.com/css?family=Libre+Franklin&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/reset.css">
	<link rel="stylesheet" href="assets/css/main-style.css">
</head>

<body>

	<header>
	</header>

	<div class="wrapper">
				
		<div class="animals">

			<?php foreach ($articles as $article) { ?>

				<article>

					<h2>
						<a href="">
							<?php echo $article['title'] ?>
						</a>
					</h2>

					<div class="image-animal">
						<img 
							alt="<?php echo $article['title'] ?>" 
							src="<?php echo "assets/images/".$article['img'] ?>"
						/>
					</div>

					<p>
						<?php echo $article['description'] ?>
					</p>

					<a href="" class="button-link">> Lire la suite...</a>
				</article>

			<?php } ?>

		</div>

	</div>

	<footer>
	</footer>

</body>

</html>
