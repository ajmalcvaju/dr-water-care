<?php
/**
 * Template Name: Front Page
 *
 * @package Aqua_Solve
 */

get_header();
?>

<!-- ==========================================================================
     1. HERO SECTION
     ========================================================================== -->
<section class="hero-slider-container" aria-label="Corporate Hero Showcase">
    <div class="slider-wrapper">
        <!-- Slide 1: Engineering Water. Enabling Life. -->
        <div class="slide active">
            <div class="container">
                <div class="slide-content-grid">
                    <div class="slide-text">
                        <span class="iso-badge" style="display: inline-block; background: rgba(2,132,199,0.1); color: #0284c7; padding: 0.35rem 0.9rem; border-radius: 4px; font-weight: 700; font-size: 0.85rem; margin-bottom: 1rem; letter-spacing: 0.5px;">ISO 9001:2015 CERTIFIED ENGINEERING</span>
                        <h1 style="font-size: 2.8rem; line-height: 1.2; margin-bottom: 1rem;">Engineering Water.<br /><span style="color: #0284c7;">Enabling Life.</span></h1>
                        <p class="slide-sub" style="font-size: 1.1rem; font-weight: 500; color: #475569; margin-bottom: 1.5rem;">Advanced Water &amp; Wastewater Treatment Solutions for Commercial, Industrial &amp; Institutional Applications.</p>
                        <ul class="slide-bullets">
                            <li>
                                <svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" /></svg>
                                Turnkey Commercial &amp; Industrial RO Plants
                            </li>
                            <li>
                                <svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" /></svg>
                                STP, ETP &amp; Advanced BioZone Technology
                            </li>
                            <li>
                                <svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" /></svg>
                                End-to-End System Design, Execution &amp; AMC / O&amp;M
                            </li>
                        </ul>
                        <div class="slide-buttons" style="display: flex; gap: 1rem; margin-top: 1.5rem; flex-wrap: wrap;">
                            <button class="btn btn-primary trigger-quote" data-product="Engineering Consultation">
                                Request a Consultation
                            </button>
                            <a href="<?php echo esc_url(aqua_solve_page_url('solutions')); ?>" class="btn btn-secondary">Explore Our Solutions</a>
                        </div>
                    </div>
                    <div class="slide-visual">
                        <img src="<?php echo aqua_solve_asset('images/about_ro_plant.png'); ?>" alt="Commercial Water Treatment Plant Engineering" class="slide-image" style="border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);" />
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 2: BioZone Technology USP -->
        <div class="slide">
            <div class="container">
                <div class="slide-content-grid">
                    <div class="slide-text">
                        <span class="iso-badge" style="display: inline-block; background: rgba(37,99,235,0.1); color: #2563eb; padding: 0.35rem 0.9rem; border-radius: 4px; font-weight: 700; font-size: 0.85rem; margin-bottom: 1rem; letter-spacing: 0.5px;">ADVANCED TREATMENT TECHNOLOGY</span>
                        <h2 style="font-size: 2.5rem; line-height: 1.2; margin-bottom: 1rem;">BioZone Technology<br /><span style="color: #0284c7;">Compact STP &amp; ETP USP</span></h2>
                        <p class="slide-sub" style="font-size: 1.1rem; font-weight: 500; color: #475569; margin-bottom: 1.5rem;">Engineered for minimal footprint, reduced civil construction, low energy operation, and effective odour control.</p>
                        <ul class="slide-bullets">
                            <li>
                                <svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" /></svg>
                                Demand-driven ON/OFF operational flexibility
                            </li>
                            <li>
                                <svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" /></svg>
                                Ozone-based advanced disinfection &amp; low power draw
                            </li>
                            <li>
                                <svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" /></svg>
                                Ideal for Hotels, Resorts, Apartments &amp; Hospitals
                            </li>
                        </ul>
                        <div class="slide-buttons" style="display: flex; gap: 1rem; margin-top: 1.5rem; flex-wrap: wrap;">
                            <a href="<?php echo esc_url(aqua_solve_page_url('biozone-technology')); ?>" class="btn btn-primary">Discover BioZone</a>
                            <button class="btn btn-secondary trigger-quote" data-product="BioZone STP Consultation">
                                Request Site Assessment
                            </button>
                        </div>
                    </div>
                    <div class="slide-visual">
                        <img src="<?php echo aqua_solve_asset('images/stp_plant.png'); ?>" alt="BioZone STP Sewage Treatment Plant" class="slide-image" style="border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);" />
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
     2. CORE ENGINEERING SOLUTIONS
     ========================================================================== -->
