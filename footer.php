<?php $theme_url = get_template_directory_uri(); ?>


<section class="cta">
    <div class="container">
        <div style="max-width: 555px;" class="cta-content mx-auto">
            <h2 class="h1 text-white text-center" data-aos="fade-up" data-aos-duration="1000">Grow Your Online Sales With SEO</h2>
            <p class="text-white text-center" data-aos="fade-up" data-aos-duration="1000">Get a response tomorrow if you submit by 9pm today. If we received
                after 9pm will get a reponse
                the following day.</p>
            <a href="<?= home_url('get-free-strategy') ?>" class="btn btn-primary d-block mx-auto" data-aos="fade-up" data-aos-duration="1000">Get a Free Consultation Call</a>
        </div>
    </div>
</section>
</main>
<footer class="footer">
    <div class="container">
        <div class="footer-top">
            <div class="row g-3">
                <div class="col-lg-4 col-sm-6">
                    <span class="d-block text-white fw-bold h5 mb-2">Patrick Rice Co.</span>
                    <p class="text-white">A company that cares about your success.</p>
                </div>
                <div class="col-lg-2 col-sm-6 col-6">
                    <span class="d-block fw-bold text-white h6">Company</span>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer-menu-1',
                        'container' => false,
                        'menu_class' => 'footer-links',
                    ));
                    ?>
                </div>
                <div class="col-lg-2 col-sm-6 col-6">
                    <span class="d-block fw-bold text-white h6">Services</span>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer-menu-2',
                        'container' => false,
                        'menu_class' => 'footer-links',
                    ));
                    ?>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <span class="d-block fw-bold text-white h6">Let's Connect</span>
                    <div class="footer-social-icons">
                        <a href="https://www.facebook.com/patrick.rice.507679" class="icon" target="_blank">
                            <img style="max-width: 12px;" src="<?= $theme_url; ?>/assets/img/facebook-footer-icon.webp"
                                class="img-fluid" width="12" height="14" alt="facebook-icon">
                        </a>
                        <a href="https://twitter.com/patrickriceco" class="icon" target="_blank">
                            <img style="max-width: 18px;" src="<?= $theme_url; ?>/assets/img/twitter-footer-icon.webp"
                                class="img-fluid" width="18" height="20" alt="twitter-icon">
                        </a>
                        <a href="https://www.linkedin.com/in/patrick-s-rice/" class="icon" target="_blank">
                            <img style="max-width: 18px;" src="<?= $theme_url; ?>/assets/img/linkdin-footer-icon.webp"
                                class="img-fluid" width="18" height="20" alt="linkdin-icon">
                        </a>
                        <a href="https://www.instagram.com/patrickriceco/" class="icon" target="_blank">
                            <img style="max-width: 18px;" src="<?= $theme_url; ?>/assets/img/instagram-footer-icon.webp"
                                class="img-fluid" width="18" height="20" alt="instagram-icon">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p class="text-white mb-0">Copyright © Patrick Rice Co. - All Right Reserved</p>
            <ul class="footer-bottom-menu d-flex flex-wrap gap-3">
                <li>
                    <a href="#" class="text-white">Privacy Policy</a>
                </li>
                <li>
                    <a href="#" class="text-white">Cookie Policy</a>
                </li>
                <li>
                    <a href="#" class="text-white">Refund Policy</a>
                </li>
            </ul>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>

</body>

</html>