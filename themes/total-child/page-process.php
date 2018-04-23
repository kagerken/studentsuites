<?php

/**

 * Template Name: SS Our Process Page

 *

 * @package Total-Child

 */
?>

<?php get_header(); ?>

<header class="ht-main-header">
	<div class="ht-container">
		<?php the_title( '<h1 class="ht-main-title">', '</h1>' ); ?>
	</div>
</header><!-- .entry-header -->

<div class="ht-container">
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		
			<?php
			$counter = 0;
			$args = array('category_name' => 'our-process','order'=>'ASC','orderby'=>'ID');
			$query = new WP_Query($args);
			if( $query->have_posts() ):
			?>
				<?php while( $query->have_posts()) : $query->the_post(); ?>
						<?php if($counter % 2 ==0 ){
							get_template_part('template-parts/content', 'leftimg');
						}else{
							get_template_part('template-parts/content', 'rightimg');
						}?>
				<?php 
				$counter++;
				endwhile;
				wp_reset_postdata();
				?>
			<?php endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>