<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class LibraryView extends Component
{
    public $categories; 
    public $categoryId;

    public function render()
    {
        $this->categories = Category::all();
        foreach($this->categories as $category){
            $this->categoryId = $category->id;
        }
        $this->dispatch('loadBooks', $this->categoryId);
        return view('livewire.library-view', [
            'categories' => $this->categories
        ]);
    }
}
