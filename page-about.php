<?php
    /*
        Template Name: About Page
    */
?>
<section id="about" class="section-about">
<?php

  $args = [
    'post_type' => 'page',
    'fields' => 'ids',
    'nopaging' => true,
    'meta_key' => '_wp_page_template',
    'meta_value' => 'page-about.php'
  ];

  $pages = get_posts( $args );
  $post_id = $pages[0];
  $my_post = get_post($post_id);

  if (get_page_template_slug($post_id) != 'page-about.php') {
    return false;
  }

  $about = get_field('short_description', $post_id);

  $path = get_template_directory_uri();

  echo '<h3>'.$my_post->post_title.'</h3>';

  echo '<div class="about-container">';

  echo '<div class="about"><p>'.$about.'</p></div>';

  echo '<div class="simon-container"><img src="'.wp_get_attachment_url(get_post_thumbnail_id($post_id)).'" alt="">';

  echo '<p>'.$my_post->post_content.'</p>';

?>

<?php wp_reset_postdata();?>

</section>
