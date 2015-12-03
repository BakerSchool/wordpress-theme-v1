<?php get_header(); ?>

  <section class="main">
    <div class="wrapper">

      <section id="page-content" class="page-content">
			<?php if (have_posts()) : ?>

				<h1 class="page-title">Search Results</h1>

				<?php while (have_posts()) : the_post(); ?>

					<article class="post">
            <p class="post-date"><?php the_date('M j, Y'); ?></p>
            <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div class="post-excerpt">
              <?php the_excerpt(); ?>
            </div>
    				<div class="post-tags">
      				<?php the_tags( __('<span class="label">Tags:</span> ','html5reset'), ', ', ''); ?>
    				</div>
					</article>

				<?php endwhile; ?>

				<?php post_navigation(); ?>

			<?php else : ?>

				<h2><?php _e('Nothing Found','html5reset'); ?></h2>

			<?php endif; ?>
			</section>

			<?php get_sidebar(); ?>

		</div>
	</section>

<?php get_footer(); ?>
