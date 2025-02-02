<?php

class PatricTheme
{

    public $page_styles = array(
        'get-free-strategy' => 'get-free-strategy',
        'contact-us' => 'contact-us',
    );

    public function __construct()
    {
        $this->init();
    }

    public function init()
    {
        $this->add_hooks();
        $this->add_theme_supports();
    }

    public function add_theme_supports()
    {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support(
            'custom-logo',
            array(
                'height' => 52,
                'width' => 117,
                'flex-width' => true,
                'flex-height' => true,
            )
        );
    }

    public function add_hooks()
    {
        // Removed P tag on a contact form 7
        add_filter('wpcf7_autop_or_not', '__return_false');
        add_action('wp_enqueue_scripts', [$this, 'disable_unused_styles']);
        add_action('wp_enqueue_scripts', [$this, 'enqueue_scripts'], 100);
        add_filter('wpcf7_form_elements', function ($content) {
            $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

            return $content;
        });
    }

    public function disable_unused_styles()
    {
        wp_dequeue_style('wp-block-library'); // WordPress core
        wp_dequeue_style('wp-block-library-theme'); // WordPress core
        wp_dequeue_style('storefront-gutenberg-blocks'); // Storefront theme
    }

    public function enqueue_scripts()
    {
        wp_enqueue_style('aos-style', get_template_directory_uri() . '/assets/css/plugins/aos.css', array(), date("ymd-Gis"));
        wp_enqueue_style('font-style', get_template_directory_uri() . '/assets/css/fonts.css', array(), date("ymd-Gis"));
        wp_enqueue_style('theme-style', get_template_directory_uri() . '/theme_styles.css', array(), date("ymd-Gis"));
        wp_enqueue_style('slick-style', get_template_directory_uri() . '/assets/css/plugins/slick.css', array(), date("ymd-Gis"));
        wp_enqueue_style('slick-theme', get_template_directory_uri() . '/assets/css/plugins/slick-theme.css', array(), date("ymd-Gis"));

        if (is_front_page()) {
            $rel_path = '/assets/css/home.css';
            $dir = get_template_directory() . $rel_path;
            $uri = get_template_directory_uri() . $rel_path;
            $version = date("ymd-Gis", filemtime($dir));
            wp_enqueue_style('home', $uri, array(), $version);
        } elseif (is_post_type_archive('case_studies')) {
            wp_enqueue_style('case-study', get_template_directory_uri() . '/assets/css/case-study.css', array(), date("ymd-Gis"));

        } elseif (is_single()) {
            wp_enqueue_style('case-study', get_template_directory_uri() . '/assets/css/case-study.css', array(), date("ymd-Gis"));

        } elseif (is_404()) {
            wp_enqueue_style('blog-archive', get_template_directory_uri() . '/assets/css/how-it-works.css', array(), date("ymd-Gis"));
        } else {

            $post = get_post();
            $page_styles = $this->page_styles;

            if ($post->post_name && array_key_exists($post->post_name, $page_styles)) {
                $post_name = $post->post_name;
                $css_file = $page_styles[$post_name];
                $rel_path = '/assets/css/' . $css_file . '.css';
                $dir = get_template_directory() . $rel_path;
                $uri = get_template_directory_uri() . $rel_path;
                $version = date("ymd-Gis", filemtime($dir));
                wp_enqueue_style($post_name, $uri, array(), $version);
            }
            if (is_home()) {
                wp_enqueue_style('blog-archive', get_template_directory_uri() . '/assets/css/blog-archive.css', array(), 1.1);
            }
            if (is_single()) {
                wp_enqueue_style('blog-single', get_template_directory_uri() . '/assets/css/blog-single.css', array(), 1.1);
            }
            if (is_page('contact-us')) {
                wp_enqueue_script('iframe-script', get_template_directory_uri() . '/assets/js/iframe-resize.js', array(), date("ymd-Gis"), true);
            }
        };

        wp_enqueue_script("jquery");
        wp_enqueue_script('slick-script', get_template_directory_uri() . '/assets/js/slick.min.js', array(), date("ymd-Gis"), true);
        wp_enqueue_script('aos-script', get_template_directory_uri() . '/assets/js/aos.js', array(), date("ymd-Gis"), true);
        wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/main.js', array(), date("ymd-Gis"), true);
    }
}

// Initiate class
new PatricTheme();



function register_my_menus()
{
    register_nav_menu('primary-menu', __('Primary Menu'));
    register_nav_menu('footer-menu-1', __('Footer Menu 1'));
    register_nav_menu('footer-menu-2', __('Footer Menu 2'));
    register_nav_menu('footer-menu-3', __('Footer Menu 3'));
}
add_action('after_setup_theme', 'register_my_menus');


add_filter('oembed_response_data', 'disable_embeds_filter_oembed_response_data_');
function disable_embeds_filter_oembed_response_data_($data)
{
    unset($data['author_url']);
    unset($data['author_name']);
    return $data;
}


function create_case_studies_post_type()
{
    $labels = array(
        'name'                  => _x('Case Studies', 'Post type general name', 'textdomain'),
        'singular_name'         => _x('Case Study', 'Post type singular name', 'textdomain'),
        'menu_name'             => __('Case Studies', 'textdomain'),
        'name_admin_bar'        => __('Case Study', 'textdomain'),
        'add_new'               => __('Add New', 'textdomain'),
        'add_new_item'          => __('Add New Case Study', 'textdomain'),
        'new_item'              => __('New Case Study', 'textdomain'),
        'edit_item'             => __('Edit Case Study', 'textdomain'),
        'view_item'             => __('View Case Study', 'textdomain'),
        'all_items'             => __('All Case Studies', 'textdomain'),
        'search_items'          => __('Search Case Studies', 'textdomain'),
        'not_found'             => __('No case studies found.', 'textdomain'),
        'not_found_in_trash'    => __('No case studies found in Trash.', 'textdomain'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'case-study', 'with_front' => false),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'menu_icon'          => 'dashicons-portfolio',
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'show_in_rest'       => true,
    );

    register_post_type('case_studies', $args);
}
add_action('init', 'create_case_studies_post_type');
