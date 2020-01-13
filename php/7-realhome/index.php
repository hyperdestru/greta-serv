<?php
	require_once('includes/data.php');
?>

<!DOCTYPE HTML>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<title>Real Home Experience</title>
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta http-quiv="X-UA-Compatible" content="ie-edge">
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,600&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="style/reset.css">
	<link rel="stylesheet" href="style/main-style.css">
</head>

<body>
	<div id="global-wrapper">
		<header>
			<div id="header-wrapper">
				<div class="logo">
					<a href=""><img src="assets/images/logo.png"></a>
				</div>

				<nav>
					<ul>
						<li><a href="">Home</a></li>
						<li><a href="">About us</a></li>
						<li><a href="">Property</a></li>
						<li><a href="">Our blog</a></li>
						<li><a href="">Contacts</a></li>
					</ul>
				</nav>

				<ul class="social-icons">
					<li>
						<a href=""><img src="assets/icons/facebook.png"></a>
					</li>

					<li>
						<a href=""><img src="assets/icons/pinterest.png"></a>
					</li>

					<li>
						<a href=""><img src="assets/icons/instagram.png"></a>
					</li>
				</ul>
			</div>
		</header>

		<main>
			<section class="slide">
				<?php foreach ($highlightHouses as $hlHouse) { ?>
					<div>
						<p>
							<?php 
								echo $hlHouse['address'] .", ". $hlHouse['city'];
							?>
							<span>
								<?php echo "$" . number_format($hlHouse['price'])?>
							</span>
						</p>
						<button>More info</button>
					</div>
					<div>
						<input type="radio" name="slideHouse">
					</div>
				<?php } ?>
			</section>

			<section class="selling-points">
				<?php foreach ($sellingPoints as $point) { ?>
					<div>
						<img src="<?php echo "assets/icons/" . $point['icon']; ?>">
						<h3><?php echo $point['title']; ?></h3>
						<p><?php echo $point['textContent']; ?></p>
					<div>
				<?php } ?>		
			</section>

			<section class="featured-properties">
				<h2>Featured properties</h2>
				<p>Quisque diam lorem</p>

				<?php foreach ($featuredHouses as $ftHouse) { ?>
					<article>
						<img src="<?php echo "assets/images/" . $ftHouse['img']; ?>">
						<p>
							<?php echo $ftHouse['address']?>
							<span><?php echo $ftHouse['state'] ."/". $ftHouse['city']; ?></span>
							<span><?php echo "$" . number_format($ftHouse['price']); ?></span>
						</p>
						<ul>
							<?php foreach ($ftHouse['description'] as $value) { ?>
								<li><?php echo $value; ?></li>
							<?php } ?>
						</ul>
					</article>
				<?php } ?>
				<button>All properties</button>
			</section>

			<section class="agents">
				<h3>Our agents</h3>
				<ul>
				<?php foreach ($agents as $agent) { ?>
					<li>
						<?php echo $agent['name']; ?>
					</li>

					<li>
						<?php echo $agent['description']; ?>
					</li>

					<li>
						<img src="">
						<span>
							<?php echo $agent['phonePrefix']; ?>
						</span>
						<?php echo $agent['phone']; ?>
					</li>

					<li>
						<?php echo $agent['email']; ?>
					</li>
				<?php } ?>
				</ul>

			</section>
		</main>

		<footer>
		</footer>
	</div>
</body>

</html>