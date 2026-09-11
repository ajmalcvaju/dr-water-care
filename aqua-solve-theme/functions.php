<?php
/**
 * Aqua Solve Water Clinic Theme Functions & Definitions
 *
 * @package Aqua_Solve
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/**
 * 1. Theme Setup
 */
function aqua_solve_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'height'      => 90,
        'width'       => 280,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    register_nav_menus(array(
        'primary' => __('Primary Navigation Menu', 'aqua-solve'),
        'footer'  => __('Footer Navigation Links', 'aqua-solve'),
    ));
}
add_action('after_setup_theme', 'aqua_solve_theme_setup');

/**
 * 2. Enqueue Styles & Scripts
 */
function aqua_solve_enqueue_assets() {
    // Google Fonts
    wp_enqueue_style(
        'aqua-solve-google-fonts',
        'https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Poppins:wght@300;400;500;600;700&display=swap',
        array(),
        null
    );

    // Theme Main Stylesheet
    wp_enqueue_style('aqua-solve-style', get_stylesheet_uri(), array(), '1.0.0');

    // Theme JavaScript
    wp_enqueue_script(
        'aqua-solve-script',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'aqua_solve_enqueue_assets');

/**
 * 3. Custom Post Types: Products & Services
 */
function aqua_solve_register_cpts() {
    // Custom Post Type: Products
    $product_labels = array(
        'name'               => _x('Products', 'Post Type General Name', 'aqua-solve'),
        'singular_name'      => _x('Product', 'Post Type Singular Name', 'aqua-solve'),
        'menu_name'          => __('Products', 'aqua-solve'),
        'all_items'          => __('All Products', 'aqua-solve'),
        'add_new_item'       => __('Add New Product', 'aqua-solve'),
        'edit_item'          => __('Edit Product', 'aqua-solve'),
        'new_item'           => __('New Product', 'aqua-solve'),
        'view_item'          => __('View Product', 'aqua-solve'),
        'search_items'       => __('Search Products', 'aqua-solve'),
    );
    $product_args = array(
        'label'               => __('Product', 'aqua-solve'),
        'labels'              => $product_labels,
        'supports'            => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'public'              => true,
        'has_archive'         => true,
        'rewrite'             => array('slug' => 'products-catalog'),
        'menu_icon'           => 'dashicons-cart',
        'show_in_rest'        => true,
    );
    register_post_type('product', $product_args);

    // Custom Post Type: Services
    $service_labels = array(
        'name'               => _x('Services', 'Post Type General Name', 'aqua-solve'),
        'singular_name'      => _x('Service', 'Post Type Singular Name', 'aqua-solve'),
        'menu_name'          => __('Services & Lab', 'aqua-solve'),
        'all_items'          => __('All Services', 'aqua-solve'),
        'add_new_item'       => __('Add New Service', 'aqua-solve'),
        'edit_item'          => __('Edit Service', 'aqua-solve'),
        'new_item'           => __('New Service', 'aqua-solve'),
        'view_item'          => __('View Service', 'aqua-solve'),
        'search_items'       => __('Search Services', 'aqua-solve'),
    );
    $service_args = array(
        'label'               => __('Service', 'aqua-solve'),
        'labels'              => $service_labels,
        'supports'            => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'public'              => true,
        'has_archive'         => true,
        'rewrite'             => array('slug' => 'services-list'),
        'menu_icon'           => 'dashicons-admin-tools',
        'show_in_rest'        => true,
    );
    register_post_type('service', $service_args);
}
add_action('init', 'aqua_solve_register_cpts');

/**
 * 4. Auto-Create Required Website Pages & Flush Rewrite Rules
 */
function aqua_solve_auto_create_pages() {
    $pages = array(
        'about' => array(
            'title'    => 'About Us',
            'template' => 'page-about.php'
        ),
        'services' => array(
            'title'    => 'Solutions',
            'template' => 'page-services.php'
        ),
        'solutions' => array(
            'title'    => 'Solutions',
            'template' => 'page-services.php'
        ),
        'technology' => array(
            'title'    => 'Technology',
            'template' => 'page-biozone.php'
        ),
        'biozone-technology' => array(
            'title'    => 'BioZone Technology',
            'template' => 'page-biozone.php'
        ),
        'industries' => array(
            'title'    => 'Industries We Serve',
            'template' => 'page-industries.php'
        ),
        'projects' => array(
            'title'    => 'Projects Showcase',
            'template' => 'page-projects.php'
        ),
        'knowledge-center' => array(
            'title'    => 'Knowledge Center',
            'template' => 'page-knowledge.php'
        ),
        'contact' => array(
            'title'    => 'Contact Us',
            'template' => 'page-contact.php'
        ),
        'products' => array(
            'title'    => 'Products Catalog',
            'template' => 'page-products.php'
        ),
    );

    foreach ($pages as $slug => $page_info) {
        $existing = get_page_by_path($slug);
        if (!$existing) {
            $page_id = wp_insert_post(array(
                'post_title'   => $page_info['title'],
                'post_name'    => $slug,
                'post_status'  => 'publish',
                'post_type'    => 'page',
                'post_content' => ''
            ));
            if ($page_id && !is_wp_error($page_id)) {
                update_post_meta($page_id, '_wp_page_template', $page_info['template']);
            }
        } else {
            update_post_meta($existing->ID, '_wp_page_template', $page_info['template']);
        }
    }
}
add_action('after_switch_theme', function() {
    aqua_solve_auto_create_pages();
    flush_rewrite_rules();
});
add_action('init', 'aqua_solve_auto_create_pages');

/**
 * 5. Page URL Helper Function
 */
function aqua_solve_page_url($slug) {
    if ($slug === 'solutions' || $slug === 'services') {
        $page = get_page_by_path('solutions');
        if (!$page) {
            $page = get_page_by_path('services');
        }
        if ($page) {
            return get_permalink($page->ID);
        }
        return home_url('/solutions/');
    }
    $page = get_page_by_path($slug);
    if ($page) {
        return get_permalink($page->ID);
    }
    return home_url('/' . ltrim($slug, '/') . '/');
}

/**
 * 6. Helper Function to Get ACF Field or Post Meta with Fallback
 */
function get_as_field($field_name, $post_id = null, $default = '') {
    if (function_exists('get_field')) {
        $val = get_field($field_name, $post_id);
        if ($val !== null && $val !== false && $val !== '') {
            return $val;
        }
    }
    
    if (!$post_id) {
        $post_id = get_the_ID();
    }
    
    if ($post_id) {
        $meta_val = get_post_meta($post_id, $field_name, true);
        if ($meta_val !== '' && $meta_val !== false) {
            return $meta_val;
        }
    }
    
    return $default;
}

/**
 * 7. Dynamic Navigation Walker Class for Header
 */
class Aqua_Solve_Nav_Walker extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $active_class = in_array('current-menu-item', $classes) || in_array('current_page_item', $classes) ? 'active' : '';
        
        $output .= '<li>';
        $output .= '<a href="' . esc_url($item->url) . '" class="' . esc_attr($active_class) . '">';
        $output .= esc_html($item->title);
        $output .= '</a>';
    }
}

