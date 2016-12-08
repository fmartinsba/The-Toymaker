<?php
    /*
        Template Name: Contact Page
    */
?>

<div class="cta-container">
  <?php
    $args = [
      'post_type' => 'page',
      'fields' => 'ids',
      'nopaging' => true,
      'meta_key' => '_wp_page_template',
      'meta_value' => 'page-contact.php'
    ];

    $pages = get_posts( $args );
    $post_id = $pages[0];
    $my_post = get_post($post_id);

    if (get_page_template_slug($post_id) != 'page-contact.php') {
      return false;
    }
    
    $phone = get_field('phone', $post_id);
    echo '<span>'.$my_post->post_title.'</span>';
  ?>
    <a href="tel:<?php echo $phone ?>" class="phone"><?php echo $phone ?></a>
</div>
