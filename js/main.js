/**
 * Skytronic Labs - Main JavaScript File
 * Handles all interactive functionality and animations
 */

// =================================
// GLOBAL VARIABLES & CONFIGURATION
// =================================

let isScrolling = false;
let scrollTimeout;

const config = {
    breakpoints: {
        mobile: 768,
        tablet: 992,
        desktop: 1200
    },
    animations: {
        duration: {
            fast: 0.3,
            medium: 0.6,
            slow: 1.2
        },
        ease: {
            smooth: "power2.out",
            bounce: "back.out(1.7)",
            elastic: "elastic.out(1, 0.3)"
        }
    },
    cookie: {
        name: 'skytronic_cookie_consent',
        expireDays: 365
    }
};

// =================================
// UTILITY FUNCTIONS
// =================================

/**
 * Utility functions for common operations
 */
const Utils = {
    // Debounce function for performance
    debounce(func, wait, immediate) {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                timeout = null;
                if (!immediate) func(...args);
            };
            const callNow = immediate && !timeout;
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
            if (callNow) func(...args);
        };
    },

    // Throttle function for scroll events
    throttle(func, limit) {
        let inThrottle;
        return function(...args) {
            if (!inThrottle) {
                func.apply(this, args);
                inThrottle = true;
                setTimeout(() => inThrottle = false, limit);
            }
        };
    },

    // Check if element is in viewport
    isInViewport(element, threshold = 0.1) {
        const rect = element.getBoundingClientRect();
        const windowHeight = window.innerHeight || document.documentElement.clientHeight;
        const windowWidth = window.innerWidth || document.documentElement.clientWidth;
        
        return (
            rect.top >= -threshold * windowHeight &&
            rect.left >= -threshold * windowWidth &&
            rect.bottom <= windowHeight + threshold * windowHeight &&
            rect.right <= windowWidth + threshold * windowWidth
        );
    },

    // Get current breakpoint
    getCurrentBreakpoint() {
        const width = window.innerWidth;
        if (width < config.breakpoints.mobile) return 'mobile';
        if (width < config.breakpoints.tablet) return 'tablet';
        return 'desktop';
    },

    // Smooth scroll to element
    scrollTo(target, offset = 0) {
        const element = typeof target === 'string' ? document.querySelector(target) : target;
        if (!element) return;

        const targetPosition = element.offsetTop - offset;
        window.scrollTo({
            top: targetPosition,
            behavior: 'smooth'
        });
    },

    // Show toast notification
    showToast(message, type = 'success', duration = 3000) {
        const toast = document.getElementById('messageToast');
        const toastBody = toast.querySelector('.toast-body');
        const toastIcon = toast.querySelector('.toast-icon i');
        
        if (!toast || !toastBody) return;

        // Set message and icon based on type
        toastBody.textContent = message;
        toastIcon.className = type === 'success' ? 'fas fa-check-circle text-success' : 'fas fa-exclamation-circle text-danger';
        
        // Show toast
        toast.classList.add('show');
        
        // Hide toast after duration
        setTimeout(() => {
            toast.classList.remove('show');
        }, duration);
    },

    // Cookie utilities
    setCookie(name, value, days) {
        const expires = new Date();
        expires.setTime(expires.getTime() + (days * 24 * 60 * 60 * 1000));
        document.cookie = `${name}=${value};expires=${expires.toUTCString()};path=/`;
    },

    getCookie(name) {
        const nameEQ = name + "=";
        const ca = document.cookie.split(';');
        for (let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) === ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    },

    deleteCookie(name) {
        document.cookie = `${name}=; expires=Thu, 01 Jan 1970 00:00:01 GMT; path=/`;
    }
};

// =================================
// LOADING SCREEN
// =================================

class LoadingScreen {
    constructor() {
        this.loadingScreen = document.getElementById('loading-screen');
        this.progress = this.loadingScreen?.querySelector('.loading-progress');
        this.isLoaded = false;
    }

    init() {
        if (!this.loadingScreen) return;

        // Simulate loading progress
        this.simulateProgress();

        // Hide loading screen when page is fully loaded
        window.addEventListener('load', () => {
            this.hide();
        });

        // Fallback: hide loading screen after 3 seconds
        setTimeout(() => {
            if (!this.isLoaded) this.hide();
        }, 3000);
    }

    simulateProgress() {
        if (!this.progress) return;

        let progress = 0;
        const interval = setInterval(() => {
            progress += Math.random() * 15;
            if (progress >= 100) {
                progress = 100;
                clearInterval(interval);
            }
            this.progress.style.width = `${progress}%`;
        }, 100);
    }

    hide() {
        if (!this.loadingScreen || this.isLoaded) return;
        
        this.isLoaded = true;
        this.loadingScreen.classList.add('hidden');
        // Notify other components that loading has finished
        try {
            document.dispatchEvent(new CustomEvent('skytronic:loadingHidden'));
        } catch (e) {}
        
        // Remove from DOM after animation
        setTimeout(() => {
            this.loadingScreen.remove();
        }, 500);
    }
}

// =================================
// HEADER FUNCTIONALITY
// =================================

class Header {
    constructor() {
        this.header = document.querySelector('.main-header');
        this.navbar = document.querySelector('.navbar');
        this.navToggler = document.querySelector('.navbar-toggler');
        this.navMenu = document.querySelector('.navbar-nav');
        this.collapseEl = document.getElementById('navbarNav');
        this.collapse = this.collapseEl && typeof bootstrap !== 'undefined' ? new bootstrap.Collapse(this.collapseEl, { toggle: false }) : null;
        this.navLinks = document.querySelectorAll('.nav-link');
        this.dropdowns = document.querySelectorAll('.dropdown');
        this.lastScrollY = 0;
        this.isMenuOpen = false;
    }

    init() {
        if (!this.header) return;

        this.handleScroll();
        this.setupMobileMenu();
        this.setupDropdowns();
        this.setupSmoothScroll();
        
        // Add scroll event listener
        window.addEventListener('scroll', Utils.throttle(() => this.handleScroll(), 16));
    }

