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
			the_archive_description();
		?>
		</h1>
	</div>
</header><!-- .ht-main-header -->

<div class="ht-container">
	<div class="content-area">
		<main id="main" class="site-main" role="main">
		<?php if (have_posts() ) : ?>
			<div class="grid-row grid-flex-wrap">
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
			</div>
		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>

<script src="<?php bloginfo('wpurl'); ?>/wp-content/themes/total-child/js/allprojectsscripts.js"></script>