<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  	<section class="hero hero-gallery">
  	  <div class="wrapper">
  			<h1><?php the_field('gallery_hero_title'); ?></h1>
  	  </div>
  	</section>

  	<section class="gallery-section-1">
  	  <h2><?php the_field('product_title_1'); ?></h2>
  	  <div class="gallery-row">
  			<div class="col-product-image">
  			  <?php if (is_single(78)) { ?>
  			    <img src="<?php echo get_template_directory_uri(); ?>/dist/images/gallery-hubs-product-01.jpg" alt="Hubs and Spindles">
  			  <?php } elseif (is_single(79)) { ?>
  			    <img src="<?php echo get_template_directory_uri(); ?>/src/images/gallery-machining-product-01.jpg" alt="Machining">
  			  <?php } elseif (is_single(80)) { ?>
  			    <img src="<?php echo get_template_directory_uri(); ?>/src/images/gallery-jacks-product-01.jpg" alt="Jacks">
  			  <?php } ?>
  			</div>
  			<svg class="icon-arrow-gallery"><use xlink:href="#icon-arrow-gallery" /></svg>
  			<div class="col-gallery-images">
  			  <?php if (is_single(78)) { ?>
  			    <ul class="gallery-slider">
  			      <li><img src="<?php echo get_template_directory_uri(); ?>/src/images/gallery-hubs-app-01.jpg" alt="Hubs and Spindles"></li>
  			      <li><img src="<?php echo get_template_directory_uri(); ?>/src/images/gallery-hubs-app-02.jpg" alt="Hubs and Spindles"></li>
  			      <li><img src="<?php echo get_template_directory_uri(); ?>/src/images/gallery-hubs-app-03.jpg" alt="Hubs and Spindles"></li>
  			    </ul>
  			  <?php } elseif (is_single(79)) { ?>
  			    <img src="<?php echo get_template_directory_uri(); ?>/src/images/gallery-machining-app-01.jpg" alt="Machining">
  			  <?php } elseif (is_single(80)) { ?>
  			    <img src="<?php echo get_template_directory_uri(); ?>/src/images/gallery-jacks-app-01.jpg" alt="Jacks">
  			  <?php } ?>
  			</div>
  	  </div>
  	</section>

  	<section class="gallery-section-2">
  	  <h2><?php the_field('product_title_2'); ?></h2>
  	  <div class="gallery-row">
  			<div class="col-product-image">
  			  <?php if (is_single(78)) { ?>
  			    <img src="<?php echo get_template_directory_uri(); ?>/dist/images/gallery-hubs-product-02.jpg" alt="Hubs and Spindles">
  			  <?php } elseif (is_single(79)) { ?>
  			    <img src="<?php echo get_template_directory_uri(); ?>/src/images/gallery-machining-product-02.jpg" alt="Machining">
  			  <?php } elseif (is_single(80)) { ?>
  			    <img src="<?php echo get_template_directory_uri(); ?>/src/images/gallery-jacks-product-02.jpg" alt="Jacks">
  			  <?php } ?>
  			</div>
  			<svg class="icon-arrow-gallery"><use xlink:href="#icon-arrow-gallery" /></svg>
  			<div class="col-gallery-images">
  			  <?php if (is_single(78)) { ?>
  			    <img src="<?php echo get_template_directory_uri(); ?>/src/images/gallery-hubs-app-04.jpg" alt="Hubs and Spindles">
  			  <?php } elseif (is_single(79)) { ?>
  			    <img src="<?php echo get_template_directory_uri(); ?>/src/images/gallery-machining-app-02.jpg" alt="Machining">
  			  <?php } elseif (is_single(80)) { ?>
  			    <img src="<?php echo get_template_directory_uri(); ?>/src/images/gallery-jacks-app-02.jpg" alt="Jacks">
  			  <?php } ?>
  			</div>
  	  </div>
  	</section>

    <?php if (is_single(78) || is_single(79)) { ?>
  	<section class="gallery-section-3">
  	  <h2><?php the_field('product_title_3'); ?></h2>
  	  <div class="gallery-row">
  			<div class="col-product-image">
  			  <?php if (is_single(78)) { ?>
  			    <img src="<?php echo get_template_directory_uri(); ?>/dist/images/gallery-hubs-product-03.jpg" alt="Hubs and Spindles">
  			  <?php } elseif (is_single(79)) { ?>
  			    <img src="<?php echo get_template_directory_uri(); ?>/src/images/gallery-machining-product-03.jpg" alt="Machining">
  			  <?php } ?>
  			</div>
  			<svg class="icon-arrow-gallery"><use xlink:href="#icon-arrow-gallery" /></svg>
  			<div class="col-gallery-images">
  			  <?php if (is_single(78)) { ?>
  			    <img src="<?php echo get_template_directory_uri(); ?>/src/images/gallery-hubs-app-05.jpg" alt="Hubs and Spindles">
  			  <?php } elseif (is_single(79)) { ?>
  			    <img src="<?php echo get_template_directory_uri(); ?>/src/images/gallery-hubs-app-05.jpg" alt="Machining">
  			  <?php } ?>
  			</div>
  	  </div>
  	</section>
  	<?php } ?>

  	<nav class="single-product-nav">
  	  <ul>
  	    <li>View Other Photo Galleries:</li>
  	    <?php if (!is_single(78)) { ?>
  	    <li class="item-hubs-spindles"><a href="/gallery/hubs-and-spindles">Hubs and Spindles<span class="caret">></span></a></li>
  	    <?php } if (!is_single(79)) { ?>
  	    <li class="item-machining"><a href="/gallery/machining">Machining<span class="caret">></span></a></li>
  	    <?php } if (!is_single(80)) { ?>
  	    <li class="item-jacks"><a href="/gallery/jacks">Jacks<span class="caret">></span></a></li>
  	    <?php } ?>
  	  </ul>
  	</nav>

  	<section class="bottom-section">
  	  <div class="wrapper">
			  <?php the_field('prod_bottom_section', 7); ?>
  	  </div>
  	</section>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>