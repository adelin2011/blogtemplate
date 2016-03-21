<?php 
/*-------------- Enable Widgets--------------- */

function blank_widgets_init() {
    register_sidebar( array(
        'name' => ('First Widget'),
        'id' => 'first-widget',
        'description' => 'Widget for our sidebar on pages', 
        'before_widget' => '<div class="widget-sidebar">', 
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'                        
        ));
     register_sidebar( array(
        'name' => ('Footer Left'),
        'id' => 'footer-left',
        'description' => 'Widget for left side of footer', 
        'before_widget' => '<div class="widget-sidebar widget-footer">', 
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'                        
        ));
      register_sidebar( array(
        'name' => ('Footer Middle'),
        'id' => 'footer-middle',
        'description' => 'Widget for middle of footer', 
        'before_widget' => '<div class="widget-sidebar widget-middle">', 
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'                        
        )); 
      register_sidebar( array(
        'name' => ('Footer Right'),
        'id' => 'footer-right',
        'description' => 'Widget for right side of footer', 
        'before_widget' => '<div class="widget-sidebar widget-footer">', 
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'                        
        ));
      register_sidebar( array(
        'name' => ('Front Page Sidebar'),
        'id' => 'front-page',
        'description' => 'Widget for front page sidebar', 
        'before_widget' => '<div class="widget-sidebar widget-frontpage">', 
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'                        
        ));
    }
add_action('widgets_init', 'blank_widgets_init');

/*-------------- Enable Menu --------------- */

add_theme_support('menus');

/*--- Enable Post Thumbnails ---*/
add_theme_support( 'post-thumbnails' ); 

/*--- web dev custom taxonomy--*/

function custom_taxonomy_wie_init() {
    //custom taxonmy
    register_taxonomy(
        'webdevelopment',
        'post',
        array(
            'hierarchical' => true,
            'label' => 'Web Development Types',
            'query_var' => true
            )
        );
}
add_action( 'init', 'custom_taxonomy_wie_init' );


/*-------------- Custom Posts - Web Resources --------------- */

    function custom_web_resources() {
        $labels = array(
        /*--- Begin Labels Options ---*/

            'name'               => _x( 'Links', 'post type general name' ),
            'singular_name'      => _x( 'Link', 'post type singular name' ),
            'add_new'            => _x( 'Add New', weblink ),
            'add_new_item'       => __( 'Add Link' ),
            'edit_item'          => __( 'Edit Links' ),
            'new_item'           => __( 'New Link' ),
            'all_items'          => __( 'All Links' ),
            'view_item'          => __( 'View Links' ),
            'search_items'       => __( 'Search Links' ),
            'not_found'          => __( 'No links found' ),
            'not_found_in_trash' => __( 'No links found in the Trash' ), 
            'parent_item_colon'  => '',
            'menu_name'          => 'Web Links'

        );
        $args = array(
        /*--- Begin Arguments Options ---*/

        'labels' => $labels,
        'description'   => 'Place to put useful links to other web resources',
        'public'        => true,
        'menu_position' => 5,
        'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
        'has_archive'   => true,

        );
        register_post_type( 'resources', $args ); 
        }
        add_action( 'init', 'custom_web_resources' );

/*------- Enqueue Files------*/
wp_deregister_script('jquery');

wp_enqueue_script(
    'jquery', 
    'http://code.jquery.com/jquery-latest.min.js',
    '',
    '',
    true
);

function enqueue_unslider(){
    wp_enqueue_scripts()
        'unslider',
        get_template_directory_uri() . '/scripts/unslider.js'
        array('jquery').
        '',
        true
        )
}
add_action('wp_enqueue_scripts', 'enqueue_unslider')

?>