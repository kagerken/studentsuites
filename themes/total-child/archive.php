<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Total
 */

get_header(); ?>
<header class="ht-main-header">
	<div class="ht-container">
		<h1><?php
			single_cat_title();
			//the_archive_title( '<h1 class="ht-main-title">', '</h1>' );
			//the_archive_description( '<div class="taxonomy-description">', '</div>' );
		?>
		</h1>
	</div>
</header><!-- .ht-main-header -->

<h1>This is the page</h1>

<div class="ht-container">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if (have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				
				<?php

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'project', 'summary' );
				?>

			<?php endwhile; ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>
