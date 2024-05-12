@extends('backend.dashboard.dashboard')
@section('content')
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">About Section 3</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                <li class="breadcrumb-item active" aria-current="page">About Section three</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                        <a href="{{ route('about-sec3.create') }}" class="btn btn-sm btn-neutral">Add New</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h3 class="mb-0">About Section 3</h3>
                </div>
                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th class="sort" data-sort="photo">Photo</th>
                                <th scope="col" class="sort" data-sort="title">Title</th>
                                <th scope="col" class="sort" data-sort="description">Description</th>
                                <th scope="col" class="sort" data-sort="created_at">Created At</th>
                                <th scope="col" class="sort" data-sort="updated_at">Updated At</th>
                                <th scope="col" class="sort" data-sort="actions">Actions</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            @forelse($aboutSec3Items as $aboutSec3)
                                <tr>
                                    <td class="photo">
                                        <div class="media align-items-center">
                                            <a href="#" class="avatar  mr-3">
                                                <img width="60" height="48" src="{{ asset("storage/$aboutSec3->photo") }}" />
                                            </a>
                                        </div>
                                    </td>
                                    <td class="title">
                                        {{ $aboutSec3->title }}
                                    </td>
                                    <td class="description">
                                        {{ $aboutSec3->description }}
                                    </td>
                                    <td class="created_at">
                                        {{ $aboutSec3->created_at->diffForHumans() }}
                                    </td>
                                    <td class="updated_at">
                                        {{ $aboutSec3->updated_at->diffForHumans() }}
                                    </td>
                                    <td class="text-right actions">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item" href="{{ route('about-sec3.edit', $aboutSec3->id) }}">Edit</a>
                                                <form action="{{ route('about-sec3.destroy', $aboutSec3->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="dropdown-item">Delete</button>
                                                </form>
                                                <!-- Add other actions as needed -->
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr class="text-center">
                                    <td colspan="7">No data available</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <!-- Card footer -->
                <div class="card-footer py-4">
                    {{-- {{ $aboutSec3Items->links('vendor.pagination.custom_pagination') }} --}}
                </div>
            </div>
        </div>
    </div>
@endsection
