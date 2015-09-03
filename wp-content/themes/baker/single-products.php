<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  	<section class="hero hero-single-product">
  	  <div class="wrapper">
  			<h1><?php the_field('product_hero_title'); ?></h1>
  	  </div>
  	</section>

  	<section class="single-product-section-1">
  	  <div class="table-row">
  			<div class="col-1-2 col-content">
  			  <?php the_field('product_content_section_1'); ?>
  			</div>
  			<div class="col-1-2 col-image">
  			  <?php if (is_single(73)) { ?>
  			    <img src="<?php echo get_template_directory_uri(); ?>/dist/images/product-hubs-01.jpg" alt="Hubs and Spindles">
  			  <?php } elseif (is_single(75)) { ?>
    			  Maching
  			  <?php } elseif (is_single(76)) { ?>
    			  Jacks
  			  <?php } ?>
  			</div>
  	  </div>
  	</section>

  	<section class="single-product-section-2">
  	  <div class="table-row">
  			<div class="col-1-2 col-image">
  			</div>
  			<div class="col-1-2 col-content">
  			  <?php the_field('product_content_section_2'); ?>
  			</div>
  	  </div>
  	</section>

  	<section class="single-product-section-3">
  	  <div class="table-row">
  			<div class="col-1-2 col-content">
  			  <?php the_field('product_content_section_3'); ?>
  			</div>
  			<div class="col-1-2 col-image">
  			</div>
  	  </div>
  	</section>

  	<section class="single-product-section-4">
  	  <div class="table-row">
  			<div class="col-1-2 col-image">
  			</div>
  			<div class="col-1-2 col-content">
  			  <?php the_field('product_content_section_4'); ?>
  			</div>
  	  </div>
  	</section>

  	<nav class="single-product-nav">
  	  <ul>
  	    <li>Learn More About:</li>
  	    <?php if (!is_single(73)) { ?>
  	    <li class="item-hubs-spindles"><a href="/products/hubs-and-spindles">Hubs and Spindles<span class="caret">></span></a></li>
  	    <?php } if (!is_single(75)) { ?>
  	    <li class="item-machining"><a href="/products/machining">Machining<span class="caret">></span></a></li>
  	    <?php } if (!is_single(76)) { ?>
  	    <li class="item-jacks"><a href="/products/jacks">Jacks<span class="caret">></span></a></li>
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