/**
 * 8. Asset URL Helper Function
 */
function aqua_solve_asset($path) {
    return get_template_directory_uri() . '/assets/' . ltrim($path, '/');
}

/**
 * 9. Helper Function to Get Product Detail URL by Slug
 */
function aqua_solve_product_url($slug) {
    $post = get_page_by_path($slug, OBJECT, 'product');
    if ($post) {
        return get_permalink($post->ID);
    }
    return aqua_solve_page_url('products');
}

/**
 * 10. Auto-Create Initial Sample Products if none exist
 */
function aqua_solve_auto_create_sample_products() {
    $products = array(
        array(
            'title'    => 'Puroaqua Dual Mode (Black)',
            'slug'     => 'puroaqua-dual-mode-black',
            'desc'     => '6-Stage Advanced Purification system featuring dual-mode filtration. Mode 1 (RO+UF+ALK) for high TDS well water, Mode 2 (SN+UF+ALK) for tap water.',
            'tag'      => 'Dual Mode',
            'category' => 'domestic',
            'price'    => '₹14,500',
            'img'      => 'product_puroaqua_black.jpg'
        ),
        array(
            'title'    => 'Puroaqua Dual Mode (White)',
            'slug'     => 'puroaqua-dual-mode-white',
            'desc'     => '6-Stage Advanced Purification system featuring dual-mode filtration. Mode 1 (RO+UF+ALK) for high TDS well water, Mode 2 (SN+UF+ALK) for tap water.',
            'tag'      => 'Dual Mode',
            'category' => 'domestic',
            'price'    => '₹14,500',
            'img'      => 'product_puroaqua_white.jpg'
        ),
        array(
            'title'    => 'Aqua Solve Carbon Filter',
            'slug'     => 'aqua-solve-carbon-filter',
            'desc'     => 'High-grade activated carbon filter. Adsorbs chlorine, organic pesticides, bad taste, odor, and chemical impurities from supply water.',
            'tag'      => 'Carbon Filter',
            'category' => 'filters',
            'price'    => '₹30,000',
            'img'      => 'product_frp_vessel.png'
        ),
        array(
            'title'    => 'Aqua Solve Sediment Filter',
            'slug'     => 'aqua-solve-sediment-filter',
            'desc'     => 'Premium heavy-duty sand and sediment media filter vessel. Removes dust, silt, clay, mud, and all suspended particles from incoming water supply.',
            'tag'      => 'Sediment Filter',
            'category' => 'filters',
            'price'    => '₹28,000',
            'img'      => 'product_frp_vessel.png'
        ),
        array(
            'title'    => 'Aqua Solve Iron Remover Filter',
            'slug'     => 'aqua-solve-iron-remover-filter',
            'desc'     => 'Specialized catalytic manganese dioxide media filter. Oxidizes and filters dissolved ferrous iron, manganese, and sulphur odor.',
            'tag'      => 'Iron Remover',
            'category' => 'filters',
            'price'    => '₹29,000',
            'img'      => 'product_frp_vessel.png'
        ),
        array(
            'title'    => 'Aqua Solve Commercial RO Treatment Plant',
            'slug'     => 'aqua-solve-commercial-ro-plant',
            'desc'     => 'Industrial configuration featuring multiple filters, high pressure pumps, and large scale outputs for commercial applications.',
            'tag'      => 'Heavy Duty',
            'category' => 'plants',
            'price'    => 'Get Quote',
            'img'      => 'product_commercial_ro.png'
        ),
        array(
            'title'    => 'Aqua Solve Sewage Treatment Plant (STP)',
            'slug'     => 'aqua-solve-sewage-treatment-plant',
            'desc'     => 'Industrial and commercial STP plants engineered to treat domestic sewage efficiently using MBR/MBBR technology.',
            'tag'      => 'Sewage Treatment',
            'category' => 'plants',
            'price'    => 'Get Quote',
            'img'      => 'stp_plant.png'
        ),
        array(
            'title'    => 'Aqua Solve Effluent Treatment Plant (ETP)',
            'slug'     => 'aqua-solve-effluent-treatment-plant',
            'desc'     => 'Advanced industrial wastewater treatment setup designed for factories and manufacturing plants with ZLD recovery.',
            'tag'      => 'Effluent Treatment',
            'category' => 'plants',
            'price'    => 'Get Quote',
            'img'      => 'etp_plant.png'
        ),
    );

    foreach ($products as $p) {
        $existing = get_page_by_path($p['slug'], OBJECT, 'product');
        if (!$existing) {
            $post_id = wp_insert_post(array(
                'post_title'   => $p['title'],
                'post_name'    => $p['slug'],
                'post_content' => $p['desc'],
                'post_excerpt' => $p['desc'],
                'post_status'  => 'publish',
                'post_type'    => 'product',
            ));
            if ($post_id && !is_wp_error($post_id)) {
                update_post_meta($post_id, 'tag', $p['tag']);
                update_post_meta($post_id, 'category', $p['category']);
                update_post_meta($post_id, 'price', $p['price']);
                update_post_meta($post_id, 'image_file', $p['img']);
            }
        } else {
            update_post_meta($existing->ID, 'image_file', $p['img']);
        }
    }
}
add_action('after_switch_theme', function() {
    aqua_solve_auto_create_sample_products();
    aqua_solve_auto_create_sample_services();
    flush_rewrite_rules();
});
add_action('init', 'aqua_solve_auto_create_sample_products', 20);

