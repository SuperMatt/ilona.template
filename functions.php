<?php
function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu')
        )
    );
}

if ( ! isset( $content_width ) ) {
    $content_width = 970;
}

add_action( 'init', 'register_my_menus');
add_image_size('3col');
?>
