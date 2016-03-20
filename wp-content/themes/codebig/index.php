<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package _tk
 */

get_header(); ?>

<div class="row-eq-height">
    <div class="col-sm-6" id="splashtext">
        <div>
            <h1>LEARN, CRAFT, SHARE</h1>
            <h2>A whole new way to code and create.</h2>
        </div>
    </div>
    <div class="col-sm-6" id="splashphoto">
        <img src="<?php bloginfo('template_url'); ?>/includes/images/Splash_Photo.jpg">
        <button class="popbtn">Watch the Video &#9658;</button>
    </div>
</div>

<div class="row">
    <div class="col-sm-12" id="splashfooter">
    </div>
</div>

<div class="row" id="aboutsection">
    <div class="col-sm-4" id="about1">
    </div>
    <div class="col-sm-4" id="about2">
    </div>
    <div class="col-sm-4" id="about3">
    </div>
</div>

<?php get_footer(); ?>