    handleScroll() {
        const currentScrollY = window.pageYOffset;
        
        // Add scrolled class for styling
        if (currentScrollY > 50) {
            this.header.classList.add('scrolled');
        } else {
            this.header.classList.remove('scrolled');
        }

        // Hide/show header on scroll (optional)
        if (currentScrollY > this.lastScrollY && currentScrollY > 100) {
            this.header.style.transform = 'translateY(-100%)';
        } else {
            this.header.style.transform = 'translateY(0)';
        }

        this.lastScrollY = currentScrollY;
    }

    setupMobileMenu() {
        if (!this.navToggler) return;

        // If Bootstrap Collapse is present, let it handle toggling via data attributes
        if (!this.collapse) {
            this.navToggler.addEventListener('click', (e) => {
                e.preventDefault();
                this.toggleMobileMenu();
            });
        }

        // Sync state with Bootstrap collapse if available
        if (this.collapseEl) {
            this.collapseEl.addEventListener('shown.bs.collapse', () => {
                this.isMenuOpen = true;
                this.navToggler.classList.add('active');
                this.navToggler.setAttribute('aria-expanded', 'true');
                document.body.style.overflow = 'hidden';
            });
            this.collapseEl.addEventListener('hidden.bs.collapse', () => {
                this.isMenuOpen = false;
                this.navToggler.classList.remove('active');
                this.navToggler.setAttribute('aria-expanded', 'false');
                document.body.style.overflow = '';
            });
        }

        // Close menu when clicking nav links (but not dropdown toggles)
        this.navLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                const isDropdownToggle = link.classList.contains('dropdown-toggle') || link.getAttribute('data-bs-toggle') === 'dropdown';
                if (isDropdownToggle) return;
                if (this.isMenuOpen) {
                    this.closeMobileMenu();
                }
            });
        });

        // Close on dropdown item click inside mobile menu
        const dropdownItems = document.querySelectorAll('#navbarNav .dropdown-menu .dropdown-item');
        dropdownItems.forEach(item => {
            item.addEventListener('click', () => {
                if (this.isMenuOpen) {
                    this.closeMobileMenu();
                }
            });
        });

        // Close menu when clicking outside
        document.addEventListener('click', (e) => {
            if (this.isMenuOpen && !this.navbar.contains(e.target)) {
                this.closeMobileMenu();
            }
        });
    }

    toggleMobileMenu() {
        this.isMenuOpen = !this.isMenuOpen;
        this.navToggler.classList.toggle('active');
        this.navToggler.setAttribute('aria-expanded', this.isMenuOpen ? 'true' : 'false');
        // Fallback for when Bootstrap's Collapse isn't available
        if (this.navMenu) {
            this.navMenu.classList.toggle('active');
        }
        // Prevent body scroll when menu is open
        document.body.style.overflow = this.isMenuOpen ? 'hidden' : '';
    }

    closeMobileMenu() {
        if (this.collapse) {
            this.collapse.hide();
            return;
        }
        // Fallback explicit close
        this.isMenuOpen = false;
        this.navToggler.classList.remove('active');
        if (this.navMenu) {
            this.navMenu.classList.remove('active');
        }
        this.navToggler.setAttribute('aria-expanded', 'false');
        document.body.style.overflow = '';
    }

    setupDropdowns() {
        this.dropdowns.forEach(dropdown => {
            const toggle = dropdown.querySelector('.dropdown-toggle');
            const menu = dropdown.querySelector('.dropdown-menu');
            
            if (!toggle || !menu) return;

            // Touch/click handling for mobile
            if (Utils.getCurrentBreakpoint() === 'mobile') {
                toggle.addEventListener('click', (e) => {
                    e.preventDefault();
                    dropdown.classList.toggle('show');
                });
            }
        });
    }

    setupSmoothScroll() {
        this.navLinks.forEach(link => {
            const href = link.getAttribute('href');
            if (href && href.startsWith('#')) {
                link.addEventListener('click', (e) => {
                    e.preventDefault();
                    const target = document.querySelector(href);
                    if (target) {
                        Utils.scrollTo(target, 80);
                    }
                });
            }
        });
    }
}

// =================================
// COOKIE CONSENT MANAGEMENT
// =================================

class CookieConsent {
    constructor() {
        this.banner = document.getElementById('cookieConsent');
        this.modal = document.getElementById('cookieModal');
        this.preferences = {
            essential: true,
            performance: false,
            marketing: false
        };
    }

    init() {
        if (!this.banner) return;

        this.loadPreferences();
        this.setupEventListeners();
        this.checkConsentStatus();
    }

    setupEventListeners() {
        // Global functions for cookie management
        window.acceptCookies = () => this.acceptAll();
        window.rejectCookies = () => this.rejectAll();
        window.manageCookies = () => this.showModal();
        window.closeCookieModal = () => this.hideModal();
        window.saveCookiePreferences = () => this.savePreferences();

        // Modal close button
        const closeBtn = this.modal?.querySelector('.btn-close');
        if (closeBtn) {
            closeBtn.addEventListener('click', () => this.hideModal());
        }

        // Modal backdrop click
        if (this.modal) {
            this.modal.addEventListener('click', (e) => {
                if (e.target === this.modal) {
                    this.hideModal();
                }
            });
        }

        // Toggle switches
        const toggles = document.querySelectorAll('.toggle-cookies');
        toggles.forEach(toggle => {
            toggle.addEventListener('click', (e) => {
                const category = e.target.dataset.category;
                if (category && category !== 'essential') {
                    this.toggleCategory(category);
                }
            });
        });
    }

    checkConsentStatus() {
        const consent = Utils.getCookie(config.cookie.name);
        if (!consent) {
            this.showBanner();
        } else {
            this.preferences = JSON.parse(consent);
            this.applyPreferences();
        }
    }

    showBanner() {
        if (this.banner) {
            this.banner.classList.add('visible');
        }
    }

    hideBanner() {
        if (this.banner) {
            this.banner.classList.remove('visible');
        }
    }

