<div>
    <div class="row row--30">
        @foreach ($books as $book)
            <div class="col-lg-6 col-md-6">
                <!-- Single Most Populer Item Start -->
                <div class="single-most-populer-item">
                    <a href="{{ route('Autism&Me.bookDetails', $book->id) }}" class="most-populer-thum">
                        <img src="{{ asset('dashboard/img/' . $book->photo) }}" alt="" />
                    </a>
                    <div class="most-populer-content">
                        <div class="most-populer-post-author">
                            By <a href="{{ route('Autism&Me.bookDetails', $book->id) }}">{{ $book->author_name }}</a>
                        </div>
                        <h3 class="title"><a
                                href="{{ route('Autism&Me.bookDetails', $book->id) }}">{{ $book->name }}</a>
                        </h3>
                        {{-- <p class="dec mt-2">{!! Str::limit($book->content, 15)  !!}</p> --}}
                        <div class="most-populer-post-meta">
                            <span class="post-date">
                                <a
                                    href="{{ route('Autism&Me.bookDetails', $book->id) }}">{{ $book->publication_date }}</a>
                            </span>
                            {{-- <span>10 min read</span> --}}
                        </div>
                    </div>
                </div><!-- Single Most Populer Item End -->
            </div>
        @endforeach
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="button-box text-center mt-5" data-aos="fade-up">
                <button id="show-more-btn" type="button"  wire:click='loadMore' class="btn-large btn-bg-5-primary  btn-primary"
                    style="background-color: red;"> Show More <i class="icofont-long-arrow-right"></i>
                </button>
            </div>
        </div>
    </div>
</div>
