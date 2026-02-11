@extends('errors.minimal')

@section('title', __('Page Not Found - 404'))

@push('styles')
<style>
    /* 404 Page Specific Styles */
    .error-404-container {
        text-align: center;
        padding: 3rem 1.5rem;
        position: relative;
        overflow: hidden;
    }
    
    /* Floating elements animation */
    @keyframes float {
        0%, 100% { transform: translateY(0) rotate(0deg); }
        50% { transform: translateY(-20px) rotate(5deg); }
    }
    
    @keyframes floatSlow {
        0%, 100% { transform: translateY(0) rotate(0deg); }
        50% { transform: translateY(-10px) rotate(-5deg); }
    }
    
    @keyframes pulse {
        0%, 100% { opacity: 1; }
        50% { opacity: 0.7; }
    }
    
    @keyframes shimmer {
        0% { background-position: -200% center; }
        100% { background-position: 200% center; }
    }
    
    /* Main icon animation */
    .error-404-icon {
        font-size: 8rem;
        margin-bottom: 2rem;
        position: relative;
        animation: float 3s ease-in-out infinite;
        color: var(--secondary);
        filter: drop-shadow(var(--secondary-glow));
    }
    
    .error-404-icon::after {
        content: '';
        position: absolute;
        width: 120%;
        height: 120%;
        top: -10%;
        left: -10%;
        border-radius: 50%;
        background: var(--secondary-gradient);
        opacity: 0.1;
        z-index: -1;
        animation: pulse 4s ease-in-out infinite;
    }
    
    /* Error number with gradient text */
    .error-404-code {
        font-size: 8rem;
        font-weight: 900;
        line-height: 1;
        margin-bottom: 1.5rem;
        background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        animation: pulse 2s ease-in-out infinite;
        font-family: var(--font-heading);
        letter-spacing: -3px;
        position: relative;
        display: inline-block;
    }
    
    .error-404-code::before {
        content: '404';
        position: absolute;
        top: 2px;
        left: 2px;
        background: linear-gradient(135deg, var(--primary-dark) 0%, var(--secondary-dark) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        z-index: -1;
        opacity: 0.3;
        animation: floatSlow 4s ease-in-out infinite;
    }
    
    /* Title styling */
    .error-404-title {
        font-size: 2.25rem;
        font-weight: 700;
        margin-bottom: 1.5rem;
        color: var(--text-primary);
        font-family: var(--font-heading);
        position: relative;
        display: inline-block;
        padding-bottom: 1rem;
    }
    
    .error-404-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 100px;
        height: 3px;
        background: var(--secondary);
        animation: shimmer 3s linear infinite;
        background: linear-gradient(90deg, 
            transparent, 
            var(--secondary), 
            transparent
        );
        background-size: 200% auto;
    }
    
    /* Description */
    .error-404-description {
        color: var(--text-secondary);
        margin-bottom: 3rem;
        max-width: 36rem;
        margin-left: auto;
        margin-right: auto;
        font-size: 1.125rem;
        line-height: 1.6;
        padding: 0 1rem;
    }
    
    /* Action buttons */
    .error-404-actions {
        display: flex;
        gap: 1.5rem;
        justify-content: center;
        flex-wrap: wrap;
        margin-top: 2rem;
    }
    
    .error-404-actions .btn {
        padding: 0.75rem 2rem;
        border-radius: var(--radius-md);
        font-weight: 600;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
        z-index: 1;
        border: none;
        min-width: 160px;
    }
    
    .error-404-actions .btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
        transition: left 0.5s ease;
        z-index: -1;
    }
    
    .error-404-actions .btn:hover::before {
        left: 100%;
    }
    
    .error-404-actions .btn-primary {
        background: var(--primary-gradient);
        box-shadow: var(--shadow-medium);
    }
    
    .error-404-actions .btn-primary:hover {
        transform: translateY(-3px);
        box-shadow: var(--shadow-heavy);
        background: var(--accent-gradient);
    }
    
    .error-404-actions .btn-outline-secondary {
        border: 2px solid var(--border-accent);
        color: var(--text-primary);
        background: transparent;
    }
    
    .error-404-actions .btn-outline-secondary:hover {
        border-color: var(--secondary);
        background: rgba(212, 165, 116, 0.1);
        transform: translateY(-3px);
        box-shadow: var(--secondary-glow);
    }
    
    .error-404-actions .btn-outline-primary {
        border: 2px solid var(--secondary);
        color: var(--secondary);
        background: transparent;
    }
    
    .error-404-actions .btn-outline-primary:hover {
        background: var(--secondary);
        color: var(--white);
        transform: translateY(-3px);
        box-shadow: var(--secondary-glow);
    }
    
    /* Decorative floating elements */
    .floating-element {
        position: absolute;
        opacity: 0.05;
        z-index: -1;
        pointer-events: none;
    }
    
    .float-1 {
        top: 10%;
        left: 10%;
        font-size: 3rem;
        animation: floatSlow 6s ease-in-out infinite;
        color: var(--primary);
    }
    
    .float-2 {
        top: 20%;
        right: 10%;
        font-size: 4rem;
        animation: float 8s ease-in-out infinite;
        color: var(--secondary);
    }
    
    .float-3 {
        bottom: 20%;
        left: 15%;
        font-size: 2.5rem;
        animation: floatSlow 7s ease-in-out infinite reverse;
        color: var(--primary-light);
    }
    
    .float-4 {
        bottom: 10%;
        right: 15%;
        font-size: 3.5rem;
        animation: float 9s ease-in-out infinite;
        color: var(--secondary-light);
    }
    
    /* Search suggestion */
    .search-suggestion {
        margin-top: 3rem;
        padding: 1.5rem;
        background: rgba(212, 165, 116, 0.05);
        border-radius: var(--radius-md);
        border-left: 4px solid var(--secondary);
        max-width: 28rem;
        margin-left: auto;
        margin-right: auto;
        animation: fadeInUp 0.8s ease-out 0.5s both;
    }
    
    .search-suggestion h4 {
        color: var(--text-primary);
        margin-bottom: 0.5rem;
        font-size: 1.1rem;
    }
    
    .search-suggestion p {
        color: var(--text-secondary);
        font-size: 0.95rem;
        margin-bottom: 0;
    }
    
    /* Animation keyframes */
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
    
    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }
    
    /* Stagger animations */
    .error-404-container > * {
        animation: fadeInUp 0.8s ease-out forwards;
    }
    
    .error-404-icon {
        animation-delay: 0.1s;
    }
    
    .error-404-code {
        animation-delay: 0.2s;
    }
    
    .error-404-title {
        animation-delay: 0.3s;
    }
    
    .error-404-description {
        animation-delay: 0.4s;
    }
    
    .error-404-actions {
        animation-delay: 0.5s;
    }
    
    /* Dark mode adjustments */
    @media (prefers-color-scheme: dark) {
        body.dark-mode .error-404-icon {
            color: var(--secondary-light);
            filter: drop-shadow(0 0 15px rgba(212, 165, 116, 0.3));
        }
        
        body.dark-mode .error-404-title {
            color: var(--text-on-primary);
        }
        
        body.dark-mode .error-404-description {
            color: var(--text-light);
        }
        
        body.dark-mode .search-suggestion {
            background: rgba(42, 42, 42, 0.3);
            border-left-color: var(--secondary-light);
        }
        
        body.dark-mode .floating-element {
            opacity: 0.1;
        }
        
        body.dark-mode .error-404-actions .btn-outline-secondary {
            border-color: var(--accent-navy);
            color: var(--text-on-primary);
        }
        
        body.dark-mode .error-404-actions .btn-outline-secondary:hover {
            border-color: var(--secondary-light);
            background: rgba(212, 165, 116, 0.15);
        }
    }
    
    /* Responsive adjustments */
    @media (max-width: 768px) {
        .error-404-icon {
            font-size: 6rem;
        }
        
        .error-404-code {
            font-size: 6rem;
        }
        
        .error-404-title {
            font-size: 1.75rem;
        }
        
        .error-404-actions {
            flex-direction: column;
            align-items: center;
        }
        
        .error-404-actions .btn {
            width: 100%;
            max-width: 280px;
        }
        
        .floating-element {
            display: none;
        }
    }
    
    @media (max-width: 576px) {
        .error-404-container {
            padding: 2rem 1rem;
        }
        
        .error-404-icon {
            font-size: 5rem;
        }
        
        .error-404-code {
            font-size: 5rem;
            letter-spacing: -2px;
        }
        
        .error-404-title {
            font-size: 1.5rem;
        }
        
        .error-404-description {
            font-size: 1rem;
            padding: 0;
        }
    }
