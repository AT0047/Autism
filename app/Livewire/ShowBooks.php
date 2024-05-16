<?php

namespace App\Livewire;

use App\Models\Book;
use App\Models\Category;
use Livewire\Component;
use Livewire\Attributes\On;

class ShowBooks extends Component
{
    public $categoryId;
    public $books = [];

    #[On('loadBooks')]
    public function book($categoryId){
        $this->books = Book::where('category_id',$categoryId)->get();
        return view('livewire.show-books' , [
            'books' => $this->books
        ]);
    }
    public function render()
    {   
        return view('livewire.show-books');
    }
}