<section class="section" style="padding: 4rem 0;">
    <div class="container">
        <div class="section-header animate-on-scroll text-center" style="margin-bottom: 3rem;">
            <span style="color: #0284c7; font-weight: 700; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px;">Primary Business Focus</span>
            <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a; margin-top: 0.4rem;">Core Engineering Solutions</h2>
            <p style="max-width: 700px; margin: 0.5rem auto 0 auto; color: #64748b;">Industrial and commercial treatment plants engineered to meet stringent process, health, and environmental parameters.</p>
        </div>

        <div class="plants-grid">
            <!-- Solution 1: Commercial RO Plants -->
            <a href="<?php echo esc_url(aqua_solve_service_url('ro-plant-commercial-industrial')); ?>" class="plant-card-link animate-on-scroll">
                <div class="plant-card">
                    <div class="plant-tag tag-wtp">COMMERCIAL RO</div>
                    <div class="plant-img-wrapper">
                        <img src="<?php echo aqua_solve_asset('images/product_commercial_ro.png'); ?>" alt="Commercial RO Plant" />
                    </div>
                    <div class="plant-info">
                        <h3 style="font-size: 1.2rem; color: #0f172a; margin-bottom: 0.4rem;">Commercial RO Plants</h3>
                        <p>High-capacity reverse osmosis purification systems engineered for hotels, clinics, offices, and institutions.</p>
                        <div class="plant-card-action">
                            <span>Explore Solution</span> &rarr;
                        </div>
                    </div>
                </div>
            </a>

            <!-- Solution 2: Industrial RO Plants -->
            <a href="<?php echo esc_url(aqua_solve_service_url('ro-plant-commercial-industrial')); ?>" class="plant-card-link animate-on-scroll">
                <div class="plant-card">
                    <div class="plant-tag tag-wtp">INDUSTRIAL RO</div>
                    <div class="plant-img-wrapper">
                        <img src="<?php echo aqua_solve_asset('images/about_ro_plant.png'); ?>" alt="Industrial RO Plant" />
                    </div>
                    <div class="plant-info">
                        <h3 style="font-size: 1.2rem; color: #0f172a; margin-bottom: 0.4rem;">Industrial RO Plants</h3>
                        <p>Heavy-duty engineered RO solutions designed to handle high TDS water requirements in manufacturing and processing plants.</p>
                        <div class="plant-card-action">
                            <span>Explore Solution</span> &rarr;
                        </div>
                    </div>
                </div>
            </a>

            <!-- Solution 3: STP -->
            <a href="<?php echo esc_url(aqua_solve_service_url('sewage-treatment-plant-stp')); ?>" class="plant-card-link animate-on-scroll">
                <div class="plant-card">
                    <div class="plant-tag tag-stp">STP PLANT</div>
                    <div class="plant-img-wrapper">
                        <img src="<?php echo aqua_solve_asset('images/stp_plant.png'); ?>" alt="Sewage Treatment Plant (STP)" />
                    </div>
                    <div class="plant-info">
                        <h3 style="font-size: 1.2rem; color: #0f172a; margin-bottom: 0.4rem;">Sewage Treatment Plants (STP)</h3>
                        <p>Turnkey domestic wastewater treatment facilities engineered for apartments, resorts, malls, and commercial complexes.</p>
                        <div class="plant-card-action">
                            <span>Explore Solution</span> &rarr;
                        </div>
                    </div>
                </div>
            </a>

            <!-- Solution 4: ETP -->
            <a href="<?php echo esc_url(aqua_solve_service_url('effluent-treatment-plant-etp')); ?>" class="plant-card-link animate-on-scroll">
                <div class="plant-card">
                    <div class="plant-tag tag-etp">ETP PLANT</div>
                    <div class="plant-img-wrapper">
                        <img src="<?php echo aqua_solve_asset('images/etp_plant.png'); ?>" alt="Effluent Treatment Plant (ETP)" />
                    </div>
                    <div class="plant-info">
                        <h3 style="font-size: 1.2rem; color: #0f172a; margin-bottom: 0.4rem;">Effluent Treatment Plants (ETP)</h3>
                        <p>Advanced industrial wastewater treatment setups featuring chemical coagulation, settling, and Zero Liquid Discharge (ZLD) configurations.</p>
                        <div class="plant-card-action">
                            <span>Explore Solution</span> &rarr;
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- ==========================================================================
     3. COMPANY OVERVIEW & BRAND PROMISE
     ========================================================================== -->
