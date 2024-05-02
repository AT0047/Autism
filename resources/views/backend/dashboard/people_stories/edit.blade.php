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
                                <h3 class="mb-0">Edit - {{$peopleStory->name}}'s Story</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action ="{{ route('people-stories.update', $peopleStory->id) }}" method ="POST" enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <h6 class="heading-small text-muted mb-4">Information</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-username">Name</label>
                                            <input type="text" value="{{ old('name', $peopleStory->name) }}" name="name" class="form-control" placeholder="Write your title here">
                                            @error('name')
                                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-username">Job</label>
                                            <input type="text" value="{{ old('job', $peopleStory->job) }}" name="job" class="form-control" placeholder="Write your title here">
                                            @error('job')
                                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-username">Title</label>
                                            <input type="text" value="{{ old('title', $peopleStory->title) }}" name="title" class="form-control" placeholder="Write your title here">
                                            @error('title')
                                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pl-lg-4 ">
                                <div class="form-group ">
                                    <label class="form-control-label ">Content</label>
                                    @error('content')
                                        <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                    @enderror
                                    <textarea id="postContent" name="content" rows="19" class="form-control " placeholder="Enter Content Here">{{ old('content', $peopleStory->content) }}</textarea>
                                </div>
                            </div>
                            <div class="pl-lg-4 ">
                                <label class="form-control-label ">Upload image</label>
                                <div class="input-group">
                                    <input type="file" name="photo" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                </div>
                                <div>
                                    <img width = "150" height = "100" src="{{asset('dashboard/img/'. $peopleStory->photo)}}"/>
                                </div>
                                @error('photo')
                                    <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="d-flex mt-3 justify-content-end">
                                <a href="{{ route('people-stories.index') }}" class="btn btn-secondary">Back</a>
                                <button type="submit" class="btn btn-success">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
