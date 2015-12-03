<?php get_header(); ?>

  <section class="main">
    <div class="wrapper">

      <section id="page-content" class="page-content">
        <h1 class="page-title">Baker News</h1>
      	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php
            $image_id = get_post_thumbnail_id();
            $image_url = wp_get_attachment_image_src($image_id, 'news-thumb', true);
            if ( has_post_thumbnail() ) {
    		      echo '<article class="post" style="background-image: url(' . $image_url[0] . ')">';
            } else {
              echo '<article class="post">';
            }
          ?>
	        <p class="post-date"><?php the_date('M j, Y'); ?></p>
	        <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <div class="post-excerpt">
            <?php the_excerpt(); ?>
          </div>
  	      </article>
  	     <?php endwhile; endif; ?>

        <?php post_navigation(); ?>

    	</section>

      <?php get_sidebar(); ?>

    </div>
  </section>

<?php get_footer(); ?>