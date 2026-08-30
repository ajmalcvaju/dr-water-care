<?php
/**
 * Template Name: Services Page
 *
 * @package Aqua_Solve
 */

get_header();
?>

<!-- ==========================================================================
     PAGE BANNER
     ========================================================================== -->
<section class="page-banner" aria-label="Services page introduction">
    <div class="container">
        <h1>Professional Services & Lab Testing</h1>
        <p>Expert installations, periodic maintenance support, and extensive laboratory diagnostic reports.</p>
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
     STP / ETP / WTP / WATER PURIFIER PLANT SHOWCASE (TOP)
     ========================================================================== -->
<section class="section plant-showcase-section" aria-label="Water Treatment Plants Showcase">
    <div class="container">
        <div class="section-header animate-on-scroll text-center">
            <h2>Industrial &amp; Commercial Plant Solutions</h2>
            <p style="max-width: 650px; margin: 0.5rem auto 0 auto;">Heavy-duty treatment facilities engineered for optimal recycling, purification, and environmental compliance.</p>
        </div>

        <div class="plants-grid">
            <a href="<?php echo esc_url(aqua_solve_service_url('water-purifier')); ?>" class="plant-card-link animate-on-scroll">
                <div class="plant-card">
                    <div class="plant-tag tag-purifier">WATER PURIFIER</div>
                    <div class="plant-img-wrapper">
                        <img src="<?php echo aqua_solve_asset('images/product_puroaqua_black.jpg'); ?>" alt="Aqua Solve Water Purifier" />
                    </div>
                    <div class="plant-info">
                        <p>Advanced domestic RO + UF + Alkaline water purifiers that deliver 100% pure, healthy drinking water.</p>
                        <div class="plant-card-action">
                            <span>View Specs &amp; Details</span> &rarr;
                        </div>
                    </div>
                </div>
            </a>

            <a href="<?php echo esc_url(aqua_solve_service_url('water-treatment-plant-wtp')); ?>" class="plant-card-link animate-on-scroll">
                <div class="plant-card">
                    <div class="plant-tag tag-wtp">WTP PLANT</div>
                    <div class="plant-img-wrapper">
                        <img src="<?php echo aqua_solve_asset('images/wtp_plant.png'); ?>" alt="Water Treatment Plant (WTP)" />
                    </div>
                    <div class="plant-info">
                        <p>Water Treatment Plants that deliver safe, clean &amp; potable water for various applications.</p>
                        <div class="plant-card-action">
                            <span>View Specs &amp; Details</span> &rarr;
                        </div>
                    </div>
                </div>
            </a>

            <a href="<?php echo esc_url(aqua_solve_service_url('sewage-treatment-plant-stp')); ?>" class="plant-card-link animate-on-scroll">
                <div class="plant-card">
                    <div class="plant-tag tag-stp">STP PLANT</div>
                    <div class="plant-img-wrapper">
                        <img src="<?php echo aqua_solve_asset('images/stp_plant.png'); ?>" alt="Sewage Treatment Plant (STP)" />
                    </div>
                    <div class="plant-info">
                        <p>Sewage Treatment Plants that treat domestic sewage efficiently and enable safe discharge or reuse.</p>
                        <div class="plant-card-action">
                            <span>View Specs &amp; Details</span> &rarr;
                        </div>
                    </div>
                </div>
            </a>

            <a href="<?php echo esc_url(aqua_solve_service_url('effluent-treatment-plant-etp')); ?>" class="plant-card-link animate-on-scroll">
                <div class="plant-card">
                    <div class="plant-tag tag-etp">ETP PLANT</div>
                    <div class="plant-img-wrapper">
                        <img src="<?php echo aqua_solve_asset('images/etp_plant.png'); ?>" alt="Effluent Treatment Plant (ETP)" />
                    </div>
                    <div class="plant-info">
                        <p>Effluent Treatment Plants designed to treat industrial wastewater and ensure zero liquid discharge solutions.</p>
                        <div class="plant-card-action">
                            <span>View Specs &amp; Details</span> &rarr;
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- ==========================================================================
     OUR CORE SERVICES GRID (8 CARDS)
     ========================================================================== -->
