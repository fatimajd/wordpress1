<?php
	
	$multipurpose_portfolio_first_theme_color = get_theme_mod('multipurpose_portfolio_first_theme_color');

	$multipurpose_portfolio_custom_css = '';

	if($multipurpose_portfolio_first_theme_color != false){
		$multipurpose_portfolio_custom_css .=' a.button, #footer input[type="submit"], input[type="submit"], .nav-menu ul ul a, .logo, .read-more a, .post-info, h1.page-title, h1.search-title, .blogbtn a, .footerinner .tagcloud a:hover, .woocommerce span.onsale, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, nav.woocommerce-MyAccount-navigation ul li, #comments input[type="submit"].submit, #sidebar h3, #sidebar input[type="submit"], #sidebar .tagcloud a:hover, .pagination a:hover, .pagination .current, span.meta-nav, #comments a.comment-reply-link, .tags a:hover, .woocommerce-product-search button, .back-to-top, .woocommerce .widget_price_filter .ui-slider-horizontal .ui-slider-range, .woocommerce .widget_price_filter .ui-slider .ui-slider-handle, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current, .navigation .nav-previous a, .navigation .nav-next a{';
			$multipurpose_portfolio_custom_css .='background-color: '.esc_attr($multipurpose_portfolio_first_theme_color).';';
		$multipurpose_portfolio_custom_css .='}';
	}
	if($multipurpose_portfolio_first_theme_color != false){
		$multipurpose_portfolio_custom_css .='.woocommerce .widget_shopping_cart .buttons a:hover, .woocommerce.widget_shopping_cart .buttons a:hover, .woocommerce .widget_price_filter .price_slider_amount .button:hover{';
			$multipurpose_portfolio_custom_css .='background-color: '.esc_attr($multipurpose_portfolio_first_theme_color).' !important;';
		$multipurpose_portfolio_custom_css .='}';
	}
	if($multipurpose_portfolio_first_theme_color != false){
		$multipurpose_portfolio_custom_css .=' a, a:hover, .social-icon i:hover, input.search-field,  #footer h3, .woocommerce-message::before,  span.post-title, .tags a i, .woocommerce nav.woocommerce-pagination ul li a, .woocommerce nav.woocommerce-pagination ul li span{';
			$multipurpose_portfolio_custom_css .='color: '.esc_attr($multipurpose_portfolio_first_theme_color).';';
		$multipurpose_portfolio_custom_css .='}';
	}
	if($multipurpose_portfolio_first_theme_color != false){
		$multipurpose_portfolio_custom_css .=' 
		@media screen and (max-width:1000px){
			.nav-menu ul li a:hover{';
				$multipurpose_portfolio_custom_css .='border-left-color: '.esc_attr($multipurpose_portfolio_first_theme_color).';';
			$multipurpose_portfolio_custom_css .='} 
			.nav-menu ul li a:hover{';
				$multipurpose_portfolio_custom_css .='color: '.esc_attr($multipurpose_portfolio_first_theme_color).';';
			$multipurpose_portfolio_custom_css .='} 
		}';
	}
	if($multipurpose_portfolio_first_theme_color != false){
		$multipurpose_portfolio_custom_css .=' .nav-menu ul ul a:hover{';
			$multipurpose_portfolio_custom_css .='border-left-color: '.esc_attr($multipurpose_portfolio_first_theme_color).';';
		$multipurpose_portfolio_custom_css .='}';
	}
	if($multipurpose_portfolio_first_theme_color != false){
		$multipurpose_portfolio_custom_css .=' .back-to-top::before{';
			$multipurpose_portfolio_custom_css .='border-bottom-color: '.esc_attr($multipurpose_portfolio_first_theme_color).';';
		$multipurpose_portfolio_custom_css .='}';
	}
	if($multipurpose_portfolio_first_theme_color != false){
		$multipurpose_portfolio_custom_css .='  input.search-field, .blog-sec, .inner, .woocommerce-message, .woocommerce ul.products li.product, .woocommerce-page ul.products li.product, #sidebar .widget, .pagination a:hover, .pagination .current, .tags a:hover, .nav-menu ul ul, .woocommerce nav.woocommerce-pagination ul li a, .woocommerce nav.woocommerce-pagination ul li span{';
			$multipurpose_portfolio_custom_css .='border-color: '.esc_attr($multipurpose_portfolio_first_theme_color).';';
		$multipurpose_portfolio_custom_css .='}';
	}


	// Layout Options
	$multipurpose_portfolio_theme_layout = get_theme_mod( 'multipurpose_portfolio_theme_layout_options','Default Theme');
    if($multipurpose_portfolio_theme_layout == 'Default Theme'){
		$multipurpose_portfolio_custom_css .='body{';
			$multipurpose_portfolio_custom_css .='max-width: 100%;';
		$multipurpose_portfolio_custom_css .='}';
	}else if($multipurpose_portfolio_theme_layout == 'Container Theme'){
		$multipurpose_portfolio_custom_css .='body{';
			$multipurpose_portfolio_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$multipurpose_portfolio_custom_css .='}';
		$multipurpose_portfolio_custom_css .='.page-template-custom-front-page #header{';
			$multipurpose_portfolio_custom_css .='right:0;';
		$multipurpose_portfolio_custom_css .='}';
	}else if($multipurpose_portfolio_theme_layout == 'Box Container Theme'){
		$multipurpose_portfolio_custom_css .='body{';
			$multipurpose_portfolio_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$multipurpose_portfolio_custom_css .='}';
		$multipurpose_portfolio_custom_css .='.page-template-custom-front-page #header{';
			$multipurpose_portfolio_custom_css .='right:0;';
		$multipurpose_portfolio_custom_css .='}';
	}


	/*--------------------------- Slider Opacity -------------------*/

	$multipurpose_portfolio_slider_layout = get_theme_mod( 'multipurpose_portfolio_banner_opacity','0.4');
	if($multipurpose_portfolio_slider_layout == '0'){
		$multipurpose_portfolio_custom_css .='#banner img{';
			$multipurpose_portfolio_custom_css .='opacity:0';
		$multipurpose_portfolio_custom_css .='}';
	}else if($multipurpose_portfolio_slider_layout == '0.1'){
		$multipurpose_portfolio_custom_css .='#banner img{';
			$multipurpose_portfolio_custom_css .='opacity:0.1';
		$multipurpose_portfolio_custom_css .='}';
	}else if($multipurpose_portfolio_slider_layout == '0.2'){
		$multipurpose_portfolio_custom_css .='#banner img{';
			$multipurpose_portfolio_custom_css .='opacity:0.2';
		$multipurpose_portfolio_custom_css .='}';
	}else if($multipurpose_portfolio_slider_layout == '0.3'){
		$multipurpose_portfolio_custom_css .='#banner img{';
			$multipurpose_portfolio_custom_css .='opacity:0.3';
		$multipurpose_portfolio_custom_css .='}';
	}else if($multipurpose_portfolio_slider_layout == '0.4'){
		$multipurpose_portfolio_custom_css .='#banner img{';
			$multipurpose_portfolio_custom_css .='opacity:0.4';
		$multipurpose_portfolio_custom_css .='}';
	}else if($multipurpose_portfolio_slider_layout == '0.5'){
		$multipurpose_portfolio_custom_css .='#banner img{';
			$multipurpose_portfolio_custom_css .='opacity:0.5';
		$multipurpose_portfolio_custom_css .='}';
	}else if($multipurpose_portfolio_slider_layout == '0.6'){
		$multipurpose_portfolio_custom_css .='#banner img{';
			$multipurpose_portfolio_custom_css .='opacity:0.6';
		$multipurpose_portfolio_custom_css .='}';
	}else if($multipurpose_portfolio_slider_layout == '0.7'){
		$multipurpose_portfolio_custom_css .='#banner img{';
			$multipurpose_portfolio_custom_css .='opacity:0.7';
		$multipurpose_portfolio_custom_css .='}';
	}else if($multipurpose_portfolio_slider_layout == '0.8'){
		$multipurpose_portfolio_custom_css .='#banner img{';
			$multipurpose_portfolio_custom_css .='opacity:0.8';
		$multipurpose_portfolio_custom_css .='}';
	}else if($multipurpose_portfolio_slider_layout == '0.9'){
		$multipurpose_portfolio_custom_css .='#banner img{';
			$multipurpose_portfolio_custom_css .='opacity:0.9';
		$multipurpose_portfolio_custom_css .='}';
	}

	/*---------------------------Slider Content Layout -------------------*/

	$multipurpose_portfolio_slider_layout = get_theme_mod( 'multipurpose_portfolio_banner_alignment_option','Left Align');
    if($multipurpose_portfolio_slider_layout == 'Left Align'){
		$multipurpose_portfolio_custom_css .='#banner .banner-box{';
			$multipurpose_portfolio_custom_css .='text-align:left;';
		$multipurpose_portfolio_custom_css .='}';
		$multipurpose_portfolio_custom_css .='#banner .banner-box{';
		$multipurpose_portfolio_custom_css .='left:9%; right: auto;';
		$multipurpose_portfolio_custom_css .='}';
		$multipurpose_portfolio_custom_css .='#banner .social-media{';
		$multipurpose_portfolio_custom_css .='left:auto; right: 10%;';
		$multipurpose_portfolio_custom_css .='}';
		$multipurpose_portfolio_custom_css .='@media screen and (max-width: 720px) and (min-width: 320px){';
			$multipurpose_portfolio_custom_css .='#banner .banner-box{';
				$multipurpose_portfolio_custom_css .='width:auto; ';
			$multipurpose_portfolio_custom_css .='}';
			$multipurpose_portfolio_custom_css .='#banner .social-media{';
				$multipurpose_portfolio_custom_css .='left: 10%; right:auto; text-align:left; width:auto;';
			$multipurpose_portfolio_custom_css .='}';
		$multipurpose_portfolio_custom_css .='}';
	}else if($multipurpose_portfolio_slider_layout == 'Center Align'){
		$multipurpose_portfolio_custom_css .='#banner .banner-box{';
			$multipurpose_portfolio_custom_css .='text-align:center; width:auto; left:20%; right:20%;';
		$multipurpose_portfolio_custom_css .='}';
		$multipurpose_portfolio_custom_css .='#banner .social-media{';
		$multipurpose_portfolio_custom_css .='right: 0%; float: none; width: 100%; top: 90%; text-align: center;';
		$multipurpose_portfolio_custom_css .='}';
		$multipurpose_portfolio_custom_css .='#banner .social-media i{';
		$multipurpose_portfolio_custom_css .='display: inline-block;';
		$multipurpose_portfolio_custom_css .='}';
		$multipurpose_portfolio_custom_css .='@media screen and (max-width: 720px) and (min-width: 320px){';
			$multipurpose_portfolio_custom_css .='#banner .social-media{';
				$multipurpose_portfolio_custom_css .='top:80%;';
			$multipurpose_portfolio_custom_css .='}';
		$multipurpose_portfolio_custom_css .='}';
	}else if($multipurpose_portfolio_slider_layout == 'Right Align'){
		$multipurpose_portfolio_custom_css .='#banner .banner-box{';
			$multipurpose_portfolio_custom_css .='text-align:right;';
		$multipurpose_portfolio_custom_css .='}';
		$multipurpose_portfolio_custom_css .='#banner .banner-box{';
		$multipurpose_portfolio_custom_css .='left: auto; right:9%;';
		$multipurpose_portfolio_custom_css .='}';
		$multipurpose_portfolio_custom_css .='#banner .social-media{';
		$multipurpose_portfolio_custom_css .='right:auto; left: 10%;';
		$multipurpose_portfolio_custom_css .='}';
		$multipurpose_portfolio_custom_css .='@media screen and (max-width: 720px) and (min-width: 320px){';
			$multipurpose_portfolio_custom_css .='#banner .banner-box{';
				$multipurpose_portfolio_custom_css .='width:auto; ';
			$multipurpose_portfolio_custom_css .='}';
			$multipurpose_portfolio_custom_css .='#banner .social-media{';
				$multipurpose_portfolio_custom_css .='right: 10%; left:auto; text-align:right;';
			$multipurpose_portfolio_custom_css .='}';
		$multipurpose_portfolio_custom_css .='}';
	}

	/*--------- Preloader Color Option -------*/
	$multipurpose_portfolio_preloader_color = get_theme_mod('multipurpose_portfolio_preloader_color');

	if($multipurpose_portfolio_preloader_color != false){
		$multipurpose_portfolio_custom_css .=' .tg-loader{';
			$multipurpose_portfolio_custom_css .='border-color: '.esc_attr($multipurpose_portfolio_preloader_color).';';
		$multipurpose_portfolio_custom_css .='} ';
		$multipurpose_portfolio_custom_css .=' .tg-loader-inner, .preloader .preloader-container .animated-preloader, .preloader .preloader-container .animated-preloader:before{';
			$multipurpose_portfolio_custom_css .='background-color: '.esc_attr($multipurpose_portfolio_preloader_color).';';
		$multipurpose_portfolio_custom_css .='} ';
	}

	$multipurpose_portfolio_preloader_bg_color = get_theme_mod('multipurpose_portfolio_preloader_bg_color');

	if($multipurpose_portfolio_preloader_bg_color != false){
		$multipurpose_portfolio_custom_css .=' #overlayer, .preloader{';
			$multipurpose_portfolio_custom_css .='background-color: '.esc_attr($multipurpose_portfolio_preloader_bg_color).';';
		$multipurpose_portfolio_custom_css .='} ';
	}

	/*--------- Top Header ----------*/
	$multipurpose_portfolio_top_bar = get_theme_mod('multipurpose_portfolio_top_header',true);

	if($multipurpose_portfolio_top_bar == false){
		$multipurpose_portfolio_custom_css .=' .page-template-custom-front-page #header{';
			$multipurpose_portfolio_custom_css .='top: 10px;';
		$multipurpose_portfolio_custom_css .='} ';
	}

	/*------------ Button Settings option-----------------*/

	$multipurpose_portfolio_top_button_padding = get_theme_mod('multipurpose_portfolio_top_button_padding');
	$multipurpose_portfolio_bottom_button_padding = get_theme_mod('multipurpose_portfolio_bottom_button_padding');
	$multipurpose_portfolio_left_button_padding = get_theme_mod('multipurpose_portfolio_left_button_padding');
	$multipurpose_portfolio_right_button_padding = get_theme_mod('multipurpose_portfolio_right_button_padding');
	if($multipurpose_portfolio_top_button_padding != false || $multipurpose_portfolio_bottom_button_padding != false || $multipurpose_portfolio_left_button_padding != false || $multipurpose_portfolio_right_button_padding != false){
		$multipurpose_portfolio_custom_css .='.blogbtn a, .read-more a, #comments input[type="submit"].submit{';
			$multipurpose_portfolio_custom_css .='padding-top: '.esc_attr($multipurpose_portfolio_top_button_padding).'px; padding-bottom: '.esc_attr($multipurpose_portfolio_bottom_button_padding).'px; padding-left: '.esc_attr($multipurpose_portfolio_left_button_padding).'px; padding-right: '.esc_attr($multipurpose_portfolio_right_button_padding).'px; display:inline-block;';
		$multipurpose_portfolio_custom_css .='}';
	}

	$multipurpose_portfolio_button_border_radius = get_theme_mod('multipurpose_portfolio_button_border_radius');
	$multipurpose_portfolio_custom_css .='.blogbtn a, .read-more a, #comments input[type="submit"].submit{';
		$multipurpose_portfolio_custom_css .='border-radius: '.esc_attr($multipurpose_portfolio_button_border_radius).'px;';
	$multipurpose_portfolio_custom_css .='}';

	/*----------- Copyright css -----*/
	$multipurpose_portfolio_copyright_top_padding = get_theme_mod('multipurpose_portfolio_top_copyright_padding');
	$multipurpose_portfolio_copyright_bottom_padding = get_theme_mod('multipurpose_portfolio_top_copyright_padding');
	if($multipurpose_portfolio_copyright_top_padding != false || $multipurpose_portfolio_copyright_bottom_padding != false){
		$multipurpose_portfolio_custom_css .='.inner{';
			$multipurpose_portfolio_custom_css .='padding-top: '.esc_attr($multipurpose_portfolio_copyright_top_padding).'px; padding-bottom: '.esc_attr($multipurpose_portfolio_copyright_bottom_padding).'px; ';
		$multipurpose_portfolio_custom_css .='}';
	}

	$multipurpose_portfolio_copyright_alignment = get_theme_mod('multipurpose_portfolio_copyright_alignment', 'center');
	if($multipurpose_portfolio_copyright_alignment == 'center' ){
		$multipurpose_portfolio_custom_css .='#footer .copyright p{';
			$multipurpose_portfolio_custom_css .='text-align: '. $multipurpose_portfolio_copyright_alignment .';';
		$multipurpose_portfolio_custom_css .='}';
	}elseif($multipurpose_portfolio_copyright_alignment == 'left' ){
		$multipurpose_portfolio_custom_css .='#footer .copyright p{';
			$multipurpose_portfolio_custom_css .=' text-align: '. $multipurpose_portfolio_copyright_alignment .';';
		$multipurpose_portfolio_custom_css .='}';
	}elseif($multipurpose_portfolio_copyright_alignment == 'right' ){
		$multipurpose_portfolio_custom_css .='#footer .copyright p{';
			$multipurpose_portfolio_custom_css .='text-align: '. $multipurpose_portfolio_copyright_alignment .';';
		$multipurpose_portfolio_custom_css .='}';
	}

	$multipurpose_portfolio_copyright_font_size = get_theme_mod('multipurpose_portfolio_copyright_font_size');
	$multipurpose_portfolio_custom_css .='#footer .copyright p{';
		$multipurpose_portfolio_custom_css .='font-size: '.esc_attr($multipurpose_portfolio_copyright_font_size).'px;';
	$multipurpose_portfolio_custom_css .='}';

	/*------ Banner Show/Hide ------*/
	$multipurpose_portfolio_banner = get_theme_mod('multipurpose_portfolio_show_banner');
	if($multipurpose_portfolio_banner == false ){
		$multipurpose_portfolio_custom_css .='.page-template-custom-front-page #header{';
			$multipurpose_portfolio_custom_css .='position: static; background-color:#efefef; padding: 10px 0;';
		$multipurpose_portfolio_custom_css .='}';
	}

	/*------ Topbar padding ------*/
	$multipurpose_portfolio_top_topbar_padding = get_theme_mod('multipurpose_portfolio_top_topbar_padding');
	$multipurpose_portfolio_bottom_topbar_padding = get_theme_mod('multipurpose_portfolio_bottom_topbar_padding');
	if($multipurpose_portfolio_top_topbar_padding != false || $multipurpose_portfolio_bottom_topbar_padding != false){
		$multipurpose_portfolio_custom_css .='.top-bar, .page-template-custom-front-page .top-bar{';
			$multipurpose_portfolio_custom_css .='padding-top: '.esc_attr($multipurpose_portfolio_top_topbar_padding).'px; padding-bottom: '.esc_attr($multipurpose_portfolio_bottom_topbar_padding).'px; ';
		$multipurpose_portfolio_custom_css .='}';
	}

	/*------ Woocommerce ----*/
	$multipurpose_portfolio_product_border = get_theme_mod('multipurpose_portfolio_product_border',true);

	if($multipurpose_portfolio_product_border == false){
		$multipurpose_portfolio_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$multipurpose_portfolio_custom_css .='border: 0;';
		$multipurpose_portfolio_custom_css .='}';
	}

	$multipurpose_portfolio_product_top = get_theme_mod('multipurpose_portfolio_product_top_padding',10);
	$multipurpose_portfolio_product_bottom = get_theme_mod('multipurpose_portfolio_product_bottom_padding',10);
	$multipurpose_portfolio_product_left = get_theme_mod('multipurpose_portfolio_product_left_padding',10);
	$multipurpose_portfolio_product_right = get_theme_mod('multipurpose_portfolio_product_right_padding',10);
	if($multipurpose_portfolio_product_top != false || $multipurpose_portfolio_product_bottom != false || $multipurpose_portfolio_product_left != false || $multipurpose_portfolio_product_right != false){
		$multipurpose_portfolio_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$multipurpose_portfolio_custom_css .='padding-top: '.esc_attr($multipurpose_portfolio_product_top).'px; padding-bottom: '.esc_attr($multipurpose_portfolio_product_bottom).'px; padding-left: '.esc_attr($multipurpose_portfolio_product_left).'px; padding-right: '.esc_attr($multipurpose_portfolio_product_right).'px;';
		$multipurpose_portfolio_custom_css .='}';
	}

	$multipurpose_portfolio_product_border_radius = get_theme_mod('multipurpose_portfolio_product_border_radius');
	if($multipurpose_portfolio_product_border_radius != false){
		$multipurpose_portfolio_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$multipurpose_portfolio_custom_css .='border-radius: '.esc_attr($multipurpose_portfolio_product_border_radius).'px;';
		$multipurpose_portfolio_custom_css .='}';
	}

	/*----- WooCommerce button css --------*/
	$multipurpose_portfolio_product_button_top = get_theme_mod('multipurpose_portfolio_product_button_top_padding',10);
	$multipurpose_portfolio_product_button_bottom = get_theme_mod('multipurpose_portfolio_product_button_bottom_padding',10);
	$multipurpose_portfolio_product_button_left = get_theme_mod('multipurpose_portfolio_product_button_left_padding',15);
	$multipurpose_portfolio_product_button_right = get_theme_mod('multipurpose_portfolio_product_button_right_padding',15);
	if($multipurpose_portfolio_product_button_top != false || $multipurpose_portfolio_product_button_bottom != false || $multipurpose_portfolio_product_button_left != false || $multipurpose_portfolio_product_button_right != false){
		$multipurpose_portfolio_custom_css .='.woocommerce ul.products li.product .button, .woocommerce div.product form.cart .button, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button, .woocommerce #payment #place_order, .woocommerce-page #payment #place_order, button.woocommerce-button.button.woocommerce-form-login__submit, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
			$multipurpose_portfolio_custom_css .='padding-top: '.esc_attr($multipurpose_portfolio_product_button_top).'px; padding-bottom: '.esc_attr($multipurpose_portfolio_product_button_bottom).'px; padding-left: '.esc_attr($multipurpose_portfolio_product_button_left).'px; padding-right: '.esc_attr($multipurpose_portfolio_product_button_right).'px;';
		$multipurpose_portfolio_custom_css .='}';
	}

	$multipurpose_portfolio_product_button_border_radius = get_theme_mod('multipurpose_portfolio_product_button_border_radius');
	if($multipurpose_portfolio_product_button_border_radius != false){
		$multipurpose_portfolio_custom_css .='.woocommerce ul.products li.product .button, .woocommerce div.product form.cart .button, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button, a.checkout-button.button.alt.wc-forward, .woocommerce #payment #place_order, .woocommerce-page #payment #place_order, button.woocommerce-button.button.woocommerce-form-login__submit{';
			$multipurpose_portfolio_custom_css .='border-radius: '.esc_attr($multipurpose_portfolio_product_button_border_radius).'px;';
		$multipurpose_portfolio_custom_css .='}';
	}

	/*----- WooCommerce product sale css --------*/
	$multipurpose_portfolio_product_sale_top = get_theme_mod('multipurpose_portfolio_product_sale_top_padding');
	$multipurpose_portfolio_product_sale_bottom = get_theme_mod('multipurpose_portfolio_product_sale_bottom_padding');
	$multipurpose_portfolio_product_sale_left = get_theme_mod('multipurpose_portfolio_product_sale_left_padding');
	$multipurpose_portfolio_product_sale_right = get_theme_mod('multipurpose_portfolio_product_sale_right_padding');
	if($multipurpose_portfolio_product_sale_top != false || $multipurpose_portfolio_product_sale_bottom != false || $multipurpose_portfolio_product_sale_left != false || $multipurpose_portfolio_product_sale_right != false){
		$multipurpose_portfolio_custom_css .='.woocommerce span.onsale {';
			$multipurpose_portfolio_custom_css .='padding-top: '.esc_attr($multipurpose_portfolio_product_sale_top).'px; padding-bottom: '.esc_attr($multipurpose_portfolio_product_sale_bottom).'px; padding-left: '.esc_attr($multipurpose_portfolio_product_sale_left).'px; padding-right: '.esc_attr($multipurpose_portfolio_product_sale_right).'px;';
		$multipurpose_portfolio_custom_css .='}';
	}

	$multipurpose_portfolio_product_sale_border_radius = get_theme_mod('multipurpose_portfolio_product_sale_border_radius',50);
	if($multipurpose_portfolio_product_sale_border_radius != false){
		$multipurpose_portfolio_custom_css .='.woocommerce span.onsale {';
			$multipurpose_portfolio_custom_css .='border-radius: '.esc_attr($multipurpose_portfolio_product_sale_border_radius).'px;';
		$multipurpose_portfolio_custom_css .='}';
	}

	$multipurpose_portfolio_menu_case = get_theme_mod('multipurpose_portfolio_product_sale_position', 'Right');
	if($multipurpose_portfolio_menu_case == 'Right' ){
		$multipurpose_portfolio_custom_css .='.woocommerce ul.products li.product .onsale{';
			$multipurpose_portfolio_custom_css .=' left:auto; right:0;';
		$multipurpose_portfolio_custom_css .='}';
	}elseif($multipurpose_portfolio_menu_case == 'Left' ){
		$multipurpose_portfolio_custom_css .='.woocommerce ul.products li.product .onsale{';
			$multipurpose_portfolio_custom_css .=' left:-10px; right:auto;';
		$multipurpose_portfolio_custom_css .='}';
	}

	/*---- Banner Image overlay -----*/
	$multipurpose_portfolio_banner_image_overlay = get_theme_mod('multipurpose_portfolio_banner_image_overlay',true);
	if($multipurpose_portfolio_banner_image_overlay == false){
		$multipurpose_portfolio_custom_css .='#banner img {';
			$multipurpose_portfolio_custom_css .='opacity: 1;';
		$multipurpose_portfolio_custom_css .='}';
	}

	$multipurpose_portfolio_banner_overlay_color = get_theme_mod('multipurpose_portfolio_banner_overlay_color');
	if($multipurpose_portfolio_banner_overlay_color != false){
		$multipurpose_portfolio_custom_css .='#banner {';
			$multipurpose_portfolio_custom_css .='background-color: '.esc_attr($multipurpose_portfolio_banner_overlay_color).';';
		$multipurpose_portfolio_custom_css .='}';
	}

	/*---- Comment form ----*/
	$multipurpose_portfolio_comment_width = get_theme_mod('multipurpose_portfolio_comment_width', '100');
	$multipurpose_portfolio_custom_css .='#comments textarea{';
		$multipurpose_portfolio_custom_css .=' width:'.esc_attr($multipurpose_portfolio_comment_width).'%;';
	$multipurpose_portfolio_custom_css .='}';

	$multipurpose_portfolio_comment_submit_text = get_theme_mod('multipurpose_portfolio_comment_submit_text', 'Post Comment');
	if($multipurpose_portfolio_comment_submit_text == ''){
		$multipurpose_portfolio_custom_css .='#comments p.form-submit {';
			$multipurpose_portfolio_custom_css .='display: none;';
		$multipurpose_portfolio_custom_css .='}';
	}

	$multipurpose_portfolio_comment_title = get_theme_mod('multipurpose_portfolio_comment_title', 'Leave a Reply');
	if($multipurpose_portfolio_comment_title == ''){
		$multipurpose_portfolio_custom_css .='#comments h2#reply-title {';
			$multipurpose_portfolio_custom_css .='display: none;';
		$multipurpose_portfolio_custom_css .='}';
	}

	/*------ Footer background css -------*/
	$multipurpose_portfolio_footer_bg_color = get_theme_mod('multipurpose_portfolio_footer_bg_color');
	if($multipurpose_portfolio_footer_bg_color != false){
		$multipurpose_portfolio_custom_css .='.footerinner{';
			$multipurpose_portfolio_custom_css .='background-color: '.esc_attr($multipurpose_portfolio_footer_bg_color).';';
		$multipurpose_portfolio_custom_css .='}';
	}

	$multipurpose_portfolio_footer_bg_image = get_theme_mod('multipurpose_portfolio_footer_bg_image');
	if($multipurpose_portfolio_footer_bg_image != false){
		$multipurpose_portfolio_custom_css .='.footerinner{';
			$multipurpose_portfolio_custom_css .='background: url('.esc_attr($multipurpose_portfolio_footer_bg_image).');';
		$multipurpose_portfolio_custom_css .='}';
	}

	/*----- Featured image css -----*/
	$multipurpose_portfolio_feature_image_border_radius = get_theme_mod('multipurpose_portfolio_feature_image_border_radius');
	if($multipurpose_portfolio_feature_image_border_radius != false){
		$multipurpose_portfolio_custom_css .='.blog-sec img{';
			$multipurpose_portfolio_custom_css .='border-radius: '.esc_attr($multipurpose_portfolio_feature_image_border_radius).'px;';
		$multipurpose_portfolio_custom_css .='}';
	}

	$multipurpose_portfolio_feature_image_shadow = get_theme_mod('multipurpose_portfolio_feature_image_shadow');
	if($multipurpose_portfolio_feature_image_shadow != false){
		$multipurpose_portfolio_custom_css .='.blog-sec img{';
			$multipurpose_portfolio_custom_css .='box-shadow: '.esc_attr($multipurpose_portfolio_feature_image_shadow).'px '.esc_attr($multipurpose_portfolio_feature_image_shadow).'px '.esc_attr($multipurpose_portfolio_feature_image_shadow).'px #aaa;';
		$multipurpose_portfolio_custom_css .='}';
	}

	/*------ Sticky header padding ------------*/
	$multipurpose_portfolio_top_sticky_header_padding = get_theme_mod('multipurpose_portfolio_top_sticky_header_padding');
	$multipurpose_portfolio_bottom_sticky_header_padding = get_theme_mod('multipurpose_portfolio_bottom_sticky_header_padding');
	$multipurpose_portfolio_custom_css .=' .fixed-header{';
		$multipurpose_portfolio_custom_css .=' padding-top: '.esc_attr($multipurpose_portfolio_top_sticky_header_padding).'px; padding-bottom: '.esc_attr($multipurpose_portfolio_bottom_sticky_header_padding).'px';
	$multipurpose_portfolio_custom_css .='}';

	/*------ Related products ---------*/
	$multipurpose_portfolio_related_products = get_theme_mod('multipurpose_portfolio_single_related_products',true);
	if($multipurpose_portfolio_related_products == false){
		$multipurpose_portfolio_custom_css .=' .related.products{';
			$multipurpose_portfolio_custom_css .='display: none;';
		$multipurpose_portfolio_custom_css .='}';
	}

	/*-------- Menu Font Size --------*/
	$multipurpose_portfolio_menu_font_size = get_theme_mod('multipurpose_portfolio_menu_font_size',15);
	if($multipurpose_portfolio_menu_font_size != false){
		$multipurpose_portfolio_custom_css .='.nav-menu li a{';
			$multipurpose_portfolio_custom_css .='font-size: '.esc_attr($multipurpose_portfolio_menu_font_size).'px;';
		$multipurpose_portfolio_custom_css .='}';
	}

	// Featured image header
	$header_image_url = multipurpose_portfolio_banner_image( $image_url = '' );
	$multipurpose_portfolio_custom_css .='#page-site-header{';
		$multipurpose_portfolio_custom_css .='background-image: url('. esc_url( $header_image_url ).'); background-size: cover;';
	$multipurpose_portfolio_custom_css .='}';

	$multipurpose_portfolio_post_featured_image = get_theme_mod('multipurpose_portfolio_post_featured_image', 'in-content');
	if($multipurpose_portfolio_post_featured_image == 'banner' ){
		$multipurpose_portfolio_custom_css .='.single #wrapper h1, .page #wrapper h1, .page #wrapper img{';
			$multipurpose_portfolio_custom_css .=' display: none;';
		$multipurpose_portfolio_custom_css .='}';
		$multipurpose_portfolio_custom_css .='.page-template-custom-front-page #page-site-header{';
			$multipurpose_portfolio_custom_css .=' display: none;';
		$multipurpose_portfolio_custom_css .='}';
	}

	// Woocommerce Shop page pagination
	$multipurpose_portfolio_shop_page_navigation = get_theme_mod('multipurpose_portfolio_shop_page_navigation',true);
	if ($multipurpose_portfolio_shop_page_navigation == false) {
		$multipurpose_portfolio_custom_css .='.woocommerce nav.woocommerce-pagination{';
			$multipurpose_portfolio_custom_css .='display: none;';
		$multipurpose_portfolio_custom_css .='}';
	}