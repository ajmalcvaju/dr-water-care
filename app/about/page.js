'use client';

import React, { useEffect } from 'react';
import { useQuote } from '../../context/QuoteContext';

export default function About() {
  const { openModal } = useQuote();

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

  return (
    <>
      {/* ==========================================================================
           PAGE BANNER
           ========================================================================== */}
      <section className="page-banner" aria-label="About us page introduction">
        <div className="container">
          <h1>About Dr. Water Care</h1>
          <p>A look into our history, values, and commitment to distributing clean water and premium wellness across Kozhikode since 2012.</p>
        </div>
        
        {/* Banner Wave SVG */}
        <svg className="banner-wave" viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 32L60 48C120 64 240 96 360 101.3C480 107 600 85 720 69.3C840 53 960 43 1080 42.7C1200 43 1320 53 1380 58.7L1440 64V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0V32Z" fill="#F4F9F9"/>
        </svg>

        <div className="banner-decorations">
          <div className="bubble bubble-1"></div>
          <div className="bubble bubble-2"></div>
          <div className="bubble bubble-3"></div>
        </div>
      </section>

      {/* ==========================================================================
           COMPANY PROFILE
           ========================================================================== */}
      <section className="section section-bg" style={{ paddingTop: '2rem' }}>
        <div className="container">
          <div className="grid-2">
            
            <div className="animate-on-scroll" style={{ display: 'flex', justifyContent: 'center', alignItems: 'center' }}>
              <img src="/about_iso_seal.jpg" alt="ISO 9001:2015 Certified Company Seal" className="slide-image" style={{ maxWidth: '100%', maxHeight: '380px', width: 'auto', height: 'auto', borderRadius: '12px' }} />
            </div>

            <div className="animate-on-scroll">
              <h2 style={{ fontSize: '2.2rem', marginBottom: '1.5rem' }}>Pioneers in Clean Water Technology</h2>
              <p style={{ color: 'var(--text-light)', marginBottom: '1.2rem', fontSize: '1rem' }}>
                Dr. Water Care was established with the vision of solving the water safety crises in Kozhikode and surrounding districts in Kerala. Recognising that municipal supply and groundwater have distinct chemical differences, we set out to build custom-engineered water purification products.
              </p>
              <p style={{ color: 'var(--text-light)', marginBottom: '1.2rem', fontSize: '0.95rem' }}>
                Today, our ISO 9001:2015 certified assemblies filter harmful microbes, heavy minerals, and organic contamination in thousands of residential villas, apartment complexes, medical clinics, and commercial spaces.
              </p>
              <p style={{ color: 'var(--text-light)', marginBottom: '1.5rem', fontSize: '0.95rem' }}>
                We believe in the science of purification. We don't just supply filters; we analyze your water chemistry and curate customized membranes and sand components to match your exact water quality footprint.
              </p>
            </div>

          </div>
        </div>
      </section>

      {/* ==========================================================================
           VISION & MISSION DETAIL
           ========================================================================== */}
      <section className="section">
        <div className="container">
          <div className="section-header animate-on-scroll">
            <h2>Our Core Values</h2>
            <p>Our work is driven by strong commitments to community health and technological leadership.</p>
          </div>

          <div className="grid-3">
            <div className="feature-card animate-on-scroll">
              <div className="feature-icon-wrapper">
                <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/></svg>
              </div>
              <h3>Scientific Integrity</h3>
              <p>We believe in honest, accurate water tests. We only recommend filters and softeners that your water chemistry actually requires.</p>
            </div>

            <div className="feature-card animate-on-scroll">
              <div className="feature-icon-wrapper">
                <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
              </div>
              <h3>Uncompromised Quality</h3>
              <p>Every membrane, filter cartridge, UV cylinder, and steel chassis we configure is sourced from globally verified manufacturers.</p>
            </div>

            <div className="feature-card animate-on-scroll">
              <div className="feature-icon-wrapper">
                <svg viewBox="0 0 24 24"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C5.34 5 3 7.34 3 10s2.34 5 5 5 5-2.34 5-5zm8 3c-2.33 0-7 1.17-7 3.5V20h14v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
              </div>
              <h3>Customer Centricity</h3>
              <p>Water issues need fast fixes. Our service network across Kozhikode guarantees rapid on-site troubleshooting calls.</p>
            </div>
          </div>
        </div>
      </section>

      {/* ==========================================================================
           TIMELINE / HISTORY SECTION
           ========================================================================== */}
      <section className="section section-bg">
        <div className="container">
          <div className="section-header animate-on-scroll">
            <h2>Our Journey & Timeline</h2>
            <p>Tracing the evolution of Dr. Water Care from a local dealer into a prominent purification organization in Kerala.</p>
          </div>

          <div className="timeline-section">
            {/* Timeline 2012 */}
            <div className="timeline-item animate-on-scroll">
              <div className="timeline-badge">2012</div>
              <div className="timeline-panel">
                <div className="timeline-date">Inception</div>
                <h3>The Beginning</h3>
                <p>Dr. Water Care opens as a small domestic filter supplier in Kozhikode, Kerala, aiming to improve local tap water standards.</p>
              </div>
            </div>

            {/* Timeline 2015 */}
            <div className="timeline-item animate-on-scroll">
              <div className="timeline-badge">2015</div>
              <div className="timeline-panel">
                <div className="timeline-date">Expansion & Certification</div>
                <h3>ISO 9001:2015 Quality standards</h3>
                <p>Achieved formal ISO quality standard certifications. Commenced domestic water softener custom configurations and expanded our installation teams.</p>
              </div>
            </div>

            {/* Timeline 2018 */}
            <div className="timeline-item animate-on-scroll">
              <div className="timeline-badge">2018</div>
              <div className="timeline-panel">
                <div className="timeline-date">Commercial Focus</div>
                <h3>Industrial Filtration & Iron Plants</h3>
                <p>Introduced high-volume sand filters, iron removal setups, and commercial RO plants designed for colleges, clinics, and apartments.</p>
              </div>
            </div>

            {/* Timeline 2022 */}
            <div className="timeline-item animate-on-scroll">
              <div className="timeline-badge">2022</div>
              <div className="timeline-panel">
                <div className="timeline-date">Lab Installation</div>
                <h3>Eranhipaalam Laboratory Launch</h3>
                <p>Opened a dedicated water chemistry analysis laboratory in Eranhipaalam, allowing scientific membrane custom adjustments based on local source footprints.</p>
              </div>
            </div>

            {/* Timeline 2026 */}
            <div className="timeline-item animate-on-scroll">
              <div className="timeline-badge">2026</div>
              <div className="timeline-panel">
                <div className="timeline-date">Present Day</div>
                <h3>10,000+ Satisfied Connections</h3>
                <p>Now a leading household name for water purifiers in Kerala, servicing massive clients like Spring Dale, BMH Hospital, and ULCCS projects.</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* ==========================================================================
           CALL TO ACTION
           ========================================================================== */}
      <section className="cta-banner">
        <div className="container animate-on-scroll">
          <h2>Experience the Dr. Water Care Difference</h2>
          <p>Get in touch with our team in Kozhikode to discuss your household scaling issues or business filtration requirements.</p>
          <button className="btn btn-primary" onClick={() => openModal('About Us Consultation')} style={{ background: 'var(--bg-white)', color: 'var(--primary-color)', boxShadow: 'none' }}>
            Request Free Assessment
          </button>
        </div>
      </section>
    </>
  );
}
