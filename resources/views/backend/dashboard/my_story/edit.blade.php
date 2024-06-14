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
                        @method('put')
                        <h6 class="heading-small text-muted mb-4">Information</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="ar_title1">Title 1 (Arabic)</label>
                                            <input type="text"  name="ar_title1" value="{{old('ar_title1', $mystory->ar_title1)}}" class="form-control" placeholder="Write your title here in Arabic">
                                            @error('ar_title1')
                                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="en_title1">Title 1 (English)</label>
                                            <input type="text"  name="en_title1" value="{{old('en_title1', $mystory->en_title1)}}" class="form-control" placeholder="Write your title here in English">
                                            @error('en_title1')
                                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="ar_title2">Title 2 (Arabic)</label>
                                            <input type="text" name="ar_title2" value="{{old('ar_title2', $mystory->ar_title2)}}"  class="form-control" placeholder="Write your second title here in Arabic">
                                            @error('ar_title2')
                                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="en_title2">Title 2 (English)</label>
                                            <input type="text" name="en_title2" value="{{old('en_title2', $mystory->en_title2)}}"  class="form-control" placeholder="Write your second title here in English">
                                            @error('en_title2')
                                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div class="pl-lg-4 ">
                            <div class="form-group ">
                                <label class="form-control-label" for="ar_content">Content (Arabic)</label>
                                <textarea id="editor-ar" name="ar_content" rows="15" class="form-control">{{old('ar_content', $mystory->ar_content)}}</textarea>
                                @error('ar_content')
                                    <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group ">
                                <label class="form-control-label" for="en_content">Content (English)</label>
                                <textarea id="editor-en" name="en_content" rows="15" class="form-control">{{old('en_content', $mystory->en_content)}}</textarea>
                                @error('en_content')
                                    <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="pl-lg-4 ">
                            <label class="form-control-label ">Upload Image 1</label>
                            <div class="input-group">
                                <input type="file" name="photo1" class="form-control">
                            </div>
                            <img width="150" height="100" src="{{asset('dashboard/img/'. $mystory->photo1)}}"/>
                        </div>
                        <div class="pl-lg-4 ">
                            <label class="form-control-label ">Upload Image 2</label>
                            <div class="input-group">
                                <input type="file" name="photo2" class="form-control">
                            </div>
                            <img width="150" height="100" src="{{asset('dashboard/img/'. $mystory->photo2)}}"/>
                        </div>
                        <div class="pl-lg-4 ">
                            <label class="form-control-label ">Upload Image 3</label>
                            <div class="input-group">
                                <input type="file" name="photo3" class="form-control">
                            </div>
                            <img width="150" height="100" src="{{asset('dashboard/img/'. $mystory->photo3)}}"/>
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
