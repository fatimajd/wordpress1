<?php
/**
 * Multipurpose Portfolio functions and definitions
 * @package Multipurpose Portfolio
 */

/* Breadcrumb Begin */
function multipurpose_portfolio_the_breadcrumb() {
	if (!is_home()) {
		echo '<a href="';
			echo esc_url( home_url() );
		echo '">';
			bloginfo('name');
		echo "</a> ";
		if (is_category() || is_single()) {
			the_category(',');
			if (is_single()) {
				echo "<span> ";
					the_title();
				echo "</span> ";
			}
		} 	elseif (is_page()) {
			the_title();
		}
	}
}

/* Theme Setup */
if ( ! function_exists( 'multipurpose_portfolio_setup' ) ) :

function multipurpose_portfolio_setup() {

	$GLOBALS['content_width'] = apply_filters( 'multipurpose_portfolio_content_width', 640 );
	load_theme_textdomain( 'multipurpose-portfolio', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );
	add_image_size('multipurpose-portfolio-homepage-thumb',240,145,true);
	
    register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'multipurpose-portfolio' ),
	) );

	add_theme_support( 'custom-background', array(
		'default-color' => 'f1f1f1'
	) );
	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array('image','video','gallery','audio',) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css',multipurpose_portfolio_font_url() ) );

}
endif;
add_action( 'after_setup_theme', 'multipurpose_portfolio_setup' );

/* Theme Widgets Setup */
function multipurpose_portfolio_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'multipurpose-portfolio' ),
		'description'   => __( 'Appears on blog page sidebar', 'multipurpose-portfolio' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s p-2 mb-4">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title mb-2 py-2 px-1 text-center">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'multipurpose-portfolio' ),
		'description'   => __( 'Appears on page sidebar', 'multipurpose-portfolio' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s p-2 mb-4">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title mb-2 py-2 px-1 text-center">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Third Column Sidebar', 'multipurpose-portfolio' ),
		'description'   => __( 'Appears on page sidebar', 'multipurpose-portfolio' ),
		'id'            => 'sidebar-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s p-2 mb-4">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title mb-2 py-2 px-1 text-center">',
		'after_title'   => '</h3>',
	) );

	$multipurpose_portfolio_footer_columns = get_theme_mod('multipurpose_portfolio_footer_widget', '4');
	for ($i=1; $i<=$multipurpose_portfolio_footer_columns; $i++) {
		register_sidebar( array(
			'name'          => __( 'Footer ', 'multipurpose-portfolio' ) . $i,
			'id'            => 'footer-' . $i,
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s py-3">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title pb-2 mb-2">',
			'after_title'   => '</h3>',
		) );
	}

}
add_action( 'widgets_init', 'multipurpose_portfolio_widgets_init' );

