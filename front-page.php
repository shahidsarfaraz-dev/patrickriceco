<?php $theme_url = get_template_directory_uri(); ?>
<?= get_header(); ?>

<section class="hero-sec">
    <div class="container">
        <div class="row g-3 g-lg-4">
            <div class="col-lg-5">
                <div class="content-warpper">
                    <h1 class="main-title text-white" data-aos="fade-right" data-aos-duration="1000">Grow
                        Your
                        Online Sales <span class="underline">With
                            SEO</span>
                    </h1>
                    <p class="lead text-white mb-4" data-aos="fade-right" data-aos-delay="200"
                        data-aos-duration="1000">An SEO consultant that gets it. I know people and
                        algorithms. My expertise has helped companies generate millions in additional
                        revenue
                        year-on-year. </p>
                    <div class="d-flex gap-2 align-items-center flex-wrap" data-aos="fade-right"
                        data-aos-delay="400" data-aos-duration="1000">
                        <a href="<?= home_url('/get-free-strategy') ?>" class="btn btn-primary">Get Free Strategy</a>

                    </div>
                    <svg class="line-obj" width="147" height="96" viewBox="0 0 147 96" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path class="path" opacity="0.3"
                            d="M1 58.7451L46.3617 93.9523C47.5556 94.879 49.3064 94.1975 49.5597 92.7076L56.3266 52.9025C56.6034 51.2744 58.6224 50.6643 59.7544 51.8666L77.9985 71.2435C79.1732 72.4911 81.2704 71.7802 81.4443 70.0754L88.2226 3.62191C88.4316 1.57264 91.2279 1.13943 92.0472 3.02939L120.369 68.3614C121.156 70.1777 123.821 69.8686 124.172 67.9202L127.905 47.1841C128.248 45.2745 130.836 44.9238 131.676 46.6729L145 74.4314"
                            stroke="white" stroke-width="3" />
                    </svg>

                </div>
            </div>
            <div class="col-lg-7">
                <div class="position-relative">
                    <div class="video-player-wrapper">
                        <div class="video-player" data-aos="fade-left" data-aos-duration="1000">
                            <button class="play-btn" id="playButton"><img src="<?= $theme_url; ?>/assets/img/icons/play-ico.svg" alt="icon"
                                    width="21" height="24" loading="lazy"></button>
                            <iframe id="heroIframe" width="100%" src="https://www.youtube.com/embed/tde5QJ33SiY?si=Apx8vSsYUgYl7g6r" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        <div class="arrow-obj">
                            <img src="<?= $theme_url; ?>/assets/img/hero-arrow-obj.svg" alt="line-obj" width="134"
                                height="120" data-aos="fade-down" data-aos-duration="900"
                                data-aos-delay="800" loading="lazy">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="circle-obj circle-obj-1"></div>
    <div class="circle-obj circle-obj-2"></div>
    <div class="circle-obj circle-obj-3"></div>
    <img src="<?= $theme_url; ?>/assets/img/hero-obj-1.svg" alt="obj" width="60" height="68" class="obj obj-2" loading="lazy">
    <svg class="line-obj obj obj-3" width="90" height="125" viewBox="0 0 90 125" fill="none"
        xmlns="http://www.w3.org/2000/svg">
        <path opacity="0.4"
            d="M88 111.098C73.6629 89.9377 43.8157 38.2943 39.1236 1M72.3596 123C62.5843 117.049 34.627 106.337 1 111.098"
            stroke="white" stroke-width="4" />
    </svg>
</section>
<section class="brand-sec bg-gray-light">
    <div class="container">
        <div class="brand-slider">
            <div class="slider-item">
                <img src="<?= $theme_url; ?>/assets/img/brand-1.webp" alt="brand-logo" width="146" height="32" loading="lazy">
            </div>
            <div class="slider-item">
                <img src="<?= $theme_url; ?>/assets/img/brand-2.webp" alt="brand-logo" width="125" height="32" loading="lazy">
            </div>
            <div class="slider-item">
                <img src="<?= $theme_url; ?>/assets/img/brand-3.webp" alt="brand-logo" width="160" height="28" loading="lazy">
            </div>
            <div class="slider-item">
                <img src="<?= $theme_url; ?>/assets/img/brand-4.webp" alt="brand-logo" width="115" height="28" loading="lazy">
            </div>
            <div class="slider-item">
                <img src="<?= $theme_url; ?>/assets/img/brand-5.webp" alt="brand-logo" width="100" height="22" loading="lazy">
            </div>
            <div class="slider-item">
                <img src="<?= $theme_url; ?>/assets/img/brand-6.webp" alt="brand-logo" width="85" height="27" loading="lazy">
            </div>
            <div class="slider-item">
                <img src="<?= $theme_url; ?>/assets/img/brand-2.webp" alt="brand-logo" width="125" height="32" loading="lazy">
            </div>
        </div>
    </div>
