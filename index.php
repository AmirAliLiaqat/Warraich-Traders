<?php
/**
 * Main template file!
 *
 * @package Warraich Traders
*/
get_header();
?>

    <!-- Section Start -->
    <section>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div><!--carousel-indicators-->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/banner1.jpg" class="d-block w-100" style="height: 75vh;">
                    <div class="carousel-caption d-none d-md-block" style="bottom: 50%;">
                        <h1>If you want God to bless you, bless others.</h1>
                    </div><!--carousel-caption-->
                </div><!--carousel-item-->
                <div class="carousel-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/banner2.jpg" class="d-block w-100" style="height: 75vh;">
                    <div class="carousel-caption d-none d-md-block" style="bottom: 50%;">
                        <h1>Helping hands are better than praying lips.</h1>
                    </div><!--carousel-caption-->
                </div><!--carousel-item-->
                <div class="carousel-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/banner3.jpg" class="d-block w-100" style="height: 75vh;">
                    <div class="carousel-caption d-none d-md-block" style="bottom: 50%;">
                        <h1>Be the light that helps others see</h1>
                    </div><!--carousel-caption-->
                </div><!--carousel-item-->
            </div><!--carousel-inner-->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div><!--carouselExampleIndicators-->
    </section>
    <!-- Section End -->

    <!-- Section Start -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center">WHy Choose Us?</h2>
                    <div class="text-center">
						<p style="max-width:65%; margin:0 auto;">
                            Warraich traders was founded upon integrity, strong work ethic, our abilities, our people and our partners to provide our clients with the highest satisfaction.
                        </p> 
					</div><!--text-center-->
                </div><!--col-12-->
            </div><!--row-->
            <div class="row my-5">
                <div class="col-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/experience-icon.png">
                    <h4 class="my-3 text-secondary">10+ YEARS EXPERIENCE</h4>
                    <p>
                        Over the course of 10 years, we have built strong and trusting relationships with our clients, subcontractors and suppliers. We understand that partnering at every level is the key to a successful project.
                    </p>
                </div><!--col-4-->
                <div class="col-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/services.png">
                    <h4 class="my-3 text-secondary">PROFESSIONAL SERVICES</h4>
                    <p>
                        With over 10 years experience & real focus on the customer satisfaction, you can found less like that our company structure and quality.
                    </p>
                </div><!--col-4-->
                <div class="col-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/good-material-icon.png">
                    <h4 class="my-3 text-secondary">GOOD MATERIALS</h4>
                    <p>
                        We are always try to use best materials, you know that good quality materials highly cost but we minimize your cost.
                    </p>
                </div><!--col-4-->
            </div><!--row-->
        </div><!--container-->
    </section>
    <!-- Section End -->

    <!-- Section Start -->
    <section class="bg_index bg_img">
        <div class="container">
            <div class="row text-white py-5">
                <div class="col-12">
                    <h2 class="text-center">Recent Projects</h2>
                    <div class="text-center">
						<p class="text-white" style="max-width:50%; margin:0 auto;">
                            Warraich Traders has completed many major construction projects. Below you will find photos from our portfolio to see the type of work we have done.
                        </p> 
					</div><!--text-center-->
                </div><!--col-12-->
            </div><!--row-->

            <div class="row my-4">
                <div class="col-md-3">
                   <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home-project-1.jpg">
                   </a>
                </div><!--col-md-3-->
                <div class="col-md-3">
                   <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home-project-2.jpg">
                   </a>
                </div><!--col-md-3-->
                <div class="col-md-3">
                   <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home-project-3.jpg">
                   </a>
                </div><!--col-md-3-->
                <div class="col-md-3">
                   <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home-project-4.jpg">
                   </a>
                </div><!--col-md-3-->
            </div><!--row-->

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="background: #000;">
                <div class="modal-dialog" style="max-width: 1100px!important;">
                    <div class="modal-content" style="background: none; border: none;">
                        <div class="modal-header" style="border-bottom: none;">
                            <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close" style="font-size: 24px; background: #ccc!important;"></button>
                        </div><!--modal-header-->
                        <div class="modal-body">
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner mx-5" style="width: 900px!important; height: 700px!important;">
                                    <div class="carousel-item active">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/home-project-1.jpg" class="d-block w-100">
                                    </div><!--carousel-item-->
                                    <div class="carousel-item">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/home-project-2.jpg" class="d-block w-100">
                                    </div><!--carousel-item-->
                                    <div class="carousel-item">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/home-project-3.jpg" class="d-block w-100">
                                    </div><!--carousel-item-->
                                    <div class="carousel-item">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/home-project-4.jpg" class="d-block w-100">
                                    </div><!--carousel-item-->
                                    <div class="carousel-item">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/home-project-5.jpg" class="d-block w-100">
                                    </div><!--carousel-item-->
                                    <div class="carousel-item">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/home-project-6.jpg" class="d-block w-100">
                                    </div><!--carousel-item-->
                                    <div class="carousel-item">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/banner3.jpg" class="d-block w-100">
                                    </div><!--carousel-item-->
                                    <div class="carousel-item">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/gallery6.jpg" class="d-block w-100">
                                    </div><!--carousel-item-->
                                </div><!--carousel-inner-->
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true" style="margin-right: 130px;"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div><!--carouselExampleControls-->
                        </div><!--modal-body-->
                    </div><!--modal-content-->
                </div><!--modal-dialog-->
            </div><!--modal-->
            
            <div class="row pb-5">
                <div class="col-md-3">
                   <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home-project-5.jpg">
                   </a>
                </div><!--col-md-3-->
                <div class="col-md-3">
                   <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home-project-6.jpg">
                   </a>
                </div><!--col-md-3-->
                <div class="col-md-3">
                   <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/banner3.jpg">
                   </a>
                </div><!--col-md-3-->
                <div class="col-md-3">
                   <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/gallery6.jpg">
                   </a>
                </div><!--col-md-3-->
            </div><!--row-->
        </div><!--container-->
    </section>
    <!-- Section End -->

    <!-- Section Start -->
    <section>
        <div class="container">
            <div class="row py-5">
                <div class="col-12">
                    <h2 class="text-center">Our Services</h2>
                    <div class="text-center">
						<p class="" style="max-width:50%; margin:0 auto;">
                            At Warraich Traders, performance and service are vitally important. We deliver efficient, timely and competitively low priced service.
                        </p> 
                        <p class="my-4" style=" margin:0 auto;">
                            We don’t believe that quality has to suffer in order to receive a good 
                            price. Quality workmanship at a fair price is what we strive to provide. 
                            We have spent years building valuable relationships with loyal suppliers 
                            and subcontractors. Thus the volume discounts we receive are reflected 
                            in our low pricing. The diversity of our project base is a distinguishing 
                            feature of our company. We take pride in our experienced, 
                            knowledgeable, and dedicated staff, as well as, our ability to use innovated construction techniques to complete projects at a lower cost.
                        </p> 
					</div><!--text-center-->
                </div><!--col-12-->
            </div><!--row-->
        </div><!--container-->
    </section>
    <!-- Section End -->

<?php
get_footer();
?>