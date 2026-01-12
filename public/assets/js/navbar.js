       // ===== DOM ELEMENTS =====
        const mobileToggle = document.getElementById('mobileToggle');
        const mobileOverlay = document.getElementById('mobileOverlay');
        const navMenu = document.querySelector('.nav-menu');
        const searchToggle = document.getElementById('searchToggle');
        const searchContainer = document.getElementById('searchContainer');
        const mobileCloseBtn = document.createElement('button'); // Will be created for mobile menu

        // ===== MOBILE MENU TOGGLE =====
        mobileToggle.addEventListener('click', () => {
            navMenu.classList.add('mobile-active');
            mobileOverlay.classList.add('active');
            document.body.style.overflow = 'hidden';

            // Create and add close button to mobile menu
            if (!document.querySelector('.mobile-close')) {
                const closeBtn = document.createElement('button');
                closeBtn.className = 'mobile-close';
                closeBtn.innerHTML = '<i class="fas fa-times"></i>';
                closeBtn.addEventListener('click', closeMobileMenu);
                navMenu.insertBefore(closeBtn, navMenu.firstChild);

                // Create mobile search and actions container
                const mobileActions = document.createElement('div');
                mobileActions.className = 'mobile-actions';

                // Clone and adapt desktop search for mobile
                const mobileSearch = searchContainer.cloneNode(true);
                mobileSearch.classList.add('mobile-search');
                mobileSearch.classList.remove('active');

                // Mobile subscribe button
                const mobileSubscribe = document.createElement('button');
                mobileSubscribe.className = 'subscribe-btn';
                mobileSubscribe.textContent = 'Subscribe to Newsletter';
                mobileSubscribe.style.width = '100%';

                mobileActions.appendChild(mobileSearch);
                mobileActions.appendChild(mobileSubscribe);
                navMenu.appendChild(mobileActions);
            }
        });

        // Close mobile menu function
        function closeMobileMenu() {
            navMenu.classList.remove('mobile-active');
            mobileOverlay.classList.remove('active');
            document.body.style.overflow = '';
        }

        // Close mobile menu when clicking overlay
        mobileOverlay.addEventListener('click', closeMobileMenu);

        // ===== DROPDOWN TOGGLE FOR MOBILE =====
        document.addEventListener('click', (e) => {
            if (window.innerWidth <= 992) {
                // Handle dropdown toggling
                if (e.target.classList.contains('nav-link') &&
                    e.target.parentElement.classList.contains('dropdown')) {
                    e.preventDefault();
                    const dropdown = e.target.parentElement;

                    // Close other open dropdowns
                    document.querySelectorAll('.dropdown.active').forEach(activeDropdown => {
                        if (activeDropdown !== dropdown) {
                            activeDropdown.classList.remove('active');
                        }
                    });

                    // Toggle clicked dropdown
                    dropdown.classList.toggle('active');
                }
            }
        });

        // ===== SEARCH TOGGLE =====
        searchToggle.addEventListener('click', (e) => {
            e.stopPropagation();
            searchContainer.classList.toggle('active');
        });

        // Close search when clicking outside
        document.addEventListener('click', (e) => {
            if (!searchContainer.contains(e.target) && e.target !== searchToggle) {
                searchContainer.classList.remove('active');
            }
        });

        // ===== WINDOW RESIZE HANDLER =====
        window.addEventListener('resize', () => {
            if (window.innerWidth > 992) {
                // Ensure mobile menu is closed on desktop
                closeMobileMenu();
                searchContainer.classList.remove('active');

                // Remove mobile-specific elements
                const mobileClose = document.querySelector('.mobile-close');
                const mobileActions = document.querySelector('.mobile-actions');
                if (mobileClose) mobileClose.remove();
                if (mobileActions) mobileActions.remove();
            }
        });

        // ===== ACTIVE NAV ITEM HIGHLIGHTING =====
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function(e) {
                if (!this.parentElement.classList.contains('dropdown-item')) {
                    document.querySelectorAll('.nav-item.active').forEach(item => {
                        item.classList.remove('active');
                    });
                    this.parentElement.classList.add('active');
                }

                // Close mobile menu after clicking a non-dropdown link on mobile
                if (window.innerWidth <= 992 &&
                    !this.parentElement.classList.contains('dropdown')) {
                    closeMobileMenu();
                }
            });
        });