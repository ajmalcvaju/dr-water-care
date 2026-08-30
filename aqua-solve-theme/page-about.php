<?php
/**
 * Template Name: About Us Page
 *
 * @package Aqua_Solve
 */

get_header();
?>

<!-- ==========================================================================
     PAGE BANNER
     ========================================================================== -->
<section class="page-banner" aria-label="About us page introduction">
    <div class="container">
        <h1>About Aqua Solve Water Clinic</h1>
        <p>A look into our history, values, and commitment to distributing clean water and premium wellness across Kozhikode since 2012.</p>
    </div>
    
    <!-- Banner Wave SVG -->
    <svg class="banner-wave" viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 32L60 48C120 64 240 96 360 101.3C480 107 600 85 720 69.3C840 53 960 43 1080 42.7C1200 43 1320 53 1380 58.7L1440 64V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0V32Z" fill="#F4F9F9"/>
    </svg>

    <div class="banner-decorations">
        <div class="bubble bubble-1"></div>
        <div class="bubble bubble-2"></div>
        <div class="bubble bubble-3"></div>
    </div>
</section>

<!-- ==========================================================================
     COMPANY PROFILE / PIONEERS IN CLEAN WATER TECHNOLOGY
     ========================================================================== -->
<section class="section section-bg" style="padding-top: 2.5rem; padding-bottom: 2.5rem;">
    <div class="container">
        <div class="pioneers-wrapper">
            <h2 class="pioneers-title pioneers-title-mobile animate-on-scroll">
                Pioneers in Clean Water Technology
            </h2>

            <div class="pioneers-grid">
                <div class="pioneers-image-column animate-on-scroll">
                    <img src="<?php echo aqua_solve_asset('images/about_iso_seal.jpg'); ?>" alt="ISO 9001:2015 Certified Company Seal" class="pioneers-img" />
                </div>

                <div class="pioneers-text-column animate-on-scroll">
                    <h2 class="pioneers-title pioneers-title-desktop">
                        Pioneers in Clean Water Technology
                    </h2>
                    <p class="pioneers-desc">
                        Aqua Solve Water Clinic was established with the vision of solving the water safety crises in Kozhikode and surrounding districts in Kerala. Recognising that municipal supply and groundwater have distinct chemical differences, we set out to build custom-engineered water purification products.
                    </p>
                    <p class="pioneers-desc">
                        Today, our ISO 9001:2015 certified assemblies filter harmful microbes, heavy minerals, and organic contamination in thousands of residential villas, apartment complexes, medical clinics, and commercial spaces.
                    </p>
                    <p class="pioneers-desc" style="margin-bottom: 0;">
                        We believe in the science of purification. We don't just supply filters; we analyze your water chemistry and curate customized membranes and sand components to match your exact water quality footprint.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     OUR VISION & MISSION
     ========================================================================== -->
<section class="section" style="padding-top: 3rem; padding-bottom: 3rem;">
    <div class="container">
        <div class="vision-mission-grid animate-on-scroll">
            <div class="vm-card vm-card-vision">
                <div class="vm-header">
                    <div class="vm-icon-circle">
                        <svg viewBox="0 0 24 24" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle cx="12" cy="12" r="3.5"></circle>
                            <path d="M12 5v-1.5M12 20.5v-1.5M4.93 4.93l-1.06-1.06M20.13 20.13l-1.06-1.06M19.07 4.93l1.06-1.06M3.87 20.13l1.06-1.06"></path>
                        </svg>
                    </div>
                    <div class="vm-title-wrap">
                        <h3 class="vm-title">OUR VISION</h3>
                        <div class="vm-underline"></div>
                    </div>
                </div>
                <p class="vm-desc">
                    To be a trusted leader in water treatment solutions, recognized for excellence, innovation and commitment to a sustainable tomorrow.
                </p>
                <svg class="vm-watermark" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1">
                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                    <circle cx="12" cy="12" r="3"></circle>
                </svg>
            </div>

            <div class="vm-card vm-card-mission">
                <div class="vm-header">
                    <div class="vm-icon-circle">
                        <svg viewBox="0 0 24 24" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="9"></circle>
                            <circle cx="12" cy="12" r="5"></circle>
                            <circle cx="12" cy="12" r="1.8" fill="#0096aa"></circle>
                            <path d="M22 2l-6.5 6.5M17.5 2H22v4.5"></path>
                        </svg>
                    </div>
                    <div class="vm-title-wrap">
                        <h3 class="vm-title">OUR MISSION</h3>
                        <div class="vm-underline"></div>
                    </div>
                </div>
                <p class="vm-desc">
                    To deliver reliable, cost-effective and environmentally responsible water treatment solutions that ensure clean water, regulatory compliance and long-term value for our clients.
                </p>
                <svg class="vm-watermark" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1">
                    <circle cx="12" cy="12" r="10"></circle>
                    <circle cx="12" cy="12" r="6"></circle>
                    <circle cx="12" cy="12" r="2"></circle>
                </svg>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     AQUASOLVE BY NUMBERS
     ========================================================================== -->
