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
                                <h3 class="mb-0">Edit Experience Section</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('about-experience.update', $aboutExperience->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <h6 class="heading-small text-muted mb-4">Information</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-username">Title (Arabic)</label>
                                            <input type="text" name="ar_title" class="form-control" value="{{ old('ar_title', $aboutExperience->ar_title) }}">
                                            @error('ar_title')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-username">Title (English)</label>
                                            <input type="text" name="en_title" class="form-control" value="{{ old('en_title', $aboutExperience->en_title) }}">
                                            @error('en_title')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-username">Place (Arabic)</label>
                                            <input type="text" name="ar_place" class="form-control" value="{{ old('ar_place', $aboutExperience->ar_place) }}">
                                            @error('ar_place')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-username">Place (English)</label>
                                            <input type="text" name="en_place" class="form-control" value="{{ old('en_place', $aboutExperience->en_place) }}">
                                            @error('en_place')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-username">Date</label>
                                            <input type="date" name="date" class="form-control" value="{{ old('date', $aboutExperience->date) }}">
                                            @error('date')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pl-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Description (Arabic)</label>
                                    <textarea id="editor-ar" name="ar_description" rows="6" class="form-control">{{ old('ar_description', $aboutExperience->ar_description) }}</textarea>
                                    @error('ar_description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Description (English)</label>
                                    <textarea id="editor-en" name="en_description" rows="6" class="form-control">{{ old('en_description', $aboutExperience->en_description) }}</textarea>
                                    @error('en_description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex mt-3 justify-content-end">
                                <a href="{{ route('about-experience.index') }}" class="btn btn-secondary">Back</a>
                                <button type="submit" class="btn btn-success">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
