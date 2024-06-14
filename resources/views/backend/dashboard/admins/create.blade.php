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
                                <h3 class="mb-0">Add Admin</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admins.store') }}" method="POST">
                            @csrf
                            <h6 class="heading-small text-muted mb-4">Admin Information</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="name">Name</label>
                                            <input type="text" id="name" name="name" value="{{ old('name') }}" class="form-control" placeholder="Enter name">
                                            @error('name')
                                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="email">Email</label>
                                            <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Enter email">
                                            @error('email')
                                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="password">Password</label>
                                            <input type="password" id="password" name="password" class="form-control" placeholder="Enter password">
                                            @error('password')
                                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="password_confirmation">Confirm Password</label>
                                            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Enter confim password">
                                            @error('password_confirmation')
                                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="type">Admin Type</label>
                                            <select id="type" name="type" class="form-control">
                                                <option value="admin">Admin</option>
                                                <option value="super_admin">Super Admin</option>
                                            </select>
                                            @error('type')
                                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex mt-3 justify-content-end">
                                <a href="{{ route('admins.index') }}" class="btn btn-secondary">Back</a>
                                <button type="submit" class="btn btn-success ml-2">Add Admin</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
