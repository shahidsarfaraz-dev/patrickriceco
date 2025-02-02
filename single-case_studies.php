<?php $theme_url = get_template_directory_uri(); ?>
<?= get_header(); ?>

<?php
get_header(); // Include the header template.
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <section class="banner-sec">
            <div class="container">
                <div style="max-width: 933px;" class="banner-content mx-auto">
                    <span class="d-block text-center text-white fw-bold mb-2">Success CaseStudy</span>
                    <h1 class="text-white text-center"><?php the_title(); ?></h1>
                    <p class="text-center text-white"><?= get_the_excerpt(); ?></p>
                </div>
            </div>
            <svg class="line-obj" width="147" height="96" viewBox="0 0 147 96" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path class="path" opacity="0.3"
                    d="M1 58.7451L46.3617 93.9523C47.5556 94.879 49.3064 94.1975 49.5597 92.7076L56.3266 52.9025C56.6034 51.2744 58.6224 50.6643 59.7544 51.8666L77.9985 71.2435C79.1732 72.4911 81.2704 71.7802 81.4443 70.0754L88.2226 3.62191C88.4316 1.57264 91.2279 1.13943 92.0472 3.02939L120.369 68.3614C121.156 70.1777 123.821 69.8686 124.172 67.9202L127.905 47.1841C128.248 45.2745 130.836 44.9238 131.676 46.6729L145 74.4314"
                    stroke="white" stroke-width="3" />
            </svg>
            <svg class="line-obj obj obj-3" width="90" height="125" viewBox="0 0 90 125" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.4"
                    d="M88 111.098C73.6629 89.9377 43.8157 38.2943 39.1236 1M72.3596 123C62.5843 117.049 34.627 106.337 1 111.098"
                    stroke="white" stroke-width="4" />
            </svg>
            <img src="<?= $theme_url; ?>/assets/img/hero-obj-1.svg" alt="obj" width="60" height="68" class="obj obj-2">
            <div class="circle-obj circle-obj-1"></div>
            <div class="circle-obj circle-obj-2"></div>
            <div class="circle-obj circle-obj-3"></div>
            <div class="arrow-obj">
                <img src="<?= $theme_url; ?>/assets/img/hero-arrow-obj.svg" alt="line-obj" width="134" height="120"
                    data-aos="fade-down" data-aos-duration="900" data-aos-delay="800">
            </div>
        </section>
        <section class="default-sec blog-content-sec">
            <?php
            // Get the full content
            $content = apply_filters('the_content', get_the_content());

            // Find the position of the second closing </p> tag
            $pos = strpos($content, '</p>'); // First paragraph

            if ($pos !== false) { ?>
                <div style="padding: clamp(20px, 4vw, 40px) 0;">
                    <div class="container">
                        <?php
                        // Split the content at the second </p> tag
                        $first_paragraph = substr($content, 0, $pos + 4); // Include </p>
                        $rest_of_content = substr($content, $pos + 4);
                        echo $first_paragraph;
                        ?>
                    </div>
                </div>
                <?php
                // Insert the thumbnail
                if (has_post_thumbnail()) {
                    echo '<img class="img-fluid mb-3 featured-img" src="' . get_the_post_thumbnail_url(null, 'large') . '">';
                }
                ?>
                <div style="padding: clamp(20px, 4vw, 40px) 0;">
                    <div class="container">
                        <?= $rest_of_content; ?>
                    </div>
                </div>
            <?php
            } else { ?>
                <div style="padding: clamp(20px, 4vw, 40px) 0;">
                    <div class="container">
                        <?= $content; ?>
                    </div>
                </div>
            <?php
            }
            ?>
        </section>
        <section class="default-sec form-sec p-o">
            <div class="container">
                <iframe src="https://calendly.com/patrickriceco/strategy-call?embed_domain=patrickriceco.com&amp;embed_type=Inline" width="100%" height="700" frameborder="0" title="Select a Date &amp; Time - Calendly"></iframe>
            </div>
        </section>

<?php endwhile;
endif; ?>



<?= get_footer(); ?>