<section class="section section-bg" style="padding: 4rem 0;">
    <div class="container">
        <div style="max-width: 950px; margin: 0 auto;">
            <div style="text-align: center; margin-bottom: 2.5rem;" class="animate-on-scroll">
                <span style="color: #0284c7; font-weight: 700; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px;">Company Profile</span>
                <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a; margin-top: 0.5rem;">Advanced Water Treatment Engineering</h2>
                <p style="color: #475569; font-size: 1.1rem; line-height: 1.7; margin-top: 1rem;">
                    AquaSolve Water Clinic delivers advanced water treatment solutions for commercial, industrial, and institutional clients. From engineering and system supply to installation, commissioning, and long-term maintenance, AquaSolve provides integrated water treatment solutions tailored to project and water quality requirements.
                </p>
                <div style="margin-top: 1.5rem;">
                    <a href="<?php echo esc_url(aqua_solve_page_url('about')); ?>" class="btn btn-primary" style="display: inline-block;">Discover AquaSolve</a>
                </div>
            </div>

            <!-- Brand Promise Banner -->
            <div style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); color: #fff; border-radius: 12px; padding: 2.2rem; text-align: center; border-left: 5px solid #0284c7; box-shadow: 0 10px 25px rgba(0,0,0,0.15);" class="animate-on-scroll">
                <span style="color: #38bdf8; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">Our Brand Promise</span>
                <blockquote style="font-size: 1.25rem; font-weight: 600; line-height: 1.6; margin: 0.8rem 0 0; color: #f8fafc;">
                    “We don't just install water treatment systems.<br />We build long-term confidence through engineering, quality, and service.”
                </blockquote>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     4. FEATURED PROJECTS (NEW SECTION)
     ========================================================================== -->
