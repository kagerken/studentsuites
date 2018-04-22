<?php

/**

 * Template part for displaying posts.

 *

 * @package Total-Child

 */



?>
<?php $a = array('total-hentry','coll-grid-item-3'); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class($a); ?>>


	<div class="m-h-padding">

		<?php if(has_post_thumbnail()): ?>

		<figure class="entry-figure">

			<?php 

			$total_image = wp_get_attachment_image_src( get_post_thumbnail_id() , 'total-portfolio-thumb' );

			?>

			<a href="<?php the_permalink(); ?>"><img src="<?php echo esc_url($total_image[0]); ?>" alt="<?php echo esc_attr( get_the_title() ) ?>"></a>

		</figure>

		<?php endif; ?>

        

		<header class="entry-header">

			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		</header><!-- .entry-header -->

	</div>

</article><!-- #post-## -->

