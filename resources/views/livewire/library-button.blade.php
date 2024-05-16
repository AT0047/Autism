<div>
    <h6 class="title"><a href="#cateogry"
            wire:click="$dispatch('loadBooks', {categoryId: {{ $libraryCategory->id }} })">{{ $libraryCategory->name }}</a>
    </h6>
</div>
