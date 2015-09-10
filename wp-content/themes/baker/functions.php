<?php

	// Theme Setup (based on twentythirteen: http://make.wordpress.org/core/tag/twentythirteen/)
	function baker_setup() {
		load_theme_textdomain( 'stadtler', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'structured-post-formats', array( 'link', 'video' ) );
		add_theme_support( 'post-formats', array( 'aside', 'audio', 'chat', 'gallery', 'image', 'quote', 'status' ) );
		register_nav_menu( 'primary', __( 'Navigation Menu', 'stadtler' ) );
		add_theme_support( 'post-thumbnails' );
	}
	add_action( 'after_setup_theme', 'baker_setup' );

	// Scripts & Styles (based on twentythirteen: http://make.wordpress.org/core/tag/twentythirteen/)
	function baker_scripts_styles() {
		global $wp_styles;
	}
	add_action( 'wp_enqueue_scripts', 'baker_scripts_styles' );

  // Register Sidebar
  function baker_widgets_init() {
    register_sidebar( array(
      'name'          => __( 'Sidebar Left', 'baker' ),
      'id'            => 'sidebar-left',
      'description'   => __( 'Add widgets here to appear in your sidebar.', 'baker' ),
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
      'before_widget' => '<div class="widget %2$s">',
      'after_widget'  => '</div>'
    ));
  	register_sidebar( array(
  		'name'          => __( 'Footer', 'baker' ),
  		'id'            => 'footer',
  		'description'   => __( 'Add widgets here to appear in your sidebar.', 'baker' ),
  		'before_title'  => '<h3 class="widget-title">',
  		'after_title'   => '</h3>',
      'before_widget' => '<div class="widget %2$s">',
      'after_widget'  => '</div>'
  	));
  }
  add_action( 'widgets_init', 'baker_widgets_init' );

	// WP Title (based on twentythirteen: http://make.wordpress.org/core/tag/twentythirteen/)
	function baker_wp_title( $title, $sep ) {
		global $paged, $page;

		if ( is_feed() )
			return $title;

//		 Add the site name.
		$title .= get_bloginfo( 'name' );

//		 Add the site description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			$title = "$title $sep $site_description";

//		 Add a page number if necessary.
		if ( $paged >= 2 || $page >= 2 )
			$title = "$title $sep " . sprintf( __( 'Page %s', 'baker' ), max( $paged, $page ) );

		return $title;
	}
	add_filter( 'wp_title', 'baker_wp_title', 10, 2 );


	// Load jQuery
	if ( !function_exists( 'core_mods' ) ) {
		function core_mods() {
			if ( !is_admin() ) {
				wp_deregister_script( 'jquery' );
				wp_register_script( 'jquery', ( "https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" ), false);
				wp_enqueue_script( 'jquery' );
			}
		}
		add_action( 'wp_enqueue_scripts', 'core_mods' );
	}

	// Clean up the <head>, if you so desire.
	function removeHeadJunk() {
	  remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'feed_links', 2);
    remove_action('wp_head', 'feed_links_extra', 3);
    remove_action('wp_head', 'index_rel_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'start_post_rel_link', 10, 0);
    remove_action('wp_head', 'parent_post_rel_link', 10, 0);
    remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
    remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0 );
	}
	add_action('init', 'removeHeadJunk');

	// Clean Up Menu Classes
	function nav_class_filter( $var ) {
    return is_array($var) ? array_intersect($var, array('current-menu-item', 'current-menu-parent', 'current-menu-ancestor')) : '';
  }
  add_filter('nav_menu_css_class', 'nav_class_filter', 100, 1);

  // Remove Contact Plugin CSS/JS
  //add_filter( 'wpcf7_load_js', '__return_false' );
  add_filter( 'wpcf7_load_css', '__return_false' );

	// Custom Menu
	register_nav_menu( 'primary', __( 'Navigation Menu', 'baker' ) );

	// Navigation
	function post_navigation() {
	  $prev_page = get_previous_posts_link('Previous Page');
	  $next_page = get_next_posts_link('Next Page');
	  if($prev_page || $next_page) {
  		echo '<div class="posts-nav">';
  	  if ($prev_page) {
    	  echo $prev_page;
  	  } else {
    	  echo '<span class="nav-item">Previous Page</span>';
  	  }
  	  if ($next_page) {
    	  echo $next_page;
  	  } else {
    	  echo '<span class="nav-item">Next Page</span>';
  	  }
  		echo '</div>';
		}
	}

  // Single Navigation
	function single_post_navigation($input) {
	  $prev_post = get_previous_post();
	  $next_post = get_next_post();
		echo '<div class="posts-nav">';
	  if ($prev_post) {
  	  echo '<a href="'.get_permalink( $prev_post->ID ).'" class="nav-prev">Previous '. $input .'</a>';
	  } else {
  	  echo '<span class="nav-item nav-prev">Previous '. $input .'</span>';
	  }
	  if ($next_post) {
  	  echo '<a href="'.get_permalink( $next_post->ID ).'" class="nav-next">Next '. $input .'</a>';
	  } else {
  	  echo '<span class="nav-item nav-next">Next '. $input .'</span>';
	  }
		echo '</div>';
	}

	// Posted On
	function posted_on() {
		printf( __( '<span class="sep">Posted </span><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s" pubdate>%4$s</time></a> by <span class="byline author vcard">%5$s</span>', '' ),
			esc_url( get_permalink() ),
			esc_attr( get_the_time() ),
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_author() )
		);
	}

	// Attachment Figures
	function html5_insert_image($html, $id, $caption, $title, $align, $url, $size) {
	  $src  = wp_get_attachment_image_src( $id, $size, false );
    $html5 = "<figure id='post-$id media-$id' class='align-$align'>";
    $html5 .= "<img src='$src[0]' alt='$title' />";
    if ($caption) {
      $html5 .= "<figcaption>$caption</figcaption>";
    }
    $html5 .= "</figure>";
    return $html5;
  }
  add_filter( 'image_send_to_editor', 'html5_insert_image', 10, 9 );

	// Image Sizes
	add_image_size( 'hero-image', 990, 466, true );
	add_image_size( 'blog-image', 792 );

  add_filter( 'image_size_names_choose', 'my_custom_sizes' );
  function my_custom_sizes( $sizes ) {
    return array_merge( $sizes, array(
      'blog-image' => __('Blog Image'),
    ));
  }

  function new_excerpt_more( $more ) {
    return '...';
  }
  add_filter('excerpt_more', 'new_excerpt_more');

?>
