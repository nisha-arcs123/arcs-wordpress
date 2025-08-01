<?php
/*
Template Name: Database Development Page 
*/
?>
<div class="outer-box-database-development p-rel o-h">
    <img class="the-lines" src="<?php echo get_template_directory_uri() ?>/images/the-lines.svg" alt="" />
    <?php get_header(); ?>

<div class="ed-banner full-vh p-rel">
    <div class="ed-inner-box p-rel z-2">
        <div class="z-1 chair-n-bag cb-left">
            <div class="img-circle br-50 light-circle"><img src="<?php echo get_template_directory_uri() ?>/images/dd-banner-left-icon.svg" alt=""></div>
        </div>
        <div class="z-1 chair-n-bag cb-right">
            <div class="img-circle br-50 light-circle"><img src="<?php echo get_template_directory_uri() ?>/images/dd-banner-right-icon.svg" alt=""></div>
        </div>
        <div class="logo-n-label z-1 management qa-testing">
            <div class="img-circle br-50 light-circle">
                <div class="img-circle br-50 dark-circle"><img src="<?php echo get_template_directory_uri() ?>/images/dd-banner-top-left-icon.svg" alt="">
                </div>
            </div>
            <span class="label">QA & Testing</span>
        </div>
        <div class="logo-n-label z-1 efficiency software">
            <div class="img-circle br-50 light-circle">
                <div class="img-circle br-50 dark-circle"><img src="<?php echo get_template_directory_uri() ?>//images/dd-banner-bottom-left-icon.svg"
                        alt=""></div>
            </div>
            <span class="label">Software</span>
        </div>
        <div class="logo-n-label z-1 shopping">
            <div class="img-circle br-50 light-circle">
                <div class="img-circle br-50 dark-circle"><img src="<?php echo get_template_directory_uri() ?>/images/dd-banner-top-right-icon.svg"
                        alt=""></div>
            </div>
            <span class="label">Automated Testing</span>
        </div>
        <div class="logo-n-label z-1 market">
            <div class="img-circle br-50 light-circle">
                <div class="img-circle br-50 dark-circle"><img src="<?php echo get_template_directory_uri() ?>/images/dd-banner-bottom-right-icon.svg"
                        alt=""></div>
            </div>
            <span class="label">Quality Audit</span>
        </div>
    </div>
    <img class="z-2 banner-image" src="<?php echo get_template_directory_uri() ?>/images/database-development-banner-img.svg" alt="">
    <div class="z-1 banner-blur-circle-1"></div>
    <div class="z-0 banner-circle-border br-50"></div>
    <div class="ed-banner-details banner-details z-2">
        <h1 class="ed-banner-heading inner-banner-heading mb-16 mt-0 m-auto tx-center"><?php echo the_field('banner_heading_db'); ?></h1>
        <p class="ed-banner-content inner-banner-content mb-28 mt-0 m-auto tx-center"><?php echo the_field('banner_description_db'); ?></p>
        <button class="banner-button primary-button m-auto">START BUILDING TODAY</button>
    </div>
</div>

<div class="kf-wrapper">
    <div class="key-features wds m-auto">
        <p class="section-title mt-0 mb-12 w-fc"><?php echo the_field('section1_heading1_db'); ?></p>
        <p class="section-heading mt-0 mb-20"><?php echo the_field('section1_heading2_db'); ?></p>
        <p class="section-content kf-main-content mt-0 mb-40"><?php echo the_field('section1_description_db'); ?></p>
        <div class="kf-boxes-wrapper">
            <div class="kf-box padding-20 bx-border-box">
                <p class="box-heading mt-0 mb-0"><span>01</span>Custom Solutions</p>
                <p class="card-content mb-0 mt-12">Tailored database systems to meet your specific business
                    requirements.</p>
            </div>
            <div class="kf-box padding-20 bx-border-box">
                <p class="box-heading mt-0 mb-0"><span>02</span>Scalability</p>
                <p class="card-content mb-0 mt-12">Databases designed to grow with your business.</p>
            </div>
            <div class="kf-box padding-20 bx-border-box">
                <p class="box-heading mt-0 mb-0"><span>03</span>Data Security</p>
                <p class="card-content mb-0 mt-12">Implementing best-in-class security protocols to protect your
                    data.</p>
            </div>
            <div class="kf-box padding-20 bx-border-box">
                <p class="box-heading mt-0 mb-0"><span>04</span>Expert Team</p>
                <p class="card-content mb-0 mt-12">Experienced professionals proficient in modern database
                    technologies.</p>
            </div>
            <div class="kf-box padding-20 bx-border-box">
                <p class="box-heading mt-0 mb-0"><span>05</span>Seamless Integration</p>
                <p class="card-content mb-0 mt-12">Smooth integration with your existing tools and platforms. </p>
            </div>
        </div>
    </div>
