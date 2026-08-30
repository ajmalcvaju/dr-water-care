<?php
/**
 * Template Name: Products Page
 *
 * @package Aqua_Solve
 */

get_header();
?>

<!-- ==========================================================================
     PAGE BANNER
     ========================================================================== -->
<section class="page-banner" aria-label="Product catalog page introduction">
    <div class="container">
        <h1>Our Premium Products</h1>
        <p>Advanced purification mechanisms tailored for high performance under local water conditions.</p>
    </div>
    
    <svg class="banner-wave" viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 32L60 48C120 64 240 96 360 101.3C480 107 600 85 720 69.3C840 53 960 43 1080 42.7C1200 43 1320 53 1380 58.7L1440 64V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0V32Z" fill="#FFF"/>
    </svg>

    <div class="banner-decorations">
        <div class="bubble bubble-1"></div>
        <div class="bubble bubble-2"></div>
        <div class="bubble bubble-3"></div>
    </div>
</section>

<!-- ==========================================================================
     PRODUCTS SHOWCASE & FILTERS
     ========================================================================== -->
<section class="section">
    <div class="container">
        
        <!-- Filter Tabs -->
        <div class="product-filters animate-on-scroll">
            <button class="filter-btn active" data-filter="all">All Products</button>
            <button class="filter-btn" data-filter="domestic">Domestic Purifiers</button>
            <button class="filter-btn" data-filter="filters">Water Filters</button>
            <button class="filter-btn" data-filter="plants">Treatment Plants</button>
        </div>

        <!-- Products Catalog Grid -->
        <div class="products-grid" style="min-height: 400px;">
            
            <?php
            $args = array(
                'post_type'      => 'product',
                'posts_per_page' => -1,
                'orderby'        => 'date',
                'order'          => 'ASC'
            );
            $product_query = new WP_Query($args);

            if ($product_query->have_posts()) :
                while ($product_query->have_posts()) : $product_query->the_post();
                    $tag = get_as_field('tag', get_the_ID(), 'Water System');
                    $category = get_as_field('category', get_the_ID(), 'domestic');
                    $price = get_as_field('price', get_the_ID(), '');
                    $desc = get_the_excerpt() ? get_the_excerpt() : get_as_field('desc', get_the_ID(), get_the_title());
                    $img = get_the_post_thumbnail_url(get_the_ID(), 'large');
                    if (!$img) {
                        $meta_img = get_post_meta(get_the_ID(), 'image_file', true);
                        if ($meta_img) {
                            $img = aqua_solve_asset('images/' . $meta_img);
                        } else {
                            $slug = get_post_field('post_name', get_the_ID());
                            if (strpos($slug, 'puroaqua-dual-mode-black') !== false) {
                                $img = aqua_solve_asset('images/product_puroaqua_black.jpg');
                            } elseif (strpos($slug, 'puroaqua-dual-mode-white') !== false) {
                                $img = aqua_solve_asset('images/product_puroaqua_white.jpg');
                            } elseif (strpos($slug, 'commercial-ro') !== false) {
                                $img = aqua_solve_asset('images/product_commercial_ro.png');
                            } elseif (strpos($slug, 'sewage-treatment') !== false) {
                                $img = aqua_solve_asset('images/stp_plant.png');
                            } elseif (strpos($slug, 'effluent-treatment') !== false) {
                                $img = aqua_solve_asset('images/etp_plant.png');
                            } elseif (strpos($slug, 'filter') !== false || strpos($slug, 'vessel') !== false) {
                                $img = aqua_solve_asset('images/product_frp_vessel.png');
                            } else {
                                $img = aqua_solve_asset('images/product_puroaqua_black.jpg');
                            }
                        }
                    }
            ?>
                    <a href="<?php the_permalink(); ?>" class="product-card-link animate-on-scroll" data-category="<?php echo esc_attr($category); ?>">
                        <div class="product-card" data-category="<?php echo esc_attr($category); ?>">
                            <div class="product-image-area">
                                <span class="product-tag"><?php echo esc_html($tag); ?></span>
                                <img src="<?php echo esc_url($img); ?>" alt="<?php the_title_attribute(); ?>" class="product-image" />
                            </div>
                            <div class="product-info">
                                <h3><?php the_title(); ?></h3>
                                <p style="font-size: 0.85rem; color: var(--text-light);"><?php echo esc_html($desc); ?></p>
                                <div class="product-footer">
                                    <?php if ($price): ?>
                                        <span class="product-price"><?php echo esc_html($price); ?></span>
                                    <?php else: ?>
                                        <span class="product-price">Get Quote</span>
                                    <?php endif; ?>
                                    <span class="btn btn-primary btn-card trigger-quote" data-product="<?php the_title_attribute(); ?>">
                                        Enquire Now
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                // Default static catalog list matching Next.js
                $productsList = array(
                    array('id' => '6', 'slug' => 'aqua-solve-sediment-filter', 'title' => 'Aqua Solve Sediment Filter', 'category' => 'filters', 'tag' => 'Sediment Filter', 'price' => '₹28,000', 'desc' => 'Premium heavy-duty sand and sediment media filter vessel. Removes dust, silt, clay, mud, and all suspended particles from incoming water supply.', 'img' => aqua_solve_asset('images/product_frp_vessel.png')),
                    array('id' => '11', 'slug' => 'aqua-solve-iron-remover-filter', 'title' => 'Aqua Solve Iron Remover Filter', 'category' => 'filters', 'tag' => 'Iron Remover', 'price' => '₹29,000', 'desc' => 'Specialized catalytic manganese dioxide media filter. Oxidizes and filters dissolved ferrous iron, manganese, and sulphur odor.', 'img' => aqua_solve_asset('images/product_frp_vessel.png')),
                    array('id' => '12', 'slug' => 'aqua-solve-carbon-filter', 'title' => 'Aqua Solve Carbon Filter', 'category' => 'filters', 'tag' => 'Carbon Filter', 'price' => '₹30,000', 'desc' => 'High-grade activated carbon filter. Adsorbs chlorine, organic pesticides, bad taste, odor, and chemical impurities from supply water.', 'img' => aqua_solve_asset('images/product_frp_vessel.png')),
                    array('id' => '9', 'slug' => 'puroaqua-dual-mode-black', 'title' => 'Puroaqua Dual Mode (Black)', 'category' => 'domestic', 'tag' => 'Dual Mode', 'price' => '₹14,500', 'desc' => '6-Stage Advanced Purification system featuring dual-mode filtration. Mode 1 (RO+UF+ALK) for high TDS well water, Mode 2 (SN+UF+ALK) for tap water.', 'img' => aqua_solve_asset('images/product_puroaqua_black.jpg')),
                    array('id' => '10', 'slug' => 'puroaqua-dual-mode-white', 'title' => 'Puroaqua Dual Mode (White)', 'category' => 'domestic', 'tag' => 'Dual Mode', 'price' => '₹14,500', 'desc' => '6-Stage Advanced Purification system featuring dual-mode filtration. Mode 1 (RO+UF+ALK) for high TDS well water, Mode 2 (SN+UF+ALK) for tap water.', 'img' => aqua_solve_asset('images/product_puroaqua_white.jpg')),
                    array('id' => '4', 'slug' => 'aqua-solve-commercial-ro-plant', 'title' => 'Aqua Solve Commercial RO Treatment Plant', 'category' => 'plants', 'tag' => 'Heavy Duty', 'price' => 'Get Quote', 'desc' => 'Multi-port pre-filtration vessels coupled with high pressure steel pumps for colleges, clinics, and offices.', 'img' => aqua_solve_asset('images/product_commercial_ro.png')),
                    array('id' => '13', 'slug' => 'aqua-solve-sewage-treatment-plant', 'title' => 'Aqua Solve Sewage Treatment Plant (STP)', 'category' => 'plants', 'tag' => 'Sewage Treatment', 'price' => 'Get Quote', 'desc' => 'Industrial and commercial STP plants engineered to treat domestic sewage efficiently using MBR/MBBR technology.', 'img' => aqua_solve_asset('images/stp_plant.png')),
                    array('id' => '14', 'slug' => 'aqua-solve-effluent-treatment-plant', 'title' => 'Aqua Solve Effluent Treatment Plant (ETP)', 'category' => 'plants', 'tag' => 'Effluent Treatment', 'price' => 'Get Quote', 'desc' => 'Advanced industrial wastewater treatment setup designed for factories and manufacturing plants with ZLD recovery.', 'img' => aqua_solve_asset('images/etp_plant.png'))
                );

                foreach ($productsList as $product) :
                    $prod_url = aqua_solve_product_url($product['slug']);
            ?>
                    <a href="<?php echo esc_url($prod_url); ?>" class="product-card-link animate-on-scroll" data-category="<?php echo esc_attr($product['category']); ?>">
                        <div class="product-card" data-category="<?php echo esc_attr($product['category']); ?>">
                            <div class="product-image-area">
                                <span class="product-tag"><?php echo esc_html($product['tag']); ?></span>
                                <img src="<?php echo esc_url($product['img']); ?>" alt="<?php echo esc_attr($product['title']); ?>" class="product-image" />
                            </div>
                            <div class="product-info">
                                <h3><?php echo esc_html($product['title']); ?></h3>
                                <p style="font-size: 0.85rem; color: var(--text-light);"><?php echo esc_html($product['desc']); ?></p>
                                <div class="product-footer">
                                    <span class="product-price"><?php echo esc_html($product['price']); ?></span>
                                    <span class="btn btn-primary btn-card trigger-quote" data-product="<?php echo esc_attr($product['title']); ?>">
                                        Enquire Now
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
            <?php
                endforeach;
            endif;
            ?>

        </div>
    </div>
</section>

<!-- ==========================================================================
     CTA BANNER
     ========================================================================== -->
<section class="cta-banner">
    <div class="container animate-on-scroll">
        <h2>Require a Custom Commercial Plant or Water Filter Setup?</h2>
        <p>Contact our technical engineers for a customized flow diagram and water assessment in Kozhikode.</p>
        <button class="btn btn-primary trigger-quote" data-product="Custom Product Assembly" style="background: var(--bg-white); color: var(--primary-color); box-shadow: none;">
            Request Custom Quotation
        </button>
    </div>
</section>

<?php
get_footer();