/* Theme Font URL */
function multipurpose_portfolio_font_url(){
	$font_url = '';
	$font_family = array();
	$font_family[] = 'Staatliches';
	$font_family[] = 'Kalam:300,400,700';
	$font_family[] = 'PT Sans:300,400,600,700,800,900';
	$font_family[] = 'Roboto:400,700';
	$font_family[] = 'Roboto Condensed:400,700';
	$font_family[] = 'Open Sans';
	$font_family[] = 'Overpass';
	$font_family[] = 'Montserrat:300,400,600,700,800,900';
	$font_family[] = 'Playball:300,400,600,700,800,900';
	$font_family[] = 'Alegreya:300,400,600,700,800,900';
	$font_family[] = 'Julius Sans One';
	$font_family[] = 'Arsenal';
	$font_family[] = 'Slabo';
	$font_family[] = 'Lato';
	$font_family[] = 'Overpass Mono';
	$font_family[] = 'Source Sans Pro';
	$font_family[] = 'Raleway';
	$font_family[] = 'Merriweather';
	$font_family[] = 'Droid Sans';
	$font_family[] = 'Rubik';
	$font_family[] = 'Lora';
	$font_family[] = 'Ubuntu';
	$font_family[] = 'Cabin';
	$font_family[] = 'Arimo';
	$font_family[] = 'Playfair Display';
	$font_family[] = 'Quicksand';
	$font_family[] = 'Padauk';
	$font_family[] = 'Muli';
	$font_family[] = 'Inconsolata';
	$font_family[] = 'Bitter';
	$font_family[] = 'Pacifico';
	$font_family[] = 'Indie Flower';
	$font_family[] = 'VT323';
	$font_family[] = 'Dosis';
	$font_family[] = 'Frank Ruhl Libre';
	$font_family[] = 'Fjalla One';
	$font_family[] = 'Oxygen';
	$font_family[] = 'Arvo';
	$font_family[] = 'Noto Serif';
	$font_family[] = 'Lobster';
	$font_family[] = 'Crimson Text';
	$font_family[] = 'Yanone Kaffeesatz';
	$font_family[] = 'Anton';
	$font_family[] = 'Libre Baskerville';
	$font_family[] = 'Bree Serif';
	$font_family[] = 'Gloria Hallelujah';
	$font_family[] = 'Josefin Sans';
	$font_family[] = 'Abril Fatface';
	$font_family[] = 'Varela Round';
	$font_family[] = 'Vampiro One';
	$font_family[] = 'Shadows Into Light';
	$font_family[] = 'Cuprum';
	$font_family[] = 'Rokkitt';
	$font_family[] = 'Vollkorn';
	$font_family[] = 'Francois One';
	$font_family[] = 'Orbitron';
	$font_family[] = 'Patua One';
	$font_family[] = 'Acme';
	$font_family[] = 'Satisfy';
	$font_family[] = 'Josefin Slab';
	$font_family[] = 'Quattrocento Sans';
	$font_family[] = 'Architects Daughter';
	$font_family[] = 'Russo One';
	$font_family[] = 'Monda';
	$font_family[] = 'Righteous';
	$font_family[] = 'Lobster Two';
	$font_family[] = 'Hammersmith One';
	$font_family[] = 'Courgette';
	$font_family[] = 'Permanent Marker';
	$font_family[] = 'Cherry Swash';
	$font_family[] = 'Cormorant Garamond';
	$font_family[] = 'Poiret One';
	$font_family[] = 'BenchNine';
	$font_family[] = 'Economica';
	$font_family[] = 'Handlee';
	$font_family[] = 'Cardo';
	$font_family[] = 'Alfa Slab One';
	$font_family[] = 'Averia Serif Libre';
	$font_family[] = 'Cookie';
	$font_family[] = 'Chewy';
	$font_family[] = 'Great Vibes';
	$font_family[] = 'Coming Soon';
	$font_family[] = 'Philosopher';
	$font_family[] = 'Days One';
	$font_family[] = 'Kanit';
	$font_family[] = 'Shrikhand';
	$font_family[] = 'Tangerine';
	$font_family[] = 'IM Fell English SC';
	$font_family[] = 'Boogaloo';
	$font_family[] = 'Bangers';
	$font_family[] = 'Fredoka One';
	$font_family[] = 'Bad Script';
	$font_family[] = 'Volkhov';
	$font_family[] = 'Shadows Into Light Two';
	$font_family[] = 'Marck Script';
	$font_family[] = 'Sacramento';
	$font_family[] = 'Unica One';
	$font_family[] = 'Noto Sans:400,400i,700,700i';

	$query_args = array(
		'family'	=> rawurlencode(implode('|',$font_family)),
	);
	$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	return $font_url;
}

/*radio button sanitization*/
 function multipurpose_portfolio_sanitize_choices( $input, $setting ) {
    global $wp_customize; 
    $control = $wp_customize->get_control( $setting->id ); 
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

/* Excerpt Limit Begin */
function multipurpose_portfolio_string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}

function multipurpose_portfolio_sanitize_dropdown_pages( $page_id, $setting ) {
  	// Ensure $input is an absolute integer.
  	$page_id = absint( $page_id );
  	// If $page_id is an ID of a published page, return it; otherwise, return the default.
  	return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'multipurpose_portfolio_loop_columns');
	if (!function_exists('multipurpose_portfolio_loop_columns')) {
	function multipurpose_portfolio_loop_columns() {
		return get_theme_mod( 'multipurpose_portfolio_products_per_row', '3' ); // 3 products per row
	}
}

//Change number of products that are displayed per page (shop page)
add_filter( 'loop_shop_per_page', 'multipurpose_portfolio_products_per_page' );
function multipurpose_portfolio_products_per_page( $cols ) {
  	return  get_theme_mod( 'multipurpose_portfolio_products_per_page',9);
}