<section class="section" style="padding: 4rem 0;">
    <div class="container">
        <div class="section-header animate-on-scroll text-center" style="margin-bottom: 3rem;">
            <span style="color: #0284c7; font-weight: 700; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px;">Proven Track Record</span>
            <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a; margin-top: 0.4rem;">Featured Projects</h2>
            <p style="max-width: 680px; margin: 0.5rem auto 0 auto; color: #64748b;">Engineering solutions delivered across commercial, industrial and institutional applications.</p>
        </div>

        <div class="featured-projects-grid animate-on-scroll">
            <!-- Project Card 1: Sea Shells Beach Resort -->
            <div class="featured-project-card" style="border: 1px solid #e2e8f0; border-radius: 12px; overflow: hidden; background: #fff; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 4px 12px rgba(0,0,0,0.03); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                <div class="project-img-wrapper" style="width: 100%; height: 200px; overflow: hidden;">
                    <img src="<?php echo aqua_solve_asset('images/about_ro_plant.png'); ?>" alt="Sea Shells Beach Resort Seawater RO Plant" style="width: 100%; height: 100%; object-fit: cover;" />
                </div>
                <div style="padding: 1.5rem; display: flex; flex-direction: column; flex-grow: 1; justify-content: space-between;">
                    <div>
                        <span style="display: inline-block; background: #e0f2fe; color: #0369a1; padding: 0.25rem 0.75rem; border-radius: 4px; font-size: 0.78rem; font-weight: 700; text-transform: uppercase; margin-bottom: 0.6rem;">Seawater RO</span>
                        <h3 style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin-bottom: 0.3rem;">Sea Shells Beach Resort</h3>
                        <p style="color: #64748b; font-size: 0.88rem; font-weight: 500; margin-bottom: 1.2rem;">Agatti, Lakshadweep</p>
                    </div>
                    <div>
                        <a href="<?php echo esc_url(aqua_solve_page_url('projects')); ?>#sea-shells-beach-resort" class="btn btn-secondary" style="width: 100%; text-align: center; justify-content: center; font-size: 0.9rem; font-weight: 700; padding: 0.75rem 1rem;">View Project &rarr;</a>
                    </div>
                </div>
            </div>

            <!-- Project Card 2: Ozone Chip Boards -->
            <div class="featured-project-card" style="border: 1px solid #e2e8f0; border-radius: 12px; overflow: hidden; background: #fff; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 4px 12px rgba(0,0,0,0.03); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                <div class="project-img-wrapper" style="width: 100%; height: 200px; overflow: hidden;">
                    <img src="<?php echo aqua_solve_asset('images/industry_factory.png'); ?>" alt="Ozone Chip Boards Industrial RO Plant" style="width: 100%; height: 100%; object-fit: cover;" />
                </div>
                <div style="padding: 1.5rem; display: flex; flex-direction: column; flex-grow: 1; justify-content: space-between;">
                    <div>
                        <span style="display: inline-block; background: #e0f2fe; color: #0369a1; padding: 0.25rem 0.75rem; border-radius: 4px; font-size: 0.78rem; font-weight: 700; text-transform: uppercase; margin-bottom: 0.6rem;">Industrial RO</span>
                        <h3 style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin-bottom: 0.3rem;">Ozone Chip Boards</h3>
                        <p style="color: #64748b; font-size: 0.88rem; font-weight: 500; margin-bottom: 1.2rem;">Palakkad, Kerala</p>
                    </div>
                    <div>
                        <a href="<?php echo esc_url(aqua_solve_page_url('projects')); ?>#ozone-chip-boards" class="btn btn-secondary" style="width: 100%; text-align: center; justify-content: center; font-size: 0.9rem; font-weight: 700; padding: 0.75rem 1rem;">View Project &rarr;</a>
                    </div>
                </div>
            </div>

            <!-- Project Card 3: Match Grill -->
            <div class="featured-project-card" style="border: 1px solid #e2e8f0; border-radius: 12px; overflow: hidden; background: #fff; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 4px 12px rgba(0,0,0,0.03); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                <div class="project-img-wrapper" style="width: 100%; height: 200px; overflow: hidden;">
                    <img src="<?php echo aqua_solve_asset('images/stp_plant.png'); ?>" alt="Match Grill Restaurant BioZone STP Plant" style="width: 100%; height: 100%; object-fit: cover;" />
                </div>
                <div style="padding: 1.5rem; display: flex; flex-direction: column; flex-grow: 1; justify-content: space-between;">
                    <div>
                        <span style="display: inline-block; background: #e0f2fe; color: #0369a1; padding: 0.25rem 0.75rem; border-radius: 4px; font-size: 0.78rem; font-weight: 700; text-transform: uppercase; margin-bottom: 0.6rem;">BioZone STP</span>
                        <h3 style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin-bottom: 0.3rem;">Match Grill</h3>
                        <p style="color: #64748b; font-size: 0.88rem; font-weight: 500; margin-bottom: 1.2rem;">Kerala</p>
                    </div>
                    <div>
                        <a href="<?php echo esc_url(aqua_solve_page_url('projects')); ?>#match-grill" class="btn btn-secondary" style="width: 100%; text-align: center; justify-content: center; font-size: 0.9rem; font-weight: 700; padding: 0.75rem 1rem;">View Project &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     5. INDUSTRIES WE SERVE
     ========================================================================== -->
<section class="section key-industries-section" aria-label="Key Industries Served" style="background: #f8fafc; padding: 4rem 0;">
    <div class="container">
        <div class="section-header animate-on-scroll text-center" style="margin-bottom: 3rem;">
            <span style="color: #0284c7; font-weight: 700; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px;">Application Sectors</span>
            <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a; margin-top: 0.4rem;">Industries We Serve</h2>
            <p style="max-width: 650px; margin: 0.5rem auto 0 auto; color: #64748b;">Delivering tailored commercial and industrial water treatment installations across South India.</p>
        </div>

        <div class="industries-grid">
            <div class="industry-card animate-on-scroll">
                <div class="industry-header">
                    <div class="industry-icon-circle">
                        <svg viewBox="0 0 24 24"><path d="M7 13c1.66 0 3-1.34 3-3S8.66 7 7 7s-3 1.34-3 3 1.34 3 3 3zm12-6h-8v7H3V5H1v15h2v-3h18v3h2v-9c0-2.21-1.79-4-4-4z"/></svg>
                    </div>
                    <h3>HOTELS &amp; RESORTS</h3>
                    <p>High-capacity RO plants and STP setups for guest comfort, kitchen supply, and landscaping.</p>
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
                    <h3>HOSPITALS &amp; CLINICS</h3>
                    <p>Purified water systems meeting stringent biological and mineral parameters for healthcare facilities.</p>
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
                    <h3>APARTMENTS &amp; TOWNSHIPS</h3>
                    <p>Centralized groundwater filtration, softeners, and domestic sewage treatment plants.</p>
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
                    <h3>MANUFACTURING &amp; FACTORIES</h3>
                    <p>Custom ETP, RO, and process water treatment plants engineered for industrial specifications.</p>
                </div>
                <div class="industry-image-wrapper">
                    <img src="<?php echo aqua_solve_asset('images/industry_factory.png'); ?>" alt="Industries & Factories" />
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     6. BIOZONE TECHNOLOGY HIGHLIGHT (SINGLE COMBINED SECTION)
     ========================================================================== -->
