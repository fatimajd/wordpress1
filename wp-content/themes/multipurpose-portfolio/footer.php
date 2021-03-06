<?php
/**
 * The template for displaying the footer.
 * @package Multipurpose Portfolio
 */
?>
<?php if( get_theme_mod( 'multipurpose_portfolio_hide_scroll',true) != '') { ?>
  <?php $multipurpose_portfolio_scroll_align = get_theme_mod( 'multipurpose_portfolio_back_to_top','Right');
  if($multipurpose_portfolio_scroll_align == 'Left'){ ?>
    <a href="#content" class="back-to-top scroll-left text-center"><?php esc_html_e('Top', 'multipurpose-portfolio'); ?><span class="screen-reader-text"><?php esc_html_e('Back to Top', 'multipurpose-portfolio'); ?></span></a>
  <?php }else if($multipurpose_portfolio_scroll_align == 'Center'){ ?>
    <a href="#content" class="back-to-top scroll-center text-center"><?php esc_html_e('Top', 'multipurpose-portfolio'); ?><span class="screen-reader-text"><?php esc_html_e('Back to Top', 'multipurpose-portfolio'); ?></span></a>
  <?php }else{ ?>
    <a href="#content" class="back-to-top scroll-right text-center"><?php esc_html_e('Top', 'multipurpose-portfolio'); ?><span class="screen-reader-text"><?php esc_html_e('Back to Top', 'multipurpose-portfolio'); ?></span></a>
  <?php }?>
<?php }?>
<footer role="contentinfo" id="footer">
  <?php //Set widget areas classes based on user choice
    $multipurpose_portfolio_footer_columns = get_theme_mod('multipurpose_portfolio_footer_widget', '4');
    if ($multipurpose_portfolio_footer_columns == '3') {
      $cols = 'col-lg-4 col-md-4';
    } elseif ($multipurpose_portfolio_footer_columns == '4') {
      $cols = 'col-lg-3 col-md-3';
    } elseif ($multipurpose_portfolio_footer_columns == '2') {
      $cols = 'col-lg-6 col-md-6';
    } else {
      $cols = 'col-lg-12 col-md-12';
    }
  ?>
  <?php
  if ( is_active_sidebar( 'footer-1' ) ||
    is_active_sidebar( 'footer-2' ) ||
    is_active_sidebar( 'footer-3' ) ||
    is_active_sidebar( 'footer-4' ) ) :
  ?>
  <div class="footerinner py-4">
    <div class="container">
      <div class="row">
        <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
          <div class="sidebar-column <?php echo esc_attr( $cols ); ?>">
            <?php dynamic_sidebar( 'footer-1'); ?>
          </div>
        <?php endif; ?> 
        <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
          <div class="sidebar-column <?php echo esc_attr( $cols ); ?>">
            <?php dynamic_sidebar( 'footer-2'); ?>
          </div>
        <?php endif; ?> 
        <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
          <div class="sidebar-column <?php echo esc_attr( $cols ); ?>">
            <?php dynamic_sidebar( 'footer-3'); ?>
          </div>
        <?php endif; ?> 
        <?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
          <div class="sidebar-column <?php echo esc_attr( $cols ); ?>">
            <?php dynamic_sidebar( 'footer-4'); ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <?php endif; ?>
  <div class="inner">
    <div class="container">
      <div class="copyright">
        <p class="m-0"><?php multipurpose_portfolio_credit_link(); ?> <?php echo esc_html(get_theme_mod('multipurpose_portfolio_text',__('By Themesglance','multipurpose-portfolio'))); ?></p>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>