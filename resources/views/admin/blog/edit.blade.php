@extends('admin.layouts.app')
@section('title', 'Edit Blog')
@section('content')
<div class="container-fluid px-4">
    <div class="row">
        <div class="col-12">
            <!-- Header Card -->
            <div class="card shadow-lg border-0 mb-4">
                <div class="card-header bg-gradient-primary text-white py-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h3 class="h4 mb-1"><i class="fas fa-edit me-2"></i>Edit Blog</h3>
                            <p class="mb-0 opacity-75">Update blog details and content</p>
                        </div>
                        <div class="btn-group">
                            <a href="{{ route('admin.blog.index') }}" class="btn btn-light btn-sm">
                                <i class="fas fa-arrow-left me-1"></i> Back
                            </a>
                            <a href="{{ route('admin.blog.show', $blog->id) }}" class="btn btn-info btn-sm">
                                <i class="fas fa-eye me-1"></i> Preview
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            @if ($errors->any())
            <div class="alert alert-danger border-start border-danger border-4 alert-dismissible fade show shadow-sm" role="alert">
                <div class="d-flex align-items-center">
                    <div class="me-3">
                        <i class="fas fa-exclamation-circle fa-2x"></i>
                    </div>
                    <div>
                        <h5 class="alert-heading mb-2">Validation Errors</h5>
                        <ul class="mb-0 ps-3">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <form action="{{ route('admin.blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data" id="blogForm">
                @csrf
                @method('PUT')

                <div class="row">
                    <!-- Left Column -->
                    <div class="col-lg-8">
                        <!-- Basic Information Card -->
                        <div class="card shadow-sm mb-4 border-start border-primary border-3">
                            <div class="card-header bg-light">
                                <h5 class="card-title mb-0 text-primary">
                                    <i class="fas fa-info-circle me-2"></i>Blog Information
                                </h5>
                            </div>
                            <div class="card-body">
                                <div class="row g-3">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" name="name" 
                                                   value="{{ old('name', $blog->name) }}" placeholder="Blog Title" required>
                                            <label for="name" class="text-muted">
                                                <i class="fas fa-heading me-1"></i> Blog Title <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <div class="input-group">
                                                <span class="input-group-text bg-light border-end-0">{{ url('/blog/') }}/</span>
                                                <input type="text" class="form-control border-start-0" name="slug" 
                                                       id="slug" value="{{ $blog->slug }}" placeholder="url-slug" required>
                                            </div>
                                            <div id="slug-message" class="form-text small mt-2"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <textarea name="description" id="description" class="form-control" 
                                                      placeholder="Brief description of the blog" style="height: 100px">{{ old('description', $blog->description) }}</textarea>
                                            <label for="description" class="text-muted">
                                                <i class="fas fa-align-left me-1"></i> Short Description
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Content Editor Card -->
                        <div class="card shadow-sm mb-4 border-start border-success border-3">
                            <div class="card-header bg-light">
                                <h5 class="card-title mb-0 text-success">
                                    <i class="fas fa-file-alt me-2"></i>Blog Content
                                </h5>
                            </div>
                            <div class="card-body">
                                <div class="form-floating">
                                    <textarea id="editor" name="content" style="min-height: 300px">{{ old('content', $blog->content) }}</textarea>
                                    
                                </div>
                                <div class="mt-3">
                                    <small class="text-muted">
                                        <i class="fas fa-lightbulb me-1"></i> Tip: Use headings, images, and formatting to make your blog engaging
                                    </small>
                                </div>
                            </div>
                        </div>

                        <!-- SEO Settings Card -->
                        <div class="card shadow-sm mb-4 border-start border-info border-3">
                            <div class="card-header bg-light">
                                <h5 class="card-title mb-0 text-info">
                                    <i class="fas fa-search me-2"></i>SEO Settings
                                </h5>
                            </div>
                            <div class="card-body">
                                <div class="row g-3">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="title" id="title" 
                                                   value="{{ old('title', $blog->title) }}" placeholder="Meta Title">
                                            <label for="title" class="text-muted">
                                                <i class="fas fa-tag me-1"></i> Meta Title
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="meta_keyword" id="meta_keyword" 
                                                   value="{{ old('meta_keyword', $blog->meta_keyword) }}" placeholder="Meta Keywords">
                                            <label for="meta_keyword" class="text-muted">
                                                <i class="fas fa-key me-1"></i> Meta Keywords
                                            </label>
                                            <div class="form-text small">Separate keywords with commas</div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <textarea name="meta_description" id="meta_description" class="form-control" 
                                                      placeholder="Meta Description" style="height: 100px">{{ old('meta_description', $blog->meta_description) }}</textarea>
                                            <label for="meta_description" class="text-muted">
                                                <i class="fas fa-file-alt me-1"></i> Meta Description
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="col-lg-4">
                        <!-- Status & Settings Card -->
                        <div class="card shadow-sm mb-4 border-start border-warning border-3">
                            <div class="card-header bg-light">
                                <h5 class="card-title mb-0 text-warning">
                                    <i class="fas fa-cog me-2"></i>Settings
                                </h5>
                            </div>
                            <div class="card-body">
                                <div class="row g-3">
                                    <!-- Status -->
                                    <div class="col-12">
                                        <label class="form-label text-muted mb-2">
                                            <i class="fas fa-power-off me-1"></i> Status
                                        </label>
                                        <div class="btn-group w-100" role="group">
                                            <input type="radio" class="btn-check" name="status" id="enable" value="1" 
                                                   {{ old('status', $blog->status) == 1 ? 'checked' : '' }}>
                                            <label class="btn btn-outline-success" for="enable">
                                                <i class="fas fa-check-circle me-1"></i> Active
                                            </label>
                                            
                                            <input type="radio" class="btn-check" name="status" id="disable" value="0" 
                                                   {{ old('status', $blog->status) == 0 ? 'checked' : '' }}>
                                            <label class="btn btn-outline-danger" for="disable">
                                                <i class="fas fa-times-circle me-1"></i> Inactive
                                            </label>
                                        </div>
                                    </div>

                                    <!-- Featured Status -->
                                    <div class="col-12">
                                        <label class="form-label text-muted mb-2">
                                            <i class="fas fa-star me-1"></i> Featured Status
                                        </label>
                                        <div class="btn-group w-100" role="group">
                                            <input type="radio" class="btn-check" name="top_blog" id="regular" value="0" 
                                                   {{ old('top_blog', $blog->top_blog) == 0 ? 'checked' : '' }}>
                                            <label class="btn btn-outline-secondary" for="regular">
                                                <i class="fas fa-file me-1"></i> Regular
                                            </label>
                                            
                                            <input type="radio" class="btn-check" name="top_blog" id="featured" value="1" 
                                                   {{ old('top_blog', $blog->top_blog) == 1 ? 'checked' : '' }}>
                                            <label class="btn btn-outline-warning" for="featured">
                                                <i class="fas fa-star me-1"></i> Featured
                                            </label>
                                        </div>
                                    </div>

                                    <!-- Store Selection -->
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <select name="store_id" id="store_id" class="form-select" required>
                                                <option value="" disabled selected>Select a store</option>
                                                @foreach ($stores as $store)
                                                    <option value="{{ $store->id }}" 
                                                            data-category="{{ $store->category_id ?? '' }}"
                                                            data-language="{{ $store->language_id ?? '' }}" 
                                                            {{ old('store_id', $blog->store_id) == $store->id ? 'selected' : '' }}>
                                                        {{ $store->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <label for="store_id" class="text-muted">
                                                <i class="fas fa-store me-1"></i> Associated Store <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                    </div>

                                    <!-- Language Selection -->
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <select name="language_id" id="language_id" class="form-select" required>
                                                <option value="" disabled selected>Select language</option>
                                                @foreach ($languages as $language)
                                                    <option value="{{ $language->id }}" 
                                                            {{ old('language_id', $blog->language_id) == $language->id ? 'selected' : '' }}>
                                                        {{ $language->name }} ({{ $language->code }})
                                                    </option>
                                                @endforeach
                                            </select>
                                            <label for="language_id" class="text-muted">
                                                <i class="fas fa-globe me-1"></i> Language <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                    </div>

                                    <!-- Category Selection -->
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <select name="category_id" id="category_id" class="form-select" required>
                                                <option value="" disabled selected>Select category</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}" 
                                                            {{ old('category_id', $blog->category_id) == $category->id ? 'selected' : '' }}>
                                                        {{ $category->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <label for="category_id" class="text-muted">
                                                <i class="fas fa-folder me-1"></i> Category <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Featured Image Card -->
                        <div class="card shadow-sm mb-4 border-start border-purple border-3">
                            <div class="card-header bg-light">
                                <h5 class="card-title mb-0 text-purple">
                                    <i class="fas fa-image me-2"></i>Featured Image
                                </h5>
                            </div>
                            <div class="card-body">
                                <!-- Image Preview -->
                                <div class="text-center mb-3">
                                    <div class="image-preview-container border rounded p-3 bg-light">
                                        @if($blog->image)
                                            <img id="imagePreview" src="{{ asset('uploads/blogs/' . $blog->image) }}" 
                                                 alt="Current image" class="img-fluid rounded shadow-sm" style="max-height: 200px;">
                                            <input type="hidden" name="previous_image" value="{{ $blog->image }}">
                                        @else
                                            <div class="text-center py-4">
                                                <i class="fas fa-image fa-3x text-muted mb-3"></i>
                                                <p class="text-muted mb-0">No image uploaded</p>
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <!-- File Upload -->
                                <div class="mb-3">
                                    <label for="image" class="form-label text-muted">
                                        <i class="fas fa-upload me-1"></i> Upload New Image
                                    </label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" name="image" id="image" 
                                               accept="image/*" onchange="previewImage(event)">
                                        <button class="btn btn-outline-secondary" type="button" onclick="clearImage()">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                    <div class="form-text small">Recommended: 1200x630px, max 2MB</div>
                                </div>

                                <!-- Remove Image Option -->
                                @if($blog->image)
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" 
                                           name="remove_image" id="remove_image" value="1">
                                    <label class="form-check-label text-danger" for="remove_image">
                                        <i class="fas fa-trash-alt me-1"></i> Remove current image
                                    </label>
                                </div>
                                @endif
                            </div>
                        </div>

                        <!-- Form Actions Card -->
                        <div class="card shadow-sm border-start border-success border-3">
                            <div class="card-body">
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-success btn-lg py-3">
                                        <i class="fas fa-save me-2"></i> Update Blog
                                    </button>
                                    <button type="reset" class="btn btn-outline-secondary py-3">
                                        <i class="fas fa-redo me-2"></i> Reset Form
                                    </button>
                                    <a href="{{ route('admin.blog.index') }}" class="btn btn-outline-danger py-3">
                                        <i class="fas fa-times me-2"></i> Cancel
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    :root {
        --primary: #4e73df;
        --secondary: #6c757d;
        --success: #1cc88a;
        --danger: #e74a3b;
        --warning: #f6c23e;
        --info: #36b9cc;
        --purple: #6f42c1;
        --light: #f8f9fc;
    }

    .card {
        border-radius: 0.5rem;
        border: none;
    }

    .card-header {
        border-bottom: 1px solid rgba(0,0,0,.125);
        border-radius: 0.5rem 0.5rem 0 0 !important;
    }

    .bg-gradient-primary {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }

    .border-purple {
        border-left-color: var(--purple) !important;
    }

    .text-purple {
        color: var(--purple) !important;
    }

    .form-floating > .form-control,
    .form-floating > .form-select {
        height: calc(3.5rem + 2px);
        padding: 1rem 0.75rem;
    }

    .form-floating > label {
        padding: 1rem 0.75rem;
        color: #6c757d;
    }

    .form-floating > .form-control:focus ~ label,
    .form-floating > .form-control:not(:placeholder-shown) ~ label {
        color: var(--primary);
    }

    .btn-group .btn {
        border-radius: 0.375rem;
    }

    .btn-check:checked + .btn {
        box-shadow: 0 0 0 0.2rem rgba(var(--bs-primary-rgb), 0.25);
    }

    .btn-check:checked + .btn-outline-success {
        background-color: var(--success);
        color: white;
    }

    .btn-check:checked + .btn-outline-danger {
        background-color: var(--danger);
        color: white;
    }

    .btn-check:checked + .btn-outline-warning {
        background-color: var(--warning);
        color: #000;
    }

    .btn-check:checked + .btn-outline-secondary {
        background-color: var(--secondary);
        color: white;
    }

    .image-preview-container {
        transition: all 0.3s ease;
        min-height: 150px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .image-preview-container:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    .form-switch .form-check-input:checked {
        background-color: var(--danger);
        border-color: var(--danger);
    }

    .input-group-text {
        background-color: var(--light);
        border-color: #e3e6f0;
    }

    .alert {
        border-radius: 0.5rem;
    }

    .border-start {
        border-left-width: 4px !important;
    }

    /* Custom scrollbar for select */
    .form-select {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%236c757d' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
        background-position: right 0.75rem center;
        background-size: 16px 12px;
    }

    /* Hover effects */
    .form-control:focus, .form-select:focus {
        border-color: var(--primary);
        box-shadow: 0 0 0 0.2rem rgba(78, 115, 223, 0.25);
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .btn-group {
            flex-direction: column;
        }
        
        .btn-group .btn {
            width: 100%;
            margin-bottom: 0.5rem;
        }
    }
</style>
@endpush

@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const storeSelect = document.getElementById('store_id');
            const categorySelect = document.getElementById('category_id');
            const languageSelect = document.getElementById('language_id');

            storeSelect.addEventListener('change', function () {
                const selectedOption = this.options[this.selectedIndex];
                const categoryId = selectedOption.getAttribute('data-category');
                const languageId = selectedOption.getAttribute('data-language');

                // Set category
                if (categoryId) {
                    categorySelect.value = categoryId;
                }

                // Set language
                if (languageId) {
                    languageSelect.value = languageId;
                }
            });
        });
    </script>

    <script>
            document.addEventListener('DOMContentLoaded', function() {
            const categorySelect = document.getElementById('category_id');
            const languageSelect = document.getElementById('language_id');

            categorySelect.addEventListener('change', function() {
                const selectedOption = categorySelect.options[categorySelect.selectedIndex];
                const languageId = selectedOption.getAttribute('data-language');
                if (languageId) {
                    for (let i = 0; i < languageSelect.options.length; i++) {
                        if (languageSelect.options[i].value == languageId) {
                            languageSelect.selectedIndex = i;
                            break;
                        }
                    }
                }
            });
        });
        // Auto-generate slug and website URL from name while typing
        document.getElementById('name').addEventListener('input', function() {
            const name = this.value.trim();
            const slugField = document.getElementById('slug');
            const urlField = document.getElementById('url');

            if (name) {
                // Generate slug from name
                const generatedSlug = name.toLowerCase()
                    .replace(/[^\w\s-]/g, '')  // Remove special chars
                    .replace(/\s+/g, '-')      // Replace spaces with -
                    .replace(/--+/g, '-');     // Replace multiple - with single -

                // Generate website URL (basic version)
                const currentUrl = window.location.origin;
                const generatedUrl = currentUrl + '/blog/' + generatedSlug;

                // Only update slug if the slug field is empty or matches the previously generated slug
                if (!slugField.value || slugField.value === slugField.dataset.previousGenerated) {
                    slugField.value = generatedSlug;
                    slugField.dataset.previousGenerated = generatedSlug;
                    checkSlugUniqueness(generatedSlug);
                }

                // Only update URL if the URL field is empty or matches the previously generated URL
                if (!urlField.value || urlField.value === urlField.dataset.previousGenerated) {
                    urlField.value = generatedUrl;
                    urlField.dataset.previousGenerated = generatedUrl;
                }
            }
        });

        // Check slug when user leaves the name field
        document.getElementById('name').addEventListener('blur', function() {
            const slugField = document.getElementById('slug');
            const urlField = document.getElementById('url');

            if (slugField.value) {
                checkSlugUniqueness(slugField.value);
            }
        });

        // Function to check slug uniqueness
        function checkSlugUniqueness(slug) {
            const slugMessage = document.getElementById('slug-message');
            if (slug.length < 3) {
                slugMessage.textContent = 'Slug is too short';
                slugMessage.style.color = 'red';
            } else {
                slugMessage.textContent = 'Slug looks good!';
                slugMessage.style.color = 'green';
            }
        }

    </script>
@endpush