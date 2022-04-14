<?php
/**
* Template Name: Contact Template.
 *
 * @package Warraich Traders
*/
get_header();
?>

    <!-- Section Start -->
    <?php if ( true == get_theme_mod( 'toggle_banner', 'on' ) ) : ?>
        <section class="bg_contact bg_img">
            <div class="container">
                <div class="row py-5">
                    <div class="col-md-12">
                        <h4 class="text-center text-white">Contact Us</h4>
                        <div class="text-center text-white p-3">
                            <a href="http://localhost/wordpress/" class="text-decoration-none text-white">Home</a>
                            &nbsp;
                            <img src="https://img.icons8.com/glyph-neue/20/FFFFFF/long-arrow-right.png"/>
                            &nbsp;
                            <a href="" class="text-decoration-none text-white">Contact Us</a>
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
            <div class="row my-4">
                <div class="col-md-6">
                    <h3 class="site_h1 site_h3 mb-4">
                        <?php 
                            echo get_theme_mod( 'contact_header', 'Contact Details' );
                        ?>
                    </h3>
                    <div class="icon-block d-flex justify-content-start">
                        <div>
                            <div class="icon-wrap">
                                <img src="https://img.icons8.com/glyph-neue/20/074284/marker.png"/>
                            </div><!--icon-wrap-->
                        </div>
                        <div class="icon-content mx-4">         
                        <h4>Address:</h4>
                        <p>
                            <?php 
                                echo get_theme_mod( 'contact_text_1', 'Near 5 No.Bus Stop, Main Ferozpur Road, Kahna Nau, Lahore, Pakistan' );
                            ?>
                        </p>
                        </div><!--icon-content-->
                    </div><!--icon-block-->
                    <div class="icon-block d-flex justify-content-start">
                        <div>
                            <div class="icon-wrap">
                                <img src="https://img.icons8.com/glyph-neue/20/074284/phone.png"/>
                            </div><!--icon-wrap-->
                        </div>
                        <div class="icon-content mx-4">         
                        <h4>Phone:</h4>
                        <p>
                            <?php 
                                echo get_theme_mod( 'contact_text_2', '0300-4516820' );
                            ?>
                        </p>
                        </div><!--icon-content-->
                    </div><!--icon-block-->
                    <div class="icon-block d-flex justify-content-start">
                        <div>
                            <div class="icon-wrap">
                                <img src="https://img.icons8.com/glyph-neue/20/074284/secured-letter.png"/>
                            </div><!--icon-wrap-->
                        </div>
                        <div class="icon-content mx-4">         
                        <h4>Email:</h4>
                        <p>
                            <?php 
                                echo get_theme_mod( 'contact_text_3', 'ch_imtiazali@yahoo.com' );
                            ?>
                        </p>
                        </div><!--icon-content-->
                    </div><!--icon-block-->
                    <div class="icon-block d-flex justify-content-start">
                        <div>
                            <div class="icon-wrap">
                                <img src="https://img.icons8.com/glyph-neue/20/074284/clock.png"/>
                            </div><!--icon-wrap-->
                        </div>
                        <div class="icon-content mx-4">         
                        <h4>Mon - Sun:</h4>
                        <p>
                            <?php 
                                echo get_theme_mod( 'contact_text_4', '09 AM - 09 PM' );
                            ?>
                        </p>
                        </div><!--icon-content-->
                    </div><!--icon-block-->
                </div><!--col-md-6-->
                <div class="col-md-6 mb-3">
                    <?php 
                        require 'conn.php';

                        if(isset($_POST['send'])) {
                            $name = $_POST['name'];
                            $email = $_POST['email'];
                            $message = $_POST['message'];

                            $contact = "INSERT INTO `contact_us`(`name`, `email`, `message`) 
                            VALUES ('$name','$email','$message')";
                            $contact_query = mysqli_query($conn, $contact) or die("Query Unsuccessfull");

                            if($contact_query) {
                                echo " <div class='row my-3'>
                                    <div class='alert alert-success alert-dismissible fade show' role='alert'>
                                        <strong>Message send successfully...</strong>.
                                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                    </div>
                                </div>";
                            } else {
                                echo " <div class='row my-3'>
                                    <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                        <strong>Message can't be send. Please try again...</strong>.
                                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                    </div>
                                </div>";
                            }
                        }
                    ?>
                    <form action="" method="post">
                        <input type="text" class="form-control mb-3" name="name" placeholder="Your Name*" required>
                        <input type="text" class="form-control mb-3" name="email" placeholder="Your Email*" required>
                        <textarea name="message" class="w-100 form-control mb-3" cols="30" rows="10" placeholder="Your Message ..."></textarea>
                        <button class="btn site_btn text-white" name="send">
                            <?php 
                                echo get_theme_mod( 'contact_button', 'Send Message' );
                            ?>
                        </button>
                    </form>
                </div><!--col-md-6-->
            </div><!--row-->
        </div><!--container-->
    </section>
    <!-- Section End -->

    <!-- Section Start -->
    <?php if ( true == get_theme_mod( 'toggle_map', 'on' ) ) : ?>
        <section>
            <div class="row">
                <div class="col-md-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3406.915198271549!2d74.3683408154216!3d31.361319262115817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391907ad9027b2e1%3A0x87a507057bfb56a3!2sWarraich%20Traders!5e0!3m2!1sen!2s!4v1635856323284!5m2!1sen!2s" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div><!--col-md-12-->
            </div><!--row-->
        </section>
    <?php endif; ?>
    <!-- Section End -->

<?php
get_footer();
?>