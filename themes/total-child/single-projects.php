<?php
/**
 * The template for displaying all single posts.
 *
 * @package Total-Child
 */

get_header(); ?>
<header class="ht-main-header">
	<div class="ht-container">
		<?php the_title( '<h1 class="ht-main-title">', '</h1>' ); ?>
		<h2><?php the_field('project_name');?></h2>

	</div>
</header><!-- .entry-header -->

<div class="ht-container">
	<div class="content-area">
		<main id="main" class="site-main">
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/projects', 'single' ); ?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>

</div>

<?php get_footer(); 