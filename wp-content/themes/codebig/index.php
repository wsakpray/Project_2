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

<a class="anchor" name="Splash"></a>
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

<a class="anchor" name="About"></a>
<div class="row" id="aboutsection">
    <div class="col-sm-4" id="about1">
        <img src="<?php bloginfo('template_url'); ?>/includes/images/About_1.jpg" class="about_img">
        <h1>LEARN</h1>
        <h3>With over +100 tutorials in our video library, the coding world is yours!</h3>
    </div>
    <div class="col-sm-4" id="about2">
        <img src="<?php bloginfo('template_url'); ?>/includes/images/About_2.jpg" class="about_img">
        <h1>CRAFT</h1>
        <h3>Using the CodeBIG app. Coding becomes easy, intuitive, and most of all, fun.</h3>
    </div>
    <div class="col-sm-4" id="about3">
        <img src="<?php bloginfo('template_url'); ?>/includes/images/About_3.jpg" class="about_img">
        <h1>SHARE</h1>
        <h3>Put your work in our public gallery. Sign up and talk to other rising coders.</h3>
    </div>
</div>

<a class="anchor" name="Gallery"></a>
<div class="row" id="submitted">
    <div class="row">
        <h1>RECENTLY SUBMITTED:</h1>
    </div>
    <div class="row" id="submittedcols">
        <div class="col-sm-3">
            <div class="submitted_img_box">
                <h3>Road Destroyer</h3>
                <p>1/29/16<br>By Josh</p>
                <img src="<?php bloginfo('template_url'); ?>/includes/images/Submitted_1.jpg" class="submitted_img">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="submitted_img_box">
                <h3>Ultimate Tiles</h3>
                <p>1/29/16<br>By Shoshana</p>
                <img src="<?php bloginfo('template_url'); ?>/includes/images/Submitted_2.jpg" class="submitted_img">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="submitted_img_box">
                <h3>Pid Painter</h3>
                <p>1/24/16<br>By Pid</p>
                <img src="<?php bloginfo('template_url'); ?>/includes/images/Submitted_3.jpg" class="submitted_img">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="submitted_img_box">
                <h3>Hallow-World</h3>
                <p>2/4/16<br>By Womana</p>
                <img src="<?php bloginfo('template_url'); ?>/includes/images/Submitted_4.jpg" class="submitted_img">
            </div>
        </div>
    </div>
    <div class="row" id="submittedbtn">
        <button class="popbtn">See More &#9658;</button>
    </div>
</div>

<a class="anchor" name="Mission"></a>
<div class="row-eq-height" id="goal">
    <div class="col-sm-6" id="goalphoto">
        <img src="<?php bloginfo('template_url'); ?>/includes/images/Goal_Photo.png">
    </div>
    <div class="col-sm-6" id="goaltext">
        <div>
        <h1>- OUR GOAL -</h1>
            <h3>Technology moves fast, and so should the next generation of coders. We want people to start coding as soon as possible, and kickstart their passions in the digital world.</h3>
            <h3><br><br><br>But don't just take our word for it...</h3>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12" id="goalfooter">
    </div>
</div>  
        
        
<div class="row" id="reviews">
    <div id="reviewscol">
        <div class="col-sm-4">
            <div>
                <p>“It’s fun and easy. It’s not minecraft, but a lot of things aren’t I guess.”</p>
                <div class="reviewstag">
                    <img src="<?php bloginfo('template_url'); ?>/includes/images/Profiles_1.png">
                    <h3>-Jamie Mephisto</h3> 
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div>
                <p>“I always want my students to actually enjoy their work outside of class. I see I pretty clear difference when they’re working on python vs. CodeBIG (for the better).”</p>
                <div class="reviewstag">
                    <img src="<?php bloginfo('template_url'); ?>/includes/images/Profiles_2.png">
                    <h3>-Llyod Shoes</h3>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div>
                <p>“I don’t know coding but my kids do. They’re always on their tablets so it nice that they can at least do something productive on them.”</p>
                <div class="reviewstag">
                    <img src="<?php bloginfo('template_url'); ?>/includes/images/Profiles_3.png">
                    <h3>-Sarah Shasla</h3>
                </div> 
            </div>
        </div>    
    </div>
    <div class="row" id="reviewsbtn">
        <button class="popbtn">See More &#9658;</button>
    </div>
</div> 
      
<a class="anchor" name="Subscribe"></a>
<div class="row">
    <div class="col-sm-12" id="subscribe">
          <form class="navbar-form" role="form">
            <h1>Subscribe for Updates!</h1>
            <input type="text" name="mail" placeholder=" Email">
            <button class="popbtn">Subscribe!</button>
          </form>        
    </div>
</div>

<?php get_footer(); ?>