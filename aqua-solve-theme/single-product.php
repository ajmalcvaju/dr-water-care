<?php
/**
 * Single Product Template
 *
 * @package Aqua_Solve
 */

get_header();

while (have_posts()) : the_post();
    $title = get_the_title();
    $tag = get_as_field('tag', get_the_ID(), 'WATER PURIFIER');
    $price = get_as_field('price', get_the_ID(), '');
    $desc = get_the_content() ? get_the_content() : get_as_field('desc', get_the_ID(), get_the_excerpt());
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
    $whatsapp_msg = urlencode("Hi Aqua Solve Water Clinic, I am interested in " . $title . ". Please provide more details and best price quote.");
?>

<!-- ==========================================================================
     MAIN PRODUCT DETAILS CONTENT
     ========================================================================== -->
<section class="section product-details-section" style="padding-top: 2rem;">
    <div class="product-page-fullwidth">
        
        <!-- Breadcrumb Navigation -->
        <div style="margin-bottom: 1.5rem; font-size: 0.9rem; color: #64748b;">
            <a href="<?php echo esc_url(home_url('/')); ?>" style="color: #0284c7; text-decoration: none; font-weight: 600;">Home</a>
            <span style="margin: 0 0.5rem; color: #94a3b8;">/</span>
            <a href="<?php echo esc_url(home_url('/products/')); ?>" style="color: #0284c7; text-decoration: none; font-weight: 600;">Products</a>
            <span style="margin: 0 0.5rem; color: #94a3b8;">/</span>
            <span style="color: #0f172a; font-weight: 700;"><?php echo esc_html($title); ?></span>
        </div>

        <div class="solution-detail-container animate-on-scroll">
            
            <!-- Header Area -->
            <div class="solution-detail-header">
                <div class="solution-header-info">
                    <span class="solution-badge tag-purifier"><?php echo esc_html($tag); ?></span>
                    <h3><?php echo esc_html($title); ?></h3>
                    <?php if ($price): ?>
                        <div class="solution-header-price">
                            <span class="solution-price-val"><?php echo esc_html($price); ?></span>
                            <span class="solution-price-sub">(Inclusive of all taxes &amp; standard warranty)</span>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="solution-header-btns">
                    <button class="btn btn-primary trigger-quote" data-product="<?php echo esc_attr($title); ?>">
                        Enquire &amp; Get Quote
                    </button>
                    <a href="https://wa.me/919946450452?text=<?php echo $whatsapp_msg; ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp" style="display: inline-flex; align-items: center; gap: 0.5rem; background: #25D366; color: #fff; padding: 0.8rem 1.5rem; border-radius: 50px; text-decoration: none; font-weight: 600;">
                        <svg viewBox="0 0 24 24" style="width: 18px; height: 18px; fill: #fff;"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.099 4.019 4.019-1.056z"/></svg>
                        WhatsApp Us
                    </a>
                </div>
            </div>

            <!-- Body Grid -->
            <div class="solution-detail-body">
                <div class="solution-media-col">
                    <div class="solution-img-box" style="background: #fff; border: 1px solid #e2e8f0; padding: 1.5rem; border-radius: 16px;">
                        <img src="<?php echo esc_url($img); ?>" alt="<?php echo esc_attr($title); ?>" style="max-height: 340px; object-fit: contain;" />
                    </div>
                    <div class="solution-badge-pill" style="margin-top: 1rem;">
                        <svg viewBox="0 0 24 24"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-5.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
                        Official Aqua Solve Guaranteed Product
                    </div>
                </div>

                <div class="solution-content-col">
                    <h4>Product Description</h4>
                    <div class="solution-desc"><?php echo wp_kses_post($desc); ?></div>

                    <h4 style="margin-top: 2rem;">Technical Specifications</h4>
                    <div class="specs-grid">
                        <div class="spec-box">
                            <span class="spec-label">Purification Technology</span>
                            <span class="spec-val">Advanced Multi-Stage Filtration</span>
                        </div>
                        <div class="spec-box">
                            <span class="spec-label">Vessel / Housing</span>
                            <span class="spec-val">Food-Grade ABS / FRP Pressure Tank</span>
                        </div>
                        <div class="spec-box">
                            <span class="spec-label">Warranty</span>
                            <span class="spec-val">1 Year Comprehensive Warranty</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <div class="solution-detail-footer">
                <p>Have questions about sizing, vessel capacity, or installation in your area?</p>
                <div class="solution-footer-btns">
                    <button class="btn btn-primary trigger-quote" data-product="<?php echo esc_attr($title); ?>">
                        Book Free Consultation
                    </button>
                    <a href="<?php echo esc_url(home_url('/products/')); ?>" class="btn btn-secondary">
                        &larr; Back to Products Catalog
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<?php
endwhile;
get_footer();
