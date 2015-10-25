		<section class="footer">
			<div class="row">
				<div class="medium-6 columns">
					&copy; <?= date('Y') ?> <?= site_name() ?>
				</div>
				<div class="medium-6 columns medium-text-right">
					<a href="<?= base_url('admin') ?>">Manage</a>
					<a href="<?= rss_url() ?>">RSS</a>
				</div>
			</div>
		</section>

		<script src="<?= theme_url('/bower_components/jquery/dist/jquery.min.js') ?>"></script>
		<script src="<?= theme_url('/bower_components/foundation/js/foundation.min.js') ?>"></script>
		<script>
			$(document).foundation();
		</script>
	</body>
</html>