</style>
@endpush

@section('message')
<div class="error-404-container">
    <!-- Decorative floating elements -->
    <div class="floating-element float-1">
        <i class="bi bi-search"></i>
    </div>
    <div class="floating-element float-2">
        <i class="bi bi-compass"></i>
    </div>
    <div class="floating-element float-3">
        <i class="bi bi-map"></i>
    </div>
    <div class="floating-element float-4">
        <i class="bi bi-signpost"></i>
    </div>
    
    <!-- Main content -->
    <div class="error-404-icon">
        <i class="bi bi-binoculars-fill"></i>
    </div>
    
    <div class="error-404-code">404</div>
    
    <h1 class="error-404-title">Lost in Digital Space</h1>
    
    <p class="error-404-description">
        The cosmic page you're seeking has drifted into the digital void. 
        Don't worry—our navigation team is here to guide you back to familiar territory.
    </p>
    
    <div class="error-404-actions">
        <a href="{{ url(app()->getLocale().'/') }}" class="btn btn-primary">
            <i class="bi bi-rocket-takeoff-fill me-2"></i> Launch to Home
        </a>
        <a href="javascript:history.back()" class="btn btn-outline-secondary">
            <i class="bi bi-arrow-return-left me-2"></i> Return Journey
        </a>
        <a href="{{ route('contact',['lang' => app()->getLocale()]) ?? '#' }}" class="btn btn-outline-primary">
            <i class="bi bi-life-preserver me-2"></i> Request Rescue
        </a>
    </div>
    
    <!-- Search suggestion -->
    <div class="search-suggestion">
        <h4><i class="bi bi-lightbulb me-2"></i>Navigation Tip</h4>
        <p>Try using our search feature or explore the main menu to find what you're looking for.</p>
    </div>
