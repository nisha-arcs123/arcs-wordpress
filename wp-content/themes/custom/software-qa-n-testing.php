<?php
/*
Template Name: Software QA and Testing Page
*/
?>

<div class="outer-box-software-n-testing w-full ox-h">
        <?php get_header(); ?>

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
                    <div class="img-circle br-50 dark-circle"><img src="<?php echo get_template_directory_uri()?>/images/st-top-left.svg" alt=""></div>
                </div>
                <span class="label">Inventory Management</span>
            </div>
            <div class="logo-n-label z-1 efficiency">
                <div class="img-circle br-50 light-circle">
                    <div class="img-circle br-50 dark-circle"><img src="<?php echo get_template_directory_uri()?>/images/st-bottom-left.svg" alt=""></div>
                </div>
                <span class="label">Optimized efficiency</span>
            </div>
            <div class="logo-n-label z-1 shopping">
                <div class="img-circle br-50 light-circle">
                    <div class="img-circle br-50 dark-circle"><img src="<?php echo get_template_directory_uri()?>/images/st-top-right.svg" alt=""></div>
                </div>
                <span class="label">Online Shopping</span>
            </div>
            <div class="logo-n-label z-1 market">
                <div class="img-circle br-50 light-circle">
                    <div class="img-circle br-50 dark-circle"><img src="<?php echo get_template_directory_uri()?>/images/st-bottom-right.svg" alt=""></div>
                </div>
                <span class="label">Market places</span>
            </div>
            </div>
            <img class="z-2 banner-image" src="<?php echo get_template_directory_uri()?>/images/Group 38008.svg" alt="">
            <div class="z-1 banner-blur-circle-1"></div>
            <div class="z-0 banner-circle-border br-50"></div>
            <div class="ed-banner-details banner-details z-2">
                <h1 class="ed-banner-heading inner-banner-heading mb-16 mt-0 m-auto tx-center"><?php the_field('st_banner_mainheading')?></h1>
                <p class="ed-banner-content inner-banner-content mb-28 mt-0 m-auto tx-center"><?php the_field('st_banner_content')?></p>
                <button class="banner-button primary-button m-auto">START BUILDING TODAY</button>
            </div>
        </div>

        <div class="cs-digital-transform-wrapper">
            <div class="digital-transformation m-auto p-rel">
                <div class="right-part">
                    <img src="<?php echo get_template_directory_uri()?>/images/st-banner-s3.svg" alt="">
                </div>
                <div class="left-part p-rel">
                    <p class="section-title mt-0 mb-12 z-1"><?php the_field('st_section_1_subheading')?></p>
                    <p class="section-heading mt-0 mb-20 z-1"><?php the_field('st_section_1_mainheading')?></p>
                    <p class="section-content mt-0 mb-40 z-1"><?php the_field('st_section_1_content')?></p>
                    <button class="banner-button primary-button">LET'S WORK TOGETGHER</button>
                </div>
            </div>
        </div>

        <div class="start-your-project mt-120 p-rel">
            <img src="<?php echo get_template_directory_uri()?>/images/Ellipse 61 (3).svg" alt="" class="right-side">
            <img src="<?php echo get_template_directory_uri()?>/images/Ellipse 60 (1).svg" alt="" class="left-side">
            <div class="ios-app-circle1 z-0 p-rel"></div>
            <h3 class="large-text mb-10 margin-0 z-1 "><?php the_field('st_section_2_mainheading')?></h3>
            <p class="normal-text mb-32 z-1 "><?php the_field('st_section_2_content')?></p>
            <button class="primary-button z-1 ">CONTACT US</button>
            <img src="<?php echo get_template_directory_uri()?>/images/Vector 12 (2).svg" alt="" class="z-img2 z-1 p-rel">
            <img src="<?php echo get_template_directory_uri()?>/images/Vector 11 (9).svg" alt="" class="z-img3 z-1 p-rel">
            <div class="ios-app-circle2 z-0 p-rel"></div>
        </div>

        <div class="quality-assurance mt-120 wds m-auto">
            <p class="section-heading m-auto mt-0 mb-16 tx-center"><?php the_field('st_section_3_mainheading')?></p>
            <p class="inner-content m-auto mt-0 mb-40 tx-center"><?php the_field('st_section_3_content')?></p>
            <div class="boxes">
                <div class="box">
                    <div class="logo-n-heading mb-16">
                        <div class="logo">
                            <img src="<?php echo get_template_directory_uri()?>/images/st-b1.svg" alt="">
                        </div>
                        <p class="heading">Managed QA Testing Services</p>
                    </div>
                    <p class="inner-content">Effective QA testing is both an art and science that demands a continually upskilled team to produce the best
                         possible outcomes. Integrate our experienced quality assurance testing pros into your software development lifecycle for embedded,
                          state-of-the-art testing using either our proprietary testing processes, your internal approach, or both.</p>
                </div>
                <div class="box"> 
                    <div class="logo-n-heading mb-16">
                        <div class="logo">
                            <img src="<?php echo get_template_directory_uri()?>/images/st-b2.svg" alt="">
                        </div>
                        <p class="heading">Quality Audit</p>
                    </div>
                    <p class="inner-content">Smart QA practices include proactive identification of vulnerabilities and other points of friction in the user
                         journey. As a leading Software Testing Company, we conduct comprehensive, one-time quality audits for businesses worldwide, 
                         customizing the process to fit your requirements in assessing a specific project or environment.</p>
                </div>
                <div class="box">
                    <div class="logo-n-heading mb-16">
                        <div class="logo">
                            <img src="<?php echo get_template_directory_uri()?>/images/st-b3.svg" alt="">
                        </div>
                        <p class="heading">Customized QA Consulting</p>
                    </div>
                    <p class="inner-content">For enterprises with the need for expert, independent QA testing services, we are happy to create custom software
                         testing services. Our seasoned software QA consultants have expertise in immersive research and analysis. With that in-depth
                          understanding of user behavior, they can devise a bespoke implementation process to support your company in releasing quality
                           products.</p>
                </div>
                <div class="row2">
                <div class="box">
                    <div class="logo-n-heading mb-16">
                        <div class="logo">
                            <img src="<?php echo get_template_directory_uri()?>/images/st-b4.svg" alt="">
                        </div>
                        <p class="heading">Test Cases Production</p>
                    </div>
                    <p class="inner-content">Even if you have an in-house development team, quality assurance testing is a specialized area that requires 
                        up-to-date knowledge of the most recent innovations and approaches. When you work with our QA testing services company, you empower
                         your internal quality processes with high-quality test cases written by our professional software QA consultants.</p>
                </div>
                <div class="box">
                    <div class="logo-n-heading mb-16">
                        <div class="logo">
                            <img src="<?php echo get_template_directory_uri()?>/images/st-b5.svg" alt="">
                        </div>
                        <p class="heading">Project-specific Software Testing Services</p>
                    </div>
                    <p class="inner-content">Whether you’re launching a new digital product or putting an existing one through the paces, our software testing
                         company provides a broad spectrum of independent, project-specific quality assurance testing options. We’ll help you ensure top
                          performance and compatibility, identify security weaknesses, and validate functionality for the best results.</p>
                </div>
                </div>
            </div>
        </div>

        <div class="testing-services-wrapper p-rel">
            <div class="box-before"></div>
            <div class="testing-services p-rel wds m-auto">
                <p class="section-heading m-auto mt-0 mb-16 tx-center"><?php the_field('st_section_4_mainheading')?></p>
                <p class="inner-content m-auto mt-0 mb-40 tx-center"><?php the_field('st_section_4_content')?></p>
                <div class="listing-n-img o-h p-rel">
                    <div class="br-50 upper-circle"></div>
                    <div class="br-50 lower-circle"></div>
                    <ul class="testing-list margin-0">
                        <li><span class="light-circle p-rel br-50"></span><span>Functional Testing</span></li>
                        <li><span class="light-circle p-rel br-50"></span><span>Usability Testing</span></li>
                        <li><span class="light-circle p-rel br-50"></span><span>Acceptance Testing</span></li>
                        <li><span class="light-circle p-rel br-50"></span><span>Configuration Testing</span></li>
                        <li><span class="light-circle p-rel br-50"></span><span>Security Testing</span></li>
                        <li><span class="light-circle p-rel br-50"></span><span>Automated Testing</span></li>
                        <li><span class="light-circle p-rel br-50"></span><span>Performance Testing</span></li>
                        <li><span class="light-circle p-rel br-50"></span><span>Compatibility Testing</span></li>
                        <li><span class="light-circle p-rel br-50"></span><span>Load and Stress Testing</span></li>
                        <li><span class="light-circle p-rel br-50"></span><span>Regression Testing</span></li>
                        <li><span class="light-circle p-rel br-50"></span><span>UI Testing</span></li>
                        <li><span class="light-circle p-rel br-50"></span><span>Cross-Platform Testing</span></li>
                        <li><span class="light-circle p-rel br-50"></span><span>Integration Testing</span></li>
                        <li><span class="light-circle p-rel br-50"></span><span>Localization Testing</span></li>
                        <li><span class="light-circle p-rel br-50"></span><span>Internationalization Testing</span></li>
                        <li><span class="light-circle p-rel br-50"></span><span>Data Migration Testing</span></li>
                        <li><span class="light-circle p-rel br-50"></span><span>Code Review Testing</span></li>
                        <li><span class="light-circle p-rel br-50"></span><span>Network Speed Testing</span></li>
                    </ul>
                    <img class="p-rel" src="<?php echo get_template_directory_uri()?>/images/st-img-ls.svg" alt="">
                </div>
            </div>
        </div>

        <div class="cs-great-solution mt-120 o-h p-rel w-full tx-center">
            <div class="left-circle circle br-50"></div>
            <div class="right-circle circle br-50"></div>
            <img class="left-img" src="<?php echo get_template_directory_uri()?>/images/ui-gs-left.svg" alt="">
            <img class="right-img" src="<?php echo get_template_directory_uri()?>/images/ui-gs-right.svg" alt="">
            <p class="section-heading mt-0 p-rel z-1 mb-28">Let’s <br> Build Your Next Great Solution</p>
            <button class="primary-button p-rel z-1 m-auto">CONTACT US</button>
        </div>


        <?php
        get_footer();?>

    </div>