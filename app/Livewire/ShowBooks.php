<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class ShowBooks extends Component
{
    public $category;
    public $books = [];

    public function mount($categoryId = null)
    {
        if ($categoryId) {
            $this->loadBooks($categoryId);
        }
    }
    public function loadBooks($categoryId)
    {
        $this->category = Category::with('books')->find($categoryId);
        $this->books = $this->category->books;
    }

    public function render()
    {
        return view('livewire.show-books');
    }
}
