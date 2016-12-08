<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="margin-top:400px;">

	<header class="entry-header">
		<?php the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
		<!-- <h1><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h1> -->
		<small>Post format: <?php echo get_post_format(); ?></small>
		<small>Posted on: <?php the_time('F j, Y'); ?>, in <?php the_category(); ?></small>
	</header>

	<div class="row">

		<?php if( !has_post_thumbnail() ): ?>

			<div class="col-xs-12 col-sm-4">
				<div class="thumbnail"><?php the_post_thumbnail('medium'); ?></div>
			</div>

			<div class="col-xs-12 col-sm-8">
				<?php the_content(); ?>
			</div>

		<?php else: ?>

			<div class="col-xs-12">
				<?php the_content(); ?>
			</div>

		<?php endif ?>

	</div>

</article>
