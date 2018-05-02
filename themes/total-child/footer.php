<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Total
 */
?>
	</div><!-- #content -->
	<footer id="ht-colophon" class="ht-site-footer">
		<?php if(is_active_sidebar('total-footer1') || is_active_sidebar('total-footer2') || is_active_sidebar('total-footer3') || is_active_sidebar('total-footer4')){ ?>
		<div id="ht-top-footer">
			<div class="ht-container">
				<div class="ht-top-footer ht-clearfix">
					<div class="ht-footer ht-footer1">
						<?php if(is_active_sidebar('total-footer1')): 
							dynamic_sidebar('total-footer1');
						endif;
						?>	
					</div>
					<div class="ht-footer ht-footer2">
						<?php if(is_active_sidebar('total-footer2')): 
							dynamic_sidebar('total-footer2');
						endif;
						?>	
					</div>
					<div class="ht-footer ht-footer3">
						<?php if(is_active_sidebar('total-footer3')): 
							dynamic_sidebar('total-footer3');
						endif;
						?>	
					</div>

					<div class="ht-footer ht-footer4">
						<?php if(is_active_sidebar('total-footer4')): 
							dynamic_sidebar('total-footer4');
						endif;
						?>	
					</div>
				</div>
			</div>
		</div>
		<?php } ?>
		<div id="ht-bottom-footer">
			<div class="ht-container">
				<div class="ht-site-info">
					<a href="https://www.linkedin.com/company/student-suites/" target="_blank"><img src="<?php bloginfo('wpurl'); ?>/in-2crev-101px-r/" alt="LinkedIn logo"></a>
                    <p>Student Suites &copy; 2018</p>
				</div><!-- #site-info -->
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<div id="ht-back-top" class="ht-hide"><i class="fa fa-angle-up" aria-hidden="true"></i></div>
<?php wp_footer(); ?>
</body>
</html>