<?php $theme_url = get_template_directory_uri(); ?>
<?= get_header(); ?>

<section class="default-sec">
    <div class="container">
        <h1 class="main-title text-center mb-1" data-aos="fade-up" data-aos-duration="1000">Get Free Strategy</h1>
        <p class="text-center mb-0" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">Contact us to publish your content and show ads to our website and get a good reach.</p>
        <iframe src="https://calendly.com/patrickriceco/strategy-call?embed_domain=patrickriceco.com&amp;embed_type=Inline" width="100%" height="660" frameborder="0" title="Select a Date &amp; Time - Calendly"></iframe>
    </div>
</section>
<section style="padding: 0;">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.8674412237947!2d-0.13955342276406635!3d51.49730001144023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604dec3af41af%3A0xc2f08cf2ee9a6589!2sVictoria%20St%2C%20London%2C%20UK!5e0!3m2!1sen!2s!4v1727178539854!5m2!1sen!2s"
        height="450" style="border:0; width: 100%;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
<section class="contact-sec pb-0" style="padding-top: 0;">
    <div class="container">
        <div class="card shadow">
            <h2 class="main-title text-center">Get In Touch!</h2>
            <?= do_shortcode('[contact-form-7 id="8e22e60" title="Contact"]') ?>
        </div>
    </div>
</section>
<section class="cards">
    <div class="container">
        <div class="row g-3">
            <div class="col-lg-4 col-md-6">
                <div class="card shadow text-center h-100" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <img src="<?= $theme_url; ?>/assets/img/location-contact-us.webp" width="79" height="82"
                        class="mx-auto d-block mb-2" alt="">
                    <span class="d-block h6 ">Office</span>
                    <a href="#">Victoria Street, London, UK</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card shadow text-center h-100" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                    <img src="<?= $theme_url; ?>/assets/img/email-contact-us.webp" width="74" height="74"
                        class="mx-auto d-block mb-2" alt="">
                    <span class="d-block h6 ">Email</span>
                    <a href="mailto:">hellopatrick@example.com</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card shadow text-center h-100" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                    <img src="<?= $theme_url; ?>/assets/img/phone-contact-us.webp" width="78" height="76"
                        class="mx-auto d-block mb-2" alt="">
                    <span class="d-block h6 ">Phone</span>
                    <a href="mailto:" class="mb-0">+1234 73948 908</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <style>
    iframe {
        width: 100%;
        min-height: 0 !important;
        /* overflow: hidden; */
        border: 1px solid red;
    }
</style> -->



<?= get_footer(); ?>