<section class="section biozone-highlight-section" style="padding: 4rem 0;">
    <div class="container">
        <div class="biozone-highlight-container animate-on-scroll">
            <div class="biozone-highlight-col-text">
                <div class="biozone-highlight-header">
                    <span style="color: #0284c7; font-weight: 700; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 1px; display: block; margin-bottom: 0.4rem;">Technology Highlight</span>
                    <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a; margin: 0 0 0.4rem;">BioZone Technology</h2>
                    <h4 style="font-size: 1.15rem; color: #0284c7; font-weight: 600; margin: 0 0 1.2rem;">A Smarter Approach to Wastewater Treatment</h4>
                </div>

                <!-- Image for Mobile View (below heading) -->
                <div class="biozone-highlight-image mobile-only-image">
                    <img src="<?php echo aqua_solve_asset('images/stp_plant.png'); ?>" alt="BioZone Sewage Treatment System" />
                </div>

                <div class="biozone-highlight-desc">
                    <p style="color: #475569; font-size: 1rem; line-height: 1.7; margin-bottom: 1.5rem;">
                        BioZone is AquaSolve’s specialized biological treatment technology designed for compact, energy-efficient Sewage and Effluent Treatment Plants. Engineered to overcome space constraints and operational complexity, BioZone offers sustainable wastewater treatment performance.
                    </p>
                    <div class="biozone-checklist-grid">
                        <div class="biozone-check-item">✓ Compact Footprint</div>
                        <div class="biozone-check-item">✓ Reduced Civil Work</div>
                        <div class="biozone-check-item">✓ ON/OFF Operation</div>
                        <div class="biozone-check-item">✓ Ozone Disinfection</div>
                        <div class="biozone-check-item">✓ Odour Minimization</div>
                        <div class="biozone-check-item">✓ Lower Power Draw</div>
                    </div>
                </div>

                <div class="biozone-highlight-action">
                    <a href="<?php echo esc_url(aqua_solve_page_url('biozone-technology')); ?>" class="btn btn-primary" style="padding: 0.9rem 2.2rem; font-size: 1rem; font-weight: 700; display: inline-block;">Explore BioZone Technology</a>
                </div>
            </div>

            <!-- Image for Desktop View (Right Column) -->
            <div class="biozone-highlight-col-image desktop-only-image">
                <img src="<?php echo aqua_solve_asset('images/stp_plant.png'); ?>" alt="BioZone Sewage Treatment System" />
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     7. SUPPORTING SOLUTIONS & LIFECYCLE SERVICES
     ========================================================================== -->
