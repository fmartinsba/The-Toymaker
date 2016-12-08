<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
  <div class="projects-wrap">
    <?php the_title(); ?>
    <?php the_post_thumbnail('thumbnail', array('class' => 'project-photo')); ?>
    <div class="post-excerpt">
      <?php echo the_content(); ?>
    </div>
  </div>
<?php endwhile; ?>
<?php endif; ?>