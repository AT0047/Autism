@extends('backend.dashboard.dashboard')
@section('content')
    <div class="row">
        <div class="col-xl-10 order-xl-1">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Edit - {{ $books->name }} Information</h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('books.update', $books->id) }}" method ="POST" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <h6 class="heading-small text-muted mb-4">Information</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Book Title</label>
                                        <input type="text" value="{{ old('name', $books->name) }}" name="name"
                                            class="form-control" placeholder="Write Book's Title Here">
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
                                        <label class="form-control-label" for="input-username">Category Name</label>
                                        <select name="category_id" class ="form-control">
                                            <option disabled selected value="">Select Category</option>
                                            @foreach ($categories as $id => $name)
                                                <option
                                                    value="{{ $id }}"{{ $id == $books->category_id ? 'selected' : '' }}>
                                                    {{ $name }}</option>
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
                                        <input type="text" value="{{ old('author_name', $books->author_name) }}"
                                            name="author_name" class="form-control" placeholder="Write Author Name Here">
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
                                        <input type="date"
                                            value="{{ old('publication_date', $books->publication_date) }}"
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
                                            <option value='1'
                                                {{ $books->prefer == 1 ? 'selected' : '' }}>Preferd</option>
                                            <option value='0'
                                                {{ $books->prefer == 0 ? 'selected' : '' }}>Not Preferd
                                            </option>
                                        </select>
                                        @error('prefer')
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
                                <textarea id="postContent" name="content" rows="19" class="form-control " placeholder="Enter Book Content Here">{{ old('content', $books->content) }}</textarea>
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
                            <div>
                                <img width = "150" height = "100"
                                    src="{{ asset('dashboard/img/'.$books->photo) }}" />
                            </div>
                            @error('photo')
                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="d-flex mt-3 justify-content-end">
                            <a href="{{ route('books.index') }}" class="btn btn-secondary">Back</a>
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
