@extends('layouts.master')
@section('title', 'Affiliate Disclosure | LilyDecors - Home Decor & Design Inspiration')
@section('description', 'Learn about our affiliate disclosure policy. We believe in transparency about how we earn commissions through affiliate links on our home decor blog.')
@section('keywords', 'affiliate disclosure, affiliate links, commissions, transparency, policy, home decor blog')
@section('author', 'LilyDecors')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/affiliate-disclosure.css') }}">
@endpush

@section('content')
<div class="affiliate-content">
    <!-- Breadcrumb -->
    <nav class="breadcrumb-affiliate">
        <a href="/"><i class="fas fa-home"></i> Home</a>
        <span class="mx-2">/</span>
        <span class="active">Affiliate Disclosure</span>
    </nav>

    <!-- Hero Section -->
    <section class="affiliate-hero">
        <h1>Affiliate Disclosure</h1>
        <p class="hero-subtitle">Transparency and trust are the foundation of our relationship with you. Here's everything you need to know about how we operate.</p>
    </section>

    <!-- Main Disclosure Section -->
    <section class="affiliate-section">
        <h2 class="section-title">Our Transparency Promise</h2>
        <div class="section-content">
            <p>At LilyDecors, we believe in complete transparency with our readers. This website participates in various affiliate marketing programs, which means we may earn commissions on purchases made through our links to retailer sites.</p>
            
            <div class="icon-section">
                <div class="icon-box">
                    <i class="fas fa-handshake"></i>
                </div>
                <div class="icon-content">
                    <p><strong>Our Commitment:</strong> We only recommend products and services that we genuinely believe will add value to your home decor journey. Every product featured on LilyDecors goes through our rigorous review process before being shared with you.</p>
                </div>
            </div>

            <div class="icon-section">
                <div class="icon-box">
                    <i class="fas fa-star"></i>
                </div>
                <div class="icon-content">
                    <p><strong>No Extra Cost to You:</strong> When you use our affiliate links to make a purchase, the price you pay remains exactly the same. The commission we earn comes directly from the retailer as a thank-you for referring you.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Important Notice -->
    <div class="important-box">
        <h3 class="important-title"><i class="fas fa-exclamation-triangle"></i> Important Notice</h3>
        <p>All content on LilyDecors, including product recommendations and reviews, is created based on our honest opinions and experiences. Affiliate relationships do not influence our editorial content – if we don't love it, we don't recommend it.</p>
    </div>

    <!-- How It Works -->
    <section class="affiliate-section">
        <h2 class="section-title">How Affiliate Links Work</h2>
        <div class="section-content">
            <p>When you click on an affiliate link on our site, a small tracking cookie is placed in your browser. This cookie tells the retailer that you came from LilyDecors, and if you make a purchase within their specified time frame (usually 24-48 hours), we earn a small commission.</p>
            
            <div class="principles-grid">
                <div class="principle-card">
                    <i class="fas fa-link principle-icon"></i>
                    <h3>Tracking Links</h3>
                    <p>Special links that track referrals without compromising your privacy or security</p>
                </div>
                
                <div class="principle-card">
                    <i class="fas fa-cookie principle-icon"></i>
                    <h3>Session Cookies</h3>
                    <p>Temporary tracking that doesn't store personal information</p>
                </div>
                
                <div class="principle-card">
                    <i class="fas fa-shopping-cart principle-icon"></i>
                    <h3>Commission Earned</h3>
                    <p>Small percentage from retailers, never added to your purchase price</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Principles -->
    <section class="affiliate-section">
        <h2 class="section-title">Our Guiding Principles</h2>
        <div class="section-content">
            <div class="principles-grid">
                <div class="principle-card">
                    <i class="fas fa-balance-scale principle-icon"></i>
                    <h3>Honesty First</h3>
                    <p>We provide honest reviews and only recommend products we truly believe in</p>
                </div>
                
                <div class="principle-card">
                    <i class="fas fa-eye principle-icon"></i>
                    <h3>Full Transparency</h3>
                    <p>Clear disclosure of all affiliate relationships and potential commissions</p>
                </div>
                
                <div class="principle-card">
                    <i class="fas fa-user-shield principle-icon"></i>
                    <h3>Reader-First Approach</h3>
                    <p>Your interests and experience always come before potential earnings</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <h2 class="section-title" style="text-align: center; margin-bottom: 40px;">Frequently Asked Questions</h2>
        
        <div class="faq-item" onclick="toggleFAQ(this)">
            <div class="faq-question">
                Does using affiliate links cost me more?
                <span class="faq-toggle">+</span>
            </div>
            <div class="faq-answer">
                <p>Absolutely not! The price you pay remains exactly the same whether you use our affiliate link or go directly to the retailer. The commission comes from the retailer's marketing budget, not from your purchase.</p>
            </div>
        </div>
        
        <div class="faq-item" onclick="toggleFAQ(this)">
            <div class="faq-question">
                Do affiliate relationships influence your reviews?
                <span class="faq-toggle">+</span>
            </div>
            <div class="faq-answer">
                <p>No. We maintain strict editorial independence. If we don't genuinely love a product, we won't recommend it, regardless of potential commissions. Our reputation and your trust are far more valuable than any affiliate commission.</p>
            </div>
        </div>
        
        <div class="faq-item" onclick="toggleFAQ(this)">
            <div class="faq-question">
                How do affiliate commissions support LilyDecors?
                <span class="faq-toggle">+</span>
            </div>
            <div class="faq-answer">
                <p>Affiliate commissions help us maintain and improve LilyDecors. They cover hosting costs, content creation, product testing, and allow us to continue providing free, high-quality home decor content to our readers.</p>
            </div>
        </div>
        
        <div class="faq-item" onclick="toggleFAQ(this)">
            <div class="faq-question">
                Are all links on your site affiliate links?
                <span class="faq-toggle">+</span>
            </div>
            <div class="faq-answer">
                <p>No. We include a mix of affiliate and non-affiliate links. We always strive to provide the most helpful resources, regardless of whether they're affiliate links or not.</p>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <h3>Your Trust Matters to Us</h3>
        <p>We're committed to maintaining the highest standards of transparency and integrity. If you have any questions about our affiliate relationships, we're here to help.</p>
        <div class="cta-buttons">
            <a href="/contact" class="cta-btn primary">
                <i class="fas fa-envelope me-2"></i>Contact Us
            </a>
            <a href="/privacy-policy" class="cta-btn secondary">
                <i class="fas fa-shield-alt me-2"></i>Privacy Policy
            </a>
        </div>
    </section>
