<?php
/**
* Template Name: About Template.
 *
 * @package Warraich Traders
*/
get_header();
?>

    <!-- Section Start -->
    <section class="bg_about bg_img">
        <div class="container">
            <div class="row py-5">
                <div class="col-md-12">
                    <h4 class="text-center text-white">About Us</h4>
                    <div class="text-center text-white p-3">
                        <a href="index.php" class="text-decoration-none text-white">Home</a>
                        &nbsp;
                        <img src="https://img.icons8.com/glyph-neue/20/FFFFFF/long-arrow-right.png"/>
                        &nbsp;
                        <a href="about.php" class="text-decoration-none text-white">About</a>
                    </div>
                </div><!--col-md-12-->
            </div><!--row-->
        </div><!--container-->
    </section>
    <!-- Section End -->

    <!-- Section Start -->
    <section>
        <div class="container">
            <div class="row pb-5">
                <div class="col-md-6">
                    <div class="about_img">
                        <?php dynamic_sidebar('about-main-1'); ?>
                    </div><!--about_img-->
                </div><!--col-md-6-->
                <div class="col-md-6 mt-5 about_main_section">
                    <?php dynamic_sidebar('about-main-2'); ?>
                </div><!--col-md-6-->
            </div><!--row-->
        </div><!--container-->
    </section>
    <!-- Section End -->

    <!-- Section Start -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center about-title">
                    <?php dynamic_sidebar('about-title'); ?>
                </div><!--col-12-->
            </div><!--row-->
            <div class="row my-5">
                <div class="col-md-3 our_team_img text-center">
                    <?php dynamic_sidebar('about-us-widget-1'); ?>
                </div><!--col-md-3-->
                <div class="col-md-3 our_team_img text-center">
                    <?php dynamic_sidebar('about-us-widget-2'); ?>
                </div><!--col-md-3-->
                <div class="col-md-3 our_team_img text-center">
                    <?php dynamic_sidebar('about-us-widget-3'); ?>
                </div><!--col-md-3-->
                <div class="col-md-3 our_team_img text-center">
                    <?php dynamic_sidebar('about-us-widget-4'); ?>
                </div><!--col-md-3-->
            </div><!--row-->
        </div><!--container-->
    </section>
    <!-- Section End -->

<?php
get_footer();
?>