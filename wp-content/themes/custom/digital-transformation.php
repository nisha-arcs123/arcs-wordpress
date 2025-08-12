<?php
/*
Template Name: Digital Transformation Page  
*/
?>


<div class="outer-box-digital-transformation w-full ox-h">
       <?php get_header(); ?>

        <div class="ui-banner full-vh p-rel">
            <div class="user-box-right user-box-1 z-1 padding-8">
                <div class="banner-icon">
                    <img src="<?php echo get_template_directory_uri()?>/images/Mask group (18).svg" alt="">
                </div>
                <span>UI/UX Designer</span>
            </div>
            <div class="user-box-left z-1 user-box-1 padding-8">
                <div class="banner-icon">
                    <img src="<?php echo get_template_directory_uri()?>/images/Mask group (17).svg" alt="">
                </div>
                <span>Full Stack Developer</span>
            </div>
            <img class="left-inner-line p-rel z-0" src="<?php echo get_template_directory_uri()?>/images/Vector 109.svg" alt="">
            <div class="line-design left-line-box">
                <div class="line-logo-box z-1">
                    <img src="<?php echo get_template_directory_uri()?>/images/Group 38149.svg" alt="">
                </div>
                <span>analytics</span>
            </div>
            <img class="right-inner-line p-rel z-0" src="<?php echo get_template_directory_uri()?>/images/Vector 110.svg" alt="">
            <div class="line-design right-line-box">
                <div class="line-logo-box z-1">
                    <img src="<?php echo get_template_directory_uri()?>/images/Mask group (16).svg" alt="">
                </div>
                <span>Add to Cart Button</span>
            </div>
            <img class="z-1 banner-image" src="<?php echo get_template_directory_uri()?>/images/Spendings.svg" alt="">
            <div class="banner-blur-circle-1"></div>
            <div class="ui-banner-details banner-details z-2">
                <h1 class="inner-banner-heading mb-16 mt-0 m-auto tx-center"><?php the_field('dt_banner_mainheading')?></h1>
                <p class="inner-banner-content mb-28 mt-0 m-auto tx-center"><?php the_field('dt_banner_content')?></p>
                <button class="banner-button primary-button m-auto">START BUILDING TODAY</button>
            </div>
        </div>

        <div class="blue-transform-future-wrapper blue-background w-full padding-40 bx-border-box p-rel">
            <img src="<?php echo get_template_directory_uri()?>/images/Vector 11 (10).svg" alt="" class="z-img1 z-0">
            <div class="circle1 z-0"></div>
            <div class="transform-future m-auto wds">  
                <div class="left-part z-10">
                    <p class="section-title-text mt-0 mb-12"><?php the_field('dt_section_1_subheading')?></p>
                    <p class="section-heading-white mt-0 mb-20"><?php the_field('dt_section_1_mainheading')?></p>
                    <p class="section-content-white mt-0 mb-32"><?php the_field('dt_section_1_content')?></p>
                    <button class="primary-button white-button">Let's Work Together</button>
                </div>
                <div class="right-part padding-20 bx-border-box z-1">
                    <img class="w-full" src="<?php echo get_template_directory_uri()?>/images/image (14).svg" alt="">
                </div>
            </div>
            <div class="circle2 z-0"></div>
            <div class="circle3 z-0"></div>
            <img src="<?php echo get_template_directory_uri()?>/images/Vector 12 (5).svg" alt="" class="z-img2 z-0">
        </div>

        <div class="cs-digital-transform-wrapper wds m-auto">
          <div class="overley"></div>
          <div class="digital-transformation m-auto p-rel">
              <div class="right-part">
                  <img src="<?php echo get_template_directory_uri()?>/images/image 144.svg" alt="">
              </div>
              <div class="left-part p-rel">
                  <p class="section-title z-1"><?php the_field('dt_section_2_subheading')?></p>
                  <p class="section-heading z-1"><?php the_field('dt_section_2_mainheading')?></p>
                  <p class="card-content z-1"><?php the_field('dt_section_2_content')?></p> 
              </div>
              <img src="<?php echo get_template_directory_uri()?>/images/Vector 11 (13).svg" alt="" class="z-img1 z-0">
              <div class="circle4 z-0"></div>
          </div>
        </div>
       
        <div class="technos-wrapper w-full">
            <div class="technos m-auto wds">
                <p class="section-title m-auto w-fc tx-center"><?php the_field('dt_section_3_subheading')?></p>
                <p class="section-heading  tx-center"><?php the_field('dt_section_3_mainheading')?></p>
                <p class="section-content m-auto tx-center as-main-content as-main-content"><?php the_field('dt_section_3_content')?></p>
                <div class="boxes-wrapper mt-40">
                    <div class="box padding-16 bx-border-box p-rel">
                        
                        <div class="logo">
                            <img src="<?php echo get_template_directory_uri()?>/images/tvtv.svg" alt="">
                        </div>
                        <p class="card-title mt-28">Informed Decision-Making</p>
                   
                        <p class="card-content">Use data insights to make strategic and evidence-based business decisions.</p>
                       
                    </div>
                    <div class="box padding-16 bx-border-box p-rel">
                   
                        <div class="logo">
                            <img src="<?php echo get_template_directory_uri()?>/images/tvtv.svg" alt="">
                        </div>
                        <p class="card-title mt-28">Process Optimization</p>
                  
                        <p class="card-content">Identify inefficiencies and improve workflows using data analysis.</p>
                       
                    </div>
                    <div class="box padding-16 bx-border-box p-rel">
                       
                        <div class="logo">
                            <img src="<?php echo get_template_directory_uri()?>/images/tvtv.svg" alt="">
                        </div>
                        <p class="card-title mt-28">Customer-Centric Innovation</p>
                      
                        <p class="card-content">Understand customer preferences and behaviors to enhance products and services.</p>
                       
                    </div>
                    <div class="box padding-16 bx-border-box p-rel">
                       
                        <div class="logo">
                            <img src="<?php echo get_template_directory_uri()?>/images/tvtv.svg" alt="">
                        </div>
                        <p class="card-title mt-28">Predictive Insights</p>
                        
                        <p class="card-content">Leverage predictive analytics to anticipate trends and proactively adapt to changes.</p>
                       
                    </div>
                </div>
            </div>
        </div>

        <div class="transform-future-wrapper w-full padding-40 bx-border-box">
            <div class="transform-future wds m-auto">
                <div class="left-part">
                    <p class="section-title"><?php the_field('dt_section_4_subheading')?></p>
                    <p class="section-heading"><?php the_field('dt_section_4_mainheading')?></p>
                    <p class="card-content mt-0"><?php the_field('dt_section_4_content')?></p>
                    <button class="primary-button mt-32">Let's Work Together</button>
                </div>
                <div class="right-part padding-20 bx-border-box">
                    <img class="w-full" src="<?php echo get_template_directory_uri()?>/images/image (16).svg" alt="">
                </div>
            </div>
        </div>

        <div class="technos-wrapper w-full">
            <div class="technos m-auto wds">
                <p class="section-title m-auto w-fc tx-center"><?php the_field('dt_section_5_subheading')?></p>
                <p class="section-heading tx-center"><?php the_field('dt_section_5_mainheading')?></p>
                <p class="section-content m-auto tx-center as-main-content as-main-content m-auto"><?php the_field('dt_section_5_content')?></p>
                <div class="boxes-wrapper mt-40">
                    <div class="box padding-16 bx-border-box p-rel">
                        
                        <div class="logo">
                            <img src="<?php echo get_template_directory_uri()?>/images/tvtv.svg" alt="">
                        </div>
                        <p class="card-title mt-28">Enhanced Efficiency</p>
                   
                        <p class="card-content">Replace slow, outdated systems with faster, more agile technologies.</p>
                       
                       
                    </div>
                    <div class="box padding-16 bx-border-box p-rel">
                   
                        <div class="logo">
                            <img src="<?php echo get_template_directory_uri()?>/images/tvtv.svg" alt="">
                        </div>
                        <p class="card-title mt-28">Improved Security</p>
                  
                        <p class="card-content">Address vulnerabilities in legacy systems with modern cybersecurity measures.</p>
                       
                    </div>
                    <div class="box padding-16 bx-border-box p-rel">
                       
                        <div class="logo">
                            <img src="<?php echo get_template_directory_uri()?>/images/tvtv.svg" alt="">
                        </div>
                        <p class="card-title mt-28">Cost Savings</p>
                      
                        <p class="card-content">Reduce maintenance costs by adopting scalable, cost-effective solutions like cloud platforms.</p>
                       
                    </div>
                    <div class="box padding-16 bx-border-box p-rel">
                       
                        <div class="logo">
                            <img src="<?php echo get_template_directory_uri()?>/images/tvtv.svg" alt="">
                        </div>
                        <p class="card-title mt-28">Seamless Integration</p>
                        
                        <p class="card-content">Enable legacy systems to work harmoniously with modern software and technologies.</p>
                       
                    </div>
                </div>
            </div>
        </div>

        <div class="back-transparent transform-future-wrapper w-full padding-40 bx-border-box">
            <div class="transform-future wds m-auto">
                <div class="left-part">
                    <p class="section-title"><?php the_field('dt_section_6_subheading')?></p>
                    <p class="section-heading"><?php the_field('dt_section_6_mainheading')?></p>
                    <p class="card-content mt-0"><?php the_field('dt_section_6_content')?></p>
                    <button class="primary-button mt-32">Let's Work Together</button>
                </div>
                <div class="colorful-background right-part bx-border-box">
                  <img class="w-full" src="<?php echo get_template_directory_uri()?>/images/image (15).svg" alt="">
              </div>
            </div>
        </div>

        <?php get_footer(); ?>
        