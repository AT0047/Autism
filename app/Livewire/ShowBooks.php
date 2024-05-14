<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class ShowBooks extends Component
{
    public $category = '';
    public $books = [];

    public function loadBooks($categoryId){
        $this->category = Category::findOrFail($categoryId);
        $this->books = $this->category->books();
        dd($this->books);
    }   

    public function render()
    {
        return view('livewire.show-books');
    }
}
