<?php
/**
* Template Name: About Template.
 *
 * @package Warraich Traders
*/
get_header();
?>

    <!-- Section Start -->
    <?php if ( true == get_theme_mod( 'toggle_banner', 'on' ) ) : ?>
        <section class="bg_about bg_img">
            <div class="container">
                <div class="row py-5">
                    <div class="col-md-12">
                        <h4 class="text-center text-white">About Us</h4>
                        <div class="text-center text-white p-3">
                            <a href="http://localhost/wordpress/" class="text-decoration-none text-white">Home</a>
                            &nbsp;
                            <img src="https://img.icons8.com/glyph-neue/20/FFFFFF/long-arrow-right.png"/>
                            &nbsp;
                            <a href="" class="text-decoration-none text-white">About</a>
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
    <section style="background:#fafafc; padding:30px 0 30px 0;">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center about-title">
                    <?php dynamic_sidebar('about-title'); ?>
                </div><!--col-12-->
            </div><!--row-->
            <div class="row my-5 bg-white">
                <?php
                    $project_args = array(
                        'post_type' => 'team',
                        'posts_per_page' => 8,
                        'order' => 'ASC',
                    );
                    $project_posts = new WP_Query($project_args);
                    while($project_posts->have_posts()) {
                        $project_posts->the_post();
                ?>
                    <div class="col-md-3 our_team_img text-center">
                        <?php the_content(); ?>
                    </div><!--col-md-3-->
                <?php } ?>
            </div><!--row-->
        </div><!--container-->
    </section>
    <!-- Section End -->

<?php
get_footer();
?>