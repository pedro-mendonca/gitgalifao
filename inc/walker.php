<?php
// Register menus
register_nav_menus(
    array(
        'main-nav' => __( 'The Main Menu', 'galifao' ),   // Main nav in header
        'footer-links' => __( 'Footer Links', 'galifao' ) // Secondary nav in footer
    )
);




class Off_Canvas_Menu_Walker extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth = 0, $args = Array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"vertical nested menu\">\n";
    }
}


// The Off Canvas Menu
function galifao_off_canvas_nav() {
     wp_nav_menu(array(
        'container' => false,                           // Remove nav container
        'menu_class' => 'vertical menu',       // Adding custom nav class
        'items_wrap' => '<ul id="%1$s" class="%2$s" data-accordion-menu>%3$s</ul>',
        'theme_location' => 'main-nav',                 // Where it's located in the theme
        'depth' => 5,                                   // Limit the depth of the nav
        'fallback_cb' => false,                         // Fallback function (see below)
        'walker' => new Off_Canvas_Menu_Walker()
    ));
} /* End Off Canvas Menu */




