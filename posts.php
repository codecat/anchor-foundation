<?php theme_include('header'); ?>

<section class="header">
	<div class="row">
		<div class="medium-12 columns">
			<h1><?= site_name() ?></h1>
			<p><?= site_description() ?></p>
		</div>
	</div>
</section>

<section class="posts content">
	<?php if(!has_posts()) { ?>
		<div class="row">
			<div class="medium-12 columns">
				<h2>No posts</h2>
				<p>There's no posts here.</p>
			</div>
		</div>
	<?php } else { ?>
		<?php while(posts()) { ?>
			<?php theme_include('list_article'); ?>
		<?php } ?>
		
		<?php theme_include('list_pagination'); ?>
	<?php } ?>
</section>

<?php theme_include('footer'); ?>
