<?php
/*
Template Name: DevOps Cloud Page  
*/
?>

<div class="outer-box-devops-cloud w-full ox-h">
    <?php get_header(); ?>

    <div class="ed-banner full-vh p-rel">
        <div class="ed-inner-box p-rel z-2">
            <div class="z-1 chair-n-bag cb-left">
                <div class="img-circle br-50 light-circle"><img src="<?php echo get_template_directory_uri() ?>/images/dc-middle-left-icon.svg" alt=""></div>
            </div>
            <div class="z-1 chair-n-bag cb-right">
                <div class="img-circle br-50 light-circle"><img src="<?php echo get_template_directory_uri() ?>/images/dc-middle-right-icon.svg" alt=""></div>
            </div>
            <div class="logo-n-label z-1 management infra">
                <div class="img-circle br-50 light-circle">
                    <div class="img-circle br-50 dark-circle"><img src="<?php echo get_template_directory_uri() ?>/images/dc-top-left-icon.svg" alt=""></div>
                </div>
                <span class="label">Infrastructure</span>
            </div>
            <div class="logo-n-label z-1 efficiency cloud">
                <div class="img-circle br-50 light-circle">
                    <div class="img-circle br-50 dark-circle"><img src="<?php echo get_template_directory_uri() ?>//images/dc-bottom-left-icon.svg" alt=""></div>
                </div>
                <span class="label">Cloud Migration</span>
            </div>
            <div class="logo-n-label z-1 shopping consult">
                <div class="img-circle br-50 light-circle">
                    <div class="img-circle br-50 dark-circle"><img src="<?php echo get_template_directory_uri() ?>/images/dc-top-right-icon.svg" alt=""></div>
                </div>
                <span class="label">DevOps Consulting</span>
            </div>
            <div class="logo-n-label z-1 market monitor">
                <div class="img-circle br-50 light-circle">
                    <div class="img-circle br-50 dark-circle"><img src="<?php echo get_template_directory_uri() ?>/images/dc-bottom-right-icon.svg" alt=""></div>
                </div>
                <span class="label">Monitoring & Security</span>
            </div>
        </div>
        <img class="z-2 banner-image" src="<?php echo get_template_directory_uri() ?>/images/dc-banner-img.svg" alt="">
        <div class="z-1 banner-blur-circle-1"></div>
        <div class="z-0 banner-circle-border br-50"></div>
        <div class="ed-banner-details banner-details z-2">
            <h1 class="ed-banner-heading inner-banner-heading mb-16 mt-0 m-auto tx-center"><?php the_field('dc_banner_mainheading') ?></h1>
            <p class="ed-banner-content inner-banner-content mb-28 mt-0 m-auto tx-center"><?php the_field('dc_banner_content') ?></p>
            <button class="banner-button primary-button m-auto">START BUILDING TODAY</button>
        </div>
    </div>

    <div class="cs-digital-transform-wrapper wds m-auto">
        <div class="digital-transformation m-auto p-rel">
            <div class="right-part">
                <img src="<?php echo get_template_directory_uri() ?>/images/image.svg" alt="">
            </div>
            <div class="left-part p-rel">
                <p class="section-title z-1"><?php the_field('dc_section_1_subheading') ?></p>
                <p class="section-heading z-1"><?php the_field('dc_section_1_mainheadnig') ?></p>
                <p class="card-content mt-0 z-1"><?php the_field('dc_section_1_content') ?></p>
                <button class="banner-button primary-button mt-32">LET'S WORK TOGETHER</button>
            </div>
        </div>
    </div>

    <div class="cs-digital-transform-wrapper wds m-auto">
        <div class="digital-transformation reverse m-auto p-rel">
            <div class="right-part">
                <img src="<?php echo get_template_directory_uri() ?>/images/dc-old-img.svg" alt="">
            </div>
            <div class="left-part border-zero p-rel">
                <p class="section-title z-1"><?php the_field('dc_section_2_subheading') ?></p>
                <p class="section-heading z-1"><?php the_field('dc_section_2_mainheading') ?></p>
                <p class="card-content mt-0 mb-0 z-1"><?php the_field('dc_section_2_content') ?></p>
                <ul>
                    <li class="card-content mb-4 p-rel">Achieve continuous delivery with automated pipelines.</li>
                    <li class="card-content mb-4 p-rel">Scale effortlessly to meet changing demands.</li>
                    <li class="card-content mb-4 p-rel">Enhance collaboration between development and operations teams.</li>
                    <li class="card-content mb-4 p-rel">Reduce downtime and improve system reliability.</li>
                    <li class="card-content mb-4 p-rel">Optimize costs with efficient cloud resource management.</li>
                </ul>
            </div>

        </div>
    </div>

    <div class="cs-digital-transform-wrapper wds m-auto">
        <div class="overley"></div>
        <div class="digital-transformation m-auto p-rel">
            <div class="right-part">
                <img src="<?php echo get_template_directory_uri() ?>/images/image 144.svg" alt="">
            </div>
            <div class="left-part p-rel">
                <p class="section-title z-1"><?php the_field('dc_section_3_subheading') ?></p>
                <p class="section-heading z-1"><?php the_field('dc_section_3_mainheading') ?></p>
                <p class="card-content mt-0 z-1"><?php the_field('dc_section_3_content') ?></p>
                <button class="banner-button primary-button mt-32">REQUEST A FREE DEMO</button>
            </div>
            <img src="<?php echo get_template_directory_uri() ?>/images/Vector 11 (13).svg" alt="" class="z-img1 z-0">
            <div class="circle4 z-0"></div>
        </div>
    </div>


    <div class="technos-wrapper w-full">
        <div class="technos wds m-auto">
            <p class="section-title m-auto w-fc tx-center">Our Services</p>
            <p class="section-heading wds m-auto tx-center">Comprehensive DevOps & Cloud Solutions</p>
            <p class="section-content m-auto tx-center as-main-content">We offer end-to-end services to ensure your business leverages the full potential of DevOps and Cloud technologies. Our offerings include:</p>
            <div class="boxes-wrapper wds m-auto bx-border-box mt-40">
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
                  
                </div>
        </div>
    </div>


    <div class="cs-digital-transform-wrapper last-s wds m-auto">
        <div class="digital-transformation m-auto p-rel">
            <div class="right-part">
                <img src="<?php echo get_template_directory_uri() ?>/images/dc-discussion-img.svg" alt="">
            </div>
            <div class="left-part p-rel">
                <p class="section-title z-1"><?php the_field('dc_section_4_subheading') ?></p>
                <p class="section-heading z-1"><?php the_field('dc_section_4_mainheading') ?></p>
                <p class="card-content z-1"><?php the_field('dc_section_4_content') ?></p>
                <ul>
                    <li class="card-content mb-4 p-rel">A team of certified DevOps and Cloud experts.</li>
                    <li class="card-content mb-4 p-rel">Proven track record with global clients across industries.</li>
                    <li class="card-content mb-4 p-rel">Customizable solutions tailored to your business goals.</li>
                    <li class="card-content mb-4 p-rel">Cutting-edge tools and methodologies for unmatched performance.</li>
                    <li class="card-content mb-4 p-rel">Dedicated support to guide you every step of the way.</li>
                </ul>
            </div>
        </div>
    </div>

    <?php get_footer();
    ?>
</div> 