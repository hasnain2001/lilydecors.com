@if($results['stores']->total() > 0 || $results['blogs']->total() > 0 || $results['coupons']->total() > 0 || $results['categories']->total() > 0)
    
    <!-- Results Summary Card -->
    <div class="alert alert-primary bg-soft-primary border-0 mb-4 fade show" role="alert">
        <div class="d-flex align-items-center">
            <div class="avatar-sm">
                <span class="avatar-title bg-primary-lighten rounded-circle">
                    <i class="mdi mdi-magnify fs-20 text-primary"></i>
                </span>
            </div>
            <div class="flex-grow-1 ms-3">
                <h5 class="alert-heading mb-1">Search Results Found!</h5>
                <p class="mb-0">Found 
                    <span class="badge bg-primary me-1">{{ $results['stores']->total() }} Stores</span>
                    <span class="badge bg-warning me-1">{{ $results['coupons']->total() }} Coupons</span>
                    <span class="badge bg-info me-1">{{ $results['blogs']->total() }} Blogs</span>
                    <span class="badge bg-success">{{ $results['categories']->total() }} Categories</span>
                </p>
            </div>
        </div>
    </div>

    @if($results['stores']->total() > 0)
    <div class="mb-4 animate__animated animate__fadeInUp">
        <div class="d-flex align-items-center mb-3">
            <div class="flex-shrink-0">
                <div class="avatar-sm">
                    <span class="avatar-title bg-primary-lighten rounded-circle">
                        <i class="mdi mdi-store text-primary fs-20"></i>
                    </span>
                </div>
            </div>
            <div class="flex-grow-1 ms-2">
                <h5 class="mb-0">Stores <span class="badge bg-primary ms-2">{{ $results['stores']->total() }}</span></h5>
                <p class="text-muted small mb-0">Browse through matching stores</p>
            </div>
            <div class="flex-shrink-0">
                <a href="#stores-section" class="text-primary" data-bs-toggle="collapse" role="button" aria-expanded="true">
                    <i class="mdi mdi-chevron-up fs-20"></i>
                </a>
            </div>
        </div>
        
        <div class="collapse show" id="stores-section">
            <div class="row g-3">
                @foreach($results['stores'] as $store)
                <div class="col-md-6 col-lg-4">
                    <div class="card store-card h-100 border-0 shadow-sm hover-lift">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <div class="store-image-wrapper">
                                        <img src="{{ asset('uploads/stores/' . $store->image) }}" 
                                             alt="{{ $store->name }}"
                                             class="rounded-3 store-image"
                                             width="60" height="60"
                                             onerror="this.onerror=null;this.src='{{ asset('assets/img/no-image-found.png') }}'">
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                     <a href="{{ route('admin.store.show', $store->id) }}" class="text-dark stretched-link">
                                    <h6 class="mb-1">
                                       
                                            {{ $store->name }}
                                      
                                    </h6>
                                      </a>
                                    <div class="d-flex align-items-center gap-2 mb-1">
                                        <span class="badge bg-soft-info text-info">
                                            <i class="mdi mdi-folder-outline me-1"></i>{{ $store->category->name ?? 'Uncategorized' }}
                                        </span>
                                        <span class="badge bg-{{ $store->status == '1' ? 'soft-success' : 'soft-danger' }} text-{{ $store->status == '1' ? 'success' : 'danger' }}">
                                            <i class="mdi mdi-{{ $store->status == '1' ? 'check-circle' : 'alert-circle' }} me-1"></i>
                                            {{ $store->status == '1' ? 'Active' : 'Inactive' }}
                                        </span>
                                    </div>
                                    <small class="text-muted">
                                        <i class="mdi mdi-calendar me-1"></i>{{ $store->created_at->format('M d, Y') }}
                                    </small>
                                </div>
                            </div>
                            <div class="mt-3 pt-2 border-top d-flex justify-content-between align-items-center">
                                <span class="text-muted small">
                                    <i class="mdi mdi-tag-outline me-1"></i>{{ $store->coupons->count() ?? 0 }} Coupons
                                </span>
                                <span class="text-muted small">
                                    <i class="mdi mdi-eye-outline me-1"></i>{{ $store->views ?? 0 }} Views
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
            @if($results['stores']->hasPages())
            <div class="text-end mt-3">
                {{ $results['stores']->withQueryString()->links('pagination::bootstrap-4') }}
            </div>
            @endif
        </div>
    </div>
    @endif

    @if($results['coupons']->total() > 0)
    <div class="mb-4 animate__animated animate__fadeInUp">
        <div class="d-flex align-items-center mb-3">
            <div class="flex-shrink-0">
                <div class="avatar-sm">
                    <span class="avatar-title bg-warning-lighten rounded-circle">
                        <i class="mdi mdi-tag text-warning fs-20"></i>
                    </span>
                </div>
            </div>
            <div class="flex-grow-1 ms-2">
                <h5 class="mb-0">Coupons <span class="badge bg-warning ms-2">{{ $results['coupons']->total() }}</span></h5>
                <p class="text-muted small mb-0">Discover amazing deals and discounts</p>
            </div>
            <div class="flex-shrink-0">
                <a href="#coupons-section" class="text-warning" data-bs-toggle="collapse" role="button" aria-expanded="true">
                    <i class="mdi mdi-chevron-up fs-20"></i>
                </a>
            </div>
        </div>
        
        <div class="collapse show" id="coupons-section">
            <div class="card border-0 shadow-sm">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="bg-light">
                            <tr>
                                <th class="border-0 rounded-start">Coupon</th>
                                <th class="border-0">Code</th>
                                <th class="border-0">Store</th>
                                <th class="border-0">Discount</th>
                                <th class="border-0">Status</th>
                                <th class="border-0 rounded-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($results['coupons'] as $coupon)
                            <tr class="coupon-row">
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <div class="coupon-icon bg-soft-warning rounded-circle p-2">
                                                <i class="mdi mdi-tag text-warning"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-0">{{ $coupon->name }}</h6>
                                            <small class="text-muted">{{ Str::limit($coupon->description ?? '', 50) }}</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="code-wrapper position-relative">
                                        <span class="coupon-code bg-light p-2 rounded-3 font-monospace">{{ $coupon->code }}</span>
                                        <button class="btn btn-sm btn-link copy-btn" data-code="{{ $coupon->code }}" title="Copy code">
                                            <i class="mdi mdi-content-copy text-muted"></i>
                                        </button>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        @if($coupon->store)
                                        <img src="{{ asset('uploads/stores/' . $coupon->store->image) }}" 
                                             alt="{{ $coupon->store->name }}"
                                             class="rounded-circle me-2"
                                             width="24" height="24"
                                             onerror="this.onerror=null;this.src='{{ asset('assets/img/no-image-found.png') }}'">
                                        <span>{{ $coupon->store->name }}</span>
                                        @else
                                        <span class="text-muted">N/A</span>
                                        @endif
                                    </div>
                                </td>
                                <td>
                                    @if($coupon->type == 'percentage')
                                        <span class="badge bg-soft-primary text-primary">{{ $coupon->discount }}% OFF</span>
                                    @elseif($coupon->type == 'fixed')
                                        <span class="badge bg-soft-success text-success">${{ $coupon->discount }} OFF</span>
                                    @else
                                        <span class="badge bg-soft-info text-info">Free Shipping</span>
                                    @endif
                                </td>
                                <td>
                                    <span class="badge bg-{{ $coupon->status == '1' ? 'soft-success' : 'soft-danger' }} text-{{ $coupon->status == '1' ? 'success' : 'danger' }}">
                                        <i class="mdi mdi-{{ $coupon->status == '1' ? 'check' : 'close' }} me-1"></i>
                                        {{ $coupon->status == '1' ? 'Active' : 'Inactive' }}
                                    </span>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('admin.coupon.edit', $coupon->id) }}" 
                                           class="btn btn-sm btn-soft-primary"
                                           data-bs-toggle="tooltip" title="Edit Coupon">
                                            <i class="mdi mdi-pencil"></i>
                                        </a>
                                        <button type="button" 
                                                class="btn btn-sm btn-soft-info copy-btn-quick" 
                                                data-code="{{ $coupon->code }}"
                                                data-bs-toggle="tooltip" title="Copy Code">
                                            <i class="mdi mdi-content-copy"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            
            @if($results['coupons']->hasPages())
            <div class="text-end mt-3">
                {{ $results['coupons']->withQueryString()->links('pagination::bootstrap-4') }}
            </div>
            @endif
        </div>
    </div>
    @endif

    @if($results['blogs']->total() > 0)
    <div class="mb-4 animate__animated animate__fadeInUp">
        <div class="d-flex align-items-center mb-3">
            <div class="flex-shrink-0">
                <div class="avatar-sm">
                    <span class="avatar-title bg-info-lighten rounded-circle">
                        <i class="mdi mdi-post text-info fs-20"></i>
                    </span>
                </div>
            </div>
            <div class="flex-grow-1 ms-2">
                <h5 class="mb-0">Blogs <span class="badge bg-info ms-2">{{ $results['blogs']->total() }}</span></h5>
                <p class="text-muted small mb-0">Latest articles and updates</p>
            </div>
            <div class="flex-shrink-0">
                <a href="#blogs-section" class="text-info" data-bs-toggle="collapse" role="button" aria-expanded="true">
                    <i class="mdi mdi-chevron-up fs-20"></i>
                </a>
            </div>
        </div>
        
        <div class="collapse show" id="blogs-section">
            <div class="row g-4">
                @foreach($results['blogs'] as $blog)
                <div class="col-md-6">
                    <div class="card blog-card h-100 border-0 shadow-sm hover-lift">
                        <div class="row g-0">
                            <div class="col-md-4">
                                @if($blog->image)
                                <img src="{{ asset('uploads/blogs/' . $blog->image) }}"
                                     class="blog-image h-100 w-100 rounded-start"
                                     alt="{{ $blog->title }}"
                                     style="object-fit: cover;"
                                     onerror="this.onerror=null;this.src='{{ asset('assets/img/no-image-found.png') }}'">
                                @else
                                <div class="blog-image-placeholder h-100 w-100 d-flex align-items-center justify-content-center bg-light rounded-start">
                                    <i class="mdi mdi-post text-muted" style="font-size: 2rem;"></i>
                                </div>
                                @endif
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <div class="d-flex align-items-center gap-2 mb-2">
                                        <span class="badge bg-soft-info text-info">{{ $blog->category->name ?? 'Uncategorized' }}</span>
                                        <span class="badge bg-{{ $blog->status == 'published' ? 'soft-success' : 'soft-warning' }} text-{{ $blog->status == 'published' ? 'success' : 'warning' }}">
                                            <i class="mdi mdi-{{ $blog->status == 'published' ? 'check-circle' : 'clock-outline' }} me-1"></i>
                                            {{ ucfirst($blog->status) }}
                                        </span>
                                    </div>
                                     <a href="{{ route('admin.blog.show', $blog->id) }}" class="text-dark stretched-link">
                                    <h6 class="card-title mb-2">
                                       
                                            {{ Str::limit($blog->title, 50) }}
                                        
                                    </h6>
                                    </a>
                                    
                                    <p class="card-text text-muted small mb-2">
                                        {!! Str::limit(strip_tags($blog->excerpt ?? $blog->content), 80) !!}
                                    </p>
                                    
                                    <div class="d-flex align-items-center justify-content-between mt-3">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-xs">
                                                <span class="avatar-title bg-primary-lighten rounded-circle">
                                                    <i class="mdi mdi-account text-primary" style="font-size: 14px;"></i>
                                                </span>
                                            </div>
                                            <small class="text-muted ms-1">{{ $blog->user->name ?? 'Unknown' }}</small>
                                        </div>
                                        <small class="text-muted">
                                            <i class="mdi mdi-calendar me-1"></i>{{ $blog->created_at->diffForHumans() }}
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
            @if($results['blogs']->hasPages())
            <div class="text-end mt-3">
                {{ $results['blogs']->withQueryString()->links('pagination::bootstrap-4') }}
            </div>
            @endif
        </div>
    </div>
    @endif

    @if($results['categories']->total() > 0)
    <div class="mb-4 animate__animated animate__fadeInUp">
        <div class="d-flex align-items-center mb-3">
            <div class="flex-shrink-0">
                <div class="avatar-sm">
                    <span class="avatar-title bg-success-lighten rounded-circle">
                        <i class="mdi mdi-folder text-success fs-20"></i>
                    </span>
                </div>
            </div>
            <div class="flex-grow-1 ms-2">
                <h5 class="mb-0">Categories <span class="badge bg-success ms-2">{{ $results['categories']->total() }}</span></h5>
                <p class="text-muted small mb-0">Organize and browse by category</p>
            </div>
            <div class="flex-shrink-0">
                <a href="#categories-section" class="text-success" data-bs-toggle="collapse" role="button" aria-expanded="true">
                    <i class="mdi mdi-chevron-up fs-20"></i>
                </a>
            </div>
        </div>
        
        <div class="collapse show" id="categories-section">
            <div class="row g-3">
                @foreach($results['categories'] as $category)
                <div class="col-md-4">
                    <div class="card category-card h-100 border-0 shadow-sm hover-lift">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0">
                                    <div class="category-icon bg-soft-success rounded-circle p-3">
                                        <i class="mdi mdi-folder text-success fs-4"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h6 class="mb-1">
                                        <a href="{{ route('admin.category.edit', $category->id) }}" class="text-dark stretched-link">
                                            {{ $category->name }}
                                        </a>
                                    </h6>
                                    <small class="text-muted">{{ Str::limit($category->description ?? 'No description', 40) }}</small>
                                </div>
                            </div>
                            
                            <div class="row g-2 text-center">
                                <div class="col-4">
                                    <div class="bg-light rounded-3 p-2">
                                        <h6 class="mb-0">{{ $category->stores_count ?? 0 }}</h6>
                                        <small class="text-muted">Stores</small>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="bg-light rounded-3 p-2">
                                        <h6 class="mb-0">{{ $category->coupons_count ?? 0 }}</h6>
                                        <small class="text-muted">Coupons</small>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="bg-light rounded-3 p-2">
                                        <h6 class="mb-0">{{ $category->blogs_count ?? 0 }}</h6>
                                        <small class="text-muted">Blogs</small>
                                    </div>
                                </div>
                            </div>
                            
                            @if($category->parent)
                            <div class="mt-2 small text-muted">
                                <i class="mdi mdi-arrow-up"></i> Parent: {{ $category->parent->name }}
                            </div>
                            @endif
                            
                            @if($category->children_count > 0)
                            <div class="mt-1 small text-muted">
                                <i class="mdi mdi-arrow-down"></i> {{ $category->children_count }} Sub-categories
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
            @if($results['categories']->hasPages())
            <div class="text-end mt-3">
                {{ $results['categories']->withQueryString()->links('pagination::bootstrap-4') }}
            </div>
            @endif
        </div>
    </div>
    @endif