</section>
<section class="default-sec service-sec overflow-hidden">
    <div class="container">
        <h2 class="main-title text-center" data-aos="fade-up" data-aos-duration="1000">Our Services &
            Process</h2>
        <div class="row g-3">
            <div class="col-lg-6">
                <div class="card shadow h-100" data-aos="fade-up" data-aos-duration="1000">
                    <img src="<?= $theme_url; ?>/assets/img/icons/collection-service.webp" alt="icon" class="card-img"
                        width="73" height="76" loading="lazy">
                    <div>
                        <h3 class="card-title">Collection Expansion</h3>
                        <p class="mb-3">Get accurate data and stay anonymous from anywhere in the world.
                            Control your IP changes with no restrictions, no contracts, and traffic that
                            never expires.</p>
                        <a href="<?= home_url('/get-free-strategy') ?>" class="btn btn-outline d-block">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card shadow h-100" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <img src="<?= $theme_url; ?>/assets/img/icons/product-optimization-service.webp" alt="icon"
                        class="card-img" width="79" height="82" loading="lazy">
                    <div>
                        <h3 class="card-title">Product Optimization</h3>
                        <p class="mb-3">Get accurate data and stay anonymous from anywhere in the world.
                            Control your IP changes with no restrictions, no contracts, and traffic that
                            never expires.</p>
                        <a href="<?= home_url('/get-free-strategy') ?>" class="btn btn-outline d-block">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card shadow h-100" data-aos="fade-up" data-aos-duration="1000">
                    <img src="<?= $theme_url; ?>/assets/img/icons/content-service.webp" alt="icon" class="card-img"
                        width="74" height="77" loading="lazy">
                    <div>
                        <h3 class="card-title">Content Promotion</h3>
                        <p class="mb-3">Get accurate data and stay anonymous from anywhere in the world.
                            Control your IP changes with no restrictions, no contracts, and traffic that
                            never expires.</p>
                        <a href="<?= home_url('/get-free-strategy') ?>" class="btn btn-outline d-block">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card shadow h-100" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <img src="<?= $theme_url; ?>/assets/img/icons/link-service.webp" alt="icon" class="card-img" width="63"
                        height="82" loading="lazy">
                    <div>
                        <h3 class="card-title">Link Building</h3>
                        <p class="mb-3">Get accurate data and stay anonymous from anywhere in the world.
                            Control your IP changes with no restrictions, no contracts, and traffic that
                            never expires.</p>
                        <a href="<?= home_url('/get-free-strategy') ?>" class="btn btn-outline d-block">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="circle-obj circle-obj-1"></div>
    <div class="circle-obj circle-obj-2"></div>
    <svg class="line-obj obj obj-1" width="104" height="135" viewBox="0 0 104 135" fill="none"
        xmlns="http://www.w3.org/2000/svg">
        <path opacity="0.6"
            d="M66.7769 1.03665C80.6377 17.5002 103.613 47.1217 84.6284 33.8992C60.8972 17.3712 32.9646 14.5264 51.1093 30.4855C65.6249 43.2528 85.1177 61.701 93.0496 69.3293C101.75 76.3302 111.779 87.8879 82.2876 78.1109C45.4236 65.8897 19.6565 62.5598 27.0505 73.1907C34.4446 83.8215 44.221 84.8172 28.0132 91.6332C11.8055 98.4491 -1.18656 101.359 2.55788 134.196"
            stroke="#F15100" stroke-width="3" />
    </svg>
    <img src="<?= $theme_url; ?>/assets/img/service-obj-2.webp" alt="obj" width="154" height="66" class="obj obj-2" loading="lazy">
    <img src="<?= $theme_url; ?>/assets/img/service-obj-3.webp" alt="obj" width="115" height="101" class="obj obj-3" loading="lazy">