<section class="section" style="padding-top: 1.5rem; padding-bottom: 1rem;">
    <div class="container">
        <div class="core-services-section-box animate-on-scroll">
            <div class="core-services-banner-header">
                <h3>&middot; OUR CORE SERVICES &middot;</h3>
            </div>
            <div class="core-services-grid">
                <div class="core-service-card">
                    <div class="cs-icon-circle cs-circle-navy">
                        <svg viewBox="0 0 24 24">
                            <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                            <line x1="8" y1="21" x2="16" y2="21"></line>
                            <line x1="12" y1="17" x2="12" y2="21"></line>
                            <path d="M7 8h5"></path>
                            <path d="M7 11h3"></path>
                            <circle cx="16" cy="10" r="2.5"></circle>
                        </svg>
                    </div>
                    <h4 class="cs-card-title cs-title-navy">DESIGN &amp; ENGINEERING</h4>
                    <p class="cs-card-desc">Customized, cost-effective and efficient designs using latest technology and industry standards.</p>
                </div>

                <div class="core-service-card">
                    <div class="cs-icon-circle cs-circle-teal">
                        <svg viewBox="0 0 24 24">
                            <rect x="4" y="6" width="6" height="14" rx="3"></rect>
                            <rect x="14" y="6" width="6" height="14" rx="3"></rect>
                            <path d="M7 2v4"></path>
                            <path d="M17 2v4"></path>
                            <path d="M10 11h4"></path>
                        </svg>
                    </div>
                    <h4 class="cs-card-title cs-title-teal">SUPPLY OF PLANTS</h4>
                    <p class="cs-card-desc">High quality, durable and performance-tested equipment from trusted manufacturers and partners.</p>
                </div>

                <div class="core-service-card">
                    <div class="cs-icon-circle cs-circle-navy">
                        <svg viewBox="0 0 24 24">
                            <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path>
                        </svg>
                    </div>
                    <h4 class="cs-card-title cs-title-navy">INSTALLATION &amp; COMMISSIONING</h4>
                    <p class="cs-card-desc">Professional installation with precise testing and commissioning for smooth start-up.</p>
                </div>

                <div class="core-service-card">
                    <div class="cs-icon-circle cs-circle-teal">
                        <svg viewBox="0 0 24 24">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                            <path d="M12 2v2"></path>
                        </svg>
                    </div>
                    <h4 class="cs-card-title cs-title-teal">OPERATIONS &amp; MAINTENANCE (O&amp;M)</h4>
                    <p class="cs-card-desc">Skilled operation and maintenance support to ensure optimum performance and system reliability.</p>
                </div>

                <div class="core-service-card">
                    <div class="cs-icon-circle cs-circle-teal">
                        <svg viewBox="0 0 24 24">
                            <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                            <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                            <polyline points="9 14 11 16 15 11"></polyline>
                        </svg>
                    </div>
                    <h4 class="cs-card-title cs-title-teal">ANNUAL MAINTENANCE CONTRACTS (AMC)</h4>
                    <p class="cs-card-desc">Comprehensive AMC plans to keep your systems running efficiently all year round.</p>
                </div>

                <div class="core-service-card">
                    <div class="cs-icon-circle cs-circle-navy">
                        <svg viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="3"></circle>
                            <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                        </svg>
                    </div>
                    <h4 class="cs-card-title cs-title-navy">UPGRADES &amp; RETROFITS</h4>
                    <p class="cs-card-desc">System upgrades, retrofits and performance enhancement solutions for existing installations.</p>
                </div>

                <div class="core-service-card">
                    <div class="cs-icon-circle cs-circle-teal">
                        <svg viewBox="0 0 24 24">
                            <path d="M10 2v7.5L4.5 18A2 2 0 0 0 6.2 21h11.6a2 2 0 0 0 1.7-3L14 9.5V2"></path>
                            <path d="M8.5 2h7"></path>
                            <path d="M7 16h10"></path>
                        </svg>
                    </div>
                    <h4 class="cs-card-title cs-title-teal">WATER TESTING &amp; ANALYSIS</h4>
                    <p class="cs-card-desc">Accurate testing and analysis to ensure water quality, compliance and process optimization.</p>
                </div>

                <div class="core-service-card">
                    <div class="cs-icon-circle cs-circle-navy">
                        <svg viewBox="0 0 24 24">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                            <path d="M8 11l3 3 5-5"></path>
                        </svg>
                    </div>
                    <h4 class="cs-card-title cs-title-navy">CONSULTATION &amp; TECHNICAL SUPPORT</h4>
                    <p class="cs-card-desc">Expert guidance and 24/7 support to address your challenges and deliver the right solutions.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     LAB WATER QUALITY BOOKING FORM
     ========================================================================== -->
