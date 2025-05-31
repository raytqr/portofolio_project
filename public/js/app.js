// DOM Content Loaded
document.addEventListener('DOMContentLoaded', function() {
    initializeApp();
});

function initializeApp() {
    initNavbar();
    initPortfolioFilter();
    initScrollEffects();
    initBackToTop();
    initSmoothScroll();
    initPortfolioScroll();
    initSkillCards();
}

// Navbar functionality
function initNavbar() {
    const navbar = document.getElementById('navbar');
    const navbarToggle = document.getElementById('navbarToggle');
    const navbarMenu = document.getElementById('navbarMenu');
    const navLinks = document.querySelectorAll('.nav-link');
    
    let lastScrollY = window.scrollY;
    let ticking = false;

    // Navbar scroll behavior
    function updateNavbar() {
        const currentScrollY = window.scrollY;
        
        // Hide/show navbar based on scroll direction
        if (currentScrollY > 100) {
            if (currentScrollY > lastScrollY && currentScrollY > 200) {
                navbar.classList.add('hidden');
            } else {
                navbar.classList.remove('hidden');
            }
        } else {
            navbar.classList.remove('hidden');
        }
        
        // Update active nav link based on section
        updateActiveNavLink();
        
        lastScrollY = currentScrollY;
        ticking = false;
    }

    function requestTick() {
        if (!ticking) {
            requestAnimationFrame(updateNavbar);
            ticking = true;
        }
    }

    window.addEventListener('scroll', requestTick);

    // Mobile menu toggle
    if (navbarToggle && navbarMenu) {
        navbarToggle.addEventListener('click', function() {
            navbarToggle.classList.toggle('active');
            navbarMenu.classList.toggle('active');
            document.body.classList.toggle('menu-open');
        });

        // Close menu when clicking nav links
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                navbarToggle.classList.remove('active');
                navbarMenu.classList.remove('active');
                document.body.classList.remove('menu-open');
            });
        });

        // Close menu when clicking outside
        document.addEventListener('click', function(e) {
            if (!navbar.contains(e.target)) {
                navbarToggle.classList.remove('active');
                navbarMenu.classList.remove('active');
                document.body.classList.remove('menu-open');
            }
        });
    }
}

// Update active navigation link based on current section
function updateActiveNavLink() {
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-link');
    
    let currentSection = '';
    
    sections.forEach(section => {
        const sectionTop = section.offsetTop - 100;
        const sectionHeight = section.offsetHeight;
        
        if (window.scrollY >= sectionTop && window.scrollY < sectionTop + sectionHeight) {
            currentSection = section.getAttribute('id');
        }
    });
    
    navLinks.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href') === `#${currentSection}`) {
            link.classList.add('active');
        }
    });
}

// Portfolio filter functionality
function initPortfolioFilter() {
    const filterBtns = document.querySelectorAll('.nav-btn');
    const portfolioItems = document.querySelectorAll('.portfolio-item');
    
    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const category = this.getAttribute('data-category');
            
            // Update active button
            filterBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            
            // Filter portfolio items
            portfolioItems.forEach(item => {
                const itemCategory = item.getAttribute('data-category');
                
                if (category === 'all' || itemCategory === category) {
                    item.style.display = 'block';
                    item.classList.remove('hidden');
                } else {
                    item.style.display = 'none';
                    item.classList.add('hidden');
                }
            });
            
            // Animate items
            setTimeout(() => {
                portfolioItems.forEach((item, index) => {
                    if (!item.classList.contains('hidden')) {
                        item.style.animation = `fadeInUp 0.6s ease forwards ${index * 0.1}s`;
                    }
                });
            }, 100);
        });
    });
}

