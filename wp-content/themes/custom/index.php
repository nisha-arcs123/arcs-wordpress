<?php
/*
Template Name: Home Page  
*/
?>
<div class="outer-box-home-page p-rel o-h">
  <img class="the-lines" src="<?php echo get_template_directory_uri() ?>/images/the-lines.svg" alt="" />
  
<?php get_header(); ?>
      <div class="banner tx-center p-rel">
      
          <div class="banner-items-wrapper h-full">
          <h1 class="banner-heading bx-border-box w-sm">
          <?php echo the_field('home_banner_main_heading') ?>
            <img
              class="ai-gif"
              src="<?php echo get_template_directory_uri() ?>/images/AI-GIF.gif"
              alt=""
            />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo the_field('home-banner-heading-2') ?>
          </h1>
          <p class="banner-content bx-border-box w-sm p-rel z-9">
          <?php echo the_field('home-banner-content') ?>
          </p>
          
          <button class="primary-button m-auto p-rel">TALK TO EXPRESS</button>
          </div>
      </div>
 
      <a href="<?php echo get_permalink(get_page_by_path( 'ui-page' ))?>"></a>
 
      <img class="bold-circle" src="<?php echo get_template_directory_uri()?>/images/bold-circle.svg" alt="" />
 
      <div class="what-we-do wds p-rel bx-border-box">
        <img class="mouse-gif" src="<?php echo get_template_directory_uri(); ?>/images/mouse-gif.gif" alt="" />
 
        <span class="section-title mb-20">
            <?php echo the_field('home-section1-heading') ?>
        </span>
 
        <h1 class="section-heading mb-12 mt-0 wwd-heading">
          <?php echo the_field('home-section1-mainheading') ?>
        </h1>

        <p class="section-content mb-12">
          <?php echo the_field('home-section1-content'); ?>
        </p>
 
        <div class="boxes-wrapper mt-40">
          <div class="inner-box bx-border-box t-3 cp">
            <p class="card-title inner-box-heading mt-0">Advanced Data, AI, and ML</p>
            <p class="section-content">
              Cutting-edge AI solutions for business optimization and growth.
            </p>
            <img class="mt-20 mb-12 mr-0 ml-0 main-img" src="<?php echo get_template_directory_uri(); ?>/images/wwdimg-1.svg" alt="" />
            <div class="learn-more tx-dec-none t-3 p-rel">
              <img
                class="learn-more-arrow"
                src="<?php echo get_template_directory_uri(); ?>/images/arrow - right.svg"
                alt=""
              />
              <span class="section-content">Learn More</span></div
            >
          </div>
 
          <div class="inner-box bx-border-box t-3 cp">
            <p class="card-title inner-box-heading mt-0">Web Development</p>
            <p class="section-content">
              Dynamic and interactive web applications for a seamless user
              experience.
            </p>
            <img class="mt-20 mb-12 mr-0 ml-0 main-img" src="<?php echo get_template_directory_uri(); ?>/images/wwdimg-2.svg" alt="" />
            <div class="learn-more tx-dec-none t-3 p-rel">
              <img
                class="learn-more-arrow margin-0"
                src="<?php echo get_template_directory_uri(); ?>/images/arrow - right.svg"
                alt=""
              />
              <span class="section-content">Learn More</span></div
            >
          </div>
 
          <div class="inner-box bx-border-box t-3 cp">
            <p class="card-title inner-box-heading mt-0">Mobile APP Development</p>
            <p class="section-content">
              Reach a wider audience with hybrid mobile app development.
            </p>
            <img class="mt-20 mb-12 mr-0 ml-0 main-img" src="<?php echo get_template_directory_uri(); ?>/images/wwdimg-3.svg" alt="" />
            <div class="learn-more tx-dec-none t-3 p-rel">
              <img
                class="learn-more-arrow margin-0"
                src="<?php echo get_template_directory_uri(); ?>/images/arrow - right.svg"
                alt=""
              />
              <span class="section-content">Learn More</span></div
            >
          </div>
 
          <div class="inner-box bx-border-box t-3 cp">
            <p class="card-title inner-box-heading mt-0">UI/UX Design</p>
            <p class="section-content">
              Stunning and brand-centric designs to captivate your audience.
            </p>
            <img class="mt-20 mb-12 mr-0 ml-0 main-img" src="<?php echo get_template_directory_uri(); ?>/images/wwdimg-4.svg" alt="" />
            <div class="learn-more tx-dec-none t-3 p-rel">
              <img
                class="learn-more-arrow margin-0"
                src="<?php echo get_template_directory_uri(); ?>/images/arrow - right.svg"
                alt=""
              />
             <span class="section-content">Learn More</span> </div
            >
          </div>
        </div>
      </div> 
 
      <div class="our-strategy w-full bx-border-box p-rel">
        <div class="upper-triangle bx-border-box wds-tgl"></div>
        <div class="lower-triangle bx-border-box wds-tgl"></div>
 
        <div class="left-right-part-wrapper wds my-auto">
          <div class="left-part mb-40">
            <span class="section-title">
              <?php echo the_field('home-section2-subheading'); ?>
            </span>
            <h1 class="section-heading t-ideas">
              <?php echo the_field('home-section2-mainheading'); ?>
            </h1>
            <p class="section-content">
              <?php echo the_field('home-section2-content'); ?>
            </p>
            <button class="primary-button mt-40 wcu-btn">LEARN MORE</button>
          </div>
 
          <div class="right-part">
            <div class="left-boxes">
              <div class="gradient-border p-rel bx-border-box o-h">
                <div class="circle br-50"></div>
                <div class="white-inner-overlay t-4"></div>
                <div class="white-overlay t-4"></div>
                <img class="snake" src="<?php echo get_template_directory_uri() ?>images/snake.svg" alt="" />
                <div class="inner-box p-rel">
                  <div class="box-logo t-3">
                    <img class="t-4" src="<?php echo get_template_directory_uri(); ?>/images/os2.svg" alt="" />
                  </div>
                  <p class="box-title">Analysis</p>
                  <p class="section-content gb-content">
                    Our strategic innovations are fueled by in-depth analysis.
                  </p>
                </div>
              </div>
 
              <div class="gradient-border lower-box p-rel bx-border-box o-h">
                <div class="circle br-50"></div>
                <div class="white-inner-overlay t-4"></div>
                <div class="white-overlay t-4"></div>
                <img class="snake" src="<?php echo get_template_directory_uri(); ?>/images/snake.svg" alt="" />
                <div class="inner-box p-rel">
                  <div class="box-logo t-3">
                    <img class="t-4" src="<?php echo get_template_directory_uri(); ?>/images/os1.svg" alt="" />
                  </div>
                  <p class="box-title">Communication</p>
                  <p class="section-content gb-content">
                    Increasing teamwork with strong communication tools.
                  </p>
                </div>
              </div>
            </div>
 
            <div class="right-boxes">
              <div class="gradient-border p-rel bx-border-box o-h">
                <div class="circle br-50"></div>
                <div class="white-inner-overlay t-4"></div>
                <div class="white-overlay t-4"></div>
                <img class="snake" src="<?php echo get_template_directory_uri(); ?>/images/snake.svg" alt="" />
                <div class="inner-box p-rel">
                  <div class="box-logo t-3">
                    <img class="t-4" src="<?php echo get_template_directory_uri(); ?>/images/os4.svg" alt="" />
                  </div>
                  <p class="box-title">Relevance</p>
                  <p class="section-content gb-content">
                    Tech solutions that are customised for maximum relevance.
                  </p>
                </div>
              </div>
 
              <div class="gradient-border lower-box p-rel bx-border-box o-h">
                <div class="circle br-50"></div>
                <div class="white-inner-overlay t-4"></div>
                <div class="white-overlay t-4"></div>
                <img class="snake" src="<?php echo get_template_directory_uri(); ?>/images/snake.svg" alt="" />
                <div class="inner-box p-rel">
                  <div class="box-logo t-3">
                    <img class="t-4" src="<?php echo get_template_directory_uri(); ?>/images/os3.svg" alt="" />
                  </div>
                  <p class="box-title">Satisfaction</p>
                  <p class="section-content gb-content">
                    Unwavering dedication: Our success, your satisfaction.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
 
      <div class="why-choose-us tx-center p-rel">
        <img class="circle-gif" src="<?php echo get_template_directory_uri(); ?>/images/circle-gif.gif" alt="" />
        <span class="section-title p-rel z-2">
          <?php
            echo the_field('home-section3-subheading'); 
          ?>
        </span>
        <h1 class="section-heading p-rel z-2 wcu-heading m-auto">
          <?php 
            echo the_field('home-section3-mainheading')
          ?>
        </h1>
        <p class="section-content mt-8 p-rel z-2 wcu-content">
          <?php echo the_field('home-section3-content'); ?>
        </p>
 
        <div class="choose-div wds m-auto">
          <div class="item">
            <img src="<?php echo get_template_directory_uri(); ?>/images/small-circle1.svg" alt="" class="small-circle1" />
            <h1>01</h1>
            <h2>Fast launch and revenue</h2>
            <h2 class="h2">Fast launch and revenue</h2>
            <img src="<?php echo get_template_directory_uri(); ?>/images/small-circle2.svg" alt="" class="small-circle2" />
            <ul class="list">
              <li>
                100% of our projects are delivered strictly on deadlines and
                within budget.
              </li>
              <li>
                100% of our projects are delivered strictly on deadlines and
                within budget.
              </li>
            </ul>
 
            <img src="<?php echo get_template_directory_uri(); ?>/images/big-circle.svg" alt="" class="big-circle" />
            <img src="<?php echo get_template_directory_uri(); ?>/images/Vector 11 (2).svg" alt="" class="z-img" />
          </div>
 
          <div class="item">
            <img src="<?php echo get_template_directory_uri(); ?>/images/small-circle1.svg" alt="" class="small-circle1" />
            <h1>02</h1>
            <h2>Built for scalability</h2>
            <h2 class="h2">Built for scalability</h2>
            <img src="<?php echo get_template_directory_uri(); ?>/images/small-circle2.svg" alt="" class="small-circle2" />
            <ul class="list">
              <li>
                100% of our projects are delivered strictly on deadlines and
                within budget.
              </li>
              <li>
                100% of our projects are delivered strictly on deadlines and
                within budget.
              </li>
            </ul>
 
            <img src="<?php echo get_template_directory_uri(); ?>/images/big-circle.svg" alt="" class="big-circle" />
            <img src="<?php echo get_template_directory_uri(); ?>/images/Vector 11 (2).svg" alt="" class="z-img" />
          </div>
 
          <div class="item">
            <img src="<?php echo get_template_directory_uri(); ?>/images/small-circle1.svg" alt="" class="small-circle1" />
            <h1>03</h1>
            <h2>Secure and safe</h2>
            <h2 class="h2">Secure and safe</h2>
            <img src="<?php echo get_template_directory_uri(); ?>/images/small-circle2.svg" alt="" class="small-circle2" />
            <ul class="list">
              <li>
                100% of our projects are delivered strictly on deadlines and
                within budget.
              </li>
              <li>
                100% of our projects are delivered strictly on deadlines and
                within budget.
              </li>
            </ul>
 
            <img src="<?php echo get_template_directory_uri(); ?>/images/big-circle.svg" alt="" class="big-circle" />
            <img src="<?php echo get_template_directory_uri(); ?>/images/Vector 11 (2).svg" alt="" class="z-img" />
          </div>
 
          <div class="item">
            <img src="<?php echo get_template_directory_uri(); ?>/images/small-circle1.svg" alt="" class="small-circle1" />
            <h1>04</h1>
            <h2>Flexible</h2>
            <h2 class="h2">Flexible</h2>
            <img src="<?php echo get_template_directory_uri() ?>/images/small-circle2.svg" alt="" class="small-circle2" />
            <ul class="list">
              <li>
                100% of our projects are delivered strictly on deadlines and
                within budget.
              </li>
              <li>
                100% of our projects are delivered strictly on deadlines and
                within budget.
              </li>
            </ul>
 
            <img src="<?php echo get_template_directory_uri(); ?>/images/big-circle.svg" alt="" class="big-circle" />
            <img src="<?php echo get_template_directory_uri(); ?>/images/Vector 11 (2).svg" alt="" class="z-img" />
          </div>
        </div>
 
      </div>
 
      <div class="our-expertise">
        <div class=" tx-center">
          <span class="section-title">
            <?php 
             echo the_field('home-section4-subheading');
            ?>
          </span>
          <h1 class="section-heading wcu-heading tx-center">
            <?php echo the_field('home-section4-mainheading'); ?>
          </h1>
          <p class="section-content mt-8 p-rel z-2 wcu-content">
          <?php echo the_field('home-section4-content'); ?>
          </p>
        </div>
 
        <div class="lower-part w-full bx-border-box p-rel pb-40 pt-40">
          <div class="oe-upper-triangle bx-border-box wds-tgl d-n"></div>
          <div class="oe-lower-triangle bx-border-box wds-tgl d-n"></div>
          <div class="tech-circles">
            <img class="line-lg" src="<?php echo get_template_directory_uri(); ?>/images/techos-line.svg" alt="">
            <div class="angular tech-circle w-fc">
              <div class="angular-circle circle br-50">
                <img src="<?php echo get_template_directory_uri(); ?>/images/angular-svgrepo-com 6.svg" alt="">
              </div>
              <p class="text angular-text">ANGULAR</p>
            </div>
            <div class="laravel tech-circle w-fc">
              <div class="laravel-circle circle br-50">
                <img src="<?php echo get_template_directory_uri(); ?>/images/laravel.svg" alt="">
              </div>
              <p class="text laravel-text">LARAVEL</p>
            </div>
            <div class="java tech-circle w-fc">
              <div class="java-circle circle br-50">
                <img src="<?php echo get_template_directory_uri(); ?>/images/java.svg" alt="">
              </div>
              <p class="text java-text">JAVA</p>
            </div>
            <div class="tensorflow tech-circle w-fc">
              <div class="tensorflow-circle circle br-50">
                <img src="<?php echo get_template_directory_uri(); ?>/images/tensorflow.svg" alt="">
              </div>
              <p class="text tensorflow-text">TENSORFLOW</p>
            </div>
            <div class="pytorch tech-circle w-fc">
              <div class="pytorch-circle circle br-50">
                <img src="<?php echo get_template_directory_uri(); ?>/images/pytorch.svg" alt="">
              </div>
              <p class="text pytorch-text">PYTORCH</p>
            </div>
            <div class="node tech-circle w-fc">
              <div class="node-circle circle br-50">
                <img src="<?php echo get_template_directory_uri(); ?>/images/nodejs-logo-svgrepo-com 1.svg" alt="">
              </div>
              <p class="text node-text">NODE</p>
            </div>
            <div class="react tech-circle w-fc">
              <div class="react-circle circle br-50">
                <img src="<?php echo get_template_directory_uri(); ?>/images/react.svg" alt="">
              </div>
              <p class="text react-text">REACT</p>
            </div>
            <div class="flutter tech-circle w-fc">
              <div class="flutter-circle circle br-50">
                <img src="<?php echo get_template_directory_uri(); ?>/images/flutter-svgrepo-com (1) 1.svg" alt="">
              </div>
              <p class="text flutter-text">FLUTTER</p>
            </div>
            <div class="python tech-circle w-fc">
              <div class="python-circle circle br-50">
                <img src="<?php echo get_template_directory_uri(); ?>/images/python.svg" alt="">
              </div>
              <p class="text python-text">PYTHON</p>
            </div>
            <div class="figma tech-circle w-fc">
              <div class="figma-circle circle br-50">
                <img src="<?php echo get_template_directory_uri(); ?>/images/devicon_figma.svg" alt="">
              </div>
              <p class="text figma-text">FIGMA</p>
            </div>
            <div class="adobe-xd tech-circle w-fc">
              <div class="adobe-xd-circle circle br-50">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logos_adobe-xd.svg" alt="">
              </div>
              <p class="text adobe-xd-text">ADOBE XD</p>
            </div>
            <div class="devops tech-circle w-fc">
              <div class="devops-circle circle br-50">
                <img src="<?php echo get_template_directory_uri(); ?>/images/Frame 2609182.svg" alt="">
              </div>
              <p class="text devops-text">DEVOPS</p>
            </div>
          </div>
 
        </div>
      </div>
 
      <div class="our-community tx-center">
          <span class="section-title">
            <?php 
             echo the_field('home-section5-subheading')
            ?>
          </span>
          <h1 class="section-heading wcu-heading tx-center">
            <?php echo the_field('home-section5-mainheading') ?>
          </h1>
          <p class="section-content p-rel z-2 wcu-content">
            <?php echo the_field('home-section5-content'); ?>
          </p>
 
        <div class="slider">
          <div class="owl-carousel owl-theme">
            <div class="item">
                  <div class="content-wrapper p-rel bx-border-box tx-left">
                    <img
                      class="bottom-border"
                      src="<?php echo get_template_directory_uri(); ?>/images/bottom-border.svg"
                      alt=""
                    />
                    <img
                      class="right-border"
                      src="<?php echo get_template_directory_uri(); ?>/images/right-border.svg"
                      alt=""
                    />
                    <img
                      class="upper-img"
                      src="<?php echo get_template_directory_uri(); ?>/images/slider-img.svg"
                      alt=""
                      class=""
                    />
                    <p class="slider-content">
                      Arcs team's expertise and commitment to deliver on time
                      make them an invaluable partner in our business.
                    </p>
                    <div class="about-profile">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/profile-pic.svg" alt="" />
                      <div class="name-n-profile">
                        <span class="name">Gaurav Sethi</span>
                        <span class="sol">Prime Sol</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="content-wrapper p-rel bx-border-box tx-left">
                    <img
                      class="bottom-border"
                      src="<?php echo get_template_directory_uri(); ?>/images/bottom-border.svg"
                      alt=""
                    />
                    <img
                      class="right-border"
                      src="<?php echo get_template_directory_uri(); ?>/images/right-border.svg"
                      alt=""
                    />
                    <img
                      class="upper-img"
                      src="<?php echo get_template_directory_uri(); ?>/images/slider-img.svg"
                      alt=""
                      class=""
                    />
                    <p class="slider-content">
                      Arcs team's expertise and commitment to deliver on time
                      make them an invaluable partner in our business.
                    </p>
                    <div class="about-profile">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/profile-pic.svg" alt="" />
                      <div class="name-n-profile">
                        <span class="name">Gaurav Sethi</span>
                        <span class="sol">Prime Sol</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="content-wrapper p-rel bx-border-box tx-left">
                    <img
                      class="bottom-border"
                      src="<?php echo get_template_directory_uri(); ?>/images/bottom-border.svg"
                      alt=""
                    />
                    <img
                      class="right-border"
                      src="<?php echo get_template_directory_uri(); ?>/images/right-border.svg"
                      alt=""
                    />
                    <img
                      class="upper-img"
                      src="<?php echo get_template_directory_uri(); ?>/images/slider-img.svg"
                      alt=""
                      class=""
                    />
                    <p class="slider-content">
                      Arcs team's expertise and commitment to deliver on time
                      make them an invaluable partner in our business.
                    </p>
                    <div class="about-profile">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/profile-pic.svg" alt="" />
                      <div class="name-n-profile">
                        <span class="name">Gaurav Sethi</span>
                        <span class="sol">Prime Sol</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="content-wrapper p-rel bx-border-box tx-left">
                    <img
                      class="bottom-border"
                      src="<?php echo get_template_directory_uri(); ?>/images/bottom-border.svg"
                      alt=""
                    />
                    <img
                      class="right-border"
                      src="<?php echo get_template_directory_uri(); ?>/images/right-border.svg"
                      alt=""
                    />
                    <img
                      class="upper-img"
                      src="<?php echo get_template_directory_uri(); ?>/images/slider-img.svg"
                      alt=""
                      class=""
                    />
                    <p class="slider-content">
                      Arcs team's expertise and commitment to deliver on time
                      make them an invaluable partner in our business.
                    </p>
                    <div class="about-profile">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/profile-pic.svg" alt="" />
                      <div class="name-n-profile">
                        <span class="name">Gaurav Sethi</span>
                        <span class="sol">Prime Sol</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="content-wrapper p-rel bx-border-box tx-left">
                    <img
                      class="bottom-border"
                      src="<?php echo get_template_directory_uri(); ?>/images/bottom-border.svg"
                      alt=""
                    />
                    <img
                      class="right-border"
                      src="<?php echo get_template_directory_uri(); ?>/images/right-border.svg"
                      alt=""
                    />
                    <img
                      class="upper-img"
                      src="<?php echo get_template_directory_uri(); ?>/images/slider-img.svg"
                      alt=""
                      class=""
                    />
                    <p class="slider-content">
                      Arcs team's expertise and commitment to deliver on time
                      make them an invaluable partner in our business.
                    </p>
                    <div class="about-profile">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/profile-pic.svg" alt="" />
                      <div class="name-n-profile">
                        <span class="name">Gaurav Sethi</span>
                        <span class="sol">Prime Sol</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="content-wrapper p-rel bx-border-box tx-left">
                    <img
                      class="bottom-border"
                      src="<?php echo get_template_directory_uri(); ?>/images/bottom-border.svg"
                      alt=""
                    />
                    <img
                      class="right-border"
                      src="<?php echo get_template_directory_uri(); ?>/images/right-border.svg"
                      alt=""
                    />
                    <img
                      class="upper-img"
                      src="<?php echo get_template_directory_uri(); ?>/images/slider-img.svg"
                      alt=""
                      class=""
                    />
                    <p class="slider-content">
                      Arcs team's expertise and commitment to deliver on time
                      make them an invaluable partner in our business.
                    </p>
                    <div class="about-profile">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/profile-pic.svg" alt="" />
                      <div class="name-n-profile">
                        <span class="name">Gaurav Sethi</span>
                        <span class="sol">Prime Sol</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="content-wrapper p-rel bx-border-box tx-left">
                    <img
                      class="bottom-border"
                      src="<?php echo get_template_directory_uri(); ?>/images/bottom-border.svg"
                      alt=""
                    />
                    <img
                      class="right-border"
                      src="<?php echo get_template_directory_uri(); ?>/images/right-border.svg"
                      alt=""
                    />
                    <img
                      class="upper-img"
                      src="<?php echo get_template_directory_uri(); ?>/images/slider-img.svg"
                      alt=""
                      class=""
                    />
                    <p class="slider-content">
                      Arcs team's expertise and commitment to deliver on time
                      make them an invaluable partner in our business.
                    </p>
                    <div class="about-profile">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/profile-pic.svg" alt="" />
                      <div class="name-n-profile">
                        <span class="name">Gaurav Sethi</span>
                        <span class="sol">Prime Sol</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="content-wrapper p-rel bx-border-box tx-left">
                    <img
                      class="bottom-border"
                      src="<?php echo get_template_directory_uri(); ?>/images/bottom-border.svg"
                      alt=""
                    />
                    <img
                      class="right-border"
                      src="<?php echo get_template_directory_uri(); ?>/images/right-border.svg"
                      alt=""
                    />
                    <img
                      class="upper-img"
                      src="<?php echo get_template_directory_uri(); ?>/images/slider-img.svg"
                      alt=""
                      class=""
                    />
                    <p class="slider-content">
                      Arcs team's expertise and commitment to deliver on time
                      make them an invaluable partner in our business.
                    </p>
                    <div class="about-profile">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/profile-pic.svg" alt="" />
                      <div class="name-n-profile">
                        <span class="name">Gaurav Sethi</span>
                        <span class="sol">Prime Sol</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="content-wrapper p-rel bx-border-box tx-left">
                    <img
                      class="bottom-border"
                      src="<?php echo get_template_directory_uri(); ?>/images/bottom-border.svg"
                      alt=""
                    />
                    <img
                      class="right-border"
                      src="<?php echo get_template_directory_uri(); ?>/images/right-border.svg"
                      alt=""
                    />
                    <img
                      class="upper-img"
                      src="<?php echo get_template_directory_uri(); ?>/images/slider-img.svg"
                      alt=""
                      class=""
                    />
                    <p class="slider-content">
                      Arcs team's expertise and commitment to deliver on time
                      make them an invaluable partner in our business.
                    </p>
                    <div class="about-profile">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/profile-pic.svg" alt="" />
                      <div class="name-n-profile">
                        <span class="name">Gaurav Sethi</span>
                        <span class="sol">Prime Sol</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="content-wrapper p-rel bx-border-box tx-left">
                    <img
                      class="bottom-border"
                      src="<?php echo get_template_directory_uri(); ?>/images/bottom-border.svg"
                      alt=""
                    />
                    <img
                      class="right-border"
                      src="<?php echo get_template_directory_uri(); ?>/images/right-border.svg"
                      alt=""
                    />
                    <img
                      class="upper-img"
                      src="<?php echo get_template_directory_uri(); ?>/images/slider-img.svg"
                      alt=""
                      class=""
                    />
                    <p class="slider-content">
                      Arcs team's expertise and commitment to deliver on time
                      make them an invaluable partner in our business.
                    </p>
                    <div class="about-profile">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/profile-pic.svg" alt="" />
                      <div class="name-n-profile">
                        <span class="name">Gaurav Sethi</span>
                        <span class="sol">Prime Sol</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="content-wrapper p-rel bx-border-box tx-left">
                    <img
                      class="bottom-border"
                      src="<?php echo get_template_directory_uri(); ?>/images/bottom-border.svg"
                      alt=""
                    />
                    <img
                      class="right-border"
                      src="<?php echo get_template_directory_uri(); ?>/images/right-border.svg"
                      alt=""
                    />
                    <img
                      class="upper-img"
                      src="<?php echo get_template_directory_uri(); ?>/images/slider-img.svg"
                      alt=""
                      class=""
                    />
                    <p class="slider-content">
                      Arcs team's expertise and commitment to deliver on time
                      make them an invaluable partner in our business.
                    </p>
                    <div class="about-profile">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/profile-pic.svg" alt="" />
                      <div class="name-n-profile">
                        <span class="name">Gaurav Sethi</span>
                        <span class="sol">Prime Sol</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="content-wrapper p-rel bx-border-box tx-left">
                    <img
                      class="bottom-border"
                      src="<?php echo get_template_directory_uri(); ?>/images/bottom-border.svg"
                      alt=""
                    />
                    <img
                      class="right-border"
                      src="<?php echo get_template_directory_uri(); ?>/images/right-border.svg"
                      alt=""
                    />
                    <img
                      class="upper-img"
                      src="<?php echo get_template_directory_uri(); ?>/images/slider-img.svg"
                      alt=""
                      class=""
                    />
                    <p class="slider-content">
                      Arcs team's expertise and commitment to deliver on time
                      make them an invaluable partner in our business.
                    </p>
                    <div class="about-profile">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/profile-pic.svg" alt="" />
                      <div class="name-n-profile">
                        <span class="name">Gaurav Sethi</span>
                        <span class="sol">Prime Sol</span>
                      </div>
                    </div>
                  </div>
                </div>
          </div>
        </div>
      </div>
 
  <?php get_footer(); ?>
 
  <script>
    $(document).ready(function(){
      $('.owl-carousel').owlCarousel({
        items : 4,
        margin : 30,
        dots : true,
        autoplayHoverPause : true,
        smartSpeed:6000,
        loop: true,
        autoplay: true,
        autoplayTimeout: 3000,
        responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 3
        },
        1500: {
          items:4
        }
    }
      })
    })
  </script>
 
  </body>
</html>
 
 
 
 
 
 