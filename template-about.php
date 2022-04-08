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
                        <img src="<?php echo get_template_directory_uri(); ?>/images/about1.png" class="w-100">
                    </div><!--about_img-->
                </div><!--col-md-6-->
                <div class="col-md-6">
                    <h2 class="mt-5 mb-3">About Warraich Traders</h2>
                    <p>
                        We have completed 5 projects, each project consists of around 50 houses. 
                        We’re a challenge driven team that loves to build meaningful living spaces 
                        with people that share the same passion and values as we have. Our goal is 
                        to create New Pakistan, by helping each other we will build a happy housing 
                        community where homeless poor families can get low budget houses in 6 
                        years easy installments. We also provide job and shelter for jobless poor 
                        people.
                    </p>
                    <div class="row">
                        <div class="col-md-6">
                            <ul>
                                <li>Dependable And Honesty</li>
                                <li>Planning Schedule</li>
                                <li>100% Customer Satisfaction</li>
                            </ul>
                        </div><!--col-md-6-->
                        <div class="col-md-6">
                            <ul>
                                <li>Dependable And Honesty</li>
                                <li>Planning Schedule</li>
                                <li>100% Customer Satisfaction</li>
                            </ul>
                        </div><!--col-md-6-->
                    </div><!--row-->
                </div><!--col-md-6-->
            </div><!--row-->
        </div><!--container-->
    </section>
    <!-- Section End -->

    <!-- Section Start -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center">Our Team Members</h2>
                    <div class="text-center pt-3">
						<p class="" style="max-width:60%; margin:0 auto;">
                            Warraich Traders was founded with the idea that nothing delivers superior quality and craftsmanship better then a solid team effort. Our exceptional team is comprised of some of the most experienced professionals in the industry.
                        </p> 
					</div><!--text-center-->
                </div><!--col-12-->
            </div><!--row-->
            <div class="row my-5">
                <div class="col-md-3 our_team_img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/team1.jpg">
                    <h4 class="text-center mt-2">CH Imtiaz Warraich</h4>
                    <p class="text-center">CEO</p>
                    <p class="text-center"><strong>Ph#</strong> 0300-4516820</p>
                </div><!--col-md-3-->
                <div class="col-md-3 our_team_img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/team2.jpg">
                    <h4 class="text-center mt-2">Waqar Younas Warraich</h4>
                    <p class="text-center">Director</p>
                    <p class="text-center"><strong>Ph#</strong> 0324-4074244</p>
                </div><!--col-md-3-->
                <div class="col-md-3 our_team_img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/team3.jpg">
                    <h4 class="text-center mt-2">M.Iqbal</h4>
                    <p class="text-center">Chief Adviser</p>
                    <p class="text-center"><strong>Ph#</strong> 0322-8483876</p>
                </div><!--col-md-3-->
                <div class="col-md-3 our_team_img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/team4.jpg">
                    <h4 class="text-center mt-2">Qaisar Bashir</h4>
                    <p class="text-center">General Manager</p>
                    <p class="text-center"><strong>Ph#</strong> 0322-4274625</p>
                </div><!--col-md-3-->
            </div><!--row-->
        </div><!--container-->
    </section>
    <!-- Section End -->

<?php
get_footer();
?>