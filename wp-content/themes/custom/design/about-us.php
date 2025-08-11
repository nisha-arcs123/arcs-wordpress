<?php
/*
Template Name: About Us
*/
?>

<div class="outer-box-about-us w-full ox-h">
    <?php get_header(); ?>

     <div class="ui-banner full-vh p-rel">
        <div class="ios-app-right user-box z-1 padding-8">
            <div class="icon">
                <img src="<?php echo get_template_directory_uri() ?>/images/Group 38088.svg" alt="">
            </div>
            <span>24 / 7</span>
        </div>
        <div class="ios-app-left z-1 user-box padding-8">
            <span>your ideas with full attention</span>
            <div class="icon">
                <img src="<?php echo get_template_directory_uri() ?>/images/Group 38048.svg" alt="">
            </div>
        </div>
        <div class="ios-app-bottom z-1 user-box padding-8">
            <div class="icon">
                <img src="<?php echo get_template_directory_uri() ?>/images/Mask group (10).svg" alt="">
            </div>
            <span>FREE'expert consultation</span>

        </div>
        <div class="ai-bot z-1 user-box padding-8">
            <span>Chat with AI bot</span>
            <div class="icon">
                <img src="<?php echo get_template_directory_uri() ?>/images/Group 38072.svg" alt="">
            </div>
        </div>
        <div class="z-1 banner-girl-image">
            <img class="banner-gif" src="<?php echo get_template_directory_uri() ?>/images/Group 1597881388.svg" alt="">
        </div>
        <div class="the-circle ui-banner-blur-circle"></div>
        <div class="the-circle ui-banner-blur-circle-II"></div>
        <img class="ai-ml-banner-line" src="<?php echo get_template_directory_uri() ?>/images/line-al-ml-banner.svg" alt="">
        <div class="ui-banner-details z-2">
            <h1 class="inner-banner-heading mb-16 mt-0 m-auto tx-center"><?php echo the_field('about_us_banner_heading'); ?></h1>
            <p class="inner-banner-content mb-28 mt-0 m-auto tx-center"><?php echo the_field('about_us_banner_content'); ?></p>
            <button class="banner-button primary-button m-auto">START BUILDING TODAY</button>
        </div>
    </div>
    <div class="services-we-offer wds m-auto mt-120">
        <p class="section-title m-auto w-fc tx-center">Why Choose us</p>
        <p class="section-heading mb-20 mt-0 tx-center">What Sets Us Apart?</p>
        <p class="section-content mb-40 tx-center">To amplify human potential and create the next opportunity for people, businesses and communities</p>
        <div class="boxes-wrapper wds m-auto">
            <div class="box mt-32 padding-16 bx-border-box p-rel">
                <div class="logo logo-1">
                    <img src="<?php echo get_template_directory_uri() ?>/images/bulb-logo.svg" alt="">
                </div>
                <p class="card-title  mt-40 mb-12">Proven Expertise and Experience</p>
                <p class="card-content">We design and build custom software tailored specifically to your processes, goals, and challenges. Our solutions enhance efficiency and scalability, ensuring your business stays ahead of the competition.

                </p>
            </div>
            <div class="box mt-32 padding-16 bx-border-box p-rel">
                <div class="logo logo-2">
                    <img src="<?php echo get_template_directory_uri() ?>/images/bulb-logo.svg" alt="">
                </div>
                <p class="card-title  mt-40 mb-12">Tailored Solutions for Your Business</p>
                <p class="card-content">Our team creates responsive and robust web applications using the latest technologies. Whether it’s a corporate website or a complex enterprise portal, we deliver solutions that meet your business objectives.
                </p>
            </div>
            <div class="box mt-32 padding-16 bx-border-box p-rel">
                <div class="logo logo-3">
                    <img src="<?php echo get_template_directory_uri() ?>/images/bulb-logo.svg" alt="">
                </div>
                <p class="card-title  mt-40 mb-12">Uncompromising Quality Assurance</p>
                <p class="card-content">We specialize in developing cross-platform and native mobile applications for iOS and Android. Our apps offer seamless user experiences and help you engage effectively with your audience on the go.
                </p>
            </div>
            <div class="box mt-32 padding-16 bx-border-box p-rel">
                <div class="logo logo-4">
                    <img src="<?php echo get_template_directory_uri() ?>/images/bulb-logo.svg" alt="">
                </div>
                <p class="card-title  mt-40 mb-12">On-Time, Every Time</p>
                <p class="card-content">Transform the way your organization operates with enterprise-grade software solutions. We create tools that improve collaboration, automate tasks, and simplify complex workflows.
                </p>
            </div>
        </div>
    </div>


    <div class="our-purpose">
        <p class="section-title m-auto w-fc tx-center"><?php echo the_field('purpose_subheading'); ?></p>
        <p class="section-heading mb-20 mt-0 tx-center"><?php echo the_field('purpose_subheading'); ?></p>
        <p class="section-content mb-40 tx-center"><?php echo the_field('purpose_content'); ?></p>

        
        <iframe width="100%" height="569" src="https://www.youtube.com/embed/ersvmVHi-ZU?si=GKMkU9O3v-LpSFhI" title="YouTube video player" frameborder="0" allow="autoplay; encrypted-media" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>

    <div class="image-text-section-wrapper ec-img-text-wrapper w-full z-1 p-rel white-backgorund">
        <div class="image-text o-h wds m-auto">
            <div class="img-section">
                <img class="" src="<?php echo get_template_directory_uri() ?>/images/image.svg" alt="">
            </div>
            <div class="text-section o-h p-rel">
                <div class="section">
                    <p class="section-title mt-0"><?php echo the_field('who_we_are'); ?></p>
                    <h2 class="section-heading z-1 p-rel">Overview</h2>
                    <p class="card-content mt-0 mb-4">Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                    <p class="card-content mt-0 mb-16">When you work with us, you can count on:</p>
                    <ul class="points padding-0 mt-0 mb-0">
                        <li class="card-content mb-4 p-rel">Do they have fantastic graphics?</li>
                        <li class="card-content mb-4 p-rel">Do they streamline communication between you and your team members?</li>
                        <li class="card-content mb-4 p-rel">Are the notifications relevant and dependable?</li>
                        <li class="card-content mb-4 p-rel">Are the apps stable and reliable?</li>
                        <li class="card-content mb-4 p-rel">Have they made their shopping and checkout processes easy?</li>
                        <li class="card-content mb-4 p-rel">is it user-friendly</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="services-we-offer wds m-auto">
        <p class="section-title m-auto w-fc tx-center"><?php echo the_field('core_value_subheading'); ?></p>
        <p class="section-heading mb-20 mt-0 tx-center"><?php echo the_field('core_value_heading'); ?></p>
        <p class="section-content mb-40 tx-center"><?php echo the_field('core_value_content'); ?></p>
        <div class="boxes-wrapper wds m-auto">
            <div class="box mt-32 padding-16 bx-border-box p-rel">
                <div class="logo logo-1">
                    <img src="<?php echo get_template_directory_uri() ?>/images/bulb-logo.svg" alt="">
                </div>
                <p class="card-title  mt-40 mb-12">Excellence</p>
                <p class="card-content">We are focused to deliver the greatest standard of work and efficiency to every solution we offer.

                </p>
            </div>
            <div class="box mt-32 padding-16 bx-border-box p-rel">
                <div class="logo logo-2">
                    <img src="<?php echo get_template_directory_uri() ?>/images/bulb-logo.svg" alt="">
                </div>
                <p class="card-title  mt-40 mb-12">Innovation</p>
                <p class="card-content">We keep on pushing our boundaries and bringing innovative IT Solutions.
                </p>
            </div>
            <div class="box mt-32 padding-16 bx-border-box p-rel">
                <div class="logo logo-3">
                    <img src="<?php echo get_template_directory_uri() ?>/images/bulb-logo.svg" alt="">
                </div>
                <p class="card-title  mt-40 mb-12">Integrity</p>
                <p class="card-content">With an end-to -end comprehensive process, we believe in practicing ethical and transparent business operations.
                </p>
            </div>
            <div class="box mt-32 padding-16 bx-border-box p-rel">
                <div class="logo logo-4">
                    <img src="<?php echo get_template_directory_uri() ?>/images/bulb-logo.svg" alt="">
                </div>
                <p class="card-title  mt-40 mb-12">Collaboration</p>
                <p class="card-content">For us, teamwork is the best work. We believe in working and growing together.
                </p>
            </div>
        </div>
    </div>


    <div class="team-of-experts wds m-auto">
        <p class="section-title m-auto w-fc tx-center"><?php echo the_field('our_team_subheading'); ?></p>
        <p class="section-heading mb-20 mt-0 tx-center"><?php echo the_field('our_team_heading'); ?></p>
        <p class="section-content mb-40 tx-center"><?php echo the_field('our_team_content'); ?></p>

        <div class="teams-container">
            <div class="team-member">
                <div class="img-of-member">
                    <img class="" src="<?php echo get_template_directory_uri() ?>/images/team1.svg" alt="">
                </div>
                <div class="designation">
                    <p class="name">Ravi Sharma</p>
                    <div class="post">Designer</div>
                </div>
            </div>

            <div class="team-member">
                <div class="img-of-member">
                    <img class="" src="<?php echo get_template_directory_uri() ?>/images/team1.svg" alt="">
                </div>
                <div class="designation">
                    <p class="name">Ravi Sharma</p>
                    <div class="post">Designer</div>
                </div>
            </div>


            <div class="team-member">
                <div class="img-of-member">
                    <img class="" src="<?php echo get_template_directory_uri() ?>/images/team1.svg" alt="">
                </div>
                <div class="designation">
                    <p class="name">Ravi Sharma</p>
                    <div class="post">Designer</div>
                </div>
            </div>

            <div class="team-member">
                <div class="img-of-member">
                    <img class="" src="<?php echo get_template_directory_uri() ?>/images/team1.svg" alt="">
                </div>
                <div class="designation">
                    <p class="name">Ravi Sharma</p>
                    <div class="post">Designer</div>
                </div>
            </div>
        </div>
    </div>
    <?php
    get_footer(); ?>

</div>