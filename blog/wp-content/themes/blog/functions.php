<?php
/*
# ===========================================
# functions.php
#
# The theme's functions.
# ===========================================
*/

/* ------------------------------------------ */
/* 1. CONSTANTS */
/* ------------------------------------------ */
define( 'THEMEROOT', get_stylesheet_directory_uri() );
define( 'IMAGES', THEMEROOT . '/img' );
define( 'JS', THEMEROOT . '/js' );

/* ------------------------------------------ */
/* 2. THEME SETUP */
/* ------------------------------------------ */
if ( ! function_exists( 'pgh_theme_setup' ) ) {
    function pgh_theme_setup() {
        /* Make the theme available for translation. */
        $lang_dir = THEMEROOT . '/languages';
        load_theme_textdomain( 'pgh', $lang_dir );

        /* Add support for automatic feed links. */
        add_theme_support( 'automatic-feed-links' );

        /* Add support for post thumbnails. */
        add_theme_support( 'post-thumbnails' );

        /* Register nav menus. */
        register_nav_menus( array(
            'main-menu' => __( 'Main menu', 'pgh' )
        ) );
    }

    add_action( 'after_setup_theme', 'pgh_theme_setup' );
}
/* Add additional class on li. */
add_filter ( 'nav_menu_css_class', 'add_additional_class_on_li', 10, 4 );
function add_additional_class_on_li ( $classes, $item, $args, $depth ){
  $classes[] = 'main-nav__item';
  return $classes;
}

/* ------------------------------------------ */
/* 3. GET POST META */
/* ------------------------------------------ */
if ( ! function_exists( 'pgh_post_meta' ) ) {
    function pgh_post_meta() {
        if ( get_post_type() === 'post' ) {
            /* Post author. */
            echo '<p>';
            _e( 'نوشته شده توسط', 'pgh' );
            printf( '<a href="%1$s" rel="author"> %2$s </a>', esc_url( get_author_posts_url( get_the_author_meta(
            'ID' ) ) ), get_the_author() );
            _e( 'در تاریخ', 'pgh' );
            echo ' <span>' . get_the_date() . '</span></p>';
        }
    }
}

/* ------------------------------------------ */
/* 4. NUMBERED PAGINATION */
/* ------------------------------------------ */
if ( ! function_exists( 'pgh_numbered_pagination' ) ) {
    function pgh_numbered_pagination() {
        $args = array (
            'prev_next' => false,
            'type' => 'array'
        );

        echo '<div id="pagination">';
        $pagination = paginate_links( $args );

        if ( is_array( $pagination ) ) {
            echo '<ul>';
            foreach ( $pagination as $page ) {
                if ( strpos( $page, 'current' ) ) {
                    echo '<li class="active"><a href="#">' . $page . '</a></li>';
                } else {
                    echo '<li>' . $page . '</li>';
                }
            }

            echo '</ul>';
        }

        echo '</div>';
    }
}

/* ------------------------------------------ */
/* 5. REGISTER WIDGET AREAS */
/* ------------------------------------------ */
if ( ! function_exists( 'pgh_widget_init' ) ) {
    function pgh_widget_init() {
        if ( function_exists( 'register_sidebar' ) ) {
            register_sidebar( array(
                'name' => __( 'Main Widget Area', 'pgh' ),
                'id' => 'main-sidebar',
                'description' => __( 'Appears in the blog pages', 'pgh' ),
                'before_widget' => '<div id="%1$s" class="%2$s">',
                'after_widget' => '</div>',
                'before_title' => '<h4>',
                'after_title' => '</h4>'
            ) );
        }
    }

    add_action( 'widgets_init', 'pgh_widget_init' );
}

/* ------------------------------------------ */
/* 6. SCRIPTS */
/* ------------------------------------------ */
if ( ! function_exists( 'pgh_scripts' ) ) {
    function pgh_scripts() {
        /* Register scripts. */
        wp_register_script( 'shared-js', JS . '/shared.js', false, false, true );

        /* Load the custom scripts. */
        wp_enqueue_script( 'shared-js' );

        /* Load the stylesheets. */
        wp_enqueue_style( 'blog-css', THEMEROOT . '/css/blog.css' );
    }

    add_action( 'wp_enqueue_scripts', 'pgh_scripts' );
}
?>