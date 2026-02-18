@extends('layouts.master')
@section('title', __('term.title') . ' | ' . config('app.name'))
@section('description', __('term.description'))
@section('keywords', __('term.keywords'))
@section('author', __('term.author'))

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/terms.css') }}">
@endpush

@section('content')
<!-- Terms Header -->
<div class="terms-header">
    <div class="container">
        <div class="terms-header-content">
            <h1>@lang('term.header.title')</h1>
            <p class="lead">@lang('term.header.subtitle')</p>
            <div class="last-updated">
                <i class="fas fa-calendar-alt me-2"></i>@lang('term.header.last_updated') {{ date('F j, Y') }}
            </div>
        </div>
    </div>
</div>

<!-- Main Content -->
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <!-- Main Terms Card -->
            <div class="card terms-card">
                <!-- Card Header -->
                <div class="card-header terms-card-header">
                    <i class="fas fa-balance-scale terms-icon"></i>
                    <h2>@lang('term.card.title')</h2>
                </div>

                <!-- Card Body -->
                <div class="card-body terms-card-body">
                    <!-- Information Alert -->
                    <div class="alert terms-alert">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-info-circle me-3"></i>
                            <div>
                                <strong>@lang('term.alert.title')</strong> @lang('term.alert.message')
                            </div>
                        </div>
                    </div>

                    <!-- Terms Sections -->
                    <div class="terms-content">
                        <!-- Acceptance of Terms -->
                        <section class="terms-section">
                            <div class="section-header">
                                <div class="section-icon primary">
                                    <i class="fas fa-check-circle"></i>
                                </div>
                                <h3 class="section-title">1. @lang('term.section1.title')</h3>
                            </div>
                            <div class="section-content">
                                <p>@lang('term.section1.content', ['app_name' => config('app.name')])</p>
                                <div class="info-card">
                                    <p class="mb-0"><i class="fas fa-exclamation-triangle me-2"></i> @lang('term.section1.warning')</p>
                                </div>
                            </div>
                        </section>

                        <!-- User Responsibilities -->
                        <section class="terms-section">
                            <div class="section-header">
                                <div class="section-icon success">
                                    <i class="fas fa-user-lock"></i>
                                </div>
                                <h3 class="section-title">2. @lang('term.section2.title')</h3>
                            </div>
                            <div class="section-content">
                                <p>@lang('term.section2.intro')</p>
                                <ul>
                                    <li>@lang('term.section2.points.maintaining_account')</li>
                                    <li>@lang('term.section2.points.account_activities')</li>
                                    <li>@lang('term.section2.points.accurate_information')</li>
                                    <li>@lang('term.section2.points.complying_laws')</li>
                                    <li>@lang('term.section2.points.third_party_rights')</li>
                                </ul>
                                <div class="warning-card">
                                    <p class="mb-0"><i class="fas fa-shield-alt me-2"></i> @lang('term.section2.notification', ['email' => 'support@lilydecors.com'])</p>
                                </div>
                            </div>
                        </section>

                        <!-- Prohibited Activities -->
                        <section class="terms-section">
                            <div class="section-header">
                                <div class="section-icon danger">
                                    <i class="fas fa-ban"></i>
                                </div>
                                <h3 class="section-title">3. @lang('term.section3.title')</h3>
                            </div>
                            <div class="section-content">
                                <p>@lang('term.section3.intro')</p>

                                <div class="activity-grid">
                                    <div class="activity-card">
                                        <i class="fas fa-gavel"></i>
                                        <h5>@lang('term.section3.activities.illegal.title')</h5>
                                        <p>@lang('term.section3.activities.illegal.description')</p>
                                    </div>
                                    <div class="activity-card">
                                        <i class="fas fa-user-secret"></i>
                                        <h5>@lang('term.section3.activities.unauthorized_access.title')</h5>
                                        <p>@lang('term.section3.activities.unauthorized_access.description')</p>
                                    </div>
                                    <div class="activity-card">
                                        <i class="fas fa-bug"></i>
                                        <h5>@lang('term.section3.activities.harmful_content.title')</h5>
                                        <p>@lang('term.section3.activities.harmful_content.description')</p>
                                    </div>
                                    <div class="activity-card">
                                        <i class="fas fa-network-wired"></i>
                                        <h5>@lang('term.section3.activities.service_disruption.title')</h5>
                                        <p>@lang('term.section3.activities.service_disruption.description')</p>
                                    </div>
                                    <div class="activity-card">
                                        <i class="fas fa-robot"></i>
                                        <h5>@lang('term.section3.activities.automated_access.title')</h5>
                                        <p>@lang('term.section3.activities.automated_access.description')</p>
                                    </div>
                                    <div class="activity-card">
                                        <i class="fas fa-chart-line"></i>
                                        <h5>@lang('term.section3.activities.commercial_use.title')</h5>
                                        <p>@lang('term.section3.activities.commercial_use.description')</p>
                                    </div>
                                </div>

                                <div class="warning-card">
                                    <p class="mb-0"><i class="fas fa-exclamation-triangle me-2"></i> @lang('term.section3.warning')</p>
                                </div>
                            </div>
                        </section>

                        <!-- Intellectual Property -->
                        <section class="terms-section">
                            <div class="section-header">
                                <div class="section-icon warning">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                                <h3 class="section-title">4. @lang('term.section4.title')</h3>
                            </div>
                            <div class="section-content">
                                <p>@lang('term.section4.content', ['app_name' => config('app.name')])</p>

                                <div class="highlight-box">
                                    <p class="mb-0"><i class="fas fa-lightbulb text-warning me-2"></i> @lang('term.section4.protected')</p>
                                </div>

                                <p>@lang('term.section4.restrictions')</p>
                                <ul>
                                    <li>@lang('term.section4.restriction_points.reproduce')</li>
                                    <li>@lang('term.section4.restriction_points.modify')</li>
                                    <li>@lang('term.section4.restriction_points.remove_notices')</li>
                                    <li>@lang('term.section4.restriction_points.unauthorized_use')</li>
                                </ul>
                            </div>
                        </section>

                        <!-- Disclaimer of Warranties -->
                        <section class="terms-section">
                            <div class="section-header">
                                <div class="section-icon danger">
                                    <i class="fas fa-exclamation-circle"></i>
                                </div>
                                <h3 class="section-title">5. @lang('term.section5.title')</h3>
                            </div>
                            <div class="section-content">
                                <div class="warning-card">
                                    <p class="mb-0"><i class="fas fa-info-circle me-2"></i> @lang('term.section5.content')</p>
                                </div>
                                <p class="mt-3">@lang('term.section5.guarantees_intro')</p>
                                <ul>
                                    <li>@lang('term.section5.guarantees.uninterrupted')</li>
                                    <li>@lang('term.section5.guarantees.errors_corrected')</li>
                                    <li>@lang('term.section5.guarantees.virus_free')</li>
                                    <li>@lang('term.section5.guarantees.meet_requirements')</li>
                                </ul>
                                <p><strong>@lang('term.section5.risk')</strong></p>
                            </div>
                        </section>

                        <!-- Limitation of Liability -->
                        <section class="terms-section">
                            <div class="section-header">
                                <div class="section-icon info">
                                    <i class="fas fa-hand-paper"></i>
                                </div>
                                <h3 class="section-title">6. @lang('term.section6.title')</h3>
                            </div>
                            <div class="section-content">
                                <p>@lang('term.section6.content', ['app_name' => config('app.name')])</p>
                                <ul>
                                    <li>@lang('term.section6.damages.loss_profits')</li>
                                    <li>@lang('term.section6.damages.loss_use')</li>
                                    <li>@lang('term.section6.damages.unauthorized_access')</li>
                                    <li>@lang('term.section6.damages.third_party_content')</li>
                                </ul>

                                <div class="highlight-box">
                                    <h5 class="h6 mb-2 fw-semibold">@lang('term.section6.liability_limit')</h5>
                                    <div class="d-flex align-items-center flex-wrap">
                                        <span class="liability-badge">
                                            <i class="fas fa-dollar-sign me-1"></i>100
                                        </span>
                                        <span class="small">@lang('term.section6.liability_amount')</span>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Governing Law -->
                        <section class="terms-section">
                            <div class="section-header">
                                <div class="section-icon secondary">
                                    <i class="fas fa-globe-americas"></i>
                                </div>
                                <h3 class="section-title">7. @lang('term.section7.title')</h3>
                            </div>
                            <div class="section-content">
                                <p>@lang('term.section7.content', ['country' => 'united states of america'])</p>

                                <div class="info-card">
                                    <div class="d-flex">
                                        <i class="fas fa-gavel me-3 mt-1" style="color: var(--primary);"></i>
                                        <div>
                                            <p class="mb-1 fw-semibold">@lang('term.section7.jurisdiction_title')</p>
                                            <p class="mb-0 small">@lang('term.section7.jurisdiction_content', ['jurisdiction' => '[Your Jurisdiction]'])</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Changes to Terms -->
                        <section class="terms-section">
                            <div class="section-header">
                                <div class="section-icon warning">
                                    <i class="fas fa-sync-alt"></i>
                                </div>
                                <h3 class="section-title">8. @lang('term.section8.title')</h3>
                            </div>
                            <div class="section-content">
                                <div class="warning-card">
                                    <div class="d-flex">
                                        <i class="fas fa-bell me-3 mt-1" style="color: #ffc107;"></i>
                                        <div>
                                            <p class="mb-1 fw-semibold">@lang('term.section8.content')</p>
                                            <p class="mb-0 small">@lang('term.section8.modification_notice')</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Contact Information -->
                        <section class="terms-section">
                            <div class="section-header">
                                <div class="section-icon primary">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <h3 class="section-title">9. @lang('term.section9.title')</h3>
                            </div>
                            <div class="section-content">
                                <p>@lang('term.section9.intro')</p>

                                <div class="contact-buttons">
                                    <a href="mailto:contact@lilydecors.com" class="contact-btn">
                                        <i class="fas fa-envelope me-2"></i>@lang('term.section9.buttons.email')
                                    </a>
                                    <a href="{{ url('contact') }}" class="contact-btn">
                                        <i class="fas fa-comment-alt me-2"></i>@lang('term.section9.buttons.contact_form')
                                    </a>
                                    <a href="#" class="contact-btn">
                                        <i class="fas fa-map-marker-alt me-2"></i>@lang('term.section9.buttons.visit_office')
                                    </a>
                                </div>

                                <div class="info-card mt-3">
                                    <p class="mb-0"><i class="fas fa-clock me-2"></i> @lang('term.section9.response_time')</p>
                                </div>
                            </div>
                        </section>
                    </div>

                    <!-- Action Buttons -->
                    <div class="action-buttons">
                        <a href="{{ url(app()->getLocale() . '/') }}" class="home-btn">
                            <i class="fas fa-home me-2"></i>@lang('term.actions.back_home')
                        </a>
                        <button onclick="window.print()" class="print-btn">
                            <i class="fas fa-print me-2"></i>@lang('term.actions.print_terms')
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Add smooth animations to sections
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

        // Observe all terms sections
        document.querySelectorAll('.terms-section').forEach(section => {
            section.style.opacity = '0';
            section.style.transform = 'translateY(30px)';
            section.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(section);
        });

        // Smooth scroll when clicking section headers
        document.querySelectorAll('.section-header').forEach(header => {
            header.addEventListener('click', function() {
                const section = this.parentElement;
                section.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            });
        });

        // Print functionality
        const printBtn = document.querySelector('.print-btn');
        if (printBtn) {
            printBtn.addEventListener('click', function() {
                window.print();
            });
        }

        // Add hover effects to activity cards
        document.querySelectorAll('.activity-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px)';
            });
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });
    });
</script>
@endpush