<div>

    <div class="archive-post-wrap mt-5" id="Category">
        <div class="section-title">
            <h4>Category</h4>
        </div>
        <!-- Single Archive Post Start -->
        @foreach ($categories as $category)
            <div class="single-archive-post" >
                <div class="archive-post-thum">
                    <a href="#category" id='category1'
                        wire:click="$dispatch('loadBooks', {categoryId: {{ $category->id }} })">
                        <img src="{{ asset('dashboard/img/' . $category->photo) }}" class="fixed-size-img"
                            style="height: 120px;width: 150px;" alt="">
                    </a>
                </div>
                <div class="archive-post-content">
                    <h6 class="title"><a href="#category"
                            wire:click="$dispatch('loadBooks', {categoryId: {{ $category->id }} })">{{ $category->{app()->getLocale().'_name'} }}</a>
                    </h6>
                    <div class="archive-post-meta">
                        {{-- <span class="post-date">
                            <i class="icofont-ui-calendar"></i>
                            <a href="#category"
                                wire:click="$dispatch('loadBooks', {categoryId: {{ $category->id }} })">{{ $category->created_at }}</a>
                        </span> --}}
                        {{-- <span>10 min read</span> --}}
                    </div>
                </div>
            </div><!-- Single Archive Post End -->
        @endforeach
    </div>
    <div class="archive-search-wrap">
        <div class="section-title">
            <h4>Search Here</h4>
        </div>
        <div class="archive-search-box">
            <input class="search-input" wire:model.live.debounce.300ms="searchItem" type="text" placeholder="Search Here">
            <button class="search-button" type="button"><i class="icofont-search-1"></i></button>
        </div>
    </div>
</div>
