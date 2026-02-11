@extends('layouts.master')
@section('title')
    @lang('affiliate.title')
@endsection

@section('description')
    @lang('affiliate.description')
@endsection

@section('keywords')
    @lang('affiliate.keywords')
@endsection

@section('author', config('app.name'))

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/affiliate-disclosure.css') }}">
@endpush

@section('content')
<div class="affiliate-content">
    <!-- Breadcrumb -->
    <nav class="breadcrumb-affiliate">
        <a href="/"><i class="fas fa-home"></i> @lang('common.home')</a>
        <span class="mx-2">/</span>
        <span class="active">@lang('affiliate.breadcrumb')</span>
    </nav>

    <!-- Hero Section -->
    <section class="affiliate-hero">
        <h1>@lang('affiliate.hero.title')</h1>
        <p class="hero-subtitle">@lang('affiliate.hero.subtitle')</p>
    </section>

    <!-- Main Disclosure Section -->
    <section class="affiliate-section">
        <h2 class="section-title">@lang('affiliate.transparency.title')</h2>
        <div class="section-content">
            <p>@lang('affiliate.transparency.intro', ['app_name' => config('app.name')])</p>
            
            <div class="icon-section">
                <div class="icon-box">
                    <i class="fas fa-handshake"></i>
                </div>
                <div class="icon-content">
                    <p><strong>@lang('affiliate.transparency.commitment.title'):</strong> @lang('affiliate.transparency.commitment.description', ['app_name' => config('app.name')])</p>
                </div>
            </div>

            <div class="icon-section">
                <div class="icon-box">
                    <i class="fas fa-star"></i>
                </div>
                <div class="icon-content">
                    <p><strong>@lang('affiliate.transparency.no_cost.title'):</strong> @lang('affiliate.transparency.no_cost.description', ['app_name' => config('app.name')])</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Important Notice -->
    <div class="important-box">
        <h3 class="important-title"><i class="fas fa-exclamation-triangle"></i> @lang('affiliate.important.title')</h3>
        <p>@lang('affiliate.important.description', ['app_name' => config('app.name')])</p>
    </div>

    <!-- How It Works -->
    <section class="affiliate-section">
        <h2 class="section-title">@lang('affiliate.how_it_works.title')</h2>
        <div class="section-content">
            <p>@lang('affiliate.how_it_works.description', ['app_name' => config('app.name')])</p>
            
            <div class="principles-grid">
                <div class="principle-card">
                    <i class="fas fa-link principle-icon"></i>
                    <h3>@lang('affiliate.how_it_works.tracking_links.title')</h3>
                    <p>@lang('affiliate.how_it_works.tracking_links.description')</p>
                </div>
                
                <div class="principle-card">
                    <i class="fas fa-cookie principle-icon"></i>
                    <h3>@lang('affiliate.how_it_works.session_cookies.title')</h3>
                    <p>@lang('affiliate.how_it_works.session_cookies.description')</p>
                </div>
                
                <div class="principle-card">
                    <i class="fas fa-shopping-cart principle-icon"></i>
                    <h3>@lang('affiliate.how_it_works.commission_earned.title')</h3>
                    <p>@lang('affiliate.how_it_works.commission_earned.description')</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Principles -->
    <section class="affiliate-section">
        <h2 class="section-title">@lang('affiliate.principles.title')</h2>
        <div class="section-content">
            <div class="principles-grid">
                <div class="principle-card">
                    <i class="fas fa-balance-scale principle-icon"></i>
                    <h3>@lang('affiliate.principles.honesty.title')</h3>
                    <p>@lang('affiliate.principles.honesty.description')</p>
                </div>
                
                <div class="principle-card">
                    <i class="fas fa-eye principle-icon"></i>
                    <h3>@lang('affiliate.principles.transparency.title')</h3>
                    <p>@lang('affiliate.principles.transparency.description')</p>
                </div>
                
                <div class="principle-card">
                    <i class="fas fa-user-shield principle-icon"></i>
                    <h3>@lang('affiliate.principles.reader_first.title')</h3>
                    <p>@lang('affiliate.principles.reader_first.description')</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <h2 class="section-title" style="text-align: center; margin-bottom: 40px;">@lang('affiliate.faq.title')</h2>
        
        <div class="faq-item" onclick="toggleFAQ(this)">
            <div class="faq-question">
                @lang('affiliate.faq.question1.question')
                <span class="faq-toggle">+</span>
            </div>
            <div class="faq-answer">
                <p>@lang('affiliate.faq.question1.answer')</p>
            </div>
        </div>
        
        <div class="faq-item" onclick="toggleFAQ(this)">
            <div class="faq-question">
                @lang('affiliate.faq.question2.question')
                <span class="faq-toggle">+</span>
            </div>
            <div class="faq-answer">
                <p>@lang('affiliate.faq.question2.answer', ['app_name' => config('app.name')])</p>
            </div>
        </div>
        
        <div class="faq-item" onclick="toggleFAQ(this)">
            <div class="faq-question">
                @lang('affiliate.faq.question3.question', ['app_name' => config('app.name')])
                <span class="faq-toggle">+</span>
            </div>
            <div class="faq-answer">
                <p>@lang('affiliate.faq.question3.answer', ['app_name' => config('app.name')])</p>
            </div>
        </div>
        
        <div class="faq-item" onclick="toggleFAQ(this)">
            <div class="faq-question">
                @lang('affiliate.faq.question4.question')
                <span class="faq-toggle">+</span>
            </div>
            <div class="faq-answer">
                <p>@lang('affiliate.faq.question4.answer')</p>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <h3>@lang('affiliate.cta.title')</h3>
        <p>@lang('affiliate.cta.description')</p>
        <div class="cta-buttons">
            <a href="/contact" class="cta-btn primary">
                <i class="fas fa-envelope me-2"></i>@lang('common.contact_us')
            </a>
            <a href="/privacy-policy" class="cta-btn secondary">
                <i class="fas fa-shield-alt me-2"></i>@lang('common.privacy_policy')
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