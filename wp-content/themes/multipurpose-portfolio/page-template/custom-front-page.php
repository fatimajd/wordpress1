<?php
/**
 * Template Name: Custom home page
 */
get_header(); ?>

<main id="maincontent" role="main">
  <?php do_action('multipurpose_portfolio_above_banner_section'); ?>
  
  <?php if(get_theme_mod('multipurpose_portfolio_show_banner') != ''){ ?>
    <section id="banner"> 
      <?php $multipurpose_portfolio_content_pages = array();
        $mod = intval( get_theme_mod( 'multipurpose_portfolio_banner_page' ));
          if ( 'page-none-selected' != $mod ) {
            $multipurpose_portfolio_content_pages[] = $mod;
          }
        if( !empty($multipurpose_portfolio_content_pages) ) :
        $args = array(
          'post_type' => 'page',
          'post__in' => $multipurpose_portfolio_content_pages,
          'orderby' => 'post__in'
        );
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) :
          $i = 1;
      ?>
      <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
       <?php the_post_thumbnail(); ?>
        <div class="banner-box">
          <div class="inner_carousel">
            <?php if(get_theme_mod('multipurpose_portfolio_banner_title',true) != ''){ ?>
              <h1><?php the_title(); ?></h1> 
            <?php }?>
            <?php if(get_theme_mod('multipurpose_portfolio_banner_content',true) != ''){ ?>
              <p><?php $excerpt = get_the_excerpt(); echo esc_html( multipurpose_portfolio_string_limit_words( $excerpt, esc_attr(get_theme_mod('multipurpose_portfolio_banner_excerpt','20'))) ); ?></p>
            <?php }?>
            <?php if(get_theme_mod('multipurpose_portfolio_banner_button',true) != '' && get_theme_mod('multipurpose_portfolio_banner_button_label','ABOUT ME') != ''){ ?>
              <div class="read-more mt-4">
                <a href="<?php the_permalink(); ?>"><?php echo esc_html( get_theme_mod('multipurpose_portfolio_banner_button_label',__('ABOUT ME','multipurpose-portfolio')) ); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('multipurpose_portfolio_banner_button_label',__('ABOUT ME','multipurpose-portfolio')) ); ?></span></a>
              </div>   
            <?php }?>                 
          </div>
        </div>
        <div class="social-media">
          <?php if( get_theme_mod( 'multipurpose_portfolio_facebook_url') != '') { ?>
            <a href="<?php echo esc_url( get_theme_mod( 'multipurpose_portfolio_facebook_url','' ) ); ?>"><i class="fab fa-facebook-f my-2"></i><span class="screen-reader-text"><?php esc_html_e( 'Facebook', 'multipurpose-portfolio' ); ?></span></a>
          <?php } ?>
          <?php if( get_theme_mod( 'multipurpose_portfolio_twitter_url') != '') { ?>
            <a href="<?php echo esc_url( get_theme_mod( 'multipurpose_portfolio_twitter_url','' ) ); ?>"><i class="fab fa-twitter my-2"></i><span class="screen-reader-text"><?php esc_html_e( 'Twitter', 'multipurpose-portfolio' ); ?></span></a>
          <?php } ?>
          <?php if( get_theme_mod( 'multipurpose_portfolio_insta_url') != '') { ?>
            <a href="<?php echo esc_url( get_theme_mod( 'multipurpose_portfolio_insta_url','' ) ); ?>"><i class="fab fa-instagram my-2"></i><span class="screen-reader-text"><?php esc_html_e( 'Instagram', 'multipurpose-portfolio' ); ?></span></a>
          <?php } ?>
          <?php if( get_theme_mod( 'multipurpose_portfolio_pinterest_url') != '') { ?>
            <a href="<?php echo esc_url( get_theme_mod( 'multipurpose_portfolio_pinterest_url','' ) ); ?>"><i class="fab fa-pinterest-p my-2"></i><span class="screen-reader-text"><?php esc_html_e( 'Pinterest', 'multipurpose-portfolio' ); ?></span></a>
          <?php } ?> 
          <?php if( get_theme_mod( 'multipurpose_portfolio_youtube_url') != '') { ?>
            <a href="<?php echo esc_url( get_theme_mod( 'multipurpose_portfolio_youtube_url','' ) ); ?>"><i class="fab fa-youtube my-2"></i><span class="screen-reader-text"><?php esc_html_e( 'Youtube', 'multipurpose-portfolio' ); ?></span></a>
          <?php } ?>
        </div>
      <?php  endwhile; ?>
      <?php else : ?>
        <div class="no-postfound"></div>
        <?php endif;
        endif;?>
      <div class="clearfix"></div>
    </section> 
  <?php }?>

  <?php do_action('multipurpose_portfolio_below_banner_section'); ?>

  <?php if( get_theme_mod('multipurpose_portfolio_services_title') != '' || get_theme_mod('multipurpose_portfolio_services_category') != ''){ ?>
    <section id="services" class="py-5">
      <div class="container">
        <?php if( get_theme_mod('multipurpose_portfolio_services_title') != ''){ ?>
          <h2 class="mb-2"><?php echo esc_html(get_theme_mod('multipurpose_portfolio_services_title','')); ?></h2>
        <?php }?>
        <div class="row">
          <?php 
            $multipurpose_portfolio_catData=  get_theme_mod('multipurpose_portfolio_services_category');
            if($multipurpose_portfolio_catData){
            $page_query = new WP_Query(array( 'category_name' => esc_html( $multipurpose_portfolio_catData ,'multipurpose-portfolio')));?>
              <?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>
                <div class="col-lg-4 col-md-4">
                  <div class="service-content text-center mb-4">
                    <?php the_post_thumbnail(); ?>
                    <h3><a href="<?php echo esc_url( get_permalink() );?>"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h3>
                    <p><?php $excerpt = get_the_excerpt(); echo esc_html( multipurpose_portfolio_string_limit_words( $excerpt,10) ); ?></p>
                  </div>
                </div>
                <?php endwhile;
              wp_reset_postdata();
            } 
          ?>
        </div>
      </div>
    </section>
  <?php }?>

  <?php do_action('multipurpose_portfolio_after_service_section'); ?>

  <div class="container">
    <?php while ( have_posts() ) : the_post(); ?>
      <div class="entry-content"><?php the_content(); ?></div>
    <?php endwhile; // end of the loop. ?>
  </div>
</main>

<?php get_footer(); ?>