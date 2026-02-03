<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    
    <style>
        :root {
            /* Backgrounds */
            --bg-main: #fefefe;
            --bg-footer: #f9f7f3;
            --bg-accent: #d4a574;
            --bg-dark: #2a2a2a;

            /* Base Colors */
            --white: #ffffff;
            --black: #000000;

            /* Primary (Elegant Dark Charcoal) */
            --primary: #2a2a2a;
            --primary-light: #444444;
            --primary-lighter: #666666;
            --primary-dark: #1c1c1c;

            /* Secondary (Warm Gold Accent) */
            --secondary: #d4a574;
            --secondary-light: #e2bf97;
            --secondary-lighter: #f0dbc3;
            --secondary-dark: #b8915f;

            /* Accent (Muted Warm Neutrals) */
            --accent-navy: #3b3b3b;
            --accent-navy-light: #555555;
            --accent-navy-dark: #1f1f1f;

            /* Neutrals */
            --light-gray: #f4f4f4;
            --medium-gray: #eeeeee;
            --dark-gray: #777777;

            /* Text */
            --text-primary: #2a2a2a;
            --text-secondary: #777777;
            --text-light: #999999;
            --text-on-primary: #ffffff;

            /* Borders */
            --border-light: #eeeeee;
            --border-accent: #e8e0d4;

            /* Typography */
            --font-heading: 'Cormorant Garamond', serif;
            --font-body: 'Inter', sans-serif;

            /* Spacing */
            --space-xl: 80px;
            --space-lg: 60px;
            --space-md: 40px;
            --space-sm: 20px;
            --space-xs: 10px;

            /* Radius */
            --radius-sm: 8px;
            --radius-md: 12px;

            /* Gradients */
            --primary-gradient: linear-gradient(135deg, #1c1c1c 0%, #2a2a2a 100%);
            --secondary-gradient: linear-gradient(135deg, #d4a574 0%, #e2bf97 100%);
            --accent-gradient: linear-gradient(135deg, #2a2a2a 0%, #444444 100%);

            /* Logo Gradient */
            --logo-gradient: linear-gradient(
                90deg,
                #2a2a2a 0%,
                #2a2a2a 55%,
                #d4a574 55%,
                #d4a574 100%
            );

            /* Glow Effects (Soft Luxury) */
            --primary-glow: 0 0 20px rgba(42, 42, 42, 0.35);
            --secondary-glow: 0 0 25px rgba(212, 165, 116, 0.45);
            --accent-glow: 0 0 18px rgba(0, 0, 0, 0.25);

            /* Shadows */
            --shadow-light: 0 4px 20px rgba(0, 0, 0, 0.06);
            --shadow-medium: 0 8px 30px rgba(0, 0, 0, 0.1);
            --shadow-heavy: 0 15px 40px rgba(0, 0, 0, 0.18);
        }
        
        body {
            font-family: var(--font-body), system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            min-height: 100vh;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            background-color: var(--bg-main);
            color: var(--text-primary);
        }
        
        .error-container {
            max-width: 36rem;
            background-color: var(--white);
            padding: var(--space-md);
            border-radius: var(--radius-md);
            box-shadow: var(--shadow-medium);
        }
        
        .error-code {
            font-size: 1.125rem;
            font-weight: 600;
            color: var(--text-primary);
            border-right: 1px solid var(--border-accent);
            padding-right: var(--space-sm);
            letter-spacing: .05em;
        }
        
        .error-message {
            font-size: 1.125rem;
            color: var(--text-primary);
            text-transform: uppercase;
            letter-spacing: .05em;
            padding-left: var(--space-sm);
        }
        
        /* Bootstrap icon styling */
        .error-icon {
            font-size: 1.25rem;
            margin-right: 0.5rem;
            vertical-align: -2px;
        }
        
        /* Error-specific colors based on error type */
        .error-404 .error-icon {
            color: var(--secondary);
        }
        
        .error-500 .error-icon {
            color: #dc3545; /* Bootstrap danger color */
        }
        
        .error-403 .error-icon,
        .error-401 .error-icon {
            color: var(--secondary-dark);
        }
        
        /* Dark mode */
        @media (prefers-color-scheme: dark) {
            body.dark-mode {
                background-color: var(--primary-dark) !important;
                color: var(--text-on-primary);
            }
            
            .dark-mode .error-container {
                background-color: var(--primary);
                border: 1px solid var(--accent-navy);
                box-shadow: var(--primary-glow);
            }
            
            .dark-mode .error-code,
            .dark-mode .error-message {
                color: var(--text-on-primary);
            }
            
            .dark-mode .error-code {
                border-right-color: var(--accent-navy);
            }
            
            /* Adjust error icons for dark mode */
            .dark-mode .error-404 .error-icon {
                color: var(--secondary-light);
            }
            
            .dark-mode .error-403 .error-icon,
            .dark-mode .error-401 .error-icon {
                color: var(--secondary-lighter);
            }
        }
        
        /* Responsive adjustments */
        @media (max-width: 576px) {
            .error-container {
                padding: var(--space-sm);
                margin: var(--space-xs);
            }
            
            .error-code {
                border-right: none;
                border-bottom: 1px solid var(--border-accent);
                padding-right: 0;
                padding-bottom: var(--space-xs);
                margin-bottom: var(--space-xs);
            }
            
            .error-message {
                padding-left: 0;
                padding-top: var(--space-xs);
            }
        }
        
        /* Optional: Add decorative elements */
        .error-decoration {
            position: absolute;
            width: 100px;
            height: 100px;
            opacity: 0.05;
            z-index: -1;
        }
        
        .decoration-1 {
            top: 10%;
            left: 10%;
            background: var(--secondary-gradient);
            border-radius: 50%;
        }
        
        .decoration-2 {
            bottom: 10%;
            right: 10%;
            background: var(--primary-gradient);
            border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
        }
    </style>
    
    @stack('styles')
</head>
<body>

    <div class="error-page d-flex align-items-center justify-content-center min-vh-100 position-relative overflow-hidden">

        <!-- Decorative Shapes -->
        <span class="error-decoration decoration-1"></span>
        <span class="error-decoration decoration-2"></span>

        <div class="error-container text-center">

            <!-- Icon -->
            <div class="mb-4">
                <i class="error-icon bi bi-exclamation-triangle-fill"></i>
            </div>

            <!-- Error Code -->
            <h1 class="display-4 fw-semibold mb-2 error-code-text">
                @yield('code')
            </h1>

            <!-- Message -->
            <h2 class="error-message-text mb-3">
                @yield('message')
            </h2>

            <!-- Optional description -->
            <p class="text-muted mb-4">
                The page you’re looking for might have been removed, renamed, or is temporarily unavailable.
            </p>

            <!-- Actions -->
            <div class="d-flex justify-content-center gap-2 flex-wrap">
                <a href="{{ url('/') }}" class="btn btn-outline-primary px-4">
                    <i class="bi bi-house-door me-1"></i> Home
                </a>

                <a href="javascript:history.back()" class="btn btn-outline-secondary px-4">
                    <i class="bi bi-arrow-left me-1"></i> Go Back
                </a>
            </div>

        </div>
    </div>

<script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {

        const errorCode = '@yield("code")';
        const icon = document.querySelector('.error-icon');
        const body = document.body;

        if (errorCode) body.classList.add(`error-${errorCode}`);

        switch (errorCode) {
            case '404':
                icon.className = 'error-icon bi bi-emoji-dizzy-fill';
                break;
            case '500':
                icon.className = 'error-icon bi bi-exclamation-octagon-fill';
                break;
            case '403':
                icon.className = 'error-icon bi bi-shield-lock-fill';
                break;
            case '401':
                icon.className = 'error-icon bi bi-person-fill-slash';
                break;
            case '503':
                icon.className = 'error-icon bi bi-gear-fill';
                break;
            default:
                icon.className = 'error-icon bi bi-exclamation-triangle-fill';
        }

        document.title = `Error ${errorCode} - @yield('message')`;
    });
</script>

</body>

</html>