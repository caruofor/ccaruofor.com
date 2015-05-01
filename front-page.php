<?php  
get_header();?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			
			<div class="indent">
				<section id="meet">
					<?php  
							$query = new WP_Query('pagename=about-us-single');
							//The Loop
							if ($query ->have_posts()){
								while ($query->have_posts() ) {
									   $query->the_post();
									   echo '<h2 class="section-title">' . get_the_title() . '</h2>';
									   echo '<div clas ="page">';
									   the_content();
									   echo '</div>';
								}
							}
							/* Restore original Post Data */
							wp_reset_postdata();
						?>
				</section>
			</div>

			
			<div class="indent">
				<section id="call-to-action">
					<div class="front-left">
						<?php  
							$query = new WP_Query('pagename=resume');
							//The Loop
							if ($query ->have_posts()){
								while ($query->have_posts() ) {
									   $query->the_post();
									   echo '<h2 class="section-title">' . get_the_title() . '</h2>';
									   echo '<div clas ="page">';
									   get_template_part('content');
									   echo '</div>';
								}
							}
							/* Restore original Post Data */
							wp_reset_postdata();
						?>
					</div>
					<div class="front-right">
						form
					</div>
				</section>
			</div>

			<div class="indent">
				<section id="testimonials">
					<?php  
							$query = new WP_Query('pagename=testimonials');
							//The Loop
							if ($query ->have_posts()){
								while ($query->have_posts() ) {
									   $query->the_post();
									   echo '<h2 class="section-title">' . get_the_title() . '</h2>';
									   echo '<div clas ="page">';
									   the_content();
									   echo '</div>';
								}
							}
							/* Restore original Post Data */
							wp_reset_postdata();
						?>
				</section>
			</div>


			<div class="indent">
				<section id="services">
					<?php  
						$query = new WP_Query('pagename=portfolio');
							//The Loop
							if ($query ->have_posts()){
								while ($query->have_posts() ) {
									   $query->the_post();
									   echo '<h2 class="section-title">' . get_the_title() . '</h2>';
									   echo '<div clas ="page">';
									   the_content();
									   echo '</div>';
								}
							}
							/* Restore original Post Data */
					wp_reset_postdata();
					?>
				</section>
			</div>


			<div class="indent">
				<section id="contact">
					<div class="front-left">
						<?php  
							$query = new WP_Query('pagename=contact-us');
							//The Loop
							if ($query ->have_posts()){
								while ($query->have_posts() ) {
									   $query->the_post();
									   echo '<h2 class="section-title">' . get_the_title() . '</h2>';
									   echo '<div clas ="page">';
									   the_content();
									   echo '</div>';
								}
							}
							/* Restore original Post Data */
							wp_reset_postdata();
						?>
					</div>
					<div class="front-right">
						address
					</div>
				</section>
			</div>

			
		</main><!-- #main -->
		
	</div><!-- #primary -->

	<?php get_footer() ?>