<?php $theme_url = get_template_directory_uri(); ?>
<?= get_header(); ?>

<section class="default-sec strategy-sec">
    <div class="container">
        <div style="max-width: 663px;" class="mx-auto mb-4">
            <h1 class="main-title text-center mb-1" data-aos="fade-up" data-aos-duration="1000">Your Perfect Digital Partner Awaits</h1>
            <p class="text-center mb-0" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">Looking for a team that delivers real results? Let’s make your vision a
                reality. Book a time with
                us now, and let’s start building your success together.</p>
        </div>
        <div class="row g-3">
            <div class="col-lg-3">
                <div class="box-wrapper">
                    <div class="icon-wrapper" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="400">
                        <div class="d-flex align-items-center gap-1 mb-2">
                            <div class="icon">
                                <img style="max-width: 24px;" src="<?= $theme_url; ?>/assets/img/icons/mail.webp"
                                    width="24" height="24" class="img-fluid" alt="mail-ico">
                            </div>
                            <span class="d-block h5 fw-bold mb-0">Email</span>
                        </div>
                        <p class="mb-0">Hate contact forms?</p>
                        <a href="mailto:patrick@patrickriceco.com">patrick@patrickriceco.com</a>
                    </div>
                    <div class="icon-wrapper" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="600">
                        <div class="d-flex align-items-center gap-1 mb-2">
                            <div class="icon">
                                <img style="max-width: 24px;" src="<?= $theme_url; ?>/assets/img/icons/phone.webp"
                                    width="24" height="24" class="img-fluid" alt="phone-icon">
                            </div>
                            <span class="d-block h5 fw-bold mb-0">Phone</span>
                        </div>
                        <p class="mb-0">Hate contact forms?</p>
                        <a href="tel:+7703642998">(770) 364 2998</a>
                    </div>
                    <div class="icon-wrapper" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="800">
                        <div class="d-flex align-items-center gap-1 mb-2">
                            <div class="icon">
                                <img style="max-width: 24px;" src="<?= $theme_url; ?>/assets/img/icons/map-marker.webp"
                                    width="24" height="24" class="img-fluid" alt="map-marker-ico">
                            </div>
                            <span class="d-block h5 fw-bold mb-0">Location</span>
                        </div>
                        <p class="mb-0">House: A1154,
                            Lane: Victoria Street
                            London, UK</p>
                        <a href="https://maps.app.goo.gl/Q8tACtHp14B1isgd7" target="_blank">View on Google Map</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <iframe src="https://calendly.com/patrickriceco/strategy-call?embed_domain=patrickriceco.com&amp;embed_type=Inline" width="100%" height="700" frameborder="0" title="Select a Date &amp; Time - Calendly"></iframe>
            </div>
        </div>
    </div>
</section>

<?= get_footer(); ?>