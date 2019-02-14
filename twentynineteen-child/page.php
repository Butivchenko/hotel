<?php

get_header();

$query = new WP_Query( [
	'post_type'      => 'hb_room',
	'posts_per_page' => 5,
] );
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php

			/* Start the Loop */
			while ( $query->have_posts() ) :
				$query->the_post();



				get_template_part( 'template-parts/content/content', 'page' );

			endwhile; // End of the loop.
			?>

            <article <?php post_class('art-last-content'); ?>>
                <div class="last-content" >
                    <span>You didn't find anything that suits your needs?</span>
                    <a class='last-content-a' href="#">See all of our rooms -></a>
                </div><!-- .entry-content -->
                
            </article>

		</main><!-- #main -->
	</section><!-- #primary -->


<!--    <script>-->
<!--        jQuery(".title_content").hover(-->
<!--            function () {-->
<!--                jQuery(this).css('display', 'none');-->
<!--                jQuery(this).siblings().css('display', 'unset');-->
<!--            }-->
<!--        );-->
<!--    </script>-->

<?php
get_footer();
