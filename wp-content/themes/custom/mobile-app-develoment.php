

<?php
/*
Template Name: Mobile App Development Page 
*/
?>


<div class="outer-box-mobile-app-development w-full ox-h">
        <?php get_header();?>

        <div class="ed-banner full-vh p-rel">
            <div class="ed-inner-box p-rel z-2">
            <div class="z-1 chair-n-bag cb-left">
                <div class="img-circle br-50 light-circle"><img src="<?php echo get_template_directory_uri()?>/images/mad-banner-left-middle.svg" alt=""></div>
            </div>
            <div class="z-1 chair-n-bag cb-right">
                <div class="img-circle br-50 light-circle"><img src="<?php echo get_template_directory_uri()?>/images/mad-banner-right-middle.svg" alt=""></div>
            </div>
            <div class="logo-n-label z-1 management">
                <div class="img-circle br-50 light-circle">
                    <div class="img-circle br-50 dark-circle"><img src="<?php echo get_template_directory_uri()?>/images/mad-banner-left-top.svg" alt=""></div>
                </div>
                <span class="label">Inventory Management</span>
            </div>
            <div class="logo-n-label z-1 efficiency">
                <div class="img-circle br-50 light-circle">
                    <div class="img-circle br-50 dark-circle"><img src="<?php echo get_template_directory_uri()?>/images/mad-banner-left-bottom.svg" alt=""></div>
                </div>
                <span class="label">Optimized efficiency</span>
            </div>
            <div class="logo-n-label z-1 shopping">
                <div class="img-circle br-50 light-circle">
                    <div class="img-circle br-50 dark-circle"><img src="<?php echo get_template_directory_uri()?>/images/mad-banner-right-top.svg" alt=""></div>
                </div>
                <span class="label">Online Shopping</span>
            </div>
            <div class="logo-n-label z-1 market">
                <div class="img-circle br-50 light-circle">
                    <div class="img-circle br-50 dark-circle"><img src="<?php echo get_template_directory_uri()?>/images/mad-banner-right-bottom.svg" alt=""></div>
                </div>
                <span class="label">Market places</span>
            </div>
            </div>
            <img class="z-2 banner-image" src="<?php echo get_template_directory_uri()?>/images/mad-banner-img.svg" alt="">
            <div class="z-1 banner-blur-circle-1"></div>
            <div class="z-0 banner-circle-border br-50"></div>
            <div class="ed-banner-details banner-details z-2">
                <h1 class="ed-banner-heading inner-banner-heading mb-16 mt-0 m-auto tx-center"><?php the_field('md_banner_main_heading')?></h1>
                <p class="ed-banner-content inner-banner-content mb-28 mt-0 m-auto tx-center"><?php the_field('md_banner_content')?></p>
                <button class="banner-button primary-button m-auto">START BUILDING TODAY</button>
            </div>
        </div>

        <div class="transform-future-wrapper w-full padding-40 bx-border-box">
            <div class="transform-future wds m-auto">
                <div class="left-part">
                    <p class="section-title mt-0 mb-12"><?php the_field('md_section_1_subheading')?></p>
                    <p class="section-heading mt-0 mb-20"><?php the_field('md_section_1_mainheading')?></p>
                    <p class="card-content mt-0 mb-32"><?php the_field('md_section_1_content')?></p>
                    <button class="primary-button">LET'S WORK TOGETGHER</button>
                </div>
                <div class="right-part padding-20 bx-border-box">
                    <img class="w-full" src="<?php echo get_template_directory_uri()?>/images/mad-tf-img.svg" alt="">
                </div>
            </div>
        </div>

        <div class="image-text-section-wrapper ec-img-text-wrapper w-full z-1 p-rel">
            <div class="image-text o-h wds m-auto">
            <div class="img-section">
                  <img class="" src="<?php echo get_template_directory_uri()?>/images/mad-section-3.svg" alt="">
            </div>
            <div class="text-section o-h p-rel">
                <div class="section">
                    <p class="section-title mt-0 mb-12"><?php the_field('md_section_2_subheading')?></p>
                    <h2 class="section-heading mb-20 mt-0 z-1 p-rel"><?php the_field('md_section_2_mainheading')?></h2>
                    <p class="inner-content mt-0 mb-4"><?php the_field('md_section_2_content')?></p>
                    <p class="inner-content mt-0 mb-16">What do you love about those apps that could work for your business?</p>
                    <ul class="points padding-0 mt-0 mb-0">
                        <li class="inner-content mb-4 p-rel">Do they have fantastic graphics?</li>
                        <li class="inner-content mb-4 p-rel">Do they streamline communication between you and your team members?</li>
                        <li class="inner-content mb-4 p-rel">Are the notifications relevant and dependable?</li>
                        <li class="inner-content mb-4 p-rel">Are the apps stable and reliable?</li>
                        <li class="inner-content mb-4 p-rel">Have they made their shopping and checkout processes easy?</li>
                        <li class="inner-content mb-4 p-rel">is it user-friendly</li>
                    </ul>
                </div>
            </div>
            </div>
        </div>

        <div class="full-service-development wds m-auto mt-120">
            <p class="section-title m-auto tx-center mt-0 mb-8 w-fc"><?php the_field('md_section_3_subheading')?></p>
            <h2 class="section-heading mt-0 m-auto tx-center mb-20"><?php the_field('md_section_3_mainheading')?></h2>
            <p class="inner-content mb-0 mt-0 tx-center m-auto main-content"><?php the_field('md_section_3_content')?></p>
            <div class="boxes-wrapper">
                <div class="box bx-border-box mt-40">
                    <div class="logo logo-box-1">
                        <img src="<?php echo get_template_directory_uri()?>/images/mad-box-1.svg" alt="">
                    </div>
                    <p class="inner-content mt-0 box-inner-content mb-0">Migration of existing apps to hybrid frameworks</p>
                </div>
                <div class="box bx-border-box mt-40">
                    <div class="logo logo-box-2">
                        <img src="<?php echo get_template_directory_uri()?>/images/mad-box-2.svg" alt="">
                    </div>
                    <p class="inner-content mt-0 box-inner-content mb-0">Custom consumer enterprise app development</p>
                </div>
                <div class="box bx-border-box mt-40">
                    <div class="logo logo-box-3">
                        <img src="<?php echo get_template_directory_uri()?>/images/mad-box-3.svg" alt="">
                    </div>
                    <p class="inner-content mt-0 box-inner-content mb-0">Ongoing support and maintenance</p>
                </div>
                <div class="box bx-border-box mt-40">
                    <div class="logo logo-box-4">
                        <img src="<?php echo get_template_directory_uri()?>/images/mad-box-4.svg" alt="">
                    </div>
                    <p class="inner-content mt-0 box-inner-content mb-0">Native Android and iOS development</p>
                </div>
                <div class="box bx-border-box mt-40">
                    <div class="logo logo-box-5">
                        <img src="<?php echo get_template_directory_uri()?>/images/mad-box-5.svg" alt="">
                    </div>
                    <p class="inner-content mt-0 box-inner-content mb-0">Product development</p>
                </div>
                <div class="box bx-border-box mt-40">
                    <div class="logo logo-box-6">
                        <img src="<?php echo get_template_directory_uri()?>/images/mad-box-6.svg" alt="">
                    </div>
                    <p class="inner-content mt-0 box-inner-content mb-0">MVP app development for startups</p>
                </div>
                <div class="box bx-border-box mt-40">
                    <div class="logo logo-box-7">
                        <img src="<?php echo get_template_directory_uri()?>/images/mad-box-7.svg" alt="">
                    </div>
                    <p class="inner-content mt-0 box-inner-content mb-0">Optimization</p>
                </div>
                <div class="box bx-border-box mt-40">
                    <div class="logo logo-box-8">
                        <img src="<?php echo get_template_directory_uri()?>/images/mad-box-8.svg" alt="">
                    </div>
                    <p class="inner-content mt-0 box-inner-content mb-0">Redesign</p>
                </div>
                <div class="box bx-border-box mt-40">
                    <div class="logo logo-box-9">
                        <img src="<?php echo get_template_directory_uri()?>/images/mad-box-9.svg" alt="">
                    </div>
                    <p class="inner-content mt-0 box-inner-content mb-0">Independent testing</p>
                </div>
                <div class="box bx-border-box mt-40">
                    <div class="logo logo-box-10">
                        <img src="<?php echo get_template_directory_uri()?>/images/mad-box-10.svg" alt="">
                    </div>
                    <p class="inner-content mt-0 box-inner-content mb-0">SaaS development</p>
                </div>
            </div>
        </div>

        <div class="blue-transform-future-wrapper blue-background mt-120 w-full padding-40 bx-border-box p-rel">
            <img src="<?php echo get_template_directory_uri()?>/images/Vector 11 (10).svg" alt="" class="z-img1 z-0">
            <div class="circle1 z-0"></div>
            <div class="transform-future m-auto">  
                <div class="left-part z-10">
                    <p class="section-heading-white mt-0 mb-20"><?php the_field('md_section_4_mainheading')?></p>
                    <p class="section-content-white mt-0 mb-32"><?php the_field('md_section_4_content_1')?></p>
                    <p class="section-content-white mt-0 mb-32"><?php the_field('md_section_4_content_2')?></p>
                    <button class="primary-button white-button">Let's Work Together</button>
                </div>
                <div class="right-part padding-20 bx-border-box z-1">
                    <img class="w-full" src="<?php echo get_template_directory_uri()?>/images/mad-discussion.svg" alt="">
                </div>
            </div>
            <div class="circle2 z-0"></div>
            <div class="circle3 z-0"></div>
            <img src="<?php echo get_template_directory_uri()?>/images/Vector 12 (5).svg" alt="" class="z-img2 z-0">
        </div>

        <div class="image-text-section-wrapper mt-120 ec-img-text-wrapper w-full z-1 p-rel">
            <div class="image-text o-h wds m-auto">
            <div class="img-section">
                  <img class="" src="<?php echo get_template_directory_uri()?>/images/mad-points-img.svg" alt="">
            </div>
            <div class="text-section o-h p-rel">
                <div class="section">
                    <p class="section-title mt-0 mb-12"><?php the_field('md_section_5_subheading')?></p>
                    <h2 class="section-heading mb-20 mt-0 z-1 p-rel"><?php the_field('md_section_5_mainheading')?></h2>
                    <p class="inner-content mt-0 mb-4"><?php the_field('md_section_5_content')?></p>
                    <ul class="points padding-0 mt-0 mb-0">
                        <li class="inner-content mb-4 p-rel">Automotive</li>
                        <li class="inner-content mb-4 p-rel">education and Training</li>
                        <li class="inner-content mb-4 p-rel">Food and Beverage</li>
                        <li class="inner-content mb-4 p-rel">Healthcare</li>
                        <li class="inner-content mb-4 p-rel">Sports and Fitness</li>
                        <li class="inner-content mb-4 p-rel">Retail and Ecommerce</li>
                    </ul>
                </div>
            </div>
            </div>
        </div>

        <div class="app-development mt-120">
            <h2 class="section-heading mt-0 m-auto tx-center mb-20"><?php the_field('md_section_6_mainheading')?></h2>
            <p class="inner-content mb-32 mt-0 tx-center m-auto main-content"><?php the_field('md_section_6_content')?></p>
            <div class="parts wds m-auto bx-border-box padding-30">
                <div class="box p-rel">
                    <div class="logo-n-heading mb-8">
                        <img src="<?php echo get_template_directory_uri()?>/images/mad-ic-baseline-apple.svg" alt="">
                        <span class="heading">IOS</span>
                    </div>
                    <p class="card-content inner-content">We can help you deploy effective and user-friendly apps designed for Apple products like iPhones and iPads.
                        We even create features for the Apple Watch! By providing polished experiences for Apple users, your business can build loyalty
                        among an expansive user base.</p>
                </div>
                <div class="box p-rel">
                    <div class="logo-n-heading mb-8">
                        <img src="<?php echo get_template_directory_uri()?>/images/mad-iphone-sm-box.svg" alt="">
                        <span class="heading">Cross-platform</span>
                    </div>
                    <p class="card-content inner-content">Have you ever noticed that some popular apps are only available on Android or iOS, not both? That's often
                        because they chose one or the other rather than opting for cross-platform app development. This type of app creation allows 
                        your app to work on multiple operating systems.</p>
                </div>
                <div class="box p-rel">
                    <div class="logo-n-heading mb-8">
                        <img src="<?php echo get_template_directory_uri()?>/images/mad-jam-android.svg" alt="">
                        <span class="heading">Android</span>
                    </div>
                    <p class="card-content inner-content">Our Android team understands the complexities of developing for a marketplace accessed by a vast range of devices
                        from varying manufacturers. As a result, they build user-friendly, intuitive, and polished applications that look and feel great on
                        any Android device.</p>
                </div>
            </div>
        </div>

        <div class="transform-future-wrapper mt-120 w-full padding-40 bx-border-box">
            <div class="transform-future wds m-auto">
                <div class="left-part">
                    <p class="section-heading mt-0 mb-20"><?php the_field('md_section_7_mainheading')?></p>
                    <p class="card-content mt-0 mb-32"><?php the_field('md_section_7_content_1')?></p>
                    <p class="card-content mt-0 mb-32"><?php the_field('md_section_7_content_2')?></p>
                    <p class="card-content mt-0 mb-32"><?php the_field('md_section_7_content_3')?></p>
                    <p class="card-content mt-0 mb-32"><?php the_field('md_section_7_content_4')?></p>
                    <button class="primary-button">LET'S WORK TOGETGHER</button>
                </div>
                <div class="right-part padding-20 bx-border-box">
                    <img class="w-full" src="<?php echo get_template_directory_uri()?>/images/MAD-TF-OTHER.svg" alt="">
                </div>
            </div>
        </div>

        

        <?php get_footer()?>
    </div>