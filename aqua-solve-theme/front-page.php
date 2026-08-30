<?php
/**
 * Template Name: Front Page
 *
 * @package Aqua_Solve
 */

get_header();
?>

<!-- ==========================================================================
     HERO SLIDER
     ========================================================================== -->
<section class="hero-slider-container" aria-label="Hero Slide Showcase">
    <div class="slider-wrapper">
        <!-- Slide 1 -->
        <div class="slide active">
            <div class="container">
                <div class="slide-content-grid">
                    <div class="slide-text">
                        <h1>Welcome to<br />Aqua Solve Water Clinic</h1>
                        <p class="slide-sub">Kozhikode's premium water treatment organization. Delivering customized filters and systems matching rigorous global standards.</p>
                        <ul class="slide-bullets">
                            <li>
                                <svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" /></svg>
                                80% of all diseases are waterborne
                            </li>
                            <li>
                                <svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" /></svg>
                                Enhanced household and business productivity
                            </li>
                            <li>
                                <svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" /></svg>
                                Cost-effective compared to bottled water packages
                            </li>
                        </ul>
                        <div class="slide-buttons">
                            <button class="btn btn-primary trigger-quote" data-product="Welcome Slider Quote">
                                Request Call Back
                            </button>
                            <a href="<?php echo esc_url(aqua_solve_page_url('about')); ?>" class="btn btn-secondary">Learn More</a>
                        </div>
                    </div>
                    <div class="slide-visual">
                        <img src="<?php echo aqua_solve_asset('images/hero_slide_child.jpg'); ?>" alt="Child Drinking Pure Water" class="slide-image" />
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="slide">
            <div class="container">
                <div class="slide-content-grid">
                    <div class="slide-text">
                        <h2>Laboratory Certified<br />Water Analysis</h2>
                        <p class="slide-sub">Identify chemical imbalances, bacteria content, and precise TDS count to deploy correct filter configurations.</p>
                        <ul class="slide-bullets">
                            <li>
                                <svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" /></svg>
                                pH balance and iron presence check
                            </li>
                            <li>
                                <svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" /></svg>
                                Accurate microbiology reports
                            </li>
                            <li>
                                <svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" /></svg>
                                Certified local Kozhikode lab test technicians
                            </li>
                        </ul>
                        <div class="slide-buttons">
                            <button class="btn btn-primary trigger-quote" data-product="Water Test Consultation">
                                Talk to Expert
                            </button>
                            <a href="<?php echo esc_url(aqua_solve_page_url('services')); ?>" class="btn btn-secondary">Book Lab Test</a>
                        </div>
                    </div>
                    <div class="slide-visual">
                        <img src="<?php echo aqua_solve_asset('images/hero_slide_lab.jpg'); ?>" alt="Laboratory Testing Setup" class="slide-image" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Slider Controls -->
    <button class="slider-control slider-prev" aria-label="Previous slide">
        <svg viewBox="0 0 24 24"><path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"/></svg>
    </button>
    <button class="slider-control slider-next" aria-label="Next slide">
        <svg viewBox="0 0 24 24"><path d="M8.59 16.59L10 18l6-6-6-6-1.41 1.41L13.17 12z"/></svg>
    </button>
</section>

<!-- ==========================================================================
     MISSION & VISION
     ========================================================================== -->
<div class="container animate-on-scroll">
    <div class="mission-vision-bar">
        <div class="mv-card vision">
            <div class="mv-icon">
                <svg viewBox="0 0 24 24"><path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/></svg>
            </div>
            <div class="mv-info">
                <h3>Our Vision</h3>
                <p>To be a trusted leader in water treatment solutions, recognized for excellence, innovation and commitment to a sustainable tomorrow.</p>
            </div>
        </div>
        <div class="mv-card mission">
            <div class="mv-icon">
                <svg viewBox="0 0 24 24"><path d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2zm1 17h-2v-2h2v2zm2.07-7.75l-.9.92C13.45 12.9 13 13.5 13 15h-2v-.5c0-1.1.45-2.1 1.17-2.83l1.24-1.26c.37-.36.59-.86.59-1.41 0-1.1-.9-2-2-2s-2 .9-2 2H7c0-2.76 2.24-5 5-5s5 2.24 5 5c0 1.04-.42 1.99-1.07 2.25z"/></svg>
            </div>
            <div class="mv-info">
                <h3>Our Mission</h3>
                <p>To deliver reliable, cost-effective and environmentally responsible water treatment solutions that ensure clean water, regulatory compliance and long-term value for our clients.</p>
            </div>
        </div>
    </div>
