<?php if(has_pagination()) { ?>
	<ul class="pagination">
		<?= posts_prev() ?>
		<?= posts_next() ?>
	</ul>
<?php } ?>
