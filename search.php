<?php theme_include('header'); ?>

<section class="header">
	<div class="row">
		<div class="medium-12 columns">
			<h1><?= site_name() ?></h1>
			<p>Search results for &ldquo;<?= e(search_term()) ?>&rdquo;</p>
		</div>
	</div>
</section>

<section class="search content">
	<?php if(!has_search_results()) { ?>
		<div class="row">
			<div class="medium-12 columns">
				<h2>No results.</h2>
				<p>There are no results.</p>
			</div>
		</div>
	<?php } else { ?>
		<?php while(search_results()) { ?>
			<?php theme_include('list_article'); ?>
		<?php } ?>
		
		<?php theme_include('list_pagination'); ?>
	<?php } ?>
</section>

<?php theme_include('footer'); ?>
