<?php



function footer_theme_slug_widgets_halim() {
    register_sidebar( array(
        'name'          => __( 'Footer One', 'halim' ),
        'id'            => 'footer-1',
        'description'   => __( 'footer widget make the sidebar ', 'halim' ),
        'before_widget' => '<ul id="%1$s" class="list-unstyled  %2$s">',
        'after_widget'  => '</ul>',
        'before_title'  => '<h2 class="footer-heading">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer two', 'halim' ),
        'id'            => 'footer-2',
        'description'   => __( 'footer widget make the sidebar ', 'halim' ),
        'before_widget' => '<ul id="%1$s" class="list-unstyled  %2$s">',
        'after_widget'  => '</ul>',
        'before_title'  => '<h2 class="footer-heading">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Three', 'halim' ),
        'id'            => 'footer-3',
        'description'   => __( 'footer widget make the sidebar ', 'halim' ),
        'before_widget' => '<ul id="%1$s" class="list-unstyled  %2$s">',
        'after_widget'  => '</ul>',
        'before_title'  => '<h2 class="footer-heading">',
        'after_title'   => '</h2>',
    ) );

      register_sidebar( array(
        'name'          => __( 'Main sidebar', 'halim' ),
        'id'            => 'sidebar',
        'description'   => __( 'single  widget make the sidebar ', 'halim' ),
        'before_widget' => '<div id="%1$s" class=" widget sidebar-box ftco-animate">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );

}
add_action( 'widgets_init', 'footer_theme_slug_widgets_halim' );
