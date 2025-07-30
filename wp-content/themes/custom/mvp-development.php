<?php
/*
Template Name: Mvp Development Page 
*/
?>
<div class="outer-box-mvp-page p-rel o-h">
    <img class="the-lines" src="<?php echo get_template_directory_uri() ?>/images/the-lines.svg" alt="" />
    <?php get_header(); ?>

    <div class="mvp-banner full-vh p-rel">
        <div class="mvp-user-box-right user-box-right user-box-1 z-1 padding-8">
            <div class="banner-icon">
                <img src="<?php echo get_template_directory_uri() ?>/images/ui-mask-group.svg" alt="">
            </div>
            <span>Total Users</span>
        </div>
        <div class="mvp-user-box-left user-box-left z-1 user-box-1 padding-8">
            <div class="banner-icon">
                <img src="<?php echo get_template_directory_uri() ?>/images/ui-icons.svg" alt="">
            </div>
            <span>View All Data</span>
        </div>
        <div class="line-design left-line-box">
            <img class="left-inner-line p-rel z-0" src="<?php echo get_template_directory_uri() ?>/images/mvp-left-line.svg" alt="">
            <div class="line-logo-box z-1">
                <img src="<?php echo get_template_directory_uri() ?>/images/ui-group-37931.svg" alt="">
            </div>
            <span>Effective Navigation</span>
        </div>
        <div class="line-design right-line-box">
            <img class="right-inner-line p-rel z-0" src="<?php echo get_template_directory_uri() ?>/images/mvp-right-line.svg" alt="">
            <div class="line-logo-box z-1">
                <img src="<?php echo get_template_directory_uri() ?>/images/ui-group-37931.svg" alt="">
            </div>
            <span>Guided Behavior</span>
        </div>
        <img class="z-0 mvp-graph-left" src="<?php echo get_template_directory_uri() ?>/images/MVP_LGroup 38157.svg" alt="">
        <img class="z-0 mvp-graph-right" src="<?php echo get_template_directory_uri() ?>/images/MVP_hGr38158.svg" alt="">
        <img class="z-1 banner-image mvp-banner-image" src="<?php echo get_template_directory_uri() ?>/images/MVPOpportunities.svg" alt="">
        <img class="z-3 mvp-banner-image-1" src="<?php echo get_template_directory_uri() ?>/images/MVPCreditScore.svg" alt="">
        <img class="z-2 mvp-banner-image-2" src="<?php echo get_template_directory_uri() ?>/images/MVPAssets.svg" alt="">
        <div class="banner-blur-circle-1"></div>
        <div class="mvp-banner-details banner-details z-2">
            <h1 class="banner-heading inner-banner-heading mb-16 mt-0 m-auto tx-center"><?php echo the_field('mvp_banner_heading'); ?></h1>
            <p class="banner-content inner-banner-content mb-28 mt-0 m-auto tx-center"><?php echo the_field('mvp_banner_description'); ?></p>
            <button class="banner-button primary-button m-auto">START BUILDING TODAY</button>
        </div>
    </div>

    <div class="transform-future-wrapper w-full padding-40 bx-border-box">
        <div class="transform-future wds m-auto">
            <div class="left-part">
                <p class="section-title mt-0 mb-12"><?php echo the_field('mvp_section1_heading1'); ?></p>
                <p class="section-heading mt-0 mb-20"><?php echo the_field('mvp_section1_heading_2'); ?></p>
                <p class="card-content mt-0 mb-32"><?php echo the_field('mvp_section1_description'); ?></p>
                <button class="primary-button">LET'S WORK TOGETGHER</button>
            </div>
            <div class="right-part padding-20 bx-border-box">
                <img class="w-full" src="<?php echo get_template_directory_uri() ?>/images/discussion.svg" alt="">
            </div>
        </div>
    </div>


    <div class="mb-120 cs-digital-transform-wrapper">
        <div class="overley"></div>
        <div class="digital-transformation m-auto p-rel">
            <div class="right-part">
                <img src="<?php echo get_template_directory_uri() ?>/images/two-g-dis.svg" alt="">
            </div>
            <div class="left-part p-rel">
                <p class="section-title mt-0 mb-12 z-1"><?php echo the_field('mvp_section2_heading1'); ?></p>
                <p class="section-heading mt-0 mb-20 z-1"><?php echo the_field('mvp_section2_heading2'); ?></p>
                <p class="section-content mt-0 mb-40 z-1"><?php echo the_field('mvp_section2_description'); ?></p>
            </div>
            <img src="<?php echo get_template_directory_uri() ?>/images/Vector 11 (13).svg" alt="" class="z-img1 z-0">
            <div class="circle4 z-0"></div>
        </div>
    </div>

    <div class="services-we-offer wds m-auto">
        <p class="section-title m-auto w-fc tx-center"><?php echo the_field('mvp_section3_heading1'); ?></p>
        <p class="section-heading mb-20 mt-12 tx-center"><?php echo the_field('mvp_section3_heading2'); ?></p>
        <p class="section-content mb-40 tx-center"><?php echo the_field('mvp_section3_description'); ?></p>
        <div class="boxes-wrapper wds m-auto">
            <div class="box mt-32 padding-16 bx-border-box p-rel">
                <div class="logo logo-1">
                    <img src="<?php echo get_template_directory_uri() ?>/images/bulb-logo.svg" alt="">
                </div>
                <p class="card-title  mt-40 mb-12">Vision and Mission</p>
                <p class="card-content">Define the organization’s purpose and long-term aspirations.
                </p>
            </div>
            <div class="box mt-32 padding-16 bx-border-box p-rel">
                <div class="logo logo-2">
                    <img src="<?php echo get_template_directory_uri() ?>/images/bulb-logo.svg" alt="">
                </div>
                <p class="card-title  mt-40 mb-12">SWOT Analysis</p>
                <p class="card-content">Identify strengths, weaknesses, opportunities, and threats to inform decisions.
                </p>
            </div>
            <div class="box mt-32 padding-16 bx-border-box p-rel">
                <div class="logo logo-3">
                    <img src="<?php echo get_template_directory_uri() ?>/images/bulb-logo.svg" alt="">
                </div>
                <p class="card-title  mt-40 mb-12">Objectives and Goals</p>
                <p class="card-content">Set specific, measurable, achievable, relevant, and time-bound (SMART) goals.
                </p>
            </div>
            <div class="box mt-32 padding-16 bx-border-box p-rel">
                <div class="logo logo-4">
                    <img src="<?php echo get_template_directory_uri() ?>/images/bulb-logo.svg" alt="">
                </div>
                <p class="card-title  mt-40 mb-12">Actionable Strategies:</p>
                <p class="card-content">Develop a plan to allocate resources and execute initiatives effectively.
                </p>
            </div>
        </div>
    </div>

    <div class="kf-wrapper">
        <div class="key-features wds m-auto">
            <p class="section-title mt-0 mb-12"><?php echo the_field('mvp_section4_heading1'); ?></p>
            <p class="section-heading mt-0 mb-20"><?php echo the_field('mvp_section4_heading2'); ?></p>
            <p class="section-content kf-main-content mt-0 mb-40"><?php echo the_field('mvp_section4_description'); ?></p>
            <div class="kf-boxes-wrapper">
                <div class="kf-box padding-20 bx-border-box">
                    <p class="box-heading mt-0 mb-0"><span>01</span>User-Centric Improvements</p>
                    <p class="card-content mb-0 mt-12">Evolve the product based on customer feedback and behavior.</p>
                </div>
                <div class="kf-box padding-20 bx-border-box">
                    <p class="box-heading mt-0 mb-0"><span>02</span>Market Relevance</p>
                    <p class="card-content mb-0 mt-12">Adapt to changing market demands and industry trends to maintain competitiveness.</p>
                </div>
                <div class="kf-box padding-20 bx-border-box">
                    <p class="box-heading mt-0 mb-0"><span>03</span>Iterative Development</p>
                    <p class="card-content mb-0 mt-12">Continuously refine and update the product to meet evolving user expectations.</p>
                </div>
                <div class="kf-box padding-20 bx-border-box">
                    <p class="box-heading mt-0 mb-0"><span>04</span>Sustainability</p>
                    <p class="card-content mb-0 mt-12">Focus on long-term growth by optimizing the product for current and future needs.</p>
                </div>
                <div class="kf-box padding-20 bx-border-box">
                    <p class="box-heading mt-0 mb-0"><span>05</span>Increased Value</p>
                    <p class="card-content mb-0 mt-12">Deliver enhanced solutions that strengthen customer satisfaction and retention.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="vision-to-life wds m-auto o-h bx-border-box">
        <div class="content">
            <p class="section-heading mt-0 mb-0"><?php echo the_field('mvp_section5_heading1'); ?> <span class="vision"><?php echo the_field('mvp_section5_span1'); ?></span> <?php echo the_field('mvp_section5_heading2'); ?>
                <span class="start"><?php echo the_field('mvp_section5_span2'); ?></span>
            </p>
            <button class="primary-button mt-40">CALL TO ACTION</button>
        </div>
    </div>

    <div class="transform-future-wrapper w-full padding-40 bx-border-box">
        <div class="transform-future wds m-auto">
            <div class="left-part">
                <p class="section-title mt-0 mb-12"><?php echo the_field('mvp_section6_heading1'); ?></p>
                <p class="section-heading mt-0 mb-20"><?php echo the_field('mvp_section6_heading2'); ?></p>
                <p class="card-content mt-0 mb-32"><?php echo the_field('mvp_section6_description'); ?> </p>
                <button class="primary-button">LET'S WORK TOGETGHER</button>
            </div>
            <div class="right-part padding-20 bx-border-box">
                <img class="w-full" src="<?php echo get_template_directory_uri() ?>/images/boy-with-pen.svg" alt="">
            </div>
        </div>
    </div>

    <?php get_footer(); ?>