<?php
/* Template for Contact Us Page */
get_header();
?>

<header class="ht-main-header">
	<div class="ht-container">
		<?php the_title( '<h1 class="ht-main-title">', '</h1>' ); ?>
	</div>
</header><!-- .entry-header -->


<div class="ht-container">
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="contact-container">
				<form>
					<label for="ssuites-contact-name">Name</label>
					<input id="ssuites-contact-name" class="contact-input" name="ssuites-contact-name" required type="text" />
					<label for="ssuites-contact-school">School</label>
					<input id="ssuites-contact-school" class="contact-input" name="ssuites-contact-school" type="text" />
					<label for="ssuites-contact-email">Email</label>
					<input id="ssuites-contact-email" class="contact-input" name="ssuites-contact-email" required type="email" />
					<label for="ssuites-contact-tel">Telephone</label>
					<input id="ssuites-contact-tel" class="contact-input" name="ssuites-contact-tel" type="tel" />
					<label for="ssuites-contact-message">Message</label>
					<textarea id="ssuites-contact-message" class="contact-textarea" name="ssuites-contact-message" required></textarea>
					<div class="container">
						<input class="xs-r-margin" type="submit" value="Submit" />
						<input type="reset" />
					</div>
				</form>

				<div>										
						<h2>Our Information</h2>
						<?php
						$args = array('category_name'=>'contact-information','order'=>'ASC','orderby'=>'ID');
						$query = new WP_Query($args);
						if( $query->have_posts() ):
						?>

							<?php while($query->have_posts()) : $query->the_post() ?>
								<?php get_template_part('template-parts/content', 'text'); ?>
							<?php 	endwhile; 
									wp_reset_postdata();
							?>
						<?php endif; ?>
				</div>
			</div>
		</main>
	</div>
</div>
<?php get_footer(); ?>