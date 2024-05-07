@extends('backend.dashboard.dashboard')
@section('content')
    <div class="row">
        <div class="col-xl-10 order-xl-1">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Edit A Question Information</h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{route('book-questions.update', $bookQuestion->id)}}" method ="POST">
                        @csrf
                        @method('patch')
                        <h6 class="heading-small text-muted mb-4">Information</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-username">Question</label>
                                            <input type="text" value="{{ old('question',$bookQuestion->question) }}" name="question"
                                                class="form-control" placeholder="Write your Question here">
                                            @error('question')
                                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pl-lg-4 ">
                                <div class="form-group ">
                                    <label class="form-control-label ">Answer</label>
                                    <textarea id="postContent" name="answer" rows="19" class="form-control " placeholder="Enter post title">{{ old('answer', $bookQuestion->answer) }}</textarea>
                                    @error('answer')
                                        <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        <div class="d-flex mt-3 justify-content-end">
                            <a href="{{ route('books.book-questions.index', $bookQuestion->book_id) }}" class="btn btn-secondary">Back</a>
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
