@extends('backend.dashboard.dashboard')
@section('content')
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Titles Section</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                <li class="breadcrumb-item active" aria-current="page">Titles Section</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                        @if ($titles->count() == 0)
                        <a href="{{ route('titles.create') }}" class="btn btn-sm btn-neutral">Add New</a>
                        @endif
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
                    <h3 class="mb-0">Titles Section</h3>
                </div>
                @if (session()->has('message'))
                    <div class="alert alert-success" role="alert">
                        <strong>{{ session('message') }}</strong>
                    </div>
                @endif
                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th class="sort" data-sort="ar_photo">Photo (Arabic)</th>
                                <th class="sort" data-sort="en_photo">Photo (English)</th>
                                <th class="sort" data-sort="en_photo">Home photo</th>
                                <th scope="col" class="sort" data-sort="ar_title">Title (Arabic)</th>
                                <th scope="col" class="sort" data-sort="en_title">Title (English)</th>
                                <th scope="col" class="sort" data-sort="ar_description">Description (Arabic)</th>
                                <th scope="col" class="sort" data-sort="en_description">Description (English)</th>
                                <th scope="col" class="sort" data-sort="actions">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            @forelse($titles as $title)
                                <tr>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <a class="avatar mr-3">
                                                <img width='60' height='48'
                                                    src="{{ asset('dashboard/img/' . $title->ar_photo) }}" />
                                                    
                                            </a>
                                        </div>
                                    </th>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <a class="avatar mr-3">
                                                <img width='60' height='48'
                                                    src="{{ asset('dashboard/img/' . $title->en_photo) }}" />
                                            </a>
                                        </div>
                                    </th>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <a class="avatar mr-3">
                                                <img width='60' height='48'
                                                    src="{{ asset('dashboard/img/' . $title->home_photo) }}" />
                                            </a>
                                        </div>
                                    </th>
                                    <td class="ar_title">
                                        {{ $title->ar_title }}
                                    </td>
                                    <td class="en_title">
                                        {{ $title->en_title }}
                                    </td>
                                    <td class="ar_description">
                                        {!! Str::limit($title->ar_description,15) !!}
                                    </td>
                                    <td class="en_description">
                                        {!! Str::limit($title->en_description,15) !!}
                                    </td>
                                    <td class="text-center">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item"
                                                    href="{{ route('titles.edit', $title->id) }}">Edit</a>
                                                <form method="post" action="{{ route('titles.destroy', $title->id) }}">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="dropdown-item">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <td colspan='7' style='text-align: center;'>
                                    No Data Yet....
                                </td>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <!-- Card footer -->
                {{-- <div class="card-footer py-4">
                    {{$titles->links('vendor.pagination.custom_pagination') }}
                </div> --}}
            </div>
        </div>
    </div>
@endsection
