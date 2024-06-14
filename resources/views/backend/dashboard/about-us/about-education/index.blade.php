@extends('backend.dashboard.dashboard')

@section('content')
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">About Education Section</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                <li class="breadcrumb-item active" aria-current="page">About Education Section</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                        <a href="{{ route('about-education.create') }}" class="btn btn-sm btn-neutral">Add New</a>
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
                    <h3 class="mb-0">About Education Section</h3>
                </div>
                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th class="sort" data-sort="title">Title (Arabic)</th>
                                <th class="sort" data-sort="title">Title (English)</th>
                                <th class="sort" data-sort="place">Place (Arabic)</th>
                                <th class="sort" data-sort="place">Place (English)</th>
                                <th class="sort" data-sort="date">Date</th>
                                <th class="sort" data-sort="description">Description (Arabic)</th>
                                <th class="sort" data-sort="description">Description (English)</th>
                                {{-- <th scope="col" class="sort" data-sort="created_at">Created At</th> --}}
                                {{-- <th scope="col" class="sort" data-sort="updated_at">Updated At</th> --}}
                                <th class="sort" data-sort="actions">Actions</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            @forelse($about_education as $education)
                                <tr>
                                    <td>{{ $education->ar_title }}</td>
                                    <td>{{ $education->en_title }}</td>
                                    <td>{{ $education->ar_place }}</td>
                                    <td>{{ $education->en_place }}</td>
                                    <td>{{ $education->date }}</td>
                                    <td>{!! Str::limit($education->ar_description, 15) !!}</td>
                                    <td>{!! Str::limit($education->en_description, 15) !!}</td>
                                    {{-- <td class="created_at">
                                        {{ $education->created_at->diffForHumans() }}
                                    </td>
                                    <td class="updated_at">
                                        {{ $education->updated_at->diffForHumans() }}
                                    </td> --}}
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-light dropdown-toggle"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item"
                                                    href="{{ route('about-education.edit', $education->id) }}">Edit</a>
                                                <form action="{{ route('about-education.destroy', $education->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="dropdown-item">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr class="text-center">
                                    <td colspan="10">No data available</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <!-- Card footer -->
                <div class="card-footer py-4">
                    {{-- {{$about_education->links('vendor.pagination.custom_pagination')}} --}}
                </div>
            </div>
        </div>
    </div>
@endsection
