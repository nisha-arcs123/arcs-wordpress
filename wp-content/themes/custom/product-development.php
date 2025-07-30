<?php
/*
Template Name: Product Development Page 
*/
?>
<div class="outer-box-product-page p-rel o-h">
    <img class="the-lines" src="<?php echo get_template_directory_uri() ?>/images/the-lines.svg" alt="" />
    <?php get_header(); ?>

 <div class="ui-banner full-vh p-rel">
          <div class="ios-app-right user-box z-1 padding-8">
              <div class="icon">
                  <img src="<?php echo get_template_directory_uri()?>/images/Group 38088.svg" alt="">
              </div>
              <span>Customer-Centric Approach</span>
          </div>
          <div class="ios-app-left z-1 user-box padding-8">
              <span>Design & (UI/UX)</span>
              <div class="icon">
                <img src="<?php echo get_template_directory_uri()?>/images/Group 38048.svg" alt="">
              </div>
          </div>
          <div class="ios-app-bottom z-1 user-box padding-8">
            <div class="icon">
              <img src="<?php echo get_template_directory_uri()?>/images/Mask group (10).svg" alt="">
          </div>
            <span>Discovery & Planning</span>
            
         </div>
         <div class="ai-bot z-1 user-box padding-8">
            <span>Cutting-Edge Technology</span>
            <div class="icon">
                <img src="<?php echo get_template_directory_uri()?>/images/Group 38072.svg" alt="">
            </div>
         </div>
         <div class="z-1 banner-girl-image">
          <img class="banner-gif" src="<?php echo get_template_directory_uri()?>/images/Group 38008.svg" alt="">
        </div>
          <div class="the-circle ui-banner-blur-circle"></div>
          <div class="the-circle ui-banner-blur-circle-II"></div>
          <img class="ai-ml-banner-line" src="<?php echo get_template_directory_uri()?>/images/line-al-ml-banner.svg" alt="">
          <div class="ui-banner-details z-2">
              <h1 class="banner-heading mb-16 mt-0 m-auto tx-center"><?php echo the_field('product_banner_heading');?></h1>
              <p class="banner-content mb-28 mt-0 m-auto tx-center"><?php echo the_field('product_banner_description'); ?></p>
              <button class="banner-button primary-button m-auto">START BUILDING TODAY</button>
          </div>
        </div>

        <div class="transform-future-wrapper w-full padding-40 bx-border-box">
            <div class="transform-future wds m-auto">
                <div class="left-part">
                    <p class="section-title mt-0 mb-12"><?php echo the_field('product_section1_heading1'); ?></p>
                    <p class="section-heading mt-0 mb-20"><?php echo the_field('product_section1_heading_2'); ?></p>
                    <p class="card-content mt-0 mb-32"><?php echo the_field('product_section1_description'); ?></p>
                    <button class="primary-button">Let's Work Together</button>
                </div>
                <div class="right-part padding-20 bx-border-box">
                    <img class="w-full" src="<?php echo get_template_directory_uri()?>/images/image (12).svg" alt="">
                </div>
            </div>
        </div>

        <div class="ai-solutions w-full">
          
          <p class="section-title mt-0 mb-0 tx-center"><?php echo the_field('product_section2_heading1'); ?></p>
          <p class="section-heading mt-0 mb-12 tx-center"><?php echo the_field('product_section2_heading2'); ?></p>
          <p class="section-content tx-center as-main-content m-auto"><?php echo the_field('product_section2_description'); ?></p>
          <div class="as-boxes bx-border-box wds m-auto">
              <div class="as-box p-rel padding-16 bx-border-box">
                  <div class="upper-part">
                      <div class="logo-wrapper bx-border-box">
                          <div class="logo">
                              <img src="<?php echo get_template_directory_uri()?>/images/ai-sol-logo-1.svg" alt="">
                          </div>
                      </div>
                      <p class="box-heading mt-0 mb-0">Predictive Analytics</p>
                  </div> 
                  <p class="card-content  inner-section-content mt-0 mb-0">Leverage data to forecast trends, behaviors, and outcomes for informed decision-making.</p>
              </div>
              <div class="as-box p-rel padding-16 bx-border-box">
                  <div class="upper-part">
                      <div class="logo-wrapper bx-border-box">
                          <div class="logo">
                              <img src="<?php echo get_template_directory_uri()?>/images/ai-sol-logo-2.svg" alt="">
                          </div>
                      </div>
                      <p class="box-heading mt-0 mb-0">Entertainment</p>
                  </div> 
                  <p class="card-content  inner-section-content mt-0 mb-0">AI-driven content recommendations, virtual reality experiences, and creative content generation.</p>
              </div>
              <div class="as-box p-rel padding-16 bx-border-box">
                  <div class="upper-part">
                      <div class="logo-wrapper bx-border-box">
                          <div class="logo">
                              <img src="<?php echo get_template_directory_uri()?>/images/ai-sol-logo-3.svg" alt="">
                          </div>
                      </div>
                      <p class="box-heading mt-0 mb-0">AI Solutions</p>
                  </div> 
                  <p class="card-content  inner-section-content mt-0 mb-0">Automation Streamline operations by automating repetitive tasks and workflows.</p>
              </div>
              <div class="as-box p-rel padding-16 bx-border-box">
                  <div class="upper-part">
                      <div class="logo-wrapper bx-border-box">
                          <div class="logo">
                              <img src="<?php echo get_template_directory_uri()?>/images/ai-sol-logo-4.svg" alt="">
                          </div>
                      </div>
                      <p class="box-heading mt-0 mb-0">Healthcare</p>
                  </div> 
                  <p class="card-content  inner-section-content mt-0 mb-0">Early disease detection, personalized medicine, and robotic surgeries.</p>
              </div>
              <div class="as-box p-rel padding-16 bx-border-box">
                  <div class="upper-part">
                      <div class="logo-wrapper bx-border-box">
                          <div class="logo">
                              <img src="<?php echo get_template_directory_uri()?>/images/ai-sol-logo-5.svg" alt="">
                          </div>
                      </div>
                      <p class="box-heading mt-0 mb-0">Retail</p>
                  </div> 
                  <p class="card-content  inner-section-content mt-0 mb-0">Personalized product recommendations, inventory management, and automated customer support.</p>
              </div>
              <div class="as-box p-rel padding-16 bx-border-box">
                  <div class="upper-part">
                      <div class="logo-wrapper bx-border-box">
                          <div class="logo">
                              <img src="<?php echo get_template_directory_uri()?>/images/ai-sol-logo-6.svg" alt="">
                          </div>
                      </div>
                      <p class="box-heading mt-0 mb-0">Finance</p>
                  </div> 
                  <p class="card-content  inner-section-content mt-0 mb-0">Fraud detection, credit risk analysis, and algorithmic trading.</p>
              </div>
              <div class="as-box p-rel padding-16 bx-border-box">
                  <div class="upper-part">
                      <div class="logo-wrapper bx-border-box">
                          <div class="logo">
                              <img src="<?php echo get_template_directory_uri()?>/images/ai-sol-logo-7.svg" alt="">
                          </div>
                      </div>
                      <p class="box-heading mt-0 mb-0">Computer Vision</p>
                  </div> 
                  <p class="card-content  inner-section-content mt-0 mb-0">Use AI to interpret visual data for facial recognition, medical imaging, 
                    and object detection.</p>
              </div>
              <div class="as-box p-rel padding-16 bx-border-box">
                  <div class="upper-part">
                      <div class="logo-wrapper bx-border-box">
                          <div class="logo">
                              <img src="<?php echo get_template_directory_uri()?>/images/ai-sol-logo-8.svg" alt="">
                          </div>
                      </div>
                      <p class="box-heading mt-0 mb-0">Education</p>
                  </div> 
                  <p class="card-content  inner-section-content mt-0 mb-0">Adaptive learning platforms, virtual tutors, and performance analytics.</p>
              </div>
          </div>
        </div>

        <div class="key-features">
       
            <p class="key-text"><?php echo the_field('product_section4_heading'); ?> <b><?php echo the_field('product_section3_span_heading'); ?> </b></p>
        
          <div class="divs div1">
            <div class="upper-div">
              <div class="img-div">
                <img src="<?php echo get_template_directory_uri()?>/images/Mask group (15).svg" alt="" class="logo-img">
              </div>
              <h1>01</h1>
            </div>
              <h3 class="card-title">Customized Solutions</h3>
              <p class="card-content">Tailored to your specific goals and audience.</p>
          </div>
          <div class="divs div2">
            <div class="upper-div">
              <div class="img-div">
                <img src="<?php echo get_template_directory_uri()?>/images/Mask group (11).svg" alt="" class="logo-img">
              </div>
              <h1>02</h1>
            </div>
              <h3 class="card-title">User-Centric Design</h3>
              <p class="card-content">Ensuring ease of use and accessibility.</p>
          </div>
          <div class="divs div3">
            <div class="upper-div">
              <div class="img-div">
                <img src="<?php echo get_template_directory_uri()?>/images/Mask group (11).svg" alt="" class="logo-img">
              </div>
              <h1>03</h1>
            </div>
              <h3 class="card-title">Scalable Architecture</h3>
              <p class="card-content">Built for long-term growth and adaptability.</p>
          </div>
          <div class="divs div4">
            <div class="upper-div">
              <div class="img-div">
                <img src="<?php echo get_template_directory_uri()?>/images/Mask group (11).svg" alt="" class="logo-img">
              </div>
              <h1>04</h1>
            </div>
              <h3 class="card-title">SEO-Friendly Approach</h3>
              <p class="card-content">Optimized for better visibility in search engines.</p>
          </div>
          <div class="divs div5">
            <div class="upper-div">
              <div class="img-div">
                <img src="<?php echo get_template_directory_uri()?>/images/Mask group (12).svg" alt="" class="logo-img">
              </div>
              <h1>05</h1>
            </div>
              <h3 class="card-title">Regular Updates</h3>
              <p class="card-content">Keeping your website fresh and functional.</p>
          </div>
          
        </div>

        <div class="vision-to-life wds m-auto o-h bx-border-box">
          <div class="content">
              <p class="section-heading mt-0 mb-0"><?php echo the_field('product_section4_heading'); ?> <span class="vision"><?php echo the_field('product_section4_heading_span'); ?></span> <?php echo the_field('product_section4_heading2'); ?> 
                  <span class="start"><?php echo the_field('product_section4_heading2_span'); ?></span></p>
              <button class="primary-button mt-40">CALL TO ACTION</button>
          </div>
        </div>
        
        <div class="remarkable-benefits-wrapper w-full">
            <p class="section-title mt-0 mb-0 tx-center"><?php echo the_field('product_section5_heading1'); ?></p>
            <p class="section-heading mt-0 mb-0 tx-center"><?php echo the_field('product_section5_heading2'); ?></p>
            <p class="section-content main-content mt-0 m-auto tx-center "><?php echo the_field('product_section5_description'); ?></p>
            <div class="boxes-wrapper wds m-auto bx-border-box">
                <div class="box mb-28 padding-20 bx-border-box">
                    <div class="upper-part">
                        <div class="logo logo-1">
                            <img src="<?php echo get_template_directory_uri()?>/images/ai-ml-section-4-logo-1.svg" alt="">
                        </div>
                        <p class="card-title mt-28 mb-0">Discovery & Planning</p>
                    </div>
                    <p class="card-content mt-0 mb-0">Understand your goals, audience, and requirements.
                      Conduct research and define a clear roadmap for development.</p>
                </div>
                <div class="box mb-28 padding-20 bx-border-box">
                    <div class="upper-part">
                        <div class="logo logo-2">
                            <img src="<?php echo get_template_directory_uri()?>/images/ai-ml-section-4-logo-2.svg" alt="">
                        </div>
                        <p class="card-title mt-20 mb-0">Wireframing & Prototyping </p>
                    </div>
                    <p class="card-content mt-0 mb-0">Create blueprints and prototypes to visualize the website's structure and design.
                      Gather feedback to refine concepts early in the process.</p>
                </div>
                <div class="box mb-28 padding-20 bx-border-box">
                    <div class="upper-part">
                        <div class="logo logo-3">
                            <img src="<?php echo get_template_directory_uri()?>/images/ai-ml-section-4-logo-3.svg" alt="">
                        </div>
                        <p class="card-title mt-20 mb-0">Design & (UI/UX)</p>
                    </div>
                    <p class="card-content mt-0 mb-0">Focus on responsive layouts, accessibility, and seamless navigation.</p>
                </div>
                <div class="box mb-28 padding-20 bx-border-box">
                    <div class="upper-part">
                        <div class="logo logo-4">
                            <img src="<?php echo get_template_directory_uri()?>/images/ai-ml-section-4-logo-4.svg" alt="">
                        </div>
                        <p class="card-title mt-20 mb-0">Daily Life Enhancements</p>
                    </div>
                    <p class="card-content mt-0 mb-0">Enriches everyday living with virtual assistants, smart home devices, and AI-driven 
                        content curation.</p>
                </div>
                <div class="box mb-28 padding-20 bx-border-box">
                    <div class="upper-part">
                        <div class="logo logo-5">
                            <img src="<?php echo get_template_directory_uri()?>/images/ai-ml-section-4-logo-5.svg" alt="">
                        </div>
                        <p class="card-title mt-20 mb-0">Smarter Decision-Making</p>
                    </div>
                    <p class="card-content mt-0 mb-0">Uses advanced data analysis and predictive insights for better outcomes in industries
                         like finance, healthcare, and logistics.</p>
                </div>
                <div class="box mb-28 padding-20 bx-border-box">
                    <div class="upper-part">
                        <div class="logo logo-6">
                            <img src="<?php echo get_template_directory_uri()?>/images/ai-ml-section-4-logo-6.svg" alt="">
                        </div>
                        <p class="card-title mt-20 mb-0">Innovation</p>
                    </div> 
                    <p class="card-content mt-0 mb-0">AI drives innovation by enabling new solutions, products, and services across industries,
                         from healthcare to transportation.</p>
                </div>
                <div class="box mb-28 padding-20 bx-border-box">
                    <div class="upper-part">
                        <div class="logo logo-7">
                            <img src="<?php echo get_template_directory_uri()?>/images/ai-ml-section-4-logo-7.svg" alt="">
                        </div>
                        <p class="card-title mt-20 mb-0">Cost Reduction</p>
                    </div>
                    <p class="card-content mt-0 mb-0">By automating processes and improving operational efficiency, AI helps businesses save time 
                        and resources, cutting costs.</p>
                </div>
                <div class="box mb-28 padding-20 bx-border-box">
                    <div class="upper-part">
                        <div class="logo logo-8">
                            <img src="<?php echo get_template_directory_uri()?>/images/ai-ml-section-4-logo-8.svg" alt="">
                        </div>
                        <p class="card-title mt-20 mb-0">Data-Driven Insights</p>
                    </div>
                    <p class="card-content mt-0 mb-0">AI analyzes vast amounts of data quickly to identify trends, predict outcomes, and support
                         better decision-making.</p>
                </div>
            </div>

        </div>

        <?php
        get_footer();?>