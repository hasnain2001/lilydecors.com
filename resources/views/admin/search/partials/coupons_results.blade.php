<div class="table-responsive">
    <table class="table table-hover table-centered mb-0 dt-responsive nowrap w-100">
        <thead class="table-light">
            <tr>
                <th>ID</th>
                <th>Coupon Details</th>
                <th>Store</th>
                <th>Category</th>
                <th>Type</th>
                <th>Discount</th>
                <th>Expiry</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($coupons as $coupon)
            <tr>
                <td>#{{ $coupon->id }}</td>
                <td>
                    <div>
                        <h6 class="mb-1">{{ $coupon->title }}</h6>
                        <div class="d-flex align-items-center">
                            <span class="badge bg-secondary me-2">{{ $coupon->code }}</span>
                            <small class="text-muted">{{ $coupon->uses }} uses</small>
                        </div>
                    </div>
                </td>
                <td>
                    @if($coupon->store)
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('uploads/stores/' . $coupon->store->image) }}"
                                 class="rounded me-2"
                                 alt="{{ $coupon->store->name }}"
                                 width="30"
                                 onerror="this.onerror=null;this.src='{{ asset('assets/img/no-image-found.png') }}'">
                            <small>{{ $coupon->store->name }}</small>
                        </div>
                    @else
                        <span class="text-muted">N/A</span>
                    @endif
                </td>
                <td>
                    <span class="badge bg-info-subtle text-info">
                        {{ $coupon->category->name ?? 'N/A' }}
                    </span>
                </td>
                <td>
                    @if($coupon->type == 'percentage')
                        <span class="badge bg-primary-subtle text-primary">Percentage</span>
                    @elseif($coupon->type == 'fixed')
                        <span class="badge bg-success-subtle text-success">Fixed</span>
                    @else
                        <span class="badge bg-warning-subtle text-warning">Free Shipping</span>
                    @endif
                </td>
                <td>
                    <strong>
                        @if($coupon->type == 'percentage')
                            {{ $coupon->discount }}% OFF
                        @elseif($coupon->type == 'fixed')
                            ${{ $coupon->discount }} OFF
                        @else
                            Free Shipping
                        @endif
                    </strong>
                </td>
                <td>
                    @php
                        $expiryDate = \Carbon\Carbon::parse($coupon->expiry_date);
                        $now = \Carbon\Carbon::now();
                        $isExpired = $expiryDate->isPast();
                    @endphp
                    
                    @if($isExpired)
                        <span class="badge bg-danger-subtle text-danger" data-bs-toggle="tooltip" title="Expired on {{ $expiryDate->format('M j, Y') }}">
                            <i class="mdi mdi-clock-alert"></i> Expired
                        </span>
                    @else
                        <span class="badge bg-success-subtle text-success" data-bs-toggle="tooltip" title="Valid until {{ $expiryDate->format('M j, Y') }}">
                            <i class="mdi mdi-clock-check"></i> {{ $expiryDate->diffForHumans() }}
                        </span>
                    @endif
                </td>
                <td>
                    <span class="badge bg-{{ $coupon->status == '1' ? 'success' : 'danger' }}-subtle text-{{ $coupon->status == '1' ? 'success' : 'danger' }} rounded-pill">
                        {{ $coupon->status == '1' ? 'Active' : 'Inactive' }}
                    </span>
                </td>
                <td>
                    <div class="d-flex gap-1">
                        <a href="{{ route('admin.coupon.edit', $coupon->id) }}"
                           class="btn btn-sm btn-outline-primary rounded-3 px-2"
                           data-bs-toggle="tooltip"
                           title="Edit Coupon">
                            <i class="mdi mdi-pencil"></i>
                        </a>

                        <button type="button"
                                class="btn btn-sm btn-outline-info rounded-3 px-2 copy-code"
                                data-code="{{ $coupon->code }}"
                                data-bs-toggle="tooltip"
                                title="Copy Code">
                            <i class="mdi mdi-content-copy"></i>
                        </button>

                        @if($coupon->store)
                            <a href="{{ route('store.details', ['slug' => Str::slug($coupon->store->slug)]) }}"
                               target="_blank"
                               class="btn btn-sm btn-outline-success rounded-3 px-2"
                               data-bs-toggle="tooltip"
                               title="View Store">
                                <i class="mdi mdi-store"></i>
                            </a>
                        @endif
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="9" class="text-center py-4">
                    <i class="mdi mdi-tag-off" style="font-size: 2rem; color: #ccc;"></i>
                    <p class="text-muted mt-2">No coupons found matching "{{ $query }}"</p>
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

<div class="mt-3">
    {{ $coupons->withQueryString()->links() }}
</div>

@push('scripts')
<script>
    $(document).ready(function() {
        // Copy coupon code functionality
        $('.copy-code').click(function() {
            const code = $(this).data('code');
            navigator.clipboard.writeText(code).then(function() {
                // Show toast or alert
                Swal.fire({
                    icon: 'success',
                    title: 'Copied!',
                    text: 'Coupon code copied to clipboard',
                    timer: 1500,
                    showConfirmButton: false
                });
            });
        });

        // Reinitialize tooltips
        $('[data-bs-toggle="tooltip"]').tooltip();
    });
</script>
@endpush