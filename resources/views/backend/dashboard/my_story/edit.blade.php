@extends('backend.dashboard.dashboard')
@section('content')
    <div class="row">
        <div class="col-xl-10 order-xl-1">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Edit</h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{route('mystory.update', $mystory->id)}}" method ="POST" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <h6 class="heading-small text-muted mb-4">Information</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-username">Title 1</label>
                                            <input type="text" value="{{old('title1', $mystory->title1)}}" name="title1" class="form-control" placeholder="Write your title here">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-username">Title 2</label>
                                            <input type="text" value="{{old('title1', $mystory->title2)}}" name="title2" class="form-control" placeholder="Write your title here">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div class="pl-lg-4 ">
                            <div class="form-group ">
                                <label class="form-control-label ">Content</label>
                                <textarea id="postContent" name="content" rows="15" class="form-control">{{old('content', $mystory->content)}}</textarea>
                            </div>
                        </div>
                        <div class="pl-lg-4 ">
                            <label class="form-control-label ">Upload Image 1</label>
                            <div class="input-group">
                                <input type="file" name="photo1" class="form-control">
                            </div>
                            <img width = "150" height = "100" src="{{asset('dashboard/img/'. $mystory->photo1)}}"/>
                        </div>
                        <div class="pl-lg-4 ">
                            <label class="form-control-label ">Upload Image 2</label>
                            <div class="input-group">
                                <input type="file" name="photo2" class="form-control">
                            </div>
                            <img width = "150" height = "100" src="{{asset('dashboard/img/'. $mystory->photo2)}}"/>
                        </div>
                        <div class="pl-lg-4 ">
                            <label class="form-control-label ">Upload Image 3</label>
                            <div class="input-group">
                                <input type="file" name="photo3" class="form-control">
                            </div>
                            <img width = "150" height = "100" src="{{asset('dashboard/img/'. $mystory->photo3)}}"/>
                        </div>
                        <div class="d-flex mt-3 justify-content-end">
                            <a href="{{route('mystory.index')}}" class="btn btn-secondary">Back</a>
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
