<?php

/*
Template Name: Contact Page
*/

 get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<h1><?php the_title(); ?> me, let's work together</h1>

		
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article class="conact" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
				<?php the_content(); ?>


				<br class="clear">

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>
		

		</section>
		<!-- /section -->
	</main>
<div class="contact-sidebar">
<?php get_sidebar(); ?>
</div>	
<?php get_footer(); ?>
