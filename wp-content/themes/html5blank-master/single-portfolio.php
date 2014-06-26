<?php get_header(); ?>

<div class="section">
  <div class="innerWrapper">
    <div class="full-portfolio">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      	<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>

		<div class="short-description">
			<p><?php the_field('short_description') ?></p>
        </div>
		
		<div class="portfolio-image">
        	<?php while(has_sub_field('images')): ?>
				
        		<p><?php the_sub_field('caption'); ?></p>
        		<?php $image = get_sub_field('image'); ?>
        		<img class="single-portfolio-image" src="<?php echo $image['sizes']['large']; ?>" alt="portfolioimage">
        	<?php endwhile; ?>
		</div>

      <?php endwhile; // end of the loop. ?>
    </div>
  </div> <!-- /.innerWrapper -->
</div> <!-- /.section -->

<?php get_footer(); ?>