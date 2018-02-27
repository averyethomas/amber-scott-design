<?php

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M' );
@ini_set( 'max_execution_time', '300' );

class wp_ng_theme {
  function enqueue_scripts() {
    wp_enqueue_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.map', array('jquery'), '1.0', false);
    wp_enqueue_script( 'angular-core', 'https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.7/angular.min.js', array( 'jquery' ), '1.0', false );
    wp_enqueue_script( 'ngScripts', get_template_directory_uri() . '/assets/js/app.js', array( ), '1.0', false );
  }
}

$ngTheme = new wp_ng_theme();

add_action( 'wp_enqueue_scripts', array( $ngTheme, 'enqueue_scripts' ) );


// NAVIGATION

function cns_nav()
{
    wp_nav_menu(
    array(
        'theme_location'  => 'main-menu',
        'menu'            => '',
        'container'       => false,
        'container_class' => '',
        'container_id'    => '',
        'menu_class'      => 'menu',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '%3$s',
        'depth'           => 0,
        'walker'          => ''
        )
    );
}


function register_cns_menu()
{
    register_nav_menus(
        array(
            'main-menu' => __( 'Main Menu' ), // Main Navigation
        )
    );
}

add_action( 'init', 'register_cns_menu' );

?>