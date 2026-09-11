<?php
/**
 * Template Name: Knowledge Center Page
 *
 * @package Aqua_Solve
 */

get_header();

// ==========================================================================
// KNOWLEDGE CENTER DATA REPOSITORY (19 ARTICLES)
// ==========================================================================
$articles = array(
    'water-softening' => array(
        'title'       => 'Understanding Hard Water & Water Softeners',
        'category'    => 'Water Softening',
        'cat_slug'    => 'water-softening',
        'desc'        => 'Hard water contains elevated levels of calcium and magnesium that can cause scaling in pipes, boilers, heat exchangers, washing systems, and plumbing fixtures. Ion-exchange water softeners replace hardness ions with sodium ions, helping reduce scale formation and improve equipment efficiency.',
        'takeaway'    => 'Hardness control protects equipment and reduces scaling.',
        'image'       => 'product_frp_vessel.png',
        'alt'         => 'Industrial water softening system with FRP pressure vessels and multi-port control valve',
        'content'     => '<p>Hardness in water is primarily caused by dissolved calcium and magnesium ions (Ca²⁺ and Mg²⁺) absorbed as water trickles through mineral deposits. When heated or subjected to pressure drops, these dissolved minerals precipitate out of solution as hard calcium carbonate (CaCO₃) scale.</p>
                          <p>In commercial and industrial facilities, scale accumulation acts as a severe thermal insulator, drastically reducing heat transfer efficiency in boilers and heat exchangers while clogging piping networks and increasing pumping energy costs.</p>
                          <h3>How Ion-Exchange Softening Works</h3>
                          <p>Ion-exchange water softeners resolve this by passing raw hard water through synthetic polystyrene resin beads saturated with sodium ions (Na⁺). Through standard ion-exchange kinetics, the resin preferentially attracts and binds calcium and magnesium ions while releasing innocuous sodium ions into the treated stream.</p>
                          <p>Periodic brine (NaCl) regeneration flushes the accumulated hardness ions to drain, restoring exchanger capacity for long-term continuous operation.</p>'
    ),
    'water-filtration' => array(
        'title'       => 'Multi-Grade Filtration for Suspended Solids',
        'category'    => 'Water Filtration',
        'cat_slug'    => 'water-filtration',
        'desc'        => 'Raw water may contain sand, silt, mud, rust, and other suspended particles that affect downstream treatment systems. Multi-grade filters use different media layers to remove suspended impurities and reduce turbidity before water enters finer treatment stages such as activated carbon or RO.',
        'takeaway'    => 'Effective pre-filtration improves the performance of downstream systems.',
        'image'       => 'wtp_plant.png',
        'alt'         => 'Commercial multi-grade water filtration plant with sand and media vessels',
        'content'     => '<p>Suspended solids and particulate turbidity represent the primary mechanical hazard to downstream water treatment equipment. Unfiltered particulates cause rapid erosion of pump impellers, foul control valves, and blind fine membrane surfaces.</p>
                          <h3>Depth Filtration Mechanics</h3>
                          <p>Multi-Grade Media Filters (MMF) overcome traditional single-media filtration bottlenecks by utilizing coarse-to-fine media stratification. By layering anthracite, coarse quartz sand, fine garnet, and pebbles of varying specific gravities and grain sizes, the bed achieves true depth filtration.</p>
                          <p>Larger suspended particles are trapped in the upper coarse anthracite layer, while progressively smaller particulates down to 10–15 microns are intercepted in the lower garnet layers. This differential velocity retention prevents premature surface blinding, allowing higher hydraulic flux rates (15–25 m/h) and extended backwash cycles.</p>'
    ),
    'activated-carbon' => array(
        'title'       => 'Why Activated Carbon Is Used in Water Treatment',
        'category'    => 'Activated Carbon',
        'cat_slug'    => 'activated-carbon',
        'desc'        => 'Activated carbon is widely used to reduce chlorine, organic compounds, unpleasant taste, odor, and certain dissolved contaminants. It is commonly installed as a pre-treatment stage to protect RO membranes from chlorine damage and improve treated water quality.',
        'takeaway'    => 'Carbon filtration is an important protection stage for sensitive treatment equipment.',
        'image'       => 'wtp_detail_hero.png',
        'alt'         => 'Industrial activated carbon filtration skid for chlorine and organic compound removal',
        'content'     => '<p>Activated carbon is manufactured through high-temperature thermal activation of carbonaceous precursor materials (such as coconut shell or coal), producing an extraordinary specific surface area exceeding 1,000 m²/g with dense microporous structures.</p>
                          <h3>Dechlorination & Organic Adsorption</h3>
                          <p>In industrial water purification, Granular Activated Carbon (GAC) serves two critical functions: catalytic dechlorination and organic adsorption. Free chlorine added during municipal disinfection is an aggressive oxidizing agent that rapidly degrades polyamide Thin Film Composite (TFC) Reverse Osmosis membranes through polymer chain cleavage.</p>
                          <p>GAC chemically reduces free chlorine to benign chloride ions while simultaneously adsorbing Synthetic Organic Chemicals (SOCs), pesticides, trihalomethanes (THMs), and volatile odor-causing compounds. Proper bed depth sizing and empty bed contact time (EBCT) of 5–10 minutes ensure complete oxidant destruction.</p>'
    ),
    'water-disinfection' => array(
        'title'       => 'UV vs. Chlorination for Water Disinfection',
        'category'    => 'Water Disinfection',
        'cat_slug'    => 'water-disinfection',
        'desc'        => 'Ultraviolet (UV) systems use UV energy to inactivate microorganisms without adding chemicals to the treated water. Chlorination uses controlled chlorine dosing to provide microbial disinfection and can offer residual protection within distribution pipelines.',
        'takeaway'    => 'The right disinfection method depends on water quality, application, and distribution requirements.',
        'image'       => 'purifier_detail_hero.png',
        'alt'         => 'Industrial water disinfection system featuring stainless steel UV chamber',
        'content'     => '<p>Microbial control is essential for ensuring biological safety in potable water, food & beverage processing, and pharmaceutical applications. Water treatment engineering relies on two primary disinfection mechanisms: photochemical ultraviolet irradiation and chemical chlorination.</p>
                          <h3>Photochemical vs. Chemical Residual Control</h3>
                          <p>Ultraviolet (UV) disinfection operates at a germicidal wavelength of 254 nm. UV photons penetrate microbial cell walls and dimerize adjacent thymine bases in DNA/RNA sequences, permanently preventing cellular replication without altering chemical water composition or forming disinfection byproducts (DBPs).</p>
                          <p>Chlorination (via sodium hypochlorite or gas dosing) provides chemical oxidation of cellular enzymes. Unlike UV, chlorination maintains a measurable disinfectant residual throughout extensive piping networks, preventing post-treatment bio-growth in storage tanks and plumbing headers.</p>'
    ),
    'ultrafiltration' => array(
        'title'       => 'When Should You Use Ultrafiltration?',
        'category'    => 'Ultrafiltration',
        'cat_slug'    => 'ultrafiltration',
        'desc'        => 'Ultrafiltration (UF) uses a membrane barrier to remove suspended solids, colloids, bacteria, and other larger contaminants while allowing dissolved salts to pass through. UF is useful for applications requiring low-turbidity water without significant reduction of dissolved minerals.',
        'takeaway'    => 'UF is ideal when particulate and microbial control is required without desalination.',
        'image'       => 'hero_slide_ro.png',
        'alt'         => 'Ultrafiltration membrane modules skid for high-efficiency turbidity and pathogen removal',
        'content'     => '<p>Ultrafiltration (UF) is a pressure-driven membrane separation process employing hollow-fiber porous polymeric membranes with pore sizes typically ranging from 0.01 to 0.1 microns.</p>
                          <h3>Physical Barrier Separation</h3>
                          <p>Unlike Reverse Osmosis which separates dissolved ionic solutes, UF operates via physical size exclusion. It effectively retains suspended solids, colloidal silica, giardia cysts, cryptosporidium, and bacterial pathogens, producing high-clarity filtrate with Silt Density Index (SDI) values consistently below 2.0.</p>
                          <p>UF is ideal for treating surface water, secondary sewage effluent, and high-turbidity borewells where total dissolved solids (TDS) removal is not required, or as an advanced non-chemical pre-treatment skid upstream of high-pressure RO desalters to eliminate colloidal membrane fouling.</p>'
    ),
    'membrane-technology' => array(
        'title'       => 'RO vs. UF vs. MF: Choosing the Right Membrane',
        'category'    => 'Membrane Technology',
        'cat_slug'    => 'membrane-technology',
        'desc'        => 'Different membrane technologies target different contaminants. Reverse osmosis removes a large portion of dissolved salts and many dissolved contaminants, while ultrafiltration and microfiltration primarily target suspended particles, colloids, and microorganisms.',
        'takeaway'    => 'Membrane selection should be based on contaminant size and water chemistry.',
        'image'       => 'product_commercial_ro.png',
        'alt'         => 'Comparison of RO, UF, and MF membrane technology skids in industrial water treatment',
        'content'     => '<p>Membrane filtration encompasses a spectrum of pore-size separation barrier technologies designed to isolate distinct classes of aquatic contaminants based on molecular weight cutoff (MWCO) and hydrodynamic particle radius.</p>
                          <h3>The Membrane Spectrum</h3>
                          <p><strong>1. Microfiltration (MF) [0.1 – 1.0 µm]:</strong> Targets large suspended solids, algae, protozoan cysts, and macro-particles. Used in primary clarification and MBR sewage systems.</p>
                          <p><strong>2. Ultrafiltration (UF) [0.01 – 0.1 µm]:</strong> Retains fine colloids, viruses, bacteria, and macromolecules while passing dissolved salts. Used for water clarification and RO pre-treatment.</p>
                          <p><strong>3. Reverse Osmosis (RO) [< 0.001 µm]:</strong> Uses dense semi-permeable membranes under hydraulic pressures exceeding osmotic pressure to reject 99%+ of dissolved inorganic ions (Na⁺, Cl⁻, Ca²⁺), heavy metals, and micro-pollutants.</p>'
    ),
    'water-testing' => array(
        'title'       => 'Why Raw Water Testing Comes First',
        'category'    => 'Water Testing',
        'cat_slug'    => 'water-testing',
        'desc'        => 'Water treatment systems should be designed according to actual raw-water characteristics. Parameters such as pH, TDS, hardness, iron, manganese, alkalinity, chloride, turbidity, silica, and microbiological quality can significantly influence treatment selection and operating performance.',
        'takeaway'    => 'Test the water first. Engineer the treatment system second.',
        'image'       => 'hero_slide_lab.jpg',
        'alt'         => 'Professional water analysis laboratory testing parameters like pH, TDS, hardness, and iron',
        'content'     => '<p>Attempting to design or procure a commercial water treatment system without complete laboratory water analysis is the leading cause of operational plant failure, premature membrane fouling, and capital misallocation.</p>
                          <h3>Empirical Parameters Dictate Engineering Design</h3>
                          <p><strong>Total Dissolved Solids (TDS):</strong> Determines pump operating pressure, membrane selection, and flux rate.</p>
                          <p><strong>Hardness & Silica:</strong> Defines scaling indices (LSI/SDSI) and system recovery limits.</p>
                          <p><strong>Iron & Manganese:</strong> Dictates catalytic oxidation and media vessel sizing to prevent membrane poisoning.</p>
                          <p><strong>pH & Alkalinity:</strong> Governs chemical dosing requirements and material corrosion compatibility.</p>
                          <p>Comprehensive laboratory analysis provides empirical data essential for mass balance calculations, recovery optimization, and long-term plant reliability.</p>'
    ),
    'boiler-feed-water-treatment' => array(
        'title'       => 'Why Boiler Water Treatment Matters',
        'category'    => 'Boiler Feed Water',
        'cat_slug'    => 'industrial-water-treatment',
        'desc'        => 'Hardness, silica, dissolved solids, and other contaminants can cause scaling, corrosion, and reduced heat-transfer efficiency in boilers. Proper pre-treatment, RO, softening, and chemical conditioning can help maintain boiler performance and reduce maintenance requirements.',
        'takeaway'    => 'Better feedwater quality improves boiler efficiency and reliability.',
        'image'       => 'industry_factory.png',
        'alt'         => 'Industrial boiler feedwater treatment plant with reverse osmosis and softening equipment',
        'content'     => '<p>Industrial steam boilers operate under high thermal heat flux and elevated pressures. Under these severe conditions, even trace impurities in feedwater concentrate rapidly, leading to scale accumulation, corrosion, and tube failures.</p>
                          <h3>Scale & Dissolved Gas Hazards</h3>
                          <p>Scale formation (CaCO₃, CaSO₄, SiO₂) on firetube or water-tube surfaces creates an insulating barrier (thermal conductivity of scale is less than 1% that of boiler steel), causing metal overheating, blistering, and tube rupture.</p>
                          <p>Dissolved gases (O₂ and CO₂) cause severe localized pitting and condensate line carbonic acid corrosion. Comprehensive boiler feedwater treatment skids combine duplex water softening or RO demineralization with thermal deaeration and chemical oxygen scavenging to deliver high-purity feedwater.</p>'
    ),
    'cooling-water-treatment' => array(
        'title'       => 'Managing Scaling & Corrosion in Cooling Systems',
        'category'    => 'Cooling Water',
        'cat_slug'    => 'industrial-water-treatment',
        'desc'        => 'Cooling towers and heat-exchange systems continuously concentrate dissolved minerals through evaporation. Without proper water management, this can lead to scaling, corrosion, biological growth, and reduced heat-transfer efficiency.',
        'takeaway'    => 'Cooling-water treatment is essential for maintaining heat-transfer efficiency.',
        'image'       => 'industry_office.png',
        'alt'         => 'Industrial cooling tower water treatment and heat exchanger scale prevention system',
        'content'     => '<p>Evaporative cooling towers dissipate waste heat by evaporating pure water vapor into the air stream. Consequently, dissolved salts, suspended minerals, and airborne micro-organisms remain behind, continuously concentrating in the recirculating basin water.</p>
                          <h3>Three Major Operational Risks</h3>
                          <p><strong>1. Mineral Scaling:</strong> Precipitation of calcium carbonate and phosphate onto chiller heat exchanger tubes, dropping refrigeration performance.</p>
                          <p><strong>2. Metallic Corrosion:</strong> Oxygenated warm water accelerates galvanic and microbiological corrosion (MIC) on condenser bundles.</p>
                          <p><strong>3. Bio-Fouling:</strong> Algae, slime, and bacterial proliferation coat heat transfer surfaces and present biological safety hazards.</p>
                          <p>Engineered cooling water treatment programs integrate automated blowdown controllers, polymeric antiscalants, yellow metal corrosion inhibitors, and alternating biocides.</p>'
    ),
    'zero-liquid-discharge' => array(
        'title'       => 'What Is Zero Liquid Discharge (ZLD)?',
        'category'    => 'Zero Liquid Discharge',
        'cat_slug'    => 'wastewater-management',
        'desc'        => 'Zero Liquid Discharge is a water-management approach designed to recover water from industrial wastewater while minimizing or eliminating liquid discharge. A typical ZLD strategy may combine RO, evaporators, crystallizers, and other treatment technologies depending on wastewater characteristics.',
        'takeaway'    => 'ZLD converts wastewater management into a water-recovery strategy.',
        'image'       => 'etp_plant.png',
        'alt'         => 'Zero Liquid Discharge (ZLD) plant with evaporator and industrial wastewater recovery infrastructure',
        'content'     => '<p>Zero Liquid Discharge (ZLD) is an advanced wastewater treatment process designed to purify and recycle virtually all liquid effluent produced by industrial facilities, leaving zero liquid discharge to municipal drains or environmental bodies.</p>
                          <h3>Multi-Tiered ZLD Engineering Architecture</h3>
                          <p><strong>1. Pre-Treatment & Softening:</strong> Chemical clarification and silica/hardness removal to protect high-pressure membranes.</p>
                          <p><strong>2. High-Recovery Reverse Osmosis:</strong> Concentrating dissolved solids up to 100,000+ ppm TDS using specialized High-Efficiency RO (HERO) skids.</p>
                          <p><strong>3. Thermal Evaporation & Crystallization:</strong> Mechanical Vapor Recompression (MVR) evaporators and steam-heated crystallizers concentrate the remaining brine into dry, handleable solid salt cake for commercial disposal.</p>
                          <p>ZLD transforms environmental compliance burdens into sustainable water security, allowing industries to recycle 95–99% of process wastewater.</p>'
    ),
    'effluent-treatment' => array(
        'title'       => 'ETP Treatment: From Effluent to Reusable Water',
        'category'    => 'Effluent Treatment',
        'cat_slug'    => 'wastewater-management',
        'desc'        => 'Effluent Treatment Plants (ETPs) are designed to treat wastewater generated by industrial processes. Depending on the wastewater characteristics, treatment may include screening, equalization, chemical treatment, biological treatment, filtration, and membrane processes.',
        'takeaway'    => 'ETP design must follow the characteristics of the specific industrial effluent.',
        'image'       => 'etp_detail_hero.png',
        'alt'         => 'Industrial Effluent Treatment Plant (ETP) featuring equalization and chemical coagulation tanks',
        'content'     => '<p>Industrial Effluent Treatment Plants (ETPs) are engineered to process complex wastewater streams containing chemical pollutants, high organic loads (BOD/COD), oils, heavy metals, and synthetic dyes discharged by manufacturing plants, textile units, food processing facilities, and chemical industries.</p>
                          <h3>Three Primary ETP Treatment Stages</h3>
                          <p><strong>1. Primary Treatment:</strong> Bar screening, oil & grease traps, equalization tanks for flow balancing, and chemical coagulation/flocculation for heavy particulate settling.</p>
                          <p><strong>2. Secondary Biological Treatment:</strong> Activated Sludge Process (ASP), Moving Bed Biofilm Reactor (MBBR), or Sequential Batch Reactor (SBR) utilizing aerobic bacteria to metabolize dissolved organic contaminants.</p>
                          <p><strong>3. Tertiary Polishing & Filtration:</strong> Pressure sand filters, activated carbon beds, and disinfection units ensuring final effluent parameters comply strictly with Pollution Control Board (KSPCB) discharge norms.</p>'
    ),
    'water-reuse' => array(
        'title'       => 'From Wastewater Treatment to Water Reuse',
        'category'    => 'Water Reuse',
        'cat_slug'    => 'water-reuse',
        'desc'        => 'Treated wastewater can potentially be reused for applications such as cooling towers, flushing, gardening, process operations, and other non-potable requirements. Advanced treatment can further improve water quality where higher reuse standards are required.',
        'takeaway'    => 'Water reuse can reduce freshwater consumption and operating costs.',
        'image'       => 'industry_leisure.png',
        'alt'         => 'Advanced industrial wastewater recovery and non-potable water reuse pipeline infrastructure',
        'content'     => '<p>With increasing water scarcity and rising freshwater extraction tariffs across Kerala and South India, progressive industrial and commercial facilities are transitioning from traditional discharge models to closed-loop water reuse.</p>
                          <h3>Target Reuse Applications & Systems</h3>
                          <p><strong>Landscape Irrigation & Toilet Flushing:</strong> Secondary clarified effluent polished with multi-media filtration and chlorination/UV.</p>
                          <p><strong>Cooling Tower Makeup & Boiler Feed:</strong> Advanced Membrane Bioreactor (MBR) filtration followed by Reverse Osmosis (RO) to remove residual TDS and organics.</p>
                          <p>Implementing structured water reuse reduces freshwater consumption by 40–80%, significantly lowering operational utility expenses while safeguarding regional water resources.</p>'
    ),
    'chemical-dosing' => array(
        'title'       => 'The Role of Chemical Dosing in Water Treatment',
        'category'    => 'Chemical Dosing',
        'cat_slug'    => 'chemical-dosing',
        'desc'        => 'Chemical dosing systems are used for applications such as pH correction, coagulation, disinfection, antiscalant dosing, and corrosion control. Accurate dosing depends on water chemistry, flow rate, chemical concentration, and process requirements.',
        'takeaway'    => 'Correct dosing improves treatment performance while preventing unnecessary chemical consumption.',
        'image'       => 'about_stp_plant.png',
        'alt'         => 'Automated chemical dosing pumps and antiscalant treatment skid for industrial plants',
        'content'     => '<p>Chemical dosing skids are integral control systems in modern water and wastewater treatment engineering. Precise chemical metering is required to modify water chemistry, accelerate physical separation, and protect sensitive mechanical assets.</p>
                          <h3>Key Industrial Dosing Applications</h3>
                          <p><strong>Antiscalant Dosing:</strong> Polyacrylic or phosphonate antiscalants injected upstream of RO membranes to delay mineral crystal nucleation (CaCO₃, BaSO₄), enabling higher recovery rates without membrane scaling.</p>
                          <p><strong>Coagulation & Flocculation:</strong> Dosing alum, polyaluminum chloride (PAC), or polyelectrolytes into raw water to neutralize colloidal charges and form heavy settleable flocs.</p>
                          <p><strong>pH Adjustment:</strong> Metering sodium hydroxide (NaOH) or sulfuric acid (H₂SO₄) to balance water pH for optimal biological digestion or corrosion control.</p>'
    ),
    'ro-membrane-fouling' => array(
        'title'       => 'Why RO Membranes Lose Performance',
        'category'    => 'Membrane Technology',
        'cat_slug'    => 'membrane-technology',
        'desc'        => 'RO membranes can experience fouling and scaling due to suspended solids, biological growth, organic matter, hardness, silica, and other contaminants. Proper pre-treatment, operating conditions, monitoring, and periodic cleaning help maintain membrane performance.',
        'takeaway'    => 'Good pre-treatment is the first line of defense against membrane fouling.',
        'image'       => 'about_ro_plant.png',
        'alt'         => 'Reverse Osmosis membrane housing inspection and anti-fouling pre-treatment system',
        'content'     => '<p>Reverse Osmosis (RO) membranes are sensitive separation elements. Over time, operating skids may experience declining permeate flow rate, increased feed-to-concentrate differential pressure (ΔP), or degraded salt rejection due to membrane fouling and scaling.</p>
                          <h3>Four Primary Types of Membrane Degradation</h3>
                          <p><strong>1. Mineral Scaling:</strong> Precipitation of supersaturated salts (CaCO₃, CaSO₄, SiO₂) on the concentrate side of membrane channels when recovery limits are exceeded.</p>
                          <p><strong>2. Organic Fouling:</strong> Adsorption of dissolved humic acids, oil & grease, or organic polymers onto the membrane active polyamide layer.</p>
                          <p><strong>3. Colloidal Fouling:</strong> Accumulation of un-filtered clay, silt, and colloidal iron particles blocking membrane feed spacers.</p>
                          <p><strong>4. Bio-Fouling:</strong> Proliferation of bacterial biofilms on membrane surfaces.</p>
                          <p>Preventing fouling requires rigorous pre-treatment (multi-media filtration, UF, cartridge filtration), routine Silt Density Index (SDI) testing, optimized antiscalant dosing, and periodic Clean-In-Place (CIP) chemical washing.</p>'
    ),
    'water-quality-parameters' => array(
        'title'       => 'Understanding TDS, pH, Hardness & Alkalinity',
        'category'    => 'Water Testing',
        'cat_slug'    => 'water-testing',
        'desc'        => 'Water quality cannot be determined by TDS alone. Parameters such as pH, hardness, alkalinity, conductivity, turbidity, iron, chloride, silica, and microbiological characteristics provide a more complete understanding of water chemistry.',
        'takeaway'    => 'A complete water analysis leads to better treatment decisions.',
        'image'       => 'industry_hospital.png',
        'alt'         => 'Water chemistry analysis instruments testing TDS, pH, hardness, alkalinity, and silica',
        'content'     => '<p>Evaluating raw water quality requires interpreting a comprehensive matrix of physical, chemical, and biological analytical parameters beyond basic Total Dissolved Solids (TDS).</p>
                          <h3>Core Water Parameters Defined</h3>
                          <p><strong>Total Dissolved Solids (TDS) [mg/L]:</strong> Measures the combined total of all inorganic salts (Na⁺, Ca²⁺, Cl⁻, SO₄²⁻) dissolved in water.</p>
                          <p><strong>Hydrogen Ion Concentration (pH):</strong> Indicates acidity (< 7.0) or alkalinity (> 7.0). Controls chemical equilibrium and metal solubility.</p>
                          <p><strong>Total Hardness [mg/L as CaCO₃]:</strong> Quantifies dissolved divalent metallic cations (Ca²⁺, Mg²⁺). Responsible for scale formation in heaters and plumbing.</p>
                          <p><strong>Total Alkalinity [mg/L as CaCO₃]:</strong> Measures water\'s acid-neutralizing capacity (bicarbonates, carbonates, hydroxides), providing pH buffering capacity.</p>'
    ),
    'industrial-water-reuse' => array(
        'title'       => 'Why Industries Are Moving Toward Water Recovery',
        'category'    => 'Industrial Water Reuse',
        'cat_slug'    => 'water-reuse',
        'desc'        => 'Increasing water demand and wastewater-disposal requirements are encouraging industries to recover and reuse treated water. Combining conventional treatment with RO, UF, MEE, or other advanced technologies can help reduce freshwater dependency.',
        'takeaway'    => 'Water recovery can improve both resource efficiency and wastewater management.',
        'image'       => 'industry_government.png',
        'alt'         => 'Industrial water recycling plant factory water treatment system',
        'content'     => '<p>Industrial water scarcity, stringent environmental discharge mandates, and increasing municipal freshwater tariffs are driving manufacturing plants, textile mills, and commercial complexes across South India toward integrated water recovery systems.</p>
                          <h3>Key Benefits of Industrial Water Recovery</h3>
                          <p><strong>Guaranteed Utility Supply:</strong> Eliminates vulnerability to seasonal groundwater depletion or municipal tanker supply interruptions.</p>
                          <p><strong>Substantial Operational Cost Savings:</strong> Reduces ongoing freshwater procurement and wastewater discharge disposal fees.</p>
                          <p><strong>Regulatory Compliance & ESG Goals:</strong> Fulfills Pollution Control Board zero liquid discharge guidelines while advancing corporate sustainability metrics.</p>'
    ),
    'commercial-vs-industrial-ro' => array(
        'title'       => 'Commercial vs. Industrial RO Plants',
        'category'    => 'RO Engineering',
        'cat_slug'    => 'ro-engineering',
        'desc'        => 'Commercial RO systems (250–2000 LPH) focus on potable water supply for hospitality and institutional buildings. Industrial RO plants (5,000+ LPH) feature heavy-duty skids, automated dosing, and high-recovery membranes engineered for continuous factory processes.',
        'takeaway'    => 'Chemistry & flow demand dictate membrane skid selection.',
        'image'       => 'product_commercial_ro.png',
        'alt'         => 'Commercial reverse osmosis skid compared to heavy-duty industrial RO plant',
        'content'     => '<p>Reverse Osmosis (RO) plants are classified into commercial and industrial categories based on volumetric capacity, hydraulic design, membrane array configuration, and mechanical construction standards.</p>
                          <h3>Commercial vs. Industrial Specifications</h3>
                          <p><strong>Commercial RO Systems (250 – 2,000 LPH):</strong> Applications in hotels, restaurants, hospitals, educational campuses, and commercial office complexes. Features compact vertical skid design, FRP membrane pressure vessels, and multistage centrifugal pumps.</p>
                          <p><strong>Industrial RO Plants (5,000 – 100,000+ LPH):</strong> Applications in manufacturing units, chemical processing, boiler feedwater, power generation, and textile processing. Features heavy-duty SS 304 skids, PLC control panels, VFDs, and Chemical Cleaning Skids (CIP).</p>'
    ),
    'stp-etp-standards' => array(
        'title'       => 'Understanding STP & ETP Compliance Standards',
        'category'    => 'Wastewater Management',
        'cat_slug'    => 'wastewater-management',
        'desc'        => 'State Pollution Control Board (KSPCB / CPCB) guidelines specify biological oxygen demand (BOD), chemical oxygen demand (COD), and total suspended solids (TSS) limits for treated discharge. BioZone STP systems support these parameters with reduced footprint.',
        'takeaway'    => 'Compliance protects environment & operations.',
        'image'       => 'stp_plant.png',
        'alt'         => 'Sewage Treatment Plant (STP) compliant with Pollution Control Board discharge standards',
        'content'     => '<p>Regulatory compliance under Central and State Pollution Control Boards (CPCB / KSPCB) is mandatory for commercial developments, residential townships, and industrial units producing sewage or industrial wastewater.</p>
                          <h3>Standard Discharge Parameters</h3>
                          <p><strong>BOD₅ (at 20°C):</strong> < 10 – 30 mg/L depending on discharge point.</p>
                          <p><strong>COD:</strong> < 50 – 250 mg/L.</p>
                          <p><strong>Total Suspended Solids (TSS):</strong> < 20 – 50 mg/L.</p>
                          <p><strong>Oil & Grease:</strong> < 10 mg/L.</p>
                          <p>Modern Sewage Treatment Plants (STP) utilizing Moving Bed Biofilm Reactor (MBBR) or Membrane Bioreactor (MBR) technology achieve these stringent parameters consistently within a compact footprint.</p>'
    ),
    'borewell-iron-hardness' => array(
        'title'       => 'Borewell Iron & Hardness Solutions',
        'category'    => 'Groundwater Chemistry',
        'cat_slug'    => 'groundwater-chemistry',
        'desc'        => 'Groundwater in Kerala frequently exhibits high dissolved ferrous iron and calcium carbonate hardness. Catalytic manganese dioxide media oxidizes iron into insoluble particles, while ion-exchange softeners protect building piping from scaling.',
        'takeaway'    => 'Always test lab parameters before buying filters.',
        'image'       => 'wtp_plant.png',
        'alt'         => 'Catalytic iron removal filter and water softener setup for borewell groundwater',
        'content'     => '<p>Deep borewell groundwater across Kerala and South India commonly presents dual water quality challenges: elevated dissolved ferrous iron (Fe²⁺) and calcium/magnesium hardness.</p>
                          <h3>Iron Contamination & Softening Solutions</h3>
                          <p>Ferrous iron is clear upon extraction but oxidizes upon exposure to air, forming insoluble reddish-brown ferric hydroxide stains. Catalytic manganese dioxide media promotes rapid iron oxidation and physical filtration without chemical dosing.</p>
                          <p>Installing automatic ion-exchange water softeners removes hardness ions, protecting pipework and solar heaters, ensuring clear scale-free water supply.</p>'
    ),
    'biozone-technology' => array(
        'title'       => 'BioZone Technology: Compact Biological Wastewater Treatment',
        'category'    => 'BioZone Technology',
        'cat_slug'    => 'biozone-technology',
        'desc'        => 'AquaSolve’s specialized compact STP & ETP technology featuring reduced civil footprint, demand-based ON/OFF operational flexibility, ozone disinfection, and low power draw.',
        'takeaway'    => 'Compact footprint, low power draw & ON/OFF operational flexibility.',
        'image'       => 'stp_detail_hero.png',
        'alt'         => 'BioZone Treatment Technology compact biological wastewater system',
        'custom_link' => aqua_solve_page_url('biozone-technology'),
        'content'     => '<p>BioZone is AquaSolve’s specialized biological treatment technology designed for compact, energy-efficient Sewage and Effluent Treatment Plants.</p>'
    ),
);

