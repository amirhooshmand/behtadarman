<?php  
	/**
	 * The template created for displaying header wishlist options when woocommerce plugin is installed 
	 *
	 * @version 1.0.7
	 * @since 1.4.0
  	 * last changes in 2.2.4
	 */

	// section wishlist
	Kirki::add_section( 'wishlist', array(
	    'title'          => esc_html__( 'Wishlist', 'xstore-core' ),
	    'panel' => 'header-builder',
	    'icon' => 'dashicons-heart'
		) );

		// content separator
		Kirki::add_field( 'et_kirki_options', array(
			'type'        => 'custom',
			'settings'    => 'wishlist_content_separator',
			'section'     => 'wishlist',
			'default'     => $separators['content'],
			'priority'    => 10, 
		) );

		// wishlist_style
		Kirki::add_field( 'et_kirki_options', array(
			'type'        => 'radio-image',
			'settings'    => 'wishlist_style_et-desktop',
			'label'       => $strings['label']['style'],
			'description' => esc_html__( 'Take a look on the video tutorial "How to ..." set up wishlist style2 and style3 ', 'xstore-core' ),
			'section'     => 'wishlist',
			'default'     => 'type1',
			'choices'     => et_b_element_styles('wishlist'),
			'transport' => 'postMessage',
			'partial_refresh' => array(
				'wishlist_style_et-desktop' => array(
					'selector'  => '.et_b_header-wishlist.et_element-top-level',
					'render_callback' => 'header_wishlist_callback'
				),
			),
			'js_vars'     => array(
				array(
					'element'  => '.et_b_header-wishlist.et_element-top-level',
					'function' => 'toggleClass',
					'class' => 'wishlist-type1',
					'value' => 'type1'
				),
				array(
					'element'  => '.et_b_header-wishlist.et_element-top-level',
					'function' => 'toggleClass',
					'class' => 'wishlist-type2',
					'value' => 'type2'
				),
				array(
					'element'  => '.et_b_header-wishlist.et_element-top-level',
					'function' => 'toggleClass',
					'class' => 'wishlist-type3',
					'value' => 'type3'
				),
			),
		) );

		// wishlist_icon
		Kirki::add_field( 'et_kirki_options', array(
			'type'        => 'radio-image',
			'settings'    => 'wishlist_icon_et-desktop',
			'label'       => $strings['label']['icon'],
			'description' => $strings['description']['icons_style'],
			'section'     => 'wishlist',
			'default'     => 'type1',
			'choices'     => array(
				'type1'   => ETHEME_CODE_CUSTOMIZER_IMAGES . '/header/wishlist/Wishlist-1.svg',
				'type2'   => ETHEME_CODE_CUSTOMIZER_IMAGES . '/header/wishlist/Wishlist-2.svg',
				'custom'  => ETHEME_CODE_CUSTOMIZER_IMAGES . '/global/icon-custom.svg',
				'none'    => ETHEME_CODE_CUSTOMIZER_IMAGES . '/global/icon-none.svg' 
			),
			'transport' => 'postMessage',
			'partial_refresh' => array(
				'wishlist_icon' => array(
					'selector'        => '.et_b_header-wishlist > a .et_b-icon .et-svg',
					'render_callback' => function() {
						global $et_wishlist_icons;
						$type = get_theme_mod('wishlist_icon_et-desktop');
						if ( $type == 'custom' ) {
							return get_theme_mod('wishlist_icon_custom_et-desktop');
						}
						return $et_wishlist_icons['light'][$type];
					},
				),
			),
		) );

		// wishlist_icon_custom
		Kirki::add_field( 'et_kirki_options', array (
			'type'     => 'code',
			'settings' => 'wishlist_icon_custom_et-desktop',
			'label'    => $strings['label']['custom_icon_svg'],
			'section'  => 'wishlist',
			'default'  => '',
			'choices'  => array(
				'language' => 'html'
			),
			'active_callback' => array(
				array(
					'setting'  => 'wishlist_icon_et-desktop',
					'operator' => '==',
					'value'    => 'custom',
				),
			),
			'transport' => 'postMessage',
			'js_vars' => array(
				array(
					'element'  => '.et_b_header-wishlist > a .et_b-icon .et-svg',
					'function' => 'html',
				),
			),
		) );

		// wishlist_icon_zoom  
		Kirki::add_field( 'et_kirki_options', array(
			'type'        => 'slider',
			'settings'    => 'wishlist_icon_zoom_et-desktop',
			'label'       => $strings['label']['icons_zoom'],
			'section'     => 'wishlist',
			'default'     => 1.3,
			'choices'     => array(
				'min'  => '.7',
				'max'  => '3',
				'step' => '.1',
			),
			'active_callback' => array(
				array(
					'setting'  => 'wishlist_icon_et-desktop',
					'operator' => '!=',
					'value'    => 'none',
				),
			),
			'transport' => 'auto',
			'output' => array(
				array(
					'element' => '.et_b_header-wishlist.et_element-top-level > a svg',
					'property' => 'width',
					'units' => 'em'
				),
				array(
					'element' => '.et_b_header-wishlist.et_element-top-level > a svg',
					'property' => 'height',
					'units' => 'em'
				)
			)
		) );

		// wishlist_icon_zoom
		Kirki::add_field( 'et_kirki_options', array(
			'type'        => 'slider',
			'settings'    => 'wishlist_icon_zoom_et-mobile',
			'label'       => $strings['label']['icons_zoom'],
			'section'     => 'wishlist',
			'default'     => 1.4,
			'choices'     => array(
				'min'  => '.7',
				'max'  => '3',
				'step' => '.1',
			),
			'active_callback' => array(
				array(
					'setting'  => 'wishlist_icon_et-mobile',
					'operator' => '!=',
					'value'    => 'none',
				),
			),
			'transport' => 'auto',
			'output' => array(
				array(
					'element' => '.mobile-header-wrapper .et_b_header-wishlist.et_element-top-level > a svg',
					'property' => 'width',
					'units' => 'em'
				),
				array(
					'element' => '.mobile-header-wrapper .et_b_header-wishlist.et_element-top-level > a svg',
					'property' => 'height',
					'units' => 'em'
				)
			)
		) );

		// wishlist_label
		Kirki::add_field( 'et_kirki_options', array(
			'type'        => 'toggle',
			'settings'    => 'wishlist_label_et-desktop',
			'label'       => $strings['label']['show_title'],
			'section'     => 'wishlist',
			'default'     => '1',
			'transport' => 'postMessage',
			'js_vars'     => array(
				array(
					'element'  => '.et_b_header-wishlist.et_element-top-level > a .et-element-label',
					'function' => 'toggleClass',
					'class' => 'dt-hide',
					'value' => false
				),
			),
		) );

		// wishlist_label
		Kirki::add_field( 'et_kirki_options', array(
			'type'        => 'toggle',
			'settings'    => 'wishlist_label_et-mobile',
			'label'       => $strings['label']['show_title'],
			'section'     => 'wishlist',
			'default'     => '0',
			'transport' => 'postMessage',
			'js_vars'     => array(
				array(
					'element'  => '.et_b_header-wishlist.et_element-top-level > a .et-element-label',
					'function' => 'toggleClass',
					'class' => 'mob-hide',
					'value' => false
				),
			),
		) );

		// wishlist_label_custom
		Kirki::add_field( 'et_kirki_options', array (
			'type'     => 'text',
			'settings' => 'wishlist_label_custom_et-desktop',
			'section'  => 'wishlist',
			'default'  => esc_html__( 'Wishlist', 'xstore-core' ),
			'transport' => 'postMessage',
			'js_vars' => array(
				array(
					'element'  => '.et_b_header-wishlist > a .et-element-label',
					'function' => 'html',
				),
			),
		) );

		// wishlist_content_type
		Kirki::add_field( 'et_kirki_options', array(
			'type'        => 'radio-buttonset',
			'settings'    => 'wishlist_content_type_et-desktop',
			'label'       => esc_html__( 'Mini-wishlist type', 'xstore-core' ),
			'section'     => 'wishlist',
			'default'     => 'dropdown',
			'multiple'    => 1,
			'choices'     => array(
				'none' => esc_html__( 'None', 'xstore-core' ),
				'dropdown' => esc_html__( 'Dropdown', 'xstore-core' ),
				'off_canvas' => esc_html__( 'Off-Canvas', 'xstore-core' ),
			),
			'transport' => 'postMessage',
			'partial_refresh' => array(
				'wishlist_content_type_et-desktop' => array(
					'selector'  => '.header-wrapper .et_b_header-wishlist.et_element-top-level',
					'render_callback' => 'header_wishlist_callback'
				),
			),
			'js_vars'     => array(
				array(
					'element'  => '.header-wrapper .et_b_header-wishlist.et_element-top-level',
					'function' => 'toggleClass',
					'class' => 'et-content-toTop',
					'value' => 'dropdown'
				),
				array(
					'element'  => '.header-wrapper .et_b_header-wishlist.et_element-top-level',
					'function' => 'toggleClass',
					'class' => 'et-content_toggle',
					'value' => 'off_canvas'
				),
				array(
					'element'  => '.header-wrapper .et_b_header-wishlist.et_element-top-level',
					'function' => 'toggleClass',
					'class' => 'et-off-canvas',
					'value' => 'off_canvas'
				),
			),
		) );

		// wishlist_content_type 
		Kirki::add_field( 'et_kirki_options', array(
			'type'        => 'radio-buttonset',
			'settings'    => 'wishlist_content_type_et-mobile',
			'label'       => esc_html__( 'Mini-wishlist type', 'xstore-core' ),
			'section'     => 'wishlist',
			'default'     => 'off_canvas',
			'multiple'    => 1,
			'choices'     => array(
				'none' => esc_html__( 'None', 'xstore-core' ),
				'off_canvas' => esc_html__( 'Off-Canvas', 'xstore-core' ),
			),
			'transport' => 'postMessage',
			'partial_refresh' => array(
				'wishlist_content_type_et-mobile' => array(
					'selector'  => '.mobile-header-wrapper .et_b_header-wishlist.et_element-top-level',
					'render_callback' => 'header_wishlist_callback'
				),
			),
			'js_vars'     => array(
				array(
					'element'  => '.mobile-header-wrapper .et_b_header-wishlist.et_element-top-level',
					'function' => 'toggleClass',
					'class' => 'et-content-toTop',
					'value' => 'dropdown'
				),
				array(
					'element'  => '.mobile-header-wrapper .et_b_header-wishlist.et_element-top-level',
					'function' => 'toggleClass',
					'class' => 'et-content_toggle',
					'value' => 'off_canvas'
				),
				array(
					'element'  => '.mobile-header-wrapper .et_b_header-wishlist.et_element-top-level',
					'function' => 'toggleClass',
					'class' => 'et-off-canvas',
					'value' => 'off_canvas'
				),
			),
		) );

		// wishlist_link_to
		Kirki::add_field( 'et_kirki_options', array(
			'type'        => 'select',
			'settings'    => 'wishlist_link_to',
			'label'       => esc_html__( 'Link to', 'xstore-core' ),
			'section'     => 'wishlist',
			'default'     => 'wishlist_url',
			'priority'    => 10,
			'choices'     => array(
				'wishlist_url' => esc_html__( 'Wishlist page', 'xstore-core' ),
				'custom_url' => $strings['label']['custom_link'],
			),
			'transport' => 'postMessage',
			'partial_refresh' => array(
				'wishlist_link_to' => array(
					'selector'  => '.et_b_header-wishlist.et_element-top-level',
					'render_callback' => 'header_wishlist_callback'
				),
			),
			'active_callback' => function() {
				if ( get_theme_mod( 'wishlist_content_type_et-desktop', 'dropdown' ) != 'none' ) {
					return true;
				}
				return false;
			}
		) );

		// wishlist_custom_url
		Kirki::add_field( 'et_kirki_options', array(
			'type'     => 'link',
			'settings' => 'wishlist_custom_url',
			'label'    => $strings['label']['custom_link'],
			'section'  => 'wishlist',
			'default'  => '#',
			'active_callback' => array(
				array(
					'setting'  => 'wishlist_link_to',
					'operator' => '==',
					'value'    => 'custom_url',
				),
			),
			'transport' => 'postMessage',
			'js_vars' => array(
				array(
					'element'  => '.et_b_header-wishlist > a',
					'attr' => 'href',
					'function' => 'html',
				),
			),
		) );

		// mini-wishlist-items-count
		Kirki::add_field( 'et_kirki_options', array(
			'type'        => 'slider',
			'settings'    => 'mini-wishlist-items-count',
			'label'       => esc_html__( 'Number of products in mini-wishlist', 'xstore-core' ),
			'section'     => 'wishlist',
			'default'     => Kirki::get_option('mini-cart-items-count', '3'),
			'choices'     => array(
				'min'  => 1,
				'max'  => 15,
				'step' => 1,
			),
			'transport' => 'postMessage',
			'partial_refresh' => array(
				'mini-wishlist-items-count' => array(
					'selector'  => '.et_b_header-wishlist.et_element-top-level',
					'render_callback' => 'header_wishlist_callback'
				),
			),
		) );

		// content separator 
		Kirki::add_field( 'et_kirki_options', array(
			'type'        => 'custom',
			'settings'    => 'wishlist_quantity_separator',
			'section'     => 'wishlist',
			'default'     => '<div style="'.$sep_style.'"><span class="dashicons dashicons-image-filter"></span> <span style="padding-left: 3px;">' . esc_html__( 'Quantity options', 'xstore-core' ) . '</span></div>',
			'priority'    => 10,
		) );

		// wishlist_quantity
		Kirki::add_field( 'et_kirki_options', array(
			'type'        => 'toggle',
			'settings'    => 'wishlist_quantity_et-desktop',
			'label'       => esc_html__( 'Show wishlist quantity', 'xstore-core' ),
			'section'     => 'wishlist',
			'default'     => '1',
			'transport' => 'postMessage',
			'partial_refresh' => array(
				'wishlist_quantity_et-desktop' => array(
					'selector'  => '.et_b_header-wishlist.et_element-top-level',
					'render_callback' => 'header_wishlist_callback'
				),
			),
		) );

		// wishlist_quantity_position
		Kirki::add_field( 'theme_config_id', array(
			'type'        => 'radio-buttonset',
			'settings'    => 'wishlist_quantity_position_et-desktop',
			'label'       => esc_html__( 'Label position', 'xstore-core' ),
			'section'     => 'wishlist',
			'default'     => 'right',
			'multiple'    => 1,
			'choices'     => array(
				'top' => esc_html__( 'Top', 'xstore-core' ),
				'right' => esc_html__( 'Right', 'xstore-core' ),
			),
			'active_callback' => array(
				array(
					'setting'  => 'wishlist_quantity_et-desktop',
					'operator' => '==',
					'value'    => 1,
				),
			),
			'transport' => 'postMessage',
			'js_vars'     => array(
				array(
					'element'  => '.et_b_header-wishlist.et_element-top-level',
					'function' => 'toggleClass',
					'class' => 'et-quantity-right',
					'value' => 'right'
				),
				array(
					'element'  => '.et_b_header-wishlist.et_element-top-level',
					'function' => 'toggleClass',
					'class' => 'et-quantity-top',
					'value' => 'top'
				),
			),
		) );

		// wishlist_quantity_size
		Kirki::add_field( 'et_kirki_options', array(
			'type'        => 'slider',
			'settings'    => 'wishlist_quantity_size_et-desktop',
			'label'       => esc_html__( 'Quantity font size (em)', 'xstore-core' ),
			'section'     => 'wishlist',
			'default'     => 0.75,
			'choices'     => array(
				'min'  => '.3',
				'max'  => '3',
				'step' => '.01',
			),
			'active_callback' => array(
				array(
					'setting'  => 'wishlist_quantity_et-desktop',
					'operator' => '==',
					'value'    => 1,
				),
			),
			'transport' => 'auto',
			'output'      => array(
				array(
					'element' => '.et_b_header-wishlist.et_element-top-level .et-quantity',
					'property' => 'font-size',
					'units' => 'em'
				),
			),
		) );

		// wishlist_quantity_proportions
		Kirki::add_field( 'et_kirki_options', array(
			'type'        => 'slider',
			'settings'    => 'wishlist_quantity_proportions_et-desktop',
			'label'       => esc_html__( 'Quantity background size (em)', 'xstore-core' ),
			'section'     => 'wishlist',
			'default'     => 1.5,
			'choices'     => array(
				'min'  => '0.1',
				'max'  => '5',
				'step' => '0.1',
			),
			'active_callback' => array(
				array(
					'setting'  => 'wishlist_quantity_et-desktop',
					'operator' => '==',
					'value'    => 1,
				),
			),
			'transport' => 'auto',
			'output'      => array(
				array(
					'element' => '.et_b_header-wishlist.et_element-top-level .et-quantity',
					'property' => '--et-quantity-proportion',
					'units' => 'em'
				),
			),
		) );

		// wishlist_quantity_active_background_custom
		Kirki::add_field( 'et_kirki_options', array(
			'type'        => 'color',
			'settings'    => 'wishlist_quantity_active_background_custom_et-desktop',
			'label'       => esc_html__( 'Wishlist quantity Background (active)', 'xstore-core' ),
			'section'     => 'wishlist',
			'choices' 	  => array (
				'alpha' => true
			),
			'default' => '#ffffff',
			'active_callback' => array(
				array(
					'setting'  => 'wishlist_quantity_et-desktop',
					'operator' => '==',
					'value'    => 1,
				),
			),
			'transport' => 'auto',
			'output'      => array(
				array(
					'element' => '.et_b_header-wishlist.et_element-top-level .et-quantity',
					'property' => 'background-color',
				),
			),
		) );

		// wishlist_quantity_active_color
		Kirki::add_field( 'et_kirki_options', array(
			'settings'    => 'wishlist_quantity_active_color_et-desktop',
			'label'       => esc_html__( 'WCAG wishlist quantity Color (active)', 'xstore-core' ),
			'description' => $strings['description']['wcag_color'],
			'type'        => 'kirki-wcag-tc',
			'section'     => 'wishlist',
			'default'     => '#000000',
			'choices'     => array(
				'setting' => 'wishlist_quantity_active_background_custom_et-desktop',
				// 'maxHueDiff'          => 60,   // Optional.
				// 'stepHue'             => 15,   // Optional.
				// 'maxSaturation'       => 0.5,  // Optional.
				// 'stepSaturation'      => 0.1,  // Optional.
				// 'stepLightness'       => 0.05, // Optional.
				// 'precissionThreshold' => 6,    // Optional.
				// 'contrastThreshold'   => 4.5   // Optional.	
				'show'    => array(
					// 'auto'        => false,
					// 'custom'      => false,
					'recommended' => false,
				),	
			),
			'active_callback' => array(
				array(
					'setting'  => 'wishlist_quantity_et-desktop',
					'operator' => '==',
					'value'    => 1,
				),
			),
			'transport' => 'auto',
			'output'	  => array(
				array(
					'element' => '.et_b_header-wishlist.et_element-top-level .et-quantity',
					'property' => 'color'
				)
			)
		) );

		// style separator
		Kirki::add_field( 'et_kirki_options', array(
			'type'        => 'custom',
			'settings'    => 'wishlist_style_separator',
			'section'     => 'wishlist',
			'default'     => $separators['style'],
			'priority'    => 10,
		) );

		// wishlist_content_alignment
		Kirki::add_field( 'et_kirki_options', array(
			'type'        => 'radio-buttonset',
			'settings'    => 'wishlist_content_alignment_et-desktop',
			'label'       => $strings['label']['alignment'],
			'description' => esc_html__( 'Attention: if your element size bigger than the column width where the element is placed, element positioning may be a little bit different than as expected', 'xstore-core' ),
			'section'     => 'wishlist',
			'default'     => 'start',
			'choices'     => $choices['alignment'],
			'transport' => 'postMessage',
			'js_vars'     => array(
				array(
					'element'  => '.et_b_header-wishlist.et_element-top-level > a',
					'function' => 'toggleClass',
					'class' => 'justify-content-start',
					'value' => 'start'
				),
				array(
					'element'  => '.et_b_header-wishlist.et_element-top-level > a',
					'function' => 'toggleClass',
					'class' => 'justify-content-center',
					'value' => 'center'
				),
				array(
					'element'  => '.et_b_header-wishlist.et_element-top-level > a',
					'function' => 'toggleClass',
					'class' => 'justify-content-end',
					'value' => 'end'
				),
			),
		) );

		// wishlist_content_alignment
		Kirki::add_field( 'et_kirki_options', array(
			'type'        => 'radio-buttonset',
			'settings'    => 'wishlist_content_alignment_et-mobile',
			'label'       => $strings['label']['alignment'],
			'description' => esc_html__( 'Attention: if your element size bigger than the column width where the element is placed, element positioning may be a little bit different than as expected', 'xstore-core' ),
			'section'     => 'wishlist',
			'default'     => 'start',
			'choices'     => $choices['alignment'],
			'transport' => 'postMessage',
			'js_vars'     => array(
				array(
					'element'  => '.et_b_header-wishlist.et_element-top-level > a',
					'function' => 'toggleClass',
					'class' => 'mob-justify-content-start',
					'value' => 'start'
				),
				array(
					'element'  => '.et_b_header-wishlist.et_element-top-level > a',
					'function' => 'toggleClass',
					'class' => 'mob-justify-content-center',
					'value' => 'center'
				),
				array(
					'element'  => '.et_b_header-wishlist.et_element-top-level > a',
					'function' => 'toggleClass',
					'class' => 'mob-justify-content-end',
					'value' => 'end'
				),
			),
		) );

		// wishlist_background
		Kirki::add_field( 'et_kirki_options', array(
			'type'        => 'select',
			'settings'    => 'wishlist_background_et-desktop',
			'label'       => $strings['label']['colors'],
			'section'     => 'wishlist',
			'default'     => 'current',
			'choices'     => $choices['colors'],
			'output'      => array(
				array(
					'element' => '.et_b_header-wishlist.et_element-top-level > a',
					'property' => 'color',
					'value_pattern' => 'var(--$-color)'
				),
			),
		) );

		// wishlist_background_custom
		Kirki::add_field( 'et_kirki_options', array(
			'type'        => 'color',
			'settings'    => 'wishlist_background_custom_et-desktop',
			'label'       => esc_html__( 'Background', 'xstore-core' ),
			'section'     => 'wishlist',
			'choices' 	  => array (
				'alpha' => true
			),
			'default' => '#ffffff',
			'active_callback' => array(
				array(
					'setting'  => 'wishlist_background_et-desktop',
					'operator' => '==',
					'value'    => 'custom',
				),
			),
			'transport' => 'auto',
			'output'      => array(
				array(
					'element' => '.et_b_header-wishlist.et_element-top-level > a',
					'property' => 'background-color',
				),
			),
		) );

		// wishlist_color
		Kirki::add_field( 'et_kirki_options', array(
			'settings'    => 'wishlist_color_et-desktop',
			'label'       => $strings['label']['wcag_color'],
			'description' => $strings['description']['wcag_color'],
			'type'        => 'kirki-wcag-tc',
			'section'     => 'wishlist',
			'default'     => '#000000',
			'choices'     => array(
				'setting' => 'wishlist_background_custom_et-desktop',
				// 'maxHueDiff'          => 60,   // Optional.
				// 'stepHue'             => 15,   // Optional.
				// 'maxSaturation'       => 0.5,  // Optional.
				// 'stepSaturation'      => 0.1,  // Optional.
				// 'stepLightness'       => 0.05, // Optional.
				// 'precissionThreshold' => 6,    // Optional.
				// 'contrastThreshold'   => 4.5   // Optional.	
				'show'    => array(
					// 'auto'        => false,
					// 'custom'      => false,
					'recommended' => false,
				),	
			),
			'active_callback' => array(
				array(
					'setting'  => 'wishlist_background_et-desktop',
					'operator' => '==',
					'value'    => 'custom',
				),
			),
			'transport' => 'auto',
			'output'	  => array(
				array(
					'element' => '.et_b_header-wishlist.et_element-top-level > a',
					'property' => 'color'
				)
			),
		) );

		// wishlist_border_radius
		Kirki::add_field( 'et_kirki_options', array(
			'type'        => 'slider',
			'settings'    => 'wishlist_border_radius_et-desktop',
			'label'       => $strings['label']['border_radius'],
			'section'     => 'wishlist',
			'default'     => 0,
			'choices'     => array(
				'min'  => '0',
				'max'  => '100',
				'step' => '1',
			),
			'transport' => 'auto',
			'output' => array(
				array(
					'element' => '.et_b_header-wishlist.et_element-top-level > a',
					'property' => 'border-radius',
					'units' => 'px'
				)
			)
		) );

		// wishlist_box_model
		Kirki::add_field( 'et_kirki_options', array(
			'settings'    => 'wishlist_box_model_et-desktop',
			'label'       => $strings['label']['computed_box'],
			'description' => esc_html__( 'You can select the margin, border-width and padding for wishlist element.', 'xstore-core' ),
			'type'        => 'kirki-box-model',
			'section'     => 'wishlist',
			'default'     => array(
				'margin-top'          => '0px',
				'margin-right'        => '0px',
				'margin-bottom'       => '0px',
				'margin-left'         => '0px',
				'border-top-width'    => '0px',
				'border-right-width'  => '0px',
				'border-bottom-width' => '0px',
				'border-left-width'   => '0px',
				'padding-top'         => '5px',
				'padding-right'       => '0px',
				'padding-bottom'      => '5px',
				'padding-left'        => '0px',
			),
			'output'      => array(
				array(
					'element' => '.et_b_header-wishlist.et_element-top-level > a'
				),
			),
			'transport' => 'postMessage',
	        'js_vars'   => box_model_output('.et_b_header-wishlist.et_element-top-level > a')
		) );

		// wishlist_box_model
		Kirki::add_field( 'et_kirki_options', array(
			'settings'    => 'wishlist_box_model_et-mobile',
			'label'       => $strings['label']['computed_box'],
			'description' => esc_html__( 'You can select the margin, border-width and padding for wishlist element.', 'xstore-core' ),
			'type'        => 'kirki-box-model',
			'section'     => 'wishlist',
			'default'     => $box_models['empty'],
			'output'      => array(
				array(
					'element' => '.mobile-header-wrapper .et_b_header-wishlist.et_element-top-level > a'
				),
			),
			'transport' => 'postMessage',
	        'js_vars'   => box_model_output('.mobile-header-wrapper .et_b_header-wishlist.et_element-top-level > a')
		) );

		// wishlist_border
		Kirki::add_field( 'et_kirki_options', array(
			'type'        => 'select',
			'settings'    => 'wishlist_border_et-desktop',
			'label'       => $strings['label']['border_style'],
			'section'     => 'wishlist',
			'default'     => 'solid',
			'choices'     => $choices['border_style'],
			'transport' => 'auto',
			'output'      => array(
				array(
					'element' => '.et_b_header-wishlist.et_element-top-level > a',
					'property' => 'border-style',
				),
			),
		) );

		// wishlist_border_color_custom
		Kirki::add_field( 'et_kirki_options', array(
			'type'        => 'color',
			'settings'    => 'wishlist_border_color_custom_et-desktop',
			'label'       => $strings['label']['border_color'],
			'description' => $strings['description']['border_color'],
			'section'     => 'wishlist',
			'default' 	  => '#e1e1e1',
			'choices' 	  => array (
				'alpha' => true
			),
			'transport' => 'auto',
			'output'      => array(
				array(
					'element' => '.et_b_header-wishlist.et_element-top-level > a',
					'property' => 'border-color',
				),
			),
		) );

		// content separator 
		Kirki::add_field( 'et_kirki_options', array(
			'type'        => 'custom',
			'settings'    => 'wishlist_content_dropdown_separator',
			'section'     => 'wishlist',
			'default'     => '<div style="'.$sep_style.'"><span class="dashicons dashicons-editor-outdent"></span> <span style="padding-left: 3px;">' . esc_html__( 'Mini-wishlist Dropdown', 'xstore-core' ) . '</span></div>',
			'priority'    => 10,
		) );

		// wishlist_zoom
		Kirki::add_field( 'et_kirki_options', array(
			'type'        => 'slider',
			'settings'    => 'wishlist_zoom_et-desktop',
			'label'       => esc_html__( 'Mini-wishlist Content size (%)', 'xstore-core' ),
			'section'     => 'wishlist',
			'default'     => 100,
			'choices'     => array(
				'min'  => '10',
				'max'  => '200',
				'step' => '1',
			),
			'transport' => 'auto',
			'output'      => array(
				array(
					'element' => '.et_b_header-wishlist.et_element-top-level .et-mini-content',
					'property' => '--content-zoom',
					'value_pattern' => 'calc($em * .01)'
				),
			),
		) );

		// wishlist_zoom
		Kirki::add_field( 'et_kirki_options', array(
			'type'        => 'slider',
			'settings'    => 'wishlist_zoom_et-mobile',
			'label'       => esc_html__( 'Mini-wishlist Content size (%)', 'xstore-core' ),
			'section'     => 'wishlist',
			'default'     => 100,
			'choices'     => array(
				'min'  => '10',
				'max'  => '200',
				'step' => '1',
			),
			'transport' => 'auto',
			'output'      => array(
				array(
					'element' => '.mobile-header-wrapper .et_b_header-wishlist.et_element-top-level .et-mini-content',
					'property' => '--content-zoom',
					'value_pattern' => 'calc($em * .01)'
				),
			),
		) );

		// wishlist_dropdown_position
		Kirki::add_field( 'et_kirki_options', array(
			'type'        => 'radio-buttonset',
			'settings'    => 'wishlist_dropdown_position_et-desktop',
			'label'       => esc_html__( 'Mini-wishlist Dropdown position', 'xstore-core' ),
			'section'     => 'wishlist',
			'default'     => 'right',
			'multiple'    => 1,
			'choices'     => $choices['dropdown_position'],
			'active_callback' => array(
				array(
					'setting'  => 'wishlist_content_type_et-desktop',
					'operator' => '==',
					'value'    => 'dropdown',
				),
			),
			'transport' => 'postMessage',
			'js_vars'     => array(
				array(
					'element'  => '.et_b_header-wishlist',
					'function' => 'toggleClass',
					'class' => 'et-content-right',
					'value' => 'right'
				),
				array(
					'element'  => '.et_b_header-wishlist',
					'function' => 'toggleClass',
					'class' => 'et-content-left',
					'value' => 'left'
				),
			),
		) );

		// wishlist_dropdown_position_custom
		Kirki::add_field( 'et_kirki_options', array(
			'type'        => 'slider',
			'settings'    => 'wishlist_dropdown_position_custom_et-desktop',
			'label'       => esc_html__( 'Mini-wishlist Dropdown offset', 'xstore-core' ),
			'section'     => 'wishlist',
			'default'     => 0,
			'choices'     => array(
				'min'  => '-300',
				'max'  => '300',
				'step' => '1',
			),
			'active_callback' => array(
				array(
					'setting'  => 'wishlist_content_type_et-desktop',
					'operator' => '==',
					'value'    => 'dropdown',
				),
				array(
					'setting'  => 'wishlist_dropdown_position_et-desktop',
					'operator' => '==',
					'value'    => 'custom',
				),
			),
			'transport' => 'auto',
			'output'      => array(
				array(
					'element' => '.et_b_header-wishlist.et_element-top-level.et-content-toTop .et-mini-content',
					'property' => 'right',
					'units' => 'px'
				),
			),
		) );

		// wishlist_dropdown_background_custom
		Kirki::add_field( 'et_kirki_options', array(
			'type'        => 'color',
			'settings'    => 'wishlist_dropdown_background_custom_et-desktop',
			'label'       => esc_html__( 'Mini-wishlist Background', 'xstore-core' ),
			'section'     => 'wishlist',
			'choices' 	  => array (
				'alpha' => true
			),
			'default' => '#ffffff',
			'transport' => 'auto',
			'output'      => array(
				array(
					'element' => '.et_b_header-wishlist.et_element-top-level .et-mini-content',
					'property' => 'background-color',
				),
			),
		) );

		// wishlist_dropdown_color 
		Kirki::add_field( 'et_kirki_options', array(
			'settings'    => 'wishlist_dropdown_color_et-desktop',
			'label'       => esc_html__( 'WCAG Mini-wishlist Color', 'xstore-core' ),
			'description' => $strings['description']['wcag_color'],
			'type'        => 'kirki-wcag-tc',
			'section'     => 'wishlist',
			'default'     => '#000000',
			'choices'     => array(
				'setting' => 'wishlist_dropdown_background_custom_et-desktop',
				// 'maxHueDiff'          => 60,   // Optional.
				// 'stepHue'             => 15,   // Optional.
				// 'maxSaturation'       => 0.5,  // Optional.
				// 'stepSaturation'      => 0.1,  // Optional.
				// 'stepLightness'       => 0.05, // Optional.
				// 'precissionThreshold' => 6,    // Optional.
				// 'contrastThreshold'   => 4.5   // Optional.	
				'show'    => array(
					// 'auto'        => false,
					// 'custom'      => false,
					'recommended' => false,
				),	
			),
			'transport' => 'auto',
			'output'	  => array(
				array(
					'element' => '.et_b_header-wishlist.et_element-top-level .et-mini-content',
					'property' => 'color'
				)
			),
		) );

		// canvas type 

		// wishlist_content_position
		Kirki::add_field( 'et_kirki_options', array(
			'type'        => 'radio-buttonset',
			'settings'    => 'wishlist_content_position_et-desktop',
			'label'       => esc_html__( 'Mini-wishlist Off-canvas position', 'xstore-core' ),
			'description' => esc_html__( 'This option will work only if content type is set to Off-Canvas', 'xstore-core'),
			'section'     => 'wishlist',
			'default'     => 'right',
			'multiple'    => 1,
			'choices'     => array(
				'left' => esc_html__( 'Left side', 'xstore-core' ),
				'right' => esc_html__( 'Right side', 'xstore-core' ),
			),
			'transport' => 'postMessage',
			'js_vars'     => array(
				array(
					'element'  => '.header-wrapper .et_b_header-wishlist.et_element-top-level.et-off-canvas .et-close',
					'function' => 'toggleClass',
					'class' => 'full-right',
					'value' => 'right'
				),
				array(
					'element'  => '.header-wrapper .et_b_header-wishlist.et_element-top-level.et-off-canvas .et-close',
					'function' => 'toggleClass',
					'class' => 'full-left',
					'value' => 'left'
				),
				array(
					'element'  => '.header-wrapper .et_b_header-wishlist.et_element-top-level.et-off-canvas',
					'function' => 'toggleClass',
					'class' => 'et-content-right',
					'value' => 'right'
				),
				array(
					'element'  => '.header-wrapper .et_b_header-wishlist.et_element-top-level.et-off-canvas',
					'function' => 'toggleClass',
					'class' => 'et-content-left',
					'value' => 'left'
				),
			),
		) );

		// wishlist_content_position
		Kirki::add_field( 'et_kirki_options', array(
			'type'        => 'radio-buttonset',
			'settings'    => 'wishlist_content_position_et-mobile',
			'label'       => esc_html__( 'Mini-wishlist Off-canvas position', 'xstore-core' ),
			'description' => esc_html__( 'This option will work only if content type is set to Off-Canvas', 'xstore-core'),	
			'section'     => 'wishlist',
			'default'     => 'right',
			'multiple'    => 1,
			'choices'     => array(
				'left' => esc_html__( 'Left side', 'xstore-core' ),
				'right' => esc_html__( 'Right side', 'xstore-core' ),
			),
			'transport' => 'postMessage',
			'js_vars'     => array(
				array(
					'element'  => '.mobile-header-wrapper .et_b_header-wishlist.et_element-top-level.et-off-canvas .et-close',
					'function' => 'toggleClass',
					'class' => 'full-right',
					'value' => 'right'
				),
				array(
					'element'  => '.mobile-header-wrapper .et_b_header-wishlist.et_element-top-level.et-off-canvas .et-close',
					'function' => 'toggleClass',
					'class' => 'full-left',
					'value' => 'left'
				),
				array(
					'element'  => '.mobile-header-wrapper .et_b_header-wishlist.et_element-top-level.et-off-canvas',
					'function' => 'toggleClass',
					'class' => 'et-content-right',
					'value' => 'right'
				),
				array(
					'element'  => '.mobile-header-wrapper .et_b_header-wishlist.et_element-top-level.et-off-canvas',
					'function' => 'toggleClass',
					'class' => 'et-content-left',
					'value' => 'left'
				),
			),
		) );

		// wishlist_content_box_model
		Kirki::add_field( 'et_kirki_options', array(
			'settings'    => 'wishlist_content_box_model_et-desktop',
			'label'       => esc_html__( 'Mini-wishlist Computed box', 'xstore-core' ),
			'description' => esc_html__( 'You can select the margin, border-width and padding for mini-wishlist element.', 'xstore-core' ),
			'type'        => 'kirki-box-model',
			'section'     => 'wishlist',
			'default'     => array(
				'margin-top'          => '0px',
				'margin-right'        => '0px',
				'margin-bottom'       => '0px',
				'margin-left'         => '0px',
				'border-top-width'    => '0px',
				'border-right-width'  => '0px',
				'border-bottom-width' => '0px',
				'border-left-width'   => '0px',
				'padding-top'         => '30px',
				'padding-right'       => '30px',
				'padding-bottom'      => '30px',
				'padding-left'        => '30px',
			),
			'output'      => array(
				array(
					'element' => '.et_b_header-wishlist.et_element-top-level .et-mini-content',
				),
			),
			'transport' => 'postMessage',
	        'js_vars'   => box_model_output('.et_b_header-wishlist.et_element-top-level .et-mini-content')
		) );

		// wishlist_content_border
		Kirki::add_field( 'et_kirki_options', array(
			'type'        => 'select',
			'settings'    => 'wishlist_content_border_et-desktop',
			'label'       => esc_html__( 'Mini-wishlist Border style', 'xstore-core' ),
			'section'     => 'wishlist',
			'default'     => 'solid',
			'choices'     => $choices['border_style'],
			'transport' => 'auto',
			'output'      => array(
				array(
					'element' => '.et_b_header-wishlist .et-mini-content',
					'property' => 'border-style',
				),
			),
		) );

		// wishlist_content_border_color_custom
		Kirki::add_field( 'et_kirki_options', array(
			'type'        => 'color',
			'settings'    => 'wishlist_content_border_color_custom_et-desktop',
			'label'       => esc_html__( 'Mini-wishlist Border color', 'xstore-core' ),
			'description' => $strings['description']['border_color'],
			'section'     => 'wishlist',
			'default' 	  => '#e1e1e1',
			'choices' 	  => array (
				'alpha' => true
			),
			'transport' => 'auto',
			'output'      => array(
				array(
					'element' => '.et_b_header-wishlist .et-mini-content, .et_b_header-wishlist .cart-widget-products, .et_b_header-wishlist.et-off-canvas .product_list_widget li:not(:last-child)',
					'property' => 'border-color',
				),
			),
		) );
?>