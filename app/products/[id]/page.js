'use client';

import React, { useEffect, use } from 'react';
import Link from 'next/link';
import { productsData } from '../productsData';
import { useQuote } from '../../../context/QuoteContext';

export default function ProductDetailPage({ params }) {
  const resolvedParams = use(params);
  const id = resolvedParams?.id || '6';
  
  // Lookup by ID or Slug
  const currentProduct = productsData[id] || 
    Object.values(productsData).find(p => p.slug === id) || 
    productsData['6'];

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
  }, [id]);

  const whatsappMsg = encodeURIComponent(`Hi Aqua Solve Water Clinic, I am interested in ${currentProduct.title}. Please provide more details and best price quote.`);

  return (
    <>
      {/* ==========================================================================
           MAIN PRODUCT DETAILS CONTENT
           ========================================================================== */}
      <section className="section product-details-section" style={{ paddingTop: '2rem' }}>
        <div className="product-page-fullwidth">
          
          {/* Breadcrumb Navigation */}
          <div style={{ marginBottom: '1.5rem', fontSize: '0.9rem', color: '#64748b' }}>
            <Link href="/" style={{ color: '#0284c7', textDecoration: 'none', fontWeight: 600 }}>Home</Link>
            <span style={{ margin: '0 0.5rem', color: '#94a3b8' }}>/</span>
            <Link href="/products" style={{ color: '#0284c7', textDecoration: 'none', fontWeight: 600 }}>Products</Link>
            <span style={{ margin: '0 0.5rem', color: '#94a3b8' }}>/</span>
            <span style={{ color: '#0f172a', fontWeight: 700 }}>{currentProduct.title}</span>
          </div>

          <div className="solution-detail-container animate-on-scroll">
            
            {/* Header Area */}
            <div className="solution-detail-header">
              <div className="solution-header-info">
                <span className="solution-badge tag-purifier">{currentProduct.tag}</span>
                <h3>{currentProduct.title}</h3>
                {currentProduct.price && (
                  <div className="solution-header-price">
                    <span className="solution-price-val">{currentProduct.price}</span>
                    <span className="solution-price-sub">(Inclusive of all taxes &amp; standard warranty)</span>
                  </div>
                )}
              </div>

              <div className="solution-header-btns">
                <button className="btn btn-primary" onClick={() => openModal(currentProduct.title)}>
                  Enquire &amp; Get Quote
                </button>
                <a 
                  href={`https://wa.me/919497150452?text=${whatsappMsg}`} 
                  target="_blank" 
                  rel="noopener noreferrer"
                  className="btn btn-whatsapp"
                >
                  <svg viewBox="0 0 24 24" style={{ width: '18px', height: '18px', fill: '#fff' }}><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.099 4.019 4.019-1.056z"/></svg>
                  WhatsApp Us
                </a>
              </div>
            </div>

            {/* Body Grid */}
            <div className="solution-detail-body">
              
              {/* Media Column */}
              <div className="solution-media-col">
                <div className="solution-img-box" style={{ background: '#fff', border: '1px solid #e2e8f0', padding: '1.5rem', borderRadius: '16px' }}>
                  <img src={currentProduct.imageSrc} alt={currentProduct.title} style={{ maxHeight: '340px', objectFit: 'contain' }} />
                </div>
                
                <div className="solution-badge-pill" style={{ marginTop: '1rem' }}>
                  <svg viewBox="0 0 24 24"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-5.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
                  Official Aqua Solve Guaranteed Product
                </div>
              </div>

              {/* Content Column */}
              <div className="solution-content-col">
                <h4>Product Description</h4>
                <p className="solution-desc">{currentProduct.fullDesc || currentProduct.desc}</p>

                {/* Key Features Bullet Highlights */}
                {currentProduct.features && (
                  <div style={{ marginTop: '1.5rem', background: '#f8fafc', padding: '1.2rem 1.5rem', borderRadius: '12px', border: '1px solid #e2e8f0' }}>
                    <h5 style={{ fontSize: '0.95rem', fontWeight: 800, color: '#0f4c81', margin: '0 0 0.8rem', textTransform: 'uppercase' }}>Key System Features</h5>
                    <ul style={{ paddingLeft: '1.2rem', margin: 0, color: '#475569', fontSize: '0.92rem', lineHeight: '1.7' }}>
                      {currentProduct.features.map((feat, idx) => (
                        <li key={idx} style={{ marginBottom: '0.3rem' }}>{feat}</li>
                      ))}
                    </ul>
                  </div>
                )}

                <h4 style={{ marginTop: '2rem' }}>Technical Specifications</h4>
                <div className="specs-grid">
                  {currentProduct.specs.map((item, idx) => {
                    const isObject = typeof item === 'object';
                    return (
                      <div key={idx} className="spec-box">
                        <span className="spec-label">{isObject ? item.label : `Spec ${idx + 1}`}</span>
                        <span className="spec-val">{isObject ? item.val : item}</span>
                      </div>
                    );
                  })}
                </div>

                {currentProduct.applications && (
                  <>
                    <h4 style={{ marginTop: '2rem' }}>Ideal Applications</h4>
                    <div className="apps-tags">
                      {currentProduct.applications.map((app, idx) => (
                        <span key={idx} className="app-tag">
                          <svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                          {app}
                        </span>
                      ))}
                    </div>
                  </>
                )}
              </div>

            </div>

            {/* Footer */}
            <div className="solution-detail-footer">
              <p>Have questions about sizing, vessel capacity, or installation in your area?</p>
              <div className="solution-footer-btns">
                <button className="btn btn-primary" onClick={() => openModal(currentProduct.title)}>
                  Book Free Consultation
                </button>
                <Link href="/products" className="btn btn-secondary">
                  &larr; Back to Products Catalog
                </Link>
              </div>
            </div>

          </div>

        </div>
      </section>
    </>
  );
}