/**
 * 11. Helper Function to Get Service Detail URL by Slug
 */
function aqua_solve_service_url($slug) {
    $post = get_page_by_path($slug, OBJECT, 'service');
    if ($post) {
        return get_permalink($post->ID);
    }
    return aqua_solve_page_url('solutions');
}

/**
 * 12. Auto-Create Initial Sample Services if none exist
 */
function aqua_solve_auto_create_sample_services() {
    $services = array(
        array(
            'title'    => 'Domestic & Commercial Water Purifiers',
            'slug'     => 'water-purifier',
            'subtitle' => 'Advanced 6-Stage RO + UF + Alkaline purification systems built for Kerala well water.',
            'desc'     => 'Our water purifiers combine Multi-Stage Reverse Osmosis (RO), Ultrafiltration (UF), and Alkaline pH balance technology. Designed specifically to handle heavy TDS, iron content, and bacterial impurities commonly found in well water and corporation supply lines throughout Kerala.',
            'tag'      => 'WATER PURIFIER',
            'tagClass' => 'tag-purifier',
            'badge'    => 'ISO 9001:2015 Certified System'
        ),
        array(
            'title'    => 'Water Treatment Plant (WTP)',
            'slug'     => 'water-treatment-plant-wtp',
            'subtitle' => 'Comprehensive raw water filtration, iron removal, and softening facilities for commercial campuses.',
            'desc'     => 'Water Treatment Plants (WTP) are engineered to process turbid, hard, or chemically contaminated water into pure potable quality. Includes Multi-Media Sand Filters, Catalytic Iron Removers, Activated Carbon Pressure Vessels, and Automatic Water Softeners.',
            'tag'      => 'WTP PLANT',
            'tagClass' => 'tag-wtp',
            'badge'    => 'KSPCB & IS 10500 Compliant'
        ),
        array(
            'title'    => 'Sewage Treatment Plant (STP)',
            'slug'     => 'sewage-treatment-plant-stp',
            'subtitle' => 'Eco-friendly MBBR & MBR biological sewage processing facilities for apartments, hotels, and hospitals.',
            'desc'     => 'Sewage Treatment Plants (STP) recycle domestic grey and black wastewater into clear non-potable water suitable for flushing, gardening, and cooling towers. Designed using advanced Moving Bed Biofilm Reactor (MBBR) and Membrane Bioreactor (MBR) technologies.',
            'tag'      => 'STP PLANT',
            'tagClass' => 'tag-stp',
            'badge'    => 'Pollution Control Board Approved'
        ),
        array(
            'title'    => 'Commercial & Industrial RO Plants',
            'slug'     => 'ro-plant-commercial-industrial',
            'subtitle' => 'High-capacity reverse osmosis systems engineered with multi-stage pre-filtration, high-pressure pumps, and SS 304 skid frames.',
            'desc'     => 'Our Commercial and Industrial Reverse Osmosis (RO) plants are engineered to purify high TDS water for hotels, hospitals, industrial manufacturing, and institutions. Designed with multi-stage pre-filtration, high-pressure pumps, membrane pressure vessels, and automated control systems.',
            'tag'      => 'RO & WTP PLANTS',
            'tagClass' => 'tag-wtp',
            'badge'    => 'IS 10500 Compliant RO System'
        ),
        array(
            'title'    => 'Effluent Treatment Plant (ETP)',
            'slug'     => 'effluent-treatment-plant-etp',
            'subtitle' => 'High-capacity industrial chemical wastewater purification with Zero Liquid Discharge (ZLD).',
            'desc'     => 'Effluent Treatment Plants (ETP) treat complex toxic wastewater discharged by manufacturing units, chemical processing plants, textile mills, and food industries. Meets stringent environmental norms with high COD/BOD reduction efficiency.',
            'tag'      => 'ETP PLANT',
            'tagClass' => 'tag-etp',
            'badge'    => 'Zero Liquid Discharge (ZLD) Ready'
        ),
    );

    foreach ($services as $s) {
        $existing = get_page_by_path($s['slug'], OBJECT, 'service');
        if (!$existing) {
            $post_id = wp_insert_post(array(
                'post_title'   => $s['title'],
                'post_name'    => $s['slug'],
                'post_content' => $s['desc'],
                'post_excerpt' => $s['subtitle'],
                'post_status'  => 'publish',
                'post_type'    => 'service',
            ));
            if ($post_id && !is_wp_error($post_id)) {
                update_post_meta($post_id, 'tag', $s['tag']);
                update_post_meta($post_id, 'tagClass', $s['tagClass']);
                update_post_meta($post_id, 'subtitle', $s['subtitle']);
                update_post_meta($post_id, 'description', $s['desc']);
                update_post_meta($post_id, 'badge', $s['badge']);
            }
        }
    }
}
add_action('init', 'aqua_solve_auto_create_sample_services', 25);

