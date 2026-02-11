@extends('layouts.master')
@section('title')
    @lang('imprint.meta.title', ['app_name' => config('app.name')])
@endsection

@section('description')
    @lang('imprint.meta.description', ['app_name' => config('app.name')])
@endsection

@section('keywords')
    @lang('imprint.meta.keywords', ['app_name' => config('app.name')])
@endsection

@section('author')
    @lang('imprint.meta.author')
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/imprint.css') }}">
@endpush

@section('content')
<main>
    <!-- Hero Section -->
    <section class="imprint-hero">
        <div class="container">
            <div class="imprint-hero-content">
                <h1>@lang('imprint.hero.title')</h1>
                <p>@lang('imprint.hero.description')</p>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="imprint-card">
                    <!-- Card Header -->
                    <div class="imprint-header">
                        <div class="imprint-header-content">
                            <h2><i class="fas fa-scale-balanced"></i>@lang('imprint.header.title')</h2>
                        </div>
                    </div>

                    <!-- Company Information -->
                    <div class="info-section">
                        <div class="info-icon">
                            <i class="fas fa-building"></i>
                        </div>
                        <h3 class="info-title">@lang('imprint.sections.company.title')</h3>
                        <div class="info-content">
                            <p class="mb-2"><strong>@lang('imprint.sections.company.name')</strong></p>
                            <p class="mb-0">@lang('imprint.sections.company.description', ['app_name' => config('app.name')])</p>
                        </div>
                    </div>

                    <!-- Address -->
                    <div class="info-section">
                        <div class="info-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h3 class="info-title">@lang('imprint.sections.address.title')</h3>
                        <div class="info-content">
                            <p class="mb-1">@lang('imprint.sections.address.line1')</p>
                            <p class="mb-1">@lang('imprint.sections.address.line2')</p>
                            <p class="mb-0">@lang('imprint.sections.address.country')</p>
                        </div>
                    </div>

                    <!-- Contact Information -->
                    <div class="info-section">
                        <div class="info-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h3 class="info-title">@lang('imprint.sections.contact.title')</h3>
                        <div class="info-content">
                            <div class="contact-highlight">
                                <p class="mb-2">
                                    <strong>@lang('imprint.sections.contact.email_label'):</strong>
                                    <a href="mailto:@lang('imprint.sections.contact.email_address')">@lang('imprint.sections.contact.email_address')</a>
                                </p>
                                <p class="mb-0">
                                    <strong>@lang('imprint.sections.contact.phone_label'):</strong>
                                    <a href="tel:@lang('imprint.sections.contact.phone_number')">@lang('imprint.sections.contact.phone_number')</a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Legal Details -->
                    <div class="info-section">
                        <div class="info-icon">
                            <i class="fas fa-gavel"></i>
                        </div>
                        <h3 class="info-title">@lang('imprint.sections.legal.title')</h3>
                        <div class="info-content">
                            <p class="mb-2"><strong>@lang('imprint.sections.legal.commercial_register_label'):</strong> @lang('imprint.sections.legal.commercial_register')</p>
                            <p class="mb-0"><strong>@lang('imprint.sections.legal.vat_label'):</strong> @lang('imprint.sections.legal.vat_number')</p>
                        </div>
                    </div>

                    <!-- Professional Indemnity -->
                    <div class="info-section">
                        <div class="info-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3 class="info-title">@lang('imprint.sections.insurance.title')</h3>
                        <div class="info-content">
                            <p class="mb-2"><strong>@lang('imprint.sections.insurance.provider_label'):</strong> @lang('imprint.sections.insurance.provider')</p>
                            <p class="mb-2"><strong>@lang('imprint.sections.insurance.coverage_label'):</strong> @lang('imprint.sections.insurance.coverage')</p>
                            <p class="mb-0"><strong>@lang('imprint.sections.insurance.policy_label'):</strong> @lang('imprint.sections.insurance.policy_number')</p>
                        </div>
                    </div>

                    <!-- Disclaimer -->
                    <div class="info-section">
                        <div class="info-icon">
                            <i class="fas fa-exclamation-triangle"></i>
                        </div>
                        <h3 class="info-title">@lang('imprint.sections.disclaimer.title')</h3>
                        <div class="info-content">
                            <span class="legal-badge">@lang('imprint.sections.disclaimer.badge')</span>
                            <p class="mb-3">@lang('imprint.sections.disclaimer.paragraph1')</p>
                            <p class="mb-0">@lang('imprint.sections.disclaimer.paragraph2')</p>
                        </div>
                    </div>

                    <!-- External Links -->
                    <div class="info-section">
                        <div class="info-icon">
                            <i class="fas fa-external-link-alt"></i>
                        </div>
                        <h3 class="info-title">@lang('imprint.sections.external_links.title')</h3>
                        <div class="info-content">
                            <p class="mb-3">@lang('imprint.sections.external_links.paragraph1')</p>
                            <p class="mb-0">@lang('imprint.sections.external_links.paragraph2')</p>
                        </div>
                    </div>

                    <!-- Copyright -->
                    <div class="info-section">
                        <div class="info-icon">
                            <i class="fas fa-copyright"></i>
                        </div>
                        <h3 class="info-title">@lang('imprint.sections.copyright.title')</h3>
                        <div class="info-content">
                            <p class="mb-3">@lang('imprint.sections.copyright.notice', ['year' => date('Y'), 'app_name' => config('app.name')])</p>
                            <p class="mb-0">@lang('imprint.sections.copyright.description', ['app_name' => config('app.name')])</p>
                        </div>
                    </div>

                    <!-- Updates -->
                    <div class="info-section">
                        <div class="info-icon">
                            <i class="fas fa-sync-alt"></i>
                        </div>
                        <h3 class="info-title">@lang('imprint.sections.updates.title')</h3>
                        <div class="info-content">
                            <p class="mb-3">@lang('imprint.sections.updates.paragraph1')</p>
                            <p class="mb-1"><strong>@lang('imprint.sections.updates.last_updated_label'):</strong> {{ date('F j, Y') }}</p>
                            <p class="mb-0"><strong>@lang('imprint.sections.updates.effective_date_label'):</strong> @lang('imprint.sections.updates.effective_date')</p>
                        </div>
                    </div>

                    <!-- Back to Home -->
                    <div class="back-home-section">
                        <a href="{{ url('/') }}" class="btn-primary-custom">
                            <i class="fas fa-home"></i>@lang('imprint.back_home.button')
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Intersection Observer for animations
    if ('IntersectionObserver' in window) {
        const sections = document.querySelectorAll('.info-section');
        const sectionObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, {
            threshold: 0.1
        });

        sections.forEach(section => {
            sectionObserver.observe(section);
        });

        // Observe main card
        const imprintCard = document.querySelector('.imprint-card');
        const backHomeSection = document.querySelector('.back-home-section');

        const cardObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                }
            });
        }, {
            threshold: 0.1
        });

        if (imprintCard) cardObserver.observe(imprintCard);
        if (backHomeSection) cardObserver.observe(backHomeSection);
    }

    // Add ripple effect to button
    const backButton = document.querySelector('.btn-primary-custom');
    if (backButton) {
        backButton.addEventListener('click', function(e) {
            const rect = this.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;

            const ripple = document.createElement('span');
            ripple.style.left = x + 'px';
            ripple.style.top = y + 'px';
            ripple.classList.add('ripple');
            this.appendChild(ripple);

            setTimeout(() => ripple.remove(), 600);
        });

        // Add CSS for ripple effect
        const style = document.createElement('style');
        style.textContent = `
            .ripple {
                position: absolute;
                background: rgba(255, 255, 255, 0.7);
                border-radius: 50%;
                transform: scale(0);
                animation: ripple 0.6s linear;
                pointer-events: none;
                z-index: 1;
            }

            @keyframes ripple {
                to {
                    transform: scale(4);
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(style);
    }

    // Add page load animation
    document.body.style.opacity = '0';
    window.requestAnimationFrame(() => {
        document.body.style.transition = 'opacity 0.5s ease';
        document.body.style.opacity = '1';
    });

    // Highlight email and phone on hover
    const contactLinks = document.querySelectorAll('.contact-highlight a');
    contactLinks.forEach(link => {
        link.addEventListener('mouseenter', function() {
            this.style.textDecoration = 'none';
        });

        link.addEventListener('mouseleave', function() {
            this.style.textDecoration = 'none';
        });
    });
});
</script>
@endpush