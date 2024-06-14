@extends('backend.dashboard.dashboard')
@section('content')
<div class="header pb-6 d-flex align-items-center"
    style="min-height: 150px; background-image: url(../assets/backend/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
    <!-- Mask -->
    <span class="mask bg-gradient-default opacity-8"></span>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col-xl-11 order-xl-1">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Add To About Section 4</h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('about-sec4.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h6 class="heading-small text-muted mb-4">Information</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Name (Arabic)</label>
                                        <input type="text" name="ar_name" class="form-control"
                                            placeholder="Enter the Arabic name" required>
                                        @error('ar_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Name (English)</label>
                                        <input type="text" name="en_name" class="form-control"
                                            placeholder="Enter the English name" required>
                                        @error('en_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Title (Arabic)</label>
                                        <input type="text" name="ar_title" class="form-control"
                                            placeholder="Enter the Arabic title" required>
                                        @error('ar_title')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Title (English)</label>
                                        <input type="text" name="en_title" class="form-control"
                                            placeholder="Enter the English title" required>
                                        @error('en_title')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pl-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Description (Arabic)</label>
                                <textarea id="editor-ar" name="ar_description" rows="6" class="form-control" placeholder="Enter Arabic description"></textarea>
                                @error('ar_description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Description (English)</label>
                                <textarea id="editor-en" name="en_description" rows="6" class="form-control" placeholder="Enter English description"></textarea>
                                @error('en_description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="d-flex mt-3 justify-content-end">
                            <a href="{{ route('about-sec4.index') }}" class="btn btn-secondary">Back</a>
                            <button type="submit" class="btn btn-success">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