/* Theme enqueue scripts */
function multipurpose_portfolio_scripts() {
	wp_enqueue_style( 'multipurpose-portfolio-font',multipurpose_portfolio_font_url(), array() );
	wp_enqueue_style( 'bootstrap-css', esc_url(get_template_directory_uri()).'/css/bootstrap.css' );
	wp_enqueue_style( 'multipurpose-portfolio-basic-style', get_stylesheet_uri() );
	wp_style_add_data( 'multipurpose-portfolio-style', 'rtl', 'replace' );
	wp_enqueue_style( 'font-awesome-css', esc_url(get_template_directory_uri()).'/css/fontawesome-all.css' );
	wp_enqueue_style( 'multipurpose-portfolio-block-style', get_theme_file_uri('/css/blocks-style.css') );
	// Paragraph
    $multipurpose_portfolio_paragraph_color = get_theme_mod('multipurpose_portfolio_paragraph_color', '');
    $multipurpose_portfolio_paragraph_font_family = get_theme_mod('multipurpose_portfolio_paragraph_font_family', '');
    $multipurpose_portfolio_paragraph_font_size = get_theme_mod('multipurpose_portfolio_paragraph_font_size', '');
	// "a" tag
	$multipurpose_portfolio_atag_color = get_theme_mod('multipurpose_portfolio_atag_color', '');
    $multipurpose_portfolio_atag_font_family = get_theme_mod('multipurpose_portfolio_atag_font_family', '');
	// "li" tag
	$multipurpose_portfolio_li_color = get_theme_mod('multipurpose_portfolio_li_color', '');
    $multipurpose_portfolio_li_font_family = get_theme_mod('multipurpose_portfolio_li_font_family', '');
	// H1
	$multipurpose_portfolio_h1_color = get_theme_mod('multipurpose_portfolio_h1_color', '');
    $multipurpose_portfolio_h1_font_family = get_theme_mod('multipurpose_portfolio_h1_font_family', '');
    $multipurpose_portfolio_h1_font_size = get_theme_mod('multipurpose_portfolio_h1_font_size', '');
	// H2
	$multipurpose_portfolio_h2_color = get_theme_mod('multipurpose_portfolio_h2_color', '');
    $multipurpose_portfolio_h2_font_family = get_theme_mod('multipurpose_portfolio_h2_font_family', '');
    $multipurpose_portfolio_h2_font_size = get_theme_mod('multipurpose_portfolio_h2_font_size', '');
	// H3
	$multipurpose_portfolio_h3_color = get_theme_mod('multipurpose_portfolio_h3_color', '');
    $multipurpose_portfolio_h3_font_family = get_theme_mod('multipurpose_portfolio_h3_font_family', '');
    $multipurpose_portfolio_h3_font_size = get_theme_mod('multipurpose_portfolio_h3_font_size', '');
	// H4
	$multipurpose_portfolio_h4_color = get_theme_mod('multipurpose_portfolio_h4_color', '');
    $multipurpose_portfolio_h4_font_family = get_theme_mod('multipurpose_portfolio_h4_font_family', '');
    $multipurpose_portfolio_h4_font_size = get_theme_mod('multipurpose_portfolio_h4_font_size', '');
	// H5
	$multipurpose_portfolio_h5_color = get_theme_mod('multipurpose_portfolio_h5_color', '');
    $multipurpose_portfolio_h5_font_family = get_theme_mod('multipurpose_portfolio_h5_font_family', '');
    $multipurpose_portfolio_h5_font_size = get_theme_mod('multipurpose_portfolio_h5_font_size', '');
	// H6
	$multipurpose_portfolio_h6_color = get_theme_mod('multipurpose_portfolio_h6_color', '');
    $multipurpose_portfolio_h6_font_family = get_theme_mod('multipurpose_portfolio_h6_font_family', '');
    $multipurpose_portfolio_h6_font_size = get_theme_mod('multipurpose_portfolio_h6_font_size', '');

	$multipurpose_portfolio_custom_css ='
		p,span{
		    color:'.esc_html($multipurpose_portfolio_paragraph_color).'!important;
		    font-family: '.esc_html($multipurpose_portfolio_paragraph_font_family).';
		    font-size: '.esc_html($multipurpose_portfolio_paragraph_font_size).';
		}
		a{
		    color:'.esc_html($multipurpose_portfolio_atag_color).'!important;
		    font-family: '.esc_html($multipurpose_portfolio_atag_font_family).';
		}
		li{
		    color:'.esc_html($multipurpose_portfolio_li_color).'!important;
		    font-family: '.esc_html($multipurpose_portfolio_li_font_family).';
		}
		h1{
		    color:'.esc_html($multipurpose_portfolio_h1_color).'!important;
		    font-family: '.esc_html($multipurpose_portfolio_h1_font_family).'!important;
		    font-size: '.esc_html($multipurpose_portfolio_h1_font_size).'!important;
		}
		h2{
		    color:'.esc_html($multipurpose_portfolio_h2_color).'!important;
		    font-family: '.esc_html($multipurpose_portfolio_h2_font_family).'!important;
		    font-size: '.esc_html($multipurpose_portfolio_h2_font_size).'!important;
		}
		h3{
		    color:'.esc_html($multipurpose_portfolio_h3_color).'!important;
		    font-family: '.esc_html($multipurpose_portfolio_h3_font_family).'!important;
		    font-size: '.esc_html($multipurpose_portfolio_h3_font_size).'!important;
		}
		h4{
		    color:'.esc_html($multipurpose_portfolio_h4_color).'!important;
		    font-family: '.esc_html($multipurpose_portfolio_h4_font_family).'!important;
		    font-size: '.esc_html($multipurpose_portfolio_h4_font_size).'!important;
		}
		h5{
		    color:'.esc_html($multipurpose_portfolio_h5_color).'!important;
		    font-family: '.esc_html($multipurpose_portfolio_h5_font_family).'!important;
		    font-size: '.esc_html($multipurpose_portfolio_h5_font_size).'!important;
		}
		h6{
		    color:'.esc_html($multipurpose_portfolio_h6_color).'!important;
		    font-family: '.esc_html($multipurpose_portfolio_h6_font_family).'!important;
		    font-size: '.esc_html($multipurpose_portfolio_h6_font_size).'!important;
		}
	';

	wp_add_inline_style( 'multipurpose-portfolio-basic-style',$multipurpose_portfolio_custom_css );
	
	wp_enqueue_script( 'multipurpose-portfolio-customscripts', esc_url(get_template_directory_uri()) . '/js/custom.js', array('jquery') );
	wp_enqueue_script( 'bootstrap-js', esc_url(get_template_directory_uri()) . '/js/bootstrap.js', array('jquery') );

	wp_enqueue_script( 'jquery-superfish', esc_url(get_template_directory_uri()) . '/js/jquery.superfish.js', array('jquery') ,'',true);
	require get_parent_theme_file_path( '/inc/color-option.php' );
	wp_add_inline_style( 'multipurpose-portfolio-basic-style',$multipurpose_portfolio_custom_css );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'multipurpose_portfolio_scripts' );

