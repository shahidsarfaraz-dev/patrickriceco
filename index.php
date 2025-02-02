<?php $theme_url = get_template_directory_uri();
global $wp_query;
$total_blogs_paged = !empty($wp_query->query_vars['paged']) ? $wp_query->query_vars['paged'] : 1;
?>

<?= get_header(); ?>

<section class="banner-sec">
    <div class="container">
        <div style="max-width: 933px;" class="banner-content mx-auto">
            <span class="d-block text-center text-white fw-bold mb-2">OUR BLOGS</span>
            <h1 class="text-white text-center">Find our all blogs from here</h1>
            <p class="text-center text-white">Our blogs are written from very research research and well
                known writers writers so that we can provide you the best blogs and articles articles for
                you to read them all along</p>
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
<section class="featured-blog-sec pb-0">
    <div class="container">
        <?php
        $featured_blog_query = new WP_Query(array(
            'post_type'            =>    array('post'),
            'posts_per_page'    =>    1
        ));
        $featured_post = reset($featured_blog_query->posts);
        if ($featured_post) {
            $post_date = wp_date('M j, Y', strtotime($featured_post->post_date));
            $post_author_id = $featured_post->post_author;
            $first_name = get_the_author_meta('first_name', $post_author_id);
            $last_name = get_the_author_meta('last_name', $post_author_id);
            $content = $featured_post->post_content;
            $word_count = str_word_count(strip_tags($content));
            $reading_time = ceil($word_count / 200);
        ?>
            <a href="<?php the_permalink($featured_post) ?>">
                <img style="width: 100%;" src="<?= get_the_post_thumbnail_url($featured_post) ?>" width="1140" height="576"
                    class="img-fluid" loading="lazy" alt="">
            </a>
            <div class="card shadow">
                <div class="d-flex gap-2 mb-1">
                    <?php
                    $categories = get_the_category();
                    if (!empty($categories)) :
                        $category = reset($categories);
                        $category_url = get_category_link($category);
                    ?>
                        <div class="category">
                            <a class="d-block fw-bold" href="<?= ucfirst($category_url) ?>"><span><?= ucfirst($category->name) ?></span></a>
                        </div>
                    <?php
                    endif;
                    ?>
                    <span class="d-block"><?= $post_date ?></span>
                </div>
                <h2><?= $featured_post->post_title ?></h2>
                <p class="mb-5"><?= get_the_excerpt($featured_post) ?></p>
                <a href="<?php the_permalink($featured_post) ?>" class="btn btn-primary">Read more</a>
            </div>

        <?php }
        wp_reset_postdata(); ?>
    </div>
</section>
<section class="default-sec blog-sec">
    <div class="container">
        <h2 class="main-title text-center" data-aos="fade-up" data-aos-duration="1000">Our latest updates
            for you here!</h2>
        <div class="row g-3">
            <?php
            $blog_post_per_page = 9;
            // $our_blogs_offset = ($posts_per_page * $total_blogs_paged) - ($posts_per_page - $total_blogs_paged);

            $our_blogs_offset = ($total_blogs_paged == 1) ? 0 : ($total_blogs_paged - 1) * $posts_per_page;

            $latest_post_id = get_posts(array('numberposts' => 1))[0]->ID;
            $exclude_latest_post = ($total_blogs_paged == 1) ? array($latest_post_id) : array();


            $blog_posts_query = new WP_Query(array(
                'post_type'                =>    array('post'),
                'posts_per_page'        =>    $blog_post_per_page,
                'offset'                =>    $our_blogs_offset,
                'post__not_in'    => $exclude_latest_post,
            ));
            $total_our_blogs  = ceil(($wp_query->found_posts - count($exclude_latest_post)) / $blog_post_per_page);
            while ($blog_posts_query->have_posts()) : $blog_posts_query->the_post();
                $post_date = wp_date('M j, Y', strtotime(get_the_date()));
                $thumbnail_id = get_post_thumbnail_id($post->ID);
                $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                $post_author_id = $post->post_author;
                $first_name = get_the_author_meta('first_name', $post_author_id);
                $last_name = get_the_author_meta('last_name', $post_author_id);
                $content = $post->post_content;
                $word_count = str_word_count(strip_tags($content));
                $reading_time = ceil($word_count / 200);
            ?>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-post" data-aos="fade-up" data-aos-duration="1000">
                        <div class="position-relative mb-2">
                            <img style="border-radius: 12px;" src="<?= get_the_post_thumbnail_url() ?>" width="367"
                                height="230" class="img-fluid" loading="lazy" alt="blog-img">
                            <a href="<?php the_permalink() ?>" class="play-btn"><img src="<?= $theme_url; ?>/assets/img/icons/play-ico.svg" alt="icon"
                                    width="21" height="24" loading="lazy"></a>
                        </div>
                        <a href="<?php the_permalink() ?>">
                            <span class="h6 fw-bold mb-1 d-block"><?= the_title(); ?></span>
                            <p><?= the_excerpt(); ?></p>
                        </a>
                    </div>
                </div>
            <?php
            endwhile;
            wp_reset_postdata();
            ?>
        </div>
        <div class="pagination d-flex justify-content-center">
            <?php
            echo paginate_links(
                array(
                    'add_args'  => false,
                    // 'total'     => $total_our_blogs,
                    'prev_text' => is_rtl() ? '&rarr;' : '&larr;',
                    'next_text' => is_rtl() ? '&larr;' : '&rarr;',
                    'type'      => 'list',
                    'end_size'  => 3,
                    'mid_size'  => 3,
                )
            );
            ?>
        </div>
    </div>
</section>


<?= get_footer(); ?>