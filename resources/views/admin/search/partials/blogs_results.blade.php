<div class="row">
    @forelse($blogs as $blog)
    <div class="col-md-6 col-lg-4 mb-4">
        <div class="card h-100 border shadow-sm hover-shadow-lg transition">
            @if($blog->image)
            <img src="{{ asset('uploads/blogs/' . $blog->image) }}"
                 class="card-img-top"
                 alt="{{ $blog->title }}"
                 style="height: 160px; object-fit: cover;"
                 onerror="this.onerror=null;this.src='{{ asset('assets/img/no-image-found.png') }}'">
            @else
            <div class="bg-light d-flex align-items-center justify-content-center" style="height: 160px;">
                <i class="mdi mdi-post text-muted" style="font-size: 3rem;"></i>
            </div>
            @endif
            
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-start mb-2">
                     <a href="{{ route('admin.blog.show', $blog->id) }}" class="text-dark stretched-link">
                    <h6 class="card-title mb-0">
                       
                       {{ Str::limit($blog->title, 50) }}
                       
                    </h6>
                     </a>
                    <span class="badge bg-{{ $blog->status == 'published' ? 'success' : 'warning' }}-subtle text-{{ $blog->status == 'published' ? 'success' : 'warning' }} ms-2">
                        {{ ucfirst($blog->status) }}
                    </span>
                </div>

                <p class="card-text text-muted small mb-3">
                    {{ Str::limit($blog->excerpt ?? strip_tags($blog->content), 80) }}
                </p>

                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        @if($blog->user && $blog->user->avatar)
                            <img src="{{ asset('uploads/avatars/' . $blog->user->avatar) }}"
                                 class="rounded-circle me-2"
                                 width="24" height="24"
                                 alt="{{ $blog->user->name }}">
                        @else
                            <div class="bg-secondary rounded-circle me-2 d-flex align-items-center justify-content-center"
                                 style="width: 24px; height: 24px;">
                                <i class="mdi mdi-account text-white" style="font-size: 14px;"></i>
                            </div>
                        @endif
                        <small class="text-muted">{{ $blog->user->name ?? 'Unknown' }}</small>
                    </div>
                    
                    <small class="text-muted" data-bs-toggle="tooltip" title="{{ $blog->created_at->format('F j, Y h:i A') }}">
                        <i class="mdi mdi-calendar"></i> {{ $blog->created_at->diffForHumans() }}
                    </small>
                </div>

                @if($blog->category)
                <div class="mt-2">
                    <span class="badge bg-info-subtle text-info">
                        <i class="mdi mdi-folder"></i> {{ $blog->category->name }}
                    </span>
                </div>
                @endif
            </div>

            <div class="card-footer bg-transparent border-top-0 pt-0">
                <div class="d-flex gap-2">
                    <a href="{{ route('admin.blog.edit', $blog->id) }}" 
                       class="btn btn-sm btn-outline-primary flex-grow-1">
                        <i class="mdi mdi-pencil"></i> Edit
                    </a>
                    <a href="{{ route('blog.details', ['slug' => $blog->slug]) }}" 
                       target="_blank"
                       class="btn btn-sm btn-outline-info">
                        <i class="mdi mdi-eye"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    @empty
    <div class="col-12">
        <div class="text-center py-5">
            <i class="mdi mdi-post-outline" style="font-size: 3rem; color: #ccc;"></i>
            <h5 class="mt-3">No blogs found</h5>
            <p class="text-muted">No blogs matching "{{ $query }}" were found.</p>
            <a href="{{ route('admin.blog.create') }}" class="btn btn-primary mt-2">
                <i class="mdi mdi-plus"></i> Create New Blog
            </a>
        </div>
    </div>
    @endforelse
</div>

<div class="mt-3">
    {{ $blogs->withQueryString()->links('pagination::bootstrap-4') }}
</div>

<style>
.hover-shadow-lg {
    transition: all 0.3s ease;
}
.hover-shadow-lg:hover {
    transform: translateY(-2px);
    box-shadow: 0 0.5rem 1rem rgba(0,0,0,.15)!important;
}
.transition {
    transition: all 0.3s ease;
}
</style>

@push('scripts')
<script>
    $(document).ready(function() {
        $('[data-bs-toggle="tooltip"]').tooltip();
    });
</script>
@endpush