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
                                <h3 class="mb-0">Edit - {{$ourService->title}}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action ="{{ route('our-services.update', $ourService->id) }}" method ="POST" enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <h6 class="heading-small text-muted mb-4">Information</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-username">Title</label>
                                            <input type="text" value="{{ old('title', $ourService->title) }}" name="title" class="form-control" placeholder="Write your title here">
                                            @error('title')
                                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pl-lg-4 ">
                                <div class="form-group ">
                                    <label class="form-control-label ">description</label>
                                    @error('description')
                                        <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                    @enderror
                                    <textarea id="postContent" name="description" rows="19" class="form-control " placeholder="Enter Description Here">{{ old('description', $ourService->description) }}</textarea>
                                </div>
                            </div>
                            <div class="pl-lg-4 ">
                                <label class="form-control-label ">Upload image</label>
                                <div class="input-group">
                                    <input type="file" name="photo" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                </div>
                                <div>
                                    <img width = "150" height = "100" src="{{asset('dashboard/img/'. $ourService->photo)}}"/>
                                </div>
                                @error('photo')
                                    <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="d-flex mt-3 justify-content-end">
                                <a href="{{ route('our-services.index') }}" class="btn btn-secondary">Back</a>
                                <button type="submit" class="btn btn-success">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
