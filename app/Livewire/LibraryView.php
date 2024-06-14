<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class LibraryView extends Component
{
    public $categoryId;
    public $searchItem = '';

    public function render()
    {
        $categories = Category::query()->where(app()->getLocale().'_name', 'like', '%' . $this->searchItem . '%')->get();
        foreach($categories as $category){
            $this->categoryId = $category->id;
        }
        $this->dispatch('loadBooks', $this->categoryId);
        return view('livewire.library-view', [
            'categories' => $categories
        ]);
    }
}
