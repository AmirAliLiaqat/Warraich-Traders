<?php
/**
 * Template Name: House Price Template.
 *
 * @package Warraich Traders
*/
get_header();
?>

    <!-- Section Start -->
    <section class="bg_house_price bg_img">
        <div class="container">
            <div class="row py-5">
                <div class="col-md-12">
                    <h4 class="text-center text-white">House Price</h4>
                    <div class="text-center text-white p-3">
                        <a href="index.php" class="text-decoration-none text-white">Home</a>
                        &nbsp;
                        <img src="https://img.icons8.com/glyph-neue/20/FFFFFF/long-arrow-right.png"/>
                        &nbsp;
                        <a href="house-price.php" class="text-decoration-none text-white">House Price</a>
                    </div>
                </div><!--col-md-12-->
            </div><!--row-->
        </div><!--container-->
    </section>
    <!-- Section End -->

    <!-- Section Start -->
    <section>
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-12">
                    <h1 class="site_h1 my-4">House Plans</h1>
                    <div class="house_plan_img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/house_plans.jpg" class="w-100">
                    </div><!--house_plan_img-->
                </div><!--col-md-12-->
            </div><!--row-->
        </div><!--container-->
    </section>
    <!-- Section End -->

<?php
get_footer();
?>