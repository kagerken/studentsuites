<?php
/**

 * Template Name: Text with Title

 * Template Post Type: post

 * @package Total-Child

 */
?>
<div class="ss-<?php strtolower(the_title());?>">
	<h2><?php the_title() ?></h2>
	<?php the_content(); ?>
</div>