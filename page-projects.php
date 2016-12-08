<?php
    /*
        Template Name: Projects Page
    */
?>

<?php

  $path = get_template_directory_uri();
  $args = [
    'post_type' => 'page',
    'fields' => 'ids',
    'nopaging' => true,
    'meta_key' => '_wp_page_template',
    'meta_value' => 'page-projects.php'
  ];

  $pages = get_posts( $args );
  $post_id = $pages[0];
  $my_post = get_post($post_id);

  if (get_page_template_slug($post_id) != 'page-projects.php') {
    return false;
  }

?>

<section id="projects" class="section-work">
<h3><?php echo $my_post->post_title; ?></h3>
<div class="projects-belt">
  <div class="thumb-wrap">
    <div class="thumb-container">
<?php
  $args = array(
      'post_type' => 'projects'
  );
  $projects = new WP_Query( $args );
  // The Loop
  if ( $projects->have_posts() ) {
    while ( $projects->have_posts() ) {
      $projects->the_post();
      $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' );
      $url = $thumb['0']; ?>

      <a class="thumb-unit thumb-<?php echo $post->ID; ?>" rel="<?php echo $post->ID; ?>" href="<?php echo get_permalink( $post->ID ); ?>" style="background: url(<?php echo $url; ?>); background-size: cover;">
        <div class="thumb-overlay">
          <strong><?php the_title(); ?></strong>
        </div>
      </a>
      <?php
    }
  } else { ?>
    <h3>No projects found</h3>
  <?php
  }
?>
<?php wp_reset_postdata();?>
</div>
</div>


<div class="projects-wrap">
  <div class="projects-container">
    <div class="projects-return"></div>
    <div class="project" id="project-content"></div>
  </div>
</div>
</div>
</section>