/* Theme Credit link */
define('MULTIPURPOSE_PORTFOLIO_SITE_URL',__('https://www.themesglance.com/themes/free-wordpress-portfolio-themes/','multipurpose-portfolio'));

function multipurpose_portfolio_credit_link() {
    echo "<a href=".esc_url(MULTIPURPOSE_PORTFOLIO_SITE_URL)." target='_blank'>".esc_html__('Portfolio WordPress Theme','multipurpose-portfolio')."</a>";
}

/*----- Related Posts Function ------*/
if ( ! function_exists( 'multipurpose_portfolio_related_posts_function' ) ) {
	function multipurpose_portfolio_related_posts_function() {
		wp_reset_postdata();
		global $post;

		// Define shared post arguments
		$args = array(
			'no_found_rows'          => true,
			'update_post_meta_cache' => false,
			'update_post_term_cache' => false,
			'ignore_sticky_posts'    => 1,
			'orderby'                => 'rand',
			'post__not_in'           => array( $post->ID ),
			'posts_per_page'    => absint( get_theme_mod( 'multipurpose_portfolio_related_post_count', '3' ) ),
		);
		// Related by categories
		if ( get_theme_mod( 'multipurpose_portfolio_post_shown_by', 'categories' ) == 'categories' ) {

			$cats = get_post_meta( $post->ID, 'related-posts', true );

			if ( ! $cats ) {
				$cats                 = wp_get_post_categories( $post->ID, array( 'fields' => 'ids' ) );
				$args['category__in'] = $cats;
			} else {
				$args['cat'] = $cats;
			}
		}
		// Related by tags
		if ( get_theme_mod( 'multipurpose_portfolio_post_shown_by', 'categories' ) == 'tags' ) {

			$tags = get_post_meta( $post->ID, 'related-posts', true );

			if ( ! $tags ) {
				$tags            = wp_get_post_tags( $post->ID, array( 'fields' => 'ids' ) );
				$args['tag__in'] = $tags;
			} else {
				$args['tag_slug__in'] = explode( ',', $tags );
			}
			if ( ! $tags ) {
				$break = true;
			}
		}

		$query = ! isset( $break ) ? new WP_Query( $args ) : new WP_Query();

		return $query;
	}
}

function multipurpose_portfolio_excerpt_enabled(){
	if(get_theme_mod('multipurpose_portfolio_blog_post_content') == 'Excerpt Content' ) {
		return true;
	}
	return false;
}
function multipurpose_portfolio_button_enabled(){
	if(get_theme_mod('multipurpose_portfolio_blog_button_text') != '' ) {
		return true;
	}
	return false;
}

function multipurpose_portfolio_sanitize_phone_number( $phone ) {
	return preg_replace( '/[^\d+]/', '', $phone );
}

function multipurpose_portfolio_sanitize_checkbox( $input ) {
	// Boolean check 
	return ( ( isset( $input ) && true == $input ) ? true : false );
}

function multipurpose_portfolio_sanitize_float( $input ) {
    return filter_var($input, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
}

/* Custom template tags for this theme. */
require get_template_directory() . '/inc/template-tags.php';

/* Customizer additions. */
require get_template_directory() . '/inc/customizer.php';

/* Implement the Custom Header feature. */
require get_template_directory() . '/inc/custom-header.php';

/* About Us Widget */
require get_template_directory() . '/inc/about-widget.php';

/* Contact Us Widget */
require get_template_directory() . '/inc/contact-widget.php';