<section class="section stats-numbers-section animate-on-scroll">
    <div class="container">
        <div class="stats-numbers-header">
            <span class="stats-numbers-dash">&#9679;</span>
            <h2 class="stats-numbers-title">AQUASOLVE BY NUMBERS</h2>
            <span class="stats-numbers-dash">&#9679;</span>
        </div>

        <div class="stats-numbers-grid">
            <div class="stat-number-card">
                <div class="stat-icon-circle">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/>
                    </svg>
                </div>
                <div class="stat-number" data-target="10" data-suffix="+">10+</div>
                <div class="stat-label">Years of<br/>Experience</div>
            </div>

            <div class="stat-number-card">
                <div class="stat-icon-circle">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83-2.83l.06-.06A1.65 1.65 0 0 0 4.68 15a1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 2.83-2.83l.06.06A1.65 1.65 0 0 0 9 4.68a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 2.83l-.06.06A1.65 1.65 0 0 0 19.4 9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z"/>
                    </svg>
                </div>
                <div class="stat-number" data-target="250" data-suffix="+">250+</div>
                <div class="stat-label">Projects<br/>Completed</div>
            </div>

            <div class="stat-number-card">
                <div class="stat-icon-circle">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/>
                    </svg>
                </div>
                <div class="stat-number" data-target="200" data-suffix="+">200+</div>
                <div class="stat-label">Happy<br/>Clients</div>
            </div>

            <div class="stat-number-card">
                <div class="stat-icon-circle">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.77 3.77z"/>
                    </svg>
                </div>
                <div class="stat-number" data-target="50" data-suffix="+">50+</div>
                <div class="stat-label">AMC/O&M<br/>Clients</div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     OUR CERTIFICATIONS
     ========================================================================== -->
<section class="section certifications-section animate-on-scroll">
    <div class="container">
        <div class="stats-numbers-header" style="margin-bottom: 2.5rem;">
            <span class="stats-numbers-dash" style="color: var(--primary-color); font-size: 0.5rem;">&#9679;</span>
            <h2 class="certifications-title">OUR CERTIFICATIONS</h2>
            <span class="stats-numbers-dash" style="color: var(--primary-color); font-size: 0.5rem;">&#9679;</span>
        </div>

        <div class="certifications-grid">
            <div class="cert-card">
                <div class="cert-logo">
                    <img src="<?php echo aqua_solve_asset('images/cert-iso.png'); ?>" alt="ISO Certification Logo" class="cert-img" />
                </div>
                <div class="cert-number">9001:2015</div>
                <div class="cert-label">Quality Management</div>
            </div>

            <div class="cert-card">
                <div class="cert-logo">
                    <img src="<?php echo aqua_solve_asset('images/cert-iso.png'); ?>" alt="ISO Certification Logo" class="cert-img" />
                </div>
                <div class="cert-number">14001:2015</div>
                <div class="cert-label">Environmental<br/>Management</div>
            </div>

            <div class="cert-card">
                <div class="cert-logo">
                    <img src="<?php echo aqua_solve_asset('images/cert-msme.png'); ?>" alt="MSME Registered Enterprise Logo" class="cert-img" />
                </div>
                <div class="cert-number" style="visibility: hidden;">&nbsp;</div>
                <div class="cert-label">Registered<br/>Enterprise</div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     OUR CORE VALUES (GRID)
     ========================================================================== -->
