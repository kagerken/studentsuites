<?php


/**

 * Template Name: SS Containers Home Page

 * adding comment - other comment

 * @package total-child

 */
?>

<?php
get_header();
get_template_part('template-parts/section', 'slider');
wp_reset_postdata();
?>

<div class="ht-container">
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<?php 
				/* pulling specific posts out to dispay content, sorry */
				$args = array('p'=>388,);
				$ss = new WP_Query($args);
				if( $ss->have_posts() ): ?>

					<?php while($ss->have_posts() ) : $ss->the_post();?>
						<div id="centerblock" class="l-v-padding">
			        		<?php the_content();?>
						</div>
					
					<?php 
					endwhile;
					wp_reset_postdata();
					?>
				<?php endif; ?>

			<?php 
			$args = array('p'=>390,);
			$ss = new WP_Query($args);
			if( $ss->have_posts() ): ?>

				<?php while( $ss->have_posts() ) : $ss->the_post(); ?>
					<div class="ss-section-container">
						<div class="homeHeading l-v-padding">
							<h1><?php the_title(); ?></h1>
						</div>
						<div class="ss-container grid-row">
							<div class="infographic m-b-margin l-h-padding">
								<?php the_post_thumbnail( 'total-portfolio-thumb' ); ?>
							</div>
							<div class="ss-center-right m-b-margin l-h-padding">
								<?php the_content() ?>
							</div>
						</div>
					</div>
				<?php 
					endwhile;
					wp_reset_postdata();
				?>
			<?php endif; ?>
		
    <div id="bottom">
        <div class="ss-call-to-action"><a href="#" title="">Call To Action</a></div>
        <div class="ss-call-to-action"><a href="#" title="">Call To Action</a></div>
    </div>

		</main>
	</div>
</div>

<?php get_footer(); ?>