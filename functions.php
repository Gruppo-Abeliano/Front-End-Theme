<?php
    //add_theme_support( 'post-thumbnails' );

    
    register_nav_menus( array(  
        'primary' => __( 'Primary Navigation', 'gruppo-abeliano-theme' ),  
    ) ); 

    //<li> class inside menu
    function add_menu_list_item_class($classes, $item, $args) {
        if (property_exists($args, 'list_item_class')) {
            $classes[] = $args->list_item_class;
        }
        return $classes;
    }
    add_filter('nav_menu_css_class', 'add_menu_list_item_class', 1, 3);

    //current and external effect inside menu
    function add_class_to_href( $classes, $item ) {
        if ( in_array('current_page_item', $item->classes) ) {
            $classes['class'] = 'current nav-link';
        }else{
            $classes['class'] = 'external nav-link';
        }
        return $classes;
    }
    add_filter( 'nav_menu_link_attributes', 'add_class_to_href', 10, 2 );
    
?>