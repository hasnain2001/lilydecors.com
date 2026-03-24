<div class="table-responsive">
    <table class="table table-hover table-centered mb-0 dt-responsive nowrap w-100">
        <thead class="table-light">
            <tr>
                <th>ID</th>
                <th>Store</th>
                <th>Category</th>
                <th>Network</th>
                <th>Language</th>
                <th>Status</th>
                <th>Coupons</th>
                <th>Created</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($stores as $store)
            <tr>
                <td>#{{ $store->id }}</td>
                <td>
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('uploads/stores/' . $store->image) }}"
                             class="rounded me-2"
                             alt="{{ $store->name }}"
                             width="40"
                             onerror="this.onerror=null;this.src='{{ asset('assets/img/no-image-found.png') }}'"
                             loading="lazy">
                        <div>
                            <h6 class="mb-0">{{ $store->name }}</h6>
                            <small class="text-muted d-block">by {{ $store->user->name ?? 'N/A' }}</small>
                        </div>
                    </div>
                </td>
                <td>
                    <span class="badge bg-info-subtle text-info">
                        {{ $store->category->name ?? 'N/A' }}
                    </span>
                </td>
                <td>
                    <small>{{ $store->network->title ?? 'N/A' }}</small>
                </td>
                <td>
                    <small>{{ $store->language->name ?? 'N/A' }}</small>
                </td>
                <td>
                    <span class="badge bg-{{ $store->status == '1' ? 'success' : 'danger' }}-subtle text-{{ $store->status == '1' ? 'success' : 'danger' }} rounded-pill">
                        {{ $store->status == '1' ? 'Active' : 'Inactive' }}
                    </span>
                </td>
                <td>
                    <span class="badge bg-secondary-subtle text-secondary">
                        {{ $store->coupons_count ?? $store->coupons()->count() }} Coupons
                    </span>
                </td>
                <td>
                    <small data-bs-toggle="tooltip" title="{{ $store->created_at->format('F j, Y h:i A') }}">
                        {{ $store->created_at->diffForHumans() }}
                    </small>
                </td>
                <td>
                    <div class="d-flex gap-1">
                        <a href="{{ route('admin.store.edit', $store->id) }}"
                           class="btn btn-sm btn-outline-primary rounded-3 px-2"
                           data-bs-toggle="tooltip"
                           title="Edit Store">
                            <i class="mdi mdi-pencil"></i>
                        </a>

                        <a href="{{ route('admin.store.show', $store->id) }}"
                           class="btn btn-sm btn-outline-success rounded-3 px-2"
                           data-bs-toggle="tooltip"
                           title="Manage Coupons">
                            <i class="mdi mdi-tag"></i>
                        </a>

                        <a href="{{ route('store.details', ['slug' => Str::slug($store->slug)]) }}"
                           target="_blank"
                           class="btn btn-sm btn-outline-info rounded-3 px-2"
                           data-bs-toggle="tooltip"
                           title="View on Site">
                            <i class="mdi mdi-eye"></i>
                        </a>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="9" class="text-center py-4">
                    <i class="mdi mdi-store-off" style="font-size: 2rem; color: #ccc;"></i>
                    <p class="text-muted mt-2">No stores found matching "{{ $query }}"</p>
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

<div class="mt-3">
    {{ $stores->withQueryString()->links() }}
</div>

@push('scripts')
<script>
    // Reinitialize tooltips for dynamically loaded content
    $(document).ready(function() {
        $('[data-bs-toggle="tooltip"]').tooltip();
    });
</script>
@endpush