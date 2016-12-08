<?php
    /*
        Template Name: Contact Form Page
    */
?>

<section id="contact">

  <?php

    $args = [
      'post_type' => 'page',
      'fields' => 'ids',
      'nopaging' => true,
      'meta_key' => '_wp_page_template',
      'meta_value' => 'page-contactform.php'
    ];

    $pages = get_posts( $args );
    $post_id = $pages[0];
    $my_post = get_post($post_id);

    if (get_page_template_slug($post_id) != 'page-contactform.php') {
      return false;
    }


    echo '<h3>'.$my_post->post_title.'</h3>';
    echo '<div class="contact-container">';
      echo '<div class="map"><iframe id="myframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3316.8532022230174!2d151.27141505031955!3d-33.76445908059044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12aa5dd19f0ceb%3A0xe9f4aa67a6dcc05!2sThe+Toy+Maker!5e0!3m2!1sen!2sau!4v1464601139848" width="100%" height="313" frameborder="0" style="border:0" allowfullscreen=""></iframe></div>';
      echo '<div class="contact-form">';

        $content = $my_post->post_content;
        $content = apply_filters('the_content', $content);
        $content = str_replace(']]>', ']]&gt;', $content);
        echo $content;

      echo '</div>';
    echo '</div>';

  ?>

</section>
