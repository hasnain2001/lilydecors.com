@extends('layouts.master')
@section('title')
    @lang('about.title')
@endsection
@section('description')
    @lang('about.description')
@endsection
@section('keywords')
    @lang('about.keywords')
@endsection
@section('author', 'Marcus Johnson')
@section('publisher', 'Marcus Johnson')
@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/about.css') }}">
@endpush
@section('content')

    <!-- Header Section -->
    <header class="about-header">
        <div class="container">
            <h1>@lang('about.header.title')</h1>
            <p class="lead">@lang('about.header.subtitle')</p>
        </div>
    </header>

    <!-- Breadcrumb -->
    <div class="container">
        <nav class="breadcrumb">
            <a href="/" class="breadcrumb-item"><i class="fas fa-home"></i> @lang('about.breadcrumb.home')</a>
            <span class="breadcrumb-item active">@lang('about.breadcrumb.current')</span>
        </nav>
    </div>

    <!-- Main Content -->
    <main class="about-content">
        <div class="container">
            <!-- Introduction Section -->
            <section class="intro-section animate-on-scroll">
                <h2>@lang('about.intro.title')</h2>
                <p class="lead">@lang('about.intro.lead')</p>
                <p>@lang('about.intro.paragraph1')</p>
                <p>@lang('about.intro.paragraph2')</p>
            </section>

            <!-- Mission & Vision -->
            <div class="mission-vision animate-on-scroll">
                <div class="mission-card">
                    <i class="fas fa-bullseye"></i>
                    <h3>@lang('about.mission.title')</h3>
                    <p>@lang('about.mission.description')</p>
                </div>
                <div class="vision-card">
                    <i class="fas fa-eye"></i>
                    <h3>@lang('about.vision.title')</h3>
                    <p>@lang('about.vision.description')</p>
                </div>
            </div>

            <!-- What We Do -->
            <section class="section-title animate-on-scroll">
                <h2>@lang('about.features.title')</h2>
                <p class="lead">@lang('about.features.subtitle')</p>
            </section>

            <div class="features-grid animate-on-scroll">
                <div class="feature-item">
                    <h4>@lang('about.features.curated_inspiration')</h4>
                    <p>@lang('about.features.curated_description')</p>
                </div>
                <div class="feature-item">
                    <h4>@lang('about.features.practical_guidance')</h4>
                    <p>@lang('about.features.practical_description')</p>
                </div>
                <div class="feature-item">
                    <h4>@lang('about.features.expert_insights')</h4>
                    <p>@lang('about.features.expert_description')</p>
                </div>
            </div>

            <!-- Stats Section -->
            <section class="stats-section animate-on-scroll">
                <h2>@lang('about.stats.title')</h2>
                <p>@lang('about.stats.subtitle')</p>
                <div class="stats-grid">
                    <div class="stat-item">
                        <div class="stat-number" data-count="250000">250,000+</div>
                        <div class="stat-label">@lang('about.stats.monthly_readers')</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number" data-count="5000">5,000+</div>
                        <div class="stat-label">@lang('about.stats.published_articles')</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number" data-count="100">100+</div>
                        <div class="stat-label">@lang('about.stats.expert_contributors')</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number" data-count="50">50+</div>
                        <div class="stat-label">@lang('about.stats.countries_reached')</div>
                    </div>
                </div>
            </section>

            <!-- Our Values -->
            <section class="values-section animate-on-scroll">
                <div class="section-title">
                    <h2>@lang('about.values.title')</h2>
                    <p class="lead">@lang('about.values.subtitle')</p>
                </div>
                <div class="values-grid">
                    <div class="value-card">
                        <i class="fas fa-heart"></i>
                        <h4>@lang('about.values.passion_for_design')</h4>
                        <p>@lang('about.values.passion_description')</p>
                    </div>
                    <div class="value-card">
                        <i class="fas fa-handshake"></i>
                        <h4>@lang('about.values.integrity_trust')</h4>
                        <p>@lang('about.values.integrity_description')</p>
                    </div>
                    <div class="value-card">
                        <i class="fas fa-users"></i>
                        <h4>@lang('about.values.community_focus')</h4>
                        <p>@lang('about.values.community_description')</p>
                    </div>
                    <div class="value-card">
                        <i class="fas fa-lightbulb"></i>
                        <h4>@lang('about.values.continuous_innovation')</h4>
                        <p>@lang('about.values.innovation_description')</p>
                    </div>
                </div>
            </section>

            <!-- Our Team -->
            <section class="team-section animate-on-scroll">
                <div class="section-title">
                    <h2>@lang('about.team.title')</h2>
                    <p class="lead">@lang('about.team.subtitle')</p>
                </div>
                <div class="team-grid">
                    <div class="team-card">
                        <div class="team-img">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <div class="team-info">
                            <h4>@lang('about.team.sarah.name')</h4>
                            <span class="role">@lang('about.team.sarah.role')</span>
                            <p>@lang('about.team.sarah.description')</p>
                        </div>
                    </div>
                    <div class="team-card">
                        <div class="team-img">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <div class="team-info">
                            <h4>@lang('about.team.marcus.name')</h4>
                            <span class="role">@lang('about.team.marcus.role')</span>
                            <p>@lang('about.team.marcus.description')</p>
                        </div>
                    </div>
                    <div class="team-card">
                        <div class="team-img">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <div class="team-info">
                            <h4>@lang('about.team.elena.name')</h4>
                            <span class="role">@lang('about.team.elena.role')</span>
                            <p>@lang('about.team.elena.description')</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- CTA Section -->
            <section class="cta-section animate-on-scroll">
                <h3>@lang('about.cta.title')</h3>
                <p>@lang('about.cta.description')</p>
                <div class="cta-buttons">
                    <a href="/blog" class="cta-btn primary">
                        <i class="fas fa-book-open me-2"></i>@lang('about.cta.explore_blog')
                    </a>
                    <a href="/contact" class="cta-btn secondary">
                        <i class="fas fa-envelope me-2"></i>@lang('about.cta.get_in_touch')
                    </a>
                </div>
            </section>
        </div>
    </main>

@endsection

@push('scripts')
    <!-- The JavaScript code remains the same since it's functionality, not content -->
    <script>
        // Intersection Observer for animations
        document.addEventListener('DOMContentLoaded', function() {
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

            // Observe all animate-on-scroll elements
            document.querySelectorAll('.animate-on-scroll').forEach(el => {
                observer.observe(el);
            });

            // Animated counter for stats
            const statNumbers = document.querySelectorAll('.stat-number');
            const statsSection = document.querySelector('.stats-section');
            
            const statObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        statNumbers.forEach(stat => {
                            const target = parseInt(stat.getAttribute('data-count'));
                            const suffix = stat.textContent.includes('+') ? '+' : '';
                            let current = 0;
                            const increment = target / 50;
                            
                            const timer = setInterval(() => {
                                current += increment;
                                if (current >= target) {
                                    current = target;
                                    clearInterval(timer);
                                }
                                stat.textContent = Math.floor(current).toLocaleString() + suffix;
                            }, 30);
                        });
                        statObserver.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.5 });

            if (statsSection) {
                statObserver.observe(statsSection);
            }

            // Add hover effects to team cards
            const teamCards = document.querySelectorAll('.team-card');
            teamCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-15px)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });

            // Add smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
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
        });

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
    </script>
@endpush