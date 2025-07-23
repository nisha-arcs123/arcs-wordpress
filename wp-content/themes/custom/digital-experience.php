<?php
/*
Template Name: Digital Experience Page  
*/
?>

<div class="outer-box-digital-exp w-full ox-h">
        <?php get_header(); ?>

        <div class="ui-banner full-vh p-rel">
            <div class="user-exp user-box z-1 padding-8">
                <div class="icon">
                    <img src="<?php echo get_template_directory_uri()?>/images/Mask group (18).svg" alt="">
                </div>
                <span>IOS App Development</span>
            </div>
            <div class="user-interface z-1 user-box padding-8">
                <div class="icon">
                    <img src="<?php echo get_template_directory_uri()?>/images/Mask group (17).svg" alt="">
                </div>
                <span>IOS App Development</span>
            </div>
            <div class="line-design effective-nav">
                <img class="nav-line p-rel z-0" src="<?php echo get_template_directory_uri()?>/images/Vector 109.svg" alt="">
                <div class="logo-box z-1">
                    <img src="<?php echo get_template_directory_uri()?>/images/Group 38149.svg" alt="">
                </div>
                <span>analytics</span>
            </div>
            <div class="line-design guided">
                <img class="guided-line p-rel z-0" src="<?php echo get_template_directory_uri()?>/images/Vector 110.svg" alt="">
                <div class="logo-box z-1">
                    <img src="<?php echo get_template_directory_uri()?>/images/Mask group (16).svg" alt="">
                </div>
                <span>Add to Cart Button</span>
            </div>
            <img class="z-1 banner-girl-image" src="<?php echo get_template_directory_uri()?>/images/Group 38155.png" alt="">
            <div class="ui-banner-blur-circle"></div>
            <div class="ui-banner-details z-2">
                <h1 class="banner-heading mb-16 m-auto tx-center"><?php the_field('d_exp_banner_mainheading')?></h1>
                <p class="banner-content mb-28 m-auto tx-center"><?php the_field('d_exp_banner_content')?></p>
                <button class="banner-button primary-button m-auto">START BUILDING TODAY</button>
            </div>
        </div>

        <div class="services-we-offer m-auto">
            <p class="section-heading mb-40 tx-center"><?php the_field('d_exp_section_1_mainheading')?></p>
            <div class="boxes-wrapper m-auto">
                <div class="box mt-32 padding-16 bx-border-box p-rel">
                    <div class="logo logo-1">
                        <img src="<?php echo get_template_directory_uri()?>/images/bulb-logo.svg" alt="">
                    </div>
                    <p class="number mt-0 mb-0">01</p>
                    <p class="box-heading mt-40 mb-12">Content Management System (CMS)</p>
                    <p class="box-content">Our powerful CMS allows you to create, manage, and deliver content effortlessly. With drag-and-drop tools, workflows, and version control, you can ensure consistent branding and messaging across all digital channels.
                    </p>
                </div>
                <div class="box mt-32 padding-16 bx-border-box p-rel">
                    <div class="logo logo-2">
                        <img src="<?php echo get_template_directory_uri()?>/images/bulb-logo.svg" alt="">
                    </div>
                    <p class="number mt-0 mb-0">02</p>
                    <p class="box-heading mt-40 mb-12">Customer Data Platform (CDP)</p>
                    <p class="box-content">Leverage a centralized customer data platform to unify data from multiple sources. Gain actionable insights into user behavior, preferences, and journeys to deliver hyper-personalized experiences.
                    </p>
                </div>
                <div class="box mt-32 padding-16 bx-border-box p-rel">
                    <div class="logo logo-3">
                        <img src="<?php echo get_template_directory_uri()?>/images/bulb-logo.svg" alt="">
                    </div>
                    <p class="number mt-0 mb-0">03</p>
                    <p class="box-heading mt-40 mb-12">Omnichannel Delivery</p>
                    <p class="box-content">Deliver content and interactions consistently across websites, mobile apps, social media, email, and more. Our platform ensures a unified experience no matter how or where your customers engage.
                    </p>
                </div>
                <div class="box mt-32 padding-16 bx-border-box p-rel">
                    <div class="logo logo-4">
                        <img src="<?php echo get_template_directory_uri()?>/images/bulb-logo.svg" alt="">
                    </div>
                    <p class="number mt-0 mb-0">04</p>
                    <p class="box-heading mt-40 mb-12"> Personalization Engine</p>
                    <p class="box-content">Delight your audience with tailored content and recommendations powered by advanced AI algorithms. Customize user experiences in real-time to boost engagement and conversions.
                    </p>
                </div>
                <div class="box mt-32 padding-16 bx-border-box p-rel">
                    <div class="logo logo-5">
                        <img src="<?php echo get_template_directory_uri()?>/images/bulb-logo.svg" alt="">
                    </div>
                    <p class="number mt-0 mb-0">05</p>
                    <p class="box-heading mt-40 mb-12">Integration-Friendly Architecture</p>
                    <p class="box-content">Integrate seamlessly with your existing tools, systems, and third-party applications using our API-first architecture. Whether it’s CRM, ERP, or marketing automation, our platform connects it all.
                    </p>
                </div>
                <div class="box mt-32 padding-16 bx-border-box p-rel">
                    <div class="logo logo-6">
                        <img src="<?php echo get_template_directory_uri()?>/images/bulb-logo.svg" alt="">
                    </div>
                    <p class="number mt-0 mb-0">06</p>
                    <p class="box-heading mt-40 mb-12">Advanced Analytics and Insights</p>
                    <p class="box-content">Track user behavior, engagement metrics, and campaign performance with powerful analytics tools. Make informed decisions using real-time insights and reporting dashboards.
                    </p>
                </div>
                <div class="box mt-32 padding-16 bx-border-box p-rel">
                    <div class="logo logo-7">
                        <img src="<?php echo get_template_directory_uri()?>/images/bulb-logo.svg" alt="">
                    </div>
                    <p class="number mt-0 mb-0">07</p>
                    <p class="box-heading mt-40 mb-12">Scalability and Cloud-Based Architecture</p>
                    <p class="box-content">Our cloud-based platform offers scalability to handle increased traffic, users, and data as your business expands. With minimal downtime and flexible infrastructure, you’re always ready to scale.
                    </p>
                </div>
                <div class="box mt-32 padding-16 bx-border-box p-rel">
                    <div class="logo logo-8">
                        <img src="<?php echo get_template_directory_uri()?>/images/bulb-logo.svg" alt="">
                    </div>
                    <p class="number mt-0 mb-0">08</p>
                    <p class="box-heading mt-40 mb-12">Security and Compliance</p>
                    <p class="box-content">We prioritize your data security with enterprise-grade encryption, regular audits, and compliance with global standards like GDPR, HIPAA, and CCPA.
                    </p>
                </div>
            </div>
        </div>

        <div class="transform-future-wrapper w-full padding-40 bx-border-box">
            <div class="transform-future wds m-auto">
                <div class="left-part">
                    <p class="section-title mt-0 mb-12"><?php the_field('d_exp_section_2_subheading')?></p>
                    <p class="section-heading mt-0 mb-20"><?php the_field('d_exp_section_2_mainheading')?></p>
                    <p class="section-content mt-0 mb-32"><?php the_field('d_exp_section_2_content')?></p>
                    <button class="primary-button">Let's Work Together</button>
                </div>
                <div class="right-part padding-20 bx-border-box">
                    <img class="w-full" src="<?php echo get_template_directory_uri()?>/images/image (13).svg" alt="">
                </div>
            </div>
        </div>

        

        <div class="benefits-wrapper w-full padding-40 bx-border-box">
            <div class="transform-future m-auto">
                
                <div class="left-part">
                    <p class="section-title mt-0 mb-12"><?php the_field('d_exp_section_3_subheading')?></p>
                    <p class="section-heading mt-0 mb-20"><?php the_field('d_exp_section_3_mainheading')?></p>
                    <p class="section-content mt-0 mb-32"><?php the_field('d_exp_section_3_content')?></p>
                    <button class="primary-button">Let's Work Together</button>
                </div>
                
                <div class="right-part p-rel">
                    <div class="box padding-16 ml-28 bx-border-box">
                        <div class="upper-part mb-16">
                            <div class="logo">
                                <img src="<?php echo get_template_directory_uri()?>/images/tvtv.svg" alt="">
                            </div>
                            <p class="box-heading">Unified Customer Experience</p>
                        </div>
                        <p class="box-content">Our platform integrates all your digital channels into a single cohesive ecosystem, ensuring a seamless and consistent customer experience across websites, mobile apps, social media, and more.
                        </p>
                    </div>
                    <div class="box padding-16 bx-border-box">
                        <div class="upper-part mb-16">
                            <div class="logo">
                                <img src="<?php echo get_template_directory_uri()?>/images/tvtv.svg" alt="">
                            </div>
                            <p class="box-heading"> Enhanced Personalization</p>
                        </div>
                        <p class="box-content">Deliver tailored content and recommendations to each user based on real-time data and AI-driven insights. Engage your customers with experiences that resonate with their unique preferences and behaviors.
                        </p>
                    </div>
                    <div class="box padding-16 bx-border-box">
                        <div class="upper-part mb-16">
                            <div class="logo">
                                <img src="<?php echo get_template_directory_uri()?>/images/tvtv.svg" alt="">
                            </div>
                            <p class="box-heading">Data-Driven Decision Making</p>
                        </div>
                        <p class="box-content">Gain actionable insights with advanced analytics and reporting tools. Understand your audience’s needs and preferences to optimize your strategies and improve results.</p>
                        
                        
                    </div>
                    <div class="box padding-16 mr-20 bx-border-box">
                        <div class="upper-part mb-16">
                            <div class="logo">
                                <img src="<?php echo get_template_directory_uri()?>/images/tvtv.svg" alt="">
                            </div>
                            <p class="box-heading">Omnichannel Integration</p>
                        </div>
                        <p class="box-content">Reach your customers wherever they are by delivering a unified experience across multiple platforms. Whether it’s a website, mobile app, or email campaign, our platform ensures consistency and continuity.</p>
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="solution-provide w-full">
            <div class="why-choose-us">

                <p class="m-auto section-title-text tx-center"><?php the_field('d_exp_section_4_subheading')?></p>
                <p class="m-auto section-heading tx-center"><?php the_field('d_exp_section_4_mainheading')?></p>
                <p class="mb-40 tx-center main-content"><?php the_field('d_exp_section_4_content')?></p>
                <div class="boxes-wrapper m-auto">
                    <div class="box mt-32 padding-16 bx-border-box p-rel">
                        <div class="logo logo-1">
                            <img src="<?php echo get_template_directory_uri()?>/images/bulb-logo.svg" alt="">
                        </div>
                        <p class="number mt-0 mb-0">01</p>
                        <p class="box-heading mt-40 mb-12">Customer Experience Optimization</p>
                        <p class="box-content">We help businesses deliver personalized, seamless, and engaging experiences across all digital touchpoints. By leveraging real-time data and AI-driven insights, we enhance every aspect of the customer journey—from initial interactions to ongoing engagement.
                        </p>
                    </div>
                    <div class="box mt-32 padding-16 bx-border-box p-rel">
                        <div class="logo logo-2">
                            <img src="<?php echo get_template_directory_uri()?>/images/bulb-logo.svg" alt="">
                        </div>
                        <p class="number mt-0 mb-0">02</p>
                        <p class="box-heading mt-40 mb-12">Data-Driven Personalization</p>
                        <p class="box-content">Deliver targeted content, offers, and recommendations by using real-time data and behavior analysis. Our platform allows you to craft hyper-personalized experiences that improve engagement and conversion rates.
                        </p>
                    </div>
                    <div class="box mt-32 padding-16 bx-border-box p-rel">
                        <div class="logo logo-3">
                            <img src="<?php echo get_template_directory_uri()?>/images/bulb-logo.svg" alt="">
                        </div>
                        <p class="number mt-0 mb-0">03</p>
                        <p class="box-heading mt-40 mb-12">Advanced Analytics & Reporting</p>
                        <p class="box-content">Gain valuable insights into customer behavior, campaign performance, and overall platform effectiveness with powerful analytics and reporting tools. Use these insights to optimize your strategies and drive business decisions.
                        </p>
                    </div>
                    <div class="box mt-32 padding-16 bx-border-box p-rel">
                        <div class="logo logo-4">
                            <img src="<?php echo get_template_directory_uri()?>/images/bulb-logo.svg" alt="">
                        </div>
                        <p class="number mt-0 mb-0">04</p>
                        <p class="box-heading mt-40 mb-12"> Content Management Simplified</p>
                        <p class="box-content">Create, manage, and publish content seamlessly with our intuitive content management system (CMS). Easily collaborate with teams, automate workflows, and ensure content is delivered consistently across all digital channels.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="technos-wrapper w-full">
            <div class="technos m-auto">
                <p class="section-title mb-10 m-auto w-fc tx-center"><?php the_field('d_exp_section_5_subheading')?></p>
                <p class="section-heading mb-20 mt-12 tx-center"><?php the_field('d_exp_section_5_mainheading')?></p>
                <p class="section-content mb-40 tx-center"><?php the_field('d_exp_section_5_content')?></p>
                <div class="boxes-wrapper">
                    <div class="box padding-16 bx-border-box">
                        <div class="upper-part mb-16">
                            <div class="logo">
                                <img src="<?php echo get_template_directory_uri()?>/images/tvtv.svg" alt="">
                            </div>
                            <p class="box-heading">Onboarding and Customization</p>
                        </div>
                        <p class="box-content">When you choose our platform, we start with a personalized onboarding process to understand your specific business goals, target audience, and digital needs.</p>
                       
                       
                    </div>
                    <div class="box padding-16 bx-border-box">
                        <div class="upper-part mb-16">
                            <div class="logo">
                                <img src="<?php echo get_template_directory_uri()?>/images/tvtv.svg" alt="">
                            </div>
                            <p class="box-heading">Integration with Existing Systems</p>
                        </div>
                        <p class="box-content">When you choose our platform, we start with a personalized onboarding process to understand your specific business goals, target audience, and digital needs.</p>
                       
                    </div>
                    <div class="box padding-16 bx-border-box">
                        <div class="upper-part mb-16">
                            <div class="logo">
                                <img src="<?php echo get_template_directory_uri()?>/images/tvtv.svg" alt="">
                            </div>
                            <p class="box-heading">Content Creation and Management</p>
                        </div>
                        <p class="box-content">When you choose our platform, we start with a personalized onboarding process to understand your specific business goals, target audience, and digital needs.</p>
                       
                    </div>
                    <div class="box padding-16 bx-border-box">
                        <div class="upper-part mb-16">
                            <div class="logo">
                                <img src="<?php echo get_template_directory_uri()?>/images/tvtv.svg" alt="">
                            </div>
                            <p class="box-heading">Personalization and Engagement</p>
                        </div>
                        <p class="box-content">When you choose our platform, we start with a personalized onboarding process to understand your specific business goals, target audience, and digital needs.</p>
                       
                    </div>
                </div>
            </div>
        </div>

        <?php get_footer(); ?>

    </div>