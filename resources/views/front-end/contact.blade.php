@extends('layouts.master')

@section('title')
    @lang('contact.meta.title')
@endsection

@section('description')
    @lang('contact.meta.description')
@endsection

@section('keywords')
    @lang('contact.meta.keywords')
@endsection

@section('author')
    @lang('contact.meta.author')
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/contact.css') }}">
@endpush

@section('content')
<!-- Contact Header -->
<div class="contact-header">
    <div class="container">
        <div class="contact-header-content">
            <h1>@lang('contact.header.title')</h1>
            <p class="lead">@lang('contact.header.subtitle')</p>
        </div>
    </div>
</div>

<!-- Contact Form Section -->
<div class="container py-4 text-capitalize">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <!-- Success Message -->
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                    <i class="fas fa-check-circle me-2"></i>
                    @lang('contact.messages.success')
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="@lang('common.close')"></button>
                </div>
            @endif

            <!-- Error Messages -->
            @if($errors->any())
                <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
                    <i class="fas fa-exclamation-triangle me-2"></i>
                    @lang('contact.messages.error_title')
                    <ul class="mb-0 mt-2">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="@lang('common.close')"></button>
                </div>
            @endif

            <div class="card contact-card border-0">
                <div class="card-header bg-success text-white py-4">
                    <h1 class="h3 mb-0 text-center">@lang('contact.header.title')</h1>
                </div>
                <div class="card-body p-4 p-md-5">
                    <p class="text-muted text-center mb-4">@lang('contact.form.description')</p>

                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="row mb-4">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <label for="name" class="form-label">@lang('contact.form.fields.name.label') *</label>
                                <input type="text" class="form-control py-3 @error('name') is-invalid @enderror"
                                       id="name" name="name" value="{{ old('name') }}" required
                                       placeholder="@lang('contact.form.fields.name.placeholder')">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">@lang('contact.form.fields.email.label') *</label>
                                <input type="email" class="form-control py-3 @error('email') is-invalid @enderror"
                                       id="email" name="email" value="{{ old('email') }}" required
                                       placeholder="@lang('contact.form.fields.email.placeholder')">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="subject" class="form-label">@lang('contact.form.fields.subject.label')</label>
                            <input type="text" class="form-control py-3 @error('subject') is-invalid @enderror"
                                   id="subject" name="subject" value="{{ old('subject') }}"
                                   placeholder="@lang('contact.form.fields.subject.placeholder')">
                            @error('subject')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="message" class="form-label">@lang('contact.form.fields.message.label') *</label>
                            <textarea class="form-control py-3 @error('message') is-invalid @enderror"
                                      id="message" name="message" rows="6" required
                                      placeholder="@lang('contact.form.fields.message.placeholder')">{{ old('message') }}</textarea>
                            @error('message')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-submit btn-lg text-white py-3">
                                <i class="fas fa-paper-plane me-2"></i> @lang('contact.form.submit')
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Contact Information Cards -->
            <div class="row mt-5">
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="card info-card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <i class="fas fa-map-marker-alt mb-3" style="font-size: 2.5rem;"></i>
                            <h5 class="card-title">@lang('contact.info.location.title')</h5>
                            <p class="card-text text-muted">
                                @lang('contact.info.location.address_line1')<br>
                                @lang('contact.info.location.address_line2')<br>
                                @lang('contact.info.location.zip_code')
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card info-card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <i class="fas fa-envelope mb-3" style="font-size: 2.5rem;"></i>
                            <h5 class="card-title">@lang('contact.info.email.title')</h5>
                            <p class="card-text text-muted">
                                <i class="fas fa-envelope-open-text"></i>
                                @lang('contact.info.email.contact')<br>
                                <i class="fas fa-envelope-open-text"></i>
                                @lang('contact.info.email.support')
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Form validation and enhancement
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('form');
        const inputs = form.querySelectorAll('input, textarea');

        // Add focus effects
        inputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.classList.add('focused');
            });

            input.addEventListener('blur', function() {
                if (!this.value) {
                    this.parentElement.classList.remove('focused');
                }
            });
        });

        // Form submission enhancement
        form.addEventListener('submit', function(e) {
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;

            // Show loading state
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i> @lang("contact.form.sending")';
            submitBtn.disabled = true;

            // Re-enable after 5 seconds if still processing (fallback)
            setTimeout(() => {
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
            }, 5000);
        });
    });
</script>
@endpush