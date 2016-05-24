<?php
/*
Template Name: Page Accueil
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="sidebar">
				<?php get_sidebar(); ?>
			</div>
			<div class="homepage_content">

				<?php while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php	endwhile; ?>

			</div><!-- .entry-content -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