<section class="section" style="padding-top: 2rem; padding-bottom: 2rem;">
    <div class="container">
        <div class="why-choose-section-box animate-on-scroll">
            <div class="why-choose-banner-header">
                <h3>&middot; OUR CORE VALUES &middot;</h3>
            </div>
            <div class="why-choose-grid">
                <div class="why-choose-card">
                    <div class="wc-icon-circle wc-circle-teal">
                        <svg viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="9"></circle>
                            <circle cx="12" cy="12" r="5"></circle>
                            <circle cx="12" cy="12" r="1.8" fill="#ffffff"></circle>
                            <path d="M22 2l-6.5 6.5M17.5 2H22v4.5"></path>
                        </svg>
                    </div>
                    <div class="wc-content">
                        <h4>INTEGRITY</h4>
                        <p>We believe in honest communication and ethical business practices.</p>
                    </div>
                </div>

                <div class="why-choose-card">
                    <div class="wc-icon-circle wc-circle-blue">
                        <svg viewBox="0 0 24 24">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    <div class="wc-content">
                        <h4>COMMITMENT</h4>
                        <p>We are committed to delivering quality in every project we undertake.</p>
                    </div>
                </div>

                <div class="why-choose-card">
                    <div class="wc-icon-circle wc-circle-teal">
                        <svg viewBox="0 0 24 24">
                            <path d="M9 18h6M10 22h4M15 9A3 3 0 0 0 9 9c0 2 2 3 2 4h2c0-1 2-2 2-4z"></path>
                            <line x1="12" y1="2" x2="12" y2="4"></line>
                            <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                            <line x1="1" y1="12" x2="3" y2="12"></line>
                            <line x1="21" y1="12" x2="23" y2="12"></line>
                            <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                        </svg>
                    </div>
                    <div class="wc-content">
                        <h4>INNOVATION</h4>
                        <p>We continuously innovate to provide better, smarter and sustainable solutions.</p>
                    </div>
                </div>

                <div class="why-choose-card">
                    <div class="wc-icon-circle wc-circle-blue">
                        <svg viewBox="0 0 24 24">
                            <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C5.34 5 3 7.34 3 10s2.34 5 5 5 5-2.34 5-5zm8 3c-2.33 0-7 1.17-7 3.5V20h14v-2.5c0-2.33-4.67-3.5-7-3.5z"></path>
                        </svg>
                    </div>
                    <div class="wc-content">
                        <h4>TEAMWORK</h4>
                        <p>We work together to achieve excellence and build lasting relationships.</p>
                    </div>
                </div>

                <div class="why-choose-card why-choose-full-width">
                    <div class="wc-icon-circle wc-circle-teal">
                        <svg viewBox="0 0 24 24">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                            <path d="M9 12l2 2 4-4"></path>
                        </svg>
                    </div>
                    <div class="wc-content">
                        <h4>RESPONSIBILITY</h4>
                        <p>We take responsibility towards our customers, society and environment.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     TIMELINE / HISTORY SECTION
     ========================================================================== -->
<section class="section section-bg">
    <div class="container">
        <div class="section-header animate-on-scroll">
            <h2>Our Journey & Timeline</h2>
            <p>Tracing the evolution of Aqua Solve Water Clinic from a local dealer into a prominent purification organization in Kerala.</p>
        </div>

        <div class="timeline-section">
            <div class="timeline-item animate-on-scroll">
                <div class="timeline-badge">2012</div>
                <div class="timeline-panel">
                    <div class="timeline-date">Inception</div>
                    <h3>The Beginning</h3>
                    <p>Aqua Solve Water Clinic opens as a small domestic filter supplier in Kozhikode, Kerala, aiming to improve local tap water standards.</p>
                </div>
            </div>

            <div class="timeline-item animate-on-scroll">
                <div class="timeline-badge">2015</div>
                <div class="timeline-panel">
                    <div class="timeline-date">Expansion & Certification</div>
                    <h3>ISO 9001:2015 Quality standards</h3>
                    <p>Achieved formal ISO quality standard certifications. Commenced domestic water softener custom configurations and expanded our installation teams.</p>
                </div>
            </div>

            <div class="timeline-item animate-on-scroll">
                <div class="timeline-badge">2018</div>
                <div class="timeline-panel">
                    <div class="timeline-date">Commercial Focus</div>
                    <h3>Industrial Filtration & Iron Plants</h3>
                    <p>Introduced high-volume sand filters, iron removal setups, and commercial RO treatment plants designed for colleges, clinics, and apartments.</p>
                </div>
            </div>

            <div class="timeline-item animate-on-scroll">
                <div class="timeline-badge">2022</div>
                <div class="timeline-panel">
                    <div class="timeline-date">Lab Installation</div>
                    <h3>Thamarassery Laboratory Launch</h3>
                    <p>Opened a dedicated water chemistry analysis laboratory in Thamarassery, Calicut, allowing scientific membrane custom adjustments based on local source footprints.</p>
                </div>
            </div>

            <div class="timeline-item animate-on-scroll">
                <div class="timeline-badge">2026</div>
                <div class="timeline-panel">
                    <div class="timeline-date">Present Day</div>
                    <h3>10,000+ Satisfied Connections</h3>
                    <p>Now a leading household name for water purifiers in Kerala, servicing massive clients like Spring Dale, BMH Hospital, and ULCCS projects.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     CALL TO ACTION
     ========================================================================== -->
<section class="cta-banner">
    <div class="container animate-on-scroll">
        <h2>Experience the Aqua Solve Water Clinic Difference</h2>
        <p>Get in touch with our team in Kozhikode to discuss your household scaling issues or business filtration requirements.</p>
        <button class="btn btn-primary trigger-quote" data-product="About Us Consultation" style="background: var(--bg-white); color: var(--primary-color); box-shadow: none;">
            Request Free Assessment
        </button>
    </div>
</section>

<?php
get_footer();
