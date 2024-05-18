<div>
    <div class="row row--30">
        @foreach ($libraryBooks as $preferred_lib)
            @foreach ($preferred_lib->categories as $preferred_cate)
                @forelse ($preferred_cate->books as $preferred_Book)
                    <div class="col-lg-6 col-md-6">
                        <!-- Single Most Populer Item Start -->
                        <div class="single-most-populer-item" >
                            <a href="{{ route('Autism&Me.bookDetails', $preferred_Book->id) }}" class="most-populer-thum">
                                <img src="{{ asset('dashboard/img/' . $preferred_Book->photo) }}" class="fixed-size-img" style="height:200px" alt="" />
                            </a>
                            <div class="most-populer-content">
                                <div class="most-populer-post-author">
                                    By <a
                                        href="{{ route('Autism&Me.bookDetails', $preferred_Book->id) }}">{{ $preferred_Book->author_name }}</a>
                                </div>
                                <h3 class="title"><a
                                        href="{{ route('Autism&Me.bookDetails', $preferred_Book->id) }}">{{ $preferred_Book->name }}</a>
                                </h3>
                                {{-- <p class="dec mt-2">{!! Str::limit($preferred_Book->content, 15)  !!}</p> --}}
                                <div class="most-populer-post-meta">
                                    <span class="post-date">
                                        <a
                                            href="{{ route('Autism&Me.bookDetails', $preferred_Book->id) }}">{{ $preferred_Book->publication_date }}</a>
                                    </span>
                                    {{-- <span>10 min read</span> --}}
                                </div>
                            </div>
                        </div><!-- Single Most Populer Item End -->
                    </div>
                @empty
                    {{-- No Books Yet... --}}
                @endforelse
            @endforeach
        @endforeach
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="button-box text-center mt-5" data-aos="fade-up">
                <button id="show-more-btn" type="button" wire:click='loadMore' class="btn-large btn-bg-5-primary  btn-primary"
                    style="background-color: red;"> Show More <i class="icofont-long-arrow-right"></i>
                </button>
            </div>
        </div>
    </div>
</div>
