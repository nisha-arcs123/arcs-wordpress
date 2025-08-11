<?php
/*
Template Name: Dedicated Development Team Page 
*/
?>
<div class="outer-box-dedicated-team w-full ox-h">
    <img class="the-lines" src="<?php echo get_template_directory_uri() ?>/images/the-lines.svg" alt="" />
    <?php get_header(); ?>

    <div class="ui-banner full-vh p-rel">
        <div class="user-exp user-box z-2 padding-8">
            <div class="icon">
                <img src="<?php echo get_template_directory_uri() ?>/images/Mask group (18).svg" alt="">
            </div>
            <span>UI/UX Designer</span>
        </div>
        <div class="user-exp2 user-box z-2 padding-8">
            <div class="icon">
                <img src="<?php echo get_template_directory_uri() ?>/images/Mask group (18).svg" alt="">
            </div>
            <span>UI/UX Designer</span>
        </div>
        <div class="user-interface z-2 user-box padding-8">
            <span>Full Stack Developer</span>
            <div class="icon">
                <img src="<?php echo get_template_directory_uri() ?>/images/Mask group (17).svg" alt="">
            </div>
        </div>
        <div class="user-interface2 z-2 user-box padding-8">
            <span>Full Stack Developer</span>
            <div class="icon">
                <img src="<?php echo get_template_directory_uri() ?>/images/Mask group (17).svg" alt="">
            </div>
        </div>
        <div class="line-design guided">
            <img class="guided-line p-rel z-0" src="<?php echo get_template_directory_uri() ?>/images/Vector 110.svg" alt="">

        </div>
        <img class="z-1 banner-girl-image" src="<?php echo get_template_directory_uri() ?>/images/Ellipse 3925.svg" alt="">
        <img src="<?php echo get_template_directory_uri() ?>/images/Group 38248.svg" alt="" class="p-rel img-inside-img">
        <div class="ui-banner-blur-circle"></div>
        <div class="ui-banner-details z-2">
            <h1 class="inner-banner-heading mb-16 m-auto tx-center"><?php echo the_field('dedicated_banner_heading'); ?></h1>
            <p class="inner-banner-content mb-28 m-auto tx-center"><?php echo the_field('dedicated_banner_description'); ?></p>
            <button class="banner-button primary-button m-auto">START BUILDING TODAY</button>
        </div>
    </div>


    <div class="technos-wrapper w-full">
        <div class="technos m-auto wds">
            <p class="section-title m-auto w-fc tx-center"><?php echo the_field('dedicated_section1_heading1'); ?></p>
            <p class="section-heading mt-0 tx-center"><?php echo the_field('dedicated_section1_heading_2'); ?></p>
            <p class="section-content tx-center"><?php echo the_field('dedicated_section1_description'); ?> </p>
            <div class="boxes-wrapper mt-40">
                <div class="box padding-16 bx-border-box p-rel">

                    <div class="logo">
                        <img src="<?php echo get_template_directory_uri() ?>/images/tvtv.svg" alt="">
                    </div>
                    <p class="card-title ">Focused Expertise</p>

                    <p class="card-content">A dedicated team brings specialized skills tailored to your project's requirements, ensuring top-notch quality.</p>


                </div>
                <div class="box padding-16 bx-border-box p-rel">

                    <div class="logo">
                        <img src="<?php echo get_template_directory_uri() ?>/images/tvtv.svg" alt="">
                    </div>
                    <p class="card-title ">Cost Efficiency</p>

                    <p class="card-content">By hiring a dedicated team, you can reduce overhead costs associated with recruitment, training, and infrastructure.</p>

                </div>
                <div class="box padding-16 bx-border-box p-rel">

                    <div class="logo">
                        <img src="<?php echo get_template_directory_uri() ?>/images/tvtv.svg" alt="">
                    </div>
                    <p class="card-title ">Scalability</p>

                    <p class="card-content">Easily scale your team up or down based on project demands without the challenges of traditional hiring</p>

                </div>
                <div class="box padding-16 bx-border-box p-rel">

                    <div class="logo">
                        <img src="<?php echo get_template_directory_uri() ?>/images/tvtv.svg" alt="">
                    </div>
                    <p class="card-title ">Enhanced Collaboration</p>
                    <p class="card-content">With a team committed to your project, communication is streamlined, leading to better alignment with your business goals.</p>

                </div>
            </div>
        </div>
    </div>

    <div class="transform-future-wrapper blue-background w-full padding-40 bx-border-box p-rel">
        <img src="<?php echo get_template_directory_uri() ?>/images/Vector 11 (10).svg" alt="" class="z-img1 z-0">
        <div class="circle1 z-0"></div>
        <div class="transform-future m-auto wds">
            <div class="left-part z-10">
                <p class="section-title-text mt-0 mb-12"><?php echo the_field('dedicated_section2_heading1'); ?></p>
                <p class="section-heading-white mt-0 mb-20"><?php echo the_field('dedicated_section2_heading2'); ?> </p>
                <p class="section-content-white mt-0 mb-32"> <?php echo the_field('dedicated_section2_description'); ?> </p>
                <button class="primary-button white-button">Let's Work Together</button>
            </div>
            <div class="right-part padding-20 bx-border-box z-1">
                <img class="w-full" src="<?php echo get_template_directory_uri() ?>/images/image (14).svg" alt="">
            </div>
        </div>
        <div class="circle2 z-0"></div>
        <div class="circle3 z-0"></div>
        <img src="<?php echo get_template_directory_uri() ?>/images/Vector 12 (5).svg" alt="" class="z-img2 z-0">
    </div>


    <div class="transform-future-wrapper gray-backgorund w-full padding-40 bx-border-box">
        <div class="transform-future m-auto wds">
            <div class="left-part">
                <p class="section-title"><?php echo the_field('dedicated_section3_heading1'); ?></p>
                <p class="section-heading"><?php echo the_field('dedicated_section3_heading2'); ?></p>
                <p class="card-content mt-0 mb-32"> <?php echo the_field('dedicated_section3_description'); ?></p>
                <button class="primary-button">Let's Work Together</button>
            </div>
            <div class="right-part padding-20 bx-border-box">
                <img class="w-full" src="<?php echo get_template_directory_uri() ?>/images/image (19).svg" alt="">
            </div>
        </div>
    </div>

    <div class="transform-future-wrapper gray-backgorund w-full padding-40 bx-border-box ">
        <div class="transform-future m-auto wds">
            <div class="right-part padding-20 bx-border-box colorful-background">
                <img class="w-full" src="<?php echo get_template_directory_uri() ?>/images/image (18).svg" alt="">
            </div>
            <div class="left-part">
                <p class="section-title"><?php echo the_field('dedicated_section4_heading1'); ?></p>
                <p class="section-heading"><?php echo the_field('dedicated_section4_heading2'); ?></p>
                <p class="card-content mt-0 mb-32"> We have partnered with numerous clients to bring their visions to life. For instance, we helped [Client Name] develop a robust e-commerce platform that increased their online sales by 50%. benefited from our expertise in mobile app development, resulting in a user-friendly app that enhanced customer engagement significantly.</p>
                <button class="primary-button">Let's Work Together</button>
            </div>

        </div>
    </div>


    <div class="digital-transform-wrapper wds m-auto">
        <div class="overley"></div>
        <div class="digital-transformation m-auto p-rel">
            <div class="left-part p-rel">
                <p class="section-title z-1"><?php echo the_field('dedicated_section5_heading1'); ?></p>
                <p class="section-heading z-1"><?php echo the_field('dedicated_section5_heading2'); ?></p>
                <p class="card-content z-1"><?php echo the_field('dedicated_section5_description'); ?></p>
            </div>
            <div class="right-part">
                <img src="<?php echo get_template_directory_uri() ?>/images/image (17).svg" alt="">
            </div>

            <img src="<?php echo get_template_directory_uri() ?>/images/Vector 11 (14).svg" alt="" class="z-img1 z-0">
            <div class="circle4 z-0"></div>
        </div>
    </div>
    <?php get_footer(); ?>
</div>