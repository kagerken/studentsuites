
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
			<div class="project-information-container s-h-padding s-b-margin">
				<ul>
					<li><span class="xs-r-margin bolded">Date Completed:</span><?php the_field('date_completed');?></li>
					<li><span class="xs-r-margin bolded">Total Cost:</span>$<?php the_field('project_cost');?></li>
					<li><span class="xs-r-margin bolded"># of Beds:</span><?php the_field('project_beds');?></li>
					<li><span class="xs-r-margin bolded">Per Bed Cost:</span>$<?php the_field('per_bed_cost');?></li>
					<li><span class="xs-r-margin bolded">Per Square Foot:</span>$<?php the_field('square_footage_cost');?></li>
					<li><a href="<?php the_field('file_attachements') ?>" target="_blank" onclick=”_gaq.push([‘_trackEvent’,’Download’,’PDF’,this.href]);”>Download Project Case Study</a></li><!--onclick code added for Google Analytics Tracking of PDF Download LunaJ 20 April 2018-->
				</ul>
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