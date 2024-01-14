<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class LikeButton extends Component
{
    public Post $post;
    public function mount(Post $post)
    {
        $this->post = $post;
    }
    public function like()
    {
        if (auth()->guest())
        {
            return $this->redirect(ruote('login'),true);
        }
        $user = auth()->user();
        $hasLiked = $user->isItLiked($this->post);
        if ($hasLiked)
        {
            $user->likes()->detach($this->post);
            return ;
        }
        $user->likes()->attach($this->post);
    }
    public function render()
    {
        return view('livewire.like-button');
    }
}
