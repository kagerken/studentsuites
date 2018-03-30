<?php
/**
 * Template part for displaying single posts.
 *
 * @package Total-Child
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="grid-row m-padding-vertical m-b-margin">
			<div class="project-photo-container s-padding-horizontal">
				<?php the_post_thumbnail('total-blog-header'); // I need to define a custom one in our theme functions
				?>
			</div>
			<div class="project-information-container s-padding-horizontal">
				<div><span class="xs-r-margin bolded">Date Completed:</span><?php the_field('date_completed');?></div>
				<div><span class="xs-r-margin bolded">Total Cost:</span>$<?php the_field('project_cost');?></div>
				<div><span class="xs-r-margin bolded"># of Beds:</span><?php the_field('project_beds');?></div>
				<div><span class="xs-r-margin bolded">Per Bed Cost:</span>$<?php the_field('per_bed_cost');?></div>
				<div><span class="xs-r-margin bolded">Per Square Foot:</span>$<?php the_field('square_footage_cost');?></div>
				<div><a href="<?php the_field('file_attachements') ?>" target="_blank">Download Project Case Study</a></div>
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