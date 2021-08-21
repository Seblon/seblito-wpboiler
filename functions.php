<?php
/**
 * Seblito functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Seblito
 */

if (! defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

// Include Custom Nav Walker
require_once('inc/bs5navwalker.php');

if (! function_exists('seblito_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function seblito_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on Seblito, use a find and replace
         * to change 'seblito' to the name of your theme in all the template files.
         */
        load_theme_textdomain('seblito', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(
            array(
                'main-menu' => esc_html__('Main menu', 'seblito'),
            )
        );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );

        // Set up the WordPress core custom background feature.
        add_theme_support(
            'custom-background',
            apply_filters(
                'seblito_custom_background_args',
                array(
                    'default-color' => 'ffffff',
                    'default-image' => '',
                )
            )
        );

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support(
            'custom-logo',
            array(
                'height'      => 30,
                'width'       => 100,
                'flex-width'  => true,
                'flex-height' => true,
            )
        );
    }
endif;

add_action('after_setup_theme', 'seblito_setup');

/**
 * Changes the class on the custom logo in the header.php
 */
function seblito_custom_logo_output($html)
{
    $html = str_replace('custom-logo-link', 'navbar-brand', $html);
    return $html;
}
add_filter('get_custom_logo', 'seblito_custom_logo_output', 10);

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function seblito_content_width()
{
    $GLOBALS['content_width'] = apply_filters('seblito_content_width', 640);
}
add_action('after_setup_theme', 'seblito_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function seblito_widgets_init()
{
    register_sidebar(
        array(
            'name'          => esc_html__('Sidebar', 'seblito'),
            'id'            => 'sidebar-1',
            'description'   => esc_html__('Add widgets here.', 'seblito'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action('widgets_init', 'seblito_widgets_init');

// Enqueue scripts and styles.
function seblito_scripts()
{
    wp_enqueue_style('seblito-styles', get_theme_file_uri('/build/style-index.css'));
    // wp_style_add_data('seblito-style', 'rtl', 'replace');

    wp_enqueue_script('seblito-main-js', get_theme_file_uri('/build/index.js'), null, '1.0', true);
    wp_enqueue_script('seblito-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'seblito_scripts');

// Implement the Custom Header feature.
require get_template_directory() . '/inc/custom-header.php';

// Custom template tags for this theme.
require get_template_directory() . '/inc/template-tags.php';

// Functions which enhance the theme by hooking into WordPress.
require get_template_directory() . '/inc/template-functions.php';

// Customizer additions.
require get_template_directory() . '/inc/customizer.php';

// Load Jetpack compatibility file.
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}

/*
|***************************
| Customizing Login screen
|***************************
*/

// Custom Login screen URL
function seblito_login_header_url()
{
    return esc_url(site_url('/'));
}

add_filter('login_headerurl', 'seblito_login_header_url');

// Custom login screen styles
function seblitoLoginCSS()
{
    wp_enqueue_style('seblito-styles', get_theme_file_uri('/build/style-index.css'));
}

add_action('login_enqueue_scripts', 'seblitoLoginCSS');
