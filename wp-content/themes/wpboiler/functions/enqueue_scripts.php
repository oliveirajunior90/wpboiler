<?php

#custom CSS and SCRIPTS
function enqueue_styles(){
    wp_enqueue_style('bootstrap-style', get_template_directory_uri().'/bower_components/bootstrap/dist/css/bootstrap.min.css');
    wp_enqueue_style('custom-style', get_template_directory_uri().'/assets/css/style.css');
    wp_enqueue_script('jquery-bootstrap', get_template_directory_uri().'/bower_components/jquery/dist/jquery.min.js', array(), '1.0.0', true);
    wp_enqueue_script('js-bootstrap', get_template_directory_uri().'/bower_components/bootstrap/dist/js/bootstrap.min.js', array('jquery-bootstrap'), '1.0.0', true);
    wp_enqueue_script('script', get_template_directory_uri().'/assets/js/scripts.js', array('jquery-bootstrap', 'js-bootstrap'), '1.0.0', true);
}

#move scripts to footer (a best practice)
function md_footer_enqueue_scripts() {
    remove_action('wp_head', 'wp_print_scripts');
    remove_action('wp_head', 'wp_print_head_scripts', 9);
    remove_action('wp_head', 'wp_enqueue_scripts', 1);
}


add_action('wp_enqueue_scripts', 'md_footer_enqueue_scripts');
add_action('wp_enqueue_scripts', 'enqueue_styles');


