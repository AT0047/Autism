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
                    <form action="{{ route('book-questions.update', $bookQuestion->id) }}" method="POST">
                        @csrf
                        @method('patch')
                        <h6 class="heading-small text-muted mb-4">Information</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Arabic Question</label>
                                        <input type="text" value="{{ old('ar_question', $bookQuestion->ar_question) }}" name="ar_question"
                                            class="form-control" placeholder="Write your Arabic Question here">
                                        @error('ar_question')
                                            <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">English Question</label>
                                        <input type="text" value="{{ old('en_question', $bookQuestion->en_question) }}" name="en_question"
                                            class="form-control" placeholder="Write your English Question here">
                                        @error('en_question')
                                            <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pl-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Arabic Answer</label>
                                <textarea id="editor-ar" name="ar_answer" rows="5" class="form-control" placeholder="Enter Arabic Answer">{{ old('ar_answer', $bookQuestion->ar_answer) }}</textarea>
                                @error('ar_answer')
                                    <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="pl-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">English Answer</label>
                                <textarea id="editor-en" name="en_answer" rows="5" class="form-control" placeholder="Enter English Answer">{{ old('en_answer', $bookQuestion->en_answer) }}</textarea>
                                @error('en_answer')
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