</div>
@endsection

@push('scripts')
<script>
    // FAQ Toggle Functionality
    function toggleFAQ(element) {
        // Close all other FAQ items
        document.querySelectorAll('.faq-item').forEach(item => {
            if (item !== element) {
                item.classList.remove('active');
            }
        });
        
        // Toggle current FAQ item
        element.classList.toggle('active');
    }

    // Add ripple effect to buttons
    document.addEventListener('click', function(e) {
        if (e.target.closest('.cta-btn')) {
            const btn = e.target.closest('.cta-btn');
            const ripple = document.createElement('span');
            const rect = btn.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = e.clientX - rect.left - size / 2;
            const y = e.clientY - rect.top - size / 2;
            
            ripple.style.cssText = `
                position: absolute;
                border-radius: 50%;
                background: rgba(255, 255, 255, 0.6);
                transform: scale(0);
                animation: ripple 0.6s linear;
                width: ${size}px;
                height: ${size}px;
                top: ${y}px;
                left: ${x}px;
                pointer-events: none;
            `;
            
            btn.style.position = 'relative';
            btn.style.overflow = 'hidden';
            btn.appendChild(ripple);
            
            setTimeout(() => ripple.remove(), 600);
        }
    });

    // Add CSS for ripple animation
    const style = document.createElement('style');
    style.textContent = `
        @keyframes ripple {
            to {
                transform: scale(4);
                opacity: 0;
            }
        }
    `;
    document.head.appendChild(style);

    // Animate sections on scroll
    document.addEventListener('DOMContentLoaded', function() {
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe all sections
        document.querySelectorAll('.affiliate-section, .faq-section, .cta-section').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(el);
        });
    });
</script>
@endpush