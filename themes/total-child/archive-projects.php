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
			wp_title('');
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

<script>
	function heightEqualsWidth() {
		var figures = document.getElementsByClassName('entry-figure');
		console.log('test');
		var entriesWidth = figures[0].offsetWidth;
		console.log('entriesWidth: ' + entriesWidth);
		for (var i = 0; i < figures.length; i++) {
			figures[i].style.height = entriesWidth;
			console.log('height: ' + figures[i].style.height);
		}
	}

	window.addEventListener('resize', heightEqualsWidth);
	window.addEventListener('load', heightEqualsWidth);
</script>