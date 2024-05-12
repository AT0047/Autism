<div>
    <div class="col-lg-6 col-md-6">
        <!-- Single Most Populer Item Start -->
        @foreach($books as $book)
            <div class="single-most-populer-item" data-aos="fade-up">
                <a href="blog-details.html" class="most-populer-thum">
                    <img src="{{asset('dashboard/img/'. $book->photo)}}" alt="" />
                </a>
                <div class="most-populer-content">
                    <div class="most-populer-post-author">
                        By <a href="blog-details.html">{{$book->author_name}}</a>
                    </div>
                    <h3 class="title"><a href="blog-details.html">{{$book->name}}</a>
                    </h3>
                    <p class="dec mt-2">{{$book->content}}</p>
                    <div class="most-populer-post-meta">
                        <span class="post-date">
                            <a href="blog-details.html">{{$book->publication_date}}</a>
                        </span>
                        {{-- <span>10 min read</span> --}}
                    </div>
                </div>
            </div><!-- Single Most Populer Item End -->
        @endforeach
    </div>
</div>
