<?php
/*
Template Name: Page Accueil
*/

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="sidebar">
		<?php get_sidebar(); ?>
	</div>

	<div class="homepage_content">
		<div class="title"><?php the_title(); ?></div>
		<?php the_content(); ?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
