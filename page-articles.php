<?php
    /*
        Template Name: Articles Page
    */
?>

<?php

  $path = get_template_directory_uri();
  $args = [
    'post_type' => 'page',
    'fields' => 'ids',
    'nopaging' => true,
    'meta_key' => '_wp_page_template',
    'meta_value' => 'page-articles.php'
  ];

  $pages = get_posts( $args );
  $post_id = $pages[0];
  $my_post = get_post($post_id);

  if (get_page_template_slug($post_id) != 'page-articles.php') {
    return false;
  }

?>

<section id="articles">
<h3><?php echo $my_post->post_title; ?></h3>
<div class="articles-container">
  <div class="articles-return"></div>
<?php
  $args = array(
      'post_type' => 'articles'
  );
  $articles = new WP_Query( $args );
  // The Loop
  if ( $articles->have_posts() ) {
    while ( $articles->have_posts() ) {
      $articles->the_post();
      $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
      $url = $thumb['0']; ?>

      <a class="article-unit article-<?php echo $post->ID; ?>">
        <img src="<?php echo $url; ?>" alt="">
      </a>
      <?php
    }
  } else { ?>
    <h3>No articles found</h3>
  <?php
  }
?>
<?php wp_reset_postdata();?>
</div>
</section>
