<?php theme_include('header'); ?>

<section class="article header">
	<div class="row">
		<div class="medium-12 columns">
			<h1><?= article_title() ?></h1>
			<p>By <?= article_author() ?> at <?= date('Y-m-d', article_time()) ?></p>
		</div>
	</div>
</section>

<section class="article content">
	<div class="row">
		<div class="medium-12 columns">
			<h2><?= article_title() ?></h2>
			<article>
				<?= article_markdown() ?>
			</article>
		</div>
	</div>
</section>

<?php theme_include('footer'); ?>

