@extends('backend.dashboard.dashboard')
@section('content')
    <div class="row">
        <div class="col-xl-10 order-xl-1">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Edit - {{ $book->en_name }} Information</h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('books.update', $book->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <h6 class="heading-small text-muted mb-4">Information</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-ar-name">Book's Title (Arabic)</label>
                                        <input type="text" value="{{ old('ar_name', $book->ar_name) }}" name="ar_name" class="form-control" placeholder="Write Book's Title in Arabic Here">
                                        @error('ar_name')
                                            <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-en-name">Book's Title (English)</label>
                                        <input type="text" value="{{ old('en_name', $book->en_name) }}" name="en_name" class="form-control" placeholder="Write Book's Title in English Here">
                                        @error('en_name')
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
                                        <label class="form-control-label" for="input-category">Category Name</label>
                                        <select name="category_id" class="form-control">
                                            <option disabled selected value="">Select Category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}"{{ $category->id == $book->category_id ? 'selected' : '' }}>{{ $category->en_name }}</option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
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
                                        <label class="form-control-label" for="input-ar-author-name">Author's Name (Arabic)</label>
                                        <input type="text" value="{{ old('ar_author_name', $book->ar_author_name) }}" name="ar_author_name" class="form-control" placeholder="Write Author's Name in Arabic Here">
                                        @error('ar_author_name')
                                            <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-en-author-name">Author's Name (English)</label>
                                        <input type="text" value="{{ old('en_author_name', $book->en_author_name) }}" name="en_author_name" class="form-control" placeholder="Write Author's Name in English Here">
                                        @error('en_author_name')
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
                                        <label class="form-control-label" for="input-publication-date">Publication Date</label>
                                        <input type="date" value="{{ old('publication_date', $book->publication_date) }}" name="publication_date" class="form-control" placeholder="Publication Date">
                                        @error('publication_date')
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
                                        <label class="form-control-label" for="input-prefer">Status</label>
                                        <select name="prefer" class="form-control">
                                            <option disabled selected value="">Select Status</option>
                                            <option value="1" {{ $book->prefer == 1 ? 'selected' : '' }}>Preferred</option>
                                            <option value="0" {{ $book->prefer == 0 ? 'selected' : '' }}>Not Preferred</option>
                                        </select>
                                        @error('prefer')
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
                                        <label class="form-control-label" for="input-display-order">Display Order</label>
                                        <input type="number" value="{{ old('display_order', $book->display_order) }}" name="display_order" class="form-control" placeholder="Decide Book's Display Order Here">
                                        @error('display_order')
                                            <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pl-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="input-ar-content">Content (Arabic)</label>
                                @error('ar_content')
                                    <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                @enderror
                                <textarea id="editor-ar" name="ar_content" rows="19" class="form-control" placeholder="Enter Book Content in Arabic Here">{{ old('ar_content', $book->ar_content) }}</textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-en-content">Content (English)</label>
                                @error('en_content')
                                    <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                @enderror
                                <textarea id="editor-en" name="en_content" rows="19" class="form-control" placeholder="Enter Book Content in English Here">{{ old('en_content', $book->en_content) }}</textarea>
                            </div>
                        </div>
                        <div class="pl-lg-4">
                            <label class="form-control-label">Upload Video</label>
                            <div class="input-group">
                                <input type="file" name="video" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" accept="video/mp4,video/x-m4v,video/*">
                            </div>
                            @if ($book->video)
                                <div>
                                    <video controls width="150">
                                        <source src="{{ asset('dashboard/img/' . $book->video) }}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                            @endif
                            @error('video')
                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="pl-lg-4">
                            <label class="form-control-label">Upload Image</label>
                            <div class="input-group">
                                <input type="file" name="photo" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" accept="image/*">
                            </div>
                            <div>
                                <img width="150" height="100" src="{{ asset('dashboard/img/' . $book->photo) }}" />
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
                       
