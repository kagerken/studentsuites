<?php
/**

 * Template Name: Right Image w/text

 * Template Post Type: post

 * @package Total-Child

 */
?>
<section class="right-image">
	<h2><?php the_title() ?></h2>
	<div class="grid-row grid-flex-break">
		<div class="grid-item-1 right-image-container image-container m-h-padding">
			<?php the_post_thumbnail(); ?>
		</div>
		<div class="grid-item-1 m-a-padding">
			<?php the_content(); ?>
		</div>
		
	</div>
</section>