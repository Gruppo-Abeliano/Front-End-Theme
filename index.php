<?php

get_header();
?>

	<section>
		<main>
            
		<?php
		if ( have_posts() ) {
			if(is_front_page()){
				get_template_part('home');
            }
			else if(is_single()){
				// Load posts loop.
				while ( have_posts() ) {
					the_post();
					//get_template_part('content/content', "single");
				}
			}
			
			
			
		}
		?>

		</main><!-- .site-main -->
	</section><!-- .content-area -->

<?php
get_footer();
