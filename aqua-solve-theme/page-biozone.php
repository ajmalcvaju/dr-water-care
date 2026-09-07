<?php
/**
 * Template Name: BioZone Technology
 *
 * @package Aqua_Solve
 */

get_header();
?>

<!-- ==========================================================================
     BIOZONE HERO BANNER
     ========================================================================== -->
<section class="page-banner" aria-label="BioZone Technology introduction">
    <div class="container">
        <h1>BioZone Technology</h1>
        <p>Compact, energy-efficient, and simplified wastewater treatment engineering for Sewage Treatment Plants (STP) and Effluent Treatment Plants (ETP).</p>
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
     WHAT IS BIOZONE TECHNOLOGY
     ========================================================================== -->
<section class="section" style="padding: 4rem 0;">
    <div class="container">
        <div class="biozone-intro-grid">
            <div class="biozone-intro-header">
                <span style="color: #0284c7; font-weight: 700; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px; display: block; margin-bottom: 0.4rem;">Innovation in Wastewater Treatment</span>
                <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a; margin: 0 0 1.2rem;">Next-Generation STP &amp; ETP Solutions</h2>
            </div>

            <div class="biozone-intro-image">
                <img src="<?php echo aqua_solve_asset('images/stp_plant.png'); ?>" alt="BioZone Sewage Treatment System" style="width: 100%; border-radius: 12px; box-shadow: 0 15px 35px rgba(0,0,0,0.1);" />
            </div>

            <div class="biozone-intro-text">
                <p style="color: #475569; line-height: 1.7; margin-bottom: 1.2rem;">
                    BioZone Technology represents AquaSolve Water Clinic’s specialized approach to biological wastewater treatment. Engineered to overcome the operational and spatial challenges of conventional systems, BioZone integrates compact reactor design with ozone-based disinfection.
                </p>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 1.5rem;">
                    Whether applied to commercial resorts, healthcare institutions, or residential apartments, BioZone is designed to deliver consistent treated effluent parameters while minimizing footprint, energy consumption, and process complexity.
                </p>
                <div class="biozone-blue-box" style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; background: #f0f9ff; padding: 1.2rem; border-radius: 8px; border-left: 4px solid #0284c7;">
                    <div>
                        <h4 style="margin: 0 0 0.2rem; color: #0f172a; font-size: 1rem;">Footprint Reduction</h4>
                        <p style="margin: 0; font-size: 0.85rem; color: #475569;">Optimized reactor design minimizes civil land requirements.</p>
                    </div>
                    <div>
                        <h4 style="margin: 0 0 0.2rem; color: #0f172a; font-size: 1rem;">Ozone Disinfection</h4>
                        <p style="margin: 0; font-size: 0.85rem; color: #475569;">Advanced oxidation supports odour &amp; pathogen reduction.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     KEY ADVANTAGES & CHARACTERISTICS
     ========================================================================== -->