// Portfolio horizontal scroll with stopper functionality
function initPortfolioScroll() {
    const scrollContainer = document.querySelector('.portfolio-scroll-container');
    const scrollLeftBtn = document.getElementById('scrollLeft');
    const scrollRightBtn = document.getElementById('scrollRight');
    
    if (!scrollContainer || !scrollLeftBtn || !scrollRightBtn) return;
    
    const scrollAmount = 360; // Width of one portfolio item + gap
    
    // Scroll left
    scrollLeftBtn.addEventListener('click', function() {
        scrollContainer.scrollBy({
            left: -scrollAmount,
            behavior: 'smooth'
        });
    });
    
    // Scroll right
    scrollRightBtn.addEventListener('click', function() {
        scrollContainer.scrollBy({
            left: scrollAmount,
            behavior: 'smooth'
        });
    });
    
    // Update scroll button visibility and functionality based on the scroll position
    function updateScrollButtons() {
        const isScrolledToStart = scrollContainer.scrollLeft <= 0;
        const isScrolledToEnd = scrollContainer.scrollLeft >= 
            scrollContainer.scrollWidth - scrollContainer.clientWidth;
        
        // Disable left button when at the start of the container
        if (isScrolledToStart) {
            scrollLeftBtn.style.opacity = '0.5';
            scrollLeftBtn.style.pointerEvents = 'none';  // Disable interaction
        } else {
            scrollLeftBtn.style.opacity = '1';
            scrollLeftBtn.style.pointerEvents = 'auto';  // Enable interaction
        }

        // Disable right button when at the end of the container
        if (isScrolledToEnd) {
            scrollRightBtn.style.opacity = '0.5';
            scrollRightBtn.style.pointerEvents = 'none';  // Disable interaction
        } else {
            scrollRightBtn.style.opacity = '1';
            scrollRightBtn.style.pointerEvents = 'auto';  // Enable interaction
        }
    }

    // Update scroll buttons visibility on scroll
    scrollContainer.addEventListener('scroll', updateScrollButtons);
    updateScrollButtons(); // Initial check when page loads
    
    // Handle touch/swipe support for mobile
    let isDown = false;
    let startX;
    let scrollLeft;

    scrollContainer.addEventListener('mousedown', (e) => {
        isDown = true;
        startX = e.pageX - scrollContainer.offsetLeft;
        scrollLeft = scrollContainer.scrollLeft;
    });

    scrollContainer.addEventListener('mouseleave', () => {
        isDown = false;
    });

    scrollContainer.addEventListener('mouseup', () => {
        isDown = false;
    });

    scrollContainer.addEventListener('mousemove', (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - scrollContainer.offsetLeft;
        const walk = (x - startX) * 2; // Adjust scroll speed here
        scrollContainer.scrollLeft = scrollLeft - walk;
    });
}


// Skill cards interaction
function initSkillCards() {
    const skillCards = document.querySelectorAll('.skill-card');
    
    skillCards.forEach((card, index) => {
        card.addEventListener('mouseenter', function() {
            skillCards.forEach(c => c.classList.remove('active'));
            this.classList.add('active');
        });
        
        // Auto-rotate active skill card
        if (index === 0) {
            setTimeout(() => {
                card.classList.add('active');
            }, 500);
        }
    });
}

// Scroll effects and animations
function initScrollEffects() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-in');
                
                // Animate children with delay
                const children = entry.target.querySelectorAll('.animate-child');
                children.forEach((child, index) => {
                    setTimeout(() => {
                        child.classList.add('animate-in');
                    }, index * 100);
                });
            }
        });
    }, observerOptions);
    
    // Observe sections for animation
    const sections = document.querySelectorAll('section');
    sections.forEach(section => {
        observer.observe(section);
    });
    
    // Observe individual elements
    const animateElements = document.querySelectorAll('.skill-card, .portfolio-item');
    animateElements.forEach(element => {
        element.classList.add('animate-child');
        observer.observe(element);
    });
}

// Back to top button
function initBackToTop() {
    const backToTopBtn = document.getElementById('backToTop');
    
    if (!backToTopBtn) return;
    
    function toggleBackToTop() {
        if (window.scrollY > 300) {
            backToTopBtn.classList.add('visible');
        } else {
            backToTopBtn.classList.remove('visible');
        }
    }
    
    window.addEventListener('scroll', toggleBackToTop);
    
    backToTopBtn.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
}

// Smooth scroll for anchor links
function initSmoothScroll() {
    const anchors = document.querySelectorAll('a[href^="#"]');
    
    anchors.forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);
            
            if (targetElement) {
                const offsetTop = targetElement.offsetTop - 80; // Account for fixed navbar
                
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
            }
        });
    });
}

// Utility function for debouncing
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

// Add animation CSS classes dynamically
const style = document.createElement('style');
style.textContent = `
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }
    
    .animate-child {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .animate-child.animate-in {
        opacity: 1;
        transform: translateY(0);
    }
    
    .menu-open {
        overflow: hidden;
    }
    
    .menu-open .navbar-menu {
        transform: translateY(0);
        opacity: 1;
        visibility: visible;
    }
`;
document.head.appendChild(style);

// Handle window resize
window.addEventListener('resize', debounce(() => {
    // Recalculate any size-dependent functionality
    const navbarMenu = document.getElementById('navbarMenu');
    const navbarToggle = document.getElementById('navbarToggle');
    
    if (window.innerWidth > 768) {
        navbarMenu?.classList.remove('active');
        navbarToggle?.classList.remove('active');
        document.body.classList.remove('menu-open');
    }
}, 250));

// Performance optimization: Preload images
function preloadImages() {
    const images = document.querySelectorAll('img[data-src]');
    
    const imageObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.removeAttribute('data-src');
                imageObserver.unobserve(img);
            }
        });
    });
    
    images.forEach(img => imageObserver.observe(img));
}

// Initialize preloading when DOM is ready
document.addEventListener('DOMContentLoaded', preloadImages);