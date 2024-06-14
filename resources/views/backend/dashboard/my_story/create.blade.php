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
                                <h3 class="mb-0">Add To My Story Section</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('mystory.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <h6 class="heading-small text-muted mb-4">Information</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="ar_title1">Title 1 (Arabic)</label>
                                            <input type="text" value="{{ old('ar_title1') }}" name="ar_title1" class="form-control"
                                                placeholder="Write your title here in Arabic">
                                            @error('ar_title1')
                                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="en_title1">Title 1 (English)</label>
                                            <input type="text" value="{{ old('en_title1') }}" name="en_title1" class="form-control"
                                                placeholder="Write your title here in English">
                                            @error('en_title1')
                                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="ar_title2">Title 2 (Arabic)</label>
                                            <input type="text" value="{{ old('ar_title2') }}" name="ar_title2" class="form-control"
                                                placeholder="Write your second title here in Arabic">
                                            @error('ar_title2')
                                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="en_title2">Title 2 (English)</label>
                                            <input type="text" value="{{ old('en_title2') }}" name="en_title2" class="form-control"
                                                placeholder="Write your second title here in English">
                                            @error('en_title2')
                                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="ar_content">Content (Arabic)</label>
                                    <textarea id="editor-ar" name="ar_content" rows="6" class="form-control" placeholder="Enter content here in Arabic">{{ old('ar_content') }}</textarea>
                                    @error('ar_content')
                                        <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="en_content">Content (English)</label>
                                    <textarea id="editor-en" name="en_content" rows="6" class="form-control" placeholder="Enter content here in English">{{ old('en_content') }}</textarea>
                                    @error('en_content')
                                        <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Upload Image 1</label>
                                    <input type="file" name="photo1" class="form-control" accept="image/*">
                                    @error('photo1')
                                        <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Upload Image 2</label>
                                    <input type="file" name="photo2" class="form-control" accept="image/*">
                                    @error('photo2')
                                        <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Upload Image 3</label>
                                    <input type="file" name="photo3" class="form-control" accept="image/*">
                                    @error('photo3')
                                        <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex mt-3 justify-content-end">
                                <a href="{{ route('mystory.index') }}" class="btn btn-secondary">Back</a>
                                <button type="submit" class="btn btn-success">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
