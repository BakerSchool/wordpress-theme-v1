<?php get_header(); ?>

  <section class="main">
    <div class="wrapper">

      <section id="page-content" class="page-content">
    	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

          <p class="post-date"><?php the_date('M j, Y'); ?></p>
    			<h1 class="post-title"><?php the_title(); ?></h1>
    			<div class="post-content">
            <div class="post-share">
              <a href="http://www.facebook.com/sharer/sharer.php?u=http://bakerdemschool.org/<?php echo get_permalink(); ?>" target="_blank">
                <svg class="share-icon" viewBox="0 0 40 40">
                  <use xlink:href="#icon-circle-facebook"></use>
                </svg>
              </a>
              <a href="http://twitter.com/share?text=Baker Demonstration School - <?php the_title(); ?>" target="_blank">
                <svg class="share-icon" viewBox="0 0 40 40">
                  <use xlink:href="#icon-circle-twitter"></use>
                </svg>
              </a>
              <a href="mailto:?subject=<?php the_title(); ?>&body=http://bakerdemschool.org/<? echo get_permalink(); ?>" target="_blank">
                <svg class="share-icon" viewBox="0 0 40 40">
                  <use xlink:href="#icon-circle-mail"></use>
                </svg>
              </a>
            </div>
      			<div class="body">
      				<?php the_content(); ?>
      			</div>
    			</div>

    		</article>
    	<?php endwhile; endif; ?>

      <?php single_post_navigation($input = 'Post'); ?>

      </section>

    <?php get_sidebar(); ?>

    </div>
  </section>


<?php get_footer(); ?>