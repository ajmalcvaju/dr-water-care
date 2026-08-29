'use client';

import React, { useState, useEffect } from 'react';
import Link from 'next/link';
import { useQuote } from '../../context/QuoteContext';

export default function Products() {
  const { openModal } = useQuote();
  const [activeFilter, setActiveFilter] = useState('all');

  const productsList = [
    {
      id: 6,
      title: "Aqua Solve Sediment Filter",
      category: "filters",
      tag: "Sediment Filter",
      price: "₹28,000",
      desc: "Premium heavy-duty sand and sediment media filter vessel. Removes dust, silt, clay, mud, and all suspended particles from incoming water supply.",
      specs: [
        "Vessel: FRP pressure tank",
        "Operation: Multiport Valve",
        "Service: Easy manual backwash"
      ],
      imageSrc: "/product_frp_vessel.png"
    },
    {
      id: 11,
      title: "Aqua Solve Iron Remover Filter",
      category: "filters",
      tag: "Iron Remover",
      price: "₹29,000",
      desc: "Specialized catalytic manganese dioxide media filter. Oxidizes and filters dissolved ferrous iron, manganese, and sulphur odor.",
      specs: [
        "Vessel: FRP pressure tank",
        "Operation: Multiport Valve",
        "Service: Periodic backwash & rinse"
      ],
      imageSrc: "/product_frp_vessel.png"
    },
    {
      id: 12,
      title: "Aqua Solve Carbon Filter",
      category: "filters",
      tag: "Carbon Filter",
      price: "₹30,000",
      desc: "High-grade activated carbon filter. Adsorbs chlorine, organic pesticides, bad taste, odor, and chemical impurities from supply water.",
      specs: [
        "Vessel: FRP pressure tank",
        "Operation: Multiport Valve",
        "Service: Simple backwash routine"
      ],
      imageSrc: "/product_frp_vessel.png"
    },
    {
      id: 9,
      title: "Puroaqua Dual Mode (Black)",
      category: "domestic",
      tag: "Dual Mode",
      price: "₹14,500",
      desc: "6-Stage Advanced Purification system featuring dual-mode filtration. Mode 1 (RO+UF+ALK) removes TDS, salts, and heavy metals from high TDS borewell water. Mode 2 (SN+UF+ALK) blocks dust, rust, and bacteria from low TDS/municipal supply.",
      specs: [
        "Purification: Dual Mode (RO / SN)",
        "Stages: 6 Stage Advanced",
        "Enrichment: Alkaline + UF",
        "Storage: 10 Litre Food-Grade Tank"
      ],
      imageSrc: "/product_puroaqua_black.jpg"
    },
    {
      id: 10,
      title: "Puroaqua Dual Mode (White)",
      category: "domestic",
      tag: "Dual Mode",
      price: "₹14,500",
      desc: "6-Stage Advanced Purification system featuring dual-mode filtration. Mode 1 (RO+UF+ALK) removes TDS, salts, and heavy metals from high TDS borewell water. Mode 2 (SN+UF+ALK) blocks dust, rust, and bacteria from low TDS/municipal supply.",
      specs: [
        "Purification: Dual Mode (RO / SN)",
        "Stages: 6 Stage Advanced",
        "Enrichment: Alkaline + UF",
        "Storage: 10 Litre Food-Grade Tank"
      ],
      imageSrc: "/product_puroaqua_white.jpg"
    },
    {
      id: 4,
      title: "Aqua Solve Commercial RO Treatment Plant",
      category: "plants",
      tag: "Heavy Duty",
      desc: "Multi-port pre-filtration vessels coupled with high pressure steel pumps for colleges, clinics, and offices.",
      specs: [
        "Production: 250 Litres/Hr",
        "Media: Sand + Carbon + RO",
        "Structure: SS 304 skid frame"
      ],
      imageSrc: "/product_commercial_ro.png"
    },
    {
      id: 13,
      title: "Aqua Solve Sewage Treatment Plant (STP)",
      category: "plants",
      tag: "Sewage Treatment",
      desc: "Industrial and commercial STP plants engineered to treat domestic sewage efficiently. High efficiency bioreactor media ensures safe discharge or reuse parameters.",
      specs: [
        "Process: Screening to Disinfection",
        "Vessels: MBR / MBBR Technology",
        "Applications: Apartments, Malls, Resorts"
      ],
      imageSrc: "/stp_plant.png"
    },
    {
      id: 14,
      title: "Aqua Solve Effluent Treatment Plant (ETP)",
      category: "plants",
      tag: "Effluent Treatment",
      desc: "Advanced industrial wastewater treatment setup designed for factories and manufacturing plants. Built-in Zero Liquid Discharge (ZLD) configurations.",
      specs: [
        "Process: pH to Settling & Filtration",
        "Technology: Coagulation / Flocculation",
        "Applications: Laundries, Factories, Dairies"
      ],
      imageSrc: "/etp_plant.png"
    }
  ];

  useEffect(() => {
    if (typeof window !== 'undefined') {
      const params = new URLSearchParams(window.location.search);
      const cat = params.get('category');
      if (cat && ['domestic', 'filters', 'plants', 'all'].includes(cat)) {
        setActiveFilter(cat);
      }
    }
  }, []);

  useEffect(() => {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('animated');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

    document.querySelectorAll('.animate-on-scroll').forEach(el => observer.observe(el));
    return () => observer.disconnect();
  }, [activeFilter]);

  const filteredProducts = activeFilter === 'all' 
    ? productsList 
    : productsList.filter(p => p.category === activeFilter);

  return (
    <>
      {/* ==========================================================================
           PAGE BANNER
           ========================================================================== */}
      <section className="page-banner" aria-label="Product catalog page introduction">
        <div className="container">
          <h1>Our Premium Products</h1>
          <p>Advanced purification mechanisms tailored for high performance under local water conditions.</p>
        </div>
        
        {/* Banner Wave SVG */}
        <svg className="banner-wave" viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 32L60 48C120 64 240 96 360 101.3C480 107 600 85 720 69.3C840 53 960 43 1080 42.7C1200 43 1320 53 1380 58.7L1440 64V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0V32Z" fill="#FFF"/>
        </svg>

        <div className="banner-decorations">
          <div className="bubble bubble-1"></div>
          <div className="bubble bubble-2"></div>
          <div className="bubble bubble-3"></div>
        </div>
      </section>

      {/* ==========================================================================
           PRODUCTS SHOWCASE & FILTERS
           ========================================================================== */}
      <section className="section">
        <div className="container">
          
          {/* Filter Tabs */}
          <div className="product-filters animate-on-scroll">
            <button className={`filter-btn ${activeFilter === 'all' ? 'active' : ''}`} onClick={() => setActiveFilter('all')}>All Products</button>
            <button className={`filter-btn ${activeFilter === 'domestic' ? 'active' : ''}`} onClick={() => setActiveFilter('domestic')}>Domestic Purifiers</button>
            <button className={`filter-btn ${activeFilter === 'filters' ? 'active' : ''}`} onClick={() => setActiveFilter('filters')}>Water Filters</button>
            <button className={`filter-btn ${activeFilter === 'plants' ? 'active' : ''}`} onClick={() => setActiveFilter('plants')}>Treatment Plants</button>
          </div>

          {/* Products Catalog Grid */}
          <div className="products-grid" style={{ minHeight: '400px' }}>
            {filteredProducts.map((product) => (
              <Link key={product.id} href={`/products/${product.id}`} className="product-card-link animate-on-scroll">
                <div className="product-card" data-category={product.category}>
                  <div className="product-image-area">
                    <span className="product-tag">{product.tag}</span>
                    <img src={product.imageSrc || "/product-placeholder.png"} alt={product.title} className="product-image" />
                  </div>
                  <div className="product-info">
                    <h3>{product.title}</h3>
                    <p style={{ fontSize: '0.85rem', color: 'var(--text-light)', marginBottom: '0.8rem' }}>{product.desc}</p>
                    <ul className="product-specs">
                      {product.specs.map((spec, idx) => (
                        <li key={idx}>
                          <svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                          {spec}
                        </li>
                      ))}
                    </ul>
                    <div className="product-footer">
                      <span className="product-price">{product.price || "Get Quote"}</span>
                      <button 
                        className="btn btn-primary btn-card" 
                        onClick={(e) => { 
                          e.preventDefault(); 
                          e.stopPropagation(); 
                          openModal(product.title); 
                        }}
                      >
                        Enquire Now
                      </button>
                    </div>
                  </div>
                </div>
              </Link>
            ))}
          </div>
        </div>
      </section>

      {/* ==========================================================================
           PRODUCT COMPARISON SYSTEM
           ========================================================================== */}
      <section className="section section-bg">
        <div className="container">
          <div className="section-header animate-on-scroll">
            <h2>Product Selection Matrix</h2>
            <p>Compare water filter attributes to identify which configuration fits your source parameters.</p>
          </div>

          <div className="table-responsive animate-on-scroll">
            <table className="comparison-table">
              <thead>
                <tr>
                  <th>Product Model</th>
                  <th>Category</th>
                  <th>Ideal Source Water</th>
                  <th>Max TDS Handle</th>
                  <th>Electricity Needs</th>
                  <th>Reject Water Ratio</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><strong>Puroaqua Dual Mode (Black / White)</strong></td>
                  <td>Domestic RO / UF</td>
                  <td>Flexible (Borewell & Municipal)</td>
                  <td>1200 PPM (RO Mode)</td>
                  <td>Yes (RO Mode) / Direct (SN Mode)</td>
                  <td>RO Mode Only (Approx. 55%)</td>
                </tr>
                <tr>
                  <td><strong>Aqua Solve Sediment Filter</strong></td>
                  <td>Sediment Filter</td>
                  <td>Turbid / muddy well water</td>
                  <td>Suspended Solids Only</td>
                  <td>No</td>
                  <td>Backwash wash only</td>
                </tr>
                <tr>
                  <td><strong>Aqua Solve Iron Remover Filter</strong></td>
                  <td>Iron Filter</td>
                  <td>Reddish well water (metallic taste)</td>
                  <td>Iron up to 5 PPM</td>
                  <td>No</td>
                  <td>Backwash wash only</td>
                </tr>
                <tr>
                  <td><strong>Aqua Solve Carbon Filter</strong></td>
                  <td>Carbon Filter</td>
                  <td>Chlorinated / smelly supply water</td>
                  <td>Chemicals & Odor Only</td>
                  <td>No</td>
                  <td>Backwash wash only</td>
                </tr>
                <tr>
                  <td><strong>Aqua Solve Commercial RO Treatment Plant</strong></td>
                  <td>Commercial</td>
                  <td>Heavy industrial / community supply</td>
                  <td>2000 PPM</td>
                  <td>Yes (3-Phase option)</td>
                  <td>Yes (Approx. 50%)</td>
                </tr>
                <tr>
                  <td><strong>Aqua Solve Sewage Treatment Plant (STP)</strong></td>
                  <td>Commercial STP</td>
                  <td>Domestic sewage / blackwater reuse</td>
                  <td>Organic Load / Pathogens</td>
                  <td>Yes (Blower & Pumps)</td>
                  <td>MBR Sludge discharge</td>
                </tr>
                <tr>
                  <td><strong>Aqua Solve Effluent Treatment Plant (ETP)</strong></td>
                  <td>Commercial ETP</td>
                  <td>Industrial chemical wastewater</td>
                  <td>Chemical Load (ZLD)</td>
                  <td>Yes (Aerators & Dosing)</td>
                  <td>Sludge filter press</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </section>

      {/* ==========================================================================
           CALL TO ACTION
           ========================================================================== */}
      <section className="cta-banner">
        <div className="container animate-on-scroll">
          <h2>Unsure of your water parameters?</h2>
          <p>Book a free visit by our technicians in Calicut. We bring handheld testing equipment to check your TDS and pH on the spot.</p>
          <div style={{ display: 'flex', justifyContent: 'center', gap: '1rem', flexWrap: 'wrap' }}>
            <button className="btn btn-primary" onClick={() => openModal('TDS Water Quality Check')} style={{ background: 'var(--bg-white)', color: 'var(--primary-color)', boxShadow: 'none' }}>
              Request On-Site TDS Check
            </button>
            <Link href="/contact" className="btn btn-secondary" style={{ borderColor: 'var(--bg-white)', color: 'var(--bg-white)' }}>
              Contact Support
            </Link>
          </div>
        </div>
      </section>
    </>
  );
}
