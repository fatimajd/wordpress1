<?php
/**
 * Template Name: Custom home
 */
get_header(); ?>

<main role="main" id="maincontent">
  <?php do_action( 'advance_portfolio_above_banner' ); ?>
  
  <section id="banner">
    <?php $advance_portfolio_slider_pages = array();
    $mod = absint( get_theme_mod( 'advance_portfolio_page_settings' ));
    if ( 'page-none-selected' != $mod ) {
      $advance_portfolio_slider_pages[] = $mod;
    }
    if( !empty($advance_portfolio_slider_pages) ) :
      $args = array(
        'post_type' => 'page',
        'post__in' => $advance_portfolio_slider_pages,
        'orderby' => 'post__in'
      );
      $query = new WP_Query( $args );
      if ( $query->have_posts() ) :
        $count = 0;
        while ( $query->have_posts() ) : $query->the_post(); ?>           
        <div class="box-image">
          <a href="<?php echo esc_url( get_permalink() );?>"><?php the_post_thumbnail(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a>
        </div>
        <div class="box-content">
          <?php if( get_theme_mod('advance_portfolio_banner_title_Show_hide',true) != ''){ ?>
            <h1><?php the_title(); ?></h1>
          <?php } ?>
          <?php if( get_theme_mod('advance_portfolio_banner_content_Show_hide',true) != ''){ ?>
            <p><?php $excerpt = get_the_excerpt(); echo esc_html( advance_portfolio_string_limit_words( $excerpt, esc_attr(get_theme_mod('advance_portfolio_banner_excerpt_length','25')))); ?></p>
          <?php } ?>                  
          <div class="social-media">
            <?php if( get_theme_mod( 'advance_portfolio_facebook_url') != '') { ?>
              <a href="<?php echo esc_url( get_theme_mod( 'advance_portfolio_facebook_url','' ) ); ?>"><i class="fab fa-facebook-f"></i><span class="screen-reader-text"><?php esc_html_e( 'Facebook','advance-portfolio' );?></span></a>
            <?php } ?>
            <?php if( get_theme_mod( 'advance_portfolio_twitter_url') != '') { ?>
              <a href="<?php echo esc_url( get_theme_mod( 'advance_portfolio_twitter_url','' ) ); ?>"><i class="fab fa-twitter"></i><span class="screen-reader-text"><?php esc_html_e( 'Twitter','advance-portfolio' );?></span></a>
            <?php } ?>
            <?php if( get_theme_mod( 'advance_portfolio_linkedin_url') != '') { ?>
              <a href="<?php echo esc_url( get_theme_mod( 'advance_portfolio_linkedin_url','' ) ); ?>"><i class="fab fa-linkedin-in"></i><span class="screen-reader-text"><?php esc_html_e( 'Linkedin','advance-portfolio' );?></span></a>
            <?php } ?>                    
            <?php if( get_theme_mod( 'advance_portfolio_insta_url') != '') { ?>
              <a href="<?php echo esc_url( get_theme_mod( 'advance_portfolio_insta_url','' ) ); ?>"><i class="fab fa-instagram"></i><span class="screen-reader-text"><?php esc_html_e( 'Instagram','advance-portfolio' );?></span></a>
            <?php } ?>
            <?php if( get_theme_mod( 'advance_portfolio_youtube_url') != '') { ?>
              <a href="<?php echo esc_url( get_theme_mod( 'advance_portfolio_youtube_url','' ) ); ?>"><i class="fab fa-youtube"></i><span class="screen-reader-text"><?php esc_html_e( 'Youtube','advance-portfolio' );?></span></a>
            <?php } ?>                                         
            <?php if( get_theme_mod( 'advance_portfolio_behance_url') != '') { ?>
              <a href="<?php echo esc_url( get_theme_mod( 'advance_portfolio_behance_url','' ) ); ?>"><i class="fab fa-behance"></i><span class="screen-reader-text"><?php esc_html_e( 'Behance','advance-portfolio' );?></span></a>
            <?php } ?>
          </div>
          <div class="clearfix"></div>
        </div>                            
      <?php $count++; endwhile; ?>
      <?php else : ?>
        <div class="no-postfound"></div>
      <?php endif;
    endif; wp_reset_postdata();?>
  </section>

  <?php do_action( 'advance_portfolio_below_banner' ); ?>

  <section id="Portfolio-Section" class="py-5">
    <div class="container">
      <div class="portfolio-title">
        <?php if( get_theme_mod('advance_portfolio_title') != ''){ ?>     
          <h2 class="pb-4"><?php echo esc_html(get_theme_mod('advance_portfolio_title','')); ?></h2>
        <?php }?>
      </div>
      <?php if( get_theme_mod('advance_portfolio_awesome_setting') != ''){ ?>    
      <div class="row">
        <div class="col-lg-6 col-md-6">
          <div class="row">
            <div class="col-lg-6 col-md-6">
              <?php
                $args = array( 'name' => get_theme_mod('advance_portfolio_awesome_setting',''));
                $query = new WP_Query( $args );
                if ( $query->have_posts() ) :
                  while ( $query->have_posts() ) : $query->the_post(); ?>
                  <div class="box-image">
                    <a href="<?php echo esc_url( get_permalink() );?>"><?php the_post_thumbnail(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a>
                  </div>
                <?php endwhile; 
                wp_reset_postdata();?>
                <?php else : ?>
                  <div class="no-postfound"></div>
                <?php
              endif; ?>
            </div>
            <div class="col-lg-6 col-md-6">
              <?php
              $args = array( 'name' => get_theme_mod('advance_portfolio_awesome_setting1',''));
              $query = new WP_Query( $args );
              if ( $query->have_posts() ) :
                while ( $query->have_posts() ) : $query->the_post(); ?>
                  <div class="box-image">
                    <a href="<?php echo esc_url( get_permalink() );?>"><?php the_post_thumbnail(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a>
                  </div>                
                <?php endwhile; 
                wp_reset_postdata();?>
                <?php else : ?>
                  <div class="no-postfound"></div>
                <?php
              endif; ?>
            </div>
          </div>
          <?php
          $args = array( 'name' => get_theme_mod('advance_portfolio_awesome_setting2',''));
          $query = new WP_Query( $args );
            if ( $query->have_posts() ) :
              while ( $query->have_posts() ) : $query->the_post(); ?>
                <div class="image-box my-3">
                  <a href="<?php echo esc_url( get_permalink() );?>"><?php the_post_thumbnail(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a>
                </div>
              <?php endwhile; 
              wp_reset_postdata();?>
            <?php else : ?>
              <div class="no-postfound"></div>
            <?php
          endif; ?>
        </div>
        <div class="col-lg-6 col-md-6">
          <?php
          $args = array( 'name' => get_theme_mod('advance_portfolio_awesome_setting3',''));
          $query = new WP_Query( $args );
          if ( $query->have_posts() ) :
            while ( $query->have_posts() ) : $query->the_post(); ?>
              <div class="box-image">
                <a href="<?php echo esc_url( get_permalink() );?>"><?php the_post_thumbnail(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a>
              </div>
            <?php endwhile; 
            wp_reset_postdata();?>
            <?php else : ?>
              <div class="no-postfound"></div>
            <?php
          endif; ?>
        </div>
      </div>
      <?php }?>
    </div>
  </section>
 
  <?php do_action( 'advance_portfolio_below_portfolio_section' ); ?>

  <div class="container">
    <?php while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; // end of the loop. ?>
  </div>
</main>

<?php get_footer(); ?>