</div>

<!-- ==========================================================================
     WHY CHOOSE AQUASOLVE (GRID)
     ========================================================================== -->
<section class="section" style="padding-top: 2rem; padding-bottom: 2rem;">
    <div class="container">
        <div class="why-choose-section-box animate-on-scroll">
            <div class="why-choose-banner-header">
                <h3>&middot; WHY CHOOSE AQUASOLVE? &middot;</h3>
            </div>
            <div class="why-choose-grid">
                <div class="why-choose-card">
                    <div class="wc-icon-circle wc-circle-teal">
                        <svg viewBox="0 0 24 24">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    <div class="wc-content">
                        <h4>EXPERIENCED TEAM</h4>
                        <p>Skilled professionals with deep domain knowledge and hands-on experience.</p>
                    </div>
                </div>

                <div class="why-choose-card">
                    <div class="wc-icon-circle wc-circle-blue">
                        <svg viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="9"></circle>
                            <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                            <line x1="12" y1="17" x2="12.01" y2="17"></line>
                        </svg>
                    </div>
                    <div class="wc-content">
                        <h4>CUSTOMIZED SOLUTIONS</h4>
                        <p>Tailor-made systems to meet your specific requirements and site conditions.</p>
                    </div>
                </div>

                <div class="why-choose-card">
                    <div class="wc-icon-circle wc-circle-teal">
                        <svg viewBox="0 0 24 24">
                            <circle cx="12" cy="8" r="6"></circle>
                            <path d="M15.477 12.89L17 22l-5-3-5 3 1.523-9.11"></path>
                            <path d="M9 8l2 2 4-4"></path>
                        </svg>
                    </div>
                    <div class="wc-content">
                        <h4>QUALITY ASSURANCE</h4>
                        <p>High-quality components and strict testing at every stage of execution.</p>
                    </div>
                </div>

                <div class="why-choose-card">
                    <div class="wc-icon-circle wc-circle-blue">
                        <svg viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                    </div>
                    <div class="wc-content">
                        <h4>ON-TIME DELIVERY</h4>
                        <p>Strong project management ensuring timely delivery and smooth execution.</p>
                    </div>
                </div>

                <div class="why-choose-card why-choose-full-width">
                    <div class="wc-icon-circle wc-circle-teal">
                        <svg viewBox="0 0 24 24">
                            <path d="M3 18v-6a9 9 0 0 1 18 0v6"></path>
                            <path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"></path>
                        </svg>
                    </div>
                    <div class="wc-content">
                        <h4>AFTER-SALES SUPPORT</h4>
                        <p>Dedicated support team for operation, maintenance and long-term reliability.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     ABOUT PREVIEW (SPLASH)
     ========================================================================== -->
<section class="section section-bg">
    <div class="container">
        <div class="about-preview-wrapper">
            <h2 class="about-preview-title about-title-mobile animate-on-scroll">
                About Aqua Solve Water Clinic
            </h2>

            <div class="about-preview-grid">
                <div class="about-text-column animate-on-scroll">
                    <h2 class="about-preview-title about-title-desktop">
                        About Aqua Solve Water Clinic
                    </h2>
                    <p class="about-preview-desc-1">
                        Aqua Solve Water Clinic, based in Kozhikode, is a leading Water Treatment Company in Kerala. We specialize in engineering and executing high-standard water solutions for domestic, commercial, and industrial requirements.
                    </p>
                    <p class="about-preview-desc-2">
                        Our product line includes top-tier Aqua Gold water purifiers, reverse osmosis plants, wastewater treatment utilities, softeners, and iron removal structures. With a team of highly-trained chemical engineers and service specialists, we maintain quality standards across installation and after-sales service.
                    </p>
                    <div class="about-btn-wrap">
                        <a href="<?php echo esc_url(aqua_solve_page_url('about')); ?>" class="btn btn-primary">More Details</a>
                    </div>
                </div>

                <div class="about-image-column animate-on-scroll">
                    <img src="<?php echo aqua_solve_asset('images/about_splash_water.jpg'); ?>" alt="Fresh Splashing Glasses of Water" class="about-preview-img" />
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     FEATURED PRODUCTS
     ========================================================================== -->
