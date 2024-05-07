@extends('backend.dashboard.dashboard')
@section('content')
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Book Questions</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                <li class="breadcrumb-item active" aria-current="page">Book Questions</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                        <a href="{{route('books.book-questions.create', $questions->first()->book->id  ?? $id) }}" class="btn btn-sm btn-neutral">Add New</a>
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
                    <h3 class="mb-0">Book - {{$questions->first()->book->name}} - Questions</h3>
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
                                {{-- <th scope="col" class="sort" data-sort="book_name">Book Name</th> --}}
                                <th scope="col" class="sort" data-sort="questions">Question</th>
                                <th scope="col" class="sort" data-sort="answers">Answer</th>
                                <th scope="col" class="sort" data-sort="Created At">Created At</th>
                                <th scope="col" class="sort" data-sort="Updated At">Updated At</th>
                                <th scope="col" class="sort" data-sort="Actions">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            @forelse($questions as $key => $question)
                                <tr>
                                    {{-- <td class="book_name">
                                        {{ $question->book->name }}
                                    </td> --}}
                                    <td class="book_name">
                                        {{ $question->question }}
                                    </td>
                                    <td class="Links">
                                        {!! Str::limit($question->answer, 15)  !!}
                                    </td>
                                    <td class="Created At">
                                        {{ $question->created_at->diffForHumans() }}
                                    </td>
                                    <td class="Updated At">
                                        {{ $question->updated_at->diffForHumans() }}
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item"
                                                    href="{{route('book-questions.edit', $question->id)}}">Edit</a>
                                                <form method="post"
                                                    action="{{route('book-questions.destroy', $question->id)}}">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="dropdown-item">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <td class="Updated At" colspan='7' style='text-align: center;'>
                                    No Data Yet....
                                </td>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <!-- Card footer -->
                <div class="card-footer py-4">
                    {{ $questions->links('vendor.pagination.custom_pagination') }}
                </div>
            </div>
        </div>
    </div>
@endsection
