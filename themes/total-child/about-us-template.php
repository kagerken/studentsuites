<?php

/**

 * Template Name: SS Containers About Us Page

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
			$args = array('category_name' => 'ss-about-us','order'=>'ASC','orderby'=>'ID');
			$query = new WP_Query($args);
			if( $query->have_posts() ):
			?>
				<?php while( $query->have_posts()) : $query->the_post(); ?>
					<?php get_template_part('template-parts/content', 'text'); ?>
					
				<?php 
				endwhile;
				wp_reset_postdata();
				?>
			<?php endif; ?>
					<?php
					$args = array('category_name' => 'leadership','order'=>'ASC','orderby'=>'ID');
					$query = new WP_Query($args);
					if( $query->have_posts() ):
					?>
				<h2>Meet the Leadership</h2>
				<div class="grid-container">
					<div class="grid-row">
						<?php while( $query->have_posts()) : $query->the_post(); ?>
							<?php get_template_part('template-parts/content', 'leadership'); ?>
							
						<?php 
						endwhile;
						wp_reset_postdata();
						?>
					<?php endif; ?>
					</div>
				</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>