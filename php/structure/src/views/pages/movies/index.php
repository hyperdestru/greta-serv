<?php get_header('public'); ?>

	<section id="landing-section">

		<ul id="categories">
			<li><a href="">Toutes</a></li>
			<?php foreach (getCategories() as $category) { ?>
				<li>
					<a href="">
						<?= $category['name']; ?>
					</a>
				</li>
			<?php } ?>
		</ul>

		<h1>Les 10 meilleurs films de 2016</h1>

		<div id="movies-wrapper">
			<?php foreach (getMovies() as $key => $movie) { ?>
				<article>
					<a class="poster" href="">
						<img src="src/assets/images/affiche1.jpg" alt="Affiche du film">
					</a>

					<span class="viewers"><?= $movie['viewer'] ?></span>

					<h2><?= $movie['title'] ?></h2>
					<ul>
						<li>
							<a href="">Categorie</a>
						</li>
					</ul>
					<span><?= $movie['releaseDate'] ?></span>
				</article>
			<?php } ?>
		</div>

	</section>

<?php get_footer('public'); ?>