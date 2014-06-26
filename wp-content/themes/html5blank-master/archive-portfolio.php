<?php get_header(); ?>

<div class="section">
  <h1>Portfolio</h1>
  <div class="innerWrapper">

    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <?php while(has_sub_field('images')): ?>

        <div class="container">
          <?php $image = get_sub_field('image'); ?>
          
          <div class="img-container" style="background-image: url('<?php echo $image['sizes']['custom-size']; ?>')"> 
          </div>
          
          <div class="text-container">
            <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
            <!-- <h3><?php //the_field('client_name') ?></h3> -->
            <a href="<?php the_permalink(); ?>"><p><?php the_field('short_description') ?></p></a>
          </div>
          
        </div> <!-- closes container div -->
      <?php endwhile; ?>
      

    <?php endwhile; // end of the loop. ?>
<!-- 
     <div class="container">
       <div class="img-container" style="background-image: url('http://placedoge.com/200/200')"> 
       </div>
       <div class="text-container">
         <h2>title</h2>
         <h3>client</h3>
         <p>whatup</p>
       </div>
     </div>  -->

     
   </div> <!-- /.innerWrapper -->
 </div> <!-- /.section -->

 <?php get_footer(); ?>