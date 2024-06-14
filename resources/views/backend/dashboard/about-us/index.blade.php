@extends('backend.dashboard.dashboard')

@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ isset($aboutUs) ? 'Edit About Us' : 'Create About Us' }}</div>

                    <div class="card-body">
                        @if (isset($aboutUs))
                            <form method="POST" action="{{ route('about-us.update', $aboutUs->id) }}" enctype="multipart/form-data">
                                @method('PUT')
                        @else
                            <form method="POST" action="{{ route('about-us.store') }}" enctype="multipart/form-data">
                        @endif
                        @csrf

                        <!-- Arabic Doctor's Name -->
                        <div class="form-group">
                            <label for="ar_drName">Doctor's Name (Arabic)</label>
                            <input type="text" class="form-control" id="ar_drName" name="ar_drName"
                                value="{{ old('ar_drName', isset($aboutUs) ? $aboutUs->ar_drName : '') }}" required>
                            @error('ar_drName')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- English Doctor's Name -->
                        <div class="form-group">
                            <label for="en_drName">Doctor's Name (English)</label>
                            <input type="text" class="form-control" id="en_drName" name="en_drName"
                                value="{{ old('en_drName', isset($aboutUs) ? $aboutUs->en_drName : '') }}" required>
                            @error('en_drName')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Arabic Job Specialization -->
                        <div class="form-group">
                            <label for="ar_job_specialization">Job Specialization (Arabic)</label>
                            <input type="text" class="form-control" id="ar_job_specialization" name="ar_job_specialization"
                                value="{{ old('ar_job_specialization', isset($aboutUs) ? $aboutUs->ar_job_specialization : '') }}" required>
                            @error('ar_job_specialization')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- English Job Specialization -->
                        <div class="form-group">
                            <label for="en_job_specialization">Job Specialization (English)</label>
                            <input type="text" class="form-control" id="en_job_specialization" name="en_job_specialization"
                                value="{{ old('en_job_specialization', isset($aboutUs) ? $aboutUs->en_job_specialization : '') }}" required>
                            @error('en_job_specialization')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Phone Number -->
                        <div class="form-group">
                            <label for="phone_number">Phone Number</label>
                            <input type="text" class="form-control" id="phone_number" name="phone_number"
                                value="{{ old('phone_number', isset($aboutUs) ? $aboutUs->phone_number : '') }}" required>
                            @error('phone_number')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                value="{{ old('email', isset($aboutUs) ? $aboutUs->email : '') }}" required>
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Arabic Title -->
                        <div class="form-group">
                            <label for="ar_title">Title (Arabic)</label>
                            <input type="text" class="form-control" id="ar_title" name="ar_title"
                                value="{{ old('ar_title', isset($aboutUs) ? $aboutUs->ar_title : '') }}" required>
                            @error('ar_title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- English Title -->
                        <div class="form-group">
                            <label for="en_title">Title (English)</label>
                            <input type="text" class="form-control" id="en_title" name="en_title"
                                value="{{ old('en_title', isset($aboutUs) ? $aboutUs->en_title : '') }}" required>
                            @error('en_title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- Arabic Address -->
                        <div class="form-group">
                            <label for="ar_address">Address (Arabic)</label>
                            <textarea class="form-control" id="ar_address" name="ar_address">{{ old('ar_address', isset($aboutUs) ? $aboutUs->ar_address : '') }}</textarea>
                            @error('ar_address')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- English Address -->
                        <div class="form-group">
                            <label for="en_address">Address (English)</label>
                            <textarea class="form-control" id="en_address" name="en_address">{{ old('en_address', isset($aboutUs) ? $aboutUs->en_address : '') }}</textarea>
                            @error('en_address')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Arabic Description -->
                        <div class="form-group">
                            <label for="ar_description">Description (Arabic)</label>
                            <textarea class="form-control" id="editor-ar" name="ar_description">{{ old('ar_description', isset($aboutUs) ? $aboutUs->ar_description : '') }}</textarea>
                            @error('ar_description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- English Description -->
                        <div class="form-group">
                            <label for="en_description">Description (English)</label>
                            <textarea class="form-control" id="editor-en" name="en_description">{{ old('en_description', isset($aboutUs) ? $aboutUs->en_description : '') }}</textarea>
                            @error('en_description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                             <!-- Arabic Footer Description -->
                             <div class="form-group">
                                <label for="ar_footer_description">Footer Description (Arabic)</label>
                                <textarea class="form-control" id="ar_footer_description" name="ar_footer_description">{{ old('ar_footer_description', isset($aboutUs) ? $aboutUs->ar_footer_description : '') }}</textarea>
                                @error('ar_footer_description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
    
                            <!-- English Footer Description -->
                            <div class="form-group">
                                <label for="en_footer_description">Footer Description (English)</label>
                                <textarea class="form-control" id="en_footer_description" name="en_footer_description">{{ old('en_footer_description', isset($aboutUs) ? $aboutUs->en_footer_description : '') }}</textarea>
                                @error('en_footer_description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        <!-- Doctor's Photo -->
                        <div class="form-group">
                            <label for="dr_photo">Doctor's Photo</label>
                            <input type="file" class="form-control-file" id="dr_photo" name="dr_photo"
                                {{ isset($aboutUs) ? '' : 'required' }}>
                            @if(isset($aboutUs->dr_photo))
                            <div style="max-width: 100px; overflow: hidden;">
                                <img src="{{ asset("storage/$aboutUs->dr_photo") }}" alt="Doctor's Photo" style="width: 100%; height: auto;">
                            </div>
                            @endif
                            @error('dr_photo')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="row">
                            <div>
                                <button type="submit" class="btn btn-primary">{{ isset($aboutUs) ? 'Update' : 'Submit' }}</button>
                            </div>
                        </form>
                            @if (isset($aboutUs))
                            <div class="col-md-1">
                                <form method="POST" action="{{ route('about-us.destroy', $aboutUs->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

