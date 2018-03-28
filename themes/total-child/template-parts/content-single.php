<?php
/**
 * Template part for displaying single posts.
 *
 * @package Total-Child
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<div class="entry-meta ht-post-info">
			<?php total_posted_on(); ?>
		</div><!-- .entry-meta -->
		
		<div>
			<div class="project-information-container">
				<div><?php the_field('date_completed');?></div>
				<div><a href="<?php the_field('file_attachements') ?>" target="_blank">Download Project Case Study</a></div>
				<div>$<?php the_field('project_cost');?></div>
				<div># of beds: <?php the_field('project_beds');?></div>
				<div>$<?php the_field('per_bed_cost');?> per bed</div>
				<div>$<?php the_field('square_footage_cost');?> per square foot</div>
			</div>
			<div class="project-photo-container">
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