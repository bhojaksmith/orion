<?php
/**
 * The header for our theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" media="all">
<link href="https://fonts.googleapis.com/css?family=Jura:300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php
if ( is_front_page() )
    get_template_part('header/front');
?>
<div id="page" class="main-container">

	<?php get_template_part( 'header/logo', 'image' ); ?>
    <div class="navbar-container">
        <nav class="navbar" id="site-nav" aria-label="Site Menu"><?php wp_nav_menu( array('theme_location'  => 'site-nav') ); ?></nav>
    </div>

	<div id="content" class="main site-content">