</div>

<div class="cs-digital-transform-wrapper wds m-auto">
    <div class="overley"></div>
    <div class="digital-transformation m-auto p-rel">
        <div class="right-part">
            <img src="<?php echo get_template_directory_uri() ?>/images/dd-girl-img.svg" alt="">
        </div>
        <div class="left-part p-rel">
            <p class="section-title mt-0 mb-12 z-1"><?php echo the_field('section2_heading1_db'); ?></p>
            <p class="section-heading mt-0 mb-20 z-1"><?php echo the_field('section2_heading2_db'); ?>
            </p>
            <p class="section-content mt-0 mb-40 z-1"><?php echo the_field('section2_description_db'); ?></p>
            <button class="banner-button primary-button">SCHEDULE A FREE CONSULTATION</button>
        </div>
        <img src="<?php echo get_template_directory_uri() ?>/images/Vector 11 (13).svg" alt="" class="z-img1 z-0">
        <div class="circle4 z-0"></div>
    </div>
</div>

<div class="dd-services-wrapper wds m-auto mt-120 w-full">
    <div class="dd-services m-auto">
        <p class="section-title mb-10 m-auto w-fc tx-center"><?php echo the_field('section3_heading1db'); ?></p>
        <p class="section-heading mb-20 mt-12 tx-center"><?php echo the_field('section3_heading2db'); ?></p>
        <p class="section-content mb-40 tx-center"><?php echo the_field('section3_descriptiondb'); ?></p>
        <div class="boxes-wrapper padding-40 bx-border-box">
            <div class="inner-box padding-20">
                <div class="text">
                    <p class="card-title">Database Design and Architecture</p>
                    <p class="card-content">Create a strong foundation for your data with a well-planned database
                        design. Our team
                        ensures optimal performance and future scalability from the very beginning.</p>
                </div>
                <img src="<?php echo get_template_directory_uri() ?>/images/dd-inner-box-1.svg" alt="">
            </div>
            <div class="inner-box padding-20">
                <div class="text">
                    <p class="card-title">Database Migration and Optimization</p>
                    <p class="card-content"> Transition your data to new systems seamlessly while enhancing performance
                        and
                        minimizing downtime. We specialize in efficient database migrations and optimizations.</p>
                </div>
                <img src="<?php echo get_template_directory_uri() ?>/images/dd-inner-box-2.svg" alt="">
            </div>
            <div class="inner-box padding-20">
                <div class="text">
                    <p class="card-title">Maintenance and Support</p>
                    <p class="card-content">Ensure your database operates smoothly at all times. Our ongoing
                        maintenance and
                        support services keep your system reliable and secure.</p>
                </div>
                <img src="<?php echo get_template_directory_uri() ?>/images/dd-inner-box-2.svg" alt="">
            </div>
        </div>
    </div>
</div>

<div class="cs-great-solution mt-120 o-h p-rel w-full tx-center">
    <div class="left-circle circle br-50"></div>
    <div class="right-circle circle br-50"></div>
    <img class="left-img" src="<?php echo get_template_directory_uri() ?>/images/ui-gs-left.svg" alt="">
    <img class="right-img" src="<?php echo get_template_directory_uri() ?>/images/ui-gs-right.svg" alt="">
    <p class="section-heading mt-0 p-rel z-1 mb-28"><?php echo the_field('section4_headingdb'); ?></p>
    <button class="primary-button p-rel z-1 m-auto">CONTACT US</button>
</div>

<div class="cs-digital-transform-wrapper wds m-auto">
    <div class="digital-transformation m-auto p-rel">
        <div class="right-part">
            <img src="<?php echo get_template_directory_uri() ?>/images/dd-s-img.svg" alt="">
        </div>
        <div class="left-part p-rel">
            <p class="section-title mt-0 mb-12 z-1"><?php echo the_field('section5_heading1db'); ?></p>
            <p class="section-heading mt-0 mb-20 z-1"><?php echo the_field('section5_heading2db'); ?></p>
            <p class="card-content mt-0 mb-0 z-1"><?php echo the_field('section5_descriptiondb'); ?></p>
            <ul>
                <li class="section-content p-rel">SQL-based solutions (MySQL, PostgreSQL, SQL Server)</li>
                <li class="section-content p-rel">NoSQL databases (MongoDB, Cassandra)</li>
                <li class="section-content p-rel">Cloud databases (AWS RDS, Google Cloud Firestore, Azure SQL)</li>
                <li class="section-content p-rel">Data Warehousing solutions (Snowflake, BigQuery)</li>
                <li class="section-content p-rel">Database management and monitoring tools</li>
            </ul>
            <button class="banner-button primary-button">LET'S WORK TOGETHER</button>
        </div>
    </div>
</div>

<?php get_footer(); ?>