<section id="advantages" class="section" style="background: #f8fafc; padding: 4rem 0;">
    <div class="container">
        <div style="text-align: center; max-width: 700px; margin: 0 auto 3rem;">
            <span style="color: #0284c7; font-weight: 700; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px;">Engineering Benefits</span>
            <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a; margin-top: 0.5rem;">Key Characteristics &amp; Benefits</h2>
            <p style="color: #64748b;">Engineered to support efficient wastewater treatment under real-world operating conditions.</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 1.5rem;">
            <!-- Advantage 1 -->
            <div style="background: #fff; border: 1px solid #e2e8f0; border-radius: 10px; padding: 1.8rem; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);">
                <div style="width: 48px; height: 48px; background: #e0f2fe; border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem; color: #0284c7;">
                    <svg style="width: 24px; height: 24px; fill: currentColor;" viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V5h14v14z"/></svg>
                </div>
                <h3 style="font-size: 1.15rem; color: #0f172a; margin-bottom: 0.5rem;">Compact System Footprint</h3>
                <p style="color: #64748b; font-size: 0.92rem; line-height: 1.6; margin: 0;">Designed for high volume capacity per unit volume, making it suitable for locations where space is limited.</p>
            </div>

            <!-- Advantage 2 -->
            <div style="background: #fff; border: 1px solid #e2e8f0; border-radius: 10px; padding: 1.8rem; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);">
                <div style="width: 48px; height: 48px; background: #e0f2fe; border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem; color: #0284c7;">
                    <svg style="width: 24px; height: 24px; fill: currentColor;" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 14.5v-9l6 4.5-6 4.5z"/></svg>
                </div>
                <h3 style="font-size: 1.15rem; color: #0f172a; margin-bottom: 0.5rem;">Operational ON/OFF Flexibility</h3>
                <p style="color: #64748b; font-size: 0.92rem; line-height: 1.6; margin: 0;">System operation can be modulated according to actual wastewater availability, ideal for seasonal resorts &amp; hotels.</p>
            </div>

            <!-- Advantage 3 -->
            <div style="background: #fff; border: 1px solid #e2e8f0; border-radius: 10px; padding: 1.8rem; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);">
                <div style="width: 48px; height: 48px; background: #e0f2fe; border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem; color: #0284c7;">
                    <svg style="width: 24px; height: 24px; fill: currentColor;" viewBox="0 0 24 24"><path d="M12 7c-2.76 0-5 2.24-5 5s2.24 5 5 5 5-2.24 5-5-2.24-5-5-5zm0 -5C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z"/></svg>
                </div>
                <h3 style="font-size: 1.15rem; color: #0f172a; margin-bottom: 0.5rem;">Reduced Civil Work Requirement</h3>
                <p style="color: #64748b; font-size: 0.92rem; line-height: 1.6; margin: 0;">Pre-engineered modular components streamline site preparation and accelerate installation timelines.</p>
            </div>

            <!-- Advantage 4 -->
            <div style="background: #fff; border: 1px solid #e2e8f0; border-radius: 10px; padding: 1.8rem; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);">
                <div style="width: 48px; height: 48px; background: #e0f2fe; border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem; color: #0284c7;">
                    <svg style="width: 24px; height: 24px; fill: currentColor;" viewBox="0 0 24 24"><path d="M7 2v11h3v9l7-12h-4l4-8z"/></svg>
                </div>
                <h3 style="font-size: 1.15rem; color: #0f172a; margin-bottom: 0.5rem;">Lower Power Requirement</h3>
                <p style="color: #64748b; font-size: 0.92rem; line-height: 1.6; margin: 0;">Eliminates heavy continuous blower aeration processes, helping to reduce overall electrical power consumption.</p>
            </div>

            <!-- Advantage 5 -->
            <div style="background: #fff; border: 1px solid #e2e8f0; border-radius: 10px; padding: 1.8rem; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);">
                <div style="width: 48px; height: 48px; background: #e0f2fe; border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem; color: #0284c7;">
                    <svg style="width: 24px; height: 24px; fill: currentColor;" viewBox="0 0 24 24"><path d="M12 3L2 12h3v8h14v-8h3L12 3zm0 14.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                </div>
                <h3 style="font-size: 1.15rem; color: #0f172a; margin-bottom: 0.5rem;">Odour Minimization Design</h3>
                <p style="color: #64748b; font-size: 0.92rem; line-height: 1.6; margin: 0;">Engineered process control and ozone polishing designed to minimize odour during normal plant operation.</p>
            </div>

            <!-- Advantage 6 -->
            <div style="background: #fff; border: 1px solid #e2e8f0; border-radius: 10px; padding: 1.8rem; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);">
                <div style="width: 48px; height: 48px; background: #e0f2fe; border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem; color: #0284c7;">
                    <svg style="width: 24px; height: 24px; fill: currentColor;" viewBox="0 0 24 24"><path d="M22.7 19l-9.1-9.1c.9-2.3.4-5-1.5-6.9-2-2-5-2.4-7.4-1.3L9 6 6 9 1.6 4.6C.4 7 1.1 10 3.1 12c1.9 1.9 4.6 2.4 6.9 1.5l9.1 9.1c.4.4 1 .4 1.4 0l2.2-2.2c.4-.4.4-1.1 0-1.4z"/></svg>
                </div>
                <h3 style="font-size: 1.15rem; color: #0f172a; margin-bottom: 0.5rem;">Simplified Maintenance</h3>
                <p style="color: #64748b; font-size: 0.92rem; line-height: 1.6; margin: 0;">Streamlined mechanical layout reduces routine maintenance complexity for facility technicians.</p>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     APPLICATIONS & INTEGRATION
     ========================================================================== -->
