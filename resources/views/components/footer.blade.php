<!-- FOOTER -->
<footer class="footer text-capitalize">
    <div class="footer-container">
        <!-- Brand Section -->
        <div class="footer-brand">
            <a href="{{ url(app()->getLocale().'/') }}" class="logo">
                <i class="fas fa-spa logo-icon"></i>
                <h2 class="logo">Lily<span>Decors</span></h2>
            </a>

            <p class="tagline">@lang('common.footer.tagline')</p>

            <div class="socials">
                <a href="https://www.pinterest.com/lilydecorsofficial/" target="_blank" title="@lang('common.footer.social.pinterest')">
                    <i class="fab fa-pinterest-p"></i>
                </a>
                <a href="https://www.instagram.com/lilydecors58/" target="_blank" title="@lang('common.footer.social.instagram')">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://www.facebook.com/profile.php?id=61586886530136" target="_blank" title="@lang('common.footer.social.facebook')">
                    <i class="fab fa-facebook-f"></i>
                </a>
            </div>

            <div class="newsletter">
                <h4>@lang('common.footer.newsletter.title')</h4>
                <p style="font-size: 0.9rem; color: var(--text-light); margin-bottom: 10px;">
                    @lang('common.footer.newsletter.description')
                </p>
                <form class="newsletter-form">
                    <input type="email" class="newsletter-input" placeholder="@lang('common.footer.newsletter.placeholder')" required>
                    <button type="submit" class="newsletter-btn">@lang('common.footer.newsletter.button')</button>
                </form>
            </div>
        </div>

        <!-- Quick Links -->
        <div class="footer-column">
            <h4>@lang('common.footer.quick_links.title')</h4>
            <ul>
                <li><a href="{{ route('index', ['lang' => app()->getLocale()]) }}">@lang('common.home')</a></li>
                <li><a href="{{ route('store', ['lang' => app()->getLocale()]) }}">@lang('common.footer.quick_links.shop_favorites')</a></li>
                <li><a href="{{ route('coupon', ['lang' => app()->getLocale()]) }}">@lang('common.footer.quick_links.latest_coupons')</a></li>
                <li><a href="{{ route('deal', ['lang' => app()->getLocale()]) }}">@lang('common.footer.quick_links.hot_deals')</a></li>
                <li><a href="{{ route('cashback', ['lang' => app()->getLocale()]) }}">@lang('common.footer.quick_links.cashback_offers')</a></li>
                <li><a href="{{ route('top-store', ['lang' => app()->getLocale()]) }}">@lang('common.footer.quick_links.top_stores')</a></li>
                <li><a href="{{ route('blog', ['lang' => app()->getLocale()]) }}">@lang('common.footer.quick_links.decor_blog')</a></li>
                <li><a href="{{ route('how-to', ['lang' => app()->getLocale()]) }}">@lang('common.footer.quick_links.how_to_guides')</a></li>
                <li><a href="{{ route('trending', ['lang' => app()->getLocale()]) }}">@lang('common.footer.quick_links.trending_now')</a></li>
            </ul>
        </div>

        <!-- Categories -->
        <div class="footer-column">
            <h4>@lang('common.footer.categories.title')</h4>
            <ul>
                @foreach ($categories as $category)
                    <li><a href="{{ route('category.details', $category->slug) }}">{{ $category->name }}</a></li>
                @endforeach
            </ul>
        </div>

        <!-- About & Help -->
        <div class="footer-column">
            <h4>@lang('common.footer.about_help.title')</h4>
            <ul>
                <li><a href="{{ route('about' , ['lang' => app()->getLocale()])}}">@lang('common.footer.about_help.about')</a></li>
                <li><a href="{{ route('contact' , ['lang' => app()->getLocale()])}}">@lang('common.contact_us')</a></li>
                <li><a href="{{ route('faq' , ['lang' => app()->getLocale()])}}">@lang('common.navigation.faq')</a></li>
                <li><a href="{{ route('privacy-policy' , ['lang' => app()->getLocale()])}}">@lang('common.privacy_policy')</a></li>
                <li><a href="{{ route('terms-and-conditions' , ['lang' => app()->getLocale()])}}">@lang('common.terms_of_service')</a></li>
                <li><a href="{{ route('affiliate-disclosure' , ['lang' => app()->getLocale()])}}">@lang('common.affiliate_disclosure')</a></li>
                <li><a href="{{ route('imprint' , ['lang' => app()->getLocale()])}}">@lang('common.footer.about_help.imprint')</a></li>
            </ul>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="copyright">
            @lang('common.footer.copyright', ['' => date('Y'), 'app_name' => config('app.name')])
        </div>
        <div class="footer-links">
            <a href="/">@lang('common.footer.bottom.sitemap')</a>
            <a href="/">@lang('common.footer.bottom.accessibility')</a>
            <a href="/">@lang('common.footer.bottom.cookie_policy')</a>
        </div>
    </div>

    {{-- <!-- Privacy Bar -->
    <div class="privacy-bar">
        <div class="privacy-text">
            @lang('common.footer.privacy.message')
        </div>
        <div class="privacy-buttons">
            <button class="privacy-btn" id="acceptCookies">@lang('common.footer.privacy.accept_all')</button>
            <button class="privacy-btn" id="manageCookies">@lang('common.footer.privacy.manage_settings')</button>
            <button class="privacy-btn" id="rejectCookies">@lang('common.footer.privacy.reject_all')</button>
        </div>
    </div> --}}
</footer>
