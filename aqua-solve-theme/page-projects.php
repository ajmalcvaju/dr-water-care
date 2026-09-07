<?php
/**
 * Template Name: Projects Page
 *
 * @package Aqua_Solve
 */

get_header();
?>

<!-- ==========================================================================
     PROJECTS HERO BANNER
     ========================================================================== -->
<section class="page-banner" aria-label="Projects page introduction">
    <div class="container">
        <h1>Projects Showcase</h1>
        <p>Explore real turnkey water and wastewater treatment plants designed, assembled, installed, and commissioned by AquaSolve Water Clinic across South India.</p>
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
     PROJECT CASE STUDIES GRID
     ========================================================================== -->
<section class="section" style="padding: 4rem 0;">
    <div class="container">
        <div style="text-align: center; max-width: 750px; margin: 0 auto 3.5rem;">
            <span style="color: #0284c7; font-weight: 700; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px;">Turnkey Installations</span>
            <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a; margin-top: 0.4rem;">Featured Case Studies</h2>
            <p style="color: #64748b;">Real project engineering references built with high-grade components and long-term service commitments.</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(340px, 1fr)); gap: 2rem;">
            
            <!-- Project 1: Sea Shells Beach Resort -->
            <div id="sea-shells-beach-resort" style="background: #fff; border: 1px solid #e2e8f0; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 10px rgba(0,0,0,0.03);">
                <img src="<?php echo aqua_solve_asset('images/about_ro_plant.png'); ?>" alt="Sea Shells Beach Resort Seawater RO Plant" style="width: 100%; height: 220px; object-fit: cover;" />
                <div style="padding: 1.8rem;">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.5rem;">
                        <span style="color: #0284c7; font-weight: 700; font-size: 0.8rem; text-transform: uppercase;">Agatti, Lakshadweep</span>
                        <span style="background: #e0f2fe; color: #0369a1; padding: 0.2rem 0.6rem; border-radius: 4px; font-size: 0.75rem; font-weight: 700;">Seawater RO</span>
                    </div>
                    <h3 style="font-size: 1.3rem; color: #0f172a; margin-bottom: 0.8rem;">Sea Shells Beach Resort</h3>
                    <p style="color: #475569; font-size: 0.92rem; line-height: 1.6; margin-bottom: 0.8rem;">
                        <strong>Application:</strong> Resort Island Freshwater Desalination.
                    </p>
                    <p style="color: #475569; font-size: 0.92rem; line-height: 1.6; margin-bottom: 1.2rem;">
                        <strong>Engineering Scope:</strong> Designed and commissioned high-pressure seawater reverse osmosis plant to convert island saline groundwater into pristine potable drinking water for luxury guests and kitchen utility.
                    </p>
                    <div style="border-top: 1px solid #f1f5f9; padding-top: 1rem; display: flex; justify-content: space-between; font-size: 0.85rem; color: #64748b;">
                        <span>System: Seawater RO Skid</span>
                        <span style="font-weight: 600; color: #0284c7;">Completed Project</span>
                    </div>
                </div>
            </div>

            <!-- Project 2: Ozone Chip Boards -->
            <div id="ozone-chip-boards" style="background: #fff; border: 1px solid #e2e8f0; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 10px rgba(0,0,0,0.03);">
                <img src="<?php echo aqua_solve_asset('images/industry_factory.png'); ?>" alt="Ozone Chip Boards Industrial RO Plant" style="width: 100%; height: 220px; object-fit: cover;" />
                <div style="padding: 1.8rem;">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.5rem;">
                        <span style="color: #0284c7; font-weight: 700; font-size: 0.8rem; text-transform: uppercase;">Palakkad, Kerala</span>
                        <span style="background: #e0f2fe; color: #0369a1; padding: 0.2rem 0.6rem; border-radius: 4px; font-size: 0.75rem; font-weight: 700;">Industrial RO</span>
                    </div>
                    <h3 style="font-size: 1.3rem; color: #0f172a; margin-bottom: 0.8rem;">Ozone Chip Boards</h3>
                    <p style="color: #475569; font-size: 0.92rem; line-height: 1.6; margin-bottom: 0.8rem;">
                        <strong>Application:</strong> Manufacturing Process Water Purification.
                    </p>
                    <p style="color: #475569; font-size: 0.92rem; line-height: 1.6; margin-bottom: 1.2rem;">
                        <strong>Engineering Scope:</strong> High-capacity skidded industrial reverse osmosis plant featuring multi-port FRP media vessels, high-pressure pumps, and SS 304 frame structure for continuous plant operation.
                    </p>
                    <div style="border-top: 1px solid #f1f5f9; padding-top: 1rem; display: flex; justify-content: space-between; font-size: 0.85rem; color: #64748b;">
                        <span>System: Industrial RO Plant</span>
                        <span style="font-weight: 600; color: #0284c7;">Completed Project</span>
                    </div>
                </div>
            </div>

            <!-- Project 3: Match Grill Restaurant -->
            <div id="match-grill" style="background: #fff; border: 1px solid #e2e8f0; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 10px rgba(0,0,0,0.03);">
                <img src="<?php echo aqua_solve_asset('images/stp_plant.png'); ?>" alt="Match Grill Restaurant BioZone STP Plant" style="width: 100%; height: 220px; object-fit: cover;" />
                <div style="padding: 1.8rem;">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.5rem;">
                        <span style="color: #0284c7; font-weight: 700; font-size: 0.8rem; text-transform: uppercase;">Commercial Dining</span>
                        <span style="background: #e0f2fe; color: #0369a1; padding: 0.2rem 0.6rem; border-radius: 4px; font-size: 0.75rem; font-weight: 700;">BioZone STP</span>
                    </div>
                    <h3 style="font-size: 1.3rem; color: #0f172a; margin-bottom: 0.8rem;">Match Grill</h3>
                    <p style="color: #475569; font-size: 0.92rem; line-height: 1.6; margin-bottom: 0.8rem;">
                        <strong>Application:</strong> Commercial Kitchen &amp; Sewage Wastewater Recycling.
                    </p>
                    <p style="color: #475569; font-size: 0.92rem; line-height: 1.6; margin-bottom: 1.2rem;">
                        <strong>Engineering Scope:</strong> BioZone Sewage Treatment Plant (STP) engineered for compact footprint, low power consumption, and optimized biological treatment.
                    </p>
                    <div style="border-top: 1px solid #f1f5f9; padding-top: 1rem; display: flex; justify-content: space-between; font-size: 0.85rem; color: #64748b;">
                        <span>System: BioZone STP</span>
                        <span style="font-weight: 600; color: #0284c7;">Completed Project</span>
                    </div>
                </div>
            </div>

            <!-- Project 4: Copper Kitchen Restaurant -->
            <div style="background: #fff; border: 1px solid #e2e8f0; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 10px rgba(0,0,0,0.03);">
                <img src="<?php echo aqua_solve_asset('images/project_copper_kitchen.png'); ?>" alt="Copper Kitchen Restaurant Commercial RO Plant" style="width: 100%; height: 220px; object-fit: cover;" />
                <div style="padding: 1.8rem;">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.5rem;">
                        <span style="color: #0284c7; font-weight: 700; font-size: 0.8rem; text-transform: uppercase;">Hospitality Sector</span>
                        <span style="background: #e0f2fe; color: #0369a1; padding: 0.2rem 0.6rem; border-radius: 4px; font-size: 0.75rem; font-weight: 700;">Commercial RO</span>
                    </div>
                    <h3 style="font-size: 1.3rem; color: #0f172a; margin-bottom: 0.8rem;">Copper Kitchen Restaurant</h3>
                    <p style="color: #475569; font-size: 0.92rem; line-height: 1.6; margin-bottom: 0.8rem;">
                        <strong>Application:</strong> Food &amp; Beverage Purified Water Supply.
                    </p>
                    <p style="color: #475569; font-size: 0.92rem; line-height: 1.6; margin-bottom: 1.2rem;">
                        <strong>Engineering Scope:</strong> Commercial multi-stage reverse osmosis filtration system delivering purified ingredient water and ice-machine feed water.
                    </p>
                    <div style="border-top: 1px solid #f1f5f9; padding-top: 1rem; display: flex; justify-content: space-between; font-size: 0.85rem; color: #64748b;">
                        <span>System: Commercial RO</span>
                        <span style="font-weight: 600; color: #0284c7;">Completed Project</span>
                    </div>
                </div>
            </div>

            <!-- Project 5: Adoration Provincial House -->
            <div style="background: #fff; border: 1px solid #e2e8f0; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 10px rgba(0,0,0,0.03);">
                <img src="<?php echo aqua_solve_asset('images/wtp_plant.png'); ?>" alt="Adoration Provincial House WTP Plant" style="width: 100%; height: 220px; object-fit: cover;" />
                <div style="padding: 1.8rem;">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.5rem;">
                        <span style="color: #0284c7; font-weight: 700; font-size: 0.8rem; text-transform: uppercase;">Institutional Project</span>
                        <span style="background: #e0f2fe; color: #0369a1; padding: 0.2rem 0.6rem; border-radius: 4px; font-size: 0.75rem; font-weight: 700;">WTP Filtration</span>
                    </div>
                    <h3 style="font-size: 1.3rem; color: #0f172a; margin-bottom: 0.8rem;">Adoration Provincial House</h3>
                    <p style="color: #475569; font-size: 0.92rem; line-height: 1.6; margin-bottom: 0.8rem;">
                        <strong>Application:</strong> Institutional Water Filtration &amp; Iron Treatment.
                    </p>
                    <p style="color: #475569; font-size: 0.92rem; line-height: 1.6; margin-bottom: 1.2rem;">
                        <strong>Engineering Scope:</strong> Centralized Water Treatment Plant (WTP) featuring catalytic iron removal and multi-grade sand media filtration.
                    </p>
                    <div style="border-top: 1px solid #f1f5f9; padding-top: 1rem; display: flex; justify-content: space-between; font-size: 0.85rem; color: #64748b;">
                        <span>System: WTP Plant</span>
                        <span style="font-weight: 600; color: #0284c7;">Completed Project</span>
                    </div>
                </div>
            </div>

            <!-- Project 6: Banasura & De Orchid Resort Pools -->
            <div style="background: #fff; border: 1px solid #e2e8f0; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 10px rgba(0,0,0,0.03);">
                <img src="<?php echo aqua_solve_asset('images/industry_leisure.png'); ?>" alt="Banasura & De Orchid Resort Swimming Pools" style="width: 100%; height: 220px; object-fit: cover;" />
                <div style="padding: 1.8rem;">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.5rem;">
                        <span style="color: #0284c7; font-weight: 700; font-size: 0.8rem; text-transform: uppercase;">Wayanad &amp; Goa</span>
                        <span style="background: #e0f2fe; color: #0369a1; padding: 0.2rem 0.6rem; border-radius: 4px; font-size: 0.75rem; font-weight: 700;">Swimming Pools</span>
                    </div>
                    <h3 style="font-size: 1.3rem; color: #0f172a; margin-bottom: 0.8rem;">Banasura Jungle &amp; De Orchid Resorts</h3>
                    <p style="color: #475569; font-size: 0.92rem; line-height: 1.6; margin-bottom: 0.8rem;">
                        <strong>Application:</strong> Commercial Resort Swimming Pool Filtration.
                    </p>
                    <p style="color: #475569; font-size: 0.92rem; line-height: 1.6; margin-bottom: 1.2rem;">
                        <strong>Engineering Scope:</strong> High-rate sand filtration circulation system with automated dosing for crystal-clear resort pool water maintenance.
                    </p>
                    <div style="border-top: 1px solid #f1f5f9; padding-top: 1rem; display: flex; justify-content: space-between; font-size: 0.85rem; color: #64748b;">
                        <span>System: Pool Filtration</span>
                        <span style="font-weight: 600; color: #0284c7;">Completed Project</span>
                    </div>
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
        <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 1rem;">Ready to Plan Your Next Water Treatment Project?</h2>
        <p style="font-size: 1.1rem; color: #e0f2fe; margin-bottom: 2rem;">
            Consult with AquaSolve’s engineering team for site assessment, technical proposal, and cost estimation.
        </p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
            <button class="btn trigger-quote" data-product="Turnkey Project Inquiry" style="background: #fff; color: #0284c7; font-weight: 700; padding: 0.9rem 2rem; border-radius: 50px; border: none; cursor: pointer;">
                Request Project Consultation
            </button>
            <a href="https://wa.me/919946450452?text=Hi%20AquaSolve,%20I%20would%20like%20to%20discuss%20a%20turnkey%20project." target="_blank" rel="noopener noreferrer" class="btn" style="background: #25D366; color: #fff; font-weight: 700; padding: 0.9rem 2rem; border-radius: 50px; text-decoration: none;">
                WhatsApp Our Team
            </a>
        </div>
    </div>
</section>

<?php
get_footer();
