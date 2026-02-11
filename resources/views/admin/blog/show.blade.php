@extends('admin.layouts.app')

@section('title', 'Blog Details')

@section('content')
<div class="container-fluid px-4">
    <!-- Header Section -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="h3 mb-0 text-gray-800">Blog Details</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.blog.index') }}">Blogs</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ Str::limit($blog->name, 30) }}</li>
                </ol>
            </nav>
        </div>
        <div class="btn-group" role="group">
            <a href="{{ route('admin.blog.edit', $blog->id) }}" class="btn btn-warning btn-icon-split">
                <span class="icon"><i class="fas fa-edit"></i></span>
                <span class="text">Edit</span>
            </a>
            <a href="{{ route('blog.details', ['slug' => $blog->slug]) }}" class="btn btn-info btn-icon-split mx-2" target="_blank">
                <span class="icon"><i class="fas fa-eye"></i></span>
                <span class="text">Preview</span>
            </a>
            <form action="{{ route('admin.blog.destroy', $blog->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-icon-split" onclick="return confirm('Are you sure you want to delete this blog?')">
                    <span class="icon"><i class="fas fa-trash"></i></span>
                    <span class="text">Delete</span>
                </button>
            </form>
        </div>
    </div>

    <!-- Main Content Card -->
    <div class="row">
        <div class="col-lg-8">
            <!-- Blog Post Card -->
            <div class="card shadow-lg mb-4 border-0">
                <!-- Blog Header with Gradient -->
                <div class="card-header bg-gradient-primary text-white py-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h2 class="h3 mb-2">{{ $blog->name }}</h2>
                            <div class="d-flex flex-wrap gap-2 align-items-center mt-3">
                                <span class="badge bg-white text-primary px-3 py-2">
                                    <i class="fas fa-user-circle me-2"></i>
                                    {{ $blog->user->name ?? 'N/A' }}
                                </span>
                                <span class="badge bg-light text-dark px-3 py-2">
                                    <i class="fas fa-calendar-alt me-2"></i>
                                    {{ $blog->created_at->setTimezone('Asia/Karachi')->format('M d, Y') }}
                                </span>
                                <span class="badge {{ $blog->status == '1' ? 'bg-success' : 'bg-danger' }} px-3 py-2">
                                    <i class="fas {{ $blog->status == '1' ? 'fa-check-circle' : 'fa-times-circle' }} me-2"></i>
                                    {{ $blog->status == '1' ? 'Published' : 'Draft' }}
                                </span>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-light btn-sm dropdown-toggle" type="button" id="blogActions" data-bs-toggle="dropdown">
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="{{ route('admin.blog.edit', $blog->id) }}"><i class="fas fa-edit me-2"></i>Edit</a></li>
                                <li><a class="dropdown-item" href="{{ route('blog.details', ['slug' => $blog->slug]) }}" target="_blank"><i class="fas fa-external-link-alt me-2"></i>View Live</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <form action="{{ route('admin.blog.destroy', $blog->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="dropdown-item text-danger" onclick="return confirm('Are you sure?')">
                                            <i class="fas fa-trash me-2"></i>Delete
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Featured Image -->
                <div class="card-img-top position-relative">
                    <img src="{{ asset('uploads/blogs/' . $blog->image) }}" 
                         class="img-fluid w-100" 
                         style="height: 400px; object-fit: cover;"
                         alt="{{ $blog->name }}">
                    <div class="position-absolute bottom-0 start-0 p-3">
                        <span class="badge bg-primary bg-opacity-75 px-3 py-2">
                            <i class="fas fa-image me-2"></i>
                            Featured Image
                        </span>
                    </div>
                </div>

                <!-- Blog Content -->
                <div class="card-body">
                    <!-- Category Badge -->
                    <div class="mb-4">
                        <h5 class="text-primary mb-2">
                            <i class="fas fa-folder-open me-2"></i>Category
                        </h5>
                        <div class="d-inline-block p-3 bg-primary bg-opacity-10 border border-primary border-opacity-25 rounded-3">
                            <i class="fas fa-tag me-2 text-primary"></i>
                            <span class="h6 mb-0 text-primary">{{ $blog->category->name ?? 'Uncategorized' }}</span>
                        </div>
                    </div>

                    <!-- Content Section -->
                    <div class="mb-5">
                        <h4 class="text-primary mb-3 border-bottom pb-2">
                            <i class="fas fa-align-left me-2"></i>Content
                        </h4>
                        <div class="blog-content p-4 bg-light rounded-3 shadow-sm">
                            {!! $blog->content !!}
                        </div>
                    </div>

                    <!-- SEO Information -->
                    <div class="card border-left-info shadow-sm mb-4">
                        <div class="card-header bg-info bg-gradient text-white">
                            <h5 class="mb-0">
                                <i class="fas fa-search me-2"></i>
                                SEO Information
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="small text-muted mb-1">Meta Title</label>
                                    <div class="p-3 bg-light rounded">
                                        <i class="fas fa-heading me-2 text-primary"></i>
                                        {{ $blog->title }}
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="small text-muted mb-1">Meta Keywords</label>
                                    <div class="p-3 bg-light rounded">
                                        <i class="fas fa-key me-2 text-primary"></i>
                                        {{ $blog->meta_keyword }}
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="small text-muted mb-1">Meta Description</label>
                                <div class="p-3 bg-light rounded">
                                    <i class="fas fa-file-alt me-2 text-primary"></i>
                                    {{ $blog->meta_description ?? 'No meta description provided' }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Timestamps -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card border-left-success h-100">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="me-3">
                                            <i class="fas fa-calendar-plus fa-2x text-success"></i>
                                        </div>
                                        <div>
                                            <div class="small text-muted">Created At</div>
                                            <div class="fw-bold">
                                                {{ $blog->created_at->setTimezone('Asia/Karachi')->format('l, F j, Y') }}
                                            </div>
                                            <div class="text-muted">
                                                {{ $blog->created_at->setTimezone('Asia/Karachi')->format('h:i A') }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card border-left-warning h-100">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="me-3">
                                            <i class="fas fa-calendar-check fa-2x text-warning"></i>
                                        </div>
                                        <div>
                                            <div class="small text-muted">Last Updated</div>
                                            <div class="fw-bold">
                                                {{ $blog->updated_at->setTimezone('Asia/Karachi')->format('l, F j, Y') }}
                                            </div>
                                            <div class="text-muted">
                                                {{ $blog->updated_at->setTimezone('Asia/Karachi')->format('h:i A') }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar Column -->
        <div class="col-lg-4">
            <!-- Quick Actions -->
            <div class="card shadow-sm mb-4">
                <div class="card-header bg-gradient-secondary text-white">
                    <h5 class="mb-0">
                        <i class="fas fa-bolt me-2"></i>
                        Quick Actions
                    </h5>
                </div>
                <div class="card-body">
                    <div class="d-grid gap-2">
                        <a href="{{ route('admin.blog.edit', $blog->id) }}" class="btn btn-warning btn-lg">
                            <i class="fas fa-edit me-2"></i>Edit Blog
                        </a>
                        <a href="{{ route('blog.details', ['slug' => $blog->slug]) }}" class="btn btn-info btn-lg" target="_blank">
                            <i class="fas fa-external-link-alt me-2"></i>View Live
                        </a>
                        <a href="{{ route('admin.blog.index') }}" class="btn btn-secondary btn-lg">
                            <i class="fas fa-arrow-left me-2"></i>Back to List
                        </a>
                    </div>
                </div>
            </div>

            <!-- Blog Stats -->
            <div class="card shadow-sm mb-4">
                <div class="card-header bg-gradient-success text-white">
                    <h5 class="mb-0">
                        <i class="fas fa-chart-bar me-2"></i>
                        Blog Stats
                    </h5>
                </div>
                <div class="card-body">
                    <div class="list-group list-group-flush">
                        <div class="list-group-item d-flex justify-content-between align-items-center">
                            <span>
                                <i class="fas fa-eye text-primary me-2"></i>
                                Views
                            </span>
                            <span class="badge bg-primary rounded-pill">0</span>
                        </div>
                        <div class="list-group-item d-flex justify-content-between align-items-center">
                            <span>
                                <i class="fas fa-comment text-success me-2"></i>
                                Comments
                            </span>
                            <span class="badge bg-success rounded-pill">0</span>
                        </div>
                        <div class="list-group-item d-flex justify-content-between align-items-center">
                            <span>
                                <i class="fas fa-share-alt text-info me-2"></i>
                                Shares
                            </span>
                            <span class="badge bg-info rounded-pill">0</span>
                        </div>
                        <div class="list-group-item d-flex justify-content-between align-items-center">
                            <span>
                                <i class="fas fa-heart text-danger me-2"></i>
                                Likes
                            </span>
                            <span class="badge bg-danger rounded-pill">0</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SEO Preview -->
            <div class="card shadow-sm">
                <div class="card-header bg-gradient-dark text-white">
                    <h5 class="mb-0">
                        <i class="fas fa-search me-2"></i>
                        SEO Preview
                    </h5>
                </div>
                <div class="card-body">
                    <div class="seo-preview">
                        <h6 class="text-primary mb-1">{{ Str::limit($blog->title, 60) }}</h6>
                        <a href="#" class="text-success small mb-2 d-block">
                            {{ config('app.url') }}/blog/{{ $blog->slug }}
                        </a>
                        <p class="text-muted small mb-0">
                            {{ Str::limit($blog->meta_description, 150) }}
                        </p>
                    </div>
                    <div class="mt-3">
                        <small class="text-muted">
                            <i class="fas fa-info-circle me-1"></i>
                            This is how your blog might appear in search results
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .bg-gradient-primary {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }
    .bg-gradient-secondary {
        background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
    }
    .bg-gradient-success {
        background: linear-gradient(135deg, #42e695 0%, #3bb2b8 100%);
    }
    .bg-gradient-info {
        background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
    }
    .bg-gradient-dark {
        background: linear-gradient(135deg, #434343 0%, #000000 100%);
    }
    
    .card {
        border-radius: 12px;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }
    
    .blog-content {
        line-height: 1.8;
        font-size: 1.1rem;
    }
    
    .blog-content img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
        margin: 20px 0;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }
    
    .blog-content h1, 
    .blog-content h2, 
    .blog-content h3, 
    .blog-content h4 {
        margin-top: 1.5rem;
        margin-bottom: 1rem;
        color: #2c3e50;
    }
    
    .blog-content p {
        margin-bottom: 1.5rem;
        color: #34495e;
    }
    
    .blog-content blockquote {
        border-left: 4px solid #4e73df;
        padding-left: 1.5rem;
        margin: 1.5rem 0;
        font-style: italic;
        color: #5a6c7d;
    }
    
    .border-left-success {
        border-left: 4px solid #1cc88a !important;
    }
    
    .border-left-warning {
        border-left: 4px solid #f6c23e !important;
    }
    
    .border-left-info {
        border-left: 4px solid #36b9cc !important;
    }
    
    .btn-icon-split {
        padding: 0;
        overflow: hidden;
        position: relative;
    }
    
    .btn-icon-split .icon {
        background-color: rgba(0,0,0,0.1);
        padding: 0.75rem 1rem;
        display: inline-block;
    }
    
    .btn-icon-split .text {
        padding: 0.75rem 1.5rem;
        display: inline-block;
    }
    
    .seo-preview {
        background: #f8f9fa;
        padding: 15px;
        border-radius: 8px;
        border-left: 4px solid #36b9cc;
    }
    
    .list-group-item {
        border: none;
        padding: 1rem 0;
    }
    
    .badge {
        font-size: 0.85em;
        font-weight: 500;
    }
    
    .breadcrumb {
        background: transparent;
        padding: 0;
        margin-bottom: 0;
    }
    
    .dropdown-menu {
        border-radius: 8px;
        border: none;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    }
</style>
@endpush

@push('scripts')
<script>
    // Add animation to cards on load
    document.addEventListener('DOMContentLoaded', function() {
        const cards = document.querySelectorAll('.card');
        cards.forEach((card, index) => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            
            setTimeout(() => {
                card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }, index * 100);
        });
    });
    
    // Add confirmation for delete with sweet alert (optional)
    function confirmDelete(e) {
        e.preventDefault();
        const form = e.target.closest('form');
        
        if (confirm('Are you sure you want to delete this blog?\nThis action cannot be undone.')) {
            form.submit();
        }
    }
    
    // Update delete buttons to use confirmation
    document.querySelectorAll('form button[type="submit"]').forEach(button => {
        button.addEventListener('click', function(e) {
            if (this.closest('form').action.includes('destroy')) {
                e.preventDefault();
                confirmDelete(e);
            }
        });
    });
</script>
@endpush