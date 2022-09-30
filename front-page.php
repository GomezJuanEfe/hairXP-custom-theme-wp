<?php get_header(); ?>

<main class="front-page-container">

<?php if(have_posts()) {
  while(have_posts()) {
    the_post(); ?>
      <!-- <h1><?php the_title(); ?></h1> Include this line in case I want to add the title -->
      <?php the_content(); ?>
    <?php 
  }
}?>

</main>

<?php get_footer(); ?>