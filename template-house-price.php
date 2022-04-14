<?php
/**
 * Template Name: House Price Template.
 *
 * @package Warraich Traders
*/
get_header();
?>

    <!-- Section Start -->
    <?php if ( true == get_theme_mod( 'toggle_banner', 'on' ) ) : ?>
        <section class="bg_house_price bg_img">
            <div class="container">
                <div class="row py-5">
                    <div class="col-md-12">
                        <h4 class="text-center text-white">House Price</h4>
                        <div class="text-center text-white p-3">
                            <a href="http://localhost/wordpress/" class="text-decoration-none text-white">Home</a>
                            &nbsp;
                            <img src="https://img.icons8.com/glyph-neue/20/FFFFFF/long-arrow-right.png"/>
                            &nbsp;
                            <a href="" class="text-decoration-none text-white">House Price</a>
                        </div>
                    </div><!--col-md-12-->
                </div><!--row-->
            </div><!--container-->
        </section>
    <?php endif; ?>
    <!-- Section End -->

    <!-- Section Start -->
    <section>
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-12 py-4">
                    <?php dynamic_sidebar('house_price_widget'); ?>
                </div><!--col-md-12-->
            </div><!--row-->
        </div><!--container-->
    </section>
    <!-- Section End -->

<?php
get_footer();
?>