// Check if a specific single article is requested
$selected_slug = isset($_GET['article']) ? sanitize_text_field($_GET['article']) : '';
$current_article = ($selected_slug && isset($articles[$selected_slug])) ? $articles[$selected_slug] : null;

if ($current_article && !empty($current_article['custom_link'])) {
    wp_redirect($current_article['custom_link']);
    exit;
}

?>

<!-- ==========================================================================
     KNOWLEDGE CENTER HERO BANNER
     ========================================================================== -->
<section class="page-banner" aria-label="Knowledge Center introduction">
    <div class="container">
        <?php if ($current_article): ?>
            <!-- Breadcrumb Navigation for Single Article -->
            <div style="margin-bottom: 1rem; font-size: 0.9rem; color: #bae6fd;">
                <a href="<?php echo esc_url(home_url('/')); ?>" style="color: #e0f2fe; text-decoration: none;">Home</a>
                <span style="margin: 0 0.5rem; opacity: 0.6;">/</span>
                <a href="<?php echo esc_url(aqua_solve_page_url('knowledge-center')); ?>" style="color: #e0f2fe; text-decoration: none;">Knowledge Center</a>
                <span style="margin: 0 0.5rem; opacity: 0.6;">/</span>
                <span style="color: #fff; font-weight: 600;"><?php echo esc_html($current_article['category']); ?></span>
            </div>
            <h1 style="font-size: 2.3rem; line-height: 1.25; margin-bottom: 0.8rem;"><?php echo esc_html($current_article['title']); ?></h1>
            <p style="max-width: 800px; font-size: 1.1rem; color: #e0f2fe; margin: 0 auto;"><?php echo esc_html($current_article['desc']); ?></p>
        <?php else: ?>
            <h1>Engineering Knowledge Center</h1>
            <p>Technical guides, water chemistry analysis, membrane separation principles, and wastewater management standards authored by AquaSolve’s water treatment engineering team.</p>
        <?php endif; ?>
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