<section class="section">
    <div class="container">
        <div class="section-header animate-on-scroll">
            <h2>Our Featured Products</h2>
            <p>Explore our premium domestic filters and heavy-duty filtration setups designed for Kerala's water conditions.</p>
        </div>

        <div class="products-grid">
            <!-- Product 1 -->
            <a href="<?php echo esc_url(aqua_solve_product_url('puroaqua-dual-mode-black')); ?>" class="product-card-link animate-on-scroll">
                <div class="product-card">
                    <div class="product-image-area">
                        <span class="product-tag" style="background: #092f56;">Dual Mode</span>
                        <img src="<?php echo aqua_solve_asset('images/product_puroaqua_black.jpg'); ?>" alt="Puroaqua Dual Mode (Black)" class="product-image" />
                    </div>
                    <div class="product-info">
                        <h3>Puroaqua Dual Mode (Black)</h3>
                        <p style="font-size: 0.85rem; color: var(--text-light);">6-Stage Advanced Purification system with Dual-Mode toggle. RO+UF+ALK for high TDS well water, and SN+UF+ALK for municipal flow.</p>
                        <ul class="product-specs">
                            <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Ideal for: High &amp; Low TDS Water</li>
                            <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Enrichment: Alkaline pH balancer</li>
                        </ul>
                        <div class="product-footer">
                            <span class="product-price">₹14,500</span>
                            <span class="btn btn-primary btn-card trigger-quote" data-product="Puroaqua Dual Mode (Black)">
                                Enquire Now
                            </span>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Product 2 -->
            <a href="<?php echo esc_url(aqua_solve_product_url('puroaqua-dual-mode-white')); ?>" class="product-card-link animate-on-scroll">
                <div class="product-card">
                    <div class="product-image-area">
                        <span class="product-tag" style="background: #092f56;">Dual Mode</span>
                        <img src="<?php echo aqua_solve_asset('images/product_puroaqua_white.jpg'); ?>" alt="Puroaqua Dual Mode (White)" class="product-image" />
                    </div>
                    <div class="product-info">
                        <h3>Puroaqua Dual Mode (White)</h3>
                        <p style="font-size: 0.85rem; color: var(--text-light);">6-Stage Advanced Purification system with Dual-Mode toggle. RO+UF+ALK for high TDS well water, and SN+UF+ALK for municipal flow.</p>
                        <ul class="product-specs">
                            <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Ideal for: High &amp; Low TDS Water</li>
                            <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Enrichment: Alkaline pH balancer</li>
                        </ul>
                        <div class="product-footer">
                            <span class="product-price">₹14,500</span>
                            <span class="btn btn-primary btn-card trigger-quote" data-product="Puroaqua Dual Mode (White)">
                                Enquire Now
                            </span>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Product 3 -->
            <a href="<?php echo esc_url(aqua_solve_product_url('aqua-solve-carbon-filter')); ?>" class="product-card-link animate-on-scroll">
                <div class="product-card">
                    <div class="product-image-area">
                        <span class="product-tag">Carbon Filter</span>
                        <img src="<?php echo aqua_solve_asset('images/product_frp_vessel.png'); ?>" alt="Aqua Solve Carbon Filter" class="product-image" />
                    </div>
                    <div class="product-info">
                        <h3>Aqua Solve Carbon Filter</h3>
                        <p style="font-size: 0.85rem; color: var(--text-light);">High-grade activated carbon filter. Adsorbs chlorine, organic pesticides, bad taste, odor, and chemical impurities from supply water.</p>
                        <ul class="product-specs">
                            <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Vessel: FRP pressure tank</li>
                            <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Service: Simple backwash routine</li>
                        </ul>
                        <div class="product-footer">
                            <span class="product-price">₹30,000</span>
                            <span class="btn btn-primary btn-card trigger-quote" data-product="Aqua Solve Carbon Filter">
                                Enquire Now
                            </span>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Product 4 -->
            <a href="<?php echo esc_url(aqua_solve_product_url('aqua-solve-commercial-ro-plant')); ?>" class="product-card-link animate-on-scroll">
                <div class="product-card">
                    <div class="product-image-area">
                        <span class="product-tag">Heavy Duty</span>
                        <img src="<?php echo aqua_solve_asset('images/product_commercial_ro.png'); ?>" alt="Aqua Solve Commercial RO Treatment Plant" class="product-image" />
                    </div>
                    <div class="product-info">
                        <h3>Aqua Solve Commercial RO Treatment Plant</h3>
                        <p style="font-size: 0.85rem; color: var(--text-light);">Industrial configuration featuring multiple filters, high pressure pumps, and large scale outputs.</p>
                        <ul class="product-specs">
                            <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Flow Rate: 250 LPH to 5 KPH</li>
                            <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Structure: Stainless Steel Frame</li>
                        </ul>
                        <div class="product-footer">
                            <span class="product-price">Get Quote</span>
                            <span class="btn btn-primary btn-card trigger-quote" data-product="Aqua Solve Commercial RO Treatment Plant">
                                Enquire Now
                            </span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        
        <div style="text-align: center; margin-top: 3.5rem;" class="animate-on-scroll">
            <a href="<?php echo esc_url(aqua_solve_page_url('products')); ?>" class="btn btn-secondary">Explore All Products</a>
        </div>
    </div>
