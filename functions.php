<?php
if ( ! isset( $content_width ) )
    $content_width = 900;
 
function wordkanak_adjust_content_width() {
    global $content_width;
 
    if ( is_page_template( 'full-width.php' ) )
        $content_width = 780;
}
add_action( 'template_redirect', 'wordkanak_adjust_content_width' );
function wordkanak_theme_setup(){
    load_theme_textdomain('wordkanak', get_template_directory().'/languages');
    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');
    add_theme_support('title-tags');
    register_nav_menus( array(
        'primary' => __('Primary Menu', 'wordkanak'),
        'secondary' =>__('Secondary Menu', 'wordkanak')
    ));
    add_theme_support('post_formats', array('aside', 'gallery', 'quote', 'image', 'video'));
    add_theme_support( 'html5', array( 'search-form' ) );
    add_theme_support('supports', array( 'title', 'editor', 'thumbnail', 'custom-fields' ));

    $headerlogo = array(
        'height' => 200,
        'width' => 200,
        'flex-height' => true,
        'flex-width' => true,
        'header-text' => array('site-title', 'site-description'),
    );
    add_theme_support('custom-logo', $headerlogo);

    $wordkanak_custom_header = array(
	'default-image'          => '',
	'width'                  => 0,
	'height'                 => 0,
	'flex-height'            => false,
	'flex-width'             => false,
	'uploads'                => true,
	'random-default'         => false,
	'header-text'            => true,
	'default-text-color'     => '',
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
);
add_theme_support( 'custom-header', $wordkanak_custom_header );

    $wordkanak_custom_background = array(
	'default-color'          => '',
	'default-image'          => '',
	'default-repeat'         => 'repeat',
	'default-position-x'     => 'left',
    'default-position-y'     => 'top',
    'default-size'           => 'auto',
	'default-attachment'     => 'scroll',
	'wp-head-callback'       => '_custom_background_cb',
	'admin-head-callback'    => '',
	'admin-preview-callback' => ''
);
add_theme_support( 'custom-background', $wordkanak_custom_background );
}
add_action( 'after_setup_theme', 'wordkanak_theme_setup' );

function wpdocs_theme_add_editor_styles() {
    add_editor_style( 'custom-editor-style.css' );
}
add_action( 'admin_init', 'wpdocs_theme_add_editor_styles' );

function wordkanak_theme_scripts(){
    wp_enqueue_style('base-css', get_template_directory_uri().'/css/base.css', array(), '1.1', 'all');
    wp_enqueue_style('vendor-css', get_template_directory_uri().'/css/vendor.css', array(), '1.1', 'all');
    wp_enqueue_style('main-css', get_template_directory_uri().'/css/main.css', array(), '1.1', 'all');
    wp_enqueue_style('theme-css', get_stylesheet_uri());

    wp_enqueue_script('modernizr-js', get_template_directory_uri().'/js/modernizr.js', array('jquery'), '1.0', false);
    wp_enqueue_script('plugins-js', get_template_directory_uri().'/js/plugins.js', array('jquery'), '1.0', true);
    wp_enqueue_script('main-js', get_template_directory_uri().'/js/main.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'wordkanak_theme_scripts');

function wordkanak_widgets_init() {
    register_sidebar( array(
        'name' => __( 'About Us Sidebar', 'wordkanak' ),
        'id' => 'about-sidebar',
        'description' => __( 'Widgets in this area will be shown on about us page widget content.', 'wordkanak' ),
        'before_widget' => '<div class="col-block">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="quarter-top-margin">',
        'after_title'   => '</h4>',
    ) );
        register_sidebar( array(
        'name' => __( 'Contact Us Sidebar', 'wordkanak' ),
        'id' => 'contact-sidebar',
        'description' => __( 'Widgets in this area will be shown on contact us page widget content.', 'wordkanak' ),
        'before_widget' => '<div class="col-six tab-full">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
    register_sidebar( array(
        'name' => __( 'Footer Top Right Sidebar', 'wordkanak' ),
        'id' => 'footer-top-right-sidebar',
        'description' => __( 'Widgets in this area will be shown on footer top right links widget content.', 'wordkanak' ),
        'before_widget' => '<div class="col-six md-six mob-full categories">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name' => __( 'Footer About', 'wordkanak' ),
        'id' => 'footer-about',
        'description' => __( 'Widgets in this area will be shown on footer about widget content.', 'wordkanak' ),
        'before_widget' => '<div class="col-six tab-full s-footer__about">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
    register_sidebar( array(
        'name' => __( 'Footer Subscribe', 'wordkanak' ),
        'id' => 'footer-subcribe',
        'description' => __( 'Widgets in this area will be shown on footer about widget content.', 'wordkanak' ),
        'before_widget' => '<div class="col-six tab-full s-footer__subscribe">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
    register_sidebar( array(
        'name' => __( 'Footer Social Icon', 'wordkanak' ),
        'id' => 'footer-social-icon',
        'description' => __( 'Widgets in this area will be shown on social icon list widget content.', 'wordkanak' ),
        'before_widget' => '<div class="col-six">',
        'after_widget'  => '</div>',
        'before_title'  => '',
        'after_title'   => '',
    ) );
    register_sidebar( array(
        'name' => __( 'Footer Copyright', 'wordkanak' ),
        'id' => 'footer-copyright',
        'description' => __( 'Widgets in this area will be shown on copyright widget content.', 'wordkanak' ),
        'before_widget' => '<div class="s-footer__copyright">',
        'after_widget'  => '</div>',
        'before_title'  => '',
        'after_title'   => '',
    ) );
    register_sidebar( array(
        'name' => __( 'Google Map', 'wordkanak' ),
        'id' => 'google-map',
        'description' => __( 'Google map.', 'wordkanak' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );
}
add_action( 'widgets_init', 'wordkanak_widgets_init' );

function woedsmith_pagination(){
    $pagination = paginate_links(array(
        'type' => 'list',
    ));
    $pagination = str_replace("page-numbers","pgn__num", $pagination);
    $pagination = str_replace("<ul class='pgn__num'>","<ul>", $pagination);
    $pagination = str_replace("prev pgn__num","pgn__prev", $pagination);
    $pagination = str_replace("next pgn__num","pgn__next", $pagination);
    echo $pagination;
}

function wordkanak_comment_field($fields){
    $commnet_filed = $fields['comment'];
    unset($fields['comment']);
    $fields['comment'] = $commnet_filed;
    return $fields;
}
add_filter('comment_form_fields', 'wordkanak_comment_field');