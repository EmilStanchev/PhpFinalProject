<?php

namespace App\Livewire;

use Livewire\Component;

class SearchBox extends Component
{
    public $searchValue ='';

    public function  setSearchValue()
    {
        $this->dispatch('searchValue',searchValue: $this->searchValue);
    }
    public function render()
    {
        return view('livewire.search-box');
    }
}
