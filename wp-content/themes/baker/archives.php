<?php
/*
Template Name: Archives
*/
get_header(); ?>

	<h2 class="page-title"><?php the_title(); ?></h1>

  <section class="main main-archives">
    <div class="wrapper bg-white">

  		<h3>Archives by Month</h3>
  		<ul>
  			<?php wp_get_archives('type=monthly'); ?>
  		</ul>

  		<h3>Archives by Subject</h3>
  		<ul>
  			 <?php wp_list_categories(); ?>
  		</ul>

		</div>
  </section>

<?php get_footer(); ?>