</section>
<section class="default-sec half-sec content-right about-sec bg-gray-light">
    <div class="container">
        <div class="row g-3">
            <div class="col-lg-6">
                <div class="img-wrapper position-relative">
                    <img src="<?= $theme_url; ?>/assets/img/about-home.webp" alt="patric-img" width="485" height="566"
                        class="img-fluid" style="max-width: 485px;" data-aos="fade-right"
                        data-aos-duration="1000" data-aos-delay="200" loading="lazy">
                    <img src="<?= $theme_url; ?>/assets/img/about-obj-1.webp" alt="obj" width="80" height="76"
                        class="obj obj-1" loading="lazy">
                    <img src="<?= $theme_url; ?>/assets/img/about-obj-2.webp" alt="obj" width="158" height="97"
                        class="obj obj-2" loading="lazy">
                    <div class="graph-wrapper">
                        <div class="card shadow" data-aos="fade-right" data-aos-duration="1000">
                            <span class="d-block fw-bold mb-2">New visitors</span>
                            <div class="d-flex gap-1" style="align-items: end;">
                                <span class="d-block fw-bold" style="font-size: 22px; line-height: 22px;"
                                    id="aboutCounter"><span>0</span>%</span>
                                <span class="d-block" style="font-size: 10px;">+0.4%</span>
                            </div>
                            <div class="week-wrapper d-flex justify-content-between">
                                <div class="day-wrapper">
                                    <div class="block block-1"></div>
                                    <span class="d-block">M</span>
                                </div>
                                <div class="day-wrapper">
                                    <div class="block block-2"></div>
                                    <span class="d-block">T</span>
                                </div>
                                <div class="day-wrapper">
                                    <div class="block block-3"></div>
                                    <span class="d-block">W</span>
                                </div>
                                <div class="day-wrapper">
                                    <div class="block block-4"></div>
                                    <span class="d-block">T</span>
                                </div>
                                <div class="day-wrapper">
                                    <div class="block block-5 active"></div>
                                    <span class="d-block">F</span>
                                </div>
                                <div class="day-wrapper">
                                    <div class="block block-6"></div>
                                    <span class="d-block">S</span>
                                </div>
                                <div class="day-wrapper">
                                    <div class="block block-7"></div>
                                    <span class="d-block">S</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="content-wrapper h-100 d-flex flex-column justify-content-center">
                    <h2 class="main-title mb-2" data-aos="fade-left" data-aos-duration="1000">Who Is Patrick
                        Rice?</h2>
                    <p data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">I love search
                        engines.  I am sure you don't hear that often.  But it's true.  I have
                        been testing and optimizing websites for search engines for half a decade.  I have
                        learned how Google processed pages and the thousands of factors leading
                        to #1 rankings and rapid business growth from Search Engine Optimization.</p>
                    <ul class="list-with-icon mb-3 d-flex flex-column">
                        <li class="list-item" data-aos="fade-left" data-aos-duration="1000"
                            data-aos-delay="400">
                            <div class="icon-wrapper">
                                <img src="<?= $theme_url; ?>/assets/img/icons/tick-square.webp" alt="tick-icon" width="20"
                                    height="20" loading="lazy">
                            </div>
                            <span class="d-block">Successful and expert SEO specialist</span>
                        </li>
                        <li class="list-item" data-aos="fade-left" data-aos-duration="1000"
                            data-aos-delay="600">
                            <div class="icon-wrapper">
                                <img src="<?= $theme_url; ?>/assets/img/icons/tick-square.webp" alt="tick-icon" width="20"
                                    height="20" loading="lazy">
                            </div>
                            <span class="d-block">Helped 100+ brands to achieve their goals worldwide</span>
                        </li>
                    </ul>
                    <a href="<?= home_url('/get-free-strategy') ?>" class="btn btn-primary d-block" data-aos="fade-left" data-aos-duration="1000"
                        data-aos-delay="800">Get a Free Consultation Call</a>
                </div>
            </div>
        </div>
    </div>
    <img src="<?= $theme_url; ?>/assets/img/about-obj-3.webp" alt="sec-obj" class="obj obj-3" width="77" height="79" loading="lazy">
</section>
<section class="default-sec case-studies-sec line-bg bg-green">
    <div class="container">
        <div class="mx-auto mb-4" style="max-width: 460px;">
            <h2 class="main-title text-white text-center mb-2" data-aos="fade-up" data-aos-duration="1000">
                Our Case Studies</h2>
            <p class="text-center text-white mb-0" data-aos="fade-up" data-aos-duration="1000">An SEO
                consultant that gets it. I know people and algorithms. My expertise has helped companies
                generate millions.</p>
        </div>
        <div class="card" data-aos="fade-up" data-aos-duration="1000">

            <span class="d-block fw-bold mb-1 card-title">How We Took This Shopify Brand to An Additional
                $1,633,357.95 in Sales</span>
            <p class="mb-3">The client is a Shopify store competing with Blick Art Materials. To say the least, I was
                excited for the challenge. I begin every project by completing an extensive audit analyzing
                the website, their competitors, and the strategies available to the client.</p>

            <img src="<?= $theme_url; ?>/assets/img/case-study-1.webp" alt="case-study" width="1100" height="556"
                style="max-width: 1100px;" class="img-fluid" loading="lazy">
        </div>
        <div class="card" data-aos="fade-up" data-aos-duration="1000">

            <span class="d-block fw-bold mb-1 card-title">$759,131.71 in Additional Organic Revenue in 6
                Months (From SEO)</span>
            <p class="mb-3">The client is a Shopify store competing with Blick Art Materials. To say the least, I was
                excited for the challenge. I begin every project by completing an extensive audit analyzing
                the website, their competitors, and the strategies available to the client.</p>

            <img src="<?= $theme_url; ?>/assets/img/case-study-2.webp" alt="case-study" width="1100" height="556"
                style="max-width: 1100px;" class="img-fluid" loading="lazy">

        </div>
        <div class="card" data-aos="fade-up" data-aos-duration="1000">

            <span class="d-block fw-bold mb-1 card-title">B2B Shopify Store Growth Case Study: 86.9% Organic
                Traffic Increase</span>
            <p class="mb-3">The client is a Shopify store competing with Blick Art Materials. To say the least, I was
                excited for the challenge. I begin every project by completing an extensive audit analyzing
                the website, their competitors, and the strategies available to the client.</p>
            <img src="<?= $theme_url; ?>/assets/img/case-study-3.webp" alt="case-study" width="1100" height="556"
                style="max-width: 1100px;" class="img-fluid" loading="lazy">
        </div>
    </div>
    <img src="<?= $theme_url; ?>/assets/img/case-study-obj-1.webp" alt="object" class="obj obj-1" width="136" height="131" loading="lazy">
