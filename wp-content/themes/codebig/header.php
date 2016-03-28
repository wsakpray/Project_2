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
	<?php wp_head(); ?>
    
    
    
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/includes/css/main.css" media="screen" />

    <link href='https://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Muli:400,400italic,300,300italic' rel='stylesheet' type='text/css'>
</head>

    
    
<body <?php body_class(); ?>>
	<?php do_action( 'before' ); ?>
    
<?php show_admin_bar( $bool ); ?> <!--Removes Admin Bar-->
    
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="slider">
  <div class="container-fluid">
    <div class="row">
        <div class="navbar-header">
            
            <div id="blackshape"></div>
            
            <a href="#Splash"><img src="<?php bloginfo('template_url'); ?>/includes/images/Logo.png" id="headerlogo"></a>
            
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul id="navslider">
                <a href="#Subscribe" ><li>Subscribe</li></a>
                <a href="#Mission"><li>Mission</li></a>
                <a href="#Gallery"><li>Gallery</li></a>
                <a href="#About"><li>About</li></a>
                <a href="#Splash"><li>Splash</li></a>
            </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
 </nav>