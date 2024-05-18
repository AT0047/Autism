<div>
    <div class="archive-post-thum">
        <a href="#cateogry"
            wire:click="$dispatch('loadBooks', {categoryId: {{ $libraryCategory->id }} })">
            <img src="{{ asset('dashboard/img/' . $libraryCategory->photo) }}" class="fixed-size-img" style="height: 200px" alt="">
        </a>
    </div>
</div>
