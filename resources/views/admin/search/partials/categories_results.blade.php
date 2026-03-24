<div class="row">
    @forelse($categories as $category)
    <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="card h-100 border shadow-sm hover-effect">
            <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                    <div class="avatar-md me-3">
                        @if($category->image)
                            <img src="{{ asset('uploads/categories/' . $category->image) }}"
                                 alt="{{ $category->name }}"
                                 class="img-fluid rounded-circle"
                                 style="width: 48px; height: 48px; object-fit: cover;">
                        @else
                            <div class="bg-light rounded-circle d-flex align-items-center justify-content-center"
                                 style="width: 48px; height: 48px;">
                                <i class="mdi mdi-folder text-primary" style="font-size: 24px;"></i>
                            </div>
                        @endif
                    </div>
                    <div>
                         <a href="{{ route('admin.category.edit', $category->id) }}" class="text-dark">
                        <h6 class="mb-1">
                           
                                {{ Str::limit($category->name, 20) }}
                           
                        </h6>
                         </a>
                        <small class="text-muted">Slug: {{ $category->slug }}</small>
                    </div>
                </div>

                <!-- Statistics -->
                <div class="row g-2 text-center mb-3">
                    <div class="col-4">
                        <div class="bg-light rounded py-2">
                            <h6 class="mb-0">{{ $category->stores_count ?? 0 }}</h6>
                            <small class="text-muted">Stores</small>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="bg-light rounded py-2">
                            <h6 class="mb-0">{{ $category->coupons_count ?? 0 }}</h6>
                            <small class="text-muted">Coupons</small>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="bg-light rounded py-2">
                            <h6 class="mb-0">{{ $category->blogs_count ?? 0 }}</h6>
                            <small class="text-muted">Blogs</small>
                        </div>
                    </div>
                </div>

                <!-- Parent/Child info -->
                @if($category->parent)
                <div class="mb-2">
                    <small class="text-muted">
                        <i class="mdi mdi-arrow-up"></i> Parent: 
                        <a href="{{ route('admin.category.edit', $category->parent->id) }}" class="text-info">
                            {{ $category->parent->name }}
                        </a>
                    </small>
                </div>
                @endif

                @if($category->children_count > 0)
                <div>
                    <small class="text-muted">
                        <i class="mdi mdi-arrow-down"></i> {{ $category->children_count }} Sub-categories
                    </small>
                </div>
                @endif
            </div>

            <div class="card-footer bg-transparent">
                <div class="d-flex justify-content-between align-items-center">
                    <span class="badge bg-{{ $category->status == '1' ? 'success' : 'danger' }}-subtle text-{{ $category->status == '1' ? 'success' : 'danger' }}">
                        {{ $category->status == '1' ? 'Active' : 'Inactive' }}
                    </span>
                    
                    <div class="d-flex gap-1">
                        <a href="{{ route('admin.category.edit', $category->id) }}"
                           class="btn btn-sm btn-outline-primary"
                           data-bs-toggle="tooltip"
                           title="Edit Category">
                            <i class="mdi mdi-pencil"></i>
                        </a>
                        
                        <button type="button"
                                class="btn btn-sm btn-outline-danger"
                                data-bs-toggle="modal"
                                data-bs-target="#deleteCategoryModal{{ $category->id }}"
                                title="Delete Category">
                            <i class="mdi mdi-delete"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Modal for each category -->
    @if($category->stores_count == 0 && $category->coupons_count == 0 && $category->blogs_count == 0)
    <div class="modal fade" id="deleteCategoryModal{{ $category->id }}" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete <strong>{{ $category->name }}</strong>?</p>
                    <p class="text-muted small">This action cannot be undone.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <form action="{{ route('admin.category.destroy', $category->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete Category</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endif
    @empty
    <div class="col-12">
        <div class="text-center py-5">
            <i class="mdi mdi-folder-off" style="font-size: 3rem; color: #ccc;"></i>
            <h5 class="mt-3">No categories found</h5>
            <p class="text-muted">No categories matching "{{ $query }}" were found.</p>
            <a href="{{ route('admin.category.create') }}" class="btn btn-primary mt-2">
                <i class="mdi mdi-plus"></i> Create New Category
            </a>
        </div>
    </div>
    @endforelse
</div>

<div class="mt-3">
    {{ $categories->withQueryString()->links() }}
</div>

<style>
.hover-effect {
    transition: all 0.3s ease;
}
.hover-effect:hover {
    transform: translateY(-3px);
    box-shadow: 0 0.5rem 1rem rgba(0,0,0,.1)!important;
}
.avatar-md {
    width: 48px;
    height: 48px;
}
</style>

@push('scripts')
<script>
    $(document).ready(function() {
        $('[data-bs-toggle="tooltip"]').tooltip();
    });
</script>
@endpush