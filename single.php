<?php

    $post = get_post($_POST['id']);

?>

    <?php while (have_posts()) : the_post(); ?>

                <h4><?php the_title();?></h4>
                <?php the_content();?>

    <?php endwhile;?>
