@extends('layouts.master')
@section('title','About LilyDecors | Premium Home Decor Inspiration & Design Blog')
@section('description','Learn about LilyDecors - your trusted source for interior design inspiration, home decor ideas, and practical decorating guides. Discover our mission to transform houses into beautiful homes.')
@section('keywords','home decor, interior design, decorating ideas, home inspiration, design blog, home improvement')
@push('styles')

<link rel="stylesheet" href="{{ asset('assets/css/about.css') }}">
@endpush
@section('content')

    <!-- Header Section -->
    <header class="about-header">
        <div class="container">
            <h1>About LilyDecors</h1>
            <p class="lead">Transforming houses into beautiful, inspiring homes through curated design inspiration and practical decorating wisdom.</p>
        </div>
    </header>

    <!-- Breadcrumb -->
    <div class="container">
        <nav class="breadcrumb">
            <a href="/" class="breadcrumb-item"><i class="fas fa-home"></i> Home</a>
            <span class="breadcrumb-item active">About Us</span>
        </nav>
    </div>

    <!-- Main Content -->
    <main class="about-content">
        <div class="container">
            <!-- Introduction Section -->
            <section class="intro-section animate-on-scroll">
                <h2>Welcome to LilyDecors</h2>
                <p class="lead">Your trusted source for interior design inspiration, practical decorating guides, and curated home decor recommendations.</p>
                <p>At LilyDecors, we believe that every home tells a story. Our mission is to help you write yours through beautiful, functional, and inspiring spaces that reflect your personality and lifestyle. Whether you're decorating your first apartment, renovating your family home, or simply looking for fresh ideas, we're here to guide you every step of the way.</p>
                <p>Founded by a team of passionate interior designers and home decor enthusiasts, LilyDecors has grown from a simple blog into a comprehensive resource for homeowners, renters, and design lovers worldwide.</p>
            </section>

            <!-- Mission & Vision -->
            <div class="mission-vision animate-on-scroll">
                <div class="mission-card">
                    <i class="fas fa-bullseye"></i>
                    <h3>Our Mission</h3>
                    <p>To democratize beautiful design by providing accessible, practical, and inspiring home decor guidance that empowers everyone to create spaces they love.</p>
                </div>
                <div class="vision-card">
                    <i class="fas fa-eye"></i>
                    <h3>Our Vision</h3>
                    <p>To become the world's most trusted home decor community, inspiring millions to transform their living spaces and find joy in the art of homemaking.</p>
                </div>
            </div>

            <!-- What We Do -->
            <section class="section-title animate-on-scroll">
                <h2>What Sets Us Apart</h2>
                <p class="lead">Discover why thousands of readers trust LilyDecors for their home decor journey</p>
            </section>

            <div class="features-grid animate-on-scroll">
                <div class="feature-item">
                    <h4>Curated Inspiration</h4>
                    <p>We handpick and curate the best design ideas from around the world, saving you hours of searching and providing quality over quantity.</p>
                </div>
                <div class="feature-item">
                    <h4>Practical Guidance</h4>
                    <p>Our content is designed to be actionable. From budget breakdowns to step-by-step tutorials, we make beautiful design achievable.</p>
                </div>
                <div class="feature-item">
                    <h4>Expert Insights</h4>
                    <p>Our team includes professional interior designers, architects, and stylists who share their expertise and industry secrets.</p>
                </div>
            </div>

            <!-- Stats Section -->
            <section class="stats-section animate-on-scroll">
                <h2>Our Community in Numbers</h2>
                <p>Join thousands of design enthusiasts who trust LilyDecors</p>
                <div class="stats-grid">
                    <div class="stat-item">
                        <div class="stat-number" data-count="250000">250,000+</div>
                        <div class="stat-label">Monthly Readers</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number" data-count="5000">5,000+</div>
                        <div class="stat-label">Published Articles</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number" data-count="100">100+</div>
                        <div class="stat-label">Expert Contributors</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number" data-count="50">50+</div>
                        <div class="stat-label">Countries Reached</div>
                    </div>
                </div>
            </section>

            <!-- Our Values -->
            <section class="values-section animate-on-scroll">
                <div class="section-title">
                    <h2>Our Core Values</h2>
                    <p class="lead">The principles that guide everything we do</p>
                </div>
                <div class="values-grid">
                    <div class="value-card">
                        <i class="fas fa-heart"></i>
                        <h4>Passion for Design</h4>
                        <p>We genuinely love home decor and believe beautiful spaces improve quality of life.</p>
                    </div>
                    <div class="value-card">
                        <i class="fas fa-handshake"></i>
                        <h4>Integrity & Trust</h4>
                        <p>We're transparent about partnerships and only recommend products we truly believe in.</p>
                    </div>
                    <div class="value-card">
                        <i class="fas fa-users"></i>
                        <h4>Community Focus</h4>
                        <p>We listen to our readers and create content that addresses their real needs and challenges.</p>
                    </div>
                    <div class="value-card">
                        <i class="fas fa-lightbulb"></i>
                        <h4>Continuous Innovation</h4>
                        <p>We constantly evolve to bring you the latest trends, tools, and techniques in home decor.</p>
                    </div>
                </div>
            </section>

            <!-- Our Team -->
            <section class="team-section animate-on-scroll">
                <div class="section-title">
                    <h2>Meet Our Founders</h2>
                    <p class="lead">The passionate team behind LilyDecors</p>
                </div>
                <div class="team-grid">
                    <div class="team-card">
                        <div class="team-img">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <div class="team-info">
                            <h4>Sarah Chen</h4>
                            <span class="role">Lead Interior Designer</span>
                            <p>With 15 years in residential design, Sarah brings professional expertise and a keen eye for timeless elegance.</p>
                        </div>
                    </div>
                    <div class="team-card">
                        <div class="team-img">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <div class="team-info">
                            <h4>Marcus Johnson</h4>
                            <span class="role">Creative Director</span>
                            <p>Former magazine editor turned decor blogger, Marcus ensures our content is both beautiful and practical.</p>
                        </div>
                    </div>
                    <div class="team-card">
                        <div class="team-img">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <div class="team-info">
                            <h4>Elena Rodriguez</h4>
                            <span class="role">Community Manager</span>
                            <p>Elena connects with our readers daily, turning their questions into valuable content and building our community.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- CTA Section -->
            <section class="cta-section animate-on-scroll">
                <h3>Ready to Transform Your Space?</h3>
                <p>Join our community of home decor enthusiasts and start creating the home of your dreams today.</p>
                <div class="cta-buttons">
                    <a href="/blog" class="cta-btn primary">
                        <i class="fas fa-book-open me-2"></i>Explore Our Blog
                    </a>
                    <a href="/contact" class="cta-btn secondary">
                        <i class="fas fa-envelope me-2"></i>Get in Touch
                    </a>
                </div>
            </section>
        </div>
    </main>


@endsection
@push('scripts')
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