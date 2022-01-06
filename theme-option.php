<?php


function halim_acf_op_init(){

  if( function_exists('acf_add_options_page') ) {

       // Register options page.
       $parent  = acf_add_options_page(array(
           'page_title'    => __('Theme Option','halim'),
           'menu_title'    => __('Ganarel Settings','halim'),
           'menu_slug'     => 'theme-general-settings',
           'capability'    => 'edit_posts',
           'redirect'      => false
       ));
       // Add sub page.
        $child = acf_add_options_page(array(
            'page_title'  => __('Header Settings','halim'),
            'menu_title'  => __('Header Settings','halim'),
            'parent_slug' => $parent['menu_slug'],
        ));

        // Add sub page.
         $child = acf_add_options_page(array(
             'page_title'  => __('Home page','halim'),
             'menu_title'  => __('Home page','halim'),
             'parent_slug' => $parent['menu_slug'],
         ));
         // Add sub page.
          $child = acf_add_options_page(array(
              'page_title'  => __('About page','halim'),
              'menu_title'  => __('About page','halim'),
              'parent_slug' => $parent['menu_slug'],
          ));
          // Add sub page.
           $child = acf_add_options_page(array(
               'page_title'  => __('contact page','halim'),
               'menu_title'  => __('contact page','halim'),
               'parent_slug' => $parent['menu_slug'],
           ));
         // Add sub page.
          $child = acf_add_options_page(array(
              'page_title'  => __('services page','halim'),
              'menu_title'  => __('services page','halim'),
              'parent_slug' => $parent['menu_slug'],
          ));
          // Add sub page.
           $child = acf_add_options_page(array(
               'page_title'  => __('footer setting','halim'),
               'menu_title'  => __('footer setting','halim'),
               'parent_slug' => $parent['menu_slug'],
           ));
   }
}

add_action('acf/init', 'halim_acf_op_init');
