<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body>

<header>
  <div class="header-container">
    <div class="logo-container">
      <img src="<?php echo get_template_directory_uri() ?>/assets/img/Logo_hairXP.svg" alt="logo">
    </div>
    <div class="menu-container">
      <nav>
        <?php wp_nav_menu(
          array(
            'theme_location' => 'top_menu',
            'menu_class' => 'main-menu',
            'container_class' => 'container-menu'
          )
        ) ?>
      </nav>
    </div>
  </div>
</header>