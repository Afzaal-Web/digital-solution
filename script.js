// Mobile Navigation Toggle
const hamburger = document.querySelector('.hamburger');
const navMenu = document.querySelector('.nav-menu');

hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active');
    navMenu.classList.toggle('active');
});

// Close mobile menu when clicking on a link
document.querySelectorAll('.nav-link').forEach(n => n.addEventListener('click', () => {
    hamburger.classList.remove('active');
    navMenu.classList.remove('active');
}));

// Submenu toggle for mobile
document.querySelectorAll('.has-submenu .submenu-toggle').forEach(toggle => {
    toggle.addEventListener('click', (e) => {
        e.preventDefault();
        e.stopPropagation();
        const parent = toggle.closest('.has-submenu');
        parent.classList.toggle('open');
    });
});

// Hero Slider Functionality
const SLIDE_INTERVAL_MS = 12000; // autoplay interval
let currentSlideIndex = 0;
const slides = document.querySelectorAll('.slide');
const slidesTrack = document.querySelector('.slides-track');
const dots = document.querySelectorAll('.dot');
const totalSlides = slides.length;
const prevBtn = document.querySelector('.slider-prev');
const nextBtn = document.querySelector('.slider-next');
const heroSlider = document.querySelector('.hero-slider');

// Auto-slide functionality
function updateTrackPosition() {
    if (!slidesTrack) return;
    const offset = -currentSlideIndex * 100;
    slidesTrack.style.transform = `translateX(${offset}%)`;
}

function nextSlide() {
    dots[currentSlideIndex].classList.remove('active');
    currentSlideIndex = (currentSlideIndex + 1) % totalSlides;
    dots[currentSlideIndex].classList.add('active');
    updateTrackPosition();
}

function prevSlide() {
    dots[currentSlideIndex].classList.remove('active');
    currentSlideIndex = (currentSlideIndex - 1 + totalSlides) % totalSlides;
    dots[currentSlideIndex].classList.add('active');
    updateTrackPosition();
}

// Manual slide navigation (used by dots)
function currentSlide(n) {
    // n is 1-based from HTML
    clearInterval(slideInterval);
    dots[currentSlideIndex].classList.remove('active');
    currentSlideIndex = Math.max(0, Math.min(totalSlides - 1, n - 1));
    dots[currentSlideIndex].classList.add('active');
    updateTrackPosition();
    slideInterval = setInterval(nextSlide, SLIDE_INTERVAL_MS);
}

// Start auto-slide (change every 5 seconds)
let slideInterval = setInterval(nextSlide, SLIDE_INTERVAL_MS);

// Pause auto-slide on hover
heroSlider.addEventListener('mouseenter', () => {
    clearInterval(slideInterval);
});

// Resume auto-slide when mouse leaves
heroSlider.addEventListener('mouseleave', () => {
    slideInterval = setInterval(nextSlide, SLIDE_INTERVAL_MS);
});

// Arrow controls
if (prevBtn && nextBtn) {
    prevBtn.addEventListener('click', () => {
        clearInterval(slideInterval);
        prevSlide();
        slideInterval = setInterval(nextSlide, SLIDE_INTERVAL_MS);
    });
    nextBtn.addEventListener('click', () => {
        clearInterval(slideInterval);
        nextSlide();
        slideInterval = setInterval(nextSlide, SLIDE_INTERVAL_MS);
    });
}

// Drag support (mouse and touch)
let isDragging = false;
let startX = 0;
let deltaX = 0;
const dragThreshold = 60; // pixels to trigger slide change

function onDragStart(clientX) {
    isDragging = true;
    startX = clientX;
    deltaX = 0;
    heroSlider.classList.add('dragging');
    clearInterval(slideInterval);
}

function onDragMove(clientX) {
    if (!isDragging) return;
    deltaX = clientX - startX;
    // Optional: follow finger effect (small translate) on track for feedback
    if (slidesTrack) {
        const baseOffset = -currentSlideIndex * heroSlider.clientWidth;
        slidesTrack.style.transition = 'none';
        slidesTrack.style.transform = `translateX(${baseOffset + deltaX}px)`;
    }
}

