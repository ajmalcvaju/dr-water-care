document.addEventListener('DOMContentLoaded', () => {
  // Initialize all modules
  initHeaderScroll();
  initMobileMenu();
  initHeroSlider();
  initTestimonialSlider();
  initScrollAnimations();
  initStatsCounter();
  initProductFilter();
  initQuoteModal();
  initFaqAccordion();
  initFormsHandler();
});

/* ==========================================================================
   1. HEADER SCROLL EFFECT
   ========================================================================== */
function initHeaderScroll() {
  const header = document.querySelector('header');
  if (!header) return;

  const handleScroll = () => {
    if (window.scrollY > 50) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  };

  window.addEventListener('scroll', handleScroll);
  handleScroll(); // Check initially
}

/* ==========================================================================
   2. MOBILE NAV MENU
   ========================================================================== */
function initMobileMenu() {
  const hamburger = document.querySelector('.hamburger');
  const navLinks = document.querySelector('.nav-links');
  
  if (!hamburger || !navLinks) return;

  hamburger.addEventListener('click', () => {
    navLinks.classList.toggle('active');
    hamburger.classList.toggle('active');
    
    // Animate hamburger lines
    const spans = hamburger.querySelectorAll('span');
    if (hamburger.classList.contains('active')) {
      spans[0].style.transform = 'rotate(45deg) translate(5px, 5px)';
      spans[1].style.opacity = '0';
      spans[2].style.transform = 'rotate(-45deg) translate(7px, -7px)';
    } else {
      spans[0].style.transform = 'none';
      spans[1].style.opacity = '1';
      spans[2].style.transform = 'none';
    }
  });

  // Close menu when clicking links
  navLinks.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', () => {
      navLinks.classList.remove('active');
      hamburger.classList.remove('active');
      hamburger.querySelectorAll('span').forEach(span => span.style.transform = 'none');
      hamburger.querySelectorAll('span')[1].style.opacity = '1';
    });
  });
}

/* ==========================================================================
   3. HERO SLIDER
   ========================================================================== */
function initHeroSlider() {
  const slider = document.querySelector('.hero-slider-container');
  if (!slider) return;

  const slides = slider.querySelectorAll('.slide');
  const prevBtn = slider.querySelector('.slider-prev');
  const nextBtn = slider.querySelector('.slider-next');
  const dotsContainer = slider.querySelector('.slider-dots');

  if (slides.length === 0) return;

  let currentSlide = 0;
  let slideInterval;
  const intervalTime = 6000;

  // Create dots if not present
  if (dotsContainer && dotsContainer.children.length === 0) {
    slides.forEach((_, index) => {
      const dot = document.createElement('button');
      dot.classList.add('slider-dot');
      if (index === 0) dot.classList.add('active');
      dot.setAttribute('aria-label', `Go to slide ${index + 1}`);
      dotsContainer.appendChild(dot);

      dot.addEventListener('click', () => {
        goToSlide(index);
        resetInterval();
      });
    });
  }

  const dots = dotsContainer ? dotsContainer.querySelectorAll('.slider-dot') : [];

  function goToSlide(n) {
    slides[currentSlide].classList.remove('active');
    if (dots.length > currentSlide) dots[currentSlide].classList.remove('active');
    currentSlide = (n + slides.length) % slides.length;
    slides[currentSlide].classList.add('active');
    if (dots.length > currentSlide) dots[currentSlide].classList.add('active');
  }

  function nextSlide() {
    goToSlide(currentSlide + 1);
  }

  function prevSlide() {
    goToSlide(currentSlide - 1);
  }

  if (nextBtn) {
    nextBtn.addEventListener('click', () => {
      nextSlide();
      resetInterval();
    });
  }

  if (prevBtn) {
    prevBtn.addEventListener('click', () => {
      prevSlide();
      resetInterval();
    });
  }

  function startInterval() {
    slideInterval = setInterval(nextSlide, intervalTime);
  }

  function resetInterval() {
    clearInterval(slideInterval);
    startInterval();
  }

  startInterval();
}

/* ==========================================================================
   4. TESTIMONIAL SLIDER
   ========================================================================== */
