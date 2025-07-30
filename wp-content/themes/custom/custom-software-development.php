<?php
/*
Template Name: Custom Software Development Page 
*/
?>
<div class="outer-box-custom-sol p-rel o-h">
    <img class="the-lines" src="<?php echo get_template_directory_uri() ?>/images/the-lines.svg" alt="" />
    <?php get_header(); ?>

            <div class="ui-banner full-vh p-rel">
            <div class="user-box-right user-box-1 z-1 padding-8">
                <div class="banner-icon">
                    <img src="<?php echo get_template_directory_uri() ?>/images/logos_ios.svg" alt="">
                </div>
                <span>IOS App Development</span>
            </div>
            <div class="user-box-left z-1 user-box-1 padding-8">
                <div class="banner-icon">
                    <img src="<?php echo get_template_directory_uri() ?>/images/logos_ios.svg" alt="">
                </div>
                <span>IOS App Development</span>
            </div>
            <div class="line-design left-line-box">
                <img class="left-inner-line p-rel z-0" src="<?php echo get_template_directory_uri() ?>/images/ui-left-banner-line.svg" alt="">
                <div class="line-logo-box z-1">
                    <img src="<?php echo get_template_directory_uri() ?>/images/ui-group-37931.svg" alt="">
                </div>
                <span>Native App Development</span>
            </div>
            <div class="line-design right-line-box">
                <img class="right-inner-line p-rel z-0" src="<?php echo get_template_directory_uri() ?>/images/ui-right-banner-line.svg" alt="">
                <div class="line-logo-box z-1">
                    <img src="<?php echo get_template_directory_uri() ?>/images/ui-group-37931.svg" alt="">
                </div>
                <span>Native App Development</span>
            </div>
            <img class="z-1 banner-image" src="<?php echo get_template_directory_uri() ?>/images/custom-sol-page-banner-img.svg" alt="">
            <div class="banner-blur-circle-1"></div>
            <div class="ui-banner-details banner-details z-2">
                <h1 class="banner-heading inner-banner-heading mb-16 mt-0 m-auto tx-center"><?php echo the_field('custom_banner_heading'); ?></h1>
                <p class="banner-content inner-banner-content mb-28 mt-0 m-auto tx-center"><?php echo the_field('custom_banner_description'); ?></p>
                <button class="banner-button primary-button m-auto">START BUILDING TODAY</button>
            </div>
        </div>

        <div class="why-choose-us-wrapper w-full">
            <div class="why-choose-us">
                <p class="m-auto section-title-text section-heading tx-center mb-20"><?php echo the_field('custom_section1_heading'); ?></p>
                <p class="m-auto tx-center main-content section-content"><?php echo the_field('custom_section1_description'); ?></p>
                <div class="boxes-wrapper wds m-auto bx-border-box">
                    <div class="box padding-20 bx-border-box">
                        <div class="upper-part">
                            <div class="logo logo-1">
                                <img src="<?php echo get_template_directory_uri() ?>/images/ai-ml-section-4-logo-1.svg" alt="">
                            </div>
                            <p class="box-heading mt-0 mb-0">Smarter Decision-Making</p>
                        </div>
                        <p class="card-content mt-0 mb-0">Uses advanced data analysis and predictive insights for better outcomes in 
                            industries like finance, healthcare, and logistics.</p>
                    </div>
                    <div class="box padding-20 bx-border-box">
                        <div class="upper-part">
                            <div class="logo logo-2">
                                <img src="<?php echo get_template_directory_uri() ?>/images/ai-ml-section-4-logo-2.svg" alt="">
                            </div>
                            <p class="box-heading mt-0 mb-0">Improved Healthcare</p>
                        </div>
                        <p class="card-content mt-0 mb-0">Enables early disease detection, personalized treatment plans, and efficient 
                            patient care through AI-powered tools.</p>
                    </div>
                    <div class="box padding-20 bx-border-box">
                        <div class="upper-part">
                            <div class="logo logo-3">
                                <img src="<?php echo get_template_directory_uri() ?>/images/ai-ml-section-4-logo-3.svg" alt="">
                            </div>
                            <p class="box-heading mt-0 mb-0">Transformative Education</p>
                        </div>
                        <p class="card-content mt-0 mb-0">Supports adaptive learning platforms tailored to individual student needs for
                            better educational outcomes.</p>
                    </div>
                    <div class="box padding-20 bx-border-box">
                        <div class="upper-part">
                            <div class="logo logo-4">
                                <img src="<?php echo get_template_directory_uri() ?>/images/ai-ml-section-4-logo-4.svg" alt="">
                            </div>
                            <p class="box-heading mt-0 mb-0">Daily Life Enhancements</p>
                        </div>
                        <p class="card-content mt-0 mb-0">Enriches everyday living with virtual assistants, smart home devices, and AI-driven 
                            content curation.</p>
                    </div>
                    <div class="box padding-20 bx-border-box">
                        <div class="upper-part">
                            <div class="logo logo-5">
                                <img src="<?php echo get_template_directory_uri() ?>/images/ai-ml-section-4-logo-5.svg" alt="">
                            </div>
                            <p class="box-heading mt-0 mb-0">Smarter Decision-Making</p>
                        </div>
                        <p class="card-content mt-0 mb-0">Uses advanced data analysis and predictive insights for better outcomes in industries
                             like finance, healthcare, and logistics.</p>
                    </div>
                    <div class="box padding-20 bx-border-box">
                        <div class="upper-part">
                            <div class="logo logo-6">
                                <img src="<?php echo get_template_directory_uri() ?>/images/ai-ml-section-4-logo-6.svg" alt="">
                            </div>
                            <p class="box-heading mt-0 mb-0">Innovation</p>
                        </div> 
                        <p class="card-content mt-0 mb-0">AI drives innovation by enabling new solutions, products, and services across industries,
                             from healthcare to transportation.</p>
                    </div>
                    <div class="box padding-20 bx-border-box">
                        <div class="upper-part">
                            <div class="logo logo-7">
                                <img src="<?php echo get_template_directory_uri() ?>/images/ai-ml-section-4-logo-7.svg" alt="">
                            </div>
                            <p class="box-heading mt-0 mb-0">Cost Reduction</p>
                        </div>
                        <p class="card-content mt-0 mb-0">By automating processes and improving operational efficiency, AI helps businesses save time 
                            and resources, cutting costs.</p>
                    </div>
                    <div class="box padding-20 bx-border-box">
                        <div class="upper-part">
                            <div class="logo logo-8">
                                <img src="<?php echo get_template_directory_uri() ?>/images/ai-ml-section-4-logo-8.svg" alt="">
                            </div>
                            <p class="box-heading mt-0 mb-0">Data-Driven Insights</p>
                        </div>
                        <p class="card-content mt-0 mb-0">AI analyzes vast amounts of data quickly to identify trends, predict outcomes, and support
                             better decision-making.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="vision-to-life wds m-auto o-h bx-border-box">
            <div class="content">
                <p class="section-heading mt-0 mb-0"><?php echo the_field('custom_section2_heading1'); ?> <span class="vision"><?php echo the_field('custom_section2_span1'); ?></span> <?php echo the_field('custom_section2_heading2'); ?>
                    <span class="start"><?php echo the_field('custom_section2_span2'); ?></span></p>
                <button class="primary-button mt-40">CALL TO ACTION</button>
            </div>
        </div>

        <div class="services-we-offer wds m-auto">
            <p class="section-title m-auto w-fc tx-center"><?php echo the_field('custom_section3_heading1'); ?></p>
            <p class="section-heading mb-20 mt-12 tx-center"><?php echo the_field('custom_section3_heading2'); ?></p>
            <p class="section-content mb-40 tx-center"><?php echo the_field('custom_section3_description'); ?></p>
            <div class="boxes-wrapper wds m-auto">
                <div class="box mt-32 padding-16 bx-border-box p-rel">
                    <div class="logo logo-1">
                        <img src="<?php echo get_template_directory_uri() ?>/images/bulb-logo.svg" alt="">
                    </div>
                    <p class="number mt-0 mb-0">01</p>
                    <p class="card-title  mt-40 mb-12">Custom Software Development</p>
                    <p class="card-content">We design and build custom software tailored specifically to your processes, goals, and challenges. Our solutions enhance efficiency and scalability, ensuring your business stays ahead of the competition.
                    </p>
                </div>
                <div class="box mt-32 padding-16 bx-border-box p-rel">
                    <div class="logo logo-2">
                        <img src="<?php echo get_template_directory_uri() ?>/images/bulb-logo.svg" alt="">
                    </div>
                    <p class="number mt-0 mb-0">02</p>
                    <p class="card-title  mt-40 mb-12">Custom Software Development</p>
                    <p class="card-content">We design and build custom software tailored specifically to your processes, goals, and challenges. Our solutions enhance efficiency and scalability, ensuring your business stays ahead of the competition.
                    </p>
                </div>
                <div class="box mt-32 padding-16 bx-border-box p-rel">
                    <div class="logo logo-3">
                        <img src="<?php echo get_template_directory_uri() ?>/images/bulb-logo.svg" alt="">
                    </div>
                    <p class="number mt-0 mb-0">03</p>
                    <p class="card-title  mt-40 mb-12">Custom Software Development</p>
                    <p class="card-content">We design and build custom software tailored specifically to your processes, goals, and challenges. Our solutions enhance efficiency and scalability, ensuring your business stays ahead of the competition.
                    </p>
                </div>
                <div class="box mt-32 padding-16 bx-border-box p-rel">
                    <div class="logo logo-4">
                        <img src="<?php echo get_template_directory_uri() ?>/images/bulb-logo.svg" alt="">
                    </div>
                    <p class="number mt-0 mb-0">04</p>
                    <p class="card-title  mt-40 mb-12">Custom Software Development</p>
                    <p class="card-content">We design and build custom software tailored specifically to your processes, goals, and challenges. Our solutions enhance efficiency and scalability, ensuring your business stays ahead of the competition.
                    </p>
                </div>
                <div class="box mt-32 padding-16 bx-border-box p-rel">
                    <div class="logo logo-5">
                        <img src="<?php echo get_template_directory_uri() ?>/images/bulb-logo.svg" alt="">
                    </div>
                    <p class="number mt-0 mb-0">05</p>
                    <p class="card-title  mt-40 mb-12">Custom Software Development</p>
                    <p class="card-content">We design and build custom software tailored specifically to your processes, goals, and challenges. Our solutions enhance efficiency and scalability, ensuring your business stays ahead of the competition.
                    </p>
                </div>
                <div class="box mt-32 padding-16 bx-border-box p-rel">
                    <div class="logo logo-6">
                        <img src="<?php echo get_template_directory_uri() ?>/images/bulb-logo.svg" alt="">
                    </div>
                    <p class="number mt-0 mb-0">06</p>
                    <p class="card-title  mt-40 mb-12">Custom Software Development</p>
                    <p class="card-content">We design and build custom software tailored specifically to your processes, goals, and challenges. Our solutions enhance efficiency and scalability, ensuring your business stays ahead of the competition.
                    </p>
                </div>
                <div class="box mt-32 padding-16 bx-border-box p-rel">
                    <div class="logo logo-7">
                        <img src="<?php echo get_template_directory_uri() ?>/images/bulb-logo.svg" alt="">
                    </div>
                    <p class="number mt-0 mb-0">07</p>
                    <p class="card-title  mt-40 mb-12">Custom Software Development</p>
                    <p class="card-content">We design and build custom software tailored specifically to your processes, goals, and challenges. Our solutions enhance efficiency and scalability, ensuring your business stays ahead of the competition.
                    </p>
                </div>
            </div>
        </div>
        
        <div class="technos-wrapper w-full">
            <div class="technos wds m-auto">
                <p class="section-title m-auto w-fc tx-center"><?php echo the_field('custom_section4_heading1'); ?></p>
                <p class="section-heading mb-20 mt-12 tx-center"><?php echo the_field('custom_section4_heading2'); ?></p>
                <p class="section-content mb-40 tx-center"><?php echo the_field('custom_section4_description'); ?></p>
                <div class="boxes-wrapper">
                    <div class="box padding-16 bx-border-box">
                        <div class="upper-part mb-16">
                            <div class="logo">
                                <img src="<?php echo get_template_directory_uri() ?>/images/tvtv.svg" alt="">
                            </div>
                            <p class="box-heading">Frontend Development</p>
                        </div>
                        <p class="card-content mb-20">Our backend solutions ensure seamless performance, high security, and scalability for all your applications.</p>
                        <div class="tech">
                            <img src="<?php echo get_template_directory_uri() ?>/images/angular-svgrepo-c.svg" alt="">
                            <span>React</span>
                        </div>
                        <div class="tech">
                            <img src="<?php echo get_template_directory_uri() ?>/images/react-svgrepo-c.svg" alt="">
                            <span>Angular</span>
                        </div>
                        <div class="tech">
                            <img src="<?php echo get_template_directory_uri() ?>/images/angular-svgrepo-c.svg" alt="">
                            <span>Vue.Js</span>
                        </div>
                        <div class="tech">
                            <img src="<?php echo get_template_directory_uri() ?>/images/react-svgrepo-c.svg" alt="">
                            <span>HTML5, CSS3, and JavaScript</span>
                        </div>
                    </div>
                    <div class="box padding-16 bx-border-box">
                        <div class="upper-part mb-16">
                            <div class="logo">
                                <img src="<?php echo get_template_directory_uri() ?>/images/tvtv.svg" alt="">
                            </div>
                            <p class="box-heading">Frontend Development</p>
                        </div>
                        <p class="card-content mb-20">Our backend solutions ensure seamless performance, high security, and scalability for all your applications.</p>
                        <div class="tech">
                            <img src="<?php echo get_template_directory_uri() ?>/images/angular-svgrepo-c.svg" alt="">
                            <span>React</span>
                        </div>
                        <div class="tech">
                            <img src="<?php echo get_template_directory_uri() ?>/images/react-svgrepo-c.svg" alt="">
                            <span>Angular</span>
                        </div>
                        <div class="tech">
                            <img src="<?php echo get_template_directory_uri() ?>/images/angular-svgrepo-c.svg" alt="">
                            <span>Vue.Js</span>
                        </div>
                        <div class="tech">
                            <img src="<?php echo get_template_directory_uri() ?>/images/react-svgrepo-c.svg" alt="">
                            <span>HTML5, CSS3, and JavaScript</span>
                        </div>
                    </div>
                    <div class="box padding-16 bx-border-box">
                        <div class="upper-part mb-16">
                            <div class="logo">
                                <img src="<?php echo get_template_directory_uri() ?>/images/tvtv.svg" alt="">
                            </div>
                            <p class="box-heading">Frontend Development</p>
                        </div>
                        <p class="card-content mb-20">Our backend solutions ensure seamless performance, high security, and scalability for all your applications.</p>
                        <div class="tech">
                            <img src="<?php echo get_template_directory_uri() ?>/images/angular-svgrepo-c.svg" alt="">
                            <span>React</span>
                        </div>
                        <div class="tech">
                            <img src="<?php echo get_template_directory_uri() ?>/images/react-svgrepo-c.svg" alt="">
                            <span>Angular</span>
                        </div>
                        <div class="tech">
                            <img src="<?php echo get_template_directory_uri() ?>/images/angular-svgrepo-c.svg" alt="">
                            <span>Vue.Js</span>
                        </div>
                        <div class="tech">
                            <img src="<?php echo get_template_directory_uri() ?>/images/react-svgrepo-c.svg" alt="">
                            <span>HTML5, CSS3, and JavaScript</span>
                        </div>
                    </div>
                    <div class="box padding-16 bx-border-box">
                        <div class="upper-part mb-16">
                            <div class="logo">
                                <img src="<?php echo get_template_directory_uri() ?>/images/tvtv.svg" alt="">
                            </div>
                            <p class="box-heading">Frontend Development</p>
                        </div>
                        <p class="card-content mb-20">Our backend solutions ensure seamless performance, high security, and scalability for all your applications.</p>
                        <div class="tech">
                            <img src="<?php echo get_template_directory_uri() ?>/images/angular-svgrepo-c.svg" alt="">
                            <span>React</span>
                        </div>
                        <div class="tech">
                            <img src="<?php echo get_template_directory_uri() ?>/images/react-svgrepo-c.svg" alt="">
                            <span>Angular</span>
                        </div>
                        <div class="tech">
                            <img src="<?php echo get_template_directory_uri() ?>/images/angular-svgrepo-c.svg" alt="">
                            <span>Vue.Js</span>
                        </div>
                        <div class="tech">
                            <img src="<?php echo get_template_directory_uri() ?>/images/react-svgrepo-c.svg" alt="">
                            <span>HTML5, CSS3, and JavaScript</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="invest-in-software wds m-auto">
            <p class="section-title m-auto w-fc tx-center"><?php echo the_field('custom_section5_heading1'); ?></p>
            <p class="section-heading mb-20 mt-12 tx-center"><?php echo the_field('custom_section5_heading2'); ?></p>
            <p class="section-content mb-40 tx-center"><?php echo the_field('custom_section5_description'); ?></p>
            <div class="boxes-wrapper wds m-auto bx-border-box">
                <div class="box t-3 padding-20 bx-border-box">
                    <div class="upper-part">
                        <div class="logo logo-1">
                            <img src="<?php echo get_template_directory_uri() ?>/images/bul-correct.svg" alt="">
                        </div>
                        <p class="box-heading mt-0 mb-0">Tailored to Your Needs</p>
                    </div>
                    <p class="card-content mt-0 mb-0">Unlike off-the-shelf software, custom solutions are designed specifically for your business processes,
                         ensuring a perfect fit for your unique requirements.</p>
                </div>
                <div class="box t-3 padding-20 bx-border-box">
                    <div class="upper-part">
                        <div class="logo logo-2">
                            <img src="<?php echo get_template_directory_uri() ?>/images/bul-correct.svg" alt="">
                        </div>
                        <p class="box-heading mt-0 mb-0">Scalability and Flexibility</p>
                    </div>
                    <p class="card-content mt-0 mb-0">Custom software grows with your business, enabling you to add 
                        features and scale effortlessly as your operations expand or change.</p>
                </div>
                <div class="box t-3 padding-20 bx-border-box">
                    <div class="upper-part">
                        <div class="logo logo-3">
                            <img src="<?php echo get_template_directory_uri() ?>/images/bul-correct.svg" alt="">
                        </div>
                        <p class="box-heading mt-0 mb-0">Enhanced Efficiency</p>
                    </div>
                    <p class="card-content mt-0 mb-0">By automating repetitive tasks and streamlining operations, custom software 
                        increases productivity and reduces operational costs.</p>
                </div>
                <div class="box t-3 padding-20 bx-border-box">
                    <div class="upper-part">
                        <div class="logo logo-4">
                            <img src="<?php echo get_template_directory_uri() ?>/images/bul-correct.svg" alt="">
                        </div>
                        <p class="box-heading mt-0 mb-0">Improved Security</p>
                    </div>
                    <p class="card-content mt-0 mb-0">Custom software includes tailored security measures designed to address your 
                        specific vulnerabilities, reducing the risk of breaches and ensuring data protection.
                    </p>
                </div>
                <div class="box t-3 padding-20 bx-border-box">
                    <div class="upper-part">
                        <div class="logo logo-5">
                            <img src="<?php echo get_template_directory_uri() ?>/images/bul-correct.svg" alt="">
                        </div>
                        <p class="box-heading mt-0 mb-0">Competitive Advantage</p>
                    </div>
                    <p class="card-content mt-0 mb-0">By leveraging custom tools and features, your business gains a competitive edge, 
                        offering unique services or capabilities that set you apart from competitors.</p>
                </div>
                <div class="box t-3 padding-20 bx-border-box">
                    <div class="upper-part">
                        <div class="logo logo-6">
                            <img src="<?php echo get_template_directory_uri() ?>/images/bul-correct.svg" alt="">
                        </div>
                        <p class="box-heading mt-0 mb-0">Long-Term Cost Savings</p>
                    </div> 
                    <p class="card-content mt-0 mb-0">Although the upfront cost may be higher than off-the-shelf options, custom software eliminates 
                        recurring licensing fees and costly upgrades, saving money in the long run.</p>
                </div>
                <div class="box t-3 padding-20 bx-border-box">
                    <div class="upper-part">
                        <div class="logo logo-7">
                            <img src="<?php echo get_template_directory_uri() ?>/images/bul-correct.svg" alt="">
                        </div>
                        <p class="box-heading mt-0 mb-0">Seamless Integration</p>
                    </div>
                    <p class="card-content mt-0 mb-0">Custom software is designed to integrate seamlessly with your existing systems and tools, 
                        ensuring smooth data flow and enhanced functionality.</p>
                </div>
                <div class="box t-3 padding-20 bx-border-box">
                    <div class="upper-part">
                        <div class="logo logo-8">
                            <img src="<?php echo get_template_directory_uri() ?>/images/bul-correct.svg" alt="">
                        </div>
                        <p class="box-heading mt-0 mb-0">Better User Experience</p>
                    </div>
                    <p class="card-content mt-0 mb-0">With intuitive design and features tailored to your team or customers,
                        custom software enhances usability and satisfaction.</p>
                </div>
            </div>
        </div>

    <?php get_footer(); ?>