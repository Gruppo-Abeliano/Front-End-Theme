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

    //<a> class inside menu
    function add_menu_link_class( $atts, $item, $args ) {
        if (property_exists($args, 'link_class')) {
          $atts['class'] = $args->link_class;
        }
        return $atts;
    }
    add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );

    //active effect inside menu
    function special_nav_class ($classes, $item) {
        if (in_array('current-menu-item', $classes) ){
            $classes[] = 'active ';
        }
        return $classes;
    }
    add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
    
?>