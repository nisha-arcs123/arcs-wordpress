<?php
/*
Template Name:Web App Development Page 
*/
?>

<div class="outer-box-mobile-page w-full ox-h">
    <?php get_header() ?>

    <div class="ui-banner full-vh p-rel">
        <div class="user-box-right user-box-1 z-1 padding-8">
            <div class="banner-icon">
                <img src="<?php echo get_template_directory_uri() ?>/images/ui-mask-group.svg" alt="">
            </div>
            <span>SaaS development services</span>
        </div>
        <div class="user-box-left z-1 user-box-1 padding-8">
            <div class="banner-icon">
                <img src="<?php echo get_template_directory_uri() ?>/images/ui-icons.svg" alt="">
            </div>
            <span>web app developmen</span>
        </div>
        <div class="line-design left-line-box">
            <img class="left-inner-line p-rel z-0" src="<?php echo get_template_directory_uri() ?>/images/ui-left-banner-line.svg" alt="">
            <div class="line-logo-box z-1">
                <img src="<?php echo get_template_directory_uri() ?>/images/ui-group-37931.svg" alt="">
            </div>
            <span>Effective Navigation</span>
        </div>
        <div class="line-design right-line-box">
            <img class="right-inner-line p-rel z-0" src="<?php echo get_template_directory_uri() ?>/images/ui-right-banner-line.svg" alt="">
            <div class="line-logo-box z-1">
                <img src="<?php echo get_template_directory_uri() ?>/images/ui-group-37931.svg" alt="">
            </div>
            <span>Guided Behavior</span>
        </div>
        <img class="z-1 banner-image" src="<?php echo get_template_directory_uri() ?>/images/image153.svg" alt="">
        <div class="banner-blur-circle-1"></div>
        <div class="ed-banner-details banner-details z-2 w-50">
            <h1 class="ed-banner-heading inner-banner-heading mb-16 mt-0 m-auto tx-center"><?php echo the_field('banner_heading_web_app'); ?></h1>
            <p class="ed-banner-content inner-banner-content mb-28 mt-0 m-auto tx-center"><?php echo the_field('banner_paragraph_web_app'); ?></p>
            <button class="banner-button primary-button m-auto">START BUILDING TODAY</button>
        </div>
    </div>

    <div class="what-we-do wds p-rel bx-border-box">
        <img class="mouse-gif" src="<?php echo get_template_directory_uri(); ?>/images/mouse-gif.gif" alt="" />
 
        <span class="section-title mb-20">
            <?php echo the_field('home-section1-heading') ?>
        </span>
 
        <h1 class="section-heading mb-12 mt-0 wwd-heading">
          <?php echo the_field('home-section1-mainheading') ?>
        </h1>

        <p class="section-content mb-12">
          <?php echo the_field('home-section1-content'); ?>
        </p>
 
        <div class="boxes-wrapper mt-40">
          <div class="inner-box bx-border-box t-3 cp">
            <p class="card-title inner-box-heading mt-0">Advanced Data, AI, and ML</p>
            <p class="section-content">
              Cutting-edge AI solutions for business optimization and growth.
            </p>
            <img class="mt-20 mb-12 mr-0 ml-0 main-img" src="<?php echo get_template_directory_uri(); ?>/images/wwdimg-1.svg" alt="" />
            <div class="learn-more tx-dec-none t-3 p-rel">
              <img
                class="learn-more-arrow"
                src="<?php echo get_template_directory_uri(); ?>/images/arrow - right.svg"
                alt=""
              />
              <span class="section-content">Learn More</span></div
            >
          </div>
 
          <div class="inner-box bx-border-box t-3 cp">
            <p class="card-title inner-box-heading mt-0">Web Development</p>
            <p class="section-content">
              Dynamic and interactive web applications for a seamless user
              experience.
            </p>
            <img class="mt-20 mb-12 mr-0 ml-0 main-img" src="<?php echo get_template_directory_uri(); ?>/images/wwdimg-2.svg" alt="" />
            <div class="learn-more tx-dec-none t-3 p-rel">
              <img
                class="learn-more-arrow margin-0"
                src="<?php echo get_template_directory_uri(); ?>/images/arrow - right.svg"
                alt=""
              />
              <span class="section-content">Learn More</span></div
            >
          </div>
 
          <div class="inner-box bx-border-box t-3 cp">
            <p class="card-title inner-box-heading mt-0">Mobile APP Development</p>
            <p class="section-content">
              Reach a wider audience with hybrid mobile app development.
            </p>
            <img class="mt-20 mb-12 mr-0 ml-0 main-img" src="<?php echo get_template_directory_uri(); ?>/images/wwdimg-3.svg" alt="" />
            <div class="learn-more tx-dec-none t-3 p-rel">
              <img
                class="learn-more-arrow margin-0"
                src="<?php echo get_template_directory_uri(); ?>/images/arrow - right.svg"
                alt=""
              />
              <span class="section-content">Learn More</span></div
            >
          </div>
 
          <div class="inner-box bx-border-box t-3 cp">
            <p class="card-title inner-box-heading mt-0">UI/UX Design</p>
            <p class="section-content">
              Stunning and brand-centric designs to captivate your audience.
            </p>
            <img class="mt-20 mb-12 mr-0 ml-0 main-img" src="<?php echo get_template_directory_uri(); ?>/images/wwdimg-4.svg" alt="" />
            <div class="learn-more tx-dec-none t-3 p-rel">
              <img
                class="learn-more-arrow margin-0"
                src="<?php echo get_template_directory_uri(); ?>/images/arrow - right.svg"
                alt=""
              />
             <span class="section-content">Learn More</span> </div
            >
          </div>
        </div>
      </div> 









    <?php get_footer(); ?>