<section class="section section-bg">
    <div class="container">
        <div class="grid-2">
            <div class="animate-on-scroll">
                <h2 style="font-size: 2.2rem; margin-bottom: 1.5rem;">Book Lab Water Test</h2>
                <p style="color: var(--text-light); margin-bottom: 1.5rem; font-size: 1rem;">
                    Understanding your water is the first step towards health. Aqua Solve Water Clinic operates an advanced chemical laboratory at Surabhi Complex, Karadi, Thamarassery.
                </p>
                <p style="color: var(--text-light); margin-bottom: 1.5rem; font-size: 0.95rem;">
                    Simply schedule an on-site sample collection, or bring 1 Litre of your groundwater in a clean bottle directly to our collection counter. Our technicians test for acidity, calcium carbonate hardness, iron sediment presence, and biological bacteria.
                </p>
                <div style="display: flex; gap: 1.5rem; margin-top: 2rem;">
                    <div class="info-item" style="color: var(--primary-color);">
                        <div class="info-icon" style="background: var(--bg-cyan-light);"><svg viewBox="0 0 24 24" style="fill: var(--primary-color);"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg></div>
                        <div class="info-text">
                            <h4 style="font-size: 0.95rem; font-weight: 700;">Lab Address</h4>
                            <p style="font-size: 0.85rem; color: var(--text-light);">Surabhi Complex, Karadi, Thamarassery</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="animate-on-scroll">
                <div class="booking-form-box">
                    <h3 style="font-size: 1.5rem; margin-bottom: 1.5rem; color: var(--primary-color);">Schedule Testing</h3>
                    <form id="labTestingForm">
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" id="name" class="form-control" required placeholder="Enter name" />
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="tel" id="phone" class="form-control" required placeholder="Phone number" />
                            </div>
                            <div class="form-group">
                                <label for="source">Water Source</label>
                                <select id="source" class="form-control">
                                    <option>Open Well</option>
                                    <option>Borewell groundwater</option>
                                    <option>Corporation water supply</option>
                                    <option>Rainwater tank</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="location">Testing Location preference</label>
                            <select id="location" class="form-control">
                                <option>On-site Technician Visit (Kozhikode district only)</option>
                                <option>I will drop-off water sample at Thamarassery Lab</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="issues">Water Issues Observed (Optional)</label>
                            <textarea id="issues" class="form-control" placeholder="E.g., Reddish color, salty taste, scaling on bathroom taps..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" style="width: 100%;">
                            Schedule Analysis
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     FAQ ACCORDION
     ========================================================================== -->
<section class="section">
    <div class="container">
        <div class="section-header animate-on-scroll">
            <h2>Frequently Asked Questions</h2>
            <p>Read quick answers regarding water quality parameters, filter maintenance, and operations.</p>
        </div>

        <div class="faq-container animate-on-scroll">
            <div class="faq-item">
                <div class="faq-header">
                    <h3>How often should I test my water supply?</h3>
                    <svg class="faq-toggle-icon" viewBox="0 0 24 24"><path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z"/></svg>
                </div>
                <div class="faq-body" style="height: 0px; overflow: hidden;">
                    <p>For private well or borewells in Kozhikode, we recommend a laboratory analysis at least once a year. If you observe reddish iron deposits, salty taste, or scaling on your bathroom fittings, schedule a test immediately to protect your pipe network and health.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-header">
                    <h3>What is TDS and what level is safe for drinking?</h3>
                    <svg class="faq-toggle-icon" viewBox="0 0 24 24"><path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z"/></svg>
                </div>
                <div class="faq-body" style="height: 0px; overflow: hidden;">
                    <p>TDS stands for Total Dissolved Solids. It represents the total mineral concentration in water. According to WHO and BIS parameters, a TDS level below 300 mg/litre (PPM) is considered excellent. If your source water has TDS exceeding 500 PPM, deploying a Reverse Osmosis (RO) purifier is highly recommended.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-header">
                    <h3>How frequently do filter cartridges need replacement?</h3>
                    <svg class="faq-toggle-icon" viewBox="0 0 24 24"><path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z"/></svg>
                </div>
                <div class="faq-body" style="height: 0px; overflow: hidden;">
                    <p>The external spun pre-filter cartridge should be replaced every 3 to 6 months depending on water turbidity. Internal carbon and sediment cartridges typically last 9 to 12 months, while primary RO membranes should be checked and replaced every 1.5 to 2 years under regular domestic usage.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-header">
                    <h3>Do you offer Annual Maintenance Contracts (AMC)?</h3>
                    <svg class="faq-toggle-icon" viewBox="0 0 24 24"><path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z"/></svg>
                </div>
                <div class="faq-body" style="height: 0px; overflow: hidden;">
                    <p>Yes. Aqua Solve Water Clinic offers structured, affordable domestic and commercial AMC packages. Our plans cover quarterly cleaning visits, filter swaps, pump audits, and priority free assistance for call-outs, saving you from heavy emergency repair bills.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-header">
                    <h3>What is the difference between RO and UV purification?</h3>
                    <svg class="faq-toggle-icon" viewBox="0 0 24 24"><path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z"/></svg>
                </div>
                <div class="faq-body" style="height: 0px; overflow: hidden;">
                    <p>Reverse Osmosis (RO) uses a semi-permeable membrane to physical block dissolved chemicals, heavy metals, and salts, reducing TDS. Ultra-Violet (UV) uses high-intensity light to neutralize bacteria and viruses without changing water chemistry or TDS. Low TDS water only needs UV/UF, while high TDS water requires RO.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
