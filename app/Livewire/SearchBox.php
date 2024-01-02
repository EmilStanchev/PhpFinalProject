<?php

namespace App\Livewire;

use Livewire\Component;

class SearchBox extends Component
{
    public $searchValue ='';
    public $authorValue ='';

    public function  setSearchValue()
    {
        $this->dispatch('searchValue',searchValue: $this->searchValue);
    }
    public function  setAuthorValue()
    {
        $this->dispatch('authorValue',authorValue: $this->authorValue);
    }
    public function render()
    {
        return view('livewire.search-box');
    }
}
