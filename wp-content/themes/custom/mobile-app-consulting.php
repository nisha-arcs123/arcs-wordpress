<?php
/*
Template Name: Mobile App Consulting Page  
*/
?>


<div class="outer-box-mobile-page w-full ox-h">
        <?php get_header()?>

        <div class="ui-banner full-vh p-rel">
            <div class="user-box-right user-box-1 z-1 padding-8">
                <div class="banner-icon">
                    <img src="<?php echo get_template_directory_uri()?>/images/ui-mask-group.svg" alt="">
                </div>
                <span>User Experience Strategy</span>
            </div>
            <div class="user-box-left z-1 user-box-1 padding-8">
                <div class="banner-icon">
                    <img src="<?php echo get_template_directory_uri()?>/images/ui-icons.svg" alt="">
                </div>
                <span>User Interface</span>
            </div>
            <div class="line-design left-line-box">
                <img class="left-inner-line p-rel z-0" src="<?php echo get_template_directory_uri()?>/images/ui-left-banner-line.svg" alt="">
                <div class="line-logo-box z-1">
                    <img src="<?php echo get_template_directory_uri()?>/images/ui-group-37931.svg" alt="">
                </div>
                <span>Effective Navigation</span>
            </div>
            <div class="line-design right-line-box">
                <img class="right-inner-line p-rel z-0" src="<?php echo get_template_directory_uri()?>/images/ui-right-banner-line.svg" alt="">
                <div class="line-logo-box z-1">
                    <img src="<?php echo get_template_directory_uri()?>/images/ui-group-37931.svg" alt="">
                </div>
                <span>Guided Behavior</span>
            </div>
            <img class="z-1 banner-image" src="<?php echo get_template_directory_uri()?>/images/phone-hand.svg" alt="">
            <div class="banner-blur-circle-1"></div>
            <div class="ui-banner-details banner-details z-2">
                <h1 class="banner-heading inner-banner-heading mb-16 mt-0 m-auto tx-center"><?php the_field('mobile_banner_mainheading')?></h1>
                <p class="banner-content inner-banner-content mb-28 mt-0 m-auto tx-center"><?php the_field('mobile_banner_content')?></p>
                <button class="banner-button primary-button m-auto">START BUILDING TODAY</button>
            </div>
        </div>

        <div class="image-text-section-wrapper w-full z-1 p-rel">
          <div class="image-text o-h wds m-auto">
          <div class="img-section">
                <img class="" src="<?php echo get_template_directory_uri()?>/images/image (11).svg" alt="">
          </div>
          <div class="text-section o-h p-rel">
              <div class="ios-app-circle1 z-0"></div>
              <div class="section">
                  <h2 class="section-heading mb-20  z-1 p-rel"><?php the_field('mobile_section_1_mainheading')?></h2>
                  <p class="card-content  mb-32 z-1 p-rel"><?php the_field('mobile_section_1_content')?></p>
                  <button class="primary-button z-1 p-rel">LETS'S WORK TOGETHER</button>
              </div>
              <div class="ios-app-circle2 z-0 p-rel"></div>
              <img class="ios-app-z-img1 z-0" src="<?php echo get_template_directory_uri()?>/images/Vector 12 (1).svg" alt="">
          </div>
        </div>
        </div>

        <div class="start-your-project p-rel">
            <img src="<?php echo get_template_directory_uri()?>/images/Ellipse 61 (3).svg" alt="" class="right-side">
            <img src="<?php echo get_template_directory_uri()?>/images/Ellipse 60 (1).svg" alt="" class="left-side">
            <div class="ios-app-circle1 z-0"></div>
            <h3 class="large-text mb-10 margin-0 z-1"><?php the_field('mobile_section_2_mainheading')?></h3>
            <p class="normal-text inner-content tx-center mb-32 z-1"><?php the_field('mobile_section_2_content')?></p>
            <button class="primary-button z-1">CONTACT US</button>
            <img src="<?php echo get_template_directory_uri()?>/images/Vector 12 (2).svg" alt="" class="z-img2 z-1">
            <img src="<?php echo get_template_directory_uri()?>/images/Vector 11 (9).svg" alt="" class="z-img3 z-1">
            <div class="ios-app-circle2 br-50 z-0"></div>
        </div>

        <div class="transform-future-wrapper w-full padding-40 bx-border-box">
          <div class="transform-future wds m-auto">
              <div class="left-part">
                    <h2 class="section-heading mt-0 mb-20"><?php the_field('mobile_section_3_mainheading')?></h2>
                    <p class="card-content mt-0 mb-32"><?php the_field('mobile_section_3_content')?></p>
                    <button class="primary-button">Let's Work Together</button>
              </div>
              <div class="right-part padding-20 bx-border-box">
                <img class="w-full" src="<?php echo get_template_directory_uri()?>/images/image 134.svg" alt="">
              </div>
          </div>
        </div>

        <div class="aspects-wrapper wds m-auto">
            <div class="aspects w-full bx-border-box padding-40 p-rel">
                <h2 class="section-heading mt-0 mb-28"><?php the_field('mobile_section_4_mainheading')?></h2>
                <h1 class="invisible mt-0 z-0">Featured Aspects</h1>
                <div class="boxes">
                    <div class="box aspect-card1 padding-20 bx-border-box">
                        <img class="mb-20 img1" src="<?php echo get_template_directory_uri()?>/images/Group 37920.svg" alt="" class="img1">
                        <img class="mb-20 img2" src="<?php echo get_template_directory_uri()?>/images/Group 37931.svg" alt="" class="img2">
                        <h4 class="box-heading hover-effect mt-0 mb-8">iOS Product Development</h4>
                        <p class="card-content mb-0 hover-effect">Designing and developing powerful iOS apps that truly represent the value of your brand.</p>
                    </div>
    
                    <div class="box aspect-card2 padding-20 bx-border-box">
                        <img class="mb-20 img1" src="<?php echo get_template_directory_uri()?>/images/Group 37925.svg" alt="" class="img1">
                        <img class="mb-20 img2" src="<?php echo get_template_directory_uri()?>/images/Group 37929.svg" alt="" class="img2">
                        <h4 class="box-heading hover-effect mt-0 mb-8">iOS Development</h4>
                        <p class="card-content mb-0 hover-effect">Creating custom-made enterprise iOS apps that help your business grow.</p>
                    </div>
    
                    <div class="box aspect-card3 padding-20 bx-border-box">
                        <img class="mb-20 img1" src="<?php echo get_template_directory_uri()?>/images/Group 37926.svg" alt="" class="img1">
                        <img class="mb-20 img2" src="<?php echo get_template_directory_uri()?>/images/Group 37928.svg" alt="" class="img2">
                        <h4 class="card-title mt-0 mb-8 hover-effect">iOS App Optimisation</h4>
                        <p class="card-content mb-0 hover-effect">Using crash data analysis and code reviews to optimize your iOS apps.</p>
                    </div>
    
                    <div class="box aspect-card4 padding-20 bx-border-box">
                        <img class="mb-20 img1" src="<?php echo get_template_directory_uri()?>/images/Group 37927.svg" alt="" class="img1">
                        <img class="mb-20 img2" src="<?php echo get_template_directory_uri()?>/images/Group 37930.svg" alt="" class="img2">
                        <h4 class="card-title mt-0 mb-8 hover-effect">iOS App Redesign</h4>
                        <p class="card-content mb-0 hover-effect">Redesigning iOS apps into exceptional products with design-led engineering.</p>
                    </div>
                </div>
            </div> 
        </div>

        <div class="transform-future-wrapper w-full padding-40 bx-border-box">
            <div class="transform-future-alternate wds m-auto">
                <div class="left-part">
                    <h2 class="section-heading mt-0 mb-20"><?php the_field('mobile_section_5_mainheading')?></h2>
                    <p class="card-content mt-0 mb-32"><?php the_field('mobile_section_5_content')?></p>
                    <button class="primary-button">Let's Work Together</button>
                </div>
                <div class="right-part padding-20 bx-border-box">
                  <img class="w-full" src="<?php echo get_template_directory_uri()?>/images/image (9).svg" alt="">
                </div>
            </div>
        </div>

        <div class="full-spectrum-outer w-full">
            <h2 class="fs-large-heading mb-20 mt-0"><?php the_field('mobile_section_6_mainheading')?></h2>
            <p class="fs-normal-text card-content mb-40 mt-0"><?php the_field('mobile_section_6_content')?></p>
            <div class="full-spectrum-cards">

                <div class="full-spectrum-inner card1">
                    <div class="spectrum mb-20">
                        <div class="img-div1 div">
                            <img src="<?php echo get_template_directory_uri()?>/images/Mask group (9).svg" alt="">
                        </div>
                        <h3 class="mobile margin-0">Mobile App Strategy Design</h3>
                    </div>
                    <p class="card-content">Plotting out the app itself is just one part of the solution; ensuring your mobile app is integrated into your
                       overall business and enterprise strategy is critical. We help you analyze and evaluate all mobile uses of your app or platform to
                        ensure that it’s cost-effective, efficient, and user-friendly.</p>
                </div>
                <div class="full-spectrum-inner card2">
                    <div class="spectrum mb-20">
                        <div class="img-div2 div">
                            <img src="<?php echo get_template_directory_uri()?>/images/Group 37947.svg" alt="">
                        </div>
                        <h3 class="mobile margin-0">Mobile App Audit & Optimization</h3>
                    </div>
                    <p class="card-content">Your business performance is tightly aligned with your mobile app performance. Our app development consultants
                       are experts in a variety of niche audits, including Once we’ve determined obstacles to progress and opportunities for improvements, 
                       we create and execute a custom plan to optimize your apps for better outcomes and ROI.</p>
                </div>
                <div class="full-spectrum-inner card3">
                    <div class="spectrum mb-20">
                        <div class="img-div3 div">
                            <img src="<?php echo get_template_directory_uri()?>/images/Group 37948.svg" alt="">
                        </div>
                        <h3 class="mobile margin-0">Mobile App Development</h3>
                    </div>
                    <p class="card-content">Having been at the forefront of mobile app development since the dawn of the mobile app (2007), we have 
                      experience and expertise in designing and deploying a bespoke solution that supports your company’s needs in innovative ways. And we
                       ensure that every angle .</p>
                </div>
                <div class="full-spectrum-inner card4">
                    <div class="spectrum mb-20">
                        <div class="img-div4 div">
                            <img src="<?php echo get_template_directory_uri()?>/images/Group 37949.svg" alt="">
                        </div>
                        <h3 class="mobile margin-0">Mobile App Modernization</h3>
                    </div>
                    <p class="card-content">One of the smartest ways to maximize your budget, efficiency, and impact is to update your mobile app’s features
                       and functions. Our seasoned mobile app development consultants collaborate with your team to craft a modernization strategy that 
                       supports business objectives and continuity for a seamless upgrade to your user experience.</p>
                </div>
            </div>
        </div>
        
        
          <?php get_footer()?>
    </div>