</div>


@endsection
<!-- JavaScript for interactive elements -->
@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Add click animation to buttons
        const buttons = document.querySelectorAll('.error-404-actions .btn');
        buttons.forEach(button => {
            button.addEventListener('click', function(e) {
                // Create ripple effect
                const ripple = document.createElement('span');
                const rect = this.getBoundingClientRect();
                const size = Math.max(rect.width, rect.height);
                const x = e.clientX - rect.left - size / 2;
                const y = e.clientY - rect.top - size / 2;
                
                ripple.style.cssText = `
                    position: absolute;
                    border-radius: 50%;
                    background: rgba(255, 255, 255, 0.5);
                    transform: scale(0);
                    animation: ripple-animation 0.6s linear;
                    width: ${size}px;
                    height: ${size}px;
                    top: ${y}px;
                    left: ${x}px;
                    pointer-events: none;
                `;
                
                this.appendChild(ripple);
                
                setTimeout(() => {
                    ripple.remove();
                }, 600);
            });
        });
        
        // Add CSS for ripple animation
        const style = document.createElement('style');
        style.textContent = `
            @keyframes ripple-animation {
                to {
                    transform: scale(4);
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(style);
        
        // Floating elements interaction on mouse move
        const container = document.querySelector('.error-404-container');
        const floatingElements = document.querySelectorAll('.floating-element');
        
        if (container && floatingElements.length > 0) {
            container.addEventListener('mousemove', (e) => {
                const { width, height, left, top } = container.getBoundingClientRect();
                const x = (e.clientX - left) / width - 0.5;
                const y = (e.clientY - top) / height - 0.5;
                
                floatingElements.forEach((element, index) => {
                    const speed = 0.5 + (index * 0.1);
                    element.style.transform = `
                        translate(${x * 20 * speed}px, ${y * 20 * speed}px)
                        rotate(${x * 5}deg)
                    `;
                });
            });
        }
        
        // Animate numbers in 404 code
        const codeElement = document.querySelector('.error-404-code');
        if (codeElement) {
            const numbers = codeElement.textContent.split('');
            codeElement.textContent = '';
            
            numbers.forEach((num, index) => {
                const span = document.createElement('span');
                span.textContent = num;
                span.style.display = 'inline-block';
                span.style.animationDelay = `${0.2 + (index * 0.1)}s`;
                span.style.opacity = '0';
                span.style.transform = 'translateY(20px)';
                
                codeElement.appendChild(span);
                
                // Animate each number
                setTimeout(() => {
                    span.style.transition = 'all 0.5s ease-out';
                    span.style.opacity = '1';
                    span.style.transform = 'translateY(0)';
                }, 200 + (index * 100));
            });
        }
    });
</script>
@endpush