    showModal() {
        if (this.modal) {
            this.modal.classList.add('visible');
            this.updateModalToggles();
        }
    }

    hideModal() {
        if (this.modal) {
            this.modal.classList.remove('visible');
        }
    }

    acceptAll() {
        this.preferences = {
            essential: true,
            performance: true,
            marketing: true
        };
        this.saveAndApply();
    }

    rejectAll() {
        this.preferences = {
            essential: true,
            performance: false,
            marketing: false
        };
        this.saveAndApply();
    }

    toggleCategory(category) {
        if (category in this.preferences && category !== 'essential') {
            this.preferences[category] = !this.preferences[category];
        }
    }

    savePreferences() {
        // Get toggle states from modal
        const performanceToggle = document.getElementById('performance');
        const marketingToggle = document.getElementById('marketing');

        if (performanceToggle) {
            this.preferences.performance = performanceToggle.checked;
        }
        if (marketingToggle) {
            this.preferences.marketing = marketingToggle.checked;
        }

        this.saveAndApply();
        this.hideModal();
    }

    saveAndApply() {
        Utils.setCookie(config.cookie.name, JSON.stringify(this.preferences), config.cookie.expireDays);
        this.applyPreferences();
        this.hideBanner();
        Utils.showToast('Cookie preferences saved successfully!');
    }

    loadPreferences() {
        const saved = Utils.getCookie(config.cookie.name);
        if (saved) {
            try {
                this.preferences = { ...this.preferences, ...JSON.parse(saved) };
            } catch (e) {
                console.warn('Failed to parse cookie preferences');
            }
        }
    }

    updateModalToggles() {
        const performanceToggle = document.getElementById('performance');
        const marketingToggle = document.getElementById('marketing');

        if (performanceToggle) {
            performanceToggle.checked = this.preferences.performance;
        }
        if (marketingToggle) {
            marketingToggle.checked = this.preferences.marketing;
        }
    }

    applyPreferences() {
        // Apply analytics tracking
        if (this.preferences.performance) {
            this.enableAnalytics();
        } else {
            this.disableAnalytics();
        }

        // Apply marketing tracking
        if (this.preferences.marketing) {
            this.enableMarketing();
        } else {
            this.disableMarketing();
        }
    }

    enableAnalytics() {
        // Enable Google Analytics
        if (typeof gtag !== 'undefined') {
            gtag('consent', 'update', {
                'analytics_storage': 'granted'
            });
        }
        
        // Enable other analytics services
        if (typeof mixpanel !== 'undefined') {
            mixpanel.opt_in_tracking();
        }
    }

    disableAnalytics() {
        // Disable Google Analytics
        if (typeof gtag !== 'undefined') {
            gtag('consent', 'update', {
                'analytics_storage': 'denied'
            });
        }
        
        // Disable other analytics services
        if (typeof mixpanel !== 'undefined') {
            mixpanel.opt_out_tracking();
        }
    }

    enableMarketing() {
        // Enable marketing cookies
        if (typeof gtag !== 'undefined') {
            gtag('consent', 'update', {
                'ad_storage': 'granted'
            });
        }
        
        // Enable Facebook Pixel
        if (typeof fbq !== 'undefined') {
            fbq('consent', 'grant');
        }
    }

    disableMarketing() {
        // Disable marketing cookies
        if (typeof gtag !== 'undefined') {
            gtag('consent', 'update', {
                'ad_storage': 'denied'
            });
        }
        
        // Disable Facebook Pixel
        if (typeof fbq !== 'undefined') {
            fbq('consent', 'revoke');
        }
    }
}

// =================================
// ANIMATIONS & SCROLL EFFECTS
// =================================

class Animations {
    constructor() {
        this.timeline = null;
        this.scrollTriggers = [];
    }

    init() {
        if (typeof gsap === 'undefined') {
            console.warn('GSAP not loaded, animations disabled');
            return;
        }

        this.setupPageAnimations();
        this.setupScrollAnimations();
        this.setupParallaxEffects();
        this.setupCounterAnimations();
    }

    setupPageAnimations() {
        // Page load animations
        this.timeline = gsap.timeline({ paused: true });
        
        // Animate hero content (guard per selector so pages without hero don't warn)
        const heroTitle = document.querySelector('.hero-title');
        const heroSubtitle = document.querySelector('.hero-subtitle');
        const heroCtas = document.querySelectorAll('.hero-cta .btn');
        const heroStatItems = document.querySelectorAll('.hero-stats .stat-item');

        if (heroTitle) {
            this.timeline.from(heroTitle, {
                duration: config.animations.duration.medium,
                y: 50,
                opacity: 0,
                ease: config.animations.ease.smooth,
                immediateRender: false
            });
        }

        if (heroSubtitle) {
            this.timeline.from(heroSubtitle, {
                duration: config.animations.duration.medium,
                y: 30,
                opacity: 0,
                ease: config.animations.ease.smooth,
                immediateRender: false
            }, heroTitle ? '-=0.3' : 0);
        }

        if (heroCtas.length > 0) {
            this.timeline.from(heroCtas, {
                duration: config.animations.duration.fast,
                y: 20,
                opacity: 0,
                stagger: 0.1,
                ease: config.animations.ease.smooth,
                immediateRender: false
            }, (heroTitle || heroSubtitle) ? '-=0.2' : 0);
        }

        if (heroStatItems.length > 0) {
            this.timeline.from(heroStatItems, {
                duration: config.animations.duration.fast,
                y: 20,
                opacity: 0,
                stagger: 0.1,
                ease: config.animations.ease.bounce,
                immediateRender: false
            }, (heroTitle || heroSubtitle || heroCtas.length) ? '-=0.1' : 0);
        }

        // Animate floating cards
        const playFloating = () => {
            const cards = document.querySelectorAll('.floating-card');
            if (cards.length === 0) return;
            gsap.from(cards, {
                duration: config.animations.duration.slow,
                y: 100,
                opacity: 0,
                stagger: 0.2,
                ease: config.animations.ease.elastic,
                delay: 0.5,
                immediateRender: false,
                onComplete: () => {
                    if (cards.length > 0) {
                        gsap.set(cards, { clearProps: 'transform,opacity' });
                    }
                }
            });
        };

        const startAnimations = () => {
            if (this.timeline && this.timeline.paused() && this.timeline.getChildren().length > 0) {
                this.timeline.play(0);
            }
            playFloating();
        };

        if (document.readyState === 'complete') {
            startAnimations();
        } else {
            window.addEventListener('load', startAnimations, { once: true });
            document.addEventListener('skytronic:loadingHidden', startAnimations, { once: true });
        }
        
    }

