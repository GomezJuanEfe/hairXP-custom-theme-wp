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

  <div class="products">
    <h2>Products</h2>
    <div class="product-container">
    <?php 
      $args = array(
        'post_type' => 'product', // it has to be the same with the slug we register
        'post_per_page' => -1, // -1 means all,
        'order' => 'ASC',
        'order_by' => 'date', // the atribute which is going to be ordered, default is 'date'. Could be 'title', etc.
      );

      $products = new WP_Query($args);
      if($products->have_posts()) {
        while($products->have_posts()) {
          $products->the_post(); ?>
            <div class="product-card">
              <h4>
                <?php the_title(); ?>
              </h4>
              <figure>
                <?php the_post_thumbnail('large'); ?>
              </figure>
              <?php the_content(); ?>
              <a href="<?php the_permalink(); ?>">Start visit</a>
            </div>
          <?php
        }
      }
    ?>
    </div>
  </div>

</main>

<?php get_footer(); ?>