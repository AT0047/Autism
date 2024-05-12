@extends('backend.dashboard.dashboard')

@section('content')
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">About Photos Section</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                <li class="breadcrumb-item active" aria-current="page">About Photos Section</li>
                            </ol>
                        </nav>
                    </div>
                    @if (!isset($aboutPhoto))
                        <div class="col-lg-6 col-5 text-right">
                            <a href="{{ route('about-photos.create') }}" class="btn btn-sm btn-neutral">Add New</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header border-0">
                    <h3 class="mb-0">About Photos Section</h3>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Section 1 Video</th>
                                <th scope="col">Section 1 Photo</th>
                                <th scope="col">Section 2 Photo</th>
                                <th scope="col">Section 4 Photo</th>
                                <th scope="col">Logo</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (isset($aboutPhoto))
                                <tr>
                                    <td>
                                        <video controls width="150">
                                            <source src="{{ asset('storage/' . $aboutPhoto->sec1_video) }}" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    </td>
                                    <td><img src="{{ asset('storage/' . $aboutPhoto->sec1_photo) }}" alt="Section 1 Photo"
                                            class="img-fluid" style="max-width: 100px;"></td>
                                    <td><img src="{{ asset('storage/' . $aboutPhoto->sec2_photo) }}" alt="Section 2 Photo"
                                            class="img-fluid" style="max-width: 100px;"></td>
                                    <td><img src="{{ asset('storage/' . $aboutPhoto->sec4_photo) }}" alt="Section 4 Photo"
                                            class="img-fluid" style="max-width: 100px;"></td>
                                    <td><img src="{{ asset('storage/' . $aboutPhoto->logo) }}" alt="Logo"
                                            class="img-fluid" style="max-width: 100px;"></td>
                                    <td>
                                        <a href="{{ route('about-photos.edit', $aboutPhoto->id) }}"
                                            class="btn btn-primary btn-sm">Edit</a>
                                    </td>
                                </tr>
                            @else
                                <tr class="text-center">
                                    <td colspan="6">No data available.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                <div class="card-footer py-4">
                    <!-- Pagination links here -->
                </div>
            </div>
        </div>
    </div>
@endsection