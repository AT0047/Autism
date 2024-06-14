@extends('backend.dashboard.dashboard')
@section('content')
    <div class="header pb-6 d-flex align-items-center"
        style="min-height: 150px; background-image: url({{ asset('dashboard/img/theme/profile-cover.jpg') }}); background-size: cover; background-position: center top;">
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
                                <h3 class="mb-0">Edit - {{ $title->en_title }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('titles.update', $title->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <h6 class="heading-small text-muted mb-4">Information</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-ar-title">Title for article section (Arabic)</label>
                                            <input type="text" value="{{ old('ar_title', $title->ar_title) }}" name="ar_title"
                                                class="form-control" placeholder="اكتب عنوانك هنا">
                                            @error('ar_title')
                                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-en-title">Title for article section (English)</label>
                                            <input type="text" value="{{ old('en_title', $title->en_title) }}" name="en_title"
                                                class="form-control" placeholder="Write your title here">
                                            @error('en_title')
                                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pl-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Description (Arabic)</label>
                                    @error('ar_description')
                                        <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                    @enderror
                                    <textarea id="editor-ar" name="ar_description" rows="5" class="form-control" placeholder="اكتب الوصف هنا">{{ old('ar_description', $title->ar_description) }}</textarea>
                                </div>
                            </div>
                            <div class="pl-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Description (English)</label>
                                    @error('en_description')
                                        <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                    @enderror
                                    <textarea id="editor-en" name="en_description" rows="5" class="form-control" placeholder="Write the description here">{{ old('en_description', $title->en_description) }}</textarea>
                                </div>
                            </div>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label class="form-control-label">Upload Arabic Image</label>
                                        <div class="input-group">
                                            <input type="file" name="ar_photo" class="form-control" id="inputGroupFile04"
                                                aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                        </div>
                                        <div>
                                            <img width="150" height="100" src="{{ asset('dashboard/img/' . $title->ar_photo) }}" />
                                        </div>
                                        @error('ar_photo')
                                            <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-control-label">Upload English Image</label>
                                        <div class="input-group">
                                            <input type="file" name="en_photo" class="form-control" id="inputGroupFile05"
                                                aria-describedby="inputGroupFileAddon05" aria-label="Upload">
                                        </div>
                                        <div>
                                            <img width="150" height="100" src="{{ asset('dashboard/img/' . $title->en_photo) }}" />
                                        </div>
                                        @error('en_photo')
                                            <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <br>
                                        <label class="form-control-label">Upload Home Photo</label>
                                        <div class="input-group">
                                            <input type="file" name="home_photo" class="form-control" id="inputGroupFile05"
                                                aria-describedby="inputGroupFileAddon05" aria-label="Upload">
                                        </div>
                                        <div>
                                            <img width="150" height="100" src="{{ asset('dashboard/img/' . $title->home_photo) }}" />
                                        </div>
                                        @error('home_photo')
                                            <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex mt-3 justify-content-end">
                                <a href="{{ route('titles.index') }}" class="btn btn-secondary">Back</a>
                                <button type="submit" class="btn btn-success">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
