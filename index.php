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
            /*else if(is_page(19)){
                get_template_part('costr');
            }
            else if(is_page(21)){
                get_template_part('costr');
            }
            else if(is_page(23)){
                get_template_part('costr');
            }
            else if(is_page(25)){
                get_template_part('costr');
            }*/
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