</section>
<section class="default-sec testimonial-sec overflow-hidden">
    <div class="container">
        <h2 class="main-title text-center" data-aos="fade-up" data-aos-duration="1000">What Our Clients Say
            About Us</h2>
    </div>
    <div class="testimonial-slider" data-aos="fade-up" data-aos-duration="1000">
        <div class="slider-track slider-1" style="margin-bottom: clamp(10px, 5vw, 30px);">
            <div class="card shadow">
                <img src="<?= $theme_url; ?>/assets/img/avatars/testimonial-user-1.webp" alt="user-img" width="85"
                    height="85" class="author-img" loading="lazy">
                <div>
                    <p class="fs-18">"Patrick is super efficient and a must have for any ecommerce business
                        that is
                        serious about ROI."</p>
                    <div class="d-flex align-items-center justify-content-between"
                        style="border-left: 2px solid var(--primary); padding-left: 16px;">
                        <div>
                            <span class="d-block fw-bold">Kiran Arora</span>
                            <p class="fs-14 mb-0">7 Figure E-Commerce Founder</p>
                        </div>
                        <div class="d-flex align-items-center" style="gap: 4px;">
                            <span class="d-block fw-bold fs-18">5</span>
                            <img src="<?= $theme_url; ?>/assets/img/icons/review-star.webp" width="15" height="15"
                                alt="star" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow">
                <img src="<?= $theme_url; ?>/assets/img/avatars/testimonial-user-1.webp" alt="user-img" width="85"
                    height="85" class="author-img" loading="lazy">
                <div>
                    <p class="fs-18">"Patrick is super efficient and a must have for any ecommerce business
                        that is
                        serious about ROI."</p>
                    <div class="d-flex align-items-center justify-content-between"
                        style="border-left: 2px solid var(--primary); padding-left: 16px;">
                        <div>
                            <span class="d-block fw-bold">Kiran Arora</span>
                            <p class="fs-14 mb-0">7 Figure E-Commerce Founder</p>
                        </div>
                        <div class="d-flex align-items-center" style="gap: 4px;">
                            <span class="d-block fw-bold fs-18">5</span>
                            <img src="<?= $theme_url; ?>/assets/img/icons/review-star.webp" width="15" height="15"
                                alt="star" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow">
                <img src="<?= $theme_url; ?>/assets/img/avatars/testimonial-user-1.webp" alt="user-img" width="85"
                    height="85" class="author-img" loading="lazy">
                <div>
                    <p class="fs-18">"Patrick is super efficient and a must have for any ecommerce business
                        that is
                        serious about ROI."</p>
                    <div class="d-flex align-items-center justify-content-between"
                        style="border-left: 2px solid var(--primary); padding-left: 16px;">
                        <div>
                            <span class="d-block fw-bold">Kiran Arora</span>
                            <p class="fs-14 mb-0">7 Figure E-Commerce Founder</p>
                        </div>
                        <div class="d-flex align-items-center" style="gap: 4px;">
                            <span class="d-block fw-bold fs-18">5</span>
                            <img src="<?= $theme_url; ?>/assets/img/icons/review-star.webp" width="15" height="15"
                                alt="star" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow">
                <img src="<?= $theme_url; ?>/assets/img/avatars/testimonial-user-1.webp" alt="user-img" width="85"
                    height="85" class="author-img" loading="lazy">
                <div>
                    <p class="fs-18">"Patrick is super efficient and a must have for any ecommerce business
                        that is
                        serious about ROI."</p>
                    <div class="d-flex align-items-center justify-content-between"
                        style="border-left: 2px solid var(--primary); padding-left: 16px;">
                        <div>
                            <span class="d-block fw-bold">Kiran Arora</span>
                            <p class="fs-14 mb-0">7 Figure E-Commerce Founder</p>
                        </div>
                        <div class="d-flex align-items-center" style="gap: 4px;">
                            <span class="d-block fw-bold fs-18">5</span>
                            <img src="<?= $theme_url; ?>/assets/img/icons/review-star.webp" width="15" height="15"
                                alt="star" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow">
                <img src="<?= $theme_url; ?>/assets/img/avatars/testimonial-user-1.webp" alt="user-img" width="85"
                    height="85" class="author-img" loading="lazy">
                <div>
                    <p class="fs-18">"Patrick is super efficient and a must have for any ecommerce business
                        that is
                        serious about ROI."</p>
                    <div class="d-flex align-items-center justify-content-between"
                        style="border-left: 2px solid var(--primary); padding-left: 16px;">
                        <div>
                            <span class="d-block fw-bold">Kiran Arora</span>
                            <p class="fs-14 mb-0">7 Figure E-Commerce Founder</p>
                        </div>
                        <div class="d-flex align-items-center" style="gap: 4px;">
                            <span class="d-block fw-bold fs-18">5</span>
                            <img src="<?= $theme_url; ?>/assets/img/icons/review-star.webp" width="15" height="15"
                                alt="star" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow">
                <img src="<?= $theme_url; ?>/assets/img/avatars/testimonial-user-1.webp" alt="user-img" width="85"
                    height="85" class="author-img" loading="lazy">
                <div>
                    <p class="fs-18">"Patrick is super efficient and a must have for any ecommerce business
                        that is
                        serious about ROI."</p>
                    <div class="d-flex align-items-center justify-content-between"
                        style="border-left: 2px solid var(--primary); padding-left: 16px;">
                        <div>
                            <span class="d-block fw-bold">Kiran Arora</span>
                            <p class="fs-14 mb-0">7 Figure E-Commerce Founder</p>
                        </div>
                        <div class="d-flex align-items-center" style="gap: 4px;">
                            <span class="d-block fw-bold fs-18">5</span>
                            <img src="<?= $theme_url; ?>/assets/img/icons/review-star.webp" width="15" height="15"
                                alt="star" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-track slider-2" style="margin-bottom: clamp(10px, 5vw, 30px);">
            <div class="card shadow">
                <img src="<?= $theme_url; ?>/assets/img/avatars/testimonial-user-1.webp" alt="user-img" width="85"
                    height="85" class="author-img" loading="lazy">
                <div>
                    <p class="fs-18">"Patrick is super efficient and a must have for any ecommerce business
                        that is
                        serious about ROI."</p>
                    <div class="d-flex align-items-center justify-content-between"
                        style="border-left: 2px solid var(--primary); padding-left: 16px;">
                        <div>
                            <span class="d-block fw-bold">Kiran Arora</span>
                            <p class="fs-14 mb-0">7 Figure E-Commerce Founder</p>
                        </div>
                        <div class="d-flex align-items-center" style="gap: 4px;">
                            <span class="d-block fw-bold fs-18">5</span>
                            <img src="<?= $theme_url; ?>/assets/img/icons/review-star.webp" width="15" height="15"
                                alt="star" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow">
                <img src="<?= $theme_url; ?>/assets/img/avatars/testimonial-user-1.webp" alt="user-img" width="85"
                    height="85" class="author-img" loading="lazy">
                <div>
                    <p class="fs-18">"Patrick is super efficient and a must have for any ecommerce business
                        that is
                        serious about ROI."</p>
                    <div class="d-flex align-items-center justify-content-between"
                        style="border-left: 2px solid var(--primary); padding-left: 16px;">
                        <div>
                            <span class="d-block fw-bold">Kiran Arora</span>
                            <p class="fs-14 mb-0">7 Figure E-Commerce Founder</p>
                        </div>
                        <div class="d-flex align-items-center" style="gap: 4px;">
                            <span class="d-block fw-bold fs-18">5</span>
                            <img src="<?= $theme_url; ?>/assets/img/icons/review-star.webp" width="15" height="15"
                                alt="star" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow">
                <img src="<?= $theme_url; ?>/assets/img/avatars/testimonial-user-1.webp" alt="user-img" width="85"
                    height="85" class="author-img" loading="lazy">
                <div>
                    <p class="fs-18">"Patrick is super efficient and a must have for any ecommerce business
                        that is
                        serious about ROI."</p>
                    <div class="d-flex align-items-center justify-content-between"
                        style="border-left: 2px solid var(--primary); padding-left: 16px;">
                        <div>
                            <span class="d-block fw-bold">Kiran Arora</span>
                            <p class="fs-14 mb-0">7 Figure E-Commerce Founder</p>
                        </div>
                        <div class="d-flex align-items-center" style="gap: 4px;">
                            <span class="d-block fw-bold fs-18">5</span>
                            <img src="<?= $theme_url; ?>/assets/img/icons/review-star.webp" width="15" height="15"
                                alt="star" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow">
                <img src="<?= $theme_url; ?>/assets/img/avatars/testimonial-user-1.webp" alt="user-img" width="85"
                    height="85" class="author-img" loading="lazy">
                <div>
                    <p class="fs-18">"Patrick is super efficient and a must have for any ecommerce business
                        that is
                        serious about ROI."</p>
                    <div class="d-flex align-items-center justify-content-between"
                        style="border-left: 2px solid var(--primary); padding-left: 16px;">
                        <div>
                            <span class="d-block fw-bold">Kiran Arora</span>
                            <p class="fs-14 mb-0">7 Figure E-Commerce Founder</p>
                        </div>
                        <div class="d-flex align-items-center" style="gap: 4px;">
                            <span class="d-block fw-bold fs-18">5</span>
                            <img src="<?= $theme_url; ?>/assets/img/icons/review-star.webp" width="15" height="15"
                                alt="star" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow">
                <img src="<?= $theme_url; ?>/assets/img/avatars/testimonial-user-1.webp" alt="user-img" width="85"
                    height="85" class="author-img" loading="lazy">
                <div>
                    <p class="fs-18">"Patrick is super efficient and a must have for any ecommerce business
                        that is
                        serious about ROI."</p>
                    <div class="d-flex align-items-center justify-content-between"
                        style="border-left: 2px solid var(--primary); padding-left: 16px;">
                        <div>
                            <span class="d-block fw-bold">Kiran Arora</span>
                            <p class="fs-14 mb-0">7 Figure E-Commerce Founder</p>
                        </div>
                        <div class="d-flex align-items-center" style="gap: 4px;">
                            <span class="d-block fw-bold fs-18">5</span>
                            <img src="<?= $theme_url; ?>/assets/img/icons/review-star.webp" width="15" height="15"
                                alt="star" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow">
                <img src="<?= $theme_url; ?>/assets/img/avatars/testimonial-user-1.webp" alt="user-img" width="85"
                    height="85" class="author-img" loading="lazy">
                <div>
                    <p class="fs-18">"Patrick is super efficient and a must have for any ecommerce business
                        that is
                        serious about ROI."</p>
                    <div class="d-flex align-items-center justify-content-between"
                        style="border-left: 2px solid var(--primary); padding-left: 16px;">
                        <div>
                            <span class="d-block fw-bold">Kiran Arora</span>
                            <p class="fs-14 mb-0">7 Figure E-Commerce Founder</p>
                        </div>
                        <div class="d-flex align-items-center" style="gap: 4px;">
                            <span class="d-block fw-bold fs-18">5</span>
                            <img src="<?= $theme_url; ?>/assets/img/icons/review-star.webp" width="15" height="15"
                                alt="star" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-track slider-1">
            <div class="card shadow">
                <img src="<?= $theme_url; ?>/assets/img/avatars/testimonial-user-1.webp" alt="user-img" width="85"
                    height="85" class="author-img" loading="lazy">
                <div>
                    <p class="fs-18">"Patrick is super efficient and a must have for any ecommerce business
                        that is
                        serious about ROI."</p>
                    <div class="d-flex align-items-center justify-content-between"
                        style="border-left: 2px solid var(--primary); padding-left: 16px;">
                        <div>
                            <span class="d-block fw-bold">Kiran Arora</span>
                            <p class="fs-14 mb-0">7 Figure E-Commerce Founder</p>
                        </div>
                        <div class="d-flex align-items-center" style="gap: 4px;">
                            <span class="d-block fw-bold fs-18">5</span>
                            <img src="<?= $theme_url; ?>/assets/img/icons/review-star.webp" width="15" height="15"
                                alt="star" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow">
                <img src="<?= $theme_url; ?>/assets/img/avatars/testimonial-user-1.webp" alt="user-img" width="85"
                    height="85" class="author-img" loading="lazy">
                <div>
                    <p class="fs-18">"Patrick is super efficient and a must have for any ecommerce business
                        that is
                        serious about ROI."</p>
                    <div class="d-flex align-items-center justify-content-between"
                        style="border-left: 2px solid var(--primary); padding-left: 16px;">
                        <div>
                            <span class="d-block fw-bold">Kiran Arora</span>
                            <p class="fs-14 mb-0">7 Figure E-Commerce Founder</p>
                        </div>
                        <div class="d-flex align-items-center" style="gap: 4px;">
                            <span class="d-block fw-bold fs-18">5</span>
                            <img src="<?= $theme_url; ?>/assets/img/icons/review-star.webp" width="15" height="15"
                                alt="star" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow">
                <img src="<?= $theme_url; ?>/assets/img/avatars/testimonial-user-1.webp" alt="user-img" width="85"
                    height="85" class="author-img" loading="lazy">
                <div>
                    <p class="fs-18">"Patrick is super efficient and a must have for any ecommerce business
                        that is
                        serious about ROI."</p>
                    <div class="d-flex align-items-center justify-content-between"
                        style="border-left: 2px solid var(--primary); padding-left: 16px;">
                        <div>
                            <span class="d-block fw-bold">Kiran Arora</span>
                            <p class="fs-14 mb-0">7 Figure E-Commerce Founder</p>
                        </div>
                        <div class="d-flex align-items-center" style="gap: 4px;">
                            <span class="d-block fw-bold fs-18">5</span>
                            <img src="<?= $theme_url; ?>/assets/img/icons/review-star.webp" width="15" height="15"
                                alt="star" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow">
                <img src="<?= $theme_url; ?>/assets/img/avatars/testimonial-user-1.webp" alt="user-img" width="85"
                    height="85" class="author-img" loading="lazy">
                <div>
                    <p class="fs-18">"Patrick is super efficient and a must have for any ecommerce business
                        that is
                        serious about ROI."</p>
                    <div class="d-flex align-items-center justify-content-between"
                        style="border-left: 2px solid var(--primary); padding-left: 16px;">
                        <div>
                            <span class="d-block fw-bold">Kiran Arora</span>
                            <p class="fs-14 mb-0">7 Figure E-Commerce Founder</p>
                        </div>
                        <div class="d-flex align-items-center" style="gap: 4px;">
                            <span class="d-block fw-bold fs-18">5</span>
                            <img src="<?= $theme_url; ?>/assets/img/icons/review-star.webp" width="15" height="15"
                                alt="star" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow">
                <img src="<?= $theme_url; ?>/assets/img/avatars/testimonial-user-1.webp" alt="user-img" width="85"
                    height="85" class="author-img" loading="lazy">
                <div>
                    <p class="fs-18">"Patrick is super efficient and a must have for any ecommerce business
                        that is
                        serious about ROI."</p>
                    <div class="d-flex align-items-center justify-content-between"
                        style="border-left: 2px solid var(--primary); padding-left: 16px;">
                        <div>
                            <span class="d-block fw-bold">Kiran Arora</span>
                            <p class="fs-14 mb-0">7 Figure E-Commerce Founder</p>
                        </div>
                        <div class="d-flex align-items-center" style="gap: 4px;">
                            <span class="d-block fw-bold fs-18">5</span>
                            <img src="<?= $theme_url; ?>/assets/img/icons/review-star.webp" width="15" height="15"
                                alt="star" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow">
                <img src="<?= $theme_url; ?>/assets/img/avatars/testimonial-user-1.webp" alt="user-img" width="85"
                    height="85" class="author-img" loading="lazy">
                <div>
                    <p class="fs-18">"Patrick is super efficient and a must have for any ecommerce business
                        that is
                        serious about ROI."</p>
                    <div class="d-flex align-items-center justify-content-between"
                        style="border-left: 2px solid var(--primary); padding-left: 16px;">
                        <div>
                            <span class="d-block fw-bold">Kiran Arora</span>
                            <p class="fs-14 mb-0">7 Figure E-Commerce Founder</p>
                        </div>
                        <div class="d-flex align-items-center" style="gap: 4px;">
                            <span class="d-block fw-bold fs-18">5</span>
                            <img src="<?= $theme_url; ?>/assets/img/icons/review-star.webp" width="15" height="15"
                                alt="star" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row g-3" data-aos="fade-up" data-aos-duration="1000">
            <div class="col-md-6 col-lg-4">
                <div class="d-flex align-items-center flex-wrap gap-3">
                    <div class="img-wrapper bg-primary">
                        <img src="<?= $theme_url; ?>/assets/img/icons/users-light.webp" alt="icon" class="icon" width="46"
                            height="41" loading="lazy">
                    </div>
                    <div>
                        <span class="d-block font-jakarta-bold mb-1 counter" data-target="3000"
                            style="font-size: clamp(26px, 4vw, 50px); line-height: 1;">3k+</span>
                        <span class="d-block fs-18">Sales Generated</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="d-flex align-items-center flex-wrap gap-3">
                    <div class="img-wrapper bg-primary">
                        <img src="<?= $theme_url; ?>/assets/img/icons/download-light.webp" alt="icon" class="icon" width="42"
                            height="45" loading="lazy">
                    </div>
                    <div>
                        <span class="d-block font-jakarta-bold mb-1 counter" data-target="1000000"
                            style="font-size: clamp(26px, 4vw, 50px); line-height: 1;">$10M+</span>
                        <span class="d-block fs-18">Brands Helped</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="d-flex align-items-center flex-wrap gap-3">
                    <div class="img-wrapper bg-primary">
                        <img src="<?= $theme_url; ?>/assets/img/icons/user-light.webp" alt="icon" class="icon" width="45"
                            height="46" loading="lazy">
                    </div>
                    <div>
                        <span class="d-block font-jakarta-bold mb-1 counter" data-target="1000"
                            style="font-size: clamp(26px, 4vw, 50px); line-height: 1;">1k+</span>
                        <span class="d-block fs-18">Satisfied Clients</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="circle-obj circle-obj-1"></div>
    <div class="circle-obj circle-obj-2"></div>
    <img src="<?= $theme_url; ?>/assets/img/testimonial-obj-1.webp" alt="obj" width="111" height="94" class="obj obj-1" loading="lazy">
    <img src="<?= $theme_url; ?>/assets/img/testimonial-obj-2.webp" alt="obj" width="236" height="43" class="obj obj-2" loading="lazy">
    <img src="<?= $theme_url; ?>/assets/img/testimonial-obj-3.webp" alt="obj" width="132" height="214" class="obj obj-3" loading="lazy">
    <img src="<?= $theme_url; ?>/assets/img/testimonial-obj-4.webp" alt="obj" width="68" height="68" class="obj obj-4" loading="lazy">

