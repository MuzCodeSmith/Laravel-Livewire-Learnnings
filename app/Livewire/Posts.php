<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class Posts extends Component
{
    public function render()
    {
        $posts = Post::paginate(10);
        return view('livewire.posts',['posts'=>$posts]);
    }

    public function deletePost($id){
        Post::destroy($id);
    }
}