    setupScrollAnimations() {
        if (typeof ScrollTrigger === 'undefined') return;

        // Register ScrollTrigger plugin
        gsap.registerPlugin(ScrollTrigger);

        // Animate sections on scroll
        const sections = document.querySelectorAll('section');
        sections.forEach((section, index) => {
            if (section.classList.contains('hero-section')) return;

            const st = ScrollTrigger.create({
                trigger: section,
                start: 'top 80%',
                end: 'bottom 20%',
                onEnter: () => this.animateSection(section),
                onEnterBack: () => this.animateSection(section),
                once: true
            });
            
            this.scrollTriggers.push(st);
        });

        // Animate cards
        const cards = document.querySelectorAll('.feature-card, .course-card, .review-card');
        cards.forEach((card, index) => {
            const st = ScrollTrigger.create({
                trigger: card,
                start: 'top 90%',
                onEnter: () => {
                    gsap.from(card, {
                        duration: config.animations.duration.medium,
                        y: 50,
                        opacity: 0,
                        ease: config.animations.ease.smooth,
                        delay: index * 0.1,
                        immediateRender: false,
                        onComplete: () => gsap.set(card, { clearProps: 'transform,opacity' })
                    });
                }
            });
            
            this.scrollTriggers.push(st);
        });

        // Animate section titles
        const titles = document.querySelectorAll('.section-title');
        titles.forEach(title => {
            const st = ScrollTrigger.create({
                trigger: title,
                start: 'top 85%',
                onEnter: () => {
                    gsap.from(title, {
                        duration: config.animations.duration.medium,
                        y: 30,
                        opacity: 0,
                        ease: config.animations.ease.smooth,
                        immediateRender: false,
                        onComplete: () => gsap.set(title, { clearProps: 'transform,opacity' })
                    });
                }
            });
            
            this.scrollTriggers.push(st);
        });
    }

    setupParallaxEffects() {
        // Parallax for hero background
        const heroBg = document.querySelector('.hero-bg-animation');
        if (heroBg) {
            const st = ScrollTrigger.create({
                trigger: heroBg,
                start: 'top bottom',
                end: 'bottom top',
                scrub: true,
                onUpdate: (self) => {
                    const y = self.progress * 100;
                    gsap.set(heroBg, { y: y });
                }
            });
            
            this.scrollTriggers.push(st);
        }

        // Parallax for floating elements
        const floatingElements = document.querySelectorAll('.floating-card');
        floatingElements.forEach(element => {
            const st = ScrollTrigger.create({
                trigger: element,
                start: 'top bottom',
                end: 'bottom top',
                scrub: 1,
                onUpdate: (self) => {
                    const y = self.progress * 50;
                    gsap.set(element, { y: y });
                }
            });
            
            this.scrollTriggers.push(st);
        });
    }

    setupCounterAnimations() {
        // Animate number counters
        if (typeof ScrollTrigger === 'undefined') return;

        const bindCounters = () => {
            const counters = document.querySelectorAll('.stat-number');
            counters.forEach(counter => {
                // prevent duplicate bindings
                if (counter.dataset.counterBound === 'true') return;
                counter.dataset.counterBound = 'true';

                const st = ScrollTrigger.create({
                    trigger: counter,
                    start: 'top 80%',
                    onEnter: () => {
                        if (counter.dataset.animated === 'true') return;
                        this.animateCounter(counter);
                        counter.dataset.animated = 'true';
                    }
                });
                this.scrollTriggers.push(st);
            });
        };

        // Defer binding until the loading screen is hidden to avoid animating under overlay
        const hasLoading = !!document.getElementById('loading-screen');
        if (hasLoading) {
            document.addEventListener('skytronic:loadingHidden', bindCounters, { once: true });
        } else if (document.readyState === 'complete') {
            bindCounters();
        } else {
            window.addEventListener('load', bindCounters, { once: true });
        }
    }

    animateSection(section) {
        const elements = section.querySelectorAll('.feature-card, .course-card, p, h1, h2, h3, h4, h5, h6');
        
        gsap.from(elements, {
            duration: config.animations.duration.medium,
            y: 30,
            opacity: 0,
            stagger: 0.1,
            ease: config.animations.ease.smooth,
            immediateRender: false,
            onComplete: () => gsap.set(elements, { clearProps: 'transform,opacity' })
        });
    }

