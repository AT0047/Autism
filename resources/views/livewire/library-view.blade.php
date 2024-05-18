<div>
    <div class="archive-post-wrap mt-5" id="Category">
        <div class="section-title" data-aos="fade-up">
            <h4>Category</h4>
        </div>
        <!-- Single Archive Post Start -->
        @foreach ($categories as $category)
            <div class="single-archive-post" data-aos="fade-up">
                <div class="archive-post-thum">
                    <a href="#category" wire:click="$dispatch('loadBooks', {categoryId: {{ $category->id }} })">
                        <img src="{{ asset('dashboard/img/' . $category->photo) }}" class="fixed-size-img" style="height: 200px" alt="">
                    </a>
                </div>
                <div class="archive-post-content">
                    <h6 class="title"><a href="#category" wire:click="$dispatch('loadBooks', {categoryId: {{ $category->id }} })">{{ $category->name }}</a>
                    </h6>
                    <div class="archive-post-meta">
                        <span class="post-date">
                            <i class="icofont-ui-calendar"></i>
                            <a href="#category" wire:click="$dispatch('loadBooks', {categoryId: {{ $category->id }} })">{{ $category->created_at }}</a>
                        </span>
                        {{-- <span>10 min read</span> --}}
                    </div>
                </div>
            </div><!-- Single Archive Post End -->
        @endforeach
    </div>
</div>
