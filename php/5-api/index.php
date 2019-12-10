<?php
	require_once('functions.php');

	$options = [
		'gender' => 'all',
		'nat' => 'fr',
		'results' => 50
	];

	$data = getCurl('https://randomuser.me/api/', $options);
	//debug($data);
?>

<!DOCTYPE HTML>
<html lang="">

<head>
	<meta charset="UTF-8" />
	<title>API Random User</title>
	<meta name="description" content="" />
	<link href="" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta http-quiv="X-UA-Compatible" content="ie-edge">
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
			<div class="users-wrapper">
				<ul>
				<?php foreach ($data['results'] as $user) { ?>
						<li class="user">
							<img src="<?php echo $user['picture']['large'];?>"/>
							<p>
								<?php 
									echo $user['name']['first'] . ' ' . $user['name']['last']
								?>
							</p>
						</li>
				<?php } ?>
				</ul>
			</div>
		</main>

		<footer>
		</footer>

	</div>
</body>

</html>