<?php if ($current_article): ?>
<!-- ==========================================================================
     SINGLE ARTICLE VIEW
     ========================================================================== -->
<section class="section" style="padding: 4rem 0;">
    <div class="container">
        <div class="knowledge-single-article">
            
            <!-- Featured Image -->
            <div style="border-radius: 12px; overflow: hidden; margin-bottom: 2.5rem; box-shadow: 0 10px 30px rgba(0,0,0,0.08); max-height: 420px;">
                <img src="<?php echo aqua_solve_asset('images/' . $current_article['image']); ?>" alt="<?php echo esc_attr($current_article['alt']); ?>" style="width: 100%; height: 400px; object-fit: cover;" />
            </div>

            <!-- Category Badge -->
            <div style="margin-bottom: 1.2rem;">
                <span style="background: #e0f2fe; color: #0369a1; padding: 0.35rem 0.9rem; border-radius: 4px; font-size: 0.8rem; font-weight: 800; text-transform: uppercase; letter-spacing: 0.5px;">
                    <?php echo esc_html($current_article['category']); ?>
                </span>
            </div>

            <!-- Key Takeaway Highlight Box -->
            <div class="takeaway-box" style="font-size: 1.05rem; padding: 1.2rem 1.5rem; margin-bottom: 2rem;">
                <span style="display: block; font-size: 0.75rem; text-transform: uppercase; letter-spacing: 1px; color: #0284c7; margin-bottom: 0.3rem;">Engineering Key Takeaway</span>
                ✓ <?php echo esc_html($current_article['takeaway']); ?>
            </div>

            <!-- Main Technical Body Content -->
            <div class="single-article-content">
                <?php echo $current_article['content']; ?>
            </div>

            <!-- Back to Knowledge Center Link -->
            <div style="margin-top: 3rem; padding-top: 2rem; border-top: 1px solid #e2e8f0; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1rem;">
                <a href="<?php echo esc_url(aqua_solve_page_url('knowledge-center')); ?>" class="btn btn-secondary" style="font-size: 0.9rem; font-weight: 700;">
                    &larr; Back to All Articles
                </a>
                <button class="btn btn-primary trigger-quote" data-product="<?php echo esc_attr($current_article['title']); ?>">
                    Consult an Engineer About This Topic
                </button>
            </div>

        </div>

        <!-- ==========================================================================
             RELATED ARTICLES (3 CARDS)
             ========================================================================== -->
        <div style="margin-top: 5rem; padding-top: 3rem; border-top: 2px dashed #e2e8f0;">
            <div style="text-align: center; margin-bottom: 2.5rem;">
                <span style="color: #0284c7; font-weight: 700; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 1px;">Recommended Reading</span>
                <h3 style="font-size: 1.8rem; font-weight: 800; color: #0f172a; margin-top: 0.3rem;">Related Technical Topics</h3>
            </div>

            <div class="knowledge-grid">
                <?php
                $related_count = 0;
                foreach ($articles as $rel_slug => $rel_article):
                    if ($rel_slug === $selected_slug) continue;
                    if ($related_count >= 3) break;
                    $related_count++;
                ?>
                    <div class="knowledge-card">
                        <div class="knowledge-card-img-wrapper">
                            <img src="<?php echo aqua_solve_asset('images/' . $rel_article['image']); ?>" alt="<?php echo esc_attr($rel_article['alt']); ?>" class="knowledge-card-img" />
                        </div>
                        <div class="knowledge-card-body">
                            <div>
                                <span style="background: #e0f2fe; color: #0369a1; padding: 0.2rem 0.6rem; border-radius: 4px; font-size: 0.72rem; font-weight: 800; text-transform: uppercase;">
                                    <?php echo esc_html($rel_article['category']); ?>
                                </span>
                                <h3 style="font-size: 1.15rem; color: #0f172a; margin: 0.6rem 0 0.4rem; font-weight: 800; line-height: 1.35;">
                                    <?php echo esc_html($rel_article['title']); ?>
                                </h3>
                                <p style="color: #64748b; font-size: 0.88rem; line-height: 1.55; margin-bottom: 0.8rem;">
                                    <?php echo esc_html(wp_trim_words($rel_article['desc'], 18)); ?>
                                </p>
                            </div>
                            <div>
                                <div class="takeaway-box" style="margin: 0.5rem 0 1rem; font-size: 0.8rem; padding: 0.5rem 0.75rem;">
                                    ✓ <?php echo esc_html($rel_article['takeaway']); ?>
                                </div>
                                <?php $rel_url = !empty($rel_article['custom_link']) ? $rel_article['custom_link'] : aqua_solve_page_url('knowledge-center') . '?article=' . $rel_slug; ?>
                                <a href="<?php echo esc_url($rel_url); ?>" class="btn btn-secondary" style="width: 100%; text-align: center; justify-content: center; font-size: 0.85rem; font-weight: 700; padding: 0.65rem 1rem;">
                                    Read Article &rarr;
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</section>