<section class="section section-bg" style="padding: 4rem 0;">
    <div class="container">
        <!-- Supporting Water Solutions -->
        <div style="margin-bottom: 3.5rem;">
            <div class="section-header animate-on-scroll text-center" style="margin-bottom: 2rem;">
                <span style="color: #0284c7; font-weight: 700; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 1px;">Complementary Systems</span>
                <h2 style="font-size: 1.8rem; font-weight: 800; color: #0f172a; margin-top: 0.3rem;">Supporting Water Solutions</h2>
            </div>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(230px, 1fr)); gap: 1.2rem;" class="animate-on-scroll">
                <div style="background: #fff; border: 1px solid #e2e8f0; border-radius: 8px; padding: 1.4rem; text-align: center;">
                    <h4 style="color: #0f172a; margin-bottom: 0.5rem;">Water Softener Systems</h4>
                    <p style="color: #64748b; font-size: 0.85rem; margin: 0;">Ion-exchange softeners to eliminate hardness scaling in commercial plumbing.</p>
                </div>
                <div style="background: #fff; border: 1px solid #e2e8f0; border-radius: 8px; padding: 1.4rem; text-align: center;">
                    <h4 style="color: #0f172a; margin-bottom: 0.5rem;">Iron Removal Plants</h4>
                    <p style="color: #64748b; font-size: 0.85rem; margin: 0;">Manganese media filter vessels to oxidize dissolved ferrous iron and odor.</p>
                </div>
                <div style="background: #fff; border: 1px solid #e2e8f0; border-radius: 8px; padding: 1.4rem; text-align: center;">
                    <h4 style="color: #0f172a; margin-bottom: 0.5rem;">Commercial Water Coolers</h4>
                    <p style="color: #64748b; font-size: 0.85rem; margin: 0;">Stainless steel high-capacity drinking water cooling dispensers for offices &amp; schools.</p>
                </div>
                <div style="background: #fff; border: 1px solid #e2e8f0; border-radius: 8px; padding: 1.4rem; text-align: center;">
                    <h4 style="color: #0f172a; margin-bottom: 0.5rem;">Water Purifiers</h4>
                    <p style="color: #64748b; font-size: 0.85rem; margin: 0;">Multi-stage alkaline drinking water purifiers for domestic &amp; small business units.</p>
                </div>
            </div>
        </div>

        <!-- Lifecycle Services -->
        <div>
            <div class="section-header animate-on-scroll text-center" style="margin-bottom: 2rem;">
                <span style="color: #0284c7; font-weight: 700; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 1px;">Lifecycle Care</span>
                <h2 style="font-size: 1.8rem; font-weight: 800; color: #0f172a; margin-top: 0.3rem;">Lifecycle Services &amp; Maintenance</h2>
            </div>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(230px, 1fr)); gap: 1.2rem;" class="animate-on-scroll">
                <div style="background: #fff; border-left: 4px solid #0284c7; border-radius: 6px; padding: 1.2rem; border-top: 1px solid #e2e8f0; border-right: 1px solid #e2e8f0; border-bottom: 1px solid #e2e8f0;">
                    <h4 style="color: #0f172a; margin-bottom: 0.3rem;">Annual Maintenance Contracts (AMC)</h4>
                    <p style="color: #64748b; font-size: 0.85rem; margin: 0;">Structured periodic check-ups &amp; membrane replacements to maintain system uptime.</p>
                </div>
                <div style="background: #fff; border-left: 4px solid #0284c7; border-radius: 6px; padding: 1.2rem; border-top: 1px solid #e2e8f0; border-right: 1px solid #e2e8f0; border-bottom: 1px solid #e2e8f0;">
                    <h4 style="color: #0f172a; margin-bottom: 0.3rem;">Operations &amp; Maintenance (O&amp;M)</h4>
                    <p style="color: #64748b; font-size: 0.85rem; margin: 0;">Deputed technical plant operators for daily monitoring of STP, ETP &amp; RO facilities.</p>
                </div>
                <div style="background: #fff; border-left: 4px solid #0284c7; border-radius: 6px; padding: 1.2rem; border-top: 1px solid #e2e8f0; border-right: 1px solid #e2e8f0; border-bottom: 1px solid #e2e8f0;">
                    <h4 style="color: #0f172a; margin-bottom: 0.3rem;">Water Testing &amp; Analysis</h4>
                    <p style="color: #64748b; font-size: 0.85rem; margin: 0;">Diagnostic lab water analysis (pH, TDS, Hardness, Bacteria) prior to system design.</p>
                </div>
                <div style="background: #fff; border-left: 4px solid #0284c7; border-radius: 6px; padding: 1.2rem; border-top: 1px solid #e2e8f0; border-right: 1px solid #e2e8f0; border-bottom: 1px solid #e2e8f0;">
                    <h4 style="color: #0f172a; margin-bottom: 0.3rem;">Technical Support &amp; Retrofits</h4>
                    <p style="color: #64748b; font-size: 0.85rem; margin: 0;">System overhauling, media replacement, and plant capacity expansion retrofits.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     8. TECHNICAL FAQ
     ========================================================================== -->