</section>
<section class="default-sec faq-sec line-bg bg-green">
    <div class="container">
        <h2 class="main-title text-center text-white mb-2" data-aos="fade-up" data-aos-duration="1000">Frequently Asked Questions</h2>
        <p class="text-center text-white mb-4" data-aos="fade-up" data-aos-duration="1000">You have questions? We have answers</p>
        <div class="accordion mb-4" data-aos="fade-up" data-aos-duration="1000">
            <div class="accordion-item active">
                <div class="accordion-header">
                    What is the best way to create a saas business today?
                    <div class="icon">
                        <span class="d-block plus">+</span>
                        <span class="d-block minus">-</span>
                    </div>
                </div>
                <div class="accordion-content show">
                    <p>Launch a business today with our help and get it done with amazing
                        launch features, websites and more with uifry. We help business like yours thrive
                        every day and beyond. Launch a business today with our help and get it done with
                        amazing launch features, websites and more with uifry. We help business like yours
                        thrive every day and beyond.
                    </p>
                    <p>

                        Launch a business today with our help and get it done with amazing launch features,
                        websites and more with uifry. We help business like yours thrive every day and
                        beyond. Launch a business today with our help and get it done with amazing launch
                        features, websites and more with uifry. We help business like yours thrive every day
                        and beyond.
                    </p>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-header">
                    What is the best way to create a saas business today?
                    <div class="icon">
                        <span class="d-block plus">+</span>
                        <span class="d-block minus">-</span>
                    </div>
                </div>
                <div class="accordion-content ">
                    <p>Launch a business today with our help and get it done with amazing
                        launch features, websites and more with uifry. We help business like yours thrive
                        every day and beyond. Launch a business today with our help and get it done with
                        amazing launch features, websites and more with uifry. We help business like yours
                        thrive every day and beyond.
                    </p>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-header">
                    What is the best way to create a saas business today?
                    <div class="icon">
                        <span class="d-block plus">+</span>
                        <span class="d-block minus">-</span>
                    </div>
                </div>
                <div class="accordion-content ">
                    <p>Launch a business today with our help and get it done with amazing
                        launch features, websites and more with uifry. We help business like yours thrive
                        every day and beyond. Launch a business today with our help and get it done with
                        amazing launch features, websites and more with uifry. We help business like yours
                        thrive every day and beyond.
                    </p>
                </div>
            </div>
        </div>
        <a href="<?= home_url('/get-free-strategy') ?>" class="btn btn-primary mx-auto d-block" data-aos="fade-up" data-aos-duration="1000">Get a Free Consultation Call</a>
    </div>
