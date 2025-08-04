<?php
/*
Template Name: Application Modernization Page 
*/
?>

<div class="outer-box-appmod-page p-rel o-h">
    <img class="the-lines" src="<?php echo get_template_directory_uri() ?>/images/the-lines.svg" alt="" />
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
        <div class="line-design left-line-box">
            <img class="left-inner-line p-rel z-0" src="<?php echo get_template_directory_uri()?>/images/Vector 109.svg" alt="">
            <div class="line-logo-box z-1">
                <img src="<?php echo get_template_directory_uri()?>/images/Group 38149.svg" alt="">
            </div>
            <span>analytics</span>
        </div>
        <div class="line-design right-line-box">
            <img class="right-inner-line p-rel z-0" src="<?php echo get_template_directory_uri()?>/images/Vector 110.svg" alt="">
            <div class="line-logo-box z-1">
                <img src="<?php echo get_template_directory_uri()?>/images/Mask group (16).svg" alt="">
            </div>
            <span>Add to Cart Button</span>
        </div>
        <img class="z-1 banner-image" src="<?php echo get_template_directory_uri()?>/images/appmodern.svg" alt="">
        <div class="banner-blur-circle-1"></div>
        <div class="ui-banner-details banner-details z-2">
            <h1 class="banner-heading inner-banner-heading mb-16 mt-0 m-auto tx-center"><?php the_field('am_banner_mainheading')?></h1>
            <p class="banner-content inner-banner-content mb-28 mt-0 m-auto tx-center"><?php the_field('am_banner_content')?></p>
            <button class="banner-button primary-button m-auto">START BUILDING TODAY</button>
        </div>
    </div>

    <div class="cs-remarkable-benefits-wrapper w-full">
        <p class="section-heading mt-0 mb-12 tx-center"><?php the_field('section1_mainheading') ?></p>
        <p class="section-content main-content mt-0 m-auto tx-center "><?php the_field('section1_content') ?></p>
        <div class="boxes-wrapper wds m-auto padding-40 bx-border-box">
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


    <div class="cs-digital-transform-wrapper wds m-auto">
      <div class="overley"></div>
      <div class="digital-transformation m-auto p-rel">
          <div class="right-part">
              <img src="<?php echo get_template_directory_uri() ?>/images/two-g-dis.svg" alt="">
          </div>
          <div class="left-part p-rel">
              <p class="section-title mt-0 mb-12 z-1"><?php echo the_field('section2_heading'); ?></p>
              <p class="section-heading mt-0 mb-20 z-1"><?php echo the_field('section2_mainheading'); ?></p>
              <p class="section-content mt-0 z-1"><?php echo the_field('section2_content'); ?></p> 
          </div>
          <img src="<?php echo get_template_directory_uri() ?>/images/Vector 11 (13).svg" alt="" class="z-img1 z-0">
          <div class="circle4 z-0"></div>
      </div>
    </div>

    <div class="services-we-offer wds m-auto">
          <p class="section-title m-auto w-fc tx-center"><?php echo the_field('section3_heading'); ?></p>
          <p class="section-heading mb-20 mt-12 tx-center"><?php echo the_field('section3_mainheading'); ?></p>
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

    <div class="vision-to-life wds m-auto o-h bx-border-box">
      <div class="content">
          <p class="section-heading mt-0 mb-0">
            <?php echo the_field('section4_heading1'); ?> 
            <span class="vision"><?php echo the_field('section4_span1'); ?></span>
            <?php echo the_field('section4_heading2'); ?>
            <span class="start"><?php echo the_field('section4_span2'); ?></span>
          </p>
          <button class="primary-button mt-40">CALL TO ACTION</button>
      </div>
    </div>

    <div class="kf-wrapper">
          <div class="key-features wds m-auto">
              <p class="section-title mt-0 mb-12"><?php echo the_field('section5_heading'); ?></p>
              <p class="section-heading mt-0 mb-20"><?php echo the_field('section5_mainheading'); ?></p>
              <p class="section-content kf-main-content mt-0 mb-40"><?php echo the_field('section5_content'); ?></p>
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

        <?php get_footer(); ?>


