'use client';

import React, { useState, useEffect } from 'react';

export default function Services() {
  const [activeFaq, setActiveFaq] = useState(null);
  
  // Stateful Lab Booking Form
  const [formData, setFormData] = useState({
    name: '',
    phone: '',
    source: 'Open Well',
    location: 'On-site Technician Visit (Kozhikode district only)',
    issues: ''
  });
  const [isSubmitting, setIsSubmitting] = useState(false);
  const [submitSuccess, setSubmitSuccess] = useState(false);

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

  const handleFaqToggle = (index) => {
    setActiveFaq(activeFaq === index ? null : index);
  };

  const handleChange = (e) => {
    const { id, value } = e.target;
    setFormData(prev => ({ ...prev, [id]: value }));
  };

  const handleSubmit = (e) => {
    e.preventDefault();
    setIsSubmitting(true);

    // Simulate API delay (1.5 seconds)
    setTimeout(() => {
      setIsSubmitting(false);
      setSubmitSuccess(true);
      setFormData({
        name: '',
        phone: '',
        source: 'Open Well',
        location: 'On-site Technician Visit (Kozhikode district only)',
        issues: ''
      });

      // Hide success message after 6 seconds
      setTimeout(() => {
        setSubmitSuccess(false);
      }, 6000);
    }, 1500);
  };

  const faqsList = [
    {
      q: "How often should I test my water supply?",
      a: "For private well or borewells in Kozhikode, we recommend a laboratory analysis at least once a year. If you observe reddish iron deposits, salty taste, or scaling on your bathroom fittings, schedule a test immediately to protect your pipe network and health."
    },
    {
      q: "What is TDS and what level is safe for drinking?",
      a: "TDS stands for Total Dissolved Solids. It represents the total mineral concentration in water. According to WHO and BIS parameters, a TDS level below 300 mg/litre (PPM) is considered excellent. If your source water has TDS exceeding 500 PPM, deploying a Reverse Osmosis (RO) purifier is highly recommended."
    },
    {
      q: "How frequently do filter cartridges need replacement?",
      a: "The external spun pre-filter cartridge should be replaced every 3 to 6 months depending on water turbidity. Internal carbon and sediment cartridges typically last 9 to 12 months, while primary RO membranes should be checked and replaced every 1.5 to 2 years under regular domestic usage."
    },
    {
      q: "Do you offer Annual Maintenance Contracts (AMC)?",
      a: "Yes. Dr. Water Care offers structured, affordable domestic and commercial AMC packages. Our plans cover quarterly cleaning visits, filter swaps, pump audits, and priority free assistance for call-outs, saving you from heavy emergency repair bills."
    },
    {
      q: "What is the difference between RO and UV purification?",
      a: "Reverse Osmosis (RO) uses a semi-permeable membrane to physical block dissolved chemicals, heavy metals, and salts, reducing TDS. Ultra-Violet (UV) uses high-intensity light to neutralize bacteria and viruses without changing water chemistry or TDS. Low TDS water only needs UV/UF, while high TDS water requires RO."
    }
  ];

  return (
    <>
      {/* ==========================================================================
           PAGE BANNER
           ========================================================================== */}
      <section className="page-banner" aria-label="Services page introduction">
        <div className="container">
          <h1>Professional Services & Lab Testing</h1>
          <p>Expert installations, periodic maintenance support, and extensive laboratory diagnostic reports.</p>
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
           SERVICES DETAILS GRID
           ========================================================================== */}
      <section className="section">
        <div className="container">
          <div className="services-detail-grid">
            
            {/* Service 1 */}
            <div className="service-detail-card animate-on-scroll">
              <div className="feature-icon-wrapper" style={{ width: '50px', height: '50px' }}>
                <svg viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-2 10h-4v4h-2v-4H7v-2h4V7h2v4h4v2z"/></svg>
              </div>
              <h3>Water Quality Analysis</h3>
              <p>Our Eranhipaalam chemical laboratory tests local groundwater parameters. We deliver precise metrics outlining pH levels, TDS count, iron concentration, chlorine content, and biological bacteria count.</p>
              <ul className="service-features-list">
                <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> On-Site extraction or Lab drop-off</li>
                <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Complete chemical parameter report</li>
                <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Filter configuration guidance</li>
              </ul>
            </div>

            {/* Service 2 */}
            <div className="service-detail-card animate-on-scroll">
              <div className="feature-icon-wrapper" style={{ width: '50px', height: '50px' }}>
                <svg viewBox="0 0 24 24"><path d="M19.14 12.94c.04-.3.06-.61.06-.94 0-.32-.02-.64-.07-.94l2.03-1.58c.18-.14.23-.41.12-.61l-1.92-3.32c-.12-.22-.37-.29-.59-.22l-2.39.96c-.5-.38-1.03-.7-1.62-.94l-.36-2.54c-.04-.24-.24-.41-.48-.41h-3.84c-.24 0-.43.17-.47.41l-.36 2.54c-.59.24-1.13.57-1.62.94l-2.39-.96c-.22-.08-.47 0-.59.22L2.74 8.87c-.12.21-.08.47.12.61l2.03 1.58c-.05.3-.09.63-.09.94s.02.64.07.94l-2.03 1.58c-.18.14-.23.41-.12.61l1.92 3.32c.12.22.37.29.59.22l2.39-.96c.5.38 1.03.7 1.62.94l.36 2.54c.05.24.24.41.48.41h3.84c.24 0 .44-.17.47-.41l.36-2.54c.59-.24 1.13-.56 1.62-.94l2.39.96c.22.08.47 0 .59-.22l1.92-3.32c.12-.22.07-.47-.12-.61l-2.01-1.58zM12 15.6c-1.98 0-3.6-1.62-3.6-3.6s1.62-3.6 3.6-3.6 3.6 1.62 3.6 3.6-1.62 3.6-3.6 3.6z"/></svg>
              </div>
              <h3>Installation & Setup</h3>
              <p>Our experienced plumbers execute seamless setups of under-sink ROs, whole-house softeners, and commercial filtration towers. We verify water inlet pressures and execute proper reject drain lines.</p>
              <ul class="service-features-list">
                <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Pressure-valve optimization</li>
                <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Neat plumbing and food-grade tubes</li>
                <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Post-install water purity audit</li>
              </ul>
            </div>

            {/* Service 3 */}
            <div className="service-detail-card animate-on-scroll">
              <div className="feature-icon-wrapper" style={{ width: '50px', height: '50px' }}>
                <svg viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm-5 14H4v-4h11v4zm0-5H4V9h11v4zm5 5h-4V9h4v9z"/></svg>
              </div>
              <h3>Annual Maintenance Contract (AMC)</h3>
              <p>Avoid sudden filtration downtime. Our structured domestic and business AMC plans include scheduled quarterly visits, carbon checks, membrane pressure washes, and pre-filter swap allocations.</p>
              <ul class="service-features-list">
                <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Scheduled quarterly service visits</li>
                <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Free replacement of sediment cartridges</li>
                <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> High priority emergency response</li>
              </ul>
            </div>

            {/* Service 4 */}
            <div className="service-detail-card animate-on-scroll">
              <div className="feature-icon-wrapper" style={{ width: '50px', height: '50px' }}>
                <svg viewBox="0 0 24 24"><path d="M22 24H2v-2h20v2zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 17h-2v-6h2v6zm0-8h-2V7h2v2z"/></svg>
              </div>
              <h3>Repair & Troubleshooting</h3>
              <p>Experiencing low pure-water flow, continuous drainage, or alarm beeps? Our local Calicut repair team carries premium booster pumps, solenoid switches, UV lamps, and filters to restore performance on the first visit.</p>
              <ul class="service-features-list">
                <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> 24-Hour on-site response window</li>
                <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Genuine certified spare components</li>
                <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> 90-day warranty on replaced parts</li>
              </ul>
            </div>

          </div>
        </div>
      </section>

      {/* ==========================================================================
           LAB WATER QUALITY BOOKING FORM
           ========================================================================== */}
      <section className="section section-bg">
        <div className="container">
          <div className="grid-2">
            
            <div className="animate-on-scroll">
              <h2 style={{ fontSize: '2.2rem', marginBottom: '1.5rem' }}>Book Lab Water Test</h2>
              <p style={{ color: 'var(--text-light)', marginBottom: '1.5rem', fontSize: '1rem' }}>
                Understanding your water is the first step towards health. Dr. Water Care operates an advanced chemical laboratory in Eranhipaalam, Kozhikode.
              </p>
              <p style={{ color: 'var(--text-light)', marginBottom: '1.5rem', fontSize: '0.95rem' }}>
                Simply schedule an on-site sample collection, or bring 1 Litre of your groundwater in a clean bottle directly to our collection counter. Our technicians test for acidity, calcium carbonate hardness, iron sediment presence, and biological bacteria.
              </p>
              <div style={{ display: 'flex', gap: '1.5rem', marginTop: '2rem' }}>
                <div className="info-item" style={{ color: 'var(--primary-color)' }}>
                  <div className="info-icon" style={{ background: 'var(--bg-cyan-light)' }}><svg viewBox="0 0 24 24" style={{ fill: 'var(--primary-color)' }}><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg></div>
                  <div className="info-text">
                    <h4 style={{ fontSize: '0.95rem', fontWeight: 700 }}>Lab Address</h4>
                    <p style={{ fontSize: '0.85rem', color: 'var(--text-light)' }}>S.V. Colony, P.O, Eranhipaalam, Calicut</p>
                  </div>
                </div>
              </div>
            </div>

            <div className="animate-on-scroll">
              <div className="booking-form-box">
                <h3 style={{ fontSize: '1.5rem', marginBottom: '1.5rem', color: 'var(--primary-color)' }}>Schedule Testing</h3>
                <form id="labTestingForm" onSubmit={handleSubmit}>
                  {submitSuccess ? (
                    <div 
                      style={{
                        background: '#e6fffa',
                        border: '1px solid #319795',
                        color: '#234e52',
                        padding: '1.2rem',
                        borderRadius: '8px',
                        fontFamily: 'Outfit, sans-serif',
                        fontWeight: '600',
                        fontSize: '0.95rem',
                        textAlign: 'center',
                        display: 'flex',
                        alignItems: 'center',
                        justifyContent: 'center',
                        gap: '0.5rem',
                        animation: 'float 3s ease-in-out infinite'
                      }}
                    >
                      <svg style={{ width: '20px', height: '20px', fill: '#319795' }} viewBox="0 0 24 24">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                      </svg>
                      Testing visit scheduled successfully!
                    </div>
                  ) : (
                    <>
                      <div className="form-group">
                        <label htmlFor="name">Your Name</label>
                        <input 
                          type="text" 
                          id="name" 
                          className="form-control" 
                          required 
                          placeholder="Enter name"
                          value={formData.name}
                          onChange={handleChange}
                          disabled={isSubmitting}
                        />
                      </div>
                      <div className="form-row">
                        <div className="form-group">
                          <label htmlFor="phone">Phone Number</label>
                          <input 
                            type="tel" 
                            id="phone" 
                            className="form-control" 
                            required 
                            placeholder="Phone number"
                            value={formData.phone}
                            onChange={handleChange}
                            disabled={isSubmitting}
                          />
                        </div>
                        <div className="form-group">
                          <label htmlFor="source">Water Source</label>
                          <select 
                            id="source" 
                            className="form-control"
                            value={formData.source}
                            onChange={handleChange}
                            disabled={isSubmitting}
                          >
                            <option>Open Well</option>
                            <option>Borewell groundwater</option>
                            <option>Corporation water supply</option>
                            <option>Rainwater tank</option>
                          </select>
                        </div>
                      </div>
                      <div className="form-group">
                        <label htmlFor="location">Testing Location preference</label>
                        <select 
                          id="location" 
                          className="form-control"
                          value={formData.location}
                          onChange={handleChange}
                          disabled={isSubmitting}
                        >
                          <option>On-site Technician Visit (Kozhikode district only)</option>
                          <option>I will drop-off water sample at Eranhipaalam Lab</option>
                        </select>
                      </div>
                      <div className="form-group">
                        <label htmlFor="issues">Water Issues Observed (Optional)</label>
                        <textarea 
                          id="issues" 
                          className="form-control" 
                          placeholder="E.g., Reddish color, salty taste, scaling on bathroom taps..."
                          value={formData.issues}
                          onChange={handleChange}
                          disabled={isSubmitting}
                        />
                      </div>
                      <button type="submit" className="btn btn-primary" style={{ width: '100%' }} disabled={isSubmitting}>
                        {isSubmitting ? 'Scheduling...' : 'Schedule Analysis'}
                      </button>
                    </>
                  )}
                </form>
              </div>
            </div>

          </div>
        </div>
      </section>

      {/* ==========================================================================
           FAQ ACCORDION
           ========================================================================== */}
      <section className="section">
        <div className="container">
          <div className="section-header animate-on-scroll">
            <h2>Frequently Asked Questions</h2>
            <p>Read quick answers regarding water quality parameters, filter maintenance, and operations.</p>
          </div>

          <div className="faq-container animate-on-scroll">
            {faqsList.map((faq, index) => {
              const isOpen = activeFaq === index;
              return (
                <div key={index} className={`faq-item ${isOpen ? 'active' : ''}`}>
                  <div className="faq-header" onClick={() => handleFaqToggle(index)}>
                    <h3>{faq.q}</h3>
                    <svg className="faq-toggle-icon" viewBox="0 0 24 24"><path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z"/></svg>
                  </div>
                  <div className="faq-body" style={{ height: isOpen ? 'auto' : '0px', overflow: 'hidden' }}>
                    <p>{faq.a}</p>
                  </div>
                </div>
              );
            })}
          </div>
        </div>
      </section>
    </>
  );
}
