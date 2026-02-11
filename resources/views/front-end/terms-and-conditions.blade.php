@extends('layouts.master')
@section('title', '@lang('common.terms_and_conditions') | ' . config('app.name'))
@section('description', 'Read our terms and conditions to understand your rights and responsibilities while using our services.')
@section('keywords', 'terms, conditions, user agreement')
@section('author', 'John Doe')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/terms.css') }}">
@endpush

@section('content')
<!-- Terms Header -->
<div class="terms-header">
    <div class="container">
        <div class="terms-header-content">
            <h1>@lang('common.terms_and_conditions')</h1>
            <p class="lead">@lang('common.understand_your_rights')</p>
            <div class="last-updated">
                <i class="fas fa-calendar-alt me-2"></i>@lang('common.last_updated_on') {{ date('F j, Y') }}
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
                    <h2>@lang('common.legal_agreement_user_terms')</h2>
                </div>

                <!-- Card Body -->
                <div class="card-body terms-card-body">
                    <!-- Information Alert -->
                    <div class="alert terms-alert">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-info-circle me-3"></i>
                            <div>
                                <strong>@lang('common.important'):</strong> @lang('common.by_accessing_our_services')
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
                                <h3 class="section-title">1. @lang('common.acceptance_of_terms')</h3>
                            </div>
                            <div class="section-content">
                                <p>@lang('common.by_accessing_our_website', ['app_name' => config('app.name')])</p>
                                <div class="info-card">
                                    <p class="mb-0"><i class="fas fa-exclamation-triangle me-2"></i> @lang('common.if_you_disagree')</p>
                                </div>
                            </div>
                        </section>

                        <!-- User Responsibilities -->
                        <section class="terms-section">
                            <div class="section-header">
                                <div class="section-icon success">
                                    <i class="fas fa-user-lock"></i>
                                </div>
                                <h3 class="section-title">2. @lang('common.user_responsibilities')</h3>
                            </div>
                            <div class="section-content">
                                <p>@lang('common.as_a_user')</p>
                                <ul>
                                    <li>@lang('common.maintaining_account_security')</li>
                                    <li>@lang('common.account_activities')</li>
                                    <li>@lang('common.accurate_information')</li>
                                    <li>@lang('common.complying_with_laws')</li>
                                    <li>@lang('common.not_violating_rights')</li>
                                </ul>
                                <div class="warning-card">
                                    <p class="mb-0"><i class="fas fa-shield-alt me-2"></i> @lang('common.notify_unauthorized_access', ['email' => 'support@lilydecors.com'])</p>
                                </div>
                            </div>
                        </section>

                        <!-- Prohibited Activities -->
                        <section class="terms-section">
                            <div class="section-header">
                                <div class="section-icon danger">
                                    <i class="fas fa-ban"></i>
                                </div>
                                <h3 class="section-title">3. @lang('common.prohibited_activities')</h3>
                            </div>
                            <div class="section-content">
                                <p>@lang('common.when_using_services')</p>

                                <div class="activity-grid">
                                    <div class="activity-card">
                                        <i class="fas fa-gavel"></i>
                                        <h5>@lang('common.illegal_activities')</h5>
                                        <p>@lang('common.illegal_activities_desc')</p>
                                    </div>
                                    <div class="activity-card">
                                        <i class="fas fa-user-secret"></i>
                                        <h5>@lang('common.unauthorized_access')</h5>
                                        <p>@lang('common.unauthorized_access_desc')</p>
                                    </div>
                                    <div class="activity-card">
                                        <i class="fas fa-bug"></i>
                                        <h5>@lang('common.harmful_content')</h5>
                                        <p>@lang('common.harmful_content_desc')</p>
                                    </div>
                                    <div class="activity-card">
                                        <i class="fas fa-network-wired"></i>
                                        <h5>@lang('common.service_disruption')</h5>
                                        <p>@lang('common.service_disruption_desc')</p>
                                    </div>
                                    <div class="activity-card">
                                        <i class="fas fa-robot"></i>
                                        <h5>@lang('common.automated_access')</h5>
                                        <p>@lang('common.automated_access_desc')</p>
                                    </div>
                                    <div class="activity-card">
                                        <i class="fas fa-chart-line"></i>
                                        <h5>@lang('common.commercial_use')</h5>
                                        <p>@lang('common.commercial_use_desc')</p>
                                    </div>
                                </div>

                                <div class="warning-card">
                                    <p class="mb-0"><i class="fas fa-exclamation-triangle me-2"></i> @lang('common.violation_consequences')</p>
                                </div>
                            </div>
                        </section>

                        <!-- Intellectual Property -->
                        <section class="terms-section">
                            <div class="section-header">
                                <div class="section-icon warning">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                                <h3 class="section-title">4. @lang('common.intellectual_property')</h3>
                            </div>
                            <div class="section-content">
                                <p>@lang('common.intellectual_property_desc', ['app_name' => config('app.name')])</p>

                                <div class="highlight-box">
                                    <p class="mb-0"><i class="fas fa-lightbulb text-warning me-2"></i> @lang('common.protected_materials')</p>
                                </div>

                                <p>@lang('common.you_may_not')</p>
                                <ul>
                                    <li>@lang('common.reproduce_content')</li>
                                    <li>@lang('common.modify_content')</li>
                                    <li>@lang('common.remove_notices')</li>
                                    <li>@lang('common.use_without_permission')</li>
                                </ul>
                            </div>
                        </section>

                        <!-- Disclaimer of Warranties -->
                        <section class="terms-section">
                            <div class="section-header">
                                <div class="section-icon danger">
                                    <i class="fas fa-exclamation-circle"></i>
                                </div>
                                <h3 class="section-title">5. @lang('common.disclaimer_of_warranties')</h3>
                            </div>
                            <div class="section-content">
                                <div class="warning-card">
                                    <p class="mb-0"><i class="fas fa-info-circle me-2"></i> @lang('common.services_as_is')</p>
                                </div>
                                <p class="mt-3">@lang('common.we_do_not_guarantee')</p>
                                <ul>
                                    <li>@lang('common.uninterrupted_services')</li>
                                    <li>@lang('common.errors_corrected')</li>
                                    <li>@lang('common.virus_free')</li>
                                    <li>@lang('common.meet_requirements')</li>
                                </ul>
                                <p><strong>@lang('common.use_at_own_risk')</strong></p>
                            </div>
                        </section>

                        <!-- Limitation of Liability -->
                        <section class="terms-section">
                            <div class="section-header">
                                <div class="section-icon info">
                                    <i class="fas fa-hand-paper"></i>
                                </div>
                                <h3 class="section-title">6. @lang('common.limitation_of_liability')</h3>
                            </div>
                            <div class="section-content">
                                <p>@lang('common.not_liable_for', ['app_name' => config('app.name')])</p>
                                <ul>
                                    <li>@lang('common.loss_of_profits')</li>
                                    <li>@lang('common.loss_of_use')</li>
                                    <li>@lang('common.unauthorized_transmissions')</li>
                                    <li>@lang('common.third_party_content')</li>
                                </ul>

                                <div class="highlight-box">
                                    <h5 class="h6 mb-2 fw-semibold">@lang('common.liability_limit')</h5>
                                    <div class="d-flex align-items-center flex-wrap">
                                        <span class="liability-badge">
                                            <i class="fas fa-dollar-sign me-1"></i>100
                                        </span>
                                        <span class="small">@lang('common.or_amount_paid')</span>
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
                                <h3 class="section-title">7. @lang('common.governing_law')</h3>
                            </div>
                            <div class="section-content">
                                <p>@lang('common.governed_by_law', ['country' => 'united states of america'])</p>

                                <div class="info-card">
                                    <div class="d-flex">
                                        <i class="fas fa-gavel me-3 mt-1" style="color: var(--primary);"></i>
                                        <div>
                                            <p class="mb-1 fw-semibold">@lang('common.exclusive_jurisdiction')</p>
                                            <p class="mb-0 small">@lang('common.exclusive_jurisdiction_desc')</p>
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
                                <h3 class="section-title">8. @lang('common.changes_to_terms')</h3>
                            </div>
                            <div class="section-content">
                                <div class="warning-card">
                                    <div class="d-flex">
                                        <i class="fas fa-bell me-3 mt-1" style="color: #ffc107;"></i>
                                        <div>
                                            <p class="mb-1 fw-semibold">@lang('common.we_reserve_right')</p>
                                            <p class="mb-0 small">@lang('common.terms_modification_notice')</p>
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
                                <h3 class="section-title">9. @lang('common.contact_information')</h3>
                            </div>
                            <div class="section-content">
                                <p>@lang('common.contact_us_for_questions')</p>

                                <div class="contact-buttons">
                                    <a href="mailto:contact@lilydecors.com" class="contact-btn">
                                        <i class="fas fa-envelope me-2"></i>@lang('common.email_legal_team')
                                    </a>
                                    <a href="{{ url('contact') }}" class="contact-btn">
                                        <i class="fas fa-comment-alt me-2"></i>@lang('common.contact_form')
                                    </a>
                                    <a href="#" class="contact-btn">
                                        <i class="fas fa-map-marker-alt me-2"></i>@lang('common.visit_our_office')
                                    </a>
                                </div>

                                <div class="info-card mt-3">
                                    <p class="mb-0"><i class="fas fa-clock me-2"></i> @lang('common.response_time')</p>
                                </div>
                            </div>
                        </section>
                    </div>

                    <!-- Action Buttons -->
                    <div class="action-buttons">
                        <a href="{{ url(app()->getLocale() . '/') }}" class="home-btn">
                            <i class="fas fa-home me-2"></i>@lang('common.back_to_homepage')
                        </a>
                        <button onclick="window.print()" class="print-btn">
                            <i class="fas fa-print me-2"></i>@lang('common.print_terms')
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