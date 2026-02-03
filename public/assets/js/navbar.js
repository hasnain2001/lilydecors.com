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
    // CLOSE MENU WHEN CLICKING OUTSIDE
    // ===============================
    document.addEventListener('click', (e) => {
        if (window.innerWidth <= 992) {
            if (
                navMenu.classList.contains('mobile-active') &&
                !navMenu.contains(e.target) &&
                !mobileToggle.contains(e.target)
            ) {
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
        searchContainer?.classList.toggle('active');
    });

    document.addEventListener('click', (e) => {
        if (
            searchContainer &&
            !searchContainer.contains(e.target) &&
            !searchToggle.contains(e.target)
        ) {
            searchContainer.classList.remove('active');
        }
    });

    // ===============================
    // RESIZE FIX
    // ===============================
    window.addEventListener('resize', () => {
        if (window.innerWidth > 992) {
            closeMobileMenu();
            searchContainer?.classList.remove('active');
        }
    });

    // ===============================
    // ESC KEY SUPPORT
    // ===============================
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            closeMobileMenu();
            searchContainer?.classList.remove('active');
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

});
