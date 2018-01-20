<?php

include( get_template_directory().'/includes/front/enqueue.php');
include( get_template_directory().'/includes/setup.php');
include( get_template_directory().'/includes/wp_bootstrap_navwalker.php');
include( get_template_directory().'/includes/widgets.php');

add_action('wp_enqueue_scripts','ju_enqueue');
add_action('after_setup_theme', 'ju_setup_theme');
add_action('widgets_init', 'ju_widgets');

function hs_travel_customize_register($wp_customize){
    
    $wp_customize->add_section('hs_travel_color_scheme', array(
        'title'    => __('Color Scheme', 'hs_travel'),
        'description' => '',
        'priority' => 120,
    ));

    $wp_customize->add_section('hs_travel_top_pages', array(
        'title'    => __('Top Pages Settings', 'hs_travel'),
        'description' => '',
        'priority' => 121,
    ));

    //TOP PAGES SECTION

    $wp_customize->add_setting('hs_travel_theme_options[block_page_1]', array(
        'capability'     => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control('hs_travel_top_block_page_1', array(
        'label'      => __('Page block 1', 'hs_travel'),
        'section'    => 'hs_travel_top_pages',
        'type'    => 'dropdown-pages',
        'settings'   => 'hs_travel_theme_options[block_page_1]',
    ));

    $wp_customize->add_setting('hs_travel_theme_options[block_page_1_img]', array(
        'default'           => 'image.jpg',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'block_page_1_img', array(
        'label'    => __('Image for block 1', 'hs_travel'),
        'section'  => 'hs_travel_top_pages',
        'settings' => 'hs_travel_theme_options[block_page_1_img]',
    )));

    $wp_customize->add_setting('hs_travel_theme_options[block_page_2]', array(
        'capability'     => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control('hs_travel_top_block_page_2', array(
        'label'      => __('Page block 2', 'hs_travel'),
        'section'    => 'hs_travel_top_pages',
        'type'    => 'dropdown-pages',
        'settings'   => 'hs_travel_theme_options[block_page_2]',
    ));

    $wp_customize->add_setting('hs_travel_theme_options[block_page_2_img]', array(
        'default'           => 'image.jpg',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'block_page_2_img', array(
        'label'    => __('Image for block 2', 'hs_travel'),
        'section'  => 'hs_travel_top_pages',
        'settings' => 'hs_travel_theme_options[block_page_2_img]',
    )));

    $wp_customize->add_setting('hs_travel_theme_options[block_page_3]', array(
        'capability'     => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control('hs_travel_top_block_page_3', array(
        'label'      => __('Page block 3', 'hs_travel'),
        'section'    => 'hs_travel_top_pages',
        'type'    => 'dropdown-pages',
        'settings'   => 'hs_travel_theme_options[block_page_3]',
    ));

    $wp_customize->add_setting('hs_travel_theme_options[block_page_3_img]', array(
        'default'           => 'image.jpg',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'block_page_3_img', array(
        'label'    => __('Image for block 3', 'hs_travel'),
        'section'  => 'hs_travel_top_pages',
        'settings' => 'hs_travel_theme_options[block_page_3_img]',
    )));








    $wp_customize->add_setting('hs_travel_theme_options[text_test]', array(
        'default'        => 'value_xyz',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('hs_travel_text_test', array(
        'label'      => __('Text Test', 'hs_travel'),
        'section'    => 'hs_travel_color_scheme',
        'settings'   => 'hs_travel_theme_options[text_test]',
    ));
 
    //  =============================
    //  = Radio Input               =
    //  =============================
    /* $wp_customize->add_setting('hs_travel_theme_options[color_scheme]', array(
        'default'        => 'value2',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
    ));
 
    $wp_customize->add_control('hs_travel_color_scheme', array(
        'label'      => __('Color Scheme', 'hs_travel'),
        'section'    => 'hs_travel_color_scheme',
        'settings'   => 'hs_travel_theme_options[color_scheme]',
        'type'       => 'radio',
        'choices'    => array(
            'value1' => 'Choice 1',
            'value2' => 'Choice 2',
            'value3' => 'Choice 3',
        ),
    )); */
 
    //  =============================
    //  = Checkbox                  =
    //  =============================
    /* $wp_customize->add_setting('hs_travel_theme_options[checkbox_test]', array(
        'capability' => 'edit_theme_options',
        'type'       => 'option',
    ));
 
    $wp_customize->add_control('display_header_text', array(
        'settings' => 'hs_travel_theme_options[checkbox_test]',
        'label'    => __('Display Header Text'),
        'section'  => 'hs_travel_color_scheme',
        'type'     => 'checkbox',
    )); */
 
 
    //  =============================
    //  = Select Box                =
    //  =============================
     /* $wp_customize->add_setting('hs_travel_theme_options[header_select]', array(
        'default'        => 'value2',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
    $wp_customize->add_control( 'example_select_box', array(
        'settings' => 'hs_travel_theme_options[header_select]',
        'label'   => 'Select Something:',
        'section' => 'hs_travel_color_scheme',
        'type'    => 'select',
        'choices'    => array(
            'value1' => 'Choice 1',
            'value2' => 'Choice 2',
            'value3' => 'Choice 3',
        ),
    )); */
 
 
    //  =============================
    //  = Image Upload              =
    //  =============================
    $wp_customize->add_setting('hs_travel_theme_options[top_img]', array(
        'default'           => 'image.jpg',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'top_img', array(
        'label'    => __('Image Upload Test', 'hs_travel'),
        'section'  => 'hs_travel_color_scheme',
        'settings' => 'hs_travel_theme_options[top_img]',
    )));

    $wp_customize->add_setting('hs_travel_theme_options[ava_img]', array(
        'default'           => 'image.jpg',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'ava_img', array(
        'label'    => __('Image Upload Test', 'hs_travel'),
        'section'  => 'hs_travel_color_scheme',
        'settings' => 'hs_travel_theme_options[ava_img]',
    )));
 
    //  =============================
    //  = File Upload               =
    //  =============================
  /*   $wp_customize->add_setting('hs_travel_theme_options[upload_test]', array(
        'default'           => 'arse',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control( new WP_Customize_Upload_Control($wp_customize, 'upload_test', array(
        'label'    => __('Upload Test', 'hs_travel'),
        'section'  => 'hs_travel_color_scheme',
        'settings' => 'hs_travel_theme_options[upload_test]',
    ))); */
 
 
    //  =============================
    //  = Color Picker              =
    //  =============================
    /* $wp_customize->add_setting('hs_travel_theme_options[link_color]', array(
        'default'           => '#000',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'link_color', array(
        'label'    => __('Link Color', 'hs_travel'),
        'section'  => 'hs_travel_color_scheme',
        'settings' => 'hs_travel_theme_options[link_color]',
    ))); */
 
 
    //  =============================
    //  = Page Dropdown             =
    //  =============================


    // =====================
    //  = Category Dropdown =
    //  =====================
    /* $categories = get_categories();
	$cats = array();
	$i = 0;
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cats[$category->slug] = $category->name;
	}
 
	$wp_customize->add_setting('_s_f_slide_cat', array(
		'default'        => $default
	));
	$wp_customize->add_control( 'cat_select_box', array(
		'settings' => '_s_f_slide_cat',
		'label'   => 'Select Category:',
		'section'  => '_s_f_home_slider',
		'type'    => 'select',
		'choices' => $cats,
	)); */
}
 
add_action('customize_register', 'hs_travel_customize_register');