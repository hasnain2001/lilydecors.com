@extends('admin.layouts.app')
@section('title', 'Create Blog')
@section('content')
<div class="container-fluid px-4">
    <div class="row">
        <div class="col-12">
            <!-- Header Card -->
            <div class="card shadow-lg border-0 mb-4">
                <div class="card-header bg-gradient-primary text-white py-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h3 class="h4 mb-1"><i class="fas fa-plus-circle me-2"></i>Create New Blog</h3>
                            <p class="mb-0 opacity-75">Add a new blog post to your website</p>
                        </div>
                        <div class="btn-group">
                            <a href="{{ route('admin.blog.index') }}" class="btn btn-light btn-sm">
                                <i class="fas fa-arrow-left me-1"></i> Back to List
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
                        <h5 class="alert-heading mb-2">Please fix the following issues</h5>
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

            <form action="{{ route('admin.blog.store') }}" method="POST" enctype="multipart/form-data" id="blogCreateForm">
                @csrf

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
                                                   value="{{ old('name') }}" placeholder="Blog Title" required>
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
                                                       id="slug" value="{{ old('slug') }}" placeholder="url-slug" required>
                                            </div>
                                            <div id="slug-message" class="form-text small mt-2"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <textarea name="description" id="description" class="form-control" 
                                                      placeholder="Brief description of the blog" style="height: 100px">{{ old('description') }}</textarea>
                                            <label for="description" class="text-muted">
                                                <i class="fas fa-align-left me-1"></i> Short Description <span class="text-danger">*</span>
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
                                    <textarea id="editor" name="content" style="min-height: 300px">{{ old('content') }}</textarea>
                                    
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
                                                   value="{{ old('title') }}" placeholder="Meta Title">
                                            <label for="title" class="text-muted">
                                                <i class="fas fa-tag me-1"></i> Meta Title
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="meta_keyword" id="meta_keyword" 
                                                   value="{{ old('meta_keyword') }}" placeholder="Meta Keywords">
                                            <label for="meta_keyword" class="text-muted">
                                                <i class="fas fa-key me-1"></i> Meta Keywords
                                            </label>
                                            <div class="form-text small">Separate keywords with commas</div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <textarea name="meta_description" id="meta_description" class="form-control" 
                                                      placeholder="Meta Description" style="height: 100px">{{ old('meta_description') }}</textarea>
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
                                            <i class="fas fa-power-off me-1"></i> Status <span class="text-danger">*</span>
                                        </label>
                                        <div class="btn-group w-100" role="group">
                                            <input type="radio" class="btn-check" name="status" id="enable" value="1" checked>
                                            <label class="btn btn-outline-success" for="enable">
                                                <i class="fas fa-check-circle me-1"></i> Active
                                            </label>
                                            
                                            <input type="radio" class="btn-check" name="status" id="disable" value="0">
                                            <label class="btn btn-outline-danger" for="disable">
                                                <i class="fas fa-times-circle me-1"></i> Inactive
                                            </label>
                                        </div>
                                    </div>

                                    <!-- Featured Status -->
                                    <div class="col-12">
                                        <label class="form-label text-muted mb-2">
                                            <i class="fas fa-star me-1"></i> Featured Status <span class="text-danger">*</span>
                                        </label>
                                        <div class="btn-group w-100" role="group">
                                            <input type="radio" class="btn-check" name="top_blog" id="regular" value="0" checked>
                                            <label class="btn btn-outline-secondary" for="regular">
                                                <i class="fas fa-file me-1"></i> Regular
                                            </label>
                                            
                                            <input type="radio" class="btn-check" name="top_blog" id="featured" value="1">
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
                                                            {{ old('store_id') == $store->id ? 'selected' : '' }}>
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
                                                            {{ old('language_id') == $language->id ? 'selected' : '' }}>
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
                                                            data-language="{{ $category->language_id ?? '' }}"
                                                            {{ old('category_id') == $category->id ? 'selected' : '' }}>
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
                                        <div class="text-center py-4">
                                            <i class="fas fa-image fa-3x text-muted mb-3"></i>
                                            <p class="text-muted mb-0">No image selected</p>
                                            <small class="text-muted">Preview will appear here</small>
                                        </div>
                                    </div>
                                </div>

                                <!-- File Upload -->
                                <div class="mb-3">
                                    <label for="image" class="form-label text-muted">
                                        <i class="fas fa-upload me-1"></i> Upload Image <span class="text-danger">*</span>
                                    </label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" name="image" id="image" 
                                               accept="image/*" required onchange="previewImage(event)">
                                        <button class="btn btn-outline-secondary" type="button" onclick="clearImage()">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                    <div class="form-text small">Recommended: 1200x630px, max 2MB, JPG/PNG</div>
                                </div>
                            </div>
                        </div>

                        <!-- Form Actions Card -->
                        <div class="card shadow-sm border-start border-success border-3">
                            <div class="card-body">
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-success btn-lg py-3">
                                        <i class="fas fa-plus-circle me-2"></i> Create Blog
                                    </button>
                                    <button type="reset" class="btn btn-outline-secondary py-3">
                                        <i class="fas fa-redo me-2"></i> Reset Form
                                    </button>
                                    <a href="{{ route('admin.blog.index') }}" class="btn btn-outline-danger py-3">
                                        <i class="fas fa-times me-2"></i> Cancel
                                    </a>
                                </div>
                                <div class="mt-3 text-center">
                                    <small class="text-muted">
                                        <i class="fas fa-info-circle me-1"></i> All fields marked with <span class="text-danger">*</span> are required
                                    </small>
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
        cursor: pointer;
    }

    .image-preview-container:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
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
        // Store, Category, Language dependency
        const storeSelect = document.getElementById('store_id');
        const categorySelect = document.getElementById('category_id');
        const languageSelect = document.getElementById('language_id');

        if (storeSelect) {
            storeSelect.addEventListener('change', function () {
                const selectedOption = this.options[this.selectedIndex];
                const categoryId = selectedOption.getAttribute('data-category');
                const languageId = selectedOption.getAttribute('data-language');

                // Set category
                if (categoryId && categorySelect) {
                    categorySelect.value = categoryId;
                }

                // Set language
                if (languageId && languageSelect) {
                    languageSelect.value = languageId;
                }
            });
        }

        if (categorySelect) {
            categorySelect.addEventListener('change', function() {
                const selectedOption = categorySelect.options[categorySelect.selectedIndex];
                const languageId = selectedOption.getAttribute('data-language');
                if (languageId && languageSelect) {
                    // Find and select the language option
                    for (let i = 0; i < languageSelect.options.length; i++) {
                        if (languageSelect.options[i].value == languageId) {
                            languageSelect.selectedIndex = i;
                            break;
                        }
                    }
                }
            });
        }

        // Auto-generate slug from name while typing
        const nameInput = document.getElementById('name');
        const slugInput = document.getElementById('slug');
        const slugMessage = document.getElementById('slug-message');

        if (nameInput && slugInput) {
            // Track if slug was manually edited
            let slugManuallyEdited = false;
            
            // Store the last auto-generated slug
            let lastAutoGeneratedSlug = '';
            
            // Generate slug on input
            nameInput.addEventListener('input', function() {
                const name = this.value.trim();
                if (name && !slugManuallyEdited) {
                    const generatedSlug = generateSlug(name);
                    
                    // Only update if the slug field is empty or contains the last auto-generated slug
                    if (!slugInput.value || slugInput.value === lastAutoGeneratedSlug) {
                        slugInput.value = generatedSlug;
                        lastAutoGeneratedSlug = generatedSlug;
                        checkSlugUniqueness(generatedSlug);
                    }
                }
            });

            // Also generate slug on blur (if empty)
            nameInput.addEventListener('blur', function() {
                const name = this.value.trim();
                if (name && (!slugInput.value || slugInput.value === '') && !slugManuallyEdited) {
                    const generatedSlug = generateSlug(name);
                    slugInput.value = generatedSlug;
                    lastAutoGeneratedSlug = generatedSlug;
                    checkSlugUniqueness(generatedSlug);
                }
            });

            // Detect manual slug editing
            slugInput.addEventListener('input', function() {
                if (this.value.trim() && !slugManuallyEdited) {
                    slugManuallyEdited = true;
                }
                
                // Check slug when manually edited
                if (this.value.trim()) {
                    checkSlugUniqueness(this.value.trim());
                }
            });

            slugInput.addEventListener('blur', function() {
                if (this.value.trim()) {
                    checkSlugUniqueness(this.value.trim());
                }
            });

            // Generate slug on page load if name exists but slug is empty
            if (nameInput.value.trim() && (!slugInput.value.trim() || slugInput.value.trim() === '')) {
                const generatedSlug = generateSlug(nameInput.value.trim());
                slugInput.value = generatedSlug;
                lastAutoGeneratedSlug = generatedSlug;
                checkSlugUniqueness(generatedSlug);
            }

            // Generate slug on paste
            nameInput.addEventListener('paste', function() {
                // Use setTimeout to wait for paste to complete
                setTimeout(() => {
                    const name = this.value.trim();
                    if (name && !slugManuallyEdited) {
                        const generatedSlug = generateSlug(name);
                        
                        if (!slugInput.value || slugInput.value === lastAutoGeneratedSlug) {
                            slugInput.value = generatedSlug;
                            lastAutoGeneratedSlug = generatedSlug;
                            checkSlugUniqueness(generatedSlug);
                        }
                    }
                }, 10);
            });
        }

        function generateSlug(text) {
            if (!text) return '';
            
            return text.toLowerCase()
                .replace(/[^\w\s-]/g, '')  // Remove special chars
                .replace(/\s+/g, '-')      // Replace spaces with -
                .replace(/--+/g, '-')      // Replace multiple - with single -
                .trim();
        }

        function checkSlugUniqueness(slug) {
            const slugMessage = document.getElementById('slug-message');
            if (!slugMessage) return;
            
            if (slug.length < 3) {
                slugMessage.textContent = 'Slug is too short (minimum 3 characters)';
                slugMessage.style.color = 'red';
                return;
            }

            if (!/^[a-z0-9-]+$/.test(slug)) {
                slugMessage.textContent = 'Slug can only contain lowercase letters, numbers, and hyphens';
                slugMessage.style.color = 'red';
                return;
            }

            if (slug.endsWith('-') || slug.startsWith('-')) {
                slugMessage.textContent = 'Slug cannot start or end with a hyphen';
                slugMessage.style.color = 'red';
                return;
            }

            // Check if slug looks valid
            slugMessage.textContent = '✓ Slug looks good!';
            slugMessage.style.color = 'green';
        }

        // ===== IMAGE PREVIEW FUNCTIONALITY =====
        const imageInput = document.getElementById('image');
        const imagePreviewContainer = document.querySelector('.image-preview-container');
        const clearImageBtn = document.querySelector('button[onclick="clearImage()"]');
        
        if (imageInput && imagePreviewContainer) {
            // Function to preview image
            function previewImage(event) {
                const reader = new FileReader();
                const file = event.target.files[0];
                
                if (!file) {
                    resetImagePreview();
                    return;
                }
                
                // Validate file size (max 2MB)
                if (file.size > 2 * 1024 * 1024) {
                    showToast('File size must be less than 2MB', 'warning');
                    resetImageInput();
                    return;
                }
                
                // Validate file type
                const validTypes = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif', 'image/webp'];
                if (!validTypes.includes(file.type)) {
                    showToast('Please select a valid image file (JPG, PNG, GIF, WebP)', 'warning');
                    resetImageInput();
                    return;
                }

                reader.onload = function(e) {
                    imagePreviewContainer.innerHTML = `
                        <img src="${e.target.result}" 
                             class="img-fluid rounded shadow-sm" 
                             style="max-height: 200px; width: auto;"
                             alt="Image preview">
                        <div class="mt-2 small text-muted">
                            ${file.name} (${formatFileSize(file.size)})
                        </div>
                    `;
                }
                
                reader.onerror = function() {
                    showToast('Error reading image file', 'danger');
                    resetImagePreview();
                }
                
                reader.readAsDataURL(file);
            }
            
            // Function to clear image
            function clearImage() {
                resetImageInput();
                resetImagePreview();
                showToast('Image cleared', 'info');
            }
            
            // Helper function to reset image input
            function resetImageInput() {
                if (imageInput) {
                    imageInput.value = '';
                }
            }
            
            // Helper function to reset preview
            function resetImagePreview() {
                imagePreviewContainer.innerHTML = `
                    <div class="text-center py-4">
                        <i class="fas fa-image fa-3x text-muted mb-3"></i>
                        <p class="text-muted mb-0">No image selected</p>
                        <small class="text-muted">Preview will appear here</small>
                    </div>
                `;
            }
            
            // Helper function to format file size
            function formatFileSize(bytes) {
                if (bytes === 0) return '0 Bytes';
                const k = 1024;
                const sizes = ['Bytes', 'KB', 'MB', 'GB'];
                const i = Math.floor(Math.log(bytes) / Math.log(k));
                return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
            }
            
            // Make functions available globally
            window.previewImage = previewImage;
            window.clearImage = clearImage;
            
            // Attach event listener to file input
            imageInput.addEventListener('change', previewImage);
            
            // Make preview container clickable
            imagePreviewContainer.style.cursor = 'pointer';
            imagePreviewContainer.addEventListener('click', function() {
                imageInput.click();
            });
            
            // Add hover effect to preview container
            imagePreviewContainer.addEventListener('mouseenter', function() {
                this.style.backgroundColor = '#f8f9fa';
            });
            
            imagePreviewContainer.addEventListener('mouseleave', function() {
                this.style.backgroundColor = '';
            });
            
            // Attach clear button if it exists
            if (clearImageBtn) {
                clearImageBtn.addEventListener('click', clearImage);
            }
        }

        // ===== AUTO-POPULATE SEO FIELDS =====
        const titleInput = document.getElementById('title');
        const metaDescription = document.getElementById('meta_description');
        const metaKeywordsInput = document.getElementById('meta_keyword');
        const descriptionInput = document.getElementById('description');
        
        if (nameInput) {
            nameInput.addEventListener('blur', function() {
                const name = this.value.trim();
                if (!name) return;
                
                // Auto-fill meta title if empty
                if (titleInput && !titleInput.value.trim()) {
                    titleInput.value = name + ' | LilyDecors Blog';
                }
                
                // Auto-fill meta description from short description if empty
                if (metaDescription && descriptionInput && !metaDescription.value.trim()) {
                    const desc = descriptionInput.value.trim();
                    if (desc) {
                        metaDescription.value = desc.substring(0, 160);
                    }
                }
                
                // Auto-fill meta keywords if empty
                if (metaKeywordsInput && !metaKeywordsInput.value.trim()) {
                    const words = name.toLowerCase()
                        .replace(/[^\w\s]/g, '')
                        .split(' ')
                        .filter(word => word.length > 2)
                        .filter(word => !['and', 'the', 'for', 'with', 'from', 'your', 'this'].includes(word));
                    
                    const uniqueWords = [...new Set(words)];
                    if (uniqueWords.length > 0) {
                        metaKeywordsInput.value = uniqueWords.join(', ');
                    }
                }
            });
        }

        // ===== FORM VALIDATION =====
        const blogCreateForm = document.getElementById('blogCreateForm');
        if (blogCreateForm) {
            blogCreateForm.addEventListener('submit', function(e) {
                const name = document.getElementById('name')?.value.trim();
                const slug = document.getElementById('slug')?.value.trim();
                const image = document.getElementById('image')?.files[0];
                
                let errors = [];
                
                if (!name) errors.push('Blog Title is required');
                if (!slug) errors.push('URL Slug is required');
                if (slug && slug.length < 3) errors.push('Slug must be at least 3 characters long');
                if (!image) errors.push('Featured Image is required');
                
                if (errors.length > 0) {
                    e.preventDefault();
                    showToast(errors.join('<br>'), 'danger');
                    return false;
                }
                
                return true;
            });
        }

        // ===== TOAST NOTIFICATION =====
        function showToast(message, type) {
            // Remove existing toasts
            document.querySelectorAll('.toast-container').forEach(container => container.remove());
            
            // Create toast container
            const toastContainer = document.createElement('div');
            toastContainer.className = 'toast-container position-fixed top-0 end-0 p-3';
            toastContainer.style.zIndex = '9999';
            
            // Create toast element
            const toast = document.createElement('div');
            toast.className = `toast align-items-center text-white bg-${type === 'danger' ? 'danger' : type === 'warning' ? 'warning' : type === 'info' ? 'info' : 'success'} border-0`;
            toast.setAttribute('role', 'alert');
            toast.setAttribute('aria-live', 'assertive');
            toast.setAttribute('aria-atomic', 'true');
            
            toast.innerHTML = `
                <div class="d-flex">
                    <div class="toast-body">
                        <i class="fas fa-${type === 'success' ? 'check-circle' : 'exclamation-triangle'} me-2"></i>
                        ${message}
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
                </div>
            `;
            
            toastContainer.appendChild(toast);
            document.body.appendChild(toastContainer);
            
            // Initialize and show toast
            const bsToast = new bootstrap.Toast(toast);
            bsToast.show();
            
            // Remove toast after hiding
            toast.addEventListener('hidden.bs.toast', function () {
                toastContainer.remove();
            });
        }

        // Debug logging
        console.log('Blog form script loaded successfully');
        console.log('Image input:', imageInput);
        console.log('Image preview container:', imagePreviewContainer);
    });
</script>
@endpush