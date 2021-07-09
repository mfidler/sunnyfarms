<?php

    if( function_exists('acf_add_options_page') ) {
           
        acf_add_options_page(array(
            'page_title'    => 'Global Options',
            'menu_title'    => 'Global Options',
            'menu_slug'     => 'global-options',
            'capability'    => 'edit_posts',
            'redirect'      => false,
        ));
        
    }
    
    // Hide Admin Bar
    add_filter('show_admin_bar', '__return_false');

?>