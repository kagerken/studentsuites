<section class="right-image">
	<h2><?php the_title() ?></h2>
	<div class="grid-row">
		<div class="grid-item-1 m-h-padding">
			<?php the_content(); ?>
		</div>
		<div class="grid-item-1 image-container m-h-padding">
			<?php the_post_thumbnail(); ?>
		</div>
	</div>
</section>