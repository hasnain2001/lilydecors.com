@extends('layouts.master')
@section('title')
    {{ config('app.name') }} | Home Decor Blog {{ date('Y') }}
@endsection
@section('description')
    Save money with {{ config('app.name') }}. Discover verified coupon codes, exclusive discount deals, and top store offers updated daily to help you shop smarter.
@endsection
@section('keywords', 'coupon codes, promo codes, discount coupons, deals, offers, voucher codes')
@section('author', 'john doe')
@push('styles')
    <!-- Add this CSS to your styles section or file -->
<style>
/* ===== ROOT VARIABLES ===== */
:root {
    --bg-main: #fefefe;
    --bg-footer: #f9f7f3;
    --bg-accent: #d4a574;
    --bg-dark: #2a2a2a;
    --text-dark: #2a2a2a;
    --text-light: #777777;
    --text-muted: #999;
    --border-light: #eee;
    --border-accent: #e8e0d4;

    --font-heading: 'Cormorant Garamond', serif;
    --font-body: 'Inter', sans-serif;

    --space-xl: 80px;
    --space-lg: 60px;
    --space-md: 40px;
    --space-sm: 20px;
    --space-xs: 10px;

    --radius-sm: 8px;
    --radius-md: 12px;
    --radius-lg: 20px;
}

/* ===== RESET & BASE STYLES ===== */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: var(--font-body);
    line-height: 1.6;
    color: var(--text-dark);
    background-color: var(--bg-main);
    overflow-x: hidden;
}

.demo-content {
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 var(--space-sm);
}

/* ===== HERO SECTION ===== */
.hero {
    min-height: 85vh;
    background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),
                url('https://images.unsplash.com/photo-1615529182904-14819c35db37?ixlib=rb-4.0.3&auto=format&fit=crop&w=2080&q=80');
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: white;
    margin-bottom: var(--space-xl);
    border-radius: var(--radius-lg);
    position: relative;
    overflow: hidden;
}

.hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(45deg, rgba(212, 165, 116, 0.1), rgba(42, 42, 42, 0.2));
    z-index: 1;
}

.hero-content {
    position: relative;
    z-index: 2;
    max-width: 800px;
    padding: var(--space-lg);
    background: rgba(42, 42, 42, 0.7);
    backdrop-filter: blur(10px);
    border-radius: var(--radius-md);
    border: 1px solid rgba(255, 255, 255, 0.1);
}

.hero h1 {
    font-family: var(--font-heading);
    font-size: 4rem;
    font-weight: 600;
    margin-bottom: var(--space-sm);
    line-height: 1.1;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
}

.hero p {
    font-size: 1.2rem;
    margin-bottom: var(--space-md);
    color: rgba(255, 255, 255, 0.9);
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
}

.cta-btn {
    display: inline-block;
    background: var(--bg-accent);
    color: white;
    padding: 16px 40px;
    border-radius: var(--radius-sm);
    text-decoration: none;
    font-weight: 600;
    font-size: 1rem;
    letter-spacing: 0.5px;
    transition: all 0.3s ease;
    border: 2px solid var(--bg-accent);
    text-transform: uppercase;
}

.cta-btn:hover {
    background: transparent;
    color: var(--bg-accent);
    transform: translateY(-3px);
    box-shadow: 0 10px 20px rgba(212, 165, 116, 0.3);
}

/* ===== SECTIONS ===== */
.section {
    margin-bottom: var(--space-xl);
    padding: 0 var(--space-sm);
}

.section-title {
    font-family: var(--font-heading);
    font-size: 2.8rem;
    font-weight: 600;
    margin-bottom: var(--space-lg);
    text-align: center;
    color: var(--text-dark);
    position: relative;
    padding-bottom: var(--space-sm);
}

.section-title::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 3px;
    background: var(--bg-accent);
}

/* ===== CONTENT GRID ===== */
.content-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: var(--space-md);
    margin-top: var(--space-md);
}

