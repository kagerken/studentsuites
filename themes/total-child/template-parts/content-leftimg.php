<?php
/**

 * Template Name: Left Image w/text

 * Template Post Type: post

 * @package Total-Child

 */
?>
<section class="left-image">
	<h2><?php the_title() ?></h2>
	<div class="grid-row grid-flex-break">
		<div class="grid-item-1 image-container m-a-padding">
			<?php the_post_thumbnail(); ?>
		</div>
		
		<div class="grid-item-1 m-h-padding">
			<?php the_content(); ?>
		</div>
	</div>
</section>