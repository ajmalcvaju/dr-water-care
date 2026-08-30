<?php
/**
 * Single Service Template
 *
 * @package Aqua_Solve
 */

get_header();

while (have_posts()) : the_post();
    $title = get_the_title();
    $tag = get_as_field('tag', get_the_ID(), 'SERVICE');
    $tag_class = get_as_field('tagClass', get_the_ID(), 'tag-wtp');
    $subtitle = get_as_field('subtitle', get_the_ID(), get_the_excerpt());
    $desc = get_the_content() ? get_the_content() : get_as_field('description', get_the_ID(), get_the_excerpt());
    $badge = get_as_field('badge', get_the_ID(), 'KSPCB Compliant System');
    $img = get_the_post_thumbnail_url(get_the_ID(), 'large');
    if (!$img) {
        $slug = get_post_field('post_name', get_the_ID());
        if (strpos($slug, 'water-purifier') !== false) {
            $img = aqua_solve_asset('images/product_puroaqua_black.jpg');
        } elseif (strpos($slug, 'wtp') !== false || strpos($slug, 'water-treatment') !== false) {
            $img = aqua_solve_asset('images/wtp_plant.png');
        } elseif (strpos($slug, 'stp') !== false || strpos($slug, 'sewage-treatment') !== false) {
            $img = aqua_solve_asset('images/stp_plant.png');
        } elseif (strpos($slug, 'etp') !== false || strpos($slug, 'effluent-treatment') !== false) {
            $img = aqua_solve_asset('images/etp_plant.png');
        } else {
            $img = aqua_solve_asset('images/wtp_plant.png');
        }
    }
?>

<!-- ==========================================================================
     PAGE BANNER & BREADCRUMB
     ========================================================================== -->
<section class="page-banner" aria-label="Service Detail Page Header">
    <div class="container">
        <div style="margin-bottom: 1rem; font-size: 0.9rem; color: rgba(255,255,255,0.75);">
            <a href="<?php echo esc_url(home_url('/')); ?>" style="color: #fff; text-decoration: none;">Home</a> &nbsp;&gt;&nbsp; 
            <a href="<?php echo esc_url(home_url('/services/')); ?>" style="color: #fff; text-decoration: none; margin-left: 0.4rem;">Services</a> &nbsp;&gt;&nbsp; 
            <span style="color: #7dd3fc; margin-left: 0.4rem; font-weight: 700;"><?php echo esc_html($tag); ?></span>
        </div>
        <h1><?php echo esc_html($title); ?></h1>
        <p><?php echo esc_html($subtitle); ?></p>
    </div>
    
    <svg class="banner-wave" viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 32L60 48C120 64 240 96 360 101.3C480 107 600 85 720 69.3C840 53 960 43 1080 42.7C1200 43 1320 53 1380 58.7L1440 64V120H1380C1320 120 1200 120 1080 120C960 120 480 120 360 120C240 120 120 120 60 120H0V32Z" fill="#FFF"/>
    </svg>

    <div class="banner-decorations">
        <div class="bubble bubble-1"></div>
        <div class="bubble bubble-2"></div>
        <div class="bubble bubble-3"></div>
    </div>
</section>

<!-- ==========================================================================
     MAIN SERVICE SOLUTION DETAILS CONTENT
     ========================================================================== -->
<section class="section solution-details-section" style="padding-top: 3rem;">
    <div class="container">

        <!-- Main Solution Detail Card -->
        <div class="solution-detail-container animate-on-scroll">
            <div class="solution-detail-header">
                <div class="solution-header-info">
                    <span class="solution-badge <?php echo esc_attr($tag_class); ?>"><?php echo esc_html($tag); ?></span>
                    <h3><?php echo esc_html($title); ?></h3>
                    <p class="solution-subtitle"><?php echo esc_html($subtitle); ?></p>
                </div>
                <button class="btn btn-primary trigger-quote" data-product="<?php echo esc_attr($title); ?>">
                    Get Free Consultation &amp; Quote
                </button>
            </div>

            <div class="solution-detail-body">
                <div class="solution-media-col">
                    <div class="solution-img-box">
                        <img src="<?php echo esc_url($img); ?>" alt="<?php echo esc_attr($title); ?>" />
                    </div>
                    <div class="solution-badge-pill">
                        <svg viewBox="0 0 24 24"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-5.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
                        <?php echo esc_html($badge); ?>
                    </div>
                </div>

                <div class="solution-content-col">
                    <h4>System Overview</h4>
                    <div class="solution-desc"><?php echo wp_kses_post($desc); ?></div>

                    <h4 style="margin-top: 2rem;">Key Technical Specifications</h4>
                    <div class="specs-grid">
                        <div class="spec-box">
                            <span class="spec-label">Capacity Range</span>
                            <span class="spec-val">1,000 LPH to 50,000+ LPH</span>
                        </div>
                        <div class="spec-box">
                            <span class="spec-label">Frame &amp; Structure</span>
                            <span class="spec-val">Heavy Duty SS 304 Skid Chassis</span>
                        </div>
                        <div class="spec-box">
                            <span class="spec-label">Compliance</span>
                            <span class="spec-val">IS 10500 Compliant Water Standards</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="solution-detail-footer">
                <p>Need customized capacity calculations or on-site engineering survey for your facility?</p>
                <div class="solution-footer-btns">
                    <button class="btn btn-primary trigger-quote" data-product="<?php echo esc_attr($title); ?>">
                        Request Technical Proposal
                    </button>
                    <a href="<?php echo esc_url(home_url('/services/')); ?>" class="btn btn-secondary">
                        &larr; Back to All Services
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>

<?php
endwhile;
get_footer();
