<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <?php if (has_post_thumbnail()) { ?>
    <section class="hero">
      <div class="wrapper">
        <?php the_post_thumbnail('hero-image'); ?>
      </div>
    </section>
    <?php } ?>

  	<section class="main">
  	  <div class="wrapper">

  	    <section id="page-content" class="page-content">
          <?php if (!is_front_page()): ?>
      		<h1 class="page-title"><?php the_title(); ?></h1>
          <?php endif; ?>
          <div class="body">
        		<?php the_content(); ?>
          </div>
  	    </section>

        <?php get_sidebar(); ?>

  	  </div>
  	</section>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>