/**
 * ==========================================================================
 * 13. 10/10 SEO OPTIMIZATION MODULE FOR COMMERCIAL & INDUSTRIAL WATER TREATMENT
 * ==========================================================================
 */

/**
 * Filter Document Title for targeted Commercial & Industrial B2B Search Keywords
 */
function aqua_solve_custom_seo_title($title) {
    if (is_front_page() || is_home()) {
        return 'AquaSolve Water Clinic | Commercial & Industrial Water Treatment Plants';
    }
    if (is_page('about')) {
        return 'About AquaSolve Water Clinic | Commercial & Industrial Water Treatment Engineers';
    }
    if (is_page('solutions') || is_page('services')) {
        return 'Commercial & Industrial Water Treatment Solutions | STP, ETP, RO Plants';
    }
    if (is_page('biozone-technology') || is_page('technology')) {
        return 'BioZone Technology | Compact Biological Wastewater Treatment Plants';
    }
    if (is_page('industries')) {
        return 'Industrial & Commercial Water Treatment Application Sectors | AquaSolve';
    }
    if (is_page('projects')) {
        return 'Commercial & Industrial Water Treatment Turnkey Projects | AquaSolve';
    }
    if (is_page('knowledge-center') || is_page('knowledge')) {
        return 'Water & Wastewater Engineering Knowledge Center | AquaSolve Water Clinic';
    }
    if (is_page('contact')) {
        return 'Contact AquaSolve Water Clinic | Commercial Water Treatment Engineers';
    }
    if (is_singular('service')) {
        return get_the_title() . ' | Commercial & Industrial Water Treatment | AquaSolve';
    }
    if (is_singular('product')) {
        return get_the_title() . ' | Commercial & Industrial Water Purification | AquaSolve';
    }
    return $title;
}
add_filter('pre_get_document_title', 'aqua_solve_custom_seo_title', 100);