</section>

<!-- ==========================================================================
     KEY INDUSTRIES
     ========================================================================== -->
<section class="section key-industries-section" aria-label="Key Industries Served">
    <div class="container">
        <div class="section-header animate-on-scroll text-center">
            <div class="title-with-lines">
                <span class="bullet">•</span>
                <h2>KEY INDUSTRIES</h2>
                <span class="bullet">•</span>
            </div>
            <p style="max-width: 650px; margin: 0.5rem auto 0 auto;">Providing custom water treatment plants, RO filtration systems, and softeners for various sectors.</p>
        </div>

        <div class="industries-grid">
            <div class="industry-card animate-on-scroll">
                <div class="industry-header">
                    <div class="industry-icon-circle">
                        <svg viewBox="0 0 24 24"><path d="M7 13c1.66 0 3-1.34 3-3S8.66 7 7 7s-3 1.34-3 3 1.34 3 3 3zm12-6h-8v7H3V5H1v15h2v-3h18v3h2v-9c0-2.21-1.79-4-4-4z"/></svg>
                    </div>
                    <h3>HOTELS & RESORTS</h3>
                    <p>Reliable water treatment for luxury stays, kitchens, laundry and recreational facilities.</p>
                </div>
                <div class="industry-image-wrapper">
                    <img src="<?php echo aqua_solve_asset('images/industry_hotel.png'); ?>" alt="Hotels & Resorts" />
                </div>
            </div>

            <div class="industry-card animate-on-scroll">
                <div class="industry-header">
                    <div class="industry-icon-circle">
                        <svg viewBox="0 0 24 24"><path d="M19 10.5h-5.5V5h-3v5.5H5v3h5.5V19h3v-5.5H19v-3z"/></svg>
                    </div>
                    <h3>HOSPITALS & CLINICS</h3>
                    <p>Safe, clean and hygienic water for critical applications and infection control.</p>
                </div>
                <div class="industry-image-wrapper">
                    <img src="<?php echo aqua_solve_asset('images/industry_hospital.png'); ?>" alt="Hospitals & Clinics" />
                </div>
            </div>

            <div class="industry-card animate-on-scroll">
                <div class="industry-header">
                    <div class="industry-icon-circle">
                        <svg viewBox="0 0 24 24"><path d="M12 7V3H2v18h20V7H12zm-6 12H4v-2h2v2zm0-4H4v-2h2v2zm0-4H4V9h2v2zm0-4H4V5h2v2zm14 12h-8v-2h2v-2h-2v-2h2v-2h-2V9h8v10zm-2-8h-2v2h2v-2zm0 4h-2v-2h2v-2z"/></svg>
                    </div>
                    <h3>APARTMENTS & BUILDINGS</h3>
                    <p>Sustainable water solutions for daily needs, domestic use and facility management.</p>
                </div>
                <div class="industry-image-wrapper">
                    <img src="<?php echo aqua_solve_asset('images/industry_apartment.png'); ?>" alt="Apartments & Commercial Buildings" />
                </div>
            </div>

            <div class="industry-card animate-on-scroll">
                <div class="industry-header">
                    <div class="industry-icon-circle">
                        <svg viewBox="0 0 24 24"><path d="M22 10l-6 4V9l-6 4V9L2 14v6h20V10z"/></svg>
                    </div>
                    <h3>INDUSTRIES & FACTORIES</h3>
                    <p>Efficient water treatment for process requirements, reuse and regulatory compliance.</p>
                </div>
                <div class="industry-image-wrapper">
                    <img src="<?php echo aqua_solve_asset('images/industry_factory.png'); ?>" alt="Industries & Factories" />
                </div>
            </div>

            <div class="industry-card animate-on-scroll">
                <div class="industry-header">
                    <div class="industry-icon-circle">
                        <svg viewBox="0 0 24 24"><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"/></svg>
                    </div>
                    <h3>SCHOOLS & COLLEGES</h3>
                    <p>Ensuring safe drinking water and a healthy environment for students and staff.</p>
                </div>
                <div class="industry-image-wrapper">
                    <img src="<?php echo aqua_solve_asset('images/industry_school.png'); ?>" alt="Schools & Colleges" />
                </div>
            </div>

            <div class="industry-card animate-on-scroll">
                <div class="industry-header">
                    <div class="industry-icon-circle">
                        <svg viewBox="0 0 24 24"><path d="M15 11V5l-3-3-3 3v2H3v14h18V11h-6zm-8 8H5v-2h2v2zm0-4H5v-2h2v2zm0-4H5V9h2v2zm6 8h-2v-2h2v-2zm0-4h-2v-2h2v-2zm0-4h-2v-2h2v-2zm0-4h-2V5h2v2zm6 12h-2v-2h2v-2zm0-4h-2v-2h2v-2z"/></svg>
                    </div>
                    <h3>IT PARKS & OFFICES</h3>
                    <p>High-quality water solutions for large facilities, cooling systems and pantries.</p>
                </div>
                <div class="industry-image-wrapper">
                    <img src="<?php echo aqua_solve_asset('images/industry_office.png'); ?>" alt="IT Parks & Offices" />
                </div>
            </div>

            <div class="industry-card animate-on-scroll">
                <div class="industry-header">
                    <div class="industry-icon-circle">
                        <svg viewBox="0 0 24 24"><path d="M12 2L2 7v2h20V7L12 2zm-7 9h2v8H5v-8zm5 0h2v8h-2v-8zm5 0h2v8h-2v-8zm5 0h2v8h-2v-8zM2 21h20v2H2v-2z"/></svg>
                    </div>
                    <h3>GOVERNMENT ORGANIZATIONS</h3>
                    <p>Compliant and dependable systems for public utilities, institutions and civic needs.</p>
                </div>
                <div class="industry-image-wrapper">
                    <img src="<?php echo aqua_solve_asset('images/industry_government.png'); ?>" alt="Government Organizations" />
                </div>
            </div>

            <div class="industry-card animate-on-scroll">
                <div class="industry-header">
                    <div class="industry-icon-circle">
                        <svg viewBox="0 0 24 24"><path d="M13 19h-2v-5.69c-2.35-.42-4-2.48-4-4.81 0-2.76 2.24-5 5-5s5 2.24 5 5c0 2.33-1.65 4.39-4 4.81V19zm-1-12c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/></svg>
                    </div>
                    <h3>RESORTS & LEISURE SPACES</h3>
                    <p>Tailored solutions for swimming pools, landscaping, and guest comfort needs.</p>
                </div>
                <div class="industry-image-wrapper">
                    <img src="<?php echo aqua_solve_asset('images/industry_leisure.png'); ?>" alt="Resorts & Leisure Spaces" />
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     TESTIMONIALS
     ========================================================================== -->
