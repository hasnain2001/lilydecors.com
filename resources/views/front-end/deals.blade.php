@extends('layouts.master')
@section('title')
    @lang('deals.meta.title', ['app_name' => config('app.name')])
@endsection

@section('description')
    @lang('deals.meta.description')
@endsection

@section('keywords')
    @lang('deals.meta.keywords')
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/deal.css') }}">
@endpush

@section('content')
<main class="container py-4">
    <!-- Page Header -->
    <div class="deals-header">
        <div class="container">
            <h1>@lang('deals.header.title')</h1>
            <p class="lead">@lang('deals.header.subtitle')</p>
        </div>
    </div>

    <!-- Category Filters -->
    <div class="deal-categories text-center">
        <h5 class="mb-3">@lang('deals.categories.title')</h5>
        <div>
            @foreach ($categories as $category)
            <span class="category-badge" data-category="{{ $category->id }}">{{ $category->name }}</span>
            @endforeach
        </div>
    </div>

    <!-- Deal List -->
    <div class="row">
        @forelse ($coupons as $coupon)
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="deal-card h-100">
                @if($coupon->authentication == 'feature')
                <div class="deal-badge">@lang('deals.deal_badge.hot')</div>
                @endif

                <div class="deal-image-container">
                    @if ($coupon->stores->image)
                    <img src="{{ asset('uploads/stores/' . $coupon->stores->image) }}" 
                         class="deal-image" 
                         alt="@lang('deals.image_alt', ['name' => $coupon->stores->name])" 
                         loading="lazy"
                         onerror="this.src='{{ asset('assets/img/no-image-found.png') }}'">
                    @else
                    <div class="d-flex align-items-center justify-content-center h-100">
                        <i class="fas fa-store fa-3x text-primary"></i>
                    </div>
                    @endif
                </div>

                <div class="deal-content">
                    <h3 class="deal-title">{{ $coupon->name }}</h3>
                    <p class="deal-description">{{ $coupon->description }}</p>

                    <div class="deal-meta">
                        <div class="deal-expiry">
                            <i class="far fa-clock"></i> 
                            @lang('deals.expires') {{ \Carbon\Carbon::parse($coupon->ending_date)->format('M d') }}
                        </div>
                        <div class="deal-usage">
                            <i class="fas fa-users"></i> @lang('deals.used_count', ['count' => $coupon->clicks])
                        </div>
                    </div>

                    <a href="{{ $coupon->stores->destination_url }}" 
                       target="_blank" 
                       class="view-deal-btn" 
                       onclick="updateClickCount({{ $coupon->id }})">
                       @lang('deals.view_deal')
                    </a>

                    <a href="{{ route('store.details', ['slug' => Str::slug($coupon->stores->slug)]) }}" 
                       class="more-offers-btn">
                      @lang('deals.more_offers')
                    </a>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12">
            <div class="no-deals-card">
                <div class="no-deals-icon">
                    <i class="fas fa-fire-extinguisher fa-3x"></i>
                </div>
                <h4 class="text-dark mb-3">@lang('deals.empty.title')</h4>
                <p class="text-muted mb-0">
                    @lang('deals.empty.message')
                </p>
            </div>
        </div>
        @endforelse
    </div>

    <!-- Pagination -->
    @if($coupons->hasPages())
    <div class="d-flex justify-content-center mt-5">
        <nav aria-label="@lang('deals.pagination.label')">
            {{ $coupons->links('pagination::bootstrap-5') }}
        </nav>
    </div>
    @endif
</main>
@endsection

@push('scripts')
<script>
    function updateClickCount(couponId) {
        fetch('{{ route("update.clicks") }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ coupon_id: couponId })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                const usedCountElement = document.querySelector(`.deal-card[data-id="${couponId}"] .deal-usage`);
                if (usedCountElement) {
                    usedCountElement.innerHTML = `<i class="fas fa-users me-1"></i> ${data.clicks}`;
                }
            }
        })
        .catch(error => console.error('Error:', error));
    }

    // Category filter functionality
    document.querySelectorAll('.category-badge').forEach(badge => {
        badge.addEventListener('click', function() {
            document.querySelectorAll('.category-badge').forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            
            // Filter deals by category
            const categoryId = this.getAttribute('data-category');
            const dealCards = document.querySelectorAll('.deal-card');
            
            dealCards.forEach(card => {
                const cardCategory = card.getAttribute('data-category');
                if (categoryId === 'all' || cardCategory === categoryId) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });

    // Intersection Observer for animations
    if ('IntersectionObserver' in window) {
        const dealCards = document.querySelectorAll('.deal-card');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                }
            });
        }, {
            threshold: 0.1
        });

        dealCards.forEach(card => {
            observer.observe(card);
        });
    }
</script>
@endpush