@else
    <div class="text-center py-5 animate__animated animate__fadeIn">
        <div class="empty-state">
            <div class="empty-state-icon mb-4">
                <i class="mdi mdi-file-search-outline text-muted" style="font-size: 5rem;"></i>
            </div>
            <h4 class="mb-2">No Results Found</h4>
            <p class="text-muted mb-4">We couldn't find any matches for "{{ request('query') }}"</p>
            <div class="suggestions">
                <p class="text-muted small mb-2">Suggestions:</p>
                <ul class="list-unstyled">
                    <li class="mb-1"><i class="mdi mdi-check-circle text-success me-2"></i>Check your spelling</li>
                    <li class="mb-1"><i class="mdi mdi-check-circle text-success me-2"></i>Try more general keywords</li>
                    <li class="mb-1"><i class="mdi mdi-check-circle text-success me-2"></i>Try different keywords</li>
                </ul>
            </div>
        </div>
    </div>
@endif

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<style>
    /* Store Card Styles */
    .store-card {
        transition: all 0.3s ease;
        border-radius: 12px;
        overflow: hidden;
    }
    .store-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.1)!important;
    }
    .store-image-wrapper {
        position: relative;
        overflow: hidden;
        border-radius: 10px;
    }
    .store-image {
        transition: transform 0.3s ease;
    }
    .store-card:hover .store-image {
        transform: scale(1.05);
    }

    /* Blog Card Styles */
    .blog-card {
        transition: all 0.3s ease;
        border-radius: 12px;
        overflow: hidden;
    }
    .blog-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.1)!important;
    }
    .blog-image {
        transition: transform 0.5s ease;
    }
    .blog-card:hover .blog-image {
        transform: scale(1.1);
    }
    .blog-image-placeholder {
        min-height: 180px;
    }

    /* Category Card Styles */
    .category-card {
        transition: all 0.3s ease;
        border-radius: 12px;
    }
    .category-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.1)!important;
    }
    .category-icon {
        transition: transform 0.3s ease;
    }
    .category-card:hover .category-icon {
        transform: scale(1.1) rotate(5deg);
    }

    /* Coupon Styles */
    .coupon-row {
        transition: background-color 0.2s ease;
    }
    .coupon-row:hover {
        background-color: rgba(114, 124, 245, 0.02);
    }
    .code-wrapper {
        display: flex;
        align-items: center;
        gap: 8px;
    }
    .coupon-code {
        font-size: 0.85rem;
        border: 1px dashed #dee2e6;
        background-color: #f8f9fa;
    }
    .copy-btn, .copy-btn-quick {
        transition: all 0.2s ease;
    }
    .copy-btn:hover, .copy-btn-quick:hover {
        transform: scale(1.1);
    }
    .copy-btn-quick {
        padding: 4px 8px;
    }

    /* Background Soft Colors */
    .bg-soft-primary { background-color: rgba(114, 124, 245, 0.1); }
    .bg-soft-warning { background-color: rgba(247, 184, 75, 0.1); }
    .bg-soft-info { background-color: rgba(64, 189, 211, 0.1); }
    .bg-soft-success { background-color: rgba(10, 207, 151, 0.1); }
    .bg-soft-danger { background-color: rgba(241, 85, 108, 0.1); }

    .text-soft-primary { color: rgba(114, 124, 245, 0.9); }
    .text-soft-warning { color: rgba(247, 184, 75, 0.9); }
    .text-soft-info { color: rgba(64, 189, 211, 0.9); }
    .text-soft-success { color: rgba(10, 207, 151, 0.9); }
    .text-soft-danger { color: rgba(241, 85, 108, 0.9); }

    /* Avatar Sizes */
    .avatar-sm { width: 32px; height: 32px; }
    .avatar-xs { width: 24px; height: 24px; }
    .avatar-title {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* Hover Lift Effect */
    .hover-lift {
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .hover-lift:hover {
        transform: translateY(-4px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1)!important;
    }

    /* Pagination Styling */
    .pagination {
        gap: 5px;
    }
    .page-link {
        border-radius: 8px;
        padding: 8px 14px;
        color: #6c757d;
        border: 1px solid #dee2e6;
        transition: all 0.2s ease;
    }
    .page-link:hover {
        background-color: #727cf5;
        border-color: #727cf5;
        color: #fff;
    }
    .page-item.active .page-link {
        background-color: #727cf5;
        border-color: #727cf5;
    }

    /* Empty State */
    .empty-state {
        max-width: 400px;
        margin: 0 auto;
    }
    .suggestions {
        background-color: #f8f9fa;
        border-radius: 12px;
        padding: 20px;
        text-align: left;
    }

    /* Collapse/Expand Animation */
    .collapse:not(.show) {
        display: none;
    }
    .collapsing {
        transition: height 0.3s ease;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .store-card, .blog-card, .category-card {
            margin-bottom: 15px;
        }
        .blog-image, .blog-image-placeholder {
            height: 160px;
            border-radius: 12px 12px 0 0;
        }
    }
</style>
@endpush

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
$(document).ready(function() {
    // Initialize tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });

    // Copy code functionality with SweetAlert
    $('.copy-btn, .copy-btn-quick').click(function(e) {
        e.preventDefault();
        e.stopPropagation();
        
        const code = $(this).data('code');
        
        // Create temporary input
        const tempInput = document.createElement('input');
        tempInput.value = code;
        document.body.appendChild(tempInput);
        tempInput.select();
        document.execCommand('copy');
        document.body.removeChild(tempInput);
        
        // Show success message
        Swal.fire({
            icon: 'success',
            title: 'Copied!',
            text: 'Coupon code copied to clipboard',
            timer: 1500,
            showConfirmButton: false,
            position: 'top-end',
            toast: true
        });
        
        // Visual feedback on button
        $(this).addClass('text-success');
        setTimeout(() => {
            $(this).removeClass('text-success');
        }, 500);
    });

    // Collapse/Expand functionality with icon rotation
    $('[data-bs-toggle="collapse"]').click(function() {
        const icon = $(this).find('i');
        icon.toggleClass('mdi-chevron-up mdi-chevron-down');
    });

    // Search highlight
    const query = '{{ request('query') }}';
    if(query) {
        $('.card-body, .table').find('h6, p, .text-muted').each(function() {
            const html = $(this).html();
            const regex = new RegExp(query, 'gi');
            if(html && regex.test(html)) {
                $(this).html(html.replace(regex, match => `<span class="bg-warning bg-opacity-25 px-1 rounded">${match}</span>`));
            }
        });
    }

    // Animate results on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if(entry.isIntersecting) {
                entry.target.classList.add('animate__fadeInUp');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    document.querySelectorAll('.animate__animated').forEach(el => observer.observe(el));
});
</script>
@endpush