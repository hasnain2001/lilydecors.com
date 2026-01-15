
`
    <!-- FOOTER -->
    <footer class="footer">
        <div class="footer-container">
            <!-- Brand Section -->
            <div class="footer-brand">
                <a href="/" class="logo">
                    <i class="fas fa-spa logo-icon"></i>
                    <h2 class="logo">Lily<span>Decors</span></h2>
                </a>

                <p class="tagline">Transforming houses into homes with curated decor inspiration, practical guides, and timeless design ideas.</p>

                <div class="socials">
                    <a href="https://www.pinterest.com/lilydecorsofficial/" target="_blank" title="Pinterest"><i class="fab fa-pinterest-p"></i></a>
                    <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                </div>

                <div class="newsletter">
                    <h4>Join Our Newsletter</h4>
                    <p style="font-size: 0.9rem; color: var(--text-light); margin-bottom: 10px;">Get weekly decor inspiration & exclusive tips</p>
                    <form class="newsletter-form">
                        <input type="email" class="newsletter-input" placeholder="Your email address" required>
                        <button type="submit" class="newsletter-btn">Subscribe</button>
                    </form>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="footer-column">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="#">Shop Our Favorites</a></li>
                    <li><a href="#">Design Services</a></li>
                    <li><a href="#">Room Makeovers</a></li>
                    <li><a href="#">Before & After</a></li>
                    <li><a href="#">Free Design Guides</a></li>
                </ul>
            </div>

            <!-- Categories -->
            <div class="footer-column">
                <h4>Categories</h4>
                <ul>
                    @foreach ($categories as $category)
                        <li><a href="{{ route('category.details', $category->slug) }}">{{ $category->name }}</a></li>
                    @endforeach

                </ul>
            </div>

            <!-- About & Help -->
            <div class="footer-column">
                <h4>About & Help</h4>
                <ul>
                    <li><a href="#">About LilyDecors</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Affiliate Disclosure</a></li>
                </ul>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="copyright">
                © {{ date('Y') }}  {{ config('app.name') }} – All Rights Reserved | Interior Design Blog & Inspiration
            </div>
            <div class="footer-links">
                <a href="#">Sitemap</a>
                <a href="#">Accessibility</a>
                <a href="#">Cookie Policy</a>
            </div>
        </div>

        {{-- <!-- Privacy Bar -->
        <div class="privacy-bar">
            <div class="privacy-text">
                We use cookies to enhance your browsing experience and analyze our traffic.
            </div>
            <div class="privacy-buttons">
                <button class="privacy-btn" id="acceptCookies">Accept All</button>
                <button class="privacy-btn" id="manageCookies">Manage Settings</button>
                <button class="privacy-btn" id="rejectCookies">Reject All</button>
            </div>
        </div> --}}
    </footer>