    animateCounter(counter) {
        const original = counter.textContent.trim();
        const match = original.match(/^(\D*)([\d,.\s\/]+)(\D*)$/);
        if (!match) return;

        const prefix = match[1] || '';
        const numericPart = match[2].trim();
        const suffix = match[3] || '';

        const parseNumber = (value) => {
            const cleaned = value.replace(/\s+/g, '').replace(/,/g, '');
            return parseFloat(cleaned);
        };

        const hasFraction = numericPart.includes('/');
        if (hasFraction) {
            const [leftRaw, rightRaw] = numericPart.split('/').map(s => s.trim());
            const numeratorTarget = parseNumber(leftRaw);
            const denominator = parseInt(rightRaw.replace(/\D/g, ''), 10) || 1;
            if (isNaN(numeratorTarget)) return;

            const decimals = (leftRaw.includes('.') ? (leftRaw.split('.')[1]?.length || 0) : 0);
            const state = { val: 0 };
            if (counter._anim && typeof counter._anim.kill === 'function') {
                counter._anim.kill();
            }
            counter._anim = gsap.to(state, {
                duration: config.animations.duration.slow,
                val: numeratorTarget,
                ease: config.animations.ease.smooth,
                onUpdate: function() {
                    const current = state.val || 0;
                    const value = decimals > 0 ? current.toFixed(decimals) : Math.round(current).toString();
                    counter.textContent = `${prefix}${value}/${denominator}${suffix}`;
                },
                onComplete: function() {
                    counter.textContent = original;
                }
            });
            return;
        }

        // Plain number with optional decimals
        const targetValue = parseNumber(numericPart);
        if (isNaN(targetValue)) return;
        const decimals = numericPart.includes('.') ? (numericPart.split('.')[1]?.replace(/\D/g, '').length || 0) : 0;
        const useGrouping = /[,\s]/.test(numericPart) && !numericPart.includes('.') && !/\/[\d]/.test(numericPart);

        const state = { val: 0 };
        if (counter._anim && typeof counter._anim.kill === 'function') {
            counter._anim.kill();
        }
        counter._anim = gsap.to(state, {
            duration: config.animations.duration.slow,
            val: targetValue,
            ease: config.animations.ease.smooth,
            onUpdate: function() {
                const current = state.val || 0;
                let text;
                if (decimals > 0) {
                    text = Number(current).toFixed(decimals);
                } else if (useGrouping) {
                    text = Math.round(current).toLocaleString();
                } else {
                    text = Math.round(current).toString();
                }
                counter.textContent = `${prefix}${text}${suffix}`;
            },
            onComplete: function() {
                counter.textContent = original;
            }
        });
    }

    destroy() {
        // Clean up ScrollTriggers
        this.scrollTriggers.forEach(st => st.kill());
        this.scrollTriggers = [];
        
        if (this.timeline) {
            this.timeline.kill();
        }
    }
}

// =================================
// FORM HANDLING
// =================================

class FormHandler {
    constructor() {
        this.forms = document.querySelectorAll('form');
        this.currentStep = 1;
        this.totalSteps = 3;
    }

    init() {
        this.setupForms();
        this.setupMultiStepForms();
        this.setupNewsletterForm();
        this.setupContactForm();
    }

    setupForms() {
        this.forms.forEach(form => {
            // Disable native validation; we handle it manually
            form.setAttribute('novalidate', 'novalidate');
            form.addEventListener('submit', (e) => this.handleSubmit(e));
            
            // Real-time validation
            const inputs = form.querySelectorAll('input, textarea, select');
            inputs.forEach(input => {
                input.addEventListener('blur', () => this.validateField(input));
                input.addEventListener('input', () => this.clearFieldError(input));
            });
        });
    }

