<?php
/*
Template Name: Services Page 
*/
get_header();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;
    0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sofia+Sans:ital,wght@0,1..1000;1,1..1000&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="./CSS/style.css" />
    <link rel="stylesheet" href="./CSS/owl.carousel.css" />
    <link rel="stylesheet" href="./CSS/owl.theme.default.css" />
    <link rel="stylesheet" href="./CSS/owl.theme.green.css" />
    <link rel="stylesheet" href="./CSS/services.css" />
    <script src="./js_files/jquery.min.js"></script>
    <script src="./js_files/owl.carousel.min.js"></script>
    <title>Services</title>
</head>

<body>
    <div class="services-outer">
        <div class="services-content-wrapper">
            <h1 class="services-heading">
                ARCS INFOTECH HAS BEEN PROVIDING YOU WITH THESE <span class="bold-text">SERVICES</span>
            </h1>
            <div class="services-section">
                <div class="left-part">
                    <img src="<?php echo get_template_directory_uri() ?>/images/services-img.svg" alt="" />
                </div>
                <div class="right-part">
                    <ul class="services-list">
                        <li class="service">
                            <div class="service-logo">
                                <img src="<?php echo get_template_directory_uri() ?>/images/television.svg" alt="" />
                            </div>
                            <h4 class="service-name">Custom SOftware Development</h4>
                            <img src="<?php echo get_template_directory_uri() ?>/images/arrow.svg" alt="" />
                        </li>
                        <li class="service">
                            <div class="service-logo">
                                <img src="<?php echo get_template_directory_uri() ?>/images/television.svg" alt="" />
                            </div>
                            <h4 class="service-name">Mobile App Consulting</h4>
                            <img src="<?php echo get_template_directory_uri() ?>/images/arrow.svg" alt="" />
                        </li>
                        <li class="service">
                            <div class="service-logo">
                                <img src="<?php echo get_template_directory_uri() ?>/images/cup.svg" alt="" />
                            </div>
                            <h4 class="service-name">Experience Design</h4>
                            <img src="<?php echo get_template_directory_uri() ?>/images/arrow.svg" alt="" />
                        </li>
                        <li class="service">
                            <div class="service-logo">
                                <img src="<?php echo get_template_directory_uri() ?>/images/cup.svg" alt="" />
                            </div>
                            <h4 class="service-name">Dedicated Development Team</h4>
                            <img src="<?php echo get_template_directory_uri() ?>/images/arrow.svg" alt="" />
                        </li>
                        <li class="service">
                            <div class="service-logo">
                                <img src="<?php echo get_template_directory_uri() ?>/images/cup.svg" alt="" />
                            </div>
                            <h4 class="service-name">Application Modernization</h4>
                            <img src="<?php echo get_template_directory_uri() ?>/images/arrow.svg" alt="" />
                        </li>
                        <li class="service">
                            <div class="service-logo">
                                <img src="<?php echo get_template_directory_uri() ?>/images/cup.svg" alt="" />
                            </div>
                            <h4 class="service-name">Custom Software Development</h4>
                            <img src="<?php echo get_template_directory_uri() ?>/images/arrow.svg" alt="" />
                        </li>
                        <li class="service">
                            <div class="service-logo">
                                <img src="<?php echo get_template_directory_uri() ?>/images/cup.svg" alt="" />
                            </div>
                            <h4 class="service-name">Product Development</h4>
                            <img src="<?php echo get_template_directory_uri() ?>/images/arrow.svg" alt="" />
                        </li>
                        <li class="service">
                            <div class="service-logo">
                                <img src="<?php echo get_template_directory_uri() ?>/images/cup.svg" alt="" />
                            </div>
                            <h4 class="service-name">Software Consulting Services</h4>
                            <img src="<?php echo get_template_directory_uri() ?>/images/arrow.svg" alt="" />
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php get_footer();?>