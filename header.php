<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?= site_description() ?>">
		
		<meta name="generator" content="Me">
		
		<meta property="og:title" content="<?= site_name() ?>">
		<meta property="og:type" content="website">
		<meta property="og:url" content="<?= e(current_url()) ?>">
		<meta property="og:site_name" content="<?= site_name() ?>">
		<meta property="og:description" content="<?= site_description() ?>">
		
		<title><?= page_title('Page not found') ?> - <?= site_name() ?></title>
		
		<link rel="stylesheet" href="<?= theme_url('/stylesheets/app.css') ?>">
		<script src="<?= theme_url('/bower_components/foundation/js/vendor/modernizr.js') ?>"></script>
		
		<link rel="alternate" type="application/rss+xml" title="RSS" href="<?= rss_url() ?>">
		
		<?php if(customised()) { ?>
			<style><?= article_css(); ?></style>
			<script><?= article_js(); ?></script>
		<?php } ?>
	</head>
	
	<body>
		<div class="sticky">
			<nav class="top-bar" data-topbar role="navigation">
				<ul class="title-area">
					<li class="name"><h1><a href="<?= base_url() ?>"><?= site_name() ?></a></h1></li>
				</ul>
				
				<section class="top-bar-section">
					<ul class="right">
						<li class="has-dropdown">
							<a href="#">Categories</a>
							<ul class="dropdown">
								<?php while(categories()) { if(category_count() > 0) { ?>
									<li class="category">
										<a href="<?= category_url() ?>" title="<?= category_description() ?>">
											<?= category_title() ?>
										</a>
									<li>
								<?php } } ?>
							</ul>
						</li>
					</ul>
					
					<ul class="left">
						<li class="has-form">
							<form action="<?= search_url() ?>" method="post">
								<input type="text" name="term" placeholder="Search">
							</form>
						</li>
						
						<?php while(menu_items()) { ?>
							<li<?= menu_active() ? ' class="active"' : '' ?>>
								<a href="<?= menu_url() ?>" title="<?= menu_title() ?>">
									<?= menu_name() ?>
								</a>
							</li>
						<?php } ?>
					</ul>
				</section>
			</nav>
		</div>