    setupMultiStepForms() {
        const multiStepForm = document.getElementById('mainContactForm');
        if (!multiStepForm) return;

        const nextBtns = multiStepForm.querySelectorAll('.next-step');
        const prevBtns = multiStepForm.querySelectorAll('.prev-step');

        nextBtns.forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                this.nextStep(multiStepForm);
            });
        });

        prevBtns.forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                this.prevStep(multiStepForm);
            });
        });
    }

    setupNewsletterForm() {
        const newsletterForm = document.getElementById('newsletterForm');
        if (!newsletterForm) return;

        newsletterForm.addEventListener('submit', (e) => {
            e.preventDefault();
            this.handleNewsletterSubmit(newsletterForm);
        });
    }

    setupContactForm() {
        // Auto-populate URL fields in error reports
        const errorUrlInput = document.getElementById('errorUrl');
        const referrerUrlInput = document.getElementById('referrerUrl');
        
        if (errorUrlInput) {
            errorUrlInput.value = window.location.href;
        }
        
        if (referrerUrlInput && document.referrer) {
            referrerUrlInput.value = document.referrer;
        }

        // Enroll modal handlers
        const enrollModalEl = document.getElementById('enrollModal');
        if (enrollModalEl) {
            // Populate course field from triggering button
            enrollModalEl.addEventListener('show.bs.modal', (event) => {
                const button = event.relatedTarget;
                const course = button?.getAttribute('data-course') || '';
                const courseInput = document.getElementById('enrollCourse');
                if (courseInput) courseInput.value = course;
            });

            const submitBtn = document.getElementById('enrollSubmitBtn');
            const form = document.getElementById('enrollForm');
            submitBtn?.addEventListener('click', async () => {
                if (!form) return;
                const nameInput = document.getElementById('enrollName');
                const emailInput = document.getElementById('enrollEmail');
                // simple validation
                const ok = this.validateField(nameInput) & this.validateField(emailInput);
                if (!ok) return;
                // Simulate submit
                submitBtn.disabled = true;
                const original = submitBtn.textContent;
                submitBtn.textContent = 'Submitting...';
                await new Promise(r => setTimeout(r, 1200));
                Utils.showToast('Thanks! We\'ll contact you shortly.');
                form.reset();
                submitBtn.textContent = original;
                submitBtn.disabled = false;
                // Hide modal
                const modalInstance = bootstrap?.Modal?.getInstance(enrollModalEl) || new bootstrap.Modal(enrollModalEl);
                modalInstance.hide();
            });
        }
    }

    nextStep(form) {
        const currentStepDiv = form.querySelector(`[data-step="${this.currentStep}"]`);
        
        // Validate current step
        if (!this.validateStep(currentStepDiv)) return;

        // Hide current step
        currentStepDiv.classList.remove('active');
        
        // Show next step
        this.currentStep++;
        const nextStepDiv = form.querySelector(`[data-step="${this.currentStep}"]`);
        if (nextStepDiv) {
            nextStepDiv.classList.add('active');
        }

        // Update progress if exists
        this.updateProgress();
    }

    prevStep(form) {
        // Hide current step
        const currentStepDiv = form.querySelector(`[data-step="${this.currentStep}"]`);
        currentStepDiv.classList.remove('active');
        
        // Show previous step
        this.currentStep--;
        const prevStepDiv = form.querySelector(`[data-step="${this.currentStep}"]`);
        if (prevStepDiv) {
            prevStepDiv.classList.add('active');
        }

        // Update progress if exists
        this.updateProgress();
    }

    validateStep(stepDiv) {
        const requiredFields = Array.from(stepDiv.querySelectorAll('[required]'))
            .filter((el) => this.isElementVisible(el));
        let isValid = true;

        requiredFields.forEach(field => {
            if (!this.validateField(field)) {
                isValid = false;
            }
        });

        return isValid;
    }

    validateField(field) {
        const value = field.value.trim();
        const type = field.type;
        let isValid = true;
        let errorMessage = '';

        // Clear previous errors
        this.clearFieldError(field);

        // Radio group validation
        if (type === 'radio' && field.hasAttribute('required')) {
            const form = field.form || document;
            const group = form.querySelectorAll(`input[type="radio"][name="${field.name}"]`);
            const anyChecked = Array.from(group).some(r => r.checked);
            if (!anyChecked) {
                errorMessage = 'Please select an option';
                isValid = false;
            }
        }
        // Checkbox required validation
        else if (type === 'checkbox' && field.hasAttribute('required') && !field.checked) {
            errorMessage = 'This field is required';
            isValid = false;
        }
        // Required field validation for other types
        else if (field.hasAttribute('required') && !value) {
            errorMessage = 'This field is required';
            isValid = false;
        }
        // Email validation
        else if (type === 'email' && value) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(value)) {
                errorMessage = 'Please enter a valid email address';
                isValid = false;
            }
        }
        // Phone validation
        else if (type === 'tel' && value) {
            const phoneRegex = /^[\+]?[1-9][\d]{0,15}$/;
            if (!phoneRegex.test(value.replace(/[\s\-\(\)]/g, ''))) {
                errorMessage = 'Please enter a valid phone number';
                isValid = false;
            }
        }
        // URL validation
        else if (type === 'url' && value) {
            try {
                new URL(value);
            } catch {
                errorMessage = 'Please enter a valid URL';
                isValid = false;
            }
        }

        if (!isValid) {
            this.showFieldError(field, errorMessage);
        }

        return isValid;
    }

    showFieldError(field, message) {
        field.classList.add('is-invalid');
        // Highlight associated label as well (for checkboxes/radios)
        const label = (field.id ? (field.form || document).querySelector(`label[for="${field.id}"]`) : null) || field.closest('.form-check')?.querySelector('.form-check-label');
        if (label) {
            label.classList.add('text-danger');
        }

        // Remove existing error message
        const existingError = field.parentNode.querySelector('.error-message');
        if (existingError) {
            existingError.remove();
        }

        // Add new error message
        const errorDiv = document.createElement('div');
        errorDiv.className = 'error-message text-danger mt-1';
        errorDiv.textContent = message;
        field.parentNode.appendChild(errorDiv);
    }

    clearFieldError(field) {
        field.classList.remove('is-invalid');
        const label = (field.id ? (field.form || document).querySelector(`label[for="${field.id}"]`) : null) || field.closest('.form-check')?.querySelector('.form-check-label');
        if (label) {
            label.classList.remove('text-danger');
        }
        const errorMessage = field.parentNode.querySelector('.error-message');
        if (errorMessage) {
            errorMessage.remove();
        }
    }

    updateProgress() {
        const progressBar = document.querySelector('.progress-bar');
        if (progressBar) {
            const progress = (this.currentStep / this.totalSteps) * 100;
            progressBar.style.width = `${progress}%`;
            progressBar.setAttribute('aria-valuenow', progress);
        }
    }

    async handleSubmit(e) {
        e.preventDefault();
        const form = e.target;
        // Temporarily disable required on hidden fields to avoid native validation errors
        const hiddenRequired = [];
        form.querySelectorAll('[required]').forEach((el) => {
            if (!this.isElementVisible(el)) {
                hiddenRequired.push(el);
                el.removeAttribute('required');
            }
        });
        
        // Validate entire form
        if (!this.validateForm(form)) {
            Utils.showToast('Please correct the errors before submitting', 'error');
            // Restore attributes
            hiddenRequired.forEach((el) => el.setAttribute('required', ''));
            return;
        }

        // Show loading state
        const submitBtn = form.querySelector('[type="submit"]');
        const originalText = submitBtn.textContent;
        submitBtn.textContent = 'Sending...';
        submitBtn.disabled = true;

        try {
            // Simulate form submission (replace with actual API call)
            await this.submitForm(form);
            Utils.showToast('Message sent successfully!');
            form.reset();
            
            // Reset multi-step form if applicable
            if (form.classList.contains('multi-step')) {
                this.resetMultiStepForm(form);
            }
        } catch (error) {
            console.error('Form submission error:', error);
            Utils.showToast('Failed to send message. Please try again.', 'error');
        } finally {
            // Restore button state
            submitBtn.textContent = originalText;
            submitBtn.disabled = false;
            // Restore attributes
            hiddenRequired.forEach((el) => el.setAttribute('required', ''));
        }
    }

    validateForm(form) {
        // Validate only visible required fields
        const requiredFields = Array.from(form.querySelectorAll('[required]'))
            .filter((el) => this.isElementVisible(el));
        let isValid = true;

        requiredFields.forEach(field => {
            if (!this.validateField(field)) {
                isValid = false;
            }
        });

        return isValid;
    }

    async submitForm(form) {
        // Simulate API call
        return new Promise((resolve, reject) => {
            setTimeout(() => {
                // Simulate success (replace with actual API call)
                if (Math.random() > 0.1) {
                    resolve({ success: true });
                } else {
                    reject(new Error('Submission failed'));
                }
            }, 2000);
        });
    }

    isElementVisible(el) {
        if (!el) return false;
        const rects = el.getClientRects();
        return !!(el.offsetParent !== null || rects.length);
    }

    async handleNewsletterSubmit(form) {
        const email = form.querySelector('input[type="email"]').value;
        
        if (!email) {
            Utils.showToast('Please enter your email address', 'error');
            return;
        }

        const submitBtn = form.querySelector('button[type="submit"]');
        const originalText = submitBtn.innerHTML;
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Subscribing...';
        submitBtn.disabled = true;

        try {
            // Simulate newsletter subscription
            await new Promise(resolve => setTimeout(resolve, 1500));
            Utils.showToast('Successfully subscribed to newsletter!');
            form.reset();
        } catch (error) {
            Utils.showToast('Failed to subscribe. Please try again.', 'error');
        } finally {
            submitBtn.innerHTML = originalText;
            submitBtn.disabled = false;
        }
    }

    resetMultiStepForm(form) {
        // Hide all steps
        const steps = form.querySelectorAll('.form-step');
        steps.forEach(step => step.classList.remove('active'));
        
        // Show first step
        const firstStep = form.querySelector('[data-step="1"]');
        if (firstStep) {
            firstStep.classList.add('active');
        }
        
        // Reset step counter
        this.currentStep = 1;
        this.updateProgress();
    }
}

