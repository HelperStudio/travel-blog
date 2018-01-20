<?php

function ju_enqueue(){
    wp_register_style('ju_bootstrap', get_template_directory_uri().'/assets/bootstrap.css');
    wp_enqueue_style('ju_bootstrap');

    wp_register_style('ju_animate', get_template_directory_uri().'/assets/animate.css');
    wp_enqueue_style('ju_animate');

    wp_register_style('ju_site', get_template_directory_uri().'/assets/site.css');
    wp_enqueue_style('ju_site');

    wp_register_script('ju_popper', get_template_directory_uri().'/assets/scripts/popper.js');
    wp_enqueue_script('ju_popper');

    wp_register_script('ju_bootstrap_script', get_template_directory_uri().'/assets/scripts/bootstrap.js',array(),false,true);
    wp_enqueue_script('ju_bootstrap_script');

    wp_register_script('ju_fakeLoader', get_template_directory_uri().'/assets/scripts/fakeLoader.js',array(),false,true);
    wp_enqueue_script('ju_fakeLoader');

    wp_register_script('ju_viewportchecker', get_template_directory_uri().'/assets/scripts/jquery.viewportchecker.min.js',array(),false,true);
    wp_enqueue_script('ju_viewportchecker');

    wp_register_script('ju_paralax_background', get_template_directory_uri().'/assets/scripts/paralax-background.js',array(),false,true);
    wp_enqueue_script('ju_paralax_background');

    wp_register_script('ju_lazy_load', get_template_directory_uri().'/assets/scripts/lazyLoad.js',array(),false,true);
    wp_enqueue_script('ju_lazy_load');

    wp_register_script('ju_lodash', get_template_directory_uri().'/assets/scripts/lodash.js',array(),false,true);
    wp_enqueue_script('ju_lodash');
}