<?php
/*
Template Name: Ui Page 
*/
?>
<div class="outer-box-ui-page p-rel o-h">
      <img class="the-lines" src="./assets/images/the-lines.svg" alt="" />
  <?php get_header(); ?> 
<div class="ui-banner full-vh p-rel">
            <div class="user-box-right user-box-1 z-1 padding-8">
                <div class="banner-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/ui-mask-group.svg" alt="">
                </div>
                <span>User Experience Strategy</span>
            </div>
            <div class="user-box-left z-1 user-box-1 padding-8">
                <div class="banner-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/ui-icons.svg" alt="">
                </div>
                <span>User Interface</span>
            </div>
            <div class="line-design left-line-box">
                <img class="left-inner-line p-rel z-0" src="<?php echo get_template_directory_uri(); ?>/images/ui-left-banner-line.svg" alt="">
                <div class="box-logo-n-text">
                    <div class="line-logo-box z-1">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/ui-group-37931.svg" alt="">
                    </div>
                    <span>Effective Navigation</span>
                </div>
            </div>
            <div class="line-design right-line-box">
                <img class="right-inner-line p-rel z-0" src="<?php echo get_template_directory_uri(); ?>/images/ui-right-banner-line.svg" alt="">
                <div class="box-logo-n-text">
                    <div class="line-logo-box z-1">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/ui-group-37931.svg" alt="">
                    </div>
                    <span>Guided Behavior</span>
                </div>
            </div>
            <img class="z-1 banner-image" src="<?php echo get_template_directory_uri(); ?>/images/ui-girl-img.svg" alt="">
            <div class="banner-blur-circle-1"></div>
            <div class="ui-banner-details banner-details z-2">
                <h1 class="banner-heading inner-banner-heading mb-16 mt-0 m-auto tx-center"><?php echo the_field('banner-heading');?></h1>
                <p class="banner-content inner-banner-content mb-28 mt-0 m-auto tx-center"><?php echo the_field('banner-paragragh'); ?></p>
                <button class="banner-button primary-button m-auto">START BUILDING TODAY</button>
            </div>
        </div>

        <div class="ux-design-services-wrapper w-full">
            <div class="ux-design-services wds m-auto">
                <span class="section-title mt-0"><?php echo the_field('section1-header1'); ?></span>
                <h1 class="section-heading mt-16 mb-40"><?php echo the_field('section1-header2'); ?></h1>
                <div class="service-boxes">
                    <div class="box p-rel z-1 t-3 bx-border-box padding-16">
                        <div class="overlay z-1"></div>
                        <div class="logo-n-heading mb-20 p-rel z-2">
                            <div class="logo t-3">
                                <img class="logo-img t-3" src="<?php echo get_template_directory_uri(); ?>/images/ui-icons.svg" alt="">
                            </div>
                            <span>User Experience Strategy</span>
                        </div>
                        <p class="content mb-24 p-rel z-2">A game changing UX strategy focuses on aligning every touchpoint along the customer journey 
                            with your business's ultimate vision of the user experience. Consider this path your roadmap to improve customer engagement,
                            customer service, and revenue from where they are today to where you want them to be tomorrow and beyond.
                        </p>
                        <div class="footer-n-arrow p-rel z-2 t-3">
                            <span class="lets-go cp p-rel t-3">Let's work together</span>
                            <div class="arrow-circle br-50">
                                <img class="without-hover" src="<?php echo get_template_directory_uri(); ?>/images/ui-arrow->.svg" alt="">
                                <img class="with-hover" src="<?php echo get_template_directory_uri(); ?>/images/ui-hover-svg.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="box p-rel z-1 t-3 bx-border-box padding-16">
                        <div class="overlay z-1"></div>
                        <div class="logo-n-heading mb-20 p-rel z-2">
                            <div class="logo t-3"> 
                                <img class="logo-img t-3" src="<?php echo get_template_directory_uri(); ?>/images/ui-four-sq.svg" alt="">
                            </div>
                            <span>User Experience Strategy</span>
                        </div>
                        <p class="content mb-24 p-rel z-2">A game changing UX strategy focuses on aligning every touchpoint along the customer journey 
                            with your business's ultimate vision of the user experience. Consider this path your roadmap to improve customer engagement,
                            customer service, and revenue from where they are today to where you want them to be tomorrow and beyond.
                        </p>
                        <div class="footer-n-arrow p-rel z-2 t-3">
                            <span class="lets-go cp p-rel t-3">Let's work together</span>
                            <div class="arrow-circle br-50">
                                <img class="without-hover" src="<?php echo get_template_directory_uri(); ?>/images/ui-arrow->.svg" alt="">
                                <img class="with-hover" src="<?php echo get_template_directory_uri(); ?>/images/ui-hover-svg.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="box p-rel z-1 t-3 bx-border-box padding-16">
                        <div class="overlay z-1"></div>
                        <div class="logo-n-heading mb-20 p-rel z-2">
                            <div class="logo t-3">
                                <img class="logo-img t-3" src="<?php echo get_template_directory_uri(); ?>/images/ui-pen-pencil.svg" alt="">
                            </div>
                            <span>User Experience Strategy</span>
                        </div>
                        <p class="content mb-24 p-rel z-2">A game changing UX strategy focuses on aligning every touchpoint along the customer journey 
                            with your business's ultimate vision of the user experience. Consider this path your roadmap to improve customer engagement,
                            customer service, and revenue from where they are today to where you want them to be tomorrow and beyond.
                        </p>
                        <div class="footer-n-arrow p-rel z-2 t-3">
                            <span class="lets-go cp p-rel t-3">Let's work together</span>
                            <div class="arrow-circle br-50">
                                <img class="without-hover" src="<?php echo get_template_directory_uri(); ?>/images/ui-arrow->.svg" alt="">
                                <img class="with-hover" src="<?php echo get_template_directory_uri(); ?>/images/ui-hover-svg.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="box p-rel z-1 t-3 bx-border-box padding-16">
                        <div class="overlay z-1"></div>
                        <div class="logo-n-heading p-rel z-2 mb-20">
                            <div class="logo t-3">
                                <img class="logo-img t-3" src="<?php echo get_template_directory_uri(); ?>/images/ui-hand-logo.svg" alt="">
                            </div>
                            <span>User Experience Strategy</span>
                        </div>
                        <p class="content p-rel z-2 mb-24">A game changing UX strategy focuses on aligning every touchpoint along the customer journey 
                            with your business's ultimate vision of the user experience. Consider this path your roadmap to improve customer engagement,
                            customer service, and revenue from where they are today to where you want them to be tomorrow and beyond.
                        </p>
                        <div class="footer-n-arrow p-rel z-2 t-3">
                            <span class="lets-go cp p-rel t-3">Let's work together</span>
                            <div class="arrow-circle br-50">
                                <img class="without-hover t-3" src="<?php echo get_template_directory_uri(); ?>/images/ui-arrow->.svg" alt="">
                                <img class="with-hover t-3" src="<?php echo get_template_directory_uri(); ?>/images/ui-hover-svg.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="digital-development-wrapper w-full">
            <div class="digital-development o-h p-rel bx-border-box wds m-auto">
                <div class="rectangles-wrapper rectangles-wrapper-1">
                    <div class="rectangles rectangle-1"></div>
                    <div class="rectangles rectangle-2"></div>
                    <div class="rectangles rectangle-3"></div>
                    <div class="rectangles rectangle-4"></div>
                </div>
                <div class="rectangles-wrapper rectangles-wrapper-2">
                    <div class="rectangles rectangle-1"></div>
                    <div class="rectangles rectangle-2"></div>
                    <div class="rectangles rectangle-3"></div>
                    <div class="rectangles rectangle-4"></div>
                </div>
                <div class="rectangles-wrapper rectangles-wrapper-3">
                    <div class="rectangles rectangle-1"></div>
                    <div class="rectangles rectangle-2"></div>
                    <div class="rectangles rectangle-3"></div>
                    <div class="rectangles rectangle-4"></div>
                </div>
                <div class="title-n-heading p-rel z-1">
                    <span class="section-title mb-12"><?php echo the_field('section2-header1'); ?></span>
                    <h1 class="section-heading mt-8 mb-20"><?php echo the_field('section2-header2'); ?></h1>
                    <p class="section-content"><?php echo the_field('section2-paragragh'); ?></p>
                </div>
                <div class="colored-inner-box t-3 padding-20 p-rel z-1 o-h bx-border-box">
                    <div class="overlay z-1"></div>
                    <div class="circle z-2 br-50"></div>
                    <img class="z-img p-rel z-3" src="<?php echo get_template_directory_uri(); ?>/images/Vector 12.svg" alt="">
                    <div class="logo t-3 mb-28 p-rel z-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/ui-star.svg" alt="">
                    </div>
                    <p class="box-heading mb-20 p-rel z-3">Skilled Workforce</p>
                    <p class="box-content p-rel z-3">Our vetted team of software professionals offers flexibility and availability,
                         ensuring your project is delivered by experienced experts.</p>
                </div>
                <div class="colored-inner-box t-3 padding-20 p-rel z-1 o-h bx-border-box">
                    <div class="overlay p-rel z-1"></div>
                    <div class="circle z-2 br-50"></div>
                    <img class="z-img p-rel z-3" src="<?php echo get_template_directory_uri(); ?>/images/Vector 12.svg" alt="">
                    <div class="logo t-3 mb-28 p-rel z-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/ui-handed.svg" alt="">
                    </div>
                    <p class="box-heading mb-20 p-rel z-3">Quality Standards</p>
                    <p class="box-content p-rel z-3">We adhere to internationally recognized standards like PEP 8 and IFSQ,
                         ensuring that your applications are built with precision and quality.</p>
                </div>
                <div class="colored-inner-box t-3 padding-20 p-rel z-1 o-h bx-border-box">
                    <div class="overlay p-rel z-1"></div>
                    <div class="circle z-2 br-50"></div>
                    <img class="z-img p-rel z-3" src="<?php echo get_template_directory_uri(); ?>/images/Vector 12.svg" alt="">
                    <div class="logo t-3 mb-28 p-rel z-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/ui-users.svg" alt="">
                    </div>
                    <p class="box-heading mb-20 p-rel z-3">Effective Communication</p>
                    <p class="box-content p-rel z-3">We adhere to internationally recognized standards like PEP 8 and IFSQ,
                         ensuring that your applications are built with precision and quality.</p>
                </div>
                <div class="colored-inner-box t-3 padding-20 p-rel z-1 o-h bx-border-box">
                    <div class="overlay p-rel z-1"></div>
                    <div class="circle z-2 br-50"></div>
                    <img class="z-img p-rel z-3" src="<?php echo get_template_directory_uri(); ?>/images/Vector 12.svg" alt="">
                    <div class="logo t-3 mb-28 p-rel z-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/ui-handshake.svg" alt="">
                    </div>
                    <p class="box-heading mb-20 p-rel z-3">Trusted Compliance</p>
                    <p class="box-content p-rel z-3">We adhere to internationally recognized standards like PEP 8 and IFSQ, 
                        ensuring that your applications are built with precision and quality.</p>
                </div>
                <div class="colored-inner-box t-3 padding-20 p-rel z-1 o-h bx-border-box">
                    <div class="overlay p-rel z-1"></div>
                    <div class="circle z-2 br-50"></div>
                    <img class="z-img p-rel z-3" src="<?php echo get_template_directory_uri(); ?>/images/Vector 12.svg" alt="">
                    <div class="logo t-3 mb-28 p-rel z-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/ui-globe.svg" alt="">
                    </div>
                    <p class="box-heading mb-20 p-rel z-3">Global Expertise</p>
                    <p class="box-content p-rel z-3">With clients from the US, Canada, Europe, and Australia, 
                        our global reach ensures that your business benefits from world-class talent and insights.</p>
                </div>
                <div class="colored-inner-box t-3 padding-20 p-rel z-1 o-h bx-border-box">
                    <div class="overlay p-rel z-1"></div>
                    <div class="circle z-2 br-50"></div>
                    <img class="z-img p-rel z-3" src="<?php echo get_template_directory_uri(); ?>/images/Vector 12.svg" alt="">
                    <div class="logo t-3 mb-28 p-rel z-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/ui-puzzle.svg" alt="">
                    </div>
                    <p class="box-heading p-rel z-3 mb-20">Comprehensive Solutions</p>
                    <p class="box-content p-rel z-3">From design and UX to full-scale development and ongoing support,
                         we provide end-to-end solutions for every phase of your digital journey.</p>
                </div>
            </div>
        </div>

        <div class="gs-border w-full"></div>

        <div class="cs-great-solution o-h p-rel w-full tx-center">
            <div class="left-circle circle br-50"></div>
            <div class="right-circle circle br-50"></div>
            <img class="left-img" src="<?php echo get_template_directory_uri(); ?>/images/ui-gs-left.svg" alt="">
            <img class="right-img" src="<?php echo get_template_directory_uri(); ?>/images/ui-gs-right.svg" alt="">
            <p class="section-heading mt-0 p-rel z-1 mb-28"><?php echo the_field('section3-header')?></p>
            <button class="primary-button p-rel z-1 m-auto">CONTACT US</button>
        </div>

        <div class="gs-border w-full"></div>

        <div class="your-expert-wrapper p-rel w-full">
            <div class="circle-1"></div>
            <div class="circle-2"></div>
            <div class="your-expert wds p-rel z-1 bx-border-box m-auto">
                <span class="section-title mb-12"><?php echo the_field('section4-header1') ?></span>
                <p class="section-heading mt-0 mb-40"><?php echo the_field('section4-header2') ?></p>
                <div class="boxes">
                    <div class="box t-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/ui-card-img-1.svg" alt="">
                        <div class="content padding-16 bx-border-box">
                            <span class="heading">UX/UI Designers</span>
                            <p class="inner-content mb-0 mt-8">UX/UI designers focus on your customers, crafting intuitive,
                                 engaging experiences  that drive satisfaction and loyalty. Their designs turn
                                  visitors into users and maximize conversions across your platform.</p>
                        </div>
                    </div>
                    <div class="box t-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/ui-card-img-2.svg" alt="">
                        <div class="content padding-16 bx-border-box">
                            <span class="heading">UX/UI Designers</span>
                            <p class="inner-content mb-0 mt-8">UX/UI designers focus on your customers, crafting intuitive,
                                 engaging experiences  that drive satisfaction and loyalty. Their designs turn
                                  visitors into users and maximize conversions across your platform.</p>
                        </div>
                    </div>
                    <div class="box t-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/ui-card-3.svg" alt="">
                        <div class="content padding-16 bx-border-box">
                            <span class="heading">UX/UI Designers</span>
                            <p class="inner-content mb-0 mt-8">UX/UI designers focus on your customers, crafting intuitive,
                                 engaging experiences  that drive satisfaction and loyalty. Their designs turn
                                  visitors into users and maximize conversions across your platform.</p>
                        </div>
                    </div>
                    <div class="box t-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/ui-card-4.svg" alt="">
                        <div class="content padding-16 bx-border-box">
                            <span class="heading">UX/UI Designers</span>
                            <p class="inner-content mb-0 mt-8">UX/UI designers focus on your customers, crafting intuitive,
                                 engaging experiences  that drive satisfaction and loyalty. Their designs turn
                                  visitors into users and maximize conversions across your platform.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pic-content-wrapped-section p-rel z-1 wds m-auto bx-border-box">
            <div class="left-part">
                <img src="<?php echo get_template_directory_uri(); ?>/images/ui-section-b.svg" alt="">
            </div>
            <div class="right-part bx-border-box">
                <p class="section-heading mt-0 mb-8"><?php the_field('section5-header1') ?><span class="clr-variation"><?php echo the_field('section5-header1span') ?></span> <br> <?php the_field('section5-header11') ?></span> </p>
                <p class="section-content mb-28"><?php the_field('section5-paragragh') ?></p>
                <button class="primary-button">LET'S WORK TOGETHER</button>
            </div>
        </div>

        <div class="aspects-wrapper wds m-auto">
        <div class="aspects w-full bx-border-box padding-40">
            <p class="section-heading mt-0 mb-28"><?php the_field('section6-heading') ?></p>
            <div class="boxes">
                <div class="box padding-20 bx-border-box">
                    <img class="mb-20" src="<?php echo get_template_directory_uri(); ?>/images/last0img1.svg" alt="">
                    <p class="box-heading mt-0 mb-8">Responsive Designs</p>
                    <p class="box-text mb-0">Buidling apps that are compatible with all devices and work on all screen sizes.</p>
                </div>
                <div class="box padding-20 bx-border-box">
                    <img class="mb-20" src="<?php echo get_template_directory_uri(); ?>/images/last0img2.svg" alt="">
                    <p class="box-heading mt-0 mb-8">Responsive Designs</p>
                    <p class="box-text mb-0">Buidling apps that are compatible with all devices and work on all screen sizes.</p>
                </div>
                <div class="box padding-20 bx-border-box">
                    <img class="mb-20" src="<?php echo get_template_directory_uri(); ?>/images/last0img3.svg" alt="">
                    <p class="box-heading mt-0 mb-8">Responsive Designs</p>
                    <p class="box-text mb-0">Buidling apps that are compatible with all devices and work on all screen sizes.</p>
                </div>
                <div class="box padding-20 bx-border-box">
                    <img class="mb-20" src="<?php echo get_template_directory_uri(); ?>/images/last0img4.svg" alt="">
                    <p class="box-heading mt-0 mb-8">Responsive Designs</p>
                    <p class="box-text mb-0">Buidling apps that are compatible with all devices and work on all screen sizes.</p>
                </div>
            </div>
        </div>
        </div>

        <?php get_footer();?>