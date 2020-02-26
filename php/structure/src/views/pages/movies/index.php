<?php get_header(); ?>

	<section>

		<ul>
			<?php foreach (getCategories() as $category) { ?>
				<li>
					<a href="">
						<?= $category['name']; ?>
					</a>
				</li>
			<?php } ?>
		</ul>

		<h1>Les 10 meilleurs films de 2016</h1>

		<?php foreach (getMovies() as $key => $movie) { ?>
			<article>
				<a href="">
					<img src="" alt="Affiche du film">
				</a>

				<span><?= $movie['viewer'] ?></span>

				<h2><?= $movie['title'] ?></h2>

				<ul>
					<li>
						<a href="">Categorie</a>
					</li>
				</ul>

				<span><?= $movie['releaseDate'] ?></span>
			</article>
		<?php } ?>

	</section>

<?php get_footer(); ?>