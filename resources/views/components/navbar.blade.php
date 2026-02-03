

<nav class="navbar-custom text-capitalize">
    <div class="nav-container">
        <!-- Logo -->
      <a href="/" class="logo">
                <i class="fas fa-spa logo-icon"></i>
                <div class="logo-text">Lily<span>Decors</span></div>
            </a>

        <!-- Desktop Navigation Menu -->
        <ul class="nav-menu-custom" id="navMenuCustom">
            <li class="nav-item-custom active">
                <a href="{{ url('/') }}" class="nav-link-custom">Home</a>
            </li>
            <li class="nav-item-custom nav-dropdown">
                <a href="{{ route('category') }}" class="nav-link-custom">Categories <i class="fas fa-chevron-down"></i></a>
                <ul class="nav-dropdown-menu">
                    @foreach ($categories as $category)
                        <li class="nav-dropdown-item"><a href="{{ route('category.details', $category->slug) }}" class="nav-link-custom">{{ $category->name }}</a></li>
                    @endforeach
                </ul>
            </li>
            <li class="nav-item-custom nav-dropdown">
                <a href="{{ route('store') }}" class="nav-link-custom">Stores <i class="fas fa-chevron-down"></i></a>
                <ul class="nav-dropdown-menu">
                    <li class="nav-dropdown-item"><a href="{{ route('top-store') }}" class="nav-link-custom">Top Rated Stores</a></li>
                    <li class="nav-dropdown-item"><a href="{{ route('new-store') }}" class="nav-link-custom">New Stores</a></li>
                    <li class="nav-dropdown-item"><a href="{{ route('today-deals') }}" class="nav-link-custom">Today's Deals</a></li>

                    <li class="nav-dropdown-item"><a href="{{ route('expring-soon') }}" class="nav-link-custom">Expiring Soon</a></li>
                </ul>
            </li>

            <li class="nav-item-custom nav-dropdown">
                <a href="#" class="nav-link-custom">Resources <i class="fas fa-chevron-down"></i></a>
                <ul class="nav-dropdown-menu">
                    <li class="nav-dropdown-item"><a href="{{ route('faq') }}" class="nav-link-custom">How to Save</a></li>
                    <li class="nav-dropdown-item"><a href="{{ route('blog') }}" class="nav-link-custom">Blog & Tips</a></li>
                    <li class="nav-dropdown-item"><a href="{{ route('faq') }}" class="nav-link-custom">FAQ</a></li>
                </ul>
            </li>
            <li class="nav-item-custom">
                <a href="{{ route('blog') }}" class="nav-link-custom">All Posts</a>
            </li>
            <li class="nav-item-custom">
                <a href="{{ route('about') }}" class="nav-link-custom">About</a>
            </li>
        </ul>

        <!-- Desktop Action Buttons -->
        <div class="nav-actions">
            <button class="nav-search-btn" id="navSearchToggle">
                <i class="fas fa-search"></i>
            </button>
            <button class="nav-subscribe-btn">Subscribe</button>
            <button class="nav-mobile-toggle" id="navMobileToggle">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </div>

    <!-- Desktop Search Bar -->
    <div class="nav-search-container" id="navSearchContainer">
         <form action="{{ route('search') }}" method="GET">
        <div class="nav-search-box">
               <input type="text" placeholder="Search for Blog posts, stores, or categories..." name="query" required>
            <button><i class="fas fa-search"></i></button>
        </div>
         </form>
    </div>
</nav>

<!-- Mobile Overlay -->
<div class="nav-mobile-overlay" id="navMobileOverlay"></div>
<!-- Loader HTML -->
<div class="loader-wrapper" id="loaderWrapper">
    <div class="loader-container">
        <div class="loader-spinner"></div>
        <div class="loader-content">
            <div class="loader-text">Lily<span>Decors</span></div>
            <div class="loader-progress">
                <div class="loader-progress-bar" id="loaderProgressBar"></div>
            </div>
        </div>
    </div>
</div>
<!-- Back to Top Button HTML -->
<button class="back-to-top" id="backToTop" aria-label="Back to top">
    <i class="fas fa-chevron-up"></i>
</button>