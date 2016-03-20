<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package _tk
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/includes/css/main.css" media="screen" />
    <link href='https://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    
    
	<?php wp_head(); ?>
</head>

    
    
<body <?php body_class(); ?>>
	<?php do_action( 'before' ); ?>
    
<?php show_admin_bar( $bool ); ?> <!--Removes Admin Bar-->
    
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="slider">
  <div class="container-fluid">
    <div class="row">
        <div class="navbar-header">
            <div id="blackshape"></div>
            <img src="<?php bloginfo('template_url'); ?>/includes/images/Logo.png" id="headerlogo">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul id="navslider">
                <a href="#"><li>Subscribe</li></a>
                <a href="#"><li>Mission</li></a>
                <a href="#"><li>Gallery</li></a>
                <a href="#"><li>About</li></a>
                <a href="#"><li>Splash</li></a>
            </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
 </nav>