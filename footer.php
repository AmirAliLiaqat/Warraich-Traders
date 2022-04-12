<?php
/**
 * Footer Template
 *
 * @package Warraich Traders
*/
?>

    <!-- Footer Start -->
    <footer class="bg_img">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-4">
                    <?php dynamic_sidebar('footer-1'); ?>
                </div><!--col-md-4-->
                <div class="col-md-4">
                    <?php dynamic_sidebar('footer-2'); ?>
                </div><!--col-md-4-->
                <div class="col-md-4">
                    <?php dynamic_sidebar('footer-3'); ?>
                </div><!--col-md-4-->
            </div><!--row-->

            <?php if ( true == get_theme_mod( 'toggle_footer_copyright', 'on' ) ) : ?>
                <hr class="text-secondary">
                <div class="col-12 d-flex justify-content-center copyright_text">
                    <p>
                        <?php 
                            echo get_theme_mod( 'footer_copyright_text', '© 2022 Warraich Traders. All Rights Reserved.' . '<br>' . 'Designed and Developed by 
                            <a href="https://bytebunch.com" target="_blank" class="text-decoration-none text-white">ByteBunch</a>' ) 
                        ?>
                    </p>
                </div><!--col-12-->
            <?php endif; ?>
            
        </div><!--container-->
    </footer>
    <!-- Footer End -->

    <?php wp_footer(); ?>

</body>
</html>