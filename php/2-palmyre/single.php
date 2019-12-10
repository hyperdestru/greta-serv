<?php require_once('includes/data.php') ?>

<!DOCTYPE HTML>
<html lang="fr">

<head>
	<meta charset="UTF-8" />
	<title>"Detail de l'animal"</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta http-quiv="X-UA-Compatible" content="ie-edge">
</head>

<body>

	<?php 
		if($_GET['id'] != NULL && is_numeric($_GET['id']) && is_int($_GET['id'] * 1) && $_GET['id'] >= 0 && $_GET['id'] < count($animals)) {
			$id = (int) $_GET['id']; ?>
			<article>
				<div class="animal-title">
					<h3>
						<?php echo $animals[$id]['name']; ?>
					</h3>
				</div>
				<div class="animal-description">
					<p>
						<?php echo $animals[$id]['description']; ?>
					</p>
				</div>
				<img src="<?php echo 'assets/images/' . $animals[$id]['image']; ?>"/>
			</article>

		<?php } else {
			echo "ID is not a number or
			not an integer or
			is out of table or
			is NULL";
		} ?>

</body>

</html>