<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Library;
use Livewire\Component;

class LoadLibraryBooks extends Component
{
    public $id;
    public $amount = 2;
    public function loadMore()
    {
        $this->amount += 2;
    }

    public function render()
    {
        $libraryBooks = Library::where('id', $this->id)->with(['categories.books' => function($query){
            $query->take($this->amount);
        }])->get();
        return view('livewire.load-library-books', [
            'libraryBooks' =>  $libraryBooks
        ]);
    }
}
