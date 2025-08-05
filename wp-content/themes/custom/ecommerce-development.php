<?php
/*
Template Name: Ecommerce Development Page 
*/
?>
<div class="outer-box-ecommerce-development p-rel o-h">
    <img class="the-lines" src="<?php echo get_template_directory_uri() ?>/images/the-lines.svg" alt="" />
    <?php get_header(); ?>

     <div class="ed-banner full-vh p-rel">
            <div class="ed-inner-box p-rel z-2">
            <div class="z-1 chair-n-bag cb-top">
                <div class="img-circle br-50 light-circle"><img src="<?php echo get_template_directory_uri()?>/images/ec-red-hb.svg" alt=""></div>
                <div class="img-circle br-50 light-circle"><img src="<?php echo get_template_directory_uri()?>/images/ec-sofa.svg" alt=""></div>
            </div>
            <div class="z-1 chair-n-bag cb-left">
                <div class="img-circle br-50 light-circle"><img src="<?php echo get_template_directory_uri()?>/images/ec-handbags.svg" alt=""></div>
            </div>
            <div class="z-1 chair-n-bag cb-right">
                <div class="img-circle br-50 light-circle"><img src="<?php echo get_template_directory_uri()?>/images/ec-wooden-chair.svg" alt=""></div>
            </div>
            <div class="logo-n-label z-1 management">
                <div class="img-circle br-50 light-circle">
                    <div class="img-circle br-50 dark-circle"><img src="<?php echo get_template_directory_uri()?>/images/ec-setting-boss.svg" alt=""></div>
                </div>
                <span class="label">Inventory Management</span>
            </div>
            <div class="logo-n-label z-1 efficiency">
                <div class="img-circle br-50 light-circle">
                    <div class="img-circle br-50 dark-circle"><img src="<?php echo get_template_directory_uri()?>/images/ec-settings.svg" alt=""></div>
                </div>
                <span class="label">Optimized efficiency</span>
            </div>
            <div class="logo-n-label z-1 shopping">
                <div class="img-circle br-50 light-circle">
                    <div class="img-circle br-50 dark-circle"><img src="<?php echo get_template_directory_uri()?>/images/ec-bag-icon.svg" alt=""></div>
                </div>
                <span class="label">Online Shopping</span>
            </div>
            <div class="logo-n-label z-1 market">
                <div class="img-circle br-50 light-circle">
                    <div class="img-circle br-50 dark-circle"><img src="<?php echo get_template_directory_uri()?>/images/ec-house-icon.svg" alt=""></div>
                </div>
                <span class="label">Market places</span>
            </div>
            </div>
            <img class="z-2 banner-image" src="<?php echo get_template_directory_uri()?>/images/ec-banner-img.svg" alt="">
            <div class="z-1 banner-blur-circle-1"></div>
            <div class="z-0 banner-circle-border br-50"></div>
            <div class="ed-banner-details banner-details z-2">
                <h1 class="ed-banner-heading inner-banner-heading mb-16 mt-0 m-auto tx-center"><?php echo the_field('banner_heading_cd'); ?></h1>
                <p class="ed-banner-content inner-banner-content mb-28 mt-0 m-auto tx-center"><?php echo the_field('banner_description_cd'); ?></p>
                <button class="banner-button primary-button m-auto">START BUILDING TODAY</button>
            </div>
        </div>

        <div class="mt-120 cs-remarkable-benefits-wrapper w-full">
            <p class="section-heading mt-0 mb-12 tx-center"><?php echo the_field('section1_heading_cd'); ?></p>
            <p class="section-content main-content mt-0 m-auto tx-center "><?php echo the_field('section1_description_cd'); ?></p>
            <div class="boxes-wrapper wds m-auto padding-40 bx-border-box">
                <div class="box padding-20 bx-border-box">
                    <div class="upper-part">
                        <div class="logo logo-1">
                            <img src="<?php echo get_template_directory_uri()?>/images/edss1.svg" alt="">
                        </div>
                        <p class="box-heading mt-0 mb-0">ECommerce Consulting</p>
                    </div>
                    <p class="card-content mt-0 mb-0">Improve your operational efficiency and user experience with our expert’s advice on business,
                         technology and operational aspects.</p>
                </div>
                <div class="box padding-20 bx-border-box">
                    <div class="upper-part">
                        <div class="logo logo-2">
                            <img src="<?php echo get_template_directory_uri()?>/images/edss2.svg" alt="">
                        </div>
                        <p class="box-heading mt-0 mb-0">ECommerce Implementation</p>
                    </div>
                    <p class="card-content mt-0 mb-0">Get cloud platforms, payment gateways, POS systems, and CRMs implemented to your eCommerce 
                        web stores and mobile applications.</p>
                </div>
                <div class="box padding-20 bx-border-box">
                    <div class="upper-part">
                        <div class="logo logo-3">
                            <img src="<?php echo get_template_directory_uri()?>/images/edss3.svg" alt="">
                        </div>
                        <p class="box-heading mt-0 mb-0">ECommerce Marketing</p>
                    </div>
                    <p class="card-content mt-0 mb-0">Stay ahead of the competition with our eCommerce marketing team, which consists of SEO, PPC,
                         and social media experts.</p>
                </div>
                <div class="box padding-20 bx-border-box">
                    <div class="upper-part">
                        <div class="logo logo-4">
                            <img src="<?php echo get_template_directory_uri()?>/images/edss4.svg" alt="">
                        </div>
                        <p class="box-heading mt-0 mb-0">eCommerce Web Design</p>
                    </div>
                    <p class="card-content mt-0 mb-0">Our eCommerce web designers enable you sell online using responsive designs that look great
                         on desktop and mobile devices.</p>
                </div>
                <div class="box padding-20 bx-border-box">
                    <div class="upper-part">
                        <div class="logo logo-5">
                            <img src="<?php echo get_template_directory_uri()?>/images/edss5.svg" alt="">
                        </div>
                        <p class="box-heading mt-0 mb-0">ECommerce Migration</p>
                    </div>
                    <p class="card-content mt-0 mb-0">Our team ensures your eCommerce platforms are continuously performing and secure, with proactive
                         support and strategic updates to meet business evolution.</p>
                </div>
                <div class="box padding-20 bx-border-box">
                    <div class="upper-part">
                        <div class="logo logo-6">
                            <img src="<?php echo get_template_directory_uri()?>/images/edss6.svg" alt="">
                        </div>
                        <p class="box-heading mt-0 mb-0">Maintenance & Management</p>
                    </div> 
                    <p class="card-content mt-0 mb-0">Our team ensures your eCommerce platforms are continuously performing and secure, with proactive
                         support and strategic updates to meet business evolution.</p>
                </div>
                <div class="box padding-20 bx-border-box">
                    <div class="upper-part">
                        <div class="logo logo-7">
                            <img src="<?php echo get_template_directory_uri()?>/images/edss7.svg" alt="">
                        </div>
                        <p class="box-heading mt-0 mb-0">Dedicated Development Team</p>
                    </div>
                    <p class="card-content mt-0 mb-0">Hire PixelCrayons’ dedicated team for diverse expertise in languages, frameworks, and technologies,
                         crafting websites that embody your brand essence.</p>
                </div>
                <div class="box padding-20 bx-border-box">
                    <div class="upper-part">
                        <div class="logo logo-8">
                            <img src="<?php echo get_template_directory_uri()?>/images/edss8.svg" alt="">
                        </div>
                        <p class="box-heading mt-0 mb-0">Marketplace Integration</p>
                    </div>
                    <p class="card-content mt-0 mb-0">We specialize in developing  B2B and B2C 
                        portals that enhance user experience and operational efficiency, strengthening client and consumer relationships.</p>
                </div>
            </div>

        </div>

        <div class="cs-digital-transform-wrapper wds m-auto">
            <div class="overley"></div>
            <div class="digital-transformation m-auto p-rel">
                <div class="right-part">
                    <img src="<?php echo get_template_directory_uri()?>/images/ec-dt.svg" alt="">
                </div>
                <div class="left-part p-rel">
                    <p class="section-title z-1"><?php echo the_field('section2_heading1_cd'); ?></p>
                    <p class="section-heading z-1"><?php echo the_field('section2_heading2_cd'); ?></p>
                    <p class="card-content mt-0 mb-32 z-1"><?php echo the_field('section2_description_cd'); ?></p> 
                    <button class="primary-button">LET'S WORK TOGETGHER</button>
                </div>
                <img src="<?php echo get_template_directory_uri()?>/images/Vector 11 (13).svg" alt="" class="z-img1 z-0">
                <div class="circle4 z-0"></div>
            </div>
        </div>

        <div class="all-size-business-wrapper w-full">
            <div class="all-size-business wds m-auto">
                <div class="content">
                    <p class="section-title"><?php echo the_field('section3_heading1_cd'); ?></p>
                    <p class="section-heading "><?php echo the_field('section3_heading2_cd'); ?></p>
                    <p class="card-content mt-0 mb-32"><?php echo the_field('section3_description_cd'); ?></p>
                    <button class="primary-button">START BUILDING TODAY</button>
                </div>
                <div class="boxes">
                    <div class="inner-box">
                        <img src="<?php echo get_template_directory_uri()?>/images/ec-small-scale.svg" alt="">
                        <div class="content">
                            <p class="as-box-heading mb-12 mt-0">Small & Mid-scale Businesses</p>
                            <ul>
                                <li class="card-content mb-8">Affordable eCommerce services</li>
                                <li class="card-content mb-8">Advanced features integration</li>
                                <li class="card-content mb-8">Add features as per need</li>
                                <li class="card-content mb-8">Highly secure & scalable solutions</li>
                            </ul>
                        </div>
                    </div>
                    <div class="inner-box">
                        <img src="<?php echo get_template_directory_uri()?>/images/ec-large-scale.svg" alt="">
                        <div class="content">
                            <p class="as-box-heading mb-12 mt-0">Enterprise-Grade</p>
                            <ul class="margin-0">
                                <li class="card-content mb-8">High-performing, secure solutions</li>
                                <li class="card-content mb-8">Enterprise-grade extensions & tools</li>
                                <li class="card-content mb-8">AR/VR, IoT & AI Integration</li>
                                <li class="card-content mb-8">Addition of powerful functionalities</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="ec-sols mt-120">
            <p class="section-heading m-auto mt-0 mb-20 main-content tx-center"><?php echo the_field('section4_heading_cd'); ?></p>
            <p class="section-content m-auto mt-0 mb-40 main-content tx-center"><?php echo the_field('section4_description_cd'); ?></p>
            <div class="section-box m-auto wds">
                <div class="section-header p-rel w-full">
                    <ul class="navbar w-full margin-0 padding-0">
                        <li class="navs active">
                            <span class="ellipsis-text">ECommerce ERP</span>
                        </li>
                        <li class="navs">
                            <span class="ellipsis-text">ECommerce CRM</span>
                        </li>
                        <li class="navs">
                            <span class="ellipsis-text">POS Solutions</span>
                        </li>
                        <li class="navs">
                            <span class="ellipsis-text">Marketplaces</span>
                        </li>
                        <li class="navs">
                            <span class="ellipsis-text">Inventory Management</span>
                        </li>
                    </ul>
                </div>
                <div class="ecommerce-erp mt-60">
                    <div class="content">
                        <p class="heading mb-12 mt-0">ECommerce ERP</p>
                        <p class="card-content mb-24 mt-0">Our ecommerce ERP solutions are designed to unify various aspects of your business for more cohesive
                             operations. We emphasize consolidated data handling and enhanced control over processes, leading to more streamlined business
                            management.</p>
                        <ul class="logos-n-text mt-0 mb-0 padding-0">
                            <li class="mb-16">
                                <div class="logo first">
                                    <img src="<?php echo get_template_directory_uri()?>/images/ec-sol-1.svg" alt="">
                                </div>
                                <span class="card-content">Consolidated data</span>
                            </li>
                            <li class="mb-16">
                                <div class="logo second">
                                    <img src="<?php echo get_template_directory_uri()?>/images/ec-sol-2.svg" alt="">
                                </div>
                                <span class="card-content">Enhanced control over processes</span>
                            </li>
                            <li class="mb-16">
                                <div class="logo third">
                                    <img src="<?php echo get_template_directory_uri()?>/images/ec-sol-3.svg" alt="">
                                </div>
                                <span class="card-content">Optimized efficiency</span>
                            </li>
                        </ul>
                    </div>
                    <div class="image">
                        <img src="<?php echo get_template_directory_uri()?>/images/ec-se-b-img.svg" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="numbers-speak mt-120">
            <p class="section-heading m-auto mt-0 mb-20 main-content tx-center"><?php echo the_field('section5_heading_cd'); ?></p>
            <p class="section-content m-auto mt-0 mb-40 main-content tx-center"><?php echo the_field('section5_description_cd'); ?></p>
            <div class="boxes-wrapper wds m-auto">
                <div class="box bx-border-box padding-20">
                    <div class="logo-n-text mb-16">
                        <div class="logo">
                            <span>97%</span>
                        </div>
                        <div class="text">
                            <span class="rate section-content">client satisfaction score</span>
                            <span class="section-content">Industry average: 72%</span>
                        </div>
                    </div>
                    <p class="heading mt-0 mb-12">Why our client satisfaction score is high?</p>
                    <ul class="margin-0 padding-0">
                        <li class="card-content p-rel">Seamless project management</li>
                        <li class="card-content p-rel">Efficient ROI tracking</li>
                        <li class="card-content p-rel">Diverse expertise</li>
                    </ul>
                </div>
                <div class="box bx-border-box padding-20">
                    <div class="logo-n-text mb-16">
                        <div class="logo">
                            <span>95%</span>
                        </div>
                        <div class="text">
                            <span class="rate section-content">Retention Rate</span>
                            <span class="section-content">Industry average: 50</span>
                        </div>
                    </div>
                    <p class="heading mt-0 mb-12">Why Our Retention Rate Is High?</p>
                    <ul class="margin-0 padding-0">
                        <li class="card-content p-rel">Scalable solutions</li>
                        <li class="card-content p-rel">Top industry experts</li>
                        <li class="card-content p-rel">Proven results</li>
                    </ul>
                </div>
                <div class="box bx-border-box padding-20">
                    <div class="logo-n-text mb-16">
                        <div class="logo">
                            <span>97%</span>
                        </div>
                        <div class="text">
                            <span class="rate section-content">client satisfaction score</span>
                            <span class="section-content">Industry average: 72%</span>
                        </div>
                    </div>
                    <p class="heading mt-0 mb-12">Why our client satisfaction score is high?</p>
                    <ul class="margin-0 padding-0">
                        <li class="card-content p-rel">Seamless project management</li>
                        <li class="card-content p-rel">Efficient ROI tracking</li>
                        <li class="card-content p-rel">Diverse expertise</li>
                    </ul>
                </div>
                <div class="box bx-border-box padding-20">
                    <div class="logo-n-text mb-16">
                        <div class="logo">
                            <span>99%</span>
                        </div>
                        <div class="text">
                            <span class="rate section-content">On-time Delivery</span>
                            <span class="section-content">Industry average</span>
                        </div>
                    </div>
                    <p class="heading mt-0 mb-12">Why Our On-Time Delivery Rate Is High?</p>
                    <ul class="margin-0 padding-0">
                        <li class="card-content p-rel">Advanced Project Planning</li>
                        <li class="card-content p-rel">Real-Time Tracking</li>
                        <li class="card-content p-rel">Dedicated Project Management Team</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="image-text-section-wrapper ec-img-text-wrapper w-full z-1 p-rel">
            <div class="image-text o-h wds m-auto">
            <div class="img-section">
                  <img class="" src="<?php echo get_template_directory_uri()?>/images/ec-wo-bg-b-img.svg" alt="">
            </div>
            <div class="text-section o-h p-rel">
                <div class="section">
                    <h2 class="section-heading mb-20 mt-0 z-1 p-rel"><?php echo the_field('section6_heading_cd'); ?></h2>
                    <p class="card-content  mb-32 z-1 p-rel"><?php echo the_field('section6_description_cd'); ?></p>
                    <button class="primary-button z-1 p-rel">LETS'S WORK TOGETHER</button>
                </div>
            </div>
            </div>
        </div>

    <?php get_footer(); ?>