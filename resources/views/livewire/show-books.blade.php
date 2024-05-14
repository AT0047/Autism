<div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-three text-center" data-aos="fade-up">
                    <h2 class="title">Category</h2>
                </div>
            </div>
        </div>
        <div class="row row--30">
            <div class="col-lg-4">
                <!-- Single Most Populer Item Start -->
                @foreach ($books as $book)
                    <div class="single-most-populer-item" data-aos="fade-up">
                        <a href="{{ route('Autism&Me.bookDetails', $book->id) }}" class="most-populer-thum">
                            <img src="{{ asset('dashboard/img/' . $book->photo) }}" alt="" />
                        </a>
                        <div class="most-populer-content">
                            <div class="most-populer-post-author">
                                By <a
                                    href="{{ route('Autism&Me.bookDetails', $book->id) }}">{{ $book->author_name }}</a>
                            </div>
                            <h3 class="title"><a
                                    href="{{ route('Autism&Me.bookDetails', $book->id) }}">{{ $book->name }}</a>
                            </h3>
                            <div class="most-populer-post-meta">
                                <span class="post-date">
                                    <a
                                        href="{{ route('Autism&Me.bookDetails', $book->id) }}">{{ $book->publication_date }}</a>
                                </span>
                            </div>
                        </div>
                    </div><!-- Single Most Populer Item End -->
                @endforeach
            </div>
        </div>
    </div>
</div>
