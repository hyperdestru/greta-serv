<?php get_header('Les 10 meilleurs films de 2016'); ?>
	<section>
		<ul id="categories">

			<li><a href="" class="active">Toutes</a></li>

			<?php foreach (getCategories() as $value) : ?>
				<li><a href=""><?= $value['name']; ?></a></li>
			<?php endforeach; ?>

		</ul>

		<select class="categories-select-responsive">
				<option value="">Toutes</option>
				<?php foreach (getCategories() as $value) : ?>
					<option value=""><?= $value['name']; ?></option>
				<?php endforeach; ?>
		</select>
		
		<header>
			<h1 class="title">Les 10 meilleurs films de 2016</h1>
		</header>

		<div id="movies">
			<?php foreach (getMovies() as $value) : ?>
				<article>
					<div class="image">
						<a href="<?= $router->generate('moviesSingle', ['slug' => $value['slug']]); ?>">
							<img src="src/assets/images/vaiana.jpg" alt="Image">
						</a>
						<span><?= $value['viewer']; ?></span>
					</div>
					<h2><?= $value['title']; ?></h2>
					<ul>
						<li><a href="">Ma cat,</a></li>
						<li><a href="">Ma cat</a></li>
					</ul>
					<span><?= dateFormat($value['releaseDate'], false); ?></span>
				</article>
			<?php endforeach; ?>
		</div>
	</section>
<?php get_footer(); ?>