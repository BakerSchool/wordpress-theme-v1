<?php get_header(); ?>

  <section class="main">
    <div class="wrapper">

      <section id="page-content" class="page-content">
      <?php if (have_posts()) : ?>

    		<?php $post = $posts[0]; ?>

      	<?php /* category archive */ if (is_category()) { ?>
      		<h1 class="page-title"><?php single_cat_title(); ?></h1>
      	<?php /* tag archive */ } elseif( is_tag() ) { ?>
      		<h1 class="page-title"><?php single_tag_title(); ?></h1>
      	<?php /* daily archive */ } elseif (is_day()) { ?>
      		<h1 class="page-title"><?php the_time('F jS, Y'); ?></h1>
      	<?php /* monthly archive */ } elseif (is_month()) { ?>
      		<h1 class="page-title"><?php the_time('F, Y'); ?></h1>
      	<?php /* yearly archive */ } elseif (is_year()) { ?>
      		<h1 class="page-title"><?php the_time('Y'); ?></h1>
      	<?php /* author archive */ } elseif (is_author()) { ?>
      		<h1 class="page-title">Author Archive</h1>
      	<?php /* paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
      		<h1 class="page-title"><?php _e('Blog Archives','html5reset'); ?></h1>
      	<?php } ?>

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

      </section>

      <?php else : ?>

        <section id="page-content" class="page-content">
          <h1 class="page-title">Whoops!</h1>
          <h3><?php _e('No posts, yet.','html5reset'); ?></h3>
          <p><a href="/about-us/news/" class="btn">Back to News</a></p>
        </section>

      <?php endif; ?>

      <?php get_sidebar(); ?>

    </section>
  </div>

<?php get_footer(); ?>
