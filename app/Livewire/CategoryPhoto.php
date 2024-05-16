<?php

namespace App\Livewire;

use Livewire\Component;

class CategoryPhoto extends Component
{
    public $libraryCategory;
    public function mount($libraryCategory){
        $this->libraryCategory = $libraryCategory;
    }
    
    public function render()
    {
        return view('livewire.category-photo');
    }
}