/**
 * Inject 10/10 SEO Meta Tags, OpenGraph, Twitter Cards, Geo Tags & Schema.org JSON-LD
 */
function aqua_solve_seo_meta_tags() {
    $site_name = 'AquaSolve Water Clinic';
    $default_desc = 'AquaSolve Water Clinic is an ISO 9001:2015 certified engineering company specializing in Commercial & Industrial Water Treatment Plants, Sewage Treatment Plants (STP), Effluent Treatment Plants (ETP), Industrial Reverse Osmosis (RO), and BioZone biological wastewater recovery systems.';
    $default_image = aqua_solve_asset('images/product_commercial_ro.png');
    
    $desc = $default_desc;
    $title = wp_get_document_title();
    $url = get_permalink();
    
    if (is_front_page() || is_home()) {
        $url = home_url('/');
        $desc = 'AquaSolve Water Clinic is a leading manufacturer of Commercial & Industrial Water Treatment Plants in Kerala. Turnkey STP, ETP, Industrial RO Plants & BioZone Technology.';
    } elseif (is_page('about')) {
        $desc = 'AquaSolve Water Clinic is an ISO 9001:2015 certified commercial & industrial water treatment engineering company established in 2015 in Kozhikode, Kerala.';
    } elseif (is_page('solutions') || is_page('services')) {
        $desc = 'Explore turnkey commercial and industrial water treatment solutions: High-capacity RO Plants, Sewage Treatment Plants (STP), Effluent Treatment Plants (ETP), and BioZone Technology.';
    } elseif (is_page('biozone-technology')) {
        $desc = 'BioZone Technology by AquaSolve Water Clinic: Compact biological STP & ETP wastewater treatment featuring reduced civil footprint, ON/OFF operational flexibility, and low power draw.';
    } elseif (is_page('industries')) {
        $desc = 'Custom water treatment engineering for hospitality, healthcare, manufacturing, residential, and educational commercial & industrial sectors across South India.';
    } elseif (is_page('projects')) {
        $desc = 'View AquaSolve Water Clinic\'s portfolio of completed turnkey commercial and industrial water treatment projects, STPs, ETPs, and RO plants across Kerala.';
    } elseif (is_page('knowledge-center') || is_page('knowledge')) {
        $desc = 'Technical engineering guides, water chemistry analysis, membrane separation principles, and wastewater management standards authored by AquaSolve Water Clinic.';
    } elseif (is_singular()) {
        $excerpt = get_the_excerpt();
        if ($excerpt) {
            $desc = esc_attr(wp_strip_all_tags($excerpt));
        }
        if (has_post_thumbnail()) {
            $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
            if ($thumb) {
                $default_image = $thumb[0];
            }
        }
    }

    echo '<!-- 10/10 SEO Meta Tags -->' . "\n";
    echo '<meta name="description" content="' . esc_attr($desc) . '" />' . "\n";
    echo '<meta name="keywords" content="Commercial Water Treatment Plant, Industrial Water Treatment Plant, Sewage Treatment Plant Kerala, STP Plant Manufacturer, Effluent Treatment Plant ETP, Industrial RO Plant, BioZone Technology, Water Softener Commercial, Zero Liquid Discharge ZLD, AquaSolve Water Clinic Kozhikode" />' . "\n";
    echo '<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />' . "\n";
    echo '<link rel="canonical" href="' . esc_url($url) . '" />' . "\n";
    
    // Geo Local SEO Meta Tags
    echo '<meta name="geo.region" content="IN-KL" />' . "\n";
    echo '<meta name="geo.placename" content="Thamarassery, Kozhikode" />' . "\n";
    echo '<meta name="geo.position" content="11.4154;75.9348" />' . "\n";
    echo '<meta name="ICBM" content="11.4154, 75.9348" />' . "\n";
    
    // Open Graph Social Meta Tags
    echo '<meta property="og:locale" content="en_US" />' . "\n";
    echo '<meta property="og:type" content="website" />' . "\n";
    echo '<meta property="og:title" content="' . esc_attr($title) . '" />' . "\n";
    echo '<meta property="og:description" content="' . esc_attr($desc) . '" />' . "\n";
    echo '<meta property="og:url" content="' . esc_url($url) . '" />' . "\n";
    echo '<meta property="og:site_name" content="' . esc_attr($site_name) . '" />' . "\n";
    echo '<meta property="og:image" content="' . esc_url($default_image) . '" />' . "\n";
    echo '<meta property="og:image:width" content="1200" />' . "\n";
    echo '<meta property="og:image:height" content="630" />' . "\n";
    
    // Twitter Cards Meta Tags
    echo '<meta name="twitter:card" content="summary_large_image" />' . "\n";
    echo '<meta name="twitter:title" content="' . esc_attr($title) . '" />' . "\n";
    echo '<meta name="twitter:description" content="' . esc_attr($desc) . '" />' . "\n";
    echo '<meta name="twitter:image" content="' . esc_url($default_image) . '" />' . "\n";

    // JSON-LD Structured Data Schema.org
    $schema = array(
        '@context' => 'https://schema.org',
        '@graph'   => array(
            array(
                '@type'            => array('LocalBusiness', 'ProfessionalService', 'Organization'),
                '@id'              => home_url('/#organization'),
                'name'             => 'AquaSolve Water Clinic',
                'alternateName'    => 'AquaSolve Commercial & Industrial Water Treatment',
                'url'              => home_url('/'),
                'logo'             => aqua_solve_asset('images/aqua_solve.png'),
                'image'            => aqua_solve_asset('images/product_commercial_ro.png'),
                'description'      => 'ISO 9001:2015 Certified engineering company specializing in Commercial & Industrial Water Treatment Plants, Sewage Treatment Plants (STP), Effluent Treatment Plants (ETP), Industrial Reverse Osmosis (RO), and BioZone biological wastewater recovery systems.',
                'telephone'        => array('+919946450452', '+919846253025'),
                'email'            => 'info@aquasolvewater.com',
                'address'          => array(
                    '@type'           => 'PostalAddress',
                    'streetAddress'   => 'Thamarassery',
                    'addressLocality'  => 'Kozhikode',
                    'addressRegion'    => 'Kerala',
                    'postalCode'      => '673573',
                    'addressCountry'   => 'IN'
                ),
                'geo'              => array(
                    '@type'     => 'GeoCoordinates',
                    'latitude'  => 11.4154,
                    'longitude' => 75.9348
                ),
                'priceRange'       => '₹₹₹',
                'openingHoursSpecification' => array(
                    '@type'     => 'OpeningHoursSpecification',
                    'dayOfWeek' => array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'),
                    'opens'     => '09:00',
                    'closes'    => '18:00'
                ),
                'hasOfferCatalog'  => array(
                    '@type'         => 'OfferCatalog',
                    'name'          => 'Commercial & Industrial Water Treatment Solutions',
                    'itemListElement' => array(
                        array(
                            '@type' => 'Offer',
                            'itemOffered' => array(
                                '@type' => 'Service',
                                'name'  => 'Commercial & Industrial Reverse Osmosis (RO) Plants',
                                'description' => 'High-capacity RO plants engineered with multi-stage pre-filtration for commercial and manufacturing facilities.'
                            )
                        ),
                        array(
                            '@type' => 'Offer',
                            'itemOffered' => array(
                                '@type' => 'Service',
                                'name'  => 'Sewage Treatment Plants (STP)',
                                'description' => 'Turnkey MBBR and MBR biological sewage treatment facilities for commercial complexes, apartments, and hotels.'
                            )
                        ),
                        array(
                            '@type' => 'Offer',
                            'itemOffered' => array(
                                '@type' => 'Service',
                                'name'  => 'Effluent Treatment Plants (ETP) & ZLD',
                                'description' => 'Industrial wastewater treatment plants with chemical coagulation and Zero Liquid Discharge configurations.'
                            )
                        ),
                        array(
                            '@type' => 'Offer',
                            'itemOffered' => array(
                                '@type' => 'Service',
                                'name'  => 'BioZone Biological Treatment Technology',
                                'description' => 'Specialized compact STP & ETP technology featuring reduced civil footprint, ON/OFF operational flexibility, and low power draw.'
                            )
                        )
                    )
                )
            ),
            array(
                '@type'           => 'WebSite',
                '@id'             => home_url('/#website'),
                'url'             => home_url('/'),
                'name'            => 'AquaSolve Water Clinic',
                'publisher'       => array(
                    '@id' => home_url('/#organization')
                )
            )
        )
    );

    echo '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>' . "\n";
}
add_action('wp_head', 'aqua_solve_seo_meta_tags', 1);

/**
 * Dynamic robots.txt with sitemap reference for search engine crawlers
 */
function aqua_solve_custom_robots_txt($output, $public) {
    $output .= "User-agent: *\n";
    $output .= "Allow: /\n";
    $output .= "Sitemap: " . esc_url(home_url('/wp-sitemap.xml')) . "\n";
    return $output;
}
add_filter('robots_txt', 'aqua_solve_custom_robots_txt', 10, 2);



