<nav class="navbar-custom text-capitalize">
    <div class="nav-container">
        <!-- Logo -->
        <a href="{{ url(app()->getLocale().'/') }}" class="logo">
            <i class="fas fa-spa logo-icon"></i>
            <div class="logo-text">Lily<span>Decors</span></div>
        </a>

        <!-- Desktop Navigation Menu -->
        <ul class="nav-menu-custom" id="navMenuCustom">
            <li class="nav-item-custom active">
                <a href="{{ url(app()->getLocale().'/') }}" class="nav-link-custom">@lang('common.home')</a>
            </li>
            <li class="nav-item-custom nav-dropdown">
                <a href="{{ route('category' ,['lang' => app()->getLocale()]) }}" class="nav-link-custom">
                    @lang('common.categories') <i class="fas fa-chevron-down"></i>
                </a>
                <ul class="nav-dropdown-menu">
                    @foreach ($categories as $category)
                        <li class="nav-dropdown-item">
                            <a href="{{ route('category.details', $category->slug) }}" class="nav-link-custom">
                                {{ $category->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </li>
            <li class="nav-item-custom nav-dropdown">
                <a href="{{ route('store' ,['lang' => app()->getLocale()]) }}" class="nav-link-custom">
                    @lang('common.stores') <i class="fas fa-chevron-down"></i>
                </a>
                <ul class="nav-dropdown-menu">
                    <li class="nav-dropdown-item">
                        <a href="{{ route('top-store' ,['lang' => app()->getLocale()]) }}" class="nav-link-custom">
                            @lang('common.navigation.top_stores')
                        </a>
                    </li>
                    <li class="nav-dropdown-item">
                        <a href="{{ route('new-store' ,['lang' => app()->getLocale()]) }}" class="nav-link-custom">
                            @lang('common.navigation.new_stores')
                        </a>
                    </li>
                    <li class="nav-dropdown-item">
                        <a href="{{ route('today-deals' ,['lang' => app()->getLocale()]) }}" class="nav-link-custom">
                            @lang('common.navigation.today_deals')
                        </a>
                    </li>
                    <li class="nav-dropdown-item">
                        <a href="{{ route('expring-soon' ,['lang' => app()->getLocale()]) }}" class="nav-link-custom">
                            @lang('common.navigation.expiring_soon')
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item-custom nav-dropdown">
                <a href="#" class="nav-link-custom">
                    @lang('common.navigation.resources') <i class="fas fa-chevron-down"></i>
                </a>
                <ul class="nav-dropdown-menu">
                    <li class="nav-dropdown-item">
                        <a href="{{ route('faq' ,['lang' => app()->getLocale()]) }}" class="nav-link-custom">
                            @lang('common.navigation.how_to_save')
                        </a>
                    </li>
                    <li class="nav-dropdown-item">
                        <a href="{{ route('blog' ,['lang' => app()->getLocale()]) }}" class="nav-link-custom">
                            @lang('common.blog')
                        </a>
                    </li>
                    <li class="nav-dropdown-item">
                        <a href="{{ route('faq' ,['lang' => app()->getLocale()]) }}" class="nav-link-custom">
                            @lang('common.navigation.faq')
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item-custom">
                <a href="{{ route('blog' ,['lang' => app()->getLocale()]) }}" class="nav-link-custom">
                    @lang('common.navigation.all_posts')
                </a>
            </li>
            <li class="nav-item-custom">
                <a href="{{ route('about' ,['lang' => app()->getLocale()]) }}" class="nav-link-custom">
                    @lang('common.about_us')
                </a>
            </li>
        </ul>

        <!-- Desktop Action Buttons -->
        <div class="nav-actions">
            <button class="nav-search-btn" id="navSearchToggle" aria-label="@lang('common.search')">
                <i class="fas fa-search"></i>
            </button>
            <button class="nav-subscribe-btn">@lang('common.subscribe')</button>
            <button class="nav-mobile-toggle" id="navMobileToggle" aria-label="@lang('common.navigation.menu')">
                <i class="fas fa-bars"></i>
            </button>
        </div>
        
        <!-- Language Selector -->
        <div class="language-selector-desktop">
            <button class="language-btn" aria-label="@lang('common.navigation.select_language')">
                <img src="{{ asset('uploads/flags/' . $langs->firstWhere('code', app()->getLocale())->flag) }}" 
                    alt="{{ app()->getLocale() }}"
                    title="{{ app()->getLocale() }}"
                    onerror="this.src='{{ asset('assets/img/no-image-found.png') }}'">
                <span>{{ strtoupper(app()->getLocale()) }}</span>
                <i class="fas fa-chevron-down language-arrow"></i>
            </button>
            <div class="language-dropdown">
                @foreach ($langs as $lang)
                    <a href="{{ url('/' . $lang->code) }}" class="language-option" 
                    title="{{ $lang->name }} ({{ strtoupper($lang->code) }})">
                        <img src="{{ asset('uploads/flags/' . $lang->flag) }}" 
                            alt="{{ $lang->code }}"
                            title="{{ $lang->name }}"
                            onerror="this.src='{{ asset('assets/img/no-image-found.png') }}'">
                        <span>{{ strtoupper($lang->code) }}</span>
                        <span class="language-name">{{ $lang->name }}</span>
                    </a>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Desktop Search Bar -->
    <div class="nav-search-container" id="navSearchContainer">
        <form action="{{ route('search') }}" method="GET">
            <div class="nav-search-box">
                <input type="text" 
                       placeholder="@lang('common.navigation.search_placeholder')" 
                       name="query" 
                       required
                       aria-label="@lang('common.navigation.search_placeholder')">
                <button aria-label="@lang('common.search')">
                    <i class="fas fa-search"></i>
                </button>
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
<button class="back-to-top" id="backToTop" aria-label="@lang('common.back_to_top')">
    <i class="fas fa-chevron-up"></i>
</button>

