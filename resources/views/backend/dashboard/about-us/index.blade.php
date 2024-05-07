@extends('backend.dashboard.dashboard')

@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ isset($aboutUs) ? 'Edit About Us' : 'Create About Us' }}</div>

                    <div class="card-body">
                        {{-- @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif --}}
                        @if (isset($aboutUs))
                            <form method="POST" action="{{ route('about-us.update', $aboutUs->id) }}"
                                enctype="multipart/form-data">
                                @method('PUT')
                        @else
                            <form method="POST" action="{{ route('about-us.store') }}" enctype="multipart/form-data">
                        @endif
                        @csrf

                        <div class="form-group">
                            <label for="dr_name">Doctor's Name</label>
                            <input type="text" class="form-control" id="dr_name" name="dr_name"
                                value="{{ old('dr_name', isset($aboutUs) ? $aboutUs->dr_name : '') }}" required>
                            @error('dr_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="job_specialization">Job Specialization</label>
                            <input type="text" class="form-control" id="job_specialization" name="job_specialization"
                                value="{{ old('job_specialization', isset($aboutUs) ? $aboutUs->job_specialization : '') }}" required>
                            @error('job_specialization')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="phone_number">Phone Number</label>
                            <input type="text" class="form-control" id="phone_number" name="phone_number"
                                value="{{ old('phone_number', isset($aboutUs) ? $aboutUs->phone_number : '') }}" required>
                            @error('phone_number')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                value="{{ old('email', isset($aboutUs) ? $aboutUs->email : '') }}" required>
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title"
                                value="{{ old('title', isset($aboutUs) ? $aboutUs->title : '') }}" required>
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" name="description">{{ old('description', isset($aboutUs) ? $aboutUs->description : '') }}</textarea>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="dr_photo">Doctor's Photo</label>
                            <input type="file" class="form-control-file" id="dr_photo" name="dr_photo"
                                {{ isset($aboutUs) ? '' : 'required' }}>
                            @if(isset($aboutUs->dr_photo))
                            <div style="max-width: 100px; overflow: hidden;">
                                <img src="{{ asset("storage/$aboutUs->dr_photo") }}" alt="Category Photo" style="width: 100%; height: auto;">
                            </div>
                            @endif
                            @error('dr_photo')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">{{ isset($aboutUs) ? 'Update' : 'Submit' }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