</section>
<section class="default-sec blog-sec">
    <div class="container">
        <h2 class="main-title text-center" data-aos="fade-up" data-aos-duration="1000">Our latest updates for you here!</h2>
        <div class="row g-3 mb-3">
            <?php
            $blog_post_per_page = 9;
            $blog_posts_query = new WP_Query(array(
                'post_type'                =>    array('case_studies'),
                'posts_per_page'        =>    $blog_post_per_page,
            ));
            while ($blog_posts_query->have_posts()) : $blog_posts_query->the_post(); ?>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-post" data-aos="fade-up" data-aos-duration="1000">
                        <div class="position-relative mb-2">
                            <?php if (get_the_post_thumbnail()) : ?>
                                <img style="border-radius: 12px;" src="<?= get_the_post_thumbnail_url() ?>" width="367"
                                    height="230" class="img-fluid" loading="lazy" alt="blog-img">
                            <?php else : ?>
                                <img style="border-radius: 12px;" src="<?= $theme_url; ?>/assets/img/no-image-found.webp" width="367"
                                    height="230" class="img-fluid" loading="lazy" alt="blog-img">
                            <?php endif; ?>
                            <a href="<?php the_permalink() ?>" class="play-btn"><img src="<?= $theme_url; ?>/assets/img/icons/play-ico.svg" alt="icon"
                                    width="21" height="24" loading="lazy"></a>
                        </div>
                        <a href="<?php the_permalink() ?>">
                            <span class="h6 fw-bold mb-1 d-block"><?= the_title(); ?></span>
                            <p class="show-line-3"><?= get_the_excerpt(); ?></p>
                        </a>
                    </div>
                </div>
            <?php
            endwhile;
            wp_reset_postdata();
            ?>
        </div>
        <a href="<?= home_url('case-study') ?>" class="btn btn-primary d-block mx-auto" data-aos="fade-up" data-aos-duration="1000">Explore All Resources</a>
    </div>
    <img src="<?= $theme_url; ?>/assets/img/blog-obj-1.webp" class="obj obj-1" alt="obj-img" width="117" height="114" loading="lazy">
    <img src="<?= $theme_url; ?>/assets/img/blog-obj-2.webp" class="obj obj-2" alt="obj-img" width="86" height="73" loading="lazy">
    <img src="<?= $theme_url; ?>/assets/img/blog-obj-3.webp" class="obj obj-3" alt="obj-img" width="84" height="125" loading="lazy">
</section>

<?= get_footer(); ?>