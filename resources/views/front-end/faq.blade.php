@extends('layouts.master')
@section('title')
    @lang('faq.meta.title')
@endsection

@section('description')
    @lang('faq.meta.description')
@endsection

@section('keywords')
    @lang('faq.meta.keywords')
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/faq.css') }}">
@endpush

@section('content')
    <!-- Hero Section -->
    <section class="faq-hero">
        <div class="faq-container">
            <h1>@lang('faq.hero.title')</h1>
            <p>@lang('faq.hero.description')</p>
            <div class="hero-badge">
                <i class="fas fa-tag me-2"></i>@lang('faq.hero.badge')
            </div>
        </div>
    </section>

    <!-- Stats Banner -->
    <div class="faq-container">
        <div class="stats-banner">
            <div class="stats-grid">
                <div class="stat-item">
                    <h3>@lang('faq.stats.active_coupons')</h3>
                    <p>@lang('faq.stats.active_coupons_label')</p>
                </div>
                <div class="stat-item">
                    <h3>@lang('faq.stats.partner_brands')</h3>
                    <p>@lang('faq.stats.partner_brands_label')</p>
                </div>
                <div class="stat-item">
                    <h3>@lang('faq.stats.saved_amount')</h3>
                    <p>@lang('faq.stats.saved_amount_label')</p>
                </div>
                <div class="stat-item">
                    <h3>@lang('faq.stats.happy_members')</h3>
                    <p>@lang('faq.stats.happy_members_label')</p>
                </div>
            </div>
        </div>
    </div>

    <div class="faq-container">
        <!-- Search Bar -->
        <div class="faq-search">
            <i class="fas fa-search"></i>
            <input type="text" id="faqSearch" placeholder="@lang('faq.search.placeholder')">
        </div>

        <!-- FAQ Categories -->
        <div class="faq-categories">
            <button class="category-btn active" data-category="all">
                <i class="fas fa-star"></i> @lang('faq.categories.all')
            </button>
            <button class="category-btn" data-category="coupons">
                <i class="fas fa-tag"></i> @lang('faq.categories.coupons')
            </button>
            <button class="category-btn" data-category="cashback">
                <i class="fas fa-money-bill-wave"></i> @lang('faq.categories.cashback')
            </button>
            <button class="category-btn" data-category="affiliate">
                <i class="fas fa-handshake"></i> @lang('faq.categories.affiliate')
            </button>
            <button class="category-btn" data-category="account">
                <i class="fas fa-user"></i> @lang('faq.categories.account')
            </button>
            <button class="category-btn" data-category="earning">
                <i class="fas fa-wallet"></i> @lang('faq.categories.earning')
            </button>
        </div>

        <!-- FAQ Sections -->
        
        <!-- Coupons & Deals -->
        <section class="faq-section" data-category="coupons">
            <h2 class="faq-category-title">
                <i class="fas fa-tag"></i> @lang('faq.categories.coupons')
            </h2>
            
            <div class="faq-item">
                <button class="faq-question">
                    <div class="question-icon">Q</div>
                    <div class="faq-question-content">
                        @lang('faq.questions.coupons.how_to_use.title')
                    </div>
                    <i class="fas fa-chevron-down toggle-icon"></i>
                </button>
                <div class="faq-answer">
                    <p>@lang('faq.questions.coupons.how_to_use.description')</p>
                    <div class="highlight-box">
                        <ol style="margin: 0; padding-left: 20px;">
                            @foreach(__('faq.questions.coupons.how_to_use.steps') as $step)
                                <li>{{ $step }}</li>
                            @endforeach
                        </ol>
                    </div>
                    <p><strong>@lang('faq.questions.coupons.how_to_use.pro_tip.title'):</strong> @lang('faq.questions.coupons.how_to_use.pro_tip.description')</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    <div class="question-icon">Q</div>
                    <div class="faq-question-content">
                        @lang('faq.questions.coupons.code_not_working.title')
                    </div>
                    <i class="fas fa-chevron-down toggle-icon"></i>
                </button>
                <div class="faq-answer">
                    <p>@lang('faq.questions.coupons.code_not_working.description')</p>
                    <ul>
                        @foreach(__('faq.questions.coupons.code_not_working.reasons') as $reason => $description)
                            <li><strong>{{ $reason }}:</strong> {{ $description }}</li>
                        @endforeach
                    </ul>
                    <p><strong>@lang('faq.questions.coupons.code_not_working.solution.title'):</strong> @lang('faq.questions.coupons.code_not_working.solution.description')</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    <div class="question-icon">Q</div>
                    <div class="faq-question-content">
                        @lang('faq.questions.coupons.update_frequency.title')
                    </div>
                    <i class="fas fa-chevron-down toggle-icon"></i>
                </button>
                <div class="faq-answer">
                    <p>@lang('faq.questions.coupons.update_frequency.description')</p>
                    <ul>
                        @foreach(__('faq.questions.coupons.update_frequency.schedule') as $item => $description)
                            <li><strong>{{ $item }}:</strong> {{ $description }}</li>
                        @endforeach
                    </ul>
                    <div class="highlight-box">
                        <p><i class="fas fa-bell me-2"></i> <strong>@lang('faq.questions.coupons.update_frequency.get_notified.title'):</strong> @lang('faq.questions.coupons.update_frequency.get_notified.description')</p>
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    <div class="question-icon">Q</div>
                    <div class="faq-question-content">
                        @lang('faq.questions.coupons.multiple_coupons.title')
                    </div>
                    <i class="fas fa-chevron-down toggle-icon"></i>
                </button>
                <div class="faq-answer">
                    <p>@lang('faq.questions.coupons.multiple_coupons.description')</p>
                    <ul>
                        @foreach(__('faq.questions.coupons.multiple_coupons.policies') as $policy => $description)
                            <li><strong>{{ $policy }}:</strong> {{ $description }}</li>
                        @endforeach
                    </ul>
                    <p><strong>@lang('faq.questions.coupons.multiple_coupons.best_strategy.title'):</strong> @lang('faq.questions.coupons.multiple_coupons.best_strategy.description', ['code' => '<span class="coupon-code">BESTDEAL</span>'])</p>
                </div>
            </div>
        </section>

        <!-- Cashback & Rewards -->
        <section class="faq-section" data-category="cashback">
            <h2 class="faq-category-title">
                <i class="fas fa-money-bill-wave"></i> @lang('faq.categories.cashback')
            </h2>
            
            <div class="faq-item">
                <button class="faq-question">
                    <div class="question-icon">Q</div>
                    <div class="faq-question-content">
                        @lang('faq.questions.cashback.how_it_works.title')
                    </div>
                    <i class="fas fa-chevron-down toggle-icon"></i>
                </button>
                <div class="faq-answer">
                    <p>@lang('faq.questions.cashback.how_it_works.description')</p>
                    <div class="highlight-box">
                        <ol style="margin: 0; padding-left: 20px;">
                            @foreach(__('faq.questions.cashback.how_it_works.steps') as $step)
                                <li>{{ $step }}</li>
                            @endforeach
                        </ol>
                    </div>
                    <p><strong>@lang('faq.questions.cashback.how_it_works.example.title'):</strong> @lang('faq.questions.cashback.how_it_works.example.description')</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    <div class="question-icon">Q</div>
                    <div class="faq-question-content">
                        @lang('faq.questions.cashback.timeline.title')
                    </div>
                    <i class="fas fa-chevron-down toggle-icon"></i>
                </button>
                <div class="faq-answer">
                    <p>@lang('faq.questions.cashback.timeline.description')</p>
                    <ul>
                        @foreach(__('faq.questions.cashback.timeline.stages') as $stage => $description)
                            <li><strong>{{ $stage }}:</strong> {{ $description }}</li>
                        @endforeach
                    </ul>
                    <p><strong>@lang('faq.questions.cashback.timeline.note.title'):</strong> @lang('faq.questions.cashback.timeline.note.description')</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    <div class="question-icon">Q</div>
                    <div class="faq-question-content">
                        @lang('faq.questions.cashback.combine_with_coupons.title')
                    </div>
                    <i class="fas fa-chevron-down toggle-icon"></i>
                </button>
                <div class="faq-answer">
                    <p><strong>@lang('faq.questions.cashback.combine_with_coupons.answer'):</strong></p>
                    <ul>
                        @foreach(__('faq.questions.cashback.combine_with_coupons.tips') as $tip)
                            <li>{{ $tip }}</li>
                        @endforeach
                    </ul>
                    <div class="highlight-box">
                        <p><i class="fas fa-lightbulb me-2"></i> <strong>@lang('faq.questions.cashback.combine_with_coupons.double_dip.title'):</strong> @lang('faq.questions.cashback.combine_with_coupons.double_dip.description', ['code' => '<span class="coupon-code">SAVE20</span>'])</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Affiliate Program -->
        <section class="faq-section" data-category="affiliate">
            <h2 class="faq-category-title">
                <i class="fas fa-handshake"></i> @lang('faq.categories.affiliate')
            </h2>
            
            <div class="faq-item">
                <button class="faq-question">
                    <div class="question-icon">Q</div>
                    <div class="faq-question-content">
                        @lang('faq.questions.affiliate.become_affiliate.title')
                    </div>
                    <i class="fas fa-chevron-down toggle-icon"></i>
                </button>
                <div class="faq-answer">
                    <p>@lang('faq.questions.affiliate.become_affiliate.description')</p>
                    <div class="highlight-box">
                        <ol style="margin: 0; padding-left: 20px;">
                            @foreach(__('faq.questions.affiliate.become_affiliate.steps') as $step)
                                <li>{{ $step }}</li>
                            @endforeach
                        </ol>
                    </div>
                    <p><strong>@lang('faq.questions.affiliate.become_affiliate.commission_rates.title'):</strong> @lang('faq.questions.affiliate.become_affiliate.commission_rates.description')</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    <div class="question-icon">Q</div>
                    <div class="faq-question-content">
                        @lang('faq.questions.affiliate.requirements.title')
                    </div>
                    <i class="fas fa-chevron-down toggle-icon"></i>
                </button>
                <div class="faq-answer">
                    <p>@lang('faq.questions.affiliate.requirements.description')</p>
                    <ul>
                        @foreach(__('faq.questions.affiliate.requirements.list') as $requirement)
                            <li>{{ $requirement }}</li>
                        @endforeach
                    </ul>
                    <p><strong>@lang('faq.questions.affiliate.requirements.bonus.title'):</strong> @lang('faq.questions.affiliate.requirements.bonus.description')</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    <div class="question-icon">Q</div>
                    <div class="faq-question-content">
                        @lang('faq.questions.affiliate.earnings_potential.title')
                    </div>
                    <i class="fas fa-chevron-down toggle-icon"></i>
                </button>
                <div class="faq-answer">
                    <p>@lang('faq.questions.affiliate.earnings_potential.description')</p>
                    <ul>
                        @foreach(__('faq.questions.affiliate.earnings_potential.types') as $type => $description)
                            <li><strong>{{ $type }}:</strong> {{ $description }}</li>
                        @endforeach
                    </ul>
                    <div class="highlight-box">
                        <p><i class="fas fa-chart-line me-2"></i> <strong>@lang('faq.questions.affiliate.earnings_potential.top_earners.title'):</strong> @lang('faq.questions.affiliate.earnings_potential.top_earners.description')</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- How It Works Section -->
        <section class="how-it-works">
            <h3>@lang('faq.how_it_works.title')</h3>
            <p>@lang('faq.how_it_works.description')</p>
            
            <div class="steps-grid">
                @foreach(__('faq.how_it_works.steps') as $step)
                <div class="step-item">
                    <div class="step-number">{{ $loop->iteration }}</div>
                    <h4>{{ $step['title'] }}</h4>
                    <p>{{ $step['description'] }}</p>
                </div>
                @endforeach
            </div>
        </section>

        <!-- Account & Technical -->
        <section class="faq-section" data-category="account">
            <h2 class="faq-category-title">
                <i class="fas fa-user"></i> @lang('faq.categories.account')
            </h2>
            
            <div class="faq-item">
                <button class="faq-question">
                    <div class="question-icon">Q</div>
                    <div class="faq-question-content">
                        @lang('faq.questions.account.free_account.title')
                    </div>
                    <i class="fas fa-chevron-down toggle-icon"></i>
                </button>
                <div class="faq-answer">
                    <p><strong>@lang('faq.questions.account.free_account.answer'):</strong> @lang('faq.questions.account.free_account.description')</p>
                    <ul>
                        @foreach(__('faq.questions.account.free_account.benefits') as $benefit)
                            <li>{{ $benefit }}</li>
                        @endforeach
                    </ul>
                    <p>@lang('faq.questions.account.free_account.conclusion')</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    <div class="question-icon">Q</div>
                    <div class="faq-question-content">
                        @lang('faq.questions.account.tracking_issues.title')
                    </div>
                    <i class="fas fa-chevron-down toggle-icon"></i>
                </button>
                <div class="faq-answer">
                    <p>@lang('faq.questions.account.tracking_issues.description')</p>
                    <ul>
                        @foreach(__('faq.questions.account.tracking_issues.solutions') as $solution => $description)
                            <li><strong>{{ $solution }}:</strong> {{ $description }}</li>
                        @endforeach
                    </ul>
                    <p><strong>@lang('faq.questions.account.tracking_issues.need_help.title'):</strong> @lang('faq.questions.account.tracking_issues.need_help.description')</p>
                </div>
            </div>
        </section>

        <!-- Earning Money -->
        <section class="faq-section" data-category="earning">
            <h2 class="faq-category-title">
                <i class="fas fa-wallet"></i> @lang('faq.categories.earning')
            </h2>
            
            <div class="faq-item">
                <button class="faq-question">
                    <div class="question-icon">Q</div>
                    <div class="faq-question-content">
                        @lang('faq.questions.earning.ways_to_earn.title')
                    </div>
                    <i class="fas fa-chevron-down toggle-icon"></i>
                </button>
                <div class="faq-answer">
                    <p>@lang('faq.questions.earning.ways_to_earn.description')</p>
                    <ul>
                        @foreach(__('faq.questions.earning.ways_to_earn.methods') as $method => $description)
                            <li><strong>{{ $method }}:</strong> {{ $description }}</li>
                        @endforeach
                    </ul>
                    <div class="highlight-box">
                        <p><i class="fas fa-gem me-2"></i> <strong>@lang('faq.questions.earning.ways_to_earn.pro_tip.title'):</strong> @lang('faq.questions.earning.ways_to_earn.pro_tip.description')</p>
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    <div class="question-icon">Q</div>
                    <div class="faq-question-content">
                        @lang('faq.questions.earning.payment_details.title')
                    </div>
                    <i class="fas fa-chevron-down toggle-icon"></i>
                </button>
                <div class="faq-answer">
                    <p>@lang('faq.questions.earning.payment_details.description')</p>
                    <ul>
                        @foreach(__('faq.questions.earning.payment_details.details') as $detail => $description)
                            <li><strong>{{ $detail }}:</strong> {{ $description }}</li>
                        @endforeach
                    </ul>
                    <p>@lang('faq.questions.earning.payment_details.conclusion')</p>
                </div>
            </div>
        </section>

        <!-- Final CTA -->
        <div class="faq-cta">
            <h3>@lang('faq.cta.title')</h3>
            <p>@lang('faq.cta.description')</p>
            <div class="cta-buttons">
                <a href="{{ route('register') }}" class="cta-btn primary">
                    <i class="fas fa-user-plus"></i> @lang('faq.cta.join_button')
                </a>
                <a href="{{ route('coupon', ['lang' => app()->getLocale()]) }}" class="cta-btn secondary">
                    <i class="fas fa-tags"></i> @lang('faq.cta.browse_button')
                </a>
            </div>
            <p style="margin-top: 30px; font-size: 0.9rem; color: #888;">
                <i class="fas fa-shield-alt me-2"></i>@lang('faq.cta.security_note')
            </p>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // FAQ Accordion Functionality
        const faqQuestions = document.querySelectorAll('.faq-question');
        
        faqQuestions.forEach(question => {
            question.addEventListener('click', function() {
                const answer = this.nextElementSibling;
                const isActive = this.classList.contains('active');
                
                // Toggle current FAQ
                this.classList.toggle('active');
                
                if (isActive) {
                    answer.classList.remove('show');
                } else {
                    // Close other FAQs in same section
                    const section = this.closest('.faq-section');
                    if (section) {
                        section.querySelectorAll('.faq-question.active').forEach(activeQ => {
                            if (activeQ !== this) {
                                activeQ.classList.remove('active');
                                activeQ.nextElementSibling.classList.remove('show');
                            }
                        });
                    }
                    
                    // Open current FAQ
                    answer.classList.add('show');
                }
            });
        });
        
        // FAQ Category Filtering with smooth animation
        const categoryButtons = document.querySelectorAll('.category-btn');
        const faqSections = document.querySelectorAll('.faq-section');
        
        categoryButtons.forEach(button => {
            button.addEventListener('click', function() {
                const category = this.getAttribute('data-category');
                
                // Update active button
                categoryButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');
                
                // Smooth transition for sections
                faqSections.forEach(section => {
                    if (category === 'all' || section.getAttribute('data-category') === category) {
                        section.style.display = 'block';
                        setTimeout(() => {
                            section.style.opacity = '1';
                            section.style.transform = 'translateY(0)';
                        }, 10);
                    } else {
                        section.style.opacity = '0';
                        section.style.transform = 'translateY(20px)';
                        setTimeout(() => {
                            section.style.display = 'none';
                        }, 300);
                    }
                });
                
                // Scroll to first visible section
                setTimeout(() => {
                    const firstVisible = document.querySelector('.faq-section[style*="display: block"]');
                    if (firstVisible && category !== 'all') {
                        firstVisible.scrollIntoView({ behavior: 'smooth', block: 'start' });
                        
                        // Open first FAQ in the category
                        const firstQuestion = firstVisible.querySelector('.faq-question');
                        if (firstQuestion && !firstQuestion.classList.contains('active')) {
                            firstQuestion.click();
                        }
                    }
                }, 350);
            });
        });
        
        // Enhanced Search Functionality
        const searchInput = document.getElementById('faqSearch');
        let searchTimeout;
        
        searchInput.addEventListener('input', function() {
            clearTimeout(searchTimeout);
            searchTimeout = setTimeout(() => {
                const searchTerm = this.value.toLowerCase().trim();
                
                if (searchTerm.length < 2) {
                    // Reset view
                    categoryButtons.forEach(btn => {
                        if (btn.getAttribute('data-category') === 'all') {
                            btn.click();
                        }
                    });
                    return;
                }
                
                // Search through all FAQs
                let foundAny = false;
                const foundCategories = new Set();
                
                document.querySelectorAll('.faq-item').forEach(item => {
                    const question = item.querySelector('.faq-question-content').textContent.toLowerCase();
                    const answer = item.querySelector('.faq-answer').textContent.toLowerCase();
                    
                    if (question.includes(searchTerm) || answer.includes(searchTerm)) {
                        item.style.display = 'block';
                        foundAny = true;
                        
                        // Highlight search term
                        highlightText(item, searchTerm);
                        
                        // Open FAQ if contains search term
                        if (!item.querySelector('.faq-question').classList.contains('active')) {
                            item.querySelector('.faq-question').click();
                        }
                        
                        // Track category
                        const section = item.closest('.faq-section');
                        if (section) {
                            foundCategories.add(section.getAttribute('data-category'));
                        }
                    } else {
                        item.style.display = 'none';
                        removeHighlights(item);
                    }
                });
                
                // Show relevant categories or show all if none found
                if (foundAny) {
                    // Show all categories button
                    categoryButtons.forEach(btn => btn.classList.remove('active'));
                    
                    // Show relevant sections
                    faqSections.forEach(section => {
                        const sectionCategory = section.getAttribute('data-category');
                        if (foundCategories.has(sectionCategory)) {
                            section.style.display = 'block';
                            setTimeout(() => {
                                section.style.opacity = '1';
                                section.style.transform = 'translateY(0)';
                            }, 10);
                        } else {
                            section.style.display = 'none';
                        }
                    });
                } else {
                    // No results found
                    faqSections.forEach(section => {
                        section.style.display = 'none';
                    });
                    
                    // Show no results message
                    showNoResults(searchTerm);
                }
            }, 300);
        });
        
        function highlightText(element, searchTerm) {
            const walker = document.createTreeWalker(
                element,
                NodeFilter.SHOW_TEXT,
                null,
                false
            );
            
            let node;
            while (node = walker.nextNode()) {
                const parent = node.parentNode;
                if (parent.nodeName === 'MARK') continue;
                
                const index = node.textContent.toLowerCase().indexOf(searchTerm);
                if (index >= 0) {
                    const span = document.createElement('mark');
                    span.style.backgroundColor = '#fff3cd';
                    span.style.padding = '2px 4px';
                    span.style.borderRadius = '3px';
                    
                    const middle = node.splitText(index);
                    const end = middle.splitText(searchTerm.length);
                    
                    const highlighted = middle.cloneNode(true);
                    span.appendChild(highlighted);
                    parent.replaceChild(span, middle);
                }
            }
        }
        
        function removeHighlights(element) {
            element.querySelectorAll('mark').forEach(mark => {
                const parent = mark.parentNode;
                parent.replaceChild(document.createTextNode(mark.textContent), mark);
                parent.normalize();
            });
        }
        
        function showNoResults(searchTerm) {
            // Remove existing no results message
            const existingMsg = document.querySelector('.no-results-message');
            if (existingMsg) existingMsg.remove();
            
            // Create new message
            const message = document.createElement('div');
            message.className = 'no-results-message';
            message.innerHTML = `
                <div style="text-align: center; padding: 40px; background: #f8f9fa; border-radius: 10px; margin: 20px 0;">
                    <i class="fas fa-search fa-3x mb-3" style="color: #667eea;"></i>
                    <h3 style="color: #2a2a2a; margin-bottom: 10px;">@lang('faq.search.no_results.title', ['term' => '${searchTerm}'])</h3>
                    <p style="color: #5c5c5c; margin-bottom: 20px;">@lang('faq.search.no_results.description')</p>
                    <button class="category-btn" onclick="document.querySelector('[data-category=\\'all\\']').click(); searchInput.value='';">
                        <i class="fas fa-redo"></i> @lang('faq.search.no_results.show_all')
                    </button>
                </div>
            `;
            
            const container = document.querySelector('.faq-container');
            const categories = document.querySelector('.faq-categories');
            container.insertBefore(message, categories.nextSibling);
        }
        
        // Clear search on ESC key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && searchInput.value) {
                searchInput.value = '';
                searchInput.dispatchEvent(new Event('input'));
            }
        });
        
        // Auto-open first FAQ in each section for better UX
        setTimeout(() => {
            faqSections.forEach(section => {
                const firstQuestion = section.querySelector('.faq-question');
                if (firstQuestion && !document.querySelector('.faq-question.active')) {
                    firstQuestion.click();
                }
            });
        }, 1000);
    });
</script>
@endpush