<section class="section" style="padding: 4rem 0;">
    <div class="container" style="max-width: 850px;">
        <div class="section-header animate-on-scroll text-center" style="margin-bottom: 3rem;">
            <span style="color: #0284c7; font-weight: 700; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px;">Frequently Asked Questions</span>
            <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a; margin-top: 0.4rem;">Technical FAQs</h2>
        </div>

        <div style="display: flex; flex-direction: column; gap: 1rem;" class="animate-on-scroll">
            <details style="background: #fff; border: 1px solid #e2e8f0; border-radius: 8px; padding: 1.2rem; cursor: pointer;">
                <summary style="font-weight: 700; color: #0f172a; font-size: 1.05rem;">What water treatment solutions does AquaSolve provide?</summary>
                <p style="color: #475569; margin-top: 0.8rem; font-size: 0.92rem; line-height: 1.6;">
                    AquaSolve Water Clinic engineers Commercial and Industrial RO Plants, Sewage Treatment Plants (STP), Effluent Treatment Plants (ETP), BioZone Technology setups, Water Softeners, Iron Removal Plants, and Laboratory Water Analysis services.
                </p>
            </details>

            <details style="background: #fff; border: 1px solid #e2e8f0; border-radius: 8px; padding: 1.2rem; cursor: pointer;">
                <summary style="font-weight: 700; color: #0f172a; font-size: 1.05rem;">What is the difference between commercial and industrial RO?</summary>
                <p style="color: #475569; margin-top: 0.8rem; font-size: 0.92rem; line-height: 1.6;">
                    Commercial RO systems (250 to 2,000 LPH) are designed for hospitality, clinics, and offices. Industrial RO plants (5,000+ LPH) feature heavy-duty high-pressure pumps, automation skids, and customized membrane configurations for manufacturing and process requirements.
                </p>
            </details>

            <details style="background: #fff; border: 1px solid #e2e8f0; border-radius: 8px; padding: 1.2rem; cursor: pointer;">
                <summary style="font-weight: 700; color: #0f172a; font-size: 1.05rem;">What is BioZone Technology?</summary>
                <p style="color: #475569; margin-top: 0.8rem; font-size: 0.92rem; line-height: 1.6;">
                    BioZone is AquaSolve’s specialized biological wastewater treatment solution designed for compact footprint, demand-based ON/OFF operation, ozone disinfection, and low electrical power draw without conventional heavy blowers.
                </p>
            </details>

            <details style="background: #fff; border: 1px solid #e2e8f0; border-radius: 8px; padding: 1.2rem; cursor: pointer;">
                <summary style="font-weight: 700; color: #0f172a; font-size: 1.05rem;">Does AquaSolve provide AMC and O&amp;M support?</summary>
                <p style="color: #475569; margin-top: 0.8rem; font-size: 0.92rem; line-height: 1.6;">
                    Yes. We provide comprehensive Annual Maintenance Contracts (AMC) and dedicated Operations &amp; Maintenance (O&amp;M) services with plant technicians to ensure continuous long-term system performance.
                </p>
            </details>
        </div>
    </div>
</section>

<!-- ==========================================================================
     9. FINAL CONVERSION CTA BANNER
     ========================================================================== -->
<section style="background: linear-gradient(135deg, #0284c7 0%, #0369a1 100%); color: #fff; padding: 4rem 0; text-align: center;">
    <div class="container" style="max-width: 850px;">
        <h2 style="font-size: 2.3rem; font-weight: 800; margin-bottom: 1rem;">Let's Engineer the Right Water Treatment Solution for Your Project.</h2>
        <p style="font-size: 1.1rem; color: #e0f2fe; margin-bottom: 2rem; line-height: 1.6;">
            Tell us about your water or wastewater treatment requirement and our engineering team can help identify the right approach for your application.
        </p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
            <button class="btn trigger-quote" data-product="Corporate Project Inquiry" style="background: #fff; color: #0284c7; font-weight: 700; padding: 0.9rem 2rem; border-radius: 50px; border: none; cursor: pointer;">
                Request a Consultation
            </button>
            <a href="https://wa.me/919946450452?text=Hi%20AquaSolve,%20I%20would%20like%20to%20discuss%20a%20water%20treatment%20engineering%20project." target="_blank" rel="noopener noreferrer" class="btn" style="background: #25D366; color: #fff; font-weight: 700; padding: 0.9rem 2rem; border-radius: 50px; text-decoration: none;">
                WhatsApp Our Team
            </a>
        </div>
    </div>
</section>

<?php
get_footer();