<section class="section" style="padding: 4rem 0;">
    <div class="container">
        <div style="text-align: center; max-width: 700px; margin: 0 auto 3rem;">
            <span style="color: #0284c7; font-weight: 700; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px;">Target Sectors</span>
            <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a; margin-top: 0.5rem;">BioZone Integration Applications</h2>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem;">
            <div style="border: 1px solid #e2e8f0; border-radius: 8px; padding: 1.5rem; background: #fff;">
                <h3 style="color: #0284c7; font-size: 1.1rem; margin-bottom: 0.5rem;">Hotels &amp; Resorts</h3>
                <p style="color: #475569; font-size: 0.9rem; margin: 0;">Supports fluctuating seasonal occupancy with demand-based ON/OFF capability and low odour levels.</p>
            </div>
            <div style="border: 1px solid #e2e8f0; border-radius: 8px; padding: 1.5rem; background: #fff;">
                <h3 style="color: #0284c7; font-size: 1.1rem; margin-bottom: 0.5rem;">Commercial Restaurants</h3>
                <p style="color: #475569; font-size: 0.9rem; margin: 0;">Compact installation suited for urban commercial kitchens &amp; dining establishments with space constraints.</p>
            </div>
            <div style="border: 1px solid #e2e8f0; border-radius: 8px; padding: 1.5rem; background: #fff;">
                <h3 style="color: #0284c7; font-size: 1.1rem; margin-bottom: 0.5rem;">Residential Apartments</h3>
                <p style="color: #475569; font-size: 0.9rem; margin: 0;">Treats domestic sewage to reusable parameters for gardening, flushing, and landscape maintenance.</p>
            </div>
            <div style="border: 1px solid #e2e8f0; border-radius: 8px; padding: 1.5rem; background: #fff;">
                <h3 style="color: #0284c7; font-size: 1.1rem; margin-bottom: 0.5rem;">Hospitals &amp; Clinics</h3>
                <p style="color: #475569; font-size: 0.9rem; margin: 0;">Enhanced disinfection stage engineered to manage liquid waste parameters before discharge.</p>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     CALL TO ACTION
     ========================================================================== -->
<section style="background: linear-gradient(135deg, #0284c7 0%, #0369a1 100%); color: #fff; padding: 3.5rem 0; text-align: center;">
    <div class="container" style="max-width: 800px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 1rem;">Discuss Your BioZone STP / ETP Project</h2>
        <p style="font-size: 1.1rem; color: #e0f2fe; margin-bottom: 2rem;">
            Connect with AquaSolve’s engineering team for a customized site assessment and water treatment design proposal.
        </p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
            <button class="btn trigger-quote" data-product="BioZone Project Consultation" style="background: #fff; color: #0284c7; font-weight: 700; padding: 0.9rem 2rem; border-radius: 50px; border: none; cursor: pointer;">
                Request Site Assessment
            </button>
            <a href="https://wa.me/919946450452?text=Hi%20AquaSolve,%20I%20am%20interested%20in%20BioZone%20STP/ETP%20technology." target="_blank" class="btn" style="background: #25D366; color: #fff; font-weight: 700; padding: 0.9rem 2rem; border-radius: 50px; text-decoration: none;">
                WhatsApp Our Engineers
            </a>
        </div>
    </div>
</section>

<?php
get_footer();
