<?php
/**
 * Template part for displaying single posts.
 *
 * @package Total-Child
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="project-grid-row m-v-padding m-b-margin">
			<div class="project-photo-container s-h-padding s-b-margin">
				<?php the_post_thumbnail('total-blog-header'); // I need to define a custom one in our theme functions
				?>
			</div>
		</div>
		<div class="content"><?php the_content(); ?></div>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'total' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->