// =================================
// FAQ ACCORDION
// =================================

class FAQAccordion {
    constructor() {
        this.faqItems = document.querySelectorAll('.faq-item');
    }

    init() {
        if (this.faqItems.length === 0) return;

        this.faqItems.forEach(item => {
            const question = item.querySelector('.faq-question');
            const answer = item.querySelector('.faq-answer');
            
            if (question && answer) {
                question.addEventListener('click', () => this.toggleItem(item));
            }
        });
    }

    toggleItem(item) {
        const isActive = item.classList.contains('active');
        
        // Close all other items
        this.faqItems.forEach(otherItem => {
            if (otherItem !== item) {
                otherItem.classList.remove('active');
            }
        });
        
        // Toggle current item
        if (isActive) {
            item.classList.remove('active');
        } else {
            item.classList.add('active');
        }
    }
}

// =================================
// BACK TO TOP BUTTON
// =================================

class BackToTop {
    constructor() {
        this.button = document.getElementById('backToTop');
        this.isVisible = false;
    }

    init() {
        if (!this.button) return;

        this.button.addEventListener('click', () => this.scrollToTop());
        window.addEventListener('scroll', Utils.throttle(() => this.handleScroll(), 100));
    }

    handleScroll() {
        const shouldShow = window.pageYOffset > 300;
        
        if (shouldShow && !this.isVisible) {
            this.show();
        } else if (!shouldShow && this.isVisible) {
            this.hide();
        }
    }

    show() {
        this.isVisible = true;
        this.button.classList.add('visible');
    }

    hide() {
        this.isVisible = false;
        this.button.classList.remove('visible');
    }

    scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }
}



// =================================
// LIVE CHAT INTEGRATION
// =================================

class LiveChat {
    constructor() {
        this.chatButtons = document.querySelectorAll('#startLiveChat, [onclick*="startLiveChat"]');
        this.isInitialized = false;
    }

    init() {
        this.chatButtons.forEach(button => {
            button.addEventListener('click', (e) => {
                e.preventDefault();
                this.startChat();
            });
        });

        // Initialize chat widget if available
        this.initializeChatWidget();
    }

    startChat() {
        // Integration with chat service (Intercom, Zendesk, etc.)
        if (typeof Intercom !== 'undefined') {
            Intercom('show');
        } else if (typeof $zopim !== 'undefined') {
            $zopim.livechat.window.show();
        } else {
            // Fallback to contact form
            Utils.showToast('Chat is currently unavailable. Please use our contact form.');
            const contactSection = document.querySelector('#contact');
            if (contactSection) {
                Utils.scrollTo(contactSection, 80);
            }
        }
    }

    initializeChatWidget() {
        // Initialize chat widget based on available service
        if (!this.isInitialized) {
            // Example Intercom integration
            if (window.intercomSettings) {
                this.initializeIntercom();
            }
            this.isInitialized = true;
        }
    }

    initializeIntercom() {
        // Intercom integration example
        (function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',w.intercomSettings);}else{var d=document;var i=function(){i.c(arguments);};i.q=[];i.c=function(args){i.q.push(args);};w.Intercom=i;var l=function(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/YOUR_APP_ID';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);};if(document.readyState==='complete'){l();}else if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();
    }
}

// =================================
// ERROR HANDLING & ANALYTICS
// =================================

class ErrorHandler {
    constructor() {
        this.errorCount = 0;
        this.maxErrors = 10;
    }

    init() {
        // Global error handling
        window.addEventListener('error', (e) => this.handleError(e));
        window.addEventListener('unhandledrejection', (e) => this.handlePromiseRejection(e));
        
        // Console error override (for development)
        if (window.location.hostname !== 'localhost') {
            this.overrideConsole();
        }
    }

    handleError(event) {
        if (this.errorCount >= this.maxErrors) return;
        
        this.errorCount++;
        
        const error = {
            message: event.message,
            filename: event.filename,
            lineno: event.lineno,
            colno: event.colno,
            error: event.error?.stack,
            userAgent: navigator.userAgent,
            url: window.location.href,
            timestamp: new Date().toISOString()
        };

        console.error('JavaScript Error:', error);
        
        // Send to analytics/error tracking service
        this.reportError(error);
    }

    handlePromiseRejection(event) {
        const error = {
            type: 'unhandledrejection',
            reason: event.reason,
            userAgent: navigator.userAgent,
            url: window.location.href,
            timestamp: new Date().toISOString()
        };

        console.error('Unhandled Promise Rejection:', error);
        this.reportError(error);
    }

    reportError(error) {
        // Send error to tracking service (replace with your service)
        if (typeof gtag !== 'undefined') {
            gtag('event', 'exception', {
                'description': error.message || error.reason,
                'fatal': false
            });
        }
        
        // You can also send to your own error tracking service
        // fetch('/api/errors', {
        //     method: 'POST',
        //     headers: { 'Content-Type': 'application/json' },
        //     body: JSON.stringify(error)
        // });
    }

    overrideConsole() {
        const originalError = console.error;
        console.error = (...args) => {
            originalError.apply(console, args);
            this.reportError({
                type: 'console.error',
                message: args.join(' '),
                timestamp: new Date().toISOString()
            });
        };
    }
}

// =================================
// PERFORMANCE MONITORING
// =================================