<?php else: ?>
<!-- ==========================================================================
     KNOWLEDGE CENTER MAIN OVERVIEW (GRID + FILTERING)
     ========================================================================== -->
<section class="section" style="padding: 4rem 0;">
    <div class="container">
        
        <div style="text-align: center; max-width: 750px; margin: 0 auto 2.5rem;">
            <span style="color: #0284c7; font-weight: 700; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px;">Technical Expertise &amp; Water Chemistry</span>
            <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a; margin-top: 0.4rem;">Water &amp; Wastewater Engineering Guides</h2>
            <p style="color: #64748b;">Explore detailed engineering topics compiled by AquaSolve specialists for commercial, industrial, and municipal water treatment applications.</p>
        </div>

        <!-- Category Filter Buttons -->
        <div class="knowledge-filter-bar" aria-label="Article Category Filters">
            <button class="filter-btn active" data-filter="all">All Topics (20)</button>
            <button class="filter-btn" data-filter="biozone-technology">BioZone Tech</button>
            <button class="filter-btn" data-filter="water-softening">Water Softening</button>
            <button class="filter-btn" data-filter="water-filtration">Water Filtration</button>
            <button class="filter-btn" data-filter="activated-carbon">Activated Carbon</button>
            <button class="filter-btn" data-filter="water-disinfection">Water Disinfection</button>
            <button class="filter-btn" data-filter="ultrafiltration">Ultrafiltration</button>
            <button class="filter-btn" data-filter="membrane-technology">Membrane Technology</button>
            <button class="filter-btn" data-filter="water-testing">Water Testing</button>
            <button class="filter-btn" data-filter="industrial-water-treatment">Industrial Water Treatment</button>
            <button class="filter-btn" data-filter="wastewater-management">Wastewater &amp; ZLD</button>
            <button class="filter-btn" data-filter="water-reuse">Water Reuse</button>
            <button class="filter-btn" data-filter="chemical-dosing">Chemical Dosing</button>
        </div>

        <!-- 3-Column Knowledge Cards Grid -->
        <div class="knowledge-grid">
            <?php foreach ($articles as $slug => $art): ?>
                <div class="knowledge-card article-item" data-category="<?php echo esc_attr($art['cat_slug']); ?>">
                    <div class="knowledge-card-img-wrapper">
                        <img src="<?php echo aqua_solve_asset('images/' . $art['image']); ?>" alt="<?php echo esc_attr($art['alt']); ?>" class="knowledge-card-img" loading="lazy" />
                    </div>
                    <div class="knowledge-card-body">
                        <div>
                            <span style="background: #e0f2fe; color: #0369a1; padding: 0.25rem 0.65rem; border-radius: 4px; font-size: 0.75rem; font-weight: 800; text-transform: uppercase;">
                                <?php echo esc_html($art['category']); ?>
                            </span>
                            <h3 style="font-size: 1.2rem; color: #0f172a; margin: 0.7rem 0 0.5rem; font-weight: 800; line-height: 1.35;">
                                <?php echo esc_html($art['title']); ?>
                            </h3>
                            <p style="color: #64748b; font-size: 0.88rem; line-height: 1.6; margin-bottom: 0.8rem;">
                                <?php echo esc_html($art['desc']); ?>
                            </p>
                        </div>
                        <div>
                            <div class="takeaway-box">
                                ✓ <?php echo esc_html($art['takeaway']); ?>
                            </div>
                            <?php $art_url = !empty($art['custom_link']) ? $art['custom_link'] : aqua_solve_page_url('knowledge-center') . '?article=' . $slug; ?>
                            <a href="<?php echo esc_url($art_url); ?>" class="btn btn-secondary" style="width: 100%; text-align: center; justify-content: center; font-size: 0.88rem; font-weight: 700; padding: 0.75rem 1rem;">
                                Read Article &rarr;
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- ==========================================================================
             TECHNICAL FAQ ACCORDION
             ========================================================================== -->
        <div style="max-width: 850px; margin: 4rem auto 0 auto; padding-top: 3rem; border-top: 2px solid #f1f5f9;">
            <div style="text-align: center; margin-bottom: 2.5rem;">
                <span style="color: #0284c7; font-weight: 700; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 1px;">Common Questions</span>
                <h2 style="font-size: 2rem; font-weight: 800; color: #0f172a; margin-top: 0.3rem;">Frequently Asked Technical Questions</h2>
            </div>

            <div style="display: flex; flex-direction: column; gap: 1rem;">
                <details style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 1.2rem; cursor: pointer;">
                    <summary style="font-weight: 700; color: #0f172a; font-size: 1.05rem;">How is a commercial water treatment system selected?</summary>
                    <p style="color: #475569; margin-top: 0.8rem; font-size: 0.92rem; line-height: 1.6;">
                        System selection begins with a 1-Litre laboratory water test measuring TDS, pH, Iron, Hardness, and bacterial count. Combined with your required daily peak flow rate (LPH / KLD), AquaSolve engineers select the appropriate pressure vessel media, RO membrane arrays, and pump horsepower.
                    </p>
                </details>

                <details style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 1.2rem; cursor: pointer;">
                    <summary style="font-weight: 700; color: #0f172a; font-size: 1.05rem;">When is an STP required for commercial buildings?</summary>
                    <p style="color: #475569; margin-top: 0.8rem; font-size: 0.92rem; line-height: 1.6;">
                        Sewage Treatment Plants (STP) are required for commercial complexes, apartments, hotels, and hospitals under Pollution Control Board norms to treat domestic wastewater before discharge or for onsite landscape irrigation reuse.
                    </p>
                </details>

                <details style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 1.2rem; cursor: pointer;">
                    <summary style="font-weight: 700; color: #0f172a; font-size: 1.05rem;">What is an Effluent Treatment Plant (ETP)?</summary>
                    <p style="color: #475569; margin-top: 0.8rem; font-size: 0.92rem; line-height: 1.6;">
                        An ETP is designed to treat industrial process wastewater containing chemicals, oils, dyes, or heavy metals from manufacturing units, laundries, dairies, and factories before safe environmental discharge or recycling.
                    </p>
                </details>

                <details style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 1.2rem; cursor: pointer;">
                    <summary style="font-weight: 700; color: #0f172a; font-size: 1.05rem;">Does AquaSolve provide installation, commissioning &amp; AMC support?</summary>
                    <p style="color: #475569; margin-top: 0.8rem; font-size: 0.92rem; line-height: 1.6;">
                        Yes. AquaSolve handles end-to-end turnkey execution including equipment supply, site piping installation, commissioning testing, and structured Annual Maintenance Contracts (AMC) / Operations &amp; Maintenance (O&amp;M).
                    </p>
                </details>
            </div>
        </div>

    </div>
