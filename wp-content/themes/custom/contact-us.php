<?php
/*
Template Name: Contact Us
*/
?>

<div class="outer-box-contact-us w-full ox-h">
    <?php get_header(); ?>

    <div class="ed-banner full-vh p-rel">
        <img class="z-2 banner-image" src="<?php echo get_template_directory_uri() ?>/images/ui-girl-img.svg" alt="">
        <div class="z-1 banner-blur-circle-1"></div>
        <div class="z-0 banner-circle-border br-50"></div>
        <div class="ed-banner-details banner-details z-2">
            <h1 class="ed-banner-heading inner-banner-heading mb-16 mt-0 m-auto tx-center">Get in Touch with Our Team</h1>
            <p class="ed-banner-content inner-banner-content mb-28 mt-0 m-auto tx-center">We follow an agile approach to deliver compelling UI/UX designs that are research-backed and result in maximum user interaction.</p>
            <button class="banner-button primary-button m-auto">START BUILDING TODAY</button>
        </div>
    </div>


    <div class="form-container wds m-auto">
        <p class="header-text">Contact us</p>
        <h1 class="main-title">Join Us Creating<br>Something Great</h1>
        <div class="contact-section">
            <div class="form-container left-box">
                <form id="contactForm">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="firstName">First Name<span>*</span></label>
                            <input type="text" id="firstName" name="firstName" placeholder="Enter Your Name" required>
                        </div>
                        <div class="form-group">
                            <label for="lastName">Last Name<span>*</span></label>
                            <input type="text" id="lastName" name="lastName" placeholder="Enter Your Name" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="email">Email<span>*</span></label>
                            <input type="email" id="email" name="email" placeholder="Enter Your Email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number<span>*</span></label>
                            <input type="tel" id="phone" name="phone" placeholder="Enter Your Number" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="subject">Subject<span>*</span></label>
                        <input type="text" id="subject" name="subject" placeholder="Type here..." required>
                    </div>

                    <div class="form-group">
                        <label for="message">Message<span>*</span></label>
                        <textarea id="message" name="message" placeholder="Type here..." required></textarea>
                    </div>

                    <button type="submit" class="primary-button">Send Message</button>
                </form>
            </div>

            <div class="contact-info right-box">
                <ul class="info-section">
                    <li class="info-title address">Address</p>
                    <li class="info-item">Phase 9 Industrial Area Mohali Pin Code</p>
                </ul>

                <ul class="info-section">
                    <li class="info-title phone">Phone No</li>
                    <li class="info-item">+91 01234-56789</li>
                    <li class="info-item">+91 01234-56789</li>
                </ul>

                <ul class="info-section">
                    <li class="info-title email">Email</li>
                    <li class="info-item">Arcsinfotechij@Gmail.Com</li>
                    <li class="info-item">Arcsinfotech2@Gmail.com</li>
                </ul>

                <ul class="info-section">
                    <li class="info-title time">Open Time</li>
                    <li class="info-item">Monday - Friday : 10:00AM - 8:00PM</li>
                </ul>

                <div class="social-section">
                    <p class="social-title">Stay Connected</p>
                    <div class="social-links">
                        <a href="#" class="social-link" aria-label="Facebook">
                            <img src="<?php echo get_template_directory_uri() ?>/images/Vector (3).svg" alt="">
                        </a>
                        <a href="#" class="social-link" aria-label="LinkedIn">
                            <img src="<?php echo get_template_directory_uri() ?>/images/Vector (4).svg" alt="">
                        </a>
                        <a href="#" class="social-link" aria-label="Instagram">
                            <img src="<?php echo get_template_directory_uri() ?>/images/Vector (5).svg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="map-section">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3431.71841584775!2d76.72728917638348!3d30.670056774614622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fef724f4664b1%3A0x5cf04152a26499fa!2sArcs%20Infotech!5e0!3m2!1smr!2sin!4v1754026497274!5m2!1smr!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" ></iframe>
    </div>


    <?php
    get_footer(); ?>

</div>