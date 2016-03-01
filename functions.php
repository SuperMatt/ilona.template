<?php
function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu')
        )
    );
}

add_action( 'init', 'register_my_menus')

function tweakjp_rm_tiledcss(){
    wp_dequeue_style( 'tiled-gallery' );
}
add_action( 'wp_footer', 'tweakjp_rm_tiledcss' );

?>