function initTestimonialSlider() {
  const container = document.querySelector('.testimonials-container');
  if (!container) return;

  const slides = container.querySelectorAll('.testimonial-slide');
  const dotsContainer = container.querySelector('.testimonial-dots');

  if (slides.length === 0) return;

  let currentSlide = 0;
  let scrollInterval;
  const intervalTime = 5000;

  // Create dots if not present
  if (dotsContainer && dotsContainer.children.length === 0) {
    slides.forEach((_, index) => {
      const dot = document.createElement('button');
      dot.classList.add('testimonial-dot');
      if (index === 0) dot.classList.add('active');
      dot.setAttribute('aria-label', `Go to testimonial ${index + 1}`);
      dotsContainer.appendChild(dot);

      dot.addEventListener('click', () => {
        goToSlide(index);
        resetInterval();
      });
    });
  }

  const dots = dotsContainer ? dotsContainer.querySelectorAll('.testimonial-dot') : [];

  function goToSlide(n) {
    slides[currentSlide].classList.remove('active');
    if (dots.length > currentSlide) dots[currentSlide].classList.remove('active');
    currentSlide = (n + slides.length) % slides.length;
    slides[currentSlide].classList.add('active');
    if (dots.length > currentSlide) dots[currentSlide].classList.add('active');
  }

  function nextSlide() {
    goToSlide(currentSlide + 1);
  }

  function startInterval() {
    scrollInterval = setInterval(nextSlide, intervalTime);
  }

  function resetInterval() {
    clearInterval(scrollInterval);
    startInterval();
  }

  startInterval();
}

/* ==========================================================================
   5. SCROLL-DRIVEN ANIMATIONS
   ========================================================================== */
function initScrollAnimations() {
  const animatedElements = document.querySelectorAll('.animate-on-scroll');
  
  if ('IntersectionObserver' in window) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('animated');
          observer.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.1,
      rootMargin: '0px 0px -50px 0px'
    });

    animatedElements.forEach(el => observer.observe(el));
  } else {
    animatedElements.forEach(el => el.classList.add('animated'));
  }
}

/* ==========================================================================
   5b. ANIMATED STATS COUNTERS
   ========================================================================== */
function initStatsCounter() {
  const statNumbers = document.querySelectorAll('.stat-number[data-target]');
  if (!statNumbers.length) return;

  const animateCounter = (el) => {
    const target = parseFloat(el.getAttribute('data-target'));
    const suffix = el.getAttribute('data-suffix') || '';
    const decimals = parseInt(el.getAttribute('data-decimals') || '0', 10);
    const duration = 2000;
    const steps = 60;
    const stepTime = duration / steps;
    let current = 0;
    const increment = target / steps;

    const timer = setInterval(() => {
      current += increment;
      if (current >= target) {
        current = target;
        clearInterval(timer);
      }
      el.textContent = (decimals > 0 ? current.toFixed(decimals) : Math.floor(current).toLocaleString()) + suffix;
    }, stepTime);
  };

  if ('IntersectionObserver' in window) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          animateCounter(entry.target);
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.2 });

    statNumbers.forEach(el => observer.observe(el));
  } else {
    statNumbers.forEach(el => animateCounter(el));
  }
}

/* ==========================================================================
   6. PRODUCT FILTERS (PRODUCTS PAGE)
   ========================================================================== */
function initProductFilter() {
  const filterContainer = document.querySelector('.product-filters');
  const productsGrid = document.querySelector('.products-grid');

  if (!filterContainer || !productsGrid) return;

  const buttons = filterContainer.querySelectorAll('.filter-btn');
  const items = Array.from(productsGrid.children);

  buttons.forEach(button => {
    button.addEventListener('click', () => {
      buttons.forEach(btn => btn.classList.remove('active'));
      button.classList.add('active');

      const filterValue = button.getAttribute('data-filter');

      items.forEach(item => {
        const innerCard = item.querySelector('.product-card') || item;
        const category = item.getAttribute('data-category') || innerCard.getAttribute('data-category');
        
        if (filterValue === 'all' || category === filterValue) {
          item.style.display = '';
          innerCard.style.opacity = '1';
          innerCard.style.transform = 'scale(1)';
        } else {
          item.style.display = 'none';
          innerCard.style.opacity = '0';
          innerCard.style.transform = 'scale(0.9)';
        }
      });
    });
  });
}

/* ==========================================================================
   7. REQUEST QUOTE MODAL SYSTEM
   ========================================================================== */
function initQuoteModal() {
  const modalOverlay = document.getElementById('quoteModal');
  if (!modalOverlay) return;

  const closeBtn = modalOverlay.querySelector('.modal-close');
  const productInput = modalOverlay.querySelector('#modalProduct');

  const quoteTriggers = document.querySelectorAll('.trigger-quote');

  quoteTriggers.forEach(trigger => {
    trigger.addEventListener('click', (e) => {
      e.preventDefault();
      e.stopPropagation();
      
      const productCard = trigger.closest('.product-card');
      let productName = "";

      if (productCard) {
        const titleEl = productCard.querySelector('h3');
        if (titleEl) productName = titleEl.textContent;
      } else {
        productName = trigger.getAttribute('data-product') || "General System Consultation";
      }

      if (productInput) {
        productInput.value = productName;
      }

      modalOverlay.classList.add('active');
      document.body.style.overflow = 'hidden';
    });
  });

  const closeModal = () => {
    modalOverlay.classList.remove('active');
    document.body.style.overflow = '';
  };

  if (closeBtn) closeBtn.addEventListener('click', closeModal);
  
  modalOverlay.addEventListener('click', (e) => {
    if (e.target === modalOverlay) closeModal();
  });

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && modalOverlay.classList.contains('active')) {
      closeModal();
    }
  });
}

