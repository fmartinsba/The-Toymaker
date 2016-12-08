<?php
    /*
        Template Name: Services Page
    */
?>

<?php

  $path = get_template_directory_uri();
  $args = [
    'post_type' => 'page',
    'fields' => 'ids',
    'nopaging' => true,
    'meta_key' => '_wp_page_template',
    'meta_value' => 'page-services.php'
  ];

  $pages = get_posts( $args );
  $post_id = $pages[0];
  $my_post = get_post($post_id);

  if (get_page_template_slug($post_id) != 'page-services.php') {
    return false;
  }

?>

<section id="services">
<h3><?php echo $my_post->post_title; ?></h3>
<div class="services-container">
<?php
  $args = array(
      'post_type' => 'services'
  );
  $services = new WP_Query( $args );
  // The Loop
  if ( $services->have_posts() ) {
    while ( $services->have_posts() ) {
      $services->the_post(); ?>

      <div class="service-box">
        <div class="icon"><img class="icon icons8-Car" src="<?php echo get_the_content(); ?>" width="50" height="50"></div>
        <h4><?php the_title(); ?></h4>
      </div>
      <?php
    }
  } else { ?>
    <h3>No services found</h3>
  <?php
  }
?>
<?php wp_reset_postdata();?>
</div>
</section>
