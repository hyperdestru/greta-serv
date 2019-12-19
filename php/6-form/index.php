<!DOCTYPE HTML>
<html lang="">

<head>
	<meta charset="UTF-8" />
	<title>Forms</title>
	<meta name="description" content="" />
	<link rel="stylesheet" href="style/reset.css">
	<link rel="stylesheet" href="style/main-style.css">
</head>

<body>
	<div class="global-wrapper">

		<header>

			<nav>
			</nav>

		</header>

		<main>

			<form action="index.php" method="get">
				<!--Pour suivre les recommendations de la W3C on encapsule
					chaque input dans des div (ou toutes dans une seule)<-->
				<div>
					<label for="name">Password</label>
					<input
						id="name"
						name="name"
						type="password"
						placeholder="Your password">
				</div>

				<div>
					<textarea
						name="description" 
						id="description">
					</textarea>

					<label for="favorites">Plats Favoris</label>
					<select name="favorites" id="favorites">
						<option value="Poulet Curry">
							Poulet Curry
						</option>

						<option value="Porcs au Caramel">
							Porcs au Caramel
						</option>

						<option value="Rouleaux de Printemps">
							Rouleaux de Printemps
						</option>

						<option value="Poulet Tso">
							Poulet Tso
						</option>
					</select>
				</div>

				<div>
					<label for="red">Red</label>
					<input type="range" value="red" name="red" id="red">

					<label for="green">Green</label>
					<input type="checkbox" value="green" name="green" id="green">

					<label for="blue">Blue</label>
					<input type="checkbox" value="blue" name="blue" id="blue">
				</div>

				<div>
					<label for="red">Red</label>
					<input type="radio" value="red" name="colors" id="red">

					<label for="green">Green</label>
					<input type="radio" value="green" name="colors" id="green">

					<label for="blue">Blue</label>
					<input type="radio" value="blue" name="colors" id="blue">
				</div>

				<button type="submit">Submit</button>
			</form>

		</main>

		<footer>
		</footer>

	</div>
</body>

</html>

