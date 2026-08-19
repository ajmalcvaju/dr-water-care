'use client';

import React, { useState, useEffect } from 'react';
import Link from 'next/link';
import { useQuote } from '../context/QuoteContext';

export default function Home() {
  const { openModal } = useQuote();
  const [currentSlide, setCurrentSlide] = useState(0);
  const [testimonialIndex, setTestimonialIndex] = useState(0);
  const [testimonialTransition, setTestimonialTransition] = useState(true);
  const [logoIndex, setLogoIndex] = useState(0);
  const [logoTransition, setLogoTransition] = useState(true);

  const heroSlides = [
    {
      title: <>Welcome to<br />Dr. Water Care</>,
      sub: "Kozhikode's premium water treatment organization. Delivering customized filters and systems matching rigorous global standards.",
      bullets: [
        "80% of all diseases are waterborne",
        "Enhanced household and business productivity",
        "Cost-effective compared to bottled water packages"
      ],
      ctaText: "Request Call Back",
      ctaProduct: "Welcome Slider Quote",
      imageSrc: "/hero_slide_child.jpg",
      visual: (
        <div className="water-droplets-visual">
          <div className="droplet-circle dc-1"></div>
          <div className="droplet-circle dc-2"></div>
          <div className="droplet-circle dc-3"></div>
        </div>
      ),
      label: "Illustration: Child Drinking Pure Water"
    },
    {
      title: <>Advanced RO & UV<br />Purification Systems</>,
      sub: "International water purification technology designed to conform to WHO standards under one single roof.",
      bullets: [
        "Active copper & alkaline mineral filtration",
        "Suitable for municipal, well, and tank water sources",
        "Automatic smart flushing systems"
      ],
      ctaText: "Free Consultation",
      ctaProduct: "RO System Consultation",
      imageSrc: "/hero_slide_ro.png",
      visual: (
        <svg className="placeholder-illustration" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 17h-2v-2h2v2zm2.07-7.75l-.9.92C13.45 12.9 13 13.5 13 15h-2v-.5c0-1.1.45-2.1 1.17-2.83l1.24-1.26c.37-.36.59-.86.59-1.41 0-1.1-.9-2-2-2s-2 .9-2 2H7c0-2.76 2.24-5 5-5s5 2.24 5 5c0 1.04-.42 1.99-1.07 2.25z"/></svg>
      ),
      label: "Illustration: Multi-Stage Filter Concept"
    },
    {
      title: <>Laboratory Certified<br />Water Analysis</>,
      sub: "Identify chemical imbalances, bacteria content, and precise TDS count to deploy correct filter configurations.",
      bullets: [
        "pH balance and iron presence check",
        "Accurate microbiology reports",
        "Certified local Kozhikode lab test technicians"
      ],
      ctaText: "Talk to Expert",
      ctaProduct: "Water Test Consultation",
      imageSrc: "/hero_slide_lab.jpg",
      visual: (
        <svg className="placeholder-illustration" viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-2 10h-4v4h-2v-4H7v-2h4V7h2v4h4v2z"/></svg>
      ),
      label: "Illustration: Laboratory Testing Setup"
    }
  ];

  const testimonials = [
    {
      text: "The experience with Dr. Water Care team is superior. We had them install a Gov. school purification system and the water laboratory report shows pristine results. Their dedication to schedule execution is remarkable.",
      author: "Mr. Prasanth IAS",
      role: "Kozhikode Regional Advisor"
    },
    {
      text: "To provide sustainable solutions with enduring commitment requires expert execution. Dr. Water Care designs outstanding custom RO plants. They maintain high-quality parameters and fast replacement support.",
      author: "Dr. Manoj",
      role: "Chief Clinical Director, Calicut"
    },
    {
      text: "Our home groundwater had massive scaling and iron particles. The HydroSoft Softener from Dr. Water Care completely transformed the hardness. Outstanding plumbing team, neat work, and no more scaling!",
      author: "Mrs. Anjali K.",
      role: "Homeowner, Eranhipaalam"
    },
    {
      text: "Thank you for the quick response. Your pre- and post-sales customer service has been incredibly good. Fast, polite, very informative.",
      author: "Ajay",
      role: "Businessman"
    },
    {
      text: "Thank you for the quick response. I want to let you know that I really appreciate the great customer assistance at Dr. Water Care.",
      author: "Salman",
      role: "Doctor"
    },
    {
      text: "We installed their commercial RO filtration plant in our campus. Excellent water flow, prompt filter replacement services, and absolute purity certified by labs.",
      author: "Mrs. Rema Devi",
      role: "School Principal"
    }
  ];

  // Auto Scroll Sliders & Setup Observers
  useEffect(() => {
    const heroTimer = setInterval(() => {
      setCurrentSlide((prev) => (prev + 1) % heroSlides.length);
    }, 6000);

    const testimonialTimer = setInterval(() => {
      setTestimonialTransition(true);
      setTestimonialIndex((prev) => {
        if (prev === 6) {
          return 1;
        }
        return prev + 1;
      });
    }, 5000);

    const logoTimer = setInterval(() => {
      setLogoTransition(true);
      setLogoIndex((prev) => {
        if (prev === 5) {
          return 1;
        }
        return prev + 1;
      });
    }, 3000);

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('animated');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

    document.querySelectorAll('.animate-on-scroll').forEach(el => observer.observe(el));

    return () => {
      clearInterval(heroTimer);
      clearInterval(testimonialTimer);
      clearInterval(logoTimer);
      observer.disconnect();
    };
  }, []);

  // Handle snap-back for seamless loop logo carousel
  useEffect(() => {
    if (logoIndex === 5) {
      const snapTimer = setTimeout(() => {
        setLogoTransition(false);
        setLogoIndex(0);
      }, 600); // matches CSS transition speed (0.6s)
      return () => clearTimeout(snapTimer);
    }
  }, [logoIndex]);

  // Handle snap-back for testimonials loop
  useEffect(() => {
    if (testimonialIndex === 6) {
      const snapTimer = setTimeout(() => {
        setTestimonialTransition(false);
        setTestimonialIndex(0);
      }, 600); // matches CSS transition speed (0.6s)
      return () => clearTimeout(snapTimer);
    }
  }, [testimonialIndex]);

  return (
    <>
      {/* ==========================================================================
           HERO SLIDER
           ========================================================================== */}
      <section className="hero-slider-container" aria-label="Hero Slide Showcase">
        <div className="slider-wrapper">
          {heroSlides.map((slide, index) => (
            <div key={index} className={`slide ${currentSlide === index ? 'active' : ''}`}>
              <div className="container">
                <div className="slide-content-grid">
                  <div className="slide-text">
                    {currentSlide === index && (
                      <>
                        {index === 0 ? <h1>{slide.title}</h1> : <h2>{slide.title}</h2>}
                        <p className="slide-sub">{slide.sub}</p>
                        <ul className="slide-bullets">
                          {slide.bullets.map((bullet, idx) => (
                            <li key={idx}>
                              <svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" /></svg>
                              {bullet}
                            </li>
                          ))}
                        </ul>
                        <div className="slide-buttons">
                          <button className="btn btn-primary" onClick={() => openModal(slide.ctaProduct)}>
                            {slide.ctaText}
                          </button>
                          {index === 0 ? (
                            <Link href="/about" className="btn btn-secondary">Learn More</Link>
                          ) : index === 1 ? (
                            <Link href="/products" className="btn btn-secondary">Browse Catalog</Link>
                          ) : (
                            <Link href="/services" className="btn btn-secondary">Book Lab Test</Link>
                          )}
                        </div>
                      </>
                    )}
                  </div>
                  <div className="slide-visual">
                    {slide.imageSrc ? (
                      <img src={slide.imageSrc} alt={slide.label} className="slide-image" />
                    ) : (
                      <div className="image-placeholder image-placeholder-large" aria-label={slide.label}>
                        {slide.visual}
                        <div className="placeholder-label">{slide.label}</div>
                        <div className="placeholder-dimensions">SVG / CSS Responsive Vector</div>
                      </div>
                    )}
                  </div>
                </div>
              </div>
            </div>
          ))}
        </div>

        {/* Slider Controls */}
        <button 
          className="slider-control slider-prev" 
          onClick={() => setCurrentSlide((prev) => (prev - 1 + heroSlides.length) % heroSlides.length)}
          aria-label="Previous slide"
        >
          <svg viewBox="0 0 24 24"><path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"/></svg>
        </button>
        <button 
          className="slider-control slider-next" 
          onClick={() => setCurrentSlide((prev) => (prev + 1) % heroSlides.length)}
          aria-label="Next slide"
        >
          <svg viewBox="0 0 24 24"><path d="M8.59 16.59L10 18l6-6-6-6-1.41 1.41L13.17 12z"/></svg>
        </button>

      </section>

      {/* ==========================================================================
           MISSION & VISION
           ========================================================================== */}
      <div className="container animate-on-scroll">
        <div className="mission-vision-bar">
          <div className="mv-card vision">
            <div className="mv-icon">
              <svg viewBox="0 0 24 24"><path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/></svg>
            </div>
            <div className="mv-info">
              <h3>Our Vision</h3>
              <p>To be the No. 1 water purification organization in Kerala with a high standard of integrity, delivering continuous wellness through clear, purified water.</p>
            </div>
          </div>
          <div className="mv-card mission">
            <div className="mv-icon">
              <svg viewBox="0 0 24 24"><path d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2zm1 17h-2v-2h2v2zm2.07-7.75l-.9.92C13.45 12.9 13 13.5 13 15h-2v-.5c0-1.1.45-2.1 1.17-2.83l1.24-1.26c.37-.36.59-.86.59-1.41 0-1.1-.9-2-2-2s-2 .9-2 2H7c0-2.76 2.24-5 5-5s5 2.24 5 5c0 1.04-.42 1.99-1.07 2.25z"/></svg>
            </div>
            <div className="mv-info">
              <h3>Our Mission</h3>
              <p>To provide sustainable, enduring purification solutions by delivering superior products, customized system parameters, and reliable local support.</p>
            </div>
          </div>
        </div>
      </div>

      {/* ==========================================================================
           WHY DR. WATER CARE
           ========================================================================== */}
      <section className="section">
        <div className="container">
          <div className="section-header animate-on-scroll">
            <h2>Why Dr. Water Care?</h2>
            <p>We combine premium machinery, extensive laboratory verification, and unmatched support to satisfy your purification needs under one roof.</p>
          </div>

          <div className="why-us-grid">
            <div className="feature-card animate-on-scroll">
              <div className="feature-icon-wrapper">
                <svg viewBox="0 0 24 24"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
              </div>
              <h3>Leaders in Purification</h3>
              <p>International filter technologies and high-quality membranes conforming to strict WHO standards.</p>
            </div>

            <div className="feature-card animate-on-scroll">
              <div className="feature-icon-wrapper">
                <svg viewBox="0 0 24 24"><path d="M4 6H2v14c0 1.1.9 2 2 2h14v-2H4V6zm16-4H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0-2-.9-2-2V4c0-1.1-.9-2-2-2zm0 14H8V4h12v12z"/></svg>
              </div>
              <h3>Wide Range</h3>
              <p>A broad array of purifiers including RO, UV, UF, domestic softeners, sand filters, and commercial plants.</p>
            </div>

            <div className="feature-card animate-on-scroll">
              <div className="feature-icon-wrapper">
                <svg viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm-5 14H4v-4h11v4zm0-5H4V9h11v4zm5 5h-4V9h4v9z"/></svg>
              </div>
              <h3>One Stop Shop</h3>
              <p>Get water analysis, filter assembly, delivery, plumbing installation, and servicing from one team.</p>
            </div>

            <div className="feature-card animate-on-scroll">
              <div className="feature-icon-wrapper">
                <svg viewBox="0 0 24 24"><path d="M19.14 12.94c.04-.3.06-.61.06-.94 0-.32-.02-.64-.07-.94l2.03-1.58c.18-.14.23-.41.12-.61l-1.92-3.32c-.12-.22-.37-.29-.59-.22l-2.39.96c-.5-.38-1.03-.7-1.62-.94l-.36-2.54c-.04-.24-.24-.41-.48-.41h-3.84c-.24 0-.43.17-.47.41l-.36 2.54c-.59.24-1.13.57-1.62.94l-2.39-.96c-.22-.08-.47 0-.59.22L2.74 8.87c-.12.21-.08.47.12.61l2.03 1.58c-.05.3-.09.63-.09.94s.02.64.07.94l-2.03 1.58c-.18.14-.23.41-.12.61l1.92 3.32c.12.22.37.29.59.22l2.39-.96c.5.38 1.03.7 1.62.94l.36 2.54c.05.24.24.41.48.41h3.84c.24 0 .44-.17.47-.41l.36-2.54c.59-.24 1.13-.56 1.62-.94l2.39.96c.22.08.47 0 .59-.22l1.92-3.32c.12-.22.07-.47-.12-.61l-2.01-1.58zM12 15.6c-1.98 0-3.6-1.62-3.6-3.6s1.62-3.6 3.6-3.6 3.6 1.62 3.6 3.6-1.62 3.6-3.6 3.6z"/></svg>
              </div>
              <h3>Customised Solutions</h3>
              <p>Our engineers adjust membrane sizing and active carbons to align with the specific chemical footprint of your source.</p>
            </div>

            <div className="feature-card animate-on-scroll">
              <div className="feature-icon-wrapper">
                <svg viewBox="0 0 24 24"><path d="M12 7V3H2v18h20V7H12zm-6 12H4v-2h2v2zm0-4H4v-2h2v2zm0-4H4V9h2v2zm0-4H4V5h2v2zm14 12h-8v-2h2v-2h-2v-2h2v-2h-2V9h8v10zm-2-8h-2v2h2v-2zm0 4h-2v-2h2v-2z"/></svg>
              </div>
              <h3>Multi-Industry Application</h3>
              <p>Heavy-duty setups crafted for clinics, colleges, commercial kitchens, apartments, and production plants.</p>
            </div>

            <div className="feature-card animate-on-scroll">
              <div className="feature-icon-wrapper">
                <svg viewBox="0 0 24 24"><path d="M21.41 11.58l-9-9C12.05 2.22 11.55 2 11 2H4c-1.1 0-2 .9-2 2v7c0 .55.22 1.05.59 1.42l9 9c.36.36.86.58 1.41.58.55 0 1.05-.22 1.41-.59l7-7c.37-.36.59-.86.59-1.41 0-.55-.23-1.06-.59-1.42zM5.5 8c-.83 0-1.5-.67-1.5-1.5S4.67 5 5.5 5 7 5.67 7 6.5 6.33 8 5.5 8z"/></svg>
              </div>
              <h3>Unique Offering</h3>
              <p>Discover space-saving combo models containing filters, high-capacity coolers, and stainless steel reservoirs all in one.</p>
            </div>

            <div className="feature-card animate-on-scroll">
              <div className="feature-icon-wrapper">
                <svg viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-2 10h-4v4h-2v-4H7v-2h4V7h2v4h4v2z"/></svg>
              </div>
              <h3>Water Quality Test</h3>
              <p>In-house chemical test services analyzing mineral densities, organic matter, and acidic balances.</p>
            </div>

            <div className="feature-card animate-on-scroll">
              <div className="feature-icon-wrapper">
                <svg viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
              </div>
              <h3>Kerala Service Network</h3>
              <p>Our rapid technicians support clients across Kozhikode district, keeping your setups running 24/7.</p>
            </div>
          </div>
        </div>
      </section>

      {/* ==========================================================================
           ABOUT PREVIEW (SPLASH)
           ========================================================================== */}
      <section className="section section-bg">
        <div className="container">
          <div className="grid-2">
            <div className="animate-on-scroll">
              <h2 style={{ fontSize: '2.2rem', marginBottom: '1.5rem' }}>About Dr. Water Care</h2>
              <p style={{ color: 'var(--text-light)', marginBottom: '1.5rem', fontSize: '1.05rem' }}>
                Dr. Water Care, based in Kozhikode, is a leading Water Treatment Company in Kerala. We specialize in engineering and executing high-standard water solutions for domestic, commercial, and industrial requirements.
              </p>
              <p style={{ color: 'var(--text-light)', marginBottom: '2rem', fontSize: '0.95rem' }}>
                Our product line includes top-tier Aqua Gold water purifiers, reverse osmosis plants, wastewater treatment utilities, softeners, and iron removal structures. With a team of highly-trained chemical engineers and service specialists, we maintain quality standards across installation and after-sales service.
              </p>
              <Link href="/about" className="btn btn-primary">More Details</Link>
            </div>

            <div className="animate-on-scroll">
              <img src="/about_splash_water.jpg" alt="Fresh Splashing Glasses of Water" className="slide-image" />
            </div>
          </div>
        </div>
      </section>

      {/* ==========================================================================
           FEATURED PRODUCTS
           ========================================================================== */}
      <section className="section">
        <div className="container">
          <div className="section-header animate-on-scroll">
            <h2>Our Featured Products</h2>
            <p>Explore our premium domestic filters and heavy-duty filtration setups designed for Kerala's water conditions.</p>
          </div>

          <div className="products-grid">
            {/* Product 1 */}
            <div className="product-card animate-on-scroll">
              <div className="product-image-area">
                <span className="product-tag">Best Seller</span>
                <img src="/product-placeholder.png" alt="Aqua Gold UV Open Flow" className="product-image" />
              </div>
              <div className="product-info">
                <h3>Aqua Gold UV Open Flow</h3>
                <p style={{ fontSize: '0.85rem', color: 'var(--text-light)' }}>Efficient double-stage UV filtration system designed for immediate, high-volume purified tap flow.</p>
                <ul className="product-specs">
                  <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Capacity: 60 L/Hr</li>
                  <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Sterilization: Double UV-C</li>
                </ul>
                <div className="product-footer">
                  <span className="product-price">Request Quote</span>
                  <button className="btn btn-primary btn-card" onClick={() => openModal('Aqua Gold UV Open Flow')}>Get Details</button>
                </div>
              </div>
            </div>

            {/* Product 2 */}
            <div className="product-card animate-on-scroll">
              <div className="product-image-area">
                <span className="product-tag">Premium</span>
                <img src="/product-placeholder.png" alt="Aqua Gold Premium RO" className="product-image" />
              </div>
              <div className="product-info">
                <h3>Aqua Gold Premium RO</h3>
                <p style={{ fontSize: '0.85rem', color: 'var(--text-light)' }}>Multi-stage RO, UV, & UF treatment setup. Filters solid chemicals and adjusts mineral balance.</p>
                <ul className="product-specs">
                  <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Tank: 12 Litres</li>
                  <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Features: Auto-TDS adjust</li>
                </ul>
                <div className="product-footer">
                  <span className="product-price">Request Quote</span>
                  <button className="btn btn-primary btn-card" onClick={() => openModal('Aqua Gold Premium RO')}>Get Details</button>
                </div>
              </div>
            </div>

            {/* Product 3 */}
            <div className="product-card animate-on-scroll">
              <div className="product-image-area">
                <span className="product-tag">New</span>
                <img src="/product-placeholder.png" alt="HydroSoft Softener" className="product-image" />
              </div>
              <div className="product-info">
                <h3>HydroSoft Softener</h3>
                <p style={{ fontSize: '0.85rem', color: 'var(--text-light)' }}>Removes high levels of calcium, magnesium, and scaling elements. Keeps skin, hair, and pipes safe.</p>
                <ul className="product-specs">
                  <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Operation: Auto Regeneration</li>
                  <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Scope: Entire Villa / Flat</li>
                </ul>
                <div className="product-footer">
                  <span className="product-price">Request Quote</span>
                  <button className="btn btn-primary btn-card" onClick={() => openModal('HydroSoft Softener')}>Get Details</button>
                </div>
              </div>
            </div>

            {/* Product 4 */}
            <div className="product-card animate-on-scroll">
              <div className="product-image-area">
                <span className="product-tag">Heavy Duty</span>
                <img src="/product-placeholder.png" alt="Commercial RO Plant" className="product-image" />
              </div>
              <div className="product-info">
                <h3>Commercial RO Plant</h3>
                <p style={{ fontSize: '0.85rem', color: 'var(--text-light)' }}>Industrial configuration featuring multiple filters, high pressure pumps, and large scale outputs.</p>
                <ul className="product-specs">
                  <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Flow Rate: 250 LPH to 5 KPH</li>
                  <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Structure: Stainless Steel Frame</li>
                </ul>
                <div className="product-footer">
                  <span className="product-price">Request Quote</span>
                  <button className="btn btn-primary btn-card" onClick={() => openModal('Commercial RO Plant')}>Get Details</button>
                </div>
              </div>
            </div>
          </div>
          
          <div style={{ textAlign: 'center', marginTop: '3.5rem' }} className="animate-on-scroll">
            <Link href="/products" className="btn btn-secondary">Explore All Products</Link>
          </div>
        </div>
      </section>

      {/* ==========================================================================
           TESTIMONIALS
           ========================================================================== */}
      <section className="section section-bg">
        <div className="container">
          <div className="section-header animate-on-scroll">
            <h2>Testimonials</h2>
            <p>Read opinions and feedback from clients who trust Dr. Water Care for their hydration safety.</p>
          </div>

          <div 
            className="testimonials-carousel-viewport animate-on-scroll"
            style={{
              '--test-index': testimonialIndex,
              '--test-speed': testimonialTransition ? '0.6s' : '0s'
            }}
          >
            <div className="testimonials-carousel-track">
              {[
                ...testimonials,
                testimonials[0],
                testimonials[1],
                testimonials[2]
              ].map((test, index) => (
                <div key={index} className="testimonials-carousel-item">
                  <div className="testimonial-card">
                    <div className="testimonial-card-quote-bg">
                      <span className="testimonial-card-quote-text">99</span>
                    </div>
                    <h3 className="testimonial-card-author">{test.author}</h3>
                    <span className="testimonial-card-role">{test.role}</span>
                    <div className="testimonial-card-stars">
                      <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                    </div>
                    <p className="testimonial-card-text">"{test.text}"</p>
                  </div>
                </div>
              ))}
            </div>
          </div>
        </div>
      </section>

      {/* ==========================================================================
           OUR CLIENTS
           ========================================================================== */}
      <section className="section">
        <div className="container">
          <div className="section-header animate-on-scroll">
            <h2>Our Prestigious Clients</h2>
            <p>Trusted by leading institutions, clinics, bridal centers, and co-operatives in Calicut.</p>
          </div>

          <div 
            className="logo-carousel-viewport animate-on-scroll"
            style={{
              '--logo-index': logoIndex,
              '--logo-speed': logoTransition ? '0.6s' : '0s'
            }}
          >
            <div className="logo-carousel-track">
              {[
                '/client-logo-1.png',
                '/client-logo-2.png',
                '/client-logo-3.png',
                '/client-logo-4.png',
                '/client-logo-5.png',
                '/client-logo-1.png',
                '/client-logo-2.png',
                '/client-logo-3.png',
                '/client-logo-4.png'
              ].map((logo, idx) => (
                <div key={idx} className="logo-carousel-item">
                  <div className="client-logo-wrapper">
                    <img src={logo} alt={`Client Logo ${idx + 1}`} className="client-logo-img" />
                  </div>
                </div>
              ))}
            </div>
          </div>
        </div>
      </section>

      {/* ==========================================================================
           CTA MID BANNER
           ========================================================================== */}
      <section className="cta-banner">
        <div className="container animate-on-scroll">
          <h2>Is your water completely safe for drinking?</h2>
          <p>Schedule a professional testing visit by our Kozhikode laboratory technicians today. Ensure maximum wellness for your family or staff members.</p>
          <div style={{ display: 'flex', justifyContent: 'center', gap: '1rem', flexWrap: 'wrap' }}>
            <Link href="/services" className="btn btn-primary" style={{ background: 'var(--bg-white)', color: 'var(--primary-color)', boxShadow: 'none' }}>
              Book Laboratory Check
            </Link>
            <Link href="/contact" className="btn btn-secondary" style={{ borderColor: 'var(--bg-white)', color: 'var(--bg-white)' }}>
              Contact Us
            </Link>
          </div>
        </div>
      </section>
    </>
  );
}