class PerformanceMonitor {
    constructor() {
        this.metrics = {};
        this.isSupported = 'performance' in window;
    }

    init() {
        if (!this.isSupported) return;

        this.measurePageLoad();
        this.measureUserInteractions();
        
        // Report metrics after page load
        window.addEventListener('load', () => {
            setTimeout(() => this.reportMetrics(), 1000);
        });
    }

    measurePageLoad() {
        const navigation = performance.getEntriesByType('navigation')[0];
        if (navigation) {
            this.metrics.pageLoad = {
                dns: navigation.domainLookupEnd - navigation.domainLookupStart,
                tcp: navigation.connectEnd - navigation.connectStart,
                request: navigation.responseStart - navigation.requestStart,
                response: navigation.responseEnd - navigation.responseStart,
                domLoad: navigation.domContentLoadedEventEnd - navigation.navigationStart,
                windowLoad: navigation.loadEventEnd - navigation.navigationStart
            };
        }
    }

    measureUserInteractions() {
        // Measure First Input Delay (FID)
        if ('PerformanceObserver' in window) {
            new PerformanceObserver((entryList) => {
                for (const entry of entryList.getEntries()) {
                    if (entry.name === 'first-input') {
                        this.metrics.firstInputDelay = entry.processingStart - entry.startTime;
                    }
                }
            }).observe({ type: 'first-input', buffered: true });

            // Measure Cumulative Layout Shift (CLS)
            new PerformanceObserver((entryList) => {
                let clsValue = 0;
                for (const entry of entryList.getEntries()) {
                    if (!entry.hadRecentInput) {
                        clsValue += entry.value;
                    }
                }
                this.metrics.cumulativeLayoutShift = clsValue;
            }).observe({ type: 'layout-shift', buffered: true });
        }
    }

    reportMetrics() {
        if (typeof gtag !== 'undefined') {
            // Report to Google Analytics
            Object.keys(this.metrics).forEach(metric => {
                gtag('event', 'timing_complete', {
                    'name': metric,
                    'value': Math.round(this.metrics[metric])
                });
            });
        }

    }
}

// =================================
// MAIN APP INITIALIZATION
// =================================

class SkytronicLabsApp {
    constructor() {
        this.components = {};
        this.isInitialized = false;
    }

    async init() {
        if (this.isInitialized) return;

        try {
            // Initialize core components
            this.components.loadingScreen = new LoadingScreen();
            this.components.header = new Header();
            this.components.cookieConsent = new CookieConsent();
            this.components.animations = new Animations();
            this.components.formHandler = new FormHandler();
            this.components.faqAccordion = new FAQAccordion();
            this.components.backToTop = new BackToTop();
            this.components.liveChat = new LiveChat();
            this.components.errorHandler = new ErrorHandler();
            this.components.performanceMonitor = new PerformanceMonitor();

            // Initialize all components
            Object.values(this.components).forEach(component => {
                if (component && typeof component.init === 'function') {
                    component.init();
                }
            });

            this.setupGlobalEventListeners();
            this.handleInitialHashScroll();
            this.isInitialized = true;

        } catch (error) {
            console.error('Failed to initialize Skytronic Labs App:', error);
        }
    }

    setupGlobalEventListeners() {
        // Handle responsive changes
        window.addEventListener('resize', Utils.debounce(() => {
            this.handleResize();
        }, 250));

        // Handle visibility changes
        document.addEventListener('visibilitychange', () => {
            this.handleVisibilityChange();
        });

        // Handle online/offline status
        window.addEventListener('online', () => this.handleOnlineStatus(true));
        window.addEventListener('offline', () => this.handleOnlineStatus(false));

        // Smooth scroll for same-page hash links anywhere in the document
        document.addEventListener('click', (e) => {
            const anchor = e.target.closest('a[href^="#"]');
            if (!anchor) return;
            const href = anchor.getAttribute('href');
            if (!href || href.length <= 1) return;
            const target = document.querySelector(href);
            if (target) {
                e.preventDefault();
                Utils.scrollTo(target, 90);
            }
        });
    }

    handleInitialHashScroll() {
        const scrollToHash = () => {
            const hash = window.location.hash;
            if (!hash) return;
            const target = document.querySelector(hash);
            if (!target) return;
            // slight defer to allow layout/fonts to settle
            setTimeout(() => Utils.scrollTo(target, 90), 50);
        };

        if (document.readyState === 'complete') {
            scrollToHash();
        } else {
            window.addEventListener('load', scrollToHash, { once: true });
        }
        document.addEventListener('skytronic:loadingHidden', scrollToHash, { once: true });
        window.addEventListener('hashchange', () => scrollToHash());
    }

    handleResize() {
        // Refresh ScrollTrigger on resize
        if (typeof ScrollTrigger !== 'undefined') {
            ScrollTrigger.refresh();
        }

        // Update mobile menu state
        if (Utils.getCurrentBreakpoint() !== 'mobile' && this.components.header.isMenuOpen) {
            this.components.header.closeMobileMenu();
        }
    }

    handleVisibilityChange() {
        if (document.hidden) {
            // Page is hidden
        } else {
            // Page is visible
        }
    }

    handleOnlineStatus(isOnline) {
        if (isOnline) {
            Utils.showToast('Connection restored', 'success');
        } else {
            Utils.showToast('Connection lost. Some features may be unavailable.', 'error');
        }
    }

    destroy() {
        // Clean up components
        Object.values(this.components).forEach(component => {
            if (component && typeof component.destroy === 'function') {
                component.destroy();
            }
        });

        this.components = {};
        this.isInitialized = false;
    }
}

// =================================
// INITIALIZE APPLICATION
// =================================

// Initialize app when DOM is ready
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initializeApp);
} else {
    initializeApp();
}

async function initializeApp() {
    const app = new SkytronicLabsApp();
    await app.init();
    
    // Make app globally available for debugging
    window.SkytronicLabsApp = app;
}

// Export for module systems
if (typeof module !== 'undefined' && module.exports) {
    module.exports = { SkytronicLabsApp, Utils };
}