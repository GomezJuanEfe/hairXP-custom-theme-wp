<?php get_header(); ?>

<main>
  <div class="page-container">

  <?php 
  if(have_posts()) {
    while(have_posts()) {
      the_post();
      echo '<h1 class="post-title">';
        the_title();
      echo '</h1>';
      echo '<div class="post-card">';
        echo '<div class="post-thumbnail">';
          the_post_thumbnail('large');
        echo '</div>';
        echo '<div class="content">';
          the_content();
        echo '</div>';
      echo '</div>';
    }
  }
  ?>

  </div>
</main>

<?php get_footer(); ?>