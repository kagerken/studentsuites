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
add_image_size('custom_size', 583, 388, false);
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
								<?php the_post_thumbnail( 'custom_size' ); ?>
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
	
	<h2>Check out the work we've done for:</h2>
    <div id="bottom">
        <a href="https://tdegisi.web.csit.jccc.edu/studentsuites/category/college-attributes/community-college/" class="ss-call-to-action">Community Colleges</a>
        <a href="https://tdegisi.web.csit.jccc.edu/studentsuites/category/college-attributes/public/" class="ss-call-to-action">Public<br> Colleges</a>
		<a href="https://tdegisi.web.csit.jccc.edu/studentsuites/category/college-attributes/private/" class="ss-call-to-action">Private<br> Colleges</a>
		<a href="https://tdegisi.web.csit.jccc.edu/studentsuites/category/college-attributes/hbcu/" class="ss-call-to-action one-line">HBCU</a>
		<a href="https://tdegisi.web.csit.jccc.edu/studentsuites/category/college-attributes/4-year/" class="ss-call-to-action">4 Year<br> Schools</a>
    </div>

		</main>
	</div>
</div>

<?php get_footer(); ?>