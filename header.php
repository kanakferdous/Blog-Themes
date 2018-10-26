<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js" lang="en">
<head>

<!--- basic page needs
================================================== -->
<meta charset="utf-8">
<?php 
if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
wp_head();?>

</head>

<body <?php body_class();?> id="top">

<!-- preloader
================================================== -->
<div id="preloader">
<div id="loader" class="dots-fade">
<div></div>
<div></div>
<div></div>
</div>
</div>


<!-- header
================================================== -->
<header class="s-header header">

<div class="header__logo">
<?php 
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
    if ( has_custom_logo() ) {
        echo '<a class="" href="' .get_home_url(). '">'.'<img src="'. esc_url( $logo[0] ) .'"></a>';
    }else {
        echo '<a class="header_title_text" href="' .get_home_url(). '">' .get_bloginfo( 'title' ). '</a>';
    }
?>
</div> <!-- end header__logo -->

<a class="header__search-trigger" href="#0"></a>
<div class="header__search">

<form role="search" method="get" class="header__search-form" action="#">
    <label>
        <span class="hide-content"><?php _e('Search for:', 'wordkanak'); ?></span>
        <input type="search" class="search-field" 
        placeholder="<?php echo esc_attr_x( 'Type Keywords', 'placeholder', 'wordkanak' ) ?>" 
        value="<?php echo get_search_query() ?>" 
        name="s" 
        title="<?php echo esc_attr_x( 'Search for:', 'label', 'wordkanak' ) ?>" 
        autocomplete="off">
    </label>
    <input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'wordkanak' ) ?>">
</form>

<a href="#0" title="Close Search" class="header__overlay-close"><?php _e('Close', 'wordkanak'); ?></a>

</div>  <!-- end header__search -->

<a class="header__toggle-menu" href="#0" title="Menu"><span><?php _e('Menu', 'wordkanak'); ?></span></a>
<nav class="header__nav-wrap">

<h2 class="header__nav-heading h6"><?php _e('Navigate to', 'wordkanak'); ?></h2>

<?php
wp_nav_menu( array(
    'theme_location' => 'primary',
    'menu_class' => 'header__nav',
) )
?>
<!-- end header__nav -->

<a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>

</nav> <!-- end header__nav-wrap -->

</header> <!-- s-header -->
<?php wp_link_pages('before=<div id="page-links">&after=</div>'); ?>