.content-card {
    background: white;
    border-radius: var(--radius-md);
    overflow: hidden;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
    border: 1px solid var(--border-light);
    height: 100%;
    display: flex;
    flex-direction: column;
}

.content-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 40px rgba(212, 165, 116, 0.15);
    border-color: var(--bg-accent);
}

.card-img {
    height: 280px;
    background: var(--bg-footer);
    position: relative;
    overflow: hidden;
}

.card-img::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(45deg, rgba(212, 165, 116, 0.1), transparent);
    z-index: 1;
}

.card-img i {
    font-size: 4rem;
    color: var(--bg-accent);
    position: relative;
    z-index: 2;
}

/* Grok card styling */
.card-img grok-card {
    width: 100%;
    height: 100%;
    display: block;
}

.card-body {
    padding: var(--space-md);
    flex: 1;
    display: flex;
    flex-direction: column;
}

.card-body h3 {
    font-family: var(--font-heading);
    font-size: 1.6rem;
    font-weight: 600;
    margin-bottom: var(--space-xs);
    color: var(--text-dark);
    line-height: 1.3;
}

.card-body p {
    color: var(--text-light);
    margin-bottom: var(--space-sm);
    flex: 1;
    font-size: 0.95rem;
    line-height: 1.6;
}

.read-more {
    color: var(--bg-accent);
    text-decoration: none;
    font-weight: 600;
    font-size: 0.95rem;
    display: inline-flex;
    align-items: center;
    gap: 5px;
    transition: all 0.3s ease;
    margin-top: auto;
    padding-top: var(--space-xs);
    border-top: 1px solid var(--border-light);
}

.read-more:hover {
    color: var(--text-dark);
    gap: 10px;
}

.read-more::after {
    content: '→';
    transition: transform 0.3s ease;
}

.read-more:hover::after {
    transform: translateX(5px);
}

/* ===== FEATURED SECTION ===== */
.featured-section {
    background: var(--bg-footer);
    padding: var(--space-xl) 0;
    margin: var(--space-xl) 0;
    position: relative;
}

.featured-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, var(--bg-accent), var(--border-accent), var(--bg-accent));
}

/* ===== TESTIMONIAL SECTION ===== */
.testimonial-section {
    padding: var(--space-xl) 0;
    text-align: center;
}

.testimonial-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--space-md);
    margin-top: var(--space-lg);
}

.testimonial-card {
    background: white;
    padding: var(--space-md);
    border-radius: var(--radius-md);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    border: 1px solid var(--border-light);
}

.testimonial-text {
    font-style: italic;
    color: var(--text-light);
    margin-bottom: var(--space-sm);
    font-size: 1rem;
    line-height: 1.6;
}

.testimonial-author {
    font-weight: 600;
    color: var(--text-dark);
    font-size: 0.9rem;
}

