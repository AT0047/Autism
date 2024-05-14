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
                                            <label class="form-control-label" for="input-username">Title 1</label>
                                            <input type="text" value="{{ old('title1') }}" name="title1" class="form-control"
                                                placeholder="Write your title here">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-username">Title 2</label>
                                            <input type="text" value="{{ old('title2') }}" name="title2" class="form-control"
                                                placeholder="Write your title here">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-username">Content</label>
                                    <textarea id="content" name="content" rows="6" class="form-control"
                                        placeholder="Enter Content Here">{{ old('content') }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Upload Image 1</label>
                                    <input type="file" name="photo1" class="form-control" accept="image/*">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Upload Image 2</label>
                                    <input type="file" name="photo2" class="form-control" accept="image/*">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Upload Image 3</label>
                                    <input type="file" name="photo3" class="form-control" accept="image/*">
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
