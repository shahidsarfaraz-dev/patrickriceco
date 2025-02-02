<?php $theme_url = get_template_directory_uri();

$post_date = wp_date('M j, Y', strtotime(get_the_date()));
$current_post = get_queried_object();
$author_id = get_post_field('post_author', $current_post->ID);
$author_posts_url = get_author_posts_url($author_id);
$biographical_info = get_the_author_meta('description', $author_id);
$author_first_name = get_the_author_meta('first_name',  $author_id);
$author_last_name = get_the_author_meta('last_name', $author_id);
?>
<?= get_header(); ?>

<section class="default-sec">
    <div class="container">
        <div class="d-flex gap-2 mb-1" data-aos="fade-up" data-aos-duration="1000">
            <?php
            $categories = get_the_category();
            if (!empty($categories)) :
                $category = reset($categories);
                $category_url = get_category_link($category);
            ?>
                <div class="category">
                    <a href="<?= ucfirst($category_url) ?>"><span><?= ucfirst($category->name) ?></span></a>
                </div>
            <?php
            endif;
            ?>
            <span class="d-block"><?= $post_date; ?></span>
        </div>
        <h1 class="main-title mb-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200"><?= the_title(); ?></h1>
        <img style="width: 100%; border-radius: 16px; margin-bottom: 50px;" src="<?= get_the_post_thumbnail_url() ?>" width="1140"
            height="576" class="img-fluid" alt="blog-img" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
        <div class="row g-3">
            <div class="col-lg-9">
                <div class="inner-content" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                    <?= the_content(); ?>
                    <div class="d-flex gap-2 flex-wrap mb-3">
                        <a href="#" class="btn btn-outline">SEO</a>
                        <a href="#" class="btn btn-outline">Tags</a>
                        <a href="#" class="btn btn-outline">Design</a>
                    </div>
                    <div class="d-flex justify-content-between mb-4">
                        <?php
                        $next_post = get_next_post();
                        $prev_post = get_previous_post();
                        if ($next_post || $prev_post) : ?>
                            <div style="max-width: 270px;">
                                <?php if (!empty($prev_post)) : ?>
                                    <a href="<?php echo get_permalink($prev_post); ?>" class="text-primary d-block fs-18 mb-2">
                                        <div class="text-green d-block fs-18 mb-2 text-start">
                                            <img loading="lazy" src="<?= get_template_directory_uri(); ?>/assets/img/icons/arrow-left.svg" alt="icon" width="25" height="15">
                                            <span style="margin-left: 10px;">Preveious</span>
                                        </div>
                                        <span class="d-none d-lg-block text-gray"><?= $prev_post->post_title ?></span>
                                    </a>
                                <?php endif; ?>
                            </div>
                            <div style="max-width: 270px;">
                                <?php if (!empty($next_post)) : ?>
                                    <a href="<?php echo get_permalink($next_post); ?>" class="text-primary d-block fs-18 mb-2 text-end">
                                        <div class="text-green d-block fs-18 mb-2 text-end">
                                            <span style="margin-right: 10px;">Next</span>
                                            <img loading="lazy" src="<?= get_template_directory_uri(); ?>/assets/img/icons/arrow-right.svg" alt="icon" width="25" height="15">
                                        </div>
                                        <span class="d-none d-lg-block text-end text-gray"><?= $next_post->post_title ?></span>
                                    </a>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card shadow mb-2">
                    <span class="d-block mb-1">Share on:</span>
                    <div class="social-icons">
                        <a href="javascript:window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent('<?php echo get_permalink(); ?>'),'facebook-share-dialog','width=800,height=700');" class="icon">
                            <img style="max-width: 10px;" src="<?= $theme_url; ?>/assets/img/facebook-icon.webp" width="10"
                                height="12" class="img-fluid" alt="">
                        </a>
                        <a href="javascript:window.open('https://twitter.com/intent/tweet?url=' + encodeURIComponent('<?php echo get_permalink(); ?>'));" class="icon">
                            <img style="max-width: 14px;" src="<?= $theme_url; ?>/assets/img/twitter-icon.webp" width="14"
                                height="16" class="img-fluid" alt="">
                        </a>
                        <a href="javascript:window.open('http://pinterest.com/pin/create/button/?url=<?= get_permalink() ?>&description=<?= get_the_title(); ?>','pinterest-share-dialog','width=800,height=700');" class="icon">
                            <img style="max-width: 14px;" src="<?= $theme_url; ?>/assets/img/pinterest-icon.webp" width="14"
                                height="16" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
                <div class="card shadow contact-form">
                    <?= do_shortcode('[contact-form-7 id="556b8ec" title="Blog Single"]') ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?= get_footer(); ?>