@extends('backend.dashboard.dashboard')
@section('content')
    <div class="row">
        <div class="col-xl-10 order-xl-1">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Edit - {{ $categories->name }} Information</h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('categories.update', $categories->id) }}" method ="POST" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <h6 class="heading-small text-muted mb-4">Information</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Name</label>
                                        <input type="text" value="{{ old('name', $categories->name) }}" name="name"
                                            class="form-control" placeholder="Write Library Name Here">
                                        @error('name')
                                            <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Libraries</label>
                                        <select name="library_id" class ="form-control">
                                            <option disabled selected value="">Select Library</option>
                                            @foreach ($libraries as $id => $name)
                                                <option
                                                    value="{{ $id }}"{{ $id == $categories->library_id ? 'selected' : '' }}>
                                                    {{ $name }}</option>
                                            @endforeach
                                        </select>
                                        @error('library_id')
                                            <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="pl-lg-4 ">
                            <label class="form-control-label ">Upload Image</label>
                            <div class="input-group">
                                <input type="file" name="photo" class="form-control">
                            </div>
                            <img width = "150" height = "100" src="{{ asset('dashboard/img/' . $categories->photo) }}" />
                        </div>
                        <div class="d-flex mt-3 justify-content-end">
                            <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back</a>
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
