document.addEventListener('DOMContentLoaded', () => {
    // ===== ELEMENTS =====
    const mobileToggle = document.getElementById('navMobileToggle');
    const navMenu = document.getElementById('navMenuCustom');
    const mobileOverlay = document.getElementById('navMobileOverlay');
    const searchToggle = document.getElementById('navSearchToggle');
    const searchContainer = document.getElementById('navSearchContainer');
    const navbar = document.querySelector('.navbar-custom');
    const backToTop = document.getElementById('backToTop');
    const loaderWrapper = document.getElementById('loaderWrapper');
    const progressBar = document.getElementById('loaderProgressBar');
    const languageBtn = document.querySelector('.language-btn');
    const languageDropdown = document.querySelector('.language-dropdown');
    let languageHoverTimeout;

    // ===============================
    // LOADER
    // ===============================
    if (loaderWrapper && progressBar) {
        let progress = 0;
        const interval = setInterval(() => {
            progress += Math.random() * 20;
            if (progress >= 100) {
                progress = 100;
                clearInterval(interval);
                setTimeout(() => {
                    loaderWrapper.classList.add('loaded');
                    setTimeout(() => loaderWrapper.style.display = 'none', 400);
                }, 300);
            }
            progressBar.style.width = progress + '%';
        }, 120);
    }

    window.addEventListener('load', () => {
        if (loaderWrapper) {
            loaderWrapper.classList.add('loaded');
            setTimeout(() => loaderWrapper.style.display = 'none', 400);
        }
    });

    // ===============================
    // BACK TO TOP
    // ===============================
    if (backToTop) {
        window.addEventListener('scroll', () => {
            backToTop.classList.toggle('visible', window.scrollY > 300);
        });

        backToTop.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    // ===============================
    // NAVBAR SCROLL EFFECT
    // ===============================
    window.addEventListener('scroll', () => {
        navbar?.classList.toggle('scrolled', window.scrollY > 50);
    });

    // ===============================
    // MOBILE MENU TOGGLE (FIXED)
    // ===============================
    function openMobileMenu() {
        navMenu.classList.add('mobile-active');
        mobileOverlay.classList.add('active');
        document.body.style.overflow = 'hidden';

        if (!navMenu.querySelector('.nav-mobile-close')) {
            const closeBtn = document.createElement('button');
            closeBtn.className = 'nav-mobile-close';
            closeBtn.innerHTML = '&times;';
            closeBtn.addEventListener('click', closeMobileMenu);
            navMenu.prepend(closeBtn);
        }
        
        // Close other open elements
        searchContainer?.classList.remove('active');
        closeLanguageDropdown();
    }

    function closeMobileMenu() {
        navMenu.classList.remove('mobile-active');
        mobileOverlay.classList.remove('active');
        document.body.style.overflow = '';

        document.querySelectorAll('.nav-dropdown.active').forEach(d => {
            d.classList.remove('active');
        });
    }

    mobileToggle?.addEventListener('click', (e) => {
        e.preventDefault();
        e.stopPropagation();

        navMenu.classList.contains('mobile-active')
            ? closeMobileMenu()
            : openMobileMenu();
    });

    mobileOverlay?.addEventListener('click', closeMobileMenu);

    // ===============================
    // MOBILE DROPDOWNS
    // ===============================
    document.addEventListener('click', (e) => {
        if (window.innerWidth > 992) return;

        const link = e.target.closest('.nav-link-custom');
        const dropdown = link?.parentElement;

        if (dropdown?.classList.contains('nav-dropdown')) {
            e.preventDefault();
            e.stopPropagation();

            document.querySelectorAll('.nav-dropdown.active').forEach(d => {
                if (d !== dropdown) d.classList.remove('active');
            });

            dropdown.classList.toggle('active');
        }
    });

    // ===============================
    // LANGUAGE SELECTOR - UPDATED FOR PERSISTENT HOVER
    // ===============================
    function openLanguageDropdown() {
        if (!languageDropdown) return;
        
        clearTimeout(languageHoverTimeout);
        languageDropdown.style.opacity = '1';
        languageDropdown.style.visibility = 'visible';
        languageDropdown.style.transform = window.innerWidth > 992 
            ? 'translateY(0)' 
            : 'translateX(-50%) translateY(0) scale(1)';
        languageDropdown.style.pointerEvents = 'auto';
    }

    function closeLanguageDropdown() {
        if (!languageDropdown) return;
        
        languageHoverTimeout = setTimeout(() => {
            languageDropdown.style.opacity = '0';
            languageDropdown.style.visibility = 'hidden';
            languageDropdown.style.transform = window.innerWidth > 992 
                ? 'translateY(10px)' 
                : 'translateX(-50%) translateY(10px) scale(0.95)';
            languageDropdown.style.pointerEvents = 'none';
        }, 200); // Increased timeout for better hover experience
    }

    // DESKTOP HOVER BEHAVIOR (Exactly like other dropdowns)
    if (languageBtn && languageDropdown) {
        if (window.innerWidth > 992) {
            // Hover on button - show dropdown
            languageBtn.addEventListener('mouseenter', () => {
                openLanguageDropdown();
            });

            // Hover on dropdown - keep it open
            languageDropdown.addEventListener('mouseenter', () => {
                clearTimeout(languageHoverTimeout);
            });

            // Mouse leave from button - start closing timeout
            languageBtn.addEventListener('mouseleave', () => {
                // Only close if mouse is not over dropdown
                setTimeout(() => {
                    if (!languageDropdown.matches(':hover')) {
                        closeLanguageDropdown();
                    }
                }, 100);
            });

            // Mouse leave from dropdown - start closing timeout
            languageDropdown.addEventListener('mouseleave', () => {
                // Only close if mouse is not over button
                setTimeout(() => {
                    if (!languageBtn.matches(':hover')) {
                        closeLanguageDropdown();
                    }
                }, 100);
            });
        }
    }

    // MOBILE CLICK BEHAVIOR
    if (languageBtn && languageDropdown && window.innerWidth <= 992) {
        languageBtn.addEventListener('click', (e) => {
            e.preventDefault();
            e.stopPropagation();
            
            const isVisible = languageDropdown.style.visibility === 'visible';
            
            // Close other open elements
            searchContainer?.classList.remove('active');
            closeMobileMenu();
            
            if (isVisible) {
                closeLanguageDropdown();
            } else {
                openLanguageDropdown();
            }
        });

        // Close dropdown when clicking outside on mobile
        document.addEventListener('click', (e) => {
            if (window.innerWidth <= 992) {
                if (languageDropdown.style.visibility === 'visible' && 
                    !languageBtn.contains(e.target) && 
                    !languageDropdown.contains(e.target)) {
                    closeLanguageDropdown();
                }
            }
        });
    }

    // Close language dropdown when selecting a language
    document.querySelectorAll('.language-option').forEach(option => {
        option.addEventListener('click', () => {
            closeLanguageDropdown();
        });
    });

    // ===============================
    // CLOSE ALL OPEN ELEMENTS
    // ===============================
    function closeAllOpenElements() {
        closeMobileMenu();
        searchContainer?.classList.remove('active');
        closeLanguageDropdown();
    }

    // ===============================
    // CLOSE MENU WHEN CLICKING OUTSIDE
    // ===============================
    document.addEventListener('click', (e) => {
        if (window.innerWidth <= 992) {
            if (navMenu.classList.contains('mobile-active') &&
                !navMenu.contains(e.target) &&
                !mobileToggle.contains(e.target)) {
                closeMobileMenu();
            }
        }
    });

    // ===============================
    // SEARCH TOGGLE
    // ===============================
    searchToggle?.addEventListener('click', (e) => {
        e.preventDefault();
        e.stopPropagation();
        
        const isActive = searchContainer?.classList.contains('active');
        
        // Close other open elements
        closeMobileMenu();
        closeLanguageDropdown();
        
        if (isActive) {
            searchContainer?.classList.remove('active');
        } else {
            searchContainer?.classList.add('active');
            
            // Focus on search input
            const searchInput = searchContainer?.querySelector('input[type="text"]');
            if (searchInput) {
                setTimeout(() => searchInput.focus(), 300);
            }
        }
    });

    document.addEventListener('click', (e) => {
        if (searchContainer &&
            !searchContainer.contains(e.target) &&
            !searchToggle.contains(e.target)) {
            searchContainer.classList.remove('active');
        }
    });

    // ===============================
    // RESIZE FIX - UPDATED
    // ===============================
    window.addEventListener('resize', () => {
        // Close mobile menu on desktop
        if (window.innerWidth > 992) {
            closeMobileMenu();
            searchContainer?.classList.remove('active');
            closeLanguageDropdown();
            
            // Re-attach hover events for desktop
            if (languageBtn && languageDropdown) {
                // Remove any existing click events for mobile
                languageBtn.removeEventListener('click', handleLanguageClick);
                
                // Re-attach hover events
                languageBtn.addEventListener('mouseenter', openLanguageDropdown);
                languageDropdown.addEventListener('mouseenter', () => {
                    clearTimeout(languageHoverTimeout);
                });
                
                languageBtn.addEventListener('mouseleave', () => {
                    setTimeout(() => {
                        if (!languageDropdown.matches(':hover')) {
                            closeLanguageDropdown();
                        }
                    }, 100);
                });
                
                languageDropdown.addEventListener('mouseleave', () => {
                    setTimeout(() => {
                        if (!languageBtn.matches(':hover')) {
                            closeLanguageDropdown();
                        }
                    }, 100);
                });
            }
        } else {
            // Mobile - attach click behavior
            if (languageBtn && languageDropdown) {
                // Remove hover events
                languageBtn.removeEventListener('mouseenter', openLanguageDropdown);
                languageBtn.removeEventListener('mouseleave', () => {});
                languageDropdown.removeEventListener('mouseenter', () => {});
                languageDropdown.removeEventListener('mouseleave', () => {});
                
                // Attach click behavior
                languageBtn.addEventListener('click', handleLanguageClick);
            }
        }
        
        // Reset body overflow
        document.body.style.overflow = '';
    });

    // Language click handler for mobile
    function handleLanguageClick(e) {
        e.preventDefault();
        e.stopPropagation();
        
        const isVisible = languageDropdown.style.visibility === 'visible';
        
        // Close other open elements
        searchContainer?.classList.remove('active');
        closeMobileMenu();
        
        if (isVisible) {
            closeLanguageDropdown();
        } else {
            openLanguageDropdown();
        }
    }

    // ===============================
    // ESC KEY SUPPORT
    // ===============================
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            closeAllOpenElements();
        }
    });

    // ===============================
    // ACTIVE LINK BY URL
    // ===============================
    const currentPath = window.location.pathname;
    document.querySelectorAll('.nav-link-custom').forEach(link => {
        if (link.getAttribute('href') === currentPath) {
            link.closest('.nav-item-custom')?.classList.add('active');
        }
    });

    // ===============================
    // CURRENT LANGUAGE INDICATOR
    // ===============================
    const currentLangCode = '{{ app()->getLocale() }}';
    document.querySelectorAll('.language-option').forEach(option => {
        const href = option.getAttribute('href');
        if (href && href.includes('/' + currentLangCode)) {
            option.classList.add('current');
        }
    });

    // ===============================
    // SMOOTH SCROLL FOR ANCHOR LINKS
    // ===============================
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            
            // Only handle anchor links
            if (href === '#') return;
            
            if (href.startsWith('#')) {
                e.preventDefault();
                const targetId = href.substring(1);
                const targetElement = document.getElementById(targetId);
                
                if (targetElement) {
                    // Close mobile menu if open
                    closeMobileMenu();
                    
                    // Calculate navbar height for offset
                    const navbarHeight = navbar ? navbar.offsetHeight : 80;
                    
                    window.scrollTo({
                        top: targetElement.offsetTop - navbarHeight,
                        behavior: 'smooth'
                    });
                }
            }
        });
    });

    // ===============================
    // ENHANCED SEARCH FUNCTIONALITY
    // ===============================
    const searchForm = searchContainer?.querySelector('form');
    const searchInput = searchContainer?.querySelector('input[type="text"]');
    
    if (searchInput) {
        // Clear search when escape is pressed
        searchInput.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                searchInput.value = '';
                searchContainer?.classList.remove('active');
            }
        });
        
        // Prevent form submission if empty
        if (searchForm) {
            searchForm.addEventListener('submit', (e) => {
                if (!searchInput.value.trim()) {
                    e.preventDefault();
                    searchInput.focus();
                    // Add shake animation
                    searchInput.classList.add('error');
                    setTimeout(() => searchInput.classList.remove('error'), 500);
                }
            });
        }
    }

    // ===============================
    // INITIALIZE ON LOAD
    // ===============================
    console.log('Navigation system initialized successfully');
});

