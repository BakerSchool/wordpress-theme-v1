<?php get_header(); ?>

  <?php if (have_posts()) : ?>
  
		<?php $post = $posts[0]; ?>
  
  	<?php /* If this is a category archive */ if (is_category()) { ?>
  		<h1 class="page-title"><?php single_cat_title(); ?></h1>
  
  	<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
  		<h1 class="page-title"><?php _e('Posts Tagged','html5reset'); ?> &#8216;<?php single_tag_title(); ?>&#8217;</h1>
  
  	<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
  		<h1 class="page-title"><?php _e('Archive for','html5reset'); ?> <?php the_time('F jS, Y'); ?></h1>
  
  	<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
  		<h1 class="page-title"><?php _e('Archive for','html5reset'); ?> <?php the_time('F, Y'); ?></h1>
  
  	<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
  		<h1 class="page-title"><?php _e('Archive for','html5reset'); ?> <?php the_time('Y'); ?></h1>
  
  	<?php /* If this is an author archive */ } elseif (is_author()) { ?>
  		<h1 class="page-title"><?php _e('Author Archive','html5reset'); ?></h1>
  
  	<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
  		<h1 class="page-title"><?php _e('Blog Archives','html5reset'); ?></h1>
  	
  	<?php } ?>
			
	  <section class="main">
      <div class="wrapper bg-white">
      
      <div class="filters">
  			<?php wp_nav_menu( array('menu'=>'13') ); ?>
      </div>

			<?php while (have_posts()) : the_post(); ?>
			
    		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
   
         <div class="post-date"><?php the_date(); ?></div>
   
    			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
    
    			<div class="body">
    				<?php the_content(); ?>
    			</div>
  
  				<div class="post-tags">
    				<?php the_tags( __('<span class="label">Tags:</span> ','html5reset'), ', ', ''); ?>
  				</div>
  				
    		</article>

			<?php endwhile; ?>

			<?php post_navigation(); ?>

    	</div>
  	</section>
			
  <?php else : ?>
      
    <h1 class="page-title">Whoops!</h1>
 
	  <section class="main main-no-posts">
      <div class="wrapper bg-white">
        <div class="filters">
    			<?php wp_nav_menu( array('menu'=>'13') ); ?>
        </div>
        <div class="body">
          <h3><?php _e('No posts, yet.','html5reset'); ?></h3>
          <p><a href="/news/" class="btn">Back to News</a></p>
        </div>
    	</div>
  	</section>

  <?php endif; ?>
	
<?php get_footer(); ?>
