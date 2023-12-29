<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class PostList extends Component
{
    use WithPagination;

    #[Url()]
    public $sort ='desc';
    public $searchValue = '';
    public function setSort($sort)
    {
        $this->sort=($sort==='desc'? 'desc': 'asc');
    }
    #[On('searchValue')]
    public function updateSearchValue($searchValue)
    {
        $this->searchValue=$searchValue;

    }
    public function removeValue()
    {
        $this->searchValue='';
    }
    #[Computed()]
    public function posts()
    {
        $posts = Post::orderBy('created_at', $this->sort)
            ->where(function ($query) {
                $query->where('title', 'like', "%{$this->searchValue}%")
                    ->orWhereHas('author', function ($subquery) {
                        $subquery->where('first_name', 'like', "%{$this->searchValue}%")
                            ->orWhere('last_name','like',"%{$this->searchValue}%");
                    });
            });
      //  $posts =Post::orderBy('created_at',$this->sort)->where('title','like',"%{$this->searchValue}%")->orWhere();
        return $posts->paginate(3);
    }
    public function render()
    {
        return view('livewire.post-list');
    }
}
