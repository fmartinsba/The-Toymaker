<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Car Restoration - The Toy Maker</title>
    <?php wp_head(); ?>
  </head>

  <body>

    <?php $logo = get_template_directory_uri() . '/images/the-toy-maker-logo.png'; ?>

    <header id="home" style="background-image: url(<?php echo $logo; ?>), url(<?php header_image(); ?>)">
      <div class="overlay">

      <?php
  			wp_nav_menu(array(
  				'theme_location'=>'primary',
  				'container'=>false,
  				'menu_class'=>'nav-menu'
  				)
  			);
  		?>

      <h1><span> <?php bloginfo( 'name' ); ?> </span></h1>
      <?php $description = get_bloginfo( 'description', 'display' );
        if ( $description || is_customize_preview() ) : ?>
          <p class="kicker"><?php echo $description; ?></p>
      <?php endif; ?>

      </div>
    </header>