function onDragEnd() {
    if (!isDragging) return;
    isDragging = false;
    heroSlider.classList.remove('dragging');

    if (Math.abs(deltaX) > dragThreshold) {
        if (deltaX < 0) {
            nextSlide();
        } else {
            prevSlide();
        }
    }
    // restore transition and snap to slide
    if (slidesTrack) {
        slidesTrack.style.transition = '';
        updateTrackPosition();
    }
    slideInterval = setInterval(nextSlide, SLIDE_INTERVAL_MS);
}

// Mouse events
heroSlider.addEventListener('mousedown', (e) => onDragStart(e.clientX));
window.addEventListener('mousemove', (e) => onDragMove(e.clientX));
window.addEventListener('mouseup', onDragEnd);

// Touch events
heroSlider.addEventListener('touchstart', (e) => onDragStart(e.touches[0].clientX), { passive: true });
heroSlider.addEventListener('touchmove', (e) => onDragMove(e.touches[0].clientX), { passive: true });
heroSlider.addEventListener('touchend', onDragEnd);

// Smooth scrolling for navigation links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            const headerHeight = document.querySelector('.header').offsetHeight;
            const targetPosition = target.offsetTop - headerHeight;
            
            window.scrollTo({
                top: targetPosition,
                behavior: 'smooth'
            });
        }
    });
});

// Navbar background change on scroll
window.addEventListener('scroll', () => {
    const header = document.querySelector('.header');
    if (window.scrollY > 100) {
        header.style.background = 'rgba(255, 255, 255, 0.98)';
        header.style.boxShadow = '0 2px 20px rgba(0, 0, 0, 0.1)';
    } else {
        header.style.background = 'rgba(255, 255, 255, 0.95)';
        header.style.boxShadow = 'none';
    }
});

// Intersection Observer for fade-in animations
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
        }
    });
}, observerOptions);

// Observe elements for fade-in animation
document.addEventListener('DOMContentLoaded', () => {
    const elementsToAnimate = document.querySelectorAll('.service-card, .portfolio-item, .about-text, .about-image, .contact-info, .contact-form');
    elementsToAnimate.forEach(el => {
        el.classList.add('fade-in');
        observer.observe(el);
    });
    updateTrackPosition();
});

// Contact form handling
const contactForm = document.querySelector('.contact-form');


// Email validation function
function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

// Notification system
function showNotification(message, type = 'info') {
    // Remove existing notifications
    const existingNotification = document.querySelector('.notification');
    if (existingNotification) {
        existingNotification.remove();
    }
    
    // Create notification element
    const notification = document.createElement('div');
    notification.className = `notification notification-${type}`;
    notification.textContent = message;
    
    // Add styles
    notification.style.cssText = `
        position: fixed;
        top: 100px;
        right: 20px;
        background: ${type === 'success' ? '#10b981' : type === 'error' ? '#ef4444' : '#2563eb'};
        color: white;
        padding: 15px 20px;
        border-radius: 10px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        z-index: 10000;
        font-weight: 500;
        max-width: 300px;
        transform: translateX(100%);
        transition: transform 0.3s ease;
    `;
    
    document.body.appendChild(notification);
    
    // Animate in
    setTimeout(() => {
        notification.style.transform = 'translateX(0)';
    }, 100);
    
    // Auto remove after 5 seconds
    setTimeout(() => {
        notification.style.transform = 'translateX(100%)';
        setTimeout(() => {
            if (notification.parentNode) {
                notification.parentNode.removeChild(notification);
            }
        }, 300);
    }, 5000);
}

// Portfolio item click handling
document.querySelectorAll('.portfolio-item').forEach(item => {
    item.addEventListener('click', function() {
        const overlay = this.querySelector('.portfolio-overlay');
        const title = overlay.querySelector('h3').textContent;
        const description = overlay.querySelector('p').textContent;
        
        showPortfolioModal(title, description, this.querySelector('img').src);
    });
});

