<?php
    add_theme_support( 'post-thumbnails', array( 'post', 'project' ) );
    
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
    


    /*
* Creating a function to create our CPT
*/
 
function custom_post_type() {
 
    // Set UI labels for Custom Post Type
        $labels = array(
            'name'                => _x( 'Project', 'Post Type General Name'),
            'singular_name'       => _x( 'Project', 'Post Type Singular Name'),
            'menu_name'           => __( 'Project'),
            'parent_item_colon'   => __( 'Parent Project'),
            'all_items'           => __( 'All Project'),
            'view_item'           => __( 'View Project'),
            'add_new_item'        => __( 'Add New Project'),
            'add_new'             => __( 'Add New'),
            'edit_item'           => __( 'Edit Project'),
            'update_item'         => __( 'Update Project'),
            'search_items'        => __( 'Search Project'),
            'not_found'           => __( 'Not Found'),
            'not_found_in_trash'  => __( 'Not found in Trash'),
        );
         
    // Set other options for Custom Post Type
         
        $args = array(
            'label'               => __( 'project'),
            'description'         => __( 'Project news and reviews'),
            'labels'              => $labels,
            // Features this CPT supports in Post Editor
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            // You can associate this CPT with a taxonomy or custom taxonomy. 
            'taxonomies'          => array( 'genres' ),
            /* A hierarchical CPT is like Pages and can have
            * Parent and child items. A non-hierarchical CPT
            * is like Posts.
            */ 
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'show_in_rest' => true,
     
        );
         
        // Registering your Custom Post Type
        register_post_type( 'project', $args );
     
    }
     
    /* Hook into the 'init' action so that the function
    * Containing our post type registration is not 
    * unnecessarily executed. 
    */
     
    add_action( 'init', 'custom_post_type', 0 );


?>