/* ===== NEWSLETTER SECTION ===== */
.newsletter-section {
    background: linear-gradient(135deg, var(--bg-dark), #3a3a3a);
    color: white;
    padding: var(--space-xl) var(--space-md);
    text-align: center;
    border-radius: var(--radius-lg);
    margin: var(--space-xl) 0;
}

.newsletter-section h2 {
    font-family: var(--font-heading);
    font-size: 2.5rem;
    margin-bottom: var(--space-sm);
}

.newsletter-section p {
    color: rgba(255, 255, 255, 0.8);
    max-width: 600px;
    margin: 0 auto var(--space-md);
}

.newsletter-form {
    max-width: 500px;
    margin: 0 auto;
    display: flex;
    gap: var(--space-xs);
}

.newsletter-input {
    flex: 1;
    padding: 15px 20px;
    border: none;
    border-radius: var(--radius-sm);
    font-family: var(--font-body);
    font-size: 1rem;
    background: white;
    color: var(--text-dark);
}

.newsletter-input:focus {
    outline: none;
    box-shadow: 0 0 0 3px rgba(212, 165, 116, 0.3);
}

.newsletter-btn {
    background: var(--bg-accent);
    color: white;
    border: none;
    padding: 15px 30px;
    border-radius: var(--radius-sm);
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
}

.newsletter-btn:hover {
    background: #c49565;
    transform: translateY(-2px);
}

/* ===== RESPONSIVE DESIGN ===== */
@media (max-width: 1200px) {
    .hero h1 {
        font-size: 3.5rem;
    }

    .section-title {
        font-size: 2.5rem;
    }
}

@media (max-width: 992px) {
    :root {
        --space-xl: 60px;
        --space-lg: 50px;
        --space-md: 30px;
        --space-sm: 15px;
    }

    .hero h1 {
        font-size: 3rem;
    }

    .hero {
        min-height: 70vh;
        background-attachment: scroll;
    }

    .content-grid {
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: var(--space-sm);
    }
}

@media (max-width: 768px) {
    .hero h1 {
        font-size: 2.5rem;
    }

    .hero p {
        font-size: 1.1rem;
    }

    .section-title {
        font-size: 2.2rem;
    }

    .cta-btn {
        padding: 14px 30px;
        font-size: 0.95rem;
    }

    .newsletter-form {
        flex-direction: column;
    }

    .newsletter-input,
    .newsletter-btn {
        width: 100%;
    }
}

@media (max-width: 576px) {
    .hero h1 {
        font-size: 2rem;
    }

    .section-title {
        font-size: 1.8rem;
    }

    .content-grid {
        grid-template-columns: 1fr;
    }

    .card-img {
        height: 240px;
    }

    .card-body h3 {
        font-size: 1.4rem;
    }
}

/* ===== ANIMATIONS ===== */
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

.content-card {
    animation: fadeInUp 0.6s ease backwards;
}

.content-card:nth-child(1) { animation-delay: 0.1s; }
.content-card:nth-child(2) { animation-delay: 0.2s; }
.content-card:nth-child(3) { animation-delay: 0.3s; }
.content-card:nth-child(4) { animation-delay: 0.4s; }
</style>
@endpush
@section('content')
    <!-- HERO SECTION -->
    <section class="hero">
        <div class="hero-content">
            <h1>Timeless Elegance for Your Home</h1>
            <p>Discover inspiring ideas, design styles, and curated decor to transform every room into a sanctuary of beauty and comfort.</p>
            <a href="#" class="cta-btn">Explore Ideas</a>
        </div>
    </section>

    <!-- FEATURED CONTENT -->
    <section class="section">
        <h2 class="section-title">Ideas by Room</h2>
        <div class="content-grid">
            <div class="content-card">
                <div class="card-img">
                    <grok-card data-id="0835dc" data-type="image_card" data-arg-size="LARGE"></grok-card>
                </div>
                <div class="card-body">
                    <h3>Living Room Inspiration</h3>
                    <p>Elegant and cozy living spaces with luxurious gold accents and modern comfort.</p>
                    <a href="#" class="read-more">View More →</a>
                </div>
            </div>

            <div class="content-card">
                <div class="card-img">
                    <grok-card data-id="6fa17b" data-type="image_card" data-arg-size="LARGE"></grok-card>
                </div>
                <div class="card-body">
                    <h3>Bedroom & Bath</h3>
                    <p>Serene minimalist bedrooms and luxurious marble bathrooms for ultimate relaxation.</p>
                    <a href="#" class="read-more">View More →</a>
                </div>
            </div>

            <div class="content-card">
                <div class="card-img">
                    <grok-card data-id="f6b302" data-type="image_card" data-arg-size="LARGE"></grok-card>
                </div>
                <div class="card-body">
                    <h3>Kitchen & Dining</h3>
                    <p>Rustic farmhouse charm with warm wood tones and inviting layouts.</p>
                    <a href="#" class="read-more">View More →</a>
                </div>
            </div>

            <div class="content-card">
                <div class="card-img">
                    <grok-card data-id="e6f569" data-type="image_card" data-arg-size="LARGE"></grok-card>
                </div>
                <div class="card-body">
                    <h3>Outdoor Spaces</h3>
                    <p>Cozy patios and gardens perfect for relaxing evenings.</p>
                    <a href="#" class="read-more">View More →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- DESIGN STYLES SECTION -->
    <section class="section featured-section">
        <h2 class="section-title">Design Styles We Love</h2>
        <div class="content-grid">
            <div class="content-card">
                <div class="card-img">
                    <grok-card data-id="eff307" data-type="image_card" data-arg-size="LARGE"></grok-card>
                </div>
                <div class="card-body">
                    <h3>Modern & Minimal</h3>
                    <p>Clean lines, neutral palettes, and serene simplicity.</p>
                    <a href="#" class="read-more">Explore →</a>
                </div>
            </div>

            <div class="content-card">
                <div class="card-img">
                    <grok-card data-id="bc9cfb" data-type="image_card" data-arg-size="LARGE"></grok-card>
                </div>
                <div class="card-body">
                    <h3>Rustic & Farmhouse</h3>
                    <p>Warm, timeless charm with natural materials.</p>
                    <a href="#" class="read-more">Explore →</a>
                </div>
            </div>

            <div class="content-card">
                <div class="card-img">
                    <grok-card data-id="919fc3" data-type="image_card" data-arg-size="LARGE"></grok-card>
                </div>
                <div class="card-body">
                    <h3>Bohemian & Eclectic</h3>
                    <p>Layered textures, plants, and global influences.</p>
                    <a href="#" class="read-more">Explore →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- TESTIMONIAL SECTION -->
    <section class="section testimonial-section">
        <h2 class="section-title">What Our Readers Say</h2>
        <div class="testimonial-grid">
            <div class="testimonial-card">
                <p class="testimonial-text">"LilyDecors transformed my living room from bland to beautiful! The tips were practical and easy to follow."</p>
                <p class="testimonial-author">- Sarah M.</p>
            </div>
            <div class="testimonial-card">
                <p class="testimonial-text">"The color scheme guides helped me choose the perfect palette for my bedroom renovation. So helpful!"</p>
                <p class="testimonial-author">- Michael T.</p>
            </div>
            <div class="testimonial-card">
                <p class="testimonial-text">"I love the curated product recommendations. Found some amazing pieces for my home office makeover."</p>
                <p class="testimonial-author">- Jessica L.</p>
            </div>
        </div>
    </section>

    <!-- NEWSLETTER SECTION -->
    <section class="newsletter-section">
        <h2>Stay Inspired</h2>
        <p>Subscribe to our newsletter for weekly decor inspiration, exclusive tips, and special offers.</p>
        <form class="newsletter-form">
            <input type="email" class="newsletter-input" placeholder="Your email address" required>
            <button type="submit" class="newsletter-btn">Subscribe</button>
        </form>
    </section>
@endsection

@push('scripts')
<script>
// Newsletter form submission
document.querySelector('.newsletter-form')?.addEventListener('submit', function(e) {
    e.preventDefault();
    const email = this.querySelector('.newsletter-input').value;
    if (email) {
        alert(`Thank you for subscribing with ${email}! You'll receive our next newsletter soon.`);
        this.reset();
    }
});

// Smooth scroll for CTA button
document.querySelector('.cta-btn')?.addEventListener('click', function(e) {
    e.preventDefault();
    document.querySelector('.section').scrollIntoView({
        behavior: 'smooth'
    });
});

// Card hover effects
document.querySelectorAll('.content-card').forEach(card => {
    card.addEventListener('mouseenter', function() {
        this.style.zIndex = '10';
    });

    card.addEventListener('mouseleave', function() {
        this.style.zIndex = '1';
    });
});
</script>
@endpush
