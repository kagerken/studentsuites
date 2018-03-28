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
						<div>
								<h3>Mailing Address</h3>
								<div>Student Suites, Inc.</div>
								<div>4041 NE Lakewood Way, Suite 280</div>
								<div>Lee's Summit, MO 64064</div>
						</div>
						<div>
								<h3>Phone Number</h3>
								<div>(816) 228-3040</div>

						</div>
						<div>
								<h3>Fax Number</h3>
								<div>(816) 228-4442</div>

						</div>
				</div>
			</div>
		</main>
	</div>
</div>
<?php get_footer(); ?>