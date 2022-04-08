<?php
/**
 * Header Template
 *
 * @package Warraich Traders
*/
?>
<!DOCTYPE html>
<html lang="en" style="margin-top: 0px !important;">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>

    <!-- Header Start -->
    <header>
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8">
                        <div class="top-site-bar">
                            <ul class="list-unstyled m-0 p-0">
                                <li><img src="https://img.icons8.com/glyph-neue/20/333333/phone.png"/></i>&nbsp;&nbsp; 0300-4516820</li>
                                <li><img src="https://img.icons8.com/glyph-neue/20/333333/clock.png"/></i>&nbsp;&nbsp; MON - SUN: 09 AM - 09 PM</li>
                                <li><a href="" class="site-ancer"><img src="https://img.icons8.com/glyph-neue/20/333333/secured-letter.png"/></i>&nbsp;&nbsp; ch_imtiazali@yahoo.com</a></li>
                            </ul>
                        </div><!--top-site-bar-->
                    </div><!--col-xl-8-->
                    <div class="col-xl-4 d-flex justify-content-end">
                        <div class="top-site-bar">
                            <ul class="list-unstyled m-0 p-0">
                                <li><a href="" class="site-ancer d-none"><i class="fas fa-power-off"></i></a></li>
                                <li><a href="" class="site-ancer"><img src="https://img.icons8.com/glyph-neue/20/333333/twitter.png"/></i></a></li>
                                <li><a href="login.php" class="site-ancer"><img src="https://img.icons8.com/glyph-neue/20/333333/logout-rounded.png"/></i></a></li>
                            </ul>
                        </div><!--top-site-bar-->
                        <div class="clearboth"></div><!--clearboth-->
                    </div><!--col-xl-4-->
                </div><!--row-->
            </div><!--container-->
       </div><!--header-top-->
       <hr class="mt-2 mb-0">

        <div class="header-main">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <input type="checkbox" name="" id="check">
            
                    <div class="logo-container">
                        <a href="" class="site-ancer"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt=""></a>
                    </div><!--logo-container-->

                    <div class="nav-btn">
                        <div class="nav-links">
                            <ul>
                                <li class="nav-link" style="--i: .6s">
                                    <a href="#">Home</a>
                                </li>
                                <li class="nav-link" style="--i: .85s">
                                    <a href="#">Menu<i class="fas fa-caret-down"></i></a>
                                </li>
                                <li class="nav-link" style="--i: 1.1s">
                                    <a href="#">Services<i class="fas fa-caret-down"></i></a>
                                </li>
                                <li class="nav-link" style="--i: 1.35s">
                                    <a href="#">About</a>
                                </li>
                            </ul>
                        </div><!--nav-links-->

                        <div class="log-sign" style="--i: 1.8s">
                            <a href="#" class="btn solid">Log in</a>
                            <a href="#" class="btn solid">Register</a>
                        </div><!--log-sign-->
                    </div><!--nav-btn-->

                    <div class="hamburger-menu-container">
                        <div class="hamburger-menu">
                            <div></div>
                        </div>
                    </div><!--hamburger-menu-container-->
                </div><!--container-->
            </nav>
       </div><!--header-main-->
    </header>
    <!-- Header End -->