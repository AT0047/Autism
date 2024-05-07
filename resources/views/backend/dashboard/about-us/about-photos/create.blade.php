@extends('backend.dashboard.dashboard')

@section('content')
    <div class="header pb-6 d-flex align-items-center" style="min-height: 150px; background-image: url(../assets/backend/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
        <!-- Mask -->
        <span class="mask bg-gradient-default opacity-8"></span>
    </div>

    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-xl-11 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Add To About Photos Section</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('about-photos.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <h6 class="heading-small text-muted mb-4">Information</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-username">Section 1 Video</label>
                                            <input type="text" name="sec1_video" class="form-control" placeholder="Enter Section 1 Video URL" required>
                                            @error('sec1_video')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-username">Section 1 Photo</label>
                                            <input type="file" name="sec1_photo" class="form-control" required>
                                            @error('sec1_photo')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-username">Section 2 Photo</label>
                                            <input type="file" name="sec2_photo" class="form-control" required>
                                            @error('sec2_photo')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-username">Section 4 Photo</label>
                                            <input type="file" name="sec4_photo" class="form-control" required>
                                            @error('sec4_photo')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-username">Logo (optional)</label>
                                            <input type="file" name="logo" class="form-control" >
                                            @error('logo')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex mt-3 justify-content-end">
                                <a href="{{ route('about-photos.index') }}" class="btn btn-secondary">Back</a>
                                <button type="submit" class="btn btn-success">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
