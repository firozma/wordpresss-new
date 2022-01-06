<?php


function halim_theme_bootstrap(){

wp_enqueue_style('style-css',get_stylesheet_uri() );
wp_enqueue_style('font-awesome-css','//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
wp_enqueue_style('font-css','//fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap');
wp_enqueue_style('animation-css',get_theme_file_uri('/assets/css/animate.css') );
wp_enqueue_style('carousel-css',get_theme_file_uri('assets/css/owl.carousel.min.css') );
wp_enqueue_style('theme-css',get_theme_file_uri('assets/css/owl.theme.default.min.css') );
wp_enqueue_style('magnific-css',get_theme_file_uri('assets/css/magnific-popup.css') );
wp_enqueue_style('flaticon-css',get_theme_file_uri('assets/css/flaticon.css') );
wp_enqueue_style('main-css',get_theme_file_uri('assets/css/style.css') );

wp_enqueue_script('jquery-js',get_theme_file_uri().'assets/js/jquery.min.js',array('jquery'),'1.0',true);
wp_enqueue_script('migrate-js',get_theme_file_uri('assets/js/jquery-migrate-3.0.1.min.js'),array('jquery'),'1.0',true);
wp_enqueue_script('popper-js',get_theme_file_uri('assets/js/popper.min.js'),array('jquery'),'1.0',true);
wp_enqueue_script('bootstrap-js',get_theme_file_uri('assets/js/bootstrap.min.js'),array('jquery'),'1.0',true);
wp_enqueue_script('easing-js',get_theme_file_uri('assets/js/jquery.easing.1.3.js'),array('jquery'),'1.0',true);
wp_enqueue_script('waypoints-js',get_theme_file_uri('assets/js/jquery.waypoints.min.js'),array('jquery'),'1.0',true);
wp_enqueue_script('stellar-js',get_theme_file_uri('assets/js/jquery.stellar.min.js'),array('jquery'),'1.0',true);
wp_enqueue_script('animateNumber-js',get_theme_file_uri('assets/js/jquery.animateNumber.min.js'),array('jquery'),'1.0',true);
wp_enqueue_script('carousel-js',get_theme_file_uri('assets/js/owl.carousel.min.js'),array('jquery'),'1.0',true);
wp_enqueue_script('magnific-js',get_theme_file_uri('assets/js/jquery.magnific-popup.min.js'),array('jquery'),'1.0',true);
wp_enqueue_script('scrollax-js',get_theme_file_uri('assets/js/scrollax.min.js'),array('jquery'),'1.0',true);
wp_enqueue_script('map-js','//maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false',array('jquery'),'1.0',true);
wp_enqueue_script('google-js',get_theme_file_uri('assets/js/google-map.js'),array('jquery'),'1.0',true);
wp_enqueue_script('main-js',get_theme_file_uri('assets/js/main.js'),array('jquery'),'1.0',true);


}



add_action('wp_enqueue_scripts','halim_theme_bootstrap');



