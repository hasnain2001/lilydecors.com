// NAVBAR JAVASCRIPT - Elegant with Animations
document.addEventListener('DOMContentLoaded', function() {
    // ===== DOM ELEMENTS =====
    const mobileToggle = document.getElementById('navMobileToggle');
    const mobileOverlay = document.getElementById('navMobileOverlay');
    const navMenu = document.getElementById('navMenuCustom');
    const searchToggle = document.getElementById('navSearchToggle');
    const searchContainer = document.getElementById('navSearchContainer');
    const navbar = document.querySelector('.navbar-custom');

    // ===== NAVBAR SCROLL EFFECT =====
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    // ===== MOBILE MENU TOGGLE =====
    if (mobileToggle) {
        mobileToggle.addEventListener('click', () => {
            navMenu.classList.add('mobile-active');
            mobileOverlay.classList.add('active');
            document.body.style.overflow = 'hidden';

            // Add close button if not already added
            if (!document.querySelector('.nav-mobile-close')) {
                const closeBtn = document.createElement('button');
                closeBtn.className = 'nav-mobile-close';
                closeBtn.innerHTML = '<i class="fas fa-times"></i>';
                closeBtn.addEventListener('click', closeMobileMenu);
                navMenu.prepend(closeBtn);

                // Add mobile actions container
                const mobileActions = document.createElement('div');
                mobileActions.className = 'nav-mobile-actions';
                mobileActions.innerHTML = `
                    <div class="nav-search-container nav-mobile-search">
                        <div class="nav-search-box">
                            <input type="text" placeholder="Search for inspiration...">
                            <button><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                    <button class="nav-subscribe-btn">Subscribe to Newsletter</button>
                `;
                navMenu.appendChild(mobileActions);

                // Add event listener to mobile subscribe button
                mobileActions.querySelector('.nav-subscribe-btn').addEventListener('click', () => {
                    closeMobileMenu();
                    alert('Subscription form would open here!');
                });
            }
        });
    }

    function closeMobileMenu() {
        if (navMenu) navMenu.classList.remove('mobile-active');
        if (mobileOverlay) mobileOverlay.classList.remove('active');
        document.body.style.overflow = '';

        // Close all dropdowns when closing menu
        document.querySelectorAll('.nav-dropdown.active').forEach(dropdown => {
            dropdown.classList.remove('active');
        });
    }

    // Close mobile menu when clicking overlay
    if (mobileOverlay) {
        mobileOverlay.addEventListener('click', closeMobileMenu);
    }

    // ===== DROPDOWN TOGGLE FOR MOBILE =====
    document.addEventListener('click', (e) => {
        const target = e.target;
        const isMobile = window.innerWidth <= 992;

        if (isMobile) {
            // Handle dropdown toggling
            const navLink = target.closest('.nav-link-custom');
            if (navLink && navLink.parentElement.classList.contains('nav-dropdown')) {
                e.preventDefault();
                e.stopPropagation();

                const dropdown = navLink.parentElement;

                // Close other open dropdowns at the same level
                const siblingDropdowns = dropdown.parentElement.querySelectorAll('.nav-dropdown.active');
                siblingDropdowns.forEach(activeDropdown => {
                    if (activeDropdown !== dropdown && !activeDropdown.contains(dropdown)) {
                        activeDropdown.classList.remove('active');
                    }
                });

                // Toggle clicked dropdown
                dropdown.classList.toggle('active');
            }

            // Close dropdowns when clicking outside
            if (!target.closest('.nav-dropdown') && !target.closest('.nav-link-custom')) {
                document.querySelectorAll('.nav-dropdown.active').forEach(dropdown => {
                    dropdown.classList.remove('active');
                });
            }
        }
    });

    // ===== SEARCH TOGGLE =====
    if (searchToggle) {
        searchToggle.addEventListener('click', (e) => {
            e.stopPropagation();
            searchContainer.classList.toggle('active');
        });
    }

    // Close search when clicking outside
    document.addEventListener('click', (e) => {
        if (searchContainer && !searchContainer.contains(e.target) && e.target !== searchToggle) {
            searchContainer.classList.remove('active');
        }
    });

    // ===== WINDOW RESIZE HANDLER =====
    window.addEventListener('resize', () => {
        if (window.innerWidth > 992) {
            closeMobileMenu();
            if (searchContainer) searchContainer.classList.remove('active');

            // Close all dropdowns on desktop resize
            document.querySelectorAll('.nav-dropdown.active').forEach(dropdown => {
                dropdown.classList.remove('active');
            });
        }
    });

    // ===== ACTIVE NAV ITEM HIGHLIGHTING =====
    document.querySelectorAll('.nav-link-custom').forEach(link => {
        link.addEventListener('click', function(e) {
            if (this.getAttribute('href') === '#') {
                e.preventDefault();
            }

            if (window.innerWidth <= 992 && this.hasAttribute('href') && this.getAttribute('href') !== '#') {
                setTimeout(closeMobileMenu, 300);
            }

            // Update active state for top-level items only
            const parentItem = this.closest('.nav-item-custom');
            if (parentItem && !parentItem.classList.contains('nav-dropdown-item')) {
                document.querySelectorAll('.nav-item-custom.active').forEach(item => {
                    item.classList.remove('active');
                });
                parentItem.classList.add('active');

                // Add click effect
                this.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    this.style.transform = '';
                }, 200);
            }
        });
    });

    // ===== KEYBOARD SUPPORT =====
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            if (navMenu && navMenu.classList.contains('mobile-active')) {
                closeMobileMenu();
            }
            if (searchContainer && searchContainer.classList.contains('active')) {
                searchContainer.classList.remove('active');
            }
        }
    });

    // ===== TOUCH SUPPORT FOR DESKTOP DROPDOWNS =====
    document.querySelectorAll('.nav-dropdown > .nav-link-custom').forEach(link => {
        link.addEventListener('touchstart', function(e) {
            if (window.innerWidth > 992) {
                e.preventDefault();
                const dropdown = this.parentElement;

                // Close other dropdowns
                document.querySelectorAll('.nav-dropdown.hover-active').forEach(active => {
                    if (active !== dropdown) {
                        active.classList.remove('hover-active');
                    }
                });

                // Toggle current dropdown
                dropdown.classList.toggle('hover-active');
            }
        }, {passive: false});
    });

    // Close dropdowns when clicking outside on desktop
    document.addEventListener('click', (e) => {
        if (window.innerWidth > 992) {
            if (!e.target.closest('.nav-dropdown')) {
                document.querySelectorAll('.nav-dropdown.hover-active').forEach(dropdown => {
                    dropdown.classList.remove('hover-active');
                });
            }
        }
    });

    // ===== HOVER ANIMATIONS =====
    document.querySelectorAll('.nav-link-custom').forEach(link => {
        link.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-2px)';
        });

        link.addEventListener('mouseleave', function() {
            this.style.transform = '';
        });
    });
});
