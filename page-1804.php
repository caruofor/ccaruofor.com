<?php

get_header(); 

if(have_posts()):
	while (have_posts()):the_post();?>
	
	<article class="page">
		<div class="download-button">
			<h4><a href="#">Click here to download CV</a></h4>
		</div>
		<div class="download-button_1">
			<h4><a href="#">Click here to download Cover Letter</a></h4>
		</div>


	</article>

	<?php endwhile;

	else:
		echo '<p>No content found</p>';

	endif;

get_footer();


?>