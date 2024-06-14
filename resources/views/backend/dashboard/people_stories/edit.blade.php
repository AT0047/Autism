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
                                <h3 class="mb-0">Edit - {{$peopleStory->en_name}}'s Story</h3>
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
                                    <!-- Arabic Name -->
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="ar_name">Name (Arabic)</label>
                                            <input type="text" value="{{ old('ar_name', $peopleStory->ar_name) }}" name="ar_name" class="form-control" placeholder="Write the name in Arabic here">
                                            @error('ar_name')
                                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- English Name -->
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="en_name">Name (English)</label>
                                            <input type="text" value="{{ old('en_name', $peopleStory->en_name) }}" name="en_name" class="form-control" placeholder="Write the name in English here">
                                            @error('en_name')
                                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Arabic Job -->
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="ar_job">Job (Arabic)</label>
                                            <input type="text" value="{{ old('ar_job', $peopleStory->ar_job) }}" name="ar_job" class="form-control" placeholder="Write the job in Arabic here">
                                            @error('ar_job')
                                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- English Job -->
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="en_job">Job (English)</label>
                                            <input type="text" value="{{ old('en_job', $peopleStory->en_job) }}" name="en_job" class="form-control" placeholder="Write the job in English here">
                                            @error('en_job')
                                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Arabic Title -->
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="ar_title">Title (Arabic)</label>
                                            <input type="text" value="{{ old('ar_title', $peopleStory->ar_title) }}" name="ar_title" class="form-control" placeholder="Write the title in Arabic here">
                                            @error('ar_title')
                                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- English Title -->
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="en_title">Title (English)</label>
                                            <input type="text" value="{{ old('en_title', $peopleStory->en_title) }}" name="en_title" class="form-control" placeholder="Write the title in English here">
                                            @error('en_title')
                                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Arabic Content -->
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Content (Arabic)</label>
                                            @error('ar_content')
                                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                            @enderror
                                            <textarea id="editor-ar" name="ar_content" rows="10" class="form-control" placeholder="Enter content in Arabic">{{ old('ar_content', $peopleStory->ar_content) }}</textarea>
                                        </div>
                                    </div>
                                    <!-- English Content -->
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Content (English)</label>
                                            @error('en_content')
                                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                            @enderror
                                            <textarea id="editor-en" name="en_content" rows="10" class="form-control" placeholder="Enter content in English">{{ old('en_content', $peopleStory->en_content) }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="pl-lg-4">
                                    <label class="form-control-label">Upload Image</label>
                                    <div class="input-group">
                                        <input type="file" name="photo" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                    </div>
                                    <div>
                                        <img width="150" height="100" src="{{asset('dashboard/img/'. $peopleStory->photo)}}" />
                                    </div>
                                    @error('photo')
                                        <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="d-flex mt-3 justify-content-end">
                                <a href="{{ route('people-stories.index') }}" class="btn btn-secondary">Back</a>
                                <button type="submit" class="btn btn-success">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
