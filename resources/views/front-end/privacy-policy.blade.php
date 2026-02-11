@extends('layouts.master')
@section('title')
    @lang('privacy.meta.title')
@endsection

@section('description')
    @lang('privacy.meta.description')
@endsection

@section('keywords')
    @lang('privacy.meta.keywords')
@endsection

@section('author')
    @lang('privacy.meta.author')
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/privacy.css') }}">
@endpush

@section('content')
<!-- Privacy Header -->
<div class="privacy-header">
    <div class="container">
        <div class="privacy-header-content">
            <h1>@lang('privacy.header.title')</h1>
            <p class="lead">@lang('privacy.header.subtitle')</p>
            <div class="last-updated">
                <i class="fas fa-calendar-alt me-2"></i>@lang('privacy.header.last_updated') {{ now()->format('F d, Y') }}
            </div>
        </div>
    </div>
</div>

<!-- Main Content -->
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <!-- Main Policy Card -->
            <div class="card policy-card">
                <!-- Card Header -->
                <div class="card-header policy-card-header">
                    <i class="fas fa-shield-alt policy-icon"></i>
                    <h2>@lang('privacy.card.title')</h2>
                </div>

                <!-- Card Body -->
                <div class="card-body policy-card-body">
                    <!-- Information Alert -->
                    <div class="alert policy-alert">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-info-circle me-3"></i>
                            <div>
                                <strong>@lang('privacy.alert.title'):</strong> @lang('privacy.alert.description')
                            </div>
                        </div>
                    </div>

                    <!-- Policy Sections -->
                    <div class="privacy-content">
                        <!-- Information Collection -->
                        <div class="policy-section">
                            <div class="section-header">
                                <div class="section-icon primary">
                                    <i class="fas fa-database"></i>
                                </div>
                                <h3 class="section-title">@lang('privacy.sections.collection.title')</h3>
                            </div>
                            <div class="section-content">
                                <p>@lang('privacy.sections.collection.intro')</p>
                                <ul>
                                    @foreach(__('privacy.sections.collection.types') as $type => $description)
                                        <li><strong>{{ $type }}:</strong> {{ $description }}</li>
                                    @endforeach
                                </ul>
                                <p>@lang('privacy.sections.collection.conclusion')</p>
                            </div>
                        </div>

                        <!-- Information Usage -->
                        <div class="policy-section">
                            <div class="section-header">
                                <div class="section-icon success">
                                    <i class="fas fa-cogs"></i>
                                </div>
                                <h3 class="section-title">@lang('privacy.sections.usage.title')</h3>
                            </div>
                            <div class="section-content">
                                <p>@lang('privacy.sections.usage.intro')</p>
                                <ul>
                                    @foreach(__('privacy.sections.usage.purposes') as $purpose)
                                        <li>{{ $purpose }}</li>
                                    @endforeach
                                </ul>
                                <p class="highlight-text">@lang('privacy.sections.usage.important_note')</p>
                            </div>
                        </div>

                        <!-- Data Security -->
                        <div class="policy-section">
                            <div class="section-header">
                                <div class="section-icon warning">
                                    <i class="fas fa-lock"></i>
                                </div>
                                <h3 class="section-title">@lang('privacy.sections.security.title')</h3>
                            </div>
                            <div class="section-content">
                                <p>@lang('privacy.sections.security.intro')</p>
                                <ul>
                                    @foreach(__('privacy.sections.security.measures') as $measure => $description)
                                        <li><strong>{{ $measure }}:</strong> {{ $description }}</li>
                                    @endforeach
                                </ul>
                                <p>@lang('privacy.sections.security.disclaimer')</p>
                            </div>
                        </div>

                        <!-- Cookies -->
                        <div class="policy-section">
                            <div class="section-header">
                                <div class="section-icon info">
                                    <i class="fas fa-cookie-bite"></i>
                                </div>
                                <h3 class="section-title">@lang('privacy.sections.cookies.title')</h3>
                            </div>
                            <div class="section-content">
                                <p>@lang('privacy.sections.cookies.intro')</p>
                                <ul>
                                    @foreach(__('privacy.sections.cookies.types') as $type => $description)
                                        <li><strong>{{ $type }}:</strong> {{ $description }}</li>
                                    @endforeach
                                </ul>
                                <p>@lang('privacy.sections.cookies.management')</p>
                            </div>
                        </div>

                        <!-- Third-Party Links -->
                        <div class="policy-section">
                            <div class="section-header">
                                <div class="section-icon danger">
                                    <i class="fas fa-external-link-alt"></i>
                                </div>
                                <h3 class="section-title">@lang('privacy.sections.third_party.title')</h3>
                            </div>
                            <div class="section-content">
                                <p>@lang('privacy.sections.third_party.intro')</p>
                                <ul>
                                    @foreach(__('privacy.sections.third_party.notes') as $note)
                                        <li>{{ $note }}</li>
                                    @endforeach
                                </ul>
                                <p>@lang('privacy.sections.third_party.disclaimer')</p>
                            </div>
                        </div>

                        <!-- Policy Updates -->
                        <div class="policy-section">
                            <div class="section-header">
                                <div class="section-icon secondary">
                                    <i class="fas fa-sync-alt"></i>
                                </div>
                                <h3 class="section-title">@lang('privacy.sections.updates.title')</h3>
                            </div>
                            <div class="section-content">
                                <p>@lang('privacy.sections.updates.intro')</p>
                                <ul>
                                    @foreach(__('privacy.sections.updates.procedures') as $procedure)
                                        <li>{{ $procedure }}</li>
                                    @endforeach
                                </ul>
                                <p>@lang('privacy.sections.updates.recommendation')</p>
                            </div>
                        </div>

                        <!-- Contact Section -->
                        <div class="contact-section">
                            <div class="section-header">
                                <div class="section-icon primary">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <h3 class="section-title">@lang('privacy.sections.contact.title')</h3>
                            </div>
                            <div class="section-content">
                                <p>@lang('privacy.sections.contact.intro')</p>
                                <ul>
                                    @foreach(__('privacy.sections.contact.details') as $detail => $value)
                                        <li><strong>{{ $detail }}:</strong> {!! $value !!}</li>
                                    @endforeach
                                </ul>
                                <p>@lang('privacy.sections.contact.rights')</p>
                            </div>
                        </div>
                    </div>

                    <!-- Back to Home Button -->
                    <div class="text-center mt-5">
                        <a href="{{ url(app()->getLocale() . '/') }}" class="back-btn">
                            <i class="fas fa-arrow-left me-2"></i> @lang('privacy.back_button')
                        </a>
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

        // Observe all policy sections
        document.querySelectorAll('.policy-section').forEach(section => {
            section.style.opacity = '0';
            section.style.transform = 'translateY(30px)';
            section.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(section);
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add click animation to back button
        const backBtn = document.querySelector('.back-btn');
        if (backBtn) {
            backBtn.addEventListener('click', function(e) {
                this.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    this.style.transform = '';
                }, 150);
            });
        }
    });
</script>
@endpush