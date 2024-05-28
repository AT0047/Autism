<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Component;
use Livewire\Attributes\On;

class LoadBooks extends Component
{
    public $amount = 4;
    public $load = 0;
    public $allBooks;
    public $categoryId;
    public $allBookss = [];
    public $books = [];
    public function loadMore()
    {
        $this->load++;
    }
    // #[On('loadBooks')]
    // public function render($categoryId)
    // {
    //     $books = Book::where('category_id',$categoryId)->offset($this->amount * $this->load)->limit($this->amount)->get();
    //     $this->allBooks = ($this->load == 0) ? $books : $this->allBooks->merge($books);
    //     return view('livewire.load-books', [
    //         'books' => $this->allBooks
    //     ]);
    // }

    // #[On('loadBooks')]
    // public function book($categoryId)
    // {
    //     $this->books = Book::where('category_id', $categoryId)->offset($this->amount * $this->load)->limit($this->amount)->get();
    //     $this->allBooks = ($this->load == 0) ? $this->books : $this->allBooks->merge($this->books);
    //     return view('livewire.load-books', ['books' => $this->books]);
    // }

    #[On('loadBooks')]
    public function book($categoryId)
    {
            $this->books = Book::where('category_id', $categoryId)->get();
            return view('livewire.load-books', ['books' => $this->books]);
    }
    public function render()
    {
        return view('livewire.load-books');
    }
}