// Portfolio modal
function showPortfolioModal(title, description, imageSrc) {
    // Remove existing modal
    const existingModal = document.querySelector('.portfolio-modal');
    if (existingModal) {
        existingModal.remove();
    }
    
    // Create modal
    const modal = document.createElement('div');
    modal.className = 'portfolio-modal';
    modal.innerHTML = `
        <div class="modal-overlay">
            <div class="modal-content">
                <span class="modal-close">&times;</span>
                <img src="${imageSrc}" alt="${title}">
                <div class="modal-info">
                    <h3>${title}</h3>
                    <p>${description}</p>
                </div>
            </div>
        </div>
    `;
    
    // Add modal styles
    modal.style.cssText = `
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.8);
        z-index: 10000;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
        opacity: 0;
        transition: opacity 0.3s ease;
    `;
    
    // Add content styles
    const style = document.createElement('style');
    style.textContent = `
        .modal-overlay {
            position: relative;
            max-width: 800px;
            width: 100%;
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        }
        
        .modal-content {
            position: relative;
        }
        
        .modal-content img {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }
        
        .modal-info {
            padding: 2rem;
        }
        
        .modal-info h3 {
            font-size: 1.5rem;
            font-weight: 600;
            color: #1f2937;
            margin-bottom: 1rem;
        }
        
        .modal-info p {
            color: #6b7280;
            line-height: 1.6;
        }
        
        .modal-close {
            position: absolute;
            top: 15px;
            right: 20px;
            font-size: 2rem;
            color: white;
            cursor: pointer;
            z-index: 1;
            background: rgba(0, 0, 0, 0.5);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.3s ease;
        }
        
        .modal-close:hover {
            background: rgba(0, 0, 0, 0.7);
        }
    `;
    
    document.head.appendChild(style);
    document.body.appendChild(modal);
    
    // Animate in
    setTimeout(() => {
        modal.style.opacity = '1';
    }, 100);
    
    // Close modal functionality
    const closeModal = () => {
        modal.style.opacity = '0';
        setTimeout(() => {
            if (modal.parentNode) {
                modal.parentNode.removeChild(modal);
            }
            if (style.parentNode) {
                style.parentNode.removeChild(style);
            }
        }, 300);
    };
    
    modal.querySelector('.modal-close').addEventListener('click', closeModal);
    modal.addEventListener('click', (e) => {
        if (e.target === modal) {
            closeModal();
        }
    });
    
    // Close on escape key
    const handleEscape = (e) => {
        if (e.key === 'Escape') {
            closeModal();
            document.removeEventListener('keydown', handleEscape);
        }
    };
    document.addEventListener('keydown', handleEscape);
}

// Loading animation
window.addEventListener('load', () => {
    document.body.classList.add('loaded');
});

// Add loading styles
const loadingStyle = document.createElement('style');
loadingStyle.textContent = `
    body:not(.loaded) {
        overflow: hidden;
    }
    
    body:not(.loaded)::before {
        content: '';
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #2563eb;
        z-index: 10000;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    body:not(.loaded)::after {
        content: '';
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 50px;
        height: 50px;
        border: 3px solid rgba(255, 255, 255, 0.3);
        border-top: 3px solid white;
        border-radius: 50%;
        animation: spin 1s linear infinite;
        z-index: 10001;
    }
    
    @keyframes spin {
        0% { transform: translate(-50%, -50%) rotate(0deg); }
        100% { transform: translate(-50%, -50%) rotate(360deg); }
    }
`;
document.head.appendChild(loadingStyle);

// Performance optimization: Lazy loading for images
if ('IntersectionObserver' in window) {
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src || img.src;
                img.classList.remove('lazy');
                imageObserver.unobserve(img);
            }
        });
    });

    document.querySelectorAll('img[data-src]').forEach(img => {
        imageObserver.observe(img);
    });
}

// Add smooth reveal animation for sections
const revealElements = document.querySelectorAll('.services, .portfolio, .about, .contact');
const revealObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, {
    threshold: 0.1,
    rootMargin: '0px 0px -100px 0px'
});

revealElements.forEach(el => {
    el.style.opacity = '0';
    el.style.transform = 'translateY(50px)';
    el.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
    revealObserver.observe(el);
});