<section class="section section-bg">
    <div class="container">
        <div class="section-header animate-on-scroll">
            <h2>Testimonials</h2>
            <p>Read opinions and feedback from clients who trust Aqua Solve Water Clinic for their hydration safety.</p>
        </div>

        <div class="testimonials-grid animate-on-scroll">
            <div class="testimonial-card">
                <div class="testimonial-card-quote-bg">
                    <span class="testimonial-card-quote-text">99</span>
                </div>
                <h3 class="testimonial-card-author">Prasanth</h3>
                <div class="testimonial-card-stars">
                    <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                </div>
                <p class="testimonial-card-text">"The experience with the Aqua Solve Water Clinic team is superior. We had them install a Gov. school purification system and the water laboratory report shows pristine results. Their dedication to schedule execution is remarkable."</p>
            </div>

            <div class="testimonial-card">
                <div class="testimonial-card-quote-bg">
                    <span class="testimonial-card-quote-text">99</span>
                </div>
                <h3 class="testimonial-card-author">Dr. Manoj</h3>
                <span class="testimonial-card-role">Chief Clinical Director, Calicut</span>
                <div class="testimonial-card-stars">
                    <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                </div>
                <p class="testimonial-card-text">"To provide sustainable solutions with enduring commitment requires expert execution. Aqua Solve Water Clinic designs outstanding custom RO plants. They maintain high-quality parameters and fast replacement support."</p>
            </div>

            <div class="testimonial-card">
                <div class="testimonial-card-quote-bg">
                    <span class="testimonial-card-quote-text">99</span>
                </div>
                <h3 class="testimonial-card-author">Mrs. Anjali K.</h3>
                <span class="testimonial-card-role">Homeowner, Eranhipaalam</span>
                <div class="testimonial-card-stars">
                    <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                </div>
                <p class="testimonial-card-text">"Our home groundwater had massive scaling and iron particles. The HydroSoft Softener from Aqua Solve Water Clinic completely transformed the hardness. Outstanding plumbing team, neat work, and no more scaling!"</p>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     OUR CLIENTS
     ========================================================================== -->