/* ==========================================================================
   8. FAQ ACCORDION
   ========================================================================== */
function initFaqAccordion() {
  const faqItems = document.querySelectorAll('.faq-item');

  faqItems.forEach(item => {
    const header = item.querySelector('.faq-header');
    const body = item.querySelector('.faq-body');

    if (!header || !body) return;

    header.addEventListener('click', () => {
      const isActive = item.classList.contains('active');

      faqItems.forEach(otherItem => {
        if (otherItem !== item && otherItem.classList.contains('active')) {
          otherItem.classList.remove('active');
          const otherBody = otherItem.querySelector('.faq-body');
          if (otherBody) otherBody.style.height = '0px';
        }
      });

      if (isActive) {
        item.classList.remove('active');
        body.style.height = '0px';
      } else {
        item.classList.add('active');
        body.style.height = body.scrollHeight + 'px';
      }
    });
  });
}

/* ==========================================================================
   9. FORMS SUBMISSION & WHATSAPP REDIRECT
   ========================================================================== */
function initFormsHandler() {
  const forms = document.querySelectorAll('form');

  forms.forEach(form => {
    form.addEventListener('submit', (e) => {
      e.preventDefault();

      const nameInput = form.querySelector('#name') || form.querySelector('[name="name"]');
      const phoneInput = form.querySelector('#phone') || form.querySelector('[name="phone"]');
      const emailInput = form.querySelector('#email') || form.querySelector('[name="email"]');
      const messageInput = form.querySelector('#message') || form.querySelector('[name="message"]');
      const productInput = form.querySelector('#modalProduct') || form.querySelector('[name="product"]');

      const name = nameInput ? nameInput.value : 'Not specified';
      const phone = phoneInput ? phoneInput.value : 'Not specified';
      const email = emailInput ? emailInput.value : 'Not specified';
      const reqMessage = messageInput ? messageInput.value : 'No additional details specified';
      const product = productInput ? productInput.value : 'General Inquiry';

      const text = `Hi Aqua Solve Water Clinic, I would like to Request a Quote / Callback.

🛍️ *Inquiry Details:*
• *Product/System:* ${product}
• *Name:* ${name}
• *Phone:* ${phone}
• *Email:* ${email}
• *Requirements:* ${reqMessage}`;

      const whatsappUrl = `https://wa.me/919946450452?text=${encodeURIComponent(text)}`;

      const submitBtn = form.querySelector('[type="submit"]');
      const originalBtnHtml = submitBtn ? submitBtn.innerHTML : 'Submit';

      if (submitBtn) {
        submitBtn.disabled = true;
        submitBtn.innerHTML = `Sending...`;
      }

      // Show success alert
      const successDiv = document.createElement('div');
      successDiv.style.background = '#e6fffa';
      successDiv.style.border = '1px solid #319795';
      successDiv.style.color = '#234e52';
      successDiv.style.padding = '1.2rem';
      successDiv.style.borderRadius = '8px';
      successDiv.style.marginTop = '1rem';
      successDiv.style.fontFamily = 'Outfit, sans-serif';
      successDiv.style.fontWeight = '600';
      successDiv.style.fontSize = '0.95rem';
      successDiv.style.textAlign = 'center';
      successDiv.innerHTML = `✓ Thank you! Redirecting to WhatsApp inquiry...`;

      form.appendChild(successDiv);

      setTimeout(() => {
        window.open(whatsappUrl, '_blank');
      }, 500);

      setTimeout(() => {
        if (submitBtn) {
          submitBtn.disabled = false;
          submitBtn.innerHTML = originalBtnHtml;
        }
        form.reset();
        successDiv.remove();

        const modalOverlay = form.closest('.modal-overlay');
        if (modalOverlay) {
          modalOverlay.classList.remove('active');
          document.body.style.overflow = '';
        }
      }, 2000);
    });
  });
}

// Add spinner animation style
const style = document.createElement('style');
style.textContent = `@keyframes rotate { 100% { transform: rotate(360deg); } }`;
document.head.appendChild(style);
