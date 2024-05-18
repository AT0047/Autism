<!-- Single Most Populer Item Start -->
<div class="col-lg-4">
    @forelse($books as $book)
        <div class="single-most-populer-item" data-aos="fade-up">
            <a href="blog-details.html" class="most-populer-thum">
                <img src="{{ asset('dashboard/img/' . $book->photo) }}" class="fixed-size-img" style="height: 200px" alt="" />
            </a>
            <div class="most-populer-content">
                <div class="most-populer-post-author">
                    By <a href="blog-details.html">{{ $book->author_name }}</a>
                </div>
                <h3 class="title"><a href="blog-details.html">{{ $book->name }}</a>
                </h3>
                <div class="most-populer-post-meta">
                    <span class="post-date">
                        <a href="blog-details.html">{{ $book->publication_date }}</a>
                    </span>
                </div>
            </div>
        </div>
    @empty
        No Category Selected Yet....
    @endforelse
</div>
