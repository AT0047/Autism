<div>
    <div class="archive-post-thum">
        <a href="#cateogry"
            wire:click="$dispatch('loadBooks', {categoryId: {{ $libraryCategory->id }} })">
            <img src="{{ asset('dashboard/img/' . $libraryCategory->photo) }}" alt="">
        </a>
    </div>
</div>