<section class="section">
    <div class="container">
        <div class="section-header animate-on-scroll">
            <h2>Our Prestigious Clients</h2>
            <p>Trusted by leading institutions, clinics, bridal centers, and co-operatives in Calicut.</p>
        </div>

        <div class="logo-carousel-viewport animate-on-scroll">
            <div class="logo-carousel-track" style="display: flex; gap: 2rem; justify-content: center; align-items: center; flex-wrap: wrap;">
                <div class="client-logo-wrapper"><img src="<?php echo aqua_solve_asset('images/client-logo-1.png'); ?>" alt="Client Logo 1" class="client-logo-img" /></div>
                <div class="client-logo-wrapper"><img src="<?php echo aqua_solve_asset('images/client-logo-2.png'); ?>" alt="Client Logo 2" class="client-logo-img" /></div>
                <div class="client-logo-wrapper"><img src="<?php echo aqua_solve_asset('images/client-seashell.png'); ?>" alt="Seashell" class="client-logo-img" /></div>
                <div class="client-logo-wrapper"><img src="<?php echo aqua_solve_asset('images/client-copper-kitchen.png'); ?>" alt="Copper Kitchen" class="client-logo-img" /></div>
                <div class="client-logo-wrapper"><img src="<?php echo aqua_solve_asset('images/client-logo-4.png'); ?>" alt="Client Logo 4" class="client-logo-img" /></div>
                <div class="client-logo-wrapper"><img src="<?php echo aqua_solve_asset('images/client-logo-5.png'); ?>" alt="Client Logo 5" class="client-logo-img" /></div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     CTA MID BANNER
     ========================================================================== -->
<section class="cta-banner">
    <div class="container animate-on-scroll">
        <h2>Is your water completely safe for drinking?</h2>
        <p>Schedule a professional testing visit by our Kozhikode laboratory technicians today. Ensure maximum wellness for your family or staff members.</p>
        <div style="display: flex; justify-content: center; gap: 1rem; flex-wrap: wrap;">
            <a href="<?php echo esc_url(aqua_solve_page_url('services')); ?>" class="btn btn-primary" style="background: var(--bg-white); color: var(--primary-color); box-shadow: none;">
                Book Laboratory Check
            </a>
            <a href="<?php echo esc_url(aqua_solve_page_url('contact')); ?>" class="btn btn-secondary" style="border-color: var(--bg-white); color: var(--bg-white);">
                Contact Us
            </a>
        </div>
    </div>
</section>

<?php
get_footer();
