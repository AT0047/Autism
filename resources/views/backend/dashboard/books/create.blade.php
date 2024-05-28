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
                                <h3 class="mb-0">Add New Article</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action ="{{ route('books.store') }}" method ="POST" enctype="multipart/form-data">
                            @csrf
                            <h6 class="heading-small text-muted mb-4">Information</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-username">Article's Title</label>
                                            <input type="text" value="{{ old('name') }}" name="name"
                                                class="form-control" placeholder="Write Article's Title Here">
                                            @error('name')
                                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-username">Category's Name</label>
                                            <select name="category_id" class ="form-control">
                                                <option disabled selected value="">Select Category</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('category_id')
                                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-username">Author's Name</label>
                                            <input type="text" value="{{ old('author_name') }}" name="author_name"
                                                class="form-control" placeholder="Write Author Name Here">
                                            @error('author_name')
                                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-username">Publication Date</label>
                                            <input type="date" value="{{ old('publication_date') }}"
                                                name="publication_date" class="form-control" placeholder="Publication Date">
                                            @error('publication_date')
                                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-username">Status</label>
                                            <select name="prefer" class ="form-control">
                                                <option disabled selected value="">Select Status</option>
                                                <option value='1'>Preferd</option>
                                                <option value='0'>Not Preferd</option>
                                            </select>
                                            @error('prefer')
                                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-username">Display Order</label>
                                            <input type="number" value="{{ old('display_order') }}" name="display_order"
                                                class="form-control" placeholder="Decide Article's Display Order Here">
                                            @error('display_order')
                                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pl-lg-4 ">
                                <div class="form-group ">
                                    <label class="form-control-label">Content</label>
                                    @error('content')
                                        <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                    @enderror
                                    <textarea id="postContent" name="content" rows="19" class="form-control " placeholder="Enter Book Content Here">{{ old('content') }}</textarea>
                                </div>
                            </div>
                            <div class="pl-lg-4 ">
                                <label class="form-control-label ">Upload Video</label>
                                <div class="input-group">
                                    <input type="file" name="video" class="form-control" id="inputGroupFile04"
                                        aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                </div>
                                @error('video')
                                    <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="pl-lg-4 ">
                                <label class="form-control-label ">Upload Image</label>
                                <div class="input-group">
                                    <input type="file" name="photo" class="form-control" id="inputGroupFile04"
                                        aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                </div>
                                @error('photo')
                                    <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="d-flex mt-3 justify-content-end">
                                <a href="{{ route('books.index') }}" class="btn btn-secondary">Back</a>
                                <button type="submit" class="btn btn-success">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
