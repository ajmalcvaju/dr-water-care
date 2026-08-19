'use client';

import React, { useState, useEffect } from 'react';
import Link from 'next/link';
import { useQuote } from '../../context/QuoteContext';

export default function Products() {
  const { openModal } = useQuote();
  const [activeFilter, setActiveFilter] = useState('all');

  const productsList = [
    {
      id: 1,
      title: "Aqua Gold UV Open Flow",
      category: "uv-purifiers",
      tag: "Best Seller",
      desc: "Double UV-C chambers in heavy food-grade casing. Direct fast-flow tap supply without water wastage.",
      specs: [
        "Flow Capacity: 60 L/Hr",
        "Filtration: Dual Sediment + UV",
        "Power Supply: 24V DC SMPS"
      ]
    },
    {
      id: 2,
      title: "Aqua Gold Premium RO",
      category: "domestic-ro",
      tag: "Premium",
      desc: "Multi-stage RO, UV & UF purifier with copper mineralizer. Best for municipal and tank sources with high TDS.",
      specs: [
        "Storage Tank: 12 Litres",
        "Stages: 8 Stage Filtration",
        "TDS Reducer: Up to 95%"
      ]
    },
    {
      id: 3,
      title: "HydroSoft Softener",
      category: "softeners",
      tag: "Whole House",
      desc: "Premium food-grade ion exchange resin vessel. Neutralizes scaling minerals to shield pipes, skin, and laundry.",
      specs: [
        "Flow Rate: 1000 L/Hr",
        "Control: Automatic Valve",
        "Regeneration: Salt-Brine tank"
      ]
    },
    {
      id: 4,
      title: "Commercial RO Plant",
      category: "commercial",
      tag: "Heavy Duty",
      desc: "Multi-port pre-filtration vessels coupled with high pressure steel pumps for colleges, clinics, and offices.",
      specs: [
        "Production: 250 Litres/Hr",
        "Media: Sand + Carbon + RO",
        "Structure: SS 304 skid frame"
      ]
    },
    {
      id: 5,
      title: "Aqua Pure Under-Sink RO",
      category: "domestic-ro",
      tag: "Modern",
      desc: "Concealed space-saving water purifier. Placed beneath modular kitchen sinks with an elegant deck tap.",
      specs: [
        "Storage Tank: 8L Hydrostatic",
        "Valve: Chrome Goose-neck",
        "Stages: 6 stage filtration"
      ]
    },
    {
      id: 6,
      title: "Aqua Shield Iron Filter",
      category: "softeners",
      tag: "Iron Filter",
      desc: "Contains catalytic Manganese Zeolite media. Removes metallic iron, odor, and reddish-brown staining.",
      specs: [
        "Vessel: FRP pressure tank",
        "Operation: Multiport Valve",
        "Service: Semi-annual backwash"
      ]
    },
    {
      id: 7,
      title: "Multi-Tap Cooler Purifier",
      category: "commercial",
      tag: "Cooler Combo",
      desc: "Dual tap (Cold & Ambient) stainless steel storage. Built-in industrial filtration system for factories & showrooms.",
      specs: [
        "Cooling Reservoir: 80 Litres",
        "Taps: 2 (Cold & Normal)",
        "Cabinet: Full SS 304 food-grade"
      ]
    },
    {
      id: 8,
      title: "Gravity UF Filter",
      category: "uv-purifiers",
      tag: "Eco Filter",
      desc: "Non-electric gravity-fed double chamber filter. Hollow fiber UF membrane blocks cysts, dust, and micro-particles.",
      specs: [
        "Capacity: 20 Litres",
        "Power: Zero Electricity",
        "Maintenance: Easy DIY wash"
      ]
    }
  ];

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
  }, []);

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
            <button className={`filter-btn ${activeFilter === 'all' ? 'active' : ''}`} onClick={() => setActiveFilter('all')}>All Systems</button>
            <button className={`filter-btn ${activeFilter === 'domestic-ro' ? 'active' : ''}`} onClick={() => setActiveFilter('domestic-ro')}>Domestic RO</button>
            <button className={`filter-btn ${activeFilter === 'uv-purifiers' ? 'active' : ''}`} onClick={() => setActiveFilter('uv-purifiers')}>UV Purifiers</button>
            <button className={`filter-btn ${activeFilter === 'softeners' ? 'active' : ''}`} onClick={() => setActiveFilter('softeners')}>Water Softeners</button>
            <button className={`filter-btn ${activeFilter === 'commercial' ? 'active' : ''}`} onClick={() => setActiveFilter('commercial')}>Commercial Plants</button>
          </div>

          {/* Products Catalog Grid */}
          <div className="products-grid" style={{ minHeight: '400px' }}>
            {filteredProducts.map((product) => (
              <div key={product.id} className="product-card animate-on-scroll" data-category={product.category}>
                <div className="product-image-area">
                  <span className="product-tag">{product.tag}</span>
                  <img src="/product-placeholder.png" alt={product.title} className="product-image" />
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
                    <span className="product-price">Get Quote</span>
                    <button className="btn btn-primary btn-card" onClick={() => openModal(product.title)}>Enquire Now</button>
                  </div>
                </div>
              </div>
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
                  <td><strong>Aqua Gold Premium RO</strong></td>
                  <td>Domestic RO</td>
                  <td>Borewell / High TDS groundwater</td>
                  <td>1500 PPM</td>
                  <td>Yes (24V SMPS)</td>
                  <td>Yes (Approx. 60%)</td>
                </tr>
                <tr>
                  <td><strong>Aqua Gold UV Open Flow</strong></td>
                  <td>UV Purifier</td>
                  <td>Municipal / low TDS supply</td>
                  <td>150 PPM</td>
                  <td>Yes (Direct AC/DC)</td>
                  <td>No waste water</td>
                </tr>
                <tr>
                  <td><strong>Gravity UF Filter</strong></td>
                  <td>UF Gravity</td>
                  <td>Clear municipal supply</td>
                  <td>120 PPM</td>
                  <td>No</td>
                  <td>No waste water</td>
                </tr>
                <tr>
                  <td><strong>HydroSoft Softener</strong></td>
                  <td>Softener</td>
                  <td>Hard well water (calcium scales)</td>
                  <td>Hardness only (500 PPM)</td>
                  <td>Yes (Control Head)</td>
                  <td>Backwash wash only</td>
                </tr>
                <tr>
                  <td><strong>Commercial RO Plant</strong></td>
                  <td>Commercial</td>
                  <td>Heavy industrial / community supply</td>
                  <td>2000 PPM</td>
                  <td>Yes (3-Phase option)</td>
                  <td>Yes (Approx. 50%)</td>
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