</section>

<!-- Category Filtering JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterBtns = document.querySelectorAll('.filter-btn');
    const articles = document.querySelectorAll('.article-item');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            filterBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');

            const filter = this.getAttribute('data-filter');

            articles.forEach(article => {
                const cat = article.getAttribute('data-category');
                if (filter === 'all' || cat === filter) {
                    article.style.display = 'flex';
                } else {
                    article.style.display = 'none';
                }
            });
        });
    });
});
</script>
<?php endif; ?>

<!-- ==========================================================================
     CONVERSION CTA BANNER
     ========================================================================== -->
<section style="background: linear-gradient(135deg, #0284c7 0%, #0369a1 100%); color: #fff; padding: 3.5rem 0; text-align: center;">
    <div class="container" style="max-width: 850px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 1rem;">Need a Water Treatment Solution?</h2>
        <p style="font-size: 1.1rem; color: #e0f2fe; margin-bottom: 2rem; line-height: 1.6;">
            Talk to AquaSolve's water treatment engineering team about your raw-water quality, treatment requirements, and application.
        </p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
            <button class="btn trigger-quote" data-product="Water Quality Analysis Request" style="background: #fff; color: #0284c7; font-weight: 700; padding: 0.9rem 2rem; border-radius: 50px; border: none; cursor: pointer;">
                Request Water Analysis
            </button>
            <a href="https://wa.me/919946450452?text=Hi%20AquaSolve,%20I%20would%20like%20to%20talk%20to%20a%20water%20treatment%20expert." target="_blank" rel="noopener noreferrer" class="btn" style="background: #25D366; color: #fff; font-weight: 700; padding: 0.9rem 2rem; border-radius: 50px; text-decoration: none;">
                Talk to an Expert
            </a>
        </div>
    </div>
</section>

<?php
get_footer();
