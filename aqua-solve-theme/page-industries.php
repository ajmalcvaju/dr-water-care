<?php
/**
 * Template Name: Industries Page
 *
 * @package Aqua_Solve
 */

get_header();
?>

<!-- ==========================================================================
     INDUSTRIES HERO BANNER
     ========================================================================== -->
<section class="page-banner" aria-label="Industries page introduction">
    <div class="container">
        <h1>Industries We Serve</h1>
        <p>Custom water purification, RO treatment plants, and wastewater recycling systems engineered for diverse commercial, industrial, and institutional applications.</p>
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
     DETAILED SECTORS SHOWCASE
     ========================================================================== -->
<section class="section" style="padding: 4rem 0;">
    <div class="container">
        <div style="text-align: center; max-width: 750px; margin: 0 auto 3.5rem;">
            <span style="color: #0284c7; font-weight: 700; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px;">Tailored Engineering</span>
            <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a; margin-top: 0.4rem;">Water Challenges &amp; Customized Solutions</h2>
            <p style="color: #64748b;">Every sector presents distinct raw water chemistry, flow requirements, and discharge regulations.</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(340px, 1fr)); gap: 2rem;">
            <!-- Sector 1: Hotels & Resorts -->
            <div style="background: #fff; border: 1px solid #e2e8f0; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 10px rgba(0,0,0,0.03);">
                <img src="<?php echo aqua_solve_asset('images/industry_hotel.png'); ?>" alt="Hotels & Resorts Water Treatment" style="width: 100%; height: 200px; object-fit: cover;" />
                <div style="padding: 1.8rem;">
                    <span style="color: #0284c7; font-weight: 700; font-size: 0.8rem; text-transform: uppercase;">Hospitality Sector</span>
                    <h3 style="font-size: 1.3rem; color: #0f172a; margin: 0.4rem 0 0.8rem;">Hotels &amp; Resorts</h3>
                    <p style="color: #475569; font-size: 0.92rem; line-height: 1.6; margin-bottom: 1rem;">
                        <strong>Challenge:</strong> Fluctuating seasonal water demand, scaling in boilers/geysers, and strict treated effluent parameters for gardening.
                    </p>
                    <p style="color: #475569; font-size: 0.92rem; line-height: 1.6; margin-bottom: 1.2rem;">
                        <strong>AquaSolve Solution:</strong> Commercial RO plants for pure kitchen/drinking water, softeners for plumbing maintenance, and BioZone STP plants for odourless landscape recycling.
                    </p>
                    <button class="btn btn-primary trigger-quote" data-product="Hotels & Resorts Solution" style="width: 100%; text-align: center; justify-content: center;">
                        Inquire Hotel Solutions
                    </button>
                </div>
            </div>

            <!-- Sector 2: Hospitals & Healthcare -->
            <div style="background: #fff; border: 1px solid #e2e8f0; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 10px rgba(0,0,0,0.03);">
                <img src="<?php echo aqua_solve_asset('images/industry_hospital.png'); ?>" alt="Hospitals Water Treatment" style="width: 100%; height: 200px; object-fit: cover;" />
                <div style="padding: 1.8rem;">
                    <span style="color: #0284c7; font-weight: 700; font-size: 0.8rem; text-transform: uppercase;">Healthcare Sector</span>
                    <h3 style="font-size: 1.3rem; color: #0f172a; margin: 0.4rem 0 0.8rem;">Hospitals &amp; Healthcare Facilities</h3>
                    <p style="color: #475569; font-size: 0.92rem; line-height: 1.6; margin-bottom: 1rem;">
                        <strong>Challenge:</strong> Zero-microbe biological standards for dialysis, autoclaves, patient hydration, and disinfection liquid waste.
                    </p>
                    <p style="color: #475569; font-size: 0.92rem; line-height: 1.6; margin-bottom: 1.2rem;">
                        <strong>AquaSolve Solution:</strong> Multi-stage RO + Ultrafiltration (UF) setups with UV/ozone sterilization and high-capacity hospital ETP plants.
                    </p>
                    <button class="btn btn-primary trigger-quote" data-product="Hospitals & Healthcare Solution" style="width: 100%; text-align: center; justify-content: center;">
                        Inquire Hospital Solutions
                    </button>
                </div>
            </div>

            <!-- Sector 3: Apartments & Residential Townships -->
            <div style="background: #fff; border: 1px solid #e2e8f0; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 10px rgba(0,0,0,0.03);">
                <img src="<?php echo aqua_solve_asset('images/industry_apartment.png'); ?>" alt="Apartments Water Treatment" style="width: 100%; height: 200px; object-fit: cover;" />
                <div style="padding: 1.8rem;">
                    <span style="color: #0284c7; font-weight: 700; font-size: 0.8rem; text-transform: uppercase;">Residential Sector</span>
                    <h3 style="font-size: 1.3rem; color: #0f172a; margin: 0.4rem 0 0.8rem;">Apartments &amp; Residential Townships</h3>
                    <p style="color: #475569; font-size: 0.92rem; line-height: 1.6; margin-bottom: 1rem;">
                        <strong>Challenge:</strong> High iron turbidity in borewell water, hard mineral deposits in pipes, and daily municipal sewage discharge compliance.
                    </p>
                    <p style="color: #475569; font-size: 0.92rem; line-height: 1.6; margin-bottom: 1.2rem;">
                        <strong>AquaSolve Solution:</strong> Catalytic Manganese Iron Removal Vessels, Automatic Softeners, and compact BioZone STP plants for zero-nuisance operations.
                    </p>
                    <button class="btn btn-primary trigger-quote" data-product="Apartments Water Solution" style="width: 100%; text-align: center; justify-content: center;">
                        Inquire Residential Solutions
                    </button>
                </div>
            </div>

            <!-- Sector 4: Manufacturing & Industrial Factories -->
            <div style="background: #fff; border: 1px solid #e2e8f0; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 10px rgba(0,0,0,0.03);">
                <img src="<?php echo aqua_solve_asset('images/industry_factory.png'); ?>" alt="Industrial Plants Water Treatment" style="width: 100%; height: 200px; object-fit: cover;" />
                <div style="padding: 1.8rem;">
                    <span style="color: #0284c7; font-weight: 700; font-size: 0.8rem; text-transform: uppercase;">Industrial Sector</span>
                    <h3 style="font-size: 1.3rem; color: #0f172a; margin: 0.4rem 0 0.8rem;">Manufacturing &amp; Factories</h3>
                    <p style="color: #475569; font-size: 0.92rem; line-height: 1.6; margin-bottom: 1rem;">
                        <strong>Challenge:</strong> Heavy industrial process water specs, high chemical oxygen demand (COD), and PCB Zero Liquid Discharge (ZLD) norms.
                    </p>
                    <p style="color: #475569; font-size: 0.92rem; line-height: 1.6; margin-bottom: 1.2rem;">
                        <strong>AquaSolve Solution:</strong> Skidded Industrial RO Plants (5,000 to 50,000+ LPH), Effluent Treatment Plants (ETP), and customized chemical dosing skids.
                    </p>
                    <button class="btn btn-primary trigger-quote" data-product="Industrial Factory Solution" style="width: 100%; text-align: center; justify-content: center;">
                        Inquire Factory Solutions
                    </button>
                </div>
            </div>

            <!-- Sector 5: Educational Institutions -->
            <div style="background: #fff; border: 1px solid #e2e8f0; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 10px rgba(0,0,0,0.03);">
                <img src="<?php echo aqua_solve_asset('images/industry_school.png'); ?>" alt="Schools & Colleges Water Treatment" style="width: 100%; height: 200px; object-fit: cover;" />
                <div style="padding: 1.8rem;">
                    <span style="color: #0284c7; font-weight: 700; font-size: 0.8rem; text-transform: uppercase;">Education Sector</span>
                    <h3 style="font-size: 1.3rem; color: #0f172a; margin: 0.4rem 0 0.8rem;">Schools, Colleges &amp; Institutions</h3>
                    <p style="color: #475569; font-size: 0.92rem; line-height: 1.6; margin-bottom: 1rem;">
                        <strong>Challenge:</strong> Providing high-volume potable drinking water across campuses while ensuring strict microbiological safety for students.
                    </p>
                    <p style="color: #475569; font-size: 0.92rem; line-height: 1.6; margin-bottom: 1.2rem;">
                        <strong>AquaSolve Solution:</strong> Centralized campus RO purification units paired with SS 304 commercial chilled water dispensers.
                    </p>
                    <button class="btn btn-primary trigger-quote" data-product="Educational Campus Solution" style="width: 100%; text-align: center; justify-content: center;">
                        Inquire Campus Solutions
                    </button>
                </div>
            </div>

            <!-- Sector 6: Commercial IT Parks & Buildings -->
            <div style="background: #fff; border: 1px solid #e2e8f0; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 10px rgba(0,0,0,0.03);">
                <img src="<?php echo aqua_solve_asset('images/industry_office.png'); ?>" alt="IT Parks Water Treatment" style="width: 100%; height: 200px; object-fit: cover;" />
                <div style="padding: 1.8rem;">
                    <span style="color: #0284c7; font-weight: 700; font-size: 0.8rem; text-transform: uppercase;">Commercial Sector</span>
                    <h3 style="font-size: 1.3rem; color: #0f172a; margin: 0.4rem 0 0.8rem;">IT Parks, Offices &amp; Commercial Complexes</h3>
                    <p style="color: #475569; font-size: 0.92rem; line-height: 1.6; margin-bottom: 1rem;">
                        <strong>Challenge:</strong> Large daily corporate workforce water consumption, cooling tower makeup water, and facility management SLA maintenance.
                    </p>
                    <p style="color: #475569; font-size: 0.92rem; line-height: 1.6; margin-bottom: 1.2rem;">
                        <strong>AquaSolve Solution:</strong> Heavy commercial RO systems, automated softeners for HVAC cooling towers, and O&amp;M operator deployment.
                    </p>
                    <button class="btn btn-primary trigger-quote" data-product="IT Park & Commercial Solution" style="width: 100%; text-align: center; justify-content: center;">
                        Inquire Office Solutions
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     CONVERSION CTA BANNER
     ========================================================================== -->
<section style="background: linear-gradient(135deg, #0284c7 0%, #0369a1 100%); color: #fff; padding: 3.5rem 0; text-align: center;">
    <div class="container" style="max-width: 800px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 1rem;">Have an Industry-Specific Water Requirement?</h2>
        <p style="font-size: 1.1rem; color: #e0f2fe; margin-bottom: 2rem;">
            Consult with AquaSolve’s senior engineering team to conduct site water testing and design a tailored solution.
        </p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
            <button class="btn trigger-quote" data-product="Industry Custom Consultation" style="background: #fff; color: #0284c7; font-weight: 700; padding: 0.9rem 2rem; border-radius: 50px; border: none; cursor: pointer;">
                Request Consultation
            </button>
            <a href="https://wa.me/919946450452?text=Hi%20AquaSolve,%20I%20have%20an%20industry%20water%20treatment%20inquiry." target="_blank" rel="noopener noreferrer" class="btn" style="background: #25D366; color: #fff; font-weight: 700; padding: 0.9rem 2rem; border-radius: 50px; text-decoration: none;">
                WhatsApp Our Engineers
            </a>
        </div>
    </div>
</section>

<?php
get_footer();
