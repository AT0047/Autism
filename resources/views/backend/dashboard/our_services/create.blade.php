@extends('backend.dashboard.dashboard')
@section('content')
    <div class="header pb-6 d-flex align-items-center"
        style="min-height: 150px; background-image: url({{asset('dashboard/img/theme/profile-cover.jpg')}}); background-size: cover; background-position: center top;">
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
                                <h3 class="mb-0">Add To Our Services Section</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('our-services.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <h6 class="heading-small text-muted mb-4">Information</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-ar_title">Title (Arabic)</label>
                                            <input type="text" value="{{ old('ar_title') }}" name="ar_title"
                                                class="form-control" placeholder="Write your Title in Arabic here">
                                            @error('ar_title')
                                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-en_title">Title (English)</label>
                                            <input type="text" value="{{ old('en_title') }}" name="en_title"
                                                class="form-control" placeholder="Write your Title in English here">
                                            @error('en_title')
                                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-ar_description">Description (Arabic)</label>
                                    @error('ar_description')
                                        <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                    @enderror
                                    <textarea id="editor-ar" name="ar_description" rows="6" class="form-control"
                                        placeholder="Enter Arabic description">{{ old('ar_description') }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-en_description">Description (English)</label>
                                    @error('en_description')
                                        <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                    @enderror
                                    <textarea id="editor-en" name="en_description" rows="6" class="form-control"
                                        placeholder="Enter English description">{{ old('en_description') }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Upload Image</label>
                                    <div class="input-group">
                                        <input type="file" name="photo" class="form-control" accept="image/*">
                                    </div>
                                    @error('photo')
                                        <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex mt-3 justify-content-end">
                                <a href="{{ route('our-services.index') }}" class="btn btn-secondary">Back</a>
                                <button type="submit" class="btn btn-success">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
