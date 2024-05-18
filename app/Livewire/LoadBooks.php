<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Component;

class LoadBooks extends Component
{
    public $amount = 4;
    public $load = 0;
    public $allBooks;
    public function loadMore()
    {
        $this->load++;
    }
    public function render()
    {
        $books = Book::offset($this->amount * $this->load)->limit($this->amount)->get();
        $this->allBooks = ($this->load == 0) ? $books : $this->allBooks->merge($books);
        return view('livewire.load-books', [
            'books' => $this->allBooks
        ]);
    }
}
