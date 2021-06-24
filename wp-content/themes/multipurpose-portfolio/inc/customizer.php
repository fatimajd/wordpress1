<?php
/**
 * Multipurpose Portfolio Theme Customizer
 * @package Multipurpose Portfolio
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function multipurpose_portfolio_customize_register( $wp_customize ) {	

	class Multipurpose_Portfolio_WP_Customize_Range_Control extends WP_Customize_Control{
	    public $type = 'custom_range';
	    public function enqueue(){
	        wp_enqueue_script(
	            'cs-range-control',
	            false,
	            true
	        );
	    }
	    public function render_content(){?>
	        <label>
	            <?php if ( ! empty( $this->label )) : ?>
	                <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
	            <?php endif; ?>
	            <div class="cs-range-value"><?php echo esc_html($this->value()); ?></div>
	            <input data-input-type="range" type="range" <?php $this->input_attrs(); ?> value="<?php echo esc_attr($this->value()); ?>" <?php $this->link(); ?> />
	            <?php if ( ! empty( $this->description )) : ?>
	                <span class="description customize-control-description"><?php echo esc_html($this->description); ?></span>
	            <?php endif; ?>
	        </label>
        <?php }
	}

	//add home page setting pannel
	$wp_customize->add_panel( 'multipurpose_portfolio_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Theme Settings', 'multipurpose-portfolio' ),
	    'description' => __( 'Description of what this panel does.', 'multipurpose-portfolio' ),
	) );

	// Add the Theme Color Option section.
	$wp_customize->add_section( 'multipurpose_portfolio_theme_color_option', array( 
		'panel' => 'multipurpose_portfolio_panel_id', 
		'title' => esc_html__( 'Global Color Settings', 'multipurpose-portfolio' ) 
	) );

  	$wp_customize->add_setting( 'multipurpose_portfolio_first_theme_color', array(
	    'default' => '#f47bcf',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'multipurpose_portfolio_first_theme_color', array(
  		'label' => 'Color Option',
	    'description' => __('One can change complete theme global color settings on just one click.', 'multipurpose-portfolio'),
	    'section' => 'multipurpose_portfolio_theme_color_option',
	    'settings' => 'multipurpose_portfolio_first_theme_color',
  	)));

	// font array
	$multipurpose_portfolio_font_array = array(
        '' => 'No Fonts',
        'Abril Fatface' => 'Abril Fatface',
        'Acme' => 'Acme',
        'Anton' => 'Anton',
        'Architects Daughter' => 'Architects Daughter',
        'Arimo' => 'Arimo',
        'Arsenal' => 'Arsenal', 
        'Arvo' => 'Arvo',
        'Alegreya' => 'Alegreya',
        'Alfa Slab One' => 'Alfa Slab One',
        'Averia Serif Libre' => 'Averia Serif Libre',
        'Bangers' => 'Bangers', 
        'Boogaloo' => 'Boogaloo',
        'Bad Script' => 'Bad Script',
        'Bitter' => 'Bitter',
        'Bree Serif' => 'Bree Serif',
        'BenchNine' => 'BenchNine', 
        'Cabin' => 'Cabin', 
        'Cardo' => 'Cardo',
        'Courgette' => 'Courgette',
        'Cherry Swash' => 'Cherry Swash',
        'Cormorant Garamond' => 'Cormorant Garamond',
        'Crimson Text' => 'Crimson Text',
        'Cuprum' => 'Cuprum', 
        'Cookie' => 'Cookie', 
        'Chewy' => 'Chewy', 
        'Days One' => 'Days One', 
        'Dosis' => 'Dosis',
        'Droid Sans' => 'Droid Sans',
        'Economica' => 'Economica',
        'Fredoka One' => 'Fredoka One',
        'Fjalla One' => 'Fjalla One',
        'Francois One' => 'Francois One',
        'Frank Ruhl Libre' => 'Frank Ruhl Libre',
        'Gloria Hallelujah' => 'Gloria Hallelujah',
        'Great Vibes' => 'Great Vibes',
        'Handlee' => 'Handlee', 
        'Hammersmith One' => 'Hammersmith One',
        'Inconsolata' => 'Inconsolata', 
        'Indie Flower' => 'Indie Flower', 
        'IM Fell English SC' => 'IM Fell English SC', 
        'Julius Sans One' => 'Julius Sans One',
        'Josefin Slab' => 'Josefin Slab', 
        'Josefin Sans' => 'Josefin Sans', 
        'Kanit' => 'Kanit', 
        'Lobster' => 'Lobster', 
        'Lato' => 'Lato',
        'Lora' => 'Lora', 
        'Libre Baskerville' =>'Libre Baskerville',
        'Lobster Two' => 'Lobster Two',
        'Merriweather' =>'Merriweather', 
        'Monda' => 'Monda',
        'Montserrat' => 'Montserrat',
        'Muli' => 'Muli', 
        'Marck Script' => 'Marck Script',
        'Noto Serif' => 'Noto Serif',
        'Open Sans' => 'Open Sans', 
        'Overpass' => 'Overpass',
        'Overpass Mono' => 'Overpass Mono',
        'Oxygen' => 'Oxygen', 
        'Orbitron' => 'Orbitron', 
        'Patua One' => 'Patua One', 
        'Pacifico' => 'Pacifico',
        'Padauk' => 'Padauk', 
        'Playball' => 'Playball',
        'Playfair Display' => 'Playfair Display', 
        'PT Sans' => 'PT Sans',
        'Philosopher' => 'Philosopher',
        'Permanent Marker' => 'Permanent Marker',
        'Poiret One' => 'Poiret One', 
        'Quicksand' => 'Quicksand', 
        'Quattrocento Sans' => 'Quattrocento Sans', 
        'Raleway' => 'Raleway', 
        'Rubik' => 'Rubik', 
        'Rokkitt' => 'Rokkitt', 
        'Russo One' => 'Russo One', 
        'Righteous' => 'Righteous', 
        'Slabo' => 'Slabo', 
        'Source Sans Pro' => 'Source Sans Pro', 
        'Shadows Into Light Two' =>'Shadows Into Light Two', 
        'Shadows Into Light' => 'Shadows Into Light', 
        'Sacramento' => 'Sacramento', 
        'Shrikhand' => 'Shrikhand', 
        'Tangerine' => 'Tangerine',
        'Ubuntu' => 'Ubuntu', 
        'VT323' => 'VT323', 
        'Varela Round' => 'Varela Round', 
        'Vampiro One' => 'Vampiro One',
        'Vollkorn' => 'Vollkorn',
        'Volkhov' => 'Volkhov', 
        'Yanone Kaffeesatz' => 'Yanone Kaffeesatz',
    );

	//Typography
	$wp_customize->add_section( 'multipurpose_portfolio_typography', array(
    	'title' => __( 'Typography', 'multipurpose-portfolio' ),
		'priority'   => 30,
		'panel' => 'multipurpose_portfolio_panel_id'
	) );
	
	// This is Paragraph Color picker setting
	$wp_customize->add_setting( 'multipurpose_portfolio_paragraph_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'multipurpose_portfolio_paragraph_color', array(
		'label' => __('Paragraph Color', 'multipurpose-portfolio'),
		'section' => 'multipurpose_portfolio_typography',
		'settings' => 'multipurpose_portfolio_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('multipurpose_portfolio_paragraph_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'multipurpose_portfolio_sanitize_choices'
	));
	$wp_customize->add_control(
	    'multipurpose_portfolio_paragraph_font_family', array(
	    'section'  => 'multipurpose_portfolio_typography',
	    'label'    => __( 'Paragraph Fonts','multipurpose-portfolio'),
	    'type'     => 'select',
	    'choices'  => $multipurpose_portfolio_font_array,
	));

	$wp_customize->add_setting('multipurpose_portfolio_paragraph_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('multipurpose_portfolio_paragraph_font_size',array(
		'label'	=> __('Paragraph Font Size','multipurpose-portfolio'),
		'section'	=> 'multipurpose_portfolio_typography',
		'setting'	=> 'multipurpose_portfolio_paragraph_font_size',
		'type'	=> 'text'
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'multipurpose_portfolio_atag_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'multipurpose_portfolio_atag_color', array(
		'label' => __('"a" Tag Color', 'multipurpose-portfolio'),
		'section' => 'multipurpose_portfolio_typography',
		'settings' => 'multipurpose_portfolio_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('multipurpose_portfolio_atag_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'multipurpose_portfolio_sanitize_choices'
	));
	$wp_customize->add_control(
	    'multipurpose_portfolio_atag_font_family', array(
	    'section'  => 'multipurpose_portfolio_typography',
	    'label'    => __( '"a" Tag Fonts','multipurpose-portfolio'),
	    'type'     => 'select',
	    'choices'  => $multipurpose_portfolio_font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'multipurpose_portfolio_li_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'multipurpose_portfolio_li_color', array(
		'label' => __('"li" Tag Color', 'multipurpose-portfolio'),
		'section' => 'multipurpose_portfolio_typography',
		'settings' => 'multipurpose_portfolio_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('multipurpose_portfolio_li_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'multipurpose_portfolio_sanitize_choices'
	));
	$wp_customize->add_control(
	    'multipurpose_portfolio_li_font_family', array(
	    'section'  => 'multipurpose_portfolio_typography',
	    'label'    => __( '"li" Tag Fonts','multipurpose-portfolio'),
	    'type'     => 'select',
	    'choices'  => $multipurpose_portfolio_font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting( 'multipurpose_portfolio_h1_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'multipurpose_portfolio_h1_color', array(
		'label' => __('H1 Color', 'multipurpose-portfolio'),
		'section' => 'multipurpose_portfolio_typography',
		'settings' => 'multipurpose_portfolio_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('multipurpose_portfolio_h1_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'multipurpose_portfolio_sanitize_choices'
	));
	$wp_customize->add_control(
	    'multipurpose_portfolio_h1_font_family', array(
	    'section'  => 'multipurpose_portfolio_typography',
	    'label'    => __( 'H1 Fonts','multipurpose-portfolio'),
	    'type'     => 'select',
	    'choices'  => $multipurpose_portfolio_font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('multipurpose_portfolio_h1_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('multipurpose_portfolio_h1_font_size',array(
		'label'	=> __('H1 Font Size','multipurpose-portfolio'),
		'section'	=> 'multipurpose_portfolio_typography',
		'setting'	=> 'multipurpose_portfolio_h1_font_size',
		'type'	=> 'text'
	));

	// This is H2 Color picker setting
	$wp_customize->add_setting( 'multipurpose_portfolio_h2_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'multipurpose_portfolio_h2_color', array(
		'label' => __('h2 Color', 'multipurpose-portfolio'),
		'section' => 'multipurpose_portfolio_typography',
		'settings' => 'multipurpose_portfolio_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('multipurpose_portfolio_h2_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'multipurpose_portfolio_sanitize_choices'
	));
	$wp_customize->add_control(
	    'multipurpose_portfolio_h2_font_family', array(
	    'section'  => 'multipurpose_portfolio_typography',
	    'label'    => __( 'h2 Fonts','multipurpose-portfolio'),
	    'type'     => 'select',
	    'choices'  => $multipurpose_portfolio_font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('multipurpose_portfolio_h2_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('multipurpose_portfolio_h2_font_size',array(
		'label'	=> __('h2 Font Size','multipurpose-portfolio'),
		'section'	=> 'multipurpose_portfolio_typography',
		'setting'	=> 'multipurpose_portfolio_h2_font_size',
		'type'	=> 'text'
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting( 'multipurpose_portfolio_h3_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'multipurpose_portfolio_h3_color', array(
		'label' => __('h3 Color', 'multipurpose-portfolio'),
		'section' => 'multipurpose_portfolio_typography',
		'settings' => 'multipurpose_portfolio_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('multipurpose_portfolio_h3_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'multipurpose_portfolio_sanitize_choices'
	));
	$wp_customize->add_control(
	    'multipurpose_portfolio_h3_font_family', array(
	    'section'  => 'multipurpose_portfolio_typography',
	    'label'    => __( 'h3 Fonts','multipurpose-portfolio'),
	    'type'     => 'select',
	    'choices'  => $multipurpose_portfolio_font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('multipurpose_portfolio_h3_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('multipurpose_portfolio_h3_font_size',array(
		'label'	=> __('h3 Font Size','multipurpose-portfolio'),
		'section'	=> 'multipurpose_portfolio_typography',
		'setting'	=> 'multipurpose_portfolio_h3_font_size',
		'type'	=> 'text'
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting( 'multipurpose_portfolio_h4_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'multipurpose_portfolio_h4_color', array(
		'label' => __('h4 Color', 'multipurpose-portfolio'),
		'section' => 'multipurpose_portfolio_typography',
		'settings' => 'multipurpose_portfolio_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('multipurpose_portfolio_h4_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'multipurpose_portfolio_sanitize_choices'
	));
	$wp_customize->add_control(
	    'multipurpose_portfolio_h4_font_family', array(
	    'section'  => 'multipurpose_portfolio_typography',
	    'label'    => __( 'h4 Fonts','multipurpose-portfolio'),
	    'type'     => 'select',
	    'choices'  => $multipurpose_portfolio_font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('multipurpose_portfolio_h4_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('multipurpose_portfolio_h4_font_size',array(
		'label'	=> __('h4 Font Size','multipurpose-portfolio'),
		'section'	=> 'multipurpose_portfolio_typography',
		'setting'	=> 'multipurpose_portfolio_h4_font_size',
		'type'	=> 'text'
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting( 'multipurpose_portfolio_h5_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'multipurpose_portfolio_h5_color', array(
		'label' => __('h5 Color', 'multipurpose-portfolio'),
		'section' => 'multipurpose_portfolio_typography',
		'settings' => 'multipurpose_portfolio_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('multipurpose_portfolio_h5_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'multipurpose_portfolio_sanitize_choices'
	));
	$wp_customize->add_control(
	    'multipurpose_portfolio_h5_font_family', array(
	    'section'  => 'multipurpose_portfolio_typography',
	    'label'    => __( 'h5 Fonts','multipurpose-portfolio'),
	    'type'     => 'select',
	    'choices'  => $multipurpose_portfolio_font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('multipurpose_portfolio_h5_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('multipurpose_portfolio_h5_font_size',array(
		'label'	=> __('h5 Font Size','multipurpose-portfolio'),
		'section'	=> 'multipurpose_portfolio_typography',
		'setting'	=> 'multipurpose_portfolio_h5_font_size',
		'type'	=> 'text'
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting( 'multipurpose_portfolio_h6_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'multipurpose_portfolio_h6_color', array(
		'label' => __('h6 Color', 'multipurpose-portfolio'),
		'section' => 'multipurpose_portfolio_typography',
		'settings' => 'multipurpose_portfolio_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('multipurpose_portfolio_h6_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'multipurpose_portfolio_sanitize_choices'
	));
	$wp_customize->add_control(
	    'multipurpose_portfolio_h6_font_family', array(
	    'section'  => 'multipurpose_portfolio_typography',
	    'label'    => __( 'h6 Fonts','multipurpose-portfolio'),
	    'type'     => 'select',
	    'choices'  => $multipurpose_portfolio_font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('multipurpose_portfolio_h6_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('multipurpose_portfolio_h6_font_size',array(
		'label'	=> __('h6 Font Size','multipurpose-portfolio'),
		'section'	=> 'multipurpose_portfolio_typography',
		'setting'	=> 'multipurpose_portfolio_h6_font_size',
		'type'	=> 'text'
	));

	//Topbar section
	$wp_customize->add_section('multipurpose_portfolio_topbar_icon',array(
		'title'	=> __('Topbar Section','multipurpose-portfolio'),
		'description'	=> __('Add Header Content here','multipurpose-portfolio'),
		'priority'	=> null,
		'panel' => 'multipurpose_portfolio_panel_id',
	));

	$wp_customize->add_setting('multipurpose_portfolio_top_header',array(
       'default' => true,
       'sanitize_callback'	=> 'multipurpose_portfolio_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_portfolio_top_header',array(
       'type' => 'checkbox',
       'label' => __('Enable Top Header','multipurpose-portfolio'),
       'section' => 'multipurpose_portfolio_topbar_icon'
    ));

    $wp_customize->add_setting('multipurpose_portfolio_topbar_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('multipurpose_portfolio_topbar_padding',array(
		'label'	=> esc_html__('Topbar Padding','multipurpose-portfolio'),
		'section'=> 'multipurpose_portfolio_topbar_icon',
	));

    $wp_customize->add_setting('multipurpose_portfolio_top_topbar_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'multipurpose_portfolio_sanitize_float'
	));
	$wp_customize->add_control('multipurpose_portfolio_top_topbar_padding',array(
		'description'	=> __('Top','multipurpose-portfolio'),
		'input_attrs' => array(
            'step' => 1,
			'min' => 0,
			'max' => 50,
        ),
		'section'=> 'multipurpose_portfolio_topbar_icon',
		'type'=> 'number',
	));

	$wp_customize->add_setting('multipurpose_portfolio_bottom_topbar_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'multipurpose_portfolio_sanitize_float'
	));
	$wp_customize->add_control('multipurpose_portfolio_bottom_topbar_padding',array(
		'description'	=> __('Bottom','multipurpose-portfolio'),
		'input_attrs' => array(
            'step' => 1,
			'min' => 0,
			'max' => 50,
        ),
		'section'=> 'multipurpose_portfolio_topbar_icon',
		'type'=> 'number',
	));

    $wp_customize->add_setting('multipurpose_portfolio_sticky_header',array(
       'default' => '',
       'sanitize_callback'	=> 'multipurpose_portfolio_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_portfolio_sticky_header',array(
       'type' => 'checkbox',
       'label' => __('Stick header on Desktop','multipurpose-portfolio'),
       'section' => 'multipurpose_portfolio_topbar_icon'
    ));

    $wp_customize->add_setting('multipurpose_portfolio_sticky_header_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('multipurpose_portfolio_sticky_header_padding',array(
		'label'	=> esc_html__('Sticky Header Padding','multipurpose-portfolio'),
		'section'=> 'multipurpose_portfolio_topbar_icon',
		'type' => 'hidden',
	));

    $wp_customize->add_setting('multipurpose_portfolio_top_sticky_header_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'multipurpose_portfolio_sanitize_float'
	));
	$wp_customize->add_control('multipurpose_portfolio_top_sticky_header_padding',array(
		'description'	=> __('Top','multipurpose-portfolio'),
		'input_attrs' => array(
            'step' => 1,
			'min' => 0,
			'max' => 50,
        ),
		'section'=> 'multipurpose_portfolio_topbar_icon',
		'type'=> 'number'
	));

	$wp_customize->add_setting('multipurpose_portfolio_bottom_sticky_header_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'multipurpose_portfolio_sanitize_float'
	));
	$wp_customize->add_control('multipurpose_portfolio_bottom_sticky_header_padding',array(
		'description'	=> __('Bottom','multipurpose-portfolio'),
		'input_attrs' => array(
            'step' => 1,
			'min' => 0,
			'max' => 50,
        ),
		'section'=> 'multipurpose_portfolio_topbar_icon',
		'type'=> 'number'
	));

    $wp_customize->add_setting('multipurpose_portfolio_show_search',array(
       'default' => 'true',
       'sanitize_callback'	=> 'multipurpose_portfolio_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_portfolio_show_search',array(
       'type' => 'checkbox',
       'label' => __('Show/Hide Search','multipurpose-portfolio'),
       'section' => 'multipurpose_portfolio_topbar_icon'
    ));

    $wp_customize->add_setting('multipurpose_portfolio_search_placeholder',array(
       'default' => __('Search','multipurpose-portfolio'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('multipurpose_portfolio_search_placeholder',array(
       'type' => 'text',
       'label' => __('Search Placeholder text','multipurpose-portfolio'),
       'section' => 'multipurpose_portfolio_topbar_icon'
    ));

	$wp_customize->add_setting('multipurpose_portfolio_call',array(
		'default'	=> '',
		'sanitize_callback'	=> 'multipurpose_portfolio_sanitize_phone_number'
	));
	$wp_customize->add_control('multipurpose_portfolio_call',array(
		'label'	=> __('Add Phone No.','multipurpose-portfolio'),
		'section'	=> 'multipurpose_portfolio_topbar_icon',
		'setting'	=> 'multipurpose_portfolio_call',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('multipurpose_portfolio_email',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_email'
	));
	$wp_customize->add_control('multipurpose_portfolio_email',array(
		'label'	=> __('Add Email Address','multipurpose-portfolio'),
		'section'	=> 'multipurpose_portfolio_topbar_icon',
		'setting'	=> 'multipurpose_portfolio_email',
		'type'	=> 'text'
	));

	$wp_customize->add_section('multipurpose_portfolio_header',array(
		'title'	=> __('Header','multipurpose-portfolio'),
		'priority'	=> null,
		'panel' => 'multipurpose_portfolio_panel_id',
	));

	$wp_customize->add_setting( 'multipurpose_portfolio_menu_font_size', array(
		'default'=> '15',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new multipurpose_portfolio_WP_Customize_Range_Control( $wp_customize, 'multipurpose_portfolio_menu_font_size', array(
        'label'  => __('Menu Font Size','multipurpose-portfolio'),
        'section'  => 'multipurpose_portfolio_header',
        'description' => __('Measurement is in pixel.','multipurpose-portfolio'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
        )
    )));

	//Banner section
  	$wp_customize->add_section('multipurpose_portfolio_banner',array(
	    'title' => __('Banner Section','multipurpose-portfolio'),
	    'description' => '',
	    'priority'  => null,
	    'panel' => 'multipurpose_portfolio_panel_id',
	)); 

	$wp_customize->add_setting('multipurpose_portfolio_show_banner',array(
        'default' => false,
        'sanitize_callback'	=> 'multipurpose_portfolio_sanitize_checkbox'
	));
	$wp_customize->add_control('multipurpose_portfolio_show_banner',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Banner','multipurpose-portfolio'),
      	'section' => 'multipurpose_portfolio_banner'
	));

	$wp_customize->add_setting('multipurpose_portfolio_banner_title',array(
        'default' => true,
        'sanitize_callback'	=> 'multipurpose_portfolio_sanitize_checkbox'
	));
	$wp_customize->add_control('multipurpose_portfolio_banner_title',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Banner Title','multipurpose-portfolio'),
      	'section' => 'multipurpose_portfolio_banner'
	));

	$wp_customize->add_setting('multipurpose_portfolio_banner_content',array(
        'default' => true,
        'sanitize_callback'	=> 'multipurpose_portfolio_sanitize_checkbox'
	));
	$wp_customize->add_control('multipurpose_portfolio_banner_content',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Banner Content','multipurpose-portfolio'),
      	'section' => 'multipurpose_portfolio_banner'
	));

	$wp_customize->add_setting('multipurpose_portfolio_banner_button',array(
        'default' => true,
        'sanitize_callback'	=> 'multipurpose_portfolio_sanitize_checkbox'
	));
	$wp_customize->add_control('multipurpose_portfolio_banner_button',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Banner Button','multipurpose-portfolio'),
      	'section' => 'multipurpose_portfolio_banner'
	));

	$wp_customize->add_setting( 'multipurpose_portfolio_banner_page', array(
		'default'           => '',
		'sanitize_callback' => 'multipurpose_portfolio_sanitize_dropdown_pages'
	) );
	$wp_customize->add_control( 'multipurpose_portfolio_banner_page', array(
		'label'    => __( 'Select Banner Image Page', 'multipurpose-portfolio' ),
		'section'  => 'multipurpose_portfolio_banner',
		'type'     => 'dropdown-pages'
	) );

	$wp_customize->add_setting('multipurpose_portfolio_facebook_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('multipurpose_portfolio_facebook_url',array(
		'label'	=> __('Add Facebook link','multipurpose-portfolio'),
		'section'	=> 'multipurpose_portfolio_banner',
		'setting'	=> 'multipurpose_portfolio_facebook_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('multipurpose_portfolio_twitter_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('multipurpose_portfolio_twitter_url',array(
		'label'	=> __('Add Twitter link','multipurpose-portfolio'),
		'section'	=> 'multipurpose_portfolio_banner',
		'setting'	=> 'multipurpose_portfolio_twitter_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('multipurpose_portfolio_insta_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('multipurpose_portfolio_insta_url',array(
		'label'	=> __('Add Instagram link','multipurpose-portfolio'),
		'section'	=> 'multipurpose_portfolio_banner',
		'setting'	=> 'multipurpose_portfolio_insta_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('multipurpose_portfolio_pinterest_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('multipurpose_portfolio_pinterest_url',array(
		'label'	=> __('Add Pinterest link','multipurpose-portfolio'),
		'section'	=> 'multipurpose_portfolio_banner',
		'setting'	=> 'multipurpose_portfolio_pinterest_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('multipurpose_portfolio_youtube_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('multipurpose_portfolio_youtube_url',array(
		'label'	=> __('Add Youtube link','multipurpose-portfolio'),
		'section'	=> 'multipurpose_portfolio_banner',
		'setting'	=> 'multipurpose_portfolio_youtube_url',
		'type'	=> 'url'
	));

	//content Alignment
    $wp_customize->add_setting('multipurpose_portfolio_banner_alignment_option',array(
    'default' => 'Left Align',
        'sanitize_callback' => 'multipurpose_portfolio_sanitize_choices'
	));
	$wp_customize->add_control('multipurpose_portfolio_banner_alignment_option',array(
        'type' => 'radio',
        'label' => __('Banner Content Alignment','multipurpose-portfolio'),
        'section' => 'multipurpose_portfolio_banner',
        'choices' => array(
            'Center Align' => __('Center Align','multipurpose-portfolio'),
            'Left Align' => __('Left Align','multipurpose-portfolio'),
            'Right Align' => __('Right Align','multipurpose-portfolio'),
        ),
	) );

    //Banner excerpt
	$wp_customize->add_setting( 'multipurpose_portfolio_banner_excerpt', array(
		'default'              => 20,
		'sanitize_callback'    => 'multipurpose_portfolio_sanitize_float',
	) );
	$wp_customize->add_control( 'multipurpose_portfolio_banner_excerpt', array(
		'label'       => esc_html__( 'Banner Excerpt length','multipurpose-portfolio' ),
		'section'     => 'multipurpose_portfolio_banner',
		'type'        => 'number',
		'settings'    => 'multipurpose_portfolio_banner_excerpt',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('multipurpose_portfolio_banner_image_overlay',array(
        'default' => true,
        'sanitize_callback'	=> 'multipurpose_portfolio_sanitize_checkbox'
	));
	$wp_customize->add_control('multipurpose_portfolio_banner_image_overlay',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Banner Image Overlay','multipurpose-portfolio'),
      	'section' => 'multipurpose_portfolio_banner',
	));

	$wp_customize->add_setting( 'multipurpose_portfolio_banner_overlay_color', array(
	    'default' => '#fff',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'multipurpose_portfolio_banner_overlay_color', array(
	    'label' => __('Banner Overlay Color', 'multipurpose-portfolio'),
	    'section' => 'multipurpose_portfolio_banner',
  	)));

	//Opacity
	$wp_customize->add_setting('multipurpose_portfolio_banner_opacity',array(
      'default'              => 0.4,
      'sanitize_callback' => 'multipurpose_portfolio_sanitize_choices'
	));
	$wp_customize->add_control( 'multipurpose_portfolio_banner_opacity', array(
		'label'       => esc_html__( 'Banner Image Opacity','multipurpose-portfolio' ),
		'section'     => 'multipurpose_portfolio_banner',
		'type'        => 'select',
		'settings'    => 'multipurpose_portfolio_banner_opacity',
		'choices' => array(
	      '0' =>  esc_attr('0','multipurpose-portfolio'),
	      '0.1' =>  esc_attr('0.1','multipurpose-portfolio'),
	      '0.2' =>  esc_attr('0.2','multipurpose-portfolio'),
	      '0.3' =>  esc_attr('0.3','multipurpose-portfolio'),
	      '0.4' =>  esc_attr('0.4','multipurpose-portfolio'),
	      '0.5' =>  esc_attr('0.5','multipurpose-portfolio'),
	      '0.6' =>  esc_attr('0.6','multipurpose-portfolio'),
	      '0.7' =>  esc_attr('0.7','multipurpose-portfolio'),
	      '0.8' =>  esc_attr('0.8','multipurpose-portfolio'),
	      '0.9' =>  esc_attr('0.9','multipurpose-portfolio')
	  ),
	));

	$wp_customize->add_setting( 'multipurpose_portfolio_banner_button_label', array(
		'default' => __('ABOUT ME','multipurpose-portfolio'),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'multipurpose_portfolio_banner_button_label', array(
		'label' => esc_html__( 'Banner Button Label','multipurpose-portfolio' ),
		'section'     => 'multipurpose_portfolio_banner',
		'type'        => 'text',
		'settings'    => 'multipurpose_portfolio_banner_button_label'
	) );

	//Service Section
	$wp_customize->add_section('multipurpose_portfolio_services',array(
		'title'	=> __('Services Section','multipurpose-portfolio'),
		'description'	=> __('Add Services sections below.','multipurpose-portfolio'),
		'panel' => 'multipurpose_portfolio_panel_id',
	));

	$wp_customize->add_setting('multipurpose_portfolio_services_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('multipurpose_portfolio_services_title',array(
		'label'	=> __('Section Title','multipurpose-portfolio'),
		'section'	=> 'multipurpose_portfolio_services',
		'type'		=> 'text'
	));

	$categories = get_categories();
		$cat_posts = array();
			$i = 0;
			$cat_posts[]='Select';	
		foreach($categories as $category){
			if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_posts[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('multipurpose_portfolio_services_category',array(
		'default'	=> 'select',
		'sanitize_callback' => 'multipurpose_portfolio_sanitize_choices',
	));
	$wp_customize->add_control('multipurpose_portfolio_services_category',array(
		'type'    => 'select',
		'choices' => $cat_posts,
		'label' => __('Select Category to display service posts','multipurpose-portfolio'),
		'section' => 'multipurpose_portfolio_services',
	));

	//layout setting
	$wp_customize->add_section( 'multipurpose_portfolio_theme_layout', array(
    	'title' => __( 'Blog Settings', 'multipurpose-portfolio' ),   
		'priority' => null,
		'panel' => 'multipurpose_portfolio_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('multipurpose_portfolio_layout',array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'multipurpose_portfolio_sanitize_choices'
	) );
	$wp_customize->add_control(new Multipurpose_Portfolio_Image_Radio_Control($wp_customize, 'multipurpose_portfolio_layout', array(
        'type' => 'radio',
        'label' => esc_html__('Select Sidebar layout', 'multipurpose-portfolio'),
        'section' => 'multipurpose_portfolio_theme_layout',
        'settings' => 'multipurpose_portfolio_layout',
        'choices' => array(
            'Right Sidebar' => esc_url(get_template_directory_uri()) . '/images/layout3.png',
            'Left Sidebar' => esc_url(get_template_directory_uri()) . '/images/layout2.png',
            'One Column' => esc_url(get_template_directory_uri()) . '/images/layout1.png',
            'Three Columns' => esc_url(get_template_directory_uri()) . '/images/layout4.png',
            'Four Columns' => esc_url(get_template_directory_uri()) . '/images/layout5.png',
            'Grid Layout' => esc_url(get_template_directory_uri()) . '/images/layout6.png'
   	))));

   	$wp_customize->add_setting('multipurpose_portfolio_metafields_date',array(
       'default' => 'true',
       'sanitize_callback'	=> 'multipurpose_portfolio_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_portfolio_metafields_date',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Date ','multipurpose-portfolio'),
       'section' => 'multipurpose_portfolio_theme_layout'
    ));

    $wp_customize->add_setting('multipurpose_portfolio_metafields_author',array(
       'default' => 'true',
       'sanitize_callback'	=> 'multipurpose_portfolio_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_portfolio_metafields_author',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Author','multipurpose-portfolio'),
       'section' => 'multipurpose_portfolio_theme_layout'
    ));

    $wp_customize->add_setting('multipurpose_portfolio_metafields_comment',array(
       'default' => 'true',
       'sanitize_callback'	=> 'multipurpose_portfolio_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_portfolio_metafields_comment',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Comments','multipurpose-portfolio'),
       'section' => 'multipurpose_portfolio_theme_layout'
    ));

    $wp_customize->add_setting('multipurpose_portfolio_post_navigation',array(
       'default' => 'true',
       'sanitize_callback' => 'multipurpose_portfolio_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_portfolio_post_navigation',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Post Navigation','multipurpose-portfolio'),
       'section' => 'multipurpose_portfolio_theme_layout'
    ));

    $wp_customize->add_setting('multipurpose_portfolio_blog_post_content',array(
    	'default' => 'Excerpt Content',
        'sanitize_callback' => 'multipurpose_portfolio_sanitize_choices'
	));
	$wp_customize->add_control('multipurpose_portfolio_blog_post_content',array(
        'type' => 'radio',
        'label' => __('Blog Post Content Type','multipurpose-portfolio'),
        'section' => 'multipurpose_portfolio_theme_layout',
        'choices' => array(
            'No Content' => __('No Content','multipurpose-portfolio'),
            'Full Content' => __('Full Content','multipurpose-portfolio'),
            'Excerpt Content' => __('Excerpt Content','multipurpose-portfolio'),
        ),
	) );

    $wp_customize->add_setting( 'multipurpose_portfolio_post_excerpt_number', array(
		'default'              => 20,
		'sanitize_callback'	=> 'multipurpose_portfolio_sanitize_float'
	) );
	$wp_customize->add_control( 'multipurpose_portfolio_post_excerpt_number', array(
		'label'       => esc_html__( 'Blog Post Excerpt Number (Max 50)','multipurpose-portfolio' ),
		'section'     => 'multipurpose_portfolio_theme_layout',
		'type'        => 'number',
		'settings'    => 'multipurpose_portfolio_post_excerpt_number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
		'active_callback' => 'multipurpose_portfolio_excerpt_enabled'
	) );

	$wp_customize->add_setting( 'multipurpose_portfolio_button_excerpt_suffix', array(
		'default'   => '...',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'multipurpose_portfolio_button_excerpt_suffix', array(
		'label'       => esc_html__( 'Post Excerpt Suffix','multipurpose-portfolio' ),
		'section'     => 'multipurpose_portfolio_theme_layout',
		'type'        => 'text',
		'settings'    => 'multipurpose_portfolio_button_excerpt_suffix',
		'active_callback' => 'multipurpose_portfolio_excerpt_enabled'
	) );

	$wp_customize->add_setting( 'multipurpose_portfolio_feature_image_border_radius', array(
		'default'=> '0',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Multipurpose_Portfolio_WP_Customize_Range_Control( $wp_customize, 'multipurpose_portfolio_feature_image_border_radius', array(
        'label'  => __('Featured Image Border Radius','multipurpose-portfolio'),
        'section'  => 'multipurpose_portfolio_theme_layout',
        'description' => __('Measurement is in pixel.','multipurpose-portfolio'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
        ),
    )));

    $wp_customize->add_setting( 'multipurpose_portfolio_feature_image_shadow', array(
		'default'=> '0',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Multipurpose_Portfolio_WP_Customize_Range_Control( $wp_customize, 'multipurpose_portfolio_feature_image_shadow', array(
        'label'  => __('Featured Image Shadow','multipurpose-portfolio'),
        'section'  => 'multipurpose_portfolio_theme_layout',
        'description' => __('Measurement is in pixel.','multipurpose-portfolio'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
        ),
    )));

    $wp_customize->add_setting( 'multipurpose_portfolio_pagination_type', array(
        'default'			=> 'page-numbers',
        'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control( 'multipurpose_portfolio_pagination_type', array(
        'section' => 'multipurpose_portfolio_theme_layout',
        'type' => 'select',
        'label' => __( 'Blog Pagination Style', 'multipurpose-portfolio' ),
        'choices' => array(
            'page-numbers' => __('Number', 'multipurpose-portfolio' ),
            'next-prev' => __('Next/Prev', 'multipurpose-portfolio' ),
    )));

    $wp_customize->add_setting('multipurpose_portfolio_blog_nav_position',array(
        'default' => 'bottom',
        'sanitize_callback' => 'multipurpose_portfolio_sanitize_choices'
    ));
	$wp_customize->add_control('multipurpose_portfolio_blog_nav_position', array(
        'type' => 'select',
        'label' => __( 'Blog Post Navigation Position', 'multipurpose-portfolio' ),
        'section' => 'multipurpose_portfolio_theme_layout',
        'choices' => array(
            'top' => __('Top','multipurpose-portfolio'),
            'bottom' => __('Bottom','multipurpose-portfolio'),
            'both' => __('Both','multipurpose-portfolio')
        ),
    ));

	$wp_customize->add_section( 'multipurpose_portfolio_single_post_settings', array(
		'title' => __( 'Single Post Options', 'multipurpose-portfolio' ),
		'panel' => 'multipurpose_portfolio_panel_id',
	));

	$wp_customize->add_setting('multipurpose_portfolio_single_post_breadcrumb',array(
       'default' => 'true',
       'sanitize_callback' => 'multipurpose_portfolio_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_portfolio_single_post_breadcrumb',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Breadcrumb','multipurpose-portfolio'),
       'section' => 'multipurpose_portfolio_single_post_settings'
    ));

	$wp_customize->add_setting('multipurpose_portfolio_single_post_date',array(
       'default' => 'true',
       'sanitize_callback'	=> 'multipurpose_portfolio_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_portfolio_single_post_date',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Date','multipurpose-portfolio'),
       'section' => 'multipurpose_portfolio_single_post_settings'
    ));

    $wp_customize->add_setting('multipurpose_portfolio_single_post_author',array(
       'default' => 'true',
       'sanitize_callback'	=> 'multipurpose_portfolio_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_portfolio_single_post_author',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Author','multipurpose-portfolio'),
       'section' => 'multipurpose_portfolio_single_post_settings'
    ));

    $wp_customize->add_setting('multipurpose_portfolio_single_post_comment_no',array(
       'default' => 'true',
       'sanitize_callback'	=> 'multipurpose_portfolio_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_portfolio_single_post_comment_no',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Comment Number','multipurpose-portfolio'),
       'section' => 'multipurpose_portfolio_single_post_settings'
    ));

	$wp_customize->add_setting('multipurpose_portfolio_metafields_tags',array(
       'default' => 'true',
       'sanitize_callback'	=> 'multipurpose_portfolio_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_portfolio_metafields_tags',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Tags','multipurpose-portfolio'),
       'section' => 'multipurpose_portfolio_single_post_settings'
    ));

    $wp_customize->add_setting('multipurpose_portfolio_single_post_image',array(
       'default' => 'true',
       'sanitize_callback'	=> 'multipurpose_portfolio_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_portfolio_single_post_image',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Featured Image','multipurpose-portfolio'),
       'section' => 'multipurpose_portfolio_single_post_settings'
    ));

    $wp_customize->add_setting( 'multipurpose_portfolio_post_featured_image', array(
        'default' => 'in-content',
        'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control( 'multipurpose_portfolio_post_featured_image', array(
        'section' => 'multipurpose_portfolio_single_post_settings',
        'type' => 'radio',
        'label' => __( 'Featured Image Display Type', 'multipurpose-portfolio' ),
        'choices'		=> array(
            'banner'  => __('as Banner Image', 'multipurpose-portfolio'),
            'in-content' => __( 'as Featured Image', 'multipurpose-portfolio' ),
    )));

    $wp_customize->add_setting('multipurpose_portfolio_single_post_nav',array(
       'default' => 'true',
       'sanitize_callback'	=> 'multipurpose_portfolio_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_portfolio_single_post_nav',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Navigation','multipurpose-portfolio'),
       'section' => 'multipurpose_portfolio_single_post_settings'
    ));

    $wp_customize->add_setting( 'multipurpose_portfolio_single_post_prev_nav_text', array(
		'default' => __('Previous','multipurpose-portfolio' ),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'multipurpose_portfolio_single_post_prev_nav_text', array(
		'label' => esc_html__( 'Single Post Previous Nav text','multipurpose-portfolio' ),
		'section'     => 'multipurpose_portfolio_single_post_settings',
		'type'        => 'text',
		'settings'    => 'multipurpose_portfolio_single_post_prev_nav_text'
	) );

	$wp_customize->add_setting( 'multipurpose_portfolio_single_post_next_nav_text', array(
		'default' => __('Next','multipurpose-portfolio' ),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'multipurpose_portfolio_single_post_next_nav_text', array(
		'label' => esc_html__( 'Single Post Next Nav text','multipurpose-portfolio' ),
		'section'     => 'multipurpose_portfolio_single_post_settings',
		'type'        => 'text',
		'settings'    => 'multipurpose_portfolio_single_post_next_nav_text'
	) );

    $wp_customize->add_setting('multipurpose_portfolio_single_post_comment',array(
       'default' => 'true',
       'sanitize_callback'	=> 'multipurpose_portfolio_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_portfolio_single_post_comment',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post comment','multipurpose-portfolio'),
       'section' => 'multipurpose_portfolio_single_post_settings'
    ));

	$wp_customize->add_setting( 'multipurpose_portfolio_comment_width', array(
		'default'=> '100',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Multipurpose_Portfolio_WP_Customize_Range_Control( $wp_customize, 'multipurpose_portfolio_comment_width', array(
        'label'  => __('Comment textarea width','multipurpose-portfolio'),
        'section'  => 'multipurpose_portfolio_single_post_settings',
        'description' => __('Measurement is in %.','multipurpose-portfolio'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 100,
        ),
    )));

    $wp_customize->add_setting('multipurpose_portfolio_comment_title',array(
       'default' => __('Leave a Reply','multipurpose-portfolio' ),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('multipurpose_portfolio_comment_title',array(
       'type' => 'text',
       'label' => __('Comment form Title','multipurpose-portfolio'),
       'section' => 'multipurpose_portfolio_single_post_settings'
    ));

    $wp_customize->add_setting('multipurpose_portfolio_comment_submit_text',array(
       'default' => __('Post Comment','multipurpose-portfolio' ),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('multipurpose_portfolio_comment_submit_text',array(
       'type' => 'text',
       'label' => __('Comment Submit Button Label','multipurpose-portfolio'),
       'section' => 'multipurpose_portfolio_single_post_settings'
    ));

	$wp_customize->add_setting('multipurpose_portfolio_related_posts',array(
       'default' => true,
       'sanitize_callback'	=> 'multipurpose_portfolio_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_portfolio_related_posts',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Related Posts','multipurpose-portfolio'),
       'section' => 'multipurpose_portfolio_single_post_settings'
    ));

    $wp_customize->add_setting('multipurpose_portfolio_related_posts_title',array(
       'default' => __('You May Also Like','multipurpose-portfolio' ),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('multipurpose_portfolio_related_posts_title',array(
       'type' => 'text',
       'label' => __('Related Posts Title','multipurpose-portfolio'),
       'section' => 'multipurpose_portfolio_single_post_settings'
    ));

    $wp_customize->add_setting( 'multipurpose_portfolio_related_post_count', array(
		'default' => 3,
		'sanitize_callback'	=> 'multipurpose_portfolio_sanitize_float'
	) );
	$wp_customize->add_control( 'multipurpose_portfolio_related_post_count', array(
		'label' => esc_html__( 'Related Posts Count','multipurpose-portfolio' ),
		'section' => 'multipurpose_portfolio_single_post_settings',
		'type' => 'number',
		'settings' => 'multipurpose_portfolio_related_post_count',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 6,
		),
	) );

    $wp_customize->add_setting( 'multipurpose_portfolio_post_shown_by', array(
        'default' => 'categories',
        'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control( 'multipurpose_portfolio_post_shown_by', array(
        'section' => 'multipurpose_portfolio_single_post_settings',
        'type' => 'radio',
        'label' => __( 'Related Posts must be shown:', 'multipurpose-portfolio' ),
        'choices'		=> array(
            'categories'  => __('By Categories', 'multipurpose-portfolio'),
            'tags' => __( 'By Tags', 'multipurpose-portfolio' ),
    )));

	// Button option
	$wp_customize->add_section( 'multipurpose_portfolio_button_options', array(
		'title' =>  __( 'Button Options', 'multipurpose-portfolio' ),
		'panel' => 'multipurpose_portfolio_panel_id',
	));

    $wp_customize->add_setting( 'multipurpose_portfolio_blog_button_text', array(
		'default'   => __('Read Full','multipurpose-portfolio' ),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'multipurpose_portfolio_blog_button_text', array(
		'label'       => esc_html__( 'Blog Post Button Label','multipurpose-portfolio' ),
		'section'     => 'multipurpose_portfolio_button_options',
		'type'        => 'text',
		'settings'    => 'multipurpose_portfolio_blog_button_text'
	) );

	$wp_customize->add_setting('multipurpose_portfolio_button_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('multipurpose_portfolio_button_padding',array(
		'label'	=> esc_html__('Button Padding','multipurpose-portfolio'),
		'section'=> 'multipurpose_portfolio_button_options',
		'active_callback' => 'multipurpose_portfolio_button_enabled'
	));

	$wp_customize->add_setting('multipurpose_portfolio_top_button_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'multipurpose_portfolio_sanitize_float'
	));
	$wp_customize->add_control('multipurpose_portfolio_top_button_padding',array(
		'label'	=> __('Top','multipurpose-portfolio'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'multipurpose_portfolio_button_options',
		'type'=> 'number',
		'active_callback' => 'multipurpose_portfolio_button_enabled'
	));

	$wp_customize->add_setting('multipurpose_portfolio_bottom_button_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'multipurpose_portfolio_sanitize_float'
	));
	$wp_customize->add_control('multipurpose_portfolio_bottom_button_padding',array(
		'label'	=> __('Bottom','multipurpose-portfolio'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'multipurpose_portfolio_button_options',
		'type'=> 'number',
		'active_callback' => 'multipurpose_portfolio_button_enabled'
	));

	$wp_customize->add_setting('multipurpose_portfolio_left_button_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'multipurpose_portfolio_sanitize_float'
	));
	$wp_customize->add_control('multipurpose_portfolio_left_button_padding',array(
		'label'	=> __('Left','multipurpose-portfolio'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'multipurpose_portfolio_button_options',
		'type'=> 'number',
		'active_callback' => 'multipurpose_portfolio_button_enabled'
	));

	$wp_customize->add_setting('multipurpose_portfolio_right_button_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'multipurpose_portfolio_sanitize_float'
	));
	$wp_customize->add_control('multipurpose_portfolio_right_button_padding',array(
		'label'	=> __('Right','multipurpose-portfolio'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'multipurpose_portfolio_button_options',
		'type'=> 'number',
		'active_callback' => 'multipurpose_portfolio_button_enabled'
	));

	$wp_customize->add_setting( 'multipurpose_portfolio_button_border_radius', array(
		'default'=> 0,
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Multipurpose_Portfolio_WP_Customize_Range_Control( $wp_customize, 'multipurpose_portfolio_button_border_radius', array(
            'label'  => __('Border Radius','multipurpose-portfolio'),
            'section'  => 'multipurpose_portfolio_button_options',
            'description' => __('Measurement is in pixel.','multipurpose-portfolio'),
            'input_attrs' => array(
                'min' => 0,
                'max' => 50,
            ),
			'active_callback' => 'multipurpose_portfolio_button_enabled'
    )));

    //Sidebar setting
	$wp_customize->add_section( 'multipurpose_portfolio_sidebar_options', array(
    	'title'   => __( 'Sidebar options', 'multipurpose-portfolio'),
		'priority'   => null,
		'panel' => 'multipurpose_portfolio_panel_id'
	) );

	$wp_customize->add_setting('multipurpose_portfolio_single_page_layout',array(
        'default' => 'One Column',
        'sanitize_callback' => 'multipurpose_portfolio_sanitize_choices'
    ));
	$wp_customize->add_control('multipurpose_portfolio_single_page_layout', array(
        'type' => 'select',
        'label' => __( 'Single Page Layout', 'multipurpose-portfolio' ),
        'section' => 'multipurpose_portfolio_sidebar_options',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','multipurpose-portfolio'),
            'Right Sidebar' => __('Right Sidebar','multipurpose-portfolio'),
            'One Column' => __('One Column','multipurpose-portfolio')
        ),
    ));

    $wp_customize->add_setting('multipurpose_portfolio_single_post_layout',array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'multipurpose_portfolio_sanitize_choices'
    ));
	$wp_customize->add_control('multipurpose_portfolio_single_post_layout', array(
        'type' => 'select',
        'label' => __( 'Single Post Layout', 'multipurpose-portfolio' ),
        'section' => 'multipurpose_portfolio_sidebar_options',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','multipurpose-portfolio'),
            'Right Sidebar' => __('Right Sidebar','multipurpose-portfolio'),
            'One Column' => __('One Column','multipurpose-portfolio')
        ),
    ));

    //Advance Options
	$wp_customize->add_section( 'multipurpose_portfolio_advance_options', array(
    	'title' => __( 'Advance Options', 'multipurpose-portfolio' ),
		'priority'   => null,
		'panel' => 'multipurpose_portfolio_panel_id'
	) );

	$wp_customize->add_setting('multipurpose_portfolio_preloader',array(
       'default' => 'true',
       'sanitize_callback'	=> 'multipurpose_portfolio_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_portfolio_preloader',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Preloader','multipurpose-portfolio'),
       'section' => 'multipurpose_portfolio_advance_options'
    ));

    $wp_customize->add_setting( 'multipurpose_portfolio_preloader_color', array(
	    'default' => '#333333',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'multipurpose_portfolio_preloader_color', array(
  		'label' => __('Preloader Color', 'multipurpose-portfolio'),
	    'section' => 'multipurpose_portfolio_advance_options',
	    'settings' => 'multipurpose_portfolio_preloader_color',
  	)));

  	$wp_customize->add_setting( 'multipurpose_portfolio_preloader_bg_color', array(
	    'default' => '#ffffff',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'multipurpose_portfolio_preloader_bg_color', array(
  		'label' => __('Preloader Background Color', 'multipurpose-portfolio'),
	    'section' => 'multipurpose_portfolio_advance_options',
	    'settings' => 'multipurpose_portfolio_preloader_bg_color',
  	)));

  	$wp_customize->add_setting('multipurpose_portfolio_preloader_type',array(
        'default' => 'Square',
        'sanitize_callback' => 'multipurpose_portfolio_sanitize_choices'
	));
	$wp_customize->add_control('multipurpose_portfolio_preloader_type',array(
        'type' => 'radio',
        'label' => __('Preloader Type','multipurpose-portfolio'),
        'section' => 'multipurpose_portfolio_advance_options',
        'choices' => array(
            'Square' => __('Square','multipurpose-portfolio'),
            'Circle' => __('Circle','multipurpose-portfolio'),
        )
	) );

	$wp_customize->add_setting('multipurpose_portfolio_theme_layout_options',array(
        'default' => 'Default Theme',
        'sanitize_callback' => 'multipurpose_portfolio_sanitize_choices'
	));
	$wp_customize->add_control('multipurpose_portfolio_theme_layout_options',array(
        'type' => 'radio',
        'label' => __('Theme Layout','multipurpose-portfolio'),
        'section' => 'multipurpose_portfolio_advance_options',
        'choices' => array(
            'Default Theme' => __('Default Theme','multipurpose-portfolio'),
            'Container Theme' => __('Container Theme','multipurpose-portfolio'),
            'Box Container Theme' => __('Box Container Theme','multipurpose-portfolio'),
        ),
	) );

	//404 Page Option
	$wp_customize->add_section('multipurpose_portfolio_404_settings',array(
		'title'	=> __('404 Page & Search Result Settings','multipurpose-portfolio'),
		'priority'	=> null,
		'panel' => 'multipurpose_portfolio_panel_id',
	));

	$wp_customize->add_setting('multipurpose_portfolio_404_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('multipurpose_portfolio_404_title',array(
		'label'	=> __('404 Title','multipurpose-portfolio'),
		'section'	=> 'multipurpose_portfolio_404_settings',
		'type'		=> 'text'
	));	

	$wp_customize->add_setting('multipurpose_portfolio_404_button_label',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('multipurpose_portfolio_404_button_label',array(
		'label'	=> __('404 button Label','multipurpose-portfolio'),
		'section'	=> 'multipurpose_portfolio_404_settings',
		'type'		=> 'text'
	));	

	$wp_customize->add_setting('multipurpose_portfolio_search_result_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('multipurpose_portfolio_search_result_title',array(
		'label'	=> __('No Search Result Title','multipurpose-portfolio'),
		'section'	=> 'multipurpose_portfolio_404_settings',
		'type'		=> 'text'
	));	

	$wp_customize->add_setting('multipurpose_portfolio_search_result_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('multipurpose_portfolio_search_result_text',array(
		'label'	=> __('No Search Result Text','multipurpose-portfolio'),
		'section'	=> 'multipurpose_portfolio_404_settings',
		'type'		=> 'text'
	));	

	//Woocommerce Options
	$wp_customize->add_section('multipurpose_portfolio_woocommerce',array(
		'title'	=> __('WooCommerce Options','multipurpose-portfolio'),
		'panel' => 'multipurpose_portfolio_panel_id',
	));

	$wp_customize->add_setting('multipurpose_portfolio_shop_page_sidebar',array(
       'default' => true,
       'sanitize_callback' => 'multipurpose_portfolio_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_portfolio_shop_page_sidebar',array(
       'type' => 'checkbox',
       'label' => __('Enable Shop Page Sidebar','multipurpose-portfolio'),
       'section' => 'multipurpose_portfolio_woocommerce'
    ));

    $wp_customize->add_setting('multipurpose_portfolio_shop_page_navigation',array(
       'default' => true,
       'sanitize_callback' => 'multipurpose_portfolio_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_portfolio_shop_page_navigation',array(
       'type' => 'checkbox',
       'label' => __('Enable Shop Page Pagination','multipurpose-portfolio'),
       'section' => 'multipurpose_portfolio_woocommerce'
    ));

    $wp_customize->add_setting('multipurpose_portfolio_single_product_sidebar',array(
       'default' => true,
       'sanitize_callback'	=> 'multipurpose_portfolio_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_portfolio_single_product_sidebar',array(
       'type' => 'checkbox',
       'label' => __('Enable Single Product Page Sidebar','multipurpose-portfolio'),
       'section' => 'multipurpose_portfolio_woocommerce'
    ));

    $wp_customize->add_setting('multipurpose_portfolio_single_related_products',array(
       'default' => true,
       'sanitize_callback' => 'multipurpose_portfolio_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_portfolio_single_related_products',array(
       'type' => 'checkbox',
       'label' => __('Enable Related Products','multipurpose-portfolio'),
       'section' => 'multipurpose_portfolio_woocommerce'
    ));

    $wp_customize->add_setting('multipurpose_portfolio_products_per_page',array(
		'default'=> '9',
		'sanitize_callback'	=> 'multipurpose_portfolio_sanitize_float'
	));
	$wp_customize->add_control('multipurpose_portfolio_products_per_page',array(
		'label'	=> __('Products Per Page','multipurpose-portfolio'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'multipurpose_portfolio_woocommerce',
		'type'=> 'number',
	));

	$wp_customize->add_setting('multipurpose_portfolio_products_per_row',array(
		'default'=> '3',
		'sanitize_callback'	=> 'multipurpose_portfolio_sanitize_choices'
	));
	$wp_customize->add_control('multipurpose_portfolio_products_per_row',array(
		'label'	=> __('Products Per Row','multipurpose-portfolio'),
		'choices' => array(
            '2' => '2',
			'3' => '3',
			'4' => '4',
        ),
		'section'=> 'multipurpose_portfolio_woocommerce',
		'type'=> 'select',
	));

	$wp_customize->add_setting('multipurpose_portfolio_product_border',array(
       'default' => true,
       'sanitize_callback'	=> 'multipurpose_portfolio_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_portfolio_product_border',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide product border','multipurpose-portfolio'),
       'section' => 'multipurpose_portfolio_woocommerce',
    ));

    $wp_customize->add_setting('multipurpose_portfolio_product_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('multipurpose_portfolio_product_padding',array(
		'label'	=> esc_html__('Product Padding','multipurpose-portfolio'),
		'section'=> 'multipurpose_portfolio_woocommerce',
	));

	$wp_customize->add_setting( 'multipurpose_portfolio_product_top_padding',array(
		'default' => 10,
		'sanitize_callback' => 'multipurpose_portfolio_sanitize_float'
	));
	$wp_customize->add_control('multipurpose_portfolio_product_top_padding', array(
		'label' => esc_html__( 'Top','multipurpose-portfolio' ),
		'type' => 'number',
		'section' => 'multipurpose_portfolio_woocommerce',
		'input_attrs' => array(
			'min' => -1,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('multipurpose_portfolio_product_bottom_padding',array(
		'default' => 10,
		'sanitize_callback' => 'multipurpose_portfolio_sanitize_float'
	));
	$wp_customize->add_control('multipurpose_portfolio_product_bottom_padding', array(
		'label' => esc_html__( 'Bottom','multipurpose-portfolio' ),
		'type' => 'number',
		'section' => 'multipurpose_portfolio_woocommerce',
		'input_attrs' => array(
			'min' => -1,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('multipurpose_portfolio_product_left_padding',array(
		'default' => 10,
		'sanitize_callback' => 'multipurpose_portfolio_sanitize_float'
	));
	$wp_customize->add_control('multipurpose_portfolio_product_left_padding', array(
		'label' => esc_html__( 'Left','multipurpose-portfolio' ),
		'type' => 'number',
		'section' => 'multipurpose_portfolio_woocommerce',
		'input_attrs' => array(
			'min' => -1,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'multipurpose_portfolio_product_right_padding',array(
		'default' => 10,
		'sanitize_callback' => 'multipurpose_portfolio_sanitize_float'
	));
	$wp_customize->add_control('multipurpose_portfolio_product_right_padding', array(
		'label' => esc_html__( 'Right','multipurpose-portfolio' ),
		'type' => 'number',
		'section' => 'multipurpose_portfolio_woocommerce',
		'input_attrs' => array(
			'min' => -1,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'multipurpose_portfolio_product_border_radius',array(
		'default' => '0',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control( new Multipurpose_Portfolio_WP_Customize_Range_Control( $wp_customize, 'multipurpose_portfolio_product_border_radius', array(
        'label'  => __('Product Border Radius','multipurpose-portfolio'),
        'section'  => 'multipurpose_portfolio_woocommerce',
        'description' => __('Measurement is in pixel.','multipurpose-portfolio'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
        )
    )));

	$wp_customize->add_setting('multipurpose_portfolio_product_button_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('multipurpose_portfolio_product_button_padding',array(
		'label'	=> esc_html__('Product Button Padding','multipurpose-portfolio'),
		'section'=> 'multipurpose_portfolio_woocommerce',
	));

	$wp_customize->add_setting( 'multipurpose_portfolio_product_button_top_padding',array(
		'default' => 10,
		'sanitize_callback' => 'multipurpose_portfolio_sanitize_float'
	));
	$wp_customize->add_control('multipurpose_portfolio_product_button_top_padding', array(
		'label' => esc_html__( 'Top','multipurpose-portfolio' ),
		'type' => 'number',
		'section' => 'multipurpose_portfolio_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('multipurpose_portfolio_product_button_bottom_padding',array(
		'default' => 10,
		'sanitize_callback' => 'multipurpose_portfolio_sanitize_float'
	));
	$wp_customize->add_control('multipurpose_portfolio_product_button_bottom_padding', array(
		'label' => esc_html__( 'Bottom','multipurpose-portfolio' ),
		'type' => 'number',
		'section' => 'multipurpose_portfolio_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('multipurpose_portfolio_product_button_left_padding',array(
		'default' => 15,
		'sanitize_callback' => 'multipurpose_portfolio_sanitize_float'
	));
	$wp_customize->add_control('multipurpose_portfolio_product_button_left_padding', array(
		'label' => esc_html__( 'Left','multipurpose-portfolio' ),
		'type' => 'number',
		'section' => 'multipurpose_portfolio_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'multipurpose_portfolio_product_button_right_padding',array(
		'default' => 15,
		'sanitize_callback' => 'multipurpose_portfolio_sanitize_float'
	));
	$wp_customize->add_control('multipurpose_portfolio_product_button_right_padding', array(
		'label' => esc_html__( 'Right','multipurpose-portfolio' ),
		'type' => 'number',
		'section' => 'multipurpose_portfolio_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'multipurpose_portfolio_product_button_border_radius',array(
		'default' => '0',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control( new Multipurpose_Portfolio_WP_Customize_Range_Control( $wp_customize, 'multipurpose_portfolio_product_button_border_radius', array(
        'label'  => __('Product Button Border Radius','multipurpose-portfolio'),
        'section'  => 'multipurpose_portfolio_woocommerce',
        'description' => __('Measurement is in pixel.','multipurpose-portfolio'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
        )
    )));

    $wp_customize->add_setting('multipurpose_portfolio_product_sale_position',array(
        'default' => 'Right',
        'sanitize_callback' => 'multipurpose_portfolio_sanitize_choices'
	));
	$wp_customize->add_control('multipurpose_portfolio_product_sale_position',array(
        'type' => 'radio',
        'label' => __('Product Sale Position','multipurpose-portfolio'),
        'section' => 'multipurpose_portfolio_woocommerce',
        'choices' => array(
            'Left' => __('Left','multipurpose-portfolio'),
            'Right' => __('Right','multipurpose-portfolio'),
        ),
	) );

    $wp_customize->add_setting('multipurpose_portfolio_product_sale_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('multipurpose_portfolio_product_sale_padding',array(
		'label'	=> esc_html__('Product Sale Padding','multipurpose-portfolio'),
		'section'=> 'multipurpose_portfolio_woocommerce',
	));

	$wp_customize->add_setting( 'multipurpose_portfolio_product_sale_top_padding',array(
		'default' => 0,
		'sanitize_callback' => 'multipurpose_portfolio_sanitize_float'
	));
	$wp_customize->add_control('multipurpose_portfolio_product_sale_top_padding', array(
		'label' => esc_html__( 'Top','multipurpose-portfolio' ),
		'type' => 'number',
		'section' => 'multipurpose_portfolio_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('multipurpose_portfolio_product_sale_bottom_padding',array(
		'default' => 0,
		'sanitize_callback' => 'multipurpose_portfolio_sanitize_float'
	));
	$wp_customize->add_control('multipurpose_portfolio_product_sale_bottom_padding', array(
		'label' => esc_html__( 'Bottom','multipurpose-portfolio' ),
		'type' => 'number',
		'section' => 'multipurpose_portfolio_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('multipurpose_portfolio_product_sale_left_padding',array(
		'default' => 0,
		'sanitize_callback' => 'multipurpose_portfolio_sanitize_float'
	));
	$wp_customize->add_control('multipurpose_portfolio_product_sale_left_padding', array(
		'label' => esc_html__( 'Left','multipurpose-portfolio' ),
		'type' => 'number',
		'section' => 'multipurpose_portfolio_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('multipurpose_portfolio_product_sale_right_padding',array(
		'default' => 0,
		'sanitize_callback' => 'multipurpose_portfolio_sanitize_float'
	));
	$wp_customize->add_control('multipurpose_portfolio_product_sale_right_padding', array(
		'label' => esc_html__( 'Right','multipurpose-portfolio' ),
		'type' => 'number',
		'section' => 'multipurpose_portfolio_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'multipurpose_portfolio_product_sale_border_radius',array(
		'default' => '50',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control( new Multipurpose_Portfolio_WP_Customize_Range_Control( $wp_customize, 'multipurpose_portfolio_product_sale_border_radius', array(
        'label'  => __('Product Sale Border Radius','multipurpose-portfolio'),
        'section'  => 'multipurpose_portfolio_woocommerce',
        'description' => __('Measurement is in pixel.','multipurpose-portfolio'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
        )
    )));

	//footer text
	$wp_customize->add_section('multipurpose_portfolio_footer_section',array(
		'title'	=> __('Footer Section','multipurpose-portfolio'),
		'panel' => 'multipurpose_portfolio_panel_id'
	));

	$wp_customize->add_setting('multipurpose_portfolio_hide_scroll',array(
        'default' => 'true',
        'sanitize_callback'	=> 'multipurpose_portfolio_sanitize_checkbox'
	));
	$wp_customize->add_control('multipurpose_portfolio_hide_scroll',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Back To Top','multipurpose-portfolio'),
      	'section' => 'multipurpose_portfolio_footer_section',
	));

	$wp_customize->add_setting('multipurpose_portfolio_back_to_top',array(
        'default' => 'Right',
        'sanitize_callback' => 'multipurpose_portfolio_sanitize_choices'
	));
	$wp_customize->add_control('multipurpose_portfolio_back_to_top',array(
        'type' => 'radio',
        'label' => __('Back to Top Alignment','multipurpose-portfolio'),
        'section' => 'multipurpose_portfolio_footer_section',
        'choices' => array(
            'Left' => __('Left','multipurpose-portfolio'),
            'Right' => __('Right','multipurpose-portfolio'),
            'Center' => __('Center','multipurpose-portfolio'),
        ),
	) );

	$wp_customize->add_setting('multipurpose_portfolio_footer_bg_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'multipurpose_portfolio_footer_bg_color', array(
		'label'    => __('Footer Background Color', 'multipurpose-portfolio'),
		'section'  => 'multipurpose_portfolio_footer_section',
	)));

	$wp_customize->add_setting('multipurpose_portfolio_footer_bg_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'multipurpose_portfolio_footer_bg_image',array(
        'label' => __('Footer Background Image','multipurpose-portfolio'),
        'section' => 'multipurpose_portfolio_footer_section'
	)));

	$wp_customize->add_setting('multipurpose_portfolio_footer_widget',array(
        'default'           => '4',
        'sanitize_callback' => 'multipurpose_portfolio_sanitize_choices',
    ));
    $wp_customize->add_control('multipurpose_portfolio_footer_widget',array(
        'type'        => 'radio',
        'label'       => __('No. of Footer columns', 'multipurpose-portfolio'),
        'section'     => 'multipurpose_portfolio_footer_section',
        'description' => __('Select the number of footer columns and add your widgets in the footer.', 'multipurpose-portfolio'),
        'choices' => array(
            '1'   => __('One column', 'multipurpose-portfolio'),
            '2'  => __('Two columns', 'multipurpose-portfolio'),
            '3' => __('Three columns', 'multipurpose-portfolio'),
            '4' => __('Four columns', 'multipurpose-portfolio')
        ),
    )); 

    $wp_customize->add_setting('multipurpose_portfolio_copyright_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('multipurpose_portfolio_copyright_padding',array(
		'label'	=> esc_html__('Copyright Padding','multipurpose-portfolio'),
		'section'=> 'multipurpose_portfolio_footer_section',
	));

    $wp_customize->add_setting('multipurpose_portfolio_top_copyright_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'multipurpose_portfolio_sanitize_float'
	));
	$wp_customize->add_control('multipurpose_portfolio_top_copyright_padding',array(
		'description'	=> __('Top','multipurpose-portfolio'),
		'input_attrs' => array(
            'step' => 1,
			'min' => 0,
			'max' => 50,
        ),
		'section'=> 'multipurpose_portfolio_footer_section',
		'type'=> 'number'
	));

	$wp_customize->add_setting('multipurpose_portfolio_bottom_copyright_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'multipurpose_portfolio_sanitize_float'
	));
	$wp_customize->add_control('multipurpose_portfolio_bottom_copyright_padding',array(
		'description'	=> __('Bottom','multipurpose-portfolio'),
		'input_attrs' => array(
            'step' => 1,
			'min' => 0,
			'max' => 50,
        ),
		'section'=> 'multipurpose_portfolio_footer_section',
		'type'=> 'number'
	));

	$wp_customize->add_setting('multipurpose_portfolio_copyright_alignment',array(
        'default' => 'center',
        'sanitize_callback' => 'multipurpose_portfolio_sanitize_choices'
	));
	$wp_customize->add_control('multipurpose_portfolio_copyright_alignment',array(
        'type' => 'radio',
        'label' => __('Copyright Alignment','multipurpose-portfolio'),
        'section' => 'multipurpose_portfolio_footer_section',
        'choices' => array(
            'left' => __('Left','multipurpose-portfolio'),
            'right' => __('Right','multipurpose-portfolio'),
            'center' => __('Center','multipurpose-portfolio'),
        ),
	) );

	$wp_customize->add_setting( 'multipurpose_portfolio_copyright_font_size', array(
		'default'=> '15',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Multipurpose_Portfolio_WP_Customize_Range_Control( $wp_customize, 'multipurpose_portfolio_copyright_font_size', array(
        'label'  => __('Copyright Font Size','multipurpose-portfolio'),
        'section'  => 'multipurpose_portfolio_footer_section',
        'description' => __('Measurement is in pixel.','multipurpose-portfolio'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
        )
    )));
	
	$wp_customize->add_setting('multipurpose_portfolio_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('multipurpose_portfolio_text',array(
		'label'	=> __('Copyright Text','multipurpose-portfolio'),
		'description'	=> __('Add some text for footer like copyright etc.','multipurpose-portfolio'),
		'section'	=> 'multipurpose_portfolio_footer_section',
		'type'		=> 'text'
	));	
}
add_action( 'customize_register', 'multipurpose_portfolio_customize_register' );	

load_template( ABSPATH . 'wp-includes/class-wp-customize-control.php' );

// logo resize
load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

class Multipurpose_Portfolio_Image_Radio_Control extends WP_Customize_Control {

    public function render_content() {
 
        if (empty($this->choices))
            return;
 
        $name = '_customize-radio-' . $this->id;
        ?>
        <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
        <ul class="controls" id='multipurpose-portfolio-img-container'>
            <?php
            foreach ($this->choices as $value => $label) :
                $class = ($this->value() == $value) ? 'multipurpose-portfolio-radio-img-selected multipurpose-portfolio-radio-img-img' : 'multipurpose-portfolio-radio-img-img';
                ?>
                <li style="display: inline;">
                    <label>
                        <input <?php $this->link(); ?>style = 'display:none' type="radio" value="<?php echo esc_attr($value); ?>" name="<?php echo esc_attr($name); ?>" <?php
                          	$this->link();
                          	checked($this->value(), $value);
                          	?> />
                        <img role="img" src='<?php echo esc_url($label); ?>' class='<?php echo esc_attr($class); ?>' />
                    </label>
                </li>
                <?php
            endforeach;
            ?>
        </ul>
        <?php
    } 
}

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Multipurpose_Portfolio_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Multipurpose_Portfolio_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Multipurpose_Portfolio_Customize_Section_Pro(
			$manager,
			'multipurpose_portfolio_pro_link',
				array(
					'priority'   => 9,
					'title'    => esc_html__( 'Portfolio Pro', 'multipurpose-portfolio' ),
					'pro_text' => esc_html__( 'Go Pro', 'multipurpose-portfolio' ),
					'pro_url'  => esc_url('https://www.themesglance.com/themes/wordpress-portfolio-themes/')
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'multipurpose-portfolio-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'multipurpose-portfolio-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Multipurpose_Portfolio_Customize::get_instance();